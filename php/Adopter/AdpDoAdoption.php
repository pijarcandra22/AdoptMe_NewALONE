<?php 
    // SKIP DULU GAISS
    // DEBUGGING ZONE
    $id                 = $_POST['id_adopt'];
    $banyakAdopt        = $_POST['banyak_adopt'];
    $namaTanaman        = $_POST['namaTanaman'];
    $pengelolaTanaman   = $_POST['pengelolaTanaman'];
    $email              = $_POST['email'];
    // DEBUGGING ZONE
    // 2. Lakukan Adopsi
    include "../GlobalFun.php";

    $sql = "UPDATE `tb_tanaman` SET `status`='waiting',`id_adopter`=$id, `tanggal_transaksi` =  NOW() WHERE nama_tanaman = '$namaTanaman' AND id_pengelola = '$pengelolaTanaman' AND `status`='' ORDER BY `id_tanaman` DESC LIMIT $banyakAdopt";
    mysqli_query($conn, $sql);
    $sql = "SELECT ta.*, pe.nama_pengelola FROM `tb_tanaman` AS ta LEFT JOIN `tb_pengelola` AS pe 
            USING (id_pengelola) WHERE ta.`id_adopter`=$id AND ta.`status` = 'waiting'";
    $readTable  = mysqli_query($conn, $sql);
    $totalBayar = 0;
    $table ='<table>
                <tr>
                    <th>id Tanaman</th>
                    <th>Nama Tanaman</th>
                    <th>Nama Pengelola</th>
                    <th>Biaya Adopsi</th>
                </tr>';
    while ($getTableData = mysqli_fetch_assoc( $readTable )){
        $table .="<tr>
                    <td>".$getTableData['id_tanaman']."</td>
                    <td>".$getTableData['nama_tanaman']."</td>
                    <td>".$getTableData['nama_pengelola']."</td>
                    <td>".$getTableData['harga']."</td>
                </tr>";
        $totalBayar += (int)$getTableData['harga'];
    };
    $table .= '<tr><td colspan="3" style="border-top:solid 1px black">Biaya Total</td><td style="border-top:solid 1px black">'.$totalBayar.'</td></tr>';
    $table .= '</table>';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require '../../vendor/autoload.php';
    $mail = new PHPMailer(true);
    
    try {
        $mail->SMTPDebug = 0;                                       
        $mail->isSMTP();
        $mail->Mailer     = 'smtp';                                      
        $mail->Host       = 'smtp.gmail.com';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'adoptmeindonesia2022@gmail.com';                 
        $mail->Password   = 'adoptme2022';                        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                              
        $mail->Port       = 587;  
    
        $mail->setFrom('adoptmeindonesia2022@gmail.com', 'AdoptMe Admin');           
        $mail->addAddress($email);
         
        $mail->isHTML(true);                                  
        $mail->Subject = 'Subject';
        $mail->Body    = 'Your adoption successfull. Please Transfer to Permata Bank: 01237816664/Lavandaia Dharma Bal(IDR), Please click this link to send your evidence of transfer<br>';
        $mail->Body   .= $table;
        $mail->Body   .= '<br><a href="https://adoptplant.com/pay_page.php?id='.$id.'" style=" margin:10px 0; background-color:#12491E;padding: 10px 20px; color:white; border-radius:10px !important;">UPLOAD BUKTI PEMBAYARAN</a><br>';
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        echo "1";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
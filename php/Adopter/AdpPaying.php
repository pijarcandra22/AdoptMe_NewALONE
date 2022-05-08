<?php
    include "../GlobalFun.php";
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $id         = $_POST['id'];
    $image      = uploadImage('gambar',"../../image/bukti_bayar/");
    $sql = "UPDATE `tb_tanaman` SET `status`='terbayar',`bukti_bayar`='$image',`tanggal_transaksi` = NOW() WHERE `id_tanaman` IN ($id) AND `id_adopter` != 0";
    $report=mysqli_query($conn, $sql);
    if ($report === TRUE){
        echo "Pembayaran Sukses";
    }else{
        echo "Pembayaran Gagal";
    }
?>
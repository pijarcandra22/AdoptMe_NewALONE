<?php
    include "../GlobalFun.php";
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "UPDATE tb_tanaman SET `status` = '', id_adopter = 0
            WHERE DATEDIFF(tb_tanaman.tanggal_transaksi,CURDATE())<0
            AND `status` = 'waiting';";
    mysqli_query($conn, $sql);

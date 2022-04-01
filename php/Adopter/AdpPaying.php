<?php
    include "../GlobalFun.php";
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $id         = $_POST['id'];
    $image      = uploadImage('gambar',"../../image/bukti_bayar/");
    $sql = "UPDATE `tb_tanaman` SET `status`='terbayar',`bukti_bayar`='$image' WHERE `id_tanaman` IN ($id) AND `id_adopter` != 0";
    $conn -> query($sql);
    echo "Sukses";
?>
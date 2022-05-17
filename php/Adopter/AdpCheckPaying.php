<?php
    include "../GlobalFun.php";
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $id         = $_GET['id'];
    $sql = "SELECT * FROM tb_tanaman WHERE `status` = 'waiting' AND `id_adopter` = $id";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
?>
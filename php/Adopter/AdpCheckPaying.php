<?php
    include "../GlobalFun.php";
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $id         = $_GET['id'];
    $sql = "SELECT * FROM tb_tanaman WHERE `id_tanaman` IN ($id)";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
?>
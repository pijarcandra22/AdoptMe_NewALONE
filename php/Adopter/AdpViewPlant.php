<?php
    include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\php\GlobalFun.php";
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "SELECT ta.*, pe.nama_pengelola FROM `tb_tanaman` AS ta LEFT JOIN `tb_pengelola` AS pe USING (id_pengelola) WHERE ta.`status` = '' GROUP BY ta.nama_tanaman";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
?>
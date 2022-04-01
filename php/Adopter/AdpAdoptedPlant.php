<?php
    include "../GlobalFun.php";
    global $conn;
    $id = $_GET['id'];
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "SELECT * FROM `tb_tanaman` AS tanam LEFT JOIN tb_data_perwatan AS rawat USING(id_tanaman)
            WHERE tanam.id_adopter = $id AND tanam.`status` = 'adopsi' 
            AND rawat.id_perawatan IS NOT NULL;";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
?>
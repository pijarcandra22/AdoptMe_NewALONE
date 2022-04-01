<?php 
    include "../GlobalFun.php";

    
    if (isset($_GET["action"])){
        if ($_GET['action'] == "get-report") return getFullData($_GET['id']);
    }

    if ( !empty($_POST['action']) ) {
        if ($_POST['action'] == "update-report") return updateReport();
    }    

    function updateReport(){
        global $conn;

        $status     = $_POST['status_report'];
        $id_report  = $_POST['id_perawatan'];
        $sql        = "UPDATE `tb_data_perwatan` SET `status_pembayaran`= '$status' WHERE `id_perawatan`= $id_report";
        $conn -> query($sql);
    }

    function getFullData($id_pengelola){
        global $conn;
        $sql            = "SELECT tt.id_adopter, dp.*, tt.nama_tanaman, tp.nama_petani FROM `tb_data_perwatan` AS dp
                        LEFT JOIN tb_petani AS tp USING(id_petani) LEFT JOIN tb_tanaman AS tt USING(id_tanaman)
                        WHERE dp.id_pengelola = $id_pengelola";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }
?>
<?php
    include "../GlobalFun.php";

    // DEBUGGING ZONE
    
    // Register / Sign Up   => SUKSESS
    // Login / Sign In      => SUKSESS - Set session feature not created yet
    // Update Prof          => SUKSESS
    
    // DEBUGGING ZONE 
    if (isset($_GET["action"])){
        if ($_GET['action'] == "need_report") return NeedReport($_GET['id']);
        if ($_GET['action'] == "all_report") return AllReport($_GET['id']);
    }
    if ( !empty($_POST['action']) ) {
        if ($_POST['action'] == "sign-in-farmer") return farmerSignIn();
    }
    
    function farmerSignIn() {
        global $conn;
    
        $username = explode("-",htmlspecialchars($_POST["username"]));
        $sql = "SELECT tb_petani.* FROM `tb_petani` WHERE id_petani = '".$username[0]."' AND id_pengelola = '".$username[1]."' AND nama_petani = '".$username[2]."';";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);
        if($data){
            echo json_encode($data);
        }else{
            echo "2";
        }
    }
    function NeedReport($id) {
        global $conn;
    
        $sql = "SELECT * FROM `tb_tanaman` WHERE id_petani = '$id' AND `status` = 'adopsi';";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }

    function AllReport($id){
        global $conn;
        $id = $_GET['id'];
        // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
        $sql = "SELECT * FROM `tb_tanaman` AS tanam LEFT JOIN tb_data_perwatan AS rawat USING(id_tanaman)
                WHERE tanam.id_petani = $id AND tanam.`status` = 'adopsi' 
                AND rawat.id_perawatan IS NOT NULL;";
        $readTable = mysqli_query($conn, $sql);
        $rows = array();
        while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
        echo json_encode($rows);
    }
?>
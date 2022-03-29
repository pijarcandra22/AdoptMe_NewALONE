<?php 
include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\php\GlobalFun.php";

if ( !empty($_GET['action']) ) {
    if ($_GET['action'] == "adopt-payment") return adoptPayment();
    if ($_GET['action'] == "farmer-pay") return farmerPay();
    if ($_GET['action'] == "manager-see") return readAllManager();
}

if ( !empty($_POST['action']) ) {
    if ($_POST['action'] == "adoptAccept") return adoptAccept();
    if ($_POST['action'] == "confirmGaji") return confirmGaji();
    if ($_POST['action'] == "addManager") return createManager();
}

function adoptPayment(){
    global $conn;

    $sql = "SELECT tt.id_tanaman,tt.nama_tanaman,ta.nama_lengkap, tpeng.nama_pengelola, 
            tt.bukti_bayar FROM `tb_tanaman` AS tt LEFT JOIN tb_adopter AS ta USING(id_adopter)
            LEFT JOIN tb_pengelola AS tpeng ON tt.id_pengelola = tpeng.id_pengelola
            WHERE tt.status = 'terbayar';";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function adoptAccept(){
    global $conn;
    $id = $_POST['id_tanaman'];
    $sql = "UPDATE `tb_tanaman` SET `status`='adopsi' WHERE `id_tanaman` = $id";
    mysqli_query($conn, $sql);
}

function farmerPay(){
    global $conn;

    $sql = "SELECT trwt.id_perawatan, trwt.id_petani, (tanam.harga*0.075*COUNT(trwt.id_perawatan))
            AS gaji, tpen.no_rekening, tpen.rek_nama FROM `tb_data_perwatan` AS trwt 
            LEFT JOIN tb_tanaman AS tanam USING(id_tanaman)
            LEFT JOIN tb_petani AS tpen ON trwt.id_petani = tpen.id_petani
            WHERE trwt.status_pembayaran = 'Mengunggu Proses' GROUP BY trwt.id_petani;";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function confirmGaji(){
    global $conn;
    $id = $_POST['id'];
    $sql = "UPDATE `tb_data_perwatan` SET `status_pembayaran`='Terbayar' WHERE 
            `status_pembayaran` = 'Mengunggu Proses' AND `id_petani` = $id";
    mysqli_query($conn, $sql);
}

function createManager(){
    global $conn;

    $managerName     = $_POST['manager-name'];
    $managerEmail    = $_POST['manager-email'];
    $managerPass     = $_POST['manager-pass'];

    $sql = "INSERT INTO `tb_pengelola`(`nama_pengelola`, `email`, `password`)
            VALUES ('$managerName','$managerEmail','$managerPass')";

    $conn -> query($sql);
    readAllManager();
}

function readAllManager() {
    global $conn;

    $sql = "SELECT * FROM tb_pengelola";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}
?>
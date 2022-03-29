<?php 

include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\php\GlobalFun.php";

if (isset($_GET["action"])){
    if ($_GET['action'] == "read-all-farmer") return readAllFarmer($_GET['id']);
}

if ( !empty($_POST['action']) ) {
    if ($_POST['action'] == "create-farmer") return createFarmer();
    if ($_POST['action'] == "read-detail-farmer") return readDetailFarmer($_POST["farmer-id"]);
    if ($_POST['action'] == "update-farmer") return updateFarmer($_POST["farmer-id"]);
    if ($_POST['action'] == "delete-farmer") return deleteFarmer($_POST["farmer-id"]);
}

function createFarmer() {
    global $conn;

    $farmerName     = $_POST['farmer-name'];
    $farmerLocation = $_POST['farmer-location'];
    $farmerManager  = $_POST['farmer-manager'];


    $sql = 'INSERT INTO tb_petani (id_pengelola, nama_petani, lokasi_petani) 
            VALUES ( "'.$farmerManager.'", "'.$farmerName.'", "'.$farmerLocation.'")';

    $conn -> query($sql);
}

function readAllFarmer($id) {
    global $conn;

    $sql = "SELECT * FROM tb_petani WHERE id_pengelola = $id";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function readDetailFarmer($idFarmer) {
    global $conn;

    $sql = "SELECT * FROM tb_petani WHERE id_petani = '$idFarmer' ";
    $readTable = mysqli_query($conn, $sql);
    if($readTable -> num_rows == 0) echo "data kosong";
    while ($getTableData = mysqli_fetch_assoc( $readTable )) var_dump($getTableData);
}

function updateFarmer($idFarmer) {
    global $conn;

    $farmerName     = $_POST['farmer-name'];
    $farmerLocation = $_POST['farmer-location'];

    // WARNING - nama jika tidak berubah => error
    $farmerName     = $_POST['farmer-name'];
    $sqlCheckName = "SELECT * FROM tb_petani WHERE nama_petani ='$farmerName' ";
    $result = mysqli_fetch_array($conn -> query($sqlCheckName));
    if ( $result ) return closeAndDirect("crud farmer.php", "register GAGAL - Username Sudah Digunakan");

    $sql = "UPDATE `tb_petani` 
        SET 
            `nama_petani`   = '$farmerName',
            `lokasi_petani` = '$farmerLocation'
        WHERE `id_petani`   = $idFarmer";

    if ( $conn -> query($sql) ) return closeAndDirect("crud farmer.php", "update profile Farmer - BERHASIL");
    echo $conn -> error; 
    // $_POST['error'] = $conn -> error;
    // return closeAndDirect("update profile.php", "update profile adpoter - GAGAL");
}

function deleteFarmer($idFarmer) {
    global $conn;

    $sql = "DELETE FROM tb_petani WHERE id_petani = $idFarmer";

    if ($conn->query($sql) === TRUE) 
    return closeAndDirect("crud farmer.php", "Hapus Data Farmer - BERHASIL");
    echo $conn -> error; 
    // $_POST['error'] = $conn -> error;
    // return closeAndDirect("update profile.php", "Hapus Data Farmer - - GAGAL");
}

?>
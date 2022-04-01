<?php 

include "../GlobalFun.php";

// DEBUGGING ZONE

// Create       => WARNING 1
// Read All     => SUCCSESS
// Read Detail  => SUCCESS
// Update       => WARNING 1
// Delete       => SUCCESS
// DEBUGGING ZONE 
if (isset($_GET["action"])){
    if ($_GET['action'] == "read-all-plant") return readAllPlant($_GET['id']);
    if ($_GET['action'] == "read-detail-plant") return readPlantDetail($_GET['nama'],$_GET['id']);
}

if ( !empty($_POST['action']) ) {
    if ($_POST['action'] == "create-plant") return createPlant();
    if ($_POST['action'] == "update-plant") return updatePlant();
    if ($_POST['action'] == "delete-plant") return deletePlant();
    if ($_POST['action'] == "pairing-plant") return pairingPlantToFarmer();
}

function createPlant() {
    global $conn, $idPengelola;
    
    $namaTanaman    = $_POST['nama-tanaman'];
    $lokasiTanaman  = $_POST['lokasi-tanaman'];
    $kategiri       = $_POST['kategori'];
    $jumlah         = $_POST['jumlah'];
    $deskripsi      = $_POST['deskripsi'];
    $harga          = $_POST['harga'];
    $idPengelola    = $_POST['id_manager'];
    $alamat         = $_POST['alamat'];
    $image          = uploadImage('gambar',"../../image/plantimg/");
    
    for($i=0;$i<$jumlah;$i++){
        $sql = 'INSERT INTO `tb_tanaman`(`nama_tanaman`, `lokasi_tanaman`, `id_pengelola`, `kategori`, `gambar`, `harga`, `deskripsi`, `nama_alamat`)
        VALUES ("'.$namaTanaman.'","'.$lokasiTanaman.'","'.$idPengelola.'","'.$kategiri.'","'.$image.'","'.$harga.'","'.$deskripsi.'", "'.$alamat.'")';
        $conn -> query($sql);
    }
    readAllPlant($idPengelola);
}

function readAllPlant($id) {
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "SELECT * FROM tb_tanaman WHERE id_pengelola = '$id'";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function readPlantDetail($namaTanaman,$idManager) {
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "SELECT *, COUNT(id_tanaman)  AS total_tanaman FROM `tb_tanaman` WHERE nama_tanaman = '$namaTanaman' AND id_pengelola = '$idManager' AND `status` = '' GROUP BY nama_tanaman";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function updatePlant() {
    global $conn;

    // WARNING : Data Jamak - kalau udah ada => tanaman sudah ada, jangan nambah data lagi
    $namaTanaman    = $_POST['nama-tanaman'];
    $lokasiTanaman  = $_POST['lokasi-tanaman'];
    $kategiri       = $_POST['kategori'];
    $alamat         = $_POST['alamat'];
    $deskripsi      = $_POST['deskripsi'];
    $harga          = $_POST['harga'];
    $idTanaman      = $_POST['id_tanaman'];
    $idPengelola    = $_POST['id_manager'];
    $image          = "";
    if(!isset($_POST['gambarSebelum'])){
        $image          = uploadImage('gambar',"../../image/plantimg/");
    }else{
        $image          = $_POST['gambarSebelum'];
    }

    $sql = "UPDATE `tb_tanaman` 
            SET `nama_tanaman`='$namaTanaman',`lokasi_tanaman`='$lokasiTanaman',
            `kategori`='$kategiri',`gambar`='$image',`harga`='$harga',
            `deskripsi`='$deskripsi',`nama_alamat`='$alamat'
            WHERE `id_tanaman`= $idTanaman";
    $conn -> query($sql);
    readAllPlant($idPengelola);
}

function deletePlant() {
    global $conn;
    $idTanaman      = $_POST['id_tanaman'];
    $idPengelola    = $_POST['id_manager'];
    $sql            = "DELETE FROM tb_tanaman WHERE id_tanaman = $idTanaman";
    $conn->query($sql);
    readAllPlant($idPengelola);
}

function pairingPlantToFarmer(){
    global $conn;

    $idTanaman      = $_POST['id_tanaman'];
    $idPetani       = $_POST['id_petani'];
    $sql = "UPDATE `tb_tanaman` SET `id_petani`='$idPetani' WHERE `id_tanaman` = $idTanaman";
    echo $sql;
    $conn -> query($sql);
}

?>
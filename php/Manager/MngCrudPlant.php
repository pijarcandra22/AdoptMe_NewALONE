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
    if ($_POST['action'] == "copy-plant") return copyPlant();
    if ($_POST['action'] == "pairing-plant") return pairingPlantToFarmer();
}

function createPlant() {
    global $conn;
    
    $namaTanaman    = $_POST['nama-tanaman'];
    $lokasiTanaman  = $_POST['lokasi-tanaman'];
    $kategiri       = $_POST['kategori'];
    $jumlah         = $_POST['jumlah'];
    $deskripsi      = $_POST['deskripsi'];
    $harga          = $_POST['harga'];
    $idPengelola    = $_POST['id_manager'];
    $alamat         = $_POST['alamat'];
    $status_plant   = $_POST['status'];
    $id_petani      = $_POST['id_petani'];
    $image          = uploadImage('gambar',"../../image/plantimg/");
    for($i=0;$i<$jumlah;$i++){
        $sql = 'INSERT INTO `tb_tanaman`(`status`, `nama_tanaman`, `lokasi_tanaman`, `id_pengelola`, `kategori`, `gambar`, `harga`, `deskripsi`, `nama_alamat`, `id_petani`)
        VALUES ("'.$status_plant.'","'.$namaTanaman.'","'.$lokasiTanaman.'","'.$idPengelola.'","'.$kategiri.'","'.$image.'","'.$harga.'","'.$deskripsi.'", "'.$alamat.'", "'.$id_petani.'")';
        $conn -> query($sql);
    }
    readAllPlant($idPengelola);
}

function copyPlant(){
    global $conn;
    $namaTanaman    = $_POST['nama-tanaman'];
    $lokasiTanaman  = $_POST['lokasi-tanaman'];
    $kategiri       = $_POST['kategori'];
    $deskripsi      = $_POST['deskripsi'];
    $harga          = $_POST['harga'];
    $idPengelola    = $_POST['id_manager'];
    $alamat         = $_POST['alamat'];
    $image          = $_POST['gambar'];
    $id_petani       = $_POST['id_petani'];

    $sql = 'INSERT INTO `tb_tanaman`(`nama_tanaman`, `lokasi_tanaman`, `id_pengelola`, `kategori`, `gambar`, `harga`, `deskripsi`, `nama_alamat`, `id_petani`)
        VALUES ("'.$namaTanaman.'","'.$lokasiTanaman.'","'.$idPengelola.'","'.$kategiri.'","'.$image.'","'.$harga.'","'.$deskripsi.'", "'.$alamat.'", "'.$id_petani.'")';
    
    $conn -> query($sql);
    
    readAllPlant($idPengelola);
}

function readAllPlant($id) {
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "SELECT COUNT(*) as jumlah_tanaman, COUNT(CASE WHEN ta.status='adopsi' THEN 1 END) as tanaman_adopsi,
    COUNT(CASE WHEN ta.status='waiting' THEN 1 END) as jumlah_waiting,COUNT(CASE WHEN ta.status='' THEN 1 END) as jumlah_takadop,ta.* 
    FROM `tb_tanaman` AS ta GROUP BY ta.nama_tanaman, ta.id_petani HAVING id_pengelola = '$id'";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function readPlantDetail($namaTanaman,$idManager) {
    global $conn;
    // TODO : INNER JOIN (Kondisi Terakhir (inner join tb_data_perawatan)
    $sql = "SELECT ta.*, COUNT(CASE WHEN ta.status='' THEN 1 END) AS total_tanaman FROM `tb_tanaman` AS ta WHERE nama_tanaman = '$namaTanaman' AND id_pengelola = '$idManager' GROUP BY nama_tanaman";
    $readTable = mysqli_query($conn, $sql);
    $rows = array();
    while ($getTableData = mysqli_fetch_assoc( $readTable )) $rows[]=$getTableData;
    echo json_encode($rows);
}

function updatePlant() {
    global $conn;

    // WARNING : Data Jamak - kalau udah ada => tanaman sudah ada, jangan nambah data lagi
    $namaTanamanlama= $_POST['nama-tanaman-lama'];
    $namaTanaman    = $_POST['nama-tanaman'];
    $lokasiTanaman  = $_POST['lokasi-tanaman'];
    $kategiri       = $_POST['kategori'];
    $alamat         = $_POST['alamat'];
    $deskripsi      = $_POST['deskripsi'];
    $harga          = $_POST['harga'];
    $idPengelola    = $_POST['id_manager'];
    $jmlBaru        = $_POST['jmlBaru'];
    $jmlLama        = $_POST['jmlLama'];
    $id_petani      = $_POST['id_petani'];
    $image          = "";

    if($jmlBaru>$jmlLama){
        $jumlah = $jmlBaru - $jmlLama;
        for($i=0;$i<$jumlah;$i++){
            $sql = 'INSERT INTO `tb_tanaman`(`nama_tanaman`, `lokasi_tanaman`, `id_pengelola`, `kategori`, `gambar`, `harga`, `deskripsi`, `nama_alamat`, `id_petani`)
            VALUES ("'.$namaTanaman.'","'.$lokasiTanaman.'","'.$idPengelola.'","'.$kategiri.'","'.$image.'","'.$harga.'","'.$deskripsi.'", "'.$alamat.'", "'.$id_petani.'")';
            $conn -> query($sql);
        }
    }else if($jmlBaru<$jmlLama){
        $jumlah = $jmlLama - $jmlBaru;
        $sql            = "DELETE FROM tb_tanaman WHERE nama_tanaman = '$namaTanaman' 
                           AND `status` = '' LIMIT $jumlah";
        $conn->query($sql);
    }

    if(!isset($_POST['gambarSebelum'])){
        $image          = uploadImage('gambar',"../../image/plantimg/");
        unlink('../../image/plantimg/'.$_POST['gambarSebelum']);
    }else{
        $image          = $_POST['gambarSebelum'];
    }
    $sql = "UPDATE `tb_tanaman` 
            SET `nama_tanaman`='$namaTanaman',`lokasi_tanaman`='$lokasiTanaman',
            `kategori`='$kategiri',`gambar`='$image',`harga`='$harga',
            `deskripsi`='$deskripsi',`nama_alamat`='$alamat'
            WHERE `nama_tanaman`= '$namaTanamanlama' AND `id_pengelola`= '$idPengelola'";
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
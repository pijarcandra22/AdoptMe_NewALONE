<?php 
    include "../GlobalFun.php";

    $id_petani      = $_POST['id_petani'];
    $id_tanaman     = $_POST['id_tanaman'];
    $nama_petani    = $_POST['nama_petani'];
    $report         = $_POST['report'];
    $image          = uploadImage('gambar',"../../image/report/");

    $sqlCheckFarmer = "SELECT * FROM `tb_petani` WHERE id_petani = $id_petani";
    $result = $conn -> query($sqlCheckFarmer);
    if (mysqli_num_rows($result)==0){echo "1";return false;}
    $result = mysqli_fetch_assoc($result);

    $sqlCheckPlant  = "SELECT * FROM `tb_data_perwatan` WHERE id_tanaman = $id_tanaman;";
    $resultPlant = $conn -> query($sqlCheckPlant);
    $sql          = '';
    echo mysqli_num_rows($resultPlant);
    if (mysqli_num_rows($resultPlant)==0){
        $sql = "INSERT INTO `tb_data_perwatan`(`id_petani`, `id_pengelola`, `id_tanaman`, `tanggal_pelaporan`, `foto_pelaporan`, `laporan`)
                VALUES ('$id_petani','".$result['id_pengelola']."','$id_tanaman','".date("Y-m-d")."','$image','$report')";
    }else{
        $id_perawatan    = '';
        $judul_gambar    = '';
        while($row = $resultPlant->fetch_assoc()) {
            $id_perawatan = $row["id_perawatan"];
            $judul_gambar = $row["foto_pelaporan"];
        }
        unlink('../../image/report/'.$judul_gambar);
        $sql = "UPDATE `tb_data_perwatan` SET `tanggal_pelaporan` ='".date("Y-m-d")."',
                `foto_pelaporan` = '$image', `laporan` = '$report' WHERE `id_perawatan` = $id_perawatan";
        echo $image.'Sebelum'.$judul_gambar;
    }
    
    mysqli_query($conn, $sql);
    echo "0";
?>

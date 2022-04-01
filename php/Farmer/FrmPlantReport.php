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
    
    $sql            = "INSERT INTO `tb_data_perwatan`(`id_petani`, `id_pengelola`, `id_tanaman`, `tanggal_pelaporan`, `foto_pelaporan`, `laporan`)
                       VALUES ('$id_petani','".$result['id_pengelola']."','$id_tanaman','".date("Y-m-d")."','$image','$report')";
    mysqli_query($conn, $sql);
    echo "0";
?>

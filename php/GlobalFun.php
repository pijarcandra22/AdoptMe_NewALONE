<?php 

$conn = mysqli_connect("localhost", "root", "", "adopt_me"); 

function tes() {
    echo "masuk";
}

function closeAndDirect($redirect, $respon) {
    global $conn;
    $conn->close();

    return header("Location: ../view/$redirect?response=$respon");
    exit;
}

function uploadImage($gambar,$location){
    $extgambarvalid = ['jpg','jpeg','png'];
    $_SESSION['error_content']='';
    $namafile = $_FILES[$gambar]["name"];
    $ukuranfile = $_FILES[$gambar]["size"];
    $tmpName = $_FILES[$gambar]["tmp_name"];
    $error = $_FILES[$gambar]["error"];

    if($error === 4){
        echo "1"; return false;
    }
    $extgambar = explode('.',$namafile);
    $extgambar = strtolower(end($extgambar));
    if(!in_array($extgambar,$extgambarvalid)){
        $_SESSION['error_content']='Gambar Tidak Vailid';
        echo "2"; return false;
    }
    $namafilebBaru = uniqid();
    $namafilebBaru .= ".".$extgambar;
    move_uploaded_file($tmpName,$location.$namafilebBaru);
    return $namafilebBaru;
}

?>
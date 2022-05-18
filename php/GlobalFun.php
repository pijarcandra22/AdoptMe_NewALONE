<?php

$conn = mysqli_connect("localhost", "root", "", "adopt_me");

function tes()
{
    echo "masuk";
}

function closeAndDirect($redirect, $respon)
{
    global $conn;
    $conn->close();

    return header("Location: ../view/$redirect?response=$respon");
    exit;
}

function uploadImage($gambar, $location)
{
    $extgambarvalid = ['jpg', 'jpeg', 'png'];
    $_SESSION['error_content'] = '';
    $namafile = $_FILES[$gambar]["name"];
    $ukuranfile = $_FILES[$gambar]["size"];
    $tmpName = $_FILES[$gambar]["tmp_name"];
    $error = $_FILES[$gambar]["error"];

    if ($error === 4) {
        echo "1";
        return false;
    }
    $extgambar = explode('.', $namafile);
    $extgambar = strtolower(end($extgambar));
    if (!in_array($extgambar, $extgambarvalid)) {
        $_SESSION['error_content'] = 'Gambar Tidak Vailid';
        echo "2";
        return false;
    }

    //Create an image object.
    if ($extgambar === "jpg") {
        $im = imagecreatefromjpeg($tmpName);
    } else if ($extgambar === "png") {
        $im = imagecreatefrompng($tmpName);
    } else {
        $im = imagecreatefromjpeg($tmpName);
    }

    // check file size
    if ($ukuranfile > 2048) {
        $compress = 60;
    } else {
        $compress = 80;
    }


    $namafilebBaru = uniqid();
    $namafilebBaru .= ".webp";
    imagewebp($im, $location . $namafilebBaru, $compress);
    return $namafilebBaru;
}

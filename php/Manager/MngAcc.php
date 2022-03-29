<?php 

include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\GlobalFun.php";

// DEBUGGING ZONE

// Register / Sign Up   => SUKSESS
// Login / Sign In      => SUKSESS - Set session feature not created yet
// Update Prof          => SUKSESS

// DEBUGGING ZONE 

if ( !empty($_POST['action']) ) {
    if ($_POST['action'] == "sign-up-manager") return managerSignUp();
    if ($_POST['action'] == "sign-in-manager") return managerSignIn();
    if ($_POST['action'] == "logout-manager") return managerLogout();
    if ($_POST['action'] == "update-manager") return updateProfile($_POST["id"]);
}

function managerSignUp() {  
    global $conn;
    $managerName = $_POST["manager-name"];

    // CLEAR 
    $email =  htmlspecialchars($_POST['email']);
    if (!filter_var( $email, FILTER_VALIDATE_EMAIL)) return closeAndDirect("sign up.php", "register GAGAL - Invalid email format");
    
    // SUSPICIOOUS
    $sqlCheckEmail = "SELECT * FROM tb_pengelola WHERE email ='$email' ";
    $result = mysqli_fetch_array($conn -> query($sqlCheckEmail));
    if ( $result ) return closeAndDirect("sign up.php", "register GAGAL - Email Sudah Digunakan");

    $password    = htmlspecialchars(hash('sha256', $_POST["password"]));

    $sql = 'INSERT INTO tb_pengelola 
                (nama_pengelola, email, password) 
            VALUES 
                ( "'.$managerName.'", "'.$email.'", "'.$password.'")';
    
    if ( $conn ->query($sql) === TRUE) return closeAndDirect("sign up.php", "data pengelola berhasil ditambahkan");
    echo $conn -> error; 
    // $_POST['error'] = $conn -> error;
    // return closeAndDirect( "sign up.php", "Error: " . $sql . "<br>" . $conn->error);
}

function managerSignIn() {
    global $conn;

    $email    = $_POST["email"]; 
    $password = htmlspecialchars(hash('sha256', $_POST["password"]));

    $sql = "SELECT * FROM tb_pengelola WHERE email ='$email' AND password = '$password'";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_num_rows( $query );
    if($result == 0) return closeAndDirect("sign in.php", "login pengelola - GAGAL");
    // set session
    return closeAndDirect("sign in.php", "login pengelola - BERHASIL");
}

function updateProfile($id) {
    global $conn;

    $passwordLama = hash('sha256', htmlspecialchars($_POST["password-lama"]));
    $sql    = "SELECT * FROM tb_pengelola WHERE id_pengelola = '$id' AND password ='$passwordLama'";
    $query  = mysqli_query($conn, $sql);
    $result = mysqli_num_rows( $query );

    if ($result == 0) return closeAndDirect("sign up.php", "Password lama yang dimasukkan salah");

    $namaLengkap  = htmlspecialchars($_POST['manager-name']);
    $password     = hash('sha256', htmlspecialchars($_POST["password"]));

    $sql = "UPDATE `tb_pengelola` 
        SET 
            `nama_pengelola`   = '$namaLengkap',
            `password`         = '$password'
        WHERE `id_pengelola` = $id";

    if ( $conn -> query($sql) ) return closeAndDirect("update profile.php", "update profile adpoter - BERHASIL");
    echo $conn -> error; 
    // $_POST['error'] = $conn -> error;
    // return closeAndDirect("update profile.php", "update profile adpoter - GAGAL");
}

function managerLogout() {
    // clear session
}

function forgotPassword() {
    // gmail verif
}

?>
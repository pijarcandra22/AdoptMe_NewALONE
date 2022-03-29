<?php 

include dirname( dirname(__DIR__ . PHP_EOL) . PHP_EOL)."\php\GlobalFun.php";

// DEBUGGING ZONE

// Register / Sign Up   => SUKSESS - SUSPICIOUS 2
// Login / Sign In      => SUKSESS - Set session feature not created yet
// Update Prof          => SUKSESS

// DEBUGGING ZONE 

if ( !empty($_POST['action']) ) {
    if ($_POST['action'] == "sign-up-adpoter") return adpoterSignUp();
    if ($_POST['action'] == "sign-in-adpoter") return adpoterSignIn();
    if ($_POST['action'] == "logout-adpoter") return adpoterLogout();
    if ($_POST['action'] == "update-adpoter") return updateProfile($_POST["id"]);
}

// SUKSES
function adpoterSignUp(){
    global $conn;
    $namaLengkap = htmlspecialchars($_POST['fullname']);
    
    // CLEAR but SUSPICIOOUS
    $username    = htmlspecialchars($_POST['username']);
    $sqlCheckUsername = "SELECT * FROM tb_adopter WHERE username ='$username' ";
    $result = mysqli_fetch_array($conn -> query($sqlCheckUsername));
    if ($result){echo "1";return false;}

    // CLEAR 
    $email =  htmlspecialchars($_POST['email']);
    if (!filter_var( $email, FILTER_VALIDATE_EMAIL)) return closeAndDirect("sign up.php", "register GAGAL - Invalid email format");
    
    // CLEAR but SUSPICIOOUS
    $sqlCheckEmail = "SELECT * FROM tb_adopter WHERE email ='$email' ";
    $result = mysqli_fetch_array($conn -> query($sqlCheckEmail));
    if ( $result ){echo "2";return false;}

    $password    = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);

    $sql = 'INSERT INTO tb_adopter (`nama_lengkap`, `username`, `email`, `password`)
    VALUES ( "'.$namaLengkap.'", "'.$username.'", "'.$email.'", "'.$password.'")';

    if ($conn->query($sql) === TRUE){
        $sql2 = "SELECT * FROM tb_adopter WHERE username ='$username'";
        $query = mysqli_query($conn, $sql2);
        $data = mysqli_fetch_assoc($query);
        echo json_encode($data);
        return false;
    }
    echo $conn -> error; 
    // $_POST['error'] = $conn -> error;
    // return closeAndDirect( "sign up.php", "Error: " . $sql . "<br>" . $conn->error);
}

// BERHASIL
function adpoterSignIn() {
    global $conn;

    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    $sql = "SELECT * FROM tb_adopter WHERE username ='$username'";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
    if($data){
        if(password_verify($password,$data['password'])){
            echo json_encode($data);
        }else{
            echo "1";
        }
    }else{
        echo "2";
    }
}

function updateProfile($id) {
    global $conn;

    $passwordLama = hash('sha256', htmlspecialchars($_POST["password-lama"]));
    $sql    = "SELECT * FROM tb_adopter WHERE id_adopter = '$id' AND password ='$passwordLama'";
    $query  = mysqli_query($conn, $sql);
    $result = mysqli_num_rows( $query );
    if ($result == 0) return closeAndDirect("sign up.php", "Password lama yang dimasukkan salah");

    $namaLengkap  = htmlspecialchars($_POST['fullname']);
    $password     = hash('sha256', htmlspecialchars($_POST["password"]));

    $sql = "UPDATE `tb_adopter` 
        SET 
            `nama_lengkap`   = '$namaLengkap',
            `password`      = '$password'
        WHERE `id_adopter` = $id";

    if ( $conn -> query($sql) ) return closeAndDirect("update profile.php", "update profile adpoter - BERHASIL");
    echo $conn -> error; 
    // $_POST['error'] = $conn -> error;
    // return closeAndDirect("update profile.php", "update profile adpoter - GAGAL");
}

function adpoterLogout() {
    // clear session
}

function forgotPassword() {
    // gmail verif
}

?>
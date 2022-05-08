<?php
include "../GlobalFun.php";

$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);

if (password_verify($password,'$2y$10$LC21kRH3IOQHdIKNwcjOk.Vg91gIzR.EdBt4Menyz5TemCemCt0z2') && $username == "AdminAdopt2022"){
    echo '$2y$10$LC21kRH3IOQHdIKNwcjOk.Vg91gIzR.EdBt4Menyz5TemCemCt0z2';
}else{
    echo "1";
}

?>
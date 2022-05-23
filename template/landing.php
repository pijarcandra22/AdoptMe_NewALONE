<?php
    include "../php/GlobalFun.php";
    $sql = "SELECT * FROM `tb_landing_tag` WHERE id_landing = ".$_GET['id_landing'];
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);
?>
<html lang="en">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/landing_style.css">
    <div id="landing" style="background-color: white">
        <div class="position-relative" style="height:100vh;">
            <div class="position-absolute top-50 start-50 translate-middle" style="text-align: center;">
                <h1 class="landing_h1"><?=$data['plant_tittle']?></h1>
            </div>
            <div class="position-absolute start-50 translate-middle-x" style="top: 72%">
                <center>
                    <p class="landing_p"><?=$data['plant_desc']?></p>
                </center>
            </div>
        </div>
    </div>
</html>
<script>
</script>
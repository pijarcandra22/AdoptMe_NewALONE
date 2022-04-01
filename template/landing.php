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
    <style>
        .carousel-item{
            height:200px;
            width: 100%;
        }
    </style>
    <div id="landing" style="background: linear-gradient(180deg, rgba(0, 0, 0, 0.33) 16.09%, rgba(255, 255, 255, 0.593533) 43.28%, #FFFFFF 73.54%), url('image/landing/<?=$data['image']?>');">
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="position-relative">
                        <div class="position-absolute top-50 start-0 translate-middle-y textLanding">
                            <h1><?=$data['plant_tittle']?></h1>
                            <p><?=$data['plant_desc']?></p>
                            <button type="button" style="margin-top: 20px;" class="btn btn-success">Check Adopt Location <i class="bi bi-geo-alt"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="position-relative">
                        <div class="position-absolute bottom-0 start-0" style="margin-bottom:20px; display: flex;">
                            <button class="carousel-control-prev btn rl-btn" data-bs-target="#carouselExampleFade" data-bs-slide="prev" style="position:relative" onclick="animatereset()"><i class="bi bi-chevron-left"></i></button>
                            <button class="carousel-control-next btn rl-btn" data-bs-target="#carouselExampleFade" data-bs-slide="next" style="margin-left: 10px !important; position:relative" onclick="animatereset()"><i class="bi bi-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
<script>
    $("#landing , .position-relative").css({"height":window.innerHeight+"px"})
</script>
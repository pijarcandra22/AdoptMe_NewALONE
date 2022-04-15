<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Unica One" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global_style.css">
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet"/>
    <style>
        #map {
            width: 100%;
            height: 500px !important;
        }
        .marker {
            background-image: url('image/christmas-tree.png');
            background-size: cover;
            width: 25px;
            height: 25px;
            cursor: pointer;
        }
        .mapboxgl-popup {
            max-width: 200px;
        }
        .mapboxgl-popup-content {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
        }
        .cat_plan{
            font-size: 24px;
            font-weight: bold;
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center;
            margin-right: 10px;
            padding:10px 20px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(image/Mangrove1.png);
            color: white;
        }
        .loc_plan{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 12px;
            line-height: 14px;
            text-align: center;
            color: #12491E;
            display: inline-block;
            padding-left:10px;
        }
        #c_location{
            margin-top: 40px;
        }
        h2{
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;
            color: #12491E;
        }
        body{
            font-family: Roboto !important;
        }
        #locList{
            display: block;
        }
        #footer>div>a{
            color: black;
            text-decoration: none;
            font-family: Roboto;
        }
        .c_important_content,.c_invest_content,.c_good_content{
            display: block;
        }
        .c_important_content_small,.c_invest_content_small,.c_good_content_small{
            display: none;
        }
        @media (max-width: 1200px){
            #locList{
                display: none;
            }
        }
    </style>
</head>
<body>
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div id="c4" style="z-index: 1; left:0; right:0; position:absolute"></div>
        <div class="carousel-inner" style="z-index:0">
            <div class="carousel-item active" id="1" style="height: 100%;" data-bs-interval="10000">
                <div id="c1"></div>
            </div>
            <div class="carousel-item" id="2" style="height: 100%;" data-bs-interval="10000">
                <div id="c2"></div>
            </div>
            <div class="carousel-item" id="3" style="height: 100%;" data-bs-interval="10000">
                <div id="c3"></div>
            </div>
        </div>
    </div>
    <div class="container" style="margin-bottom: 50px;">
        <div id="c_location" >
            <div class="row">
                <div class="col-12 col-xl-7">
                    <h2>Categories</h2>
                    <div class="horizontal_scroll" style="padding-top:12px !important; padding-bottom: 15px !important;">
                        <button class="btn cat_plan">Mangrove</button>
                        <button class="btn cat_plan">Mangrove</button>
                        <button class="btn cat_plan">Mangrove</button>
                        <button class="btn cat_plan">Mangrove</button>
                        <button class="btn cat_plan">Mangrove</button>
                        <button class="btn cat_plan">Mangrove</button>
                    </div>
                </div>
                <div class="col-5" id="locList">
                    <h2>Location</h2>
                    <div class="horizontal_scroll" style="padding-bottom: 15px !important;">                
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                        <a href="" class="loc_plan"><i class="fas fa-map-marked-alt" style="font-size: 24px;"></i><br>Sesetan<br>Beach</a>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </div>
        <div id="c_important"  style="margin-top: 50px;">
            <h2>Important To Adopt</h2>
            <div class="horizontal_scroll">
                <?php for($i=0;$i<12;$i++):?>
                    <div class="c_important_content" data-bs-toggle="modal" data-bs-target="#modal_adobt" style="display:inline-block; padding-right: 20px"></div>
                <?php endfor?>
            </div>
        </div>
        <div id="c_invest"  style="margin-top: 50px;">
            <h2>Best For Investment</h2>
            <div class="horizontal_scroll">
                <?php for($i=0;$i<12;$i++):?>
                    <div class="c_invest_content" data-bs-toggle="modal" data-bs-target="#modal_adobt" style="display:inline-block; padding-right: 20px"></div>
                <?php endfor?>
            </div>
        </div>
        <div id="c_good"  style="margin-top: 50px;">
            <h2>Good For Nature</h2>
            <div class="horizontal_scroll">
                <?php for($i=0;$i<12;$i++):?>
                    <div class="c_good_content" data-bs-toggle="modal" data-bs-target="#modal_adobt" style="display:inline-block; padding-right: 20px"></div>
                <?php endfor?>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="padding:30px 0">
        <div class="row" id="footer">
            <div class="col-4 col-sm-3">
                <h2>Adopt Plant</h2>
                <a href="">Tentang adoptMe</a><br>
                <a href="">Kisah adoptMe</a><br>
                <a href="">Blog</a><br>
                <a href="">Menjadi Pengelola</a><br>
                <a href="">Menjadi Adopter</a><br>
                <h2 style="margin-top: 20px;">About Us</h2>
                <a href="" style="font-size: 25px; margin-right:5px"><i class="fab fa-facebook"></i></a>
                <a href="" style="font-size: 25px; margin-right:5px"><i class="fab fa-twitter"></i></a>
                <a href="" style="font-size: 25px;"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-8 col-sm-4">
                <h2>Contact Us</h2>
                Kantor AdoptPlant.com <br>
                Cohive 101, Lt 17<br>
                Jl. Mega Kuningan Barat No. 1 RT 5/RW 2<br>
                Kuningan Timur, Setiabudi, Jakarta Selatan 12950<br>
                <br>
                Senin-Minggu 09.00-18.00<br>
                Email:  help@adoptplant.com<br>
            </div>
        </div>
    </div>
    <div id="m1"></div>
    <div id="m2"></div>
</body>
</html>
<script src="js/maps_adopter.js"></script>
<script>
    $(document).ready(function(){
        $.ajax({
            url: 'php/Adopter/AdpViewPlant.php',
            type: 'GET',
            success: function(response){
                dataFull = JSON.parse(response)
                localStorage.setItem("dataTanaman", JSON.stringify(dataFull))
            },
            error: function(error){
                console.log(error)
            }
        });

        dataProduk = JSON.parse(localStorage.getItem("dataTanaman"))

        $("#m1").load("template/modal_log.php")
        $("#m2").load("template/modal_adobt.php")        
        
        $("#c1").load("template/landing.php?id_landing=1")
        $("#c2").load("template/landing.php?id_landing=2")
        $("#c3").load("template/landing.php?id_landing=3")
        $("#c4").load("template/navbar.php?color=FFFFFF")

        callContent(dataProduk,"c_important_content")
        callContent(dataProduk,"c_invest_content")
        callContent(dataProduk,"c_good_content")

        function callContent(data, className){
            var $c_important = $('.'+className);
            $c_important.each(function(index, element) {
                $(element).load("template/adobt_content.php",{width:"170",lok:data[index]['nama_alamat'],nama:data[index]['nama_tanaman'],gambar:data[index]['gambar'],harga:data[index]['harga'],des:data[index]['deskripsi'],pengelola:data[index]['nama_pengelola']});
                $(element).attr({"onclick":"callModal('"+data[index]['nama_tanaman']+"','"+data[index]['id_pengelola']+"')"});
            });
        }

        $('#overlay').fadeOut();
    });
    function callModal(nama,id){
        $.ajax({
                url: 'php/Manager/MngCrudPlant.php?action=read-detail-plant&id='+id+'&nama='+nama,
                type: 'GET',
                success: function(response){
                    data = JSON.parse(response)
                    console.log(data)
                    if(window.innerWidth<=560){
                        $("#back_img").css({'background':'white'})
                    }else{
                        $("#back_img").css({'background':'linear-gradient(270.04deg, #FFFFFF 0.04%, #FFFFFF 79.15%, rgba(0, 0, 0, 0) 79.39%), linear-gradient(0deg, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), linear-gradient(180deg, rgba(2, 87, 5, 0.248) 0%, rgba(255, 255, 255, 0.341) 100%), url(image/plantimg/'+data[0]['gambar']+')'})
                    }
                    $("#front_img").css({'background':'linear-gradient(180deg, rgba(2, 87, 5, 0.248) 0%, rgba(255, 255, 255, 0.341) 100%), url(image/plantimg/'+data[0]['gambar']+')'})
                    $("#front_img").css({'background-size':'cover','background-position':'center'})
                    $("#namaTanaman").html(data[0]['nama_tanaman'])
                    $("#lokasiTanaman").html(data[0]['nama_alamat'])
                    $("#descTanaman").html(data[0]['deskripsi'])
                    $("#banyakTanaman").attr({'max':data[0]['total_tanaman']})
                    $("#hargaTanaman").html('IDR. '+data[0]['harga'])
                    $("#con_namePlant").val(data[0]['nama_tanaman'])
                    $("#con_managerPlant").val(data[0]['id_pengelola'])
                },
                error: function(error){
                    console.log(error)
                }
            });
        var $c_good = $('.c_modal_ad');
        callContent(dataProduk,"c_modal_ad")
    }
    function callContent(data, className){
        var $c_important = $('.'+className);
        $c_important.each(function(index, element) {
            $(element).load("template/adobt_content.php",{width:"170",lok:data[index]['nama_alamat'],nama:data[index]['nama_tanaman'],gambar:data[index]['gambar'],harga:data[index]['harga'],des:data[index]['deskripsi'],pengelola:data[index]['nama_pengelola']});
            $(element).attr({"onclick":"callModal('"+data[index]['nama_tanaman']+"','"+data[index]['id_pengelola']+"')"});
        });
    }

    //CSS Manipulation
    heigthPage = parseInt(window.innerHeight)
    widthPage = parseInt(window.innerWidth)    

</script>
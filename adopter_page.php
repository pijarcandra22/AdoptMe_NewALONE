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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global_style.css">
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet"/>
    <style>
        h3{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;
            color: #12491E;
        }
        .manage_data_green{
            width: 94px;
            height: 94px;
            background: linear-gradient(0deg, rgba(18, 73, 30, 0.5), rgba(18, 73, 30, 0.5)), url(image/Mangrove1.png), #12491E;
            border-radius: 10px;
            background-size: cover;
        }
        .manage_data_white{
            border: 1px solid white;
            border-radius: 10px;
            background-size: cover;
            width: 94px;
            height: 94px;
            margin: 0 12px;
        }
        h4{
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 16px;
            color: white;
            padding-top: 10px;
            text-align: center;
            margin: 0;
        }
        .btn-adobt{
            width: 100%;
            height: 56px;
            background-position: center;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 24px;
            color: #12491E;
        }
        .on{
            background: linear-gradient(0deg, rgba(18, 73, 30, 0.5), rgba(18, 73, 30, 0.5)), url(image/Mangrove1.png);
            background-size:200%;
            color: #FFFFFF;
        }
        #landing{
            background: url(image/AdoptLanding.png);
            background-size:cover;
            background-position: center;
        }
        .tabpad{
            margin-top: 20px;
        }
        .tabpad > h5{
            margin: 0;
            font-style: normal;
            font-weight: bold;
            font-size: 43px;
            line-height: 50px;
            text-align: center;
            color: #FFFFFF;
        }
        .tabpad > h4{
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 16px;
            color: white;
            padding-top: 10px;
            text-align: center;
            margin: 0;
        }
        .see-480{
            display: none;
        }
        .adp_plant_item{
            line-height:50px;
            vertical-align:middle;
            padding: 0 10px;
            border-left: #12491E 2px solid;
        }
        #page_heading{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 113px;
            line-height: 132px;
            color: #FFFFFF;
            text-shadow: 0px 0px 20px #000000;
        }
        @media (max-width: 960px){
            #page_heading{
                font-size: 100px;
                line-height: 90px;
            }
            .tabpad{
                margin-top: 10px;
            }
        }
        @media (max-width: 480px){
            .manage_data_green{
                width: auto;
                height: auto;
            }
            .manage_data_white{
                width: auto;
                height: auto;
            }
            .tabpad{
                display: flex;
                padding: 0px 10px;
            }
            .tabpad > h5{
                font-size: 20px;
            }
            .out-480{
                display: none;
            }
            .see-480{
                display: inline;
            }
        }
    </style>
</head>
<body>
    <div id="c1" style="z-index: 1; left:0; right:0; position:absolute"></div>
    <div id="landing">
        <div id="landing-text" class="position-relative" style="z-index:0">
            <div class="container-xl position-absolute bottom-0 start-50 translate-middle-x">
                <div class="row justify-content-sm-center">
                    <div class="col-12 col-sm-auto">
                        <h1 id="page_heading">Adopter Page</h1>
                    </div>
                    <div class="col-12 col-sm-auto">
                        <div style="display: flex;">
                            <div class="tabpad manage_data_green">
                                <h4 class="out-480">PLANT</h4>
                                <h5 class="see-480">Plant: </h5>
                                <h5 id="adp_total_tanaman">99</h5>
                            </div>
                            <div class="tabpad manage_data_white">
                                <h4 class="out-480">WAITING</h4>
                                <h5 class="see-480">Waiting: </h5>
                                <h5 id="adp_waiting_tanaman">99</h5>
                            </div>
                        </div>
                        <div style="display: flex; height:max-content">
                            <h3 id="adopter_name"  style="margin-top:14px; color:white; margin-right:10px">Adopter Name</h3>
                            <button onclick="signout()" class="btn btn-success" style="margin-top:8px; font-family:roboto; font-weight:bold; height: 40px; line-height: 10px !important; border-radius:30px; background-color:#12491E; border:none; padding:2px 10px !important; vertical-align:middle">Sign Out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-xl">
            <div style="margin-top: 40px;">
                <div id="c2"></div>
            </div>
            <div id="m1"></div>
            <div id="m2"></div>
        </div>
    </div>
</body>
</html>
<script>
    $("#landing").css({"height":window.innerHeight+"px"})
    $("#landing-text").css({"height":(window.innerHeight*0.63)+"px"})
    $("#c1").load("template/navbar.php?color=12491E&set=true")
    $("#c2").load("template/form_adopter_plant.php")
    $("#m1").load("template/modal_see_report.php")

    function callReport(id){
        dataReportFarmer = JSON.parse(localStorage.getItem("adopterDanTanaman"))
        console.log(dataReportFarmer)
        dataReport = dataReportFarmer.filter(dataReportFarmer => dataReportFarmer.id_perawatan == id);
        
        console.log(dataReport[0]['nama_tanaman'])
        $("#report_img").html('<img src="'+'image/report/'+dataReport[0]['foto_pelaporan']+'" width="100%" alt="">')
        $("#report_nama").html(dataReport[0]['id_tanaman']+' | '+dataReport[0]['nama_tanaman'])
        $("#report_content").html(dataReport[0]['laporan']+' ('+dataReport[0]['tanggal_pelaporan']+')')
    }

    function signout(){
        localStorage.removeItem("dataAdopter")
        document.location.replace("/")
    }
</script>
<script src="js/adopter.js"></script>

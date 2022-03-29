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
        h1{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 113px;
            padding-top: 69px;
            line-height: 132px;
            color: #FFFFFF;
            text-shadow: 0px 0px 20px #000000;
            font-style: normal;
        }
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
            border: 1px solid rgba(18, 73, 30, 1);
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
        h5{
            margin: 0;
            font-style: normal;
            font-weight: bold;
            font-size: 43px;
            line-height: 50px;
            text-align: center;
            color: #FFFFFF;
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
    </style>
</head>
<body>
    <div id="c1" class="fixed-top"></div>
    <div class="row justify-content-center"  style="margin-top: 110px;">
        <div class="col-5" style="height: 287px; text-align:right; background: url(image/Mangrove1.png); background-size:cover">
            <h1>Adopter</h1>
        </div>
        <div class="col-auto">
            <h1>Page</h1>
            <h3>Adopter Name</h3>
        </div>
        <div class="col-auto">
            <div style="display: flex; padding-top: 88px;">
                <div class="manage_data_green">
                    <h4>PLANT</h4>
                    <h5>99</h5>
                </div>
                <div class="manage_data_white">
                    <h4 style="color: #12491E;">FARMER</h4>
                    <h5 style="color: #12491E;">99</h5>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: 100px;" class="container">
        <div id="c2"></div>
    </div>
    <div id="m1"></div>
    <div id="m2"></div>
</body>
</html>
<script>
    let id_ofFarmer
    $("#c1").load("template/navbar.php?color=12491E&set=true")
    $("#c2").load("template/form_adopter_plant.php")
    $("#m1").load("template/modal_bukti_pembayaran.php")

    function callProof(id){
        dataProduk = JSON.parse(localStorage.getItem("dataPayment"))
        checkData = dataProduk.filter(dataProduk => dataProduk.id_tanaman == id);

        $("#report_img").css({'background-image':'url(image/bukti_bayar/'+checkData[0]['bukti_bayar']+')'})
    }

    function seePayRek(id){
        dataProduk = JSON.parse(localStorage.getItem("farmerPay"))
        checkData = dataProduk.filter(dataProduk => dataProduk.id_petani == id);

        $("#detail_rek").html('No Rekening: '+checkData[0]['no_rekening']+' | Pemilik Rekening: '+checkData[0]['rek_nama']+' | Jumlah Gaji: '+checkData[0]['gaji'])
        $("#but_rek").attr({'onclick':'confirmGaji('+id+')'})
    }

    function accPayment(id){
        var form_data = new FormData();
        form_data.append("action","adoptAccept");
        form_data.append("id_tanaman",id);
        $.ajax({
			url: 'php/Admin/AdminFun.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                $("#c2").load("template/form_check_payment.php")
			},
			error: function(error){
                console.log(error)
			}
		});
    }

    function confirmGaji(id){
        var form_data = new FormData();
        form_data.append("action","confirmGaji");
        form_data.append("id",id);
        $.ajax({
			url: 'php/Admin/AdminFun.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
			},
			error: function(error){
                console.log(error)
			}
		});
    }
</script>

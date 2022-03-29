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
    <style>
        #landing{
            background: linear-gradient(180.41deg, rgba(0, 0, 0, 0) 31.84%, rgba(0, 0, 0, 0.5) 99.64%), linear-gradient(180deg, rgba(2, 87, 5, 0.248) 0%, rgba(255, 255, 255, 0.341) 100%), url(image/landing/Mangrove1.png);
            background-size:cover;
        }
        #laporan{
            background-color: white;
            border-radius: 10px;
            width: 500px;
            box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <center>
        <div id="landing" class="position-relative">
            <div id="laporan" class="position-absolute top-50 start-50 translate-middle">
                <div class="position-relative" style="border-radius: 10px 10px 0 0; padding: 20px; background-size:cover !important; height:200px; background:linear-gradient(180deg, rgba(255, 255, 255, 0) 95.76%, #FFFFFF 95.8%), linear-gradient(180deg, rgba(255, 255, 255, 0.341) 0%, rgba(2, 87, 5, 0.248) 55.26%), url(image/landing/Mangrove1.png);">
                    <div style="width: max-content;" class="position-absolute bottom-0 start-50 translate-middle-x">
                        <h1 style="line-height: 0.6; font-family:Roboto; font-weight: bold !important; font-size:40pt; color:#FFFFFF">PAYING PAGE</h1>
                    </div>
                </div>
                <div style="padding: 20px;">
                    <form action="">
                        <textarea type="text" class="form-control" id="pay_idplant" placeholder="Plant Id; Separate id with ',' (Semi-collon) without space example: 1,2,39,13" style="height:200px"></textarea>
                        <div class="input-group mb-3" style="margin: 10px 0 0 0 !important;">
                            <label class="input-group-text" for="pay_proveplant">Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="pay_proveplant">
                        </div>
                        <button type="button" class="btn btn-success" id="pay_report_but" style="margin-top:10px">UPLOAD</button>
                    </form>
                </div>
            </div>
        </div>
    </center>
    <script src="js/farmer.js"></script>
</body>
</html>
<script>
    $('#pay_report_but').on('click', function(){
        $("#pay_idplant").removeClass("is-invalid")
        $("#pay_proveplant").removeClass("is-invalid")
        
        idTanaman   = $("#pay_idplant").val().split(',')
        for (i in idTanaman){
            idTanaman[i] = idTanaman[i].trim()
            idTanaman[i] = parseInt(idTanaman[i])
        }
        idTanaman = idTanaman.filter(function(value, index, arr){ 
            if(isNaN(value) == false){
                return value
            }
        });
        if(idTanaman.length==0){
            $("#pay_idplant").addClass("is-invalid")
            return
        }

        var form_data = new FormData();
        
        var ins = document.getElementById('pay_proveplant').files.length;
        if(ins == 0) {
            $("#pay_proveplant").addClass("is-invalid")
            return;
        }for (var x = 0; x < ins; x++) {
            form_data.append("gambar", document.getElementById('pay_proveplant').files[x]);
        }
        form_data.append("id" , idTanaman.toString());
        $.ajax({
			url: 'php/Adopter/AdpPaying.php',
            dataType: 'json',
            cache: false,
			contentType: false,
			processData: false,
            data: form_data,
			type: 'POST',
			success: function(response){
                setDataInTable(JSON.stringify(response))
			},
			error: function(error){
                console.log(error)
			}
		});
    })
    $("#landing").css({"height":window.innerHeight+"px"})
</script>
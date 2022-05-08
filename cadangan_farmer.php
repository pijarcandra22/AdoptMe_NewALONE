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
                        <h1 style="line-height: 0.6; font-family:Roboto; font-weight: bold !important; font-size:40pt; color:#FFFFFF">FARMER PAGE</h1>
                    </div>
                </div>
                <div style="padding: 20px;">
                    <form action="">
                        <div class="horizontal_scroll">
                            <?php for($i=1;$i<20;$i++):?>
                                <button class="btn btn-outline-success" style="margin:5px"><?=$i?></button>
                            <?php endfor;?>
                        </div>
                        <div class="input-group" style="width: 100%; margin-top:10px">
                            <input type="text" id="farmer_idPetani" class="form-control" placeholder="Id Petani">
                            <input type="text" id="farmer_namaPetani" class="form-control" placeholder="Nama Petani">
                            <input type="text" id="farmer_idTanaman" class="form-control" placeholder="Id Tanaman">
                        </div>
                        <div class="input-group mb-3" style="margin: 10px 0 0 0 !important;">
                            <label class="input-group-text" for="farmer_plantImage">Gambar Tanaman Terkini</label>
                            <input type="file" class="form-control" id="farmer_plantImage">
                        </div>
                        <div class="form-floating" style="margin-top: 10px !important;">
                            <textarea class="form-control" placeholder="Kondisi Tanaman" id="farmer_report" style="height: 100px"></textarea>
                            <label for="farmer_report">Kondisi Tanaman</label>
                        </div>
                        <div style="margin-top: 10px;">
                            <button type="button" class="btn btn-success" id="upload-reoport-but">UPLOAD</button>
                            <button type="button" class="btn btn-outline-success" id="draf-reoport-but">SAVE DRAF</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </center>
    <script src="js/farmer.js"></script>
</body>
</html>
<script>
    $("#landing").css({"height":window.innerHeight+"px"})
</script>
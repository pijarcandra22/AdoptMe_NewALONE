<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/global_style.css">
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
    <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet" />
    <style>
        h1 {
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 113px;
            padding-top: 69px;
            line-height: 132px;
            color: #FFFFFF;
            text-shadow: 0px 0px 20px #000000;
        }

        h3 {
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;

            color: #12491E;
        }

        .manage_data_green {
            width: 94px;
            height: 94px;
            background: linear-gradient(0deg, rgba(18, 73, 30, 0.5), rgba(18, 73, 30, 0.5)), url(image/Mangrove1.png), #12491E;
            border-radius: 10px;
            background-size: cover;
        }

        .manage_data_white {
            border: 1px solid rgba(18, 73, 30, 1);
            border-radius: 10px;
            background-size: cover;
            width: 94px;
            height: 94px;
            margin: 0 12px;
        }

        h4 {
            font-style: normal;
            font-weight: bold;
            font-size: 14px;
            line-height: 16px;
            color: white;
            padding-top: 10px;
            text-align: center;
            margin: 0;
        }

        h5 {
            margin: 0;
            font-style: normal;
            font-weight: bold;
            font-size: 43px;
            line-height: 50px;
            text-align: center;
            color: #FFFFFF;
        }

        .btn-adobt {
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

        .on {
            background: linear-gradient(0deg, rgba(18, 73, 30, 0.5), rgba(18, 73, 30, 0.5)), url(image/Mangrove1.png);
            background-size: 200%;
            color: #FFFFFF;
        }

        #namebackImg {
            height: 287px;
            text-align: right;
            background: url(image/Mangrove1.png);
            background-size: cover;
        }

        .tabpad {
            margin-top: 88px;
        }

        .see-480 {
            display: none;
        }

        @media (max-width: 960px) {
            h1 {
                font-size: 80px;
                padding-top: 69px;
                line-height: 90px;
            }

            #namebackImg {
                height: 230px;
            }

            .tabpad {
                margin-top: 55px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 70px;
            }

            #namebackImg {
                height: 160px;
                display: flex;
            }

            .tabpad {
                margin-top: 55px;
            }

            .out-480 {
                display: none;
            }

            .see-480 {
                display: block;
            }

            .menu-flex {
                display: flex !important;
            }

            .btn-adobt {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div id="c1"></div>
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6" id="namebackImg">
                <h1 style="margin-right: 10px;">Farmer</h1>
                <h1 class="see-480">Page</h1>
            </div>
            <div class="col-12 col-sm-6">
                <div style="display: flex;">
                    <h1 class="out-480">Page</h1>
                    <div class="tabpad manage_data_green out-480" style="margin-left: 20px;">
                        <h4>PLANT</h4>
                        <h5>99</h5>
                    </div>
                    <div class="tabpad manage_data_white out-480">
                        <h4 style="color: #12491E;">FARMER</h4>
                        <h5 style="color: #12491E;">99</h5>
                    </div>
                    <div class="tabpad manage_data_green out-480">
                        <h4>ADOPTER</h4>
                        <h5>99</h5>
                    </div>
                </div>
                <div style="display: flex; height:max-content">
                    <h3 style="margin-top:14px; color:#12491E; margin-right:10px" id="com_name">Company Name</h3>
                    <button onclick="signout()" class="btn btn-success" style="margin-top:8px; font-family:roboto; font-weight:bold; height: 40px; line-height: 10px !important; border-radius:30px; background-color:#12491E; border:none; padding:2px 10px !important; vertical-align:middle">Sign Out</button>
                </div>
            </div>
        </div>
        <div style="margin-top: 50px;">
            <div class="row">
                <div class="col-12">
                    <div id="c2"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="m1"></div>
    <div id="m2"></div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        let id_ofFarmer

        $("#c1").load("template/navbar.php?color=12491E&set=true")
        $("#c2").load("template/form_report_farmer.php")
        $("#m1").load("template/modal_report_plant.php")
        $("#m2").load("template/modal_log_farmer.php")

        function callModal(id) {
            $('#farmer_idTanaman').val(id)
        }

        function callModal2(id) {
            dataFarmerMentah = JSON.parse(localStorage.getItem("dataFarmerManager"))
            dataFarmer = dataFarmerMentah.filter(dataFarmerMentah => dataFarmerMentah.id_petani == id);
            id_ofFarmer = id;
            var objects = {};
            features = [];
            for (var x = 0; x < dataFarmer.length; x++) {
                lokasi = dataFarmer[x]['lokasi_petani'].split(", ");
                objects = {
                    'type': 'Feature',
                    'geometry': {
                        'type': 'Point',
                        'coordinates': [parseFloat(lokasi[1]), parseFloat(lokasi[0])]
                    },
                    'properties': {
                        'title': dataFarmer[x]['nama_petani']
                    }
                }
                features.push(objects)
            }

            const geojson = {
                'type': 'FeatureCollection',
                'features': features
            };

            for (const feature of geojson.features) {
                // create a HTML element for each feature
                const el = document.createElement('div');
                el.className = 'farmer';
                // make a marker for each feature and add it to the map
                new mapboxgl.Marker(el)
                    .setLngLat(feature.geometry.coordinates)
                    .setPopup(new mapboxgl.Popup({
                            offset: 25
                        }) // add popups
                        .setHTML(`<h3>${feature.properties.title}</h3>`))
                    .addTo(map);
            }
        }

        function callReport(id) {
            dataReportFarmer = JSON.parse(localStorage.getItem("dataReportFarmer"))
            dataReport = dataReportFarmer.filter(dataReportFarmer => dataReportFarmer.id_perawatan == id);

            console.log(dataReport[0]['nama_tanaman'])
            $("#report_img").css({
                'background-image': 'url(image/report/' + dataReport[0]['foto_pelaporan'] + ')'
            })
            $("#report_nama").html(dataReport[0]['id_tanaman'] + ' | ' + dataReport[0]['nama_tanaman'])
            $("#report_content").html(dataReport[0]['laporan'] + ' (' + dataReport[0]['tanggal_pelaporan'] + ')')
        }

        function addFarmerToPlant(id) {
            var form_data = new FormData();
            form_data.append("action", "pairing-plant");
            form_data.append("id_tanaman", id);
            form_data.append("id_petani", id_ofFarmer);

            $.ajax({
                url: 'php/Manager/MngCrudPlant.php',
                dataType: 'json',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                success: function(response) {
                    $("#c2").load(location.href + " template/form_add_farmer.php")
                },
                error: function(error) {
                    console.log(error)
                }
            });
        }
    </script>
</body>

</html>
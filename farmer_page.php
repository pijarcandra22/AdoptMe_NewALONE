<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdoptPlant.com | Farmer Page</title>
  <link rel="shortcut icon" href="image/logo.png"/>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/global_style.css">
  <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.js"></script>
  <link href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.6.1/mapbox-gl.css" rel="stylesheet" />
  <style>
    .tabpad {
      margin-top: 20px !important;
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
      background: #12491E;
      border-radius: 10px;
      background-size: cover;
      color: #FFFFFF;
    }

    .manage_data_white {
      border: 1px solid #12491E;
      border-radius: 10px;
      background-size: cover;
      width: 94px;
      height: 94px;
      margin: 0 12px;
      color: #12491E;
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

    #landing {
      height: 100vh;
    }

    #landing-text {
      background-size: cover;
      background-repeat: no-repeat;
      background-position: top center;
      height: 70vh;
    }

    .tabpad>h5 {
      margin: 0;
      font-style: normal;
      font-weight: bold;
      font-size: 43px;
      line-height: 50px;
      text-align: center;
    }

    .tabpad>h4 {
      font-style: normal;
      font-weight: bold;
      font-size: 14px;
      line-height: 16px;
      padding-top: 10px;
      text-align: center;
      margin: 0;
    }

    .see-480 {
      display: none;
    }

    .adp_plant_item {
      line-height: 50px;
      vertical-align: middle;
      padding: 0 10px;
      border-left: #12491E 2px solid;
    }

    #page_heading {
      font-family: Satisfy;
      font-style: normal;
      font-weight: bold;
      font-size: 113px;
      line-height: 132px;
      color: #12491E;
    }

    @media (max-width: 960px) {
      #page_heading {
        font-size: 100px;
        line-height: 90px;
      }

      .tabpad {
        margin-top: 10px;
      }
    }

    @media (max-width: 480px) {
      .manage_data_green {
        width: auto;
        height: auto;
      }

      .manage_data_white {
        width: auto;
        height: auto;
      }

      .tabpad {
        display: flex;
        padding: 0px 10px;
      }

      .tabpad>h5 {
        font-size: 20px;
      }

      .out-480 {
        display: none;
      }

      .see-480 {
        display: inline;
      }

      #page_heading {
        margin-left: 20px;
      }

      #landing-text {
        height: 50vh;
        margin-bottom: 50px;
      }
    }
  </style>
</head>

<body>
  <div id="loader" class="position-relative" style="width: 100%; height:100vh">
      <div class="position-absolute top-50 start-50 translate-middle">
        <img src="image/loader.gif" class="shadow bg-body" width="80%" style="border-radius: 50%" alt="" />
      </div>
  </div>
  <div id="c1" style="z-index: 1; left:0; right:0; position:absolute"></div>
  <div id="landing">
    <div id="landing-text" style="background-image: url(image/leafFront.webp); position: absolute;" class="position-relative" style="z-index:0">
      <div class="container-xl position-absolute bottom-0 start-50 translate-middle-x">
        <div class="row justify-content-sm-center">
          <div class="col-12 col-sm-auto">
            <h1 id="page_heading">Farmer</h1>
          </div>
          <div class="col-12 col-sm-auto">
            <div style="display: flex;">
              <div class="tabpad manage_data_green">
                <h4 class="out-480">PLANT</h4>
                <h5 class="see-480">Plant: </h5>
                <h5 id="adp_total_tanaman">99</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-xl mb-5">
      <div style="margin-top: 50px;">
        <div class="row">
          <div class="col-12">
            <div id="c2"></div>
          </div>
        </div>
      </div>
    </div>
    <?php include('template/footer.php'); ?>
  </div>
  <div id="m1"></div>
  <div id="m2"></div>



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    let id_ofFarmer
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
          document.querySelector("body").style.visibility = "hidden";
          document.querySelector("#loader").style.visibility = "visible";
        } else {
          document.querySelector("#loader").style.display = "none";
          document.querySelector("body").style.visibility = "visible";
        }
    };
    $("#c1").load("template/navbar.php?color=FFFFFF&set=true")
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
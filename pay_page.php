<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdoptPlant.com | Pay Page</title>
  <link rel="shortcut icon" href="image/logo.png"/>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/global_style.css">
  <style>
    #landing {
      background: linear-gradient(180.41deg, rgba(0, 0, 0, 0) 31.84%, rgba(0, 0, 0, 0.5) 99.64%), linear-gradient(180deg, rgba(2, 87, 5, 0.248) 0%, rgba(255, 255, 255, 0.341) 100%), url(image/landing/c1.png);
      background-size: cover;
    }

    #laporan {
      background-color: white;
      border-radius: 10px;
      width: 500px;
      box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5);
    }

    #pay_title {
      line-height: 0.6;
      font-family: Roboto;
      font-weight: bold !important;
      font-size: 40pt;
      color: #FFFFFF
    }

    @media (max-width: 500px) {
      #laporan {
        width: 300px;
      }

      #pay_title {
        font-size: 30pt;
      }
    }

    .table-wrapper {
      height: 25rem;
      overflow: scroll;
    }

    td,
    th {
      text-align: center;
      text-overflow: ellipsis;
    }

    thead {
      background-color: #EFEFEF;
    }
  </style>
</head>

<body>
  <div id="loader" class="position-relative" style="width: 100%; height:100vh">
      <div class="position-absolute top-50 start-50 translate-middle">
        <img src="image/loader.gif" class="shadow bg-body" width="80%" style="border-radius: 50%" alt="" />
      </div>
  </div>
  <center>
    <div id="landing" class="position-relative">
      <div id="laporan" class="position-absolute top-50 start-50 translate-middle">
        <div class="position-relative" style="border-radius: 10px 10px 0 0; padding: 20px; background-size:cover !important; height:100px; background:linear-gradient(180deg, rgba(255, 255, 255, 0) 95.76%, #FFFFFF 95.8%), linear-gradient(180deg, rgba(255, 255, 255, 0.341) 0%, rgba(2, 87, 5, 0.248) 55.26%), url(image/landing/c1.png);">
          <div style="width: max-content;" class="position-absolute bottom-0 start-50 translate-middle-x">
            <h1 id="pay_title">PAYING PAGE</h1>
          </div>
        </div>
        <div style="padding: 20px;">
          <form action="">
            <div class="table-wrapper">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Tanaman</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Check</th>
                  </tr>
                </thead>
                <tbody class="table_body">

                </tbody>
              </table>
            </div>
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

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script src="js/money-formater.js"></script>
  <script>
    document.onreadystatechange = function() {
        if (document.readyState !== "complete") {
          document.querySelector("body").style.visibility = "hidden";
          document.querySelector("#loader").style.visibility = "visible";
        } else {
          document.querySelector("#loader").style.display = "none";
          document.querySelector("body").style.visibility = "visible";
        }
    };

    data = '<?= $_GET['id'] ?>';
    $.ajax({
      url: 'php/Adopter/AdpCheckPaying.php?id=' + data,
      type: 'GET',
      success: function(response) {
        check_create(response)
      },
      error: function(error) {
        console.log(error)
      }
    });

    function check_create(response) {
      data = JSON.parse(response)
      $(".table_body").empty()
      Object.keys(data).forEach(function(key) {
        $(".table_body").append(

          ` 
          <tr>
                  <th scope="row">` + data[key]['id_tanaman'] + `</th>
                  <td>` + data[key]['nama_tanaman'] + `</td>
                  <td>` + formatMoney(data[key]['harga']) + `</td>
                  <td><input type="checkbox" class="pay_check_data form-check-input" id="plant-` + data[key]['id_tanaman'] + `" checked autocomplete="off" value="` + data[key]['id_tanaman'] + `"></td>
                </tr>`

        )
      })
    }

    $('#pay_report_but').on('click', function() {
      id_tanaman_check = ''
      $(".pay_check_data").each(function(index, element) {
        if ($(element).is(":checked")) {
          id_tanaman_check += $(element).val() + ','
        }
      })
      id_tanaman_check = id_tanaman_check.slice(0, -1);
      alert(id_tanaman_check);
      $("#pay_proveplant").removeClass("is-invalid")

      var form_data = new FormData();

      var ins = document.getElementById('pay_proveplant').files.length;
      if (ins == 0) {
        $("#pay_proveplant").addClass("is-invalid")
        return;
      }
      for (var x = 0; x < ins; x++) {
        form_data.append("gambar", document.getElementById('pay_proveplant').files[x]);
      }
      form_data.append("id", id_tanaman_check);
      $.ajax({
        url: 'php/Adopter/AdpPaying.php',
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(response) {
          if (window.confirm(response)) {
            if (localStorage.getItem("dataAdopter") === null) {
              document.location.replace('/')
            } else {
              dataAkun = JSON.parse(localStorage.getItem("dataAdopter"))
              location.replace(dataAkun['username']);
            }
          }
        },
        error: function(error) {
          if (window.confirm(error)) {
            document.location.replace('/')
          }
        }
      });
    })
    $("#landing").css({
      "height": window.innerHeight + "px"
    })
  </script>

</body>

</html>
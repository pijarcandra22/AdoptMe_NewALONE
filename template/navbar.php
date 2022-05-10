<?php
if ($_GET['color'] != "FFFFFF") {
  $fontColor = "FFFFFF";
} else {
  $fontColor = "000000";
}
if (isset($_GET['set'])) {
  echo "<script>$('#logset').css({'display':'none'})</script>";
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>
<style>
  #ifnotlog {
    font-style: normal;
    font-weight: bold;
    padding: 1em;
    border: none;
    font-size: 12px !important;
  }


  @media (max-width: 1020px) {
    .navbar {
      padding: 30px 40px;
    }
  }

  @media (max-width: 1000px) {
    #searchEngine {
      margin: 10px 0 0 0px;
    }

    #logset {
      margin-left: 0px;
    }
  }

  .linkColor a {
    color: black !important;
  }

  .my-navbar a {
    color: white;
  }

  .scrolled {
    background-color: white;
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg fixed-top my-navbar">
    <div class="container-lg test py-lg-2">
      <a class="navbar-brand fw-bold" href="/">AdoptPlant.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <div class="navbar-nav mx-auto">
          <a class="nav-link" href="#">News</a>
          <a class="nav-link" href="#">Contact</a>
          <a class="nav-link" href="#">Management</a>
        </div>
        <form class="d-flex align-items-center mt-3 mt-md-0 me-auto mb-3 mb-lg-0">
          <input class="form-control me-2 my-auto" type="search" placeholder="Search plant..." aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
        <div id="logset my-auto ms-3">
          <button id="ifnotlog" class="btn btn-primary" data-bs-toggle="modal" href="#modal_signin">SIGN IN <i class="bi bi-person-circle"></i></button>
          <a id="iflog" href="/adopter/" class="btn btn-light" style="background-color: <?= '#' . $_GET['color'] ?>; color:#<?= $fontColor ?> !important;">ADOPTER</a>
        </div>
      </div>
    </div>
  </nav>
  <script src="js/adopter.js"></script>
  <script>
    $(function() {
      $(document).scroll(function() {
        var $nav = $(".my-navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        $nav.toggleClass('linkColor', $(this).scrollTop() > $nav.height());
      });
    });

    adopter = JSON.parse(localStorage.getItem("dataAdopter"))
    console.log(adopter)
    $("#iflog").attr({
      'href': adopter['username']
    })
  </script>
</body>

</html>
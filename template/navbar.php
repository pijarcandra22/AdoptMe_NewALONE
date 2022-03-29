<?php 
  if($_GET['color']!="FFFFFF"){
    $fontColor="FFFFFF";
  }else{
    $fontColor="000000";
  }
  if(isset($_GET['set'])){
    echo "<script>$('#logset').css({'display':'none'})</script>";
  }
?>
<html lang="en">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <style>
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: <?='#'.$_GET['color']?> !important;
      opacity: 1; /* Firefox */
    }
    :-ms-input-placeholder { /* Internet Explorer 10-11 */
      color: <?='#'.$_GET['color']?> !important;
    }
    ::-ms-input-placeholder { /* Microsoft Edge */
      color: <?='#'.$_GET['color']?> !important;
    }
    #iflog{
      border-radius: 30px;
      font-style: normal;
      font-weight: bold;
      font-family: Roboto;
      border:none;
      font-size:12px !important;
    }
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark" style="padding: 30px 80px 0 110px; color:<?='#'.$_GET['color']?> !important">
    <div class="container-fluid"  style="padding-right: 50px;">
      <a class="navbar-brand" href="#" style="font-size: 30px; font-weight: bold; color:<?='#'.$_GET['color']?> !important; font-family: Roboto;">AdoptMe.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="d-flex" style="width:fit-content; justify-content: space-around;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: <?='#'.$_GET['color']?>!important;"><b>News</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: <?='#'.$_GET['color']?>!important;"><b>Contact</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: <?='#'.$_GET['color']?>!important;"><b>Management</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: <?='#'.$_GET['color']?>!important;"><b>Agency</b></a>
          </li>
          <li class="nav-item">
            <form class="d-flex" style="border-bottom:1px solid <?='#'.$_GET['color']?>; height: 24px; margin:10px 0 0 30px;">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search"  style="background-color: transparent; border: none; width: 200px; font-size:14px; height:20px; color:<?='#'.$_GET['color']?>">
              <button style="font-size: 12px; background-color: transparent ; color: <?='#'.$_GET['color']?>; border: none; height:20px;">
                <i class='fas fa-search'></i>
              </button>
            </form>
          </li>
          <li id="logset" class="nav-item" style="margin-left: 20px; vertical-align:text-bottom;line-height: 40px;">
            <a id = "ifnotlog" class="nav-link active" aria-current="page" data-bs-toggle="modal" href="#modal_signin"><i class="bi bi-person-circle" style="color: <?='#'.$_GET['color']?>;"></i></a>
            <a id = "iflog" href="" class="btn btn-light" style="background-color: <?='#'.$_GET['color']?>; color:#<?=$fontColor?> !important;">ADOPTER PAGE</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</html>
<script src="js/adopter.js"></script>
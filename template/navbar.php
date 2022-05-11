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
<!DOCTYPE html>
<html lang="en">
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
    #ifnotlog{
      border-radius: 30px;
      font-style: normal;
      font-weight: bold;
      font-family: Roboto;
      border:none;
      font-size:12px !important;
    }
    .navbar{
      padding: 20px 80px;
      color:<?='#'.$_GET['color']?>
    }
    #searchEngine{
      margin:10px 0 0 30px;
      height: 24px;
    }
    #logset{
      margin-left: 20px;
      vertical-align:text-bottom;
      line-height: 40px;
    }
    .linkColor a,.linkColor button {
      color: black !important;
    }

    .my-navbar a {
      color: white;
    }

    .scrolled {
      background-color: white;
    }

    .engscroll{
      border-bottom:1px solid black !important;
    }
    @media (max-width: 1020px){
        .navbar{
          padding: 30px 40px;
        }
    }
    @media (max-width: 1000px){
        #searchEngine{
          margin:10px 0 0 0px;
        }
        #logset{
          margin-left: 0px;
        }
    }
  </style>
  <nav class="navbar navbar-expand-lg fixed-top my-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="font-size: 25px; font-weight: bold; color:<?='#'.$_GET['color']?>; font-family: Roboto;">AdoptPlant.com</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span style="color:<?='#'.$_GET['color']?>"><i class="fas fa-grip-lines"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
        <div class="d-flex" style="width:fit-content; justify-content: space-around;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="#">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="#">Management</a>
          </li>
          <li class="nav-item">
            <form id="searchEngine" class="d-flex" style="border-bottom:1px solid <?='#'.$_GET['color']?>;">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search"  style="background-color: transparent; border: none; width: 200px; font-size:14px; height:20px; color:<?='#'.$_GET['color']?>">
              <button style="font-size: 12px; background-color: transparent ; color: <?='#'.$_GET['color']?>; border: none; height:20px;">
                <i class='fas fa-search'></i>
              </button>
            </form>
          </li>
          <li id="logset" class="nav-item">
            <a id = "ifnotlog" class="btn btn-light" data-bs-toggle="modal" href="#modal_signin" style="background-color: <?='#'.$_GET['color']?>; color:#<?=$fontColor?> !important;">SIGN IN <i class="bi bi-person-circle"></i></a>
            <a id = "iflog" href="/adopter/" class="btn btn-light" style="background-color: <?='#'.$_GET['color']?>; color:#<?=$fontColor?> !important;">ADOPTER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</html>
<script src="js/adopter.js"></script>
<script>
  $(function() {
      $(document).scroll(function() {
        var $nav = $(".my-navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        $nav.toggleClass('linkColor', $(this).scrollTop() > $nav.height());
        $("#searchEngine").toggleClass('engscroll', $(this).scrollTop() > $nav.height());
      });
  });
  adopter = JSON.parse(localStorage.getItem("dataAdopter"))
  console.log(adopter)
  $("#iflog").attr({'href':adopter['username']})
</script>
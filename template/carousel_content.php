<style>
  body{    
    font-family: 'Roboto Condensed', sans-serif;
    overflow-x: hidden;
  }
  .hi-slide { position: relative; width: 1200px; height: 446px; }
  .hi-slide > div{ 
    list-style: none; 
    position: relative;
    width: 754px; 
    height: 446px; 
    margin: 0;
    padding: 0;
  }
  .hi-slide > div > .car-content {
    overflow: hidden; 
    position: absolute; 
    padding: 0;
    cursor: pointer;
    background-size: cover;
  }
</style>
<html>
<?php 
  include "../php/GlobalFun.php";
  $sql = "SELECT * FROM `tb_landing_tag` WHERE id_landing = ".$_GET['id'];
  $query = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($query);
?>
<div class="slide hi-slide" style="top: 120px; right:-600px">
	<div>
		<div class="car-content" data-bs-toggle="modal" data-bs-target="#modal_adobt" alt="img 1"></div>
		<div class="car-content" data-bs-toggle="modal" data-bs-target="#modal_adobt" alt="img 2"></div>
		<div class="car-content" data-bs-toggle="modal" data-bs-target="#modal_adobt" alt="img 3"></div>
		<div class="car-content" data-bs-toggle="modal" data-bs-target="#modal_adobt" alt="img 4"></div>
		<div class="car-content" data-bs-toggle="modal" data-bs-target="#modal_adobt" alt="img 5"></div>
		<div class="car-content" data-bs-toggle="modal" data-bs-target="#modal_adobt" alt="img 6"></div>
	</div>
  <input type="hidden" id="contentTag" value="<?=$data['plant_tag']?>">
</div>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.hislide.js" ></script>
<script>
  $('.slide').hiSlide();
</script>


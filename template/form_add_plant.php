<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <style>
        .form_add{
            padding:14px 20px;
            background: linear-gradient(0deg, rgba(18, 73, 30, 0.5), rgba(18, 73, 30, 0.5)), url(../image/Mangrove1.png), #12491E;
            border-radius: 10px;
            background-size: cover;
        }
        h3{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;
            color: #FFFFFF;
        }
        .table-head-green{
            font-family: Roboto;
            font-style: normal;
            background-color: #12491E;
            color: #FFFFFF;
        }
        .table-body-green{
            font-family: Roboto;
            font-style: normal;
            border-bottom: solid 1px #12491E;
        }
    </style>
    <div class="row">
        <div class="col-5" id="formOfPlant">
            <div class="form_add">
                <h3>Add Plant</h3>
                <form role="form" enctype = "multipart/form-data">
                    <input id="plant_name" class="form-control" style="margin-top:8px;" type="text" placeholder="Plant Name">
                    <input id="plant_number" class="form-control" style="margin-top:8px;" type="text" placeholder="Number of Plant">
                    <div class="form-floating" style="margin-top:8px; height:100px">
                        <textarea id="plant_desc" class="form-control" style="height:100px"></textarea>
                        <label for="floatingTextarea">Plant Description</label>
                    </div>
                    <div class="form-floating" style="margin-top:8px;">
                        <textarea id="plant_cat" class="form-control" style="height:100px"></textarea>
                        <label for="floatingTextarea">Plant Category</label>
                    </div>
                    <input id="plant_loc" class="form-control" style="margin-top:8px;" type="text" placeholder="Plant Location">
                    <input id="plant_address" class="form-control" style="margin-top:8px;" type="text" placeholder="Location Name">
                    <div class="input-group mb-3" style="margin:8px 0 !important;">
                        <label class="input-group-text" for="plant_img">Plant Img</label>
                        <input type="file" class="form-control" id="plant_img">
                    </div>
                    <div style="display: flex; margin-top:0px">
                        <input id="plant_price" class="form-control" type="text" placeholder="Plant Price">
                        <button id="addplant-but" type="button" style="margin-left: 8px; font-family:Roboto; font-weight:bold" class="btn btn-success">UPLOAD</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-7" id="tablePlant">
            <div style="display: flex; margin-bottom:10px">
                <h3 style="margin-top:14px; color:#12491E; margin-right:10px">Plant List</h3>
                <button class="btn btn-success" style="margin-top:8px; font-family:roboto; font-weight:bold; height: 40px; line-height: 10px !important; border-radius:30px; background-color:#12491E; border:none; padding:2px 10px !important; vertical-align:middle">Show Map <i class="bi bi-geo-alt"></i></button>
                <form class="d-flex" style="border-bottom:1px solid #12491E ; height: 24px; margin:14px 0 0 10px;">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"  style="background-color: transparent; border: none; width: 100px; font-size:14px; height:20px; color:white">
                    <button style="font-size: 12px; background-color: transparent ; color: #12491E; border: none; height:20px;">
                        <i class='fas fa-search'></i>
                    </button>
                </form>
                <a href="#" style="color: #12491E; border:none; margin:14px" onclick="zoomThis()" id="zoomThis"><i class="fas fa-compress"></i></a>
            </div>
            <div style="height: 450px !important; overflow-y:scroll">
                <table class="table" style="font-size: 12px;">
                    <thead>
                        <tr class="table-head-green">
                            <th scope="col"></th>
                            <th scope="col">Nama Tanaman</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Status</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>    
                    <tbody id="tableData">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/manager.js"></script>
</html>
<script>
    function zoomThis(){
        if($("#zoomThis > i").attr('class')=="fas fa-compress"){
            $("#formOfPlant").css({'display':'none'})
            $("#zoomThis > i").attr('class',"fas fa-compress-arrows-alt")
            $("#tablePlant").attr('class',"col")
        }else{
            $("#formOfPlant").css({'display':'inline'})
            $("#zoomThis > i").attr('class',"fas fa-compress")
            $("#tablePlant").attr('class',"col-7")
        }
    }
</script>
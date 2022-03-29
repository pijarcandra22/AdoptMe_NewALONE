<!DOCTYPE html>
<html lang="en">
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
        <div class="col-5">
            <div class="form_add">
                <h3>Add Farmer</h3>
                <form role="form">
                    <input id="farmer_name" class="form-control" style="margin-top:8px;" type="text" placeholder="Farmer Name">
                    <input id="farmer_manager" type="hidden" value="1">
                    <div style="display: flex; margin-top:8px">
                        <input id="farmer_loc" class="form-control" type="text" placeholder="Farmer Address">
                        <button id="addfarmer-but" type="button" style="margin-left: 8px; font-family:Roboto; font-weight:bold" class="btn btn-success">UPLOAD</button>
                    </div>
                </form>
            </div>
            <div id="c_maps" class="position-relative" style="height: 500px; margin-top: 20px;"></div>
        </div>
        <div class="col-7">
            <div style="display: flex; margin-bottom:10px">
                <h3 style="margin-top:14px; color:#12491E; margin-right:10px">Farmer List</h3>
                <button class="btn btn-success" style="margin-top:8px; font-family:roboto; font-weight:bold; height: 40px; line-height: 10px !important; border-radius:30px; background-color:#12491E; border:none; padding:2px 10px !important; vertical-align:middle">Show Map <i class="bi bi-geo-alt"></i></button>
                <form class="d-flex" style="border-bottom:1px solid #12491E ; height: 24px; margin:14px 0 0 10px;">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search"  style="background-color: transparent; border: none; width: 100px; font-size:14px; height:20px; color:white">
                    <button style="font-size: 12px; background-color: transparent ; color: #12491E; border: none; height:20px;">
                        <i class='fas fa-search'></i>
                    </button>
                </form>
            </div>
            <table class="table" style="font-size: 12px; margin:0">
                <thead>
                    <tr class="table-head-green">
                        <th scope="col"></th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableData2">
                </tbody>
            </table>
        </div>
    </div>
    <script src="js/manager.js"></script>
    <script>$("#c_maps").load("template/maps_farmerToPlant.php")</script>

</html>
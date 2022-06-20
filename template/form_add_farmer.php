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
        <div class="col-12 col-sm-5">
            <div class="form_add">
                <h3>Add Farmer</h3>
                <form role="form">
                    <input id="farmer_name" class="form-control" style="margin-top:8px;" type="text" placeholder="Farmer Name">
                    <input id="farmer_rek" class="form-control" style="margin-top:8px;" type="text" placeholder="Farmer Rekening">
                    <div style="display: flex; margin-top:8px">
                        <input id="farmer_loc" class="form-control" type="text" placeholder="Farmer Address">
                        <button id="addfarmer-but" type="button" style="margin-left: 8px; font-family:Roboto; font-weight:bold" class="btn btn-success">UPLOAD</button>
                    </div>
                </form>
            </div>
            <div id="c_maps" class="position-relative" style="height: 300px; margin-top: 20px;"></div>
        </div>
        <div class="col-12 col-sm-7">
            <div style="display: flex; margin-bottom:10px">
                <h3 style="margin-top:14px; color:#12491E; margin-right:10px">Farmer List</h3>
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
    <!--<script>$("#c_maps").load("template/maps_farmerToPlant.php")</script>-->

</html>
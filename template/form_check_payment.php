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
        .cat_plan{
            background-size: cover !important;
            background-repeat: no-repeat;
            background-position: center;
            margin-right: 10px;
            padding:10px 20px;
            background: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(image/Mangrove1.png);
            color: white;
            font-weight: bold;
            font-size: 16px;
            border-radius: 60px;
            font-family: Roboto !important;
            border: none;
        }
    </style>
    <div style="display: flex; margin-bottom:10px">
        <h3 style="margin-top:14px; color:#12491E; margin-right:10px">Report Farmer List & Paying Salary</h3>
        <button class="btn btn-success" style="margin-top:8px; font-family:roboto; font-weight:bold; height: 40px; line-height: 10px !important; border-radius:30px; background-color:#12491E; border:none; padding:2px 10px !important; vertical-align:middle">Show Map <i class="bi bi-geo-alt"></i></button>
        <form class="d-flex" style="border-bottom:1px solid #12491E ; height: 24px; margin:14px 0 0 10px;">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search"  style="background-color: transparent; border: none; width: 100px; font-size:14px; height:20px; color:white">
            <button style="font-size: 12px; background-color: transparent ; color: #12491E; border: none; height:20px;">
                <i class='fas fa-search'></i>
            </button>
        </form>
        <a href="#" style="color: #12491E; border:none; margin:14px" onclick="zoomThis()" id="zoomThis"><i class="fas fa-compress"></i></a>
    </div>
    <div>
        <div id="pay_salary" class="horizontal_scroll" style="padding-top:12px !important; padding-bottom: 15px !important;"></div>
    </div>
    <div style="height: 450px !important; overflow-y:scroll">
        <table class="table" style="font-size: 12px;">
            <thead>
                <tr class="table-head-green">
                    <th scope="col"></th>
                    <th scope="col">Nama Tanaman</th>
                    <th scope="col">Nama Adopter</th>
                    <th scope="col">Pengelola</th>
                    <th scope="col">Bukti Pembayaran</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>    
            <tbody id="tablePayment">
            </tbody>
        </table>
    </div>
    <script src="js/admin.js"></script>
</html>
<script>
</script>
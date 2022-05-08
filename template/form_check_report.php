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
    <div style="display: flex; margin-bottom:10px">
        <h3 style="margin-top:14px; color:#12491E; margin-right:10px">Report Farmer List</h3>
        <button class="btn btn-success" style="margin-top:8px; font-family:roboto; font-weight:bold; height: 40px; line-height: 10px !important; border-radius:30px; background-color:#12491E; border:none; padding:2px 10px !important; vertical-align:middle">Show Map <i class="bi bi-geo-alt"></i></button>
    </div>
    <div style="height: 450px !important; overflow-y:scroll">
        <table class="table" style="font-size: 12px;">
            <thead>
                <tr class="table-head-green">
                    <th scope="col"></th>
                    <th scope="col">Nama Tanaman</th>
                    <th scope="col">Nama Petani</th>
                    <th scope="col" class="out-480">Laporan</th>
                    <th scope="col" class="out-480">Foto Terkini</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>    
            <tbody id="tableData3">
            </tbody>
        </table>
    </div>
    <script src="js/manager.js"></script>
</html>
<script>
</script>
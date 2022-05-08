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
        #title_form{
            font-family: Roboto;
            font-style: normal;
            font-weight: bold;
            font-size: 24px;
            line-height: 28px;
            color: #FFFFFF;
            margin-top:14px;
            color:#12491E;
            margin-right:10px
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
            color: white;
            font-weight: bold;
            font-size: 16px;
            border-radius: 60px;
            font-family: Roboto !important;
            border: none;
        }
        @media (max-width: 480px){
            #title_form{
                font-size: 18px;
                line-height: 20px;
                margin: 0;
            }
        }
    </style>
    <div style="display: flex; margin-bottom:10px">
        <h3 id="title_form">Report Farmer List & Paying Salary</h3>
    </div>
    <div style="height: 450px !important; overflow-y:scroll">
        <div id="plant-that-manage" class="horizontal_scroll" style="padding-top:12px !important; padding-bottom: 15px !important;">
        </div>
        <table class="table" style="font-size: 12px;">
            <thead>
                <tr class="table-head-green">
                    <th scope="col"></th>
                    <th scope="col">Nama Tanaman</th>
                    <th scope="col">Lokasi Tanaman</th>
                    <th scope="col" class="out-480">Tanggal Laporan</th>
                    <th scope="col" class="out-480">Laporan</th>
                    <th scope="col" class="out-480">Foto Pelaporan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>    
            <tbody id="tableReport">
            </tbody>
        </table>
    </div>
    <script src="js/farmer.js"></script>
</html>
<script>
</script>
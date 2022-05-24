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
    <div id="plant-that-manage" class="horizontal_scroll d-flex" style="padding-top:12px !important; padding-bottom: 15px !important;"></div>
    <div class="row g-3 justify-content-md-center" id="dataReport"></div>
    <script src="js/farmer.js"></script>
</html>
<script>
</script>
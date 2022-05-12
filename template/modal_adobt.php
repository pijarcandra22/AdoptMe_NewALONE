<html lang="en">
    <style>
        #modal_adobt > div{
            max-width: 1000px;
            border-radius:10px
        }
        #front_img{
            width: 100%;
            height: 100%;
            box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5);
            border-radius:10px
        }
        #back_img{
            box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5);
            background-size:cover;
            border:none
        }
        @media (max-width: 1000px){
            #modal_adobt > div{
                max-width: 900px;
            }
        }
        @media (max-width: 560px){
            #front_img{
                height: 300px;
                box-shadow:none;
            }
        }
    </style>
    <link rel="stylesheet" href="css/modal_style.css">
    <div class="modal fade" id="modal_adobt" tabindex="-1" aria-labelledby="modal_signin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down">
            <div class="modal-content" id="back_img">
                <div class="modal-header" style="border: none; padding-bottom:0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding:0 35px 35px 35px !important;">
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <div id="front_img"></div>
                        </div>
                        <div class="col-12 col-sm-8">
                            <h5 id="namaTanaman" class="header_modal" style="color: #12491E; text-align:left">Nama Tanaman</h5>
                            <form id="StartAdopsiTanaman" role="POST">
                                <div style="display: flex;">
                                    <div style="display: flex;">
                                        <i class="fas fa-map-marker-alt" style="font-size: 26px; padding-right:5px"></i>
                                        <p id="lokasiTanaman" style="text-shadow:none; font-family:Roboto; width:20px;font-style: normal;font-weight: bold;font-size: 12px;line-height: 14px;color: #12491E;">Sesetan Beach</p>
                                    </div>
                                    <div id="all_but_adopt" class="input-group mb-3" style="margin-left:60px; width:250px !important">
                                        <input id="con_idAdopt" name="id_adopt" type="hidden" value="1">
                                        <input id="con_namePlant"name="namaTanaman" type="hidden" value="salwdjsa">
                                        <input id="con_managerPlant" name="pengelolaTanaman" type="hidden" value="1">
                                        <input id="con_email" name="email" type="hidden">
                                        <button type="button" id="btnDoAdopt" class="btn btn-success" style="border-radius:30px 0 0 30px !important; height:25px !important; font-size: 12px !important; border-right:1px white solid; line-height:12px" data-bs-dismiss="modal">Adopt</button>
                                        <input id="banyakTanaman" name="banyak_adopt" type="number" class="form-control" style="background-color:#12491E; height:25px !important; border:#12491E; color:#FFFFFF; border-right:1px white solid; font-size: 12px !important; line-height:12px;" min="1" value="1">
                                        <span class="input-group-text" style="height:25px !important; background-color:#12491E; border-color:#12491E; font-size: 12px !important; line-height:12px; color:white; padding-right:0px">Plant By IDR</span>
                                        <span id="hargaTanaman" class="input-group-text" style="height:25px !important; background-color:#12491E; border-color:#12491E; font-size: 12px !important; padding-left:5px; line-height:12px; border-radius:0 30px 30px 0; color:white" id="basic-addon1"> 99.999</span>
                                    </div>
                                </div>
                            </form>
                            <p id="descTanaman" style="font-family: Roboto; text-shadow:none; font-style: normal; font-weight: bold; font-size: 11px; line-height: 13px; color: #12491E;"></p>
                            <div id="c_modal_ad_content"  style="margin-top: 10px;">
                                <h2 style="font-size: 14px;">Other Plant</h2>
                                <div class="horizontal_scroll">
                                    <?php for($i=0;$i<10;$i++):?>
                                        <div class="c_modal_ad" style="display:inline-block; padding-right: 20px"></div>
                                    <?php endfor?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
<script src="js/adopter.js"></script>
<script>
    $('#btnDoAdopt').on('click', function(){
        var data = $('#StartAdopsiTanaman').serialize();
        jumlah = $("#banyakTanaman").val()
        harga = $("#hargaTanaman").html()
        if (localStorage.getItem("dataAdopter") === null) {
            if (window.confirm('Before you adopt plants you must sign up first')){
                var myModal = new bootstrap.Modal(document.getElementById('modal_signin'), {keyboard: false})
                var myModal2 = new bootstrap.Modal(document.getElementById('modal_adobt'), {keyboard: false})
                myModal.show()
            }
        }else{
            if (window.confirm('Do you sure to adopt '+jumlah+' plant at IDR. '+harga+'?')){
                document.querySelector("body").style.visibility = "hidden";
                document.querySelector("#loader").style.visibility = "visible";
                $.ajax({
                    type: 'POST',
                    url: "php/Adopter/AdpDoAdoption.php",
                    data: data,
                    success: function(data) {
                        document.querySelector("#loader").style.display = "none";
                        document.querySelector("body").style.visibility = "visible";
                        if(data != '1'){
                            alert(data)
                        }else{
                            if (window.confirm('Your bill already send to your email')){
                                dataAkun = JSON.parse(localStorage.getItem("dataAdopter"))
                                location.replace(dataAkun['username']);
                            }
                        }
                    }
                });
            }
        }
    })
</script>
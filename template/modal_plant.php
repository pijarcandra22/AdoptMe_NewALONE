<html>
    <style>
        #modal_plant > div{
            max-width: 900px;
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
    <div class="modal fade" id="modal_plant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen-sm-down" style="border-radius:10px">
            <div class="modal-content" id="back_img">
                <div class="modal-header" style="border: none; padding-bottom:0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding:0 35px 35px 35px !important;">
                    <div class="row">
                        <div class="col-12 col-sm-5">
                            <div id="front_img"></div>
                        </div>
                        <div class="col-12 col-sm-7">
                            <form role="form" enctype = "multipart/form-data">
                                <h5 id="namaUpdateTanaman" style="color: #12491E; font-size: 40px; font-weight:bold; text-align:left">Nama Tanaman</h5>
                                <p id="dataJmlTanaman"></p>
                                <div class="input-group">
                                    <input id="update_pname" class="form-control" style="margin-top:8px;" type="text" placeholder="Plant Name">
                                    <input id="update_paddress" class="form-control" style="margin-top:8px;" type="text" placeholder="Address Name">
                                    <input id="update_ploc" class="form-control" style="margin-top:8px;" type="text" placeholder="Plant Location">
                                </div>
                                <div class="form-floating" style="margin-top:8px; height:100px">
                                    <textarea id="update_pdesc" class="form-control" style="height:100px"></textarea>
                                    <label for="update_pdesc">Plant Description</label>
                                </div>
                                <div class="form-floating" style="margin-top:8px;">
                                    <textarea id="update_pcat" class="form-control" style="height:100px"></textarea>
                                    <label for="update_pcat">Plant Category</label>
                                </div>
                                <div class="input-group mb-3" style="margin:8px 0 !important;">
                                    <label class="input-group-text" for="update_pimg">Plant Img</label>
                                    <input type="file" class="form-control" id="update_pimg">
                                </div>
                                <div style="display: flex; margin-top:0px">
                                    <input id="update_pprice" class="form-control" type="text" placeholder="Plant Price">
                                    <div class="btn-group" role="group" aria-label="Basic example" style="margin-left: 8px; font-weight:bold">
                                        <button id="min_jml" type="button" class="btn btn-dark"><i class="fas fa-minus"></i></button>
                                        <input type="number" min="0" class="form-control" style="width: 80px; border-radius:0; text-align:right" id="update_jml_new">
                                        <button id="plus_jml" type="button" class="btn btn-dark"><i class="fas fa-plus"></i></button>
                                    </div>
                                    <button id="update-plant-but" type="button" style="font-family:Roboto; margin-left: 8px; font-weight:bold" class="btn btn-success" data-bs-dismiss="modal">UPDATE</button>
                                </div>
                                <input type="hidden" id="update_jml">
                                <input type="hidden" id="update_pimg_before">
                                <input type="hidden" id="update_pid">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
<script>
    $("#min_jml").click(function() {
      num = parseInt($("#update_jml_new").val())
      $("#update_jml_new").val(num-1)
    });

    $("#plus_jml").click(function() {
      num = parseInt($("#update_jml_new").val())
      $("#update_jml_new").val(num+1)
    });
</script>
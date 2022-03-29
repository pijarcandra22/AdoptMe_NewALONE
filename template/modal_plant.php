<html>
    <div class="modal fade" id="modal_plant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 500px; border-radius:10px">
            <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border:none">
                <div id="modal_plant_bg" class="modal-header" style="border: none; padding-bottom: 150px; background-size:100%; background-repeat:no-repeat">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form" enctype = "multipart/form-data">
                        <input id="update_pname" class="form-control" style="margin-top:8px;" type="text" placeholder="Plant Name">
                        <input id="update_paddress" class="form-control" style="margin-top:8px;" type="text" placeholder="Address Name">
                        <div class="form-floating" style="margin-top:8px; height:100px">
                            <textarea id="update_pdesc" class="form-control" style="height:100px"></textarea>
                            <label for="update_pdesc">Plant Description</label>
                        </div>
                        <div class="form-floating" style="margin-top:8px;">
                            <textarea id="update_pcat" class="form-control" style="height:100px"></textarea>
                            <label for="update_pcat">Plant Category</label>
                        </div>
                        <input id="update_ploc" class="form-control" style="margin-top:8px;" type="text" placeholder="Plant Location">
                        <div class="input-group mb-3" style="margin:8px 0 !important;">
                            <label class="input-group-text" for="update_pimg">Plant Img</label>
                            <input type="file" class="form-control" id="update_pimg">
                        </div>
                        <div style="display: flex; margin-top:0px">
                            <input id="update_pprice" class="form-control" type="text" placeholder="Plant Price">
                            <button id="update-plant-but" type="button" style="margin-left: 8px; font-family:Roboto; font-weight:bold" class="btn btn-success" data-bs-dismiss="modal">UPDATE</button>
                            <button id="delete-plant-but" type="button" style="margin-left: 8px; font-family:Roboto; font-weight:bold" class="btn btn-danger" data-bs-dismiss="modal">DELETE</button>
                        </div>
                        <input type="hidden" id="update_pimg_before">
                        <input type="hidden" id="update_pid">
                    </form>
                </div>
            </div>
        </div>
    </div>
</html>
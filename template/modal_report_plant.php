<html>
    <div class="modal fade" id="modal_report_plant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered" style="max-width: 700px; border-radius:10px">
            <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border:none">
                <div class="modal-body" style="margin-top: 0;">
                    <div class="position-relative" style="border-radius: 10px 10px 0 0; padding: 20px; background-size:cover !important; height:200px; background:linear-gradient(180deg, rgba(255, 255, 255, 0) 95.76%, #FFFFFF 95.8%), linear-gradient(180deg, rgba(255, 255, 255, 0.341) 0%, rgba(2, 87, 5, 0.248) 55.26%), url(image/landing/Mangrove1.png);">
                    <button style="position: absolute; top:20px; right:20px; z-index:0;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div style="width: max-content;" class="position-absolute bottom-0 start-50 translate-middle-x">
                            <h1 style="line-height: 0.6; font-family:Roboto; font-weight: bold !important; font-size:40pt; color:#FFFFFF">FARMER PAGE</h1>
                        </div>
                    </div>
                    <div style="padding: 20px;">
                        <form action="">
                            <div class="horizontal_scroll">
                                <?php for($i=1;$i<20;$i++):?>
                                    <button class="btn btn-outline-success" style="margin:5px"><?=$i?></button>
                                <?php endfor;?>
                            </div>
                            <div class="input-group" style="width: 100%; margin-top:10px">
                                <input type="text" id="farmer_idPetani" class="form-control" placeholder="Id Petani">
                                <input type="text" id="farmer_namaPetani" class="form-control" placeholder="Nama Petani">
                                <input type="text" id="farmer_idTanaman" class="form-control" placeholder="Id Tanaman">
                            </div>
                            <div class="input-group mb-3" style="margin: 10px 0 0 0 !important;">
                                <label class="input-group-text" for="farmer_plantImage">Gambar Tanaman Terkini</label>
                                <input type="file" class="form-control" id="farmer_plantImage">
                            </div>
                            <div class="form-floating" style="margin-top: 10px !important;">
                                <textarea class="form-control" placeholder="Kondisi Tanaman" id="farmer_report" style="height: 100px"></textarea>
                                <label for="farmer_report">Kondisi Tanaman</label>
                            </div>
                            <div style="margin-top: 10px;">
                                <button type="button" class="btn btn-success" id="upload-reoport-but">UPLOAD</button>
                                <button type="button" class="btn btn-outline-success" id="draf-reoport-but">SAVE DRAF</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</html>
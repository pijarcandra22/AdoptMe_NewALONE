<html>
<div class="modal fade" id="modal_report_plant" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px; border-radius:10px">
        <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border:none">
            <div class="modal-header" style="border-bottom: 0;">
                <button style="position: absolute; top:20px; right:20px; z-index:0;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-top: 0;">
                <h2 class="text-center">Upload Report</h2>

                <form action="" class="d-flex flex-column gap-2 p-3 mt-3">
                    <div class="input-group d-flex gap-1 mb-3 justify-content-center">
                        <div class="form-floating">
                            <input type="text" id="farmer_idPetani" class="form-control">
                            <label for="farmer_idPetani">Id Petani</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" id="farmer_namaPetani" class="form-control">
                            <label for="farmer_namaPetani">Nama Petani</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" id="farmer_idTanaman" class="form-control">
                            <label for="farmer_idTanaman">Id Tanaman</label>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="farmer_plantImage">Gambar Tanaman Terkini</label>
                        <input type="file" class="form-control" id="farmer_plantImage">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Kondisi Tanaman" id="farmer_report" style="height: 100px"></textarea>
                        <label for="farmer_report">Kondisi Tanaman</label>
                    </div>
                    <div class="d-flex justify-content-end gap-3">
                        <button type="button" class="btn btn-success" id="upload-reoport-but">UPLOAD</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>

</html>
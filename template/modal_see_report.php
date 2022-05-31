<html>
<div class="modal fade" id="modal_see_report" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px; border-radius:10px">
        <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border:none">
            <div class="modal-header mb-3" style="border-bottom: 0;">
                <button style="position: absolute; top:20px; right:20px" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-top: 0;">
                <form role="form" enctype="multipart/form-data">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col px-5 py-2 p-md-3">
                            <div id="report_img" style="width:100%; height:400px; overflow-y: scroll;"></div>
                        </div>
                        <div class="col p-5 p-md-3">
                            <h2 id="report_nama"></h2>
                            <p id="report_content"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</html>
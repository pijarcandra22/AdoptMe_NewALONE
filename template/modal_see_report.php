<html>
<div class="modal fade" id="modal_see_report" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px; border-radius:10px">
        <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border:none">
            <div class="modal-header" style="border-bottom: 0;">
                <h6 class="modal-title p-2 rounded-3" style="box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;"></h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="margin-top: 0;">
                <form role="form" enctype="multipart/form-data">
                    <div class="row row-cols-1 row-cols-md-2">
                        <div class="col px-5 py-2 p-md-3">
                            <div id="report_img" style="width:100%; height:400px; overflow-y: scroll;"></div>
                        </div>
                        <div class="col d-flex flex-column gap-3 p-5 p-md-2">
                            <h2 id="report_nama"></h2>
                            <h4 style="color: black; text-align: start;">Report detail: </h4>
                            <p id="report_content" class="overflow-scroll p-2 rounded-3" style="height: 16rem; box-shadow: rgba(9, 30, 66, 0.25) 0px 1px 1px, rgba(9, 30, 66, 0.13) 0px 0px 1px 1px;"></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</html>
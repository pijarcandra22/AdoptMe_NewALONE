<html>
    <div class="modal fade" id="modal_manager" tabindex="-1" aria-labelledby="modal_manager" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen">
            <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border-radius:10px; background-size:cover; border:none">
                <form id="manager_sign" role="post" style="padding-top: 20px;">
                    <div class="modal-body" style="padding:10px 35px !important;">
                        <h5 class="header_modal" style="color: #12491E; padding-bottom:10px">FARMER PAGE</h5>
                        <input type="hidden" name="action" value="sign-in-farmer">
                        <div class="form-floating">
                            <input id="user-in" type="text" class="form-control" name="username">
                            <label for="user-in">Farmer Number</label>
                        </div>
                    </div>
                    <div class="modal-footer mx-auto" style="border: none;; padding:0px 35px 20px 35px !important">
                        <button type="button" id="manager_sign_but" class="btn btn-success" >SIGN IN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</html>
<script>
    var manager = new bootstrap.Modal(document.getElementById('modal_manager'), {keyboard: false})
    if (localStorage.getItem("dataPetani") === null){
        manager.show()
    }

    $("#manager_sign_but").click(function(){
        var data = $('#manager_sign').serialize();
        $.ajax({
            type: 'POST',
            url: "php/Farmer/FrmAcc.php",
            data: data,
            success: function(data) {
                if(data=='2'){
                    alert("Akun Tidak Ditemukan")
                }else{
                    dataFull = JSON.parse(data)
                    localStorage.setItem("dataPetani", JSON.stringify(dataFull));   
                    window.location.reload()
                }
            }
        });
    });
</script>
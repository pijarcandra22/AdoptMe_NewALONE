<html>

<style>
    @media (max-width: 767.98px) {
        #manager_sign {
            width: 90% !important;
        }

        .form-floating {
            height: 5rem !important;
        }
    }

    .form-control {
        height: 100% !important;
    }

    #manager_sign {
        width: 60%;
    }
</style>

<div class="modal fade" id="modal_manager" tabindex="-1" aria-labelledby="modal_manager" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
        <div class="modal-content d-flex justify-content-center align-items-center" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border-radius:10px; background-size:cover; border:none;">
            <form id="manager_sign" role="post" style="padding-top: 20px;">
                <div class="modal-body" style="padding:10px 35px !important;">
                    <h3 class="header_modal text-center fs-1 fs-md-4 mb-5" style="color: #12491E; padding-bottom:10px">MANAGER PAGE</h3>
                    <input type="hidden" name="action" value="sign-in-manager">
                    <div class="form-floating mb-2">
                        <input id="user-in" type="text" class="form-control form-control-lg" name="username" placeholder="username">
                        <label for="user-in">Username</label>
                    </div>
                    <div class="form-floating mb-2" style="margin-top: 10px;">
                        <input id="pass-in" type="password" class="form-control form-control-lg " name="password" placeholder="password">
                        <label for="pass-in">Password</label>
                    </div>
                </div>
                <div class="modal-footer mx-auto" style="border: none; padding:0px 35px 20px 35px !important">
                    <button type="button" id="manager_sign_but" class="btn btn-success">SIGN IN</button>
                </div>
            </form>
        </div>
    </div>
</div>

</html>
<script>
    var manager = new bootstrap.Modal(document.getElementById('modal_manager'), {
        keyboard: false
    })
    if (localStorage.getItem("dataAkunManager") === null) {
        manager.show()
    }

    $("#manager_sign_but").click(function() {
        var data = $('#manager_sign').serialize();
        $.ajax({
            type: 'POST',
            url: "php/Manager/MngAcc.php",
            data: data,
            success: function(data) {
                if (data == '1') {
                    alert("Password Salah")
                } else if (data == '2') {
                    alert("Akun Tidak Ditemukan")
                } else {
                    dataFull = JSON.parse(data)
                    localStorage.setItem("dataAkunManager", JSON.stringify(dataFull));
                    window.location.reload()
                }
            }
        });
    });
</script>
<html lang="en">
<link rel="stylesheet" href="css/modal_style.css">


<div class="modal fade" id="modal_signin" tabindex="-1" aria-labelledby="modal_signin" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="signin" role="post">
                <div class="modal-header" style="border: none; padding-bottom:0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding:0 35px !important;">
                    <h5 class="header_modal mb-3">SIGN IN</h5>
                    <input type="hidden" name="action" value="sign-in-adpoter">
                    <div class="form-floating">
                        <input id="user-in" type="text" class="form-control" name="username" placeholder="Username">
                        <label for="user-in">Username</label>
                    </div>
                    <div class="input-group mb-3 form-floating">
                        <input id="pass-in" type="password" class="form-control" name="password" style="border-right:none;" placeholder="Password">
                        <label for="pass-in">Password</label>
                        <button class="btn btn-light seepass" type="button" style="height: 58px; border: 1px solid #ced4da; border-left:none; background-color:white"><i class="far fa-eye"></i></button>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column gap-3" style="border: none; padding-bottom:40px">
                    <button type="button" class="btn btn-success" id="signinBut">SIGN IN</button>
                    <p>Don't have an account? <a class="fw-bold" style="cursor: pointer; color: #12491E;" role="button" data-bs-target="#modal_signup" data-bs-toggle="modal" data-bs-dismiss="modal">SIGN UP</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_signup" tabindex="-1" aria-labelledby="modal_signup" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="signup" role="POST">
                <div class="modal-header" style="border: none; padding-bottom:0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="padding:0 35px !important;">
                    <h5 class="header_modal mb-3">SIGN UP</h5>
                    <input type="hidden" name="action" value="sign-up-adpoter">
                    <div class="form-floating">
                        <input id="name-up" type="text" class="form-control" name="fullname" placeholder="Full Name">
                        <label for="name-up">Full Name</label>
                    </div>
                    <div class="form-floating">
                        <input id="user-up" type="text" class="form-control" name="username" placeholder="Username">
                        <label for="user-up">Username</label>
                    </div>
                    <div class="form-floating">
                        <input id="email-up" type="email" class="form-control" name="email" placeholder="Email">
                        <label for="email-up">Email</label>
                    </div>
                    <div class="form-floating input-group mb-3">
                        <input id="pass-up" type="password" class="form-control" name="password" style="border-right:none;" placeholder="Password">
                        <label for="pass-up">Password</label>
                        <button class="btn btn-light seepass" type="button" style="height: 58px; border: 1px solid #ced4da; border-left:none; background-color:white"><i class="far fa-eye"></i></button>
                    </div>
                    <div class="form-floating">
                        <input id="repass-up" type="password" class="form-control" name="repassword" placeholder="Re-Password">
                        <label for="repass-up">Re-Password</label>
                    </div>
                </div>
                <div class="modal-footer d-flex flex-column gap-3" style="border: none; padding-bottom:40px">
                    <button type="submit" class="btn btn-success">SIGN UP</button>
                    <p>Already have an account? <a class="fw-bold" style="cursor: pointer; color: #12491E;" role="button" data-bs-target="#modal_signin" data-bs-toggle="modal" data-bs-dismiss="modal">SIGN IN</a></p>
                </div>
            </form>
        </div>
    </div>
</div>


</html>
<script src="js/adopter.js"></script>
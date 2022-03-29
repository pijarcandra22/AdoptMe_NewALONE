<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/modal_style.css">
    <div class="modal fade" id="modal_signin" tabindex="-1" aria-labelledby="modal_signin" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border-radius:10px; background: linear-gradient(90deg, rgba(20, 99, 24, 0.408078) 0%, rgba(255, 255, 255, 0.53) 56.14%, #FFFFFF 56.15%, #FFFFFF 100%), url(image/Mangrove1.png); background-size:cover; border:none">
                <form id="signin" method="post">
                    <div class="modal-header" style="border: none; padding-bottom:0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="padding:0 35px !important;">
                        <h5 class="header_modal">SIGN <b style="color: #12491E;">IN</b></h5>
                        <input type="hidden" name="action" value="sign-in-adpoter">
                        <div class="form-floating">
                            <input id="user-in" type="text" class="form-control" name="username">
                            <label for="user-in">Username</label>
                        </div>
                        <div class="form-floating">
                            <input id="pass-in" type="password" class="form-control" name="password">
                            <label for="pass-in">Password</label>
                        </div>
                    </div>
                    <div class="modal-footer mx-auto" style="border: none;; padding-bottom:40px">
                        <button type="submit" class="btn btn-success" >SIGN IN</button>
                        <button type="button" class="btn btn-success" onclick="openModal(0)">SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal_signup" tabindex="-1" aria-labelledby="modal_signup" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="box-shadow: 10px 0px 30px rgba(0, 0, 0, 0.5); border-radius:10px; background: linear-gradient(90deg, rgba(20, 99, 24, 0.408078) 0%, rgba(255, 255, 255, 0.53) 55.14%, #FFFFFF 55.15%, #FFFFFF 100%), url(image/Mangrove1.png); background-size:cover; border:none">
                <form id="signup" role="POST">
                    <div class="modal-header" style="border: none; padding-bottom:0">
                        <button type="button" class="btn-close" onclick="exitModal()"></button>
                    </div>
                    <div class="modal-body" style="padding:0 35px !important;">\
                        <h5 class="header_modal">SIGN <b style="color: #12491E;">UP</b></h5>
                        <input type="hidden" name="action" value="sign-up-adpoter">
                        <div class="form-floating">
                            <input id="name-up" type="text" class="form-control" name="fullname">
                            <label for="name-up">Full Name</label>
                        </div>
                        <div class="form-floating">
                            <input id="user-up" type="text" class="form-control" name="username">
                            <label for="user-up">Username</label>
                        </div>
                        <div class="form-floating">
                            <input id="email-up" type="email" class="form-control" name="email">
                            <label for="email-up">Email</label>
                        </div>
                        <div class="form-floating">
                            <input id="pass-up" type="password" class="form-control" name="password">
                            <label for="pass-up">Password</label>
                        </div>
                        <div class="form-floating">
                            <input id="repass-up" type="password" class="form-control" name="repassword">
                            <label for="repass-up">Re-Password</label>
                        </div>
                    </div>
                    <div class="modal-footer mx-auto" style="border: none; padding-bottom:40px">
                        <button type="button" class="btn btn-success" onclick="openModal(1)">SIGN IN</button>
                        <button type="submit" class="btn btn-success" >SIGN UP</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var signin = new bootstrap.Modal(document.getElementById('modal_signin'), {keyboard: false})
        var signup = new bootstrap.Modal(document.getElementById('modal_signup'), {keyboard: false})
        function openModal(id){
            if(id==1){
                signin.show()
                signup.toggle()
            }else{
                signin.hide()
                signup.toggle()
            }
        }
        function exitModal(){
            signin.toggle()
            signup.toggle()
        }
    </script>
</html>
<script src="js/adopter.js"></script>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <title>TELERADIO - Register</title>

    <!-- Styles -->
    <link href="assets/css/core.min.css" rel="stylesheet">
    <link href="assets/css/thesaas.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.png">


    <style>
.msg-alert{
  display: none;
  position: fixed;
  left: 50%;
 -ms-transform: translate(-50%);
  transform: translate(-50%); 
  bottom:0;
  z-index: 9999;
}

.msg-alert p{
  font-family: calibri;
  border-radius: 5px 5px 0px 0px;
  padding: 5px 8px;
  font-size: 20px;
  color: white;
}
</style>
  </head>

  <body class="mh-fullscreen bg-img center-vh p-20" style="background-image: url(assets/img/bg-girl.jpg);">




    <div class="card card-shadowed p-50 w-400 mb-0" style="max-width: 100%">
      <h5 class="text-uppercase text-center">S'enregistrer</h5>
      <br><br>

      <form class="form-type-material" id="form_signup" name="form_signup" action="signup.php" method="post">
        <div class="form-group">
          <input type="text" id="reg_uname" name="reg_uname" pattern="^[a-zA-Z ]+$" placeholder="User Name" onchange="check_user()" class="form-control" placeholder="Username">
        </div>

        <div class="form-group">
          <input type="email" id="reg_email" name="reg_email" class="form-control" placeholder="Adresse mail">
        </div>

        <div class="form-group">
          <input type="phone" id="reg_phone" name="reg_phone" class="form-control" placeholder="N° de télephone">
        </div>

    <div class="form-group">
          <input type="text" id="reg_CIN" name="reg_CIN" class="form-control" placeholder="Identité National">
        </div>

        <div class="form-group">
          <input type="password" id="reg_passwd" name="reg_passwd" class="form-control" placeholder="Mot de Passe">
        </div>

        <div class="form-group">
          <input type="password" id="c_password" name="c_password" class="form-control" placeholder="Confirmer le Mot de Passe">
        </div>

        <div class="form-group">
          <label class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input">
            <span class="custom-control-indicator"></span>
            <span class="custom-control-description">I agree to all <a class="text-primary" href="#">terms</a></span>
          </label>
        </div>

        <br>
        <button class="btn btn-bold btn-block btn-primary" type="submit" id="signup-btn" value="Sign up">Register</button>
      
<script type="text/javascript">
            function check_user(){
              var uname = $("#reg_uname").val();
              $.ajax({
                    url: "check_user.php?username="+uname,
                    success: function(data){
                      $(".msg-alert p").html(data);
                      if (data == "Username Available"){
                        $(".msg-alert p").css("background-color","green");
                      }
                      else{
                        $(".msg-alert p").css("background-color","red");
                      }
                      $(".msg-alert").show(0,function(){
                        $(".msg-alert").delay(3000).fadeOut('slow');
                      });
                    }
                  });
          }
          </script>
      </form>

      <hr class="w-30">

      <p class="text-center text-muted fs-13 mt-20">Already have an account? <a href="page-login.html">Sign in</a></p>
    </div>




    <!-- Scripts -->
    <script src="assets/js/core.min.js"></script>
    <script src="assets/js/thesaas.min.js"></script>
    <script src="assets/js/script.js"></script>

  </body>
</html>

<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
  <!-- Begin SEO tag -->
  <title> Sign In | Daakye Welfare Fund </title>
  <meta property="og:title" content="Password Reset">
  <meta name="author" content="Beni Arisandi">
  <meta property="og:locale" content="en_US">
  <meta name="description" content="Daakye Welfare Fund">
  <meta property="og:description" content="Daakye Welfare Fund">
  <link rel="canonical" href="index.php">
  <meta property="og:url" content="index.php">
  <meta property="og:site_name" content="Daakye Welfare Fund">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="144x144" href="school_data/logo/1AmUwsFSik9LMYu/logo.jpg">
  <link rel="shortcut icon" href="assets/favicon.ico">
  <meta name="theme-color" content="#3063A0"><!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
  <!-- BEGIN PLUGINS STYLES -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.css"><!-- END PLUGINS STYLES -->
  <!-- BEGIN THEME STYLES -->
  <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
  <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
  <link rel="stylesheet" href="assets/stylesheets/custom.css">
  <script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>

    <main class="auth">
      <!-- form -->

      <div class="mb-4 auth-form auth-form-reflow">
        <div class="text-center ">
          <div class="mb-4">
           <img class="rounded" src="school_data/logo/1AmUwsFSik9LMYu/logo.jpg" alt="" height="72">
         </div>
         <h1 class="h3"> Reset Your Password </h1>
       </div>
       <p class="mb-4"> Just rest your password with your email</p><!-- .form-group -->
       <div class="form-group mb-4">
        <label class="d-block text-left" for="inputUser">Email</label> <input type="text" id="inputUser" class="form-control form-control-lg   resetPasclass" required="" autofocus="" onkeyup="checkForgetPasswordEmail()">
        <br>
        <p class="text-muted">
          <small class="errorMessageFOrEmail">We'll send password reset link to your email.</small>
        </p>
      </div><!-- /.form-group -->
      <!-- actions -->


      <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
        <span class="sr-only">Loading...</span>
      </div>



      <div class="d-block d-md-inline-block mb-2">
        <button class="btn btn-lg btn-block btn-primary resetBut" type="submit" style="display: none;">Reset Password</button>
      </div>
      <br><br>

      <div class="d-block d-md-inline-block">
        <a href="login.php" class="btn btn-block btn-light">Return to signin</a>
      </div>

    </div>

    <footer class="auth-footer mt-5"> © <?php echo date("Y") ?> All Rights Reserved.Daakye Welfare <a href="#">Privacy</a> and <a href="#">Terms</a>
    </footer>
  </main><!-- /.auth -->
  <!-- BEGIN BASE JS -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> <!-- END BASE JS -->
  <!-- BEGIN THEME JS -->
  <script src="assets/javascript/theme.min.js"></script> <!-- END THEME JS -->
  
</body>


</html>



<script type="text/javascript">
  function checkForgetPasswordEmail() {

    var resetPasclass = $(".resetPasclass").val();
    var errorMessageFOrEmail = $(".errorMessageFOrEmail");
    var loadingBut = $(".loadingBut");



    $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=checkEmailIfitDey",{resetPasclass:resetPasclass},function (showOutPut) {

      if (showOutPut.includes("no")) {

        errorMessageFOrEmail.text("Email doest not Exist !!! You can contact your administrator to reset for you!!!");
        errorMessageFOrEmail.css("color","red");

      } else {

        errorMessageFOrEmail.text("Please wait whiles processing!!!");
        errorMessageFOrEmail.css("color","white");

        loadingBut.show();


        window.location.replace("thanks_for_recovery.php");


      }

    });

    

  }
</script>
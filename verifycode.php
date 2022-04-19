<?php 

include 'cores/config.php';

$getMemID = $_GET['MEM'];

$checkVP = mysqli_query($conn, "SELECT * FROM verify_phone WHERE member_id='$getMemID' AND verify='0' AND active='yes'  ");

if (mysqli_num_rows($checkVP)===1) {

  $getVP = mysqli_fetch_assoc($checkVP);

  $otp = $getVP["otp"];
  $member_id = $getVP["member_id"];
  $mobile = $getVP["mobile"];

}else{

}

 ?>





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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.all.min.js"></script> <!-- END sweet js WRITE JS -->

<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.4/dist/sweetalert2.min.css">
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

          <!-- verify div -->


    <div class="veriFyDiv mb-4 auth-form auth-form-reflow" style="display:block;">
        <div class="text-center ">
          <div class="mb-4">
           <img class="rounded" src="school_data/logo/1AmUwsFSik9LMYu/logo.jpg" alt="" height="72">
         </div>
         <h1 class="h3"> Verify OTP CODE  </h1>
       </div>
       <p class="mb-4"> Please enter the OTP code sent to your phone</p><!-- .form-group -->
       <div class="form-group mb-4">
        <label class="d-block text-left" for="otp">OTP Code</label> 
        <input type="text" id="otp" class="form-control form-control-lg oTPCode" maxlength="6" required="" autofocus=""  placeholder="OTP Code:  eg. ******">

        <div class="showotpDiv">
          
        </div>


        <br>

        <div class="form-group mb-4">
           <button onclick="VerifyOTPCode('<?php echo $otp ?>','<?php echo $mobile ?>')" class="btn btn-lg btn-primary btn-block theBut" type="submit" name="submit">Verify</button>
         </div>


        <p class="text-muted">
          <small class="errorMessageFOrMobile">Didnt received, Please go.</small>
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
        <a href="forgetpassword.php" class="btn btn-block btn-light">Return to forget Password</a>
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

  function VerifyOTPCode(otp,mobile) {
    var oTPCode = $(".oTPCode").val();
    var hiddenOTP = otp;
    var loadingBut = $(".loadingBut");
    var theBut = $(".theBut");


     theBut.hide();
     loadingBut.show();


    if (oTPCode!=="") {

    if (hiddenOTP===oTPCode) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=sendResetPasswordToPhone",{mobile:mobile,hiddenOTP:hiddenOTP},function (showOutPut) {

      //    alert(showOutPut)

      // exit();

     if (showOutPut.includes("errorinupdate")) {
        Swal.fire({
              title: "Error",
              text: "An unexpected error occured in resiting password, Please contact IT Support.!!",
              icon: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });
          theBut.show();
          loadingBut.hide();

      }else if (showOutPut.includes("no")) {
        Swal.fire({
              title: "Error",
              text: "Mobile number invalid",
              icon: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });
          theBut.show();
          loadingBut.hide();

      } else {

           Swal.fire(
            'Successfull!',
            ' Password successfully reseted, New logins has been sent to  ' + mobile,
            'success'
            ).then((result) =>{

              window.location.replace("login.php");

            })

      }

    });


       } else {


            Swal.fire({
            title: "Error",
            text: "Invalid OTP Code!!",
            icon: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });
        theBut.show();
        loadingBut.hide();

       }




    } else {

      Swal.fire({
        title: "Error",
        text: "Field cannot be empty!!!",
        icon: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });

     theBut.show();
     loadingBut.hide();

     

    }



  }
</script>
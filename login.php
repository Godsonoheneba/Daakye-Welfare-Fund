
<?php 



include 'cores/config.php';

$todayDate = date("F j, Y, g:i a"); 

$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];

?>



<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Sign In | Daakye Welfare Fund </title>
  <meta property="og:title" content="Sign In">
  <meta name="author" content="Beni Arisandi">
  <meta property="og:locale" content="en_US">
  <meta name="description" content="Daakye Welfare Fund">
  <meta property="og:description" content="Daakye Welfare Fund">
  <link rel="canonical" href="index.html">
  <meta property="og:url" content="index.html">
  <meta property="og:site_name" content="Daakye Welfare Fund">
  <link rel="apple-touch-icon" sizes="144x144" href="school_data/logo/1AmUwsFSik9LMYu/logo.jpg">
  <link rel="shortcut icon" href="assets/favicon.ico">
  <meta name="theme-color" content="#3063A0">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.css">
  <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
  <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
  <link rel="stylesheet" href="assets/stylesheets/custom.css">
  <script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script>
  </head>
  <body>

    <main class="auth auth-floated">



      <form class="auth-form" action="" method="post">

        <div class="mb-4">
          <div class="mb-3">
            <img class="rounded" src="school_data/logo/1AmUwsFSik9LMYu/logo.jpg" alt="" height="72">
          </div>
          <h1 class="h3"> Sign In </h1>
        </div>
        </p>

        <div class="col-lg-12 errorShow" style="display: none;" >
          <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">×</button> <strong>Oh snap!</strong><span class="showTHeErrorText"> </span> </div>
          </div>


          <div class="form-group mb-4">
            <label class="d-block text-left" for="inputUser">Username</label> <input type="text" id="inputUser" class="form-control form-control-lg" required="" autofocus="" name="username">
          </div>
          <div class="form-group mb-4">
            <label class="d-block text-left" for="inputPassword">Password</label> <input type="password" id="inputPassword" class="form-control form-control-lg" required="" name="password">
          </div>
          <div class="form-group mb-4">
           <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign In</button>
         </div>
       
         <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="remember-me"> <label class="custom-control-label" for="remember-me">Keep me sign in</label>
          </div>
        </div>
        <p class="py-2">
           
        </p>
        <p class="mb-0 px-3 text-muted text-center"> © Copyright © <?php echo date("Y") ?>. All right reserved. <a href="#">Privacy</a> and <a href="#">Terms</a>
        </p>
      </form>


      <div id="announcement" class="auth-announcement" style="background-image: url(assets/images/illustration/img-1.png);">
        <div class="announcement-body">
          <h2 class="announcement-title"> How to Prepare for an Automated Future </h2><a href="#" class="btn btn-warning"><i class="fa fa-fw fa-angle-right"></i> Check Out Now</a>
        </div>
      </div>
    </main>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script> 
    <script src="assets/vendor/particles.js/particles.min.js"></script>
    <script>
     
       $(document).on('theme:init', () =>
       {
        particlesJS.load('announcement', 'assets/javascript/pages/particles.json');
      })
    </script> 
    <script src="assets/javascript/theme.min.js"></script> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116692175-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-116692175-1');
    </script>
  </body>


  </html>

 



  <?php 



  if (isset($_POST["submit"])) {

    $username = strip_tags(htmlentities(stripslashes($_POST['username'])));
    $password = strip_tags(htmlentities(stripslashes($_POST['password'])));

    $username = strtolower($username);
    $encrypted_password = md5($password);

    $activity_type = "login";
    $description = "Login make suceesfully";
 

    if (!empty($username) && !empty($password)) { 
  

      $staff_query = mysqli_query($conn, "SELECT * FROM who_can_login_in WHERE  username='$username' AND password='$encrypted_password' AND confirm='yes' AND active='yes' LIMIT 1 ");
      if (mysqli_num_rows($staff_query)===1) {

        $type = mysqli_fetch_assoc($staff_query)["type"];
        $all_logins = mysqli_fetch_assoc($staff_query)["all_logins"];


        if (!empty($type)) {
          $_SESSION["login_session_type"] = $type;
          $_SESSION["login_session"] = $username;


          if ($type==="1" || $type==="3") {
            
             mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$username','$activity_type','$description','$todayDate') ");


          } else {
            
             mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated) VALUES('$username','$activity_type','$description','$todayDate') ");
          }


          
          mysqli_query($conn, "UPDATE who_can_login_in SET last_login=now(), status='online' WHERE active='yes' AND username='$username' LIMIT 1 ")


          ?>
          <script type="text/javascript">
            location.replace(".home.login-successful");
          </script>
          <?php
        }else{

          ?>
          <script type="text/javascript">
            $(".errorShow").show();
            $(".showTHeErrorText").text(" Unknown Account...!!");
          </script>

          <?php
        }

      }else{
        ?>

        <script type="text/javascript">
          $(".errorShow").show();
          $(".showTHeErrorText").text(" Incorrect credentials...!!");
        </script>

        <?php
      }


    } else {

     ?>

     <script type="text/javascript">

      $(".errorShow").show();
      $(".showTHeErrorText").text(" Username and password cannot be empty");

    </script>

    <?php
  }


} else {
      # code...
}



?>
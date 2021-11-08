<?php 

$getTopCode = $_GET["TRUE"];

$selectStaff = mysqli_query($conn, "SELECT * FROM staff WHERE  active='yes' AND id='$login_session' ");

$getdac2 = mysqli_fetch_assoc($selectStaff);


$id = $getdac2["id"];
$staffID = $getdac2["staffID"];
$encrypted_id = $getdac2["encrypted_id"];
$username = $getdac2["username"];
$encrypted_password = $getdac2["encrypted_password"];
$password = $getdac2["password"];
$firstName = $getdac2["firstName"];
$lastName = $getdac2["lastName"];
$employmentType = $getdac2["employmentType"];
$dob = $getdac2["dob"];
$gender = $getdac2["gender"];
$mobile = $getdac2["mobile"];
$email = $getdac2["email"];
$region = $getdac2["region"];
$marital_status = $getdac2["marital_status"];
$address = $getdac2["address"];
$location = $getdac2["location"];
$home_town = $getdac2["home_town"];
$nationality = $getdac2["nationality"];
$digitalAddress = $getdac2["digitalAddress"];
$staffPhoto = $getdac2["staffPhoto"];
$date_added = $getdac2["date_added"];
$confirm = $getdac2["confirm"];

$staffName = $firstName . " " . $lastName;

$getShortName = substr($firstName, 0,1);



$slEmpl = mysqli_query($conn, "SELECT type_name FROM employment_type WHERE  active='yes' AND type_id='$employmentType' ");
$getLite = mysqli_fetch_assoc($slEmpl);
$type_name = $getLite["type_name"];




?>










<div class="page">
  <!-- .page-cover -->
   <header class="page-cover">
    <div class="text-center">

      <?php 

      if ($staffPhoto==="") {

        if ($gender==='Male') {
          echo "
          <a  class=\"user-avatar user-avatar-xl\">

          <img src=\"assets/images/customs/male.png\" alt=\"\">

          </a>
          " ;
        } else {

          echo "
          <a  class=\"user-avatar user-avatar-xl\">

          <img src=\"assets/images/customs/female.jpg\" alt=\"\">

          </a>
          " ;
        }



      } else {
        echo "
        <a  class=\"user-avatar user-avatar-xl\">

       <img src=\"staff_data/passport/$staffPhoto\" alt=\"\">

        </a>
        " ;
      }

      ?>


      <h2 class="h4 mt-2 mb-0"> <?php echo $staffName ?> </h2>
      <span class="h6 mt-2 mb-0"> Account Confirmation : <?php echo $confirm ?> </span><br>
      <span class="h6 mt-2 mb-0">  <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $type_name ?></span> </span>
      <div class="my-1">
        <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
      </div>
      <p class="text-muted"> <?php echo $staffID ?> </p>
      <p> <?php echo $nationality . " , " . $region . " - " . $location . " - " .  $digitalAddress ?> </p>
    </div><!-- .cover-controls -->
    <div class="cover-controls cover-controls-bottom">
     <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreStaffInfo">More Info.</a>
   </div><!-- /.cover-controls -->
 </header><!-- /.page-cover -->



 


 <?php 

 echo " <nav class=\"page-navs\">
 <div class=\"nav-scroller\">
 <div class=\"nav nav-center nav-tabs\">
 <a class=\"nav-link \" href=\"homepage.php?CHECKER=VIEW_STAFF_PROFILE&TRUE=$encrypted_id \">Overview</a> 
 <a class=\"nav-link active\" href=\"homepage.php?CHECKER=VIEW_MY_ACTIVITIES&TRUE=$encrypted_id \">Activities <span class=\"badge\">16</span></a> 
 <a class=\"nav-link \" href=\"homepage.php?CHECKER=VIEW_MY_PROFILE_SETTINGS&TRUE=$encrypted_id \">Settings</a>

 </div>
 </div>
 </nav>";

 ?>









 <div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="user-profile.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Overview</a>
        </li>
      </ol>
    </nav>
    <h1 class="page-title"> Activities </h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">


      <?php 

      $selectStaff2 = mysqli_query($conn, "SELECT * FROM staff_activities WHERE staff_id='$staffID' AND active='yes' ORDER BY id DESC LIMIT 10 ");

      if (mysqli_num_rows($selectStaff2)!==0) {
        while ($getdacMU = mysqli_fetch_assoc($selectStaff2)) {

          $id = $getdacMU["id"];
          $staff_id = $getdacMU["staff_id"];
          $activity_type = $getdacMU["activity_type"];
          $description = $getdacMU["description"];
          $datecreated = $getdacMU["datecreated"];



          ?>


     <ul class="timeline">
     <!-- <h2 class="section-title"> <?php echo $datecreatedDIs ?> </h2> -->
      
      <!-- .timeline-item -->
      <li class="timeline-item">
        <!-- .timeline-figure -->
        <div class="timeline-figure">
          <span class="tile tile-circle tile-sm"><i class="far fa-calendar-alt fa-lg"></i></span>
        </div><!-- /.timeline-figure -->
        <!-- .timeline-body -->
        <div class="timeline-body">
          <!-- .media -->
          <div class="media">
            <!-- .media-body -->
            <div class="media-body">
              <h6 class="timeline-heading">
                <a  class="text-link"><?php echo $activity_type ?></a>
              </h6>
              <p class="mb-0">
                <a href="#"><?php echo $staffName ?></a> <?php echo $description ?> </p>
                <p class="timeline-date d-sm-none"> $datecreated </p>
              </div><!-- /.media-body -->



              <!-- .media-right -->
              <div class="d-none d-sm-block">
                <span class="timeline-date"><?php echo $datecreated ?></span>
              </div><!-- /.media-right -->
            </div><!-- /.media -->
          </div><!-- /.timeline-body -->
        </li><!-- /.timeline-item -->




          </ul><!-- .timeline -->


          <?php

        }


      } else {
       echo NoActivitiesyet();
     }


     ?>














        </div><!-- /.section-block -->
        <p class="text-center">
          <a target="_blank" href="ViewPDFS/Staff/staff_activities.php?PRINT=PRINT_ACTIVITIES&&TRUE=<?php echo $encrypted_id ?>"><button type="button" class="btn btn-light"><i class="fa fa-fw fa-angle-double-down"></i> Print All</button></a>
        </p>
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->






    <!-- -------------------INCLUDE MORE INFO MODAL---------- -->
    <?php 

    include 'more_staff_info_modal.php';

    ?>
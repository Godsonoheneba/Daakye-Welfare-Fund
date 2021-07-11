<?php 
 
$getMemberID = $_GET["DACO"];
$getMemberIDEncrypt = $_GET["TRUE"];


$selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$getMemberID' AND member_id_encrypt='$getMemberIDEncrypt' AND active='yes' LIMIT 1 ");

if (mysqli_num_rows($selStu)!==0) {

  $getAlls = mysqli_fetch_assoc($selStu);
  

 $id = $getAlls["id"];
  $member_id = $getAlls["member_id"];
  $member_id_encrypt = $getAlls["member_id_encrypt"];
  $password = $getAlls["password"];
  $firstname = $getAlls["firstname"];
  $surname = $getAlls["surname"];
  $residencial_address = $getAlls["residencial_address"];
  $postal_address = $getAlls["postal_address"];
  $place_of_work = $getAlls["place_of_work"];
  $home_town = $getAlls["home_town"];
  $email = $getAlls["email"];
  $telephone = $getAlls["telephone"];
  $dob = $getAlls["dob"];
  $gender = $getAlls["gender"];
  $marital_status = $getAlls["marital_status"];
  $contribution_amount = $getAlls["contribution_amount"];
  $total_contribution_made = $getAlls["total_contribution_made"];
  $last_month_contributed = $getAlls["last_month_contributed"];
  $image = $getAlls["image"];
  $kin_1_name = $getAlls["kin_1_name"];
  $kin_1_mobile = $getAlls["kin_1_mobile"];
  $kin_1_percent = $getAlls["kin_1_percent"];
  $kin_2_name = $getAlls["kin_2_name"];
  $kin_2_mobile = $getAlls["kin_2_mobile"];
  $kin_2_percent = $getAlls["kin_2_percent"];
  $kin_3_name = $getAlls["kin_3_name"];
  $kin_3_mobile = $getAlls["kin_3_mobile"];
  $kin_3_percent = $getAlls["kin_3_percent"];
  $kin_4_name = $getAlls["kin_4_name"];
  $kin_4_mobile = $getAlls["kin_4_mobile"];
  $kin_4_percent = $getAlls["kin_4_percent"];
  $kin_5_name = $getAlls["kin_5_name"];
  $kin_5_mobile = $getAlls["kin_5_mobile"];
  $kin_5_percent = $getAlls["kin_5_percent"];
  $kin_6_name = $getAlls["kin_6_name"];
  $kin_6_mobile = $getAlls["kin_6_mobile"];
  $kin_6_percent = $getAlls["kin_6_percent"];
  $kin_7_name = $getAlls["kin_7_name"];
  $kin_7_mobile = $getAlls["kin_7_mobile"];
  $kin_7_percent = $getAlls["kin_7_percent"];
  $kin_8_name = $getAlls["kin_8_name"];
  $kin_8_mobile = $getAlls["kin_8_mobile"];
  $kin_8_percent = $getAlls["kin_8_percent"];
  $kin_9_name = $getAlls["kin_9_name"];
  $kin_9_mobile = $getAlls["kin_9_mobile"];
  $kin_9_percent = $getAlls["kin_9_percent"];
  $kin_10_name = $getAlls["kin_10_name"];
  $kin_10_mobile = $getAlls["kin_10_mobile"];
  $kin_10_percent = $getAlls["kin_10_percent"];
  $paid_reg_form = $getAlls["paid_reg_form"];
  $has_loan = $getAlls["has_loan"];
  $staff = $getAlls["staff"];
  $date_created = $getAlls["date_created"];

  
  $fullname = $firstname . " " . $surname;

  $getShortName = substr($firstname, 0,1);



  $selectSum = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE member_id='$member_id'  AND active='yes' ");

  $getRow = mysqli_fetch_assoc($selectSum);
  $totalContribution = $getRow["amount"];
  $qualifyLoanAmount = $totalContribution * 2;

  if ($image==="" || $image==="/") {

    if ($gender==="Male") {
      $image = "<figure class=\"user-avatar user-avatar-xl\">
      <img src=\"assets/images/customs/male.png\" >
      </figure>";
    } else {
      $image = "<figure class=\"user-avatar user-avatar-xl\">
      <img src=\"assets/images/customs/female.jpg\" >
      </figure>";
    }


  } else {

   $image = "<figure class=\"user-avatar user-avatar-xl\">
   <img src=\"Datas/members_datas/$image\" >
   </figure>";


 }



} else {

  ?>
  <script type="text/javascript">
    window.location.href='.home.attacked-detected.html.cpp.java.ruby';

  </script>

  <?php


  die();


}





?>










<div class="page">
  <!-- .page-cover -->
  <header class="page-cover">
    <div class="text-center">

      <?php 

      echo "$image";

      ?>


      <h2 class="h4 mt-2 mb-0"> <?php echo $fullname ?> </h2>
 
      <p class="text-muted"> <?php echo $member_id ?> </p>
      <p>
       <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $dob ?>  </span>

       <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $gender ?></span>
     </p>
     <p> <span class="badge badge-subtle badge-primary" style="font-size: 14px;"><?php echo 'Contribution : GH&#8373; ' . number_format($contribution_amount, 2) ?></span> </p>

     <p> <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo 'Total Contribution : GH&#8373; ' . number_format($total_contribution_made, 2) ?></span> </p>

     <p> <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo ' Qualify Loan Amount : GH&#8373; ' . number_format($total_contribution_made*2, 2)  ?></span> </p>

   </div><!-- .cover-controls -->
   <div class="cover-controls cover-controls-bottom">
     <!-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreInformation">More Info.</a> -->


     <a href="ViewPDFS/Members/print_member_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>" class="btn btn-light" target="_blank"> Print Info.</a>
   </div><!-- /.cover-controls -->


 </header><!-- /.page-cover -->

 
 <nav class="page-navs">
  <div class="nav-scroller">
    <div class="nav nav-center nav-tabs">
      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> "> Overview</a> 

 
      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_MEMBER_ACTIVITIES&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Activities <span class="badge"></span></a> 


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_MEMBER_SETTINGS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Settings</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_CONTRIBUTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Contributions</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_LOANS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Loans</a>

         <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_PAYMENTS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Payments</a>

      
    </div>
  </div>
</nav>













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
      <h2 class="section-title"> All Activities </h2><!-- .timeline -->


      <?php 

      $sle = mysqli_query($conn, "SELECT * FROM members_activities WHERE member_id='$member_id' AND active='yes' ORDER BY id DESC LIMIT 50 ");

      if (mysqli_num_rows($sle)>0) {

        while ($ded = mysqli_fetch_assoc($sle)) {

          $id = $ded["id"];
          $member_id = $ded["member_id"];
          $activity_type = $ded["activity_type"];
          $description = $ded["description"];
          $datecreated = $ded["datecreated"];
          $added_by = $ded["added_by"];

          $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$added_by' AND active='yes' LIMIT 1 ");

          $ahe = mysqli_fetch_assoc($staffss);

          $firstName = $ahe["firstName"];
          $lastName = $ahe["lastName"];

          $staffFullNAme = $firstName . " " . $lastName;


          ?>


          <ul class="timeline">
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
                      <a style="color: #3cb9b9;" class="text-link"><?php echo $description ?></a>
                    </h6>
                    <p class="mb-0">
                      <a style="color: #3db9b9;" ><?php echo $activity_type ?></a> By <?php echo $staffFullNAme ?> </p>
                      <p class="timeline-date d-sm-none"> <?php echo $datecreated ?> </p>
                    </div><!-- /.media-body -->
                    <!-- .media-right -->
                    <div class="d-none d-sm-block">
                      <span class="timeline-date"><?php echo $datecreated ?></span>
                    </div><!-- /.media-right -->
                  </div><!-- /.media -->
                </div><!-- /.timeline-body -->
              </li><!-- /.timeline-item -->
              <!-- .timeline-item -->

            </ul><!-- .timeline -->

            <?php


          }

        } else {
          echo "No Activities Yet";
        }


        ?>





      </div><!-- /.section-block -->
      <p class="text-center">
        <a  href="ViewPDFS/Members/member_activities.php?PRINT=PRINT_ACTIVITIES&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>" target="_blank" >
          <button type="button" class="btn btn-light"><i class="fa fa-fw fa-angle-double-down"></i> Print All</button>
        </a>
      </p>
    </div><!-- /.page-section -->
  </div><!-- /.page-inner -->






  <!-- -------------------INCLUDE MORE INFO MODAL---------- -->
  <?php 

  include 'more_info_modal.php';

  ?>
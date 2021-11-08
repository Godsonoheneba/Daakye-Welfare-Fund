<?php 

$getCustomerID = $_GET["DACO"];
$getCustomerIDEncrypt = $_GET["TRUE"];

 
$selStu = mysqli_query($conn, "SELECT * FROM customers WHERE  customer_id='$getCustomerID' AND customer_id_encrypt='$getCustomerIDEncrypt' AND active='yes' LIMIT 1 ");

if (mysqli_num_rows($selStu)!==0) {

  $getAlls = mysqli_fetch_assoc($selStu);
  $id = $getAlls["id"];
  $customer_id = $getAlls["customer_id"];
  $customer_id_encrypt = $getAlls["customer_id_encrypt"];
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
  $image = $getAlls["image"];
  $next_of_kin_name = $getAlls["next_of_kin_name"];
  $next_of_kin_mobile = $getAlls["next_of_kin_mobile"];
  $next_of_kin_resi_address = $getAlls["next_of_kin_resi_address"];
  $date_created = $getAlls["date_created"];

  $fullname = $firstname . " " . $surname;

  $getShortName = substr($firstname, 0,1);


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
      <div class="my-1">
        <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
      </div>
      <p class="text-muted"> <?php echo $customer_id ?> </p>
      <p>
       <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $dob ?>  </span>

       <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $gender ?></span>
     </p>

   </div><!-- .cover-controls -->
   <div class="cover-controls cover-controls-bottom">
     <!-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreInformation">More Info.</a> -->


      <a href="ViewPDFS/Customers/print_customer_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $customer_id_encrypt ?>" class="btn btn-light" target="_blank"> Print Info.</a>
   </div><!-- /.cover-controls -->


 </header><!-- /.page-cover -->

 
 <nav class="page-navs">
  <div class="nav-scroller">
    <div class="nav nav-center nav-tabs">
      <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_INFO&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> "> Overview</a> 


      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_CUSTOMER_ACTIVITIES&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Activities <span class="badge"></span></a> 
 

      <a class="nav-link" href="homepage.php?CHECKER=VIEW_CUSTOMER_SETTINGS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Settings</a>

       <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_LOANS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Loans</a>

       <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_PAYMENTS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Payments</a>


      
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

      $sle = mysqli_query($conn, "SELECT * FROM customer_activities WHERE customer_id='$customer_id' AND active='yes' ORDER BY id DESC LIMIT 50 ");

      if (mysqli_num_rows($sle)>0) {

        while ($ded = mysqli_fetch_assoc($sle)) {

          $id = $ded["id"];
          $customer_id = $ded["customer_id"];
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
         <a  href="ViewPDFS/Customers/customer_activities.php?PRINT=PRINT_ACTIVITIES&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?>" target="_blank" >
          <button type="button" class="btn btn-light"><i class="fa fa-fw fa-angle-double-down"></i> Print All</button>
        </a>
      </p>
    </div><!-- /.page-section -->
  </div><!-- /.page-inner -->






  <!-- -------------------INCLUDE MORE INFO MODAL---------- -->
  <?php 

  include 'more_info_modal.php';

  ?>
<?php 

$getTopCode = $_GET["TRUE"];

$selectStaff = mysqli_query($conn, "SELECT * FROM staff WHERE  active='yes' AND encrypted_id='$getTopCode' ");

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

$staffName = $firstName . " " . $lastName;

$getShortName = substr($firstName, 0,1);


$slEmpl = mysqli_query($conn, "SELECT type_name FROM employment_type WHERE  active='yes' AND type_id='$employmentType' ");
$getLite = mysqli_fetch_assoc($slEmpl);
$type_name = $getLite["type_name"];


$seWho = mysqli_query($conn, "SELECT confirm FROM who_can_login_in WHERE  active='yes' AND username='$staffID' ");
$gegt = mysqli_fetch_assoc($seWho);
$confirm = $gegt["confirm"];




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
 <a class=\"nav-link active\" href=\"homepage.php?CHECKER=VIEW_STAFF_INFO&TRUE=$encrypted_id \">Overview</a> 
 <a class=\"nav-link \" href=\"homepage.php?CHECKER=VIEW_STAFF_ACTIVITIES&TRUE=$encrypted_id \">Activities <span class=\"badge\">16</span></a> 
 <a class=\"nav-link \" href=\"homepage.php?CHECKER=STAFF_SETTINGS&TRUE=$encrypted_id \">Settings</a>

 </div>
 </div>
 </nav>";

 ?>






 <!-- .page-inner -->
 <div class="page-inner">
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- metric row -->


      <div class="d-flex justify-content-between align-items-center">
        <h1 class="section-title mb-0"> <?php echo $staffName ?> </h1><!-- .dropdown -->
        <div class="dropdown">
          <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span><?php echo $staffID ?></span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->




        </div><!-- /.dropdown -->
      </div>
    </div><!-- /.section-block -->
    <!-- grid row -->
    <div class="row">
      <!-- grid column -->
      <div class="col-xl-6">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-header -->
          <div class="card-header border-0">
            <!-- .d-flex -->
            <div class="d-flex align-items-center">
              <span class="mr-auto">Informations</span> <!-- .card-header-control -->
              <div class="card-header-control">
                <!-- .dropdown -->
                <div class="dropdown">
                  <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                  <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-arrow"></div><a href="#" class="dropdown-item">Print</a> <a href="#" class="dropdown-item">Xeport to Excel</a> 
                  </div>
                </div><!-- /.dropdown -->
              </div><!-- /.card-header-control -->
            </div><!-- /.d-flex -->
          </div><!-- /.card-header -->
          <!-- .table-responsive -->
           


          <div class="table-responsive">
            <!-- .table -->
            <table class="table">
              <!-- thead -->
              <thead>
                <tr>
                  <th style="min-width:259px"> Title </th>
                  <th> Information </th>

                </tr>
              </thead><!-- /thead -->
              <!-- tbody -->
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <th> Contact </th>
                    <td> <?php echo $staffID ?> </td>
                  </tr>
                  <tr>
                    <th> Email </th>
                    <td> <?php echo $email ?></td>
                  </tr>
                  <tr>
                    <th> Phone </th>
                    <td> <?php echo $mobile ?></td>
                  </tr>
                  <tr>
                    <th> Address  </th>
                    <td> <address><?php echo $address ?> </address> </td>
                  </tr>
                  <tr>
                    <th> Location </th>
                    <td> <?php echo $location ?> </td>
                  </tr>
                  <tr>
                    <th> Digital Address </th>
                    <td> <?php echo $digitalAddress ?> </td>
                  </tr>
                  <tr>
                    <th> Date Of Birth </th>
                    <td> <?php echo $dob ?>  </td>
                  </tr>


                  <tr>
                    <th> Gender </th>
                    <td> <?php echo $gender ?> </td>
                  </tr>
                  <tr>
                    <th> Nationality </th>
                    <td> <?php echo $nationality ?></td>
                  </tr>
                  <tr>
                    <th> Region </th>
                    <td> <?php echo $region ?></td>
                  </tr>
                  <tr>
                    <th> Hometown  </th>
                    <td> <address><?php echo $home_town ?> </address> </td>
                  </tr>
              
                  <tr>
                    <th> Joined </th>
                    <td> <?php echo $date_added ?>  </td>
                  </tr>
                </tbody>
              </table>
            </table><!-- /.table -->
          </div><!-- /.table-responsive -->




          <!-- .card-footer -->
          <div class="card-footer">
            <!-- <a href="#" class="card-footer-item">View report <i class="fa fa-fw fa-angle-right"></i></a> -->
          </div><!-- /.card-footer -->
        </div><!-- /.card -->
      </div><!-- /grid column -->



      <!-- grid column -->
      <div class="col-xl-6">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-header -->
          <div class="card-header"> Activities </div><!-- /.card-header -->


          <?php 

          $sle = mysqli_query($conn, "SELECT * FROM staff_activities WHERE staff_id='$staffID' AND active='yes' LIMIT 10");

          if (mysqli_num_rows($sle)>0) {

            while ($ded = mysqli_fetch_assoc($sle)) {

              $id = $ded["id"];
              $staff_id = $ded["staff_id"];
              $activity_type = $ded["activity_type"];
              $description = $ded["description"];
              $datecreated = $ded["datecreated"];


              ?>

              <div class="card-body border-top">
                <dl class="d-flex justify-content-between">
                  <dt class="text-left">
                    <span class="mr-2"><?php echo $description ?></span> 
                  </dt>
                  <dd class="text-right mb-0">
                    <strong><?php echo $datecreated ?></strong> <small class="text-muted"></small>
                  </dd>
                </dl>
              </div><!-- /.card-body -->

              <?php




            }

          }else{

            echo "No Activity Yet";
          }

          ?>
          
           <div class="card-footer">
            <a target="_blank" href="ViewPDFS/Staff/staff_activities.php?PRINT=PRINT_ACTIVITIES&&TRUE=<?php echo $encrypted_id ?>" class="card-footer-item">Print All <i class="fa fa-fw fa-angle-right"></i></a>
          </div><!-- /.card-footer -->





        </div><!-- /.card -->
      </div><!-- /grid column -->
    </div><!-- /grid row -->

  </div><!-- /.page-section -->
</div><!-- /.page-inner -->
</div><!-- /.page -->














<!-- -------------------INCLUDE MORE INFO MODAL---------- -->
<?php 

include 'more_staff_info_modal.php';

?>



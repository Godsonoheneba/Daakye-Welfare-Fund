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
  $date_created = $getAlls["date_created"];

  $fullname = $firstname . " " . $surname;


  /*-------------count month of loan collected-------------------*/
  $countToLoan = mysqli_query($conn, "SELECT count(*) AS toLoan  FROM loans_all WHERE active='yes' AND person_id='$getCustomerIDEncrypt'  ");
  $getcountToLoan = mysqli_fetch_array($countToLoan);
  $countTotalmLoan = $getcountToLoan['toLoan'];



  $selectSum = mysqli_query($conn, "SELECT SUM(amount_collected) AS amount_collected FROM loans_all WHERE person_id='$getCustomerIDEncrypt'  AND active='yes' ");

  $getRow = mysqli_fetch_assoc($selectSum);
  $totalLoan = $getRow["amount_collected"];



  $selStuSS = mysqli_query($conn, "SELECT * FROM loans_all WHERE  person_id='$getCustomerIDEncrypt' AND active='yes' ORDER BY id DESC ");

  $getRowLO = mysqli_fetch_assoc($selStuSS);
  $amount_collected = $getRowLO["amount_collected"];
  $issued_by = $getRowLO["issued_by"];








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
      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_CUSTOMER_INFO&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> "> Overview</a> 


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_CUSTOMER_ACTIVITIES&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Activities <span class="badge"></span></a> 


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_CUSTOMER_SETTINGS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Settings</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_LOANS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Loans</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_PAYMENTS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Payments</a>


      
    </div>
  </div>
</nav>





<!-- .page-inner -->
<div class="page-inner">
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- metric row -->
      <div class="metric-row"> 
        <!-- metric column -->
        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"> <?php echo $countTotalmLoan ?></span>
              </p>
              <h2 class="metric-label"> Total Loan Collected  </h2>
            </div>
          </div><!-- /.metric -->
        </div><!-- /metric column -->
        <!-- metric column -->
        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-fork"></i></sub> <span class="value"> GH&#8373; <?php echo number_format($amount_collected, 2) ?></span>
              </p>
              <h2 class="metric-label"> Recent Loan Collected </h2>
            </div>
          </div><!-- /.metric -->
        </div><!-- /metric column -->
        <!-- metric column -->
        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="fa fa-tasks"></i></sub> <span class="value"><?php echo $issued_by  ?></span>
              </p>
              <h2 class="metric-label"> Last Date of Loan Collected </h2>
            </div>
          </div><!-- /.metric -->
        </div><!-- /metric column -->
        <!-- metric column -->
        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
               <sub><i class="oi oi-people"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalLoan, 2) ?></span>
             </p>
             <h2 class="metric-label"> Total Amount of Loan Collected </h2>
           </div>
         </div><!-- /.metric -->
       </div><!-- /metric column -->
     </div><!-- /metric row -->



     <div class="d-flex justify-content-between align-items-center">
      <h1 class="section-title mb-0"> Activities </h1><!-- .dropdown -->

    </div>
  </div><!-- /.section-block -->
  <!-- grid row -->
  <div class="row">
    <!-- grid column -->
    <div class="col-xl-8">
      <!-- .card -->
      <div class="card card-fluid">
        <!-- .card-header -->
        <div class="card-header border-0">
          <!-- .d-flex -->
          <div class="d-flex align-items-center">
            <span class="mr-auto">Time Spent: Activities</span> <!-- .card-header-control -->
            <div class="card-header-control">
              <!-- .dropdown -->
              <div class="dropdown">
                <button type="button" class="btn btn-icon btn-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-fw fa-ellipsis-v"></i></button>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-arrow"></div>
                  <a href="ViewPDFS/Students/student_activities.php?PRINT=PRINT_ACTIVITIES&&TRUE=<?php echo $admissionNumber ?>" target="_blank" class="dropdown-item">Print </a> 

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
                <th> Type </th>
                <th> Description </th>
                <th> Date </th>
                <th> Done By </th>

              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->
            <tbody>
              <!-- tr -->

              <?php 

              $sle = mysqli_query($conn, "SELECT * FROM customer_activities WHERE customer_id='$customer_id' AND active='yes' ORDER BY id DESC LIMIT 10 ");

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
                  <tr> 
                    <td class="align-middle ">
                      <?php echo $activity_type ?>
                    </td>
                    <td class="align-middle"> <?php echo $description ?> </td>
                    <td class="align-middle"> <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $datecreated ?>  </span> </td>
                    <td class="align-middle">  <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $staffFullNAme ?>  </span> </td>
                  </tr><!-- /tr -->
                  <?php


                }

              } else {
                echo "No Activities Yet";
              }


              ?>


              <!-- tr -->

            </tbody><!-- /tbody -->
          </table><!-- /.table -->
        </div><!-- /.table-responsive -->
        <!-- .card-footer -->
        <div class="card-footer">
          <a  href="ViewPDFS/Customers/customer_activities.php?PRINT=PRINT_ACTIVITIES&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?>" target="_blank" class="card-footer-item">Print All <i class="fa fa-fw fa-angle-right"></i></a>
        </div><!-- /.card-footer -->
      </div><!-- /.card -->
    </div><!-- /grid column -->



  </div><!-- /grid row -->

</div><!-- /.page-section -->
</div><!-- /.page-inner -->
</div><!-- /.page -->














<!-- -------------------INCLUDE MORE INFO MODAL---------- -->
<?php 

include 'more_info_modal.php';

?>



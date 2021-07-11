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


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_CUSTOMER_ACTIVITIES&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Activities <span class="badge"></span></a> 


      <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_SETTINGS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Settings</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_LOANS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Loans</a>

      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_CUSTOMER_PAYMENTS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Payments</a>


      
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
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- grid row -->
    <div class="row">
      <!-- grid column -->
      <div class="col-lg-4">
        <!-- .card --> 
        <div class="card card-fluid">
          <h6 class="card-header"> All Loans for <?php echo $fullname ?>  </h6><!-- .nav -->
          <nav class="nav nav-tabs flex-column border-0">
            <a  class="nav-link active">Loans</a>

          </nav><!-- /.nav -->
        </div><!-- /.card -->
      </div><!-- /grid column -->
      <!-- grid column -->
      <div class="col-lg-8">
        <!-- .card -->
        <div class="card card-fluid">
          <h6 class="card-header"> Loans Overview </h6><!-- .card-body -->



          <form  action="" method="post" data-parsley-validate="" validate="" enctype="multipart/form-data" id="">

            <!-- .card-body -->
            <div class="card-body">


              <div class="form-row">

               <header class="page-navs bg-light shadow-sm">
                <!-- .input-group -->

                <div class="input-group has-clearable" >
                  <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find transaction eg. 2020-02-25">
                </div><!-- /.input-group -->
              </header>


            </div><!-- /.form-row -->



            <div class="board p-0 " >
              <!-- .list-group -->
              <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
                <!-- .getsearch -->

                <div class="card card-fluid ">
                  <!-- .card-body -->
                  <div class="card-body">
                    <div class=" table-responsive">
                      <!-- .table -->
                      <table class="table">
                        <!-- thead -->
                        <thead>
                          <tr>
                            <th ></th>
                            <th >Loan Date</th>
                            <th> Amount Received </th>
                            <th> Amount Paid</th>
                            <th> Balance </th>
                            <th> Paid Date </th>
                            <th> Done By </th>
                          </tr>
                        </thead><!-- /thead -->

                        <?php  

                        $selCont2 = mysqli_query($conn, "SELECT * FROM loans_pay WHERE person_id='$getCustomerIDEncrypt'  AND  active='yes' ORDER BY id DESC  ");

                        if (mysqli_num_rows($selCont2) > 0) {

                         while ( $getDem = mysqli_fetch_assoc($selCont2)) {

                           $Tableid = $getDem["id"];
                           $person_id = $getDem["person_id"];
                           $loan_id = $getDem["loan_id"];
                           $loan_collected_date = $getDem["loan_collected_date"];
                           $amount_collected = $getDem["amount_collected"];
                           $amount_paid = $getDem["amount_paid"];
                           $balance_before = $getDem["balance_before"];
                           $date_paid = $getDem["date_paid"];
                           $receipt_no = $getDem["receipt_no"];
                           $date_created = $getDem["date_created"];
                           $staff = $getDem["staff"];




                           $selCont = mysqli_query($conn, "SELECT * FROM loans_all WHERE person_id='$getCustomerIDEncrypt'  AND  active='yes' ORDER BY id DESC  ");


                           $getDem2 = mysqli_fetch_assoc($selCont);

                           $interest_rate = $getDem2["interest_rate"];
                           $total_amount_to_pay = $getDem2["total_amount_to_pay"];
                           $date_issued = $getDem2["date_issued"];




                           $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE id='$staff' AND active='yes'");

                           $fetch =mysqli_fetch_assoc($queryInfo);
                           $table_id = $fetch["id"];

                           $firstName = $fetch["firstName"];
                           $lastName = $fetch["lastName"];

                           $staffFullName = $firstName . " " . $lastName; 

                           ?>


                           <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                            <!-- tr -->
                            <tr>


                              <td class="align-middle px-0" style="width: 1.5rem">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-202015858985<?php echo $Tableid ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                              </td>

                              <td class="align-middle">
                                <a ><?php echo $date_issued ?></a>
                              </td>

                              <td class="align-middle">
                                <a ><?php echo number_format($amount_collected, 2) ?></a>
                              </td>

                              <td class="align-middle">
                                <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo number_format($amount_paid,2) ?></span>
                              </td>


                              <td class="align-middle">
                                <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo number_format($balance_before,2) ?></span>
                              </td>

                              <td class="align-middle">
                                <a ><?php echo $date_paid ?></a>
                              </td>


                              <td class="align-middle">
                               <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $staffFullName ?>
                              </td>

                              <?php
 
                              ?> 


                              <td class="align-middle text-center">

                                <a onclick="window.open('ViewPDFS/Loans/print_loans_receipt.php?PRINT=PRINT_LOANS_PAYMENT_RECEIPT&&DATEPAY=<?php echo $date_issued ?>&&MY_LOAN=<?php echo $loan_id ?>&&TRUE=<?php echo $person_id ?>&&RECEIPT=<?php echo $receipt_no ?>')" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-print"></i> <span class="sr-only">Print</span></a> 


 

                              </td>


                            </tr><!-- /tr -->



                            <!-- tr -->
                            <tr class="row-details bg-light collapse" id="details-202015858985<?php echo $Tableid ?>">
                              <td colspan="6">
                                <!-- .row -->
                                <div class="row">

                                  <div class="col-md-12">


                                    receipt in pdf here



                                  </div><!-- /.col -->

                                </div><!-- /.row -->
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->

                          </tbody><!-- /tbody -->

                          <?php


                        }

                      } else {
                        echo NoTransactionsyet();
                      }


                      ?>




                    </table><!-- /.table -->
                  </div><!-- /.table-responsive -->
                </div><!-- /.card-body -->
              </div><!-- /.card -->

            </div>
          </div>








        </div><!-- /.card-body -->


      </form>







    </div><!-- /.card -->
    <!-- .card -->

  </div><!-- /grid column -->
</div><!-- /grid row -->
</div><!-- /.page-section -->
</div><!-- /.page-inner -->


</div>




<?php 

include 'more_info_modal.php';

?>




<script type="text/javascript">
 function PreviewImage() {


  $(".updatePassportBut").show();
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
  };
};





</script>
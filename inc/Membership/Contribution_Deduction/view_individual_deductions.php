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


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_MEMBER_ACTIVITIES&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Activities <span class="badge"></span></a> 


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_MEMBER_SETTINGS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Settings</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_CONTRIBUTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Contributions</a>


      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_WITHDRAWALS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Withdrawals</a>


      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_MEMBER_DEDUCTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Deductions</a>

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
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- grid row -->
    <div class="row">
      <!-- grid column -->
      <div class="col-lg-4">
        <!-- .card --> 
        <div class="card card-fluid">
          <h6 class="card-header"> All Deductions for <?php echo $fullname ?>  </h6><!-- .nav -->
          <nav class="nav nav-tabs flex-column border-0">
            <a  class="nav-link active">Deductions Summary</a>

            <table class="table">
              <!-- thead -->
              <thead>
                <tr>
                  <th >Year</th>
                  <th> Total # </th>
                  <th> Total Amount </th>
                </tr>
              </thead><!-- /thead -->


              <?php 


              $selectDis = mysqli_query($conn, "SELECT DISTINCT  year FROM deduct_contributions WHERE member_id='$member_id_encrypt'  AND active='yes' ORDER BY year DESC ");


              while ($getRow2 = mysqli_fetch_assoc($selectDis)) {

                $getPaidyear = $getRow2["year"];


                $selectSum1 = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM deduct_contributions WHERE member_id='$member_id_encrypt'  AND active='yes' AND year='$getPaidyear' ");

                $getRow55 = mysqli_fetch_assoc($selectSum1);
                $totalDeductionsforthatyear = $getRow55["amount"];


                $countCOnti = mysqli_query($conn, "SELECT count(*) AS count1 FROM deduct_contributions WHERE member_id='$member_id_encrypt'  AND active='yes' AND year='$getPaidyear'  ");

                $countFetch1 = mysqli_fetch_array($countCOnti);
                $countTOtalConti = $countFetch1['count1'];



                ?>


                <tbody class="getsearchs" data-toggle="sidebar" data-sidebar="show">

                  <tr>
                   <td class="align-middle">
                    <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $getPaidyear ?></span>
                  </td>


                  <td class="align-middle">
                    <span class="badge badge-subtle badge-success" style="font-size: 14px;"> <?php echo $countTOtalConti ?></span>
                  </td>


                  <td class="align-middle">
                    <span class="badge badge-subtle badge-primary" style="font-size: 14px;"> GH&#8373;  <?php echo number_format($totalDeductionsforthatyear, 2) ?></span>
                  </td>


                </tr>
              </tbody>

              <?php

            }






            ?>

          </table>

        </nav><!-- /.nav -->
      </div><!-- /.card -->
    </div><!-- /grid column -->
    <!-- grid column -->
    <div class="col-lg-8">
      <!-- .card -->
      <div class="card card-fluid">
        <h6 class="card-header"> Transactions Overview </h6><!-- .card-body -->



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
                        <tr class="text-center">
                          <th ></th>
                          <th >Year</th>
                          <th> Amount </th>
                          <th> Balance before </th>
                          <th> Date Issued</th>
                          <th> Action </th>
                        </tr>
                      </thead><!-- /thead -->

                      <?php 

                      $selCont = mysqli_query($conn, "SELECT * FROM deduct_contributions WHERE member_id='$getMemberIDEncrypt'  AND  active='yes' ORDER BY year DESC  ");

                      if (mysqli_num_rows($selCont) > 0) {

                       while ( $getDem = mysqli_fetch_assoc($selCont)) {

                        $Tableid = $getDem["id"];
                        $member_id = $getDem["member_id"];
                        $amount = $getDem["amount"];
                        $reason = $getDem["reason"];
                        $balance_before = $getDem["balance_before"];
                        $current_balance = $getDem["current_balance"];
                        $reciept_number = $getDem["reciept_number"];
                        $date_done = $getDem["date_done"];
                        $year = $getDem["year"];
                        $staff = $getDem["staff"];
                                
                    
                        $amountMo = @number_format($amount,2);
                        $balB = @number_format($balance_before,2);


                        ?>


                        <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                          <!-- tr -->
                          <tr class="text-center">


                            <td class="align-middle px-0" style="width: 1.5rem">
                              <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-202015858985<?php echo $Tableid ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                            </td>

                            <td class="align-middle">
                              <a ><?php echo $year ?></a>
                            </td>


                            <td class="align-middle">
                              <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $amountMo ?></span>
                            </td>



                            <td class="align-middle">
                              <a ><?php echo $balB ?></a>
                            </td>


                            <td class="align-middle">
                              <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $date_done ?></span>
                            </td>

                            <?php

                            ?>


                            <td class="align-middle text-center">

                              <a onclick="window.open('ViewPDFS/Members/print_member_deduction_amount_receipt.php?PRINT=PRINT_MEMBER_DEDUCTIONS_RECEIPT&&TRUE=<?php echo $member_id ?>&&RECEIPT=<?php echo $reciept_number ?>')" class="btn btn-sm btn-icon btn-secondary"><i class="fa fa-print"></i> <span class="sr-only">Print</span></a> 

                              <?php 





                            



                            ?>






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
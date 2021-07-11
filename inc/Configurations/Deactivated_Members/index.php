<?php 


$ByFounders = "founders";
$ByaLL = "all";


?>










<div class="page">




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
      <div class="col-lg-3">
        <!-- .card -->  
        <div class="card card-fluid">
          <h6 class="card-header"> Configurations </h6><!-- .nav -->
          

          <nav class="nav nav-tabs flex-column border-0">
           <a  href=".home.settings-staff.config.java.kt" class="nav-link ">Staff</a>
           
           <a  href=".home.settings-member-interest.config.ruby.java.html" class="nav-link ">Member Interest Config</a>
           <a  href=".home.settings-customer-interest.config.ruby.java" class="nav-link ">Customer Interest Config</a>
           <a  href=".home.settings-view-all-deactivate-members.config.java.html.css.java" class="nav-link active">Deactivated Members</a>



           <?php 

            if ($login_session_type==="3") {
              ?>

                 <a  href=".home.settings-payroll.config.java.kt.css" class="nav-link ">PayRoll</a> 
           <a  href=".home.settings-closings.config.java.html.css.jaca" class="nav-link ">Share Dividence</a>

              <?php
            }

            ?>

           
         </nav><!-- /.nav -->
       </div><!-- /.card --> 
     </div><!-- /grid column -->
     <!-- grid column --> 
     <div class="col-lg-9">
      <!-- .card -->
      <div class="card card-fluid">
        <h6 class="card-header"> Deactivated Members</h6><!-- .card-body -->


        <!-- .card-body -->
        <div class="card-body">




          <form  action="" method="post" data-parsley-validate="" validate="" enctype="multipart/form-data" id="">

            <!-- .card-body -->
            <div class="card-body">


              <div class="form-row">

               <header class="page-navs bg-light shadow-sm">
                <!-- .input-group -->

                <div class="input-group has-clearable" >
                  <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> 

                  <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find transaction eg. 2020-02-25">
                </div><!-- /.input-group -->




                


              </header>

             


            </div><!-- /.form-row -->



            <div class="board p-0 perfect-scrollbar" >
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
                          <tr class="text-cente align-middle">
                            <th> Date</th>
                            <th >Name </th>
                            <th >Reason </th>
                            <th >Total Contribution </th>
                            <th >5% Deduction </th>
                            <th >Has Loan </th>
                            <th >Guarantor 1 </th>
                            <th >Guarantor 1 Amount</th>
                            <th >Guarantor 2 </th>
                            <th >Guarantor 2 Amount</th>
                            <th >Amount to be Given </th>
                            <th >Done By </th>
                            <th > </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->


                        <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">






                          <?php 



                          $sel = mysqli_query($conn, "SELECT * FROM members_deactivated WHERE active = 'yes'    ORDER BY id DESC   ");


                          while ($gett= mysqli_fetch_assoc($sel)) {









                            $id = $gett["id"];
                            $member_id = $gett["member_id"];
                            $reason = $gett["reason"];
                            $date_added = $gett["date_added"];
                            $amount_to_be_given = $gett["amount_to_be_given"];
                            $has_loan = $gett["has_loan"];
                            $loan_guarantor1 = $gett["loan_guarantor1"];
                            $guarantor1_amount_deduct = $gett["guarantor1_amount_deduct"];
                            $loan_guarantor2 = $gett["loan_guarantor2"];
                            $guarantor2_amount_deduct = $gett["guarantor2_amount_deduct"];
                            $done_by = $gett["done_by"];

                            // if ($guarantor1_amount_deduct==="") {
                            //   $guarantor1_amount_deduct = "";
                            // } else if ($guarantor2_amount_deduct==="") {
                            //   $guarantor2_amount_deduct = "";
                            // }else {
                            //   # code...
                            // }
                            
              
                        

                            $selStu1 = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$member_id'  LIMIT 1 ");


                            $getAlls2 = mysqli_fetch_assoc($selStu1);
                            $id = $getAlls2["id"];
                            $member_id_encrypt = $getAlls2["member_id_encrypt"];
                            $firstname = $getAlls2["firstname"];
                            $surname = $getAlls2["surname"];
                            $total_contribution_made = $getAlls2["total_contribution_made"];
               
                

                            $memberFullname = $firstname . " " . $surname;

                            $five_percent_of_total = 0.05 * $total_contribution_made;

                            $realAmounttobegiven = $total_contribution_made - $five_percent_of_total;



                            $selStu = mysqli_query($conn, "SELECT * FROM staff WHERE  id='$done_by'  AND active='yes' ");


                            $getAlls = mysqli_fetch_assoc($selStu);
                            $id = $getAlls["id"];
                            $firstName = $getAlls["firstName"];
                            $lastName = $getAlls["lastName"];

                            $staffNAme = $firstName . " " . $lastName;




                            ?> 


                            <!-- tr -->
                            <tr class="align-middle">

                              <td class="align-middle">
                              <?php echo $date_added ?>
                             </td>

                         

                             <td class="align-middle">
                              <?php echo $memberFullname ?>
                             </td>


                             <td class="align-middle">
                              <?php echo $reason ?>
                            </td>


                            <td class="align-middle">
                              <?php echo number_format($total_contribution_made, 2) ?>
                            </td>


                            <td class="align-middle">
                             <?php echo number_format($five_percent_of_total, 2) ?>
                            </td>

                             <td class="align-middle">
                              <?php echo $has_loan ?>
                             </td>

                              <td class="align-middle">
                              <?php echo $loan_guarantor1 ?>
                             </td>


                            <td class="align-middle">
                             <?php echo $guarantor1_amount_deduct ?>
                            </td>



                            <td class="align-middle">
                              <?php echo $loan_guarantor2 ?>
                             </td>


                            <td class="align-middle">
                             <?php echo $guarantor2_amount_deduct ?>
                            </td>



                            <td class="align-middle">
                             <?php echo $amount_to_be_given ?>
                            </td>





                            <td class="align-middle">
                              <?php echo $staffNAme ?>
                            </td>


                            <td class="align-middle text-center">


                             <div class="btn-group btn-group-toggle" data-toggle="buttons" onclick="window.open('ViewPDFS/Deactivated_Members/print_member_deactivation_agreement_form.php?PRINT=PRINT_AGREEMENT_FORM&&NAME=<?php echo $surname ?>&&VIRUS=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>')">

                              <label class="btn btn-secondary" >

                                <input type="radio" name="options" id="option2"> Print Aggreement Form</label> 

                              </div>



                                </td>


                              </tr><!-- /tr -->







                              <?php



                            }



                            ?>
                          </table>


                        </div><!-- /.section-block -->
                      </div><!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </div>
            </form>

          </div>

        </div><!-- /.card -->
        <!-- .card -->

      </div><!-- /grid column -->
    </div><!-- /grid row -->
  </div><!-- /.page-section -->
</div><!-- /.page-inner -->


</div>




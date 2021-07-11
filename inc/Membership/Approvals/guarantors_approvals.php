<?php 



$queryInfo = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$login_session' AND active='yes'");

$fetch =mysqli_fetch_assoc($queryInfo);
$table_id = $fetch["id"];
$personID = $fetch["member_id"];
$personIDEnvrypt = $fetch["member_id_encrypt"];
$password = $fetch["password"];
$firstname = $fetch["firstname"];
$surname = $fetch["surname"];
$residencial_address = $fetch["residencial_address"];
$postal_address = $fetch["postal_address"];
$place_of_work = $fetch["place_of_work"];
$home_town = $fetch["home_town"];
$email = $fetch["email"];
$telephone = $fetch["telephone"];
$dob = $fetch["dob"];
$gender = $fetch["gender"];
$contribution_amount = $fetch["contribution_amount"];
$last_month_contributed = $fetch["last_month_contributed"];
$image = $fetch["image"];
$has_loan = $fetch["has_loan"];
$date_created = $fetch["date_created"];



$userFullName = $firstname . " " . $surname; 

$UserType = "Member";






?>

<!-- .page-title-bar -->
<header class="page-title-bar">
  <!-- .d-flex -->
  <div class="d-flex justify-content-between align-items-center">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="page-teams.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loans <?php echo $UserType ?></a>
        </li>
      </ol>
    </nav><!-- /.breadcrumb -->
    <button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
  </div><!-- /.d-flex -->
  <!-- grid row -->
  <div class="row text-center text-sm-left">
    <!-- grid column -->
    <div class="col-sm-auto col-12 mb-2">

    </div><!-- /grid column -->
    <!-- grid column -->
    <div class="col">
      <h1 class="page-title">  Pending Loans  for  Approvals  </h1>

    </div><!-- /grid column -->
  </div><!-- /grid row -->
  <!-- .nav-scroller -->

</header><!-- /.page-title-bar -->













<div class="board p-0 " >
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
    <div class="card card-fluid">
      <!-- .card-body -->
      <div class="card-body col-12">

        <div class="metric-row">



          <?php 




          $selectLoanTypeeNew = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND ( (guarantor1='$personID' AND guarantor1_confirm='no'  ) OR (guarantor2='$personID' AND guarantor2_confirm='no' ) )  ORDER BY id DESC ");

          if (mysqli_num_rows($selectLoanTypeeNew)!==0) {

            while ( $getdac = mysqli_fetch_assoc($selectLoanTypeeNew)) {


              $Tableid = $getdac["id"];
              $person_id = $getdac["person_id"];
              $status = $getdac["status"];
              $amount_collected = $getdac["amount_collected"];
              $interest_rate = $getdac["interest_rate"];
              $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
              $interest_amount_paid = $getdac["interest_amount_paid"];
              $total_amount_to_pay = $getdac["total_amount_to_pay"];
              $amount_paid = $getdac["amount_paid"];
              $balance = $getdac["balance"];
              $date_requested = $getdac["date_requested"];
              $date_issued = $getdac["date_issued"];
              $monthly_installment = $getdac["monthly_installment"];
              $total_months_for_payment = $getdac["total_months_for_payment"];
              $months_left = $getdac["months_left"];
              $date_of_completion = $getdac["date_of_completion"];
              $next_month_payment_date = $getdac["next_month_payment_date"];
              $next_month_payment_amount = $getdac["next_month_payment_amount"];
              $had_penalty = $getdac["had_penalty"];
              $finish_paying = $getdac["finish_paying"];
              $guarantor1 = $getdac["guarantor1"];
              $guarantor1_confirm = $getdac["guarantor1_confirm"];
              $guarantor2 = $getdac["guarantor2"];
              $guarantor2_confirm = $getdac["guarantor2_confirm"];
              $loan_status = $getdac["loan_status"];
              $issued_by = $getdac["issued_by"];
              $date_added = $getdac["date_added"];
              $loan_added_by = $getdac["loan_added_by"];




              $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE id='$loan_added_by' AND active='yes'");

              $fetch =mysqli_fetch_assoc($queryInfo);
              $table_id = $fetch["id"];
              $firstName = $fetch["firstName"];
              $lastName = $fetch["lastName"];
              $employmentType = $fetch["employmentType"];

              $staffFullName = $firstName . " " . $lastName; 



              if ($status==="Customer") {

                $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                $getDemMem = mysqli_fetch_assoc($selMems);

                $person_idss = $getDemMem["customer_id"];
                $firstname = $getDemMem["firstname"];
                $surname = $getDemMem["surname"];
                $telephone = $getDemMem["telephone"];

                $personName = $firstname . ' ' .  $surname ;

                $getShortName = substr($personName, 0,1);


              } else {
                $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                $getDemMem = mysqli_fetch_assoc($selMems);

                $person_idss = $getDemMem["member_id"];
                $firstname = $getDemMem["firstname"];
                $surname = $getDemMem["surname"];
                $telephone = $getDemMem["telephone"];

                $personName = $firstname .  ' ' .  $surname ;

                $getShortName = substr($personName, 0,1);

              }





              $approvedddd = "Approved";
              $otherUserApproval = "For Other Member";



              if ($guarantor1_confirm==="no" && $guarantor1==="$personID") {

                ?>

               <div class="col-12 ">
                  <div class="alert alert-secondary has-icon alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon">
                      <span class="fa fa-bullhorn"></span>
                    </div>
                    <h4 class="alert-heading"> New Notification! </h4>
                    <p class="mb-0"> Dear <?php echo $userFullName ?>, You have a loan pending Aproval to prove for <?php echo $personName ?> Please click below to approve...  </p>
                  </div><!-- grid row -->
               </div>
                 


                <div class="col-12 col-sm-6 col-lg-3" onclick="approveForGuarantor1('<?php echo $Tableid ?>','<?php echo $personID ?>')">
                  <!-- .metric -->
                  <a  class="metric metric-bordered align-items-center">
                    <h2 class="metric-label"> Approve Loan For <br><br> <?php echo $personName ?> </h2>
                    <p class="metric-value h3">
                      <sub><i class="oi oi-people"></i></sub> <span class="value"> GH&#8373; <?php echo number_format($amount_collected, 2) ?>  </span>
                    </p>

                    <h2 class="metric-label"> Click to Approve  </h2>

                  </a> 
                </div>

                

                <?php



              }else{


 
               ?>


                 <div class="col-12 ">
                  <div class="alert alert-secondary has-icon alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <div class="alert-icon">
                      <span class="fa fa-bullhorn"></span>
                    </div>
                    <h4 class="alert-heading"> New Notification! </h4>
                    <p class="mb-0"> Dear <?php echo $userFullName ?>, You have a loan pending Aproval to prove for <?php echo $personName ?> Please click below to approve...  </p>
                  </div><!-- grid row -->
               </div>
                 


               <div class="col-12 col-sm-6 col-lg-3" onclick="approveForGuarantor2('<?php echo $Tableid ?>','<?php echo $personID ?>')">
                <!-- .metric -->
                <a  class="metric metric-bordered align-items-center">
                  <h2 class="metric-label"> Approve Loan For <br><br>  <?php echo $personName ?> </h2>
                  <p class="metric-value h3">
                    <sub><i class="oi oi-people"></i></sub> <span class="value"> GH&#8373; <?php echo number_format($amount_collected, 2) ?>  </span>
                  </p>

                  <h2 class="metric-label"> Click to Approve  </h2>

                </a> 
              </div>

              <?php






            }



            ?>








            <?php


          }



        } else {
          echo "No Approval Yet";
        }




        ?>

      </div>


    </div>
    <hr class="my-5">








    <div class="col">
      <h1 class="page-title">  List of Loans Approved Already </h1>

    </div><!-- /grid column -->

    <div class="form-row">

     <header class="page-navs bg-light shadow-sm">
      <!-- .input-group -->

      <div class="input-group has-clearable" >
        <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Customer eg. Agyei">
      </div><!-- /.input-group -->
    </header>


  </div><!-- /.form-row -->





  <div class="card-body col-12">
    <div class=" table-responsive">
      <!-- .table -->
      <table class="table">
        <!-- thead -->
        <thead> 
          <tr class="text-center">
            <th></th>
            <th> ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Mobile</th>
            <th> Loan Requested</th>
            <th>Date</th>
          </tr>
        </thead><!-- /thead -->
        <!-- tbody -->



        <?php 



        $selectLoanTypee = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND ( (guarantor1='$personID' AND guarantor1_confirm='yes'  ) OR (guarantor2='$personID' AND guarantor2_confirm='yes' ) )  ORDER BY id DESC ");

        if (mysqli_num_rows($selectLoanTypee)!==0) {

          while ( $getdac = mysqli_fetch_assoc($selectLoanTypee)) {


            $Tableid = $getdac["id"];
            $person_id = $getdac["person_id"];
            $status = $getdac["status"];
            $amount_collected = $getdac["amount_collected"];
            $interest_rate = $getdac["interest_rate"];
            $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
            $interest_amount_paid = $getdac["interest_amount_paid"];
            $total_amount_to_pay = $getdac["total_amount_to_pay"];
            $amount_paid = $getdac["amount_paid"];
            $balance = $getdac["balance"];
            $date_requested = $getdac["date_requested"];
            $date_issued = $getdac["date_issued"];
            $monthly_installment = $getdac["monthly_installment"];
            $total_months_for_payment = $getdac["total_months_for_payment"];
            $months_left = $getdac["months_left"];
            $date_of_completion = $getdac["date_of_completion"];
            $next_month_payment_date = $getdac["next_month_payment_date"];
            $next_month_payment_amount = $getdac["next_month_payment_amount"];
            $had_penalty = $getdac["had_penalty"];
            $finish_paying = $getdac["finish_paying"];
            $guarantor1 = $getdac["guarantor1"];
            $guarantor1_confirm = $getdac["guarantor1_confirm"];
            $guarantor2 = $getdac["guarantor2"];
            $guarantor2_confirm = $getdac["guarantor2_confirm"];
            $loan_status = $getdac["loan_status"];
            $issued_by = $getdac["issued_by"];
            $date_added = $getdac["date_added"];
            $loan_added_by = $getdac["loan_added_by"];




            $selGuaConfi1 = mysqli_query($conn, "SELECT * FROM loans_all WHERE guarantor1='$guarantor1' AND active='yes'  AND guarantor1_confirm='no'  ");

            $getDemMem11 = mysqli_fetch_assoc($selGuaConfi1);
            $guarantorsIDS = $getDemMem11["guarantor1"];
            $guarantorConfirm = $getDemMem11["guarantor1_confirm"];




            $selGuaConfi12 = mysqli_query($conn, "SELECT * FROM loans_all WHERE guarantor2='$guarantor2' AND active='yes'  AND guarantor2_confirm='no'  ");

            $getDemMem12 = mysqli_fetch_assoc($selGuaConfi12);
            $guarantorsIDS = $getDemMem12["guarantor2"];
            $guarantorConfirm = $getDemMem12["guarantor2_confirm"];






            $selGuarantor1 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$guarantor1' AND active='yes'  LIMIT 1  ");

            $getDemMem1 = mysqli_fetch_assoc($selGuarantor1);
            $guarantor1ID = $getDemMem1["member_id"];
            $guarantor1firstname = $getDemMem1["firstname"];
            $guarantor1surname = $getDemMem1["surname"];
            $guarantor1telephone = $getDemMem1["telephone"];

            $guarantor1Name = $guarantor1firstname .  ' ' .  $guarantor1surname ;



            $selGuarantor2 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$guarantor2' AND active='yes'  LIMIT 1  ");

            $getDemMem2 = mysqli_fetch_assoc($selGuarantor2);
            $guarantor2ID = $getDemMem2["member_id"];
            $guarantor2firstname = $getDemMem2["firstname"];
            $guarantor2surname = $getDemMem2["surname"];
            $guarantor2telephone = $getDemMem2["telephone"];

            $guarantor2Name = $guarantor2firstname .  ' ' .  $guarantor2surname ;


            $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE id='$loan_added_by' AND active='yes'");

            $fetch =mysqli_fetch_assoc($queryInfo);
            $table_id = $fetch["id"];
            $firstName = $fetch["firstName"];
            $lastName = $fetch["lastName"];
            $employmentType = $fetch["employmentType"];

            $staffFullName = $firstName . " " . $lastName; 



            if ($status==="Customer") {

              $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

              $getDemMem = mysqli_fetch_assoc($selMems);

              $person_idss = $getDemMem["customer_id"];
              $firstname = $getDemMem["firstname"];
              $surname = $getDemMem["surname"];
              $telephone = $getDemMem["telephone"];

              $personName = $firstname . ' ' .  $surname ;

              $getShortName = substr($personName, 0,1);


            } else {
              $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

              $getDemMem = mysqli_fetch_assoc($selMems);

              $person_idss = $getDemMem["member_id"];
              $firstname = $getDemMem["firstname"];
              $surname = $getDemMem["surname"];
              $telephone = $getDemMem["telephone"];

              $personName = $firstname .  ' ' .  $surname ;

              $getShortName = substr($personName, 0,1);

            }





            ?>

            <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
              <!-- tr -->

              <tr class="text-center">
                <td class="align-middle px-0" style="width: 1.5rem">
                  <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-82020158584<?php echo $Tableid ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                </td>


                <td class="align-middle">
                  <?php echo $person_idss ?> 
                </td>

                <td class="align-middle"> <?php echo $personName ?> </td>
                <td class="align-middle"> <span class="badge badge-subtle badge-primary" style="font-size: 16px;"><?php echo $status ?> </span> </td>
                <td class="align-middle"> <?php echo $telephone ?> </td>

                <td class="align-middle"><span class="badge badge-subtle badge-warning" style="font-size: 16px;"> <?php echo number_format($amount_collected,2) ?></span>

                </td>


                <td class="align-middle">
                  <span class="badge badge-subtle badge-success" style="font-size: 16px;"> 
                    <?php echo $date_added   ?>

                  </span>  


                </td>


              </tr>










              <div class="row col-12">

                <!-- tr -->
                <tr class="row-details bg-light collapse" id="details-82020158584<?php echo $Tableid ?>">
                  <td colspan="20">
                    <!-- .row -->

                    <div class="row" style="overflow-y: auto;">
                     <!-- .col -->
                     <div class="col-md-12 text-center">

                       <center>

                         <div class="col-md-2 text-center">
                          <div class="tile tile-xl tile-circle bg-purple mb-2"> <?php echo $getShortName ?> </div>
                          <h3 class="card-title mb-4"> <?php echo $person_idss ?> </h3>
                          <h3 class="card-title mb-4"> <?php echo $personName ?> </h3>
                        </div><!-- /.col -->


                      </center>


                    </div><!-- /.col -->

                  </div>



                  <div class="row">



                    <div class="col-md-6">
                      <table class="table table-bordered">
                        <tbody>

                          <tr>
                            <th> telephone </th>
                            <td> <?php echo $telephone ?></td>
                          </tr>

                          <tr>
                            <th> Loan Requested  </th>
                            <td> <address><?php echo $amount_collected ?> </address> </td>
                          </tr>

                          <tr>
                            <th> Interest Rate  </th>
                            <td> <?php echo $interest_rate ?> </td>
                          </tr>
                          <tr>
                            <th> Total Interest </th>
                            <td> <?php echo $total_interest_rate_amount ?>  </td>
                          </tr>



                          <tr>
                            <th> Total Amount to Pay </th>
                            <td> <?php echo $total_amount_to_pay ?>  </td>
                          </tr>

                          <tr>
                            <th> Date Requested </th>
                            <td> <?php echo $date_requested ?>  </td>
                          </tr>

                          <tr>
                            <th> Monthly Instalment </th>
                            <td> <?php echo $monthly_installment ?>  </td>
                          </tr>

                          <tr>
                            <th> Total months for payment </th>
                            <td> <?php echo $total_months_for_payment ?> </td>
                          </tr>


                        </tbody>
                      </table>
                    </div><!-- /.col -->



                    <div class="col-md-6">
                      <table class="table table-bordered">
                        <tbody>

                          <tr>
                            <th> Guaranto 1 </th>
                            <td> <?php echo $guarantor1Name ?></td>
                          </tr>
                          <tr>
                            <th> Confirm </th>
                            <td> <?php echo $guarantor1_confirm ?></td>
                          </tr>
                          <tr>
                            <th> Guarantor 2  </th>
                            <td> <address><?php echo $guarantor2Name ?> </address> </td>
                          </tr>
                          <tr>
                            <th> Confirm </th>
                            <td> <?php echo $guarantor2_confirm ?> </td>
                          </tr>
                          <tr>
                            <th> Loan status </th>
                            <td> <?php echo $loan_status ?> </td>
                          </tr>
                          <tr>
                            <th>Added Date </th>
                            <td> <?php echo $date_added ?>  </td>
                          </tr>

                          <tr>
                            <th> Done By </th>
                            <td> <?php echo $staffFullName ?>  </td>
                          </tr>


                        </tbody>
                      </table>
                    </div><!-- /.col -->




                  </div><!-- /.row -->
                </td>
              </tr><!-- /tr -->

            </div>



          </tbody><!-- /tbody -->

          <?php


        }

      } else {
        echo "Approvals Yet" ;
      }




      ?>



    </table><!-- /.table -->
  </div><!-- /.table-responsive -->
</div><!-- /.card-body -->
</div><!-- /.card -->
</div>
</div>
<hr class="my-5">





<script type="text/javascript">


  /*--------------------------------APPROVED GUARANTOR LOAN REQUEST BY THE GUARANTOR 1-----------------------*/

  function approveForGuarantor1(loanID,personID) {

    Swal.fire({
      title: 'Are you sure you want to Guarantee ?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=approvedLoansByGuarantor1Post",{loanID:loanID,personID:personID},function (showOutPut) {


          if (showOutPut.includes("errorinupdate")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in changing",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


          }else{


            Swal.fire(
              'Successfull!',
              ' Successfully Approved ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });




  }


  /*----------------ends approved guarantor 1----------------------*/





  /*--------------------------------APPROVED GUARANTOR LOAN REQUEST BY THE GUARANTOR 2-----------------------*/

  function approveForGuarantor2(loanID,personID) {

    Swal.fire({
      title: 'Are you sure you want to Guarantee ?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=approvedLoansByGuarantor2Post",{loanID:loanID,personID:personID},function (showOutPut) {


          if (showOutPut.includes("errorinupdate")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in changing",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


          }else{


            Swal.fire(
              'Successfull!',
              ' Successfully Approved ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });




  }


  /*----------------ends approved guarantor 2----------------------*/








</script>
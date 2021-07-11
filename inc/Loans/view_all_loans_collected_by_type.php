<?php 

$ViewAllLoansID = "da64883f2825ba6478dce6a8c9ecbf8dAll";
$ViewMemberLoansID = "399b2b9804c57bf4fb2242f5dbdfd0beMember";
$ViewCUstomerLoansID = "0851bf0a73cfb1b3559a277f2f09c66fCustomer";


 

$getLoanTypeID = $_GET["TRUE"];


if ($getLoanTypeID==="da64883f2825ba6478dce6a8c9ecbf8dAll") {
 $getLoanTypeName = "All";
}else if ($getLoanTypeID==="399b2b9804c57bf4fb2242f5dbdfd0beMember") {
 $getLoanTypeName = "Member";
} else {
 $getLoanTypeName = "Customer";

} 


if ($getLoanTypeName==="All") {
  $countAllss = mysqli_query($conn, "SELECT count(*) AS countAl FROM loans_all WHERE active='yes' AND loan_status='issued' ");

  $countFetch = mysqli_fetch_array($countAllss);
  $countTotalClass = $countFetch['countAl'];
} else {
  $countAllss = mysqli_query($conn, "SELECT count(*) AS countAl FROM loans_all WHERE active='yes' AND status='$getLoanTypeName'AND loan_status='issued' ");

  $countFetch = mysqli_fetch_array($countAllss);
  $countTotalClass = $countFetch['countAl'];
}










?>

<!-- .page-title-bar -->
<header class="page-title-bar">
  <!-- .d-flex -->
  <div class="d-flex justify-content-between align-items-center">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="page-teams.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loans</a>
        </li>
      </ol>
    </nav><!-- /.breadcrumb -->
    <button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
  </div><!-- /.d-flex -->
  <!-- grid row -->
  <div class="row text-center text-sm-left">
    <!-- grid column -->
    <div class="col-sm-auto col-12 mb-2">
      <!-- .has-badge -->
           <!--  <div class="has-badge has-badge-bottom">
              <a class="user-avatar user-avatar-xl"><?php echo $logoDB ?></a> <span class="tile tile-circle tile-xs" data-toggle="tooltip" title="Public"><i class="fas fa-globe"></i></span>
            </div> --><!-- /.has-badge -->
          </div><!-- /grid column -->
          <!-- grid column -->
          <div class="col">
            <h1 class="page-title"> All Loans Collected for <?php echo $getLoanTypeName ?></h1>

          </div><!-- /grid column -->
        </div><!-- /grid row -->
        <!-- .nav-scroller -->
        <div class="nav-scroller border-bottom">


          <!-- .nav -->
          <div class="nav nav-tabs">

            <a class="nav-link " href=".login-success.view-al-loans.js.kt.json.java">Overview</a> 

            <a class="nav-link allClass" href="homepage.php?CHECKER=VIEW_LOANS_COLLECTED_BY_TYPE&&TRUE=<?php echo $ViewAllLoansID ?> ">All</a> 
            <a class="nav-link MemberClass" href="homepage.php?CHECKER=VIEW_LOANS_COLLECTED_BY_TYPE&&TRUE=<?php echo $ViewMemberLoansID ?> ">Member</a> 
            <a class="nav-link customerClass" href="homepage.php?CHECKER=VIEW_LOANS_COLLECTED_BY_TYPE&&TRUE=<?php echo $ViewCUstomerLoansID ?> ">Customer</a> 


          </div><!-- /.nav -->



        </div><!-- /.nav-scroller -->
      </header><!-- /.page-title-bar -->


      <div class="section-block">
        <h1 class="page-title mr-sm-auto">Total Loans Collected for   <?php echo $getLoanTypeName . " are : " . $countTotalClass ?> </h1>
      </div><!-- /.section-block -->
      <!-- .card -->




      <div class="form-row">

       <header class="page-navs bg-light shadow-sm">
        <!-- .input-group -->

        <div class="input-group has-clearable" >
          <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Customer eg. Agyei">
        </div><!-- /.input-group -->
      </header>


    </div><!-- /.form-row -->



    <div class="board p-0 " style="overflow-x: hidden;">
      <!-- .list-group -->
      <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
        <div class="card card-fluid">
          <!-- .card-body -->
          <div class="card-body">
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
                    <th> Loan</th>
                    <th> Total   </th>
                    <th>  Balance </th>
                    <th>  Monthly Installment </th>
                    <th> Date  Issued </th>
                    <th>  Repayment period  </th>
                    <th> Status  </th>
                    <th > &nbsp; Action</th>
                  </tr>
                </thead><!-- /thead -->
                <!-- tbody -->



                <?php 

                $selectLoanAll = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes'  AND loan_status='issued' ORDER BY id DESC ");
                $selectLoanTypee = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND loan_status='issued' AND status='$getLoanTypeName' ORDER BY id DESC ");



                if ($getLoanTypeName==="Member") {


                  ?>

                  <script type="text/javascript">
                    $(".allClass").removeClass("active");
                    $(".customerClass").removeClass("active");
                    $(".MemberClass").addClass("active");
                  </script>
                  <?php




                  if (mysqli_num_rows($selectLoanTypee)!==0) {

                    while ( $getdac = mysqli_fetch_assoc($selectLoanTypee)) {


                      $id = $getdac["id"];
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


                      if ($total_months_for_payment==="1") {
                        $MonthsString = "Month";
                      } else {
                        $MonthsString = "Months";
                        
                      }
                      

                      if ($finish_paying==="yes") {
                       $mySTat = "Completed";
                     } else {
                       $mySTat = "Outstanding";

                     }





                     if ($status==="Customer") {

                      $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                      $getDemMem = mysqli_fetch_assoc($selMems);

                      $person_idss = $getDemMem["customer_id"];
                      $firstname = $getDemMem["firstname"];
                      $surname = $getDemMem["surname"];
                      $telephone = $getDemMem["telephone"];

                      $personName = $firstname . ' ' .  $surname ;

                    } else {
                      $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                      $getDemMem = mysqli_fetch_assoc($selMems);

                      $person_idss = $getDemMem["member_id"];
                      $firstname = $getDemMem["firstname"];
                      $surname = $getDemMem["surname"];
                      $telephone = $getDemMem["telephone"];

                      $personName = $firstname .  ' ' .  $surname ;
                    }


                    if ($finish_paying==="yes") {
                      $finishPayLoan="";
                    } else {

                      $finishPayLoan = "   
                      <label class=\"btn btn-secondary\" onclick=\"window.location.href='homepage.php?CHECKER=PROCEED_TO_PAY_LOAN&&LOANBY=$personName&&BALANCE=$balance&&LOANGET=$id&&TRUE=$person_id'  \">

                      <input type=\"radio\" name=\"options\" id=\"option1\" checked > Pay
                      </label>  




                      ";
                    }




                    ?>
                    <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                      <!-- tr -->

                      <tr>
                        <td class="align-middle px-0" style="width: 1.5rem">
                          <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-2020158584<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                        </td>


                        <td class="align-middle">
                          <?php echo $person_idss ?>
                        </td>

                        <td class="align-middle"> <?php echo $personName ?> </td>
                        <td class="align-middle"> <span class="badge badge-subtle badge-primary" style="font-size: 16px;"><?php echo $status ?> </span> </td>
                        <td class="align-middle"> <?php echo $telephone ?> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-warning" style="font-size: 16px;"> <?php echo number_format($amount_collected,2) ?></span> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-primary" style="font-size: 16px;"> <?php echo number_format($total_amount_to_pay,2) ?></span> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo number_format($balance,2) ?></span> </td>

                         <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo number_format($monthly_installment,2) ?></span> </td>


                        <td class="align-middle"> <?php echo $date_issued ?> </td>
                        <td class="align-middle"> <?php echo $total_months_for_payment . " "  . $MonthsString?>  </td>
                 
                        <td class="align-middle"> <?php echo $mySTat ?> </td>


                        <td class="align-middle text-center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons">

                          <?php 

                          echo "$finishPayLoan";

                          ?>


                          <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Loans/print_loans_agreement.php?PRINT_LOAN_AGREEMENT_AMOUNT=<?php echo $amount_collected ?>&&DATE=<?php echo $date_requested ?>&&TRUE=<?php echo $person_id ?>')" >

                            <input type="radio" name="options" id="option3"> Print Receipt
                          </label>



                        </div><!-- /button radio -->


                      </td>


                    </tbody><!-- /tbody -->

                    <?php




                  }

                } else {
                  echo NoCstomerYet();
                }


              }else if ($getLoanTypeName==="Customer") {


                if (mysqli_num_rows($selectLoanTypee)!==0) {

                  while ( $getdac = mysqli_fetch_assoc($selectLoanTypee)) {


                      $id = $getdac["id"];
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


                      if ($total_months_for_payment==="1") {
                        $MonthsString = "Month";
                      } else {
                        $MonthsString = "Months";
                        
                      }
                      

                      if ($finish_paying==="yes") {
                       $mySTat = "Completed";
                     } else {
                       $mySTat = "Outstanding";

                     }





                     if ($status==="Customer") {

                      $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                      $getDemMem = mysqli_fetch_assoc($selMems);

                      $person_idss = $getDemMem["customer_id"];
                      $firstname = $getDemMem["firstname"];
                      $surname = $getDemMem["surname"];
                      $telephone = $getDemMem["telephone"];

                      $personName = $firstname . ' ' .  $surname ;

                    } else {
                      $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                      $getDemMem = mysqli_fetch_assoc($selMems);

                      $person_idss = $getDemMem["member_id"];
                      $firstname = $getDemMem["firstname"];
                      $surname = $getDemMem["surname"];
                      $telephone = $getDemMem["telephone"];

                      $personName = $firstname .  ' ' .  $surname ;
                    }


                    if ($finish_paying==="yes") {
                      $finishPayLoan="";
                    } else {

                      $finishPayLoan = "   
                      <label class=\"btn btn-secondary\" onclick=\"window.location.href='homepage.php?CHECKER=PROCEED_TO_PAY_LOAN&&LOANBY=$personName&&BALANCE=$balance&&LOANGET=$id&&TRUE=$person_id'  \">

                      <input type=\"radio\" name=\"options\" id=\"option1\" checked > Pay
                      </label>  

                      ";
                    }




                    ?>
                    <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                      <!-- tr -->

                      <tr>
                        <td class="align-middle px-0" style="width: 1.5rem">
                          <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-2020158584<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                        </td>


                        <td class="align-middle">
                          <?php echo $person_idss ?>
                        </td>

                        <td class="align-middle"> <?php echo $personName ?> </td>
                        <td class="align-middle"> <span class="badge badge-subtle badge-primary" style="font-size: 16px;"><?php echo $status ?> </span> </td>
                        <td class="align-middle"> <?php echo $telephone ?> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-warning" style="font-size: 16px;"> <?php echo number_format($amount_collected,2) ?></span> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-primary" style="font-size: 16px;"> <?php echo number_format($total_amount_to_pay,2) ?></span> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo number_format($balance,2) ?></span> </td>

                         <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo number_format($monthly_installment,2) ?></span> </td>


                        <td class="align-middle"> <?php echo $date_issued ?> </td>
                        <td class="align-middle"> <?php echo $total_months_for_payment . " "  . $MonthsString?>  </td>
                 
                        <td class="align-middle"> <?php echo $mySTat ?> </td>


                        <td class="align-middle text-center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons">

                          <?php 

                          echo "$finishPayLoan";

                          ?>


                          <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Loans/print_loans_agreement.php?PRINT_LOAN_AGREEMENT_AMOUNT=<?php echo $amount_collected ?>&&DATE=<?php echo $date_requested ?>&&TRUE=<?php echo $person_id ?>')" >

                            <input type="radio" name="options" id="option3"> Print Receipt
                          </label>



                        </div><!-- /button radio -->


                      </td>


                    </tbody><!-- /tbody -->

                    <?php


                  }

              } else {
                echo NoCstomerYet();
              }

            }else{


              if (mysqli_num_rows($selectLoanAll)!==0) {

                while ( $getdac = mysqli_fetch_assoc($selectLoanAll)) {


                      $id = $getdac["id"];
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


                      if ($total_months_for_payment==="1") {
                        $MonthsString = "Month";
                      } else {
                        $MonthsString = "Months";
                        
                      }
                      

                      if ($finish_paying==="yes") {
                       $mySTat = "Completed";
                     } else {
                       $mySTat = "Outstanding";

                     }





                     if ($status==="Customer") {

                      $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                      $getDemMem = mysqli_fetch_assoc($selMems);

                      $person_idss = $getDemMem["customer_id"];
                      $firstname = $getDemMem["firstname"];
                      $surname = $getDemMem["surname"];
                      $telephone = $getDemMem["telephone"];

                      $personName = $firstname . ' ' .  $surname ;

                    } else {
                      $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

                      $getDemMem = mysqli_fetch_assoc($selMems);

                      $person_idss = $getDemMem["member_id"];
                      $firstname = $getDemMem["firstname"];
                      $surname = $getDemMem["surname"];
                      $telephone = $getDemMem["telephone"];

                      $personName = $firstname .  ' ' .  $surname ;
                    }


                    if ($finish_paying==="yes") {
                      $finishPayLoan="";
                    } else {

                      $finishPayLoan = "   
                      <label class=\"btn btn-secondary\" onclick=\"window.location.href='homepage.php?CHECKER=PROCEED_TO_PAY_LOAN&&LOANBY=$personName&&BALANCE=$balance&&LOANGET=$id&&TRUE=$person_id'  \">

                      <input type=\"radio\" name=\"options\" id=\"option1\" checked > Pay
                      </label>  

                      ";
                    }




                    ?>
                    <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                      <!-- tr -->

                      <tr>
                        <td class="align-middle px-0" style="width: 1.5rem">
                          <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-2020158584<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                        </td>


                        <td class="align-middle">
                          <?php echo $person_idss ?>
                        </td>

                        <td class="align-middle"> <?php echo $personName ?> </td>
                        <td class="align-middle"> <span class="badge badge-subtle badge-primary" style="font-size: 16px;"><?php echo $status ?> </span> </td>
                        <td class="align-middle"> <?php echo $telephone ?> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-warning" style="font-size: 16px;"> <?php echo number_format($amount_collected,2) ?></span> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-primary" style="font-size: 16px;"> <?php echo number_format($total_amount_to_pay,2) ?></span> </td>
                        <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo number_format($balance,2) ?></span> </td>

                         <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo number_format($monthly_installment,2) ?></span> </td>


                        <td class="align-middle"> <?php echo $date_issued ?> </td>
                        <td class="align-middle"> <?php echo $total_months_for_payment . " "  . $MonthsString?>  </td>
                 
                        <td class="align-middle"> <?php echo $mySTat ?> </td>


                        <td class="align-middle text-center">
                         <div class="btn-group btn-group-toggle" data-toggle="buttons">

                          <?php 

                          echo "$finishPayLoan";

                          ?>


                          <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Loans/print_loans_agreement.php?PRINT_LOAN_AGREEMENT_AMOUNT=<?php echo $amount_collected ?>&&DATE=<?php echo $date_requested ?>&&TRUE=<?php echo $person_id ?>')" >

                            <input type="radio" name="options" id="option3"> Print Receipt
                          </label>



                        </div><!-- /button radio -->


                      </td>


                    </tbody><!-- /tbody -->

                    <?php


                  }

            } else {
              echo NoCstomerYet();
            }

          }







          ?>





        </table><!-- /.table -->
      </div><!-- /.table-responsive -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div>
</div>
<hr class="my-5">

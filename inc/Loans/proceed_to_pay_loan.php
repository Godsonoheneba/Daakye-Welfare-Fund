   
<?php 
$todayDate = date("F j, Y"); 

$getLoanBy = $_GET["LOANBY"];
$getBalance = $_GET["BALANCE"];
$getLoanID = $_GET["LOANGET"];
$getPersonID = $_GET["TRUE"]; 
 


$selectCust21 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND id='$getLoanID' AND person_id='$getPersonID' AND finish_paying='no' ORDER BY id DESC LIMIT 1 ");

if (mysqli_num_rows($selectCust21) > 0) {


  $getdac1 = mysqli_fetch_assoc($selectCust21);

  $id = $getdac1["id"];
  $person_id = $getdac1["person_id"];
  $status = $getdac1["status"];
  $amount_collected = $getdac1["amount_collected"];
  $interest_rate = $getdac1["interest_rate"];
  $total_interest_rate_amount = $getdac1["total_interest_rate_amount"];
  $interest_amount_paid = $getdac1["interest_amount_paid"];
  $total_amount_to_pay = $getdac1["total_amount_to_pay"];
  $amount_paid = $getdac1["amount_paid"];
  $balance = $getdac1["balance"];
  $date_requested = $getdac1["date_requested"];
  $date_issued = $getdac1["date_issued"];
  $monthly_installment = $getdac1["monthly_installment"];
  $total_months_for_payment = $getdac1["total_months_for_payment"];
  $months_left = $getdac1["months_left"];
  $date_of_completion = $getdac1["date_of_completion"];
  $next_month_payment_date = $getdac1["next_month_payment_date"];
  $next_month_payment_amount = $getdac1["next_month_payment_amount"];
  $had_penalty = $getdac1["had_penalty"];
  $finish_paying = $getdac1["finish_paying"];
  $guarantor1 = $getdac1["guarantor1"];
  $guarantor1_confirm = $getdac1["guarantor1_confirm"];
  $guarantor2 = $getdac1["guarantor2"];
  $guarantor2_confirm = $getdac1["guarantor2_confirm"];
  $loan_status = $getdac1["loan_status"];
  $issued_by = $getdac1["issued_by"];
  $date_added = $getdac1["date_added"];
  $loan_added_by = $getdac1["loan_added_by"];


  $topUpLoanCheck = $total_amount_to_pay / 2;

  $real_monthLeft = $getdac1["months_left"];




  $selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id_encrypt='$getPersonID' AND active='yes' LIMIT 1 ");

  $getAlls = mysqli_fetch_assoc($selStu);
  $id = $getAlls["id"];
  $member_id = $getAlls["member_id"];
  $member_id_encrypt = $getAlls["member_id_encrypt"];
  $firstname = $getAlls["firstname"];
  $surname = $getAlls["surname"];
  $contribution_amount = $getAlls["contribution_amount"];
  $total_contribution_made = $getAlls["total_contribution_made"];
  $has_loan = $getAlls["has_loan"];

  $qualifyLoanAmount = $total_contribution_made * 2;

  $qualifyLoanTopUp = $qualifyLoanAmount - $balance;





 

  $todayss = date("Y-m-d");

  if ($todayss > $next_month_payment_date) {

   $penaltyss = 0.05;

   $penalty_For_late_Payment = $next_month_payment_amount *  $penaltyss;
   $next_month_payment_amount +=$penalty_For_late_Payment;

   $estraString = "( Monthly Installment Plus 5% Penalty  ) ";

   $companyRevenueAmount = ($total_interest_rate_amount / $total_months_for_payment) + $penalty_For_late_Payment;

   $companyRevenuePurpose = "Loan Interest";

 } else {
  $next_month_payment_amount = $next_month_payment_amount;
  $penalty_For_late_Payment = "0";

  $estraString = " ";

  $companyRevenueAmount = $total_interest_rate_amount / $total_months_for_payment;
  $companyRevenuePurpose = "Loan Interest";


}

$RealcompanyRevenueAmount = ($total_interest_rate_amount / $total_months_for_payment);

// echo "penalty_For_late_Payment === $penalty_For_late_Payment >>>>>>> companyRevenueAmount === $companyRevenueAmount >>>>>>>> next_month_payment_amount === $next_month_payment_amount >>>>>>>> RealcompanyRevenueAmount === $RealcompanyRevenueAmount";
// exit();

/*----------------------check if balance is less than monthly installment */
if ($balance <= $monthly_installment) {
  $next_month_payment_amount = $balance;
}




if ($months_left===1) {
  $months_left = $months_left . " Month";
} else {
  $months_left = $months_left . " Months";

}



$actuaInterestPaid = $total_interest_rate_amount / $total_months_for_payment;
$actuaAmountToPayperMOnth = $total_amount_to_pay / $total_months_for_payment;
$actualLoanAMountWihoutInterest = $next_month_payment_amount - $companyRevenueAmount;


// echo "actuaInterestPaid == $actuaInterestPaid >>>>>>> penalty_For_late_Payment === $penalty_For_late_Payment >>>>>>> companyRevenueAmount === $companyRevenueAmount >>>>>>>> next_month_payment_amount === $next_month_payment_amount >>>>>>>> RealcompanyRevenueAmount === $RealcompanyRevenueAmount";
// exit();



  $seleTopUp = mysqli_query($conn, "SELECT * FROM loans_top_up WHERE  loan_id='$getLoanID' AND active='yes' ORDER BY id DESC LIMIT 1 ");

  $getTUp = mysqli_fetch_assoc($seleTopUp);
  $g1_confirm = $getTUp["g1_confirm"];
  $g2_confirm = $getTUp["g2_confirm"];
  $topup_issued = $getTUp["topup_issued"];
  $topup_months = $getTUp["months"];
  $top_up_amount = $getTUp["top_up_amount"];



} else {

  ?>
  <script type="text/javascript">
    window.location.href='.home.attacked-detected.html.cpp.java.ruby';

  </script>

  <?php


  die();


}













if ($finish_paying==="no") {
 ?>








 <div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title"> Pay Loan for <?php echo $getLoanBy ?></h1>
    <hr class="my-5">

    <h1 class="page-title"> Total Loan to Pay :  GH&#8373;  <?php echo number_format($total_amount_to_pay, 2) ?></h1>
     <h1 class="page-title"> Total Loan Paid:  GH&#8373;  <?php echo number_format($amount_paid, 2) ?></h1>
    <h1 class="page-title"> Current Balance  : GH&#8373;  <?php echo number_format($balance, 2) ?></h1>
    <h1 class="page-title"> Total Months Left :   <?php echo $months_left ?></h1>
    <h1 class="page-title"> Monthly Installment :  GH&#8373;  <?php echo number_format($monthly_installment, 2) ?></h1>
    <h1 class="page-title"> Current Date for Payment  :  <?php echo $next_month_payment_date ?></h1>
    <h1 class="page-title"> PAY THIS AMOUNT!!! :  GH&#8373;  <?php echo number_format($next_month_payment_amount, 2) ?> <span style="font-size: 18px;"><?php echo $estraString ?> </span>   </h1>

  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Select to make a transaction</p>
    </div><!-- /.section-block -->
  </div><!-- /.page-section -->



</div><!-- /.section-block -->
<!-- grid row -->
<div class="row">
  <!-- grid column -->
  <div class="col-lg-12 ">
    <!-- .card -->
    <div class="card card-fluid " style="margin-left: 5px;">


         <div class="metric-row "  >


   

           <div class="col-12 col-sm-6 col-lg-3" data-toggle="modal" data-target="#payLoanModal">
              <!-- .metric -->
              <a  class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Pay Your Loan</h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value"> PAY</span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->


           <div class="col-12 col-sm-6 col-lg-3" data-toggle="modal" data-target="#extenLoanModal">
              <!-- .metric -->
              <a class="metric metric-bordered align-items-center">
                <h2 class="metric-label">  Extend Your Loan Peroid   </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value">EXTEND</span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->


           <div class="col-12 col-sm-6 col-lg-3" onclick="quitCustomerLoan('<?php echo $getLoanID ?>','<?php echo $getPersonID ?>')">
              <!-- .metric -->
              <a  class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Pay of your Loan  </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value">Pay Off </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->


            <?php 

                if ($amount_paid >= $topUpLoanCheck && $status==="Member") {



                  if ($g2_confirm==='yes' && $g1_confirm==='yes' && $topup_issued=='no') {

                    $mode = 1;

                    ?>

                      <div class="col-12 col-sm-6 col-lg-3" data-toggle="modal" data-target="#topUpLoan">
                        <!-- .metric -->
                        <a  class="metric metric-bordered align-items-center">
                          <h2 class="metric-label"> Issue Top up Loan  </h2>
                          <p class="metric-value h3">
                            <sub><i class="oi oi-people"></i></sub> <span class="value">Issue Top Up </span>
                          </p>
                        </a> <!-- /.metric -->
                      </div><!-- /metric column -->

                  <?php
                    
                  } else {

                    if ($g1_confirm==='no' || $g2_confirm==='no' && $topup_issued=='no') {
                      ?>

                        <div class="col-12 col-sm-6 col-lg-3" >
                          <!-- .metric -->
                          <a  class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Wating for guarantors </h2>
                            <p class="metric-value h3">
                              <sub><i class="oi oi-people"></i></sub> <span class="value">Wating - Top Up </span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->

                     <?php
                    } else {

                      $mode = 0;

                        
                        ?>

                        <div class="col-12 col-sm-6 col-lg-3" data-toggle="modal" data-target="#topUpLoan">
                          <!-- .metric -->
                          <a  class="metric metric-bordered align-items-center">
                            <h2 class="metric-label"> Top up your Loan  </h2>
                            <p class="metric-value h3">
                              <sub><i class="oi oi-people"></i></sub> <span class="value">Top Up </span>
                            </p>
                          </a> <!-- /.metric -->
                        </div><!-- /metric column -->

                     <?php

                    }
                    





                  }
                  




                  
                  
                } 
                

             ?>



          </div>


            </div><!-- /.section-block -->

          <hr class="my-5">


        </div><!-- /.card -->
      </div><!-- /grid column -->
      <!-- grid column -->


    </div><!-- /grid row -->


  </div>


  <?php 

  include 'pay_loan_modal.php';


  include 'qiut_loan_by_customer_modal.php';


  include 'top_up_loan_modal.php';



  ?>






  <?php
} else {
  

  ?>









  <div class="page-inner">
    <!-- .page-title-bar -->
    <header class="page-title-bar"> 
      <!-- page title stuff goes here -->
      <h1 class="page-title"> You have no outstanding loan to pay</h1>
      <hr class="my-5">

      <h1 class="page-title"> You can Apply For a new loan </h1>
      

    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
      <!-- .section-block -->
      <div class="section-block">
        <!-- page content goes here -->
      </div><!-- /.section-block -->
    </div><!-- /.page-section -->



  </div><!-- /.section-block -->



  <?php
}




include 'extend_loan_period_modal.php';




?>







<script type="text/javascript">
  
  /*-------------------------quit loan by customer---------------*/

  function quitCustomerLoan(getLoanID,getPersonID) {
    
 

    Swal.fire({
      title: 'Are you sure you want to Pay Off the loan',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Pay Off Loan!' 
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=quitLoanPost",{getLoanID:getLoanID,getPersonID:getPersonID},function (showOutPut) {



          if (showOutPut.includes("ERROR")) {
            Swal.fire({
              title: "Error",
              text: "Amount filed cannot be empty",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            
          }else{




            Swal.fire({
              title: "Successfull",
              text: "Successfully Pay Off" ,
              type: "success",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            }).then((result) => {
              if (result.value) {

                 window.location.replace(".home.login-successful");

                

              } 
            })


          }


        });

      }


    });





  }


</script>
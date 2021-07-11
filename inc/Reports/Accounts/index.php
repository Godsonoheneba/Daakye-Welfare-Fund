  
<?php 
 
$All_Contributions = "All Contributions's Revenue";
$Loans_Given = "Loans Given's Revenue";
$Interest_get = "All Interest's Revenue";
$TOtal_Revenue = "Total Revenue";
$TOtal_Loan_Paid = "Total Loans Paid";



$todDay = date("Y-m-d");

/*-----------------get total contribution ----------------*/
$getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE  active='yes'   ");
$getRow = mysqli_fetch_assoc($getToContribution);
$totalContriAmount = $getRow["amount"];




/*-----------------get total loans given ----------------*/
$getTotalLoansGiven = mysqli_query($conn, "SELECT SUM(amount_collected) AS amount_collected FROM loans_all WHERE  active='yes'   ");
$getRow2 = mysqli_fetch_assoc($getTotalLoansGiven);
$totalloanAMount = $getRow2["amount_collected"];



/*-----------------get total loans given interest ----------------*/
$getTotalLoansGivenInte = mysqli_query($conn, "SELECT SUM(interest_rate) AS interest_rate FROM loans_all WHERE  active='yes'   ");
$getRow23 = mysqli_fetch_assoc($getTotalLoansGivenInte);
$totalloanAMountInterst = $getRow23["interest_rate"];


/*-----------------get total loans paid ----------------*/
$gettotalLonsPid = mysqli_query($conn, "SELECT SUM(amount_paid) AS amount_paid FROM loans_pay WHERE  active='yes'   ");
$getRow231 = mysqli_fetch_assoc($gettotalLonsPid);
$totalLoansPaid = $getRow231["amount_paid"];



/*-----------------get total Revenue ----------------*/


$totalRevenueGet = $totalContriAmount + $totalloanAMountInterst;




?>

<div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title">Accounts Reports </h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Select to view Account reports </p>
    </div><!-- /.section-block -->
  </div><!-- /.page-section -->



</div><!-- /.section-block -->
<!-- grid row -->
<div class="row">
  <!-- grid column -->
  <div class="col-lg-12">
    <!-- .card -->


    <div class="col-lg-12">


     <div class="section-block text-center text-sm-left " style="margin: 30px!important;">
      <!-- <h3 class="section-title text-center"> <?php echo $todayDate ?> | Today's Revenue </h3> -->
      <!-- .visual-picker -->

      <div class="metric-row">



       <div class="col-12 col-sm-6 col-lg-6">
        <!-- .metric -->
        <a style="cursor: pointer;" onclick="window.open('ViewPDFS/Reports/Members/print_all_member_contribution_list.php') " >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $All_Contributions ?></span>

                <br>
                <br>
              </p>


              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo number_format($totalContriAmount, 2) ?></span>

                <br>
                <br>
              </p>


              <h2 class="metric-label"> Click to Print Report List </h2>
            </div>
          </div><!-- /.metric -->
        </a>
      </div><!-- /metric column -->


 

      <div class="col-12 col-sm-6 col-lg-6">
        <!-- .metric -->
        <a style="cursor: pointer;" onclick="window.open('ViewPDFS/Reports/loans/print_all_loans_list.php?PRINT=PRINT_ALL_LOANS_CONTRIBUTION_LIST_FOR_ALL&&TRUE=All') " >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $Loans_Given ?> </span>

                <br>
                <br>
              </p>



              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo number_format($totalloanAMount, 2) ?></span>

                <br>
                <br>
              </p>


              <h2 class="metric-label"> Click to Print Report List </h2>
            </div>
          </div><!-- /.metric -->
        </a>
      </div><!-- /metric column -->








      <div class="col-12 col-sm-6 col-lg-6">
        <!-- .metric -->
        <a style="cursor: pointer;" onclick="window.open('ViewPDFS/Reports/loans/print_loans_paid_list.php?PRINT=PRINT_ALL_LOANS_CONTRIBUTION_LIST_FOR_ALL&&TRUE=All') " >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $TOtal_Loan_Paid ?> </span>

                <br>
                <br>
              </p>



              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo number_format($totalLoansPaid, 2) ?></span>

                <br>
                <br>
              </p>


              <h2 class="metric-label"> Click to Print Report List </h2>
            </div>
          </div><!-- /.metric -->
        </a>
      </div><!-- /metric column -->






      <div class="col-12 col-sm-6 col-lg-6">
        <!-- .metric -->
        <a style="cursor: pointer;" onclick="window.open('ViewPDFS/Reports/print_fees_paid_by_all_students_report.php') " >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $Interest_get ?> </span>

                <br>
                <br>
              </p>



              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo number_format($totalloanAMountInterst, 2) ?></span>

                <br>
                <br>
              </p>


              <!-- <h2 class="metric-label"> Click to Print Report List </h2> -->
            </div>
          </div><!-- /.metric -->
        </a>
      </div><!-- /metric column -->







      <div class="col-12 col-sm-6 col-lg-6">
        <!-- .metric -->
        <a style="cursor: pointer;"  >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $TOtal_Revenue ?> </span>

                <br>
                <br>
              </p>



              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo number_format($totalRevenueGet, 2) ?></span>

                <br>
                <br>
              </p>


              <!-- <h2 class="metric-label"> Click to Print Report List </h2> -->
            </div>
          </div><!-- /.metric -->
        </a>
      </div><!-- /metric column -->









    </div><!-- /.section-block -->
  </div>

</div>




</div><!-- /grid column -->
<!-- grid column -->


</div><!-- /grid row -->
<hr class="my-5">



</div><!-- /.page-inner -->








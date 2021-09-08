<?php 

 

if ($login_session_type==="3" || $login_session_type==="1") {


  $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$login_session' AND active='yes'");
  if (mysqli_num_rows($queryInfo)===1) {

    $fetch =mysqli_fetch_assoc($queryInfo);
    $table_id = $fetch["id"];
    $staffID = $fetch["staffID"];
    $encrypted_password = $fetch["encrypted_password"];
    $password = $fetch["password"];
    $username = $fetch["username"];
    $firstName = $fetch["firstName"];
    $lastName = $fetch["lastName"];
    $employmentType = $fetch["employmentType"];
    $staffPhoto = $fetch["staffPhoto"];

    $staffFullName = $firstName . " " . $lastName; 



    if ($staffPhoto==="" || $staffPhoto==="/") {
      $staffPhotoShow = "
      <img src=\"assets/images/customs/male.png\" >
      ";
    } else {

     $staffPhotoShow = "
     <img src=\"Datas/staff_datas/passport/$staffPhoto\" >
     ";
   }


 }else{
  logout();
  die();
}





} else {

  $queryInfo45 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$login_session' AND active='yes'");
  if (mysqli_num_rows($queryInfo45)===1) {

    $fetch45 =mysqli_fetch_assoc($queryInfo45);
    $id = $fetch45["id"];
    $member_id = $fetch45["member_id"];
    $member_id_encrypt = $fetch45["member_id_encrypt"];
    $password = $fetch45["password"];
    $firstname = $fetch45["firstname"];
    $surname = $fetch45["surname"];
    $residencial_address = $fetch45["residencial_address"];
    $postal_address = $fetch45["postal_address"];
    $place_of_work = $fetch45["place_of_work"];
    $home_town = $fetch45["home_town"];
    $email = $fetch45["email"];
    $telephone = $fetch45["telephone"];
    $dob = $fetch45["dob"];
    $gender = $fetch45["gender"];
    $marital_status = $fetch45["marital_status"];
    $contribution_amount = $fetch45["contribution_amount"];
    $total_contribution_made = $fetch45["total_contribution_made"];
    $last_month_contributed = $fetch45["last_month_contributed"];
    $image = $fetch45["image"];
    $date_created = $fetch45["date_created"];


    $staffFullName = $firstname . " " . $surname;


    if ($image==="" || $image==="/") {
      $staffPhotoShow = "
      <img src=\"assets/images/customs/male.png\" >
      ";
    } else {

     $staffPhotoShow = "
     <img src=\"Datas/members_datas/$image\" >
     ";
   }



 }else{
  logout();
  die();
}



}





/*-----------------get total contribution ----------------*/
// $getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE  active='yes'   ");
// $getRow = mysqli_fetch_assoc($getToContribution);
// $totalContriAmountss = $getRow["amount"];


/*----------------GET OTTAL CONTRIBUTIONS MADE*/
$getTotalContributions = mysqli_query($conn, "SELECT SUM(total_contribution_made) AS total_contribution_made FROM members WHERE active='yes'    ");
$getRow = mysqli_fetch_assoc($getTotalContributions);
$totalContriAmountss = $getRow["total_contribution_made"];


/*-----------------get total loans given ----------------*/
$getTotalLoansGiven = mysqli_query($conn, "SELECT SUM(amount_collected) AS amount_collected FROM loans_all WHERE  active='yes' AND loan_status='issued' AND finish_paying='no'   ");
$getRow2 = mysqli_fetch_assoc($getTotalLoansGiven);
$totalloanAMount = $getRow2["amount_collected"];





/*-----------------get interest_amount_paid ----------------*/
$getTotalInterestPaid = mysqli_query($conn, "SELECT SUM(interest_amount_paid) AS interest_amount_paid FROM loans_all WHERE  active='yes' AND loan_status='issued' AND finish_paying='no'   ");
$getRow23434 = mysqli_fetch_assoc($getTotalInterestPaid);
$interest_amount_paid = $getRow23434["interest_amount_paid"];




/*-----------------get amount_paid ----------------*/
$getTotalamount_paid = mysqli_query($conn, "SELECT SUM(amount_paid) AS amount_paid FROM loans_all WHERE  active='yes' AND loan_status='issued' AND finish_paying='no'   ");
$getRow23434Amtn = mysqli_fetch_assoc($getTotalamount_paid);
$amount_paid = $getRow23434Amtn["amount_paid"];


$totalloanAMountPaid = $amount_paid - $interest_amount_paid;


/*-----------------get total loans paid ----------------*/
// $getTotalLoanspaid = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM loan_collects WHERE  active='yes'  ");
// $getRow23 = mysqli_fetch_assoc($getTotalLoanspaid);
// $totalloanAMountPaid = $getRow23["amount"];




$totalLoansLeftTOBePaid = $totalloanAMount - $totalloanAMountPaid;



/*-----------------get total loans given interest ----------------*/
$getTotalLoansGivenInte = mysqli_query($conn, "SELECT SUM(interest_rate) AS interest_rate FROM loans_all WHERE  active='yes'   AND loan_status='issued' ");
$getRow23 = mysqli_fetch_assoc($getTotalLoansGivenInte);
$totalloanAMountInterst = $getRow23["interest_rate"];


/*-----------------get total Expenses ----------------*/
$getTotalExp = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE  active='yes'  AND year_finish='no'  ");
$getRow231 = mysqli_fetch_assoc($getTotalExp);
$totalExpenses = $getRow231["amount"];




$LoaninterestPurpose1 = "Loan Interest";
$LoaninterestPurpose2 = "Loans Interest Paid by the Guarantors";
$LoaninterestPurpose3 = "Loan Interest and Penalty Interest";
$PenaltyPurpose = "Penalty For member contribution";
$RegistrationFeePurpose = "Member Registration Fee";
$memDeductionPurpose = "5% of Member Deactivated charge";



/*-----------------get total LOAN Interest  ----------------*/
$getTotalInteresr = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND year_finish='no' AND ( purpose='$LoaninterestPurpose1' OR  purpose='$LoaninterestPurpose2' OR  purpose='$LoaninterestPurpose3' )  ");
$getRow248 = mysqli_fetch_assoc($getTotalInteresr);
$totalInterest = $getRow248["amount"];




/*-----------------get total penalty Interest  ----------------*/
$getTotalPenalty = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND year_finish='no' AND purpose='$PenaltyPurpose'  ");
$getRow2482 = mysqli_fetch_assoc($getTotalPenalty);
$totalPenalty = $getRow2482["amount"];



$getthYear = date("Y");
/*-----------------get total LOAN  penalty Interest  ----------------*/
$getTotallOANPenalty = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM comp_reve_loan_penalty WHERE  active='yes' AND year='$getthYear'  ");
$getRow2555656 = mysqli_fetch_assoc($getTotallOANPenalty);
$totalLoanPenalty = $getRow2555656["amount"];






/*-----------------get total Registration fee  ----------------*/
$getTotalReFee = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND year_finish='no' AND purpose='$RegistrationFeePurpose'  ");
$getRow24823 = mysqli_fetch_assoc($getTotalReFee);
$totalRegFee = $getRow24823["amount"];





/*-----------------get total 5% deduction fee  ----------------*/
$getTotalDedcutionPercen = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND year_finish='no' AND purpose='$memDeductionPurpose'  ");
$getRow248235 = mysqli_fetch_assoc($getTotalDedcutionPercen);
$totalPercDeduction = $getRow248235["amount"];



/*-----------------get total Revenue ----------------*/

$getAllTOtalInterest = $totalInterest + $totalPenalty + $totalLoanPenalty + $totalRegFee + $totalPercDeduction;

$totalRevenueGet = $getAllTOtalInterest - $totalExpenses;





/*-----------------get total loans plus total interest ----------------*/
$getTotalLoanInt = mysqli_query($conn, "SELECT SUM(total_amount_to_pay) AS total_amount_to_pay FROM loans_all WHERE  active='yes' AND loan_status='issued' AND finish_paying='no'   ");
$getROwTo34 = mysqli_fetch_assoc($getTotalLoanInt);
$totalLoanPlusTotalInterest = $getROwTo34["total_amount_to_pay"];





/*-----------------get total loans plus total interest balance ----------------*/
$getTotalbalancess = mysqli_query($conn, "SELECT SUM(balance) AS balance FROM loans_all WHERE  active='yes' AND loan_status='issued' AND finish_paying='no'   ");
$getROwTo2 = mysqli_fetch_assoc($getTotalbalancess);
$totalLoanPlusTotalInterestBalance = $getROwTo2["balance"];





// $totalLoanPlusTotalProfit = $totalloanAMount + $totalInterest;




if ($login_session_type==="1" || $login_session_type==="3") {




  ?>


  <!-- .page-title-bar -->
  <header class="page-title-bar">
    <div class="d-flex flex-column flex-md-row">
      <p class="lead">
        <span class="font-weight-bold">Hi, <?php echo $staffFullName ?></span> <span class="d-block text-muted">Here’s what’s happening with your business today.</span>
      </p>
      <div class="ml-auto">
        <!-- .dropdown -->
        <div class="dropdown">
          <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Year | <?php echo date("Y") ?></span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
            <div class="dropdown-arrow"></div><!-- .custom-control -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
            </div><!-- /.custom-control -->
            <!-- .custom-control -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter" data-start="2019/03/26" data-end="2019/03/26"> <label class="custom-control-label d-flex justify-content-between" for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar 26</span></label>
            </div><!-- /.custom-control -->
            <!-- .custom-control -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" data-start="2019/03/21" data-end="2019/03/27" checked> <label class="custom-control-label d-flex justify-content-between" for="dpWeek"><span>This Week</span> <span class="text-muted">Mar 21-27</span></label>
            </div><!-- /.custom-control -->
            <!-- .custom-control -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="dpMonth" name="dpFilter" data-start="2019/03/01" data-end="2019/03/27"> <label class="custom-control-label d-flex justify-content-between" for="dpMonth"><span>This Month</span> <span class="text-muted">Mar 1-31</span></label>
            </div><!-- /.custom-control -->
            <!-- .custom-control -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" data-start="2019/01/01" data-end="2019/12/31"> <label class="custom-control-label d-flex justify-content-between" for="dpYear"><span>This Year</span> <span class="text-muted">2019</span></label>
            </div><!-- /.custom-control -->
            <!-- .custom-control -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label" for="dpCustom">Custom</label>
              <div class="custom-control-hint my-1">
                <!-- datepicker:range -->
                <input type="text" class="form-control" id="dpCustomInput" data-toggle="flatpickr" data-mode="range" data-disable-mobile="true" data-date-format="Y-m-d"> <!-- /datepicker:range -->
              </div>
            </div><!-- /.custom-control -->
          </div><!-- /.dropdown-menu -->
        </div><!-- /.dropdown -->
      </div>
    </div>
  </header><!-- /.page-title-bar -->




  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- metric row -->
      <div class="metric-row">



            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Contribution   </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalContriAmountss, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->
       




              <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Loans </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalloanAMount, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->



          <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Loans Paid</h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalloanAMountPaid, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->






       <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Loans Left</h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalLoansLeftTOBePaid, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->




                     <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Loans plus Total Interest</h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalLoanPlusTotalInterest, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->





             <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Loans plus Total Interest Balance</h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalLoanPlusTotalInterestBalance, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->






         
            <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Interest Paid on Total Loans Paid </h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalInterest, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric col-12 col-sm-6 col-lg-3umn -->






            <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Member Contribution Penalties </h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalPenalty, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric col-12 col-sm-6 col-lg-3umn -->



            <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Loan Penalties </h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalLoanPenalty, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric col-12 col-sm-6 col-lg-3umn -->





            <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Registration Fees </h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalRegFee, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric col-12 col-sm-6 col-lg-3umn -->




            <!-- metric column -->
            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> 5% Member Deduction Fee</h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalPercDeduction, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric col-12 col-sm-6 col-lg-3umn -->





               <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Expenses </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalExpenses, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->





            <div class="col-12 col-sm-6 col-lg-3">
              <!-- .metric -->
              <a href="" class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> Total Profit </h2>
                <p class="metric-value h3">
                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($totalRevenueGet, 2) ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->



      </div><!-- /metric row -->
    </div><!-- /.section-block -->
    <!-- grid row -->
    <div class="row">
      <!-- grid column -->





      <!-- =======================new customers added================ -->

      <div class="col-12 col-lg-6 col-xl-4">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .card-body -->
          <div class="card-body pb-0">
            <h3 class="card-title"> New Staff Added </h3><!-- legend -->
            <ul class="list-inline small">
              <li class="list-inline-item">
                <i class="fa fa-fw fa-circle text-light"></i> Tasks </li>
                <li class="list-inline-item">
                  <i class="fa fa-fw fa-circle text-purple"></i> Completed </li>
                  <li class="list-inline-item">
                    <i class="fa fa-fw fa-circle text-teal"></i> Active </li>
                    <li class="list-inline-item">
                      <i class="fa fa-fw fa-circle text-red"></i> Overdue </li>
                    </ul><!-- /legend -->
                  </div><!-- /.card-body -->
                  <!-- .list-group -->
                  <div class="list-group list-group-flush">
                    <!-- .list-group-item -->

                    <?php 

                    $selectCust1 = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' ORDER BY id DESC  LIMIT 5");

                    while ( $getdac = mysqli_fetch_assoc($selectCust1)) {

                      $id = $getdac["id"];
                      $staffID = $getdac["staffID"];
                      $firstName = $getdac["firstName"];
                      $lastName = $getdac["lastName"];
                      $employmentType = $getdac["employmentType"];
                      $dob = $getdac["dob"];
                      $mobile = $getdac["mobile"];
                      $email = $getdac["email"];
                      $marital_status = $getdac["marital_status"];
                      $nationality = $getdac["nationality"];
                      $home_town = $getdac["home_town"];
                      $region = $getdac["region"];
                      $gender = $getdac["gender"];
                      $address = $getdac["address"];
                      $digitalAddress = $getdac["digitalAddress"];
                      $location = $getdac["location"];
                      $staffPhoto = $getdac["staffPhoto"];
                      $date_added = $getdac["date_added"];






                      $fullname = $firstName . " " . $lastName;

                      $getShortName = substr($firstName, 0,1);


                      if ($staffPhoto==="" || $staffPhoto==="/") {

                        if ($gender==="Male") {
                          $staffPhoto = "<figure class=\"user-avatar\">
                          <img src=\"assets/images/customs/male.png\" >
                          </figure>";
                        } else {
                          $staffPhoto = "<figure class=\"user-avatar\">
                          <img src=\"assets/images/customs/female.jpg\" >
                          </figure>";
                        }


                      } else {

                       $staffPhoto = "<figure class=\"user-avatar \">
                       <img src=\"Datas/staff_datas/passport/$staffPhoto\" >
                       </figure>";


                     }




                     ?>

                     <div class="list-group-item">
                      <!-- .list-group-item-figure -->
                      <div class="list-group-item-figure">
                        <?php echo $staffPhoto ?>
                      </div><!-- /.list-group-item-figure -->




                      <div class="list-group-item-body">
                        <!-- .progress -->
                        <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 2065&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 231&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 54&lt;/div&gt;'>
                          <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="73.46140163642832" aria-valuemin="0" aria-valuemax="100" style="width: 73.46140163642832%"><span style="color: #001;"><?php echo $fullname ?> | <?php echo $mobile ?></span>
                            <span class="sr-only">73.46140163642832</span>
                          </div>
                          <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="8.217716115261473" aria-valuemin="0" aria-valuemax="100" style="width: 8.217716115261473%">
                            <span class="sr-only">8.217716115261473% Complete</span>
                          </div>
                          <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.92102454642476" aria-valuemin="0" aria-valuemax="100" style="width: 1.92102454642476%">
                            <span class="sr-only">1.92102454642476% Complete</span>
                          </div>
                        </div><!-- /.progress -->
                      </div><!-- /.list-group-item-body -->
                    </div><!-- /.list-group-item -->





                    <?php



                  }



                  ?>


                  <!-- .card-footer -->
                  <div class="card-footer">
                    <a href=".home.settings-staff.config.java.kt" class="card-footer-item">View all <i class="fa fa-fw fa-angle-right"></i></a>
                  </div><!-- /.card-footer -->
                </div><!-- /.list-group -->




              </div><!-- /.card -->
            </div><!-- /grid column -->


            <!-- =======================new members added================ -->

            <div class="col-12 col-lg-6 col-xl-4">
              <!-- .card -->
              <div class="card card-fluid">
                <!-- .card-body -->
                <div class="card-body pb-0">
                  <h3 class="card-title"> New Members Added </h3><!-- legend -->
                  <ul class="list-inline small">
                    <li class="list-inline-item">
                      <i class="fa fa-fw fa-circle text-light"></i> Tasks </li>
                      <li class="list-inline-item">
                        <i class="fa fa-fw fa-circle text-purple"></i> Completed </li>
                        <li class="list-inline-item">
                          <i class="fa fa-fw fa-circle text-teal"></i> Active </li>
                          <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-red"></i> Overdue </li>
                          </ul><!-- /legend -->
                        </div><!-- /.card-body -->
                        <!-- .list-group -->
                        <div class="list-group list-group-flush">
                          <!-- .list-group-item -->

                          <?php 

                          $selectCust = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' ORDER BY id DESC  LIMIT 5");

                          while ( $getAlls = mysqli_fetch_assoc($selectCust)) {

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






                            if ($image==="" || $image==="/") {

                              if ($gender==="Male") {
                                $image = "<figure class=\"user-avatar\">
                                <img src=\"assets/images/customs/male.png\" >
                                </figure>";
                              } else {
                                $image = "<figure class=\"user-avatar\">
                                <img src=\"assets/images/customs/female.jpg\" >
                                </figure>";
                              }


                            } else {

                             $image = "<figure class=\"user-avatar \">
                             <img src=\"Datas/members_datas/$image\" >
                             </figure>";


                           }




                           ?>

                           <div class="list-group-item">
                            <!-- .list-group-item-figure -->
                            <div class="list-group-item-figure">
                              <?php echo $image ?>
                            </div><!-- /.list-group-item-figure -->




                            <div class="list-group-item-body">
                              <!-- .progress -->
                              <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 2065&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 231&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 54&lt;/div&gt;'>
                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="73.46140163642832" aria-valuemin="0" aria-valuemax="100" style="width: 73.46140163642832%"><span style="color: #001;"><?php echo $fullname ?> | <?php echo $telephone ?></span>
                                  <span class="sr-only">73.46140163642832</span>
                                </div>
                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="8.217716115261473" aria-valuemin="0" aria-valuemax="100" style="width: 8.217716115261473%">
                                  <span class="sr-only">8.217716115261473% Complete</span>
                                </div>
                                <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.92102454642476" aria-valuemin="0" aria-valuemax="100" style="width: 1.92102454642476%">
                                  <span class="sr-only">1.92102454642476% Complete</span>
                                </div>
                              </div><!-- /.progress -->
                            </div><!-- /.list-group-item-body -->
                          </div><!-- /.list-group-item -->





                          <?php



                        }



                        ?>







                        <!-- .card-footer -->
                        <div class="card-footer">
                          <a href=".login-success.view-all-new-members.kt.css.js.html.cpp" class="card-footer-item">View all <i class="fa fa-fw fa-angle-right"></i></a>
                        </div><!-- /.card-footer -->
                      </div><!-- /.list-group -->




                    </div><!-- /.card -->
                  </div><!-- /grid column -->











                  <!-- =======================new customers added================ -->

                  <div class="col-12 col-lg-6 col-xl-4">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <!-- .card-body -->
                      <div class="card-body pb-0">
                        <h3 class="card-title"> New Customers Added </h3><!-- legend -->
                        <ul class="list-inline small">
                          <li class="list-inline-item">
                            <i class="fa fa-fw fa-circle text-light"></i> Tasks </li>
                            <li class="list-inline-item">
                              <i class="fa fa-fw fa-circle text-purple"></i> Completed </li>
                              <li class="list-inline-item">
                                <i class="fa fa-fw fa-circle text-teal"></i> Active </li>
                                <li class="list-inline-item">
                                  <i class="fa fa-fw fa-circle text-red"></i> Overdue </li>
                                </ul><!-- /legend -->
                              </div><!-- /.card-body -->
                              <!-- .list-group -->
                              <div class="list-group list-group-flush">
                                <!-- .list-group-item -->

                                <?php 

                                $selectCust = mysqli_query($conn, "SELECT * FROM customers WHERE active ='yes' ORDER BY id DESC  LIMIT 5");

                                while ( $getdac = mysqli_fetch_assoc($selectCust)) {

                                  $id = $getdac["id"];
                                  $customer_id = $getdac["customer_id"];
                                  $customer_id_encrypt = $getdac["customer_id_encrypt"];
                                  $firstname = $getdac["firstname"];
                                  $surname = $getdac["surname"];
                                  $residencial_address = $getdac["residencial_address"];
                                  $postal_address = $getdac["postal_address"];
                                  $place_of_work = $getdac["place_of_work"];
                                  $home_town = $getdac["home_town"];
                                  $email = $getdac["email"];
                                  $telephone = $getdac["telephone"];
                                  $dob = $getdac["dob"];
                                  $gender = $getdac["gender"];
                                  $marital_status = $getdac["marital_status"];
                                  $image = $getdac["image"];
                                  $next_of_kin_name = $getdac["next_of_kin_name"];
                                  $next_of_kin_mobile = $getdac["next_of_kin_mobile"];
                                  $next_of_kin_resi_address = $getdac["next_of_kin_resi_address"];
                                  $date_created = $getdac["date_created"];

                                  $fullname = $firstname . " " . $surname;

                                  $getShortName = substr($firstname, 0,1);






                                  if ($image==="" || $image==="/") {

                                    if ($gender==="Male") {
                                      $image = "<figure class=\"user-avatar\">
                                      <img src=\"assets/images/customs/male.png\" >
                                      </figure>";
                                    } else {
                                      $image = "<figure class=\"user-avatar\">
                                      <img src=\"assets/images/customs/female.jpg\" >
                                      </figure>";
                                    }


                                  } else {

                                   $image = "<figure class=\"user-avatar \">
                                   <img src=\"Datas/customers_datas/$image\" >
                                   </figure>";


                                 }




                                 ?>

                                 <div class="list-group-item">
                                  <!-- .list-group-item-figure -->
                                  <div class="list-group-item-figure">
                                    <?php echo $image ?>
                                  </div><!-- /.list-group-item-figure -->




                                  <div class="list-group-item-body">
                                    <!-- .progress -->
                                    <div class="progress progress-animated bg-transparent rounded-0" data-toggle="tooltip" data-html="true" title='&lt;div class="text-left small"&gt;&lt;i class="fa fa-fw fa-circle text-purple"&gt;&lt;/i&gt; 2065&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-teal"&gt;&lt;/i&gt; 231&lt;br&gt;&lt;i class="fa fa-fw fa-circle text-red"&gt;&lt;/i&gt; 54&lt;/div&gt;'>
                                      <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="73.46140163642832" aria-valuemin="0" aria-valuemax="100" style="width: 73.46140163642832%"><span style="color: #001;"><?php echo $fullname ?> | <?php echo $telephone ?></span>
                                        <span class="sr-only">73.46140163642832</span>
                                      </div>
                                      <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="8.217716115261473" aria-valuemin="0" aria-valuemax="100" style="width: 8.217716115261473%">
                                        <span class="sr-only">8.217716115261473% Complete</span>
                                      </div>
                                      <div class="progress-bar bg-red" role="progressbar" aria-valuenow="1.92102454642476" aria-valuemin="0" aria-valuemax="100" style="width: 1.92102454642476%">
                                        <span class="sr-only">1.92102454642476% Complete</span>
                                      </div>
                                    </div><!-- /.progress -->
                                  </div><!-- /.list-group-item-body -->
                                </div><!-- /.list-group-item -->





                                <?php



                              }



                              ?>


                              <!-- .card-footer -->
                              <div class="card-footer">
                                <a href=".login-success.view-customer-list.xml.cpp.vb" class="card-footer-item">View all <i class="fa fa-fw fa-angle-right"></i></a>
                              </div><!-- /.card-footer -->
                            </div><!-- /.list-group -->




                          </div><!-- /.card -->
                        </div><!-- /grid column -->



                      </div><!-- /grid row -->
                      <!-- card-deck-xl -->
                      <div class="card-deck-xl">
                        <!-- .card -->
                        <div class="card card-fluid pb-3">
                           <div class="card-header"> Activities  </div>


                                 <div class="card-header"> PAID LOANS  </div>



              

                <div class="section-block">
          
                  <div class="row">
                    <!-- grid column -->
                    <div class="col-lg-12">
                      <!-- #accordion -->
                      <div id="accordion" class="card-expansion">
                        <!-- .card -->






          <?php 




  

              $selectDis33 = mysqli_query($conn, "SELECT DISTINCT  year FROM loans_pay WHERE  active='yes' ORDER BY year DESC ");


              while ($getRow33 = mysqli_fetch_assoc($selectDis33)) {

                $getyear = $getRow33["year"];


                ?>

                        <div class="card card-expansion-item expanded">
                          <div class="card-header border-0" id="headingOne">

                            <button class="btn btn-reset" data-toggle="collapse" data-target="#the_id22-<?php echo $getyear ?>" aria-expanded="true" aria-controls="the_id22-<?php echo $getyear ?>"><span class="collapse-indicator mr-2"><i class="fa fa-fw fa-caret-right"></i></span> <span><?php echo $getyear ?></span>
                            </button>

                          </div>
                          <div id="the_id22-<?php echo $getyear ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">


                <?php 

                     $selectDis2 = mysqli_query($conn, "SELECT DISTINCT  month FROM loans_pay WHERE  active='yes' AND year='$getyear' ORDER BY id DESC ");


                      while ($getRow22 = mysqli_fetch_assoc($selectDis2)) {

                        $getmonth = $getRow22["month"];

if ($getmonth === "01") {

$getMonthInWords = "January";
}


if ($getmonth === "02") {

$getMonthInWords = "February";
}


if ($getmonth === "03") {

$getMonthInWords = "March";
}


if ($getmonth === "04") {

$getMonthInWords = "April";
}

if ($getmonth === "05") {

$getMonthInWords = "May";
}

if ($getmonth === "06") {

$getMonthInWords = "June";
}

if ($getmonth === "07") {

$getMonthInWords = "July";
}

if ($getmonth === "08") {

$getMonthInWords = "August";
}

if ($getmonth === "09") {

$getMonthInWords = "September";
}

if ($getmonth === "10") {

$getMonthInWords = "October";
}

if ($getmonth === "11") {

$getMonthInWords = "November";
}

if ($getmonth === "12") {

$getMonthInWords = "December";
}


                              ?>

                      <div id="accordion2" class="card-expansion">


                        <div class="card card-expansion-item expanded">
                          <div class="card-header border-0" id="headingOne">
                            <button class="btn btn-reset" data-toggle="collapse" data-target="#the_id2455-<?php echo $getmonth ?>" aria-expanded="true" aria-controls="the_id2455-<?php echo $getmonth ?>"><span class="collapse-indicator mr-2"><i class="fa fa-fw fa-caret-right"></i></span> <span style="font-weight: bold;"><?php echo $getMonthInWords ?></span>
                            </button>
                          </div>

                          <div id="the_id2455-<?php echo $getmonth ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion2">

                             <table class="table">
                                <!-- thead -->
                                <thead>
                                  <tr class="text-center">
                                    <th >Name</th>
                                    <th >Year</th>
                                    <th> Month </th>
                                    <th> Amount </th>
                                    <th> Date </th>
                                  </tr>
                                </thead><!-- /thead -->


                                <?php 

                          $selCont22 = mysqli_query($conn, "SELECT * FROM loans_pay WHERE year='$getyear' AND month='$getmonth' AND  active='yes' ORDER BY year DESC  ");


                               while ( $getDem = mysqli_fetch_assoc($selCont22)) {

                                $Tableid = $getDem["id"];
                                $loan_id = $getDem["loan_id"];
                                $person_id = $getDem["person_id"];
                                $month = $getDem["month"];
                                $year = $getDem["year"];
                                $amount_paid = $getDem["amount_paid"];
                                $date_paid = $getDem["date_paid"];



                           $selCont2211 = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id' AND  active='yes'  ");


                               $getDem545 = mysqli_fetch_assoc($selCont2211);

                                $status = $getDem545["status"];




                                if ($status==="Member") {
                                  $selStu = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");


                                $getAlls = mysqli_fetch_assoc($selStu);
                                $id = $getAlls["id"];
                                $member_id = $getAlls["member_id"];
                                $member_id_encrypt = $getAlls["member_id_encrypt"];
                                $firstname = $getAlls["firstname"];
                                $surname = $getAlls["surname"];

                                $fullname = $firstname . " " . $surname;
                                } else {



                                  $selStu = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");


                                $getAlls = mysqli_fetch_assoc($selStu);
                                $id = $getAlls["id"];
                                $customer_id = $getAlls["customer_id"];
                                $customer_id_encrypt = $getAlls["customer_id_encrypt"];
                                $firstname = $getAlls["firstname"];
                                $surname = $getAlls["surname"];

                                $fullname = $firstname . " " . $surname;
                                  

                                }
                                
                          




                              


                                ?>

                              <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                                <!-- tr -->
                                <tr class="text-center">

                            <td class="align-middle">
                              <a ><?php echo $fullname ?></a>
                            </td>


                            <td class="align-middle">
                              <a ><?php echo $year ?></a>
                            </td>

                            <td class="align-middle">
                              <a ><?php echo $month ?></a>
                            </td>

                            <td class="align-middle">
                              <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $amount_paid ?></span>
                            </td>


                            <td class="align-middle">
                              <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $date_paid ?></span>
                            </td>


                                </tr>
                              </tbody>

                                <?php



                              }




                                 ?>



                              </table>




                          </div>

                        </div>

                      </div>

                              <?php




                      }



                 ?>


                            



                          </div>
                        </div><!-- /.card -->



                <?php




              }

      


           ?>



               



                      </div><!-- /#accordion -->
                    </div><!-- /grid column -->
                    <!-- grid column -->




                  </div><!-- /grid row -->
                </div><!-- /.section-block -->







                      </div><!-- /.card -->
                      <!-- .card -->





            <div class="card card-fluid">

                <div class="card-header"> PAID MEMBER CONTRIBUTIONS  </div>



              

                <div class="section-block">
          
                  <div class="row">
                    <!-- grid column -->
                    <div class="col-lg-12">
                      <!-- #accordion -->
                      <div id="accordion" class="card-expansion">
                        <!-- .card -->






          <?php 




  

              $selectDis = mysqli_query($conn, "SELECT DISTINCT  year FROM members_contributions WHERE  active='yes' ORDER BY year DESC ");


              while ($getRow2 = mysqli_fetch_assoc($selectDis)) {

                $getyear = $getRow2["year"];


                ?>

                        <div class="card card-expansion-item expanded">
                          <div class="card-header border-0" id="headingOne">

                            <button class="btn btn-reset" data-toggle="collapse" data-target="#the_id-<?php echo $getyear ?>" aria-expanded="true" aria-controls="the_id-<?php echo $getyear ?>"><span class="collapse-indicator mr-2"><i class="fa fa-fw fa-caret-right"></i></span> <span><?php echo $getyear ?></span>
                            </button>

                          </div>
                          <div id="the_id-<?php echo $getyear ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">


                <?php 

                     $selectDis2 = mysqli_query($conn, "SELECT DISTINCT  month FROM members_contributions WHERE  active='yes' AND year='$getyear' ORDER BY id DESC ");


                      while ($getRow22 = mysqli_fetch_assoc($selectDis2)) {

                        $getmonth = $getRow22["month"];

if ($getmonth === "01") {

$getMonthInWords = "January";
}


if ($getmonth === "02") {

$getMonthInWords = "February";
}


if ($getmonth === "03") {

$getMonthInWords = "March";
}


if ($getmonth === "04") {

$getMonthInWords = "April";
}

if ($getmonth === "05") {

$getMonthInWords = "May";
}

if ($getmonth === "06") {

$getMonthInWords = "June";
}

if ($getmonth === "07") {

$getMonthInWords = "July";
}

if ($getmonth === "08") {

$getMonthInWords = "August";
}

if ($getmonth === "09") {

$getMonthInWords = "September";
}

if ($getmonth === "10") {

$getMonthInWords = "October";
}

if ($getmonth === "11") {

$getMonthInWords = "November";
}

if ($getmonth === "12") {

$getMonthInWords = "December";
}


                              ?>

                      <div id="accordion2" class="card-expansion">


                        <div class="card card-expansion-item expanded">
                          <div class="card-header border-0" id="headingOne">
                            <button class="btn btn-reset" data-toggle="collapse" data-target="#the_id2-<?php echo $getmonth ?>" aria-expanded="true" aria-controls="the_id2-<?php echo $getmonth ?>"><span class="collapse-indicator mr-2"><i class="fa fa-fw fa-caret-right"></i></span> <span style="font-weight: bold;"><?php echo $getMonthInWords ?></span>
                            </button>
                          </div>

                          <div id="the_id2-<?php echo $getmonth ?>" class="collapse " aria-labelledby="headingOne" data-parent="#accordion2">

                             <table class="table">
                                <!-- thead -->
                                <thead>
                                  <tr class="text-center">
                                    <th >Name</th>
                                    <th >Year</th>
                                    <th> Month </th>
                                    <th> Amount </th>
                                    <th> Date </th>
                                  </tr>
                                </thead><!-- /thead -->


                                <?php 

                          $selCont = mysqli_query($conn, "SELECT * FROM members_contributions WHERE year='$getyear' AND month='$getmonth' AND  active='yes' ORDER BY year DESC  ");


                               while ( $getDem = mysqli_fetch_assoc($selCont)) {

                                $Tableid = $getDem["id"];
                                $member_id = $getDem["member_id"];
                                $member_id_encrypt = $getDem["member_id_encrypt"];
                                $year = $getDem["year"];
                                $month = $getDem["month"];
                                $amount = $getDem["amount"];
                                $receipt_number = $getDem["receipt_number"];
                                $date_paid = $getDem["date_paid"];
                                $date_created = $getDem["date_created"];
                                $done_by = $getDem["done_by"];
                                $amountMo = @number_format($amount,2);


                              $selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$member_id' AND member_id_encrypt='$member_id_encrypt' AND active='yes' LIMIT 1 ");


                                $getAlls = mysqli_fetch_assoc($selStu);
                                $id = $getAlls["id"];
                                $member_id = $getAlls["member_id"];
                                $member_id_encrypt = $getAlls["member_id_encrypt"];
                                $firstname = $getAlls["firstname"];
                                $surname = $getAlls["surname"];

                                $fullname = $firstname . " " . $surname;


                                ?>

                              <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                                <!-- tr -->
                                <tr class="text-center">

                            <td class="align-middle">
                              <a ><?php echo $fullname ?></a>
                            </td>


                            <td class="align-middle">
                              <a ><?php echo $year ?></a>
                            </td>

                            <td class="align-middle">
                              <a ><?php echo $month ?></a>
                            </td>

                            <td class="align-middle">
                              <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $amountMo ?></span>
                            </td>


                            <td class="align-middle">
                              <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $date_paid ?></span>
                            </td>


                                </tr>
                              </tbody>

                                <?php



                              }




                                 ?>



                              </table>




                          </div>

                        </div>

                      </div>

                              <?php




                      }



                 ?>


                            



                          </div>
                        </div><!-- /.card -->



                <?php




              }

      


           ?>



               



                      </div><!-- /#accordion -->
                    </div><!-- /grid column -->
                    <!-- grid column -->




                  </div><!-- /grid row -->
                </div><!-- /.section-block -->






                <hr class="my-5">






                    </div>
                  </div>


                  <?php





                } else {




                  $selectSum = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE member_id='$member_id'  AND active='yes' ");

                  $getRow = mysqli_fetch_assoc($selectSum);
                  $totalContribution = $getRow["amount"];
                  $qualifyLoanAmount = $totalContribution * 2;

                  /*-------------count month of contribution collected-------------------*/
                  $countTOMonth = mysqli_query($conn, "SELECT count(*) AS toMonth  FROM members_contributions WHERE active='yes' AND member_id_encrypt='$member_id_encrypt'  ");
                  $getcountTOMonth = mysqli_fetch_array($countTOMonth);
                  $countTotalmOnthCOnti = $getcountTOMonth['toMonth'];


                  /*-------------count month of loan collected-------------------*/
                  $countToLoan = mysqli_query($conn, "SELECT count(*) AS toLoan  FROM loans_all WHERE active='yes' AND person_id='$member_id_encrypt'  ");
                  $getcountToLoan = mysqli_fetch_array($countToLoan);
                  $countTotalmLoan = $getcountToLoan['toLoan'];











                  ?>


 

                  <!-- .page-section -->
                  <div class="page-section">
                    <!-- .section-block -->
                    <div class="section-block">
                      <!-- metric row -->
                      <div class="metric-row">
                        <div class="col-lg-12">
                          <div class="metric-row metric-flush">
                            <!-- metric column -->
                            <div class="col">
                              <!-- .metric -->
                              <a href="" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Monthly Contribution  </h2>
                                <p class="metric-value h3">
                                  <sub><i class="oi oi-people"></i></sub> <span class="value">GH&#8373; <?php echo number_format($contribution_amount, 2) ?> </span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column --> 
                            <!-- metric column -->
                            <div class="col">
                              <!-- .metric -->
                              <a href="" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Total Month Contributed </h2>
                                <p class="metric-value h3">
                                  <sub><i class="oi oi-fork"></i></sub> <span class="value"> <?php echo $countTotalmOnthCOnti?> </span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column -->


 
                            <div class="col">
                              <!-- .metric -->
                              <a href="" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Total Loan Collected </h2>
                                <p class="metric-value h3">
                                  <sub><i class="oi oi-fork"></i></sub> <span class="value"><?php echo $countTotalmLoan?> </span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column -->


                            <!-- metric column -->
                            <div class="col">
                              <!-- .metric -->
                              <a href="" class="metric metric-bordered align-items-center">
                                <h2 class="metric-label"> Total Amount Contributed</h2>
                                <p class="metric-value h3">
                                  <sub><i class="fa fa-tasks"></i></sub> <span class="value">GH&#8373; <?php echo number_format($total_contribution_made, 2) ?> </span>
                                </p>
                              </a> <!-- /.metric -->
                            </div><!-- /metric column -->


                          </div>
                        </div><!-- metric column -->

                      </div><!-- /metric row -->
                    </div><!-- /.section-block -->
                    <!-- grid row -->


                    <!-- card-deck-xl -->
                    <div class="card-deck-xl">
                      <!-- .card -->
                      <div class="card card-fluid pb-3">
                        <div class="card-header"> Activities</div><!-- .lits-group -->
                        <div class="lits-group list-group-flush">
                          <!-- .lits-group-item -->




                          <div class="page-section">
                            <!-- .section-block -->
                            <div class="section-block">


                              <?php 

                              $selectStaff2 = mysqli_query($conn, "SELECT * FROM members_activities WHERE member_id='$member_id' AND active='yes' ORDER BY id DESC LIMIT 5 ");

                              if (mysqli_num_rows($selectStaff2)!==0) {
                                while ($getdacMU = mysqli_fetch_assoc($selectStaff2)) {

                                  $id = $getdacMU["id"];
                                  $member_id = $getdacMU["member_id"];
                                  $activity_type = $getdacMU["activity_type"];
                                  $description = $getdacMU["description"];
                                  $datecreated = $getdacMU["datecreated"];
                                  $added_by = $getdacMU["added_by"];



                                  $queryInfo1 = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$added_by' AND active='yes'");

                                  $fetch222 =mysqli_fetch_assoc($queryInfo1);
                                  $table_id = $fetch222["id"];

                                  $firstName = $fetch222["firstName"];
                                  $lastName = $fetch222["lastName"];


                                  $staffName = $firstName . " " . $lastName; 




                                  ?>


                                  <ul class="timeline">
                                   <!-- <h2 class="section-title"> <?php echo $datecreatedDIs ?> </h2> -->

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
                                            <a  class="text-link"><?php echo $activity_type ?></a>
                                          </h6>
                                          <p class="mb-0">
                                            <a href="#"><?php echo $staffName ?></a> <?php echo $description ?> </p>
                                            <p class="timeline-date d-sm-none"> $datecreated </p>
                                          </div><!-- /.media-body -->



                                          <!-- .media-right -->
                                          <div class="d-none d-sm-block">
                                            <span class="timeline-date"><?php echo $datecreated ?></span>
                                          </div><!-- /.media-right -->
                                        </div><!-- /.media -->
                                      </div><!-- /.timeline-body -->
                                    </li><!-- /.timeline-item -->




                                  </ul><!-- .timeline -->


                                  <?php

                                }


                              } else {
                               echo NoActivitiesyet();
                             }


                             ?>



                           </div><!-- /.section-block -->
                           <p class="text-center">
                            <!-- <a target="_blank" href="ViewPDFS/Staff/staff_activities.php?PRINT=PRINT_ACTIVITIES&&TRUE=<?php echo $encrypted_id ?>"><button type="button" class="btn btn-light"><i class="fa fa-fw fa-angle-double-down"></i> Print All</button></a> -->
                          </p>
                        </div><!-- /.page-section -->





                      </div><!-- /.lits-group -->
                    </div><!-- /.card -->
                    <!-- .card -->




<!-- 
                    <div class="card card-fluid">
                      <div class="card-header">Others </div>
                      <div class="card-body">






                      </div>
                      <div class="card-footer">
                        <a href="#" class="card-footer-item">View all <i class="fa fa-fw fa-angle-right"></i></a>
                      </div>
                    </div> -->




                  </div><!-- /card-deck-xl -->
                </div><!-- /.page-section -->


                <?php













              }


              ?>



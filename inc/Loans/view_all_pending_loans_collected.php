
<?php 

$countAllStu = mysqli_query($conn, "SELECT count(*) AS countAl FROM loans_all WHERE active='yes' AND (loan_status='pending'  || loan_status='processing')  ");

$countFetch = mysqli_fetch_array($countAllStu);
$countTotalLoans = $countFetch['countAl'];


$Customer = "Customer";
$Member = "Member";

$countMale = mysqli_query($conn, "SELECT count(*) AS CountMa FROM loans_all WHERE status='$Customer' AND active='yes' AND (loan_status='pending'  || loan_status='processing')   ");

$countFetchMa = mysqli_fetch_array($countMale);
$countTotalLoansMale = $countFetchMa['CountMa'];


$countFeMale = mysqli_query($conn, "SELECT count(*) AS CountFe FROM loans_all WHERE status='$Member' AND active='yes' AND (loan_status='pending'  || loan_status='processing')   ");

$countFetchFe = mysqli_fetch_array($countFeMale);
$countTotalLoansFema = $countFetchFe['CountFe']; 



$ViewAllLoansID = "da64883f2825ba6478dce6a8c9ecbf8dAllLoanAdd";
$ViewMemberLoansID = "399b2b9804c57bf4fb2242f5dbdfd0beMemberLoanAdd";
$ViewCUstomerLoansID = "0851bf0a73cfb1b3559a277f2f09c66fCustomerLoanAdd";


?>


<!-- .wrapper -->
<div class="wrapper">
  <!-- .page -->
  <div class="page has-sidebar has-sidebar-expand-xl">
    <!-- .page-inner -->
    <div class="page-inner">



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

          </div><!-- /grid column -->
          <!-- grid column -->
          <div class="col">
            <h1 class="page-title">  Pending Loans </h1>
          
          </div><!-- /grid column -->
        </div><!-- /grid row -->
        <!-- .nav-scroller -->
        <div class="nav-scroller border-bottom">


          <!-- .nav -->
          <div class="nav nav-tabs">

            <a class="nav-link active" href=".login-success.view-all-pending-loans.js.kt.json.daco.java">Overview</a> 

             <a class="nav-link" href="homepage.php?CHECKER=VIEW_PENDING_LOANS_BY_TYPE&&TRUE=<?php echo $ViewAllLoansID ?> ">All</a> 
             <a class="nav-link" href="homepage.php?CHECKER=VIEW_PENDING_LOANS_BY_TYPE&&TRUE=<?php echo $ViewMemberLoansID ?> ">Member</a> 
             <a class="nav-link" href="homepage.php?CHECKER=VIEW_PENDING_LOANS_BY_TYPE&&TRUE=<?php echo $ViewCUstomerLoansID ?> ">Customer</a> 


          </div><!-- /.nav -->



        </div><!-- /.nav-scroller -->
      </header><!-- /.page-title-bar -->
















      <!-- .page-section -->
      <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
          <!-- .metric-row -->
          <div class="metric-row metric-flush">
            <!-- metric column -->
            <div class="col">
              <!-- .metric -->
              <a  class="metric metric-bordered align-items-center">
                <h2 class="metric-label">  ALL  ACTIVE LOANS </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value"> <?php echo $countTotalLoans ?>  </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->
            <!-- metric column --> 
            <div class="col">
              <!-- .metric -->
              <a  class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> MEMBERS </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-fork"></i></sub> <span class="value"> <?php echo $countTotalLoansFema ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->
            <!-- metric column -->
            <div class="col">
              <!-- .metric -->
              <a  class="metric metric-bordered align-items-center">
                <h2 class="metric-label"> CUSTOMERS </h2>
                <p class="metric-value h3">
                  <sub><i class="oi oi-timer fa-lg"></i></sub> <span class="value"> <?php echo $countTotalLoansMale ?> </span>
                </p>
              </a> <!-- /.metric -->
            </div><!-- /metric column -->
          </div><!-- /.metric-row -->
        </div><!-- /.section-block -->






      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->



  </div><!-- /.page -->
</div><!-- /.wrapper -->





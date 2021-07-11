  
<?php 

$selcCust = mysqli_query($conn, "SELECT count(*) AS countCustomerLoan FROM loans_all WHERE active='yes' AND status='Customer' ");

$getDem = mysqli_fetch_array($selcCust);
$totalCustomerApplied = $getDem['countCustomerLoan'];


$selcCust2 = mysqli_query($conn, "SELECT count(*) AS countCustomerLoan FROM loans_all WHERE active='yes' AND status='Member' ");

$getDem2 = mysqli_fetch_array($selcCust2);
$totalMEmberApplied = $getDem2['countCustomerLoan'];

?>

<div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title"> Loans </h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Select a Loan Type  </p>
    </div><!-- /.section-block -->
  </div><!-- /.page-section -->



</div><!-- /.section-block -->
<!-- grid row -->
<div class="row">




  <!-- grid column -->
  <div class="col-lg-12 showBillClassCards" >


    <div class="col-lg-12">


     <div class="section-block text-center text-sm-left " style="margin: 30px!important;">

      <div class="metric-row">


        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
          <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=ADD_NEW_LOAN_BY_TYPE&&TRUE=da64883f2825ba6478dce6a8c9ecbf8d' " >
            <div class="card-metric">
              <div class="metric">
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value">CUSTOMER </span>
                </p>
                <h2 class="metric-label">  <?php echo $totalCustomerApplied ?> Customers Loans Applied </h2>
              </div>
            </div><!-- /.metric -->
          </a>
        </div><!-- /metric column -->




        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
          <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=ADD_NEW_LOAN_BY_TYPE&&TRUE=87ad20c24e4068d1cb47850ca6f6cc8e' " >

            <div class="card-metric">
              <div class="metric">
                <p class="metric-value h3">
                  <sub><i class="oi oi-people"></i></sub> <span class="value">MEMBER </span>
                </p>
                <h2 class="metric-label"> <?php echo $totalMEmberApplied ?> Members Loans Applied </h2>
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



</div><!-- /.page-inner -->








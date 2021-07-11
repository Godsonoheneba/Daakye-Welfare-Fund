  
<?php 

$Customer = "Customer";
$Member = "Member";

 
 
?>

<div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title"> Pay Loan </h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Select to pay Loan</p>
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

  
         <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
           <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=PAY_LOANS_BY_CUST_MEMB&&TRUE=Cusda64883f2825ba6478dce6a8c9ecbf8d' " >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $Customer ?></span>
              </p>
              <h2 class="metric-label"> Pay Customer Loan </h2>
            </div>
          </div><!-- /.metric -->
        </a>
        </div><!-- /metric column -->



 
        <div class="col-12 col-sm-6 col-lg-3">
          <!-- .metric -->
           <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=PAY_LOANS_BY_CUST_MEMB&&TRUE=Memda64883f2825ba6478dce6a8c9ecbf8d' " >
          <div class="card-metric">
            <div class="metric">
              <p class="metric-value h3">
                <sub><i class="oi oi-people"></i></sub> <span class="value"><?php echo $Member ?></span>
              </p>
              <h2 class="metric-label"> Pay Memeber Loan </h2>
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








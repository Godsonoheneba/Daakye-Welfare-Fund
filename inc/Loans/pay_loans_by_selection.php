  
<?php 
$todayDate = date("F j, Y"); 

$getLoanPayType = $_GET["TRUE"];



?> 

<div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title"> Loans Payment </h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section"> 
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Search by ID  / name / mobile</p>
    </div><!-- /.section-block -->
  </div><!-- /.page-section -->







  <!-- .top-bar-item -->
  <div class="top-bar-item top-bar-item-full">
    <!-- .top-bar-search -->
    
    <?php 

    if ($getLoanPayType==="Cusda64883f2825ba6478dce6a8c9ecbf8d") {
     ?>

     <form class="top-bar-search" method="post" action="homepage.php?CHECKER=PAY_LOANS_BY_CUST_MEMB&&TRUE=Cusda64883f2825ba6478dce6a8c9ecbf8d">

       <?php
     } else {

      ?>

      <form class="top-bar-search" method="post" action="homepage.php?CHECKER=PAY_LOANS_BY_CUST_MEMB&&TRUE=Memda64883f2825ba6478dce6a8c9ecbf8d">

       <?php

     }


     ?>


    


  <div class="row">

    <!-- grid column -->
    <div class="col-xl-12">
      <!-- .card -->
      <div class="card card-fluid">

        <!-- ----------------------------the search input ------------------ -->
        <div class="input-group input-group-search dropdown">
          <div class="input-group-prepend">
            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
          </div>
          <input type="text" class="form-control seachresultInput" data-toggle="dropdown" aria-label="Search" placeholder="Search customer eg. 3012525021478 / agyei dacosta / 0548878554" name="seachresultInput"  onkeyup="searchPersonToPayLoan('<?php echo $getLoanPayType ?>')"> 

        </div><!-- /.input-group -->










        <br>
        <div class="theResultsDivForSearch" >






        </div>





      </div>
    </div>


  </div>




  </form><!-- /.top-bar-search -->
</div><!-- /.top-bar-item -->
<!-- .top-bar-item -->


 

<hr class="my-5">



</div><!-- /.page-inner -->






<script type="text/javascript">

  function searchPersonToPayLoan(getLoanPayType) {

    var seachresultInput = $(".seachresultInput").val();
    var theResultsDivForSearch = $(".theResultsDivForSearch");



    if (seachresultInput!=="") {


      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=searchLoanPersonLivePost" , {seachresultInput:seachresultInput,getLoanPayType:getLoanPayType},function (showOutput) {



        theResultsDivForSearch.html(showOutput);


      })






    } else {

      /*-----------------------do nothing--------------------*/
    }
  }
</script>
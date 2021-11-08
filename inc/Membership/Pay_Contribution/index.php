  
<?php 
$todayDate = date("F j, Y"); 



?> 

<div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title"> Monthly Contribution Payment </h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section"> 
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Search for member by member ID  / name / mobile</p>
    </div><!-- /.section-block -->
  </div><!-- /.page-section -->









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
          <input type="text" class="form-control seachresultInput" data-toggle="dropdown" aria-label="Search" placeholder="Search customer eg. 3012525021478 / agyei dacosta / 0548878554" name="seachresultInput"  onkeyup="searchMemberForIt()"> 

        </div><!-- /.input-group -->










        <br>
        <div class="theResultsDivForSearch" >






        </div>





      </div>
    </div>


  </div>





  <hr class="my-5">



</div><!-- /.page-inner -->




<script type="text/javascript">

  function searchMemberForIt() {

    var seachresultInput = $(".seachresultInput").val();
    var theResultsDivForSearch = $(".theResultsDivForSearch");



    if (seachresultInput!=="") {


      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=searchMemberbyLivePost" , {seachresultInput:seachresultInput},function (showOutput) {



        theResultsDivForSearch.html(showOutput);


      })






    } else {

      /*-----------------------do nothing--------------------*/
    }
  }
</script>
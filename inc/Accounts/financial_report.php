 

<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Accounts</a>
      </li>
    </ol>
  </nav><!-- /.breadcrumb -->
  <!-- floating action -->
  <a data-toggle="modal" data-target="#addNewExpense" ><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>  <!-- /floating action -->
  <!-- title and toolbar -->



</header><!-- /.page-title-bar -->




<div class="section-block">
  <h2 class="section-title"> Financial Reports </h2>
</div><!-- /.section-block -->
<!-- .card -->

 

<div class="modal-body px-0">
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider">
    <!-- .list-group-item -->


    <?php 

    $selectMinDate = mysqli_query($conn, "SELECT date_added FROM company_revenue WHERE active='yes' ORDER BY id ASC ");

    $gttf = mysqli_fetch_assoc($selectMinDate);

    $minDate = $gttf["date_added"];


    $maxDate = date("Y-m-d");

    ?>


    <div class="row">
      <!-- form grid -->
      <div class="col-md-6 mb-3">
        <div class="form-group">
          <label class="control-label" for="fromDate">From:  <abbr title="Required">*</abbr></label> <input id="fromDate" type="text" class="form-control fromDate" name="fromDate" data-toggle="flatpickr" required="" value="<?php echo $minDate ?>">
        </div><!-- /.form-group -->
      </div>



      <div class="col-md-6 mb-3">
        <div class="form-group">
          <label class="control-label" for="toDate">To:  <abbr title="Required">*</abbr></label> <input id="toDate" type="text" class="form-control toDate" name="toDate" data-toggle="flatpickr" required="" value="<?php echo $maxDate ?>">
        </div><!-- /.form-group -->
      </div>


      <center>
        <div class="spinner-border text-warning loadingDiv" role="status" style="display: none;">
          <span class="sr-only">Loading... </span>
        </div>

        <div class="form-actions col-md-12 mb-3">




         <button  type="submit" name="dd" class="btn btn-primary generateBut" onclick="generateFinancialStatement()"> Generate  
         </button>



       </div><!-- /.form-actions -->

     </center>

   </div>







   


   <div class="modal-body p-0 theHolderOfResults" style="display: none;">
    <!-- .table -->



    <div class="section-block">
      <h2 class="section-title"> Financial Statement | From <?php echo $minDate ?> To <?php echo $maxDate ?> </h2>
    </div><!-- /.section-block -->
    <!-- grid row -->
    <div class="row">
      <!-- grid column -->
      <div class="col-xl-6">
        <!-- .card -->
        <div class="card card-fluid">
          <!-- .table-responsive -->
          <div class="table-responsive">
            <!-- .table -->
            <table class="table table-hover">
              <!-- thead -->
              <thead class="thead-light">
                <tr>
                  <th style="min-width:200px"> Date </th>
                  <th> Amount  </th>
                  <th> Purpose </th>
                </tr>
              </thead><!-- /thead -->
              <!-- tbody -->
              <tbody class="showResultsHere">


              </tbody >

                  <h2 class="section-title" style="margin-left: 50px;"> Income Statement </h2>
                

            </table>

          </div>
        </div>
      </div>






 







      <div class="col-xl-6">
        <div class="card card-fluid">
          <div class="table-responsive">
            <table class="table table-hover">

              <thead class="thead-dark">
                <tr>
                  <th style="min-width:200px"> Date </th>
                  <th> Expense Name </th>
                  <th> Amount </th>
                </tr>
              </thead><!-- /thead -->
              <!-- tbody -->
              <tbody class="showResultsHereExpenses">


              </tbody>


             <div class="row col-md-12 mb-3">
                <div class="form-actions col-md-6 mb-3" >
                <div class="section-block">
                  <h2 class="section-title"> Expenses Statement </h2>
                </div><!-- /.section-block -->
                <!-- .card -->
              </div>


             </div>





            </table>
          </div>
        </div>
      </div>



    </div>





  </div>











</div><!-- /.list-group -->
<!-- .loading -->








</div><!-- /grid row -->






















<hr class="my-5">



<script type="text/javascript">
  function generateFinancialStatement() {


    var fromDate = $(".fromDate").val();
    var toDate = $(".toDate").val();

    var loadingDiv = $(".loadingDiv");
    var generateBut = $(".generateBut");

    if (fromDate!=="" && toDate!=="") {



      if (fromDate <= toDate) {

        generateBut.hide();
        loadingDiv.show();

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=generateFInStatemetnPost",{fromDate:fromDate,toDate:toDate},function (showOutPut) {



          if ($(".theHolderOfResults").show()) {

           generateBut.show();
           loadingDiv.hide();

           $(".showResultsHere").html(showOutPut);

         } else {


         }

       });



        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=generateFInStatemetnPostFOrExpenses",{fromDate:fromDate,toDate:toDate},function (showOutPut) {



          if ($(".theHolderOfResults").show()) {

           generateBut.show();
           loadingDiv.hide();

           $(".showResultsHereExpenses").html(showOutPut);

         } else {


         }

       });









      } else {


        Swal.fire({
          title: "Error",
          text: "Date Mismatch",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });



      }




    } else {

      Swal.fire({
        title: "Error",
        text: "fields cannot be empty",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });


    }



  }
</script>



    <?php 

    $minDate = date("Y-01-01");
    $maxDate = date("Y-m-d");

    ?>

 

 

<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Company Financial Position Report</a>
      </li>
    </ol>
  </nav><!-- /.breadcrumb -->

</header><!-- /.page-title-bar -->

 


<div class="section-block">
  <h2 class="section-title"> Please filter by date</h2>
</div><!-- /.section-block -->
<!-- .card -->



<div class="modal-body px-0">
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider">
    <!-- .list-group-item -->





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




         <button  type="submit" name="dd" class="btn btn-primary generateBut" onclick="generateFinancialPositionReport()"> Generate  
         </button>



       </div><!-- /.form-actions -->

     </center>

   </div>


   


<div class="holderForMEmberLiustResult" style="display: none;">



<div class="board p-0 perfect-scrollbar" >
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
    <div class="card card-fluid">
      <!-- .card-body -->
      <div class="card-body">
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">
     

                <tbody class="getsearch showResultsHereFromDB" data-toggle="sidebar" data-sidebar="show">


                </tbody>

              </table><!-- /.table -->
            </div><!-- /.table-responsive -->
          </div><!-- /.card-body -->
        </div><!-- /.card -->
      </div>
    </div>

    </div>
    <hr class="my-5">
 

  

<script type="text/javascript">


  function generateFinancialPositionReport() {


    var fromDate = $(".fromDate").val();
    var toDate = $(".toDate").val();

    var loadingDiv = $(".loadingDiv");
    var generateBut = $(".generateBut");

    if (fromDate!=="" && toDate!=="") {


 
      if (fromDate <= toDate) {
 
        generateBut.hide();
        loadingDiv.show();

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=getCompanyFinancialPosition",{fromDate:fromDate,toDate:toDate},function (showOutPut) {



          if ($(".holderForMEmberLiustResult").show()) {

           generateBut.show();
           loadingDiv.hide();

           $(".getsearch").html(showOutPut);

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
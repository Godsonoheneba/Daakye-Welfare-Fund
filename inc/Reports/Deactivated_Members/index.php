 


    <?php 

    $selectMinDate = mysqli_query($conn, "SELECT date_added FROM company_expenses WHERE active='yes' ORDER BY id ASC ");

    $gttf = mysqli_fetch_assoc($selectMinDate);

    $minDate = $gttf["date_added"];



    $maxDate = date("Y-m-d");

    ?>



 

<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>All Deactivated Members</a>
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




         <button  type="submit" name="dd" class="btn btn-primary generateBut" onclick="generateAllDeactivatedMembers()"> Generate  
         </button>



       </div><!-- /.form-actions -->

     </center>

   </div>


   


<div class="holderForMEmberLiustResult" style="display: none;">

<div class="form-row">

 <header class="page-navs bg-light shadow-sm">
  <!-- .input-group -->

  <div class="input-group has-clearable" >
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Customer eg. Agyei">
  </div><!-- /.input-group -->




</header>


</div><!-- /.form-row -->



<div class="board p-0" >
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
    <div class="card card-fluid">
      <!-- .card-body -->
      <div class="card-body">
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">
            <!-- thead -->
            <thead>
              <tr>
                <th>Name</th>
                <th> Amount </th>
                <th> Date </th>
                <th> Done By </th>

           
 
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->

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


  function generateAllDeactivatedMembers() {


    var fromDate = $(".fromDate").val();
    var toDate = $(".toDate").val();

    var loadingDiv = $(".loadingDiv");
    var generateBut = $(".generateBut");

    if (fromDate!=="" && toDate!=="") {



      if (fromDate <= toDate) {
 
        generateBut.hide();
        loadingDiv.show();

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=getDeactivatedMembers5Post",{fromDate:fromDate,toDate:toDate},function (showOutPut) {



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
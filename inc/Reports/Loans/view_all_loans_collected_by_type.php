<?php 

$ViewAllLoansID = "da64883f2825ba6478dce6a8c9ecbf8dAll";
$ViewMemberLoansID = "399b2b9804c57bf4fb2242f5dbdfd0beMember";
$ViewCUstomerLoansID = "0851bf0a73cfb1b3559a277f2f09c66fCustomer";


  

$getLoanTypeID = $_GET["TRUE"];


if ($getLoanTypeID==="da64883f2825ba6478dce6a8c9ecbf8dAll") {
 $getLoanTypeName = "All";
}else if ($getLoanTypeID==="399b2b9804c57bf4fb2242f5dbdfd0beMember") {
 $getLoanTypeName = "Member";
} else {
 $getLoanTypeName = "Customer";

} 


if ($getLoanTypeName==="All") {
  $countAllss = mysqli_query($conn, "SELECT count(*) AS countAl FROM loans_all WHERE active='yes' AND loan_status='issued' ");

  $countFetch = mysqli_fetch_array($countAllss);
  $countTotalClass = $countFetch['countAl'];
} else {
  $countAllss = mysqli_query($conn, "SELECT count(*) AS countAl FROM loans_all WHERE active='yes' AND status='$getLoanTypeName'AND loan_status='issued' ");

  $countFetch = mysqli_fetch_array($countAllss);
  $countTotalClass = $countFetch['countAl'];
}




 



     $selectMinDate = mysqli_query($conn, "SELECT date_created FROM members_contributions WHERE active='yes' ORDER BY id ASC ");

    $gttf = mysqli_fetch_assoc($selectMinDate);

    $minDate = $gttf["date_created"];




    $maxDate = date("Y-m-d");







?>

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
    <div class="col-sm-auto col-12 mb-2">
 
          </div><!-- /grid column -->
          <div class="col">
            <h1 class="page-title"> All Loans Collected for <?php echo $getLoanTypeName ?></h1>

          </div><!-- /grid column -->
        </div><!-- /grid row -->
        <div class="nav-scroller border-bottom">


          <!-- .nav -->
           <div class="nav nav-tabs">

            <a class="nav-link " href=".login-success.all-the-loan-colelcted-list.js.css.java.html">Overview</a> 

             <a class="nav-link" href="homepage.php?CHECKER=VIEW_LOANS_COLLECTED_BY_TYPE_REPORTS&&TRUE=<?php echo $ViewAllLoansID ?> ">All</a> 
             <a class="nav-link" href="homepage.php?CHECKER=VIEW_LOANS_COLLECTED_BY_TYPE_REPORTS&&TRUE=<?php echo $ViewMemberLoansID ?> ">Member</a> 
             <a class="nav-link" href="homepage.php?CHECKER=VIEW_LOANS_COLLECTED_BY_TYPE_REPORTS&&TRUE=<?php echo $ViewCUstomerLoansID ?> ">Customer</a> 


          </div><!-- /.nav -->



        </div><!-- /.nav-scroller -->
      </header><!-- /.page-title-bar -->












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




         <button  type="submit" name="dd" class="btn btn-primary generateBut" onclick="generateLoansReports('<?php echo $getLoanTypeName ?>')"> Generate  
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



    <div class="board p-0 perfect-scrollbar" >
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
                    <th> ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Mobile</th>
                    <th> Loan</th>
                    <th> Total   </th>
                    <th>  Balance </th>
                    <th>  Monthly Installment </th>
                    <th> Date  Issued </th>
                    <th>  Repayment period  </th>
                    <th> Status  </th>
                
                  </tr>
                </thead><!-- /thead -->
                <!-- tbody -->




                 <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">



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


  function generateLoansReports(getLoanTypeName) {


    var fromDate = $(".fromDate").val();
    var toDate = $(".toDate").val();

    var loadingDiv = $(".loadingDiv");
    var generateBut = $(".generateBut");

    if (fromDate!=="" && toDate!=="") {



      if (fromDate <= toDate) {

        generateBut.hide();
        loadingDiv.show();

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=getlOANSrEPORTSpOST",{getLoanTypeName:getLoanTypeName,fromDate:fromDate,toDate:toDate},function (showOutPut) {



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
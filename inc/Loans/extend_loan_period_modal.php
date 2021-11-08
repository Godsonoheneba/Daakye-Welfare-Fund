 

<?php 




?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="extenLoanModal" tabindex="-1" role="dialog" aria-labelledby="extenLoanModalLabel" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
        <h6 id="extenLoanModalLabel" class="modal-title">Extend your loan Period </h6><br>
        <h6 id="extenLoanModalLabel" class="modal-title">Current Loan Period  : <?php echo $total_months_for_payment ?> Months</h6>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->






          <div class="" >




            <div class="col-md-12 mb-3">
              <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> <select class="custom-select d-block w-100 PaymentPeriodChooseClass"  >
                <option value="0"> Choose... </option>
                <option value="1">  1 Month </option>
                <option value="2">  2 Months </option>
                <option value="3">  3  Months </option>
                <option value="4">  4  Months </option>
                <option value="5">  5  Months </option>
                <option value="6">  6  Months </option>
                <option value="7">  7  Months </option>
                <option value="8">  8  Months </option>
                <option value="9">  9  Months </option>
                <option value="10">  10  Months </option>
                <option value="11">  11  Months </option>
                <option value="12">  12  Months </option>
                <option value="13">  13  Months </option>
                <option value="14">  14  Months </option>
                <option value="15">  15  Months </option>
                <option value="16">  16  Months </option>
                <option value="17">  17  Months </option>
                <option value="18">  18  Months </option>
                <option value="19">  19  Months </option>
                <option value="20">  20  Months </option>
                <option value="21">  21  Months </option>
                <option value="22">  22  Months </option>
                <option value="23">  23  Months </option>
                <option value="24">  24  Months </option>
                <option value="25">  25  Months </option>
                <option value="26">  26  Months </option>
                <option value="27">  27  Months </option>
                <option value="28">  28  Months </option>
                <option value="29">  29  Months </option>
                <option value="30">  30  Months </option>
                <option value="31">  31  Months </option>
                <option value="32">  32  Months </option>
                <option value="33">  33  Months </option>
                <option value="34">  34  Months </option>
                <option value="35">  35  Months </option>
                <option value="36">  36  Months </option>

              </select>

            </div>


            <div class="form-actions col-md-10 mb-3">

              <button type="submit" class="btn btn-primary addBut" onclick="extendLoanPeriod('<?php echo $getLoanID ?>','<?php echo $getPersonID ?>','<?php echo $total_months_for_payment ?>' )"> Extend </button>

              <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
                <span class="sr-only">Loading...</span>
              </div>

            </div><!-- /.form-actions -->

          </div>





        </div><!-- /.list-group -->
        <!-- .loading -->

      </div><!-- /.modal-body -->
      <!-- .modal-footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">






  function extendLoanPeriod(getLoanID,getPersonID,total_months_for_payment) {


    var PaymentPeriodChooseClass = $(".PaymentPeriodChooseClass").val();

    PaymentPeriodChooseClass = Number(PaymentPeriodChooseClass);
    total_months_for_payment = Number(total_months_for_payment);

    var addBut = $(".addBut");
    var loadingBut = $(".loadingBut");

    addBut.hide();
    loadingBut.show();

    if (PaymentPeriodChooseClass!==0) {


      if (PaymentPeriodChooseClass > total_months_for_payment) {

        Swal.fire({
          title: 'Are you sure you want to Extend the loan Period to  ' + PaymentPeriodChooseClass + '  Months? ',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Extend'
        }).then((result) => {


          if (result.value) { 


            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=extendLoanPeriodPost",{getLoanID:getLoanID,getPersonID:getPersonID,total_months_for_payment:total_months_for_payment,PaymentPeriodChooseClass:PaymentPeriodChooseClass},function (showOutPut) {

              if (showOutPut.includes("ERROR")) {
                Swal.fire({
                  title: "Error",
                  text: "Field Cannot be Empty",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });

                addBut.show();
                loadingBut.hide();






              }else{


                Swal.fire({
                  title: "Successfull",
                  text:  "Loan Period has Successfully extended to " + PaymentPeriodChooseClass + " Months? "  ,
                  type: "success",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                }).then((result) => {
                  if (result.value) {


                   location.reload();
                 } 
               })






              }


            });
          }else{
            location.reload();
          }




        });

      } else {


       Swal.fire({
        title: "Error",
        text: "Extension must be more than your current period " + total_months_for_payment + " Months ",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });

       addBut.show();
       loadingBut.hide();

     }



   } else {


     Swal.fire({
      title: "Error",
      text: "Field Cannot be empty",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });

     addBut.show();
     loadingBut.hide();

   }


 }



 function showCash() {



  $(".PaidByDIV").show();
  $(".ChequeNoDIV").hide();

}


function showCheque() {

  $(".PaidByDIV").hide();
  $(".ChequeNoDIV").show();


}


</script>
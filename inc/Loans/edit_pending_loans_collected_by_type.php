 

<?php 


$getTableID = $_GET["TABLE"];
$getPersonID = $_GET["TRUE"];
$getAmount = $_GET["AMOUNT"];
$getStatus = $_GET["STATUS"];



$selectCust21 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND id='$getTableID' AND person_id='$getPersonID'  LIMIT 1 ");


  $getdac1 = mysqli_fetch_assoc($selectCust21);

  $id = $getdac1["id"];
  $person_id = $getdac1["person_id"];
  $total_months_for_payment = $getdac1["total_months_for_payment"];



  

?>
<!-- ---------------------------MORE INFO MODAL------------- -->





          <div class="" >


            <div class="col">
            <h1 class="page-title"> Edit Loan Collected Amount of GH&#8373; <?php echo number_format($getAmount, 2) ?></h1>
            <br>
            <br>
            <hr class="hr">

          </div><!-- /grid column -->


          <div class="row">

           <div class="col-md-6 mb-3">
            <label for="Amount">Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkLoanPayAMount(this)"  class="form-control editLoanAmountClass" id="Amount" placeholder="Amount "  value="<?php echo $getAmount ?>">
          </div>


          <?php 

            if ($total_months_for_payment<=1) {
              $monthInWords = "Month";
            } else {
              $monthInWords = "Months";
              
            }
            

           ?>


            <div class="col-md-6 mb-3">
              <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> <select class="custom-select d-block w-100 EditPaymentPeriodClass"  >
                <option value="<?php echo $total_months_for_payment ?>"> <?php echo $total_months_for_payment . ' ' .$monthInWords ?>  </option>
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


            </div>


          <div class="form-actions col-md-10 mb-3">

  

             <button type="submit" class="btn btn-primary addBut" onclick="editPendingLoan('<?php echo $getTableID ?>','<?php echo $getPersonID ?>','<?php echo $getStatus ?>' )"> Update </button>



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


function editPendingLoan(getTableID,getPersonID,getStatus) {

  var editLoanAmountClass = $(".editLoanAmountClass").val();
  var EditPaymentPeriodClass = $(".EditPaymentPeriodClass").val();

  editLoanAmountClass = Number(editLoanAmountClass);


  var addBut = $(".addBut");
  var loadingBut = $(".loadingBut");

  addBut.hide();
  loadingBut.show();




    if (editLoanAmountClass!=="" && EditPaymentPeriodClass!=="") {

          
    if (editLoanAmountClass<=0) {

      Swal.fire({
        title: "Error",
        text: "Amount cannot be zero",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });
  

      addBut.show();
      loadingBut.hide();

    } else { 

        /*-----------------------For members-----------*/
         Swal.fire({
          title: 'Are you sure you want to perform this action ?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Update!'
        }).then((result) => {

          if (result.value) {

 
            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=editLoansToMember",{getTableID:getTableID,getPersonID:getPersonID,getStatus:getStatus,editLoanAmountClass:editLoanAmountClass,EditPaymentPeriodClass:EditPaymentPeriodClass},function (showOutPut) {



              if (showOutPut.includes("empty")) {
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


              }else if (showOutPut.includes("errorInUpdateList")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occured , Please contact technicians",
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
                  text:  "Pending Loan Updated Successfully" ,
                  type: "success",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                }).then((result) => {
                  if (result.value) {


                   location.replace('.login-success.view-all-pending-loans.js.kt.json.daco.java');
                 } 
               })






              }


            });


          }else{
            location.reload();
          }

        });



    }

        
    }else {

     Swal.fire({
      title: "Error",
      text: "All fields are mandatory",
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



</script>
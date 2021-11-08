
<?php 


?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="addNewExpense" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Add new Bank Statement</h6></center>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">


          <!-- .card-body -->
          <div class="card-body">

            <div class="form-row">



              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <label class="labbMobile" for="bMobile"> Total Amount <abbr title="Required">*</abbr> </label> <input type="text" id="bTotalAmount" class="form-control TotalAmountCLassName TotalAmountClass"  onkeyup="checkMobiles(this)"placeholder="Total Amount" >
                </div>

              </div><!-- /form grid -->


              <div class="col-md-12 mb-3">
                <label for="fName">Statement Number <abbr title="Required">*</abbr></label> <input type="text" class="form-control receiptNumberClass"  id="fName" placeholder="Statement Number"  required="" >

              </div><!-- /form grid -->




            </div><!-- /.form-row -->


          </div><!-- /.card-body -->




        </div><!-- /.modal-body -->
        <!-- .modal-footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success addExpButon" onclick="addNewBankStatement()" >Add</button>
          <div class="spinner-border text-primary loadingExBut" role="status" style="display: none;">
            <span class="sr-only">Loading...</span>
          </div>
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div><!-- /.modal-footer -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->







  <script type="text/javascript">




    /*---------------------------ACCOUTNS ====================*/

    /*---------------ADD NEW EXPENSE----------------------------*/

    function addNewBankStatement() {


      var TotalAmountCLassName = $(".TotalAmountCLassName").val();
      var receiptNumberClass = $(".receiptNumberClass").val();


      var addExpButon = $(".addExpButon");
      var loadingExBut = $(".loadingExBut");

      addExpButon.hide();
      loadingExBut.show();

      if (TotalAmountCLassName!=="" && receiptNumberClass!=="" ) {


        Swal.fire({
          title: 'Are you sure you want to perform this action?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Proceed!'
        }).then((result) => {


          if (result.value) {   
           $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNewBankSTatemt",{TotalAmountCLassName:TotalAmountCLassName,receiptNumberClass:receiptNumberClass},function (showOutPut) {


            if (showOutPut.includes("empty")) {

             Swal.fire({ 
              title: "Error",
              text: "Field cannot be empty",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            })


           }else if (showOutPut.includes("error")) {

             Swal.fire({
              title: "Error",
              text: "An error  occured, please try again later",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            })

             addExpButon.show();
             loadingExBut.hide();

           }else if (showOutPut.includes("exist")) {

             Swal.fire({
              title: "Error",
              text: TotalAmountCLassName + ' ' + "Already Exist" ,
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            })

             addExpButon.show();
             loadingExBut.hide();

           }else{


            Swal.fire({
              title: "Successfull",
              text: TotalAmountCLassName + ' ' + " Has been Successfully Added" ,
              type: "success",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            }).then((result) => {
              if (result.value) {

               window.location.replace(".login-success.bank-statements-and-add-statement-list.js.css.kt.kt");

             } 
           })

          }

        })

         }else{
          location.reload();
         }


       });




      } else {



       Swal.fire({
        title: "Error",
        text: "All fields are mandatory",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });

       addExpButon.show();
       loadingExBut.hide();


     }


   }


 </script>
  

<?php 

// '$Tableid','$person_id','$status'
 
?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="issueLoanModal" tabindex="-1" role="dialog" aria-labelledby="topUpLoanLabel" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
          <h6 id="topUpLoanLabel" class="modal-title">Proceed to issue loan to  <?php echo $personName ?></h6><br>
       
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
                    <label for="amount_collected">Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkLoanPayAMount(this)"  class="form-control amount_collectedClass" id="amount_collected" placeholder="amount_collected "  value="<?php echo $amount_collected ?>" readonly>
                  </div>


                    <div class="col-md-12 mb-3">
                      <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> 
                      <select class="custom-select d-block w-100 total_months_for_paymentClass"  >
                        <option value="<?php echo $total_months_for_payment ?>"> <?php echo $total_months_for_payment ?> Months</option>
                      </select>

                    </div>



                     <div class="col-md-12 mb-3">
                      <label for="PaymentPeriodDate">Payment Date <abbr title="Required">*</abbr> </label> <select class="custom-select d-block w-100 tPaymentDateChooseClass"  >
                        <option value="1.5">  1 and half months  </option>
                        <option value="2">  2 Months </option>
                        <option value="2.5">  2 and half months </option>
                        <option value="3">  3  Months </option>
                        <option value="4">  4  Months </option>

                      </select>
                    </div>

      
          <div class="form-actions col-md-10 mb-3">


             <button type="submit" class="btn btn-primary topUpBut" onclick="issuedLoanToUsers('<?php echo $Tableid ?>','<?php echo $person_id ?>','<?php echo $status ?>' ) "> Issue</button>



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




  /*----------------------------------------ISSUED LOANS TO USER----------------------*/

  function issuedLoanToUsers(loanID, person_id,status) {


   var amount_collectedClass = $(".amount_collectedClass").val();
    var total_months_for_paymentClass = $(".total_months_for_paymentClass").val();
    var tPaymentDateChooseClass = $(".tPaymentDateChooseClass").val();

    if (amount_collectedClass!=="" && total_months_for_paymentClass!=="" && tPaymentDateChooseClass!="") {


        Swal.fire({
      title: 'Are you sure you want to Issued the loan? ',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Issue Loan!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=issueLoansToUSerPost",{loanID:loanID,person_id:person_id,status:status,tPaymentDateChooseClass:tPaymentDateChooseClass},function (showOutPut) {

          // alert(showOutPut);
          // exit();

          if (showOutPut.includes("error")) {
            Swal.fire({
              title: "Error",
              text: "An error occured, Pelase try again,",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


          }else{


            Swal.fire(
              'Successfull!',
              ' Loan Issued Successfull.',
              'success'
              ).then((result) =>{

                Swal.fire({
                  title: 'Print',
                  text: "Print Receipt",
                  type: 'success',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Print'
                }).then((result) => {


                  if (result.value) {

                    window.open(showOutPut.trim())


                    location.reload();



                  }
                })



              })




            }


          });

      }


    });



    }

 
  }



 

  function clickCHangeG1Modal(loanIDD) {
    
    var hiddenInputForLoanID = $(".hiddenInputForLoanID").val(loanIDD);

    // hiddenInputForLoanID.text("loanIDD");
    // alert(hiddenInputForLoanID);


  }





  /*----------------------------------------TOP UP LOAN----------------------*/
function topUpLoanCLick(loanID, person_id,real_monthLeft,qualifyLoanTopUp) {


  var topUpLoanAmountClass = $(".topUpLoanAmountClass").val();
  var topUpPaymentPeriodChooseClass = $(".topUpPaymentPeriodChooseClass").val();
  var topUpPaymentDateChooseClass = $(".topUpPaymentDateChooseClass").val();

  qualifyLoanTopUp = Number(qualifyLoanTopUp);
  topUpLoanAmountClass = Number(topUpLoanAmountClass);

  // var maxMOnth = 36 - real_monthLeft;

  var topUpBut = $(".topUpBut");
  var loadingBut = $(".loadingBut");

  // alert(topUpPaymentDateChooseClass);

    if (topUpLoanAmountClass!=="" && topUpPaymentPeriodChooseClass!=="" && topUpPaymentDateChooseClass!="") {

      if (topUpLoanAmountClass<=qualifyLoanTopUp) {


  topUpBut.hide();
  loadingBut.show();
 
 
    Swal.fire({
      title: 'Are you sure you want to top up loan? ',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Top Up Loan!'
    }).then((result) => {

 
      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=topUpLoanPost",{loanID:loanID,person_id:person_id,real_monthLeft:real_monthLeft,qualifyLoanTopUp:qualifyLoanTopUp,topUpLoanAmountClass:topUpLoanAmountClass,topUpPaymentPeriodChooseClass:topUpPaymentPeriodChooseClass,topUpPaymentDateChooseClass:topUpPaymentDateChooseClass},function (showOutPut) {


          // alert(showOutPut);
          // exit();



          if (showOutPut.includes("requesterror")) {
            Swal.fire({
              title: "Error",
              text: "An error occured, in Requesting Top Up, Pelase try again,",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


          }else if (showOutPut.includes("issueerror")) {
            Swal.fire({
              title: "Error",
              text: "An error occured, in Issueng of Top up Loans , Pelase try again,",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


          }else if (showOutPut.includes("errorInSendingMail")) {
            Swal.fire({
              title: "Error",
              text: "An error occured in seeding email, Pelase try again,",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


          }else if (showOutPut.includes("requestsucess")) {
            Swal.fire(
            'Successfull!',
            '  Top up Loan requested Successfully ',
            'success'
            ).then((result) =>{


              location.reload();

            })


          }else if (showOutPut.includes("issuesuccess")) {
            Swal.fire(
            'Successfull!',
            ' Successfully Issued Top up Loan ',
            'success'
            ).then((result) =>{


              location.reload();

            })


          }else{


            // Swal.fire(
            // 'Successfull!',
            // ' Successfully Top Up ',
            // 'success'
            // ).then((result) =>{


            //   location.reload();
              



            // })




            }


          });

      }else{
        location.reload();
      }


    });



      } else {


    Swal.fire({
    title: "Error",
    text: "You cant top up more than your current amount " + qualifyLoanTopUp ,
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });



   topUpBut.show();
   loadingBut.hide();



      }


    } else {


    Swal.fire({
    title: "Error",
    text: "All fields must be filled",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });



   topUpBut.show();
   loadingBut.hide();


    }



    
  }
























  /*----------------------------------------TOP UP LOAN----------------------*/

  // function topUpLoanCLick(loanID, person_id,real_monthLeft,qualifyLoanTopUp) {


  // var topUpLoanAmountClass = $(".topUpLoanAmountClass").val();
  // var topUpPaymentPeriodChooseClass = $(".topUpPaymentPeriodChooseClass").val();

  // qualifyLoanTopUp = Number(qualifyLoanTopUp);
  // topUpLoanAmountClass = Number(topUpLoanAmountClass);

  // var maxMOnth = 36 - real_monthLeft;

  // var topUpBut = $(".topUpBut");
  // var loadingBut = $(".loadingBut");

  //   if (topUpLoanAmountClass!=="" && topUpPaymentPeriodChooseClass!=="") {

  //     if (topUpLoanAmountClass<=qualifyLoanTopUp) {

  //       if (topUpPaymentPeriodChooseClass<=maxMOnth) {


  // topUpBut.hide();
  // loadingBut.show();


  //   Swal.fire({
  //     title: 'Are you sure you want to top up loan? ',
  //     text: "You won't be able to revert this!",
  //     type: 'warning',
  //     showCancelButton: true,
  //     confirmButtonColor: '#3085d6',
  //     cancelButtonColor: '#d33',
  //     confirmButtonText: 'Yes, Top Up Loan!'
  //   }).then((result) => {


  //     if (result.value) {

  //       $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=topUpLoanPost",{loanID:loanID,person_id:person_id,real_monthLeft:real_monthLeft,qualifyLoanTopUp:qualifyLoanTopUp,topUpLoanAmountClass:topUpLoanAmountClass,topUpPaymentPeriodChooseClass:topUpPaymentPeriodChooseClass},function (showOutPut) {



  //         if (showOutPut.includes("error")) {
  //           Swal.fire({
  //             title: "Error",
  //             text: "An error occured, Pelase try again,",
  //             type: "warning",
  //             confirmButtonClass: "btn-danger",
  //             confirmButtonText: "Ok",
  //             closeOnConfirm: false,
  //             closeOnCancel: false

  //           });


  //         }else{


  //           Swal.fire(
  //           'Successfull!',
  //           ' Successfully Top Up ',
  //           'success'
  //           ).then((result) =>{


  //             location.reload();
              



  //           })




  //           }


  //         });

  //     }else{
  //       location.reload();
  //     }


  //   });






  //       } else {


  //         Swal.fire({
  //   title: "Error",
  //   text: "Invalid Month Peroid. Note: You can select from month 1 to " + maxMOnth ,
  //   type: "warning",
  //   confirmButtonClass: "btn-danger",
  //   confirmButtonText: "Ok",
  //   closeOnConfirm: false,
  //   closeOnCancel: false

  // });


  //          topUpBut.show();
  //  loadingBut.hide();


  //       }


  //     } else {


  //   Swal.fire({
  //   title: "Error",
  //   text: "You cant top up more than your current amount " + qualifyLoanTopUp ,
  //   type: "warning",
  //   confirmButtonClass: "btn-danger",
  //   confirmButtonText: "Ok",
  //   closeOnConfirm: false,
  //   closeOnCancel: false

  // });



  //  topUpBut.show();
  //  loadingBut.hide();



  //     }


  //   } else {


  //   Swal.fire({
  //   title: "Error",
  //   text: "All fields must be filled",
  //   type: "warning",
  //   confirmButtonClass: "btn-danger",
  //   confirmButtonText: "Ok",
  //   closeOnConfirm: false,
  //   closeOnCancel: false

  // });



  //  topUpBut.show();
  //  loadingBut.hide();


  //   }



    
  // }




/*----------------checkLoanPayAMount----*/
function checkLoanPayAMount(checkit) {

  var check = /[^0-9.]/g;  
  checkit.value = checkit.value.replace(check, "");
}

</script>
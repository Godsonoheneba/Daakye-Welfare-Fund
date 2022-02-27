  

<?php 

 
?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="topUpLoan" tabindex="-1" role="dialog" aria-labelledby="topUpLoanLabel" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
        <?php 

          if ($mode===1) {


            ?>

                <h6 id="topUpLoanLabel" class="modal-title">Amount toped up is GH&#8373;  <?php echo number_format($top_up_amount, 2) ?></h6><br>
                
            <?php


          }else{

            ?>

                <h6 id="topUpLoanLabel" class="modal-title">Top Up Loan For <?php echo $getLoanBy ?></h6><br>
                <h6 id="topUpLoanLabel" class="modal-title">Current Balance : <?php echo number_format($balance, 2) ?></h6>
                <h6 id="topUpLoanLabel" class="modal-title">You can top up up to GH&#8373;  : <?php echo number_format($qualifyLoanTopUp, 2) ?></h6>
            <?php

          }


         ?>
       
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

            <?php 

              if ($mode===1) {

                ?>

                  <div class="col-md-12 mb-3">
                    <label for="Amount">Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkLoanPayAMount(this)"  class="form-control topUpLoanAmountClass" id="Amount" placeholder="Amount "  value="<?php echo $top_up_amount ?>" readonly>
                  </div>


                    <div class="col-md-12 mb-3">
                      <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> 
                      <select class="custom-select d-block w-100 topUpPaymentPeriodChooseClass"  >
                        <option value="<?php echo $topup_months ?>"> <?php echo $topup_months ?> Months</option>
                      </select>

                    </div>

                  <?php
                
              } else {
                
                  ?>

                  <div class="col-md-12 mb-3">
                    <label for="Amount">Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkLoanPayAMount(this)"  class="form-control topUpLoanAmountClass" id="Amount" placeholder="Amount "  value="<?php echo $qualifyLoanTopUp ?>">
                  </div>


                    <div class="col-md-12 mb-3">
                      <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> <select class="custom-select d-block w-100 topUpPaymentPeriodChooseClass"  >
                        <option value=""> Choose... </option>
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

                  <?php




              }
              


             ?>

          <div class="form-actions col-md-10 mb-3">


             <button type="submit" class="btn btn-primary topUpBut" onclick="topUpLoanCLick('<?php echo $getLoanID ?>','<?php echo $getPersonID ?>','<?php echo $real_monthLeft ?>','<?php echo $qualifyLoanTopUp ?>') "> Top Up </button>



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



  /*----------------------------------------TOP UP LOAN----------------------*/

  function topUpLoanCLick(loanID, person_id,real_monthLeft,qualifyLoanTopUp) {


  var topUpLoanAmountClass = $(".topUpLoanAmountClass").val();
  var topUpPaymentPeriodChooseClass = $(".topUpPaymentPeriodChooseClass").val();

  qualifyLoanTopUp = Number(qualifyLoanTopUp);
  topUpLoanAmountClass = Number(topUpLoanAmountClass);

  // var maxMOnth = 36 - real_monthLeft;

  var topUpBut = $(".topUpBut");
  var loadingBut = $(".loadingBut");

    if (topUpLoanAmountClass!=="" && topUpPaymentPeriodChooseClass!=="") {

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

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=topUpLoanPost",{loanID:loanID,person_id:person_id,real_monthLeft:real_monthLeft,qualifyLoanTopUp:qualifyLoanTopUp,topUpLoanAmountClass:topUpLoanAmountClass,topUpPaymentPeriodChooseClass:topUpPaymentPeriodChooseClass},function (showOutPut) {


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
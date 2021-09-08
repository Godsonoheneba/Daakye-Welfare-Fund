 

<?php 

  

?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="payLoanModal" tabindex="-1" role="dialog" aria-labelledby="payLoanModalLabel" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
 <!--      <div class="modal-header text-center">
        <h6 id="payLoanModalLabel" class="modal-title">Pay <?php echo $getLoanBy ?>'s Loan</h6><br>
        <h6 id="payLoanModalLabel" class="modal-title">Current Balance : <?php echo number_format($balance, 2) ?></h6>
        <h6 id="payLoanModalLabel" class="modal-title">PAY THIS AMOUNT : <?php echo number_format($next_month_payment_amount, 2) ?></h6>
      </div> -->
      <div class="modal-body px-0">
        <div class="list-group list-group-flush list-group-divider">
          <div class="list-group-item">

          </div>






          <div class="" >


      <div class="card-body col-12">
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">
            <!-- thead -->
            <thead> 
              <tr class="text-center">
                <th> LOAN PRINCIPAL</th>
                <th> LOAN INTEREST</th>
                <th> PENALTY</th>
                <th> TOTAL </th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



               <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                <!-- tr -->

                <tr class="text-center">
                 


                  <td class="align-middle">  <?php echo number_format($actualLoanAMountWihoutInterest,2)?> </td>
                  <td class="align-middle">  <?php echo number_format($actuaInterestPaid,2)?> </td>
                  <td class="align-middle">  <?php echo number_format($penalty_For_late_Payment,2)?> </td>
                  <td class="align-middle">  <?php echo number_format($next_month_payment_amount,2)?> </td>

                 
                 

                </tr>



            </tbody><!-- /tbody -->

      </table><!-- /.table -->
    </div><!-- /.table-responsive -->
  </div><!-- /.card-body -->
</div><!-- /.card -->


<!--            <div class="col-md-12 mb-3">
            <label for="Amount">Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkLoanPayAMount(this)"  class="form-control payLoanAmountClass" id="Amount" placeholder="Amount "  value="<?php echo $penalty_For_late_Payment ?>" readonly>
          </div>

 -->

          <div class="col-md-12 mb-3">
            <label for="Amount">Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkLoanPayAMount(this)"  class="form-control payLoanAmountClass" id="Amount" placeholder="Amount "  value="<?php echo $next_month_payment_amount ?>">
          </div>





          <div class="form-actions col-md-10 mb-3">


             <button type="submit" class="btn btn-primary addBut" onclick="payLoans('<?php echo $getLoanID ?>','<?php echo $getPersonID ?>','<?php echo $companyRevenueAmount ?>','<?php echo $companyRevenuePurpose ?>','<?php echo $actuaInterestPaid ?>','<?php echo $actuaAmountToPayperMOnth ?>','<?php echo $actualLoanAMountWihoutInterest ?>','<?php echo $next_month_payment_amount ?>','<?php echo $penalty_For_late_Payment ?>' )"> Pay </button>



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





  function showCash() {



    $(".PaidByDIV").show();
    $(".ChequeNoDIV").hide();

  }


  function showCheque() {

    $(".PaidByDIV").hide();
    $(".ChequeNoDIV").show();


  }



/*----------------checkLoanPayAMount----*/
// function checkLoanPayAMount(checkit) {

//   var check = /[^0-9.]/g;  
//   checkit.value = checkit.value.replace(check, "");
// }

</script>
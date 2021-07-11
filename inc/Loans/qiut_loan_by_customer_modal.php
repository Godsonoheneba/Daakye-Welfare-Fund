 

<?php 

 
 
?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="quitLoanModal" tabindex="-1" role="dialog" aria-labelledby="quitLoanModalLabel" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
        <h6 id="quitLoanModalLabel" class="modal-title">Pay <?php echo $getLoanBy ?>'s Loan</h6><br>
        <h6 id="quitLoanModalLabel" class="modal-title">Current Balance : <?php echo number_format($getBalance, 2) ?></h6>
        <h6 id="quitLoanModalLabel" class="modal-title">Total Months Left: <?php echo $months_left ?></h6>
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
            <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> <select class="custom-select d-block w-100 PaymentPeriodClass"  >
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
            </select>

          </div>





          <div class="form-actions col-md-10 mb-3">


             <button type="submit" class="btn btn-primary payFees_buts" onclick="payLoans('<?php echo $getLoanID ?>','<?php echo $getPersonID ?>','<?php echo $companyRevenueAmount ?>','<?php echo $companyRevenuePurpose ?>','<?php echo $actuaInterestPaid ?>','<?php echo $actuaAmountToPayperMOnth ?>','<?php echo $actualLoanAMountWihoutInterest ?>','<?php echo $next_month_payment_amount ?>' )"> Not Use </button>


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


</script>
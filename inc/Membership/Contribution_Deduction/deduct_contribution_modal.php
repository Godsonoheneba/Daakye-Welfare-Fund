 


<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
     
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->



        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">
            <!-- thead -->
            <thead> 
              <tr class="text-center">
                <th> DEDUCTION AMOUNT</th>
               
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



      </table><!-- /.table -->
    </div><!-- /.table-responsive -->



          <div class="" >


           <div class="col-md-12 mb-3">
            <div class="form-group">
              <label class="control-label" for="wew">Amount to Deduct <abbr title="Required">*</abbr></label> <input id="wew" type="text" class="form-control amountToDeduct"  onkeyup="checkAmountEntered(this)" placeholder="Amount. eg. 200">
            </div><!-- /.form-group -->
          </div>



           <div class="col-md-12 mb-3">
            <div class="form-group">
              <label class="control-label" for="we">Reasons * <abbr title="Required">*</abbr></label> <input id="we" type="text" class="form-control reasons"   placeholder="Reason. ">
            </div><!-- /.form-group -->
          </div>


          <div class="form-actions col-md-10 mb-3">

            <button type="submit" name="UpdateCustomer" class="btn btn-primary addBut" onclick="deductContribution('<?php echo $member_id_encrypt ?>')"> Deduct </button>


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


</script>
 

<?php 




?>
<!-- ---------------------------MORE INFO MODAL------------- -->



<!-- .modal -->
<div class="modal fade" id="statementsModal" tabindex="-1" role="dialog" aria-labelledby="statementsModalLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
        <h6 id="statementsModalLabel" class="modal-title text-center"> Statement for <?php echo $Fullname ?>'s Fees</h6>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->


          <?php 

          $selectMinDate = mysqli_query($conn, "SELECT fee_pay_date FROM fees_payment WHERE admission_number='$getTopCode' AND active='yes' ORDER BY id ASC ");

          $gttf = mysqli_fetch_assoc($selectMinDate);

          $minDate = $gttf["fee_pay_date"];

 

           $selectMaxDate = mysqli_query($conn, "SELECT fee_pay_date FROM fees_payment WHERE admission_number='$getTopCode' AND active='yes' ORDER BY id DESC ");

          $gttfMax = mysqli_fetch_assoc($selectMaxDate);

          $maxDate = $gttfMax["fee_pay_date"];

           ?>


          <div>
            <!-- form grid -->
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label class="control-label" for="fromDate">From:  <abbr title="Required">*</abbr></label> <input id="fromDate" type="text" class="form-control fromDate" name="fromDate" data-toggle="flatpickr" required="" value="<?php echo $minDate ?>">
              </div><!-- /.form-group -->
            </div>

 

            <div class="col-md-12 mb-3">
              <div class="form-group">
                <label class="control-label" for="toDate">To:  <abbr title="Required">*</abbr></label> <input id="toDate" type="text" class="form-control toDate" name="toDate" data-toggle="flatpickr" required="" value="<?php echo $maxDate ?>">
              </div><!-- /.form-group -->
            </div>


            <center>
              <div class="spinner-border text-warning loadingDiv" role="status" style="display: none;">
                <span class="sr-only">Loading... </span>
              </div>

              <div class="form-actions col-md-12 mb-3">
             



                 <button  type="submit" name="dd" class="btn btn-primary generateBut" onclick="generateStatement('<?php echo $getTopCode ?>')"> Generate  
                </button>



              </div><!-- /.form-actions -->

            </center>

          </div>


          <div class="modal-body p-0 theHolderOfResults" style="display: none;">
            <!-- .table -->
            <table class="table table-striped">
              <!-- thead -->
              <thead class="thead-">
                <tr>
                  <th style="min-width:200px"> Date </th>
                  <th> Receipt # </th>
                  <th> Amount </th>
                </tr>
              </thead><!-- /thead -->
              <!-- tbody -->

              <tbody class="showResultsHere">
                

              </tbody>


              <div class="form-actions col-md-12 mb-3" >
                <button style="float: right!important;" type="submit" name="UpdateCustomer" class="btn btn-primary generateBut2" onclick="reDirectToPrintStatement('<?php echo $getTopCode ?>','<?php echo $minDate ?>','<?php echo $maxDate ?>')"> Print  <span class="oi oi-print"></span>
                </button>
              </div>
             



            </table><!-- /.table -->
          </div>





        </div>











      </div><!-- /.list-group -->
      <!-- .loading -->


      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div><!-- /.modal-footer -->
    </div><!-- /.modal-body -->
    <!-- .modal-footer -->

  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->




<script type="text/javascript">



  function showOther() {



    $(".showSelfDepositor").hide();
    $(".showOtherDepositor").show();

    $(".depositorName").val("");
    $(".depositorMobile").val("");
    
  }

  function showSelf(fullname,telephone) {



    $(".depositorName").val(fullname);
    $(".depositorMobile").val(telephone);

    $(".showSelfDepositor").show();
    $(".showOtherDepositor").hide();






  }


</script>
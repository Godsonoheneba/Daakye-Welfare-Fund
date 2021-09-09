 

<?php 

  

$explodeDteAdded = explode("-", $date_created);

$getYearForAddingMem  = current($explodeDteAdded);
$getMonthForAddingMem  = next($explodeDteAdded);



if ($getMonthForAddingMem === "01") {

  $getMonthInWords = "January";
}


if ($getMonthForAddingMem === "02") {

  $getMonthInWords = "February";
}


if ($getMonthForAddingMem === "03") {

  $getMonthInWords = "March";
}


if ($getMonthForAddingMem === "04") {

  $getMonthInWords = "April";
}

if ($getMonthForAddingMem === "05") {

  $getMonthInWords = "May";
}

if ($getMonthForAddingMem === "06") {

  $getMonthInWords = "June";
}

if ($getMonthForAddingMem === "07") {

  $getMonthInWords = "July";
}

if ($getMonthForAddingMem === "08") {

  $getMonthInWords = "August";
}

if ($getMonthForAddingMem === "09") {

  $getMonthInWords = "September";
}

if ($getMonthForAddingMem === "10") {

  $getMonthInWords = "October";
}

if ($getMonthForAddingMem === "11") {

  $getMonthInWords = "November";
}

if ($getMonthForAddingMem === "12") {

  $getMonthInWords = "December";
}

?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="depositModal" tabindex="-1" role="dialog" aria-labelledby="depositModalLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
     <!--  <div class="modal-header text-center">
        <h6 id="depositModalLabel" class="modal-title">Pay <?php echo $fullname ?> 's Monthly Dues <br>   </h6>
        <h6 id="depositModalLabel" class="modal-title">PAY THIS AMOUNT IN FULL:  <?php echo number_format($payThisAmountAsCOntri, 2) ?> </h6>
      </div> -->
      <!-- .modal-body -->
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
                <th> CONTRIBUTION AMOUNT</th>
                <th> PENALTY</th>
                <th> TOTAL </th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



               <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                <!-- tr -->

                <tr class="text-center">
                 


                  <td class="align-middle">  <?php echo number_format($contribution_amount,2)?> </td>
                  <td class="align-middle">  <?php echo number_format($penaltyContiAMount,2)?> </td>
                  <td class="align-middle">  <?php echo number_format($payThisAmountAsCOntri,2)?> </td>

                 
                 

                </tr>



            </tbody><!-- /tbody -->

      </table><!-- /.table -->
    </div><!-- /.table-responsive -->



          <div class="" >


           <div class="col-md-12 mb-3">
            <div class="form-group">
              <label class="control-label" for="we">Amount to Pay <abbr title="Required">*</abbr></label> <input id="we" type="text" class="form-control contributionAMountClass"  readonly=""  value="<?php echo $payThisAmountAsCOntri ?>" >
            </div><!-- /.form-group -->
          </div>




          <?php 

          if ($last_month_contributed==="" || $last_month_contributed==="Has not start contributing") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                <option value="<?php echo $getMonthForAddingMem ?>"> <?php echo $getMonthInWords?></option>

              </select>

            </div>

            <?php

          }









          if ($last_month_contributed==="01") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="02">February</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="02") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="03">March</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="03") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="04">April</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="04") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="05">May</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="05") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="06">June</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="06") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="07">July</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="07") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="08">August</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="08") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="09">September</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="09") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="10">October</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="10") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="11">November</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="11") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="12">December</option>

              </select>

            </div>

            <?php

          }


          if ($last_month_contributed==="12") {

            ?>

            <div class="col-md-12 mb-3">
              <label for="Month">Month </label> <select class="custom-select d-block w-100 month_to_pay" >
                
                <option value="01">January</option>

              </select>

            </div>

            <?php

          }






          ?>



 

          <?php 

          if ($last_year_contributed==="") {

            ?>
            <div class="col-md-12 mb-3">
              <label for="Year">Year </label> <select class="custom-select d-block w-100 year_to_pay" >
                <option value="<?php echo $getYearForAddingMem ?>"><?php echo $getYearForAddingMem ?></option>
              </select>

            </div>
            <?php

          } else {

            ?>
            <div class="col-md-12 mb-3">
              <label for="Year">Year </label> 

              <?php

              $currently_selected = date('Y'); 
                                // Year to start available options at
              $earliest_year = 2015; 
                                // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
              $latest_year = date('Y'); 

              if ($last_month_contributed>=12) {
               $last_year_contributed+=1;
              }

              echo '<select class="custom-select d-block w-100 year_to_pay" ';
              echo '<option value="" selected> Year </option>';

                                // Loops over each int[year] from current year, back to the $earliest_year [1950]
              foreach ( range( $last_year_contributed, $last_year_contributed ) as $i ) {
                                  // Prints the option with the next year in range.
                echo '<option value="'.$i.'"'.($i === $currently_selected ?  : '').'>'.$i.'</option>';
              }
              echo '</select>';
              ?>




            </div>
            <?php
          }


          ?>



 


          <div class="form-group col-md-12 mb-3">
            <label>Specify Payment</label>
            <div class="custom-control custom-radio mb-1">
              <input type="radio" class="custom-control-input" name="rdGroup3" id="rd7" checked> <label class="custom-control-label" for="rd7">Default Amount</label>
              <div class="text-muted"> This is when the member want to pay with its own amount, NOTE: Amount shoul more than <?php echo $payThisAmountAsCOntri ?></div>
            </div>
            <div class="custom-control custom-radio mb-1">
              <input type="radio" class="custom-control-input" name="rdGroup3" id="rd8" > <label class="custom-control-label" for="rd8">Your Own Amount</label>
              <div class="custom-control-hint mt-1">
                <input  type="text" class="form-control ownAMountPayClass"  onclick="checkMobiles(this)"  >
              </div>
            </div>
          </div><!-- /.form-group -->


          <div class="form-actions col-md-10 mb-3">

            <button type="submit" name="UpdateCustomer" class="btn btn-primary addBut" onclick="payMontlyDues('<?php echo $member_id ?>','<?php echo $member_id_encrypt ?>','<?php echo $payThisAmountAsCOntri ?>','<?php echo $penaltyContiAMount ?>')"> Pay </button>


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
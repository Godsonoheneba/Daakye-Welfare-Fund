 

<?php  

 
// $selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$getID' AND member_id_encrypt='$getIDEncrypt' AND active='yes' LIMIT 1 ");

// $getAlls = mysqli_fetch_assoc($selStu);
// $id = $getAlls["id"];
// $member_id = $getAlls["member_id"];
// $member_id_encrypt = $getAlls["member_id_encrypt"];
// $firstname = $getAlls["firstname"];
// $surname = $getAlls["surname"];
// $contribution_amount = $getAlls["contribution_amount"];
// $total_contribution_made = $getAlls["total_contribution_made"];

// $fullname = $firstname . " " . $surname;
// $status = "member";



// $qualifyLoanAmount = $total_contribution_made * 2;
// $getGurantorsAmount = $amount_collected / 4;


$guarantorValue1 = "1";
$guarantorValue2 = "2";

 
?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="changeGuarantorModal" tabindex="-1" role="dialog" aria-labelledby="changeGuarantorModalLabel" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
        <h6 id="changeGuarantorModal2Label" class="modal-title">Change Guarantor 1 ->|  <?php echo $guarantor1 ?> </h6><br>

    <input type="hidden"   class="hiddenInputForLoanID" id="hiddenInputForLoanID" value=""> 

        
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
              <label for="guarantor1">Guarantor  <abbr title="Required">*</abbr></label>
              <select class="custom-select d-block w-100 changeGuarantorClasss"   id="guarantor1" >

           <?php 



         $squery = "SELECT * FROM members WHERE active='yes' AND member_id !='$getID' ORDER BY id ASC "; 

          $listOfGura="";

           $sresults = mysqli_query($conn, $squery);
           $scount = mysqli_num_rows($sresults);
           if ($scount > 0) {
             echo' <option value=""> Choose...</option>';

             while ($srow = mysqli_fetch_array($sresults)) {

             // $srow = mysqli_fetch_array($sresults);

              $member_idDBB = $srow["member_id"];
              $member_id_encrypt_LOANS= $srow["member_id_encrypt"];
              $fname = $srow["firstname"];
              $sname = $srow["surname"];
              $has_loanDB = $srow["has_loan"];
              $telephone = $srow["telephone"];
              $total_contribution_madeDB = $srow["total_contribution_made"];

              $total_guaranteeDB = $srow["total_guarantee"];


              $thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes' AND person_id='$member_id_encrypt_LOANS' AND finish_paying='no'  ");

              //$thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'   ");



              $getRowe = mysqli_fetch_assoc($thhrr);
              $loanid = $getRowe["id"];
              $total_loan_amount_to_pay = $getRowe["total_amount_to_pay"];
              $MytotalLoanPaid = $getRowe["amount_paid"];


              $halfOftotal_amount_to_pay = $total_loan_amount_to_pay / 2 ; 


              $guratName = $fname . " " . $sname ;

           $MYtotal_guarantee = "3";



                 $countTotalGuranto = mysqli_query($conn, "SELECT count(*) AS count1 FROM members_contributions WHERE active='yes' AND member_id='$member_idDBB' ");

              $countFetch1 = mysqli_fetch_array($countTotalGuranto);
              $countTotalGurantors = $countFetch1['count1'];

              $limitOfGurant = 7;





                  if (($total_guaranteeDB  < $MYtotal_guarantee) && ($MytotalLoanPaid >= $halfOftotal_amount_to_pay) && ($countTotalGurantors >= $limitOfGurant)  ) {
                      
                      $listOfGura.= '<option value="'.$srow["member_id"].'" > '.$guratName.'  -  '.$telephone.'   </option>';
                  }

                  








          }

              echo "$listOfGura";




        }  

        ?>

      </select>
    </div>



 


        <div class="form-actions col-md-10 mb-3">

          <button  class="btn btn-primary addBut" onclick="changeGurantorBut1('<?php echo $Tableid ?>')"> Change </button>

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














<!-- .modal -->
<div class="modal fade" id="changeGuarantorModal2" tabindex="-1" role="dialog" aria-labelledby="changeGuarantorModal2Label" aria-hidden="true">
  <!-- .modal-dialog --> 
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header text-center">
        <h6 id="changeGuarantorModal2Label" class="modal-title">Change Guarantor 2 ->|  <?php echo $guarantor2 ?> </h6><br>
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
              <label for="guarantor2">Guarantor  <abbr title="Required">*</abbr></label>
              <select class="custom-select d-block w-100 changeGuarantorClasss2"   id="guarantor2" >

           <?php 



         $squery = "SELECT * FROM members WHERE active='yes' AND member_id !='$getID' ORDER BY id ASC "; 

          $listOfGura="";

           $sresults = mysqli_query($conn, $squery);
           $scount = mysqli_num_rows($sresults);
           if ($scount > 0) {
             echo' <option value=""> Choose...</option>';

             while ($srow = mysqli_fetch_array($sresults)) {

             // $srow = mysqli_fetch_array($sresults);

              $member_idDBB = $srow["member_id"];
              $member_id_encrypt_LOANS= $srow["member_id_encrypt"];
              $fname = $srow["firstname"];
              $sname = $srow["surname"];
              $has_loanDB = $srow["has_loan"];
              $telephone = $srow["telephone"];
              $total_contribution_madeDB = $srow["total_contribution_made"];

              $total_guaranteeDB = $srow["total_guarantee"];


              $thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes' AND person_id='$member_id_encrypt_LOANS' AND finish_paying='no'  ");

              //$thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'   ");



              $getRowe = mysqli_fetch_assoc($thhrr);
              $loanid = $getRowe["id"];
              $total_loan_amount_to_pay = $getRowe["total_amount_to_pay"];
              $MytotalLoanPaid = $getRowe["amount_paid"];


              $halfOftotal_amount_to_pay = $total_loan_amount_to_pay / 2 ; 


              $guratName = $fname . " " . $sname ;

           $MYtotal_guarantee = "3";



                  $countTotalGuranto = mysqli_query($conn, "SELECT count(*) AS count1 FROM members_contributions WHERE active='yes' AND member_id='$member_idDBB' ");

              $countFetch1 = mysqli_fetch_array($countTotalGuranto);
              $countTotalGurantors = $countFetch1['count1'];

              $limitOfGurant = 7;





                  if (($total_guaranteeDB  < $MYtotal_guarantee) && ($MytotalLoanPaid >= $halfOftotal_amount_to_pay) && ($countTotalGurantors >= $limitOfGurant)  ) {
                      
                      $listOfGura.= '<option value="'.$srow["member_id"].'" > '.$guratName.'  -  '.$telephone.'   </option>';
                  }

                  








          }

              echo "$listOfGura";




        } 

        ?>

      </select>
    </div>







        <div class="form-actions col-md-10 mb-3">

          <button  class="btn btn-primary addBut"  onclick="changeGurantorBut2('<?php echo $Tableid ?>')"> Change </button>

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






  /*-----------------------change member guarantor 1 at request loan-------------------*/

  function changeGurantorBut1(loanIDsss) {

    var loanID = $(".hiddenInputForLoanID").val();
    var changeGuarantorClasss = $(".changeGuarantorClasss").val();


    var addBut = $(".addBut");
    var loadingBut = $(".loadingBut");

    addBut.hide();
    loadingBut.show();

    if (changeGuarantorClasss!=="" ) {

      Swal.fire({
        title: 'Are you sure you want to Change guarantor 1 to  ' + changeGuarantorClasss + ' ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Change'
      }).then((result) => {


        if (result.value) {

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=ChangeGuarantor1AtRequestLoan",{loanID:loanID,changeGuarantorClasss:changeGuarantorClasss},function (showOutPut) {

            


            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "Field  Cannot be Empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("alreadyy")) {

                Swal.fire({
                  title: "Error",
                  text: "Guarantor Already Exist!!! Try Different person or maintain the guarantor  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantfor500gura1")) {

                Swal.fire({
                  title: "Error",
                  text: "Total Contribution Balance for Guarantor 1 should be more or equal to GHC 600.00  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantguarForG1")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 1  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("error")) {

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
              text:  "Successfully, Guarantor 1 has change to " + changeGuarantorClasss  ,
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
        text: "Field is mandatory (*)",
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
  /*--------------------ends change guaranto 1----------------*/












  /*-----------------------change member guarantor 2 at request loan-------------------*/

  function changeGurantorBut2(loanIDsss) {


    var loanID = $(".hiddenInputForLoanID").val();
    var changeGuarantorClasss2 = $(".changeGuarantorClasss2").val();

    var addBut = $(".addBut");
    var loadingBut = $(".loadingBut");

    addBut.hide();
    loadingBut.show();

    if (changeGuarantorClasss2!=="" ) {

      Swal.fire({
        title: 'Are you sure you want to Change guarantor 2 to ' + changeGuarantorClasss2 + ' ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Change'
      }).then((result) => {


        if (result.value) {

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=ChangeGuarantor2AtRequestLoan",{loanID:loanID,changeGuarantorClasss2:changeGuarantorClasss2},function (showOutPut) {


            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "Branch Mobile  Cannot be Empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("alreadyy")) {

                Swal.fire({
                  title: "Error",
                  text: "Guarantor Already Exist!!! Try Different person or maintain the guarantor  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantfor500gura2")) {

                Swal.fire({
                  title: "Error",
                  text: "Total Contribution Balance for Guarantor 2 should be more or equal to GHC 600.00  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantguarForG2")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 2  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("error")) {

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
              text:  "Successfully, Guarantor 2 has change to " + changeGuarantorClasss2  ,
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
        text: "Field is mandatory (*)",
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
  /*--------------------ends change guaranto 2----------------*/



</script>
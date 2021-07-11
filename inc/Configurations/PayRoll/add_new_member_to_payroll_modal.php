
<?php 


?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="add_academicModal" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Add to Payroll </h6></center>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

            <div class="col-md-12 mb-3">


              <div class="col-md-12 mb-3">
                <label for="rightAssign">Select Member to Add to PayRoll </label>
                <select class="custom-select d-block w-100 memberPayrollName"  id="rightAssign" required="">

                 <?php 

                 $squery = "SELECT * FROM members WHERE active='yes'";
                 $sresults = mysqli_query($conn, $squery);
                 $scount = mysqli_num_rows($sresults);
                 if ($scount > 0) {
                   echo' <option value=""> Choose...</option>';
                   while ($srow = mysqli_fetch_array($sresults)) {
                    $firstname = $srow["firstname"];
                    $surname = $srow["surname"];
                    $fulname = $firstname . " " . $surname;
                    echo'<option value="'.$srow["member_id"].'" >'.$fulname.'</option>';
                  }

                }  

                ?>

              </select>

            </div>





            <div class="col-md-12 mb-3">
              <label for="kui">Select Position </label>
              <select class="custom-select d-block w-100 PayrollPositionClass"  id="kui" required="">

               <?php 

               $squery = "SELECT * FROM payroll_positions WHERE active='yes'";
               $sresults = mysqli_query($conn, $squery);
               $scount = mysqli_num_rows($sresults);
               if ($scount > 0) {
                 echo' <option value=""> Choose...</option>';
                 while ($srow = mysqli_fetch_array($sresults)) {
                  $name = $srow["name"];
                  echo'<option value="'.$srow["pos_id"].'" >'.$name.'</option>';
                }

              }  

              ?>

            </select>

          </div>




        </div>

      </div><!-- /.list-group-item -->
      <!-- .list-group-item -->



    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success addBut" onclick="addPayrollMember()">Add</button>

      <div class="spinner-border text-primary loadingExBut" role="status" style="display: none;">
        <span class="sr-only">Loading...</span>
      </div>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<script type="text/javascript">





  /*--------------------------ADD MEMBER TO PAYROL=====================*/
  function addPayrollMember() {

    var memberPayrollName = $(".memberPayrollName").val();
    var PayrollPositionClass = $(".PayrollPositionClass").val();

    var addBut = $(".addBut")
    var loadingExBut = $(".loadingExBut")

    addBut.hide();
    loadingExBut.show();


    if (memberPayrollName!=="" && PayrollPositionClass!=="") {

      Swal.fire({
        title: 'Are you sure you want to perform this action',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Add!'
      }).then((result) => {


        if (result.value) {



          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNEwMemertoPayRoll",{memberPayrollName:memberPayrollName,PayrollPositionClass:PayrollPositionClass},function (showOutPut) {


            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "All fields cannot be empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

                    addBut.show();
  loadingExBut.hide();

            }else if (showOutPut.includes("Exist")) {

              Swal.fire({
                title: "Error",
                text: "Member Already Exist",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


                    addBut.show();
  loadingExBut.hide();



            }else if (showOutPut.includes("error")) {

              Swal.fire({
                title: "Error",
                text: "An error occured, Please try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


                    addBut.show();
  loadingExBut.hide();



            }else{



              Swal.fire({
                title: "Successfull",
                text:  "  Successfully Added" ,
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
      text: "All fields must be filled",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


     addBut.show();
     loadingExBut.hide();


   }

 }

 /*-----------------ends member interestr rate---------------*/














</script>

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
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Add Year to Close Account </h6></center>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

            <div class="col-md-12 mb-3">



              <div class="col-md-12 mb-3">
                <label for="Year">Year </label> 

                <?php

                $currently_selected = date('Y'); 
                                // Year to start available options at
                // $earliest_year = $currently_selected ; 

                $earliest_year = 2019;

                                // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
                $latest_year = date('Y'); 

                echo '<select class="custom-select d-block w-100 yearToCloseAccount" ';
                echo '<option value="" selected> Year </option>';

                                // Loops over each int[year] from current year, back to the $earliest_year [1950]
                foreach ( range( $latest_year, $earliest_year ) as $i ) {
                                  // Prints the option with the next year in range.
                  echo '<option value="'.$i.'"'.($i === $currently_selected ?  : '').'>'.$i.'</option>';
                }
                echo '</select>';
                ?>




              </div>







            </div>

          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->



        </div><!-- /.modal-body -->
        <!-- .modal-footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success closeButCLisk" onclick="closeAccountFOrTheYear()">Add</button>
          <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
            <span class="sr-only">Loading...</span>
          </div>
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div><!-- /.modal-footer -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->




  <script type="text/javascript">





    /*--------------------------ADD MEMBER TO PAYROL=====================*/
    function closeAccountFOrTheYear() {

      var yearToCloseAccount = $(".yearToCloseAccount").val();

      var closeButCLisk = $(".closeButCLisk");
      var loadingBut = $(".loadingBut");

      closeButCLisk.hide();
      loadingBut.show();

 
      if (yearToCloseAccount!=="" ) {

        closeButCLisk.hide();
        loadingBut.show();

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

 

            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=closeAccountForTHeYear",{yearToCloseAccount:yearToCloseAccount},function (showOutPut) {

              // alert(showOutPut)
              // exit();



              if (showOutPut.includes("empty")) {

                closeButCLisk.show();
               loadingBut.hide();


               Swal.fire({
                title: "Error",
                text: "All fields cannot be empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              }); 

             }else if (showOutPut.includes("error")) {

              closeButCLisk.show();
               loadingBut.hide();

              Swal.fire({
                title: "Error",
                text: "An error occured, Please try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });



            }else if (showOutPut.includes("Exist")) {

              closeButCLisk.show();
               loadingBut.hide();

              Swal.fire({
                title: "Error",
                text: "The Year " + yearToCloseAccount + "  has been closed already!!! ",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });



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

        closeButCLisk.show();
        loadingBut.hide();

        Swal.fire({
          title: "Error",
          text: "All fields must be filled",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });


      }

    }



    /*-----------------ends member interestr rate---------------*/














  </script>
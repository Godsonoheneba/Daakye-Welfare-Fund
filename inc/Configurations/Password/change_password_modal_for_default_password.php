
  <?php 



   ?>


<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Change Default Password  </h6></center>
     </div><!-- /.modal-header -->
     <!-- .modal-body -->
     <div class="modal-body px-0">
      <!-- .list-group -->
      <div class="list-group list-group-flush list-group-divider">
        <!-- .list-group-item -->
        <div class="list-group-item">

          <div class="col-md-12 mb-3">

            

          <div class="col-md-12 mb-3">
            <label for="CurrentPassword"> Current Password </label> <input type="password" class="form-control CurrentPasswordClass" name="CurrentPasswordClass" id="CurrentPassword" placeholder="Current Password"  required="" >

          </div><!-- /form grid -->


          <div class="col-md-12 mb-3">
            <label for="NewPassword"> New Password </label> <input type="password" class="form-control NewPasswordClass" name="NewPasswordClass" id="NewPassword" placeholder="New Password"  required="">

          </div><!-- /form grid -->



          <div class="col-md-12 mb-3">
            <label for="ConfirmNewPassword"> Confirm New Password </label> <input type="password" class="form-control ConfirmNewPasswordClass" name="ConfirmNewPasswordClass" id="ConfirmNewPassword" placeholder="Confirm New Password"  required="">

          </div><!-- /form grid -->


        </div>

      </div><!-- /.list-group-item -->
      <!-- .list-group-item -->



    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" onclick="changeDefaultPassword('<?php echo $tableIDSSSS ?>')">Change</button>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<script type="text/javascript">
  
/*------------------------------------------------------CHANGE MEMBER PASSWORD---------------------*/

function changeDefaultPassword(tabID) {


  var CurrentPasswordClass = $(".CurrentPasswordClass").val();
  var NewPasswordClass = $(".NewPasswordClass").val();
  var ConfirmNewPasswordClass = $(".ConfirmNewPasswordClass").val();

  if(CurrentPasswordClass!=="" && NewPasswordClass!=="" && ConfirmNewPasswordClass!=="" ){


    if (NewPasswordClass == ConfirmNewPasswordClass) {


      Swal.fire({
        title: 'Are you sure you want to Change Password ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=changeDefaultPassword",{tabID:tabID,CurrentPasswordClass:CurrentPasswordClass,NewPasswordClass:NewPasswordClass,ConfirmNewPasswordClass:ConfirmNewPasswordClass},function (showOutPut) {


            // alert(showOutPut);
            // exit();

            if (showOutPut.includes("errorinupdate")) {
              Swal.fire({
                title: "error",
                text: "An Error occured in changing",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("cureentnot")) {

              Swal.fire({
                title: "Error",
                text: "CUrrent Password does not match",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("newNot")) {

              Swal.fire({
                title: "Error",
                text: "New Password does not match",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("empty")) {

             Swal.fire({
              title: "Error",
              text: "New Password doesn not match",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


           }

           else{


            Swal.fire(
              'Successfull!',
              ' Successfully Updated ',
              'success'
              ).then((result) =>{


               location.replace(".home.login-successful");



             })



            }


          });

        }


      });





    }else{

      Swal.fire({
        title: "Error",
        text: "New Password doesn not match",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });

    }


  }else{

    Swal.fire({
      title: "Error",
      text: "All fieds are mandatory (*)",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


  }




}
</script>
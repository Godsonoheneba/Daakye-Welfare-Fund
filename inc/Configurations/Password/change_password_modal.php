
  
  


<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Change Password  </h6></center>
     </div><!-- /.modal-header -->
     <!-- .modal-body -->
     <div class="modal-body px-0">
      <!-- .list-group -->
      <div class="list-group list-group-flush list-group-divider">
        <!-- .list-group-item -->
        <div class="list-group-item">

          <div class="col-md-12 mb-3">

            

          <div class="col-md-12 mb-3">
            <label for="CurrentPassword"> Current Password </label> <input type="password" class="form-control CurrentPasswordClass" name="CurrentPasswordClass" id="CurrentPassword" placeholder="Current Password"  required="">

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
      <button type="button" class="btn btn-success" onclick="changePassword('<?php echo $member_id ?>')">Change</button>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






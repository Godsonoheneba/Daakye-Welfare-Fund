
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
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Add Member Interest </h6></center>
     </div><!-- /.modal-header -->
     <!-- .modal-body -->
     <div class="modal-body px-0">
      <!-- .list-group -->
      <div class="list-group list-group-flush list-group-divider">
        <!-- .list-group-item -->
        <div class="list-group-item">

          <div class="col-md-12 mb-3">

          <div class="col-md-12 mb-3">
            <label for="theAcademicYear"> 1 - 12 Months Interest </label> <input type="text" class="form-control normalMemberInterestClass" name="normalMemberInterestClass"  placeholder=" 1 - 12 Months Interest eg. 5"  required="" onkeyup="checkAcademicYear(this)" maxlength="9">

          </div><!-- /form grid -->



            <div class="col-md-12 mb-3">
            <label for="theAcademicYear"> More Than 12 months Interest </label> <input type="text" class="form-control defaulterMemberInterestClass" name="defaulterMemberInterestClass"  placeholder="More Than 12 months Interest eg. 10"  required="" onkeyup="checkAcademicYear(this)" maxlength="9">

          </div><!-- /form grid -->

         


        </div>

      </div><!-- /.list-group-item -->
      <!-- .list-group-item -->



    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success addBut" onclick="addMemberInterstRate()">Add</button>
      <div class="spinner-border text-primary loadingExBut" role="status" style="display: none;">
            <span class="sr-only">Loading...</span>
          </div>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






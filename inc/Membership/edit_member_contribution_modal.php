

<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="editContiAMountModal" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Edit Contribution amount of <?php echo number_format($contribution_amount, 2) ?> </h6></center>
     </div><!-- /.modal-header -->
     <!-- .modal-body -->
     <div class="modal-body px-0">
      <!-- .list-group -->
      <div class="list-group list-group-flush list-group-divider">
        <!-- .list-group-item -->
        <div class="list-group-item">

          <div class="col-md-12 mb-3">


          <div class="col-md-12 mb-3">
            <label for="CurrentPassword"> Current COntribution </label> <input type="text" readonly=""  class="form-control " placeholder="Current COntribution"  value="<?php echo number_format($contribution_amount, 2) ?>">

          </div><!-- /form grid -->

 
          <div class="col-md-12 mb-3">
            <label for="NewCon" class="contriAMountError"> New Contribution Amount </label> <input type="text" class="form-control ContributionAmount"  id="NewCon" placeholder="New Contribution Amount eg. 500"  onkeyup="checForContributionEntered(this)">

          </div><!-- /form grid -->


        </div>

      </div><!-- /.list-group-item -->
      <!-- .list-group-item -->



    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" onclick="changeMemberContribution('<?php echo $getMemberID ?>','<?php echo $contribution_amount ?>')">Change</button>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






 

<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="editPaidContribution" tabindex="10" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Delete   </h6></center>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

            <div class="col-md-12 mb-3">




              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                 <div class="col-md-12 mb-3">
                  <input type="hidden" class="form-control hiddenDIEditClass" >
                </div>



                <div class="col-md-12 mb-3">
                  <label for="reason"> Reason For Deletion </label> <input type="text" class="form-control reasonEditClass" id="reason" name="reasonClass" placeholder=" Reason For Deletion" title="Reason For Delete">
                </div>



               



              </div>

  
            </div>

          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->



        </div><!-- /.modal-body -->
        <!-- .modal-footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success addBut2" onclick="deleetePaidMemberContr()">Delete</button>

          <div class="spinner-border text-primary loadingBut3" role="status" style="display: none;">
            <span class="sr-only">Loading...</span>

          </div>



          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div><!-- /.modal-footer -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal --> 






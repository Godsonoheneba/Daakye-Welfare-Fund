

<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="changeEmploymentType" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
       <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Change Employment Type  </h6></center>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

            <div class="col-md-12 mb-3">

              <center>


               <?php 

               if ($staffPhoto==="") {

                if ($gender==='Male') {
                  echo "
                  <a  class=\"user-avatar user-avatar-xl\">

                  <img src=\"assets/images/customs/male.png\" alt=\"\">

                  </a>
                  " ;
                } else {

                  echo "
                  <a  class=\"user-avatar user-avatar-xxl\">

                  <img src=\"assets/images/customs/female.jpg\" alt=\"\">

                  </a>
                  " ;
                }



              } else {
                echo "
                <a  class=\"user-avatar user-avatar-xxl\">

                <img src=\"staff_data/passport/$staffPhoto\" alt=\"\">

                </a>
                " ;
              }

              ?>



            </center>

            <div class="col-md-12 mb-3">
              <label for="EmploymentType">Employment Type </label> 
              <select class="custom-select d-block w-100 EmploymentTypeClass" name="EmploymentTypeClass" id="EmploymentType" required="">


               <?php 

               $squery = "SELECT * FROM employment_type";
               $sresults = mysqli_query($conn, $squery);
               $scount = mysqli_num_rows($sresults);
               if ($scount > 0) {
                 echo"<option value=\"$employmentType\">$type_name</option>";
                 while ($srow = mysqli_fetch_array($sresults)) {
                  $sname = $srow["type_name"];
                  echo'<option value="'.$srow["type_id"].'"  name="type_id" >'.$sname.'</option>';
                }

              }  

              ?>

            </select>
       
          </div><!-- /grid column -->

        </div>

      </div><!-- /.list-group-item -->
      <!-- .list-group-item -->



    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" onclick="changeEmploymentTypeBut('<?php echo $id ?>')">Change</button>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






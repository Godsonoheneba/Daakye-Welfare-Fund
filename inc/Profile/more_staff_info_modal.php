

<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="moreStaffInfo" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <h6 id="moreStaffInfoLabel" class="modal-title"> <?php echo $staffName .' '.'Informations' ?> </h6>
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

              <img src=\"Datas/staff/$staffPhoto\" alt=\"\">

              </a>
              " ;
            }

            ?>

       

            </center>

          </div>

        </div><!-- /.list-group-item -->
        <!-- .list-group-item -->

        <!-- .list-group-item-body -->
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">

            <tbody>

              <tr >
                <td colspan="6">
                  <!-- .row -->
                  <div class="row">

                    <!-- .col -->


                    <!-- .col -->
                    <div class="col-md-12">
                      <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> Contact </th>
                            <td> <?php echo $staffID ?> </td>
                          </tr>
                          <tr>
                            <th> Email </th>
                            <td> <?php echo $email ?></td>
                          </tr>
                          <tr>
                            <th> Phone </th>
                            <td> <?php echo $mobile ?></td>
                          </tr>
                          <tr>
                            <th> Address  </th>
                            <td> <address><?php echo $address ?> </address> </td>
                          </tr>
                          <tr>
                            <th> Location </th>
                            <td> <?php echo $location ?> </td>
                          </tr>
                          <tr>
                            <th> Digital Address </th>
                            <td> <?php echo $digitalAddress ?> </td>
                          </tr>
                          <tr>
                            <th> Date Of Birth </th>
                            <td> <?php echo $dob ?>  </td>
                          </tr>


                          <tr>
                            <th> Gender </th>
                            <td> <?php echo $gender ?> </td>
                          </tr>
                          <tr>
                            <th> Nationality </th>
                            <td> <?php echo $nationality ?></td>
                          </tr>
                          <tr>
                            <th> Region </th>
                            <td> <?php echo $region ?></td>
                          </tr>
                          <tr>
                            <th> Hometown  </th>
                            <td> <address><?php echo $home_town ?> </address> </td>
                          </tr>
                          <tr>
                            <th> Branch </th>
                            <td> <?php echo $branch ?> </td>
                          </tr>
                          <tr>
                            <th> Branch Region </th>
                            <td> <?php echo $branch_region ?> </td>
                          </tr>
                          <tr>
                            <th> Joined </th>
                            <td> <?php echo $date_added ?>  </td>
                          </tr>
                        </tbody>
                      </table>
                    </div><!-- /.col -->




                  </div><!-- /.row -->
                </td>
              </tr><!-- /tr -->
              <!-- tr -->

            </tbody><!-- /tbody -->

            

          </table><!-- /.table -->
        </div><!-- /.table-responsive -->

      </div><!-- /.list-group -->
      <!-- .loading -->

    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success" >Print</button>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






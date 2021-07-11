

<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="moreInformation" tabindex="-1" role="dialog" aria-labelledby="moreInformationLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <h6 id="moreInformationLabel" class="modal-title"> <?php echo $fullname .' '.'Informations' ?> </h6>
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
              echo "$image";
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
                    <div class="col-md-12">


                     <table class="table table-bordered">
                      <tbody>
                     
                        <tr>
                          <th> firstname </th>
                          <td> <?php echo $firstname ?> </td>
                        </tr>
                        <tr>
                          <th> surname </th>
                          <td> <?php echo $surname ?></td>
                        </tr>
                        <tr>
                          <th> residencial_address </th>
                          <td> <?php echo $residencial_address ?></td>
                        </tr>
                        <tr>
                          <th> postal_address  </th>
                          <td> <address><?php echo $postal_address ?> </address> </td>
                        </tr>
                        <tr>
                          <th> place_of_work </th>
                          <td> <?php echo $place_of_work ?> </td>
                        </tr>
                        <tr>
                          <th> home_town Address </th>
                          <td> <?php echo $home_town ?> </td>
                        </tr>
                        <tr>
                          <th> email </th>
                          <td> <?php echo $email ?>  </td>
                        </tr>


                      </tbody>

                      <tbody>
                        <tr>
                          <th> Gender </th>
                          <td> <?php echo $gender ?>  </td>
                        </tr>

                        <tr>
                          <th> telephone </th>
                          <td> <?php echo $telephone ?> </td>
                        </tr>
                        <tr>
                          <th> dob </th>
                          <td> <?php echo $dob ?></td>
                        </tr>
                        <tr>
                          <th> marital_status </th>
                          <td> <?php echo $marital_status ?></td>
                        </tr>
                        <tr>
                          <th> next_of_kin_name  </th>
                          <td> <address><?php echo $next_of_kin_name ?> </address> </td>
                        </tr>
                        <tr>
                          <th> next_of_kin_mobile </th>
                          <td> <?php echo $next_of_kin_mobile?> </td>
                        </tr>
                        <tr>
                          <th> next_of_kin_resi_address </th>
                          <td> <?php echo $next_of_kin_resi_address ?> </td>
                        </tr>
                        <tr>
                          <th> date_created </th>
                          <td> <?php echo $date_created ?>  </td>
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

  <a href="ViewPDFS/Customers/print_customer_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $customer_id_encrypt ?>" class="btn btn-light" target="_blank">

    <button type="button" class="btn btn-light" >Print</button>

  </a>
  <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
</div><!-- /.modal-footer -->


</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






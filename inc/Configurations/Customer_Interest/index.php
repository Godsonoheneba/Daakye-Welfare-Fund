<?php 




?>

 


 





<div class="page">


 

 <div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="user-profile.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Overview</a>
        </li>
      </ol>
    </nav>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- grid row -->
    <div class="row">
      <!-- grid column -->
      <div class="col-lg-3">
        <!-- .card -->  
        <div class="card card-fluid">
          <h6 class="card-header"> Configurations </h6><!-- .nav -->
   

          <nav class="nav nav-tabs flex-column border-0">
           <a  href=".home.settings-staff.config.java.kt" class="nav-link ">Staff</a>
           
           <a  href=".home.settings-member-interest.config.ruby.java.html" class="nav-link ">Member Interest Config</a>
           <a  href=".home.settings-customer-interest.config.ruby.java" class="nav-link active">Customer Interest Config</a>
           <a  href=".home.settings-view-all-deactivate-members.config.java.html.css.java" class="nav-link ">Deactivated Members</a>



           <?php 

            if ($login_session_type==="3") {
              ?>

                 <a  href=".home.settings-payroll.config.java.kt.css" class="nav-link ">PayRoll</a> 
           <a  href=".home.settings-closings.config.java.html.css.jaca" class="nav-link ">Share Dividence</a>

              <?php
            }

            ?>

           
         </nav><!-- /.nav -->
        </div><!-- /.card -->
      </div><!-- /grid column -->
      <!-- grid column -->
      <div class="col-lg-9">
        <!-- .card -->
        <div class="card card-fluid">
          <h6 class="card-header"> Customer Interest</h6><!-- .card-body -->
          <h6 class="card-header"> Click on the add Button to add Customer Interest </h6><!-- .card-body -->


          <!-- .card-body -->
          <div class="card-body">




            <form  action="" method="post" data-parsley-validate="" validate="" enctype="multipart/form-data" id="">

              <!-- .card-body -->
              <div class="card-body">


                <div class="form-row">

                 <header class="page-navs bg-light shadow-sm">
                  <!-- .input-group -->

                  <div class="input-group has-clearable" >
                    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> 

                    <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find transaction eg. 2020-02-25">
                  </div><!-- /.input-group -->


                  

                  <button type="button" class="btn btn-success btn-floated" data-toggle="modal" data-target="#add_academicModal"><span class="fa fa-plus"></span></button>


                </header>

                 <button type="button" class="btn btn-success " data-toggle="modal" data-target="#add_academicModal" style="margin: 15px;"><span class="fa fa-plus"></span></button>


              </div><!-- /.form-row -->



              <div class="board p-0 perfect-scrollbar" >
                <!-- .list-group -->
                <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
                  <!-- .getsearch -->

                  <div class="card card-fluid ">
                    <!-- .card-body -->
                    <div class="card-body">
                      <div class=" table-responsive">
                        <!-- .table -->
                        <table class="table">
                          <!-- thead -->
                          <thead>
                            <tr class="text-cente align-middle">
                              <th >#</th>
                              <th >Normal Interest Rate </th>
                              <th> Normal Interest Rate Amount </th>
                              <th>  </th>
                            </tr>
                          </thead><!-- /thead -->
                          <!-- tbody -->


                            <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">


       

                          <?php 



                          $sel = mysqli_query($conn, "SELECT * FROM customer_interest WHERE active = 'yes' ORDER BY id DESC LIMIT 1  ");


                          while ($gett= mysqli_fetch_assoc($sel)) {

                            $id = $gett["id"];
                            $amount = $gett["amount"];
                            $amount_decimal = $gett["amount_decimal"];
                            $date_added = $gett["date_added"];
                            $staff = $gett["staff"];
  
                            ?> 


                              <!-- tr -->
                              <tr class="align-middle">

                                <td class="align-middle">
                                  <a ><?php echo $id ?></a>
                                </td>

                                <td class="align-middle">
                                   <span class="badge badge-subtle badge-success" style="font-size: 20px;"><?php echo $amount ?>%</span>
                                </td>

                                <td class="align-middle">
                                   <span class="badge badge-subtle badge-primary" style="font-size: 20px;"><?php echo $amount_decimal ?></span>
                                </td>

                                <td class="align-middle text-center">


                                 <div class="btn-group btn-group-toggle" data-toggle="buttons" onclick="deleteCustomerInterest('<?php echo $id ?>')">

                                      <label class="btn btn-secondary" >

                                        <input type="radio" name="options" id="option2" > Delete</label> 

                                      </div><!-- /button radio -->




                                    </td>


                                  </tr><!-- /tr -->







                                  <?php



                                }



                                ?>
                              </table>


                            </div><!-- /.section-block -->
                          </div><!-- /.card-body -->
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

              </div>

            </div><!-- /.card -->
            <!-- .card -->

          </div><!-- /grid column -->
        </div><!-- /grid row -->
      </div><!-- /.page-section -->
    </div><!-- /.page-inner -->


  </div>





  <?php 

  include 'add_customer_interest_modal.php';

  ?>






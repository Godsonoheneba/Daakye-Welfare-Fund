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
           <a  href=".home.myprofile-staff.java.ruby" class="nav-link active">Staff</a>
         

 
         </nav><!-- /.nav -->
       </div><!-- /.card -->
     </div><!-- /grid column -->
     <!-- grid column -->
     <div class="col-lg-9">
      <!-- .card -->
      <div class="card card-fluid">
        <h6 class="card-header"> Staff Overview </h6><!-- .card-body -->



        <form  action="" method="post" data-parsley-validate="" validate="" enctype="multipart/form-data" id="">

          <!-- .card-body -->
          <div class="card-body">




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
                        <tr class="text-center">
                          <th >^</th>
                          <th >Name</th>
                          <th> Mobile </th>
                          <th> Type </th>
                          <th> Actions </th>
                        </tr>
                      </thead><!-- /thead -->
                      <!-- tbody -->


 
                      <?php 

                      $selectStaff = mysqli_query($conn, "SELECT * FROM staff WHERE  active='yes' AND id='$login_session' LIMIT 1 ");
                      if (mysqli_num_rows($selectStaff)!==0) {

                        while ( $getdac2 = mysqli_fetch_assoc($selectStaff)) {

 
                          $id = $getdac2["id"];
                          $staffID = $getdac2["staffID"];
                          $encrypted_id = $getdac2["encrypted_id"];
                          $username = $getdac2["username"];
                          $encrypted_password = $getdac2["encrypted_password"];
                          $password = $getdac2["password"];
                          $firstName = $getdac2["firstName"];
                          $lastName = $getdac2["lastName"];
                          $employmentType = $getdac2["employmentType"];
                          $dob = $getdac2["dob"];
                          $gender = $getdac2["gender"];
                          $mobile = $getdac2["mobile"];
                          $email = $getdac2["email"];
                          $region = $getdac2["region"];
                          $marital_status = $getdac2["marital_status"];
                          $address = $getdac2["address"];
                          $location = $getdac2["location"];
                          $home_town = $getdac2["home_town"];
                          $nationality = $getdac2["nationality"];
                          $digitalAddress = $getdac2["digitalAddress"];
                          $staffPhoto = $getdac2["staffPhoto"];
                          $date_added = $getdac2["date_added"];
                          $confirm = $getdac2["confirm"];

                          $staffName = $firstName . " " . $lastName;


                          $slEmpl = mysqli_query($conn, "SELECT type_name FROM employment_type WHERE  active='yes' AND type_id='$employmentType' ");

                          $getLite = mysqli_fetch_assoc($slEmpl);


                          $type_name = $getLite["type_name"];


                          ?>


                          <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                            <!-- tr -->
                            <tr>

                              <td class="align-middle px-0" style="width: 1.5rem">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-0548878554<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                              </td>

                              <td class="align-middle">
                                <a ><?php echo $staffName ?></a>
                              </td>

                              <td class="align-middle">
                                <a ><?php echo $mobile ?></a>
                              </td>


                              <?php 
                              if ($gender==='Male') {
                                ?>

                                <td class="align-middle">
                                  <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $type_name ?></span>
                                </td>
                                <?php
                              } else {
                                ?>

                                <td class="align-middle">
                                  <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $type_name ?></span>
                                </td>
                                <?php
                              }

                              ?>




                              <td class="align-middle text-center">



                               <div class="btn-group btn-group-toggle" data-toggle="buttons">

                                <label onclick="window.location.href='homepage.php?CHECKER=VIEW_STAFF_PROFILE&TRUE=<?php echo $encrypted_id ?>' " class="btn btn-secondary active" >

                                  <input type="radio" name="options" id="option1" checked > View</label> 

                                     <label onclick="window.location.href='homepage.php?CHECKER=VIEW_MY_ACTIVITIES&TRUE=<?php echo $encrypted_id ?>' " class="btn btn-secondary" >

                                      <input type="radio" name="options" id="option3"> Activities</label> 


                                  <label onclick="window.location.href='homepage.php?CHECKER=VIEW_MY_PROFILE_SETTINGS&TRUE=<?php echo $encrypted_id ?>' " class="btn btn-secondary" >

                                    <input type="radio" name="options" id="option2"> Settings</label> 


                                 

                                    </div><!-- /button radio -->




                                  </td>


                                </tr><!-- /tr -->



                                <!-- tr -->
                                <tr class="row-details bg-light collapse" id="details-0548878554<?php echo $id ?>">
                                  <td colspan="6">
                                    <!-- .row -->

                                    <div class="row" style="overflow-y: auto;">
                                     <!-- .col -->
                                     <div class="col-md-12 text-center">

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
                                            <a  class=\"user-avatar user-avatar-xl\">

                                            <img src=\"assets/images/customs/female.jpg\" alt=\"\">

                                            </a>
                                            " ;
                                          }



                                        } else {
                                          echo "
                                          <a  class=\"user-avatar user-avatar-xl\">

                                          <img src=\"staff_data/passport/$staffPhoto\" alt=\"\">

                                          </a>
                                          " ;
                                        }

                                        ?>

                                        <br>


                                      </center>



                                      <h3 class="card-title mb-4"> <?php echo $staffName ?> </h3>
                                      <h3 class="card-title mb-4"> <?php echo $username ?> |  <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $employmentType ?></span> </h3>


                                    </div><!-- /.col -->

                                  </div>



                                  <div class="row">




                                    <!-- .col -->
                                    <div class="col-md-6">
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
                                        </tbody>
                                      </table>
                                    </div><!-- /.col -->




                                    <div class="col-md-6">
                                      <table class="table table-bordered">
                                        <tbody>
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
                                            <th> Joined </th>
                                            <td> <?php echo $date_added ?>  </td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div><!-- /.col -->




                                  </div><!-- /.row -->
                                </td>
                              </tr><!-- /tr -->
                              
                            </tbody><!-- /tbody -->

                            <?php


                          }

                        } else {


                        }


                        ?>




                      </table><!-- /.table -->
                    </div><!-- /.table-responsive -->
                  </div><!-- /.card-body -->
                </div><!-- /.card -->

              </div>
            </div>








          </div><!-- /.card-body -->


        </form>







      </div><!-- /.card -->
      <!-- .card -->

    </div><!-- /grid column -->
  </div><!-- /grid row -->
</div><!-- /.page-section -->
</div><!-- /.page-inner -->


</div>





<?php 


?>




<script type="text/javascript">
 function PreviewImage() {


  $(".updatePassportBut").show();
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
  };
};





</script>
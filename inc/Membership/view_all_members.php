


<?php 

if ($login_session_type==="3" || $login_session_type==="1") {

  ?>


 
 


  <header class="page-title-bar">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Members</a>
        </li>
      </ol>
    </nav><!-- /.breadcrumb -->
    <!-- floating action -->
    <!-- title and toolbar -->
    <div class="d-md-flex align-items-md-start">
      <h1 class="page-title mr-sm-auto"> All Members </h1><!-- .btn-toolbar -->
      <div class="btn-toolbar">


<!--         <button type="button" class="btn btn-light"><i class="oi oi-print"></i> <span class="ml-1">Print</span></button> 
        <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-download"></i> <span class="ml-1">Export As Excel</span></button> 

        <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span class="ml-1">Save as PDF</span></button>
        <div class="dropdown">
          <button type="button" class="btn btn-light" data-toggle="dropdown"><span>More</span> <span class="fa fa-caret-down"></span></button>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Share</a> 
            <a href="#" class="dropdown-item">Send</a> <a href="#" class="dropdown-item">Print</a>
          </div>
        </div> -->



        
      </div><!-- /.btn-toolbar -->
    </div><!-- /title and toolbar -->
  </header><!-- /.page-title-bar -->




  <div class="section-block">
    <h2 class="section-title"> Members </h2>
  </div><!-- /.section-block -->
  <!-- .card -->



  <div class="form-row">

   <header class="page-navs bg-light shadow-sm">
    <!-- .input-group -->

    <div class="input-group has-clearable" >
      <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Customer eg. Agyei">
    </div><!-- /.input-group -->
  </header>


</div><!-- /.form-row -->



<div class="board p-0 " style="overflow-x: hidden;">
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
    <div class="card card-fluid">
      <!-- .card-body -->
      <div class="card-body">
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">
            <!-- thead -->
            <thead>
              <tr>
                <th></th>
                <th>Member ID</th>
                <th>Name</th>
                <th> Mobile </th>
                <th> Monthly Contribution </th>
                <th style="width:100px; min-width:100px;"> &nbsp; Action</th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



            <?php 

            $selectCust = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' ORDER BY id DESC ");
            if (mysqli_num_rows($selectCust)!==0) {

              while ( $getAlls = mysqli_fetch_assoc($selectCust)) {

                $id = $getAlls["id"];
                $member_id = $getAlls["member_id"];
                $member_id_encrypt = $getAlls["member_id_encrypt"];
                $password = $getAlls["password"];
                $firstname = $getAlls["firstname"];
                $surname = $getAlls["surname"];
                $residencial_address = $getAlls["residencial_address"];
                $postal_address = $getAlls["postal_address"];
                $place_of_work = $getAlls["place_of_work"];
                $home_town = $getAlls["home_town"];
                $email = $getAlls["email"];
                $telephone = $getAlls["telephone"];
                $dob = $getAlls["dob"];
                $gender = $getAlls["gender"];
                $marital_status = $getAlls["marital_status"];
                $contribution_amount = $getAlls["contribution_amount"];
                $total_contribution_made = $getAlls["total_contribution_made"];
                $last_month_contributed = $getAlls["last_month_contributed"];
                $image = $getAlls["image"];
                $kin_1_name = $getAlls["kin_1_name"];
                $kin_1_mobile = $getAlls["kin_1_mobile"];
                $kin_1_percent = $getAlls["kin_1_percent"];
                $kin_2_name = $getAlls["kin_2_name"];
                $kin_2_mobile = $getAlls["kin_2_mobile"];
                $kin_2_percent = $getAlls["kin_2_percent"];
                $kin_3_name = $getAlls["kin_3_name"];
                $kin_3_mobile = $getAlls["kin_3_mobile"];
                $kin_3_percent = $getAlls["kin_3_percent"];
                $kin_4_name = $getAlls["kin_4_name"];
                $kin_4_mobile = $getAlls["kin_4_mobile"];
                $kin_4_percent = $getAlls["kin_4_percent"];
                $kin_5_name = $getAlls["kin_5_name"];
                $kin_5_mobile = $getAlls["kin_5_mobile"];
                $kin_5_percent = $getAlls["kin_5_percent"];
                $kin_6_name = $getAlls["kin_6_name"];
                $kin_6_mobile = $getAlls["kin_6_mobile"];
                $kin_6_percent = $getAlls["kin_6_percent"];
                $kin_7_name = $getAlls["kin_7_name"];
                $kin_7_mobile = $getAlls["kin_7_mobile"];
                $kin_7_percent = $getAlls["kin_7_percent"];
                $kin_8_name = $getAlls["kin_8_name"];
                $kin_8_mobile = $getAlls["kin_8_mobile"];
                $kin_8_percent = $getAlls["kin_8_percent"];
                $kin_9_name = $getAlls["kin_9_name"];
                $kin_9_mobile = $getAlls["kin_9_mobile"];
                $kin_9_percent = $getAlls["kin_9_percent"];
                $kin_10_name = $getAlls["kin_10_name"];
                $kin_10_mobile = $getAlls["kin_10_mobile"];
                $kin_10_percent = $getAlls["kin_10_percent"];
                $paid_reg_form = $getAlls["paid_reg_form"];
                $has_loan = $getAlls["has_loan"];
                $staff = $getAlls["staff"];
                $date_created = $getAlls["date_created"];

                $fullname = $firstname . " " . $surname;

                $getShortName = substr($firstname, 0,1);


                ?>
                <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                  <!-- tr -->

                  <tr>
                    <td class="align-middle px-0" style="width: 1.5rem">
                      <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-2020158584<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                    </td>

                    
                    <td class="align-middle">
                      <?php echo $member_id ?>
                    </td>

                    <td class="align-middle"> <?php echo $fullname ?> </td>
                    <td class="align-middle"> <?php echo $telephone ?> </td>
                    <td class="align-middle"> <?php echo $contribution_amount ?> </td>
                    <td class="align-middle text-center">
                     <div class="btn-group btn-group-toggle" data-toggle="buttons">

                      <?php 

                      if ($paid_reg_form==="no") {
                        ?>

                        <label class="btn btn-secondary"  onclick="payRegisterationForm('<?php echo $member_id_encrypt ?>')">

                          <input type="radio" name="options" id="option1" checked > Pay Reg. Fee</label> 

                          <?php
                        } else {
                          # code...
                        }
                        
                        
                        ?>


                        <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=VIEW_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>' ">

                          <input type="radio" name="options" id="option1" checked > View</label> 

                          <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=EDIT_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>' ">

                            <input type="radio" name="options" id="option2"> Edit</label> 

                            <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Members/card_generated_info_for_member_print.php?PRINT_CARD_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>')" >

                              <input type="radio" name="options" id="option3"> Print Card</label>



                              <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Members/print_member_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>')" >

                                <input type="radio" name="options" id="option3"> Print Info</label>


                              </div><!-- /button radio -->



                            </td>

                          </tr><!-- /tr -->
                          <!-- tr -->
                          <tr class="row-details bg-light collapse" id="details-2020158584<?php echo $id ?>">
                            <td colspan="6">
                              <!-- .row -->
                              <div class="row">
                                <!-- .col -->
                                <div class="col-md-2 text-center">
                                  <div class="tile tile-xl tile-circle bg-purple mb-2"> <?php echo $getShortName ?> </div>
                                  <h3 class="card-title mb-4"> <?php echo $member_id ?> </h3>
                                  <h3 class="card-title mb-4"> <?php echo $fullname ?> </h3>
                                </div><!-- /.col -->
                                <!-- .col -->



                                
                                <div class="col-md-5">
                                  <table class="table table-bordered">
                                    <tbody>
                                      <tr>
                                        <th> contribution_amount </th>
                                        <td> <?php echo number_format($total_contribution_made, 2) ?> </td>
                                      </tr>
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


                                    </tbody>
                                  </table>
                                </div><!-- /.col -->




                                <div class="col-md-5">
                                  <table class="table table-bordered">
                                    <tbody>

                                      <h2>Next of kin</h2>

                                      <?php 

                                      if ($kin_1_name!=="" || $kin_1_mobile!=="" || $kin_1_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 1 Name  </th>
                                          <td> <address><?php echo $kin_1_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 1 Mobile </th>
                                          <td> <?php echo $kin_1_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 1 % </th>
                                          <td> <?php echo $kin_1_percent ?> </td>
                                        </tr>

                                        <?php
                                      }



                                      if ($kin_2_name!=="" || $kin_2_mobile!=="" || $kin_2_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 2 Name  </th>
                                          <td> <address><?php echo $kin_2_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 2 Mobile </th>
                                          <td> <?php echo $kin_2_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 2 % </th>
                                          <td> <?php echo $kin_2_percent ?> </td>
                                        </tr>

                                        <?php
                                      }



                                      if ($kin_3_name!=="" || $kin_3_mobile!=="" || $kin_3_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 3 Name  </th>
                                          <td> <address><?php echo $kin_3_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 3 Mobile </th>
                                          <td> <?php echo $kin_3_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 3 % </th>
                                          <td> <?php echo $kin_3_percent ?> </td>
                                        </tr>

                                        <?php
                                      }




                                      if ($kin_4_name!=="" || $kin_4_mobile!=="" || $kin_4_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 4 Name  </th>
                                          <td> <address><?php echo $kin_4_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 4 Mobile </th>
                                          <td> <?php echo $kin_4_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 4 % </th>
                                          <td> <?php echo $kin_4_percent ?> </td>
                                        </tr>

                                        <?php
                                      }



                                      if ($kin_5_name!=="" || $kin_5_mobile!=="" || $kin_5_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 5 Name  </th>
                                          <td> <address><?php echo $kin_5_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 5 Mobile </th>
                                          <td> <?php echo $kin_5_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 5 % </th>
                                          <td> <?php echo $kin_5_percent ?> </td>
                                        </tr>

                                        <?php
                                      }




                                      if ($kin_6_name!=="" || $kin_6_mobile!=="" || $kin_6_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 6 Name  </th>
                                          <td> <address><?php echo $kin_6_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 6 Mobile </th>
                                          <td> <?php echo $kin_6_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 6 % </th>
                                          <td> <?php echo $kin_6_percent ?> </td>
                                        </tr>

                                        <?php
                                      }




                                      if ($kin_7_name!=="" || $kin_7_mobile!=="" || $kin_7_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 7 Name  </th>
                                          <td> <address><?php echo $kin_7_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 7 Mobile </th>
                                          <td> <?php echo $kin_7_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 7 % </th>
                                          <td> <?php echo $kin_7_percent ?> </td>
                                        </tr>

                                        <?php
                                      }



                                      if ($kin_8_name!=="" || $kin_8_mobile!=="" || $kin_8_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 8 Name  </th>
                                          <td> <address><?php echo $kin_8_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 8 Mobile </th>
                                          <td> <?php echo $kin_8_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 8 % </th>
                                          <td> <?php echo $kin_8_percent ?> </td>
                                        </tr>

                                        <?php
                                      }



                                      if ($kin_9_name!=="" || $kin_9_mobile!=="" || $kin_9_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 9 Name  </th>
                                          <td> <address><?php echo $kin_9_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 9 Mobile </th>
                                          <td> <?php echo $kin_9_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 9 % </th>
                                          <td> <?php echo $kin_9_percent ?> </td>
                                        </tr>

                                        <?php
                                      }



                                      if ($kin_10_name!=="" || $kin_10_mobile!=="" || $kin_10_percent!=="") {

                                        ?>
                                        <tr>
                                          <th> Next Of Kin 10 Name  </th>
                                          <td> <address><?php echo $kin_10_name ?> </address> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 10 Mobile </th>
                                          <td> <?php echo $kin_10_mobile?> </td>
                                        </tr>
                                        <tr>
                                          <th> Next Of Kin 10 % </th>
                                          <td> <?php echo $kin_10_percent ?> </td>
                                        </tr>

                                        <?php
                                      } 

                                      ?>





                                      <tr>
                                       <th> Date Joined </th>
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

                       <?php


                     }

                   } else {
                    echo NoCstomerYet();
                  }


                  ?>





                </table><!-- /.table -->
              </div><!-- /.table-responsive -->
            </div><!-- /.card-body -->
          </div><!-- /.card -->
        </div>
      </div>
      <hr class="my-5">





      <script type="text/javascript">

        function payRegisterationForm(memberID) {

          var registrationFormPrice = 100;

          Swal.fire({
            title: 'Are you sure you want to Pay ' + registrationFormPrice + '.00  As Registration Fee? ',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Pay!'
          }).then((result) => {


            if (result.value) {

              $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=payRegistrationFeePost",{memberID:memberID},function (showOutPut) {


                if (showOutPut.includes("paymentErrors")) {

                  Swal.fire({
                    title: "Error",
                    text: "An Error occured at the history side",
                    type: "warning",
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Ok",
                    closeOnConfirm: false,
                    closeOnCancel: false

                  });


                }else if (showOutPut.includes("Exist")) {

                 Swal.fire({
                  title: "Error",
                  text: "Member has already paid for registration fee",
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
                  ' Payment has been made.',
                  'success'
                  ).then((result) =>{

                    Swal.fire({
                      title: 'Print',
                      text: "Print Receipt",
                      type: 'success',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Print'
                    }).then((result) => {


                      if (result.value) {

                        window.open(showOutPut.trim())


                        window.location.replace(".login-success.view-all-new-members.kt.css.js.html.cpp");





                      }
                    })



                  })




                }


              });

            }


          });








        }
      </script>


      <?php

    } else {





      $selectCust = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$login_session' LIMIT 1 ");

      $getAlls = mysqli_fetch_assoc($selectCust);

      $id = $getAlls["id"];
      $member_id = $getAlls["member_id"];
      $member_id_encrypt = $getAlls["member_id_encrypt"];
      $password = $getAlls["password"];
      $firstname = $getAlls["firstname"];
      $surname = $getAlls["surname"];
      $residencial_address = $getAlls["residencial_address"];
      $postal_address = $getAlls["postal_address"];
      $place_of_work = $getAlls["place_of_work"];
      $home_town = $getAlls["home_town"];
      $email = $getAlls["email"];
      $telephone = $getAlls["telephone"];
      $dob = $getAlls["dob"];
      $gender = $getAlls["gender"];
      $marital_status = $getAlls["marital_status"];
      $contribution_amount = $getAlls["contribution_amount"];
      $total_contribution_made = $getAlls["total_contribution_made"];
      $last_month_contributed = $getAlls["last_month_contributed"];
      $image = $getAlls["image"];
      $kin_1_name = $getAlls["kin_1_name"];
      $kin_1_mobile = $getAlls["kin_1_mobile"];
      $kin_1_percent = $getAlls["kin_1_percent"];
      $kin_2_name = $getAlls["kin_2_name"];
      $kin_2_mobile = $getAlls["kin_2_mobile"];
      $kin_2_percent = $getAlls["kin_2_percent"];
      $kin_3_name = $getAlls["kin_3_name"];
      $kin_3_mobile = $getAlls["kin_3_mobile"];
      $kin_3_percent = $getAlls["kin_3_percent"];
      $kin_4_name = $getAlls["kin_4_name"];
      $kin_4_mobile = $getAlls["kin_4_mobile"];
      $kin_4_percent = $getAlls["kin_4_percent"];
      $kin_5_name = $getAlls["kin_5_name"];
      $kin_5_mobile = $getAlls["kin_5_mobile"];
      $kin_5_percent = $getAlls["kin_5_percent"];
      $kin_6_name = $getAlls["kin_6_name"];
      $kin_6_mobile = $getAlls["kin_6_mobile"];
      $kin_6_percent = $getAlls["kin_6_percent"];
      $kin_7_name = $getAlls["kin_7_name"];
      $kin_7_mobile = $getAlls["kin_7_mobile"];
      $kin_7_percent = $getAlls["kin_7_percent"];
      $kin_8_name = $getAlls["kin_8_name"];
      $kin_8_mobile = $getAlls["kin_8_mobile"];
      $kin_8_percent = $getAlls["kin_8_percent"];
      $kin_9_name = $getAlls["kin_9_name"];
      $kin_9_mobile = $getAlls["kin_9_mobile"];
      $kin_9_percent = $getAlls["kin_9_percent"];
      $kin_10_name = $getAlls["kin_10_name"];
      $kin_10_mobile = $getAlls["kin_10_mobile"];
      $kin_10_percent = $getAlls["kin_10_percent"];
      $paid_reg_form = $getAlls["paid_reg_form"];
      $has_loan = $getAlls["has_loan"];
      $staff = $getAlls["staff"];
      $date_created = $getAlls["date_created"];

      $fullname = $firstname . " " . $surname;

      $getShortName = substr($firstname, 0,1);




      ?>






      <header class="page-title-bar">
        <!-- .breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">
              <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Members</a>
            </li>
          </ol>
        </nav><!-- /.breadcrumb -->
        <!-- floating action -->
        <!-- title and toolbar -->
        <div class="d-md-flex align-items-md-start">
          <h1 class="page-title mr-sm-auto">  Hello ,  <?php echo $fullname ?>     |   # <?php echo $member_id ?> </h1><!-- .btn-toolbar -->

        </div><!-- /title and toolbar -->
      </header><!-- /.page-title-bar -->






      <div class="btn-group btn-group-toggle" data-toggle="buttons">



        <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=VIEW_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>' ">

          <input type="radio" name="options" id="option1" checked > View Account</label> 


          <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Members/card_generated_info_for_member_print.php?PRINT_CARD_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>')" >

            <input type="radio" name="options" id="option3"> Print Card</label>



            <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Members/print_member_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>')" >

              <input type="radio" name="options" id="option3"> Print Info</label>


            </div><!-- /button radio -->


            <hr class="my-5">







            <div class="board p-0 " >
              <!-- .list-group -->
              <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
                <div class="card card-fluid">
                  <!-- .card-body -->
                  <div class="card-body">
                    <div class="row">
                      <!-- .table -->
                      

                      <div class="col-md-5">
                        <table class="table table-bordered">
                          <tbody>
                            <tr>
                              <th> contribution_amount </th>
                              <td> <?php echo number_format($total_contribution_made, 2) ?> </td>
                              
                            </tr>
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


                          </tbody>
                        </table>
                      </div><!-- /.col -->




                      <div class="col-md-5">
                        <table class="table table-bordered">
                          <tbody>

                            <h2>Next of kin</h2>

                            <?php 

                            if ($kin_1_name!=="" || $kin_1_mobile!=="" || $kin_1_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 1 Name  </th>
                                <td> <address><?php echo $kin_1_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 1 Mobile </th>
                                <td> <?php echo $kin_1_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 1 % </th>
                                <td> <?php echo $kin_1_percent ?> </td>
                              </tr>

                              <?php
                            }



                            if ($kin_2_name!=="" || $kin_2_mobile!=="" || $kin_2_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 2 Name  </th>
                                <td> <address><?php echo $kin_2_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 2 Mobile </th>
                                <td> <?php echo $kin_2_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 2 % </th>
                                <td> <?php echo $kin_2_percent ?> </td>
                              </tr>

                              <?php
                            }



                            if ($kin_3_name!=="" || $kin_3_mobile!=="" || $kin_3_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 3 Name  </th>
                                <td> <address><?php echo $kin_3_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 3 Mobile </th>
                                <td> <?php echo $kin_3_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 3 % </th>
                                <td> <?php echo $kin_3_percent ?> </td>
                              </tr>

                              <?php
                            }




                            if ($kin_4_name!=="" || $kin_4_mobile!=="" || $kin_4_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 4 Name  </th>
                                <td> <address><?php echo $kin_4_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 4 Mobile </th>
                                <td> <?php echo $kin_4_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 4 % </th>
                                <td> <?php echo $kin_4_percent ?> </td>
                              </tr>

                              <?php
                            }



                            if ($kin_5_name!=="" || $kin_5_mobile!=="" || $kin_5_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 5 Name  </th>
                                <td> <address><?php echo $kin_5_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 5 Mobile </th>
                                <td> <?php echo $kin_5_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 5 % </th>
                                <td> <?php echo $kin_5_percent ?> </td>
                              </tr>

                              <?php
                            }




                            if ($kin_6_name!=="" || $kin_6_mobile!=="" || $kin_6_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 6 Name  </th>
                                <td> <address><?php echo $kin_6_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 6 Mobile </th>
                                <td> <?php echo $kin_6_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 6 % </th>
                                <td> <?php echo $kin_6_percent ?> </td>
                              </tr>

                              <?php
                            }




                            if ($kin_7_name!=="" || $kin_7_mobile!=="" || $kin_7_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 7 Name  </th>
                                <td> <address><?php echo $kin_7_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 7 Mobile </th>
                                <td> <?php echo $kin_7_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 7 % </th>
                                <td> <?php echo $kin_7_percent ?> </td>
                              </tr>

                              <?php
                            }



                            if ($kin_8_name!=="" || $kin_8_mobile!=="" || $kin_8_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 8 Name  </th>
                                <td> <address><?php echo $kin_8_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 8 Mobile </th>
                                <td> <?php echo $kin_8_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 8 % </th>
                                <td> <?php echo $kin_8_percent ?> </td>
                              </tr>

                              <?php
                            }



                            if ($kin_9_name!=="" || $kin_9_mobile!=="" || $kin_9_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 9 Name  </th>
                                <td> <address><?php echo $kin_9_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 9 Mobile </th>
                                <td> <?php echo $kin_9_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 9 % </th>
                                <td> <?php echo $kin_9_percent ?> </td>
                              </tr>

                              <?php
                            }



                            if ($kin_10_name!=="" || $kin_10_mobile!=="" || $kin_10_percent!=="") {

                              ?>
                              <tr>
                                <th> Next Of Kin 10 Name  </th>
                                <td> <address><?php echo $kin_10_name ?> </address> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 10 Mobile </th>
                                <td> <?php echo $kin_10_mobile?> </td>
                              </tr>
                              <tr>
                                <th> Next Of Kin 10 % </th>
                                <td> <?php echo $kin_10_percent ?> </td>
                              </tr>

                              <?php
                            } 

                            ?>





                            <tr>
                              <th> Date Joined </th>
                              <td> <?php echo $date_created ?>  </td>
                            </tr>
                          </tbody>
                        </table>
                      </div><!-- /.col -->


                    </div><!-- /.table-responsive -->
                  </div><!-- /.card-body -->
                </div><!-- /.card -->
              </div>
            </div>
            <hr class="my-5">




            <?php

          }


          ?>













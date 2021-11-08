 

<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Customers</a>
      </li>
    </ol>
  </nav><!-- /.breadcrumb -->
  <!-- floating action -->
  <a href=".home.add-new-customer.html.css"><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>  <!-- /floating action -->
  <!-- title and toolbar -->
  <div class="d-md-flex align-items-md-start">
    <h1 class="page-title mr-sm-auto"> All Customers </h1><!-- .btn-toolbar -->

<!--     <div class="btn-toolbar">
      <button type="button" class="btn btn-light"><i class="oi oi-print"></i> <span class="ml-1">Print</span></button> 
      <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-download"></i> <span class="ml-1">Export As Excel</span></button> 

      <button type="button" class="btn btn-light"><i class="oi oi-data-transfer-upload"></i> <span class="ml-1">Save as PDF</span></button>
      <div class="dropdown">
        <button type="button" class="btn btn-light" data-toggle="dropdown"><span>More</span> <span class="fa fa-caret-down"></span></button>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-divider"></div><a href="#" class="dropdown-item">Share</a> 
          <a href="#" class="dropdown-item">Send</a> <a href="#" class="dropdown-item">Print</a>
        </div>
      </div>
    </div> -->

  </div><!-- /title and toolbar -->
</header><!-- /.page-title-bar -->




<div class="section-block">
  <h2 class="section-title"> Customers </h2>
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



<div class="board p-0 " style="overflow-x: hidden;" >
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
                <th>Customer ID</th>
                <th>Name</th>
                <th> Mobile </th>
                <th> Digital Address </th>
                <th style="width:100px; min-width:100px;"> &nbsp; Action</th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



            <?php 

            $selectCust = mysqli_query($conn, "SELECT * FROM customers WHERE active ='yes' ORDER BY id DESC ");
            if (mysqli_num_rows($selectCust)!==0) {

              while ( $getdac = mysqli_fetch_assoc($selectCust)) {

                $id = $getdac["id"];
                $customer_id = $getdac["customer_id"];
                $customer_id_encrypt = $getdac["customer_id_encrypt"];
                $firstname = $getdac["firstname"];
                $surname = $getdac["surname"];
                $residencial_address = $getdac["residencial_address"];
                $postal_address = $getdac["postal_address"];
                $place_of_work = $getdac["place_of_work"];
                $home_town = $getdac["home_town"];
                $email = $getdac["email"];
                $telephone = $getdac["telephone"];
                $dob = $getdac["dob"];
                $gender = $getdac["gender"];
                $marital_status = $getdac["marital_status"];
                $image = $getdac["image"];
                $date_created = $getdac["date_created"];

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
                      <?php echo $customer_id ?>
                    </td>

                    <td class="align-middle"> <?php echo $fullname ?> </td>
                    <td class="align-middle"> <?php echo $telephone ?> </td>
                    <td class="align-middle"> <?php echo $residencial_address ?> </td>
                    <td class="align-middle text-center">
                     <div class="btn-group btn-group-toggle" data-toggle="buttons">
                       <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=VIEW_CUSTOMER_INFO&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?>' ">
 
                        <input type="radio" name="options" id="option1" checked > View</label> 

                        <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=EDIT_CUSTOMER_INFO&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?>' ">

                          <input type="radio" name="options" id="option2"> Edit</label> 

                          <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Customers/card_generated_info_for_customer_print.php?PRINT_CARD_FOR=<?php echo $surname ?>&&TRUE=<?php echo $customer_id_encrypt ?>')" >

                            <input type="radio" name="options" id="option3"> Print Card</label>



                            <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Customers/print_customer_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $customer_id_encrypt ?>')" >

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
                              <h3 class="card-title mb-4"> <?php echo $customer_id ?> </h3>
                              <h3 class="card-title mb-4"> <?php echo $fullname ?> </h3>
                            </div><!-- /.col -->
                            <!-- .col -->



                            <div class="col-md-5">
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
                      <!--             <tr>
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
                                  </tr> -->


                                </tbody>
                              </table>
                            </div><!-- /.col -->




                            <div class="col-md-5">
                              <table class="table table-bordered">
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
                                 <!--  <tr>
                                    <th> marital_status </th>
                                    <td> <?php echo $marital_status ?></td>
                                  </tr> -->
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



  <audio>
    
  </audio>
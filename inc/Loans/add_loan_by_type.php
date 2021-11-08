 
<?php 

$getloanType = $_GET["TRUE"];



?>


<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loans</a>
      </li>
    </ol>
  </nav><!-- /.breadcrumb -->

  <!-- title and toolbar -->
  <div class="d-md-flex align-items-md-start">
    <h1 class="page-title mr-sm-auto"> Choose to request loan </h1><!-- .btn-toolbar -->

  </div><!-- /title and toolbar -->
</header><!-- /.page-title-bar -->




<div class="form-row">

 <header class="page-navs bg-light shadow-sm">
  <!-- .input-group -->

  <div class="input-group has-clearable" >
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Here eg. Agyei">
  </div><!-- /.input-group -->
</header>


</div><!-- /.form-row -->



<div class="board p-0 "  >
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
    <div class="card card-fluid">
      <!-- .card-body -->
      <div class="card-body">
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table" >
            <!-- thead -->
           


            <?php 



            if ($getloanType==="da64883f2825ba6478dce6a8c9ecbf8d") {

              ?>
                 <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th> Mobile </th>
                <th> Place of Work </th>
                <th> Status </th>
                <th style="width:100px; min-width:100px;"> &nbsp; Action</th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->


              <?php


              $typeName = "Customer";





              $selectCust = mysqli_query($conn, "SELECT * FROM customers WHERE active ='yes' AND has_loan='no' ORDER BY id DESC ");
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

                    <tr class="text-center">

                      <td class="align-middle">
                        <?php echo $customer_id ?>
                      </td>

                      <td class="align-middle"> <?php echo $fullname ?> </td>
                      <td class="align-middle"> <?php echo $telephone ?> </td>
                      <td class="align-middle"> <?php echo $place_of_work ?> </td>
                      <td class="align-middle">

                            <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $typeName ?>  </span>

                       </td>
                      <td class="align-middle text-center">
                       <div class="btn-group btn-group-toggle" data-toggle="buttons">

                         <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=ADD_NEW_LOAN_TO_CUSTOMER&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?>' ">

                          <input type="radio" name="options" id="option1" checked > Request Customer Loan </label> 



                        </div><!-- /button radio -->



                      </td>

                    </tr><!-- /tr -->


                  </tbody><!-- /tbody -->

                  <?php


                }

              } else {
                echo NoCstomerYet();
              }






            }else if ($getloanType==="87ad20c24e4068d1cb47850ca6f6cc8e") {



               ?>
                 <thead>
              <tr class="text-center">
                <th>ID</th>
                <th>Name</th>
                <th>Total Contribution</th>
                <th> Mobile </th>
                <th> Place of Work </th>
                <th> Status </th>
                <th style="width:100px; min-width:100px;"> &nbsp; Action</th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->


              <?php





              $typeName = "Member";






              $selectCust = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND has_loan='no' AND last_month_contributed!=''  ORDER BY id DESC ");




              if (mysqli_num_rows($selectCust)!==0) {

                while ( $getdac = mysqli_fetch_assoc($selectCust)) {

                  $id = $getdac["id"];
                  $member_id = $getdac["member_id"];
                  $member_id_encrypt = $getdac["member_id_encrypt"];
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




              $countTotalGuranto = mysqli_query($conn, "SELECT count(*) AS count1 FROM members_contributions WHERE active='yes' AND member_id='$member_id' ");

              $countFetch1 = mysqli_fetch_array($countTotalGuranto);
              $countTotalGurantors = $countFetch1['count1'];


          

 




                  ?>
                  <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                    <!-- tr -->
 
                    <tr class="text-center">

                      <td class="align-middle">
                        <?php echo $member_id ?> 
                      </td>

                      <td class="align-middle"> <?php echo $fullname ?> </td>
                      <td class="align-middle"> <?php echo $countTotalGurantors ?> </td>
                      <td class="align-middle"> <?php echo $telephone ?> </td>
                      <td class="align-middle"> <?php echo $place_of_work ?> </td>
                      <td class="align-middle">

                            <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $typeName ?>  </span>

                       </td>

                       <?php 

                            if ($countTotalGurantors>7) {

                              ?>

                               <td class="align-middle text-center">
                       <div class="btn-group btn-group-toggle" data-toggle="buttons">

                         <label class="btn btn-secondary" onclick="window.location.href='homepage.php?CHECKER=ADD_NEW_LOAN_TO_MEMBER&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>' ">

                          <input type="radio" name="options" id="option1" checked > Request Member Loan</label> 



                        </div><!-- /button radio -->



                      </td>


                              <?php
                  
                              }else{

                                  ?>

                                     <td class="align-middle text-center">
                       <div class="btn-group btn-group-toggle" data-toggle="buttons">

                         <label class="btn btn-secondary" >

                          <input type="radio" name="options" id="option1" checked > Not Qualify</label> 



                        </div><!-- /button radio -->



                      </td>


                                  <?php


                              }


                        ?>
                     

                    </tr><!-- /tr -->


                  </tbody><!-- /tbody -->

                  <?php


                }

              } else {
                echo NoCstomerYet();
              }
            }else {



              ?>
              <script type="text/javascript">
                window.location.href='.home.attacked-detected.html.cpp.java.ruby';

              </script>

              <?php


              die();



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
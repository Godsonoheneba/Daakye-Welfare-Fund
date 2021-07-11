<?php 


 $queryInfo = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$login_session' AND active='yes'");
  if (mysqli_num_rows($queryInfo)===1) {

    $fetch =mysqli_fetch_assoc($queryInfo);
    $table_id = $fetch["id"];
    $member_id = $fetch["member_id"];
    $member_id_encrypt = $fetch["member_id_encrypt"];
    $password = $fetch["password"];
    $firstname = $fetch["firstname"];
    $surname = $fetch["surname"];
    $residencial_address = $fetch["residencial_address"];
    $postal_address = $fetch["postal_address"];
    $place_of_work = $fetch["place_of_work"];
    $home_town = $fetch["home_town"];
    $email = $fetch["email"];
    $telephone = $fetch["telephone"];
    $dob = $fetch["dob"];
    $gender = $fetch["gender"];
    $contribution_amount = $fetch["contribution_amount"];
    $last_month_contributed = $fetch["last_month_contributed"];
    $image = $fetch["image"];
    $has_loan = $fetch["has_loan"];
    $date_created = $fetch["date_created"];

   

    $userFullName = $firstname . " " . $surname; 



  $selectSum = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE member_id='$member_id'  AND active='yes' ");

  $getRow = mysqli_fetch_assoc($selectSum);
  $totalContribution = $getRow["amount"];
  $qualifyLoanAmount = $totalContribution * 2;

  /*-------------count month of contribution collected-------------------*/
$countTOMonth = mysqli_query($conn, "SELECT count(*) AS toMonth  FROM members_contributions WHERE active='yes' AND member_id_encrypt='$member_id_encrypt'  ");
$getcountTOMonth = mysqli_fetch_array($countTOMonth);
$countTotalmOnthCOnti = $getcountTOMonth['toMonth'];


/*-------------count month of loan collected-------------------*/
$countToLoan = mysqli_query($conn, "SELECT count(*) AS toLoan  FROM loans_all WHERE active='yes' AND person_id='$member_id_encrypt'  ");
$getcountToLoan = mysqli_fetch_array($countToLoan);
$countTotalmLoan = $getcountToLoan['toLoan'];





  if ($image==="" || $image==="/") {

    if ($gender==="Male") {
      $image = "<figure class=\"user-avatar user-avatar-xl\">
      <img src=\"assets/images/customs/male.png\" >
      </figure>";
    } else {
      $image = "<figure class=\"user-avatar user-avatar-xl\">
      <img src=\"assets/images/customs/female.jpg\" >
      </figure>";
    }


  } else {

   $image = "<figure class=\"user-avatar user-avatar-xl\">
   <img src=\"Datas/members_datas/$image\" >
   </figure>";


 }



} else {

  ?>
  <script type="text/javascript">
    window.location.href='.home.attacked-detected.html.cpp.java.ruby';

  </script>

  <?php


  die();


}





?>










<div class="page">
  <!-- .page-cover -->
<header class="page-title-bar">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Approvals </a>
      </li>
    </ol>
  </nav>
  <h1 class="page-title">Member Contribution Change Approvals </h1>
</header><!-- /.page-title-bar -->






<div class="page-inner">

  <!-- .page-section -->
  <div class="page-section">
    <!-- grid row -->
    <div class="row">

      <!-- grid column -->
      <div class="col-lg-12">
        <!-- .card -->
        <div class="card card-fluid">
          <h6 class="card-header"> Member Contribution Approvals Overview </h6><!-- .card-body -->



          <form  action="" method="post" data-parsley-validate="" validate="" enctype="multipart/form-data" id="">

            <!-- .card-body -->
            <div class="card-body">


              <div class="form-row">

               <header class="page-navs bg-light shadow-sm">
                <!-- .input-group -->

                <div class="input-group has-clearable" >
                  <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find transaction eg. 2020-02-25">
                </div><!-- /.input-group -->
              </header>


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
                          <tr>
                            <th ></th>
                            <th> Initial Amount </th>
                            <th> CUrrent Amount </th>
                            <th> Confirm </th>
                            <th> Date </th>
                            <th> Done By </th>
                            <th> Action </th>
                          </tr>
                        </thead><!-- /thead -->


                        <?php 
 
                          $selCont = mysqli_query($conn, "SELECT * FROM member_contribution_history WHERE member_id='$member_id' AND active='yes' ORDER BY id DESC  ");

                        if (mysqli_num_rows($selCont) > 0) {

                         while ( $getDem = mysqli_fetch_assoc($selCont)) {

                          $Tableid = $getDem["id"];
                          $amount = $getDem["amount"];
                          $confirm = $getDem["confirm"];
                          $date_added = $getDem["date_added"];
                          $done_by = $getDem["done_by"];


                          $juju = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by' AND active='yes'  LIMIT 1  ");

                          $getDem2 = mysqli_fetch_assoc($juju);
                          $firstName = $getDem2["firstName"];
                          $lastName = $getDem2["lastName"];
                          $staffName = $firstName . ' ' . ' ' . ' ' .  $lastName;



                          ?>


                          <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                            <!-- tr -->
                            <tr>


                              <td class="align-middle px-0" style="width: 1.5rem">
                                <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-202015858985<?php echo $Tableid ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                              </td>

                              
                              <td class="align-middle">
                                <a ><?php echo number_format($contribution_amount, 2) ?></a>
                              </td>


                              <td class="align-middle">
                                <a ><?php echo number_format($amount, 2) ?></a>
                              </td>


                              <td class="align-middle">
                                <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $confirm ?></span>
                              </td>

                              <td class="align-middle">
                                <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $date_added ?></span>
                              </td>

                              <td class="align-middle">
                                <span class="badge badge-subtle badge-primary" style="font-size: 14px;"><?php echo $staffName ?></span>
                              </td>




                              <?php


                              if ($confirm==="no") {
                                    
                                    $showActionBut = "
                                       <a onclick=\"approvedContributionEdit('$member_id','$amount')\">  <button class=\"btn btn-primary\">Approve</button> </a> 
                                    ";

                              } else {
                                
                                $showActionBut = "
                                       <a class=\"btn btn-sm btn-icon btn-light\"><button class=\"btn btn-primary\">Approved</button> </a> 
                                    ";
                              }
                              

 

                              ?>



                              <td class="align-middle text-center">

                               
                                <?php echo $showActionBut ?>

                              </td>


                            </tr><!-- /tr -->



                            <!-- tr -->
                            <tr class="row-details bg-light collapse" id="details-202015858985<?php echo $Tableid ?>">
                              <td colspan="6">
                                <!-- .row -->
                                <div class="row">

                                  <div class="col-md-12">


                                    receipt in pdf here



                                  </div><!-- /.col -->

                                </div><!-- /.row -->
                              </td>
                            </tr><!-- /tr -->
                            <!-- tr -->

                          </tbody><!-- /tbody -->

                          <?php


                        }

                      } else {
                        echo NoTransactionsyet();
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


<script type="text/javascript">
  


/*------------------------------------------------------APPROVE  MEMBER CONTRIBUTION-------------------*/
function approvedContributionEdit(member_id,amount) {


  Swal.fire({
    title: 'Are you sure you want to Approve ?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=approveMemberContrinbutionEdit",{member_id:member_id,amount:amount},function (showOutPut) {

        if (showOutPut.includes("error")) {

         Swal.fire({
          title: "Error",
          text: "An error Occured, Please try again!!!",
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
          ' Successfully Approved ',
          'success'
          ).then((result) =>{


           location.reload();



         })



        }


      });

    }


  });






}
/*--------------------------Approve foer edit member contribution -----------------------*/

</script>
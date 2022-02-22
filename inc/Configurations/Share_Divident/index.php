<?php 


$ByFounders = "founders";
$ByaLL = "all";


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
           <a  href=".home.settings-customer-interest.config.ruby.java" class="nav-link ">Customer Interest Config</a>
           <a  href=".home.settings-view-all-deactivate-members.config.java.html.css.java" class="nav-link ">Deactivated Members</a>


              <a  onclick="sendCOntribuitionSMS()" class="nav-link ">Send Members Contibution SMS</a>



           <?php 

            if ($login_session_type==="3") {
              ?>

                 <a  href=".home.settings-payroll.config.java.kt.css" class="nav-link ">PayRoll</a> 
           <a  href=".home.settings-closings.config.java.html.css.jaca" class="nav-link active">Share Dividence</a>

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
        <h6 class="card-header"> Close Accounts</h6><!-- .card-body -->
        <h6 class="card-header"> Click on the add Button to close for this year <?php echo date("Y") ?> </h6><!-- .card-body -->


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



            <div class="board p-0 " >
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
                            <th> Year</th>
                            <th> Date Added</th>
                            <th >DOne By </th>
                            <th > </th>
                          </tr>
                        </thead><!-- /thead -->
                        <!-- tbody -->


                        <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">






                          <?php 



                          $sel = mysqli_query($conn, "SELECT * FROM company_share_dividend_list WHERE active = 'yes'    ORDER BY id DESC  LIMIT 1   ");


                          while ($gett= mysqli_fetch_assoc($sel)) {

                            $id = $gett["id"];
                            $year = $gett["year"];
                            $amount_to_all = $gett["amount_to_all"];
                            $amount_to_founders = $gett["amount_to_founders"];
                            $date_added = $gett["date_added"];
                            $done_by = $gett["done_by"];


                            $selStu = mysqli_query($conn, "SELECT * FROM staff WHERE  staffID='$done_by'  AND active='yes' ");


                            $getAlls = mysqli_fetch_assoc($selStu);
                            $id = $getAlls["id"];
                            $firstName = $getAlls["firstName"];
                            $lastName = $getAlls["lastName"];

                            $staffNAme = $firstName . " " . $lastName;


                            $seleScheduleFounders = mysqli_query($conn, "SELECT * FROM schedule_dividen WHERE  year='$year' AND type='founders' AND active='yes' ");


                            $seleScheduleAll = mysqli_query($conn, "SELECT * FROM schedule_dividen WHERE  year='$year' AND type='all' AND active='yes' ");



                            



                            ?> 


                            <!-- tr -->
                            <tr class="align-middle">

                              <td class="align-middle">
                               <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $year ?></span>
                             </td>

                             <td class="align-middle">
                               <span class="badge badge-subtle badge-primary" style="font-size: 14px;"><?php echo $date_added ?></span>
                             </td>


                             <td class="align-middle">
                              <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $staffNAme ?></span>
                            </td>



                            <td class="align-middle text-center">


                             <div class="btn-group btn-group-toggle" data-toggle="buttons" onclick="window.open('ViewPDFS/Reports/ClossingAccount/print_all_clossing_account_with_dividence_to_founders.php?PRINT=PRINT_ALL_SHARE_HOLDERS_TOKENS&&BY_WHO=<?php echo $ByFounders ?>&&YEAR=<?php echo $year ?>&&AMNTFDERS=<?php echo $amount_to_founders ?>&&loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem')">

                              <label class="btn btn-secondary" >

                                <input type="radio" name="options" id="option2"> Print Founders List</label> 

                              </div>




                              <div class="btn-group btn-group-toggle" data-toggle="buttons" onclick="window.open('ViewPDFS/Reports/ClossingAccount/print_all_clossing_account_with_dividence_to_all.php?PRINT=PRINT_ALL_SHARE_HOLDERS_TOKENS&&BY_WHO=<?php echo $ByaLL ?>&&YEAR=<?php echo $year ?>&&AMNTALL=<?php echo $amount_to_all ?>&&loremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremloremlorem')">

                                <label class="btn btn-secondary" >

                                  <input type="radio" name="options" id="option2"> Print All List</label> 

                                </div>


                                <?php  


                                if (mysqli_num_rows($seleScheduleFounders)<=0) {

                                     ?>


                                  <div class="btn-group btn-group-toggle" data-toggle="buttons" onclick="schedulePaymentClickFOrFounders('<?php echo $year ?>')">

                                    <label class="btn btn-secondary" >

                                      <input type="radio" name="options" id="option2"> Schedule for Founders ( <?php echo $year ?> ) </label> 

                                    </div>

                                    <?php


                                }




                                if (mysqli_num_rows($seleScheduleAll)<=0) {

                                     ?>


                                  <div class="btn-group btn-group-toggle" data-toggle="buttons" onclick="schedulePaymentClickforAll('<?php echo $year ?>')">

                                    <label class="btn btn-secondary" >

                                      <input type="radio" name="options" id="option2"> Schedule for All ( <?php echo $year ?> ) </label> 

                                    </div>

                                    <?php


                                } 

                                  ?>




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

include 'close_for_the_year_modal.php';

?>




<script type="text/javascript">




function sendCOntribuitionSMS() {


    Swal.fire({
      title: 'Are you sure you want to Send SMS',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Send!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=sendCOntributionSMS",{},function (showOutPut) {

          // alert(showOutPut);

          if (showOutPut.includes("errorinupdate")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in changing",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });





          }else{




            Swal.fire(
              'Successfull!',
              ' Successfully Sent ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });

}


/*------------------------------------------------------schedulePaymentClickFOrFounders-----------------*/
function schedulePaymentClickFOrFounders(year) {
      

        Swal.fire({
      title: 'Are you sure you want to Schedule the payment for Founders for '+ year + ' ? ',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=scheduleSharingFounders",{year:year},function (showOutPut) {


          if (showOutPut.includes("erorr")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in changing",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });





          }else{




            Swal.fire(
              'Successfull!',
              ' Successfully Schedule ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });

}






/*------------------------------------------------------SCHEDULE FOR ALL-----------------*/
function schedulePaymentClickforAll(year) {
      

        Swal.fire({
      title: 'Are you sure you want to Schedule the payment for Founders for '+ year + ' ? ',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=scheduleSharingAll",{year:year},function (showOutPut) {


          if (showOutPut.includes("erorr")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in changing",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });





          }else{




            Swal.fire(
              'Successfull!',
              ' Successfully Schedule ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });

}








  /*------------------delete MEMBER interest rate-------------*/

  function deleteMemberFromPayrol(theID) {

    Swal.fire({
      title: 'Are you sure you want to Delete Member from Pay Roll ?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=deleteMemberFromPayRolPost",{theID:theID},function (showOutPut) {

          if (showOutPut.includes("errorinupdate")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in changing",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });





          }else{




            Swal.fire(
              'Successfull!',
              ' Successfully Deleted ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });



  }






</script>

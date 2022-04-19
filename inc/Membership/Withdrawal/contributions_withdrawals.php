


<?php 
 
  

if ($login_session_type==="3" || $login_session_type==="1") {


  $todayDate = date("F j, Y, g:i a"); 

  $getID = $_GET["DACO"];
  $getIDEncrypt = $_GET["TRUE"];



  $selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$getID' AND member_id_encrypt='$getIDEncrypt' AND active='yes' LIMIT 1 ");


  if (mysqli_num_rows($selStu) > 0) {

    $getAlls = mysqli_fetch_assoc($selStu);
    $id = $getAlls["id"];
    $member_id = $getAlls["member_id"];
    $member_id_encrypt = $getAlls["member_id_encrypt"];
    $firstname = $getAlls["firstname"];
    $surname = $getAlls["surname"];
    $contribution_amount = $getAlls["contribution_amount"];
    $total_contribution_made = $getAlls["total_contribution_made"];
    $has_loan = $getAlls["has_loan"];


  } else {

    ?>

    <script type="text/javascript">
      window.location.replace("ErorPage.php");
    </script>

    <?php

  }



}else{



  $selectCust = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$login_session' LIMIT 1 ");

  $getAlls1 = mysqli_fetch_assoc($selectCust);

  $id = $getAlls1["id"];
  $member_id = $getAlls1["member_id"];
  $member_id_encrypt = $getAlls1["member_id_encrypt"];



  $selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$member_id' AND member_id_encrypt='$member_id_encrypt' AND active='yes' LIMIT 1 ");

  $getAlls = mysqli_fetch_assoc($selStu);
  $id = $getAlls["id"];
  $member_id = $getAlls["member_id"];
  $member_id_encrypt = $getAlls["member_id_encrypt"];
  $firstname = $getAlls["firstname"];
  $surname = $getAlls["surname"];
  $contribution_amount = $getAlls["contribution_amount"];
  $total_contribution_made = $getAlls["total_contribution_made"];
  $has_loan = $getAlls["has_loan"];




}




$status = "member";


$fullname = $firstname . " " . $surname;



  ?>




  <header class="page-title-bar">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Contributions Withdrawal </a>
        </li>
      </ol>
    </nav>
    <h1 class="page-title">  Contributions Withdrawal </h1>
    <h1 class="page-title"> Dear <?php echo $fullname ?>, Per your contribution, you can Withdrawl between GH&#8373; 1.00 to GH&#8373; <?php echo number_format($total_contribution_made, 2) ?> </h1>
  </header><!-- /.page-title-bar -->



  <div class="page-section">

    <div id="base-style" class="card">

      <center>
        <div class="card-body center">

          <div class="form-row StepOneDiv">


            <div class="col-md-6 mb-3 align-right">
              <label for="withdrawalAMount " >Amount to withdraw  <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkMobiles(this)"  class="form-control withdrawalAMount" id="withdrawalAMount" placeholder="Loan Amount "  required=""  >
            </div>



            </div>


<div class="form-actions">

  <button class="btn btn-primary addBut" type="submit"  onclick="withdrawwContribution('<?php echo $member_id_encrypt ?>','<?php echo $total_contribution_made ?>')">Done</button>



  <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
    <span class="sr-only">Loading...</span>
  </div>


</div>




</div><!-- /.card-body -->

</center>
<!-- </form> -->

</div>


</div>


<script type="text/javascript">


/*------------------------------------------LOANS----------------------------------*/

function withdrawwContribution(getIDEncrypt,total_contribution_made) {


  var withdrawalAMount = $(".withdrawalAMount").val();

  total_contribution_made = Number(total_contribution_made);

  var addBut = $(".addBut");
  var loadingBut = $(".loadingBut");

  addBut.hide();
  loadingBut.show();




    if (withdrawalAMount!=="" ) {

  withdrawalAMount = Number(withdrawalAMount);


      if (withdrawalAMount <= total_contribution_made) {


     if (withdrawalAMount<=0) {

      Swal.fire({
        title: "Error",
        text: "Amount cannot be zero",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });


      addBut.show();
      loadingBut.hide();

    } else {


         Swal.fire({
          title: 'Are you sure you want to perform this action ?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Make!'
        }).then((result) => {

          if (result.value) { 


            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=withdrawContribution",{getIDEncrypt:getIDEncrypt,withdrawalAMount:withdrawalAMount},function (showOutPut) {

                alert(showOutPut)
                exit();

              if (showOutPut.includes("done")) {
                
                Swal.fire({
                  title: "Successfully",
                  text:  "Withdrawal made Successfully, Status: Pending!!! your money will be issued to you in due time" ,
                  type: "success",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                }).then((result) => {
                  if (result.value) {


                   window.location.replace('.login-success.contribution.withdrawal.kt.css.js.html.cpp.js.ruby.p.pyton.javas');
                 } 
               });



              }else{

                  Swal.fire({
                  title: "Error",
                  text: showOutPut,
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();

              }


            });

            








          }else{
            location.reload();
          }

        });



    }


        
      } else {

        Swal.fire({
      title: "Error",

      text: "You cannot withdraw more than your total contribution, GHC " +  total_contribution_made + ".00",
      
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


     addBut.show();
     loadingBut.hide();

      }





    }else {

     Swal.fire({
      title: "Error",
      text: "All fields are mandatory for self",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


     addBut.show();
     loadingBut.hide();

   }


  


}


</script>












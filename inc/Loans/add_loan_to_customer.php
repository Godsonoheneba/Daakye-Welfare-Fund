   
<?php 

$todayDate = date("F j, Y, g:i a"); 

$getID = $_GET["DACO"];
$getIDEncrypt = $_GET["TRUE"];

$status = "customer";

 

$selStu1 = mysqli_query($conn, "SELECT * FROM customers WHERE  customer_id='$getID' AND customer_id_encrypt='$getIDEncrypt' AND active='yes' LIMIT 1 ");

$getAlls = mysqli_fetch_assoc($selStu1);
$id = $getAlls["id"];
$customer_id = $getAlls["customer_id"];
$customer_id_encrypt = $getAlls["customer_id_encrypt"];
$firstname = $getAlls["firstname"];
$surname = $getAlls["surname"];

$fullname = $firstname . " " . $surname;





$selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$getID' AND member_id_encrypt='$getIDEncrypt' AND active='yes' LIMIT 1 ");

$getAlls = mysqli_fetch_assoc($selStu);
$id = $getAlls["id"];
$member_id = $getAlls["member_id"];
$member_id_encrypt = $getAlls["member_id_encrypt"];
$contribution_amount = $getAlls["contribution_amount"];
$total_contribution_made = $getAlls["total_contribution_made"];


$qualifyLoanAmount = $total_contribution_made * 2;
$getGurantorsAmount = $total_contribution_made / 2;


?>


<header class="page-title-bar">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loan </a>
      </li>
    </ol>
  </nav>
  <h1 class="page-title"> Add new Customer Loan to <?php echo $fullname ?> </h1>
  <h1 class="page-title"> Pelase specify the loan you want </h1>
</header><!-- /.page-title-bar -->



<div class="page-section">

  <div id="base-style" class="card">

    <center>
      <div class="card-body center">

        <div class="form-row StepOneDiv">


          <div class="col-md-6 mb-3 align-right">
            <label for="LoanAmount " >Loan Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkMobiles(this)" maxlength="10" class="form-control loanAmount" id="LoanAmount" placeholder="Loan Amount "  >
          </div>




          <div class="col-md-6 mb-3">
            <label for="PaymentPeriod">Payment Period <abbr title="Required">*</abbr> </label> <select class="custom-select d-block w-100 PaymentPeriodClass"  >
              <option value=""> Choose... </option>
              <option value="1">  1 Month </option>
              <option value="2">  2 Months </option>
              <option value="3">  3  Months </option>
              <option value="4">  4  Months </option>
              <option value="5">  5  Months </option>
              <option value="6">  6  Months </option>
              <option value="7">  7  Months </option>
              <option value="8">  8  Months </option>
              <option value="9">  9  Months </option>
              <option value="10">  10  Months </option>
              <option value="11">  11  Months </option>
              <option value="12">  12  Months </option>
              <option value="13">  13  Months </option>
              <option value="14">  14  Months </option>
              <option value="15">  15  Months </option>
              <option value="16">  16  Months </option>
              <option value="17">  17  Months </option>
              <option value="18">  18  Months </option>
              <option value="19">  19  Months </option>
              <option value="20">  20  Months </option>
              <option value="21">  21  Months </option>
              <option value="22">  22  Months </option>
              <option value="23">  23  Months </option>
              <option value="24">  24  Months </option>
              <option value="25">  25  Months </option>
              <option value="26">  26  Months </option>
              <option value="27">  27  Months </option>
              <option value="28">  28  Months </option>
              <option value="29">  29  Months </option>
              <option value="30">  30  Months </option>
              <option value="31">  31  Months </option>
              <option value="32">  32  Months </option>
              <option value="33">  33  Months </option>
              <option value="34">  34  Months </option>
              <option value="35">  35  Months </option>
              <option value="36">  36  Months </option>
           
            </select>

          </div>
       






         <div class="col-md-4 mb-3 otherGUarantorDiv">
          <label for="guarantor1">Guarantor 1 <abbr title="Required">*</abbr></label>
          <select class="custom-select d-block w-100 guarantor1Class"   id="guarantor1" >

           <?php 



         $squery = "SELECT * FROM members WHERE active='yes' AND member_id !='$getID' ORDER BY id ASC "; 

          $listOfGura="";

           $sresults = mysqli_query($conn, $squery);
           $scount = mysqli_num_rows($sresults);
           if ($scount > 0) {
             echo' <option value=""> Choose...</option>';

             while ($srow = mysqli_fetch_array($sresults)) {

             // $srow = mysqli_fetch_array($sresults);

              $member_idDBB = $srow["member_id"];
              $member_id_encrypt_LOANS= $srow["member_id_encrypt"];
              $fname = $srow["firstname"];
              $sname = $srow["surname"];
              $has_loanDB = $srow["has_loan"];
              $telephone = $srow["telephone"];
              $total_contribution_madeDB = $srow["total_contribution_made"];

              $total_guaranteeDB = $srow["total_guarantee"];


              $thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes' AND person_id='$member_id_encrypt_LOANS' AND finish_paying='no'  ");

              //$thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'   ");



              $getRowe = mysqli_fetch_assoc($thhrr);
              $loanid = $getRowe["id"];
              $total_loan_amount_to_pay = $getRowe["total_amount_to_pay"];
              $MytotalLoanPaid = $getRowe["amount_paid"];


              $halfOftotal_amount_to_pay = $total_loan_amount_to_pay / 2 ; 


              $guratName = $fname . " " . $sname ;

           $MYtotal_guarantee = "3";



                 $countTotalGuranto = mysqli_query($conn, "SELECT count(*) AS count1 FROM members_contributions WHERE active='yes' AND member_id='$member_idDBB' ");

              $countFetch1 = mysqli_fetch_array($countTotalGuranto);
              $countTotalGurantors = $countFetch1['count1'];

              $limitOfGurant = 7;





                  if (($total_guaranteeDB  < $MYtotal_guarantee) && ($MytotalLoanPaid >= $halfOftotal_amount_to_pay) && ($countTotalGurantors >= $limitOfGurant)  ) {
                      
                      $listOfGura.= '<option value="'.$srow["member_id"].'" > '.$guratName.'  -  '.$telephone.'   </option>';
                  }

                  








          }

              echo "$listOfGura";




        }  

        ?>

      </select>
    </div>













<div class="col-md-4 mb-3 otherGUarantorDiv">
          <label for="guarantor2">Guarantor 2 <abbr title="Required">*</abbr></label>
          <select class="custom-select d-block w-100 guarantor2Class"   id="guarantor2" >

           <?php 



         $squery = "SELECT * FROM members WHERE active='yes' AND member_id !='$getID' ORDER BY id ASC "; 

          $listOfGura="";

           $sresults = mysqli_query($conn, $squery);
           $scount = mysqli_num_rows($sresults);
           if ($scount > 0) {
             echo' <option value=""> Choose...</option>';

             while ($srow = mysqli_fetch_array($sresults)) {

             // $srow = mysqli_fetch_array($sresults);

              $member_idDBB = $srow["member_id"];
              $member_id_encrypt_LOANS= $srow["member_id_encrypt"];
              $fname = $srow["firstname"];
              $sname = $srow["surname"];
              $has_loanDB = $srow["has_loan"];
              $telephone = $srow["telephone"];
              $total_contribution_madeDB = $srow["total_contribution_made"];

              $total_guaranteeDB = $srow["total_guarantee"];


              $thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes' AND person_id='$member_id_encrypt_LOANS' AND finish_paying='no'  ");

              //$thhrr = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'   ");



              $getRowe = mysqli_fetch_assoc($thhrr);
              $loanid = $getRowe["id"];
              $total_loan_amount_to_pay = $getRowe["total_amount_to_pay"];
              $MytotalLoanPaid = $getRowe["amount_paid"];


              $halfOftotal_amount_to_pay = $total_loan_amount_to_pay / 2 ; 


              $guratName = $fname . " " . $sname ;

           $MYtotal_guarantee = "3";



                 $countTotalGuranto = mysqli_query($conn, "SELECT count(*) AS count1 FROM members_contributions WHERE active='yes' AND member_id='$member_idDBB' ");

              $countFetch1 = mysqli_fetch_array($countTotalGuranto);
              $countTotalGurantors = $countFetch1['count1'];

              $limitOfGurant = 7;





                  if (($total_guaranteeDB  < $MYtotal_guarantee) && ($MytotalLoanPaid >= $halfOftotal_amount_to_pay) && ($countTotalGurantors >= $limitOfGurant)  ) {
                      
                      $listOfGura.= '<option value="'.$srow["member_id"].'" > '.$guratName.'  -  '.$telephone.'   </option>';
                  }

                  


 





          }

              echo "$listOfGura";




        }  

        ?>

      </select>
    </div>


 </div>

        <div class="form-actions">

          <button class="btn btn-primary addBut" type="submit"  onclick="finishLoanPayments('<?php echo $getIDEncrypt ?>','<?php echo $status ?>')">Done</button>



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



</script>
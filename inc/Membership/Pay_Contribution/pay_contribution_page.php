     
<?php 
$todayDate = date("F j, Y"); 

$getMemberid = $_GET["DACO"];
$getMemberIDEncrypt = $_GET["TRUE"];

$SELLL = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$getMemberIDEncrypt'  AND member_id='$getMemberid'  AND active='yes'  LIMIT 1  ");

$getall =  mysqli_fetch_assoc($SELLL);

$id = $getall["id"];
$member_id = $getall["member_id"];
$member_id_encrypt = $getall["member_id_encrypt"];
$password = $getall["password"];
$firstname = $getall["firstname"];
$surname = $getall["surname"];
$residencial_address = $getall["residencial_address"];
$postal_address = $getall["postal_address"];
$place_of_work = $getall["place_of_work"];
$home_town = $getall["home_town"];
$email = $getall["email"];
$telephone = $getall["telephone"];
$dob = $getall["dob"];
$gender = $getall["gender"];
$marital_status = $getall["marital_status"];
$contribution_amount = $getall["contribution_amount"];
$total_contribution_made = $getall["total_contribution_made"];
$last_month_contributed = $getall["last_month_contributed"];
$last_year_contributed = $getall["last_year_contributed"];
$image = $getall["image"];
$kin_1_name = $getall["kin_1_name"];
$kin_1_mobile = $getall["kin_1_mobile"];
$kin_1_percent = $getall["kin_1_percent"];
$kin_2_name = $getall["kin_2_name"];
$kin_2_mobile = $getall["kin_2_mobile"];
$kin_2_percent = $getall["kin_2_percent"];
$kin_3_name = $getall["kin_3_name"];
$kin_3_mobile = $getall["kin_3_mobile"];
$kin_3_percent = $getall["kin_3_percent"];
$kin_4_name = $getall["kin_4_name"];
$kin_4_mobile = $getall["kin_4_mobile"];
$kin_4_percent = $getall["kin_4_percent"];
$kin_5_name = $getall["kin_5_name"];
$kin_5_mobile = $getall["kin_5_mobile"];
$kin_5_percent = $getall["kin_5_percent"];
$kin_6_name = $getall["kin_6_name"];
$kin_6_mobile = $getall["kin_6_mobile"];
$kin_6_percent = $getall["kin_6_percent"];
$kin_7_name = $getall["kin_7_name"];
$kin_7_mobile = $getall["kin_7_mobile"];
$kin_7_percent = $getall["kin_7_percent"];
$kin_8_name = $getall["kin_8_name"];
$kin_8_mobile = $getall["kin_8_mobile"];
$kin_8_percent = $getall["kin_8_percent"];
$kin_9_name = $getall["kin_9_name"];
$kin_9_mobile = $getall["kin_9_mobile"];
$kin_9_percent = $getall["kin_9_percent"];
$kin_10_name = $getall["kin_10_name"];
$kin_10_mobile = $getall["kin_10_mobile"];
$kin_10_percent = $getall["kin_10_percent"];
$paid_reg_form = $getall["paid_reg_form"];
$has_loan = $getall["has_loan"];
$staff = $getall["staff"];
$date_created = $getall["date_created"];

$fullname = $firstname . " " . $surname;


$chechTOdayDate = date("Y-m-d");

$dayForPay = 10;


 

$checkMonthForZero = 12;

$checkYearForZero = date("Y")-1;



if ($last_month_contributed==="" && $last_year_contributed==="") {

 $explodeDteAdded = explode("-", $date_created);

 $checkYear  = current($explodeDteAdded);
 $checkMonth  = next($explodeDteAdded);


} else {

  $monthForPay = $last_month_contributed+2;

  if ($monthForPay<=9) {

    $monthForPay = "0".$monthForPay;
  } else {
    $monthForPay = $monthForPay;

  }

  $checkYear = $last_year_contributed;
  $checkMonth = $monthForPay;
  
}



if ($checkMonth!==0) {



  if ($checkMonth<=12) {

  // $realDateFOrPayment = date("Y-$checkMonth-$dayForPay");

  $realDateFOrPayment = "$checkYear-$checkMonth-$dayForPay";

    
  } else {
    

    // $addOneToYear = date("Y")+1;
    $checkYear +=1;
    $addOneToMonth = "02" ;

  $realDateFOrPayment = "$checkYear-$addOneToMonth-$dayForPay";


  }
  



  
} else {




  $realDateFOrPayment = "$checkYearForZero-$checkMonthForZero-$dayForPay";


}



$penAInterest = 0.05;
$penaltyContiAMount = $penAInterest * $contribution_amount;




if ( ($chechTOdayDate > $realDateFOrPayment ) && $total_contribution_made>0 ) {
  $payThisAmountAsCOntri = $penaltyContiAMount + $contribution_amount;

  $penaltyContiAMount = $penaltyContiAMount;
  
} else {
  $payThisAmountAsCOntri = $contribution_amount;

  $penaltyContiAMount = "0";
}



/*----------------------check for last month contribution func--------------------*/




if ($last_month_contributed==="") {
  $getMonthInWords = 'Has not start contributing';
} else {
  $getMonthInWords = $last_month_contributed;
}








if ($last_month_contributed === "01") {

  $getMonthInWords = "January";
}


if ($last_month_contributed === "02") {

  $getMonthInWords = "February";
}


if ($last_month_contributed === "03") {

  $getMonthInWords = "March";
}


if ($last_month_contributed === "04") {

  $getMonthInWords = "April";
}

if ($last_month_contributed === "05") {

  $getMonthInWords = "May";
}

if ($last_month_contributed === "06") {

  $getMonthInWords = "June";
}

if ($last_month_contributed === "07") {

  $getMonthInWords = "July";
}

if ($last_month_contributed === "08") {

  $getMonthInWords = "August";
}

if ($last_month_contributed === "09") {

  $getMonthInWords = "September";
}

if ($last_month_contributed === "10") {

  $getMonthInWords = "October";
}

if ($last_month_contributed === "11") {

  $getMonthInWords = "November";
}

if ($last_month_contributed === "12") {

  $getMonthInWords = "December";
}



?>

<div class="page-inner">
  <!-- .page-title-bar -->
  <header class="page-title-bar"> 
    <!-- page title stuff goes here -->
    <h1 class="page-title"> Monthly Contribution Payment</h1>
    <h1 class="page-title"> LAST MONTH CONTRIBUTED :  <?php echo $getMonthInWords ?></h1>
  </header><!-- /.page-title-bar -->
  <!-- .page-section -->
  <div class="page-section">
    <!-- .section-block -->
    <div class="section-block">
      <!-- page content goes here -->
      <p> Select to make a transaction</p>
    </div><!-- /.section-block -->
  </div><!-- /.page-section -->



</div><!-- /.section-block -->
<!-- grid row -->
<div class="row">
  <!-- grid column -->
  <div class="col-lg-12">
    <!-- .card -->
    <div class="card card-fluid">


      <div class="col-lg-12">
 

       <div class="section-block text-center text-sm-left " style="margin: 30px!important;">

        <hr class="my-5">
        <!-- .visual-picker -->

        <a data-toggle="modal" data-target="#depositModal">
          <div class="visual-picker visual-picker-lg has-peek text-center " style="margin: 50px!important;">
            <!-- visual-picker input -->
            <input type="radio" id="vpr05" name="vprLG"> <!-- .visual-picker-figure -->
            <label class="visual-picker-figure" for="vpr05">
              <!-- .visual-picker-content -->
              <span class="visual-picker-content"><span class="h3 d-block">PAY </span> 
            </div><!-- /.visual-picker -->
          </a>



          <!--   <a data-toggle="modal" data-target="#statementsModal">

              <div class="visual-picker visual-picker-lg has-peek text-center" style="margin: 50px!important;">
                <input type="radio" id="vpr08" name="vprLG"> 
                <label class="visual-picker-figure" for="vpr08">
                  <span class="visual-picker-content"><span class="h3 d-block">STATEMENT</span> 
                </div>
              </a> -->


              <!-- .visual-picker -->
              <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=VIEW_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>'  ">
                <div class="visual-picker visual-picker-lg has-peek text-center" style="margin: 50px!important;">
                  <!-- visual-picker input -->
                  <input type="radio" id="vpr09" name="vprLG"> <!-- .visual-picker-figure -->
                  <label class="visual-picker-figure" for="vpr09">
                    <!-- .visual-picker-content -->
                    <span class="visual-picker-content"><span class="h3 d-block">OVERVIEW</span> 
                  </div><!-- /.visual-picker -->
                </a>


 

                <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=VIEW_MEMBER_ACTIVITIES&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> '  ">
                  <div class="visual-picker visual-picker-lg has-peek text-center" style="margin: 50px!important;">

                    <input type="radio" id="vpr10" name="vprLG"> 
                    <label class="visual-picker-figure" for="vpr10">

                      <span class="visual-picker-content"><span class="h3 d-block">ACTIVITIES</span> 
                    </div>
                  </a>



                  <a style="cursor: pointer;" onclick="window.location.href='homepage.php?CHECKER=VIEW_MEMBER_CONTRIBUTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>'  ">
                    <div class="visual-picker visual-picker-lg has-peek text-center" style="margin: 50px!important;">
                      <!-- visual-picker input -->
                      <input type="radio" id="vpr11" name="vprLG"> <!-- .visual-picker-figure -->
                      <label class="visual-picker-figure" for="vpr11">
                        <!-- .visual-picker-content -->
                        <span class="visual-picker-content"><span class="h3 d-block">CONTRIBUTION</span> 
                      </div><!-- /.visual-picker -->

                    </a>
                  </div><!-- /.section-block -->

                </div>


                <hr class="my-5">


              </div><!-- /.card -->
            </div><!-- /grid column -->
            <!-- grid column -->


          </div><!-- /grid row -->
          <hr class="my-5">


 
        </div>


        <?php 

        include 'pay_contribution_modal.php';


        // include 'member_statement_modal.php';


        ?>








  
<?php 

include '../cores/config.php';

$todayDate = date("Y-m-d"); 

$min = 1000;
$max = 9999;
$last_four_rand = rand($min, $max);


$Fromdate = date("Y-01-01");
$ToDate = date("Y-12-31");


// style=\"padding:10px 50px;font-family:Helvetica,Arial,sans-serif;font-size:16px;line-height:25px;color:#677b82;margin:0!important\" bgcolor=\"#6747c7\" align=\"center\"


 

/*-----------------------forget password-----------*/

/*------------------check if email exist-------------*/


/*------------ends check if email exist-------------*/

if ($_GET["CHECKPOST"]=="checkEmailIfitDey") {

  $resetPasclassEmail = $_POST["resetPasclass"];


  $checkExist = mysqli_query($conn, "SELECT * FROM members WHERE email='$resetPasclassEmail' AND active='yes'  ");

  if (mysqli_num_rows($checkExist)===1) {

    $fetches = mysqli_fetch_assoc($checkExist);

    $firstname = $fetches["firstname"];
    $surname = $fetches["surname"];
    $member_id = $fetches["member_id"];


    /*----------------------send email if person has email address-------------------*/

    if ($resetPasclassEmail!=="") {

      $getFullName = $firstname . " " . $surname;
      $toYear = date("Y");


      $message="<html>
      <body>




      <div style=\"padding:0;margin:0;width:100%!important;background-color:#ffffff\" bgcolor=\"#FFFFFF\">

      <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">

      <tbody><tr>
      <td bgcolor=\"#eeeeee\" align=\"center\">

      <table width=\"660\" cellspacing=\"0\" cellpadding=\"25\" border=\"0\" align=\"center\">
      <tbody><tr>
      <td align=\"center\">
      <img style=\"width:143px\" src=\"http://daakyewelfare-com.preview-domain.com/school_data/logo/1AmUwsFSik9LMYu/logo.png\" alt=\"Logo\" class=\"CToWUd\">
      </td>
      </tr>
      </tbody></table>
      </td>
      </tr>


      <tr>
      <td bgcolor=\"#eeeeee\" align=\"center\">
      <table style=\"border-top:10px solid #6747c7\" width=\"660\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
      <tbody><tr>
      <td style=\"padding:45px 50px 45px 50px\">

      <table width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
      <tbody><tr>
      <td style=\"font-size:15px;font-family:Helvetica,Arial,sans-serif;line-height:25px;color:#445566\" align=\"left\">
      <div>
      <p style=\"margin-top:0px;margin-bottom:0px\"></p><div align=\"center\"><img src=\"https://ci3.googleusercontent.com/proxy/FZ1VL3zTVIfqrLvVnb-9XjY2IYKm6gYv12dk8dHUuOc6s7czUQQY05iZLdh_hr0rW3BNznj-pBnXXFmgct6rPRQpWKc=s0-d-e1-ft#https://cdn.hostinger.com/mailer/sysv2/invite.png\" alt=\"Logo\" class=\"CToWUd a6T\" tabindex=\"0\" align=\"middle\"><div class=\"a6S\" dir=\"ltr\" style=\"opacity: 0.01; left: 620.5px; top: 276.25px;\"><div id=\":o5\" class=\"T-I J-J5-Ji aQv T-I-ax7 L3 a5q\" role=\"button\" tabindex=\"0\" aria-label=\"Download attachment \" data-tooltip-class=\"a1V\" data-tooltip=\"Download\"><div class=\"aSK J-J5-Ji aYr\"></div></div></div></div><br><br>

      Hey $getFullName <br><br>

      You requested to reset your account passwotd, Click on te button below to reset your password!!!

      <table align=\"center\">
      <tbody>
      <tr align=\"center\">
      <td style=\"padding:10px 50px;font-family:Helvetica,Arial,sans-serif;font-size:16px;line-height:25px;color:#677b82;margin:0!important\" bgcolor=\"#6747c7\" align=\"center\">
      <a href=\"www.daakyewelfare.com/188383606aedf7a3f240f5c72d082f97a2be2bb365494eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5.php?e=eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5&&f7a3f240f5c72d082f97a2be2bb365494eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5=$member_id&&MOREGET=188383606aedf7a3f240f5c72d082f97a2be2bb365494eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5eNoFwQEOgCAIAMAXmRVm2m8QodpKm7L5\"    target=\"_blank\">Reset Passwordss </a>
      </td>
      </tr>
      </tbody></table><br>

      <a onclick=\"window.open('google.com')\" > reset me </a>

      <p>
      Didnt request for password change? Notice our office through our email 
      <br>
      <a href=\"mailto:info@daakyewelfare.com\" target=\"_blank\">info@daakyewelfare.com</a>

      </p>

      <br>
      <br>

      Thanks
      </div>
      </td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>

      <table width=\"660\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
      <tbody><tr>
      <td style=\"font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;line-height:18px\" id=\"m_-4705205945908103414content-10\" align=\"center\">
      <div>
      <p style=\"margin-top:30px;margin-bottom:30px\">© 2004 - 2020 Hostinger International Ltd.</p>
      </div>
      </td>
      </tr>
      </tbody></table>

      </td>
      </tr>
      </tbody></table>
      <img alt=\"pixel\" src=\"https://ci6.googleusercontent.com/proxy/Pwg7AipkR-1z3F6htomkIjTdSsTqtgyE4HrgWSFllhLr0XuNXlqddb8rWbzmqHd_Cr-jua2IfE1fIcCkFakWb7Z0elyakxBomd1cfse36X-EQv-w-3jF_SU52zsZW2sO=s0-d-e1-ft#https://mailer.hostinger.io/o/188383606/aedf7a3f240f5c72d082f97a2be2bb36/5494\" class=\"CToWUd\"></div>

      </body>
      </html>";
      $to = $resetPasclassEmail;
      $subject = 'Password Recovery';

      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

         // More headers
      $headers .= 'From: <info@daakyewelfare.com>' . "\r\n";


      // $headers = "From: info@daakyewelfare.com\r\n";
      // $headers .= "Reply-To: info@daakyewelfare.com\r\n";
      // $headers .= "Return-Path: info@daakyewelfare.com\r\n";
      // $headers .= "BCC: info@daakyewelfare.com\r\n";


      if (mail($to, $subject, $message, $headers)) {


      }else{


        echo "errorInSendingMail";



      }

    }

    /*------------------ends send email-----------*/



  } else {

    echo "no";

  }




}





/*==========================RESET MEMBER  PASSWORD=============================*/

if ($_GET["CHECKPOST"]=="resetPasswordPostMember") {

  $getMemberID = $_POST["getMemberID"];
  $newPassword = $_POST["newPassword"];
  

  $Encry_CurrentPasswordClass = md5($newPassword);


  if (!empty($newPassword)  ) {


    if (mysqli_query($conn, "UPDATE who_can_login_in SET password='$Encry_CurrentPasswordClass',real_password='$newPassword'  WHERE username='$getMemberID' AND active='yes' LIMIT 1 " )) {

      echo "done";

    } else {
      echo "errorinupdate";
    }


  } else {

    echo "empty";
  }


}




/*----------------MEMBERSHIP-----------------*/


/*-=======================ADD MEMBER================*/

/*++++++++++++++++++++++MEMBER WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="addNewMemberWithImage") {

 $filename = $_FILES['file']['name']; 

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $GenderClass = stripcslashes(htmlentities(strip_tags($_POST["GenderClass"])));
 $DOBClass = stripcslashes(htmlentities(strip_tags($_POST["DOBClass"])));
 $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));
 $HomeTownClass = stripcslashes(htmlentities(strip_tags($_POST["HomeTownClass"])));
 $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 $mobileClass = $_POST["mobileClass"];
 $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));
 $ContributionAmount = stripcslashes(htmlentities(strip_tags($_POST["ContributionAmount"])));



 /*-------------------------------NEXT OF KIN----------------------------*/
 $NextofKin1NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1NameClass"])));
 $NextofKin1MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1MobileClass"])));
 $NextofKin1PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1PercentageClass"])));

 $NextofKin2NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2NameClass"])));
 $NextofKin2MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2MobileClass"])));
 $NextofKin2PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2PercentageClass"])));

 $NextofKin3NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3NameClass"])));
 $NextofKin3MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3MobileClass"])));
 $NextofKin3PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3PercentageClass"])));

 $NextofKin4NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4NameClass"])));
 $NextofKin4MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4MobileClass"])));
 $NextofKin4PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4PercentageClass"])));

 $NextofKin5NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5NameClass"])));
 $NextofKin5MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5MobileClass"])));
 $NextofKin5PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5PercentageClass"])));

 $NextofKin6NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6NameClass"])));
 $NextofKin6MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6MobileClass"])));
 $NextofKin6PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6PercentageClass"])));

 $NextofKin7NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7NameClass"])));
 $NextofKin7MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7MobileClass"])));
 $NextofKin7PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7PercentageClass"])));

 $NextofKin8NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8NameClass"])));
 $NextofKin8MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8MobileClass"])));
 $NextofKin8PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8PercentageClass"])));

 $NextofKin9NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9NameClass"])));
 $NextofKin9MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9MobileClass"])));
 $NextofKin9PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9PercentageClass"])));

 $NextofKin10NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10NameClass"])));
 $NextofKin10MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10MobileClass"])));
 $NextofKin10PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10PercentageClass"])));





 if (!empty($filename) && !empty($FirstnameCLass) && !empty($SurnameClass) && !empty($GenderClass)  && !empty($DOBClass) && !empty($mobileClass) && !empty($ContributionAmount) ) {

   $getFirstletter = strtoupper(substr($SurnameClass, 0,1));

   $getDOBFORID = str_replace("-", "", $DOBClass);

   $theMemberID = $getFirstletter . $getDOBFORID . $last_four_rand;

   $encryprMemberID = md5($theMemberID);

   $dated = date("jS F, Y");

   $password = md5($theMemberID);


   $checkExist = mysqli_query($conn, "SELECT member_id FROM members WHERE member_id='$theMemberID' AND active='yes'  ");

   if (mysqli_num_rows($checkExist)===1) {
    echo "Exist";

  } else {


    if((($_FILES["file"] ["type"] == "image/jpeg") || ($_FILES["file"] ["type"] == "image/png"))&&(@$_FILES["file"]["size"] < 5242880)) //5 Megabyte
    {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../Datas/members_datas/$rand_dir_name");


      move_uploaded_file(@$_FILES["file"]["tmp_name"],"../Datas/members_datas/$rand_dir_name/".$_FILES["file"]["name"]);
      
      $profile_pic_name = @$_FILES["file"]["name"];

      
      if ( mysqli_query($conn, "INSERT INTO members (
        member_id,
        member_id_encrypt,
        password,
        firstname,
        surname,
        residencial_address,
        postal_address,
        place_of_work,
        home_town, 
        email,
        telephone,
        dob,
        gender,
        marital_status,
        contribution_amount,
        image,
        kin_1_name,
        kin_1_mobile,
        kin_1_percent,
        kin_2_name,
        kin_2_mobile,
        kin_2_percent,
        kin_3_name, 
        kin_3_mobile,
        kin_3_percent,
        kin_4_name,
        kin_4_mobile,
        kin_4_percent,
        kin_5_name,
        kin_5_mobile,
        kin_5_percent,
        kin_6_name,
        kin_6_mobile,
        kin_6_percent,
        kin_7_name,
        kin_7_mobile,
        kin_7_percent,
        kin_8_name,
        kin_8_mobile,
        kin_8_percent,
        kin_9_name,
        kin_9_mobile,
        kin_9_percent,
        kin_10_name,
        kin_10_mobile,
        kin_10_percent,
        staff




        ) VALUES (

        '$theMemberID',
        '$encryprMemberID',
        '$password',
        '$FirstnameCLass',
        '$SurnameClass',
        '$ResidenceAddressClass',
        '$PostalAddressClass',
        '$PlaceOfWorkClass',
        '$HomeTownClass',
        '$EmailClass',
        '$mobileClass',
        '$DOBClass',
        '$GenderClass',
        '$MaritalStatusClass',
        '$ContributionAmount',
        '$rand_dir_name/$profile_pic_name',
        '$NextofKin1NameClass',
        '$NextofKin1MobileClass',
        '$NextofKin1PercentageClass',
        '$NextofKin2NameClass',
        '$NextofKin2MobileClass',
        '$NextofKin2PercentageClass',
        '$NextofKin3NameClass',
        '$NextofKin3MobileClass',
        '$NextofKin3PercentageClass',
        '$NextofKin4NameClass',
        '$NextofKin4MobileClass',
        '$NextofKin4PercentageClass',
        '$NextofKin5NameClass',
        '$NextofKin5MobileClass',
        '$NextofKin5PercentageClass',
        '$NextofKin6NameClass',
        '$NextofKin6MobileClass',
        '$NextofKin6PercentageClass',
        '$NextofKin7NameClass',
        '$NextofKin7MobileClass',
        '$NextofKin7PercentageClass',
        '$NextofKin8NameClass',
        '$NextofKin8MobileClass',
        '$NextofKin8PercentageClass',
        '$NextofKin9NameClass',
        '$NextofKin9MobileClass',
        '$NextofKin9PercentageClass',
        '$NextofKin10NameClass',
        '$NextofKin10MobileClass',
        '$NextofKin10PercentageClass',
        '$login_session'

      )")) {



       $type = 2;
       $confirm = "yes";

       mysqli_query($conn, "INSERT INTO who_can_login_in (username,password,real_password,type,confirm,done_by) VALUES('$theMemberID','$password','$theMemberID','$type','$confirm','$login_session')");



       $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

       $getdac3 = mysqli_fetch_assoc($stf);

       $staffID = $getdac3["staffID"];


       $dated = date("jS F, Y");
       $activityType = "Member Added";
       $MemberDescription = "Was added to the Members list";
       $StaffDescription = "$theMemberID Was added to the Members list By : $login_session";



       mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$theMemberID','$activityType','$MemberDescription','$dated','$login_session')");

       mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

       echo "done";



       /*----------------------send email if person has email address-------------------*/

       if ($EmailClass!=="") {

        $getFullName = $SurnameClass . " " . $FirstnameCLass;
        $toYear = date("Y");


        $message="<html>
        <body>

        <div style=\"padding:0;margin:0;width:100%!important;background-color:#ffffff\" bgcolor=\"#FFFFFF\">

        <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">

        <tbody><tr>
        <td bgcolor=\"#eeeeee\" align=\"center\">

        <table width=\"660\" cellspacing=\"0\" cellpadding=\"25\" border=\"0\" align=\"center\">
        <tbody><tr>
        <td align=\"center\">
        <img style=\"width:143px\" src=\"http://daakyewelfare-com.preview-domain.com/school_data/logo/1AmUwsFSik9LMYu/logo.png\" alt=\"Logo\" class=\"CToWUd\">
        </td>
        </tr>
        </tbody></table>
        </td>
        </tr>


        <tr>
        <td bgcolor=\"#eeeeee\" align=\"center\">
        <table style=\"border-top:10px solid #6747c7\" width=\"660\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
        <tbody><tr>
        <td style=\"padding:45px 50px 45px 50px\">

        <table width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
        <tbody><tr>
        <td style=\"font-size:15px;font-family:Helvetica,Arial,sans-serif;line-height:25px;color:#445566\" align=\"left\">
        <div>
        <p style=\"margin-top:0px;margin-bottom:0px\"></p><div align=\"center\"><img src=\"https://ci3.googleusercontent.com/proxy/FZ1VL3zTVIfqrLvVnb-9XjY2IYKm6gYv12dk8dHUuOc6s7czUQQY05iZLdh_hr0rW3BNznj-pBnXXFmgct6rPRQpWKc=s0-d-e1-ft#https://cdn.hostinger.com/mailer/sysv2/invite.png\" alt=\"Logo\" class=\"CToWUd a6T\" tabindex=\"0\" align=\"middle\"><div class=\"a6S\" dir=\"ltr\" style=\"opacity: 0.01; left: 620.5px; top: 276.25px;\"><div id=\":o5\" class=\"T-I J-J5-Ji aQv T-I-ax7 L3 a5q\" role=\"button\" tabindex=\"0\" aria-label=\"Download attachment \" data-tooltip-class=\"a1V\" data-tooltip=\"Download\"><div class=\"aSK J-J5-Ji aYr\"></div></div></div></div><br><br>

        Hey $getFullName! <br><br>

        <strong><a href=\"mailto:ohenebadac@gmail.com\" target=\"_blank\"></a></strong> You have Successfully registered as Daakye Welfare Member



        <br>
        <br>

        Please Below are your <b>Username and your </b> <b>Password</b> <br> We recommend that you change your password as soon as you login for security purpose!!!

        <br>
        <br>

        <b>Username : $theMemberID <br><br>
        <b>Password : $theMemberID <br>
        </b>
        </p>
        <p>
        </p>

        Login At  <a href=\"http://daakyewelfare-com.preview-domain.com/login.php\" target=\"_blank\"> daakyewelfare.com</a> <br><br> Thank You.  Have a nice day
        </div>
        </td>
        </tr>
        </tbody></table>
        </td>
        </tr>
        </tbody></table>

        <table width=\"660\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
        <tbody><tr>
        <td style=\"font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;line-height:18px\" id=\"m_-4705205945908103414content-10\" align=\"center\">
        <div>
        <p style=\"margin-top:30px;margin-bottom:30px\">© 2015 - $toYear Daakye Welfare.</p>
        </div>
        </td>
        </tr>
        </tbody></table>

        </td>
        </tr>
        </tbody></table>
        <img alt=\"pixel\" src=\"https://ci6.googleusercontent.com/proxy/Pwg7AipkR-1z3F6htomkIjTdSsTqtgyE4HrgWSFllhLr0XuNXlqddb8rWbzmqHd_Cr-jua2IfE1fIcCkFakWb7Z0elyakxBomd1cfse36X-EQv-w-3jF_SU52zsZW2sO=s0-d-e1-ft#https://mailer.hostinger.io/o/188383606/aedf7a3f240f5c72d082f97a2be2bb36/5494\" class=\"CToWUd\"></div>

        </body>
        </html>";
        $to = $EmailClass;
        $subject = 'Successfully Registerd';

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

         // More headers
            // $headers .= 'From: <ohenebadac@gmail.com.com>' . "\r\n";


        if (mail($to, $subject, $message, $headers)) {


        }else{


          echo "errorInSendingMail";



        }

      }

      /*------------------ends send email-----------*/



    } else {
      echo "Error";
    }




  }else{
    $profile_pic_name = "";
    $rand_dir_name = "";


    echo "imageError";


  }


}

} else {
 echo "empty";
}


}



/*++++++++++++++++++++++MEMBER WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="addNewMemberWithNoImage") {

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $GenderClass = stripcslashes(htmlentities(strip_tags($_POST["GenderClass"])));
 $DOBClass = stripcslashes(htmlentities(strip_tags($_POST["DOBClass"])));
 $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));
 $HomeTownClass = stripcslashes(htmlentities(strip_tags($_POST["HomeTownClass"])));
 $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 $mobileClass = $_POST["mobileClass"];
 $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));
 $ContributionAmount = stripcslashes(htmlentities(strip_tags($_POST["ContributionAmount"])));



 /*-------------------------------NEXT OF KIN----------------------------*/
 $NextofKin1NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1NameClass"])));
 $NextofKin1MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1MobileClass"])));
 $NextofKin1PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1PercentageClass"])));

 $NextofKin2NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2NameClass"])));
 $NextofKin2MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2MobileClass"])));
 $NextofKin2PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2PercentageClass"])));

 $NextofKin3NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3NameClass"])));
 $NextofKin3MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3MobileClass"])));
 $NextofKin3PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3PercentageClass"])));

 $NextofKin4NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4NameClass"])));
 $NextofKin4MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4MobileClass"])));
 $NextofKin4PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4PercentageClass"])));

 $NextofKin5NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5NameClass"])));
 $NextofKin5MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5MobileClass"])));
 $NextofKin5PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5PercentageClass"])));

 $NextofKin6NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6NameClass"])));
 $NextofKin6MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6MobileClass"])));
 $NextofKin6PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6PercentageClass"])));

 $NextofKin7NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7NameClass"])));
 $NextofKin7MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7MobileClass"])));
 $NextofKin7PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7PercentageClass"])));

 $NextofKin8NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8NameClass"])));
 $NextofKin8MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8MobileClass"])));
 $NextofKin8PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8PercentageClass"])));

 $NextofKin9NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9NameClass"])));
 $NextofKin9MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9MobileClass"])));
 $NextofKin9PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9PercentageClass"])));

 $NextofKin10NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10NameClass"])));
 $NextofKin10MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10MobileClass"])));
 $NextofKin10PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10PercentageClass"])));




 if (!empty($FirstnameCLass) && !empty($SurnameClass) && !empty($GenderClass)  && !empty($DOBClass) && !empty($mobileClass) && !empty($ContributionAmount)) {

   $getFirstletter = strtoupper(substr($SurnameClass, 0,1));

   $getDOBFORID = str_replace("-", "", $DOBClass);

   $theMemberID = $getFirstletter . $getDOBFORID . $last_four_rand;

   $encryprMemberID = md5($theMemberID);

   $dated = date("jS F, Y");

   $password = md5($theMemberID);



   $checkExist = mysqli_query($conn, "SELECT member_id FROM members WHERE member_id='$theMemberID' AND active='yes'  ");

   if (mysqli_num_rows($checkExist)===1) {
    echo "Exist";

  } else {

    if ( mysqli_query($conn, "INSERT INTO members (
      member_id,
      member_id_encrypt,
      password,
      firstname,
      surname,
      residencial_address,
      postal_address,
      place_of_work,
      home_town,
      email,
      telephone,
      dob,
      gender,
      marital_status,
      contribution_amount,
      kin_1_name,
      kin_1_mobile,
      kin_1_percent,
      kin_2_name,
      kin_2_mobile,
      kin_2_percent,
      kin_3_name,
      kin_3_mobile,
      kin_3_percent,
      kin_4_name,
      kin_4_mobile,
      kin_4_percent,
      kin_5_name,
      kin_5_mobile,
      kin_5_percent,
      kin_6_name,
      kin_6_mobile,
      kin_6_percent,
      kin_7_name,
      kin_7_mobile,
      kin_7_percent,
      kin_8_name,
      kin_8_mobile,
      kin_8_percent,
      kin_9_name,
      kin_9_mobile,
      kin_9_percent,
      kin_10_name,
      kin_10_mobile,
      kin_10_percent,
      staff




      ) VALUES (

      '$theMemberID',
      '$encryprMemberID',
      '$password',
      '$FirstnameCLass',
      '$SurnameClass',
      '$ResidenceAddressClass',
      '$PostalAddressClass',
      '$PlaceOfWorkClass',
      '$HomeTownClass',
      '$EmailClass',
      '$mobileClass',
      '$DOBClass',
      '$GenderClass',
      '$MaritalStatusClass',
      '$ContributionAmount',
      '$NextofKin1NameClass',
      '$NextofKin1MobileClass',
      '$NextofKin1PercentageClass',
      '$NextofKin2NameClass',
      '$NextofKin2MobileClass',
      '$NextofKin2PercentageClass',
      '$NextofKin3NameClass',
      '$NextofKin3MobileClass',
      '$NextofKin3PercentageClass',
      '$NextofKin4NameClass',
      '$NextofKin4MobileClass',
      '$NextofKin4PercentageClass',
      '$NextofKin5NameClass',
      '$NextofKin5MobileClass',
      '$NextofKin5PercentageClass',
      '$NextofKin6NameClass',
      '$NextofKin6MobileClass',
      '$NextofKin6PercentageClass',
      '$NextofKin7NameClass',
      '$NextofKin7MobileClass',
      '$NextofKin7PercentageClass',
      '$NextofKin8NameClass',
      '$NextofKin8MobileClass',
      '$NextofKin8PercentageClass',
      '$NextofKin9NameClass',
      '$NextofKin9MobileClass',
      '$NextofKin9PercentageClass',
      '$NextofKin10NameClass',
      '$NextofKin10MobileClass',
      '$NextofKin10PercentageClass',
      '$login_session'

    )")) {



     $type = 2;
     $confirm = "yes";

     mysqli_query($conn, "INSERT INTO who_can_login_in (username,password,real_password,type,confirm,done_by) VALUES('$theMemberID','$password','$theMemberID','$type','$confirm','$login_session')");



     $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

     $getdac3 = mysqli_fetch_assoc($stf);

     $staffID = $getdac3["staffID"];


     $dated = date("jS F, Y");
     $activityType = "Member Added";
     $MemberDescription = "Was added to the Members list";
     $StaffDescription = "$theMemberID Was added to the Members list By : $login_session";



     mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$theMemberID','$activityType','$MemberDescription','$dated','$login_session')");

     mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

     echo "done";




     /*----------------------send email if person has email address-------------------*/

     if ($EmailClass!=="") {

      $getFullName = $SurnameClass . " " . $FirstnameCLass;
      $toYear = date("Y");


      $message="<html>
      <body>

      <div style=\"padding:0;margin:0;width:100%!important;background-color:#ffffff\" bgcolor=\"#FFFFFF\">

      <table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">

      <tbody><tr>
      <td bgcolor=\"#eeeeee\" align=\"center\">

      <table width=\"660\" cellspacing=\"0\" cellpadding=\"25\" border=\"0\" align=\"center\">
      <tbody><tr>
      <td align=\"center\">
      <img style=\"width:143px\" src=\"http://daakyewelfare-com.preview-domain.com/school_data/logo/1AmUwsFSik9LMYu/logo.png\" alt=\"Logo\" class=\"CToWUd\">
      </td>
      </tr>
      </tbody></table>
      </td>
      </tr>


      <tr>
      <td bgcolor=\"#eeeeee\" align=\"center\">
      <table style=\"border-top:10px solid #6747c7\" width=\"660\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
      <tbody><tr>
      <td style=\"padding:45px 50px 45px 50px\">

      <table width=\"600\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" bgcolor=\"#FFFFFF\" align=\"center\">
      <tbody><tr>
      <td style=\"font-size:15px;font-family:Helvetica,Arial,sans-serif;line-height:25px;color:#445566\" align=\"left\">
      <div>
      <p style=\"margin-top:0px;margin-bottom:0px\"></p><div align=\"center\"><img src=\"https://ci3.googleusercontent.com/proxy/FZ1VL3zTVIfqrLvVnb-9XjY2IYKm6gYv12dk8dHUuOc6s7czUQQY05iZLdh_hr0rW3BNznj-pBnXXFmgct6rPRQpWKc=s0-d-e1-ft#https://cdn.hostinger.com/mailer/sysv2/invite.png\" alt=\"Logo\" class=\"CToWUd a6T\" tabindex=\"0\" align=\"middle\"><div class=\"a6S\" dir=\"ltr\" style=\"opacity: 0.01; left: 620.5px; top: 276.25px;\"><div id=\":o5\" class=\"T-I J-J5-Ji aQv T-I-ax7 L3 a5q\" role=\"button\" tabindex=\"0\" aria-label=\"Download attachment \" data-tooltip-class=\"a1V\" data-tooltip=\"Download\"><div class=\"aSK J-J5-Ji aYr\"></div></div></div></div><br><br>

      Hey $getFullName! <br><br>

      <strong><a href=\"mailto:ohenebadac@gmail.com\" target=\"_blank\"></a></strong> You have Successfully registered as Daakye Welfare Member



      <br>
      <br>

      Please Below are your <b>Username and your </b> <b>Password</b> <br> We recommend that you change your password as soon as you login for security purpose!!!

      <br>
      <br>

      <b>Username : $theMemberID <br><br>
      <b>Password : $theMemberID <br>
      </b>
      </p>
      <p>
      </p>

      Login At  <a href=\"http://daakyewelfare-com.preview-domain.com/login.php\" target=\"_blank\"> daakyewelfare.com</a> <br><br> Thank You.  Have a nice day
      </div>
      </td>
      </tr>
      </tbody></table>
      </td>
      </tr>
      </tbody></table>

      <table width=\"660\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\">
      <tbody><tr>
      <td style=\"font-family:Arial,Helvetica,sans-serif;color:#666666;font-size:12px;line-height:18px\" id=\"m_-4705205945908103414content-10\" align=\"center\">
      <div>
      <p style=\"margin-top:30px;margin-bottom:30px\">© 2015 - $toYear Daakye Welfare.</p>
      </div>
      </td>
      </tr>
      </tbody></table>

      </td>
      </tr>
      </tbody></table>
      <img alt=\"pixel\" src=\"https://ci6.googleusercontent.com/proxy/Pwg7AipkR-1z3F6htomkIjTdSsTqtgyE4HrgWSFllhLr0XuNXlqddb8rWbzmqHd_Cr-jua2IfE1fIcCkFakWb7Z0elyakxBomd1cfse36X-EQv-w-3jF_SU52zsZW2sO=s0-d-e1-ft#https://mailer.hostinger.io/o/188383606/aedf7a3f240f5c72d082f97a2be2bb36/5494\" class=\"CToWUd\"></div>

      </body>
      </html>";
      $to = $EmailClass;
      $subject = 'Successfully Registerd';

      $headers = "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

         // More headers
            // $headers .= 'From: <ohenebadac@gmail.com.com>' . "\r\n";


      if (mail($to, $subject, $message, $headers)) {


      }else{


        echo "errorInSendingMail";



      }

    }

    /*------------------ends send email-----------*/



  } else {
    echo "Error";
  }



}

} else {
 echo "empty";
}


}

/*-=======================ENDS ADD MEMBER================*/







/*-=======================EDIT MEMBER================*/

/*++++++++++++++++++++++MEMBER WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="editMemberWithImage") {

 $filename = $_FILES['file']['name'];

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));
 $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 $mobileClass = $_POST["mobileClass"];
 $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));

 $ContributionAmount = stripcslashes(htmlentities(strip_tags($_POST["ContributionAmount"])));



 /*-------------------------------NEXT OF KIN----------------------------*/
 $NextofKin1NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1NameClass"])));
 $NextofKin1MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1MobileClass"])));
 $NextofKin1PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1PercentageClass"])));

 $NextofKin2NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2NameClass"])));
 $NextofKin2MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2MobileClass"])));
 $NextofKin2PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2PercentageClass"])));

 $NextofKin3NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3NameClass"])));
 $NextofKin3MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3MobileClass"])));
 $NextofKin3PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3PercentageClass"])));

 $NextofKin4NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4NameClass"])));
 $NextofKin4MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4MobileClass"])));
 $NextofKin4PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4PercentageClass"])));

 $NextofKin5NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5NameClass"])));
 $NextofKin5MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5MobileClass"])));
 $NextofKin5PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5PercentageClass"])));

 $NextofKin6NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6NameClass"])));
 $NextofKin6MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6MobileClass"])));
 $NextofKin6PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6PercentageClass"])));

 $NextofKin7NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7NameClass"])));
 $NextofKin7MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7MobileClass"])));
 $NextofKin7PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7PercentageClass"])));

 $NextofKin8NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8NameClass"])));
 $NextofKin8MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8MobileClass"])));
 $NextofKin8PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8PercentageClass"])));

 $NextofKin9NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9NameClass"])));
 $NextofKin9MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9MobileClass"])));
 $NextofKin9PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9PercentageClass"])));

 $NextofKin10NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10NameClass"])));
 $NextofKin10MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10MobileClass"])));
 $NextofKin10PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10PercentageClass"])));


 $id = $_POST["id"];




 if (!empty($filename) && !empty($FirstnameCLass) && !empty($SurnameClass)  && !empty($mobileClass) ) {


    if((($_FILES["file"] ["type"] == "image/jpeg") || ($_FILES["file"] ["type"] == "image/png"))&&(@$_FILES["file"]["size"] < 5242880)) //5 Megabyte
    {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../Datas/members_datas/$rand_dir_name");


      move_uploaded_file(@$_FILES["file"]["tmp_name"],"../Datas/members_datas/$rand_dir_name/".$_FILES["file"]["name"]);
      
      $profile_pic_name = @$_FILES["file"]["name"];

      
      if ( mysqli_query($conn, "UPDATE members SET 


        firstname='$FirstnameCLass',
        surname='$SurnameClass',
        residencial_address='$ResidenceAddressClass',
        postal_address='$PostalAddressClass',
        place_of_work='$PlaceOfWorkClass',
        email='$EmailClass',telephone='$mobileClass',
        marital_status='$MaritalStatusClass',
        contribution_amount='$ContributionAmount',
        image='$rand_dir_name/$profile_pic_name'
        -- kin_1_name = '$NextofKin1NameClass',
        -- kin_1_mobile = '$NextofKin1MobileClass',
        -- kin_1_percent = '$NextofKin1PercentageClass',
        -- kin_2_name = '$NextofKin2NameClass',
        -- kin_2_mobile = '$NextofKin2MobileClass',
        -- kin_2_percent = '$NextofKin2PercentageClass',
        -- kin_3_name = '$NextofKin3NameClass',
        -- kin_3_mobile = '$NextofKin3MobileClass',
        -- kin_3_percent = '$NextofKin3PercentageClass',
        -- kin_4_name = '$NextofKin4NameClass',
        -- kin_4_mobile = '$NextofKin4MobileClass',
        -- kin_4_percent = '$NextofKin4PercentageClass',
        -- kin_5_name = '$NextofKin5NameClass',
        -- kin_5_mobile = '$NextofKin5MobileClass',
        -- kin_5_percent = '$NextofKin5PercentageClass',
        -- kin_6_name = '$NextofKin6NameClass',
        -- kin_6_mobile = '$NextofKin6MobileClass',
        -- kin_6_percent = '$NextofKin6PercentageClass',
        -- kin_7_name = '$NextofKin7NameClass',
        -- kin_7_mobile = '$NextofKin7MobileClass',
        -- kin_7_percent = '$NextofKin7PercentageClass',
        -- kin_8_name = '$NextofKin8NameClass',
        -- kin_8_mobile = '$NextofKin8MobileClass',
        -- kin_8_percent = '$NextofKin8PercentageClass',
        -- kin_9_name = '$NextofKin9NameClass',
        -- kin_9_mobile = '$NextofKin9MobileClass',
        -- kin_9_percent = '$NextofKin9PercentageClass',
        -- kin_10_name = '$NextofKin10NameClass',
        -- kin_10_mobile = '$NextofKin10MobileClass',
        -- kin_10_percent = '$NextofKin10PercentageClass'


        WHERE member_id='$id' AND active='yes' LIMIT 1 ")) {



        $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

        $getdac3 = mysqli_fetch_assoc($stf);

        $staffID = $getdac3["staffID"];





        $dated = date("jS F, Y");
        $activityType = "Member infomation updated";
        $MemberDescription = "Informations was updated";
        $StaffDescription = "$id info Was updated  By :  $login_session";



        mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$id','$activityType','$MemberDescription','$dated','$login_session')");

        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

        echo "done";


      } else {
        echo "Error";
      }




    }else{
      $profile_pic_name = "";
      $rand_dir_name = "";


      echo "imageError";


    }



  } else {
   echo "empty";
 }


}
/*---------------------ENDS WITH IMAGE==========*/



/*++++++++++++++++++++++MEMBER WITH no IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="editMemberWithNoImage") {

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));
 $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 $mobileClass = $_POST["mobileClass"];
 $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));

 $ContributionAmount = stripcslashes(htmlentities(strip_tags($_POST["ContributionAmount"])));


 /*-------------------------------NEXT OF KIN----------------------------*/
 $NextofKin1NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1NameClass"])));
 $NextofKin1MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1MobileClass"])));
 $NextofKin1PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1PercentageClass"])));

 $NextofKin2NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2NameClass"])));
 $NextofKin2MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2MobileClass"])));
 $NextofKin2PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2PercentageClass"])));

 $NextofKin3NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3NameClass"])));
 $NextofKin3MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3MobileClass"])));
 $NextofKin3PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3PercentageClass"])));

 $NextofKin4NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4NameClass"])));
 $NextofKin4MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4MobileClass"])));
 $NextofKin4PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4PercentageClass"])));

 $NextofKin5NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5NameClass"])));
 $NextofKin5MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5MobileClass"])));
 $NextofKin5PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5PercentageClass"])));

 $NextofKin6NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6NameClass"])));
 $NextofKin6MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6MobileClass"])));
 $NextofKin6PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6PercentageClass"])));

 $NextofKin7NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7NameClass"])));
 $NextofKin7MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7MobileClass"])));
 $NextofKin7PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7PercentageClass"])));

 $NextofKin8NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8NameClass"])));
 $NextofKin8MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8MobileClass"])));
 $NextofKin8PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8PercentageClass"])));

 $NextofKin9NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9NameClass"])));
 $NextofKin9MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9MobileClass"])));
 $NextofKin9PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9PercentageClass"])));

 $NextofKin10NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10NameClass"])));
 $NextofKin10MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10MobileClass"])));
 $NextofKin10PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10PercentageClass"])));


 $id = $_POST["id"];


 if (!empty($FirstnameCLass) && !empty($SurnameClass)  && !empty($mobileClass) ) {



  if ( mysqli_query($conn, "UPDATE members SET 


    firstname='$FirstnameCLass',
    surname='$SurnameClass',
    residencial_address='$ResidenceAddressClass',
    postal_address='$PostalAddressClass',
    place_of_work='$PlaceOfWorkClass',
    email='$EmailClass',telephone='$mobileClass',
    contribution_amount='$ContributionAmount',
    marital_status='$MaritalStatusClass'
        -- kin_1_name = '$NextofKin1NameClass',
        -- kin_1_mobile = '$NextofKin1MobileClass',
        -- kin_1_percent = '$NextofKin1PercentageClass',
        -- kin_2_name = '$NextofKin2NameClass',
        -- kin_2_mobile = '$NextofKin2MobileClass',
        -- kin_2_percent = '$NextofKin2PercentageClass',
        -- kin_3_name = '$NextofKin3NameClass',
        -- kin_3_mobile = '$NextofKin3MobileClass',
        -- kin_3_percent = '$NextofKin3PercentageClass',
        -- kin_4_name = '$NextofKin4NameClass',
        -- kin_4_mobile = '$NextofKin4MobileClass',
        -- kin_4_percent = '$NextofKin4PercentageClass',
        -- kin_5_name = '$NextofKin5NameClass',
        -- kin_5_mobile = '$NextofKin5MobileClass',
        -- kin_5_percent = '$NextofKin5PercentageClass',
        -- kin_6_name = '$NextofKin6NameClass',
        -- kin_6_mobile = '$NextofKin6MobileClass',
        -- kin_6_percent = '$NextofKin6PercentageClass',
        -- kin_7_name = '$NextofKin7NameClass',
        -- kin_7_mobile = '$NextofKin7MobileClass',
        -- kin_7_percent = '$NextofKin7PercentageClass',
        -- kin_8_name = '$NextofKin8NameClass',
        -- kin_8_mobile = '$NextofKin8MobileClass',
        -- kin_8_percent = '$NextofKin8PercentageClass',
        -- kin_9_name = '$NextofKin9NameClass',
        -- kin_9_mobile = '$NextofKin9MobileClass',
        -- kin_9_percent = '$NextofKin9PercentageClass',
        -- kin_10_name = '$NextofKin10NameClass',
        -- kin_10_mobile = '$NextofKin10MobileClass',
        -- kin_10_percent = '$NextofKin10PercentageClass'


        WHERE member_id='$id' AND active='yes' LIMIT 1 ")) {



    $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

    $getdac3 = mysqli_fetch_assoc($stf);

    $staffID = $getdac3["staffID"];


    $dated = date("jS F, Y");
    $activityType = "Member infomation updated";
    $MemberDescription = "Informations was updated";
    $StaffDescription = "$id info Was updated  By :  $login_session";



    mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$id','$activityType','$MemberDescription','$dated','$login_session')");

    mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

    echo "done";


  } else {
    echo "Error";
  }

} else {
 echo "empty";
}


}









/*-------------------------- ADD ANOTHER NEXT OF KIN------------------*/

if ($_GET["CHECKPOST"]=="addAnotherNextOfKin") {

 /*-------------------------------NEXT OF KIN----------------------------*/
 $getMemberID = $_POST["getMemberID"];
 $NextofKin1NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1NameClass"])));
 $NextofKin1MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1MobileClass"])));
 $NextofKin1PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1PercentageClass"])));
 $NextofKin2NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2NameClass"])));
 $NextofKin2MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2MobileClass"])));
 $NextofKin2PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2PercentageClass"])));
 $NextofKin3NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3NameClass"])));
 $NextofKin3MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3MobileClass"])));
 $NextofKin3PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3PercentageClass"])));
 $NextofKin4NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4NameClass"])));
 $NextofKin4MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4MobileClass"])));
 $NextofKin4PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4PercentageClass"])));
 $NextofKin5NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5NameClass"])));
 $NextofKin5MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5MobileClass"])));
 $NextofKin5PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5PercentageClass"])));
 $NextofKin6NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6NameClass"])));
 $NextofKin6MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6MobileClass"])));
 $NextofKin6PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6PercentageClass"])));
 $NextofKin7NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7NameClass"])));
 $NextofKin7MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7MobileClass"])));
 $NextofKin7PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7PercentageClass"])));
 $NextofKin8NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8NameClass"])));
 $NextofKin8MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8MobileClass"])));
 $NextofKin8PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8PercentageClass"])));
 $NextofKin9NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9NameClass"])));
 $NextofKin9MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9MobileClass"])));
 $NextofKin9PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9PercentageClass"])));
 $NextofKin10NameClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10NameClass"])));
 $NextofKin10MobileClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10MobileClass"])));
 $NextofKin10PercentageClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10PercentageClass"])));


 $SELLL1 = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$getMemberID'  AND active='yes'  LIMIT 1  ");

 $getall =  mysqli_fetch_assoc($SELLL1);
 $id = $getall["id"];
 $member_id = $getall["member_id"];
 $member_id_encrypt = $getall["member_id_encrypt"];


 if ( mysqli_query($conn, "UPDATE members SET 

  kin_1_name = '$NextofKin1NameClass',
  kin_1_mobile = '$NextofKin1MobileClass',
  kin_1_percent = '$NextofKin1PercentageClass',
  kin_2_name = '$NextofKin2NameClass',
  kin_2_mobile = '$NextofKin2MobileClass',
  kin_2_percent = '$NextofKin2PercentageClass',
  kin_3_name = '$NextofKin3NameClass',
  kin_3_mobile = '$NextofKin3MobileClass',
  kin_3_percent = '$NextofKin3PercentageClass',
  kin_4_name = '$NextofKin4NameClass',
  kin_4_mobile = '$NextofKin4MobileClass',
  kin_4_percent = '$NextofKin4PercentageClass',
  kin_5_name = '$NextofKin5NameClass',
  kin_5_mobile = '$NextofKin5MobileClass',
  kin_5_percent = '$NextofKin5PercentageClass',
  kin_6_name = '$NextofKin6NameClass',
  kin_6_mobile = '$NextofKin6MobileClass',
  kin_6_percent = '$NextofKin6PercentageClass',
  kin_7_name = '$NextofKin7NameClass',
  kin_7_mobile = '$NextofKin7MobileClass',
  kin_7_percent = '$NextofKin7PercentageClass',
  kin_8_name = '$NextofKin8NameClass',
  kin_8_mobile = '$NextofKin8MobileClass',
  kin_8_percent = '$NextofKin8PercentageClass',
  kin_9_name = '$NextofKin9NameClass',
  kin_9_mobile = '$NextofKin9MobileClass',
  kin_9_percent = '$NextofKin9PercentageClass',
  kin_10_name = '$NextofKin10NameClass',
  kin_10_mobile = '$NextofKin10MobileClass',
  kin_10_percent = '$NextofKin10PercentageClass'


  WHERE member_id='$member_id' AND active='yes' LIMIT 1 ")) {



  $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

  $getdac3 = mysqli_fetch_assoc($stf);

  $staffID = $getdac3["staffID"];


  $dated = date("jS F, Y");
  $activityType = "Next of kin info was added to Member infomation";
  $MemberDescription = "Additional Member of kin added";
  $StaffDescription = "$member_id info Was updated  By :  $login_session";



  mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

  mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

  echo "done";


} else {
  echo "Error";
}


}

/*--------------------------ENDS ADD ANOTHER NEXT OF KIN------------------*/












/*-------------------------- EDIT NEXT OF KIN------------------*/

if ($_GET["CHECKPOST"]=="EditNextOfKin") {

 /*-------------------------------NEXT OF KIN----------------------------*/
 $getMemberID = $_POST["getMemberID"];

 $NextofKin1NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1NameEditClass"])));
 $NextofKin1MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1MobileEditClass"])));
 $NextofKin1PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin1PercentageEditClass"])));
 $NextofKin2NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2NameEditClass"])));
 $NextofKin2MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2MobileEditClass"])));
 $NextofKin2PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin2PercentageEditClass"])));
 $NextofKin3NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3NameEditClass"])));
 $NextofKin3MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3MobileEditClass"])));
 $NextofKin3PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin3PercentageEditClass"])));
 $NextofKin4NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4NameEditClass"])));
 $NextofKin4MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4MobileEditClass"])));
 $NextofKin4PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin4PercentageEditClass"])));
 $NextofKin5NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5NameEditClass"])));
 $NextofKin5MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5MobileEditClass"])));
 $NextofKin5PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin5PercentageEditClass"])));
 $NextofKin6NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6NameEditClass"])));
 $NextofKin6MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6MobileEditClass"])));
 $NextofKin6PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin6PercentageEditClass"])));
 $NextofKin7NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7NameEditClass"])));
 $NextofKin7MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7MobileEditClass"])));
 $NextofKin7PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin7PercentageEditClass"])));
 $NextofKin8NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8NameEditClass"])));
 $NextofKin8MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8MobileEditClass"])));
 $NextofKin8PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin8PercentageEditClass"])));
 $NextofKin9NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9NameEditClass"])));
 $NextofKin9MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9MobileEditClass"])));
 $NextofKin9PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin9PercentageEditClass"])));
 $NextofKin10NameEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10NameEditClass"])));
 $NextofKin10MobileEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10MobileEditClass"])));
 $NextofKin10PercentageEditClass = stripcslashes(htmlentities(strip_tags($_POST["NextofKin10PercentageEditClass"])));





 echo "$NextofKin1NameClass";
 echo "$NextofKin10NameClass";


 $SELLL1 = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$getMemberID'  AND active='yes'  LIMIT 1  ");

 $getall =  mysqli_fetch_assoc($SELLL1);
 $id = $getall["id"];
 $member_id = $getall["member_id"];
 $member_id_encrypt = $getall["member_id_encrypt"];

 if ( mysqli_query($conn, "UPDATE members SET 

  kin_1_name = '$NextofKin1NameEditClass',
  kin_1_mobile = '$NextofKin1MobileEditClass',
  kin_1_percent = '$NextofKin1PercentageEditClass',
  kin_2_name = '$NextofKin2NameEditClass',
  kin_2_mobile = '$NextofKin2MobileEditClass',
  kin_2_percent = '$NextofKin2PercentageEditClass',
  kin_3_name = '$NextofKin3NameEditClass',
  kin_3_mobile = '$NextofKin3MobileEditClass',
  kin_3_percent = '$NextofKin3PercentageEditClass',
  kin_4_name = '$NextofKin4NameEditClass',
  kin_4_mobile = '$NextofKin4MobileEditClass',
  kin_4_percent = '$NextofKin4PercentageEditClass',
  kin_5_name = '$NextofKin5NameEditClass',
  kin_5_mobile = '$NextofKin5MobileEditClass',
  kin_5_percent = '$NextofKin5PercentageEditClass',
  kin_6_name = '$NextofKin6NameEditClass',
  kin_6_mobile = '$NextofKin6MobileEditClass',
  kin_6_percent = '$NextofKin6PercentageEditClass',
  kin_7_name = '$NextofKin7NameEditClass',
  kin_7_mobile = '$NextofKin7MobileEditClass',
  kin_7_percent = '$NextofKin7PercentageEditClass',
  kin_8_name = '$NextofKin8NameEditClass',
  kin_8_mobile = '$NextofKin8MobileEditClass',
  kin_8_percent = '$NextofKin8PercentageEditClass',
  kin_9_name = '$NextofKin9NameEditClass',
  kin_9_mobile = '$NextofKin9MobileEditClass',
  kin_9_percent = '$NextofKin9PercentageEditClass',
  kin_10_name = '$NextofKin10NameEditClass',
  kin_10_mobile = '$NextofKin10MobileEditClass',
  kin_10_percent = '$NextofKin10PercentageEditClass'


  WHERE member_id='$member_id' AND active='yes' LIMIT 1 ")) {



  $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

  $getdac3 = mysqli_fetch_assoc($stf);

  $staffID = $getdac3["staffID"];


  $dated = date("jS F, Y");
  $activityType = "Next of kin info was updated";
  $MemberDescription = "Next of kin info was updated";
  $StaffDescription = "$member_id info Was updated  By :  $login_session";




  mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

  mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

  echo "done";


} else {
  echo "Error";
}


}

/*--------------------------EDNS  EDIT NEXT OF KIN------------------*/
































 


/*(((((((((((((((((((((((((( -- DEACTIVATE MEMBER--))))))))))))))))*/

if ($_GET["CHECKPOST"]=="deactivatememberPost") {

  $member_id = $_POST["member_id"];
  $reasons = $_POST["answers"];

  $reasons = json_decode($reasons);
  $reasons = $reasons[0]; 


  $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

  $getdac3 = mysqli_fetch_assoc($stf);

  $staffID = $getdac3["staffID"];

  $dated = date("jS F, Y");
  $activityType = "Member Deactivated";
  $MemberDescription = "Member was Deactivated from the System";
  $StaffDescription = "$member_id The Deactivation was done  By :  $login_session";




  $selStu1 = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$member_id'  LIMIT 1 ");


  $getAlls2 = mysqli_fetch_assoc($selStu1);
  $member_id_encrypt = $getAlls2["member_id_encrypt"];
  $firstname = $getAlls2["firstname"];
  $surname = $getAlls2["surname"];
  $total_contribution_made = $getAlls2["total_contribution_made"];

  $five_percent_of_total = 0.05 * $total_contribution_made;

  $realAmounttobegiven = $total_contribution_made - $five_percent_of_total;

  $companyRevenuePurpose = "5% of Member Deactivated charge";




  $selLoansIF = mysqli_query($conn, "SELECT * FROM loans_all WHERE  person_id='$member_id_encrypt' ORDER BY id DESC  LIMIT 1 ");


  $getLoanss = mysqli_fetch_assoc($selLoansIF);
  $loanssid = $getLoanss["id"];
  $amount_collected = $getLoanss["amount_collected"];
  $total_interest_rate_amount = $getLoanss["total_interest_rate_amount"];
  $interest_amount_paid = $getLoanss["interest_amount_paid"];
  $total_amount_to_pay = $getLoanss["total_amount_to_pay"];
  $amount_paid = $getLoanss["amount_paid"];
  $balance = $getLoanss["balance"];
  $guarantor1 = $getLoanss["guarantor1"];
  $guarantor2 = $getLoanss["guarantor2"];
  $date_issued = $getLoanss["date_issued"];




  $balance0 = "0";
  $months_left0 = "0";
  $finishMyPay = "yes";


  $gettheInterestOnPayment = $total_interest_rate_amount - $interest_amount_paid;
  $companyRevenuePurposenInter = "Loan Interest";

  $getNewInterestLeft = $total_interest_rate_amount - $interest_amount_paid;



  $getTheRawPrincipaAMountforPaying = $balance - $getNewInterestLeft;



  $selre = mysqli_query($conn, "SELECT id FROM loans_pay ORDER BY id DESC LIMIT 1 ");

       $getlastID = mysqli_fetch_assoc($selre);
       $ids = $getlastID["id"] + 1;

       $firstID = 1;
       $preamble = '000000';

       if (mysqli_num_rows($selre) >0) {

         if($ids<=9){
           $receiptNumber ='000000'.$ids;
         }else if($ids<=99){
           $receiptNumber ='00000'.$ids;
         }else if($ids<=999){
           $receiptNumber ='0000'.$ids;
         }else if($ids<=9999){
           $receiptNumber ='000'.$ids;
         }else if($ids<=99999){
           $receiptNumber ='00'.$ids;
         }else if($ids<=999999){
           $receiptNumber ='0'.$ids;
         }else {
           $receiptNumber =$ids;
         }
       } else {
        $receiptNumber = $preamble . $firstID;
      }




      $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

       $getdac3 = mysqli_fetch_assoc($stf);

       $staffID = $getdac3["staffID"];

       $TOdated = date("jS F, Y");


       $toMonth = date("m");
       $toYear = date("Y");
       $TOdated2 = date("Y-m-d");
       $activityType = "Loan Paid";
       $StudentDescription = " A loan of  " . $balance . " was paid";
       $StaffDescription = "A loan of " . $balance ." was paid  By : $login_session";





  if (!empty($reasons)) {


     ////////////if member has  loan/////

  if (mysqli_num_rows($selLoansIF)===1) {


    $realAmounttobegiven -=$balance;




      // if (mysqli_query($conn, "UPDATE members SET active='no' WHERE member_id='$member_id' AND active='yes' LIMIT 1 ")) {

      if (mysqli_query($conn, "UPDATE members SET active='no' WHERE member_id='$member_id' AND active='yes' LIMIT 1 ")) {




      if ($total_contribution_made==="0") {
         
      } else {

        mysqli_query($conn, "INSERT INTO company_revenue (person_id,amount,purpose,done_by) VALUES('$member_id_encrypt','$five_percent_of_total','$companyRevenuePurpose','$login_session ')");
      } 



        if ($realAmounttobegiven >= 0) {


            ///////////////////////updating total contribution to amount to be given/////
            mysqli_query($conn, "
              UPDATE members SET total_contribution_made='$realAmounttobegiven' 
              WHERE member_id='$guarantor1' 
              AND active='yes' 
              LIMIT 1 ");



      mysqli_query($conn, " UPDATE loans_all SET interest_amount_paid='$total_interest_rate_amount', amount_paid='$total_amount_to_pay', balance='$balance0', months_left='$months_left0',finish_paying='$finishMyPay',active='no'  WHERE active ='yes' AND  id='$loanssid' LIMIT 1  ");


        mysqli_query($conn, "UPDATE members SET has_loan='no' WHERE member_id_encrypt='$member_id_encrypt'  AND active='yes' LIMIT 1 ");


        mysqli_query($conn, "INSERT INTO company_revenue (person_id,loan_id,amount,purpose,purpose_date,done_by) VALUES('$member_id_encrypt','$loanssid','$gettheInterestOnPayment','$companyRevenuePurposenInter','$todayDate','$login_session ')");


        mysqli_query($conn, "INSERT INTO loan_collects (person_id,loan_id,amount,done_by) VALUES('$member_id_encrypt','$loanssid','$getTheRawPrincipaAMountforPaying','$login_session' )");


        mysqli_query($conn, "INSERT INTO loans_pay (person_id,loan_id,loan_collected_date,amount_collected,amount_paid,balance_before,month,year,date_paid,receipt_no,staff) VALUES('$member_id_encrypt','$loanssid','$date_issued','$amount_collected','$balance','$balance','$toMonth','$toYear','$TOdated','$receiptNumber','$login_session' )");


        $has_loanSlf = "yes";
        $guarantor1_amount_deductSlf = $balance / 2;
        $guarantor2_amount_deductSlf = $balance / 2;
        $amount_to_be_given = $realAmounttobegiven;


    


        mysqli_query($conn, "INSERT INTO members_deactivated (member_id,reason,amount_to_be_given,has_loan,loan_guarantor1,guarantor1_amount_deduct,loan_guarantor2,guarantor2_amount_deduct,date_added,done_by) VALUES('$member_id','$reasons','$amount_to_be_given','$has_loanSlf','$guarantor1','$guarantor1_amount_deductSlf','$guarantor2','$guarantor2_amount_deductSlf','$dated','$login_session') ");


      mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");




        } else {





        $has_loanSlf = "yes";
       
        $amount_to_be_given = $realAmounttobegiven;

        $amount_to_be_given = abs($amount_to_be_given);

         $guarantor1_amount_deductSlf = $amount_to_be_given / 2;
        $guarantor2_amount_deductSlf = $amount_to_be_given / 2;

        $amount_to_be_givenZero = "0";








           ///////////////////////SELECT  Guarator 1

        $selSMem1 = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$guarantor1'  LIMIT 1 ");
        $getMemALl1 = mysqli_fetch_assoc($selSMem1);
        $total_contribution_made1 = $getMemALl1["total_contribution_made"];


        $total_contribution_made_left1 = $total_contribution_made1 - $guarantor1_amount_deductSlf;


        
         ///////////////////////updating total contribution to amount to be given for Guarator 1/////
          mysqli_query($conn, "
            UPDATE members SET total_contribution_made='$total_contribution_made_left1' 
            WHERE member_id='$guarantor1' 
            AND active='yes' 
            LIMIT 1 ");







           ///////////////////////SELECT  Guarator 2
          $selSMem2 = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$guarantor2'  LIMIT 1 ");
        $getMemALl2 = mysqli_fetch_assoc($selSMem2);
        $total_contribution_made2 = $getMemALl2["total_contribution_made"];


        $total_contribution_made_left2 = $total_contribution_made2 - $guarantor2_amount_deductSlf;




        
         ///////////////////////updating total contribution to amount to be given for Guarator 2/////
          mysqli_query($conn, "
            UPDATE members SET total_contribution_made='$total_contribution_made_left2' 
            WHERE member_id='$guarantor2' 
            AND active='yes' 
            LIMIT 1 ");



      mysqli_query($conn, " UPDATE loans_all SET interest_amount_paid='$total_interest_rate_amount', amount_paid='$total_amount_to_pay', balance='$balance0', months_left='$months_left0',finish_paying='$finishMyPay',active='no'  WHERE active ='yes' AND  id='$loanssid' LIMIT 1  ");


        mysqli_query($conn, "UPDATE members SET has_loan='no' WHERE member_id_encrypt='$member_id_encrypt'  AND active='yes' LIMIT 1 ");


        mysqli_query($conn, "INSERT INTO company_revenue (person_id,loan_id,amount,purpose,purpose_date,done_by) VALUES('$member_id_encrypt','$loanssid','$gettheInterestOnPayment','$companyRevenuePurposenInter','$todayDate','$login_session ')");


        mysqli_query($conn, "INSERT INTO loan_collects (person_id,loan_id,amount,done_by) VALUES('$member_id_encrypt','$loanssid','$getTheRawPrincipaAMountforPaying','$login_session' )");


        mysqli_query($conn, "INSERT INTO loans_pay (person_id,loan_id,loan_collected_date,amount_collected,amount_paid,balance_before,month,year,date_paid,receipt_no,staff) VALUES('$member_id_encrypt','$loanssid','$date_issued','$amount_collected','$balance','$balance','$toMonth','$toYear','$TOdated','$receiptNumber','$login_session' )");


        

    


        mysqli_query($conn, "INSERT INTO members_deactivated (member_id,reason,amount_to_be_given,has_loan,loan_guarantor1,guarantor1_amount_deduct,loan_guarantor2,guarantor2_amount_deduct,date_added,done_by) VALUES('$member_id','$reasons','$amount_to_be_givenZero','$has_loanSlf','$guarantor1','$guarantor1_amount_deductSlf','$guarantor2','$guarantor2_amount_deductSlf','$dated','$login_session') ");


      mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");




        




        }



      

      echo "done";

      } else {
      echo "error";
      }


      


     } 

     ////////////if member has no loan/////
     else {


    if (mysqli_query($conn, "UPDATE members SET active='no' WHERE member_id='$member_id' AND active='yes' LIMIT 1 ")) {



      if ($total_contribution_made==="0") {
           
        } else {

          mysqli_query($conn, "INSERT INTO company_revenue (person_id,amount,purpose,done_by) VALUES('$member_id_encrypt','$five_percent_of_total','$companyRevenuePurpose','$login_session ')");
        }


      $has_loan = "no";
      $amount_to_be_given = $realAmounttobegiven;

      mysqli_query($conn, "INSERT INTO members_deactivated (member_id,reason,amount_to_be_given,has_loan,date_added,done_by) VALUES('$member_id','$reasons','$amount_to_be_given','$has_loan','$dated','$login_session') ");


      mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");


      echo "done";

    } else {
      echo "error";
    }



       

     }


  } else {
    echo "empty";
  }





}

/*(((((((((((((((((((((((((( -- ENDS DEACTIVATE MEMBER--))))))))))))))))*/








/*==========================CHANGE MEMBER CONTRIBUTION POST==========================*/

if ($_GET["CHECKPOST"]=="changeMemberContributionPost") {



 $getMemberID = $_POST["getMemberID"];
 $ContributionAmount = $_POST["ContributionAmount"];

 echo "$getMemberID";

 if (!empty($ContributionAmount) ) {

  if (mysqli_query($conn, "INSERT INTO member_contribution_history (member_id,amount,done_by) VALUES('$getMemberID','$ContributionAmount','$login_session') ")) {

    echo "done";

  } else {
    echo "errorinsert";
  }


} else {

  echo "empty";
}


}








////////////////////////PAY MONTHLY DUES BY MEMBER//////////////////////////////////
if ($_GET["CHECKPOST"]=="payMonthlyDuesPost") {

  if (isset($_POST["member_id"]) && isset($_POST["member_id_encrypt"]) && isset($_POST["payThisAmountAsCOntri"]) && isset($_POST["penaltyContiAMount"]) && isset($_POST["month_to_pay"]) && isset($_POST["year_to_pay"]) && isset($_POST["ownAMountPayClass"])  ) {

    $member_id = $_POST["member_id"];
    $member_id_encrypt = $_POST["member_id_encrypt"];
    $payThisAmountAsCOntri = $_POST["payThisAmountAsCOntri"];
    $penaltyContiAMount = $_POST["penaltyContiAMount"];
    $month_to_pay = $_POST["month_to_pay"];
    $year_to_pay = $_POST["year_to_pay"];
    $ownAMountPayClass = $_POST["ownAMountPayClass"];



    $SELLL1 = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id_encrypt'  AND member_id='$member_id'  AND active='yes'  LIMIT 1  ");

    $getall =  mysqli_fetch_assoc($SELLL1);
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
    $paid_reg_form = $getall["paid_reg_form"];
    $has_loan = $getall["has_loan"];
    $staff = $getall["staff"];
    $date_created = $getall["date_created"];


    $companyRevenuePurpose = "Penalty For member contribution";



    if ($month_to_pay!=="" && $year_to_pay!=="" ) {



     $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

     $getdac3 = mysqli_fetch_assoc($stf);

     $staffID = $getdac3["staffID"];

     $TOdated = date("jS F, Y");

     $TOdated2 = date("Y-m-d");
     $activityType = "Monthly Contribution Paid";
     $StudentDescription = $contribution_amount . "  was Paid for the month of " . $month_to_pay . $year_to_pay;
     $StaffDescription = "$member_id Monthly Contribution was Paid with amount of " . $contribution_amount ." By : $login_session";


     $selre = mysqli_query($conn, "SELECT id FROM members_contributions ORDER BY id DESC LIMIT 1 ");

     $getlastID = mysqli_fetch_assoc($selre);
     $ids = $getlastID["id"] + 1;

     $firstID = 1;
     $preamble = '000000';

     if (mysqli_num_rows($selre) >0) {

       if($ids<=9){
         $receiptNumber ='000000'.$ids;
       }else if($ids<=99){
         $receiptNumber ='00000'.$ids;
       }else if($ids<=999){
         $receiptNumber ='0000'.$ids;
       }else if($ids<=9999){
         $receiptNumber ='000'.$ids;
       }else if($ids<=99999){
         $receiptNumber ='00'.$ids;
       }else if($ids<=999999){
         $receiptNumber ='0'.$ids;
       }else {
         $receiptNumber =$ids;
       }
     } else {
      $receiptNumber = $preamble . $firstID;
    }




    $slExist = mysqli_query($conn, "SELECT * FROM members_contributions WHERE member_id='$member_id' AND member_id_encrypt='$member_id_encrypt' AND year='$year_to_pay' AND month='$month_to_pay' AND amount='$payThisAmountAsCOntri' AND active='yes'  ");


    if (mysqli_num_rows($slExist) > 0) {
      echo "Exist";
    } else {



      /*----------------------get deductions for interst---------------*/
      $deductInterestFromThis = $payThisAmountAsCOntri - $contribution_amount;



      if ($ownAMountPayClass==="" || $ownAMountPayClass==="0") {


        /*--------------------DO THIS WHEN NO SPECIFICATION---------------*/


        if (mysqli_query($conn, "INSERT INTO members_contributions (member_id,member_id_encrypt,year,month,amount,receipt_number,date_paid,done_by) VALUES('$member_id','$member_id_encrypt','$year_to_pay','$month_to_pay','$payThisAmountAsCOntri','$receiptNumber','$TOdated2','$login_session') ")) {


         if ($deductInterestFromThis >0) {

           mysqli_query($conn, "INSERT INTO company_revenue (person_id,loan_id,amount,purpose,purpose_date,done_by) VALUES('$member_id_encrypt','$id','$deductInterestFromThis','$companyRevenuePurpose','$last_month_contributed','$login_session ')");

           $actualMonthlyContriTODB = $payThisAmountAsCOntri - $deductInterestFromThis;

         } else {

          $actualMonthlyContriTODB = $contribution_amount;

        }

        $total_contribution_made += $actualMonthlyContriTODB;

        mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$StudentDescription','$TOdated','$login_session')");

        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$TOdated')");


        mysqli_query($conn, "UPDATE members SET total_contribution_made='$total_contribution_made' , last_month_contributed='$month_to_pay', last_year_contributed='$year_to_pay' WHERE member_id='$member_id'  AND active='yes' ");

        echo "ViewPDFS/Members/print_member_paid_contributions_receipt.php?PRINT=PRINT_MEMBER_CONTRIBUTIONS_RECEIPT&&TRUE=$member_id_encrypt&&RECEIPT=$receiptNumber";

      } else {


        echo "nonspecificationeror";

      }


    } else {



      /*--------------------DO THIS WHEN  SPECIFY AMOUNT TO PAY---------------*/

      if ($ownAMountPayClass > $deductInterestFromThis) {

        $dedcutAMountToPayFromInterest = $ownAMountPayClass - $deductInterestFromThis;


        if (mysqli_query($conn, "INSERT INTO members_contributions (member_id,member_id_encrypt,year,month,amount,receipt_number,date_paid,done_by) VALUES('$member_id','$member_id_encrypt','$year_to_pay','$month_to_pay','$ownAMountPayClass','$receiptNumber','$TOdated2','$login_session') ")) {


         if ($deductInterestFromThis > 0) {

           mysqli_query($conn, "INSERT INTO company_revenue (person_id,loan_id,amount,purpose,purpose_date,done_by) VALUES('$member_id_encrypt','$id','$penaltyContiAMount','$companyRevenuePurpose','$last_month_contributed','$login_session ')");

           $actualMonthlyContriTODB = $ownAMountPayClass - $deductInterestFromThis;

         } else {

          $actualMonthlyContriTODB = $ownAMountPayClass;

        }




        $total_contribution_made += $actualMonthlyContriTODB;

        mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$StudentDescription','$TOdated','$login_session')");

        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$TOdated')");


        mysqli_query($conn, "UPDATE members SET total_contribution_made='$total_contribution_made' , last_month_contributed='$month_to_pay', last_year_contributed='$year_to_pay' WHERE member_id='$member_id'  AND active='yes' ");



        echo "ViewPDFS/Members/print_member_paid_contributions_receipt.php?PRINT=PRINT_MEMBER_CONTRIBUTIONS_RECEIPT&&TRUE=$member_id_encrypt&&RECEIPT=$receiptNumber";

      } else {


        echo "specificationerror";

      }




    } else {

      echo "payforintersest";



    }







  }





}






}else {
  echo "empty";
}




} 

}


/*---------------ends pay monthly dues-------------------*/








////////////////////////PAY MONTHLY DUES BY MEMBER//////////////////////////////////
if ($_GET["CHECKPOST"]=="payRegistrationFeePost") {

  if (isset($_POST["memberID"])   ) {

    $memberID = $_POST["memberID"];

    $registrationFeePrice = 100;

    $companyRevenuePurpose = "Member Registration Fee";


    $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

    $getdac3 = mysqli_fetch_assoc($stf);

    $staffID = $getdac3["staffID"];

    $TOdated = date("jS F, Y");

    $TOdated2 = date("Y-m-d");
    $activityType = "Member Rgistration Fee Paid";
    $StudentDescription = $registrationFeePrice . "  was Paid as Member Rgistration Fee";
    $StaffDescription = "$memberID  - Member Registration Fee was Paid with amount of " . $registrationFeePrice ." By : $login_session";


    $selre = mysqli_query($conn, "SELECT id FROM registration_fees ORDER BY id DESC LIMIT 1 ");

    $getlastID = mysqli_fetch_assoc($selre);
    $ids = $getlastID["id"] + 1;

    $firstID = 1;
    $preamble = '000000';

    if (mysqli_num_rows($selre) >0) {

     if($ids<=9){
       $receiptNumber ='000000'.$ids;
     }else if($ids<=99){
       $receiptNumber ='00000'.$ids;
     }else if($ids<=999){
       $receiptNumber ='0000'.$ids;
     }else if($ids<=9999){
       $receiptNumber ='000'.$ids;
     }else if($ids<=99999){
       $receiptNumber ='00'.$ids;
     }else if($ids<=999999){
       $receiptNumber ='0'.$ids;
     }else {
       $receiptNumber =$ids;
     }
   } else {
    $receiptNumber = $preamble . $firstID;
  }


  $companyRevenuePurpose = "Member Registration Fee";


  $slExist = mysqli_query($conn, "SELECT * FROM registration_fees WHERE member_id='$memberID' AND active='yes'  ");


  if (mysqli_num_rows($slExist) > 0) {
    echo "Exist";
  } else {


    if (

      mysqli_query($conn, "INSERT INTO registration_fees (member_id,amount,receipt_number,done_by) VALUES('$memberID','$registrationFeePrice','$receiptNumber','$login_session') ")) {



     mysqli_query($conn, "INSERT INTO company_revenue (person_id,amount,purpose,done_by) VALUES('$memberID','$registrationFeePrice','$companyRevenuePurpose','$login_session ')");


     mysqli_query($conn, "UPDATE members SET paid_reg_form='yes' WHERE member_id_encrypt='$memberID'  AND active='yes' LIMIT 1 ");


     mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$memberID','$activityType','$StudentDescription','$TOdated','$login_session')");

     mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$TOdated')");


     echo "ViewPDFS/Members/print_member_paid_registration_fees_receipt.php?PRINT=PRINT_MEMBER_REGISTRATION_FEE_RECEIPT&&TRUE=$memberID&&RECEIPT=$receiptNumber&&AMOUNT=$registrationFeePrice";


   } else {


    echo "paymentErrors";

  }




}



} 

}


/*--------------------ends pay regfistration fee------------------*/












/*(((((((((((((((((((((((((( -- APPROVE MEMBER EDIT CONTRIBUTION POST-))))))))))))))))*/

if ($_GET["CHECKPOST"]=="approveMemberContrinbutionEdit") {

  $member_id = $_POST["member_id"];
  $amount = $_POST["amount"];


  $dated = date("jS F, Y");
  $activityType = "Change Member Contribution Approvals";
  $StudentDescription = " was Approved By Self";


  if (mysqli_query($conn, "UPDATE member_contribution_history SET confirm='yes'  WHERE member_id='$member_id' AND  amount='$amount' AND active='yes' LIMIT 1 ")) {


    mysqli_query($conn, "UPDATE members SET contribution_amount='$amount'  WHERE member_id='$member_id' AND active='yes' LIMIT 1 ");


    mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$person_id','$activityType','$StudentDescription','$TOdated','$login_session')");


  } else {
    echo "error";
  }


}    

/*(((((((((((((((((((((((((( -- ENDS APPROVE MEMBER EDIT CONTRIBUTION POST-))))))))))))))))*/



/*---------------------------------APPROVALS===================*/

/*-----------------------guarantor loans approved by guarantor 1---------------*/
 

if ($_GET["CHECKPOST"]=="approvedLoansByGuarantor1Post") {

 $loanID = $_POST["loanID"];
 $personID = $_POST["personID"];


 if (mysqli_query($conn, "UPDATE loans_all SET guarantor1_confirm='yes'  WHERE id='$loanID' AND guarantor1='$personID'  AND active='yes' LIMIT 1 " )) {


  echo "done";

} else {
  echo "errorinupdate";
}



}

/*-----------------------ends guarantor loans approved by guarantor 1---------------*/







/*-----------------------guarantor loans approved by guarantor 2---------------*/


if ($_GET["CHECKPOST"]=="approvedLoansByGuarantor2Post") {

 $loanID = $_POST["loanID"];
 $personID = $_POST["personID"];


 if (mysqli_query($conn, "UPDATE loans_all SET guarantor2_confirm='yes'  WHERE id='$loanID' AND guarantor2='$personID'  AND active='yes' LIMIT 1 " )) {

  echo "done";

} else {
  echo "errorinupdate";
}



}

/*-----------------------ends guarantor loans approved by guarantor 2---------------*/












/*----------------------------seach member to pay contributions -----------------*/


if ($_GET["CHECKPOST"]=="searchMemberbyLivePost") {


  $seachresultInput = htmlentities(strip_tags(stripcslashes($_POST["seachresultInput"])));

  if (!empty($seachresultInput)) {


   $searchStatuss = mysqli_query($conn, "SELECT * FROM members
    WHERE (`member_id` LIKE '%".$seachresultInput."%' OR `firstname` LIKE '%".$seachresultInput."%' OR `surname` LIKE '%".$seachresultInput."%' OR `telephone` LIKE '%".$seachresultInput."%' )  ");



   if(mysqli_num_rows($searchStatuss) > 0){



     while ($getall =  mysqli_fetch_assoc($searchStatuss)) {


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
      $image = $getall["image"];


      $fullname = $firstname . " " . $surname;

      if ($last_month_contributed==="") {
        $last_month_contributed = 'Has not start contributing';
      } else {
        $last_month_contributed = $last_month_contributed;
      }




      if ($image==="" || $image==="/") {

        if ($gender==="Male") {
          $image = "
          <img src=\"assets/images/customs/male.png\" >
          ";
        } else {
          $image = "
          <img src=\"assets/images/customs/female.jpg\" >
          ";
        }


      } else {

       $image = "
       <img src=\"Datas/members_datas/$image\" >
       ";


     }





     echo  "    

     <div class=\"col-lg-12\">
     <div class=\"card card-fluid\">
     <div class=\"list-group list-group-flush list-group-divider\">

     <a  onclick=\"window.location.href='homepage.php?CHECKER=PAY_MEMBER_CONTRIBUTION_SEARCHED_FOUND&&DACO=$member_id&&TRUE=$member_id_encrypt'  \" class=\"list-group-item list-group-item-action\" style=\"cursor:pointer;\">

     <div class=\"list-group-item-figure\">
     <div class=\"user-avatar\">
     $image
     </div>
     </div>

     <div class=\"list-group-item-body\">
     <h4 class=\"list-group-item-title\"> $fullname</h4>
     <p class=\"list-group-item-text text-truncate\">
     Last month payment : $last_month_contributed
     </p>
     </div>

     </a> 

     </div>
     </div>
     </div>";



   }






 }else{



 }




} else {

  /*--------------------do naothing-----------*/


}





}











/*-------------------------------------------DELETE MISTAKE PAID CONTRIBUTION-----------------------*/

/*----------------------------SEND APPROVAL BEFORE------------------------------*/

if ($_GET["CHECKPOST"]=="deleetePaidMemberContrPostForApproval") {

  $reasonEditClass = $_POST["reasonEditClass"];
  $hiddenDIEditClass = $_POST["hiddenDIEditClass"];

  $types = "contribution";


  $TOdated = date("jS F, Y");
  $activityType = "Delete Paid Contribution ";
  $StaffDescription = "You sent a deletion approval for member contribution with a reason of " . $reasonEditClass;



  if (!empty($reasonEditClass) ) {

    if (mysqli_query($conn, "INSERT INTO mistakes_payments_approval (payment_id,reason,type,done_by) VALUES('$hiddenDIEditClass','$reasonEditClass','$types','$login_session') ")) {

      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$login_session','$activityType','$StaffDescription','$TOdated')");

      echo "done";

    } else {


      echo "deletionerror";

    }








  } else {
    echo "empty";
  }




}


/*----------------ENBDS MEMBERSHIP-----------------*/





/*0-------------------approve delete paid contri by admin----------------*/

if ($_GET["CHECKPOST"]=="realDeletePaidContriByAdmin") {

  $TableID = $_POST["TableID"];
  $payment_id = $_POST["payment_id"];


  $see = mysqli_query($conn, "SELECT * FROM mistakes_payments_approval WHERE id='$TableID' AND active='yes' LIMIT 1 ");
  $Gete = mysqli_fetch_assoc($see);
  $done_by = $Gete["done_by"];





  $seeMonthandYear = mysqli_query($conn, "SELECT * FROM members_contributions WHERE id='$payment_id' AND active='yes' LIMIT 1 ");
  $Gete2 = mysqli_fetch_assoc($seeMonthandYear);
  $year = $Gete2["year"];
  $month = $Gete2["month"];
  $amountPaid = $Gete2["amount"];
  $date_created = $Gete2["date_created"];
  $member_id_encrypt = $Gete2["member_id_encrypt"];

  $new_month = $month - 1;

  if ($new_month <=9) {
    $new_month = "0".$new_month;
  } 


  if ($new_month > 9) {
    $new_month = $new_month;
  } 


  if ($new_month === "00" || $new_month === "0") {
    $new_month = "12";
    $year -=1;
  } 

  


  $seleInterest = mysqli_query($conn, "SELECT * FROM company_revenue WHERE person_id='$member_id_encrypt' AND date_added='$date_created' AND active='yes' LIMIT 1 ");
  $Gete3 = mysqli_fetch_assoc($seleInterest);
  $CompRevTabId = $Gete3["id"];
  $interestamount = $Gete3["amount"];
  $date_added = $Gete3["date_added"];

  $realContributionAmount = $amountPaid - $interestamount;

  $TOdated = date("jS F, Y");
  $activityType = "Approved Delete Paid Contribution ";
  $StaffDescription = "You Approved for deletion of Member Contribution  Deleted By " . $done_by;



  if (mysqli_query($conn, "UPDATE members_contributions SET active='no'  WHERE id='$payment_id' AND  active='yes' LIMIT 1 ")) {


    if (mysqli_num_rows($seleInterest) > 0) {

      $seleMemberCont = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id_encrypt' AND active='yes' LIMIT 1 ");
      $Gete4 = mysqli_fetch_assoc($seleMemberCont);
      $total_contribution_made = $Gete4["total_contribution_made"];

      $total_contribution_made-= $realContributionAmount;

      mysqli_query($conn, "UPDATE members SET total_contribution_made='$total_contribution_made',last_month_contributed='$new_month', last_year_contributed='$year'  WHERE member_id_encrypt='$member_id_encrypt' AND active='yes' LIMIT 1 ");


      mysqli_query($conn, "UPDATE company_revenue SET active='no'  WHERE id='$CompRevTabId' AND active='yes' LIMIT 1 ");

    } else {

     mysqli_query($conn, "UPDATE members SET last_month_contributed='$new_month', last_year_contributed='$year'  WHERE member_id_encrypt='$member_id_encrypt' AND active='yes' LIMIT 1 ");


   }


   mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$login_session','$activityType','$StaffDescription','$TOdated')");


   mysqli_query($conn, "UPDATE mistakes_payments_approval SET confirm='yes'  WHERE id='$TableID' AND active='yes' LIMIT 1 ");


   echo "done";


 } else {
  echo "error";
}


}












/*----------------CUSTOMER-----------------*/


/*-=======================ADD CUSTOMER================*/

/*++++++++++++++++++++++MEMBER WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="addNewCustomerWithImage") {

 $filename = $_FILES['file']['name'];

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $GenderClass = stripcslashes(htmlentities(strip_tags($_POST["GenderClass"])));
 $DOBClass = stripcslashes(htmlentities(strip_tags($_POST["DOBClass"])));
 $mobileClass = $_POST["mobileClass"];
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));





 // $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 // $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 // $HomeTownClass = stripcslashes(htmlentities(strip_tags($_POST["HomeTownClass"])));
 // $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 // $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));





 if (!empty($filename) && !empty($FirstnameCLass) && !empty($SurnameClass) && !empty($GenderClass) && !empty($mobileClass) ) {

   $getFirstletter = strtoupper(substr($SurnameClass, 0,1));

   // $getDOBFORID = str_replace("-", "", $DOBClass);

   $getDOBFORID = strtoupper(substr($mobileClass, 2,10));


   $theCustomerID = $getFirstletter . $getDOBFORID . $last_four_rand;

   $encryprCustomerID = md5($theCustomerID);

   $dated = date("jS F, Y");

   $password = md5($theCustomerID);


   $checkExist = mysqli_query($conn, "SELECT customer_id FROM customers WHERE customer_id='$theCustomerID' AND active='yes'  ");

   if (mysqli_num_rows($checkExist)===1) {
    echo "Exist";

  } else {


    if((($_FILES["file"] ["type"] == "image/jpeg") || ($_FILES["file"] ["type"] == "image/png"))&&(@$_FILES["file"]["size"] < 5242880)) //5 Megabyte
    {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../Datas/customers_datas/$rand_dir_name");


      move_uploaded_file(@$_FILES["file"]["tmp_name"],"../Datas/customers_datas/$rand_dir_name/".$_FILES["file"]["name"]);
      
      $profile_pic_name = @$_FILES["file"]["name"];

      
      if ( mysqli_query($conn, "INSERT INTO customers (
        customer_id,
        customer_id_encrypt,
        password,
        firstname,
        surname,
        telephone,
        dob,
        gender,
        residencial_address,
        image,
        staff
        ) 

        VALUES (
        '$theCustomerID',
        '$encryprCustomerID',
        '$password', 
        '$FirstnameCLass',
        '$SurnameClass',
        '$mobileClass',
        '$DOBClass',
        '$GenderClass',
        '$ResidenceAddressClass',
        '$rand_dir_name/$profile_pic_name',
        '$login_session' 

      )")) {





        $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

        $getdac3 = mysqli_fetch_assoc($stf);

        $staffID = $getdac3["staffID"];


        $dated = date("jS F, Y");
        $activityType = "Customer Added";
        $MemberDescription = "Was added to the Customers list";
        $StaffDescription = "$theCustomerID Was added to the Customers list By : $login_session";



        mysqli_query($conn, "INSERT INTO customer_activities (customer_id,activity_type,description,datecreated,added_by) VALUES('$theCustomerID','$activityType','$MemberDescription','$dated','$login_session')");

        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

        echo "done";


      } else {
        echo "Error";
      }




    }else{
      $profile_pic_name = "";
      $rand_dir_name = "";


      echo "imageError";


    }


  }

} else {
 echo "empty";
}


}



/*++++++++++++++++++++++CUSTOMER WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="addNewCustomerWithNoImage") {

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $GenderClass = stripcslashes(htmlentities(strip_tags($_POST["GenderClass"])));
 $DOBClass = stripcslashes(htmlentities(strip_tags($_POST["DOBClass"])));
 $mobileClass = $_POST["mobileClass"];
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));




 // $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 // $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 // $HomeTownClass = stripcslashes(htmlentities(strip_tags($_POST["HomeTownClass"])));
 // $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 // $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));



 if (!empty($FirstnameCLass) && !empty($SurnameClass) && !empty($GenderClass)  && !empty($mobileClass) ) {

  $getFirstletter = strtoupper(substr($SurnameClass, 0,1));

   // $getDOBFORID = str_replace("-", "", $DOBClass);

  $getDOBFORID = strtoupper(substr($mobileClass, 2,10));


  $theCustomerID = $getFirstletter . $getDOBFORID . $last_four_rand;

  $encryprCustomerID = md5($theCustomerID);

  $dated = date("jS F, Y");

  $password = md5($theCustomerID);



  $checkExist = mysqli_query($conn, "SELECT customer_id FROM customers WHERE customer_id='$theCustomerID' AND active='yes'  ");

  if (mysqli_num_rows($checkExist)===1) {
    echo "Exist";

  } else {

    if ( mysqli_query($conn, "INSERT INTO customers (
      customer_id,
      customer_id_encrypt,
      password,
      firstname,
      surname,
      telephone,
      dob,
      gender,
      residencial_address,
      staff
      ) 

      VALUES (
      '$theCustomerID',
      '$encryprCustomerID',
      '$password', 
      '$FirstnameCLass',
      '$SurnameClass',
      '$mobileClass',
      '$DOBClass',
      '$GenderClass',
      '$ResidenceAddressClass',
      '$login_session' 

    )")) {


      $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

      $getdac3 = mysqli_fetch_assoc($stf);

      $staffID = $getdac3["staffID"];


      $dated = date("jS F, Y");
      $activityType = "Customer Added";
      $MemberDescription = "Was added to the Customers list";
      $StaffDescription = "$theCustomerID Was added to the Customers list By : $login_session";



      mysqli_query($conn, "INSERT INTO customer_activities (customer_id,activity_type,description,datecreated,added_by) VALUES('$theCustomerID','$activityType','$MemberDescription','$dated','$login_session')");

      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

      echo "done";


    } else {
      echo "Error";
    }



  }

} else {
 echo "empty";
}


}

/*-=======================ENDS ADD CUSTOMER================*/







/*-=======================EDIT CUSTOMER================*/

/*++++++++++++++++++++++CUSTOMER WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="editCustomerWithImage") {

 $filename = $_FILES['file']['name'];

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $mobileClass = $_POST["mobileClass"];
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));


 // $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 // $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 // $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 // $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));



 $id = $_POST["id"];

 if (!empty($filename) && !empty($FirstnameCLass) && !empty($SurnameClass)  && !empty($mobileClass) ) {



    if((($_FILES["file"] ["type"] == "image/jpeg") || ($_FILES["file"] ["type"] == "image/png"))&&(@$_FILES["file"]["size"] < 5242880)) //5 Megabyte
    {
      $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
      $rand_dir_name = substr(str_shuffle($chars), 0, 15);
      mkdir("../Datas/customers_datas/$rand_dir_name");


      move_uploaded_file(@$_FILES["file"]["tmp_name"],"../Datas/customers_datas/$rand_dir_name/".$_FILES["file"]["name"]);
      
      $profile_pic_name = @$_FILES["file"]["name"];

      
      if ( mysqli_query($conn, "UPDATE customers SET 
        firstname='$FirstnameCLass',
        surname='$SurnameClass',
        residencial_address='$ResidenceAddressClass',
        -- postal_address='$PostalAddressClass',
        -- place_of_work='$PlaceOfWorkClass',
        -- email='$EmailClass',
        telephone='$mobileClass',
        -- marital_status='$MaritalStatusClass',
        image='$rand_dir_name/$profile_pic_name'
        WHERE customer_id='$id' AND active='yes' LIMIT 1 ")) {




        $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

        $getdac3 = mysqli_fetch_assoc($stf);

        $staffID = $getdac3["staffID"];





        $dated = date("jS F, Y");
        $activityType = "Customer infomation updated";
        $MemberDescription = "Informations was updated";
        $StaffDescription = "$id info Was updated  By :  $login_session";



        mysqli_query($conn, "INSERT INTO customer_activities (customer_id,activity_type,description,datecreated,added_by) VALUES('$id','$activityType','$MemberDescription','$dated','$login_session')");

        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

        echo "done";


      } else {
        echo "Error";
      }




    }else{
      $profile_pic_name = "";
      $rand_dir_name = "";


      echo "imageError";


    }



  } else {
   echo "empty";
 }


}
/*---------------------ENDS WITH IMAGE==========*/



/*++++++++++++++++++++++CUSTOMER WITH no IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="editCustomerWithNoImage") {

 $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
 $SurnameClass = stripcslashes(htmlentities(strip_tags($_POST["SurnameClass"])));
 $mobileClass = $_POST["mobileClass"];
 $ResidenceAddressClass = stripcslashes(htmlentities(strip_tags($_POST["ResidenceAddressClass"])));

 
 // $PlaceOfWorkClass = stripcslashes(htmlentities(strip_tags($_POST["PlaceOfWorkClass"])));
 // $PostalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["PostalAddressClass"])));
 // $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
 // $MaritalStatusClass = stripcslashes(htmlentities(strip_tags($_POST["MaritalStatusClass"])));



 $id = $_POST["id"];

 if (!empty($FirstnameCLass) && !empty($SurnameClass)   && !empty($mobileClass) ) {


  if ( mysqli_query($conn, "UPDATE customers SET 
    firstname='$FirstnameCLass',
    surname='$SurnameClass',
    residencial_address='$ResidenceAddressClass',
    -- postal_address='$PostalAddressClass',
    -- place_of_work='$PlaceOfWorkClass',
    -- email='$EmailClass',
    telephone='$mobileClass'
    -- marital_status='$MaritalStatusClass'
    WHERE customer_id='$id' AND active='yes' LIMIT 1 ")) {




    $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

    $getdac3 = mysqli_fetch_assoc($stf);

    $staffID = $getdac3["staffID"];





    $dated = date("jS F, Y");
    $activityType = "Customer infomation updated";
    $MemberDescription = "Informations was updated";
    $StaffDescription = "$id info Was updated  By :  $login_session";



    mysqli_query($conn, "INSERT INTO customer_activities (customer_id,activity_type,description,datecreated,added_by) VALUES('$id','$activityType','$MemberDescription','$dated','$login_session')");

    mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

    echo "done";


  } else {
    echo "Error";
  }

} else {
 echo "empty";
}


}


/*=====================ENDS EDIT CUSTOMER-------------------*/

/*----------------------------------------ENDS CUSTOMER-------------------*/











/*------------------------------------------------------LOANS-----------------------------*/


/*--------------------to customer------------*/
if ($_GET["CHECKPOST"]=="addLoansToCustomer") {


  if (isset($_POST["getIDEncrypt"]) && isset($_POST["loanAmount"]) && isset($_POST["PaymentPeriodClass"]) && isset($_POST["guarantor1Class"]) && isset($_POST["guarantor2Class"])) {

    $getIDEncrypt = $_POST["getIDEncrypt"];
    $loanAmount = $_POST["loanAmount"];
    $PaymentPeriodClass = $_POST["PaymentPeriodClass"];
    $guarantor1Class = $_POST["guarantor1Class"];
    $guarantor2Class = $_POST["guarantor2Class"];

    $STATUS = "Customer";

    $selStu = mysqli_query($conn, "SELECT * FROM customer_interest WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");

    $getAlls = mysqli_fetch_assoc($selStu);
    $id = $getAlls["id"];
    $interest_rate_db_amount = $getAlls["amount_decimal"];


    /*---------------------------calculations varibles------------------*/
    $total_interest_rate_amount = $interest_rate_db_amount * $PaymentPeriodClass *$loanAmount;

    $totalAmountToPay = $total_interest_rate_amount + $loanAmount;

    $balanceInitial = $totalAmountToPay;
    $monthly_installment = $totalAmountToPay / $PaymentPeriodClass;

    $months_left = $PaymentPeriodClass;



    if ($loanAmount!=="" && $PaymentPeriodClass!=="" && $guarantor1Class!=="" && $guarantor2Class!=="") {

     $dateRequested = date("Y-m-d");
     $years = date("Y");
     $month = date("m");
     $day = date("d");

     $yearsCheck = $years + 1;
     $panaltyDate = $yearsCheck . "-" . $month  . "-". $day;


     $checkExist  = mysqli_query($conn, "SELECT person_id FROM  loans_all WHERE person_id='$getIDEncrypt' AND finish_paying='no' AND active='yes' ");

     if (mysqli_num_rows($checkExist) > 0) {
       echo "exixst";
     } else {

      if (mysqli_query($conn, "INSERT INTO loans_all (person_id,status,amount_collected,interest_rate,total_interest_rate_amount,total_amount_to_pay,balance,date_requested,monthly_installment,total_months_for_payment,months_left,guarantor1,guarantor2,loan_added_by) VALUES('$getIDEncrypt','$STATUS','$loanAmount','$interest_rate_db_amount','$total_interest_rate_amount','$totalAmountToPay','$balanceInitial','$dateRequested','$monthly_installment','$PaymentPeriodClass','$PaymentPeriodClass', '$guarantor1Class','$guarantor2Class','$login_session') ")) {





        mysqli_query($conn, "UPDATE customers SET has_loan='yes' WHERE customer_id_encrypt='$getIDEncrypt' AND active='yes' LIMIT 1 ");



      } else {
        echo "ErrorInAddingLoan";
      }



    }



  } else {
    echo "empty";
  }



}



}

/*--------------------------------ENDS ADD CUSTOMER LOANS--------------------------------*/







/*--------------------ADD LOAN to member------------*/
if ($_GET["CHECKPOST"]=="addLoansToMember") {

  if (isset($_POST["getIDEncrypt"]) && isset($_POST["loanAmount"]) && isset($_POST["PaymentPeriodClass"]) && isset($_POST["guarantor1Class"]) && isset($_POST["guarantor2Class"])) {

    $getIDEncrypt = $_POST["getIDEncrypt"];
    $loanAmount = $_POST["loanAmount"];
    $PaymentPeriodClass = $_POST["PaymentPeriodClass"];
    $guarantor1Class = $_POST["guarantor1Class"];
    $guarantor2Class = $_POST["guarantor2Class"];

    $STATUS = "Member";

    $selStu = mysqli_query($conn, "SELECT * FROM member_interest WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");

    $getAlls = mysqli_fetch_assoc($selStu);
    $id = $getAlls["id"];
    $one_to_twelve_month = $getAlls["one_to_twelve_month"];
    $one_to_twelve_month_decimal = $getAlls["one_to_twelve_month_decimal"];
    $more_than_twelve_month = $getAlls["more_than_twelve_month"];
    $more_than_twelve_month_decimal = $getAlls["more_than_twelve_month_decimal"];


    if ($PaymentPeriodClass <=12) {
      $interest_rate_db_amount = $one_to_twelve_month_decimal;
    } else {
      $interest_rate_db_amount = $more_than_twelve_month_decimal;
      
    }

    /*---------------------------calculations varibles------------------*/
    $total_interest_rate_amount = $interest_rate_db_amount * $loanAmount;
    $totalAmountToPay = $total_interest_rate_amount + $loanAmount;
    $balanceInitial = $totalAmountToPay;
    $monthly_installment = $totalAmountToPay / $PaymentPeriodClass;
    $months_left = $PaymentPeriodClass;




    if ($loanAmount!=="" && $PaymentPeriodClass!=="" && $guarantor1Class!=="" && $guarantor2Class!=="") {

     $dateRequested = date("Y-m-d");
     $years = date("Y");
     $month = date("m");
     $day = date("d"); 

     $yearsCheck = $years + 1;
     $panaltyDate = $yearsCheck . "-" . $month  . "-". $day;


     $checkExist  = mysqli_query($conn, "SELECT person_id FROM  loans_all WHERE person_id='$getIDEncrypt' AND finish_paying='no' AND active='yes' ");
 


  $selMemB = mysqli_query($conn, "SELECT * FROM members WHERE active='yes'  AND  member_id='$guarantor1Class'  ");

    $getAllsBB = mysqli_fetch_assoc($selMemB);
    $total_contribution_made = $getAllsBB["total_contribution_made"];
    $total_guarantee = $getAllsBB["total_guarantee"];

    $newloanAmount = $loanAmount / 2;


    $selMemB2 = mysqli_query($conn, "SELECT * FROM members WHERE active='yes'  AND  member_id='$guarantor2Class'  ");

    $getAllsBB2 = mysqli_fetch_assoc($selMemB2);
    $total_contribution_made2 = $getAllsBB2["total_contribution_made"];
    $total_guarantee2 = $getAllsBB2["total_guarantee"];


     $newtotal_guarantee = $total_guarantee + 1;
     $selfCountt = "3";






// 1. 600 to 900 can guarantee upto 3500
// 2. 1000 to 1400 can guarantee upto 5000
// 3.1500 to 2400 can guarantee upto 8000
// 4.2500 to 3500 can guarantee upto 15000
// 5.3600 to 4500 can guarantee upto 25000
// 6.5000 to 6000 can guarantee upto 35000
// 7.7500 to 9900 can guarantee upto 50000
// 8. 10000 and above can guarantee for any amount





    $canGuarTo3500 = 3500;
    $canGuarTo5000 = 5000;
    $canGuarTo8000 = 8000;
    $canGuarTo15000 = 15000;
    $canGuarTo25000 = 25000;
    $canGuarTo35000 = 35000;
    $canGuarTo50000 = 50000;
    $canGuarTomore = 10000000;


    $cantGurantee = 599;

      /////////////////do for guarantor 1/////


    

    if ($total_contribution_made <= 900) {

        $canGuranteeFor1 = $canGuarTo3500;

    }else if ($total_contribution_made <= 1400) {
      

        $canGuranteeFor1 = $canGuarTo5000;
      
    }else if ($total_contribution_made <= 2400) {
      

        $canGuranteeFor1 = $canGuarTo8000;
      
    }else if ($total_contribution_made <= 3500) {
      

        $canGuranteeFor1 = $canGuarTo15000;
      
    }else if ($total_contribution_made <= 4500) {
      

        $canGuranteeFor1 = $canGuarTo25000;
      
    }else if ($total_contribution_made <= 6000) {
      

        $canGuranteeFor1 = $canGuarTo35000;
      
    }else if ($total_contribution_made <= 9900) {
      

        $canGuranteeFor1 = $canGuarTo50000;
      
    }else if ($total_contribution_made >= 10000) {
      

        $canGuranteeFor1 = $canGuarTomore;
      
      }else{
        //////////donothing
      }






      /////////////////do for guarantor 2/////
    if ($total_contribution_made2 <= 900) {

        $canGuranteeFor2 = $canGuarTo3500;

    }else if ($total_contribution_made2 <= 1400) {
      

        $canGuranteeFor2 = $canGuarTo5000;
      
    }else if ($total_contribution_made2 <= 2400) {
      

        $canGuranteeFor2 = $canGuarTo8000;
      
    }else if ($total_contribution_made2 <= 3500) {
      

        $canGuranteeFor2 = $canGuarTo15000;
      
    }else if ($total_contribution_made2 <= 4500) {
      

        $canGuranteeFor2 = $canGuarTo25000;
      
    }else if ($total_contribution_made2 <= 6000) {
      

        $canGuranteeFor2 = $canGuarTo35000;
      
    }else if ($total_contribution_made2 <= 9900) {
      

        $canGuranteeFor2 = $canGuarTo50000;
      
    }else if ($total_contribution_made2 >= 10000) {
      

        $canGuranteeFor2 = $canGuarTomore;


    }else{

      ////////do nothing


    }
 


    $loan_statusSSSS = "processing";
    $guarantorsConfirms = "yes";


     if (mysqli_num_rows($checkExist) > 0) {
       echo "exixst";
     } else {


      //////////////////////// IF LOAN NOT EXIST//////////////

  if ($total_contribution_made <= $cantGurantee) {
    echo "cantfor500gura1";
  }else if ($total_contribution_made2 <= $cantGurantee) {
    echo "cantfor500gura2";
  }else if ($canGuranteeFor1 < $loanAmount) {
    echo "cantguarForG1";
  }else if ($canGuranteeFor2 < $loanAmount) {
    echo "cantguarForG2";
  }else{


   if ($guarantor1Class === $guarantor2Class) { //////////////MEANS SELF GUARANTING////////



     if (mysqli_query($conn, "INSERT INTO loans_all (person_id,status,amount_collected,interest_rate,total_interest_rate_amount,total_amount_to_pay,balance,date_requested,monthly_installment,total_months_for_payment,months_left,guarantor1,guarantor2,guarantor1_confirm,guarantor2_confirm,loan_status,loan_added_by) VALUES('$getIDEncrypt','$STATUS','$loanAmount','$interest_rate_db_amount','$total_interest_rate_amount','$totalAmountToPay','$balanceInitial','$dateRequested','$monthly_installment','$PaymentPeriodClass','$PaymentPeriodClass', '$guarantor1Class','$guarantor2Class','$guarantorsConfirms','$guarantorsConfirms','$loan_statusSSSS','$login_session') ")) {



    mysqli_query($conn, "UPDATE members SET 
      total_guarantee='$selfCountt'  
      WHERE member_id='$guarantor1Class' 
      AND active='yes' LIMIT 1 " );



 

   echo "done";



      } else {
        echo "ErrorInAddingLoan";
      }




   



   }//////////////ENDS SELF GUARANTING////////

   else{




    if (mysqli_query($conn, "INSERT INTO loans_all (person_id,status,amount_collected,interest_rate,total_interest_rate_amount,total_amount_to_pay,balance,date_requested,monthly_installment,total_months_for_payment,months_left,guarantor1,guarantor2,loan_added_by) VALUES('$getIDEncrypt','$STATUS','$loanAmount','$interest_rate_db_amount','$total_interest_rate_amount','$totalAmountToPay','$balanceInitial','$dateRequested','$monthly_installment','$PaymentPeriodClass','$PaymentPeriodClass', '$guarantor1Class','$guarantor2Class','$login_session') ")) {



        //////////do for guarantor 1
    mysqli_query($conn, "UPDATE members SET 
      total_guarantee='$newtotal_guarantee'  
      WHERE member_id='$guarantor1Class' 
      AND active='yes' LIMIT 1 " );




      //////////do for guarantor 2
    mysqli_query($conn, "UPDATE members SET 
      total_guarantee='$newtotal_guarantee'  
      WHERE member_id='$guarantor2Class' 
      AND active='yes' LIMIT 1 " );





 

   echo "done";



      } else {
        echo "ErrorInAddingLoan";
      }


  



   }




  }


}



  } else {
    echo "empty";
  }



}


}



 









/*--------------------EDIT LOAN PENDING to member------------*/
if ($_GET["CHECKPOST"]=="editLoansToMember") {

  if (isset($_POST["getTableID"]) && isset($_POST["getPersonID"]) && isset($_POST["getStatus"]) && isset($_POST["editLoanAmountClass"]) ) {

    $getTableID = $_POST["getTableID"];
    $getPersonID = $_POST["getPersonID"];
    $getStatus = $_POST["getStatus"];
    $editLoanAmountClass = $_POST["editLoanAmountClass"];
    $EditPaymentPeriodClass = $_POST["EditPaymentPeriodClass"];

    $STATUS = "Member";



    if ($getStatus==="Member") {
      

    $selStu = mysqli_query($conn, "SELECT * FROM member_interest WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");

    $getAlls = mysqli_fetch_assoc($selStu);
    $id = $getAlls["id"];
    $one_to_twelve_month = $getAlls["one_to_twelve_month"];
    $one_to_twelve_month_decimal = $getAlls["one_to_twelve_month_decimal"];
    $more_than_twelve_month = $getAlls["more_than_twelve_month"];
    $more_than_twelve_month_decimal = $getAlls["more_than_twelve_month_decimal"];

    } else {
      

       $cusint = mysqli_query($conn, "SELECT * FROM customer_interest WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");

    $cugett = mysqli_fetch_assoc($cusint);
    
    $one_to_twelve_month_decimal = $cugett["amount_decimal"];


    }
    



  $selStu23 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'  AND id='$getTableID' AND person_id='$getPersonID'  ORDER BY id DESC LIMIT 1 ");

    $getAlls33 = mysqli_fetch_assoc($selStu23);
    $PaymentPeriodClass = $getAlls33["total_months_for_payment"];





    if ($EditPaymentPeriodClass <=12) {
      $interest_rate_db_amount = $one_to_twelve_month_decimal;
    } else {
      $interest_rate_db_amount = $more_than_twelve_month_decimal;
      
    }

    /*---------------------------calculations varibles------------------*/
    $total_interest_rate_amount = $interest_rate_db_amount * $editLoanAmountClass;
    $totalAmountToPay = $total_interest_rate_amount + $editLoanAmountClass;
    $balanceInitial = $totalAmountToPay;
    $monthly_installment = $totalAmountToPay / $EditPaymentPeriodClass;
    $months_left = $EditPaymentPeriodClass;






    if ($editLoanAmountClass!=="" && $EditPaymentPeriodClass!=="") {


      if (mysqli_query($conn, "UPDATE loans_all SET

        amount_collected='$editLoanAmountClass',
        interest_rate='$interest_rate_db_amount',
        total_interest_rate_amount='$total_interest_rate_amount',
        total_amount_to_pay='$totalAmountToPay',
        balance='$balanceInitial',
        total_months_for_payment='$EditPaymentPeriodClass',
        months_left='$EditPaymentPeriodClass',
        monthly_installment='$monthly_installment'
        
        WHERE id='$getTableID' AND person_id='$getPersonID' LIMIT 1 " )) {

        echo "done";



      } else {
        echo "errorInUpdateList";
      }



    }



  } else {
    echo "empty";
  }



}









///////////////////////////////////////////EXTEND LOAN PERIOD-----------------


/*--------------------QUIT LOAN------------*/
if ($_GET["CHECKPOST"]=="extendLoanPeriodPost") {



  $getLoanID = $_POST["getLoanID"];
  $getPersonID = $_POST["getPersonID"];
  $total_months_for_payment = $_POST["total_months_for_payment"];
  $PaymentPeriodChooseClass = $_POST["PaymentPeriodChooseClass"];





  $selStu = mysqli_query($conn, "SELECT * FROM member_interest WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");

  $getAlls = mysqli_fetch_assoc($selStu);
  $id = $getAlls["id"];
  $one_to_twelve_month = $getAlls["one_to_twelve_month"];
  $one_to_twelve_month_decimal = $getAlls["one_to_twelve_month_decimal"];
  $more_than_twelve_month = $getAlls["more_than_twelve_month"];
  $more_than_twelve_month_decimal = $getAlls["more_than_twelve_month_decimal"];


  if ($PaymentPeriodChooseClass <=12) {
    $interest_rate_db_amount = $one_to_twelve_month_decimal;
  } else {
    $interest_rate_db_amount = $more_than_twelve_month_decimal;

  }




  $selectCust = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND person_id='$getPersonID' AND id='$getLoanID' LIMIT 1  ");

  $getdac = mysqli_fetch_assoc($selectCust);
  $loanID = $getdac["id"];
  $person_id = $getdac["person_id"];
  $status = $getdac["status"];
  $amount_collected = $getdac["amount_collected"];
  $interest_rate = $getdac["interest_rate"];
  $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
  $interest_amount_paid = $getdac["interest_amount_paid"];
  $total_amount_to_pay = $getdac["total_amount_to_pay"];
  $amount_paid = $getdac["amount_paid"];
  $balance = $getdac["balance"];
  $date_requested = $getdac["date_requested"];
  $date_issued = $getdac["date_issued"];
  $monthly_installment = $getdac["monthly_installment"];
  $total_months_for_payment_db = $getdac["total_months_for_payment"];
  $months_left = $getdac["months_left"];
  $date_of_completion = $getdac["date_of_completion"];
  $next_month_payment_date = $getdac["next_month_payment_date"];
  $next_month_payment_amountsss = $getdac["next_month_payment_amount"];
  $had_penalty = $getdac["had_penalty"];
  $finish_paying = $getdac["finish_paying"];
  $guarantor1 = $getdac["guarantor1"];
  $guarantor1_confirm = $getdac["guarantor1_confirm"];
  $guarantor2 = $getdac["guarantor2"];
  $guarantor2_confirm = $getdac["guarantor2_confirm"];
  $loan_status = $getdac["loan_status"];
  $issued_by = $getdac["issued_by"];
  $date_added = $getdac["date_added"];
  $loan_added_by = $getdac["loan_added_by"];




  $getMonthList = $total_months_for_payment_db - $months_left;


  /*---------------------------calculations varibles------------------*/
  $total_interest_rate_amount_now = $interest_rate_db_amount * $amount_collected;
  $totalAmountToPay_now = $total_interest_rate_amount_now + $amount_collected;
  $balanceInitial = $totalAmountToPay_now - $amount_paid;
  $months_left_now= $PaymentPeriodChooseClass - $getMonthList;
  $monthly_installment_now = $balanceInitial / $months_left_now;




  /*-----------------------------DECLARATION OF VARIABLES FOR LOANS MONTHS  DATE OF COMPLETIONS------------------*/



  $dateRequested = date("Y-m-d");

  $years = date("Y");
  $month = date("m");
  $day = date("d");


  $monthCHeck = $month + $months_left_now;







  if ($PaymentPeriodChooseClass ==12 ) { 

    $date_Of_Completions = $years+1 . "-" . $month  . "-". $day;

  }
  if ($PaymentPeriodChooseClass==24 ) {

    $date_Of_Completions = $years+2 . "-" . $month  . "-". $day;
  }

  if ($PaymentPeriodChooseClass==36 ) {

    $date_Of_Completions = $years+3 . "-" . $month  . "-". $day;

  }



  if (($PaymentPeriodChooseClass <=6 && $month <=6 ) || ($month <=6 && $PaymentPeriodChooseClass <=6 ) ) {

    $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

  }

  if (($PaymentPeriodChooseClass <=7 && $month <=5 ) || ($month <=7 && $PaymentPeriodChooseClass <=5 )) {

    $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

  }

  if (($PaymentPeriodChooseClass <=8 && $month <=4) || ($month <=8 && $PaymentPeriodChooseClass <=4 ) ) {

    $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

  }


  if (($PaymentPeriodChooseClass <=9 && $month <=3) || ($month <=9 && $PaymentPeriodChooseClass <=3) ) {

    $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

  }


  if (($PaymentPeriodChooseClass <=10 && $month <=2) || ($month <=10 && $PaymentPeriodChooseClass <=2) ) {

    $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

  }

  if (($PaymentPeriodChooseClass <=11 && $month <=1) || ($month <=11 && $PaymentPeriodChooseClass <=1) ) {

    $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

  }



  if ($PaymentPeriodChooseClass >12 && $month <=12 ) {

    $getMonth = $monthCHeck - 12;


    if ($getMonth > 12) {

      $getMonth-=12;

      if ($getMonth>12) {

        $getMonth-=12;

        $years+=3;
        $date_Of_Completions = $years. "-" . $getMonth  . "-". $day;
      } else {

       $years+=2;
       $date_Of_Completions = $years. "-" .  $getMonth  . "-". $day;
     }


   } else {
     $years+=1;
     $date_Of_Completions = $years. "-" . $getMonth  . "-". $day;
   }




 }



 $explodeDateOfComp = explode("-", $date_Of_Completions);

 $getExplodeYear = current($explodeDateOfComp);
 $getExplodeMOnth = next($explodeDateOfComp);
 $getExplodeDay = end($explodeDateOfComp);


 if ($getExplodeMOnth > 9) {
  $date_Of_Completions = $getExplodeYear . "-" . $getExplodeMOnth . "-" .$getExplodeDay;
} else {
  $date_Of_Completions = $getExplodeYear . "-0" . $getExplodeMOnth . "-" .$getExplodeDay;

}




/*----------------ENDS DATE OF COMPLETIONS VARIABLES ------------------------------*/




if (mysqli_query($conn, "UPDATE loans_all SET interest_rate='$interest_rate_db_amount', total_interest_rate_amount='$total_interest_rate_amount_now',total_amount_to_pay='$totalAmountToPay_now',balance='$balanceInitial',monthly_installment='$monthly_installment_now',total_months_for_payment='$PaymentPeriodChooseClass',months_left='$months_left_now',date_of_completion='$date_Of_Completions',next_month_payment_amount='$monthly_installment_now' WHERE id='$getLoanID' AND person_id='$getPersonID'  LIMIT 1 ")) {

  echo "done";


} else {
  echo "ERROR";
}







}




/*--------------------QUIT LOAN / PAYOFF------------*/
if ($_GET["CHECKPOST"]=="quitLoanPost") {



  $getLoanID = $_POST["getLoanID"];
  $getPersonID = $_POST["getPersonID"];



  $selectCust = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND person_id='$getPersonID' AND id='$getLoanID' LIMIT 1  ");

  $getdac = mysqli_fetch_assoc($selectCust);
  $loanID = $getdac["id"];
  $person_id = $getdac["person_id"];
  $status = $getdac["status"];
  $amount_collected = $getdac["amount_collected"];
  $interest_rate = $getdac["interest_rate"];
  $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
  $interest_amount_paid = $getdac["interest_amount_paid"];
  $total_amount_to_pay = $getdac["total_amount_to_pay"];
  $amount_paid = $getdac["amount_paid"];
  $balance = $getdac["balance"];
  $date_requested = $getdac["date_requested"];
  $date_issued = $getdac["date_issued"];
  $monthly_installment = $getdac["monthly_installment"];
  $total_months_for_payment = $getdac["total_months_for_payment"];
  $months_left = $getdac["months_left"];
  $date_of_completion = $getdac["date_of_completion"];
  $next_month_payment_date = $getdac["next_month_payment_date"];
  $next_month_payment_amountsss = $getdac["next_month_payment_amount"];
  $had_penalty = $getdac["had_penalty"];
  $finish_paying = $getdac["finish_paying"];
  $guarantor1 = $getdac["guarantor1"];
  $guarantor1_confirm = $getdac["guarantor1_confirm"];
  $guarantor2 = $getdac["guarantor2"];
  $guarantor2_confirm = $getdac["guarantor2_confirm"];
  $loan_status = $getdac["loan_status"];
  $issued_by = $getdac["issued_by"];
  $date_added = $getdac["date_added"];
  $loan_added_by = $getdac["loan_added_by"];










  /*---------------------------calculations varibles------------------*/

  // $getRealMonthForTheQuit = $total_months_for_payment - $months_left + 1;


  // $total_interest_rate_amount = $interest_rate * $getRealMonthForTheQuit * $amount_collected;

  // $totalAmountToPay = $total_interest_rate_amount + $amount_collected;



  // $monthly_installment = $totalAmountToPay / $getRealMonthForTheQuit;

  // $months_left = '1';

  // $getTheRealAMountoPay = $totalAmountToPay - $amount_paid;





$TOdated = date("jS F, Y");
 

$getRevenueInterest = $total_interest_rate_amount - $interest_amount_paid;
$getLoanCollectPayWithNoInterest =  $balance - $total_interest_rate_amount;

  $todayssss = date("Y-m-d");


$companyRevenuePurpose = "Loan Interest";


 $selre = mysqli_query($conn, "SELECT id FROM loans_pay ORDER BY id DESC LIMIT 1 ");

       $getlastID = mysqli_fetch_assoc($selre);
       $ids = $getlastID["id"] + 1;

       $firstID = 1;
       $preamble = '000000';

       if (mysqli_num_rows($selre) >0) {

         if($ids<=9){
           $receiptNumber ='000000'.$ids;
         }else if($ids<=99){
           $receiptNumber ='00000'.$ids;
         }else if($ids<=999){
           $receiptNumber ='0000'.$ids;
         }else if($ids<=9999){
           $receiptNumber ='000'.$ids;
         }else if($ids<=99999){
           $receiptNumber ='00'.$ids;
         }else if($ids<=999999){
           $receiptNumber ='0'.$ids;
         }else {
           $receiptNumber =$ids;
         }
       } else {
        $receiptNumber = $preamble . $firstID;
      }



      $slGur = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$guarantor1'  ");

      $getPay = mysqli_fetch_assoc($slGur);

      $loanID = $getPay["id"];
      $total_guarantee1 = $getPay["total_guarantee"];





      $slGur2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$guarantor2'  ");

      $getPay2 = mysqli_fetch_assoc($slGur2);

      $loanID = $getPay2["id"];
      $total_guarantee2 = $getPay2["total_guarantee"];

     

      $total_guarantee1 -=1;
      $total_guarantee2 -=1;



  if (mysqli_query($conn, "UPDATE loans_all SET interest_amount_paid='$total_interest_rate_amount', amount_paid='$total_amount_to_pay', balance='0',months_left='0',quit_loan='yes',finish_paying='yes' WHERE id='$getLoanID' AND person_id='$getPersonID'  LIMIT 1 ")) {

      if ($status==="Customer") {
        


 mysqli_query($conn, "UPDATE customers SET has_loan='no' WHERE customer_id_encrypt='$getPersonID' AND active='yes' LIMIT 1 ");


 
        if ($guarantor1===$guarantor2) {
            
            mysqli_query($conn, "UPDATE members SET total_guarantee='0' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");

        } else {
              
              /////////update gurantor 1
          mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee1' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");



                 /////////update gurantor 2
          mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee2' WHERE member_id='$guarantor2'  AND active='yes' LIMIT 1 ");


        }


    } else {


      mysqli_query($conn, "UPDATE members SET has_loan='no' WHERE member_id_encrypt='$getPersonID' AND active='yes' LIMIT 1 ");


        if ($guarantor1===$guarantor2) {
            
            mysqli_query($conn, "UPDATE members SET total_guarantee='0' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");

        } else {
              
              /////////update gurantor 1
          mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee1' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");



                 /////////update gurantor 2
          mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee2' WHERE member_id='$guarantor2'  AND active='yes' LIMIT 1 ");


        }


     
    }



        mysqli_query($conn, "INSERT INTO company_revenue (person_id,loan_id,amount,purpose,purpose_date,done_by) VALUES('$getPersonID','$getLoanID','$getRevenueInterest','$companyRevenuePurpose','$todayssss','$login_session ')");


        mysqli_query($conn, "INSERT INTO loan_collects (person_id,loan_id,amount,done_by) VALUES('$getPersonID','$getLoanID','$getLoanCollectPayWithNoInterest','$login_session' )");


        mysqli_query($conn, "INSERT INTO loans_pay (person_id,loan_id,loan_collected_date,amount_collected,amount_paid,balance_before,date_paid,receipt_no,staff) VALUES('$getPersonID','$getLoanID','$date_issued','$amount_collected','$balance','$balance','$TOdated','$receiptNumber','$login_session' )");


echo "done";

  } else {
    echo "ERROR";
  }








}

/*--------------------------------ENDS QUITE LOANS  LOANS--------------------------------*/








/*-----------------------change member guarantor 1 at request loan-------------------*/
if ($_GET["CHECKPOST"]=="ChangeGuarantor1AtRequestLoan") {

  if (isset($_POST["changeGuarantorClasss"]) ) {

    $loanID = $_POST["loanID"];
    $changeGuarantorClasss = $_POST["changeGuarantorClasss"];



    if ($changeGuarantorClasss!=="" ) {


    $selMe = mysqli_query($conn, "SELECT * FROM members WHERE active='yes'  AND  member_id='$changeGuarantorClasss' LIMIT 1  ");

    $getAlW = mysqli_fetch_assoc($selMe);
    $total_contribution_made1 = $getAlW["total_contribution_made"];
    $total_guarantee = $getAlW["total_guarantee"];


    $NEWtotal_contribution_made2 = $total_contribution_made1 / 2;


    $seleLoan = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'  AND  id='$loanID' LIMIT 1  ");

    $gettLo = mysqli_fetch_assoc($seleLoan);
    $newloanAmount = $gettLo["amount_collected"];

    $idddd = $gettLo["id"];
    $guarantor1 = $gettLo["guarantor1"];
    $guarantor2 = $gettLo["guarantor2"];







    $canGuarTo3500 = 3500;
    $canGuarTo5000 = 5000;
    $canGuarTo8000 = 8000;
    $canGuarTo15000 = 15000;
    $canGuarTo25000 = 25000;
    $canGuarTo35000 = 35000;
    $canGuarTo50000 = 50000;
    $canGuarTomore = 10000000;


    $cantGurantee = 599;

      /////////////////do for guarantor 1/////

    if ($total_contribution_made1 <= 900) {

        $canGuranteeFor1 = $canGuarTo3500;

    }else if ($total_contribution_made1 <= 1400) {
      

        $canGuranteeFor1 = $canGuarTo5000;
      
    }else if ($total_contribution_made1 <= 2400) {
      

        $canGuranteeFor1 = $canGuarTo8000;
      
    }else if ($total_contribution_made1 <= 3500) {
      

        $canGuranteeFor1 = $canGuarTo15000;
      
    }else if ($total_contribution_made1 <= 4500) {
      

        $canGuranteeFor1 = $canGuarTo25000;
      
    }else if ($total_contribution_made1 <= 6000) {
      

        $canGuranteeFor1 = $canGuarTo35000;
      
    }else if ($total_contribution_made1 <= 9900) {
      

        $canGuranteeFor1 = $canGuarTo50000;
      
    }else if ($total_contribution_made1 >= 10000) {
      

        $canGuranteeFor1 = $canGuarTomore;
      
      }else{
        //////////donothing
      }






     if ($guarantor1===$changeGuarantorClasss || $guarantor2===$changeGuarantorClasss) {
      echo "alreadyy";
     } else {


      //////////////////////// IF LOAN NOT EXIST//////////////

  if ($total_contribution_made1 <= $cantGurantee) {
    echo "cantfor500gura1";
  }else if ($canGuranteeFor1 < $newloanAmount) {
    echo "cantguarForG1";
  }else{





      if (mysqli_query($conn, "UPDATE loans_all SET guarantor1='$changeGuarantorClasss'  WHERE id='$loanID'  AND active='yes' LIMIT 1 ")) {



    $newtotal_guarantee = $total_guarantee + 1;
     $selfCountt = "3";

      //////////do for guarantor 1
    // mysqli_query($conn, "UPDATE members SET 
    //   total_guarantee='$newtotal_guarantee'  
    //   WHERE member_id='$changeGuarantorClasss' 
    //   AND active='yes' LIMIT 1 " );

        echo "done";
      } else {
        echo "error";
      }




        }
 

}


      


    }else{
      echo "empty";
    }

  }



}

/*-----------------------ENDS change member guarantor1 at request loan-------------------*/


/*-----------------------change member guarantor 2 at request loan-------------------*/


if ($_GET["CHECKPOST"]=="ChangeGuarantor2AtRequestLoan") {

  if (isset($_POST["changeGuarantorClasss2"]) ) {

    $loanID = $_POST["loanID"];
    $changeGuarantorClasss2 = $_POST["changeGuarantorClasss2"];



    if ($changeGuarantorClasss2!=="" ) {


    $selMe = mysqli_query($conn, "SELECT * FROM members WHERE active='yes'  AND  member_id='$changeGuarantorClasss2' LIMIT 1  ");

    $getAlW = mysqli_fetch_assoc($selMe);
    $total_contribution_made2 = $getAlW["total_contribution_made"];
    $total_guarantee = $getAlW["total_guarantee"];



    $NEWtotal_contribution_made2 = $total_contribution_made2 / 2;


    $seleLoan = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'  AND  id='$loanID' LIMIT 1  ");

    $gettLo = mysqli_fetch_assoc($seleLoan);
    $newloanAmount = $gettLo["amount_collected"];
    $idddd = $gettLo["id"];
    $guarantor1 = $gettLo["guarantor1"];
    $guarantor2 = $gettLo["guarantor2"];







    $canGuarTo3500 = 3500;
    $canGuarTo5000 = 5000;
    $canGuarTo8000 = 8000;
    $canGuarTo15000 = 15000;
    $canGuarTo25000 = 25000;
    $canGuarTo35000 = 35000;
    $canGuarTo50000 = 50000;
    $canGuarTomore = 10000000;


    $cantGurantee = 599;


      /////////////////do for guarantor 2/////
    if ($total_contribution_made2 <= 900) {

        $canGuranteeFor2 = $canGuarTo3500;

    }else if ($total_contribution_made2 <= 1400) {
      

        $canGuranteeFor2 = $canGuarTo5000;
      
    }else if ($total_contribution_made2 <= 2400) {
      

        $canGuranteeFor2 = $canGuarTo8000;
      
    }else if ($total_contribution_made2 <= 3500) {
      

        $canGuranteeFor2 = $canGuarTo15000;
      
    }else if ($total_contribution_made2 <= 4500) {
      

        $canGuranteeFor2 = $canGuarTo25000;
      
    }else if ($total_contribution_made2 <= 6000) {
      

        $canGuranteeFor2 = $canGuarTo35000;
      
    }else if ($total_contribution_made2 <= 9900) {
      

        $canGuranteeFor2 = $canGuarTo50000;
      
    }else if ($total_contribution_made2 >= 10000) {
      

        $canGuranteeFor2 = $canGuarTomore;


    }else{

      ////////do nothing


    }





 


     if ($guarantor1===$changeGuarantorClasss2 || $guarantor2===$changeGuarantorClasss2) {
      echo "alreadyy";
     } else {


      //////////////////////// IF LOAN NOT EXIST//////////////

  if ($total_contribution_made2 <= $cantGurantee) {
    echo "cantfor500gura2";
  }else if ($canGuranteeFor2 < $newloanAmount) {
    echo "cantguarForG2";
  }else{




      if (mysqli_query($conn, "UPDATE loans_all SET guarantor2='$changeGuarantorClasss2'  WHERE id='$loanID'  AND active='yes' LIMIT 1 ")) {

     //  $newtotal_guarantee = $total_guarantee + 1;
     // $selfCountt = "3";

      //////////do for guarantor 1
    // mysqli_query($conn, "UPDATE members SET 
    //   total_guarantee='$newtotal_guarantee'  
    //   WHERE member_id='$changeGuarantorClasss2' 
    //   AND active='yes' LIMIT 1 " );

        echo "done";

      } else {
        echo "error";
      }




        }
 


    }


      


    }else{
      echo "empty";
    }

  }



}



/*-----------------------ENDS change member guarantor 2 at request loan-------------------*/







/*---------------------------------APPROVED LOASN BY STAFF----------------------*/
if ($_GET["CHECKPOST"]=="ApprovedLoansByStaff") {


  $loanID = $_POST["loanID"];
  $person_id = $_POST["person_id"];


  if (mysqli_query($conn, "UPDATE loans_all SET approved='yes' WHERE id='$loanID' AND person_id='$person_id' AND active='yes' LIMIT 1 ")) {
   echo "done";
 } else {
  echo "error";
}






}




/*---------------------------------DENIED LOASN BY STAFF----------------------*/
if ($_GET["CHECKPOST"]=="DeniedLoansByStaff") {


  $loanID = $_POST["loanID"];
  $person_id = $_POST["person_id"];


  if (mysqli_query($conn, "UPDATE loans_all SET approved='denied' WHERE id='$loanID' AND person_id='$person_id' AND active='yes' LIMIT 1 ")) {
   echo "done";
 } else {
  echo "error";
}






}

 


/*---------------------------------IISUED LOANS TO USER-=----------------------*/
if ($_GET["CHECKPOST"]=="issueLoansToUSerPost") {


  if (isset($_POST["loanID"]) && isset($_POST["person_id"])  && isset($_POST["status"]) ) {

    $loanID = $_POST["loanID"];
    $person_id = $_POST["person_id"];
    $status = $_POST["status"];


    $selectLoanAll = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND id='$loanID' LIMIT 1 ");


    $getdac = mysqli_fetch_assoc($selectLoanAll);

    $Tableid = $getdac["id"];
    $person_id = $getdac["person_id"];
    $amount_collected = $getdac["amount_collected"];
    $interest_rate = $getdac["interest_rate"];
    $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
    $interest_amount_paid = $getdac["interest_amount_paid"];
    $total_amount_to_pay = $getdac["total_amount_to_pay"];
    $amount_paid = $getdac["amount_paid"];
    $balance = $getdac["balance"];
    $date_requested = $getdac["date_requested"];
    $date_issued = $getdac["date_issued"];
    $monthly_installment = $getdac["monthly_installment"];
    $total_months_for_payment = $getdac["total_months_for_payment"];
    $months_left = $getdac["months_left"];
    $date_of_completion = $getdac["date_of_completion"];
    $next_month_payment_date = $getdac["next_month_payment_date"];
    $next_month_payment_amount = $getdac["next_month_payment_amount"];
    $had_penalty = $getdac["had_penalty"];
    $finish_paying = $getdac["finish_paying"];
    $guarantor1 = $getdac["guarantor1"];
    $guarantor1_confirm = $getdac["guarantor1_confirm"];
    $guarantor2 = $getdac["guarantor2"];
    $guarantor2_confirm = $getdac["guarantor2_confirm"];
    $loan_status = $getdac["loan_status"];
    $issued_by = $getdac["issued_by"];
    $date_added = $getdac["date_added"];
    $loan_added_by = $getdac["loan_added_by"];




    $dated = date("jS F, Y");
    $activityType = "Loan Issued";
    $MemberDescription = "A Loan of $amount_collected cedis was granted";
    $StaffDescription = "A loan of $amount_collected was issued to $person_id by : $login_session";



    $dateRequested = date("Y-m-d");

    $years = date("Y");
    $month = date("m");
    $day = date("d");


    $monthCHeck = $month + $total_months_for_payment;





    /*-----------------------------DECLARATION OF VARIABLES FOR LOANS MONTHS  DATE OF COMPLETIONS------------------*/

    
    if ($total_months_for_payment ==12 ) {

      $date_Of_Completions = $years+1 . "-" . $month  . "-". $day;

    }
    if ($total_months_for_payment==24 ) {

      $date_Of_Completions = $years+2 . "-" . $month  . "-". $day;
    }

    if ($total_months_for_payment==36 ) {

      $date_Of_Completions = $years+3 . "-" . $month  . "-". $day;

    }





    if (($total_months_for_payment <=6 && $month <=6 ) || ($month <=6 && $total_months_for_payment <=6 ) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }




    if (($total_months_for_payment <=7 && $month <=5 ) || ($month <=7 && $total_months_for_payment <=5 )) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }

    if (($total_months_for_payment <=8 && $month <=4) || ($month <=8 && $total_months_for_payment <=4 ) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }


    if (($total_months_for_payment <=9 && $month <=3) || ($month <=9 && $total_months_for_payment <=3) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }


    if (($total_months_for_payment <=10 && $month <=2) || ($month <=10 && $total_months_for_payment <=2) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }

    if (($total_months_for_payment <=11 && $month <=1) || ($month <=11 && $total_months_for_payment <=1) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }



    if (($total_months_for_payment >12 && $month <=12) || ($month >6 && $total_months_for_payment <=12)  ) {

      $getMonth = $monthCHeck - 12;


      if ($getMonth > 12) {

        $getMonth-=12;

        if ($getMonth>12) {

          $getMonth-=12;

          $years+=3;
          $date_Of_Completions = $years. "-" . $getMonth  . "-". $day;
        } else {

         $years+=2;
         $date_Of_Completions = $years. "-" .  $getMonth  . "-". $day;
       }


     } else {
       $years+=1;
       $date_Of_Completions = $years. "-" . $getMonth  . "-". $day;
     }






   }





   $explodeDateOfComp = explode("-", $date_Of_Completions);

   $getExplodeYear = current($explodeDateOfComp);
   $getExplodeMOnth = next($explodeDateOfComp);
   $getExplodeDay = end($explodeDateOfComp);


   if ($getExplodeMOnth > 9) {
    $date_Of_Completions = $getExplodeYear . "-" . $getExplodeMOnth . "-" .$getExplodeDay;
  } else {
    $date_Of_Completions = $getExplodeYear . "-0" . $getExplodeMOnth . "-" .$getExplodeDay;
    
  }


  /*----------------ENDS DATE OF COMPLETIONS VARIABLES ------------------------------*/


  /*-------------------------------------for next month payment date------------------*/


  $myYear = date("Y");
  $firstMonth = 01;

  $monthPlus1 = $month + 1;


  if ($monthPlus1 > 9) {
    $beofreMonthZero ="" . $monthPlus1;
  } else {
    $beofreMonthZero = "0" . $monthPlus1;
  }



  if ($monthPlus1 > 12) {

    $nextMonthPayment = $myYear+1 . "-" . $firstMonth  . "-". $day;

  } else {

    $nextMonthPayment = $myYear . "-" . $beofreMonthZero  . "-". $day;
  }



  $loanSTat = "issued";

  $selfCountt = "3";


    $selMemB = mysqli_query($conn, "SELECT * FROM members WHERE active='yes'  AND  member_id='$guarantor1'  ");

    $getAllsBB = mysqli_fetch_assoc($selMemB);
    $total_guarantee = $getAllsBB["total_guarantee"];



    $selMemB2 = mysqli_query($conn, "SELECT * FROM members WHERE active='yes'  AND  member_id='$guarantor2'  ");

    $getAllsBB2 = mysqli_fetch_assoc($selMemB2);
    $total_guarantee2 = $getAllsBB2["total_guarantee"];


     $newtotal_guarantee1 = $total_guarantee + 1;
     $newtotal_guarantee2 = $total_guarantee2 + 1;


  if (mysqli_query($conn, "UPDATE loans_all SET date_issued='$dated', date_of_completion='$date_Of_Completions',next_month_payment_date='$nextMonthPayment', next_month_payment_amount='$monthly_installment', loan_status='$loanSTat' ,issued_by='$login_session' WHERE id='$loanID' AND person_id='$person_id' LIMIT 1  ")) {


 




      if ($guarantor1 === $guarantor2) { //////////////MEANS SELF GUARANTING////////
    
    mysqli_query($conn, "UPDATE members SET 
      total_guarantee='$selfCountt'  
      WHERE member_id='$guarantor1' 
      AND active='yes' LIMIT 1 " );



 

  }//////////////ENDS SELF GUARANTING////////

   else {


      //////////do for guarantor 1
    mysqli_query($conn, "UPDATE members SET 
      total_guarantee='$newtotal_guarantee1'  
      WHERE member_id='$guarantor1' 
      AND active='yes' LIMIT 1 " );




      //////////do for guarantor 2
    mysqli_query($conn, "UPDATE members SET 
      total_guarantee='$newtotal_guarantee2'  
      WHERE member_id='$guarantor2' 
      AND active='yes' LIMIT 1 " );



   }



    if ($status==="Customer") {
      mysqli_query($conn, "INSERT INTO customer_activities (customer_id,activity_type,description,datecreated,added_by) VALUES('$person_id','$activityType','$MemberDescription','$dated','$login_session')");
    } else {


      mysqli_query($conn, "UPDATE members SET has_loan='yes' WHERE member_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");


      mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$person_id','$activityType','$MemberDescription','$dated','$login_session')");
    }

 

    mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$login_session','$activityType','$StaffDescription','$dated')");

    echo "ViewPDFS/Loans/print_loans_agreement.php?PRINT_LOAN_AGREEMENT_AMOUNT=$amount_collected&&DATE=$date_requested&&TRUE=$person_id&&TABLEID=$loanID";



  }else{
    echo "error";
  }

}

}



/*----------------------ends issued loans to user-------------*/

















/*-------------------------------------------DELETE LOASN-----------------------*/


if ($_GET["CHECKPOST"]=="deleteRequestedLoan") {

  $Tableid = $_POST["Tableid"];

  if (mysqli_query($conn, "UPDATE loans_all SET active='no' WHERE id='$Tableid' LIMIT 1  ")) {

    echo "done";

    } else {


      echo "deletionerror";

    }


}







/*---------------------------------TOP UP LOANS TO USER-=----------------------*/
if ($_GET["CHECKPOST"]=="topUpLoanPost") {

 
  if (isset($_POST["loanID"]) && isset($_POST["person_id"])  && isset($_POST["real_monthLeft"]) && isset($_POST["qualifyLoanTopUp"])&& isset($_POST["topUpLoanAmountClass"])&& isset($_POST["topUpPaymentPeriodChooseClass"]) ) {

    $loanID = $_POST["loanID"];
    $person_id = $_POST["person_id"];
    $real_monthLeft = $_POST["real_monthLeft"];
    $qualifyLoanTopUp = $_POST["qualifyLoanTopUp"];
    $topUpLoanAmountClass = $_POST["topUpLoanAmountClass"];
    $topUpPaymentPeriodChooseClass = $_POST["topUpPaymentPeriodChooseClass"];



    $selectLoanAll = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND id='$loanID' LIMIT 1 ");


    $getdac = mysqli_fetch_assoc($selectLoanAll);

    $Tableid = $getdac["id"];
    $person_id = $getdac["person_id"];
    $amount_collected = $getdac["amount_collected"];
    $interest_rate = $getdac["interest_rate"];
    $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
    $interest_amount_paid = $getdac["interest_amount_paid"];
    $total_amount_to_pay = $getdac["total_amount_to_pay"];
    $amount_paid = $getdac["amount_paid"];
    $balance = $getdac["balance"];
    $date_requested = $getdac["date_requested"];
    $date_issued = $getdac["date_issued"];
    $monthly_installment = $getdac["monthly_installment"];
    $DBtotal_months_for_payment = $getdac["total_months_for_payment"];
    $months_left = $getdac["months_left"];
    $date_of_completion = $getdac["date_of_completion"];
    $next_month_payment_date = $getdac["next_month_payment_date"];
    $next_month_payment_amount = $getdac["next_month_payment_amount"];
    $had_penalty = $getdac["had_penalty"];
    $finish_paying = $getdac["finish_paying"];
    $guarantor1 = $getdac["guarantor1"];
    $guarantor1_confirm = $getdac["guarantor1_confirm"];
    $guarantor2 = $getdac["guarantor2"];
    $guarantor2_confirm = $getdac["guarantor2_confirm"];
    $loan_status = $getdac["loan_status"];
    $issued_by = $getdac["issued_by"];
    $date_added = $getdac["date_added"];
    $loan_added_by = $getdac["loan_added_by"];


    $total_months_for_payment = $topUpPaymentPeriodChooseClass;



    $dated = date("jS F, Y");
    $activityType = "Loan Top Up";
    $MemberDescription = "A Loan of $amount_collected cedis was top up";
    $StaffDescription = "A loan of $amount_collected was top up to $person_id by : $login_session";



    $dateRequested = date("Y-m-d");

    // $exploYearDB = explode("-", $date_of_completion);
    // $years = current($exploYearDB);
    // $month = next($exploYearDB);
    // $day = end($exploYearDB);




     $years = date("Y");
    $month = date("m");
    $day = date("d");

    $monthCHeck = $month + $total_months_for_payment;






    /*-------------------DECLARATION OF VARIABLES FOR LOANS MONTHS  DATE OF COMPLETIONS------------------*/

    
    if ($total_months_for_payment ==12 ) {

      $date_Of_Completions = $years+1 . "-" . $month  . "-". $day;

    }
    if ($total_months_for_payment==24 ) {

      $date_Of_Completions = $years+2 . "-" . $month  . "-". $day;
    }

    if ($total_months_for_payment==36 ) {

      $date_Of_Completions = $years+3 . "-" . $month  . "-". $day;

    }



    if (($total_months_for_payment <=6 && $month <=6 ) || ($month <=6 && $total_months_for_payment <=6 ) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }

    if (($total_months_for_payment <=7 && $month <=5 ) || ($month <=7 && $total_months_for_payment <=5 )) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }

    if (($total_months_for_payment <=8 && $month <=4) || ($month <=8 && $total_months_for_payment <=4 ) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }


    if (($total_months_for_payment <=9 && $month <=3) || ($month <=9 && $total_months_for_payment <=3) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }


    if (($total_months_for_payment <=10 && $month <=2) || ($month <=10 && $total_months_for_payment <=2) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }

    if (($total_months_for_payment <=11 && $month <=1) || ($month <=11 && $total_months_for_payment <=1) ) {

      $date_Of_Completions = $years . "-" . $monthCHeck  . "-". $day;

    }







    if (($total_months_for_payment >12 && $month <=12) || ($month >6 && $total_months_for_payment <=12)  ) {

      $getMonth = $monthCHeck - 12;


      if ($getMonth > 12) {

        $getMonth-=12;

        if ($getMonth>12) {

          $getMonth-=12;

          $years+=3;
          $date_Of_Completions = $years. "-" . $getMonth  . "-". $day;
        } else {

         $years+=2;
         $date_Of_Completions = $years. "-" .  $getMonth  . "-". $day;
       }


     } else {
       $years+=1;
       $date_Of_Completions = $years. "-" . $getMonth  . "-". $day;
     }






   }


   $explodeDateOfComp = explode("-", $date_Of_Completions);

   $getExplodeYear = current($explodeDateOfComp);
   $getExplodeMOnth = next($explodeDateOfComp);
   $getExplodeDay = end($explodeDateOfComp);


   if ($getExplodeMOnth > 9) {
    $date_Of_Completions = $getExplodeYear . "-" . $getExplodeMOnth . "-" .$getExplodeDay;
  } else {
    $date_Of_Completions = $getExplodeYear . "-0" . $getExplodeMOnth . "-" .$getExplodeDay;
    
  }



  /*----------------ENDS DATE OF COMPLETIONS VARIABLES ------------------------------*/


  /*-------------------------------------for next month payment date------------------*/


  $firstMonth = 01;

  $monthPlus1 = $month + 1;


  if ($monthPlus1 > 9) {
    $beofreMonthZero ="" . $monthPlus1;
  } else {
    $beofreMonthZero = "0" . $monthPlus1;
  }




  if ($monthPlus1 > 12) {

    $nextMonthPayment = $years+1 . "-" . $firstMonth  . "-". $day;

  } else {

    $nextMonthPayment = $years . "-" . $beofreMonthZero  . "-". $day;
  }



  // echo "$nextMonthPayment";
  // exit();


   $selStu = mysqli_query($conn, "SELECT * FROM member_interest WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");

    $getAlls = mysqli_fetch_assoc($selStu);
    $id = $getAlls["id"];
    $one_to_twelve_month = $getAlls["one_to_twelve_month"];
    $one_to_twelve_month_decimal = $getAlls["one_to_twelve_month_decimal"];
    $more_than_twelve_month = $getAlls["more_than_twelve_month"];
    $more_than_twelve_month_decimal = $getAlls["more_than_twelve_month_decimal"];


    if ($total_months_for_payment <=12) {
      $interest_rate_db_amount = $one_to_twelve_month_decimal;
    } else {
      $interest_rate_db_amount = $more_than_twelve_month_decimal;
      
    }

    /*---------------------------calculations varibles------------------*/
    
 

  $loanSTat = "issued";


// --------DECLARE NEW VARIABLES---------

    // $new_total_amount_collected = $amount_collected + $topUpLoanAmountClass;
    // $new_interest_rate = $interest_rate_db_amount;
    // $CHECKtotal_interest_rate_amount = $interest_rate_db_amount * $topUpLoanAmountClass;
    // $new_total_interest_rate_amount = $total_interest_rate_amount + $CHECKtotal_interest_rate_amount;
    // $new_total_amount_to_pay = $new_total_amount_collected + $new_total_interest_rate_amount;
    // $new_balance = $new_total_amount_to_pay - $amount_paid;

    // $new_total_months_for_payment = $DBtotal_months_for_payment + $topUpPaymentPeriodChooseClass;

    // $new_months_left = $months_left + $topUpPaymentPeriodChooseClass;


    // $new_monthly_installment = $new_balance /  $new_months_left;






    /////////////////////////date_Of_Completions when having 00 before month/////
    $expToRemove00bfMonth = explode("-", $date_Of_Completions);

    $getExploded00Year = current($expToRemove00bfMonth);
    $getExploded00Month = next($expToRemove00bfMonth);
    $getExploded00Day = end($expToRemove00bfMonth);

    $getFirstTwo00 = substr($getExploded00Month, 0,2);
    $getLastMonthafter00 = substr($getExploded00Month, 2,3);

    
    if ($getFirstTwo00==="00") {
        
        $getFirstTwo00="0";

        $date_Of_Completions = $getExploded00Year . "-" . $getFirstTwo00 . $getLastMonthafter00 . "-" . $getExploded00Day;

    }




    $new_total_amount_collected = $topUpLoanAmountClass + $balance;

    $new_interest_rate = $interest_rate_db_amount;

    $CHECKtotal_interest_rate_amount = $interest_rate_db_amount * $new_total_amount_collected;

    $new_total_interest_rate_amount = $CHECKtotal_interest_rate_amount;

    $new_total_amount_to_pay = $new_total_amount_collected + $new_total_interest_rate_amount;

 
    $new_total_months_for_payment = $topUpPaymentPeriodChooseClass;

    $new_months_left = $topUpPaymentPeriodChooseClass;


    $new_interest_amount_paid = '0';

    $new_amount_paid = '0';

    $new_balance = $new_total_amount_to_pay;


    $new_monthly_installment = $new_total_amount_to_pay /  $new_months_left;


    $new_date_issued = date("jS F, Y");

    if (mysqli_query($conn, "UPDATE loans_all SET amount_collected='$new_total_amount_collected',interest_rate='$new_interest_rate', total_interest_rate_amount='$new_total_interest_rate_amount', interest_amount_paid='$new_interest_amount_paid' ,total_amount_to_pay='$new_total_amount_to_pay' ,amount_paid='$new_amount_paid' ,b alance='$new_balance', date_requested='$todayDate' , date_issued='$new_date_issued' ,monthly_installment='$new_monthly_installment', total_months_for_payment='$new_total_months_for_payment',next_month_payment_date='$nextMonthPayment', months_left='$new_months_left', date_of_completion='$date_Of_Completions' ,next_month_payment_amount='$new_monthly_installment' WHERE id='$loanID' AND person_id='$person_id' LIMIT 1  ")) {

      mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$person_id','$activityType','$MemberDescription','$dated','$login_session')");

    mysqli_query($conn, "INSERT INTO loans_top_up (loan_id,person_id,top_up_amount,months,interest_rate,total_interest_rate_amount,date_added,done_by) VALUES('$loanID','$person_id','$topUpLoanAmountClass','$topUpPaymentPeriodChooseClass','$new_interest_rate','$CHECKtotal_interest_rate_amount','$dateRequested','$login_session')");


    mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$login_session','$activityType','$StaffDescription','$dated')");


  }else{
    echo "error";
  }

}

}



/*----------------------ends top up loans to user-------------*/




/*-----------------------------LOANS-----------------------*/


/*--------------------SEARCH FO PERSON TO PAY LOANS----------------*/


if ($_GET["CHECKPOST"]=="searchLoanPersonLivePost") {


  $seachresultInput = htmlentities(strip_tags(stripcslashes($_POST["seachresultInput"])));
  $getLoanPayType = $_POST["getLoanPayType"];

  if (!empty($seachresultInput)) {

    if ($getLoanPayType==="Memda64883f2825ba6478dce6a8c9ecbf8d") {



      /*--------------MEMBER LOAN PAY -----------*/


      $searchStatusMember = mysqli_query($conn, "SELECT person.*, loanTab.* FROM members person, loans_all loanTab WHERE loanTab.person_id=person.member_id_encrypt AND loanTab.loan_status='issued' AND loanTab.finish_paying='no'  AND (person.telephone LIKE '%".$seachresultInput."%' OR person.firstname LIKE '%".$seachresultInput."%' OR person.surname LIKE '%".$seachresultInput."%' OR person.member_id LIKE '%".$seachresultInput."%'  ) ORDER BY loanTab.id DESC  ");


      if(mysqli_num_rows($searchStatusMember) > 0){



       while ($getall =  mysqli_fetch_assoc($searchStatusMember)) {

        $id = $getall["id"];
        $member_id = $getall["member_id"];
        $member_id_encrypt = $getall["member_id_encrypt"];
        $firstname = $getall["firstname"];
        $surname = $getall["surname"];
        $telephone = $getall["telephone"];
        $image = $getall["image"];
        $gender = $getall["gender"];

        $fullname = $firstname . " " . $surname;



        if ($image==="" || $image==="/") {

          if ($gender==="Male") {
            $image = "
            <img src=\"assets/images/customs/male.png\" >
            ";
          } else {
            $image = "
            <img src=\"assets/images/customs/female.jpg\" >
            ";
          }


        } else {

          $image = "
          <img src=\"Datas/members_datas/$image\" >
          ";


        }






        $selectCust2 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND person_id='$member_id_encrypt' AND finish_paying='no' ORDER BY id DESC ");

        while ( $getdac = mysqli_fetch_assoc($selectCust2)) {


         $Loanid = $getdac["id"];
         $person_id = $getdac["person_id"];
         $status = $getdac["status"];
         $amount_collected = $getdac["amount_collected"];
         $interest_rate = $getdac["interest_rate"];
         $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
         $interest_amount_paid = $getdac["interest_amount_paid"];
         $total_amount_to_pay = $getdac["total_amount_to_pay"];
         $amount_paid = $getdac["amount_paid"];
         $balance = $getdac["balance"];
         $date_requested = $getdac["date_requested"];
         $date_issued = $getdac["date_issued"];
         $monthly_installment = $getdac["monthly_installment"];
         $total_months_for_payment = $getdac["total_months_for_payment"];
         $months_left = $getdac["months_left"];
         $date_of_completion = $getdac["date_of_completion"];
         $next_month_payment_date = $getdac["next_month_payment_date"];
         $next_month_payment_amount = $getdac["next_month_payment_amount"];
         $had_penalty = $getdac["had_penalty"];
         $finish_paying = $getdac["finish_paying"];
         $guarantor1 = $getdac["guarantor1"];
         $guarantor1_confirm = $getdac["guarantor1_confirm"];
         $guarantor2 = $getdac["guarantor2"];
         $guarantor2_confirm = $getdac["guarantor2_confirm"];
         $loan_status = $getdac["loan_status"];
         $issued_by = $getdac["issued_by"];
         $date_added = $getdac["date_added"];
         $loan_added_by = $getdac["loan_added_by"];

         if ($finish_paying==="yes") {
           $mySTat = "Completed";
         } else {
           $mySTat = "Outstanding";

         }

     


       echo "


       <div class=\"col-lg-12\">
       <div class=\"card card-fluid\">
       <div class=\"list-group list-group-flush list-group-divider\">

       <a  onclick=\"window.location.href='homepage.php?CHECKER=PROCEED_TO_PAY_LOAN&&LOANBY=$fullname&&BALANCE=$balance&&LOANGET=$Loanid&&TRUE=$person_id'  \" class=\"list-group-item list-group-item-action\" style=\"cursor:pointer;\">

       <div class=\"list-group-item-figure\">
       <div class=\"user-avatar\">
       $image
       </div>
       </div>

       <div class=\"list-group-item-body\">
       <h4 class=\"list-group-item-title\"> $fullname</h4>
       <p class=\"list-group-item-text text-truncate\">
       Mobile : $telephone
       </p>
       </div>

       </a> 

       </div>
       </div>
       </div>


       ";


     }

       }







   }else{



   }








 } else {


  /*--------------CUSOEMR LOAN PAY -----------*/


  $searchStatuscUSTOMER = mysqli_query($conn, "SELECT person.*, loanTab.* FROM customers person, loans_all loanTab WHERE loanTab.person_id=person.customer_id_encrypt  AND loanTab.loan_status='issued' AND loanTab.finish_paying='no' AND (person.telephone LIKE '%".$seachresultInput."%' OR person.firstname LIKE '%".$seachresultInput."%' OR person.surname LIKE '%".$seachresultInput."%' OR person.customer_id LIKE '%".$seachresultInput."%'  ) ORDER BY loanTab.id DESC  ");



  if(mysqli_num_rows($searchStatuscUSTOMER) > 0){



   while ($getall =  mysqli_fetch_assoc($searchStatuscUSTOMER)) {

    $id = $getall["id"];
    $customer_id = $getall["customer_id"];
    $customer_id_encrypt = $getall["customer_id_encrypt"];
    $firstname = $getall["firstname"];
    $surname = $getall["surname"];
    $telephone = $getall["telephone"];
    $image = $getall["image"];
    $gender = $getall["gender"];

    $fullname = $firstname . " " . $surname;



    if ($image==="" || $image==="/") {

      if ($gender==="Male") {
        $image = "
        <img src=\"assets/images/customs/male.png\" >
        ";
      } else {
        $image = "
        <img src=\"assets/images/customs/female.jpg\" >
        ";
      }


    } else {

      $image = "
      <img src=\"Datas/customers_datas/$image\" >
      ";


    }






    $selectCust2 = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND person_id='$customer_id_encrypt' AND finish_paying='no' ORDER BY id DESC ");

    while ( $getdac = mysqli_fetch_assoc($selectCust2)) {


     $Loanid = $getdac["id"];
     $person_id = $getdac["person_id"];
     $status = $getdac["status"];
     $amount_collected = $getdac["amount_collected"];
     $interest_rate = $getdac["interest_rate"];
     $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
     $interest_amount_paid = $getdac["interest_amount_paid"];
     $total_amount_to_pay = $getdac["total_amount_to_pay"];
     $amount_paid = $getdac["amount_paid"];
     $balance = $getdac["balance"];
     $date_requested = $getdac["date_requested"];
     $date_issued = $getdac["date_issued"];
     $monthly_installment = $getdac["monthly_installment"];
     $total_months_for_payment = $getdac["total_months_for_payment"];
     $months_left = $getdac["months_left"];
     $date_of_completion = $getdac["date_of_completion"];
     $next_month_payment_date = $getdac["next_month_payment_date"];
     $next_month_payment_amount = $getdac["next_month_payment_amount"];
     $had_penalty = $getdac["had_penalty"];
     $finish_paying = $getdac["finish_paying"];
     $guarantor1 = $getdac["guarantor1"];
     $guarantor1_confirm = $getdac["guarantor1_confirm"];
     $guarantor2 = $getdac["guarantor2"];
     $guarantor2_confirm = $getdac["guarantor2_confirm"];
     $loan_status = $getdac["loan_status"];
     $issued_by = $getdac["issued_by"];
     $date_added = $getdac["date_added"];
     $loan_added_by = $getdac["loan_added_by"];

     if ($finish_paying==="yes") {
       $mySTat = "Completed";
     } else {
       $mySTat = "Outstanding";

     }

   }


   echo "


   <div class=\"col-lg-12\">
   <div class=\"card card-fluid\">
   <div class=\"list-group list-group-flush list-group-divider\">

   <a  onclick=\"window.location.href='homepage.php?CHECKER=PROCEED_TO_PAY_LOAN&&LOANBY=$fullname&&BALANCE=$balance&&LOANGET=$Loanid&&TRUE=$person_id'  \" class=\"list-group-item list-group-item-action\" style=\"cursor:pointer;\">

   <div class=\"list-group-item-figure\">
   <div class=\"user-avatar\">
   $image
   </div>
   </div>

   <div class=\"list-group-item-body\">
   <h4 class=\"list-group-item-title\"> $fullname</h4>
   <p class=\"list-group-item-text text-truncate\">
   Mobile : $telephone
   </p>
   </div>

   </a> 

   </div>
   </div>
   </div>


   ";


 }


 




}else{







}













}








} else {

  /*--------------------do naothing-----------*/


}





}


/*--------------------------PAY LOANS-----------------*/

if ($_GET["CHECKPOST"]=="payLoansPost") {

  if (isset($_POST["getLoanID"]) && isset($_POST["getPersonID"]) && isset($_POST["companyRevenueAmount"]) && isset($_POST["companyRevenuePurpose"]) && isset($_POST["actuaInterestPaid"]) && isset($_POST["actuaAmountToPayperMOnth"]) && isset($_POST["actualLoanAMountWihoutInterest"]) && isset($_POST["next_month_payment_amount"]) && isset($_POST["payLoanAmountClass"]) ) {

    $getLoanID = $_POST["getLoanID"];
    $getPersonID = $_POST["getPersonID"];
    $companyRevenueAmount = $_POST["companyRevenueAmount"];
    $companyRevenuePurpose = $_POST["companyRevenuePurpose"];
    $actuaInterestPaid = $_POST["actuaInterestPaid"];
    $actuaAmountToPayperMOnth = $_POST["actuaAmountToPayperMOnth"];
    $actualLoanAMountWihoutInterest = $_POST["actualLoanAMountWihoutInterest"];
    $next_month_payment_amount = $_POST["next_month_payment_amount"];
    $payLoanAmountClass = $_POST["payLoanAmountClass"];



    if ($payLoanAmountClass!=="" ) {


      if ($payLoanAmountClass >= $next_month_payment_amount) {



       $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

       $getdac3 = mysqli_fetch_assoc($stf);

       $staffID = $getdac3["staffID"];

       $TOdated = date("jS F, Y");


       $toMonth = date("m");
       $toYear = date("Y");
       $TOdated2 = date("Y-m-d");
       $activityType = "Loan Paid";
       $StudentDescription = " A loan of  " . $payLoanAmountClass . " was paid";
       $StaffDescription = "A loan of " . $payLoanAmountClass ." was paid  By : $login_session";


       $selre = mysqli_query($conn, "SELECT id FROM loans_pay ORDER BY id DESC LIMIT 1 ");

       $getlastID = mysqli_fetch_assoc($selre);
       $ids = $getlastID["id"] + 1;

       $firstID = 1;
       $preamble = '000000';

       if (mysqli_num_rows($selre) >0) {

         if($ids<=9){
           $receiptNumber ='000000'.$ids;
         }else if($ids<=99){
           $receiptNumber ='00000'.$ids;
         }else if($ids<=999){
           $receiptNumber ='0000'.$ids;
         }else if($ids<=9999){
           $receiptNumber ='000'.$ids;
         }else if($ids<=99999){
           $receiptNumber ='00'.$ids;
         }else if($ids<=999999){
           $receiptNumber ='0'.$ids;
         }else {
           $receiptNumber =$ids;
         }
       } else {
        $receiptNumber = $preamble . $firstID;
      }



      $selectCust = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND person_id='$getPersonID' AND id='$getLoanID' LIMIT 1  ");

      $getdac = mysqli_fetch_assoc($selectCust);

      $loanID = $getdac["id"];
      $person_id = $getdac["person_id"];
      $status = $getdac["status"];
      $amount_collected = $getdac["amount_collected"];
      $interest_rate = $getdac["interest_rate"];
      $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
      $interest_amount_paid = $getdac["interest_amount_paid"];
      $total_amount_to_pay = $getdac["total_amount_to_pay"];
      $amount_paid = $getdac["amount_paid"];
      $balance = $getdac["balance"];
      $date_requested = $getdac["date_requested"];
      $date_issued = $getdac["date_issued"];
      $monthly_installment = $getdac["monthly_installment"];
      $total_months_for_payment = $getdac["total_months_for_payment"];
      $months_left = $getdac["months_left"];
      $date_of_completion = $getdac["date_of_completion"];
      $next_month_payment_date = $getdac["next_month_payment_date"];
      // $next_month_payment_amount = $getdac["next_month_payment_amount"];
      $had_penalty = $getdac["had_penalty"];
      $finish_paying = $getdac["finish_paying"];
      $guarantor1 = $getdac["guarantor1"];
      $guarantor1_confirm = $getdac["guarantor1_confirm"];
      $guarantor2 = $getdac["guarantor2"];
      $guarantor2_confirm = $getdac["guarantor2_confirm"];
      $loan_status = $getdac["loan_status"];
      $issued_by = $getdac["issued_by"];
      $date_added = $getdac["date_added"];
      $loan_added_by = $getdac["loan_added_by"];
      $quit_loan = $getdac["quit_loan"];




      $balace_before = $balance;

      $gettheInterestOnPayment = $interest_rate * $payLoanAmountClass;

      $getTheRawPrincipaAMountforPaying = $payLoanAmountClass - $gettheInterestOnPayment;

      /*---------------------------VARIABLES DECLARES-------------------*/
      $interest_amount_paid += $gettheInterestOnPayment;

      if ($quit_loan==="yes") {
        $amount_paid += $monthly_installment;
        $balance -= $monthly_installment;
      } else {

        $amount_paid += $payLoanAmountClass;
        $balance -= $payLoanAmountClass;
      }


      

      $months_left -= 1;
      $firstMonth = 01;

      $dateRequested = date("Y-m-d");

      $explodeNextMoPay = explode("-", $next_month_payment_date);
      $years = current($explodeNextMoPay);
      $month = next($explodeNextMoPay);
      $day = end($explodeNextMoPay);

      $monthPlus1 = $month + 1;


      if ($monthPlus1 > 9) {
        $beofreMonthZero ="" . $monthPlus1;
      } else {
        $beofreMonthZero = "0" . $monthPlus1;
      }



      if ($monthPlus1 > 12) {

        $nextMonthPayment = $years+1 . "-" . $firstMonth  . "-". $day;

      } else {

        $nextMonthPayment = $years . "-" . $beofreMonthZero  . "-". $day;
      }


      if ($balance<=0) {
        $finishMyPay = "yes";
      } else {
        $finishMyPay = "no";

        
      }


    $slGur = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$guarantor1'  ");

      $getPay = mysqli_fetch_assoc($slGur);

      $loanID = $getPay["id"];
      $total_guarantee1 = $getPay["total_guarantee"];





      $slGur2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$guarantor2'  ");

      $getPay2 = mysqli_fetch_assoc($slGur2);

      $loanID = $getPay2["id"];
      $total_guarantee2 = $getPay2["total_guarantee"];

     

      $total_guarantee1 -=1;
      $total_guarantee2 -=1;


      // echo "$guarantor1 >>>>>  $total_guarantee1 >>>>>++++ ";
      // echo "$guarantor2 >>>>>> $total_guarantee2 >>>>>++++ ";

      // exit();


      if (mysqli_query($conn, " UPDATE loans_all SET interest_amount_paid='$interest_amount_paid', amount_paid='$amount_paid', balance='$balance', months_left='$months_left', next_month_payment_date='$nextMonthPayment',finish_paying='$finishMyPay'  WHERE active ='yes' AND person_id='$getPersonID' AND id='$getLoanID' LIMIT 1  ")) {


 

        if ($status==="Member") {


          if ($balance<=0) {

            mysqli_query($conn, "UPDATE members SET has_loan='no' WHERE member_id_encrypt='$person_id'  AND active='yes' LIMIT 1 ");

            mysqli_query($conn, " UPDATE loans_all SET balance='0' WHERE active ='yes' AND person_id='$getPersonID' AND id='$getLoanID' LIMIT 1  ");



            if ($guarantor1===$guarantor2) {
                
                mysqli_query($conn, "UPDATE members SET total_guarantee='0' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");

            } else {
                  
                  /////////update gurantor 1
              mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee1' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");



                     /////////update gurantor 2
              mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee2' WHERE member_id='$guarantor2'  AND active='yes' LIMIT 1 ");


            }
            

          }



          mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$person_id','$activityType','$StudentDescription','$TOdated','$login_session')");

          mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$TOdated')");


        } else {


          if ($balance<=0) {

            mysqli_query($conn, "UPDATE customers SET has_loan='no' WHERE customer_id_encrypt='$person_id'  AND active='yes' LIMIT 1 ");

            mysqli_query($conn, " UPDATE loans_all SET balance='0' WHERE active ='yes' AND person_id='$getPersonID' AND id='$getLoanID' LIMIT 1  ");



            if ($guarantor1===$guarantor2) {
                
                mysqli_query($conn, "UPDATE members SET total_guarantee='0' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");

            } else {
                  
                  /////////update gurantor 1
              mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee1' WHERE member_id='$guarantor1'  AND active='yes' LIMIT 1 ");



                     /////////update gurantor 2
              mysqli_query($conn, "UPDATE members SET total_guarantee='$total_guarantee2' WHERE member_id='$guarantor2'  AND active='yes' LIMIT 1 ");


            }



          }

          mysqli_query($conn, "INSERT INTO customer_activities (customer_id,activity_type,description,datecreated,added_by) VALUES('$person_id','$activityType','$StudentDescription','$TOdated','$login_session')");

          mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$TOdated')");
        }

 
 

        mysqli_query($conn, "INSERT INTO company_revenue (person_id,loan_id,amount,purpose,purpose_date,done_by) VALUES('$getPersonID','$getLoanID','$gettheInterestOnPayment','$companyRevenuePurpose','$next_month_payment_date','$login_session ')");

        mysqli_query($conn, "INSERT INTO loan_collects (person_id,loan_id,amount,done_by) VALUES('$getPersonID','$getLoanID','$getTheRawPrincipaAMountforPaying','$login_session' )");


        mysqli_query($conn, "INSERT INTO loans_pay (person_id,loan_id,loan_collected_date,amount_collected,amount_paid,balance_before,month,year,date_paid,receipt_no,staff) VALUES('$getPersonID','$getLoanID','$date_issued','$amount_collected','$payLoanAmountClass','$balace_before','$toMonth','$toYear','$TOdated','$receiptNumber','$login_session' )");



        echo "ViewPDFS/Loans/print_loans_receipt.php?PRINT=PRINT_LOANS_PAYMENT_RECEIPT&&DATEPAY=$next_month_payment_date&&MY_LOAN=$getLoanID&&TRUE=$getPersonID&&RECEIPT=$receiptNumber";



      } else {


        echo "paymentErrors";

      }




    } else {

      echo "lessthan";

    }


  }else {
    echo "empty";
  }




} 

}







/*-----------------------------------CONFIGURATION----------------------*/
/*-------------------MEMBER INTEREST CONFIGURATION----------------------*/


/*-----------add member interest rate----------------*/
if ($_GET["CHECKPOST"]=="addMemberInteresRatePost") {

  if (isset($_POST["normalMemberInterestClass"]) &&  isset($_POST["defaulterMemberInterestClass"])) {

   $normalMemberInterestClass = $_POST["normalMemberInterestClass"];
   $defaulterMemberInterestClass = $_POST["defaulterMemberInterestClass"];

   $amountDecimalNormal = $normalMemberInterestClass / 100;
   $amountDecimalDefaulter = $defaulterMemberInterestClass / 100;


   if ($normalMemberInterestClass!==""  && $defaulterMemberInterestClass!=="") {


    if (mysqli_query($conn, "INSERT INTO member_interest (one_to_twelve_month,one_to_twelve_month_decimal,more_than_twelve_month,more_than_twelve_month_decimal,staff) VALUES('$normalMemberInterestClass','$amountDecimalNormal','$defaulterMemberInterestClass','$amountDecimalDefaulter','$login_session') ")) {

      echo "done";

      $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

      $getdac3 = mysqli_fetch_assoc($stf);

      $staffID = $getdac3["staffID"];


      $dated = date("jS F, Y");
      $activityType = "Member Interest Rate Added";
      $StaffDescription = "$amountDecimalNormal% and $amountDecimalDefaulter% Member Interest Rate was added By :  $login_session";


      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

    } else {
      echo "error";
    }


  } else {
   echo "empty";
 }




}


}





/*-----------add CUSTOMER interest rate----------------*/
if ($_GET["CHECKPOST"]=="addCustomerInteresRatePost") {

  if (isset($_POST["customerInterestClass"]) ) {

   $customerInterestClass = $_POST["customerInterestClass"];

   $amountDecimal = $customerInterestClass / 100;


   if ($customerInterestClass!=="" ) {


    if (mysqli_query($conn, "INSERT INTO customer_interest (amount,amount_decimal,staff) VALUES('$customerInterestClass','$amountDecimal','$login_session') ")) {

      echo "done";

      $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

      $getdac3 = mysqli_fetch_assoc($stf);

      $staffID = $getdac3["staffID"];


      $dated = date("jS F, Y");
      $activityType = "Customer Interest Rate Added";
      $StaffDescription = "$customerInterestClass% Customer Interest Rate was added By :  $login_session";


      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

    } else {
      echo "error";
    }


  } else {
   echo "empty";
 }




}


}


 




/*-----------add memberto pay roll list---------------*/
if ($_GET["CHECKPOST"]=="addNEwMemertoPayRoll") {

  if (isset($_POST["memberPayrollName"]) &&  isset($_POST["PayrollPositionClass"])) {

   $memberPayrollName = $_POST["memberPayrollName"];
   $PayrollPositionClass = $_POST["PayrollPositionClass"];



   if ($memberPayrollName!==""  && $PayrollPositionClass!=="") {

    $wewww = mysqli_query($conn, "SELECT * FROM payroll_members WHERE active ='yes' AND member_id='$memberPayrollName'  AND position = '$PayrollPositionClass' ");


    if (mysqli_num_rows($wewww) >0) {
     echo "Exist";
   } else {


    if (mysqli_query($conn, "INSERT INTO payroll_members (position,member_id) VALUES('$PayrollPositionClass','$memberPayrollName') ")) {

      echo "done";

    } else {
      echo "error";
    }



  }


} else {
 echo "empty";
}




}


}


/*-----------ends  memberto pay roll list---------------*/




/*-==========================delete member frompayroll--------------------------*/

if ($_GET["CHECKPOST"]=="deleteMemberFromPayRolPost") {

 $theID = $_POST["theID"];

 if (mysqli_query($conn, "UPDATE payroll_members SET active='no'  WHERE member_id='$theID' AND active='yes' LIMIT 1 " )) {


  echo "done";

} else {
  echo "errorinupdate";
}



}



/*-==========================delete member frompayroll--------------------------*/



/*-==========================delete member interest rate---------------------------*/



if ($_GET["CHECKPOST"]=="deleteMemberInteresPost") {

 $theID = $_POST["theID"];

 if (mysqli_query($conn, "UPDATE member_interest SET active='no'  WHERE id='$theID' AND active='yes' LIMIT 1 " )) {


  echo "done";

} else {
  echo "errorinupdate";
}



}



/*-==========================delete customer interest rate---------------------------*/



if ($_GET["CHECKPOST"]=="deleteCustomerInteresPost") {

 $theID = $_POST["theID"];

 if (mysqli_query($conn, "UPDATE customer_interest SET active='no'  WHERE id='$theID' AND active='yes' LIMIT 1 " )) {


  echo "done";

} else {
  echo "errorinupdate";
}



}






/*==========================RESET MEMBER PASSWORD =============================*/

if ($_GET["CHECKPOST"]=="resetMemberPasswordPost") {

  $member_id = $_POST["member_id"];

  $encrypted_password = md5($member_id);



  if (mysqli_query($conn, "UPDATE who_can_login_in SET username='$member_id',password='$encrypted_password',real_password='$member_id'  WHERE username='$member_id' AND active='yes' LIMIT 1 " )) {


    echo "done";

  } else {
    echo "errorinupdate";
  }



}








/*----------close year for only founders --------------*/
if ($_GET["CHECKPOST"]=="closeAccountForTHeYear") {

  $Fromdate = date("Y-01-01");
  $ToDate = date("Y-12-31");

  if (isset($_POST["yearToCloseAccount"]) ) {

   $yearToCloseAccount = $_POST["yearToCloseAccount"];


   if ($yearToCloseAccount!=="" ) {

    $wewww = mysqli_query($conn, "SELECT year FROM company_share_dividend_list WHERE active ='yes' AND year='$yearToCloseAccount'   ");


    if (mysqli_num_rows($wewww) >0) {
     echo "Exist";
   } else {


    $shareLeft = "";
    $returnshipShare = "";

    $forFounders = "founders";
    $forAll = "all";


    $sel = mysqli_query($conn, "SELECT * FROM payroll_members WHERE active = 'yes'  ");


    while ($gett= mysqli_fetch_assoc($sel)) {

      $id = $gett["id"];
      $position = $gett["position"];
      $member_id = $gett["member_id"];
      $date_added = $gett["date_added"];





      /*-----------------get total Expenses ----------------*/
      $getTotalExp = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE  active='yes' AND date_added
        BETWEEN '$Fromdate' AND '$ToDate'
        ORDER BY id DESC
        ");
      $getRow231 = mysqli_fetch_assoc($getTotalExp);
      $totalExpenses = $getRow231["amount"];



      /*-----------------get total REVENUE FROM REGISTRATION FEE ----------------*/
      $getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM registration_fees WHERE  active='yes' AND date_created
        BETWEEN '$Fromdate' AND '$ToDate'
        ORDER BY id DESC
        ");
      $getRow = mysqli_fetch_assoc($getCoRev); 
      $totalRegFeeesamount = $getRow["amount"];



      /*-----------------get total REVENUE INTEREST----------------*/
      $getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND date_added
        BETWEEN '$Fromdate' AND '$ToDate'
        ORDER BY id DESC
        ");
      $getRow = mysqli_fetch_assoc($getCoRev); 
      $totalContriAmount = $getRow["amount"];

      $totalRevenueHas = $totalContriAmount + $totalRegFeeesamount;

      $totalInterest = $totalRevenueHas - $totalExpenses;



      // $founderShare = 0.1 * $totalInterest;
      // $CofounderShare = 0.09 * $totalInterest;
      // $SeniorStaffShare = 0.05 * $totalInterest;
      // $juniorStaffSHare = 0.03 * $totalInterest;
      // $managements = 0.07 * $totalInterest;

      // $returnshipShare = 0.05 * $totalInterest;



      /*-------------------company returnship share -----------*/
      $returnshipShare = 0.05 * $totalInterest;
      $returnshipShare = round($returnshipShare, 2);

      $TotalBalanceAfterReturnship = $totalInterest - $returnshipShare;


      /*-------------------managements share -----------*/
      $managements = 0.07 * $TotalBalanceAfterReturnship;
      $managements = round($managements, 2);

      $TotalBalanceAfterManagement = $TotalBalanceAfterReturnship - $managements;


      /*-------------------founders share -----------*/
      $founderShare = 0.1 * $TotalBalanceAfterManagement;
      $founderShare = round($founderShare, 2); 

      $TotalBalanceAfterFounders = $TotalBalanceAfterManagement - $founderShare;


      /*-------------------CO- founders share -----------*/
      $CofounderShare = 0.09 * $TotalBalanceAfterFounders;
      $CofounderShare = round($CofounderShare, 2);

      $TotalBalanceAfterCoFounders = $TotalBalanceAfterFounders - $CofounderShare;


      /*-------------------2nd year people share -----------*/
      $SeniorStaffShare = 0.05 * $TotalBalanceAfterCoFounders;
      $SeniorStaffShare = round($SeniorStaffShare, 2);

      $TotalBalanceAfterSeniorStaffShare = $TotalBalanceAfterCoFounders - $SeniorStaffShare;


      /*-------------------3rd year people share -----------*/
      $juniorStaffSHare = 0.03 * $TotalBalanceAfterSeniorStaffShare;
      $juniorStaffSHare = round($juniorStaffSHare, 2);

      $TotalBalanceAfterjuniorStaffSHare = $TotalBalanceAfterSeniorStaffShare - $juniorStaffSHare;



      $allShares = $founderShare + $CofounderShare + $SeniorStaffShare + $juniorStaffSHare + $managements + $returnshipShare;

      $shareLeft = $totalInterest -  $allShares;




      /*--------------share for founder-----------------*/
      if ($position==="101") {
        $countFounder = mysqli_query($conn, "SELECT count(*) AS count1 FROM payroll_members WHERE active='yes' AND position='101'  ");

        $countFetch1 = mysqli_fetch_array($countFounder);
        $countTOtalFounder = $countFetch1['count1'];
        $shareAmount = $founderShare / $countTOtalFounder;

      } 



      /*--------------share for co founder-----------------*/
      if ($position==="102") {
        $countCoFounder = mysqli_query($conn, "SELECT count(*) AS count2 FROM payroll_members WHERE active='yes' AND position='102'  ");

        $countFetch2 = mysqli_fetch_array($countCoFounder);
        $countTOtalCoFounder = $countFetch2['count2'];

        $shareAmount = $CofounderShare / $countTOtalCoFounder;

      }


      /*--------------share for senior Staff-----------------*/
      if ($position==="103") {
        $countSeniorStaff = mysqli_query($conn, "SELECT count(*) AS count3 FROM payroll_members WHERE active='yes' AND position='103'  ");

        $countFetch3 = mysqli_fetch_array($countSeniorStaff);
        $countTOtalSeniorStaff = $countFetch3['count3'];

        $shareAmount = $SeniorStaffShare / $countTOtalSeniorStaff;

      }



      /*--------------share for junior Staff-----------------*/
      if ($position==="104") {
        $countJuniorStaf = mysqli_query($conn, "SELECT count(*) AS count4 FROM payroll_members WHERE active='yes' AND position='104'  ");

        $countFetch4 = mysqli_fetch_array($countJuniorStaf);
        $countTOtalJuniorStaff = $countFetch4['count4'];

        $shareAmount = $juniorStaffSHare / $countTOtalJuniorStaff;

      } 




      /*--------------share for managements-------------*/
      if ($position==="105") {
        $counManagements = mysqli_query($conn, "SELECT count(*) AS count5 FROM payroll_members WHERE active='yes' AND position='105'  ");

        $countFetch5 = mysqli_fetch_array($counManagements);
        $countTOtalManagements = $countFetch5['count5'];

        $shareAmount = $managements / $countTOtalManagements;

      } 


      mysqli_query($conn, "INSERT INTO company_share_dividend (year,member_id,amount,for_who,done_by) VALUES('$yearToCloseAccount','$member_id','$shareAmount','$forFounders', '$login_session') ");




    }



    $wew = mysqli_query($conn, "SELECT * FROM members WHERE active = 'yes' AND  total_contribution_made!='0' ");




    while ($gett = mysqli_fetch_assoc($wew)) {

      $member_idATME = $gett["member_id"];
      $total_contribution_made = $gett["total_contribution_made"];

      /*-----------------get total overal contribution ----------------*/
      $getToContribution = mysqli_query($conn, "SELECT SUM(total_contribution_made) AS total_contribution_made FROM members WHERE  active='yes'   ");
      $getRow = mysqli_fetch_assoc($getToContribution);
      $overalContributionMade = $getRow["total_contribution_made"];



      $shareAmountMem = ($total_contribution_made / $overalContributionMade ) * $shareLeft;








      if (mysqli_query($conn, "INSERT INTO company_share_dividend (year,member_id,amount,for_who,done_by) VALUES('$yearToCloseAccount','$member_idATME','$shareAmountMem','$forAll','$login_session') ")) {


      } else {
        echo "error";
      }


    }


    $yearDO = date("Y");

    mysqli_query($conn, "INSERT INTO company_returnship (year,amount) VALUES('$yearDO','$returnshipShare') ");

    mysqli_query($conn, "INSERT INTO company_share_dividend_list (year,done_by) VALUES('$yearDO','$login_session') ");


    mysqli_query($conn, " UPDATE company_expenses SET year_finish='yes' WHERE active='yes' AND date_added
      BETWEEN '$Fromdate' AND '$ToDate' AND year_finish='no'  ");


    mysqli_query($conn, " UPDATE company_revenue SET year_finish='yes' WHERE active='yes' AND date_added
      BETWEEN '$Fromdate' AND '$ToDate' AND year_finish='no'  ");


  }


} else {
 echo "empty";
}




}


}


/*-----------ends  memberto pay roll list---------------*/








/*-==========================SCHEDULE DIVIDEND SHARING FOUNDERS--------------------------*/

if ($_GET["CHECKPOST"]=="scheduleSharingFounders") {

 $year = $_POST["year"];

 $selectCust = mysqli_query($conn, "SELECT * FROM company_share_dividend WHERE active ='yes' AND year='$year' AND for_who='founders' ORDER BY id ASC "); 

 while ( $getdac = mysqli_fetch_assoc($selectCust)) {

  $Tabid = $getdac["id"];
  $year = $getdac["year"];
  $member_id = $getdac["member_id"];
  $amount = $getdac["amount"];
  $date_created = $getdac["date_created"];
  $done_by = $getdac["done_by"];


  $selectst2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$member_id' ");

  $getdac3 = mysqli_fetch_assoc($selectst2);


  $total_contribution_made = $getdac3["total_contribution_made"];

  $total_contribution_made+=$amount;

  $type = "founders";

  if (mysqli_query($conn, " UPDATE members SET total_contribution_made='$total_contribution_made' WHERE active='yes' AND member_id='$member_id'  ")) {



   mysqli_query($conn, "INSERT INTO schedule_dividen (year,type) VALUES('$year','$type')");



   $dated = date("jS F, Y");
   $activityType = "Schedule Sharing og Dividend";
   $MemberDescription = "An amount of $amount was credited to your member contribution due to schedule of $year dividend sharing ";
   $StaffDescription = "$member_id was credited with $amount for $year dividend : $login_session";

   mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

   mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$login_session','$activityType','$StaffDescription','$dated')");



 } else {
   echo "erorr";
 }




}



}








/*-==========================SCHEDULE DIVIDEND SHARING ALL--------------------------*/

if ($_GET["CHECKPOST"]=="scheduleSharingAll") {

 $year = $_POST["year"];

 $selectCust = mysqli_query($conn, "SELECT * FROM company_share_dividend WHERE active ='yes' AND year='$year' AND for_who='all' ORDER BY id ASC "); 

 while ( $getdac = mysqli_fetch_assoc($selectCust)) {

  $Tabid = $getdac["id"];
  $year = $getdac["year"];
  $member_id = $getdac["member_id"];
  $amount = $getdac["amount"];
  $date_created = $getdac["date_created"];
  $done_by = $getdac["done_by"];


  $selectst2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$member_id' ");

  $getdac3 = mysqli_fetch_assoc($selectst2);


  $total_contribution_made = $getdac3["total_contribution_made"];

  $total_contribution_made+=$amount;

  $type = "all";

  if (mysqli_query($conn, " UPDATE members SET total_contribution_made='$total_contribution_made' WHERE active='yes' AND member_id='$member_id'  ")) {



   mysqli_query($conn, "INSERT INTO schedule_dividen (year,type) VALUES('$year','$type')");



   $dated = date("jS F, Y");
   $activityType = "Schedule Sharing og Dividend";
   $MemberDescription = "An amount of $amount was credited to your member contribution due to schedule of $year dividend sharing ";
   $StaffDescription = "$member_id was credited with $amount for $year dividend : $login_session";

   mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$member_id','$activityType','$MemberDescription','$dated','$login_session')");

   mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$login_session','$activityType','$StaffDescription','$dated')");



 } else {
   echo "erorr";
 }




}



}





/*-------------------------ACCOUNTS -----------------------*/



/*======================ADD NEW EXPENSES====================*/

if ($_GET["CHECKPOST"]=="addNewExpensePost") {




  if (isset($_POST["ExpensenameCLass"]) &&  isset($_POST["TotalAmountCLassName"]) && isset($_POST["receiptNumberClass"]) ) {

   $ExpensenameCLass = $_POST["ExpensenameCLass"];
   $TotalAmountCLassName = $_POST["TotalAmountCLassName"];
   $receiptNumberClass = $_POST["receiptNumberClass"];

   $receiptNumberClass = strtolower($receiptNumberClass);

   $theYEar = date("Y");
   if ($ExpensenameCLass!=="" && $TotalAmountCLassName!=="" && $receiptNumberClass!=="" ) {

    $wew = mysqli_query($conn, "SELECT * FROM company_expenses WHERE active ='yes' AND receipt_number='$receiptNumberClass'  ");

    if (mysqli_num_rows($wew) > 0) {
      echo "exist";
    } else {

     $getTotalInteresr1 = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes'   ");
     $getRow2481 = mysqli_fetch_assoc($getTotalInteresr1);
     $totalInterest1 = $getRow2481["amount"];

     if ($TotalAmountCLassName > $totalInterest1) {
      echo "expenseless";
    } else {

      if (mysqli_query($conn, "INSERT INTO company_expenses (name,amount,receipt_number,year,date_added,done_by) VALUES('$ExpensenameCLass','$TotalAmountCLassName','$receiptNumberClass', '$theYEar','$todayDate', '$login_session') ")) {


        $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

        $getdac3 = mysqli_fetch_assoc($stf);

        $staffID = $getdac3["staffID"];


        $dated = date("jS F, Y");
        $activityType = "Expenses had been  Added";
        $StaffDescription = "$ExpensenameCLass had been added to the Expenses By :  $login_session";


        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

        echo "done";

      } else {
        echo "error";
      }



    }


  }


} else {
 echo "empty";
}




}




}

/*---------------------ends add expenses------------*/





/*======================ADD NEW BANK STATEMENTS====================*/

if ($_GET["CHECKPOST"]=="addNewBankSTatemt") {

  if (isset($_POST["TotalAmountCLassName"]) && isset($_POST["receiptNumberClass"]) ) {

   $TotalAmountCLassName = $_POST["TotalAmountCLassName"];
   $receiptNumberClass = $_POST["receiptNumberClass"];

   $receiptNumberClass = strtolower($receiptNumberClass);

   if ($TotalAmountCLassName!=="" && $receiptNumberClass!=="" ) {

    $wew = mysqli_query($conn, "SELECT * FROM company_bank_statement WHERE active ='yes' AND receipt_number='$receiptNumberClass'  ");

    if (mysqli_num_rows($wew) > 0) {
      echo "exist";
    } else {


      if (mysqli_query($conn, "INSERT INTO company_bank_statement (amount,receipt_number,done_by) VALUES('$TotalAmountCLassName','$receiptNumberClass', '$login_session') ")) {


        $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

        $getdac3 = mysqli_fetch_assoc($stf);

        $staffID = $getdac3["staffID"];


        $dated = date("jS F, Y");
        $activityType = "Expenses had been  Added";
        $StaffDescription = "$ExpensenameCLass had been added to the Expenses By :  $login_session";


        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");

        echo "done";

      } else {
        echo "error";
      }






    }


  } else {
   echo "empty";
 }




}


}













/*--------------------------------FINANCIAL REPORT STATEMENT -------------*/

if ($_GET["CHECKPOST"]=="generateFInStatemetnPost") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selActivities = mysqli_query($conn, "SELECT * FROM company_revenue WHERE

        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        ");


      $getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  active='yes' AND date_added

        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC

        ");
      $getRow = mysqli_fetch_assoc($getCoRev); 
      $totalContriAmount = round($getRow["amount"], 2);


      echo "

      <div class=\"col-md-12 \" >

      <b class=\"section-title\" style=\"font-size:25px;\">Total Income: GH&#8373; $totalContriAmount </b>

      <button  type=\"submit\" class=\"btn btn-primary \" style=\"float:right; margin-left:30px;\"  onclick=\"window.open('ViewPDFS/Accounts/print_financial_report_for_income_statement_list.php?PRINT_ALL_INCOME_REPORT_FOR_COMPANY=REVENUE&&ACTION=$totalContriAmount&&MINDATE=$fromDate&&MAXDATE=$toDate')\"> Print  <span class=\"oi oi-print\"></span>

      </button>


      </div>





      " ;





      /*-----------------------show for company revenues---------------------*/
      if (mysqli_num_rows($selActivities)!==0) {


        while ($gyt = mysqli_fetch_assoc($selActivities)) {

         $person_id = $gyt["person_id"];
         $amount = $gyt["amount"];
         $purpose = $gyt["purpose"];
         $purpose_date = $gyt["purpose_date"];
         $done_by = $gyt["done_by"];
         $date_added = $gyt["date_added"];


         $amount = number_format($amount, 2);


         $resultss = "


         <tr>
         <td> $date_added </td>
         <td> $amount </td>
         <td> $purpose </td>
         </tr>

         ";

         echo $resultss;

       }

     } else {

      echo "nothing";

    }
    /*-----------------------ends show for company revenues---------------------*/






  } else {
   echo "mismatch";
 }



} else {
 echo "empty";
}


}


}

/*--------------------------------ENDS FINANCIAL STATEMENT -------------*/









/*--------------------------------FINANCIAL REPORT STATEMENT FOR EXPENSES -------------*/

if ($_GET["CHECKPOST"]=="generateFInStatemetnPostFOrExpenses") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectExpenses = mysqli_query($conn, "SELECT * FROM company_expenses WHERE

        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        ");


      $getCoRev = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE  active='yes' AND date_added

        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC

        ");
      $getRow = mysqli_fetch_assoc($getCoRev); 
      $totalContrExpense = round($getRow["amount"], 2);


      echo "

      <div class=\"col-md-12 \" >

      <b class=\"section-title\" style=\"font-size:25px;\">Total Income: GH&#8373; $totalContrExpense </b>

      <button  type=\"submit\" class=\"btn btn-primary \" style=\"float:right; margin-left:30px;\"  onclick=\"window.open('ViewPDFS/Accounts/print_financial_report_for_income_statement_list.php?PRINT_ALL_INCOME_REPORT_FOR_COMPANY=EXPENSES&&ACTION=$totalContrExpense&&MINDATE=$fromDate&&MAXDATE=$toDate')\"> Print  <span class=\"oi oi-print\"></span>

      </button>


      </div>





      " ;




      /*-----------------------show for company expenses---------------------*/

      if (mysqli_num_rows($selectExpenses)!==0) {


        while ($gyt2 = mysqli_fetch_assoc($selectExpenses)) {

         $id = $gyt2["id"];
         $name = $gyt2["name"];
         $amount = $gyt2["amount"];
         $receipt_number = $gyt2["receipt_number"];
         $date_added = $gyt2["date_added"];
         $done_by = $gyt2["done_by"];

         $amount = number_format($amount, 2);


         $resultss = "

         <tr>
         <td> $date_added </td>
         <td> $name </td>
         <td> $amount </td>
         </tr>

         ";

         echo $resultss;

       }

     } else {

      echo "nothing";

    }

    /*-----------------------ends show for company expenses---------------------*/







  } else {
   echo "mismatch";
 }



} else {
 echo "empty";
}


}


}

/*--------------------------------ENDS FINANCIAL STATEMENT -------------*/















/*-------------------------REPORTS----------------------*/








/*-------------------------------MEMBER LIST REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getMemberListReportsPost") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 




      $selcCustMale = mysqli_query($conn, "SELECT count(*) AS CountMale FROM members WHERE active='yes' AND gender='Male' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getMale = mysqli_fetch_array($selcCustMale);
      $MaleTOtal = $getMale['CountMale'];



      $selcCustFemale = mysqli_query($conn, "SELECT count(*) AS CountFeMale FROM members WHERE active='yes' AND gender='Female' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFeMale = mysqli_fetch_array($selcCustFemale);
      $FeMaleTOtal = $getFeMale['CountFeMale'];


      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM members WHERE active='yes'  AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Members/print_all_members_list.php?PRINT=PRINT_ALL_MEMBERS_LIST_FOR_ALL&&MALE=$MaleTOtal&&FEMALE=$FeMaleTOtal&&TOTAL=$TotalMEmber&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";



      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getAlls = mysqli_fetch_assoc($selectAllMEmbers)) {

         $id = $getAlls["id"];
         $member_id = $getAlls["member_id"];
         $member_id_encrypt = $getAlls["member_id_encrypt"];
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
         $contribution_amount = number_format($getAlls["contribution_amount"], 2);
         $total_contribution_made = number_format($getAlls["total_contribution_made"], 2);
         $image = $getAlls["image"];
         $next_of_kin_name = $getAlls["next_of_kin_name"];
         $next_of_kin_mobile = $getAlls["next_of_kin_mobile"];
         $next_of_kin_resi_address = $getAlls["next_of_kin_resi_address"];

         $next_of_kin_name_2 = $getAlls["next_of_kin_name_2"];
         $next_of_kin_mobile_2 = $getAlls["next_of_kin_mobile_2"];
         $next_of_kin_name_3 = $getAlls["next_of_kin_name_3"];
         $next_of_kin_mobile_3 = $getAlls["next_of_kin_mobile_3"];
         $next_of_kin_name_4 = $getAlls["next_of_kin_name_4"];
         $next_of_kin_mobile_4 = $getAlls["next_of_kin_mobile_4"];
         $next_of_kin_name_5 = $getAlls["next_of_kin_name_5"];
         $next_of_kin_mobile_5 = $getAlls["next_of_kin_mobile_5"];
         $staff = $getAlls["staff"];
         $date_created = $getAlls["date_created"];


         $fullname = $firstname . " " . $surname;

         $getShortName = substr($firstname, 0,1);


         $resultss = "


         <tr>
         <td class=\"align-middle px-0\" style=\"width: 1.5rem\">
         <button type=\"button\" class=\"btn btn-sm btn-icon btn-light\" data-toggle=\"collapse\" data-target=\"#details-2020158584$id\"><span class=\"collapse-indicator\"><i class=\"fa fa-angle-right\"></i></span></button>
         </td>


         <td class=\"align-middle\">
         $member_id
         </td>

         <td class=\"align-middle\"> $fullname </td>
         <td class=\"align-middle\"> $telephone </td>
         <td class=\"align-middle\"> $contribution_amount </td>
         <td class=\"align-middle\"> $total_contribution_made </td>
         <td class=\"align-middle\"> $date_created </td>


         </tr>
         <tr class=\"row-details bg-light collapse\" id=\"details-2020158584$id\">
         <td colspan=\"6\">
         <div class=\"row\">
         <div class=\"col-md-2 text-center\">
         <div class=\"tile tile-xl tile-circle bg-purple mb-2\"> $getShortName </div>
         <h3 class=\"card-title mb-4\"> $member_id </h3>
         <h3 class=\"card-title mb-4\"> $fullname </h3>
         </div>



         <div class=\"col-md-5\">
         <table class=\"table table-bordered\">
         <tbody>
         <tr>
         <th> contribution_amount </th>
         <td> $firstname </td>
         </tr>
         <tr>
         <th> firstname </th>
         <td> $firstname </td>
         </tr>
         <tr>
         <th> surname </th>
         <td> $surname</td>
         </tr>
         <tr>
         <th> residencial_address </th>
         <td> $residencial_address</td>
         </tr>
         <tr>
         <th> postal_address  </th>
         <td> <address>$postal_address </address> </td>
         </tr>
         <tr>
         <th> place_of_work </th>
         <td> $place_of_work </td>
         </tr>
         <tr>
         <th> home_town Address </th>
         <td> $home_town </td>
         </tr>
         <tr>
         <th> email </th>
         <td> $email  </td>
         </tr>


         </tbody>
         </table>
         </div>




         <div class=\"col-md-5\">
         <table class=\"table table-bordered\">
         <tbody>
         <tr>
         <th> Gender </th>
         <td> $gender  </td>
         </tr>

         <tr>
         <th> telephone </th>
         <td> $telephone </td>
         </tr>
         <tr>
         <th> dob </th>
         <td> $dob</td>
         </tr>
         <tr>
         <th> marital_status </th>
         <td> $marital_status</td>
         </tr>
         <tr>
         <th> next_of_kin_name  </th>
         <td> <address>$next_of_kin_name </address> </td>
         </tr>
         <tr>
         <th> next_of_kin_mobile </th>
         <td> $next_of_kin_mobile </td>
         </tr>
         <tr>
         <th> next_of_kin_resi_address </th>
         <td> $next_of_kin_resi_address </td>
         </tr>
         <tr>
         <th> date_created </th>
         <td> $date_created  </td>
         </tr>
         </tbody>
         </table>
         </div>






         </div>
         </td>
         </tr>


         ";

         echo $resultss;

       }

     } else {

      echo "nothing";

    }





  } else {
   echo "mismatch";
 }



} else {
 echo "empty";
}


}


}

/*-------------------------------ENDS MEMBER LIST REPORTS -------------*/








/*-------------------------------CUSTOEMRS LIST REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getCustoemrListReportsPost") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllCustomer = mysqli_query($conn, "SELECT * FROM customers WHERE active ='yes' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 




      $selcCustMale = mysqli_query($conn, "SELECT count(*) AS CountMale FROM customers WHERE active='yes' AND gender='Male' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getMale = mysqli_fetch_array($selcCustMale);
      $MaleTOtal = $getMale['CountMale'];



      $selcCustFemale = mysqli_query($conn, "SELECT count(*) AS CountFeMale FROM customers WHERE active='yes' AND gender='Female' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFeMale = mysqli_fetch_array($selcCustFemale);
      $FeMaleTOtal = $getFeMale['CountFeMale'];


      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM customers WHERE active='yes'  AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Customers/print_all_customers_list.php?PRINT=PRINT_ALL_MEMBERS_LIST_FOR_ALL&&MALE=$MaleTOtal&&FEMALE=$FeMaleTOtal&&TOTAL=$TotalMEmber&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";



      if (mysqli_num_rows($selectAllCustomer)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllCustomer)) {

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
         $next_of_kin_name = $getdac["next_of_kin_name"];
         $next_of_kin_mobile = $getdac["next_of_kin_mobile"];
         $next_of_kin_resi_address = $getdac["next_of_kin_resi_address"];
         $date_created = $getdac["date_created"];

         $fullname = $firstname . " " . $surname;

         $getShortName = substr($firstname, 0,1);


         $resultss = "


         <tr>
         <td class=\"align-middle px-0\" style=\"width: 1.5rem\">
         <button type=\"button\" class=\"btn btn-sm btn-icon btn-light\" data-toggle=\"collapse\" data-target=\"#details-2020158584$id\"><span class=\"collapse-indicator\"><i class=\"fa fa-angle-right\"></i></span></button>
         </td>


         <td class=\"align-middle\">
         $customer_id
         </td>

         <td class=\"align-middle\"> $fullname </td>
         <td class=\"align-middle\"> $telephone </td>
         <td class=\"align-middle\"> $residencial_address </td>
         <td class=\"align-middle\"> $home_town </td>
         <td class=\"align-middle\"> $date_created </td>


         </tr>
         <tr class=\"row-details bg-light collapse\" id=\"details-2020158584$id\">
         <td colspan=\"6\">
         <div class=\"row\">
         <div class=\"col-md-2 text-center\">
         <div class=\"tile tile-xl tile-circle bg-purple mb-2\"> $getShortName </div>
         <h3 class=\"card-title mb-4\"> $customer_id </h3>
         <h3 class=\"card-title mb-4\"> $fullname </h3>
         </div>



         <div class=\"col-md-5\">
         <table class=\"table table-bordered\">
         <tbody>

         <tr>
         <th> firstname </th>
         <td> $firstname </td>
         </tr>
         <tr>
         <th> surname </th>
         <td> $surname</td>
         </tr>
         <tr>
         <th> residencial_address </th>
         <td> $residencial_address</td>
         </tr>
         <tr>
         <th> postal_address  </th>
         <td> <address>$postal_address </address> </td>
         </tr>
         <tr>
         <th> place_of_work </th>
         <td> $place_of_work </td>
         </tr>
         <tr>
         <th> home_town Address </th>
         <td> $home_town </td>
         </tr>
         <tr>
         <th> email </th>
         <td> $email  </td>
         </tr>


         </tbody>
         </table>
         </div>




         <div class=\"col-md-5\">
         <table class=\"table table-bordered\">
         <tbody>
         <tr>
         <th> Gender </th>
         <td> $gender  </td>
         </tr>

         <tr>
         <th> telephone </th>
         <td> $telephone </td>
         </tr>
         <tr>
         <th> dob </th>
         <td> $dob</td>
         </tr>
         <tr>
         <th> marital_status </th>
         <td> $marital_status</td>
         </tr>
         <tr>
         <th> next_of_kin_name  </th>
         <td> <address>$next_of_kin_name </address> </td>
         </tr>
         <tr>
         <th> next_of_kin_mobile </th>
         <td> $next_of_kin_mobile </td>
         </tr>
         <tr>
         <th> next_of_kin_resi_address </th>
         <td> $next_of_kin_resi_address </td>
         </tr>
         <tr>
         <th> date_created </th>
         <td> $date_created  </td>
         </tr>
         </tbody>
         </table>
         </div>






         </div>
         </td>
         </tr>


         ";

         echo $resultss;

       }

     } else {

      echo "nothing";

    }





  } else {
   echo "mismatch";
 }



} else {
 echo "empty";
}


}


}

/*-------------------------------ENDS CUSTOEMRS LIST REPORTS -------------*/





/*-------------------------------MEMBER CONTRIBUTIONS LIST REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getMemberContributionListReportsPost") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM members_contributions WHERE active ='yes' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 




      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM members_contributions WHERE active='yes'  AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Members/print_all_member_contribution_list.php?PRINT=PRINT_ALL_MEMBERS_LIST_FOR_ALL&&TOTAL=$TotalMEmber&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print All</span></button> 

      </div>


      ";



      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


          $Tabid = $getdac["id"];
          $member_id = $getdac["member_id"];
          $member_id_encrypt = $getdac["member_id_encrypt"];
          $year = $getdac["year"];
          $month = $getdac["month"];
          $amount = number_format($getdac["amount"], 2);
          $receipt_number = $getdac["receipt_number"];
          $date_paid = $getdac["date_paid"];
          $date_created = $getdac["date_created"];
          $done_by = $getdac["done_by"];


          $selectst = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$done_by' ");

          $getdac2 = mysqli_fetch_assoc($selectst);

          $id = $getdac2["id"];
          $firstName = $getdac2["firstName"];
          $lastName = $getdac2["lastName"];

          $staffName = $firstName . " " . $lastName;



          $selectst2 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id_encrypt='$member_id_encrypt' ");

          $getdac3 = mysqli_fetch_assoc($selectst2);

          $id = $getdac3["id"];
          $member_id = $getdac3["member_id"];
          $member_id_encrypt = $getdac3["member_id_encrypt"];
          $firstname = $getdac3["firstname"];
          $surname = $getdac3["surname"];
          $telephone = $getdac3["telephone"];

          $memberName = $firstname . " " . $surname;


          $resultss = "

          <tr class=\"getsearch\">

          <td class=\"align-middle\"> $member_id </td>
          <td class=\"align-middle\">  $memberName  </td>
          <td class=\"align-middle\">  $telephone  </td>
          <td class=\"align-middle\">  $amount  </td>
          <td class=\"align-middle\">  $month  </td>
          <td class=\"align-middle\">  $year  </td>
          <td class=\"align-middle\">  $date_created  </td>
          <td class=\"align-middle\">  $staffName  </td>
          <td class=\"align-middle\" >  

          <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Members/print_member_contribution_individual.php?PRINT=PRINT_ALL_MEMBERS_LIST_FOR_ALL&&MEMBER_ID=$member_id&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button>


          </td>

          </tr>

          ";

          echo $resultss;

        }

      } else {

        echo "nothing";

      }





    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}


}

/*-------------------------------ENDS MEMBER CONTRIBUTIONS LIST REPORTS -------------*/









/*------------------------------LOANS LIST REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getlOANSrEPORTSpOST") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $getLoanTypeName  = $_POST["getLoanTypeName"];
    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectLoanTypee = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND loan_status='issued' AND status='$getLoanTypeName' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 


      $selectLoanAll = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND loan_status='issued'  AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 



      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM loans_all WHERE active='yes'  AND loan_status='issued' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];


      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/loans/print_all_loans_list.php?PRINT=PRINT_ALL_LOANS_CONTRIBUTION_LIST_FOR_ALL&&TOTAL=$TotalMEmber&&MINDATE=$fromDate&&MAXDATE=$toDate&&TRUE=$getLoanTypeName')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";


      if ($getLoanTypeName==="Member") {


        if (mysqli_num_rows($selectLoanTypee)!==0) {


          while ($getdac = mysqli_fetch_assoc($selectLoanTypee)) {


           $id = $getdac["id"];
           $person_id = $getdac["person_id"];
           $status = $getdac["status"];
           $amount_collected = number_format($getdac["amount_collected"], 2);
           $interest_rate = $getdac["interest_rate"];
           $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
           $interest_amount_paid = $getdac["interest_amount_paid"];
           $total_amount_to_pay = number_format($getdac["total_amount_to_pay"], 2);
           $amount_paid = $getdac["amount_paid"];
           $balance = number_format( $getdac["balance"], 2);
           $date_requested = $getdac["date_requested"];
           $date_issued = $getdac["date_issued"];
           $monthly_installment = number_format($getdac["monthly_installment"], 2);
           $total_months_for_payment = $getdac["total_months_for_payment"];
           $months_left = $getdac["months_left"];
           $date_of_completion = $getdac["date_of_completion"];
           $next_month_payment_date = $getdac["next_month_payment_date"];
           $next_month_payment_amount = $getdac["next_month_payment_amount"];
           $had_penalty = $getdac["had_penalty"];
           $finish_paying = $getdac["finish_paying"];
           $guarantor1 = $getdac["guarantor1"];
           $guarantor1_confirm = $getdac["guarantor1_confirm"];
           $guarantor2 = $getdac["guarantor2"];
           $guarantor2_confirm = $getdac["guarantor2_confirm"];
           $loan_status = $getdac["loan_status"];
           $issued_by = $getdac["issued_by"];
           $date_added = $getdac["date_added"];
           $loan_added_by = $getdac["loan_added_by"];


           if ($total_months_for_payment==="1") {
            $MonthsString = "Month";
          } else {
            $MonthsString = "Months";

          }


          if ($finish_paying==="yes") {
           $mySTat = "Completed";
         } else {
           $mySTat = "Outstanding";

         }





         if ($status==="Customer") {

          $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

          $getDemMem = mysqli_fetch_assoc($selMems);

          $person_idss = $getDemMem["customer_id"];
          $firstname = $getDemMem["firstname"];
          $surname = $getDemMem["surname"];
          $telephone = $getDemMem["telephone"];

          $personName = $firstname . ' ' .  $surname ;

        } else {
          $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

          $getDemMem = mysqli_fetch_assoc($selMems);

          $person_idss = $getDemMem["member_id"];
          $firstname = $getDemMem["firstname"];
          $surname = $getDemMem["surname"];
          $telephone = $getDemMem["telephone"];

          $personName = $firstname .  ' ' .  $surname ;
        }


        $resultss = "

        <tr>

        <td class=\"align-middle\">
        $person_idss
        </td>

        <td class=\"align-middle\">  $personName  </td>
        <td class=\"align-middle\"> <span class=\"badge badge-subtle badge-primary\" style=\"font-size: 16px;\"> $status  </span> </td>
        <td class=\"align-middle\">  $telephone  </td>
        <td class=\"align-middle\"><span class=\"badge badge-subtle badge-warning\" style=\"font-size: 16px;\">  $amount_collected </span> </td>
        <td class=\"align-middle\"><span class=\"badge badge-subtle badge-primary\" style=\"font-size: 16px;\">  $total_amount_to_pay </span> </td>
        <td class=\"align-middle\"><span class=\"badge badge-subtle badge-success\" style=\"font-size: 16px;\">  $balance </span> </td>

        <td class=\"align-middle\"><span class=\"badge badge-subtle badge-success\" style=\"font-size: 16px;\">  $monthly_installment </span> </td>


        <td class=\"align-middle\">  $date_issued  </td>
        <td class=\"align-middle\">  $total_months_for_payment   $MonthsString  </td>

        <td class=\"align-middle\">  $mySTat  </td>



        </tr>

        ";

        echo $resultss;

      }

    } else {

      echo "nothing";

    }





  }else if ($getLoanTypeName==="Customer") {


    if (mysqli_num_rows($selectLoanTypee)!==0) {


      while ($getdac = mysqli_fetch_assoc($selectLoanTypee)) {


       $id = $getdac["id"];
       $person_id = $getdac["person_id"];
       $status = $getdac["status"];
       $amount_collected = number_format($getdac["amount_collected"], 2);
       $interest_rate = $getdac["interest_rate"];
       $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
       $interest_amount_paid = $getdac["interest_amount_paid"];
       $total_amount_to_pay = number_format($getdac["total_amount_to_pay"], 2);
       $amount_paid = $getdac["amount_paid"];
       $balance = number_format( $getdac["balance"], 2);
       $date_requested = $getdac["date_requested"];
       $date_issued = $getdac["date_issued"];
       $monthly_installment = number_format($getdac["monthly_installment"], 2);
       $total_months_for_payment = $getdac["total_months_for_payment"];
       $months_left = $getdac["months_left"];
       $date_of_completion = $getdac["date_of_completion"];
       $next_month_payment_date = $getdac["next_month_payment_date"];
       $next_month_payment_amount = $getdac["next_month_payment_amount"];
       $had_penalty = $getdac["had_penalty"];
       $finish_paying = $getdac["finish_paying"];
       $guarantor1 = $getdac["guarantor1"];
       $guarantor1_confirm = $getdac["guarantor1_confirm"];
       $guarantor2 = $getdac["guarantor2"];
       $guarantor2_confirm = $getdac["guarantor2_confirm"];
       $loan_status = $getdac["loan_status"];
       $issued_by = $getdac["issued_by"];
       $date_added = $getdac["date_added"];
       $loan_added_by = $getdac["loan_added_by"];


       if ($total_months_for_payment==="1") {
        $MonthsString = "Month";
      } else {
        $MonthsString = "Months";

      }


      if ($finish_paying==="yes") {
       $mySTat = "Completed";
     } else {
       $mySTat = "Outstanding";

     }





     if ($status==="Customer") {

      $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

      $getDemMem = mysqli_fetch_assoc($selMems);

      $person_idss = $getDemMem["customer_id"];
      $firstname = $getDemMem["firstname"];
      $surname = $getDemMem["surname"];
      $telephone = $getDemMem["telephone"];

      $personName = $firstname . ' ' .  $surname ;

    } else {
      $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

      $getDemMem = mysqli_fetch_assoc($selMems);

      $person_idss = $getDemMem["member_id"];
      $firstname = $getDemMem["firstname"];
      $surname = $getDemMem["surname"];
      $telephone = $getDemMem["telephone"];

      $personName = $firstname .  ' ' .  $surname ;
    }


    $resultss = "

    <tr>

    <td class=\"align-middle\">
    $person_idss
    </td>

    <td class=\"align-middle\">  $personName  </td>
    <td class=\"align-middle\"> <span class=\"badge badge-subtle badge-primary\" style=\"font-size: 16px;\"> $status  </span> </td>
    <td class=\"align-middle\">  $telephone  </td>
    <td class=\"align-middle\"><span class=\"badge badge-subtle badge-warning\" style=\"font-size: 16px;\">  $amount_collected </span> </td>
    <td class=\"align-middle\"><span class=\"badge badge-subtle badge-primary\" style=\"font-size: 16px;\">  $total_amount_to_pay </span> </td>
    <td class=\"align-middle\"><span class=\"badge badge-subtle badge-success\" style=\"font-size: 16px;\">  $balance </span> </td>

    <td class=\"align-middle\"><span class=\"badge badge-subtle badge-success\" style=\"font-size: 16px;\">  $monthly_installment </span> </td>


    <td class=\"align-middle\">  $date_issued  </td>
    <td class=\"align-middle\">  $total_months_for_payment   $MonthsString  </td>

    <td class=\"align-middle\">  $mySTat  </td>



    </tr>

    ";

    echo $resultss;

  }

} else {

  echo "nothing";

}







}else{




  if (mysqli_num_rows($selectLoanAll)!==0) {


    while ($getdac = mysqli_fetch_assoc($selectLoanAll)) {


     $id = $getdac["id"];
     $person_id = $getdac["person_id"];
     $status = $getdac["status"];
     $amount_collected = number_format($getdac["amount_collected"], 2);
     $interest_rate = $getdac["interest_rate"];
     $total_interest_rate_amount = $getdac["total_interest_rate_amount"];
     $interest_amount_paid = $getdac["interest_amount_paid"];
     $total_amount_to_pay = number_format($getdac["total_amount_to_pay"], 2);
     $amount_paid = $getdac["amount_paid"];
     $balance = number_format( $getdac["balance"], 2);
     $date_requested = $getdac["date_requested"];
     $date_issued = $getdac["date_issued"];
     $monthly_installment = number_format($getdac["monthly_installment"], 2);
     $total_months_for_payment = $getdac["total_months_for_payment"];
     $months_left = $getdac["months_left"];
     $date_of_completion = $getdac["date_of_completion"];
     $next_month_payment_date = $getdac["next_month_payment_date"];
     $next_month_payment_amount = $getdac["next_month_payment_amount"];
     $had_penalty = $getdac["had_penalty"];
     $finish_paying = $getdac["finish_paying"];
     $guarantor1 = $getdac["guarantor1"];
     $guarantor1_confirm = $getdac["guarantor1_confirm"];
     $guarantor2 = $getdac["guarantor2"];
     $guarantor2_confirm = $getdac["guarantor2_confirm"];
     $loan_status = $getdac["loan_status"];
     $issued_by = $getdac["issued_by"];
     $date_added = $getdac["date_added"];
     $loan_added_by = $getdac["loan_added_by"];


     if ($total_months_for_payment==="1") {
      $MonthsString = "Month";
    } else {
      $MonthsString = "Months";

    }


    if ($finish_paying==="yes") {
     $mySTat = "Completed";
   } else {
     $mySTat = "Outstanding";

   }





   if ($status==="Customer") {

    $selMems = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

    $getDemMem = mysqli_fetch_assoc($selMems);

    $person_idss = $getDemMem["customer_id"];
    $firstname = $getDemMem["firstname"];
    $surname = $getDemMem["surname"];
    $telephone = $getDemMem["telephone"];

    $personName = $firstname . ' ' .  $surname ;

  } else {
    $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  LIMIT 1  ");

    $getDemMem = mysqli_fetch_assoc($selMems);

    $person_idss = $getDemMem["member_id"];
    $firstname = $getDemMem["firstname"];
    $surname = $getDemMem["surname"];
    $telephone = $getDemMem["telephone"];

    $personName = $firstname .  ' ' .  $surname ;
  }


  $resultss = "

  <tr>

  <td class=\"align-middle\">
  $person_idss
  </td>

  <td class=\"align-middle\">  $personName  </td>
  <td class=\"align-middle\"> <span class=\"badge badge-subtle badge-primary\" style=\"font-size: 16px;\"> $status  </span> </td>
  <td class=\"align-middle\">  $telephone  </td>
  <td class=\"align-middle\"><span class=\"badge badge-subtle badge-warning\" style=\"font-size: 16px;\">  $amount_collected </span> </td>
  <td class=\"align-middle\"><span class=\"badge badge-subtle badge-primary\" style=\"font-size: 16px;\">  $total_amount_to_pay </span> </td>
  <td class=\"align-middle\"><span class=\"badge badge-subtle badge-success\" style=\"font-size: 16px;\">  $balance </span> </td>

  <td class=\"align-middle\"><span class=\"badge badge-subtle badge-success\" style=\"font-size: 16px;\">  $monthly_installment </span> </td>


  <td class=\"align-middle\">  $date_issued  </td>
  <td class=\"align-middle\">  $total_months_for_payment   $MonthsString  </td>

  <td class=\"align-middle\">  $mySTat  </td>



  </tr>

  ";

  echo $resultss;

}

} else {

  echo "nothing";

}









}


} else {
  echo "mismatch";
}



} else {
  echo "empty";
}


}


}

/*-------------------------------ENDS LOANS LIST REPORTS -------------*/










/*----------------------------LOANS INTEREST REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getLoanInterestPost") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    $purpose1 = "Loan Interest";
    $purpose2 = "Loans Interest Paid by the Guarantors";
    $purpose3 = "Loan Interest and Penalty Interest";


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM company_revenue WHERE ( purpose='$purpose1' OR purpose='$purpose2' OR purpose='$purpose3' ) AND  active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 





      $getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE ( purpose='$purpose1' OR purpose='$purpose2' OR purpose='$purpose3' ) AND  active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 

      $getRow = mysqli_fetch_assoc($getToContribution);
      $totalContriamount = $getRow["amount"];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Loan_Interest/print_all_loan_interest_list.php?PRINT=PRINT_ALL_LOAN_INTEREST_FOR_ALL&&TOTAL=$totalContriamount&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";


      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


          $person_id = $getdac["person_id"];
          $amount = number_format($getdac["amount"], 2);
          $date_added = $getdac["date_added"];
          $done_by = $getdac["done_by"];
          $loan_id = $getdac["loan_id"];


          $loanIDD = mysqli_query($conn, "SELECT * FROM loans_all WHERE id='$loan_id' AND active='yes' LIMIT 1 ");
          $llI = mysqli_fetch_assoc($loanIDD);

          $status = $llI["status"];


          if ($status==="Member") {
            $memB = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");
            $memaame = mysqli_fetch_assoc($memB);

            $firstname = $memaame["firstname"];
            $surname = $memaame["surname"];
            $persnaNames = $firstname . " " . $surname;
          } else {
           $memB = mysqli_query($conn, "SELECT * FROM customers WHERE customer_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");
           $memaame = mysqli_fetch_assoc($memB);

           $firstname = $memaame["firstname"];
           $surname = $memaame["surname"];
           $persnaNames = $firstname . " " . $surname;
         }

         $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by' AND active='yes' LIMIT 1 ");
         $ahemvals = mysqli_fetch_assoc($staffss);

         $firstName = $ahemvals["firstName"];
         $lastName = $ahemvals["lastName"];
         $staffFullNAme = $firstName . " " . $lastName;






         $resultss = "

         <tr>

         <td class=\"align-middle\"> $persnaNames </td>
         <td class=\"align-middle\"> $amount </td>
         <td class=\"align-middle\"> $date_added </td>
         <td class=\"align-middle\"> $staffFullNAme </td>

         </tr>

         ";

         echo $resultss;

       }

     } else {

      echo "nothing";

    }





  } else {
   echo "mismatch";
 }



} else {
 echo "empty";
}


}


}

/*------------------------------ENDS LOANS INTEREST REPORTS -------------*/













/*---------------------------GENERATE CONTRIBUTION PENALTY REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getContributionPenltyP") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    $purpose1 = "Penalty For member contribution";

    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM company_revenue WHERE  purpose='$purpose1' AND  active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 





      $getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE  purpose='$purpose1' AND  active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 

      $getRow = mysqli_fetch_assoc($getToContribution);
      $totalContriamount = $getRow["amount"];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Contributions_Penalty/print_all_contribution_penalty_list.php?PRINT=PRINT_ALL_CONTRIBUTION_PENALTY_FOR_ALL&&TOTAL=$totalContriamount&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";


      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


          $person_id = $getdac["person_id"];
          $amount = number_format($getdac["amount"], 2);
          $date_added = $getdac["date_added"];
          $done_by = $getdac["done_by"];
          $loan_id = $getdac["loan_id"];


          $memB = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");
          $memaame = mysqli_fetch_assoc($memB);

          $firstname = $memaame["firstname"];
          $surname = $memaame["surname"];
          $persnaNames = $firstname . " " . $surname;


          $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$done_by' AND active='yes' LIMIT 1 ");
          $ahemvals = mysqli_fetch_assoc($staffss);

          $firstName = $ahemvals["firstName"];
          $lastName = $ahemvals["lastName"];
          $staffFullNAme = $firstName . " " . $lastName;






          $resultss = "

          <tr>

          <td class=\"align-middle\"> $persnaNames </td>
          <td class=\"align-middle\"> $amount </td>
          <td class=\"align-middle\"> $date_added </td>
          <td class=\"align-middle\"> $staffFullNAme </td>

          </tr>

          ";

          echo $resultss;

        }

      } else {

        echo "nothing";

      }





    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}


}

/*------------------------------ENDS GENERATE CONTRIBUTION PENALTY REPORTS -------------*/




























/*------------------------------COMPANY RETURS REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getCompanyReturnRepots") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM company_returnship WHERE active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 




      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM company_returnship WHERE active='yes'  AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];




      // echo "

      // <div class=\"btn-toolbar\">
      // <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Members/print_all_member_contribution_list.php?PRINT=PRINT_ALL_MEMBERS_LIST_FOR_ALL&&TOTAL=$TotalMEmber&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      // </div>


      // ";



      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


          $Tabid = $getdac["id"];
          $year = $getdac["year"];
          $amount = number_format($getdac["amount"], 2);
          $date_added = $getdac["date_added"];

          $resultss = "

          <tr>

          <td class=\"align-middle\"> $Tabid </td>
          <td class=\"align-middle\">  $year  </td>
          <td class=\"align-middle\">  $amount  </td>
          <td class=\"align-middle\">  $date_added  </td>

          </tr>

          ";

          echo $resultss;

        }

      } else {

        echo "nothing";

      }





    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}


}

/*------------------------------ENDS COMPANY RETURS REPORTS -------------*/











/*------------------------------COMPANY EXPENSES REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getCompanyExpensesRepots") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];




    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM company_expenses WHERE active ='yes' AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 




      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM company_expenses WHERE active='yes'  AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];



      $getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE active='yes'  AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");
      $getRow = mysqli_fetch_assoc($getToContribution);
      $totalContriAmount = $getRow["amount"];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Expenses/print_all_company_expenses_list.php?PRINT=PRINT_ALL_COMPANY_EXPENSES_FOR_ALL&&TOTAL=$totalContriAmount&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";


      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


          $name = $getdac["name"];
          $amount = number_format($getdac["amount"], 2);
          $receipt_number = $getdac["receipt_number"];
          $year = $getdac["year"];
          $date_added = $getdac["date_added"];
          $done_by = $getdac["done_by"];


          $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$done_by' AND active='yes' LIMIT 1 ");
          $ahemvals = mysqli_fetch_assoc($staffss);

          $firstName = $ahemvals["firstName"];
          $lastName = $ahemvals["lastName"];
          $staffFullNAme = $firstName . " " . $lastName;

          $resultss = "

          <tr>

          <td class=\"align-middle\"> $name </td>
          <td class=\"align-middle\"> $amount </td>
          <td class=\"align-middle\"> $receipt_number </td>
          <td class=\"align-middle\"> $year </td>
          <td class=\"align-middle\"> $date_added </td>
          <td class=\"align-middle\"> $staffFullNAme </td>

          </tr>

          ";

          echo $resultss;

        }

      } else {

        echo "nothing";

      }





    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}


}

/*------------------------------ENDS COMPANY EXPENSES REPORTS -------------*/









/*------------------------------COMPANY REGISTRATION FEES REPORTS -------------*/

if ($_GET["CHECKPOST"]=="getCompanyRegistrationFee") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];




    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {


      $selectAllMEmbers = mysqli_query($conn, "SELECT * FROM registration_fees WHERE active ='yes' AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC 

        "); 




      $seleAll = mysqli_query($conn, "SELECT count(*) AS CountAll FROM registration_fees WHERE active='yes'  AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");

      $getFAll = mysqli_fetch_array($seleAll);
      $TotalMEmber = $getFAll['CountAll'];



      $getToContribution = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM registration_fees WHERE active='yes'  AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");
      $getRow = mysqli_fetch_assoc($getToContribution);
      $totalContriAmount = $getRow["amount"];




      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-light\" onclick=\"window.open('ViewPDFS/Reports/Registration_Fees/print_all_company_registration_fees_list.php?PRINT=PRINT_ALL_MEMBER_REGISTRATION_FEE_FOR_ALL&&TOTAL=$totalContriAmount&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>


      ";


      if (mysqli_num_rows($selectAllMEmbers)!==0) {


        while ($getdac = mysqli_fetch_assoc($selectAllMEmbers)) {


          $member_id = $getdac["member_id"];
          $amount = $getdac["amount"];
          $receipt_number = $getdac["receipt_number"];
          $date_created = $getdac["date_created"];
          $done_by = $getdac["done_by"];


          $staffsslo = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$member_id' AND active='yes' LIMIT 1 ");
          $bab = mysqli_fetch_assoc($staffsslo);

          $member_id = $bab["member_id"];
          $member_id_encrypt = $bab["member_id_encrypt"];
          $firstname = $bab["firstname"];
          $surname = $bab["surname"];
          $telephone = $bab["telephone"];

          $memberFullName = $firstname . " " . $surname;





          $staffss = mysqli_query($conn, "SELECT * FROM staff WHERE id='$done_by' AND active='yes' LIMIT 1 ");
          $ahemvals = mysqli_fetch_assoc($staffss);

          $firstName = $ahemvals["firstName"];
          $lastName = $ahemvals["lastName"];
          $staffFullNAme = $firstName . " " . $lastName;

          $resultss = "

          <tr>

          <td class=\"align-middle\"> $memberFullName </td>
          <td class=\"align-middle\"> $amount </td>
          <td class=\"align-middle\"> $receipt_number </td>
          <td class=\"align-middle\"> $date_created </td>
          <td class=\"align-middle\"> $staffFullNAme </td>

          </tr>

          ";

          echo $resultss;

        }

      } else {

        echo "nothing";

      }





    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}


}

/*------------------------------ENDS COMPANY REGISTRATION FEES REPORTS -------------*/








/*------------------------------COMPANY PROFIT AND LOSS REPORTS ----------------*/

if ($_GET["CHECKPOST"]=="getCompanyProfitAndLoss") {




  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];




    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {

 

      /*----------------getTOtal Loan Interest*/
      $getTotalInterest = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_revenue WHERE active='yes'  AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");
      $getRow = mysqli_fetch_assoc($getTotalInterest);
      $totalRevenue = round($getRow["amount"], 2);



      /*----------------getTOtal other Income */
      $getOtherIncome = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM registration_fees WHERE active='yes'  AND 
        date_created
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");
      $getRow2 = mysqli_fetch_assoc($getOtherIncome);
      // $totalOtherIncome = number_format($getRow2["amount"], 2);
      $totalOtherIncome = round($getRow2["amount"], 2);


      /*--------------total for interest and other income----------*/

      // $interestAndOtherIncomeTotal = $totalRevenue + $totalOtherIncome;

      $totalOtherIncome = "0.00"; 

      /*----------------get Less Total Sundry Expenses */
      $getLessSundryExpenses = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_expenses WHERE active='yes'  AND 
        date_added
        BETWEEN '$fromDate' AND '$toDate'
        ORDER BY id DESC  ");
      $getRow23 = mysqli_fetch_assoc($getLessSundryExpenses);
      $getTOtalExpenses = round($getRow23["amount"], 2);


      /*--------------total deficit / surplus -------*/
      $totalSurplusORDeficit = $totalRevenue + $totalOtherIncome - $getTOtalExpenses;



      /*-------------------company returnship share -----------*/
      $returnshipShare = 0.05 * $totalSurplusORDeficit;
      $returnshipShare = round($returnshipShare, 2);

      $TotalBalanceAfterReturnship = $totalSurplusORDeficit - $returnshipShare;


      /*-------------------managements share -----------*/
      $managements = 0.07 * $TotalBalanceAfterReturnship;
      $managements = round($managements, 2);

      $TotalBalanceAfterManagement = $TotalBalanceAfterReturnship - $managements;


      /*-------------------founders share -----------*/
      $founderShare = 0.1 * $TotalBalanceAfterManagement;
      $founderShare = round($founderShare, 2); 

      $TotalBalanceAfterFounders = $TotalBalanceAfterManagement - $founderShare;


      /*-------------------CO- founders share -----------*/
      $CofounderShare = 0.09 * $TotalBalanceAfterFounders;
      $CofounderShare = round($CofounderShare, 2);

      $TotalBalanceAfterCoFounders = $TotalBalanceAfterFounders - $CofounderShare;


      /*-------------------2nd year people share -----------*/
      $SeniorStaffShare = 0.05 * $TotalBalanceAfterCoFounders;
      $SeniorStaffShare = round($SeniorStaffShare, 2);

      $TotalBalanceAfterSeniorStaffShare = $TotalBalanceAfterCoFounders - $SeniorStaffShare;


      /*-------------------3rd year people share -----------*/
      $juniorStaffSHare = 0.03 * $TotalBalanceAfterSeniorStaffShare;
      $juniorStaffSHare = round($juniorStaffSHare, 2);

      $TotalBalanceAfterjuniorStaffSHare = $TotalBalanceAfterSeniorStaffShare - $juniorStaffSHare;



      $allShares = $founderShare + $CofounderShare + $SeniorStaffShare + $juniorStaffSHare + $managements + $returnshipShare;

      $shareLeft = $totalSurplusORDeficit -  $allShares;







      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.open('ViewPDFS/Reports/Profit_And_Loss/print_all_profit_and_loss_list_for_selected_peroid.php?PRINT=PRINT_ALL_PROFIT_AND_LOSS_LIST&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>";




      echo "

      <div class=\"section-block\">
      <h2 class=\"section-title\"> Profit and Loss as at $toDate </h2>
      </div>

      ";


      $resultss = "

      <tr>

      <td class=\"\"> Interest on Loans </td>
      <td class=\"\"> GH&#8373;  $totalRevenue </td>
      <td class=\"\">  </td>

      </tr>



      <tr>

      <td class=\"\"> Other Income </td>
      <td class=\"\"> GH&#8373; $totalOtherIncome </td>
      <td class=\"\">  </td>


      </tr>


      <tr>

      <td class=\"\" style=\"font-size:20px;\"> TOTAL  (Total Interest  + Other Income )</td>

      <td class=\"\" style=\"font-size:20px;\"> GH&#8373; $totalRevenue </td>
      <td class=\"\">   </td>

      </tr>



      <tr>

      <td class=\"\"> Less Total Sundry Expenses </td>
      <td class=\"\"> GH&#8373;  $getTOtalExpenses </td>
      <td class=\"\">  </td>

      </tr>


      <tr>

      <td class=\"\" style=\"font-size:20px;\"> Total Surplus / Deficit  (Total Interest  + Other Income - Expenses ) </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373;  $totalSurplusORDeficit </td>
      <td class=\"\">  </td>

      </tr>



      <tr>



      <td class=\"\"> 5% for Company Returnship</td>
      <td class=\"\"> GH&#8373;  $returnshipShare </td>
      </tr>


      <td class=\"\"> 7% for Managements</td>
      <td class=\"\"> GH&#8373;  $managements </td>
      </tr>


      <td class=\"\"> 10% For Founders</td>
      <td class=\"\"> GH&#8373;  $founderShare </td>
      </tr>



      <td class=\"\"> 9% For Co-Founders</td>
      <td class=\"\"> GH&#8373;  $CofounderShare </td>
      </tr>



      <td class=\"\"> 5% For 2nd Year Group</td>
      <td class=\"\"> GH&#8373;  $SeniorStaffShare </td>
      </tr>



      <td class=\"\"> 3% For 3rd Year Group</td>
      <td class=\"\"> GH&#8373;  $juniorStaffSHare </td>
      </tr>










      <td class=\"\" style=\"font-size:20px;\"> TOTAL: </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373;  $allShares </td>
      </tr>



      <td class=\"\" style=\"font-size:20px;\"> Dividend to be Shared </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373;  $shareLeft </td>
      </tr>





      ";

      echo $resultss;



    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}



}








/*------------------------------ENDS COMPANY PROFIT AND LOSS REPORTS -------------*/











/*------------------------------COMPANY FINANCIAL POSITION REPORTS ----------------*/

if ($_GET["CHECKPOST"]=="getCompanyFinancialPosition") {

  if (isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];




    if (!empty($fromDate) && !empty($toDate)) {


     if ($fromDate <= $toDate) {



      /*----------------GET OTTAL CONTRIBUTIONS MADE*/
      $getTotalContributions = mysqli_query($conn, "SELECT SUM(total_contribution_made) AS total_contribution_made FROM members WHERE active='yes'    ");
      $getRow = mysqli_fetch_assoc($getTotalContributions);
      $totalContributionReal = $getRow["total_contribution_made"];
      $totalContribution = number_format($getRow["total_contribution_made"], 2);



      /*----------------GET TOTAL COMPANY RETURNSHIP-----------------------*/
      $getTotalCompanyReturnship = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM company_returnship WHERE active='yes'    ");
      $getRow5 = mysqli_fetch_assoc($getTotalCompanyReturnship);
      $totalReturnshipReal = $getRow5["amount"];
      $totalReturnship = round($getRow5["amount"], 2);



      /*---------------------TOTAL ASSETS--------------*/
      $TOtalAssets = round($totalContributionReal + $totalReturnshipReal, 2);




      /*----------------GET TOTAL LOANS GIVING------------------*/
      $getTotalLoans = mysqli_query($conn, "SELECT SUM(amount_collected) AS amount_collected FROM loans_all WHERE active='yes' AND  loan_status='issued' AND  finish_paying='no'  ");
      $getRow2 = mysqli_fetch_assoc($getTotalLoans);
      $totalLoanCollectedReal = $getRow2["amount_collected"];
      $totalLoanCollected = number_format($getRow2["amount_collected"], 2);



      /*---------------get cash at bank-------------------- */
      $getCashAtBank = mysqli_query($conn, "SELECT * FROM company_bank_statement WHERE active='yes'  ORDER BY id DESC LIMIT 1 ");
      $getRow23 = mysqli_fetch_assoc($getCashAtBank);
      $getTOtalCashAtBnkReal = $getRow23["amount"];
      $getTOtalCashAtBnk = number_format($getRow23["amount"], 2);


      $getTotalLiability = number_format($totalLoanCollectedReal + $getTOtalCashAtBnkReal, 2) ; 






      echo "

      <div class=\"btn-toolbar\">
      <button type=\"button\" class=\"btn btn-primary\" onclick=\"window.open('ViewPDFS/Reports/Financial_Position/print_all_financial_position_list_for_selected_peroid.php?PRINT=PRINT_ALL_FINANCIAL_POSITION_LIST&&MINDATE=$fromDate&&MAXDATE=$toDate')\"><i class=\"oi oi-print\"></i> <span class=\"ml-1\">Print</span></button> 

      </div>";




      echo "

      <div class=\"section-block\">
      <h2 class=\"section-title\"> FINANCIAL POSITION AS AT $toDate </h2>
      </div>

      ";


      $resultss = "

      <tr>

      <td class=\"\" style=\"font-size:20px;\"> <u>ASSETS</u> </td>
      <td class=\"\">  </td>

      </tr>



      <tr>

      <td class=\"\"  style=\"font-size:20px;\"> Total Contributions </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373; $totalContribution </td>
      <td class=\"\">  </td>


      </tr>



      <tr>

      <td class=\"\"  style=\"font-size:20px;\"> Total Comapny Returnship </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373; $totalReturnship </td>
      <td class=\"\">  </td>

      </tr>

      <br>


      <tr>

      <td class=\"\"  style=\"font-size:30px;\"> TOTAL </td>
      <td class=\"\" style=\"font-size:30px;\"> GH&#8373; $TOtalAssets </td>
      <td class=\"\">  </td>

      </tr>

      <br>




      <tr>

      <td class=\"\" style=\"font-size:20px;\"> <u>LIABILITY</u> </td>
      <td class=\"\">  </td>

      </tr>



      <tr>

      <td class=\"\"  style=\"font-size:20px;\"> Total Loans (Principal)  </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373; $totalLoanCollected </td>
      <td class=\"\">  </td>


      </tr>


      <tr>

      <td class=\"\"  style=\"font-size:20px;\"> Cash At Bank </td>
      <td class=\"\" style=\"font-size:20px;\"> GH&#8373; $getTOtalCashAtBnk </td>
      <td class=\"\">  </td>


      </tr>

      <br>



      <tr>

      <td class=\"\"  style=\"font-size:30px;\"> TOTAL </td>
      <td class=\"\" style=\"font-size:30px;\"> GH&#8373; $getTotalLiability </td>
      <td class=\"\">  </td>

      </tr>




      <br>






      ";

      echo $resultss;



    } else {
     echo "mismatch";
   }



 } else {
   echo "empty";
 }


}


}

/*------------------------------ENDS COMPANY FINANCIAL POSITION REPORTS -------------*/























































































































































































/*(((((((((((((((((((((((((( -- DEACTIVATE STUDENT--))))))))))))))))*/

if ($_GET["CHECKPOST"]=="deactivateStudentPost") {

  $admisionNo = $_POST["admisionNo"];
  $reasons = $_POST["answers"];

  $reasons = json_decode($reasons);
  $reasons = $reasons[0]; 


  $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

  $getdac3 = mysqli_fetch_assoc($stf);

  $staffID = $getdac3["staffID"];




  $dated = date("jS F, Y");
  $activityType = "Student Deactivated";
  $StudentDescription = " was Deactivated ";
  $StaffDescription = "$admisionNo  Was Deactivated  By : $login_session";

  if (!empty($reasons)) {

    if (mysqli_query($conn, "UPDATE students SET active='no' WHERE admissionNumber='$admisionNo' AND active='yes' LIMIT 1 ")) {

      mysqli_query($conn, "INSERT INTO deactivate_students (admission_number,reason,date_created,done_by) VALUES('$admisionNo','$reasons','$dated','$login_session') ");


      mysqli_query($conn, "INSERT INTO student_activities (admission_number,activity_type,description,datecreated,added_by) VALUES('$admisionNo','$activityType','$StudentDescription','$dated','$login_session')");

      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$dated')");



    } else {
      echo "error";
    }


  } else {
    echo "empty";
  }





}

/*(((((((((((((((((((((((((( -- ENDS DEACTIVATE STUDENT--))))))))))))))))*/









/*---------------ENDS  STUDENTS-------------------*/












/*=====================CONFIGURATION=================*/
/*///////////////////////ADD FEES TO CLASS===============*/

if ($_GET["CHECKPOST"]=="addFeesToClassPost") {

  if (isset($_POST["classId"]) && isset($_POST["FeesAmountClass"]) && isset($_POST["FeesDetailsNameClass"]) && isset($_POST["FeesDetailsClass"]) ) {
    $classId = $_POST["classId"];
    $FeesAmountClass = $_POST["FeesAmountClass"];
    $FeesDetailsNameClass = $_POST["FeesDetailsNameClass"];
    $FeesDetailsClass = $_POST["FeesDetailsClass"];

    $Todates = date("Y-m-d");


    if (!empty($FeesAmountClass) && !empty($FeesDetailsNameClass) && !empty($FeesDetailsClass) ) {

      $selD = mysqli_query($conn, "SELECT * FROM fees_collect_category WHERE active = 'yes' AND class_id='$classId' LIMIT 1 ");

      $gett2= mysqli_fetch_assoc($selD);

      if (mysqli_num_rows($selD) > 0) {


        if (mysqli_query($conn, "UPDATE fees_collect_category SET fees_collect_amount='$FeesAmountClass',fees_collect_name='$FeesDetailsNameClass',fees_collect_details='$FeesDetailsClass' WHERE class_id='$classId' AND active='yes' LIMIT 1 ")) {

        } else {

          echo "erorr";

        }


      } else {

        if (mysqli_query($conn, "INSERT INTO fees_collect_category (fees_collect_amount,fees_collect_name,fees_collect_details,class_id,datecreated) VALUES('$FeesAmountClass','$FeesDetailsNameClass','$FeesDetailsClass','$classId','$Todates') ")) {

        } else {

          echo "erorr";

        }
      }




    } else {
      echo "empty";
    }

  }


}




/*---------------------ADD ACADEMIC YEAR--------------------*/
/*///////////////////////ADD FEES TO CLASS===============*/

if ($_GET["CHECKPOST"]=="addAcademicYearPost") {

  if (isset($_POST["theAcademicYearClass"]) && isset($_POST["TermClass"]) && isset($_POST["vacationDateClass"]) && isset($_POST["reOpeningDateClass"]) ) {
    $theAcademicYearClass = $_POST["theAcademicYearClass"];
    $TermClass = $_POST["TermClass"];
    $vacationDateClass = $_POST["vacationDateClass"];
    $reOpeningDateClass = $_POST["reOpeningDateClass"];

    if ($theAcademicYearClass!=="" && $TermClass!=="" && $vacationDateClass!=="" && $reOpeningDateClass!=="" ) {

      if ($vacationDateClass > $reOpeningDateClass) {
        echo "dateGreater";
      } else {

        if (strlen($theAcademicYearClass)<9) {
          echo "lessacademicyear";
        } else {

          $checkExi = mysqli_query($conn, "SELECT * FROM academic_year WHERE academic_year_name='$theAcademicYearClass' AND  term='$TermClass' AND vacation_date='$vacationDateClass' AND reopening_date='$reOpeningDateClass' AND active='yes'  ");

          if (mysqli_num_rows($checkExi) === 1) {
            echo "exist";
          } else {

            if (mysqli_query($conn, "INSERT INTO academic_year (academic_year_name,term,vacation_date,reopening_date) VALUES('$theAcademicYearClass','$TermClass','$vacationDateClass','$reOpeningDateClass') ")) {

              echo "done";

            } else {
              echo "error";
            }


          }


        }


      }


    } else {
      echo "empty";
    }




  }


}







////////////////////////PAY FEES TO STUDENT///////////////////////////////////
if ($_GET["CHECKPOST"]=="payFeesPost") {

  if (isset($_POST["admiNo"]) && isset($_POST["classID"]) && isset($_POST["Fullname"]) && isset($_POST["PayMode"]) && isset($_POST["PaidByClass"]) && isset($_POST["ChequeNo"]) && isset($_POST["amountInFig"]) && isset($_POST["AmountInWords"]) && isset($_POST["PaymentType"])) {

    $admiNo = $_POST["admiNo"];
    $classID = $_POST["classID"];
    $Fullname = $_POST["Fullname"];
    $PayMode = $_POST["PayMode"];
    $PaidByClass = $_POST["PaidByClass"];
    $ChequeNo = $_POST["ChequeNo"];
    $amountInFig = $_POST["amountInFig"];
    $AmountInWords = $_POST["AmountInWords"];
    $PaymentType = $_POST["PaymentType"];




    if (($PaidByClass!=="" || $ChequeNo!=="") && $amountInFig!=="" && $AmountInWords!=="" && $PaymentType!==""  ) {



      $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND id='$login_session'");

      $getdac3 = mysqli_fetch_assoc($stf);

      $staffID = $getdac3["staffID"];



      $TOdated = date("jS F, Y");
      $TOdated2 = date("Y-m-d");
      $activityType = "Fees Paid";
      $StudentDescription = $amountInFig . "  was Paid as a Fees";
      $StaffDescription = "$admiNo Fees was Paid with amount of " . $amountInFig ." By : $login_session";



      $selecAcad = mysqli_query($conn, "SELECT * FROM academic_year WHERE active='yes' ORDER BY id DESC LIMIT 1 ");

      $getAca = mysqli_fetch_assoc($selecAcad);

      $academic_year_name = $getAca["academic_year_name"];
      $term = $getAca["term"];

      $selre = mysqli_query($conn, "SELECT id FROM fees_payment ORDER BY id DESC LIMIT 1 ");

      $getlastID = mysqli_fetch_assoc($selre);
      $ids = $getlastID["id"] + 1;

      $firstID = 1;
      $preamble = '000000';

      if (mysqli_num_rows($selre) >0) {

        if($ids<=9){
          $receiptNumber ='000000'.$ids;
        }else if($ids<=99){
          $receiptNumber ='00000'.$ids;
        }else if($ids<=999){
          $receiptNumber ='0000'.$ids;
        }else if($ids<=9999){
          $receiptNumber ='000'.$ids;
        }else if($ids<=99999){
          $receiptNumber ='00'.$ids;
        }else if($ids<=999999){
          $receiptNumber ='0'.$ids;
        }else {
          $receiptNumber =$ids;
        }
      } else {
        $receiptNumber = $preamble . $firstID;
      }



      $selAmntOwe = mysqli_query($conn, "SELECT * FROM students WHERE admissionNumber='$admiNo' AND active='yes' ");


      $fetcB = mysqli_fetch_assoc($selAmntOwe);

      $current_balance  = $fetcB["current_balance"];

      $new_current_balance = $current_balance - $amountInFig;

      if (mysqli_query($conn, "INSERT INTO fees_payment (admission_number,class_id,payment_mode,paid_by,checque_no,amount_in_fig,amount_in_words,payment_type,term,academic_year,balance_before,current_balance,receipt_number,fee_pay_date,created_by) VALUES('$admiNo','$classID','$PayMode','$PaidByClass','$ChequeNo','$amountInFig','$AmountInWords','$PaymentType','$term','$academic_year_name','$current_balance','$new_current_balance','$receiptNumber','$TOdated2','$login_session') ")) {


        mysqli_query($conn, "INSERT INTO student_activities (admission_number,activity_type,description,datecreated,added_by) VALUES('$admiNo','$activityType','$StudentDescription','$TOdated','$login_session')");

        mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$staffID','$activityType','$StaffDescription','$TOdated')");


        mysqli_query($conn, "UPDATE students SET current_balance='$new_current_balance' WHERE admissionNumber='$admiNo'  AND active='yes' ");

        echo "$admiNo&&RECEIPT=$receiptNumber";


      } else {


        echo "paymentErrors";

      }

    }else {
      echo "empty";
    }


  } 

}






/*--------------------------------STUDENTS STATEMENT -------------*/

if ($_GET["CHECKPOST"]=="generateStatemetnPost") {

  if (isset($_POST["admissionNO"]) && isset($_POST["fromDate"]) && isset($_POST["toDate"]) ) {

    $admissionNO  = $_POST["admissionNO"];
    $fromDate  = $_POST["fromDate"];
    $toDate  = $_POST["toDate"];


    if (!empty($fromDate) && !empty($toDate)) {


      if ($fromDate <= $toDate) {


        $selActivities = mysqli_query($conn, "SELECT * FROM fees_payment WHERE
          admission_number='$admissionNO' AND 
          fee_pay_date
          BETWEEN '$fromDate' AND '$toDate'
          ORDER BY id DESC 

          ");


        if (mysqli_num_rows($selActivities)!==0) {


          while ($gyt = mysqli_fetch_assoc($selActivities)) {

            $admissionNO = $gyt["admission_number"];
            $date_created = $gyt["date_created"];
            $amount_in_fig = $gyt["amount_in_fig"];
            $receipt_number = $gyt["receipt_number"];
            $paid_by = $gyt["paid_by"];
            $payment_mode = $gyt["payment_mode"];
            $class_id = $gyt["class_id"];


            $amount_in_fig = number_format($amount_in_fig, 2);


            $resultss = "


            <tr>
            <td> $date_created </td>
            <td> $receipt_number </td>
            <td> $amount_in_fig </td>
            </tr>

            ";

            echo $resultss;

          }

        } else {

          echo "nothing";

        }



      } else {
        echo "mismatch";
      }



    } else {
      echo "empty";
    }


  }


}

/*--------------------------------ENDS STUDENTS STATEMENT -------------*/






/*========================BILL A class ================*/

if ($_GET["CHECKPOST"]=="billCalssPost") {

  if (isset($_POST["classID"])) {

    $classID = $_POST["classID"];

    $selGetClassAMount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM fees_collect_category WHERE class_id='$classID' AND active='yes'  "));

    $fees_collect_amount = $selGetClassAMount["fees_collect_amount"];


    $getAca= mysqli_fetch_assoc( mysqli_query($conn, "SELECT * FROM academic_year WHERE active='yes' ORDER BY id DESC LIMIT 1 "));

    $term = $getAca["term"];
    $academic_year_name = $getAca["academic_year_name"];

    $selectChck = mysqli_query($conn, "SELECT * FROM fees_payment_check WHERE class_id='$classID' AND active='yes'  AND completed='no'  ");

    $getAllTersm = mysqli_fetch_assoc($selectChck);

    $getTerm1 = $getAllTersm["t1"];
    $getTerm2 = $getAllTersm["t2"];
    $getTerm3 = $getAllTersm["t3"];
    $completed = $getAllTersm["completed"];

    if (mysqli_num_rows($selectChck) > 0) {


      if ($getTerm1!=="" && $getTerm2==="" && $getTerm3==="" && $completed==="no") {

        $selectStudentas = mysqli_query($conn, "SELECT * FROM students WHERE class='$classID' AND active='yes'  ");

        while ($gett = mysqli_fetch_assoc($selectStudentas)) {

          $admissionNumber = $gett["admissionNumber"];

          $fett = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE admissionNumber='$admissionNumber' AND active='yes'  "));

          $current_balance = $fett["current_balance"];

          $new_current_balance =$current_balance + $fees_collect_amount;


          if (mysqli_query($conn, "UPDATE fees_payment_check SET t2='$fees_collect_amount' WHERE admission_number='$admissionNumber' AND class_id='$classID' AND completed='no' ")) {

            mysqli_query($conn, "UPDATE students SET current_balance='$new_current_balance' WHERE admissionNumber='$admissionNumber'  AND active='yes' ");

            echo "done";
          } else {
            echo "error";
          }


        }




      }elseif ($getTerm1!=="" && $getTerm2!=="" && $getTerm3==="" && $completed==="no") {

        $selectStudentas = mysqli_query($conn, "SELECT * FROM students WHERE class='$classID' AND active='yes'  ");

        while ($gett = mysqli_fetch_assoc($selectStudentas)) {

          $admissionNumber = $gett["admissionNumber"];

          $fett = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE admissionNumber='$admissionNumber' AND active='yes'  "));

          $current_balance = $fett["current_balance"];

          $new_current_balance =$current_balance + $fees_collect_amount;


          if (mysqli_query($conn, "UPDATE fees_payment_check SET t3='$fees_collect_amount',completed='yes' WHERE admission_number='$admissionNumber' AND class_id='$classID' AND completed='no' ")) {

            mysqli_query($conn, "UPDATE students SET current_balance='$new_current_balance' WHERE admissionNumber='$admissionNumber'  AND active='yes' ");


            echo "done";
          } else {
            echo "error";
          }


        } 




      }else{
        echo "nowhereError";
      }


    } else {

      $selectStudentas = mysqli_query($conn, "SELECT * FROM students WHERE class='$classID' AND active='yes'  ");



      while ($gett = mysqli_fetch_assoc($selectStudentas)) {

        $admissionNumber = $gett["admissionNumber"];

        $fett = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE admissionNumber='$admissionNumber' AND active='yes'  "));

        $current_balance = $fett["current_balance"];

        $new_current_balance =$current_balance + $fees_collect_amount;

        if (mysqli_query($conn, "INSERT INTO fees_payment_check (admission_number,class_id,t1) VALUES('$admissionNumber','$classID','$fees_collect_amount') ")) {


          mysqli_query($conn, "UPDATE students SET current_balance='$new_current_balance' WHERE admissionNumber='$admissionNumber'  AND active='yes' ");

          echo "done";
        } else {
          echo "error";
        }



      }




    }




  } 


}







/*---------------ADD NEW STAFF -------------------*/

/*++++++++++++++++++++++STAFF WITH IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="addNewStaffWithImage") {


  $filename = $_FILES['file']['name'];

  $rightAssignClass = stripcslashes(htmlentities(strip_tags($_POST["rightAssignClass"])));
  $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
  $LastnameClass = stripcslashes(htmlentities(strip_tags($_POST["LastnameClass"])));
  $DOBClass = stripcslashes(htmlentities(strip_tags($_POST["DOBClass"])));
  $GenderClass = stripcslashes(htmlentities(strip_tags($_POST["GenderClass"])));
  $mobileCLassName = stripcslashes(htmlentities(strip_tags($_POST["mobileCLassName"])));
  $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
  $NationalityClass = stripcslashes(htmlentities(strip_tags($_POST["NationalityClass"])));
  $RegionsClass = stripcslashes(htmlentities(strip_tags($_POST["RegionsClass"])));
  $AddressCLass = stripcslashes(htmlentities(strip_tags($_POST["AddressCLass"])));
  $DigitalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["DigitalAddressClass"])));
  $LocationClass = stripcslashes(htmlentities(strip_tags($_POST["LocationClass"])));
  $HomeTownClass = stripcslashes(htmlentities(strip_tags($_POST["HomeTownClass"])));

  if (!empty($rightAssignClass) && !empty($FirstnameCLass) && !empty($LastnameClass) && !empty($DOBClass) && !empty($GenderClass)  ) {


    $getYear = date("Y");

    $getFirstletter = substr($LastnameClass, 0,1);

    $getDOBFORID = str_replace("-", "", $DOBClass);

    $theStaffID = $getFirstletter . $getDOBFORID . $getYear;

    $encryprStaffID = md5($theStaffID);

    $dated = date("jS F, Y");


    $checkExist = mysqli_query($conn, "SELECT staffID FROM staff WHERE staffID='$theStaffID' AND active='yes'  ");

    if (mysqli_num_rows($checkExist)===1) {
      echo "Exist";

    } else {

if((($_FILES["file"] ["type"] == "image/jpeg") || ($_FILES["file"] ["type"] == "image/png"))&&(@$_FILES["file"]["size"] < 5242880)) //5 Megabyte
{
  $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ123456789";
  $rand_dir_name = substr(str_shuffle($chars), 0, 15);
  mkdir("../staff_data/passport/$rand_dir_name");


  move_uploaded_file(@$_FILES["file"]["tmp_name"],"../staff_data/passport/$rand_dir_name/".$_FILES["file"]["name"]);
  //echo"Uploaded and Stored in: staff_data/passport/$rand_dir_name/".@$_FILES["file"]["name"];

  $profile_pic_name = @$_FILES["file"]["name"];

  $studentInsert = mysqli_query($conn, "INSERT INTO staff (staffID,encrypted_id,username,encrypted_password,password,firstName,lastName,employmentType,dob,mobile,email,nationality,home_town,region,gender,address,digitalAddress,location,staffPhoto) VALUES('$theStaffID','$encryprStaffID','$theStaffID','$encryprStaffID','$theStaffID','$FirstnameCLass','$LastnameClass','$rightAssignClass','$DOBClass','$mobileCLassName','$EmailClass','$NationalityClass','$HomeTownClass','$RegionsClass','$GenderClass','$AddressCLass','$DigitalAddressClass','$LocationClass','$rand_dir_name/$profile_pic_name')");


  $type = 1;
  $confirm = "no";

  $activityType = "Staff Added";
  $StaffDescription = "$theStaffID Was added to the staff list By : $login_session";


  mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$theStaffID','$activityType','$StaffDescription','$dated')");


  mysqli_query($conn, "INSERT INTO who_can_login_in (username,password,real_password,type,confirm,done_by) VALUES('$theStaffID','$encryprStaffID','$theStaffID','$type','$confirm','$login_session')");



  echo "done";


}else{
  $profile_pic_name = "";
  $rand_dir_name = "";


  echo "imageError";


}


}

} else {
  echo "empty";
}


}



/*++++++++++++++++++++++STUDENT WITH NO IMAGE++++++++++++++++*/

/*++++++++++++++++++++++STAFF WITH  NO IMAGE++++++++++++++++*/
if ($_GET["CHECKPOST"]=="addstaffWithNoImage") {


  $rightAssignClass = stripcslashes(htmlentities(strip_tags($_POST["rightAssignClass"])));
  $FirstnameCLass = stripcslashes(htmlentities(strip_tags($_POST["FirstnameCLass"])));
  $LastnameClass = stripcslashes(htmlentities(strip_tags($_POST["LastnameClass"])));
  $DOBClass = stripcslashes(htmlentities(strip_tags($_POST["DOBClass"])));
  $GenderClass = stripcslashes(htmlentities(strip_tags($_POST["GenderClass"])));
  $mobileCLassName = stripcslashes(htmlentities(strip_tags($_POST["mobileCLassName"])));
  $EmailClass = stripcslashes(htmlentities(strip_tags($_POST["EmailClass"])));
  $NationalityClass = stripcslashes(htmlentities(strip_tags($_POST["NationalityClass"])));
  $RegionsClass = stripcslashes(htmlentities(strip_tags($_POST["RegionsClass"])));
  $AddressCLass = stripcslashes(htmlentities(strip_tags($_POST["AddressCLass"])));
  $DigitalAddressClass = stripcslashes(htmlentities(strip_tags($_POST["DigitalAddressClass"])));
  $LocationClass = stripcslashes(htmlentities(strip_tags($_POST["LocationClass"])));
  $HomeTownClass = stripcslashes(htmlentities(strip_tags($_POST["HomeTownClass"])));

  if (!empty($rightAssignClass) && !empty($FirstnameCLass) && !empty($LastnameClass) && !empty($DOBClass) && !empty($GenderClass)  ) {


    $getYear = date("Y");

    $getFirstletter = substr($LastnameClass, 0,1);

    $getDOBFORID = str_replace("-", "", $DOBClass);

    $theStaffID = $getFirstletter . $getDOBFORID . $getYear;

    $encryprStaffID = md5($theStaffID);

    $dated = date("jS F, Y");


    $checkExist = mysqli_query($conn, "SELECT staffID FROM staff WHERE staffID='$theStaffID' AND active='yes'  ");

    if (mysqli_num_rows($checkExist)===1) {
      echo "Exist";

    } else {



      $studentInsert = mysqli_query($conn, "INSERT INTO staff (staffID,encrypted_id,username,encrypted_password,password,firstName,lastName,employmentType,dob,mobile,email,nationality,home_town,region,gender,address,digitalAddress,location) VALUES('$theStaffID','$encryprStaffID','$theStaffID','$encryprStaffID','$theStaffID','$FirstnameCLass','$LastnameClass','$rightAssignClass','$DOBClass','$mobileCLassName','$EmailClass','$NationalityClass','$HomeTownClass','$RegionsClass','$GenderClass','$AddressCLass','$DigitalAddressClass','$LocationClass')");



      $type = 1;
      $confirm = "no";

      $activityType = "Staff Added";
      $StaffDescription = "$theStaffID Was added to the staff list By : $login_session";


      mysqli_query($conn, "INSERT INTO staff_activities (staff_id,activity_type,description,datecreated) VALUES('$theStaffID','$activityType','$StaffDescription','$dated')");


      mysqli_query($conn, "INSERT INTO who_can_login_in (username,password,real_password,type,confirm,done_by) VALUES('$theStaffID','$encryprStaffID','$theStaffID','$type','$confirm','$login_session')");



      echo "done";


    }

  } else {
    echo "empty";
  }


}










































































































/////////////////////////UPDATE STAFF INFO WITH IMAGE///////////////////////////////////
if ($_GET["CHECKPOST"]=="updateStaffInfoWithFIle") {


  /* Getting file name */
  $filename = $_FILES['file']['name'];
  $FirstnameCLass = $_POST["FirstnameCLass"];
  $LastnameClass = $_POST["LastnameClass"];
  $DOBClass = $_POST["DOBClass"];
  $GenderClass = $_POST["GenderClass"];
  $MobileClass = $_POST["MobileClass"];
  $emailCLassName = $_POST["emailCLassName"];
  $NationalityClass = $_POST["NationalityClass"];
  $RegionsClass = $_POST["RegionsClass"];
  $MaritalStatusClass = $_POST["MaritalStatusClass"];
  $AddressCLass = $_POST["AddressCLass"];
  $DigitalAddressClass = $_POST["DigitalAddressClass"];
  $LocationClass = $_POST["LocationClass"];
  $HomeTownClass = $_POST["HomeTownClass"];
  $staffID = $_POST["staffID"];




  if (!empty($FirstnameCLass) && !empty($LastnameClass)  && !empty($DOBClass) && !empty($GenderClass) && !empty($MobileClass) && !empty($NationalityClass) && !empty($RegionsClass) && !empty($DigitalAddressClass) && !empty($LocationClass)   ) {



    $description = "debited";


    /* Location */
    $locationPC = "../Datas/staff/".$filename;
    $uploadOk = 1;
    $imageFileType = pathinfo($locationPC,PATHINFO_EXTENSION);

    /* Valid Extensions */
    $valid_extensions = array("jpg","jpeg","png");
    /* Check file extension */
    if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
      echo "invalid image";
    }

    if($uploadOk == 0){
      echo "error in uploading image";
    }else{
      /* Upload file */
      if(move_uploaded_file($_FILES['file']['tmp_name'],$locationPC)){


        if (mysqli_query($conn, "UPDATE staff SET firstName='$FirstnameCLass', lastName='$LastnameClass', dob='$DOBClass', mobile='$MobileClass', email='$emailCLassName', marital_status='$MaritalStatusClass', nationality='$NationalityClass', home_town='$HomeTownClass', region='$RegionsClass', gender='$GenderClass', address='$AddressCLass', digitalAddress='$DigitalAddressClass', location='$LocationClass', staffPhoto='$filename'  WHERE id='$staffID' AND active='yes' LIMIT 1 " )) {


          echo "done";

        } else {
          echo "errorinupdate";
        }



      }else{
        echo "iscanDocumentCantMove";;
      }



    }




  } else {
    echo "empty";

  }




}






/////////////////////////UPDATE STAFF INFO WITH IMAGE///////////////////////////////////
if ($_GET["CHECKPOST"]=="updateStaffInfoWithNoFile") {


  /* Getting file name */
  $FirstnameCLass = $_POST["FirstnameCLass"];
  $LastnameClass = $_POST["LastnameClass"];
  $DOBClass = $_POST["DOBClass"];
  $GenderClass = $_POST["GenderClass"];
  $MobileClass = $_POST["MobileClass"];
  $emailCLassName = $_POST["emailCLassName"];
  $NationalityClass = $_POST["NationalityClass"];
  $RegionsClass = $_POST["RegionsClass"];
  $MaritalStatusClass = $_POST["MaritalStatusClass"];
  $AddressCLass = $_POST["AddressCLass"];
  $DigitalAddressClass = $_POST["DigitalAddressClass"];
  $LocationClass = $_POST["LocationClass"];
  $HomeTownClass = $_POST["HomeTownClass"];
  $staffID = $_POST["staffID"];


  if (!empty($FirstnameCLass) && !empty($LastnameClass) && !empty($DOBClass) && !empty($GenderClass) && !empty($MobileClass) && !empty($NationalityClass) && !empty($RegionsClass) && !empty($DigitalAddressClass) && !empty($LocationClass)   ) {



    if (mysqli_query($conn, "UPDATE staff SET firstName='$FirstnameCLass', lastName='$LastnameClass', dob='$DOBClass', mobile='$MobileClass', email='$emailCLassName', marital_status='$MaritalStatusClass', nationality='$NationalityClass', home_town='$HomeTownClass', region='$RegionsClass', gender='$GenderClass', address='$AddressCLass', digitalAddress='$DigitalAddressClass', location='$LocationClass'  WHERE id='$staffID' AND active='yes' LIMIT 1 " )) {


      echo "done";

    } else {
      echo "errorinupdate";
    }




  } else {
    echo "empty";

  }




}






/*==========================CHANGE EMPLOYMENT TYPE=============================*/

if ($_GET["CHECKPOST"]=="changeEmploymentTypePost") {

  $staffID = $_POST["staffID"];
  $EmploymentTypeClass = $_POST["EmploymentTypeClass"];


  if (mysqli_query($conn, "UPDATE staff SET employmentType='$EmploymentTypeClass'  WHERE id='$staffID' AND active='yes' LIMIT 1 " )) {


    echo "done";

  } else {
    echo "errorinupdate";
  }



}










/*==========================RESET STAFF PASSWORD =============================*/

if ($_GET["CHECKPOST"]=="resetStaffPasswordPost") {

  $staffID = $_POST["staffID"];

  $encrypted_password = md5($staffID);



  if (mysqli_query($conn, "UPDATE staff SET username='$staffID',encrypted_password='$encrypted_password',password='$staffID'  WHERE staffID='$staffID' AND active='yes' LIMIT 1 " )) {


    echo "done";

  } else {
    echo "errorinupdate";
  }



}






/*==========================CONFIRM STAFF ACCOUNT=============================*/

if ($_GET["CHECKPOST"]=="confirmStaffpOST") {

  $staffID = $_POST["staffID"];

  if (mysqli_query($conn, "UPDATE who_can_login_in SET confirm='yes'  WHERE username='$staffID' AND active='yes' LIMIT 1 ")) {


    echo "done";

  } else {
    echo "errorinupdate";
  }



}



/*==========================CLOSE STAFF ACCOUNT=============================*/

if ($_GET["CHECKPOST"]=="closeAccountPost") {

  $staffID = $_POST["staffID"];

  if (mysqli_query($conn, "UPDATE staff SET active='no',confirm='no'  WHERE id='$staffID' AND active='yes' LIMIT 1 " )) {


    echo "done";

  } else {
    echo "errorinupdate";
  }



}



/*==========================CHANGE STAFF PASSWORD=============================*/

if ($_GET["CHECKPOST"]=="changePassword") {

  $member_id = $_POST["member_id"];
  $CurrentPasswordClass = $_POST["CurrentPasswordClass"];
  $NewPasswordClass = $_POST["NewPasswordClass"];
  $ConfirmNewPasswordClass = $_POST["ConfirmNewPasswordClass"];

  $Encry_CurrentPasswordClass = md5($CurrentPasswordClass);

  $NewPasswordClassEncrypt = md5($NewPasswordClass);


  $queryInfo = mysqli_query($conn, "SELECT * FROM who_can_login_in WHERE id='$member_id' AND active='yes'");

  $fetch =mysqli_fetch_assoc($queryInfo);
  $table_id = $fetch["id"];
  $username = $fetch["username"];
  $password = $fetch["password"];




  if (!empty($CurrentPasswordClass) && !empty($NewPasswordClass) && !empty($ConfirmNewPasswordClass) ) {


    if ($NewPasswordClass===$ConfirmNewPasswordClass) {

      if ($Encry_CurrentPasswordClass===$password ) {


        if (mysqli_query($conn, "UPDATE who_can_login_in SET password='$NewPasswordClassEncrypt',real_password='$NewPasswordClass'  WHERE id='$table_id' AND active='yes' LIMIT 1 " )) {

          echo "done";

        } else {
          echo "errorinupdate";
        }

      } else {
        echo "cureentnot";
      }



    } else {
      echo "newNot";
    }


  } else {

    echo "empty";
  }


}



















?>


<?php 

 



if ($login_session_type==="3" || $login_session_type==="1") {


  $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$login_session' AND active='yes'");
  if (mysqli_num_rows($queryInfo)===1) {

    $fetch =mysqli_fetch_assoc($queryInfo);
    $table_id = $fetch["id"];
    $staffID = $fetch["staffID"];
    $encrypted_password = $fetch["encrypted_password"];
    $password = $fetch["password"];
    $username = $fetch["username"];
    $firstName = $fetch["firstName"];
    $lastName = $fetch["lastName"];
    $employmentType = $fetch["employmentType"];
    $staffPhoto = $fetch["staffPhoto"];

    $staffFullName = $firstName . " " . $lastName; 



    if ($staffPhoto==="" || $staffPhoto==="/") {
      $staffPhotoShow = "
      <img src=\"assets/images/customs/male.png\" alt=\"\">
      ";
    } else {

     $staffPhotoShow = "
     <img src=\"Datas/staff_datas/passport/$staffPhoto\" alt=\"\">
     ";
   }











  








   $login_sessionCap = strtoupper($login_session);
     $queryWho = mysqli_query($conn, "SELECT * FROM who_can_login_in WHERE username='$login_sessionCap' AND active='yes'");

    $fetcAhema =mysqli_fetch_assoc($queryWho);
    $Tabbbbid = $fetcAhema["id"];
    $real_password = $fetcAhema["real_password"];
    

    if ($real_password === $login_sessionCap) {
      

        ?>

          <script type="text/javascript">
            location.replace("change_password_page.php?KK=df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637&&LOGIN=<?php echo $login_sessionCap ?>&&6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7bvcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572f&&TA=<?php echo $Tabbbbid ?>&&8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b43d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143f3e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d");
          </script>

        <?php


    } 





// delete this after its done


  //   $sertrt12 = mysqli_query($conn, "SELECT * FROM comp_reve_contrib_penalty WHERE active='yes' ");

  // while ($cuc31 = mysqli_fetch_assoc($sertrt12)) {
    
  //   $theTabID = $cuc31["id"];
  //   $member_id = $cuc31["member_id"];
  //   $amountForPen = $cuc31["amount"];
  //   $date_added = $cuc31["date_added"];




  //   $seleCont = mysqli_query($conn, "SELECT * FROM members_contributions WHERE member_id_encrypt='$member_id' AND date_created='$date_added' AND active='yes' ");



  //     while ($ContrS = mysqli_fetch_assoc($seleCont)) {
    
  //       $ContriTabid = $ContrS["id"];
  //       $member_id_encrypt = $ContrS["member_id_encrypt"];
  //       $amountForCOntri = $ContrS["amount"];

  //       $getRealAMountoContri = $amountForCOntri - $amountForPen;


  //        mysqli_query($conn, "UPDATE members_contributions SET amount='$getRealAMountoContri' WHERE id = '$ContriTabid' ");


  //     }


   


  // }



// $sertrt2 = mysqli_query($conn, "SELECT * FROM comp_reve_loan_penalty  ");

//   while ($cuc4 = mysqli_fetch_assoc($sertrt2)) {
    
//     $theTabID = $cuc4["id"];
//     $date_addedDBDBDBDB = $cuc4["date_added"];


//     $expltheYearr1 = explode("-", $date_addedDBDBDBDB);
//     $theYearrrRE = current($expltheYearr1);


//     mysqli_query($conn, "ALTER TABLE comp_reve_loan_penalty ADD year_finish VARCHAR(50) NOT NULL AFTER year");


//     mysqli_query($conn, "UPDATE comp_reve_loan_penalty SET year_finish='no' WHERE id = '$theTabID' ");


//   }



// $sertrt1 = mysqli_query($conn, "SELECT * FROM company_share_dividend  ");

//   while ($cuc3 = mysqli_fetch_assoc($sertrt1)) {
    
//     $theTabID = $cuc3["id"];

//     mysqli_query($conn, "ALTER TABLE company_share_dividend ADD year_finish VARCHAR(50) NOT NULL AFTER done_by");


//     mysqli_query($conn, "UPDATE company_share_dividend SET year_finish='yes' WHERE id = '$theTabID' ");


//   }



// $sertrt = mysqli_query($conn, "SELECT * FROM company_revenue  ");

//   while ($cuc21 = mysqli_fetch_assoc($sertrt)) {
    
//     $theTabID = $cuc21["id"];
//     $date_addedDBDBDBDB = $cuc21["date_added"];


//     $expltheYearr1 = explode("-", $date_addedDBDBDBDB);
//     $theYearrrRE = current($expltheYearr1);


//     mysqli_query($conn, "ALTER TABLE company_revenue ADD year VARCHAR(50) NOT NULL AFTER date_added");


//     mysqli_query($conn, "UPDATE company_revenue SET year='$theYearrrRE' WHERE id = '$theTabID' ");


//   }






// ends delete this after its done



// $sertrt123232 = mysqli_query($conn, "SELECT * FROM members_contributions WHERE active='yes' AND amount='95'   ");

//   while ($cuc3232 = mysqli_fetch_assoc($sertrt123232)) {
    
//     $theTabID = $cuc3232["id"];
//     $amountqq = $cuc3232["amount"];


//     if ($amountqq==="95") {
      
//     mysqli_query($conn, "UPDATE members_contributions  SET amount='100' WHERE active = 'yes' AND amount='95' ");


//      }

//   }
     

$myPurpDedc = "5% of Member Deactivated charge";

$sedectt = mysqli_query($conn, "SELECT * FROM company_revenue WHERE purpose = '$myPurpDedc' AND active='yes' ");

  while ($cuc = mysqli_fetch_assoc($sedectt)) {
    

    $person_idDBBDE = $cuc["person_id"];
    $amountDBBDE = $cuc["amount"];
    $done_byDBBDE = $cuc["done_by"];
    $date_addedDBBDE = $cuc["date_added"];
    $year_finishDBBDE = $cuc["year_finish"];

    $expltheYearr = explode("-", $date_addedDBBDE);
    $theYearrr = current($expltheYearr);


    if (mysqli_query($conn, "INSERT INTO comp_reve_5_perc_mem_deactivate_deduction (member_id, amount,date_added,done_by,year,year_finish) VALUES('$person_idDBBDE','$amountDBBDE','$date_addedDBBDE','$done_byDBBDE','$theYearrr','$year_finishDBBDE') ")) {
      

        mysqli_query($conn, "DELETE FROM company_revenue WHERE purpose = '$myPurpDedc' ");



    } else {
      // echo "noo";
    }
    

  }




$myPURP = "Penalty For member contribution";

$gtttitu = mysqli_query($conn, "SELECT * FROM company_revenue WHERE purpose = '$myPURP' AND active='yes' ");

  while ($cuc = mysqli_fetch_assoc($gtttitu)) {
    

    $person_idDBB = $cuc["person_id"];
    $amountDBB = $cuc["amount"];
    $purpose_dateDBB = $cuc["purpose_date"];
    $done_byDBB = $cuc["done_by"];
    $date_addedDBB = $cuc["date_added"];
    $year_finishDBB = $cuc["year_finish"];

    $expltheYearr = explode("-", $date_addedDBB);
    $theYearrr = current($expltheYearr);


    if (mysqli_query($conn, "INSERT INTO comp_reve_contrib_penalty (member_id, amount, default_date,date_added,done_by,year,year_finish) VALUES('$person_idDBB','$amountDBB','$purpose_dateDBB','$date_addedDBB','$done_byDBB','$theYearrr','$year_finishDBB') ")) {
      

        mysqli_query($conn, "DELETE FROM company_revenue WHERE purpose = '$myPURP' ");



    } else {
      // echo "noo";
    }
    

  }







  $myPURPReg = "Member Registration Fee";

$gtttitu22 = mysqli_query($conn, "SELECT * FROM company_revenue WHERE purpose = '$myPURPReg' AND active='yes' ");

  while ($cuc22 = mysqli_fetch_assoc($gtttitu22)) {
    

    $person_idDBBREG = $cuc22["person_id"];
    $amountDBBREG = $cuc22["amount"];
    $done_byDBBREG = $cuc22["done_by"];
    $date_addedDBBREG = $cuc22["date_added"];
    $year_finishDBBREG = $cuc22["year_finish"];

    $expltheYearr = explode("-", $date_addedDBBREG);
    $theYearrrREG = current($expltheYearr);


 mysqli_query($conn, "DELETE FROM company_revenue WHERE purpose = '$myPURPReg' ");


  }






$gtttitueerr = mysqli_query($conn, "SELECT * FROM registration_fees WHERE active='yes' ");

  while ($rrtt4 = mysqli_fetch_assoc($gtttitueerr)) {

    $member_idBDE = $rrtt4["member_id"];
    $amountBDE = $rrtt4["amount"];
    $receipt_numberBDE = $rrtt4["receipt_number"];
    $date_createdBDE = $rrtt4["date_created"];
    $done_byBDE = $rrtt4["done_by"];

    $expltheYearr = explode("-", $date_createdBDE);
    $theYearrrREGee = current($expltheYearr);




    if (mysqli_query($conn, "INSERT INTO comp_reve_memb_reg_fee (member_id, amount,date_added,receipt_number,done_by,year) VALUES('$member_idBDE','$amountBDE','$date_createdBDE','$receipt_numberBDE','$done_byBDE','$theYearrrREGee') ")) {
      

      mysqli_query($conn, "DELETE FROM registration_fees WHERE active='yes' ");

      // echo "done";


    } else {
      // echo "noo";
    }
    

  }

    // exit();




///////////////SET FREE TO GUARANTEE TO NO WHEN ON LOAN///////////

 //   $sell = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'  ");

 //   while ($feLooan = mysqli_fetch_assoc($sell)) {

 //     $guarantor1 = $feLooan["guarantor1"];
 //     $guarantor2 = $feLooan["guarantor2"];
 //     $person_id = $feLooan["person_id"];
 //     $total_amount_to_pay = $feLooan["total_amount_to_pay"];
 //     $Loanbalance = $feLooan["balance"];

 //     $paymentHalf = $total_amount_to_pay / 2;

 //    /////////////////SELECT guarantor1/////////
 //    $selMemmm = mysqli_query($conn, "SELECT * FROM members WHERE active='yes' AND member_id='$guarantor1'  ");
 //    $feG1 = mysqli_fetch_assoc($selMemmm);
 //    $total_guarantee_g1 = $feG1["total_guarantee"];

 //    $new_total_guarantee_g1 = $total_guarantee_g1 - 1;



 //    /////////////////SELECT guarantor1/////////
 //    $selMemmm2 = mysqli_query($conn, "SELECT * FROM members WHERE active='yes' AND member_id='$guarantor2'  ");
 //    $feG2 = mysqli_fetch_assoc($selMemmm2);
 //    $total_guarantee_g2 = $feG2["total_guarantee"];

 //    $new_total_guarantee_g2 = $total_guarantee_g2 - 1;



 //        /////////////////SELECT the loaner/////////
 //    $seLoner = mysqli_query($conn, "SELECT * FROM members WHERE active='yes' AND member_id_encrypt='$person_id'  ");
 //    $feLon = mysqli_fetch_assoc($seLoner);
 //    $total_guarantee_Loner = $feLon["total_guarantee"];

 //    $new_total_guarantee_Loner = $total_guarantee_Loner - 1;




 //       mysqli_query($conn, "UPDATE members SET free_to_guarantee='no'  WHERE member_id='$guarantor1'  AND active='yes'  " );
 //       mysqli_query($conn, "UPDATE members SET free_to_guarantee='no'  WHERE member_id='$guarantor2'  AND active='yes'  " );


 //        mysqli_query($conn, "UPDATE members SET free_to_guarantee='no'  WHERE member_id_encrypt='$person_id'  AND active='yes'  " );

 // }


   /*-----------------------------------UPDATE MEMBER gurantee number  IF LOAN IS PAID MORE THAN HALF----------------*/


 //   $sell = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes'  ");

 //   while ($feLooan = mysqli_fetch_assoc($sell)) {

 //     $guarantor1 = $feLooan["guarantor1"];
 //     $guarantor2 = $feLooan["guarantor2"];
 //     $person_id = $feLooan["person_id"];
 //     $total_amount_to_pay = $feLooan["total_amount_to_pay"];
 //     $Loanbalance = $feLooan["balance"];

 //     $paymentHalf = $total_amount_to_pay / 2;

 //    /////////////////SELECT guarantor1/////////
 //    $selMemmm = mysqli_query($conn, "SELECT * FROM members WHERE active='yes' AND free_to_guarantee='no' AND member_id='$guarantor1'  ");
 //    $feG1 = mysqli_fetch_assoc($selMemmm);
 //    $total_guarantee_g1 = $feG1["total_guarantee"];

 //    $new_total_guarantee_g1 = $total_guarantee_g1 - 1;



 //    /////////////////SELECT guarantor1/////////
 //    $selMemmm2 = mysqli_query($conn, "SELECT * FROM members WHERE active='yes' AND free_to_guarantee='no' AND member_id='$guarantor2'  ");
 //    $feG2 = mysqli_fetch_assoc($selMemmm2);
 //    $total_guarantee_g2 = $feG2["total_guarantee"];

 //    $new_total_guarantee_g2 = $total_guarantee_g2 - 1;



 //        /////////////////SELECT the loaner/////////
 //    $seLoner = mysqli_query($conn, "SELECT * FROM members WHERE active='yes' AND free_to_guarantee='no' AND member_id_encrypt='$person_id'  ");
 //    $feLon = mysqli_fetch_assoc($seLoner);
 //    $total_guarantee_Loner = $feLon["total_guarantee"];

 //    $new_total_guarantee_Loner = $total_guarantee_Loner - 1;



 //     if ($paymentHalf >= $Loanbalance) {


 //      if ($total_guarantee_g1>0) {

 //             mysqli_query($conn, "UPDATE members SET total_guarantee='$new_total_guarantee_g1', free_to_guarantee='yes'  WHERE member_id='$guarantor1'  AND active='yes' AND free_to_guarantee='no'  " );
 //      }

 //       if ($total_guarantee_g1>0) {
              
 //              mysqli_query($conn, "UPDATE members SET total_guarantee='$new_total_guarantee_g2', free_to_guarantee='yes' WHERE member_id='$guarantor2'  AND active='yes' AND free_to_guarantee='no'  " );
 //            }

 //       if ($total_guarantee_g1>0) {

 //               mysqli_query($conn, "UPDATE members SET total_guarantee='$new_total_guarantee_Loner', free_to_guarantee='yes'  WHERE member_id_encrypt='$person_id'  AND active='yes' AND free_to_guarantee='no'  " );
 //            }


    
       


       

 //    }




 // }







 // exit();




   /*-----------------------------------UPDATE MEMBER CONTRIBUTION ACTIVE TO NO IF MEMBER IS DEACTIVATED----------------*/


   $sleMem = mysqli_query($conn, "SELECT * FROM members WHERE active='no'  ");

   while ($fetGGG = mysqli_fetch_assoc($sleMem)) {

     $Memberactive = $fetGGG["active"];
     $member_id = $fetGGG["member_id"];


     if ($Memberactive==="no" ) {

      mysqli_query($conn, "UPDATE members_contributions SET active='no'  WHERE member_id='$member_id'   " );

    } else {

   }




 }


  $queryInfo22 = mysqli_query($conn, "SELECT * FROM employment_type WHERE type_id='$employmentType' AND active='yes' LIMIT 1");

    $fetch22 =mysqli_fetch_assoc($queryInfo22);
    $table_id = $fetch22["id"];
    $type_name = $fetch22["type_name"];




/*UPDATE LOANS ACTIVE TO NO IF FINISH PAY IS YES*/
 mysqli_query($conn, " UPDATE loans_all SET active='no'  WHERE finish_paying ='yes' ");



// mysqli_query($conn, "UPDATE members SET paid_reg_form='yes' WHERE active='yes' ");



   /*-----------------------------------UPDATE LOANS STATUS TO PREOCCESSING IF GURANTOERS CONFIRMS YES----------------*/


   $SELlOAN = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes' AND guarantor1_confirm='yes' AND guarantor2_confirm='yes' AND issued_by='' ");

   while ($loan_aal_fetc = mysqli_fetch_assoc($SELlOAN)) {

     $guarantor1_confirm = $loan_aal_fetc["guarantor1_confirm"];
     $guarantor2_confirm = $loan_aal_fetc["guarantor2_confirm"];
     $guarantor1 = $loan_aal_fetc["guarantor1"];
     $guarantor2 = $loan_aal_fetc["guarantor2"];


     if ($guarantor1_confirm==="yes" && $guarantor2_confirm==="yes") {

      mysqli_query($conn, "UPDATE loans_all SET loan_status='processing'  WHERE active='yes'  AND  guarantor1='$guarantor1' AND guarantor2='$guarantor2' AND issued_by='' " );

    } else {

     /*-----------do nothing*/
   }

 }





 /*----------------------------------------AUTOMATIC DEDUCT FROM GUARANTORS WHEN MEMBER / CUTOMER DONT PAY-0------------*/


$seL = mysqli_query($conn, "SELECT * FROM loans_all WHERE active='yes' AND guarantor1_confirm='yes' AND guarantor2_confirm='yes' AND loan_status='issued' AND finish_paying='no' ");

         while ($fet = mysqli_fetch_assoc($seL)) {


           $loanid = $fet["id"];
           $amount_collected = $fet["amount_collected"];
           $date_issued = $fet["date_issued"];
           $person_id = $fet["person_id"];
           $guarantor1 = $fet["guarantor1"];
           $guarantor2 = $fet["guarantor2"];
           $date_of_completion = $fet["date_of_completion"];
           $balance = $fet["balance"];
           $total_interest_rate_amount = $fet["total_interest_rate_amount"];
           $interest_rate = $fet["interest_rate"];
           $interest_amount_paid = $fet["interest_amount_paid"];
           $amount_paid = $fet["amount_paid"];
           $total_amount_to_pay = $fet["total_amount_to_pay"];

           $shareBalancetoGua = $balance / 2;

           $getInterestAsCompRevenue = $interest_rate * $balance;

           $getTOtalAmountofLoanCollect = $balance - $getInterestAsCompRevenue;


           $todayDateCheck = date("Y-m-d");

          $exploDateOfComp = explode("-", $date_of_completion);
          $complYear = current($exploDateOfComp);
          $complMonth = next($exploDateOfComp);
          $complDay = end($exploDateOfComp);


            $complMonth+=2;

            if ($complMonth<=9) {
             $complMonth = "0".$complMonth;
            } else {
              $complMonth = $complMonth;
            }

            if ($complMonth===13) {
              $complYear+=1;
               $complMonth = "01";
            }



             if ($complMonth===14) {
              $complYear+=1;
               $complMonth = "02";
            }


            $date_of_completion_plus_grace_period = "$complYear-$complMonth-$complDay";

           $datedinWords = date("jS F, Y");

           $staffID = strtolower($staffID);



           if ($date_of_completion_plus_grace_period===$todayDateCheck) {



            /*-----------------guarntor one info---------------*/
            $queryIn = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$guarantor1' AND active='yes'");
            $fetch2 =mysqli_fetch_assoc($queryIn);
            $id = $fetch2["id"];
            $total_contribution_made1 = $fetch2["total_contribution_made"];



            /*-----------------guarntor two info---------------*/
            $queryIn2 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$guarantor2' AND active='yes'");
            $fetch4 =mysqli_fetch_assoc($queryIn2);
            $id = $fetch4["id"];
            $total_contribution_made2 = $fetch4["total_contribution_made"];


            // /*-------------insert into deduct guarantorfor guarantor one-------------*/
            mysqli_query($conn, "INSERT INTO deduct_guarantors (person_id, guarantor_id, amount,person_balance) VALUES('$person_id','$guarantor1','$shareBalancetoGua','$balance') ");


            //  /*-------------insertinto deduct guarantor for guarantor two-------------*/
          mysqli_query($conn, "INSERT INTO deduct_guarantors (person_id, guarantor_id, amount,person_balance) VALUES('$person_id','$guarantor2','$shareBalancetoGua','$balance') ");


            //   /*-------------insert into loans pay-------------*/
            mysqli_query($conn, "INSERT INTO loans_pay (person_id, loan_id, loan_collected_date, amount_collected, amount_paid, balance_before,date_paid, receipt_no, staff) VALUES('$person_id','$loanid','$date_issued', '$amount_collected','$balance','$balance','$datedinWords','paid by guarantors','$staffID') ");



            $purpose = "Loans Interest Paid by the Guarantors";

                //   /*-------------insert interest on it to company revenue-------------*/
                mysqli_query($conn, "INSERT INTO company_revenue (person_id, loan_id, amount, purpose, purpose_date, done_by) VALUES('$person_id','$loanid','$getInterestAsCompRevenue', '$purpose','$todayDateCheck','$staffID') ");




                  /*-------------insert interest on it to company revenue-------------*/
                mysqli_query($conn, "INSERT INTO loan_collects (person_id, loan_id, amount, done_by) VALUES('$person_id','$loanid','$getTOtalAmountofLoanCollect', '$staffID') ");



                /*----------------------------DEDUCT FROM GUARANTOR 1 CONTRIBUTIONS---------------*/

                $new_total_contribution_made1 = $total_contribution_made1 - $shareBalancetoGua;
                 mysqli_query($conn, "UPDATE members SET total_contribution_made='$new_total_contribution_made1' WHERE member_id='$guarantor1' AND active='yes' LIMIT 1 ");



                   $dated = date("jS F, Y");
                   $activityType = "Amount Deduct from total Contribution";
                   $MemberDescription = "An amount of $shareBalancetoGua was deducted from your Total contribution ";



                   mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$guarantor1','$activityType','$MemberDescription','$dated','$staffID')");







                  /*----------------------------DEDUCT FROM GUARANTOR 2 CONTRIBUTIONS---------------*/

                $new_total_contribution_made2 = $total_contribution_made2 - $shareBalancetoGua;
                 mysqli_query($conn, "UPDATE members SET total_contribution_made='$new_total_contribution_made2' WHERE member_id='$guarantor2' AND active='yes' LIMIT 1 ");


                  mysqli_query($conn, "INSERT INTO members_activities (member_id,activity_type,description,datecreated,added_by) VALUES('$guarantor2','$activityType','$MemberDescription','$dated','$staffID')");






                  /*----------------------------SET FINISH PAYING TO YES---------------*/
                 mysqli_query($conn, "UPDATE loans_all SET interest_amount_paid='$total_interest_rate_amount', amount_paid='$total_amount_to_pay', balance='0', months_left='0', finish_paying='yes' WHERE person_id='$person_id' AND active='yes' LIMIT 1 ");





                  /*----------------------------UPDATE MEMBER SET HAD LOAN NO--------------*/

                 mysqli_query($conn, "UPDATE members SET has_loan='no' WHERE member_id_encrypt='$person_id' AND active='yes' LIMIT 1 ");



              } else {
                  # code...
              }



            }






}else{
  logout();
  die();
}





} else {

  $queryInfo45 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$login_session' AND active='yes'");
  if (mysqli_num_rows($queryInfo45)===1) {

    $fetch45 =mysqli_fetch_assoc($queryInfo45);
    $id = $fetch45["id"];
    $member_id = $fetch45["member_id"];
    $member_id_encrypt = $fetch45["member_id_encrypt"];
    $password = $fetch45["password"];
    $firstname = $fetch45["firstname"];
    $surname = $fetch45["surname"];
    $residencial_address = $fetch45["residencial_address"];
    $postal_address = $fetch45["postal_address"];
    $place_of_work = $fetch45["place_of_work"];
    $home_town = $fetch45["home_town"];
    $email = $fetch45["email"];
    $telephone = $fetch45["telephone"];
    $dob = $fetch45["dob"];
    $gender = $fetch45["gender"];
    $marital_status = $fetch45["marital_status"];
    $contribution_amount = $fetch45["contribution_amount"];
    $total_contribution_made = $fetch45["total_contribution_made"];
    $last_month_contributed = $fetch45["last_month_contributed"];
    $image = $fetch45["image"];
    $date_created = $fetch45["date_created"];


    $staffFullName = $firstname . " " . $surname;


    if ($image==="" || $image==="/") {
      $staffPhotoShow = "
      <img src=\"assets/images/customs/male.png\" >
      ";
    } else {

     $staffPhotoShow = "
     <img src=\"Datas/members_datas/$image\" >
     ";
   }



   $login_sessionCap = strtoupper($login_session);
     $queryWho = mysqli_query($conn, "SELECT * FROM who_can_login_in WHERE username='$login_sessionCap' AND active='yes'");

    $fetcAhema =mysqli_fetch_assoc($queryWho);
    $Tabbbbid = $fetcAhema["id"];
    $real_password = $fetcAhema["real_password"];
    

    if ($real_password === $login_sessionCap) {
      

        ?>

          <script type="text/javascript">
            location.replace("change_password_page.php?KK=df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637df33a280f461067d82a4957aac60a637&&LOGIN=<?php echo $login_sessionCap ?>&&6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7b6f9ac748f51e3446e2375cc8e7e4ea7bvcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572fcff0a751c28c69066ff8b4fb6ce5572f&&TA=<?php echo $Tabbbbid ?>&&8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b43d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143f3e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d8b4611583e4862a01143fb1831bab33d");
          </script>

        <?php


    } 





 }else{
  logout();
  die();
}



}





/*-----------------------------------ENDS UPDATE LOANS STATUS TO PREOCCESSING IF GURANTOERS CONFIRMS YES----------------*/



$WERES = mysqli_query($conn, "SELECT * FROM school_info WHERE  active='yes' ORDER BY id DESC LIMIT 1 ");

$ahema = mysqli_fetch_assoc($WERES);

$letterhead = $ahema["letterhead"];
$name = $ahema["name"];
$mobile = $ahema["mobile"];
$logo = $ahema["logo"];

?>






<!DOCTYPE html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
  <!-- Begin SEO tag -->
  <title> <?php echo $name ?> | <?php echo $mobile ?> </title>
  <meta property="og:title" content="Dashboard">
  <meta name="author" content="Beni Arisandi">
  <meta property="og:locale" content="en_US">
  <meta name="description" content="Responsive admin theme build on top of Bootstrap 4">
  <meta property="og:description" content="Responsive admin theme build on top of Bootstrap 4">
  <link rel="canonical" href="index.html">
  <meta property="og:url" content="index.html">
  <meta property="og:site_name" content="Looper - Bootstrap 4 Admin Theme">

  <!-- FAVICONS -->
  <link rel="apple-touch-icon" sizes="144x144" href="assets/apple-touch-icon.png">
  <link rel="shortcut icon" href="assets/favicon.ico">
  <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
  <!-- GOOGLE FONT -->
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
  <!-- BEGIN PLUGINS STYLES -->
  <link rel="stylesheet" href="assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.css">
  <link rel="stylesheet" href="assets/vendor/flatpickr/flatpickr.min.css"><!-- END PLUGINS STYLES -->
  <!-- BEGIN THEME STYLES -->
  <link rel="stylesheet" href="assets/stylesheets/theme.min.css" data-skin="default">
  <link rel="stylesheet" href="assets/stylesheets/theme-dark.min.css" data-skin="dark">
  <link rel="stylesheet" href="assets/stylesheets/custom.css">
  <link rel="stylesheet" href="assets/stylesheets/sweet.css">
  <script>
    var skin = localStorage.getItem('skin') || 'default';
    var isCompact = JSON.parse(localStorage.getItem('hasCompactMenu'));
    var disabledSkinStylesheet = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');
      // Disable unused skin immediately
      disabledSkinStylesheet.setAttribute('rel', '');
      disabledSkinStylesheet.setAttribute('disabled', true);
      // add flag class to html immediately
      if (isCompact == true) document.querySelector('html').classList.add('preparing-compact-menu');
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">

      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <!-- toggle aside menu -->
            <button class="hamburger hamburger-squeeze mr-2" type="button" data-toggle="aside-menu" aria-label="toggle aside menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle aside menu -->


            <img src="school_data/logo/<?php echo $logo ?>" style="width: 50%; height: 100px;">

          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->



            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-full">
              <!-- .top-bar-search -->
              <form class="top-bar-search">
                <!-- .input-group -->
                <div class="input-group input-group-search dropdown">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                  </div>
                  <input type="text" class="form-control" data-toggle="dropdown" aria-label="Search" placeholder="Search"> <!-- .dropdown-menu -->

                </div><!-- /.input-group -->
              </form><!-- /.top-bar-search -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->


            
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">

              <!-- .btn-account -->
              <div class="dropdown d-flex">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md">
                 <?php echo $staffPhotoShow ?>

               </span> 

               <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name">
                <?php echo $staffFullName ?>

              </span>

              <?php 

              if ($login_session_type==="1" || $login_session_type==="3") {
                ?>

                <span class="account-description"><?php echo $type_name ?>

              </span>

              <?php
            } else {

              ?>

              <span class="account-description">Member

              </span>

              <?php  
            }


            ?>
          </span>
        </button> <!-- .dropdown-menu -->

        <div class="dropdown-menu">
          <div class="dropdown-arrow ml-3"></div>
          <h6 class="dropdown-header d-none d-md-block d-lg-none"> Beni Arisandi </h6>
          <a class="dropdown-item" href=".home.myprofile-staff.java.ruby"><span class="dropdown-icon oi oi-person"></span> Profile</a> 
          <a class="dropdown-item" href="cores/logout.php"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>



<!-- 
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Help Center</a> 
          <a class="dropdown-item" href="#">Ask Forum</a>
          <a class="dropdown-item" href="#">Keyboard Shortcuts</a> -->



        </div><!-- /.dropdown-menu -->
      </div><!-- /.btn-account -->
    </div><!-- /.top-bar-item -->
  </div><!-- /.top-bar-list -->
</div><!-- /.top-bar -->
</header><!-- /.app-header -->
<!-- .app-aside -->

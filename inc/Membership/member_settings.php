<?php 

$getMemberID = $_GET["DACO"];
$getMemberIDEncrypt = $_GET["TRUE"];


$selStu = mysqli_query($conn, "SELECT * FROM members WHERE  member_id='$getMemberID' AND member_id_encrypt='$getMemberIDEncrypt' AND active='yes' LIMIT 1 ");

if (mysqli_num_rows($selStu)!==0) { 

  $getAlls = mysqli_fetch_assoc($selStu);
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



  $seWho = mysqli_query($conn, "SELECT id FROM who_can_login_in WHERE  active='yes' AND username='$member_id' LIMIT 1 ");
$gegt = mysqli_fetch_assoc($seWho);
$tableIDSSSS = $gegt["id"];





  $selectSum = mysqli_query($conn, "SELECT SUM(amount) AS amount FROM members_contributions WHERE member_id='$member_id'  AND active='yes' ");

  $getRow = mysqli_fetch_assoc($selectSum);
  $totalContribution = $getRow["amount"];
  $qualifyLoanAmount = $totalContribution * 2;

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











if ($login_session_type==="1" || $login_session_type==="3") {

 ?>



 <div class="page">
  <!-- .page-cover -->
  <header class="page-cover">
    <div class="text-center">

      <?php 

      echo "$image";

      ?>


      <h2 class="h4 mt-2 mb-0"> <?php echo $fullname ?> </h2>

      <p class="text-muted"> <?php echo $member_id ?> </p>
      <p>
       <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $dob ?>  </span>

       <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $gender ?></span>
     </p>
     <p> <span class="badge badge-subtle badge-primary" style="font-size: 14px;"><?php echo 'Contribution : GH&#8373; ' . number_format($contribution_amount, 2) ?></span> </p>

     <p> <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo 'Total Contribution : GH&#8373; ' . number_format($total_contribution_made, 2) ?></span> </p>

     <p> <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo ' Qualify Loan Amount : GH&#8373; ' . number_format($total_contribution_made*2, 2)  ?></span> </p>

   </div><!-- .cover-controls -->
   <div class="cover-controls cover-controls-bottom">
     <!-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreInformation">More Info.</a> -->


     <a href="ViewPDFS/Members/print_member_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>" class="btn btn-light" target="_blank"> Print Info.</a>
   </div><!-- /.cover-controls -->


 </header><!-- /.page-cover -->

 
 <nav class="page-navs">
  <div class="nav-scroller">
    <div class="nav nav-center nav-tabs">
      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> "> Overview</a> 

      <a class="nav-link" href="homepage.php?CHECKER=VIEW_MEMBER_ACTIVITIES&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Activities <span class="badge"></span></a> 


      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_MEMBER_SETTINGS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Settings</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_CONTRIBUTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Contributions</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_LOANS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Loans</a>

      <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_PAYMENTS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Payments</a>

      
    </div>
  </div>
</nav>










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
      <div class="col-lg-4">


        <!-- .card -->
        <div class="card card-fluid">
          <h6 class="card-header"> <?php echo $fullname ?> Details </h6><!-- .nav -->
          <nav class="nav nav-tabs flex-column border-0">


            <a href="homepage.php?CHECKER=VIEW_MEMBER_SETTINGS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>" class="nav-link active">Profile</a>

            <a href="homepage.php?CHECKER=EDIT_MEMBER_CONTRIBUTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>" class="nav-link ">Edit Member Contributions</a>


            <a  class="nav-link" style="cursor: pointer;" onclick="resetMemberPassword('<?php echo $member_id ?>','<?php echo $fullname ?>')">Reset Password</a> 


            <a  class="nav-link" style="cursor: pointer;" onclick="deactivateMember('<?php echo $member_id ?>','<?php echo $fullname ?>')">Deactivate Member</a> 


          </nav><!-- /.nav --> 
        </div><!-- /.card -->


        
      </div><!-- /grid column -->






      <!-- grid column -->
      <div class="col-lg-8">
        <!-- .card -->
        <div class="card card-fluid">
          <h6 class="card-header"> Public Profile </h6><!-- .card-body -->







          <!-- .card-body -->



          <!-- .card-body -->
          <div class="card-body">

            <div class="form-row">

              <div class="col-md-12 mb-3">
               <center>
                <?php echo $image ?>
                <br>
                <br>

                <div class="col-lg-2">


                  <input  id="uploadImage" type="file" name="file" onchange="PreviewImage();"  class="passport_photo" accept="image/*"  />

                </div>


              </center>



            </div>







            <div class="col-md-6 mb-3">
              <label for="fName">First name <abbr title="Required">*</abbr></label> <input type="text" class="form-control FirstnameCLass" name="FirstnameCLass" id="fName" placeholder="First name"  required="" value="<?php echo $firstname ?>">
            </div>


            <div class="col-md-6 mb-3">
              <label for="LName">Surname <abbr title="Required">*</abbr></label> <input type="text" class="form-control SurnameClass" id="LName" name="SurnameClass" placeholder="Surname"  required="" value="<?php echo $surname ?>">

            </div>



            <div class="col-md-6 mb-3">
              <label for="pob">Place of Work <abbr title="Required"></abbr></label> <input type="text" class="form-control PlaceOfWorkClass" id="pob" placeholder="Place of Work"  required="" value="<?php echo $place_of_work ?>">

            </div>


            <div class="col-md-6 mb-3">
              <label for="PostalAddress">Postal Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control PostalAddressClass" id="PostalAddress" name="PostalAddressClass" placeholder="Postal Address"  required="" value="<?php echo $postal_address ?>">
            </div>

            <div class="col-md-6 mb-3">
              <label for="ResidenceAddress">Digital Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control ResidenceAddressClass" id="ResidenceAddress" name="ResidenceAddressClass" placeholder="Digital Address"  required="" value="<?php echo $residencial_address ?>">
            </div>


            <div class="col-md-6 mb-3">
              <label for="Email">Email <abbr title="Required">*</abbr></label> <input type="text" class="form-control EmailClass" id="Email" name="EmailClass" placeholder="Email"  required="" value="<?php echo $email ?>">
            </div>


            <div class="col-md-6 mb-3">
              <label for="mobile">Mobile <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkMobiles(this)" maxlength="10" class="form-control mobileClass" id="mobile" placeholder="Mobile "  required="" value="<?php echo $telephone ?>" >
            </div>


            <div class="col-md-6 mb-3">
              <label for="ContributionAmount" class="contriAMountError">Contribution Amount <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checForContributionEntered(this)"  class="form-control ContributionAmount"  placeholder="Contribution Amount eg 50"  required="" value="<?php echo $contribution_amount ?>">
            </div>


            <div class="col-md-6 mb-3">
              <label for="MaritalStatus">Marital Status </label> <select class="custom-select d-block w-100 MaritalStatusClass"  name="MaritalStatusClass" id="MaritalStatus" required="">
                <option value="<?php echo $marital_status ?>"> <?php echo $marital_status ?> </option>
                <option value="Single">  Single </option>
                <option value="Married">  Married </option>
                <option value="Divorce">  Divorce </option>
              </select>

            </div>




            <?php 

            if ($kin_1_name!=="" || $kin_1_mobile!=="" || $kin_1_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 1------------------------------------ -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin1Name"> Next of Kin 1 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin1NameClass" id="NextofKin1Name" name="NextofKin1NameClass" placeholder=" Next of Kin 1 Name"   value="<?php echo $kin_1_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin1Mobile"> Next of Kin 1 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin1MobileClass" id="NextofKin1Mobile"  placeholder=" Next of Kin 1 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_1_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin1Percentage"> Next of Kin 1 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin1PercentageClass"   placeholder=" Next of kin 1 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_1_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 1------------------------------------ -->

              <?php

            }







            if ($kin_2_name!=="" || $kin_2_mobile!=="" || $kin_2_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 2----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin2Name"> Next of Kin 2 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin2NameClass" id="NextofKin2Name" name="NextofKin2NameClass" placeholder=" Next of Kin 2 Name"   value="<?php echo $kin_2_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin2Mobile"> Next of Kin 2 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin2MobileClass" id="NextofKin2Mobile"  placeholder=" Next of Kin 2 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_2_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin2Percentage"> Next of Kin 2 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin2PercentageClass"   placeholder=" Next of kin 2 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_2_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 2----------------------------------- -->

              <?php

            }






            if ($kin_3_name!=="" || $kin_3_mobile!=="" || $kin_3_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 3----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin3Name"> Next of Kin 3 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin3NameClass" id="NextofKin3Name" name="NextofKin3NameClass" placeholder=" Next of Kin 3 Name"   value="<?php echo $kin_3_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin3Mobile"> Next of Kin 3 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin3MobileClass" id="NextofKin3Mobile"  placeholder=" Next of Kin 3 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_3_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin3Percentage"> Next of Kin 3 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin3PercentageClass"   placeholder=" Next of kin 3 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_3_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 3----------------------------------- -->

              <?php

            }





            if ($kin_4_name!=="" || $kin_4_mobile!=="" || $kin_4_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 4--------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin4Name"> Next of Kin 4 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin4NameClass" id="NextofKin4Name" name="NextofKin4NameClass" placeholder=" Next of Kin 4 Name"   value="<?php echo $kin_4_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin4Mobile"> Next of Kin 4 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin4MobileClass" id="NextofKin4Mobile"  placeholder=" Next of Kin 4 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_4_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin4Percentage"> Next of Kin 4 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin4PercentageClass"   placeholder=" Next of kin 4 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_4_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 4--------------------------------- -->

              <?php

            }





            if ($kin_5_name!=="" || $kin_5_mobile!=="" || $kin_5_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 5----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin5Name"> Next of Kin 5 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin5NameClass" id="NextofKin5Name" name="NextofKin5NameClass" placeholder=" Next of Kin 5 Name"   value="<?php echo $kin_5_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin5Mobile"> Next of Kin 5 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin5MobileClass" id="NextofKin5Mobile"  placeholder=" Next of Kin 5 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_5_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin5Percentage"> Next of Kin 5 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin5PercentageClass"   placeholder=" Next of kin 5 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_5_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 5----------------------------------- -->

              <?php

            }





            if ($kin_6_name!=="" || $kin_6_mobile!=="" || $kin_6_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 6----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin6Name"> Next of Kin 6 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin6NameClass" id="NextofKin6Name" name="NextofKin6NameClass" placeholder=" Next of Kin 6 Name"   value="<?php echo $kin_6_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin6Mobile"> Next of Kin 6 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin6MobileClass" id="NextofKin6Mobile"  placeholder=" Next of Kin 6 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_6_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin6Percentage"> Next of Kin 6 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin6PercentageClass"   placeholder=" Next of kin 6 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_6_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 6----------------------------------- -->

              <?php

            }



            if ($kin_7_name!=="" || $kin_7_mobile!=="" || $kin_7_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 7----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin7Name"> Next of Kin 7 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin7NameClass" id="NextofKin7Name" name="NextofKin7NameClass" placeholder=" Next of Kin 7 Name"   value="<?php echo $kin_7_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin7Mobile"> Next of Kin 7 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin7MobileClass" id="NextofKin7Mobile"  placeholder=" Next of Kin 7 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_7_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin7Percentage"> Next of Kin 7 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin7PercentageClass"   placeholder=" Next of kin 7 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_7_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 7----------------------------------- -->

              <?php

            }



            if ($kin_8_name!=="" || $kin_8_mobile!=="" || $kin_8_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 8----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin8Name"> Next of Kin 8 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin8NameClass" id="NextofKin8Name" name="NextofKin8NameClass" placeholder=" Next of Kin 8 Name"   value="<?php echo $kin_8_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin8Mobile"> Next of Kin 8 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin8MobileClass" id="NextofKin8Mobile"  placeholder=" Next of Kin 8 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_8_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin8Percentage"> Next of Kin 8 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin8PercentageClass"   placeholder=" Next of kin 8 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_8_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 8----------------------------------- -->

              <?php

            }



            if ($kin_9_name!=="" || $kin_9_mobile!=="" || $kin_9_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 9----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin9Name"> Next of Kin 9 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin9NameClass" id="NextofKin9Name" name="NextofKin9NameClass" placeholder=" Next of Kin 9 Name"   value="<?php echo $kin_9_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin9Mobile"> Next of Kin 9 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin9MobileClass" id="NextofKin9Mobile"  placeholder=" Next of Kin 9 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_9_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin9Percentage"> Next of Kin 9 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin9PercentageClass"   placeholder=" Next of kin 9 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_9_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 9----------------------------------- -->

              <?php

            }



            if ($kin_10_name!=="" || $kin_10_mobile!=="" || $kin_10_percent!=="") {

              ?>

              <!-- -------------------------- FOR NEXT OF KINS 10----------------------------------- -->

              <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                <div class="col-md-4 mb-3">
                  <label for="NextofKin10Name"> Next of Kin 10 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin10NameClass" id="NextofKin10Name" name="NextofKin10NameClass" placeholder=" Next of Kin 10 Name"   value="<?php echo $kin_10_name ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin10Mobile"> Next of Kin 10 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin10MobileClass" id="NextofKin10Mobile"  placeholder=" Next of Kin 10 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_10_mobile ?>" >
                </div>

                <div class="col-md-4 mb-3">
                  <label for="NextofKin10Percentage"> Next of Kin 10 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin10PercentageClass"   placeholder=" Next of kin 10 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_10_percent ?>" >
                </div>


              </div>

              <!-- --------------------------ENDS FOR NEXT OF KINS 10----------------------------------- -->

              <?php

            }




            ?>








            <!-- </div> -->





          </div><!-- /.form-row -->



          <!-- .form-actions -->
          <div class="form-actions ">
            <button class="btn btn-primary addButon" type="submit"  onclick="editMemberInfo('<?php echo $member_id ?>')">Update</button>

            <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
              <span class="sr-only">Loading...</span>

            </div>



            <button class="btn btn-success  "  data-toggle="modal" data-target="#addNewKinsModal" style="float: right !important; margin-left: 10%;">Add More Next of Kin</button>




            <button class="btn btn-warning  "  data-toggle="modal" data-target="#editNewKinsModal" style="float: right !important; margin-left: 10%;">Edit  Next of Kin</button>




          </div><!-- /.form-actions -->


 



          <?php 

          include 'add_another_next_of_kin_modal.php';



          ?>





        </div><!-- /.card-body -->


      </div><!-- /.card -->
      <!-- .card -->



      <?php 
      include 'edit_next_of_kin_modal.php';


      ?>





    </div><!-- /grid column -->
  </div><!-- /grid row -->
</div><!-- /.page-section -->
</div><!-- /.page-inner -->


</div>




<?php
} else {




  ?>




  <div class="page">
    <!-- .page-cover -->
    <header class="page-cover">
      <div class="text-center">

        <?php 

        echo "$image";

        ?>


        <h2 class="h4 mt-2 mb-0"> <?php echo $fullname ?> </h2>

        <p class="text-muted"> <?php echo $member_id ?> </p>
        <p>
         <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $dob ?>  </span>

         <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $gender ?></span>
       </p>
       <p> <span class="badge badge-subtle badge-primary" style="font-size: 14px;"><?php echo 'Contribution : GH&#8373; ' . number_format($contribution_amount, 2) ?></span> </p>

       <p> <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo 'Total Contribution : GH&#8373; ' . number_format($total_contribution_made, 2) ?></span> </p>

       <p> <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo ' Qualify Loan Amount : GH&#8373; ' . number_format($total_contribution_made*2, 2)  ?></span> </p>

     </div><!-- .cover-controls -->
     <div class="cover-controls cover-controls-bottom">
       <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreInformation">More Info.</a>


       <a href="ViewPDFS/Members/print_member_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $member_id_encrypt ?>" class="btn btn-light" target="_blank"> Print Info.</a>
     </div><!-- /.cover-controls -->


   </header><!-- /.page-cover -->


   <nav class="page-navs">
    <div class="nav-scroller">
      <div class="nav nav-center nav-tabs">
        <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_INFO&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> "> Overview</a> 

        <a class="nav-link" href="homepage.php?CHECKER=VIEW_MEMBER_ACTIVITIES&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Activities <span class="badge"></span></a> 


        <a class="nav-link active" href="homepage.php?CHECKER=VIEW_MEMBER_SETTINGS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Settings</a>

        <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_CONTRIBUTIONS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Contributions</a>

        <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_LOANS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Loans</a>

        <a class="nav-link " href="homepage.php?CHECKER=VIEW_MEMBER_PAYMENTS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?> ">Payments</a>


      </div>
    </div>
  </nav>










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
        <div class="col-lg-4">


          <!-- .card -->
          <div class="card card-fluid">
            <h6 class="card-header"> <?php echo $fullname ?> Details </h6><!-- .nav -->
            <nav class="nav nav-tabs flex-column border-0">


              <a href="homepage.php?CHECKER=VIEW_MEMBER_SETTINGS&&DACO=<?php echo $member_id ?>&&TRUE=<?php echo $member_id_encrypt ?>" class="nav-link active">Profile</a>

              <a  class="nav-link" style="cursor: pointer;"  data-toggle="modal" data-target="#changePasswordModal">Change Password</a> 

            </nav><!-- /.nav --> 
          </div><!-- /.card -->



        </div><!-- /grid column -->






        <!-- grid column -->
        <div class="col-lg-8">
          <!-- .card -->
          <div class="card card-fluid">
            <h6 class="card-header"> Public Profile </h6><!-- .card-body -->




            <!-- .card-body -->
            <div class="card-body">

              <div class="form-row">

                <div class="col-md-12 mb-3">
                 <center>
                  <?php echo $image ?>
                  <br>
                  <br>

                  <div class="col-lg-2">


                    <input  id="uploadImage" type="file" name="file" onchange="PreviewImage();"  class="passport_photo" accept="image/*"  />

                  </div>


                </center>



              </div>







              <div class="col-md-6 mb-3">
                <label for="fName">First name <abbr title="Required">*</abbr></label> <input type="text" class="form-control FirstnameCLass" name="FirstnameCLass" id="fName" placeholder="First name"  required="" value="<?php echo $firstname ?>">
              </div>


              <div class="col-md-6 mb-3">
                <label for="LName">Surname <abbr title="Required">*</abbr></label> <input type="text" class="form-control SurnameClass" id="LName" name="SurnameClass" placeholder="Surname"  required="" value="<?php echo $surname ?>">

              </div>



              <div class="col-md-6 mb-3">
                <label for="pob">Place of Work <abbr title="Required"></abbr></label> <input type="text" class="form-control PlaceOfWorkClass" id="pob" placeholder="Place of Work"  required="" value="<?php echo $place_of_work ?>">

              </div>


              <div class="col-md-6 mb-3">
                <label for="PostalAddress">Postal Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control PostalAddressClass" id="PostalAddress" name="PostalAddressClass" placeholder="Postal Address"  required="" value="<?php echo $postal_address ?>">
              </div>

              <div class="col-md-6 mb-3">
                <label for="ResidenceAddress">Digital Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control ResidenceAddressClass" id="ResidenceAddress" name="ResidenceAddressClass" placeholder="Digital Address"  required="" value="<?php echo $residencial_address ?>">
              </div>


              <div class="col-md-6 mb-3">
                <label for="Email">Email <abbr title="Required">*</abbr></label> <input type="text" class="form-control EmailClass" id="Email" name="EmailClass" placeholder="Email"  required="" value="<?php echo $email ?>">
              </div>


              <div class="col-md-6 mb-3">
                <label for="mobile">Mobile <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkMobiles(this)" maxlength="10" class="form-control mobileClass" id="mobile" placeholder="Mobile "  required="" value="<?php echo $telephone ?>" >
              </div>


              <div class="col-md-6 mb-3">
                <label for="ContributionAmount" class="contriAMountError">Contribution Amount <abbr title="Required">*</abbr></label> <input readonly="" disabled="" type="text"  onkeyup="checForContributionEntered(this)"  class="form-control ContributionAmount"  placeholder="Contribution Amount eg 50"  required="" value="<?php echo $contribution_amount ?>">
              </div>


              <div class="col-md-6 mb-3">
                <label for="MaritalStatus">Marital Status </label> <select class="custom-select d-block w-100 MaritalStatusClass"  name="MaritalStatusClass" id="MaritalStatus" required="">
                  <option value="<?php echo $marital_status ?>"> <?php echo $marital_status ?> </option>
                  <option value="Single">  Single </option>
                  <option value="Married">  Married </option>
                  <option value="Divorce">  Divorce </option>
                </select>

              </div>




              <?php 

              if ($kin_1_name!=="" || $kin_1_mobile!=="" || $kin_1_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 1------------------------------------ -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin1Name"> Next of Kin 1 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin1NameClass" id="NextofKin1Name" name="NextofKin1NameClass" placeholder=" Next of Kin 1 Name"   value="<?php echo $kin_1_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin1Mobile"> Next of Kin 1 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin1MobileClass" id="NextofKin1Mobile"  placeholder=" Next of Kin 1 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_1_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin1Percentage"> Next of Kin 1 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin1PercentageClass"   placeholder=" Next of kin 1 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_1_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 1------------------------------------ -->

                <?php

              }







              if ($kin_2_name!=="" || $kin_2_mobile!=="" || $kin_2_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 2----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin2Name"> Next of Kin 2 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin2NameClass" id="NextofKin2Name" name="NextofKin2NameClass" placeholder=" Next of Kin 2 Name"   value="<?php echo $kin_2_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin2Mobile"> Next of Kin 2 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin2MobileClass" id="NextofKin2Mobile"  placeholder=" Next of Kin 2 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_2_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin2Percentage"> Next of Kin 2 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin2PercentageClass"   placeholder=" Next of kin 2 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_2_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 2----------------------------------- -->

                <?php

              }






              if ($kin_3_name!=="" || $kin_3_mobile!=="" || $kin_3_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 3----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin3Name"> Next of Kin 3 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin3NameClass" id="NextofKin3Name" name="NextofKin3NameClass" placeholder=" Next of Kin 3 Name"   value="<?php echo $kin_3_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin3Mobile"> Next of Kin 3 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin3MobileClass" id="NextofKin3Mobile"  placeholder=" Next of Kin 3 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_3_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin3Percentage"> Next of Kin 3 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin3PercentageClass"   placeholder=" Next of kin 3 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_3_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 3----------------------------------- -->

                <?php

              }





              if ($kin_4_name!=="" || $kin_4_mobile!=="" || $kin_4_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 4--------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin4Name"> Next of Kin 4 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin4NameClass" id="NextofKin4Name" name="NextofKin4NameClass" placeholder=" Next of Kin 4 Name"   value="<?php echo $kin_4_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin4Mobile"> Next of Kin 4 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin4MobileClass" id="NextofKin4Mobile"  placeholder=" Next of Kin 4 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_4_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin4Percentage"> Next of Kin 4 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin4PercentageClass"   placeholder=" Next of kin 4 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_4_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 4--------------------------------- -->

                <?php

              }





              if ($kin_5_name!=="" || $kin_5_mobile!=="" || $kin_5_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 5----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin5Name"> Next of Kin 5 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin5NameClass" id="NextofKin5Name" name="NextofKin5NameClass" placeholder=" Next of Kin 5 Name"   value="<?php echo $kin_5_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin5Mobile"> Next of Kin 5 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin5MobileClass" id="NextofKin5Mobile"  placeholder=" Next of Kin 5 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_5_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin5Percentage"> Next of Kin 5 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin5PercentageClass"   placeholder=" Next of kin 5 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_5_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 5----------------------------------- -->

                <?php

              }





              if ($kin_6_name!=="" || $kin_6_mobile!=="" || $kin_6_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 6----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin6Name"> Next of Kin 6 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin6NameClass" id="NextofKin6Name" name="NextofKin6NameClass" placeholder=" Next of Kin 6 Name"   value="<?php echo $kin_6_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin6Mobile"> Next of Kin 6 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin6MobileClass" id="NextofKin6Mobile"  placeholder=" Next of Kin 6 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_6_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin6Percentage"> Next of Kin 6 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin6PercentageClass"   placeholder=" Next of kin 6 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_6_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 6----------------------------------- -->

                <?php

              }



              if ($kin_7_name!=="" || $kin_7_mobile!=="" || $kin_7_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 7----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin7Name"> Next of Kin 7 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin7NameClass" id="NextofKin7Name" name="NextofKin7NameClass" placeholder=" Next of Kin 7 Name"   value="<?php echo $kin_7_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin7Mobile"> Next of Kin 7 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin7MobileClass" id="NextofKin7Mobile"  placeholder=" Next of Kin 7 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_7_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin7Percentage"> Next of Kin 7 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin7PercentageClass"   placeholder=" Next of kin 7 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_7_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 7----------------------------------- -->

                <?php

              }



              if ($kin_8_name!=="" || $kin_8_mobile!=="" || $kin_8_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 8----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin8Name"> Next of Kin 8 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin8NameClass" id="NextofKin8Name" name="NextofKin8NameClass" placeholder=" Next of Kin 8 Name"   value="<?php echo $kin_8_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin8Mobile"> Next of Kin 8 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin8MobileClass" id="NextofKin8Mobile"  placeholder=" Next of Kin 8 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_8_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin8Percentage"> Next of Kin 8 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin8PercentageClass"   placeholder=" Next of kin 8 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_8_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 8----------------------------------- -->

                <?php

              }



              if ($kin_9_name!=="" || $kin_9_mobile!=="" || $kin_9_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 9----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin9Name"> Next of Kin 9 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin9NameClass" id="NextofKin9Name" name="NextofKin9NameClass" placeholder=" Next of Kin 9 Name"   value="<?php echo $kin_9_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin9Mobile"> Next of Kin 9 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin9MobileClass" id="NextofKin9Mobile"  placeholder=" Next of Kin 9 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_9_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin9Percentage"> Next of Kin 9 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin9PercentageClass"   placeholder=" Next of kin 9 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_9_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 9----------------------------------- -->

                <?php

              }



              if ($kin_10_name!=="" || $kin_10_mobile!=="" || $kin_10_percent!=="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 10----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin10Name"> Next of Kin 10 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin10NameClass" id="NextofKin10Name" name="NextofKin10NameClass" placeholder=" Next of Kin 10 Name"   value="<?php echo $kin_10_name ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin10Mobile"> Next of Kin 10 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin10MobileClass" id="NextofKin10Mobile"  placeholder=" Next of Kin 10 Mobile"  required="" onkeyup="checkMobiles(this)" value="<?php echo $kin_10_mobile ?>" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin10Percentage"> Next of Kin 10 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin10PercentageClass"   placeholder=" Next of kin 10 Percentage eg 5 "  onkeyup="checkMobiles(this)" value="<?php echo $kin_10_percent ?>" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 10----------------------------------- -->

                <?php

              }




              ?>








              <!-- </div> -->





            </div><!-- /.form-row -->



            <!-- .form-actions -->
            <div class="form-actions ">
              <button class="btn btn-primary addButon" type="submit"  onclick="editMemberInfo('<?php echo $member_id ?>')">Update</button>

              <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
                <span class="sr-only">Loading...</span>

              </div>



              <button class="btn btn-success  "  data-toggle="modal" data-target="#addNewKinsModal" style="float: right !important; margin-left: 10%;">Add More Next of Kin</button>




              <button class="btn btn-warning  "  data-toggle="modal" data-target="#editNewKinsModal" style="float: right !important; margin-left: 10%;">Edit  Next of Kin</button>




            </div><!-- /.form-actions -->






            <?php 

            include 'add_another_next_of_kin_modal.php';



            ?>





          </div><!-- /.card-body -->

        </div><!-- /.card -->
        <!-- .card -->



      <?php 
      include 'edit_next_of_kin_modal.php';


      ?>



      </div><!-- /grid column -->
    </div><!-- /grid row -->
  </div><!-- /.page-section -->
</div><!-- /.page-inner -->


</div>



<?php
}




include 'inc/Configurations/Password/change_password_modal2.php';


?>




























<?php 

include 'more_info_modal.php';

?>




<script type="text/javascript">
 function PreviewImage() {


  $(".updatePassportBut").show();
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

  oFReader.onload = function (oFREvent) {
    document.getElementById("uploadPreview").src = oFREvent.target.result;
  };
};





</script>










<script type="text/javascript">


  function addNewNextOfKin(getMemberID) {

    var NextofKin1NameClass = $(".NextofKin1NameClass").val();
    var NextofKin1MobileClass = $(".NextofKin1MobileClass").val();
    var NextofKin1PercentageClass = $(".NextofKin1PercentageClass").val();



    var NextofKin2NameClass = $(".NextofKin2NameClass").val();
    var NextofKin2MobileClass = $(".NextofKin2MobileClass").val();
    var NextofKin2PercentageClass = $(".NextofKin2PercentageClass").val();



    var NextofKin3NameClass = $(".NextofKin3NameClass").val();
    var NextofKin3MobileClass = $(".NextofKin3MobileClass").val();
    var NextofKin3PercentageClass = $(".NextofKin3PercentageClass").val();


    var NextofKin4NameClass = $(".NextofKin4NameClass").val();
    var NextofKin4MobileClass = $(".NextofKin4MobileClass").val();
    var NextofKin4PercentageClass = $(".NextofKin4PercentageClass").val();


    var NextofKin5NameClass = $(".NextofKin5NameClass").val();
    var NextofKin5MobileClass = $(".NextofKin5MobileClass").val();
    var NextofKin5PercentageClass = $(".NextofKin5PercentageClass").val();


    var NextofKin6NameClass = $(".NextofKin6NameClass").val();
    var NextofKin6MobileClass = $(".NextofKin6MobileClass").val();
    var NextofKin6PercentageClass = $(".NextofKin6PercentageClass").val();


    var NextofKin7NameClass = $(".NextofKin7NameClass").val();
    var NextofKin7MobileClass = $(".NextofKin7MobileClass").val();
    var NextofKin7PercentageClass = $(".NextofKin7PercentageClass").val();


    var NextofKin8NameClass = $(".NextofKin8NameClass").val();
    var NextofKin8MobileClass = $(".NextofKin8MobileClass").val();
    var NextofKin8PercentageClass = $(".NextofKin8PercentageClass").val();


    var NextofKin9NameClass = $(".NextofKin9NameClass").val();
    var NextofKin9MobileClass = $(".NextofKin9MobileClass").val();
    var NextofKin9PercentageClass = $(".NextofKin9PercentageClass").val();


    var NextofKin10NameClass = $(".NextofKin10NameClass").val();
    var NextofKin10MobileClass = $(".NextofKin10MobileClass").val();
    var NextofKin10PercentageClass = $(".NextofKin10PercentageClass").val();


    var addBut = $(".addBut");
    var loadingBut = $(".loadingBut2");


    addBut.hide();
    loadingBut.show();

    Swal.fire({
      title: 'Are you sure you want to add additional next of kin?  ',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Add!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addAnotherNextOfKin",{getMemberID:getMemberID,NextofKin1NameClass:NextofKin1NameClass,NextofKin1MobileClass:NextofKin1MobileClass,NextofKin1PercentageClass:NextofKin1PercentageClass,NextofKin2NameClass:NextofKin2NameClass,NextofKin2MobileClass:NextofKin2MobileClass,NextofKin2PercentageClass:NextofKin2PercentageClass,NextofKin3NameClass:NextofKin3NameClass,NextofKin3MobileClass:NextofKin3MobileClass,NextofKin3PercentageClass:NextofKin3PercentageClass,NextofKin4NameClass:NextofKin4NameClass,NextofKin4MobileClass:NextofKin4MobileClass,NextofKin4PercentageClass:NextofKin4PercentageClass,NextofKin5NameClass:NextofKin5NameClass,NextofKin5MobileClass:NextofKin5MobileClass,NextofKin5PercentageClass:NextofKin5PercentageClass,NextofKin6NameClass:NextofKin6NameClass,NextofKin6MobileClass:NextofKin6MobileClass,NextofKin6PercentageClass:NextofKin6PercentageClass,NextofKin7NameClass:NextofKin7NameClass,NextofKin7MobileClass:NextofKin7MobileClass,NextofKin7PercentageClass:NextofKin7PercentageClass,NextofKin8NameClass:NextofKin8NameClass,NextofKin8MobileClass:NextofKin8MobileClass,NextofKin8PercentageClass:NextofKin8PercentageClass,NextofKin9NameClass:NextofKin9NameClass,NextofKin9MobileClass:NextofKin9MobileClass,NextofKin9PercentageClass:NextofKin9PercentageClass,NextofKin10NameClass:NextofKin10NameClass,NextofKin10MobileClass:NextofKin10MobileClass,NextofKin10PercentageClass:NextofKin10PercentageClass},function (showOutPut) {


          if (showOutPut.includes("Error")) {

            Swal.fire({
              title: "Error",
              text: "An error occured in account balance, Please contact technicians",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            addBut.show();
            loadingBut.hide();




          }else{

            Swal.fire({
              title: "Successfull",
              text:  "  Successfully Added" ,
              type: "success",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            }).then((result) => {
              if (result.value) {


                location.reload();



              } 
            })



          }


        });

      }


    });










  }











  /*------------------------------edit next of kins-------------------*/
  function EditNextOfKin(getMemberID) {


    var NextofKin1NameEditClass = $(".NextofKin1NameEditClass").val();
    var NextofKin1MobileEditClass = $(".NextofKin1MobileEditClass").val();
    var NextofKin1PercentageEditClass = $(".NextofKin1PercentageEditClass").val();



    var NextofKin2NameEditClass = $(".NextofKin2NameEditClass").val();
    var NextofKin2MobileEditClass = $(".NextofKin2MobileEditClass").val();
    var NextofKin2PercentageEditClass = $(".NextofKin2PercentageEditClass").val();



    var NextofKin3NameEditClass = $(".NextofKin3NameEditClass").val();
    var NextofKin3MobileEditClass = $(".NextofKin3MobileEditClass").val();
    var NextofKin3PercentageEditClass = $(".NextofKin3PercentageEditClass").val();


    var NextofKin4NameEditClass = $(".NextofKin4NameEditClass").val();
    var NextofKin4MobileEditClass = $(".NextofKin4MobileEditClass").val();
    var NextofKin4PercentageEditClass = $(".NextofKin4PercentageEditClass").val();


    var NextofKin5NameEditClass = $(".NextofKin5NameEditClass").val();
    var NextofKin5MobileEditClass = $(".NextofKin5MobileEditClass").val();
    var NextofKin5PercentageEditClass = $(".NextofKin5PercentageEditClass").val();


    var NextofKin6NameEditClass = $(".NextofKin6NameEditClass").val();
    var NextofKin6MobileEditClass = $(".NextofKin6MobileEditClass").val();
    var NextofKin6PercentageEditClass = $(".NextofKin6PercentageEditClass").val();


    var NextofKin7NameEditClass = $(".NextofKin7NameEditClass").val();
    var NextofKin7MobileEditClass = $(".NextofKin7MobileEditClass").val();
    var NextofKin7PercentageEditClass = $(".NextofKin7PercentageEditClass").val();


    var NextofKin8NameEditClass = $(".NextofKin8NameEditClass").val();
    var NextofKin8MobileEditClass = $(".NextofKin8MobileEditClass").val();
    var NextofKin8PercentageEditClass = $(".NextofKin8PercentageEditClass").val();


    var NextofKin9NameEditClass = $(".NextofKin9NameEditClass").val();
    var NextofKin9MobileEditClass = $(".NextofKin9MobileEditClass").val();
    var NextofKin9PercentageEditClass = $(".NextofKin9PercentageEditClass").val();


    var NextofKin10NameEditClass = $(".NextofKin10NameEditClass").val();
    var NextofKin10MobileEditClass = $(".NextofKin10MobileEditClass").val();
    var NextofKin10PercentageEditClass = $(".NextofKin10PercentageEditClass").val();

    var addBut = $(".addBut2");
    var loadingBut = $(".loadingBut3");


    addBut.hide();
    loadingBut.show();

    Swal.fire({
      title: 'Are you sure you want to Update  next of kin?  ',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Update!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=EditNextOfKin",{getMemberID:getMemberID,NextofKin1NameEditClass:NextofKin1NameEditClass,NextofKin1MobileEditClass:NextofKin1MobileEditClass,NextofKin1PercentageEditClass:NextofKin1PercentageEditClass,NextofKin2NameEditClass:NextofKin2NameEditClass,NextofKin2MobileEditClass:NextofKin2MobileEditClass,NextofKin2PercentageEditClass:NextofKin2PercentageEditClass,NextofKin3NameEditClass:NextofKin3NameEditClass,NextofKin3MobileEditClass:NextofKin3MobileEditClass,NextofKin3PercentageEditClass:NextofKin3PercentageEditClass,NextofKin4NameEditClass:NextofKin4NameEditClass,NextofKin4MobileEditClass:NextofKin4MobileEditClass,NextofKin4PercentageEditClass:NextofKin4PercentageEditClass,NextofKin5NameEditClass:NextofKin5NameEditClass,NextofKin5MobileEditClass:NextofKin5MobileEditClass,NextofKin5PercentageEditClass:NextofKin5PercentageEditClass,NextofKin6NameEditClass:NextofKin6NameEditClass,NextofKin6MobileEditClass:NextofKin6MobileEditClass,NextofKin6PercentageEditClass:NextofKin6PercentageEditClass,NextofKin7NameEditClass:NextofKin7NameEditClass,NextofKin7MobileEditClass:NextofKin7MobileEditClass,NextofKin7PercentageEditClass:NextofKin7PercentageEditClass,NextofKin8NameEditClass:NextofKin8NameEditClass,NextofKin8MobileEditClass:NextofKin8MobileEditClass,NextofKin8PercentageEditClass:NextofKin8PercentageEditClass,NextofKin9NameEditClass:NextofKin9NameEditClass,NextofKin9MobileEditClass:NextofKin9MobileEditClass,NextofKin9PercentageEditClass:NextofKin9PercentageEditClass,NextofKin10NameEditClass:NextofKin10NameEditClass,NextofKin10MobileEditClass:NextofKin10MobileEditClass,NextofKin10PercentageEditClass:NextofKin10PercentageEditClass},function (showOutPut) {


          if (showOutPut.includes("Error")) {

            Swal.fire({
              title: "Error",
              text: "An error occured in account balance, Please contact technicians",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            addBut.show();
            loadingBut.hide();



          }else{

            Swal.fire({
              title: "Successfull",
              text:  "  Successfully Updated" ,
              type: "success",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            }).then((result) => {
              if (result.value) {


                location.reload();



              } 
            })



          }


        });

      }


    });










  }







  /*---------------------------add next of kin to members js-----------*/
  function selectNextOnkinFunc() {


    var SelectNextOfKinClass = $(".SelectNextOfKinClass").val();

    var nextOFKinHolderDivCLassFOr1 = $(".nextOFKinHolderDivCLassFOr1");
    var nextOFKinHolderDivCLassFOr2 = $(".nextOFKinHolderDivCLassFOr2");
    var nextOFKinHolderDivCLassFOr3 = $(".nextOFKinHolderDivCLassFOr3");
    var nextOFKinHolderDivCLassFOr4 = $(".nextOFKinHolderDivCLassFOr4");
    var nextOFKinHolderDivCLassFOr5 = $(".nextOFKinHolderDivCLassFOr5");
    var nextOFKinHolderDivCLassFOr6 = $(".nextOFKinHolderDivCLassFOr6");
    var nextOFKinHolderDivCLassFOr7 = $(".nextOFKinHolderDivCLassFOr7");
    var nextOFKinHolderDivCLassFOr8 = $(".nextOFKinHolderDivCLassFOr8");
    var nextOFKinHolderDivCLassFOr9 = $(".nextOFKinHolderDivCLassFOr9");
    var nextOFKinHolderDivCLassFOr10 = $(".nextOFKinHolderDivCLassFOr10");


    if (SelectNextOfKinClass=='1') {

      nextOFKinHolderDivCLassFOr1.fadeIn();

      nextOFKinHolderDivCLassFOr2.hide();
      nextOFKinHolderDivCLassFOr3.hide();
      nextOFKinHolderDivCLassFOr4.hide();
      nextOFKinHolderDivCLassFOr5.hide();
      nextOFKinHolderDivCLassFOr6.hide();
      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='2') {

      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();

      nextOFKinHolderDivCLassFOr3.hide();
      nextOFKinHolderDivCLassFOr4.hide();
      nextOFKinHolderDivCLassFOr5.hide();
      nextOFKinHolderDivCLassFOr6.hide();
      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='3') {

      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();



      nextOFKinHolderDivCLassFOr4.hide();
      nextOFKinHolderDivCLassFOr5.hide();
      nextOFKinHolderDivCLassFOr6.hide();
      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='4') {

      nextOFKinHolderDivCLassFOr4.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();


      nextOFKinHolderDivCLassFOr5.hide();
      nextOFKinHolderDivCLassFOr6.hide();
      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='5') {

      nextOFKinHolderDivCLassFOr5.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr4.fadeIn();


      nextOFKinHolderDivCLassFOr6.hide();
      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='6') {

      nextOFKinHolderDivCLassFOr6.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr4.fadeIn();
      nextOFKinHolderDivCLassFOr5.fadeIn();


      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='7') {

      nextOFKinHolderDivCLassFOr7.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr4.fadeIn();
      nextOFKinHolderDivCLassFOr5.fadeIn();
      nextOFKinHolderDivCLassFOr6.fadeIn();


      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='8') {

      nextOFKinHolderDivCLassFOr8.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr4.fadeIn();
      nextOFKinHolderDivCLassFOr5.fadeIn();
      nextOFKinHolderDivCLassFOr6.fadeIn();
      nextOFKinHolderDivCLassFOr7.fadeIn();


      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='9') {

      nextOFKinHolderDivCLassFOr9.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr4.fadeIn();
      nextOFKinHolderDivCLassFOr5.fadeIn();
      nextOFKinHolderDivCLassFOr6.fadeIn();
      nextOFKinHolderDivCLassFOr7.fadeIn();
      nextOFKinHolderDivCLassFOr8.fadeIn();


      nextOFKinHolderDivCLassFOr10.hide();


    }else if (SelectNextOfKinClass=='10') {

      nextOFKinHolderDivCLassFOr10.fadeIn();
      nextOFKinHolderDivCLassFOr1.fadeIn();
      nextOFKinHolderDivCLassFOr2.fadeIn();
      nextOFKinHolderDivCLassFOr3.fadeIn();
      nextOFKinHolderDivCLassFOr4.fadeIn();
      nextOFKinHolderDivCLassFOr5.fadeIn();
      nextOFKinHolderDivCLassFOr6.fadeIn();
      nextOFKinHolderDivCLassFOr7.fadeIn();
      nextOFKinHolderDivCLassFOr8.fadeIn();
      nextOFKinHolderDivCLassFOr9.fadeIn();


    }else{

      nextOFKinHolderDivCLassFOr1.hide();

      nextOFKinHolderDivCLassFOr2.hide();
      nextOFKinHolderDivCLassFOr3.hide();
      nextOFKinHolderDivCLassFOr4.hide();
      nextOFKinHolderDivCLassFOr5.hide();
      nextOFKinHolderDivCLassFOr6.hide();
      nextOFKinHolderDivCLassFOr7.hide();
      nextOFKinHolderDivCLassFOr8.hide();
      nextOFKinHolderDivCLassFOr9.hide();
      nextOFKinHolderDivCLassFOr10.hide();
    }

    



  }










  $(".passport_photo").text("masa");
  $(".passport_photo").val("masa");

  function PreviewImage() {


    $(".updatePassportBut").show();
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };

</script>

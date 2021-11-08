<?php 

$getTopCode = $_GET["TRUE"];

$selectStaff = mysqli_query($conn, "SELECT * FROM staff WHERE  active='yes' AND id='$login_session' ");

$getdac2 = mysqli_fetch_assoc($selectStaff);


$id = $getdac2["id"];
$staffID = $getdac2["staffID"];
$encrypted_id = $getdac2["encrypted_id"];
$username = $getdac2["username"];
$encrypted_password = $getdac2["encrypted_password"];
$password = $getdac2["password"];
$firstName = $getdac2["firstName"];
$lastName = $getdac2["lastName"];
$employmentType = $getdac2["employmentType"];
$dob = $getdac2["dob"];
$gender = $getdac2["gender"];
$mobile = $getdac2["mobile"];
$email = $getdac2["email"];
$region = $getdac2["region"];
$marital_status = $getdac2["marital_status"];
$address = $getdac2["address"];
$location = $getdac2["location"];
$home_town = $getdac2["home_town"];
$nationality = $getdac2["nationality"];
$digitalAddress = $getdac2["digitalAddress"];
$staffPhoto = $getdac2["staffPhoto"];
$date_added = $getdac2["date_added"];
$confirm = $getdac2["confirm"];

$staffName = $firstName . " " . $lastName;

$getShortName = substr($firstName, 0,1);


$slEmpl = mysqli_query($conn, "SELECT type_name FROM employment_type WHERE  active='yes' AND type_id='$employmentType' ");
$getLite = mysqli_fetch_assoc($slEmpl);
$type_name = $getLite["type_name"];




?>




<?php 

include 'more_staff_info_modal.php';


 ?>




 
<div class="page">
  <!-- .page-cover -->
  <header class="page-cover">
    <div class="text-center">

      <?php 

      if ($staffPhoto==="") {

        if ($gender==='Male') {
          echo "
          <a  class=\"user-avatar user-avatar-xl\">

          <img src=\"assets/images/customs/male.png\" alt=\"\">

          </a>
          " ;
        } else {

          echo "
          <a  class=\"user-avatar user-avatar-xl\">

          <img src=\"assets/images/customs/female.jpg\" alt=\"\">

          </a>
          " ;
        }



      } else {
        echo "
        <a  class=\"user-avatar user-avatar-xl\">

        <img src=\"staff_data/passport/$staffPhoto\" alt=\"\">

        </a>
        " ;
      }

      ?>


      <h2 class="h4 mt-2 mb-0"> <?php echo $staffName ?> </h2>
      <span class="h6 mt-2 mb-0"> Account Confirmation : <?php echo $confirm ?> </span><br>
      <span class="h6 mt-2 mb-0">  <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $type_name ?></span> </span>
      <div class="my-1">
        <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
      </div>
      <p class="text-muted"> <?php echo $staffID ?> </p>
      <p> <?php echo $nationality . " , " . $region . " - " . $location . " - " .  $digitalAddress ?> </p>
    </div><!-- .cover-controls -->
    <div class="cover-controls cover-controls-bottom">
     <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreStaffInfo">More Info.</a>
   </div><!-- /.cover-controls -->
 </header><!-- /.page-cover -->






 <?php 

 echo " <nav class=\"page-navs\">
 <div class=\"nav-scroller\">
 <div class=\"nav nav-center nav-tabs\">
 <a class=\"nav-link \" href=\"homepage.php?CHECKER=VIEW_STAFF_PROFILE&TRUE=$encrypted_id \">Overview</a> 
 <a class=\"nav-link \" href=\"homepage.php?CHECKER=VIEW_MY_ACTIVITIES&TRUE=$encrypted_id \">Activities <span class=\"badge\">16</span></a> 
 <a class=\"nav-link active\" href=\"homepage.php?CHECKER=VIEW_MY_PROFILE_SETTINGS&TRUE=$encrypted_id \">Settings</a>

 </div>
 </div>
 </nav>";


 ?>



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
          <h6 class="card-header"> <?php echo $staffName ?> Details </h6><!-- .nav -->
          <nav class="nav nav-tabs flex-column border-0">
            <a href="#" class="nav-link active">Profile</a>


     <a  href="#" data-toggle="modal" data-target="#change_password" class="nav-link">Change Password</a>

           <a href="#" class="nav-link">Print Info</a> 
          
 
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

           <!-- form grid -->
           <div class="col-md-4 mb-3">
            <label for="cusID">Staff ID <input name="customerIDPost" disabled="" readonly="" type="text" class="form-control customerID" id="cusID" placeholder="<?php echo $staffID ?> "   value="<?php echo $staffID ?>"  >

            </div><!-- /form grid -->


            <div class="form-row">

              <div class="col-md-12 mb-3">


               <center>
                 <?php 

                 if ($staffPhoto==="") {

                  if ($gender==='Male') {
                    echo "
                    <a  class=\"user-avatar user-avatar-xl\">

                    <img src=\"assets/images/customs/male.png\" alt=\"\" id=\"uploadPreview\">

                    </a>
                    " ;
                  } else {

                    echo "
                    <a  class=\"user-avatar user-avatar-xl\">

                    <img src=\"assets/images/customs/female.jpg\" alt=\"\" id=\"uploadPreview\">

                    </a>
                    " ;
                  }



                } else {
                  echo "
                  <a  class=\"user-avatar user-avatar-xl\">

                  <img src=\"staff_data/passport/$staffPhoto\" alt=\"\" id=\"uploadPreview\">

                  </a>
                  " ;
                }

                ?>

                <br>
                <br>

                <div class="col-lg-2">

                  <input id="uploadImage" type="file" name="file" onchange="PreviewImage();" value="" class="passport_photo" accept="image/*" />

                </div>


              </center>

            </div>



 

            <div class="col-md-4 mb-3">
              <label for="fName">First name <abbr title="Required">*</abbr></label> <input type="text" class="form-control FirstnameCLass" name="FirstnameCLass" id="fName" placeholder="First name"  required="" value="<?php echo $firstName ?>">

            </div><!-- /form grid -->
            <!-- form grid -->
            <div class="col-md-4 mb-3">
              <label for="LName">Last name <abbr title="Required">*</abbr></label> <input type="text" class="form-control LastnameClass" id="LName" name="LastnameClass" placeholder="Last name"  required="" value="<?php echo $lastName ?>">

            </div><!-- /form grid -->


      


          <div class="col-md-4 mb-3">
            <div class="form-group">
              <label class="control-label" for="flatpickr01">Date of Birth <abbr title="Required">*</abbr></label> <input required="" id="flatpickr01" type="text" class="form-control DOBClass" name="DOBClass" data-toggle="flatpickr" value="<?php echo $dob ?>" >
            </div><!-- /.form-group -->
          </div>



          <div class="col-md-4 mb-3">
            <label for="Gender">Gender </label> <select class="custom-select d-block w-100 GenderClass"  name="GenderClass" id="Gender" required="">
              <option value="<?php echo $gender ?>"> <?php echo $gender ?> </option>
              <option value="Male">  Male </option>
              <option value="Female">  Female </option>
            </select>

          </div><!-- /grid column -->


          <div class="col-md-4 mb-3">
            <div class="form-group">
              <label class="labbMobile" for="bMobile"> Mobile <abbr title="Required">*</abbr> </label> <input type="text" id="bMobile" class="form-control mobileCLassName MobileClass" name="MobileClass" onkeyup="CheckMobile(this,'mobileCLassName','labbMobile')" maxlength="10" placeholder="Mobile" value="<?php echo $mobile ?>">
            </div>

          </div><!-- /form grid -->


          <div class="col-md-4 mb-3">
            <div class="form-group">
              <label class="labbEmail" for="bEmail"> Email</label> <input type="email" id="bEmail" class="form-control emailCLassName EmailClass" name="EmailClass" onkeyup="EMailCheck(this,'emailCLassName','labbEmail')" placeholder="email" value="<?php echo $email ?>">
            </div>

          </div><!-- /form grid -->


          <div class="col-md-4 mb-3">
            <label for="Nationality">Nationality </label> <select class="custom-select d-block w-100 NationalityClass" name="NationalityClass" id="Nationality" required="" >
              <option value="<?php echo $nationality ?>"><?php echo $nationality ?></option>
              <option value="Algeria">Algeria</option>
              <option value="Angola">Angola</option>
              <option value="Benin">Benin</option>
              <option value="Botswana">Botswana</option>
              <option value="Cameroon">Cameroon</option>
              <option value="DR Congo">DR Congo</option>
              <option value="Egypt">Egypt</option>
              <option value="Ethiopia">Ethiopia</option>
              <option value="Gabon">Gabon</option>
              <option value="Gambia">Gambia</option>
              <option value="Ghana">Ghana</option>
              <option value="Kenya">Kenya</option>
              <option value="Lesotho">Lesotho</option>
              <option value="Libya">Libya</option>
              <option value="Madagascar">Madagascar</option>
              <option value="Malawi">Malawi</option>
              <option value="Mali">Mali</option>
              <option value="Mauritius">Mauritius</option>
              <option value="Morocco">Morocco</option>
              <option value="Mozambique">Mozambique</option>
              <option value="Namibia">Namibia</option>
              <option value="Niger">Niger</option>
              <option value="Rwanda">Rwanda</option>
              <option value="Senegal">Senegal</option>
              <option value="Seychelles">Seychelles</option>
              <option value="South Africa">South Africa</option>
              <option value="Swaziland">Swaziland</option>
              <option value="Tanzania">Tanzania</option>
              <option value="Tunisia">Tunisia</option>
              <option value="Uganda">Uganda</option>
              <option value="Zambia">Zambia</option>
              <option value="Zimbabwe">Zimbabwe</option>
            </select>

          </div><!-- /grid column -->



          <div class="col-md-4 mb-3">
            <label for="Regions">Regions </label> <select class="custom-select d-block w-100 RegionsClass" name="RegionsClass" id="Regions" required="" >
              <option value="<?php echo $region ?>"> <?php echo $region ?> </option>
              <option value="Oti Region">  Oti Region </option>
              <option value="Bono East Region">  Bono East Region </option>
              <option value="Ahafo Region">  Ahafo Region </option>
              <option value="Bono Region">  Bono Region </option>
              <option value="North East Region ">  North East Region  </option>
              <option value="Savannah Region">  Savannah Region </option>
              <option value="Western North Region">  Western North Region </option>
              <option value="Western Region">  Western Region </option>
              <option value="Volta Region ">  Volta Region  </option>
              <option value="Greater Accra Region">  Greater Accra Region </option>
              <option value="Eastern Region">  Eastern Region </option>
              <option value="Ashanti Region">  Ashanti Region </option>
              <option value="Central Region">  Central Region </option>
              <option value="Northern Region">  Northern Region </option>
              <option value="Upper East Region">  Upper East Region </option>
              <option value="Upper West Region">  Upper West Region </option>
            </select>

          </div><!-- /grid column -->


          <div class="col-md-4 mb-3">
            <label for="MaritalStatus">Marital Status </label> <select class="custom-select d-block w-100 MaritalStatusClass"  name="MaritalStatusClass" id="MaritalStatus" required="">
              <option value="<?php echo $marital_status ?>"> <?php echo $marital_status ?> </option>
              <option value="Single">  Single </option>
              <option value="Married">  Married </option>
              <option value="Divorce">  Divorce </option>
            </select>

          </div><!-- /grid column -->





          <div class="col-md-4 mb-3">
            <label for="AddressID"> Address </label> <input type="text" class="form-control AddressCLass" name="AddressCLass" id="AddressID" placeholder="Address"  value="<?php echo $address ?>">

          </div><!-- /form grid -->





          <div class="col-md-4 mb-3">
            <label for="DAddress"> Digital Address <abbr title="Required">*</abbr> </label> <input type="text" class="form-control DigitalAddressClass" name="DigitalAddressClass" id="DAddress" placeholder="Digital Address"  required="" value="<?php echo $digitalAddress ?>">

          </div><!-- /form grid -->

          <div class="col-md-4 mb-3">
            <label for="Location"> Location </label> <input type="text" class="form-control LocationClass" name="LocationClass" id="Location" placeholder="Location"  required="" value="<?php echo $location ?>">

          </div><!-- /form grid -->





        <div class="col-md-4 mb-3">
          <label for="HomeTown"> Home Town </label> <input type="text" class="form-control HomeTownClass" name="HomeTownClass" id="HomeTown" placeholder="Home Town"   value="<?php echo $home_town ?>">

        </div><!-- /form grid -->



      </div><!-- /.form-row -->


      <!-- .form-actions -->
      <div class="form-actions">
        <!-- <button class="btn btn-primary" type="submit" name="submit" onclick="AddNewCustmer()">Save</button> -->

        <input type="submit" name="UpdateStaffInfo" class="btn btn-primary" value="Update" onclick="updateStaffInfoClick('<?php echo $id ?>')">
      </div><!-- /.form-actions -->
    </div><!-- /.card-body -->




 




</div><!-- /.card -->
<!-- .card -->

</div><!-- /grid column -->
</div><!-- /grid row -->
</div><!-- /.page-section -->
</div><!-- /.page-inner -->


</div>





<?php 

include 'change_password_modal.php';






 


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


<?php 


 ?>
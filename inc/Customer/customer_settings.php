<?php 

$getCustomerID = $_GET["DACO"];
$getCustomerIDEncrypt = $_GET["TRUE"];
 

$selStu = mysqli_query($conn, "SELECT * FROM customers WHERE  customer_id='$getCustomerID' AND customer_id_encrypt='$getCustomerIDEncrypt' AND active='yes' LIMIT 1 ");

if (mysqli_num_rows($selStu)!==0) {

  $getAlls = mysqli_fetch_assoc($selStu);
  $id = $getAlls["id"];
  $customer_id = $getAlls["customer_id"];
  $customer_id_encrypt = $getAlls["customer_id_encrypt"];
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
  $image = $getAlls["image"];
  $next_of_kin_name = $getAlls["next_of_kin_name"];
  $next_of_kin_mobile = $getAlls["next_of_kin_mobile"];
  $next_of_kin_resi_address = $getAlls["next_of_kin_resi_address"];
  $date_created = $getAlls["date_created"];

  $fullname = $firstname . " " . $surname;

  $getShortName = substr($firstname, 0,1);


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
   <img src=\"Datas/customers_datas/$image\" >
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
  <header class="page-cover">
    <div class="text-center">

      <?php 

      echo "$image";

      ?>


      <h2 class="h4 mt-2 mb-0"> <?php echo $fullname ?> </h2>
      <div class="my-1">
        <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="fa fa-star text-yellow"></i> <i class="far fa-star text-yellow"></i>
      </div>
      <p class="text-muted"> <?php echo $customer_id ?> </p>
      <p>
       <span class="badge badge-subtle badge-warning" style="font-size: 14px;"><?php echo $dob ?>  </span>

       <span class="badge badge-subtle badge-success" style="font-size: 14px;"><?php echo $gender ?></span>
     </p>

   </div><!-- .cover-controls -->
   <div class="cover-controls cover-controls-bottom">
     <!-- <a href="#" class="btn btn-light" data-toggle="modal" data-target="#moreInformation">More Info.</a> -->


      <a href="ViewPDFS/Customers/print_customer_information.php?PRINT_INFO_FOR=<?php echo $surname ?>&&TRUE=<?php echo $customer_id_encrypt ?>" class="btn btn-light" target="_blank"> Print Info.</a>
   </div><!-- /.cover-controls -->


 </header><!-- /.page-cover -->

 
 <nav class="page-navs">
  <div class="nav-scroller">
    <div class="nav nav-center nav-tabs">
      <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_INFO&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> "> Overview</a> 


      <a class="nav-link" href="homepage.php?CHECKER=VIEW_CUSTOMER_ACTIVITIES&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Activities <span class="badge"></span></a> 
 

      <a class="nav-link active" href="homepage.php?CHECKER=VIEW_CUSTOMER_SETTINGS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Settings</a>

       <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_LOANS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Loans</a>

       <a class="nav-link " href="homepage.php?CHECKER=VIEW_CUSTOMER_PAYMENTS&&DACO=<?php echo $customer_id ?>&&TRUE=<?php echo $customer_id_encrypt ?> ">Payments</a>


      
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
            <a href="#" class="nav-link active">Profile</a>
            <a  class="nav-link" style="cursor: pointer;" onclick="DeactivateStudent('<?php echo $admissionNumber ?>')">Deactivate Customer</a> 

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


            <input  id="uploadImage" type="file" name="file" onchange="PreviewImage();" value="<?php echo $imagereal ?>" class="passport_photo" accept="image/*"  />

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
        <label for="ResidenceAddress">Digital Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control ResidenceAddressClass" id="ResidenceAddress" name="ResidenceAddressClass" placeholder="Digital Address"  required="" value="<?php echo $residencial_address ?>">
      </div>


      <div class="col-md-6 mb-3">
        <label for="mobile">Mobile <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkMobiles(this)" maxlength="10" class="form-control mobileClass" id="mobile" placeholder="Mobile "  required="" value="<?php echo $telephone ?>" >
      </div>


      

    <!--   <div class="col-md-6 mb-3">
        <label for="pob">Place of Work </label> <input type="text" class="form-control PlaceOfWorkClass" id="pob" placeholder="Place of Work"   value="<?php echo $place_of_work ?>">

      </div>


      <div class="col-md-6 mb-3">
        <label for="PostalAddress">Postal Address </label> <input type="text" class="form-control PostalAddressClass" id="PostalAddress" name="PostalAddressClass" placeholder="Postal Address"  required="" value="<?php echo $postal_address ?>">
      </div>




      <div class="col-md-6 mb-3">
        <label for="Email">Email </label> <input type="text" class="form-control EmailClass" id="Email" name="EmailClass" placeholder="Email"  required="" value="<?php echo $email ?>">
      </div>





      <div class="col-md-6 mb-3">
        <label for="MaritalStatus">Marital Status </label> <select class="custom-select d-block w-100 MaritalStatusClass"  name="MaritalStatusClass" id="MaritalStatus" required="">
          <option value="<?php echo $marital_status ?>"> <?php echo $marital_status ?> </option>
          <option value="Single">  Single </option>
          <option value="Married">  Married </option>
          <option value="Divorce">  Divorce </option>
        </select>

      </div> -->


    </div><!-- /.form-row -->


    <!-- .form-actions -->
    <div class="form-actions">
      <button class="btn btn-primary addButon" type="submit"  onclick="editCustomerInfo('<?php echo $customer_id ?>')">Update</button>

      <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
        <span class="sr-only">Loading...</span>
      </div>


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
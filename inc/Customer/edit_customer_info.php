      
<?php 

$getMemberID = $_GET["DACO"];
$getMemberIDEncrypt = $_GET["TRUE"];


$selStu = mysqli_query($conn, "SELECT * FROM customers WHERE  customer_id='$getMemberID' AND customer_id_encrypt='$getMemberIDEncrypt' AND active='yes' LIMIT 1 ");

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
  $imagereal = $getAlls["image"];
  $date_created = $getAlls["date_created"];

  $fullname = $firstname . " " . $surname;

  $image = $imagereal;

  

  $fullname = $firstname . " " . $surname ;

  $getShortName = substr($firstname, 0,1);

  if ($image==="" || $image==="/") {

    if ($gender==="Male") {
      $image = "<figure class=\"user-avatar user-avatar-xl\">
      <img src=\"assets/images/customs/male.png\" id=\"uploadPreview\" >
      </figure>";
    } else {
      $image = "<figure class=\"user-avatar user-avatar-xl\">
      <img src=\"assets/images/customs/female.jpg\"  id=\"uploadPreview\">
      </figure>";
    }


  } else {

   $image = "<figure class=\"user-avatar user-avatar-xl\">
   <img src=\"Datas/customers_datas/$image\"  id=\"uploadPreview\">
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


<header class="page-title-bar">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Customers</a>
      </li>
    </ol>
  </nav>
  <h1 class="page-title"> Edit <?php echo $fullname ?>'s information </h1>
</header><!-- /.page-title-bar -->



<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->

  <div id="base-style" class="card">

   <!--   <form  action=".home.add-new-customer.html.css" method="post" data-parsley-validate="" validate="" enctype="multipart/form-data" id=""> -->

     


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


  <!-- </form> -->

</div>


</div>


<script type="text/javascript">

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
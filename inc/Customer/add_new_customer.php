   
<?php 

$todayDate = date("F j, Y, g:i a"); 


?>


<header class="page-title-bar">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Customers</a>
      </li>
    </ol>
  </nav>
  <h1 class="page-title"> Add new Customer </h1>
</header><!-- /.page-title-bar -->



<div class="page-section">
  <div class="d-xl-none">
    <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar"><i class="fa fa-th-list"></i></button>
  </div><!-- .card -->

  <div id="base-style" class="card">


    <div class="card-body">

      <div class="form-row">

        <div class="col-md-12 mb-3">
         <center>
          <figure class="user-avatar user-avatar-xxl">
            <img src="assets/images/avatars/profile.jpg" alt="" id="uploadPreview">
          </figure>
          <br>
          <br>

          <div class="col-lg-2">


            <input id="uploadImage" type="file" name="file" onchange="PreviewImage();" value="" class="passport_photo" accept="image/*" />

          </div>


        </center>



      </div>





      <div class="col-md-6 mb-3">
        <label for="fName">First name <abbr title="Required">*</abbr></label> <input type="text" class="form-control FirstnameCLass" name="FirstnameCLass" id="fName" placeholder="First name"  required="">
      </div>


      <div class="col-md-6 mb-3">
        <label for="LName">Surname <abbr title="Required">*</abbr></label> <input type="text" class="form-control SurnameClass" id="LName" name="SurnameClass" placeholder="Surname"  required="">

      </div>


      <div class="col-md-6 mb-3">
        <label for="Gender">Gender </label> <select class="custom-select d-block w-100 GenderClass"  name="GenderClass" id="Gender" required="">
          <option value=""> Choose... </option>
          <option value="Male">  Male </option>
          <option value="Female">  Female </option>
          <option value="Other">  Other </option>
        </select>

      </div>


      <div class="col-md-6 mb-3">
        <label for="mobile">Mobile <abbr title="Required">*</abbr></label> <input type="text"  onkeyup="checkMobiles(this)" maxlength="10" class="form-control mobileClass" id="mobile" placeholder="Mobile "  required="" >
      </div>

      

      <div class="col-md-6 mb-3">
        <label for="DOB">Date of Birth <abbr title="Required">*</abbr></label> <input type="date" class="form-control DOBClass" id="DOB" name="DOBClass" placeholder="Date of Birth"  required="">

      </div>




      <div class="col-md-6 mb-3">
        <label for="ResidenceAddress">Digital Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control ResidenceAddressClass" id="ResidenceAddress" name="ResidenceAddressClass" placeholder="Digital Address"  required="">
      </div>


      

<!-- 
      <div class="col-md-6 mb-3">
        <label for="pob">Place of Work <abbr title="Required">*</abbr></label> <input type="text" class="form-control PlaceOfWorkClass" id="pob" placeholder="Place of Work"  required="">

      </div>


      <div class="col-md-6 mb-3">
        <label for="PostalAddress">Postal Address <abbr title="Required">*</abbr></label> <input type="text" class="form-control PostalAddressClass" id="PostalAddress" name="PostalAddressClass" placeholder="Postal Address"  required="">
      </div>


      <div class="col-md-6 mb-3">
        <label for="HomeTown"> Home Town <abbr title="Required">*</abbr></label> <input type="text" class="form-control HomeTownClass" id="HomeTown"  placeholder=" Home Town"  required="">
      </div>
 

      <div class="col-md-6 mb-3">
        <label for="Email">Email <abbr title="Required">*</abbr></label> <input type="text" class="form-control EmailClass" id="Email" name="EmailClass" placeholder="Email"  required="">
      </div> -->





<!--       <div class="col-md-6 mb-3">
        <label for="MaritalStatus">Marital Status </label> <select class="custom-select d-block w-100 MaritalStatusClass"  name="MaritalStatusClass" id="MaritalStatus" required="">
          <option value=""> Choose... </option>
          <option value="Single">  Single </option>
          <option value="Married">  Married </option>
          <option value="Divorce">  Divorce </option>
        </select>

      </div> -->


    </div><!-- /.form-row -->


    <!-- .form-actions -->
    <div class="form-actions">
      <button class="btn btn-primary addButon" type="submit"  onclick="addNewCustomer()">Add</button>

      <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
        <span class="sr-only">Loading...</span>
      </div>


    </div><!-- /.form-actions -->


  </div><!-- /.card-body -->


  <!-- </form> -->

</div>


</div>


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
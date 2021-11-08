
<?php 
     

 ?>
<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="addNewStafModal" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Add new Staff</h6></center>
     </div><!-- /.modal-header -->
     <!-- .modal-body -->
     <div class="modal-body px-0">
      <!-- .list-group -->
      <div class="list-group list-group-flush list-group-divider">

 
          <!-- .card-body -->
          <div class="card-body">

            <div class="form-row">

              <div class="col-md-12 mb-3">


               <center>
                 <a  class="user-avatar user-avatar-xl">

                    <img src="assets/images/customs/male.png" alt="" id="uploadPreview">

                    </a>

                <br>
                <br>

                <div class="col-lg-2">

                  <input id="uploadImage" type="file" name="file" onchange="PreviewImage();" value="" class="passport_photo" accept="image/*" />

                </div>


              </center>

            </div>



        <div class="col-md-12 mb-3">
          <label for="rightAssign">Assign Right </label>
           <select class="custom-select d-block w-100 rightAssignClass"  name="rightAssignClass" id="rightAssign" required="">

             <?php 

           $squery = "SELECT * FROM employment_type WHERE active='yes'";
           $sresults = mysqli_query($conn, $squery);
           $scount = mysqli_num_rows($sresults);
           if ($scount > 0) {
             echo' <option value=""> Choose...</option>';
             while ($srow = mysqli_fetch_array($sresults)) {
              $sname = $srow["type_name"];
              echo'<option value="'.$srow["type_id"].'" >'.$sname.'</option>';
            }

          }  

          ?>

          </select>

        </div>



 

            <div class="col-md-6 mb-3">
              <label for="fName">First name <abbr title="Required">*</abbr></label> <input type="text" class="form-control FirstnameCLass" name="FirstnameCLass" id="fName" placeholder="First name"  required="" >

            </div><!-- /form grid -->
            <!-- form grid -->
            <div class="col-md-6 mb-3">
              <label for="LName">Last name <abbr title="Required">*</abbr></label> <input type="text" class="form-control LastnameClass" id="LName" name="LastnameClass" placeholder="Last name"  required="" >

            </div><!-- /form grid -->


      


          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label class="control-label" for="flatpickr01">Date of Birth <abbr title="Required">*</abbr></label> <input required="" id="flatpickr01" type="text" class="form-control DOBClass" name="DOBClass" data-toggle="flatpickr"  >
            </div><!-- /.form-group -->
          </div>

 

          <div class="col-md-6 mb-3">
            <label for="Gender">Gender </label> <select class="custom-select d-block w-100 GenderClass"  name="GenderClass" id="Gender" required="">
              <option value=""> Choose... </option>
              <option value="Male">  Male </option>
              <option value="Female">  Female </option>
              <option value="Others">  Others </option>
            </select>

          </div><!-- /grid column -->


          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label class="labbMobile" for="bMobile"> Mobile <abbr title="Required">*</abbr> </label> <input type="text" id="bMobile" class="form-control mobileCLassName MobileClass" name="MobileClass" onkeyup="checkMobiles(this)" maxlength="10" placeholder="Mobile" >
            </div>

          </div><!-- /form grid -->


          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label class="labbEmail" for="bEmail"> Email</label> <input type="email" id="bEmail" class="form-control emailCLassName EmailClass" name="EmailClass" onkeyup="EMailCheck(this)" placeholder="email" >
            </div>

          </div><!-- /form grid -->


          <div class="col-md-6 mb-3">
            <label for="Nationality">Nationality </label> <select class="custom-select d-block w-100 NationalityClass" name="NationalityClass" id="Nationality" required="" >
              <option value="">Choose...</option>
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



          <div class="col-md-6 mb-3">
            <label for="Regions">Regions </label> <select class="custom-select d-block w-100 RegionsClass" name="RegionsClass" id="Regions" required="" >
              <option value=""> Choose... </option>
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


          <div class="col-md-6 mb-3">
            <label for="AddressID"> Address </label> <input type="text" class="form-control AddressCLass" name="AddressCLass" id="AddressID" placeholder="Address"  >

          </div><!-- /form grid -->





          <div class="col-md-6 mb-3">
            <label for="DAddress"> Digital Address <abbr title="Required">*</abbr> </label> <input type="text" class="form-control DigitalAddressClass" name="DigitalAddressClass" id="DAddress" placeholder="Digital Address"  required="" >

          </div><!-- /form grid -->

          <div class="col-md-6 mb-3">
            <label for="Location"> Location </label> <input type="text" class="form-control LocationClass" name="LocationClass" id="Location" placeholder="Location"  required="" >

          </div><!-- /form grid -->





        <div class="col-md-6 mb-3">
          <label for="HomeTown"> Home Town </label> <input type="text" class="form-control HomeTownClass" name="HomeTownClass" id="HomeTown" placeholder="Home Town"   >

        </div><!-- /form grid -->



      </div><!-- /.form-row -->


    </div><!-- /.card-body -->


 

    </div><!-- /.modal-body -->
    <!-- .modal-footer -->
    <div class="modal-footer">
      <button type="button" class="btn btn-success addButon" onclick="addStaff()">Add</button>
       <div class="spinner-border text-primary loadingBut" role="status" style="display: none;">
          <span class="sr-only">Loading...</span>
        </div>
      <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
    </div><!-- /.modal-footer -->
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->






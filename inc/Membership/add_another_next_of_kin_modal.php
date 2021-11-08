

<!-- ---------------------------MORE INFO MODAL------------- -->

<!-- .modal -->
<div class="modal fade" id="addNewKinsModal" tabindex="-1" role="dialog" aria-labelledby="moreStaffInfoLabel" aria-hidden="true">
  <!-- .modal-dialog -->
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <!-- .modal-content -->
    <div class="modal-content">
      <!-- .modal-header -->
      <div class="modal-header">
        <center> <h6 id="moreStaffInfoLabel" class="modal-title text-center"> Add More Next of Kin </h6></center>
      </div><!-- /.modal-header -->
      <!-- .modal-body -->
      <div class="modal-body px-0">
        <!-- .list-group -->
        <div class="list-group list-group-flush list-group-divider">
          <!-- .list-group-item -->
          <div class="list-group-item">

            <div class="col-md-12 mb-3">




              <?php 

              if ($kin_1_name==="" || $kin_1_mobile==="" || $kin_1_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 1------------------------------------ -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin1Name"> Next of Kin 1 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin1NameClass" id="NextofKin1Name" name="NextofKin1NameClass" placeholder=" Next of Kin 1 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin1Mobile"> Next of Kin 1 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin1MobileClass" id="NextofKin1Mobile"  placeholder=" Next of Kin 1 Mobile"  required="" onkeyup="checkMobiles(this)" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin1Percentage"> Next of Kin 1 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin1PercentageClass"   placeholder=" Next of kin 1 Percentage eg 5 "  onkeyup="checkMobiles(this)" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 1------------------------------------ -->

                <?php

              }







              if ($kin_2_name==="" || $kin_2_mobile==="" || $kin_2_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 2----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin2Name"> Next of Kin 2 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin2NameClass" id="NextofKin2Name" name="NextofKin2NameClass" placeholder=" Next of Kin 2 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin2Mobile"> Next of Kin 2 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin2MobileClass" id="NextofKin2Mobile"  placeholder=" Next of Kin 2 Mobile"  required="" onkeyup="checkMobiles(this)"  >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin2Percentage"> Next of Kin 2 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin2PercentageClass"   placeholder=" Next of kin 2 Percentage eg 5 "  onkeyup="checkMobiles(this)"  >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 2----------------------------------- -->

                <?php

              }






              if ($kin_3_name==="" || $kin_3_mobile==="" || $kin_3_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 3----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin3Name"> Next of Kin 3 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin3NameClass" id="NextofKin3Name" name="NextofKin3NameClass" placeholder=" Next of Kin 3 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin3Mobile"> Next of Kin 3 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin3MobileClass" id="NextofKin3Mobile"  placeholder=" Next of Kin 3 Mobile"  required="" onkeyup="checkMobiles(this)" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin3Percentage"> Next of Kin 3 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin3PercentageClass"   placeholder=" Next of kin 3 Percentage eg 5 "  onkeyup="checkMobiles(this)"  >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 3----------------------------------- -->

                <?php

              }





              if ($kin_4_name==="" || $kin_4_mobile==="" || $kin_4_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 4--------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin4Name"> Next of Kin 4 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin4NameClass" id="NextofKin4Name" name="NextofKin4NameClass" placeholder=" Next of Kin 4 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin4Mobile"> Next of Kin 4 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin4MobileClass" id="NextofKin4Mobile"  placeholder=" Next of Kin 4 Mobile"  required="" onkeyup="checkMobiles(this)"  >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin4Percentage"> Next of Kin 4 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin4PercentageClass"   placeholder=" Next of kin 4 Percentage eg 5 "  onkeyup="checkMobiles(this)" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 4--------------------------------- -->

                <?php

              }





              if ($kin_5_name==="" || $kin_5_mobile==="" || $kin_5_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 5----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin5Name"> Next of Kin 5 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin5NameClass" id="NextofKin5Name" name="NextofKin5NameClass" placeholder=" Next of Kin 5 Name"   >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin5Mobile"> Next of Kin 5 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin5MobileClass" id="NextofKin5Mobile"  placeholder=" Next of Kin 5 Mobile"  required="" onkeyup="checkMobiles(this)"  >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin5Percentage"> Next of Kin 5 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin5PercentageClass"   placeholder=" Next of kin 5 Percentage eg 5 "  onkeyup="checkMobiles(this)"  >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 5----------------------------------- -->

                <?php

              }





              if ($kin_6_name==="" || $kin_6_mobile==="" || $kin_6_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 6----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin6Name"> Next of Kin 6 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin6NameClass" id="NextofKin6Name" name="NextofKin6NameClass" placeholder=" Next of Kin 6 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin6Mobile"> Next of Kin 6 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin6MobileClass" id="NextofKin6Mobile"  placeholder=" Next of Kin 6 Mobile"  required="" onkeyup="checkMobiles(this)" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin6Percentage"> Next of Kin 6 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin6PercentageClass"   placeholder=" Next of kin 6 Percentage eg 5 "  onkeyup="checkMobiles(this)"  >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 6----------------------------------- -->

                <?php

              }



              if ($kin_7_name==="" || $kin_7_mobile==="" || $kin_7_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 7----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin7Name"> Next of Kin 7 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin7NameClass" id="NextofKin7Name" name="NextofKin7NameClass" placeholder=" Next of Kin 7 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin7Mobile"> Next of Kin 7 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin7MobileClass" id="NextofKin7Mobile"  placeholder=" Next of Kin 7 Mobile"  required="" onkeyup="checkMobiles(this)" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin7Percentage"> Next of Kin 7 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin7PercentageClass"   placeholder=" Next of kin 7 Percentage eg 5 "  onkeyup="checkMobiles(this)"  >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 7----------------------------------- -->

                <?php

              }



              if ($kin_8_name==="" || $kin_8_mobile==="" || $kin_8_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 8----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin8Name"> Next of Kin 8 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin8NameClass" id="NextofKin8Name" name="NextofKin8NameClass" placeholder=" Next of Kin 8 Name"   >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin8Mobile"> Next of Kin 8 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin8MobileClass" id="NextofKin8Mobile"  placeholder=" Next of Kin 8 Mobile"  required="" onkeyup="checkMobiles(this)"  >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin8Percentage"> Next of Kin 8 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin8PercentageClass"   placeholder=" Next of kin 8 Percentage eg 5 "  onkeyup="checkMobiles(this)" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 8----------------------------------- -->

                <?php

              }



              if ($kin_9_name==="" || $kin_9_mobile==="" || $kin_9_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 9----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin9Name"> Next of Kin 9 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin9NameClass" id="NextofKin9Name" name="NextofKin9NameClass" placeholder=" Next of Kin 9 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin9Mobile"> Next of Kin 9 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin9MobileClass" id="NextofKin9Mobile"  placeholder=" Next of Kin 9 Mobile"  required="" onkeyup="checkMobiles(this)"  >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin9Percentage"> Next of Kin 9 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin9PercentageClass"   placeholder=" Next of kin 9 Percentage eg 5 "  onkeyup="checkMobiles(this)" >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 9----------------------------------- -->

                <?php

              }



              if ($kin_10_name==="" || $kin_10_mobile==="" || $kin_10_percent==="") {

                ?>

                <!-- -------------------------- FOR NEXT OF KINS 10----------------------------------- -->

                <div class="row form-group col-md-12 mb-3 nextOFKinHolderDivCLassFOr1" >

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin10Name"> Next of Kin 10 Name <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin10NameClass" id="NextofKin10Name" name="NextofKin10NameClass" placeholder=" Next of Kin 10 Name"    >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin10Mobile"> Next of Kin 10 Mobile <abbr title="Required">*</abbr></label> <input type="text" class="form-control NextofKin10MobileClass" id="NextofKin10Mobile"  placeholder=" Next of Kin 10 Mobile"  required="" onkeyup="checkMobiles(this)" >
                  </div>

                  <div class="col-md-4 mb-3">
                    <label for="NextofKin10Percentage"> Next of Kin 10 Percentage <abbr title="Required"></abbr></label> <input type="text" class="form-control NextofKin10PercentageClass"   placeholder=" Next of kin 10 Percentage eg 5 "  onkeyup="checkMobiles(this)"  >
                  </div>


                </div>

                <!-- --------------------------ENDS FOR NEXT OF KINS 10----------------------------------- -->

                <?php

              }




              ?>




            </div>

          </div><!-- /.list-group-item -->
          <!-- .list-group-item -->



        </div><!-- /.modal-body -->
        <!-- .modal-footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-success addBut" onclick="addNewNextOfKin('<?php echo $getMemberIDEncrypt ?>')">Add</button>

          <div class="spinner-border text-primary loadingBut2" role="status" style="display: none;">
            <span class="sr-only">Loading...</span>

          </div>



          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
        </div><!-- /.modal-footer -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal --> 






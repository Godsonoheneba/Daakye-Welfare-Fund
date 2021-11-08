



/*-------------------------reset password when email has been send----------------------*/


function checkRestPasswordIfitStrong() {

  var newPassword = $(".newPassword").val();
  var errorMessageFOrEmail = $(".errorMessageFOrEmail");


  

  if (newPassword.length < 8 ) {


    errorMessageFOrEmail.text("Password must be more than 8 characters");
    errorMessageFOrEmail.css("color","red");

  }else{

    errorMessageFOrEmail.text("PPassword strength, Good!!!");
    errorMessageFOrEmail.css("color","white");

  }
}









function chngePasswordBut(getMemberID) {

  var newPassword = $(".newPassword").val();
  var errorMessageFOrEmail = $(".errorMessageFOrEmail");

  var loadingBut = $(".loadingBut");
  var resetBut = $(".resetBut");



  resetBut.hide();
  loadingBut.show();

  if (newPassword!=="") {

   if (newPassword.length < 8 ) {

    errorMessageFOrEmail.text("Password must be more than 8 characters");
    errorMessageFOrEmail.css("color","red");


    resetBut.show();
    loadingBut.hide();

  }else{

    errorMessageFOrEmail.text("Password strength, Good!!!");
    errorMessageFOrEmail.css("color","white");

    resetBut.hide();
    loadingBut.show();



    Swal.fire({
      title: 'Are you sure you want to Change Password ?',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=resetPasswordPostMember",{getMemberID:getMemberID,newPassword:newPassword},function (showOutPut) {


          if (showOutPut.includes("errorinupdate")) {
            Swal.fire({
              title: "error",
              text: "An Error occured in reseting the password, Please try again later",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            resetBut.show();
            loadingBut.hide();




          }else if (showOutPut.includes("empty")) {

           Swal.fire({
            title: "Error",
            text: "Field cannot be empty",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });



           resetBut.show();
           loadingBut.hide();


         }

         else{


          Swal.fire(
            'Successfull!',
            ' Successfully Updated ',
            'success'
            ).then((result) =>{


              window.location.replace("thanks_for_reset_password.php");
              



            })



          }


        });

      }


    });





    



  }


} else {




 Swal.fire({
  title: "Error",
  text: "Field cannot be empty!!!",
  type: "warning",
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Ok",
  closeOnConfirm: false,
  closeOnCancel: false

});

 resetBut.show();
 loadingBut.hide();
 

}


}













/*----------------MEMBERSHIP-----------------*/

/*-=======================ADD MEMBER================*/

function addNewMember() {

  var FirstnameCLass = $(".FirstnameCLass").val();
  var SurnameClass = $(".SurnameClass").val();
  var GenderClass = $(".GenderClass").val();
  var DOBClass = $(".DOBClass").val();
  var PlaceOfWorkClass = $(".PlaceOfWorkClass").val();
  var PostalAddressClass = $(".PostalAddressClass").val();
  var ResidenceAddressClass = $(".ResidenceAddressClass").val();
  var HomeTownClass = $(".HomeTownClass").val();
  var EmailClass = $(".EmailClass").val();
  var mobileClass = $(".mobileClass").val();
  var MaritalStatusClass = $(".MaritalStatusClass").val();
  var ContributionAmount = $(".ContributionAmount").val();

  /*----------------------next of kins -----------------*/
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





  var SelectNextOfKinClass = $(".SelectNextOfKinClass").val();


  var fileCheck = $('#uploadImage').val();

  var fd = new FormData();
  var files = $('#uploadImage')[0].files[0];
  fd.append('file',files);
  fd.append('FirstnameCLass',FirstnameCLass);
  fd.append('SurnameClass',SurnameClass);
  fd.append('GenderClass',GenderClass);
  fd.append('DOBClass',DOBClass);
  fd.append('PlaceOfWorkClass',PlaceOfWorkClass);
  fd.append('PostalAddressClass',PostalAddressClass);
  fd.append('ResidenceAddressClass',ResidenceAddressClass);
  fd.append('HomeTownClass',HomeTownClass);
  fd.append('EmailClass',EmailClass);
  fd.append('mobileClass',mobileClass);
  fd.append('MaritalStatusClass',MaritalStatusClass);
  fd.append('ContributionAmount',ContributionAmount);


  /*----------------------------next of kins----------------*/
  fd.append('NextofKin1NameClass',NextofKin1NameClass);
  fd.append('NextofKin1MobileClass',NextofKin1MobileClass);
  fd.append('NextofKin1PercentageClass',NextofKin1PercentageClass);

  fd.append('NextofKin2NameClass',NextofKin2NameClass);
  fd.append('NextofKin2MobileClass',NextofKin2MobileClass);
  fd.append('NextofKin2PercentageClass',NextofKin2PercentageClass);

  fd.append('NextofKin3NameClass',NextofKin3NameClass);
  fd.append('NextofKin3MobileClass',NextofKin3MobileClass);
  fd.append('NextofKin3PercentageClass',NextofKin3PercentageClass);

  fd.append('NextofKin4NameClass',NextofKin4NameClass);
  fd.append('NextofKin4MobileClass',NextofKin4MobileClass);
  fd.append('NextofKin4PercentageClass',NextofKin4PercentageClass);

  fd.append('NextofKin5NameClass',NextofKin5NameClass);
  fd.append('NextofKin5MobileClass',NextofKin5MobileClass);
  fd.append('NextofKin5PercentageClass',NextofKin5PercentageClass);

  fd.append('NextofKin6NameClass',NextofKin6NameClass);
  fd.append('NextofKin6MobileClass',NextofKin6MobileClass);
  fd.append('NextofKin6PercentageClass',NextofKin6PercentageClass);

  fd.append('NextofKin7NameClass',NextofKin7NameClass);
  fd.append('NextofKin7MobileClass',NextofKin7MobileClass);
  fd.append('NextofKin7PercentageClass',NextofKin7PercentageClass);

  fd.append('NextofKin8NameClass',NextofKin8NameClass);
  fd.append('NextofKin8MobileClass',NextofKin8MobileClass);
  fd.append('NextofKin8PercentageClass',NextofKin8PercentageClass);

  fd.append('NextofKin9NameClass',NextofKin9NameClass);
  fd.append('NextofKin9MobileClass',NextofKin9MobileClass);
  fd.append('NextofKin9PercentageClass',NextofKin9PercentageClass);

  fd.append('NextofKin10NameClass',NextofKin10NameClass);
  fd.append('NextofKin10MobileClass',NextofKin10MobileClass);
  fd.append('NextofKin10PercentageClass',NextofKin10PercentageClass);









  var addButon = $(".addButon");
  var loadingBut = $(".loadingBut");

  addButon.hide();
  loadingBut.show();

  if (FirstnameCLass!=="" && SurnameClass!=="" && GenderClass!=="" && DOBClass!=="" && mobileClass!=="" && ContributionAmount!=="" ) {

    if (fileCheck!=="") {

      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNewMemberWithImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();

            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Added" ,
                type: "success",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              }).then((result) => {
                if (result.value) {


                 window.location.replace(".login-success.view-all-new-members.kt.css.js.html.cpp");

               } 
             })


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });



    } else {

      /*====================INSERT WITHOUT IMAGE-=========================*/



      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNewMemberWithNoImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();


            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Added" ,
                type: "success",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              }).then((result) => {
                if (result.value) {


                 window.location.replace(".login-success.view-all-new-members.kt.css.js.html.cpp");


               } 
             })


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });


    }


  } else {

   Swal.fire({
    title: "Error",
    text: "All Fields with * are mandatory !!! cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });

   addButon.show();
   loadingBut.hide();
 }



}
/*-=======================ENDS ADD MEMBER================*/












/*-=======================EDIT MEMBER================*/

function editMemberInfo(id) {

  var FirstnameCLass = $(".FirstnameCLass").val();
  var SurnameClass = $(".SurnameClass").val();
  var PlaceOfWorkClass = $(".PlaceOfWorkClass").val();
  var PostalAddressClass = $(".PostalAddressClass").val();
  var ResidenceAddressClass = $(".ResidenceAddressClass").val();
  var EmailClass = $(".EmailClass").val();
  var mobileClass = $(".mobileClass").val();
  var MaritalStatusClass = $(".MaritalStatusClass").val();


  var ContributionAmount = $(".ContributionAmount").val();


  /*----------------------next of kins -----------------*/
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





  var SelectNextOfKinClass = $(".SelectNextOfKinClass").val();


  var fileCheck = $('#uploadImage').val();

  var fd = new FormData();
  var files = $('#uploadImage')[0].files[0];
  fd.append('file',files);
  fd.append('FirstnameCLass',FirstnameCLass);
  fd.append('SurnameClass',SurnameClass);
  fd.append('PlaceOfWorkClass',PlaceOfWorkClass);
  fd.append('PostalAddressClass',PostalAddressClass);
  fd.append('ResidenceAddressClass',ResidenceAddressClass);
  fd.append('EmailClass',EmailClass);
  fd.append('mobileClass',mobileClass);
  fd.append('MaritalStatusClass',MaritalStatusClass);


  fd.append('ContributionAmount',ContributionAmount);

  /*----------------------------next of kins----------------*/
  fd.append('NextofKin1NameClass',NextofKin1NameClass);
  fd.append('NextofKin1MobileClass',NextofKin1MobileClass);
  fd.append('NextofKin1PercentageClass',NextofKin1PercentageClass);

  fd.append('NextofKin2NameClass',NextofKin2NameClass);
  fd.append('NextofKin2MobileClass',NextofKin2MobileClass);
  fd.append('NextofKin2PercentageClass',NextofKin2PercentageClass);

  fd.append('NextofKin3NameClass',NextofKin3NameClass);
  fd.append('NextofKin3MobileClass',NextofKin3MobileClass);
  fd.append('NextofKin3PercentageClass',NextofKin3PercentageClass);

  fd.append('NextofKin4NameClass',NextofKin4NameClass);
  fd.append('NextofKin4MobileClass',NextofKin4MobileClass);
  fd.append('NextofKin4PercentageClass',NextofKin4PercentageClass);

  fd.append('NextofKin5NameClass',NextofKin5NameClass);
  fd.append('NextofKin5MobileClass',NextofKin5MobileClass);
  fd.append('NextofKin5PercentageClass',NextofKin5PercentageClass);

  fd.append('NextofKin6NameClass',NextofKin6NameClass);
  fd.append('NextofKin6MobileClass',NextofKin6MobileClass);
  fd.append('NextofKin6PercentageClass',NextofKin6PercentageClass);

  fd.append('NextofKin7NameClass',NextofKin7NameClass);
  fd.append('NextofKin7MobileClass',NextofKin7MobileClass);
  fd.append('NextofKin7PercentageClass',NextofKin7PercentageClass);

  fd.append('NextofKin8NameClass',NextofKin8NameClass);
  fd.append('NextofKin8MobileClass',NextofKin8MobileClass);
  fd.append('NextofKin8PercentageClass',NextofKin8PercentageClass);

  fd.append('NextofKin9NameClass',NextofKin9NameClass);
  fd.append('NextofKin9MobileClass',NextofKin9MobileClass);
  fd.append('NextofKin9PercentageClass',NextofKin9PercentageClass);

  fd.append('NextofKin10NameClass',NextofKin10NameClass);
  fd.append('NextofKin10MobileClass',NextofKin10MobileClass);
  fd.append('NextofKin10PercentageClass',NextofKin10PercentageClass);


  fd.append('id',id);

  var addButon = $(".addButon");
  var loadingBut = $(".loadingBut");

  addButon.hide();
  loadingBut.show();

  if (FirstnameCLass!=="" && SurnameClass!=="" &&  mobileClass!==""  && ContributionAmount!=="" ) {

    if (fileCheck!=="") {

      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=editMemberWithImage',
          type: 'post',
          data: fd,
          contentType: false, 
          processData: false,
          success: function(response){

            var response = response.trim();
            


            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Updated" ,
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


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });



    } else {

      /*====================INSERT WITHOUT IMAGE-=========================*/



      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=editMemberWithNoImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();



            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Updated" ,
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


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });


    }


  } else {

   Swal.fire({
    title: "Error",
    text: "All Fields with * are mandatory!!! cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });

   addButon.show();
   loadingBut.hide();
 }



}
/*-=======================ENDS EDIT MEMBER================*/


 

/*------------------------------------------------------RESET MEMBER PASSWORD------------------------*/
function resetMemberPassword(member_id) {


  Swal.fire({
    title: 'Are you sure you want to Reset Password ?',
    text: "Note: Username and password will now be your Member ID",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=resetMemberPasswordPost",{member_id:member_id},function (showOutPut) {


        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Reset',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });


}





/*)))))))))))))))))))))))DEACTIVATE MEMBER(((((((((((((((((((*/

function deactivateMember(member_id,fullname) {

  Swal.fire({
    title: 'Are you sure you want to Deactivate ' + fullname,
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    Swal.mixin({
      input: 'text',
      confirmButtonText: 'Done &rarr;',
      showCancelButton: true,
      progressSteps: ['1']
    }).queue([
    {
      title: 'Reason',
      text: 'Give reason for Deactivating'
    },

    ]).then((result) => {
      if (result.value) {
        var answers = JSON.stringify(result.value)

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=deactivatememberPost",{member_id:member_id,answers:answers},function (showOutPut) {


          // alert(showOutPut)
          // exit();

          if (showOutPut.includes("empty")) {

           Swal.fire({
            title: "Error",
            text: "Field cannot be empty",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


         }else if (showOutPut.includes("notready")) {

           Swal.fire({
            title: "Error",
            text: "Cannot delete member, Member has guarantee for someone.",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


         }else if (showOutPut.includes("done")) {

          Swal.fire({
            title: "Successfull",
            text: fullname + ' ' + " Has been Successfully Deactivated" ,
            type: "success",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          }).then((result) => {
            if (result.value) {

             window.location.replace(".home.settings-view-all-deactivate-members.config.java.html.css.java");

           } 
         })





        }else{


         Swal.fire({
          title: "Error",
          text: "An error  occured, please try again later",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        })
       }

     })


      }
    })


  });

}

/*(((((((((((((((((((((ENDS DEACTIVATE MEMBER))))))))))))))))))))))*/



/*---------------------------PAY MONTHLY DUES--------------*/
function payMontlyDues(member_id,member_id_encrypt,payThisAmountAsCOntri,penaltyContiAMount) {



  var month_to_pay = $(".month_to_pay").val();
  var year_to_pay = $(".year_to_pay").val();
  var ownAMountPayClass = $(".ownAMountPayClass").val();

  ownAMountPayClass = Number(ownAMountPayClass);
  payThisAmountAsCOntri = Number(payThisAmountAsCOntri);


  var addBut = $(".addBut");
  var loadingBut = $(".loadingBut");

  addBut.hide();
  loadingBut.show();


  if (month_to_pay!=="" && year_to_pay!=="" ) {

    if (ownAMountPayClass=="") {

      Swal.fire({
        title: 'Are you sure you want to pay GHC ' + payThisAmountAsCOntri + " .00 for " + month_to_pay + ' ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Pay Dues!'
      }).then((result) => {


        if (result.value) { 

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=payMonthlyDuesPost",{member_id:member_id,member_id_encrypt:member_id_encrypt,payThisAmountAsCOntri:payThisAmountAsCOntri,penaltyContiAMount:penaltyContiAMount,month_to_pay:month_to_pay,year_to_pay:year_to_pay,ownAMountPayClass:ownAMountPayClass},function (showOutPut) {


            // alert(showOutPut);
            // exit();



            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "Fields Cannot be Empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("nonspecificationeror")) {

              Swal.fire({
                title: "Error",
                text: "An error occured , Please contact technicians",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else if (showOutPut.includes("Exist")) {

              Swal.fire({
                title: "Error",
                text: "Member had already paid for this month",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else{


              Swal.fire(
                'Successfull!',
                ' Payment has been made.',
                'success'
                ).then((result) =>{

                  Swal.fire({
                    title: 'Print',
                    text: "Print Receipt",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Print'
                  }).then((result) => {


                    if (result.value) {

                      window.open(showOutPut.trim())


                      location.reload();



                    }else{

                      location.reload();
                    }
                  })



                })




              }


            });

        }else{
          location.reload();
        }


      });







    } else {


     ownAMountPayClass = ownAMountPayClass;
     payThisAmountAsCOntri = payThisAmountAsCOntri;



      // if (penaltyContiAMount > payThisAmountAsCOntri) {

    if (penaltyContiAMount==="0") {


      Swal.fire({
        title: 'Are you sure you want to pay for your own amount of  ' + ownAMountPayClass + ' for '+ month_to_pay,
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Pay Dues!'
      }).then((result) => {


        if (result.value) { 

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=payMonthlyDuesPost",{member_id:member_id,member_id_encrypt:member_id_encrypt,payThisAmountAsCOntri:payThisAmountAsCOntri,penaltyContiAMount:penaltyContiAMount,month_to_pay:month_to_pay,year_to_pay:year_to_pay,ownAMountPayClass:ownAMountPayClass},function (showOutPut) {


            // alert(showOutPut);
            // exit();





            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "Fields Cannot be Empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("payforintersest")) {

              Swal.fire({
                title: "Error",
                text: "You owe a penalty of GHC" + penaltyContiAMount + ".00,  You must pay something more than your penalty!!!",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else if (showOutPut.includes("specificationerror")) {

              Swal.fire({
                title: "Error",
                text: "An error occured , Please contact technicians",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else if (showOutPut.includes("Exist")) {

              Swal.fire({
                title: "Error",
                text: "Member had already paid for this month",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else{


              Swal.fire(
                'Successfull!',
                ' Payment has been made.',
                'success'
                ).then((result) =>{

                  Swal.fire({
                    title: 'Print',
                    text: "Print Receipt",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Print'
                  }).then((result) => {


                    if (result.value) {

                      window.open(showOutPut.trim())


                      location.reload();



                    }else{

                      location.reload();
                    }
                  })



                })




              }




            });

        }else{
          location.reload();
        }


      });


    



      } else {



    ownAMountPayClass = ownAMountPayClass;
     payThisAmountAsCOntri = payThisAmountAsCOntri;



      if (ownAMountPayClass >= payThisAmountAsCOntri) {





      Swal.fire({
        title: 'Are you sure you want to pay for your own amount of  ' + ownAMountPayClass + ' for '+ month_to_pay,
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Pay Dues!'
      }).then((result) => {

 
        if (result.value) { 

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=payMonthlyDuesPost",{member_id:member_id,member_id_encrypt:member_id_encrypt,payThisAmountAsCOntri:payThisAmountAsCOntri,penaltyContiAMount:penaltyContiAMount,month_to_pay:month_to_pay,year_to_pay:year_to_pay,ownAMountPayClass:ownAMountPayClass},function (showOutPut) {


            // alert(showOutPut);
            // exit();




            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "Fields Cannot be Empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("payforintersest")) {

              Swal.fire({
                title: "Error",
                text: "You owe a penalty of GHC" + penaltyContiAMount + ".00,  You must pay something more than your penalty!!!",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else if (showOutPut.includes("specificationerror")) {

              Swal.fire({
                title: "Error",
                text: "An error occured , Please contact technicians",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else if (showOutPut.includes("Exist")) {

              Swal.fire({
                title: "Error",
                text: "Member had already paid for this month",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();




            }else{


              Swal.fire(
                'Successfull!',
                ' Payment has been made.',
                'success'
                ).then((result) =>{

                  Swal.fire({
                    title: 'Print',
                    text: "Print Receipt",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Print'
                  }).then((result) => {


                    if (result.value) {

                      window.open(showOutPut.trim())


                      location.reload();



                    }else{

                      location.reload();
                    }
                  })



                })




              }




            });

        }else{
          location.reload();
        }


      });


    



      



      }else{


            Swal.fire({
            title: "Error",
            text: "Add Penalty of " + penaltyContiAMount + " to Own amount " ,
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });

          addBut.show();
          loadingBut.hide();


      }





  


      }





    }

  } else {

    Swal.fire({
      title: "Error",
      text: "All fieds are mandatory (*)",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });

    addBut.show();
    loadingBut.hide();
  }



}













/*------------------------------------------------------CHANGE MEMBER CONTRIBUTION-------------------*/
function changeMemberContribution(getMemberID,contribution_amount) {

  var ContributionAmount = $(".ContributionAmount").val();

  if(ContributionAmount!=="" ){


    if (contribution_amount !== ContributionAmount) {


      Swal.fire({
        title: 'Are you sure you want to Change  ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=changeMemberContributionPost",{getMemberID:getMemberID,ContributionAmount:ContributionAmount},function (showOutPut) {


            if (showOutPut.includes("errorinsert")) {

              Swal.fire({
                title: "Error",
                text: "An Error occured at the history side",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("empty")) {

             Swal.fire({
              title: "Error",
              text: "Filed cannot be empty",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


           }

           else{


            Swal.fire(
              'Successfull!',
              ' Successfully Updated ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

        }


      });





    }else{

      Swal.fire({
        title: "Error",
        text: "The Existing Amount is the same as the new amount",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });

    }


  }else{

    Swal.fire({
      title: "Error",
      text: "All fieds are mandatory (*)",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


  }




}
/*--------------------------edit member contribution -----------------------*/












/*------------------------------------------------------APPROVE  MEMBER CONTRIBUTION-------------------*/
function approvedContributionEdit(member_id,amount) {


  Swal.fire({
    title: 'Are you sure you want to Approve ?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=approveMemberContrinbutionEdit",{member_id:member_id,amount:amount},function (showOutPut) {

        if (showOutPut.includes("error")) {

         Swal.fire({
          title: "Error",
          text: "An error Occured, Please try again!!!",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });


       }

       else{

        Swal.fire(
          'Successfull!',
          ' Successfully Approved ',
          'success'
          ).then((result) =>{


           location.reload();



         })



        }


      });

    }


  });






}
/*--------------------------Approve foer edit member contribution -----------------------*/



function viewModalOfDelete(Tableid) {


  $(".hiddenDIEditClass").val(Tableid);

}



/*---------------delete paid for memebr  contrinburtion---------------*/

function deleetePaidMemberContr() {

  var reasonEditClass  = $(".reasonEditClass").val();
  var hiddenDIEditClass  = $(".hiddenDIEditClass").val();



  var addBut2  = $(".addBut2");
  var loadingBut3  = $(".loadingBut3");


  addBut2.hide();
  loadingBut3.show();
  


  if (reasonEditClass!=="") {


    Swal.fire({
      title: 'Are you sure you want Delete ?' ,
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Delete!'
    }).then((result) => {

      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=deleetePaidMemberContrPostForApproval",{reasonEditClass:reasonEditClass,hiddenDIEditClass:hiddenDIEditClass},function (showOutPut) {



          if (showOutPut.includes("empty")) {
            Swal.fire({
              title: "error",
              text: "FIeld Cannot be empty",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });

            addBut2.show();
            loadingBut3.hide();


          }else if (showOutPut.includes("deletionerror")) {

            Swal.fire({
              title: "Error",
              text: "An Error Occured, Please try again",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });

            addBut2.show();
            loadingBut3.hide();


          }else{


            Swal.fire(
              'Successfull!',
              ' Successfully Deleted, Waiting for approval',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

      }


    });



  } else {



   Swal.fire({
    title: "Error",
    text: "Field cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });


   addBut2.show();
   loadingBut3.hide();

 }




}







/*---------------REAL delete paid for memebr  contrinburtion BY A ADMIN---------------*/

function realDeletePaidByStaf(TableID,payment_id) {


  Swal.fire({
    title: 'Are you sure you want Approve ?' ,
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Approve!'
  }).then((result) => {

    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=realDeletePaidContriByAdmin",{TableID:TableID,payment_id:payment_id},function (showOutPut) {

        if (showOutPut.includes("error")) {

          Swal.fire({
            title: "Error",
            text: "An Error Occured, Please try again",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });

          addBut2.show();
          loadingBut3.hide();


        }else{


          Swal.fire(
            'Successfull!',
            ' Successfully Approved',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }else{

      location.reload();
    }


  });



}


















/*----------------ENBDS MEMBERSHIP-----------------*/
















/*---------------------chnage password-------------*/



/*------------------------------------------------------CHANGE STRAFF PASSWORD---------------------*/
// function changePassword(staffID) {

//   var CurrentPasswordClass = $(".CurrentPasswordClass").val();
//   var NewPasswordClass = $(".NewPasswordClass").val();
//   var ConfirmNewPasswordClass = $(".ConfirmNewPasswordClass").val();

//   if(CurrentPasswordClass!=="" && NewPasswordClass!=="" && ConfirmNewPasswordClass!=="" ){


//     if (NewPasswordClass == ConfirmNewPasswordClass) {


//       Swal.fire({
//         title: 'Are you sure you want toChange Password ?',
//         text: "You won't be able to revert this!",
//         type: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, Proceed!'
//       }).then((result) => {


//         if (result.value) {

//           $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=changePassword",{staffID:staffID,CurrentPasswordClass:CurrentPasswordClass,NewPasswordClass:NewPasswordClass,ConfirmNewPasswordClass:ConfirmNewPasswordClass},function (showOutPut) {

//             if (showOutPut.includes("errorinupdate")) {
//               Swal.fire({
//                 title: "error",
//                 text: "An Error occured in changing",
//                 type: "warning",
//                 confirmButtonClass: "btn-danger",
//                 confirmButtonText: "Ok",
//                 closeOnConfirm: false,
//                 closeOnCancel: false

//               });


//             }else if (showOutPut.includes("cureentnot")) {

//               Swal.fire({
//                 title: "Error",
//                 text: "CUrrent Password does not match",
//                 type: "warning",
//                 confirmButtonClass: "btn-danger",
//                 confirmButtonText: "Ok",
//                 closeOnConfirm: false,
//                 closeOnCancel: false

//               });


//             }else if (showOutPut.includes("newNot")) {

//               Swal.fire({
//                 title: "Error",
//                 text: "New Password does not match",
//                 type: "warning",
//                 confirmButtonClass: "btn-danger",
//                 confirmButtonText: "Ok",
//                 closeOnConfirm: false,
//                 closeOnCancel: false

//               });


//             }else if (showOutPut.includes("empty")) {

//              Swal.fire({
//               title: "Error",
//               text: "New Password doesn not match",
//               type: "warning",
//               confirmButtonClass: "btn-danger",
//               confirmButtonText: "Ok",
//               closeOnConfirm: false,
//               closeOnCancel: false

//             });


//            }

//            else{


//             Swal.fire(
//               'Successfull!',
//               ' Successfully Updated ',
//               'success'
//               ).then((result) =>{


//                location.reload();



//              })



//             }


//           });

//         }


//       });





//     }else{

//       Swal.fire({
//         title: "Error",
//         text: "New Password doesn not match",
//         type: "warning",
//         confirmButtonClass: "btn-danger",
//         confirmButtonText: "Ok",
//         closeOnConfirm: false,
//         closeOnCancel: false

//       });

//     }


//   }else{

//     Swal.fire({
//       title: "Error",
//       text: "All fieds are mandatory (*)",
//       type: "warning",
//       confirmButtonClass: "btn-danger",
//       confirmButtonText: "Ok",
//       closeOnConfirm: false,
//       closeOnCancel: false

//     });


//   }




// }








/*----------------ENBDS MEMBERSHIP-----------------*/










/*----------------CUSTOMER-----------------*/

/*-=======================ADD CUSTOMER================*/

function addNewCustomer() {

  var FirstnameCLass = $(".FirstnameCLass").val();
  var SurnameClass = $(".SurnameClass").val();
  var GenderClass = $(".GenderClass").val();
  var DOBClass = $(".DOBClass").val();
  var mobileClass = $(".mobileClass").val();
  var ResidenceAddressClass = $(".ResidenceAddressClass").val();






  // var PlaceOfWorkClass = $(".PlaceOfWorkClass").val();
  // var PostalAddressClass = $(".PostalAddressClass").val();
  // var HomeTownClass = $(".HomeTownClass").val();
  // var EmailClass = $(".EmailClass").val();
  // var MaritalStatusClass = $(".MaritalStatusClass").val();


  var fileCheck = $('#uploadImage').val();

  var fd = new FormData();
  var files = $('#uploadImage')[0].files[0];
  fd.append('file',files);
  fd.append('FirstnameCLass',FirstnameCLass);
  fd.append('SurnameClass',SurnameClass);
  fd.append('GenderClass',GenderClass);
  fd.append('DOBClass',DOBClass);
  fd.append('mobileClass',mobileClass);
  fd.append('ResidenceAddressClass',ResidenceAddressClass);



  // fd.append('PlaceOfWorkClass',PlaceOfWorkClass);
  // fd.append('PostalAddressClass',PostalAddressClass);
  // fd.append('HomeTownClass',HomeTownClass);
  // fd.append('EmailClass',EmailClass);
  // fd.append('MaritalStatusClass',MaritalStatusClass);

  var addButon = $(".addButon");
  var loadingBut = $(".loadingBut");

  addButon.hide();
  loadingBut.show();

  if (FirstnameCLass!=="" && SurnameClass!=="" && GenderClass!=="" && mobileClass!=="" ) {

    if (fileCheck!=="") {

      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNewCustomerWithImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();

            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Added" ,
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


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding Customer, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });



    } else {

      /*====================INSERT WITHOUT IMAGE-=========================*/



      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNewCustomerWithNoImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();


            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Added" ,
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


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding Customer, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });


    }


  } else {

   Swal.fire({
    title: "Error",
    text: "Surname, Firstname, DOB, Address,  and Mobile cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });

   addButon.show();
   loadingBut.hide();
 }



}
/*-=======================ENDS ADD CUSTOMER================*/












/*-=======================EDIT CUSTOMER================*/

function editCustomerInfo(id) {



  var FirstnameCLass = $(".FirstnameCLass").val();
  var SurnameClass = $(".SurnameClass").val();
  var mobileClass = $(".mobileClass").val();
  var ResidenceAddressClass = $(".ResidenceAddressClass").val();


  // var PlaceOfWorkClass = $(".PlaceOfWorkClass").val();
  // var PostalAddressClass = $(".PostalAddressClass").val();
  // var EmailClass = $(".EmailClass").val();
  // var MaritalStatusClass = $(".MaritalStatusClass").val();

  var fileCheck = $('#uploadImage').val();

  var fd = new FormData();
  var files = $('#uploadImage')[0].files[0];
  fd.append('file',files);
  fd.append('FirstnameCLass',FirstnameCLass);
  fd.append('SurnameClass',SurnameClass);
  fd.append('mobileClass',mobileClass);
  fd.append('ResidenceAddressClass',ResidenceAddressClass);

  // fd.append('PlaceOfWorkClass',PlaceOfWorkClass);
  // fd.append('PostalAddressClass',PostalAddressClass);
  // fd.append('EmailClass',EmailClass);
  // fd.append('MaritalStatusClass',MaritalStatusClass);

  fd.append('id',id);

  var addButon = $(".addButon");
  var loadingBut = $(".loadingBut");

  addButon.hide();
  loadingBut.show();

  if (FirstnameCLass!=="" && SurnameClass!=="" && mobileClass!=="" && ResidenceAddressClass!==""  ) {

    if (fileCheck!=="") {

      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=editCustomerWithImage',
          type: 'post',
          data: fd, 
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();



            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Updated" ,
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


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding Customer, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });



    } else {

      /*====================INSERT WITHOUT IMAGE-=========================*/



      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=editCustomerWithNoImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();

            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + SurnameClass  + " Has been Successfully Updated" ,
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


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });


    }


  } else {

   Swal.fire({
    title: "Error",
    text: "Surname, Firstname, DOB, Address, Contribution Amount and Mobile cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });

   addButon.show();
   loadingBut.hide();
 }



}
/*-=======================ENDS EDIT CUSTOMER================*/

/*=========================ENDS CSUTOMERS===================*/








 




/*------------------------------------------LOANS----------------------------------*/

function finishLoanPayments(getIDEncrypt,status,qualifyLoanAmount) {


  var loanAmount = $(".loanAmount").val();
  var PaymentPeriodClass = $(".PaymentPeriodClass").val();
  var guarantor1Class = $(".guarantor1Class").val();
  var guarantor2Class = $(".guarantor2Class").val();

  var guarantorSelf1Class = $(".guarantorSelf1Class").val();
  var guarantorSelf2Class = $(".guarantorSelf2Class").val();

  var guaranteeOptionClass = $(".guaranteeOptionClass").val();


  qualifyLoanAmount = Number(qualifyLoanAmount);
  loanAmount = Number(loanAmount);

  // var selfAmountLimit = qualifyLoanAmount / 4;


  var selfAmountLimit = qualifyLoanAmount ;

  var addBut = $(".addBut");
  var loadingBut = $(".loadingBut");

  addBut.hide();
  loadingBut.show();



  if (guaranteeOptionClass=="self") {


  var selfAmountLimit = qualifyLoanAmount / 2;

  // alert(selfAmountLimit)
  // exit();

    if (loanAmount!=="" && PaymentPeriodClass!=="" && guarantorSelf1Class!=="" && guarantorSelf2Class!=="" ) {


     
      // if (loanAmount <= selfAmountLimit) {

      if (loanAmount <= selfAmountLimit) {


          guarantor1Class = guarantorSelf1Class;
          guarantor2Class = guarantorSelf2Class;

          
          if (loanAmount<=0) {

      Swal.fire({
        title: "Error",
        text: "Amount cannot be zero",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });


      addBut.show();
      loadingBut.hide();

    } else {



        if (qualifyLoanAmount > loanAmount || qualifyLoanAmount == loanAmount ) {

         Swal.fire({
          title: 'Are you sure you want to perform this action ?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Make!'
        }).then((result) => {

          if (result.value) { 


            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addLoansToMember",{getIDEncrypt:getIDEncrypt,loanAmount:loanAmount,PaymentPeriodClass:PaymentPeriodClass,guarantor1Class:guarantor1Class,guarantor2Class:guarantor2Class},function (showOutPut) {



              if (showOutPut.includes("empty")) {
                Swal.fire({
                  title: "Error",
                  text: "Field Cannot be Empty",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();


              }else if (showOutPut.includes("cantforone")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 1  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantfortwo")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 2  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("ErrorInAddingLoan")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occurred , Please contact technicians",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("errorInUpdateList")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occurred , Please contact technicians",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });

                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("exixst")) {

                Swal.fire({
                  title: "Error",
                  text: "Member had already pending loan? Finish Paying before",
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
                  title: "Successfully",
                  text:  "Loan Added Successfully, Status: Pending!!! Wait till guarantors Approve" ,
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

            








          }else{
            location.reload();
          }

        });


      } else {



       Swal.fire({
        title: "Error",
        text: "You cant apply a loan more than  GHC " + qualifyLoanAmount + ".00",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });


       addBut.show();
       loadingBut.hide();

     }



   



    }


        
      } else {

        Swal.fire({
      title: "Error",

      // text: "You cannot apply more than 50% of your remaining Contribution Amount!! But Dont Worry, You qualify for 1.00 to " + selfAmountLimit + ".00",

      text: "You cannot apply more than your total contribution, GHC " +  selfAmountLimit + ".00 , But Dont Worry, You qualify for 1.00 to " + selfAmountLimit + ".00",
      
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


     addBut.show();
     loadingBut.hide();

      }





    }else {

     Swal.fire({
      title: "Error",
      text: "All fields are mandatory for self",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


     addBut.show();
     loadingBut.hide();

   }


 }  ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////ENDS SELF GUARANTING///////////////// ///////////////////

 else {




  if (loanAmount!=="" && PaymentPeriodClass!=="" && guarantor1Class!=="" && guarantor2Class!=="" ) {

    if (guarantor1Class==guarantor2Class) {

     Swal.fire({
      title: "Error",
      text: "Guarantor 1 cannot be the same as Guarantor 2",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });

     addBut.show();
     loadingBut.hide();


   }else{



    if (loanAmount<=0) {

      Swal.fire({
        title: "Error",
        text: "Amount cannot be zero",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });


      addBut.show();
      loadingBut.hide();

    } else {

      /*-----------------for customer---------*/

      if (status=="customer") {


        Swal.fire({
          title: 'Are you sure you want to perform this action ?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Make!'
        }).then((result) => {


          if (result.value) {



            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addLoansToCustomer",{getIDEncrypt:getIDEncrypt,loanAmount:loanAmount,PaymentPeriodClass:PaymentPeriodClass,guarantor1Class:guarantor1Class,guarantor2Class:guarantor2Class},function (showOutPut) {


              
              




              if (showOutPut.includes("empty")) {
                Swal.fire({
                  title: "Error",
                  text: "Field Cannot be Empty",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });
 
 
                addBut.show();
                loadingBut.hide();


              }else if (showOutPut.includes("cantfor500gura1")) {

                Swal.fire({
                  title: "Error",
                  text: "Total Contribution Balance for Guarantor 1 should be more or equal to GHC 600.00  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantfor500gura2")) {

                Swal.fire({
                  title: "Error",
                  text: "Total Contribution Balance for Guarantor 2 should be more or equal to GHC 600.00  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantguarForG1")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 1  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantguarForG2")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 2  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("ErrorInAddingLoan")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occurred , Please contact technicians",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("errorInUpdateList")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occurred , Please contact technicians",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("exixst")) {

                Swal.fire({
                  title: "Error",
                  text: "Customer had already pending loan? Finish Paying before",
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
                  title: "Successfully",
                  text:  "Loan Added Successfully, Status: Pending!!! Wait till guarantors Approve" ,
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


          }else{
            location.reload();
          } 


        });



      }/*--------------------ens customers----------*/

      else{

        /*-----------------------For members-----------*/


        if (qualifyLoanAmount > loanAmount || qualifyLoanAmount == loanAmount ) {

         Swal.fire({
          title: 'Are you sure you want to perform this action ?',
          text: "You won't be able to revert this!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, Make!'
        }).then((result) => {

          if (result.value) {


            $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addLoansToMember",{getIDEncrypt:getIDEncrypt,loanAmount:loanAmount,PaymentPeriodClass:PaymentPeriodClass,guarantor1Class:guarantor1Class,guarantor2Class:guarantor2Class},function (showOutPut) {



              //   alert(showOutPut)
              // exit();
              
              



              if (showOutPut.includes("empty")) {
                Swal.fire({
                  title: "Error",
                  text: "Field Cannot be Empty",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();


              }else if (showOutPut.includes("cantfor500gura1")) {

                Swal.fire({
                  title: "Error",
                  text: "Total Contribution Balance for Guarantor 1 should be more or equal to GHC 600.00  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantfor500gura2")) {

                Swal.fire({
                  title: "Error",
                  text: "Total Contribution Balance for Guarantor 2 should be more or equal to GHC 600.00  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantguarForG1")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 1  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("cantguarForG2")) {

                Swal.fire({
                  title: "Error",
                  text: "Insufficient  Total Contribution Balance for Guarantor 2  ",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("ErrorInAddingLoan")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occured , Please contact technicians",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });


                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("errorInUpdateList")) {

                Swal.fire({
                  title: "Error",
                  text: "An error occured , Please contact technicians",
                  type: "warning",
                  confirmButtonClass: "btn-danger",
                  confirmButtonText: "Ok",
                  closeOnConfirm: false,
                  closeOnCancel: false

                });

                addBut.show();
                loadingBut.hide();




              }else if (showOutPut.includes("exixst")) {

                Swal.fire({
                  title: "Error",
                  text: "Member had already pending loan? Finish Paying before",
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
                  text:  "Loan Added Successfully, Status: Pending!!! Wait till guarantors Approve" ,
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

            








          }else{
            location.reload();
          }

        });


      } else {



       Swal.fire({
        title: "Error",
        text: "You cant apply a loan more than  GHC " + qualifyLoanAmount + ".00",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });


       addBut.show();
       loadingBut.hide();

     }



   }


 }/*----------------ends zero amount input----------*/





}/*---------------------ends when g1 and g2 are not the same--------------*/

}else {

 Swal.fire({
  title: "Error",
  text: "All fields are mandatory for others",
  type: "warning",
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Ok",
  closeOnConfirm: false,
  closeOnCancel: false

});


 addBut.show();
 loadingBut.hide();

}



}














}










/*---------------------------PAY LOANS--------------*/
function payLoans(getLoanID,getPersonID,companyRevenueAmount,companyRevenuePurpose,actuaInterestPaid,actuaAmountToPayperMOnth,actualLoanAMountWihoutInterest,next_month_payment_amount,penalty_For_late_Payment) {


  // alert(penalty_For_late_Payment)
  // exit();

  

  var payLoanAmountClass = $(".payLoanAmountClass").val();

  var addBut = $(".addBut");
  var loadingBut = $(".loadingBut");

  addBut.hide();
  loadingBut.show();

  payLoanAmountClass = Number(payLoanAmountClass);
  next_month_payment_amount = Number(next_month_payment_amount);

  if (payLoanAmountClass!=="" ) {

    if (payLoanAmountClass >= next_month_payment_amount) {


      Swal.fire({
        title: 'Are you sure you want to pay GHC' + payLoanAmountClass + ' .00 ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Pay Loan!'
      }).then((result) => {


        if (result.value) { 

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=payLoansPost",{getLoanID:getLoanID,getPersonID:getPersonID,companyRevenueAmount:companyRevenueAmount,companyRevenuePurpose:companyRevenuePurpose,actuaInterestPaid:actuaInterestPaid,actuaAmountToPayperMOnth:actuaAmountToPayperMOnth,actualLoanAMountWihoutInterest:actualLoanAMountWihoutInterest,next_month_payment_amount:next_month_payment_amount,payLoanAmountClass:payLoanAmountClass,penalty_For_late_Payment:penalty_For_late_Payment},function (showOutPut) {


            // alert(showOutPut);
            // exit();




            if (showOutPut.includes("empty")) {
              Swal.fire({
                title: "Error",
                text: "Amount filed cannot be empty",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("paymentErrors")) {

              Swal.fire({
                title: "Error",
                text: "An error occured , Please contact technicians",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();


            }else if (showOutPut.includes("lessthan")) {

              Swal.fire({
                title: "Error",
                text: "Payment Cannot be lesser than your current amount to pay",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addBut.show();
              loadingBut.hide();


            }else{


              Swal.fire(
                'Successfull!',
                ' Payment has been made.',
                'success'
                ).then((result) =>{

                  Swal.fire({
                    title: 'Print',
                    text: "Print Receipt",
                    type: 'success',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Print'
                  }).then((result) => {


                    if (result.value) {

                      window.open(showOutPut.trim())


                      window.location.replace(".login-success.view-al-loans.js.kt.json.java");
                      
                      



                    }else{

                      location.reload();
                    }
                  })



                })




              }


            });

        }else{
          location.reload();
        }


      });


    } else {


     Swal.fire({
      title: "Error",
      text: "Payment Cannot be lesser than your current amount to pay",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });

     addBut.show();
     loadingBut.hide();


   }



 } else {

  Swal.fire({
    title: "Error",
    text: "Field is mandatory (*)",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });

  addBut.show();
  loadingBut.hide();
}



}






/*-------------------------------------CONFIG-------------------------*/
/*---------------MEMBER INTEREST CONFIG---------------------------------*/


/*--------------------------ADD MEMBER INTERESR=====================*/
function addMemberInterstRate() {

  var normalMemberInterestClass = $(".normalMemberInterestClass").val();
  var defaulterMemberInterestClass = $(".defaulterMemberInterestClass").val();


  var addBut = $(".addBut")
  var loadingExBut = $(".loadingExBut")

  addBut.hide();
  loadingExBut.show();


  if (normalMemberInterestClass!=="" && defaulterMemberInterestClass!=="") {

    Swal.fire({
      title: 'Are you sure you want to perform this action',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Add!'
    }).then((result) => {


      if (result.value) {



        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addMemberInteresRatePost",{normalMemberInterestClass:normalMemberInterestClass,defaulterMemberInterestClass:defaulterMemberInterestClass},function (showOutPut) {


          if (showOutPut.includes("empty")) {
            Swal.fire({
              title: "Error",
              text: "All fields cannot be empty",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            addBut.show();
            loadingExBut.hide();

          }else if (showOutPut.includes("error")) {

            Swal.fire({
              title: "Error",
              text: "An error occured, Please try again later",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });



            addBut.show();
            loadingExBut.hide();



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



      }else{

        location.reload();
      }


    });



  } else {

   Swal.fire({
    title: "Error",
    text: "All fields must be filled",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });



   addBut.show();
   loadingExBut.hide();


 }

}

/*-----------------ends member interestr rate---------------*/




/*--------------------------ADD CUSTOMER INTERESR=====================*/
function addCustomerInterstRate() {

  var customerInterestClass = $(".customerInterestClass").val();

  var addBut = $(".addBut")
  var loadingExBut = $(".loadingExBut")

  addBut.hide();
  loadingExBut.show();

  if (customerInterestClass!=="" ) {

    Swal.fire({
      title: 'Are you sure you want to perform this action',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Add!'
    }).then((result) => {


      if (result.value) {



        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addCustomerInteresRatePost",{customerInterestClass:customerInterestClass},function (showOutPut) {


          if (showOutPut.includes("empty")) {
            Swal.fire({
              title: "Error",
              text: "All fields cannot be empty",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            addBut.show();
            loadingExBut.hide();

          }else if (showOutPut.includes("error")) {

            Swal.fire({
              title: "Error",
              text: "An error occured, Please try again later",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


            addBut.show();
            loadingExBut.hide();



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



      }else{
        location.reload();
      }


    });



  } else {

   Swal.fire({
    title: "Error",
    text: "All fields must be filled",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });


   addBut.show();
   loadingExBut.hide();


 }

}





/*--------------------ends customer rate*/














/*------------------delete MEMBER interest rate-------------*/

function deleteMemberInteresrRate(theID) {

  Swal.fire({
    title: 'Are you sure you want to Delete Member interest Rate ?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=deleteMemberInteresPost",{theID:theID},function (showOutPut) {

        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Deleted ',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });



}








/*------------------delete customer interest rate-------------*/

function deleteCustomerInterest(theID) {

  Swal.fire({
    title: 'Are you sure you want to Delete Customer interest Rate ?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=deleteCustomerInteresPost",{theID:theID},function (showOutPut) {

        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Deleted ',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });



}











/*-=====================ADD NEW STAFF SCRIPT================*/
function addStaff() {

  var rightAssignClass = $(".rightAssignClass").val();
  var FirstnameCLass = $(".FirstnameCLass").val();
  var LastnameClass = $(".LastnameClass").val();
  var DOBClass = $(".DOBClass").val();
  var GenderClass = $(".GenderClass").val();
  var mobileCLassName = $(".mobileCLassName").val();
  var EmailClass = $(".EmailClass").val();
  var NationalityClass = $(".NationalityClass").val();
  var RegionsClass = $(".RegionsClass").val();
  var AddressCLass = $(".AddressCLass").val();
  var DigitalAddressClass = $(".DigitalAddressClass").val();
  var LocationClass = $(".LocationClass").val();
  var HomeTownClass = $(".HomeTownClass").val();




  var fileCheck = $('#uploadImage').val();

  var fd = new FormData();
  var files = $('#uploadImage')[0].files[0];
  fd.append('file',files);
  fd.append('rightAssignClass',rightAssignClass);
  fd.append('FirstnameCLass',FirstnameCLass);
  fd.append('LastnameClass',LastnameClass);
  fd.append('DOBClass',DOBClass);
  fd.append('GenderClass',GenderClass);
  fd.append('mobileCLassName',mobileCLassName);
  fd.append('EmailClass',EmailClass);
  fd.append('NationalityClass',NationalityClass);
  fd.append('RegionsClass',RegionsClass);
  fd.append('AddressCLass',AddressCLass);
  fd.append('DigitalAddressClass',DigitalAddressClass);
  fd.append('LocationClass',LocationClass);
  fd.append('HomeTownClass',HomeTownClass);

  var addButon = $(".addButon");
  var loadingBut = $(".loadingBut");

  addButon.hide();
  loadingBut.show();

  if (FirstnameCLass!=="" && LastnameClass!=="" && DOBClass!==""  && GenderClass!=="" && rightAssignClass!=="" ) {

    if (fileCheck!=="") {

      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addNewStaffWithImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();

            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + LastnameClass  + " Has been Successfully Added" ,
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


            }else if (response="Exist") {

              Swal.fire({
                title: "Error",
                text: "Staff Already Exist? as " + rightAssignClass,
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }

          },
        });


         
       }


     });



    } else {

      /*====================INSERT WITHOUT IMAGE-=========================*/



      Swal.fire({
        title: 'Are you sure you want to perform this action?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

         $.ajax({
          url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=addstaffWithNoImage',
          type: 'post',
          data: fd,
          contentType: false,
          processData: false,
          success: function(response){

            var response = response.trim();

            if (response="done") {

              Swal.fire({
                title: "Successfull",
                text: FirstnameCLass + ' ' + LastnameClass  + " Has been Successfully Added" ,
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


            }else if (response="Exist") {

              Swal.fire({
                title: "Error",
                text: "Staff Already Exist? as " + rightAssignClass,
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }else{


              Swal.fire({
                title: "Error",
                text: "An error occured adding student, Try again later",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });

              addButon.show();
              loadingBut.hide();


            }


          },
        });


         
       }


     });


    }


  } else {

   Swal.fire({
    title: "Error",
    text: "Surname, Firstname, Roght Assign, DOB and Gender cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });

   addButon.show();
   loadingBut.hide();
 }



}





/*-=====================ENDS NADD NEW STAFF==============*/
















/*---------------------------------------------------STAFF UPDATE INFO-----------------*/



/*--------------------------UPDATE STAFF--------------*/
function updateStaffInfoClick(staffID) {


  var FirstnameCLass = $(".FirstnameCLass").val();
  var LastnameClass = $(".LastnameClass").val();
  var DOBClass = $(".DOBClass").val();
  var GenderClass = $(".GenderClass").val();
  var MobileClass = $(".MobileClass").val();
  var emailCLassName = $(".emailCLassName").val();
  var NationalityClass = $(".NationalityClass").val();
  var RegionsClass = $(".RegionsClass").val();
  var MaritalStatusClass = $(".MaritalStatusClass").val();
  var AddressCLass = $(".AddressCLass").val();
  var DigitalAddressClass = $(".DigitalAddressClass").val();
  var LocationClass = $(".LocationClass").val();
  var HomeTownClass = $(".HomeTownClass").val();

  var fileCheck = $('#uploadImage').val();

  var theData = new FormData();
  var files = $('#uploadImage')[0].files[0];
  theData.append('file',files);
  theData.append('FirstnameCLass',FirstnameCLass);
  theData.append('LastnameClass',LastnameClass);
  theData.append('DOBClass',DOBClass);
  theData.append('GenderClass',GenderClass);
  theData.append('MobileClass',MobileClass);
  theData.append('emailCLassName',emailCLassName);
  theData.append('NationalityClass',NationalityClass);
  theData.append('RegionsClass',RegionsClass);
  theData.append('MaritalStatusClass',MaritalStatusClass);
  theData.append('AddressCLass',AddressCLass);
  theData.append('DigitalAddressClass',DigitalAddressClass);
  theData.append('LocationClass',LocationClass);
  theData.append('HomeTownClass',HomeTownClass);
  theData.append('staffID',staffID);




  if (FirstnameCLass!=="" && LastnameClass!==""  && DOBClass!=="" && GenderClass!=="" && MobileClass!=="" && NationalityClass!=="" && RegionsClass!=="" && DigitalAddressClass!=="" && LocationClass!=="" ) {

    if (fileCheck!=="") {


     $.ajax({
      url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=updateStaffInfoWithFIle',
      type: 'post',
      data: theData,
      contentType: false,
      processData: false,
      success: function(response){

        if (response=='empty') {

         Swal.fire({
          title: "Error",
          text: "All fields with (*) cannot be empty",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });


       }else if (response=='iscanDocumentCantMove') {
        Swal.fire({
          title: "Error",
          text: "An error occured in updating profile image",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });
      }else if (response=='errorinupdate') {
        Swal.fire({
          title: "Error",
          text: "An error occured in updating information",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });

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




    },
  });






   } else {






     $.ajax({
      url: '.esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=updateStaffInfoWithNoFile',
      type: 'post',
      data: theData,
      contentType: false,
      processData: false,
      success: function(response){

        if (response=='empty') {

         Swal.fire({
          title: "Error",
          text: "All fields with (*) cannot be empty2",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });


       }else if (response=='errorinupdate') {
        Swal.fire({
          title: "Error",
          text: "An error occured in updating information",
          type: "warning",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Ok",
          closeOnConfirm: false,
          closeOnCancel: false

        });

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




    },
  });


   }


 } else {


  Swal.fire({
    title: "Error",
    text: "All fields with (*) cannot be empty",
    type: "warning",
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Ok",
    closeOnConfirm: false,
    closeOnCancel: false

  });
}





} 







/*------------------------------------------------------employment type-------------------------*/
function changeEmploymentTypeBut(staffID) {


  var EmploymentTypeClass = $(".EmploymentTypeClass").val();



  Swal.fire({
    title: 'Are you sure you want to Change Employment Type?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=changeEmploymentTypePost",{staffID:staffID,EmploymentTypeClass:EmploymentTypeClass},function (showOutPut) {


        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Change',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });


}











/*------------------------------------------------------RESET PASSWORD------------------------*/
function resetStaffPassword(staffID) {

  Swal.fire({
    title: 'Are you sure you want to Reset Password ?',
    text: "Note: Username and password will now be staff ID",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=resetStaffPasswordPost",{staffID:staffID},function (showOutPut) {


        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Reset',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });


}





/*------------------------------------------------------CONFIRM STAFF ACCOUNT-----------------------*/
function confirmStaff(staffID) {

  Swal.fire({
    title: 'Are you sure you want to Confirm staff ?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=confirmStaffpOST",{staffID:staffID},function (showOutPut) {

        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Deleted ',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });


}




/*------------------------------------------------------CLOSE STAFF ACCOUNT-----------------------*/
function closeSTaffAccount(staffID) {

  Swal.fire({
    title: 'Are you sure you want to Delete staff ?',
    text: "You won't be able to revert this!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, Proceed!'
  }).then((result) => {


    if (result.value) {

      $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=closeAccountPost",{staffID:staffID},function (showOutPut) {

        if (showOutPut.includes("errorinupdate")) {
          Swal.fire({
            title: "error",
            text: "An Error occured in changing",
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Ok",
            closeOnConfirm: false,
            closeOnCancel: false

          });


          


        }else{




          Swal.fire(
            'Successfull!',
            ' Successfully Deleted ',
            'success'
            ).then((result) =>{


             location.reload();



           })



          }


        });

    }


  });


}








/*------------------------------------------------------CHANGE MEMBER PASSWORD---------------------*/

function changePassword(member_id) {


  var CurrentPasswordClass = $(".CurrentPasswordClass").val();
  var NewPasswordClass = $(".NewPasswordClass").val();
  var ConfirmNewPasswordClass = $(".ConfirmNewPasswordClass").val();

  if(CurrentPasswordClass!=="" && NewPasswordClass!=="" && ConfirmNewPasswordClass!=="" ){


    if (NewPasswordClass == ConfirmNewPasswordClass) {


      Swal.fire({
        title: 'Are you sure you want to Change Password ?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Proceed!'
      }).then((result) => {


        if (result.value) {

          $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=changePassword",{member_id:member_id,CurrentPasswordClass:CurrentPasswordClass,NewPasswordClass:NewPasswordClass,ConfirmNewPasswordClass:ConfirmNewPasswordClass},function (showOutPut) {


            // alert(showOutPut);
            // exit();

            if (showOutPut.includes("errorinupdate")) {
              Swal.fire({
                title: "error",
                text: "An Error occured in changing",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("cureentnot")) {

              Swal.fire({
                title: "Error",
                text: "CUrrent Password does not match",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("newNot")) {

              Swal.fire({
                title: "Error",
                text: "New Password does not match",
                type: "warning",
                confirmButtonClass: "btn-danger",
                confirmButtonText: "Ok",
                closeOnConfirm: false,
                closeOnCancel: false

              });


            }else if (showOutPut.includes("empty")) {

             Swal.fire({
              title: "Error",
              text: "New Password doesn not match",
              type: "warning",
              confirmButtonClass: "btn-danger",
              confirmButtonText: "Ok",
              closeOnConfirm: false,
              closeOnCancel: false

            });


           }

           else{


            Swal.fire(
              'Successfull!',
              ' Successfully Updated ',
              'success'
              ).then((result) =>{


               location.reload();



             })



            }


          });

        }


      });





    }else{

      Swal.fire({
        title: "Error",
        text: "New Password doesn not match",
        type: "warning",
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Ok",
        closeOnConfirm: false,
        closeOnCancel: false

      });

    }


  }else{

    Swal.fire({
      title: "Error",
      text: "All fieds are mandatory (*)",
      type: "warning",
      confirmButtonClass: "btn-danger",
      confirmButtonText: "Ok",
      closeOnConfirm: false,
      closeOnCancel: false

    });


  }




}

























































































































































































































































































 







// File type validation
$("#uploadImage").change(function() {
  var file = this.files[0];
  var fileType = file.type;
  var match = ['image/jpeg', 'image/png', 'image/jpg'];
  if(!((fileType == match[0]) || (fileType == match[1]) || (fileType == match[2]) )){
    alert('Sorry, only JPG, JPEG, & PNG files are allowed to upload.');
    $("#uploadImage").val('');
    return false;
  }
});





/*-----------------------------------FEES MANAGMENT-------------------*/

/*--------------check for amount enterd*/
function checkAmountEntered(checkit) {

  var check = /[^0-9]/g;  
  checkit.value = checkit.value.replace(check, "");
}


/*--------------check for amount enterd*/
function checkAcademicYear(checkit) {

  var check = /[^0-9/]/g;  
  checkit.value = checkit.value.replace(check, "");
}


/*--------------check for mobile enterd*/
function checkMobiles(checkit) {

  var check = /[^0-9]/g;  
  checkit.value = checkit.value.replace(check, "");
}






/*----------------checkLoanPayAMount----*/
function checkLoanPayAMount(checkit) {

  var check = /[^0-9.]/g;  
  checkit.value = checkit.value.replace(check, "");
}

/*--------------check for mobile enterd*/
function checForContributionEntered(checkit) {

  var check = /[^0-9]/g;  
  checkit.value = checkit.value.replace(check, "");



  if ($('.ContributionAmount').val() < 50) {

    $(".contriAMountError").css("color", "red");
    $(".contriAMountError").text("Amount should be more than 50");

  } else {


    if($('.ContributionAmount').val() % 50 != 0)
    {
    // $('.ContributionAmount').val('');
    $(".contriAMountError").css("color", "red");
    $(".contriAMountError").text("Invalid!!! Amount should be multiple of 50");
  } 
  else 
  { 
   $(".contriAMountError").css("color", "");
   $(".contriAMountError").text("Contribution Amount");
 }


 // $(".contriAMountError").css("color", "");
 // $(".contriAMountError").text("Contribution Amount");

}

}






/*--------------check for mobile enterd*/
function checkForPayingYourOwnAmountAtMemberContri(checkit) {

  var check = /[^0-9]/g;  
  checkit.value = checkit.value.replace(check, "");



  if ($('.ContributionAmount').val() < 50) {

    $(".contriAMountError").css("color", "red");
    $(".contriAMountError").text("Amount should be more than 50");

  } else {


    if($('.ContributionAmount').val() % 50 != 0)
    {
    // $('.ContributionAmount').val('');
    $(".contriAMountError").css("color", "red");
    $(".contriAMountError").text("Invalid!!! Amount should be multiple of 50");
  } 
  else 
  { 
   $(".contriAMountError").css("color", "");
   $(".contriAMountError").text("Contribution Amount");
 }


 // $(".contriAMountError").css("color", "");
 // $(".contriAMountError").text("Contribution Amount");

}

}



/*--------------check forSCORWES ENTERED*/
function checkScoresMarks(checkit) {

  var check = /[^0-9.]/g;  
  checkit.value = checkit.value.replace(check, "");
}




























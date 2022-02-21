<script type="text/javascript">
  
  function sendCOntribuitionSMS() {

    

    Swal.fire({
      title: 'Are you sure you want to Send SMS',
      text: "You won't be able to revert this!",
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Proceed!'
    }).then((result) => {


      if (result.value) {

        $.post(".esgapehtllaroftsopxajaehtsitaht..ajaxpost?CHECKPOST=deleteMemberFromPayRolPost",{theID:theID},function (showOutPut) {

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

</script>
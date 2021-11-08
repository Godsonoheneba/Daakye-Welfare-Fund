 

<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Accounts</a>
      </li>
    </ol>
  </nav><!-- /.breadcrumb -->
  <!-- floating action -->
  <a data-toggle="modal" data-target="#addNewExpense" ><button type="button" class="btn btn-success btn-floated"><span class="fa fa-plus"></span></button> </a>  <!-- /floating action -->
  <!-- title and toolbar -->



</header><!-- /.page-title-bar -->




<div class="section-block">
  <h2 class="section-title"> Bank Statements </h2>
</div><!-- /.section-block -->
<!-- .card -->



<div class="form-row">

 <header class="page-navs bg-light shadow-sm">
  <!-- .input-group -->

  <div class="input-group has-clearable" >
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Customer eg. Agyei">
  </div><!-- /.input-group -->
</header>


<button type="button" class="btn btn-success " title="Add new EXPENSES" data-toggle="modal" data-target="#addNewExpense" style="margin: 15px;"><span class="fa fa-plus"></span></button>

</div><!-- /.form-row -->



<div class="board p-0 perfect-scrollbar" >
  <!-- .list-group -->
  <div class="list-group list-group-flush list-group-divider border-top" data-toggle="radiolist">
    <div class="card card-fluid">
      <!-- .card-body -->
      <div class="card-body">
        <div class=" table-responsive">
          <!-- .table -->
          <table class="table">
            <!-- thead -->
            <thead>
              <tr>
                <th></th>
                <th>Amount </th>
                <th>Statement  Number</th>
                <th> Date</th>
                <th> Done By   </th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



            <?php 

            $selectCust = mysqli_query($conn, "SELECT * FROM company_bank_statement WHERE active ='yes' AND year_finish='no'  ORDER BY id DESC ");
            if (mysqli_num_rows($selectCust)!==0) {

              while ( $getdac = mysqli_fetch_assoc($selectCust)) {


                $id = $getdac["id"];
                $amount = $getdac["amount"];
                $receipt_number = $getdac["receipt_number"];
                $done_by = $getdac["done_by"];
                $date_added = $getdac["date_added"];

                

                $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE id='$done_by' AND active='yes'");

                  $fetch =mysqli_fetch_assoc($queryInfo);
                  $table_id = $fetch["id"];
                  $firstName = $fetch["firstName"];
                  $lastName = $fetch["lastName"];
           

                  $staffFullName = $firstName . " " . $lastName; 



                  ?>
                  <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                    <!-- tr -->

                    <tr>
                      <td class="align-middle px-0" style="width: 1.5rem">
                        <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-2020158584<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                      </td>

                      
                      <td class="align-middle"><span class="badge badge-subtle badge-warning" style="font-size: 16px;"> <?php echo number_format($amount,2) ?></span> </td>
                      <td class="align-middle"><span class="badge badge-subtle badge-primary" style="font-size: 16px;"> <?php echo $receipt_number ?></span> </td>

                      <td class="align-middle"> <?php echo $date_added ?> </td>


                      <td class="align-middle"><span class="badge badge-subtle badge-success" style="font-size: 16px;"> <?php echo $staffFullName ?></span> </td>




                    </td>


                  </tbody><!-- /tbody -->

                  <?php


                }

              } else {
                echo 'No Bank STatement  Yet';
              }


              ?>





            </table><!-- /.table -->
          </div><!-- /.table-responsive -->
        </div><!-- /.card-body -->
      </div><!-- /.card -->
    </div>
  </div>
  <hr class="my-5">



  <?php 

  include 'add_new_bank_statement_modal.php'; 


  ?>
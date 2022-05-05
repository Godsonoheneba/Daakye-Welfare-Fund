 

<header class="page-title-bar">
  <!-- .breadcrumb -->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active">
        <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Payments Deletions</a>
      </li>
    </ol>
  </nav><!-- /.breadcrumb -->

  <div class="d-md-flex align-items-md-start">
    <h1 class="page-title mr-sm-auto"> All Payments Deletions </h1><!-- .btn-toolbar -->


  </div><!-- /title and toolbar -->
</header><!-- /.page-title-bar -->




<div class="section-block">
  <h2 class="section-title"> Payments Deletions </h2>
</div><!-- /.section-block -->
<!-- .card -->



<div class="form-row">

 <header class="page-navs bg-light shadow-sm">
  <!-- .input-group -->

  <div class="input-group has-clearable" >
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find Customer eg. Agyei">
  </div><!-- /.input-group -->
</header>


</div><!-- /.form-row -->



<div class="board p-0 " >
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
              <tr class="text-center">
                <th></th>
                <th>Deleted By</th>
                <th>Type</th>
                <th> Reason </th>
                <th> Date </th>
                <th > &nbsp; Action</th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



            <?php 

            $selectCust = mysqli_query($conn, "SELECT * FROM mistakes_payments_approval WHERE active ='yes' AND confirm='no' ORDER BY id DESC ");
            if (mysqli_num_rows($selectCust)!==0) {

              while ( $getdac = mysqli_fetch_assoc($selectCust)) {

                $TableID = $getdac["id"];
                $payment_id = $getdac["payment_id"];
                $reason = $getdac["reason"];
                $type = $getdac["type"];
                $done_by = $getdac["done_by"];
                $date_done = $getdac["date_done"];



                $stf = mysqli_query($conn, "SELECT * FROM staff WHERE active ='yes' AND staffID='$done_by' LIMIT 1 ");

                $getdac3 = mysqli_fetch_assoc($stf);

                $staffID = $getdac3["staffID"];
                $firstName = $getdac3["firstName"];
                $lastName = $getdac3["lastName"];

                $StaffName = $firstName . " " . $lastName;

                ?>
                <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                  <!-- tr -->

                  <tr class="text-center">

                    <td class="align-middle px-0" style="width: 1.5rem">
                      <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-202015858S985<?php echo $Tableid ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                    </td>


                    <td class="align-middle"> <?php echo $StaffName ?> </td>
                    <td class="align-middle"> <?php echo $type ?> </td>
                    <td class="align-middle"> <?php echo $reason ?> </td>
                    <td class="align-middle"> <?php echo $date_done ?> </td>
                    <td class="align-middle text-center">

                     <div class="btn-group btn-group-toggle" data-toggle="buttons">


                      <label class="btn btn-secondary"  onclick="realDeletePaidByStaf('<?php echo $TableID ?>','<?php echo $payment_id ?>','<?php echo $type ?>')">

                        <input type="radio" name="options" id="option1" checked > Approve</label> 

                      </div><!-- /button radio -->



                    </td>

                  </tr><!-- /tr -->

                </tbody><!-- /tbody -->

                <?php


              }

            } else {
              echo "No Approval Yet";
            }


            ?>





          </table><!-- /.table -->
        </div><!-- /.table-responsive -->
      </div><!-- /.card-body -->
    </div><!-- /.card -->
  </div>
</div>
<hr class="my-5">


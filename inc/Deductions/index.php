<?php 










?>

<!-- .page-title-bar -->
<header class="page-title-bar">
  <!-- .d-flex -->
  <div class="d-flex justify-content-between align-items-center">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active">
          <a href="page-teams.html"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Loans</a>
        </li>
      </ol>
    </nav><!-- /.breadcrumb -->
    <button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
  </div><!-- /.d-flex -->
  <!-- grid row -->
  <div class="row text-center text-sm-left">
    <!-- grid column -->
    <div class="col-sm-auto col-12 mb-2">

    </div><!-- /grid column -->
    <!-- grid column -->
    <div class="col">
      <h1 class="page-title"> All Deductions </h1>

    </div><!-- /grid column -->
  </div><!-- /grid row -->

</header><!-- /.page-title-bar -->



<div class="form-row">

 <header class="page-navs bg-light shadow-sm">
  <!-- .input-group -->

  <div class="input-group has-clearable" >
    <button type="button" class="close" aria-label="Close"><span aria-hidden="true"><i class="fa fa-times-circle"></i></span></button> <label class="input-group-prepend" for="searchtransaction"><span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span></label> <input type="text" class="form-control" id="searchtransaction" data-filter=".board .getsearch" placeholder="Find  eg. Agyei">
  </div><!-- /.input-group -->
</header>


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
              <tr class="text-center">
                <th></th>
                <th> ID</th>
                <th>Name</th>
                <th>Amount Deducted</th>
                <th>Date Deducted</th>
                <th> Loan Holder Name</th>
                <th> Loan Holder Balance   </th>
                <th > &nbsp; Action</th>
              </tr>
            </thead><!-- /thead -->
            <!-- tbody -->



            <?php 

            $seleDe = mysqli_query($conn, "SELECT * FROM deduct_guarantors WHERE active ='yes'  ORDER BY id DESC ");


            if (mysqli_num_rows($seleDe)!==0) {

              while ( $getdac1 = mysqli_fetch_assoc($seleDe)) {



                $id = $getdac1["id"];
                $loan_id = $getdac1["loan_id"];
                $guarantor_id = $getdac1["guarantor_id"];
                $amount = $getdac1["amount"];
                $person_balance = $getdac1["person_balance"];
                $date_added = $getdac1["date_added"];


                $selectLoanTypee = mysqli_query($conn, "SELECT * FROM loans_all WHERE active ='yes' AND id='$loan_id'  ORDER BY id DESC ");

                 $getdac = mysqli_fetch_assoc($selectLoanTypee);

                $id = $getdac["id"];
                $person_id = $getdac["person_id"];
     



                $selMems = mysqli_query($conn, "SELECT * FROM members WHERE member_id_encrypt='$person_id' AND active='yes'  ");

                $getDemMem = mysqli_fetch_assoc($selMems);

                $firstname = $getDemMem["firstname"];
                $surname = $getDemMem["surname"];
                $loanHolderName = $firstname .  ' ' .  $surname ;



                 $selMems1 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$guarantor_id' AND active='yes' ");
                $getDemMem2 = mysqli_fetch_assoc($selMems1);

                $firstnameg = $getDemMem2["firstname"];
                $surnameg = $getDemMem2["surname"];
                $telephone = $getDemMem2["telephone"];

                $gurantorName = $firstnameg .  ' ' .  $surnameg ;



              ?>
              <tbody class="getsearch" data-toggle="sidebar" data-sidebar="show">
                <!-- tr -->

                <tr class="text-center">
                  <td class="align-middle px-0" style="width: 1.5rem">
                    <button type="button" class="btn btn-sm btn-icon btn-light" data-toggle="collapse" data-target="#details-2020158584<?php echo $id ?>"><span class="collapse-indicator"><i class="fa fa-angle-right"></i></span></button>
                  </td>


                  <td class="align-middle">
                    <?php echo $guarantor_id ?>
                  </td>

                  <td class="align-middle"> <?php echo $gurantorName ?> </td>
                  <td class="align-middle"> <?php echo number_format($amount, 2) ?> </td>
                  <td class="align-middle"> <?php echo $date_added ?> </td>
                  <td class="align-middle"> <?php echo $loanHolderName ?> </td>
                  <td class="align-middle"> <?php echo $person_balance ?> </td>
        

                  <td>
                    
                    <label class="btn btn-secondary" onclick="window.open('ViewPDFS/Deductions/print_deduction_reciept.php?PRINT_DEDUCTION_RECEIPT&&FOR=<?php echo $guarantor_id ?>&&DATE=<?php echo $date_added ?>&&AMOUNTDEDUCTED=<?php echo $amount ?>&&LOANHOLDER=<?php echo $loanHolderName ?>&&LOANHOLDERBALANCE=<?php echo $person_balance ?>&&THELOAN=<?php echo $loan_id ?>')" >

                      <input type="radio" name="options" id="option3"> Print Receipt
                    </label>
                  </td>



                  </div><!-- /button radio -->


                </td>


              </tbody><!-- /tbody -->

              <?php


            }

          } else {
            echo "No Deduction Yet";
          }




          ?>





        </table><!-- /.table -->
      </div><!-- /.table-responsive -->
    </div><!-- /.card-body -->
  </div><!-- /.card -->
</div>
</div>
<hr class="my-5">



<audio>

</audio>
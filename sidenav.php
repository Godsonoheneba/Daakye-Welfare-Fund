<?php 

if ($login_session_type==="1" || $login_session_type==="3") {



  ?>





  <!-- .app-aside -->
  <aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">

      <!-- .aside-menu -->
      <div class="aside-menu overflow-hidden">
        <!-- .stacked-menu -->
        <nav id="stacked-menu" class="stacked-menu">
          <!-- .menu -->
          <ul class="menu">
            <!-- .menu-item -->




            <li class="menu-item has-active">
              <a href=".home.login-successful" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
            </li><!-- /.menu-item -->



            <?php 

                    if ($login_session=="b200606012021") {
                      
                      ?> 

 


            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Membership</span></a> <!-- child menu -->

              <ul class="menu">


                <li class="menu-item">
                  <a href=".login-success.view-all-new-members.kt.css.js.html.cpp" class="menu-link">View Members</a>
                </li>



              </ul><!-- /child menu -->
              
            </li><!-- /.menu-item -->


                        

        <li class="menu-item has-child">
          <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Reports</span></a> <!-- child menu -->

          <ul class="menu">
           <li class="menu-item">
            <a href=".login-success.all-the-members-list.js.css.kt.java" class="menu-link">Members</a>
          </li>

        
          <li class="menu-item">
            <a href=".login-success.all-the-member-contribution-list.js.css.java.java" class="menu-link"> Contributions Payments</a>
          </li>

        

         <li class="menu-item">
            <a href=".login-success.all-the-contribution-penalty-list.js.css.java.html.github" class="menu-link">Contribution Penalty</a>
          </li>


          


          
          
        </ul>

      </li><!-- /.menu-item -->



                      <?php

                    }else if ($login_session=="b202111112021") {
                      
                      ?>



            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Membership</span></a> <!-- child menu -->

              <ul class="menu">


                <li class="menu-item">
                  <a href=".login-success.view-all-new-members.kt.css.js.html.cpp" class="menu-link">View Members</a>
                </li>



              </ul><!-- /child menu -->
              
            </li><!-- /.menu-item -->


            


                <li class="menu-item has-child">
          <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Reports</span></a> <!-- child menu -->

          <ul class="menu">
                        

                <li class="menu-item">
                  <a href=".login-success.all-the-loan-colelcted-list.js.css.java.html" class="menu-link">Loans</a>
                </li> 


                
                <li class="menu-item">
                  <a href=".login-success.all-the-loan-interest-list.js.css.java.html.tensorflow" class="menu-link">Loan Interest</a>
                </li>


            <li class="menu-item">
            <a href=".login-success.all-the-loans-paymenst-list.js.css.java.html.github.dart" class="menu-link">Loans Payments</a>
          </li> 


                


                
                
              </ul>

            </li><!-- /.menu-item -->



                      <?php

                    }



                    else{

                 ?>

            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">Membership</span></a> <!-- child menu -->

              <ul class="menu">

                <?php 

                    if ($login_session_type==="3") {
                      
                      ?>
                        <li class="menu-item">
                  <a href=".login-success.add-new-member.html.css.js.kt" class="menu-link">Add New Member</a>
                </li>

                      <?php
                    }


                 ?>



             


                <li class="menu-item">
                  <a href=".login-success.view-all-new-members.kt.css.js.html.cpp" class="menu-link">View Members</a>
                </li>

                <li class="menu-item">
                  <a href=".login-success.pay-monthly-contribution-members.kt.css.js.java.cpp" class="menu-link">Pay  Contribution</a>
                </li>


              </ul><!-- /child menu -->
              
            </li><!-- /.menu-item -->



            <!-- .menu-item -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Customers</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href=".login-success.add-new-customer.html.css.kt.java" class="menu-link">Add New Customer</a>
                </li>
                <li class="menu-item">
                  <a href=".login-success.view-customer-list.xml.cpp.vb" class="menu-link">View Customers</a>
                </li>

              </ul><!-- /child menu -->
            </li><!-- /.menu-item -->


            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon fas fa-rocket"></span> <span class="menu-text">Loans</span></a> <!-- child menu -->

              <ul class="menu">
               <li class="menu-item">
                <a href=".login-success.add-new-loans.js.css.js.java" class="menu-link">Add New Loan</a>
              </li>
              <li class="menu-item">
                <a href=".login-success.view-al-loans.js.kt.json.java" class="menu-link">View Loans Collected</a>
              </li>

              <li class="menu-item">
                <a href=" .login-success.view-all-pending-loans.js.kt.json.daco.java" class="menu-link">View Pending Loans </a>
              </li>

              <li class="menu-item">
                <a href=".login-success.pay-my-loyal-loans.js.css.json.html.xml" class="menu-link">Pay  Loan</a>
              </li>


            </ul><!-- /child menu -->

          </li><!-- /.menu-item -->


          <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Withdrawals</span></a> 


            <ul class="menu">

            <li class="menu-item">
              <a href=".login-success.view-all-loans-contribution.withdrawal.kt.css.js.html.cpp.js.ruby.p.pyton.javas" class="menu-link">View Withdrawals</a>
            </li>


            



          </ul>



        </li>



        <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Deductions</span></a> 


            <ul class="menu">

            <li class="menu-item">
              <a href=".login-success.view-all-loans-contribution.add-dedcution.kt.css.js.html.cpp.js.ruby.p.pyton.javas" class="menu-link">Make Deductions</a>
            </li>



    <!--          <li class="menu-item">
              <a href=".login-success.view-all-loans-contribution.withdrawal.kt.css.js.html.cpp.js.ruby.p.pyton.javas" class="menu-link">View Deductions</a>
            </li> -->


            



          </ul>



        </li>



          <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Accounts</span></a> 


            <ul class="menu">

             <li class="menu-item">
              <a href=".login-success.expenses-incure-and-add-expenses-list.js.css.kt.kt" class="menu-link">Expenses</a>
            </li>


            <li class="menu-item">
              <a href=".login-success.bank-statements-and-add-statement-list.js.css.kt.kt" class="menu-link">Bank Statement</a>
            </li>


            



          </ul>



        </li>


        <li class="menu-item has-child">
          <a href="#" class="menu-link"><span class="menu-icon fas fa-table"></span> <span class="menu-text">Reports</span></a> <!-- child menu -->

          <ul class="menu">
           <li class="menu-item">
            <a href=".login-success.all-the-members-list.js.css.kt.java" class="menu-link">Members</a>
          </li>
          <li class="menu-item">
            <a href=".login-success.all-the-customers-list.js.css.kt.java" class="menu-link">Customers</a>
          </li>
 
          <li class="menu-item">
            <a href=".login-success.all-the-member-contribution-list.js.css.java.java" class="menu-link"> Contributions Payment</a>
          </li>



          <li class="menu-item">
            <a href=".login-success.all-the-contribution-penalty-list.js.css.java.html.github" class="menu-link">Contribution Penalty</a>
          </li>

          <li class="menu-item">
            <a href=".login-success.all-the-loan-colelcted-list.js.css.java.html" class="menu-link">Loans Collected</a>
          </li> 


          <li class="menu-item">
            <a href=".login-success.all-the-loans-paymenst-list.js.css.java.html.github.dart" class="menu-link">Loans Payments</a>
          </li> 


          
          <li class="menu-item">
            <a href=".login-success.all-the-loan-interest-list.js.css.java.html.tensorflow" class="menu-link">Loan Interest</a>
          </li>



         <li class="menu-item">
            <a href=".login-success.all-the-penalties-on-loan-laravel-list.js.css.java.html.tensorflow" class="menu-link">Penalties On Loan </a>
          </li>

           <li class="menu-item">
            <a href=".login-success.all-the-ldeactivated-list.js.css.java.html.tensorflow" class="menu-link">Deactivated Members</a>
          </li>


      


          <li class="menu-item">
            <a href=".login-success.all-company-expenses-report.js.css.java.kt.html" class="menu-link">Expenses</a>
          </li>

          <li class="menu-item">
            <a href=".login-success.all-companys-returs-report.js.css.java.kt" class="menu-link">Company Returs</a>
          </li>

          <li class="menu-item">
            <a href=".login-success.all-company-registration-fees-report.js.css.java.kt.html" class="menu-link">Registration Fee</a>
          </li>

          <li class="menu-item">
            <a href=".login-success.all-company-profit-and-loss-report.js.css.java.kt.html" class="menu-link">Generate Profit & Loss</a>
          </li>


          <li class="menu-item">
            <a href=".login-success.all-company-financial-position-report.js.css.java.kt.html.css" class="menu-link">Generate Financial Position</a>
          </li>



          
          
        </ul>

      </li><!-- /.menu-item -->



      <!-- .menu-item -->
      <li class="menu-item has-child">
        <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Approvals</span></a> <!-- child menu -->
        <ul class="menu">
          <li class="menu-item">
            <a href=".login-success.delete-payments-approval.py.css.kt.java" class="menu-link">Delete Payments</a>
          </li>

        </ul><!-- /child menu -->
      </li><!-- /.menu-item -->


<!--       <li class="menu-item ">
        <a href=".login-success.all-guarantors-deductions-report.js.css.java.kt.html.py" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Deductions</span></a> 
      </li>
 -->

      <?php 

          $adminID = "225";

          if ($employmentType===$adminID) {
            
              ?>

                 <!-- .menu-item -->
      <li class="menu-item ">
        <a href=".home.settings-staff.config.java.kt" class="menu-link"><span class="menu-icon oi oi-bar-chart"></span> <span class="menu-text">Configuration </span></a> <!-- child menu -->
      </li><!-- /.menu-item -->



              <?php

          } 
          


       ?>
     






   <?php    } ?>


      <li class="menu-header">Others </li><!-- /.menu-header -->

      <li class="menu-item " style="cursor: pointer;">
        <a onclick="window.open('ViewPDFS/Forms/print_member_form.php?PRINT_FORM_FOR_MEMBER&&TRUE=e32f73edbdf35001ce3cccad9609cc7f') " class="menu-link"><span class="menu-icon fas fa-file"></span> <span class="menu-text">Print Member Form</span></a> <!-- child menu -->

      </li><!-- /.menu-item -->



      <li class="menu-item " style="cursor: pointer;">
        <a onclick="window.open('ViewPDFS/Forms/print_customer_form.php?PRINT_FORM_FOR_CUSTOMER&&TRUE=e32f73edbdf35001ce3cccad9609cc7f') " class="menu-link"><span class="menu-icon fas fa-book"></span> <span class="menu-text">Print Customer Form</span></a> <!-- child menu -->

      </li><!-- /.menu-item -->






      <li class="menu-item ">
        <a href=".home.myprofile-staff.java.ruby" class="menu-link"><span class="menu-icon oi oi-person"></span> <span class="menu-text">Profile</span></a> <!-- child menu -->

      </li><!-- /.menu-item -->



      <li class="menu-item ">
        <a href="cores/logout.php" class="menu-link"><span class="menu-icon oi oi-account-logout"></span> <span class="menu-text">Logout</span></a> <!-- child menu -->

      </li><!-- /.menu-item -->



    </ul><!-- /.menu -->
  </nav><!-- /.stacked-menu -->
    </div><!-- /.aside-menu -->
    <!-- Skin changer -->
    <footer class="aside-footer border-top p-2">
      <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
    </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
</aside><!-- /.app-aside -->



<?php

   


} else {



  $selectCust1 = mysqli_query($conn, "SELECT * FROM members WHERE active ='yes' AND member_id='$login_session' LIMIT 1 ");

  $getAlls12 = mysqli_fetch_assoc($selectCust1);

  $id = $getAlls12["id"];
  $member_ids = $getAlls12["member_id"];
  $member_id_encrypts = $getAlls12["member_id_encrypt"];



  ?>



 

  <!-- .app-aside -->
  <aside class="app-aside app-aside-expand-md app-aside-light">
    <!-- .aside-content -->
    <div class="aside-content">

      <!-- .aside-menu -->
      <div class="aside-menu overflow-hidden">
        <!-- .stacked-menu -->
        <nav id="stacked-menu" class="stacked-menu">
          <!-- .menu -->
          <ul class="menu">
            <!-- .menu-item -->
            <li class="menu-item has-active">
              <a href=".home.login-successful" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
            </li><!-- /.menu-item -->


            
            <li class="menu-item ">
              <a href=".login-success.view-all-new-members.kt.css.js.html.cpp" class="menu-link"><span class="menu-icon oi oi-wrench"></span> <span class="menu-text">View My Info</span></a> <!-- child menu -->

            </li><!-- /.menu-item -->





            <li class="menu-item ">
              <a href="homepage.php?CHECKER=ADD_NEW_LOAN_TO_MEMBER&&DACO=<?php echo $member_ids ?>&&TRUE=<?php echo $member_id_encrypts ?>" class="menu-link"><span class="menu-icon fas fa-book "></span> <span class="menu-text">Apply for Loan</span></a>
            </li><!-- /.menu-item -->

             



            <li class="menu-item has-child">
            <a href="#" class="menu-link"><span class="menu-icon oi oi-browser"></span> <span class="menu-text">Withdrawals</span></a> 


            <ul class="menu">


            <li class="menu-item">
              <a href=".login-success.contribution.withdrawal.kt.css.js.html.cpp.js.ruby.p.pyton.javas" class="menu-link">Request for Withdraw</a>
            </li>


          <!--    <li class="menu-item">
              <a href=".login-success.view-all-loans-contribution.withdrawal.kt.css.js.html.cpp.js.ruby.p.pyton.javas" class="menu-link">View Withdrawals</a>
            </li> -->


            



          </ul>



        </li>





            <li class="menu-item ">
              <a href=".login-success.view-all-loans-pendins.kt.css.js.html.cpp.js.ruby.p.html" class="menu-link"><span class="menu-icon fas fa-bullseye "></span> <span class="menu-text">View Pending Loan</span></a>
            </li><!-- /.menu-item -->


            <li class="menu-item ">
              <a href=".login-success.view-all-loans-collected.kt.css.js.html.cpp.js.ruby.p.pyton.javas" class="menu-link"><span class="menu-icon fas fa-brain "></span> <span class="menu-text">View Loans Collected</span></a>
            </li><!-- /.menu-item -->





            <!-- .menu-item -->
            <li class="menu-item has-child">
              <a href="#" class="menu-link"><span class="menu-icon oi oi-puzzle-piece"></span> <span class="menu-text">Approvals</span></a> <!-- child menu -->
              <ul class="menu">
                <li class="menu-item">
                  <a href=".login-success.approve-member-contributions-edit.html.css.js.kt" class="menu-link">Contributions Approvals</a>
                </li>


                <li class="menu-item">
                  <a href=".login-success.approve-member-loans-guarantors.html.css.java.kt" class="menu-link"> Guarantor's Approvals</a>
                </li>


                 <li class="menu-item">
                  <a href=".login-success.approve-member-loans-top-up-loans.html.css.java.kt" class="menu-link"> Top Up loan Approvals</a>
                </li>




              </ul><!-- /child menu -->
            </li><!-- /.menu-item -->

            <li class="menu-header">Others </li><!-- /.menu-header -->

            <li class="menu-item ">
              <a href="cores/logout.php" class="menu-link"><span class="menu-icon oi oi-account-logout"></span> <span class="menu-text">Logout</span></a> <!-- child menu -->

            </li><!-- /.menu-item -->

          </ul><!-- /.menu -->
        </nav><!-- /.stacked-menu -->
      </div><!-- /.aside-menu -->
      <!-- Skin changer -->
      <footer class="aside-footer border-top p-2">
        <button class="btn btn-light btn-block text-primary" data-toggle="skin"><span class="d-compact-menu-none">Night mode</span> <i class="fas fa-moon ml-1"></i></button>
      </footer><!-- /Skin changer -->
    </div><!-- /.aside-content -->
  </aside><!-- /.app-aside -->



  <?php
}


?>







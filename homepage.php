 
<?php 


include 'cores/config.php';


if ($login_session_type==="3" || $login_session_type==="1") {


  $queryInfo = mysqli_query($conn, "SELECT * FROM staff WHERE staffID='$login_session' AND active='yes'");
  if (mysqli_num_rows($queryInfo)===1) {

    $fetch =mysqli_fetch_assoc($queryInfo);
    $table_id = $fetch["id"];
    $staffID = $fetch["staffID"];

  }else{
    logout();
    die();
  }


} else {

 $queryInfo2 = mysqli_query($conn, "SELECT * FROM members WHERE member_id='$login_session' AND active='yes'");
 if (mysqli_num_rows($queryInfo2)===1) {

  $fetch2 =mysqli_fetch_assoc($queryInfo2);
  $table_id = $fetch2["id"];
  $member_id = $fetch2["member_id"];

}else{
  logout();
  die();
}



}










include 'header.php';


include 'sidenav.php';

?>




<!-- .app-main -->
<main class="app-main">
  <!-- .wrapper -->
  <div class="wrapper">
    <!-- .page -->
    <div class="page">
      <!-- .page-inner -->
      <div class="page-inner">


        <?php 

        $MYTOPGET = $_GET["CHECKER"];




        /*----------------MEMBERSHIP-----------------*/

        /*-=======================ADD MEMBER================*/




        if ($MYTOPGET==="ADD_NEW_MEMBER") {

         include 'inc/Membership/add_new_member.php';
         

       } 



       else if ($MYTOPGET==="VIEW_ALL_MEMBERS") {

        include 'inc/Membership/view_all_members.php';


      } 


      else if ($MYTOPGET==="EDIT_MEMBER_INFO") {

        include 'inc/Membership/edit_member_info.php';


      }

      else if ($MYTOPGET==="VIEW_MEMBER_INFO") {

        include 'inc/Membership/view_member_info.php';


      }


      else if ($MYTOPGET==="VIEW_MEMBER_ACTIVITIES") {

        include 'inc/Membership/member_activities.php';


      }

      else if ($MYTOPGET==="VIEW_MEMBER_SETTINGS") {

        include 'inc/Membership/member_settings.php';


      }


      else if ($MYTOPGET==="EDIT_MEMBER_CONTRIBUTIONS") {

        include 'inc/Membership/member_contributions_edit.php';


      }


      else if ($MYTOPGET==="VIEW_MEMBER_CONTRIBUTIONS") {

        include 'inc/Membership/member_contributions.php';


      }


      else if ($MYTOPGET==="VIEW_MEMBER_LOANS") {

        include 'inc/Membership/view_all_members_loans.php';


      }


      else if ($MYTOPGET==="VIEW_MEMBER_PAYMENTS") {

        include 'inc/Membership/view_all_members_payments.php';


      }


      else if ($MYTOPGET==="PAY_MONTHLY_CONTRIBUTIONS") {

        include 'inc/Membership/Pay_Contribution/index.php';


      }


      else if ($MYTOPGET==="PAY_MEMBER_CONTRIBUTION_SEARCHED_FOUND") {

        include 'inc/Membership/Pay_Contribution/pay_contribution_page.php';


      } 




      /*-------------------aaprovals----------------*/



      else if ($MYTOPGET==="VIEW_MEMBER_CONTRIBUTIONS_APPROVALS") {

        include 'inc/Membership/Approvals/member_contribution_edit_approvals.php';


      }


      else if ($MYTOPGET==="VIEW_GUARANTORS_APPROVALS") {

        include 'inc/Membership/Approvals/guarantors_approvals.php';


      } 









      /*-=======================ENDS ADD MEMBER================*/


      /*----------------ENBDS MEMBERSHIP-----------------*/







      /*-----------------------------------CUSTOMER===========================*/


      else if ($MYTOPGET==="ADD_NEW_CUSTOMER") {

       include 'inc/Customer/add_new_customer.php';


     } 



     else if ($MYTOPGET==="VIEW_ALL_CUSTOMERS") {

      include 'inc/Customer/view_all_customers.php';


    } 


    else if ($MYTOPGET==="EDIT_CUSTOMER_INFO") {

      include 'inc/Customer/edit_customer_info.php';


    }

    else if ($MYTOPGET==="VIEW_CUSTOMER_INFO") {

      include 'inc/Customer/view_customer_info.php';


    }


    else if ($MYTOPGET==="VIEW_CUSTOMER_ACTIVITIES") {

      include 'inc/Customer/customer_activities.php';


    }

    else if ($MYTOPGET==="VIEW_CUSTOMER_SETTINGS") {

      include 'inc/Customer/customer_settings.php';


    }


    else if ($MYTOPGET==="VIEW_CUSTOMER_LOANS") {

      include 'inc/Customer/view_all_customer_loans.php';


    }


    else if ($MYTOPGET==="VIEW_CUSTOMER_PAYMENTS") {

      include 'inc/Customer/view_all_customer_payments.php';


    }



    /*-----------------------------------ENDS CUSTOMER===========================*/


    /*---------------------------LOANS-------------------------*/


    else if ($MYTOPGET==="ADD_NEW_LOAN") {

      include 'inc/Loans/index.php';


    }


    else if ($MYTOPGET==="ADD_NEW_LOAN_BY_TYPE") {

      include 'inc/Loans/add_loan_by_type.php';
      

    }


    else if ($MYTOPGET==="ADD_NEW_LOAN_TO_CUSTOMER") {

      include 'inc/Loans/add_loan_to_customer.php';
      

    }


    else if ($MYTOPGET==="ADD_NEW_LOAN_TO_MEMBER") {

      include 'inc/Loans/add_loan_to_member.php';
      

    }


    else if ($MYTOPGET==="VIEW_ALL_LOANS_COLLECTED") {

      include 'inc/Loans/view_all_loans_collected.php';
      

    } 


    else if ($MYTOPGET==="PAY_LOANS_FIRST_PAGE") {

      include 'inc/Loans/pay_loan_first_page.php';
      

    }


    else if ($MYTOPGET==="PAY_LOANS_BY_CUST_MEMB") {

      include 'inc/Loans/pay_loans_by_selection.php';
      

    }


    else if ($MYTOPGET==="PROCEED_TO_PAY_LOAN") {

      include 'inc/Loans/proceed_to_pay_loan.php';
      

    }



    else if ($MYTOPGET==="VIEW_LOANS_COLLECTED_BY_TYPE") {

      include 'inc/Loans/view_all_loans_collected_by_type.php';
      

    }



    /*------------------------DEDUCTIONS------------------*/

    else if ($MYTOPGET==="VIEW_DEDUCTIONS_OF_GUARANTORS") {

      include 'inc/Deductions/index.php';
      

    }



    /*--------------------pending loans------------*/


    else if ($MYTOPGET==="VIEW_ALL_PENDING_LOANS") {

      include 'inc/Loans/view_all_pending_loans_collected.php';
      

    } 



    else if ($MYTOPGET==="VIEW_PENDING_LOANS_BY_TYPE") {

      include 'inc/Loans/view_all_pending_loans_collected_by_type.php';
      

    }



       else if ($MYTOPGET==="EDIT_PENDING_LOANS_BY_TYPE") {

      include 'inc/Loans/edit_pending_loans_collected_by_type.php';
      

    }



    else if ($MYTOPGET==="VIEW_PENDING_LOANS_AT_MEMBER_SIDE") {

      include 'inc/Loans/view_all_pending_loans_collected_at_members.php';
      

    }




    else if ($MYTOPGET==="VIEW_COLLECTED_LOANS_AT_MEMBER_SIDE") {

      include 'inc/Loans/view_all_loans_collected_by_member_at_member_portal.php';
      

    }







    /*--------------------------ACCOUNTS====================*/

    else if ($MYTOPGET==="ACCOUNTS_EXPENSES_LIST") {

      include 'inc/Accounts/expenses.php';


    }



    /*--------------------------BANK_STATEMENTS_LIST====================*/

    else if ($MYTOPGET==="BANK_STATEMENTS_LIST") {

      include 'inc/Accounts/bank_statements.php';


    }


    /*--------------------FINANCIAL REPORT----------*/
    else if ($MYTOPGET==="ACCOUNTS_FINANCIAL_REPORTS") {

      include 'inc/Accounts/financial_report.php';


    }



    /*-----------------------REPORTS---------------------------------*/

    /*----------------------MEMBERS REPORTS---------------------*/
    else if ($MYTOPGET==="MEMBERS_LIST_REPORTS") {

      include 'inc/Reports/Members/index.php';
      

    }

    /*----------------------CUSTOEMRS REPORTS---------------------*/
    else if ($MYTOPGET==="CUSTOMERS_LIST_REPORTS") {

      include 'inc/Reports/Customers/index.php';
      

    }



    /*----------------------MEMBERS CONTRIBUTION REPORTS---------------------*/
    else if ($MYTOPGET==="MEMBER_CONTRIBUTIONS_LIST_REPORTS") {

      include 'inc/Reports/Members/members_contribution_list.php';
      

    }




    /*----------------------LOANS REPORTS---------------------*/
    else if ($MYTOPGET==="LOAN_LIST_REPORTS") {

      include 'inc/Reports/Loans/index.php';
      

    } 


    else if ($MYTOPGET==="VIEW_LOANS_COLLECTED_BY_TYPE_REPORTS") {

      include 'inc/Reports/Loans/view_all_loans_collected_by_type.php';
      

    }




    /*----------------------LOAN PAYMENTS  REPORTS---------------------*/
    else if ($MYTOPGET==="LOANS_PAYMENTS_REPORTS") {

      include 'inc/Reports/Loan_Payments/index.php';
      

    }





    /*----------------------LOAN INTEREST  REPORTS---------------------*/
    else if ($MYTOPGET==="LOAN_INTEREST_REPORTS") {

      include 'inc/Reports/Loan_Interest/index.php';
      

    }


        /*----------------------PENALTIES ON LOAN   REPORTS---------------------*/
    else if ($MYTOPGET==="PENALTIES_ON_LOAN") {

      include 'inc/Reports/Penalties_On_Loan/index.php';
      

    }




    /*----------------------CONTRIBUTION PENALTY  REPORTS---------------------*/
    else if ($MYTOPGET==="CONTRIBUTION_PENALTY_REPORTS") {

      include 'inc/Reports/Contributions_Penalty/index.php';
      

    }

    
    /*----------------------DEACTIVATED_MEMBERS_REPORTS  REPORTS---------------------*/
    else if ($MYTOPGET==="DEACTIVATED_MEMBERS_REPORTS") {

      include 'inc/Reports/Deactivated_Members/index.php';
      

    }



      /*----------------------ACCOUNTS REPORTS---------------------*/
    else if ($MYTOPGET==="ACCOUNT_REPORTS") {

      include 'inc/Reports/Accounts/index.php';
      

    }



    /*---------------------EXPENSES REPORTS-------------------*/
    else if ($MYTOPGET==="COMPANY_EXPENSES_REPORTS") {

      include 'inc/Reports/Expenses/index.php';
      

    }



    /*---------------------REGISTRATION FEES REPORTS-------------------*/
    else if ($MYTOPGET==="COMPANY_REGISTRATION_FEES_REPORTS") {

      include 'inc/Reports/Registration_Fees/index.php';
      

    }








    /*---------------------PROFIT AND LOSS REPORT--------------------*/
    else if ($MYTOPGET==="PROFIT_AND_LOSS_REPORT") {

      include 'inc/Reports/Profit_And_Loss/index.php';
      

    }



    /*---------------------FINANCIAL POSITION REPORT--------------------*/
    else if ($MYTOPGET==="FINANCIAL_POSITION_REPORT") {

      include 'inc/Reports/Financial_Position/index.php';
      

    }




    /*---------------------COMPANY RETURS--------------------*/
    else if ($MYTOPGET==="COMPANY_RETURS_REPORTS") {

      include 'inc/Reports/Company_Returns/index.php';
      

    }




 


    /*------------------------------------------------APPROVALS-----------------*/

    /*----------------------DELETE PAYMENTS APPROVALS-----------------------*/

    else if ($MYTOPGET==="DELETE_PAYMENTS_APPROVALS") {

      include 'inc/Approvals_By_Staff/Delete_Payments_Approvals/index.php';


    } 



    /*-------------------------CONFIGURATION-------------------*/



    /*----------------MEMBER INTEREST CONFIG-------------------*/

    else if ($MYTOPGET==="MEMBER_INTEREST_CONFIGURATION") {

     include 'inc/Configurations/Member_Interest/index.php';


   }

   /*----------------CUSTOMER INTEREST CONFIG-------------------*/

   else if ($MYTOPGET==="CUSTOMER_INTEREST_CONFIGURATION") {

     include 'inc/Configurations/Customer_Interest/index.php';


   }




   else if ($MYTOPGET==="STAFF_CONFIGURATION") {

     include 'inc/Configurations/Staff/staff_settings.php';


   }


   else if ($MYTOPGET==="PAYROLL_CONFIGURATION") {

     include 'inc/Configurations/PayRoll/index.php';


   }


   else if ($MYTOPGET==="PAYROLLCLOSE_FOR_THE_YEAR_CONFIGURATION") {

     include 'inc/Configurations/Share_Divident/index.php';


   }



   else if ($MYTOPGET==="VIEW_ALL_DEACTIVATED_MEMBERS_CONFIGURATION") {

     include 'inc/Configurations/Deactivated_Members/index.php';


   }


   else if ($MYTOPGET==="VIEW_STAFF_INFO") {

     include 'inc/Configurations/Staff/view_staff_info.php';


   }


   else if ($MYTOPGET==="VIEW_STAFF_ACTIVITIES") {

     include 'inc/Configurations/Staff/view_staff_activities.php';


   } 


   else if ($MYTOPGET==="STAFF_SETTINGS") {

     include 'inc/Configurations/Staff/view_staff_settings.php';


   } 



   else if ($MYTOPGET==="STAFF_PROFILE") {

     include 'inc/Profile/staff_profile.php';


   } 


   else if ($MYTOPGET==="VIEW_STAFF_PROFILE") {

     include 'inc/Profile/view_my_profile.php';


   } 


   else if ($MYTOPGET==="VIEW_MY_PROFILE_SETTINGS") {

     include 'inc/Profile/view_my_profile_settings.php';


   } 




   else if ($MYTOPGET==="VIEW_MY_ACTIVITIES") {

     include 'inc/Profile/view_my_activities.php';


   } 
















































   /*-=======================REPORTS==============*/

   else if ($MYTOPGET==="REPORTS") {

     include 'inc/Reports/index.php';

   } 


   /*-=======================STUDENTS REPORTS==============*/

   else if ($MYTOPGET==="STUDENTS_REPORTS") {

     include 'inc/Reports/Students/index.php';

   }


   /*-=======================STUDENTS BIRTHDAY REPORTS==============*/

   else if ($MYTOPGET==="STUDENTS_BIRTHDAY_REPORTS") {

     include 'inc/Reports/Students/Students_Birthday/index.php';

   } 


   /*-=======================STUDENTSID GENERATOR REPORTS==============*/

   else if ($MYTOPGET==="STUDENTS_ID_GENERATOR_REPORTS") {

     include 'inc/Reports/Students/ID_Generator/index.php';

   }




   /*-======================FEES REPORTS==============*/

   else if ($MYTOPGET==="FEES_REPORTS") {

     include 'inc/Reports/Fees/index.php';

   } 


   /*-======================FEES PAYED REPORTS==============*/

   else if ($MYTOPGET==="FEES_PAYED_REPORTS") {

     include 'inc/Reports/Fees/Fees_Payed/index.php';

   }


   /*-======================FEES PAID REPORTS BY CLASS==============*/

   else if ($MYTOPGET==="VIEW_FEES_PAID_BY_CLASS") {

     include 'inc/Reports/Fees/Fees_Payed/select_by_class.php';

   }


   /*-======================FEES OWING REPORTS==============*/

   else if ($MYTOPGET==="FEES_OWING_REPORTS") {

     include 'inc/Reports/Fees/Fees_Owing/index.php';

   } 


   /*-=======================FEES OWING REPORTS BY CLASS==============*/

   else if ($MYTOPGET==="VIEW_FEES_OWES_BY_CLASS") {

     include 'inc/Reports/Fees/Fees_Owing/select_by_class.php';

   }





   /*-======================FEES PAID REPORTS BY CLASS==============*/

   else if ($MYTOPGET==="ACCOUNTS_REPORTS") {

     include 'inc/Reports/Accounts/index.php';

   } 



   else {
     include 'dashboard.php';

   }



   ?>




















 </div><!-- /.page-inner -->
</div><!-- /.page -->
</div>







<?php 

include 'footer.php';

?>


</main><!-- /.app-main -->
<!-- ----------------------INCLUDE FOOTER-------------- -->


<?php

include "./../extends.php";


    if(isset($_POST["hdn_m_id"])){
        
         $update_d_str = "update salary_month set salary_date='".$today."',status='จ่ายแล้ว' "
                 . "where id='".$_POST["hdn_m_id"]."' "
                 . "and emp_id='".$_POST["hdn_emp_id"]."'";
         $salary_d_qry = mysqli_query($objCon,$update_d_str);
         
    }
    
    
redirect_para("salary_detail",array("id"=>$_POST["hdn_m_id"]));    
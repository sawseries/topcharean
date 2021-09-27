<?php
include "./../extends.php";


    

        $salary_d_str = "select * from salary_month where id='".$_GET["id"]."'";
        $salary_d_qry = mysqli_query($objCon,$salary_d_str);
        
        
        $salary_d = mysqli_fetch_assoc($salary_d_qry);
        
        
        
        $salary_fw_str = "select * from salary_forward "
                . "where finish_date='".$salary_d["finish_date"]."' "
                . "and emp_id='".$salary_d["emp_id"]."'";
        $salary_fw_qry = mysqli_query($objCon,$salary_fw_str);
        
        $checkfw=mysqli_num_rows($salary_fw_qry);
        //$salary_fw = mysqli_fetch_assoc($salary_d_qry);
        
        
        
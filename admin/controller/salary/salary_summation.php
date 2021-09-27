<?php

include "./../extends.php";



$check_qry = mysqli_query($objCon,"select * from salary_month "
        . "where month(finish_date)='".$this_month."' "
        . "and year(finish_date)='".$this_year."'");


$check=mysqli_num_rows($check_qry);


//echo count($check);
//
if ($check <= 0) {
   
    $employee = mysqli_query($objCon,"select * from employee where status='1'");
    
    while ($result = mysqli_fetch_array($employee, MYSQLI_ASSOC)){

        $money_fw_str = "select COALESCE(SUM(money),0) as money_fw_total from salary_forward "
                . "where emp_id='".$result["emp_id"]."' and month(dates)='".$this_month."' "
                . "and year(dates)='".$this_year."'";

        $money_fw_qry = mysqli_query($objCon,$money_fw_str);
        $money_fw = mysqli_fetch_assoc($money_fw_qry);
        
        
        $update_fw_str = "update salary_forward set finish_date='$today' "
                . "where emp_id='".$result["emp_id"]."' and month(dates)='".$this_month."' "
                . "and year(dates)='".$this_year."'";
        
        $update_fw=mysqli_query($objCon,$update_fw_str);
        
                
        $salary_month_str = "insert into salary_month set "
                 . "emp_id='".$result["emp_id"]."',"
                 . "emp_name='".$result["firstname"].' '.$result["lastname"]."',"
                 . "position='".$result["position"]."',"
                 . "salary='".$result["salary"]."',"
                 . "money_forward='".$money_fw["money_fw_total"]."',"
                 . "total='".($result["salary"]-$money_fw["money_fw_total"])."',"
                 . "status='ยังไม่จ่าย',"
                 . "finish_date='$today'";    
        
        $salary_month=mysqli_query($objCon,$salary_month_str);
    }
}

redirect_admin("salary_month");



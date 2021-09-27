<?php

include "./../extends.php";

$emp_id = $_POST["txtemp_id"];


$input_m = (int) date('m', strtotime($_POST["txtdate"]));
$input_y = (int) date('Y', strtotime($_POST["txtdate"]));

if ($input_y < $this_year) {
    redirect_para("salary", array("fail" => "ไม่สามารถเบิกเงินย้อนหลังได้"));
} else if ($input_m < $this_month) {
    redirect_para("salary", array("fail" => "ไม่สามารถเบิกเงินย้อนหลังได้"));
} else {


    $salary_month = mysqli_query($objCon,"select * from salary_month "
            . "where month(finish_date)='$this_month' "
            . "and year(finish_date)='$this_year'");
    $check = mysqli_num_rows($salary_month);
    

    if (($check<=0)||(($check>0)&&($input_m > $this_month))){
        
        
        $sql = "select * from employee where emp_id='$emp_id'";
        $employee = mysqli_query($objCon, $sql);
        $row = mysqli_fetch_assoc($employee);
        $emp_name = $row["firstname"] . " " . $row["lastname"];

        $sql = "Insert into salary_forward set "
                . "emp_id='" . $_POST["txtemp_id"] . "',"
                . "dates='" . $_POST["txtdate"] . "',"
                . "emp_name='$emp_name',"
                . "money='" . $_POST["txtmoney"] . "',"
                . "remark='" . $_POST["remark"] . "'";

        $salary_forward = mysqli_query($objCon, $sql);

        redirect_para("salary", array("success" => "เพิ่มข้อมูลสำเร็จ"));
        
        
    } else {
        redirect_para("salary", array("fail" => "คุณได้ตัดยอดเงินเดือนสำหรับเดือนนี้ไปแล้ว"));
       
    }
}
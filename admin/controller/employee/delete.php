<?php

include "./../extends.php";

$emp_id = $_GET["emp_id"];

$sql1 = "delete from employee where emp_id='".$emp_id."'";
$employee = mysqli_query($objCon,$sql1);


$sql2 = "delete from employee_work where emp_id='".$emp_id."'";
$employee = mysqli_query($objCon,$sql2);

$sql3 = "delete from employee_education where emp_id='".$emp_id."'";
$employee = mysqli_query($objCon,$sql3);

redirect_para("employee",array("success"=>"ลบข้อมูลแล้ว"));



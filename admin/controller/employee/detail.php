<?php

include "./../extends.php";

$emp_id = $_GET["id"];

$sql = "select * from employee where emp_id='".$emp_id."'";
$employee = mysqli_query($objCon,$sql);
$row = mysqli_fetch_assoc($employee);



$sql = "select * from employee_education where emp_id='".$emp_id."'";
$education = mysqli_query($objCon,$sql);


$sql = "select * from employee_work where emp_id='".$emp_id."'";
$work = mysqli_query($objCon,$sql);







//$row = $result->fetch_assoc();
// redirect_admin("employee_edit",array("employees"=>$employee));
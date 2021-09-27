<?php


include "./../extends.php";

if($_GET["action"]=="delete"){
$id = $_GET["id"];
$emp_id = $_GET["emp_id"];
$sql = "delete from employee_education where id='".$id."'";
$employee = mysqli_query($objCon,$sql);

redirect_para("employee_edit",array("id"=>$emp_id,"success"=>"ลบข้อมูลสำเร็จ"));
}



if($_GET["action"]=="add"){
    
      $edu = "";
        
    $edu = "insert into employee_education set ";
    $edu.="emp_id='".$_POST["txt_emp_id"]."',";
    $edu.="school='".$_POST["txtschool"]."',";
    $edu.="major='".$_POST["txtmajor"]."',";
    $edu.="edu_type='".$_POST["sle_edu_typ"]."',";
    $edu.="gpa='".$_POST["txtgpa"]."'";
    
   // echo $edu;
    
  $employee = mysqli_query($objCon,$edu);
  redirect_para("employee_edit",array("id"=>$_POST["txt_emp_id"],"success"=>"เพิ่มข้อมูลสำเร็จ"));  
}
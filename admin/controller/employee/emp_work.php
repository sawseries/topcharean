<?php


include "./../extends.php";

if($_GET["action"]=="delete"){

$id = $_GET["id"];
$emp_id = $_GET["emp_id"];
$sql = "delete from employee_work where id='".$id."'";
$employee = mysqli_query($objCon,$sql);

redirect_para("employee_edit",array("id"=>$emp_id,"success"=>"ลบข้อมูลสำเร็จ"));


}


if($_GET["action"]=="add"){
    

    
     $work="";
    
    $work = "insert into employee_work set ";
    $work.="emp_id='".$_POST["txt_emp_id"]."',";
    $work.="job_place='".$_POST["txtwork_place"]."',";
    $work.="position='".$_POST["txt_position"]."',";
    $work.="salary='".$_POST["txt_salary"]."',";
    $work.="time='".$_POST["txt_time"]."',";
    $work.="resign_condition='".$_POST["txt_resign"]."'";
    
    $employee = mysqli_query($objCon,$work);
    
    redirect_para("employee_edit",array("id"=>$_POST["txt_emp_id"],"success"=>"เพิ่มข้อมูลสำเร็จ"));
}
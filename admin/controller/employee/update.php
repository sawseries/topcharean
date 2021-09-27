<?php


include "./../extends.php";


$employee = "update employee set ";
$employee.="ident_date='".$_POST["txtDateIden"]."',";
$employee.="married_status='".$_POST["married_status"]."',";
$employee.="firstname='".$_POST["txtFname"]."',";
$employee.="lastname='".$_POST["txtLname"]."',";
$employee.="sex='".$_POST["sex"]."',";
$employee.="address='".$_POST["txtAddress"]."',";
$employee.="birth_date='".$_POST["txtBdate"]."',";
$employee.="phone='".$_POST["txtPhone"]."',";
$employee.="soldier_status='".$_POST["sle_solder"]."',";
$employee.="position='".$_POST["txtPosition"]."',";
$employee.="salary='".$_POST["txtSalary"]."',";
$employee.="work_date='".$_POST["txtWorkdate"]."',";
$employee.="contnm='".$_POST["txtContNm"]."',";
$employee.="contphone='".$_POST["txtContPhone"]."',";
$employee.="contrelation='".$_POST["txtContRelation"]."',";
$employee.="status='".$_POST["txtstatus"]."' ";
$employee.="where emp_id='".$_POST["txtemp_id"]."'";


//echo $employee;



$query_employee = mysqli_query($objCon,$employee);

$edu = "";
$work = "";

//for($i=0;$i<=(count($_POST["sle_edu_typ"])-1);$i++){
//    
//    if($_POST["sle_edu_typ"][$i]!= "" ){
//        
//    $edu = "insert into employee_education set ";
//    $edu.="emp_id='".$_POST["txtIden"]."',";
//    $edu.="school='".$_POST["txtschool"][$i]."',";
//    $edu.="major='".$_POST["txtmajor"][$i]."',";
//    $edu.="edu_type='".$_POST["sle_edu_typ"][$i]."',";
//    $edu.="gpa='".$_POST["txtgpa"][$i]."'";
//    }
//    
//    $query_edu = mysqli_query($objCon,$edu);
//    $edu = "";
//   
//}
//
//
//for($j=0;$j<=(count($_POST["txtwork_place"])-1);$j++){    
//    if($_POST["txtwork_place"][$j]!=""){
//    $work = "insert into employee_work set ";
//    $work.="emp_id='".$_POST["txtIden"]."',";
//    $work.="job_place='".$_POST["txtwork_place"][$j]."',";
//    $work.="position='".$_POST["txt_position"][$j]."',";
//    $work.="salary='".$_POST["txt_salary"][$j]."',";
//    $work.="time='".$_POST["txt_time"][$j]."',";
//    $work.="resign_condition='".$_POST["txt_resign"][$j]."'";
//    }       
//    $query_work = mysqli_query($objCon,$work);
//    $work = "";
//}


redirect_para("employee_edit",array("id"=>$_POST["txtemp_id"],"success"=>"แก้ไขข้อมูลสำเร็จ"));




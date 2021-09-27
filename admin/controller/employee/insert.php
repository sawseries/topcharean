<?php


include "./../extends.php";
//include ROOT_PATH."/server.php";



$check_Iden = mysqli_query($objCon,"select * from employee where ident='".$_POST["txtIden"]."'");
$cnt_Iden = mysqli_num_rows($check_Iden);

if($cnt_Iden>0){
 redirect_para("employee",array("fail"=>"มีข้อมูลหมายเลขบัตรประชาชน ".$_POST["txtIden"]." แล้วในระบบ"));
}else{



$employee = "insert into employee set ";
$employee.="emp_id='".$_POST["txtIden"]."',";
$employee.="ident='".$_POST["txtIden"]."',";
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
$employee.="status='1'";

$query_employee = mysqli_query($objCon,$employee);

$edu = "";
$work = "";

for($i=0;$i<=(count($_POST["sle_edu_typ"])-1);$i++){
    
    if($_POST["sle_edu_typ"][$i]!= "" ){
        
    $edu = "insert into employee_education set ";
    $edu.="emp_id='".$_POST["txtIden"]."',";
    $edu.="school='".$_POST["txtschool"][$i]."',";
    $edu.="major='".$_POST["txtmajor"][$i]."',";
    $edu.="edu_type='".$_POST["sle_edu_typ"][$i]."',";
    $edu.="gpa='".$_POST["txtgpa"][$i]."'";
    }
    
    $query_edu = mysqli_query($objCon,$edu);
    $edu = "";
   
}


for($j=0;$j<=(count($_POST["txtwork_place"])-1);$j++){    
    if($_POST["txtwork_place"][$j]!=""){
    $work = "insert into employee_work set ";
    $work.="emp_id='".$_POST["txtIden"]."',";
    $work.="job_place='".$_POST["txtwork_place"][$j]."',";
    $work.="position='".$_POST["txt_position"][$j]."',";
    $work.="salary='".$_POST["txt_salary"][$j]."',";
    $work.="time='".$_POST["txt_time"][$j]."',";
    $work.="resign_condition='".$_POST["txt_resign"][$j]."'";
    }       
    $query_work = mysqli_query($objCon,$work);
    $work = "";
}


redirect_para("employee",array("success"=>"เพิ่มข้อมูลสำเร็จ"));
}
//redirect_admin("employee");

//header("location: ../../employee.php");



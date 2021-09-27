<?php


include "./../extends.php";


$emp_sql = "select * from employee";
$emp = mysqli_query($objCon,$emp_sql);

//$this_year =  date("Y");
//$this_month =  (int)date("m");



$today = date("Y-m-d");


$sql="";

if(isset($_POST["search"])){    
    $sql = "select * from salary_month where "
            . "month(finish_date)='".$_POST["txtmonth"]."' "
            . "and year(finish_date)='".$_POST["txtyear"]."'";
    
    
    $this_year =  (int)$_POST["txtyear"];
    $this_month =  (int)$_POST["txtmonth"];
    
    
}else{
    
    $sql = "select * from salary_month "
            . "where month(finish_date)='$this_month' "
            . "and year(finish_date)='$this_year'";
}


$this_year_thai = (int)$this_year+543;
$this_month_thai = month($this_month);

$salary_month = mysqli_query($objCon,$sql);
$cnt_salary_month = mysqli_num_rows($salary_month);
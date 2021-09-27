<?php

include "./../extends.php";



$emp_sql = "select * from employee where status=1";
$emp = mysqli_query($objCon,$emp_sql);
//$this_year =  date("Y");
//$this_month =  (int)date("m");


/////////////////////////////////////////////////////////////////////
$sql="";

if(isset($_POST["search"])){    
    $sql = "select * from salary_forward where "
            . "month(dates)='".$_POST["txtmonth"]."' "
            . "and year(dates)='".$_POST["txtyear"]."'";
    
    $this_year =  (int)$_POST["txtyear"];
    $this_month =  (int)$_POST["txtmonth"];
    
}else{
    
    $sql = "select * from salary_forward "
            . "where month(dates)='$this_month' "
            . "and year(dates)='$this_year'";
}


$this_year_thai = (int)$this_year+543;
$this_month_thai = month($this_month);

$salary_forward = mysqli_query($objCon,$sql);











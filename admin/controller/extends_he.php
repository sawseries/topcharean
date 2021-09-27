<?php

session_start();
error_reporting(0);

$root_direct = explode("\\", (String) __DIR__);
$root_path = $_SERVER['DOCUMENT_ROOT'];
define("ROOT_PATH", $root_path);
define("ADMIN_PATH",$root_path."/admin");
define("DIR_ROOT", $root_direct[3]);

$actual_link = 'http://'.$_SERVER['HTTP_HOST']."/admin";

include ROOT_PATH."/server.php";


$employee_path = $actual_link."/controller/employee";
$salary_path = $actual_link."/controller/salary";
$stock_path = $actual_link."/controller/stock";

$emp_dir = ADMIN_PATH."/controller/employee";


function redirect_para($template,array $data){
      $para="";
      if(count($data)>0){
    $i=0; 
          foreach ($data as $key=>$value){
              if($i==0){
              $para.="?";
              }else{
              $para.="&";    
              }              
              $para.=$key."=".$value;
              $i++;
          }   
      }
    $actual_link = 'http://'.$_SERVER['HTTP_HOST']."/admin";
     header("location: ".$actual_link."/".$template.".php".$para);
}



function redirect_admin($template){
      
       $actual_link = 'http://'.$_SERVER['HTTP_HOST']."/admin";
       header("location: ".$actual_link."/".$template.".php");
}


function month($i){
    $month="";
    switch ($i){        
    case 1 : $month="มกราคม"; break;
    case 2 : $month="กุมภาพันธ์"; break;
    case 3 : $month="มีนาคม"; break;
    case 4 : $month="เมษายน"; break;    
    case 5 : $month="พฤษภาคม"; break;
    case 6 : $month="มิถุนายน"; break;
    case 7 : $month="กรกฎาคม"; break;
    case 8 : $month="สิงหาคม"; break;
    case 9 : $month="กันยายน"; break;
    case 10 : $month="ตุลาคม"; break;
    case 11 : $month="พฤศจิกายน"; break;
    case 12 : $month="ธันวาคม"; break;
    }
    return $month;
}


$this_year=date("Y");
$this_month=(int)date("m");

$today = date("Y-m-d");
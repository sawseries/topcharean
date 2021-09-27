<?php 
    session_start();
	include "server.php";

	$user_name = $_POST["txtUsername"];
	$password =  $_POST["txtPassword"];
        
	$strSQL = "SELECT * FROM login WHERE user = '$user_name' && pass = '$password' ";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{
			echo "<script>alert('ชื่อผู้ใช้และรหัสผ่านไม่ถูกต้อง')</script>";
			echo "<meta http-equiv='refresh'content='0; url=index.php'>";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["user"];
			$_SESSION["name"] = $objResult["name"];
			$_SESSION["level"] = $objResult["level"];
			$_SESSION["sess_id"]=session_id();

                        $root_direct = explode("\\", (String) __DIR__);
                        $actual_link = 'http://'.$_SERVER['HTTP_HOST']."/".$root_direct[3]."/admin";
                        header("location: ".$actual_link);   
			//echo "<meta http-equiv='refresh'content='0; url=admin/index.php'>";
	}
?>
	

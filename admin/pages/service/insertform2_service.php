<html>
<head>
<title>insert (mysqli)</title>
</head>
<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">

<?php
	include "../../../server.php";
 	date_default_timezone_set("Asia/Bangkok");
	$serv_date=date("Y-m-d");
    
 	$sql = "INSERT INTO service (serv_id,user_name,serv_date,serv_start,
 								serv_completed,serv_detail) 							 
            VALUES ( '".$_POST["txtServId"]."','".$_POST["user11"]."', 					 
			 		 '$serv_date','".$_POST["txtServStart"]."',
					 '".$_POST["txtServCompleted"]."' ,'".$_POST["txtServDetail"]."' )" ; 

$query = mysqli_query($objCon,$sql);

	foreach($_POST['check'] as $checktest ){
	$checktest;
	
	foreach($_POST['chec'] as $checktest1 )
	$checktest1;

	$sql = "INSERT INTO service_detail (serv_id,user_name,treat_id,price) 							 
            VALUES ( '".$_POST["txtServId"]."', '".$_POST["user11"]."', 					 
			 		 '$checktest','".$_POST["chec"][$checktest-1]."')" ;  
		

	 $query = mysqli_query($objCon,$sql);
}
		
		$sql55 = "UPDATE members SET 
		status_id = '".$_POST["txtStatusName"]."' 
		WHERE user_name = '".$_POST["user11"]."' ";
	$query55 = mysqli_query($objCon,$sql55);

?>


	 <meta http-equiv='refresh'content='0;url=prescribing.php'> 
        
</body>
</html>
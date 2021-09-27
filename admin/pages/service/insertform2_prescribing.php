
<html>
<head>
<title>insert (mysqli)</title>
</head>
<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">

<?php
	include "../../../server.php";
 	date_default_timezone_set("Asia/Bangkok");
	$pres_date=date("Y-m-d");
    
 	$sql = "INSERT INTO prescribing (pres_id,user_name,serv_id,pres_date) 							 
            VALUES ( '".$_POST["txtPresId"]."','".$_POST["user11"]."', 					 
			 		 '".$_POST["txtServId"]."','$pres_date' )" ; 

	$query = mysqli_query($objCon,$sql);

	foreach($_POST['check'] as $checktest ){
	$checktest;
	foreach($_POST['chec'] as $checktest1 )
	$checktest1;
	foreach($_POST['txtUnitId'] as $checktest2 )
	$checktest2;

	$sql = "INSERT INTO prescribing_detail (pres_id,serv_id,drugs_id,number,unit_id) 							 
            VALUES ( '".$_POST["txtPresId"]."', '".$_POST["txtServId"]."', 					 
					 '$checktest','$checktest1','$checktest2')" ;  
		

	$query = mysqli_query($objCon,$sql);

//	foreach($_POST['checkd'] as $checkd ){
//	$checkd;
//  foreach($_POST['checd'] as $checkd1 )
//	$checkd1;
	
	//$sql = "INSERT INTO materialorder (morder_id,user_name,material_id,unit) 							 
			//	VALUES ( '".$_POST["txtPresId"]."', '".$_POST["txtServId"]."', 					 
			//			  '$checkd','".$_POST["checd"][$checkd1]."')" ;  
			
	
	//$query = mysqli_query($objCon,$sql);

	//$query1 = "SELECT * FROM drugs  where drugs_id='$drugs_id'";
    //$srt =mysqli_query($objCon ,"select drugs_balance from drugs where drugs_id = '$drugs_id'");
    //$objResult  = mysqli_fetch_array($srt);
	//$objResult['drugs_balance'];
	
	//	echo $objResult['drugs_balance'];
		
 	//$drugs_balance=$objResult['drugs_balance']-$unit;
 	//echo $drugs_balance;
 	//$sql1="update drugs set
		
	//    drugs_balance = '$drugs_balance'
    //    where drugs_id = '$drugs_id'";
	//    $result=$objCon->query($sql1);
	}
	
	$sql55 = "UPDATE members SET 
	status_id = '".$_POST["txtStatusName"]."' 
	WHERE user_name = '".$_POST["user11"]."' ";
$query55 = mysqli_query($objCon,$sql55);

?>



	 <meta http-equiv='refresh'content='0;url=app.php'> 
        
</body>
</html>
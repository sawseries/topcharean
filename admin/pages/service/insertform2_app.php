<html>
<head>
<title>insert (mysqli)</title>
</head>
<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">

<?php
    include "../../../server.php";

	$txtAppId = $_POST['txtAppId'];
	$check = "SELECT * FROM appointment  WHERE  app_id = '$txtAppId'";
	$result1 = mysqli_query($objCon, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{ 

	$sql = "INSERT INTO appointment (app_id,app_date,app_time,serv_start,
                                    serv_completed,user_name,add_detail) 
            VALUES ('".$_POST["txtAppId"]."','".$_POST["txtAppDate"]."',
                    '".$_POST["txtAppTime"]."','".$_POST["txtServStart"]."',
                    '".$_POST["txtServCompleted"]."','".$_POST["user11"]."',
                    '".$_POST["txtAppDetail"]."')";

	echo "<script>alert('ทำการนัดหมายเรียบร้อย')</script>";

	$query = mysqli_query($objCon,$sql);	
	}			
?>
	<meta http-equiv='refresh'content='0;url=app.php'>

</body>
</html>
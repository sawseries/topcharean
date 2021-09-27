<html>
<head>
<title>insert (mysqli)</title>
</head>
<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">
<?php
	include "../../../server.php";

	$txtPositionId = $_POST['txtPositionId'];
	$check = "SELECT * FROM position WHERE  position_id = '$txtPositionId'";
	$result1 = mysqli_query($objCon, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

	$sql = "INSERT INTO position (position_id,position_name) 
            VALUES ('".$_POST["txtPositionId"]."','".$_POST["txtPositionName"]."')";

	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย')</script>";

	$query = mysqli_query($objCon,$sql);
	}
?>

	<meta http-equiv='refresh'content='0;url=position.php'>
	 

</body>
</html>
<html>
<head>
<title>insert (mysqli)</title>
</head>
<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">
<?php
	include "../../../server.php";

	$txtUser = $_POST['txtUser'];
	$check = "SELECT * FROM login WHERE  user_name = '$txtUser'";
	$result1 = mysqli_query($objCon, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' Username ซ้ำ !! กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{

	$sql = "INSERT INTO personnal (user_name,title_id,name,lastname,address,
                                   tel,id_card,age,email,position_id) 
            VALUES ('".$_POST["txtUser"]."','".$_POST["txtTitleId"]."',
                    '".$_POST["txtName"]."','".$_POST["txtLast"]."',
                    '".$_POST["txtAdd"]."','".$_POST["txtTel"]."',
					'".$_POST["txtIdCard"]."','".$_POST["txtAge"]."',
					'".$_POST["txtEmail"]."','".$_POST["txtPositionId"]."')";

	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย')</script>";

	$query = mysqli_query($objCon,$sql);
	}
	$sql2 = "INSERT INTO login (user_name,password,level) 
	VALUES ('".$_POST["txtUser"]."','".$_POST["txtPass"]."','".$_POST["txtPositionId"]."')";
	$query2 = mysqli_query($objCon,$sql2);
?>

	<meta http-equiv='refresh'content='0;url=employees.php'>
	 

</body>
</html>
<html>
<head>
<title>insert (mysqli)</title>
</head>
<body>
<meta http-equiv=Content-Type content="text/html; charset=windows-874">
<?php
	include "../../../../server.php";
	
	$txtUser = $_POST['txtUser'];
	$check = "SELECT * FROM login  WHERE  user_name = '$txtUser'";
	$result1 = mysqli_query($objCon, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
    if($num > 0)
    {
    echo "<script>";
    echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
    echo "window.history.back();";
    echo "</script>";
    }else{
       
	$sql = "INSERT INTO members (user_name,title,memb_name,memb_lastname,memb_age,memb_blood,
                                memb_id_card,memb_birth,memb_address,memb_tel,memb_diseased,memb_drug_allergy) 
            VALUES ('".$_POST["txtUser"]."','".$_POST["txtTitle"]."',
                    '".$_POST["txtName"]."','".$_POST["txtLast"]."',
                    '".$_POST["txtAge"]."','".$_POST["txtBlood"]."',
                    '".$_POST["txtIdCard"]."','".$_POST["txtBirth"]."',
                    '".$_POST["txtAdd"]."','".$_POST["txtTel"]."',
                    '".$_POST["txtDiseased"]."','".$_POST["txtDrugAllergy"]."')";
    
	echo "<script>alert('เพิ่มข้อมูลเรียบร้อย')</script>";
               
	$query = mysqli_query($objCon,$sql);
	}
	$sql2 = "INSERT INTO login (user_name,password,level) 
	VALUES ('".$_POST["txtUser"]."','".$_POST["txtPass"]."','สมาชิก')";
	$query2 = mysqli_query($objCon,$sql2);
?>
	<meta http-equiv='refresh'content='0;url=pages/member/member.php'>
	 

</body>
</html>
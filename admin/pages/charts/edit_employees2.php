<?php
	include "../../../server.php";
	$sql = "update login set
			password = '".$_POST["txtPass"]."' 
			WHERE user_name = '".$_POST["txtUser"]."' ";
	$query = mysqli_query($objCon,$sql);

	$sql55 = "UPDATE personnal SET 
			title_id = '".$_POST["txtTitleId"]."' ,
			name = '".$_POST["txtName"]."' ,
            lastname = '".$_POST["txtLast"]."' ,
			address = '".$_POST["txtAdd"]."' ,
			tel = '".$_POST["txtTel"]."' ,
			id_card = '".$_POST["txtIdCard"]."' ,
			age = '".$_POST["txtAge"]."' ,
			email = '".$_POST["txtEmail"]."' ,
			position_id = '".$_POST["txtPositionId"]."' 
			WHERE user_name = '".$_POST["txtUser"]."' ";
	

	$query55 = mysqli_query($objCon,$sql55);
?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	echo "<meta http-equiv='refresh'content='0;url=employees.php'>";
	
?>



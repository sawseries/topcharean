<?php
	include "../../../../server.php";
	$sql = "update login set
			password = '".$_POST["txtPass"]."' 
			WHERE user_name = '".$_POST["txtUser"]."' ";
	$query = mysqli_query($objCon,$sql);

	$sql55 = "UPDATE dentist SET 
			title = '".$_POST["txtTitle"]."' ,
			dent_name = '".$_POST["txtName"]."' ,
            dent_lastname = '".$_POST["txtLast"]."' ,
			dent_address = '".$_POST["txtAdd"]."' ,
			dent_tel = '".$_POST["txtTel"]."' ,
			dent_age = '".$_POST["txtAge"]."' ,
			dent_email = '".$_POST["txtEmail"]."' 
			WHERE user_name = '".$_POST["txtUser"]."' ";
	

	$query55 = mysqli_query($objCon,$sql55);
?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	echo "<meta http-equiv='refresh'content='0;url=dentist.php'>";
	
?>



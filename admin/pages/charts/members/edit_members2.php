<?php
	include "../../../../server.php";
	$sql = "update login set
			password = '".$_POST["txtPass"]."' 
			WHERE user_name = '".$_POST["txtUser"]."' ";
	$query = mysqli_query($objCon,$sql);

	$sql55 = "UPDATE members SET 
			title = '".$_POST["txtTitle"]."' ,
			memb_name = '".$_POST["txtName"]."' ,
            memb_lastname = '".$_POST["txtLast"]."' ,
			memb_age = '".$_POST["txtAge"]."' ,
			memb_blood = '".$_POST["txtBlood"]."' ,
			memb_id_card = '".$_POST["txtIdCard"]."' ,
			memb_birth = '".$_POST["txtBirth"]."' ,
			memb_address = '".$_POST["txtAdd"]."' ,
			memb_tel = '".$_POST["txtTel"]."' ,
            memb_diseased = '".$_POST["txtDiseased"]."' ,
			memb_drug_allergy = '".$_POST["txtDrugAllergy"]."' 
			WHERE user_name = '".$_POST["txtUser"]."' ";
	

	$query55 = mysqli_query($objCon,$sql55);
?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	echo "<meta http-equiv='refresh'content='0;url=members.php'>";
	
?>



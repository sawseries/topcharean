<?php
	include "../../../server.php";
	$sql = "update treatment_type set
			WHERE treat_id = '".$_POST["txtTreatId"]."' ";
	$query = mysqli_query($objCon,$sql);

	$sql55 = "UPDATE treatment_type SET 
			treat_name = '".$_POST["txtTreatName"]."' ,
			treat_detail = '".$_POST["txtTreatDetail"]."'
			WHERE treat_id = '".$_POST["txtTreatId"]."' ";
	

	$query55 = mysqli_query($objCon,$sql55);
?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	echo "<meta http-equiv='refresh'content='0;url=treatment_type.php'>";
	
?>



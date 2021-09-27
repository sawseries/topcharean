<?php
	include "../../../server.php";
	$sql = "update position set
			WHERE position_id = '".$_POST["txtPositionId"]."' ";
	$query = mysqli_query($objCon,$sql);

	$sql55 = "UPDATE position  SET 
			position_name = '".$_POST["txtPositionName"]."' 
			WHERE position_id = '".$_POST["txtPositionId"]."' ";
	

	$query55 = mysqli_query($objCon,$sql55);
?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	echo "<meta http-equiv='refresh'content='0;url=position.php'>";
	
?>



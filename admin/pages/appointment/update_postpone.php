<?php
	include "../../../server.php";
	$sql = "update appointment set
			WHERE app_id = '".$_POST["txtAppId"]."' ";
	$query = mysqli_query($objCon,$sql);
	
	$sql = "update appointment set
            app_date = '".$_POST["txtAppDate"]."' 
			WHERE app_id  = '".$_POST["txtAppId"]."' ";

    $query = mysqli_query($objCon,$sql);

    
?>
	<script language="javascript">
	alert("ขอเลื่อนผู้ป่วยเรียบร้อย")
	</script>
<?php
	echo "<meta http-equiv='refresh'content=0;url=postpone_appdentist.php>";
?>

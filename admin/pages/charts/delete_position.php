<?php
	include "../../../server.php";
	$position_id= $_GET["user11"];
	$sql = "DELETE FROM position WHERE position_id = '$position_id' ";
	$query = mysqli_query($objCon,$sql);

	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=position.php'>";
   }
?>
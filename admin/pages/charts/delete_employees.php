<?php
	include "../../../server.php";
	$username= $_GET["user11"];
	$sql = "DELETE FROM personnal WHERE user_name = '$username' ";
	$query = mysqli_query($objCon,$sql);

	$sql2 = "DELETE FROM login WHERE user_name = '$username' ";
	$query2 = mysqli_query($objCon,$sql2);

	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=employees.php'>";
   }
?>

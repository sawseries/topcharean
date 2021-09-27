<?php
	include "../../../server.php";
	$treat_id= $_GET["user11"];
	$sql = "DELETE FROM treatment_type WHERE treat_id = '$treat_id' ";
    $query = mysqli_query($objCon,$sql);
    
	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=treatment_type.php'>";
   }
?>

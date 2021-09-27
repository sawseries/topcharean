<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

	include "../server.php";
	$cus= $_GET["cus"];
	
	$sql = "DELETE FROM customer WHERE id_cus = '$cus' ";
	$query = mysqli_query($objCon,$sql);

	$sql9 = "DELETE FROM tudlen WHERE id_cus = '$cus' ";
	$query9 = mysqli_query($objCon,$sql9);
?>
    <script language="javascript">
	alert("ลบข้อมูลเรียบร้อย")
	</script>
	
<?php

	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=customer.php'>";
   }}else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

	include "../server.php";
	 $sql = "update len set name_len = '".$_POST["name"]."',price_len = '".$_POST["price"]."' WHERE id_len = '".$_POST["id"]."' ";
	$query = mysqli_query($objCon,$sql);
?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=len.php'>";
   }}else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
	
?>

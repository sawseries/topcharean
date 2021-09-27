<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

	include "../server.php";
	 $sql = "INSERT INTO product (name_pro,price_pro) VALUES ('".$_POST["name"]."','".$_POST["price"]."')";
	$query = mysqli_query($objCon,$sql);

?>
    <script language="javascript">
	alert("เพิ่มข้อมูลเรียบร้อย")
	</script>
	
<?php
	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=frame.php'>";
   }}else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>

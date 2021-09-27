<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 


	include "../server.php";
	 $sql = "update sale set status = 'ดำเนินการเสร็จสิ้น' WHERE id_sale = '".$_GET["idsale"]."' ";
	$query = mysqli_query($objCon,$sql);
?>
    <script language="javascript">
	alert("บันทึกข้อมูลการรับสินค้าเรียบร้อย")
	</script>
	
<?php
	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=select_recive.php'>";
   }}else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
	
?>

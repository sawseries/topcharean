<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 
$bala = $_GET["bala"]; 
$date_payrecive1 = date('Y-m-d',strtotime('+543 year'));
	include "../server.php";
	 $sql = "update sale set payrevive = '$bala',date_payrecive = '$date_payrecive1', balance = '0', status = 'ดำเนินการเสร็จสิ้น' WHERE id_sale = '".$_GET["idd"]."' ";
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

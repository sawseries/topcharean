<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

	include "../server.php";
	$idtud1= $_GET["idtud1"];
	$idcus1= $_GET["idcus1"];
	$namecus1= $_GET["namecus1"];

	$sql = "DELETE FROM tudlen WHERE id_tud = '$idtud1' ";
	$query = mysqli_query($objCon,$sql);
?>
    <script language="javascript">
	alert("ลบข้อมูลเรียบร้อย")
	</script>
	
<?php
	
	   echo "<meta http-equiv='refresh'content='0;url=show_cus.php?cus=$idcus1&&namecus=$namecus1'>";
 }else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
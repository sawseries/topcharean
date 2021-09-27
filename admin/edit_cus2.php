<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

    include "../server.php";
     $idcus1= $_SESSION["idcus9999"];
    

    $sql55 = "UPDATE customer SET name_cus = '".$_POST["name"]."',age = '".$_POST["age"]."',tel = '".$_POST["tel"]."',address = '".$_POST["address"]."',company = '".$_POST["company"]."',r_old = '".$_POST["right_old"]."',pdr_old = '".$_POST["pdr_old"]."',l_old = '".$_POST["left_old"]."',pdl_old = '".$_POST["pdl_old"]."' WHERE id_cus = '$idcus1' ";
    $query = mysqli_query($objCon,$sql55);


?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
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

<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

    include "../server.php";
     $idcus1= $_SESSION["idcus9999"];
     $idtud99= $_SESSION["idtud9999"];
    $namecus1= $_POST["name"];
    $age=$_POST["age"];

    // $sql55 = "UPDATE customer SET comment = '".$_POST["comment"]."' WHERE id_cus = '$idcus1' ";
    //$query = mysqli_query($objCon,$sql55);


     $sql99 = "UPDATE tudlen SET date_tud = '".$_POST["day"]."' ,r = '".$_POST["right"]."',pdr = '".$_POST["pdr"]."',l = '".$_POST["left"]."',pdl = '".$_POST["pdl"]."',id_pro = '".$_POST["c_id1"]."',price_pro = '".$_POST["c_date"]."',id_len = '".$_POST["p_len"]."',price_len = '".$_POST["st_time"]."',total_price = '".$_POST["output"]."',comment_tud = '".$_POST["comment"]."' WHERE id_tud = '$idtud99' ";
    $query99 = mysqli_query($objCon,$sql99);


?>
    <script language="javascript">
	alert("แก้ไขข้อมูลเรียบร้อย")
	</script>
	
<?php
	
	   echo "<meta http-equiv='refresh'content='0;url=show_cus.php?cus=$idcus1&&namecus=$namecus1&&agecus=$age'>";
   }else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>

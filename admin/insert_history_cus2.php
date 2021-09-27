<?php
session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 

    include "../server.php";

     $idcus1= $_SESSION["idcus9999"];
     $namecus=$_POST["name"];
     $age=$_POST["age"];
     $sql = "SELECT * FROM tudlen where id_cus= '$idcus1' order by num asc"; 
                
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $i = $result["num"];
            }

            $i = $i+1;

    //$sql55 = "UPDATE customer SET comment = '".$_POST["comment"]."' WHERE id_cus = '$idcus1' ";
    //$query = mysqli_query($objCon,$sql55);


     $sql9 = "INSERT INTO tudlen(num,id_cus,date_tud,r,pdr,l,pdl,id_pro,price_pro,id_len,price_len,total_price,comment_tud) VALUES ('$i','$idcus1','".$_POST["day"]."','".$_POST["right"]."','".$_POST["pdr"]."','".$_POST["left"]."','".$_POST["pdl"]."','".$_POST["c_id1"]."','".$_POST["c_date"]."','".$_POST["p_len"]."','".$_POST["st_time"]."','".$_POST["output"]."','".$_POST["comment"]."')";
    $query9 = mysqli_query($objCon,$sql9);



?>
    <script language="javascript">
	alert("เพิ่มข้อมูลเรียบร้อย")
	</script>
	
<?php
	if(mysqli_affected_rows($objCon)) {
	   echo "<meta http-equiv='refresh'content='0;url=show_cus.php?cus=$idcus1&&namecus=$namecus&&agecus=$age'>";
   }}else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>

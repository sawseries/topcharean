<?php
include "./../admin/controller/extends.php";
if($_SESSION['level'] == '1'){ 
  
                //include "../server.php";
                
$check_Iden = mysqli_query($objCon,"select * from customer where trim(name_cus)=trim('".$_POST["name"]."')");
$cnt_custnm = mysqli_num_rows($check_Iden);

if($cnt_custnm>0){
 redirect_para("insert_customer1",array("fail"=>"มีข้อมูล ".$_POST["name"]." แล้วในระบบ"));
}else{
                
                $sql = "SELECT * FROM customer order by id_cus asc"; 
                
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
				$i = $result["id_cus"];
            }

            $i = $i+1;
            $this_year=date("Y")+543;
            $year_date = $this_year-$_POST["age"];
	
	$sql = "INSERT INTO customer(name_cus,year_birthdate,tel,address,company,r_old,pdr_old,l_old,pdl_old) VALUES ('".$_POST["name"]."','".$year_date."','".$_POST["tel"]."','".$_POST["address"]."','".$_POST["company"]."','".$_POST["right_old"]."','".$_POST["pdr_old"]."','".$_POST["left_old"]."','".$_POST["pdl_old"]."')";
	$query = mysqli_query($objCon,$sql);


	$sql9 = "INSERT INTO tudlen(num,id_cus,date_tud,r,pdr,l,pdl,id_pro,price_pro,id_len,price_len,total_price,comment_tud) VALUES ('1','$i','".$_POST["day"]."','".$_POST["right"]."','".$_POST["pdr"]."','".$_POST["left"]."','".$_POST["pdl"]."','".$_POST["c_id1"]."','".$_POST["c_date"]."','".$_POST["p_len"]."','".$_POST["st_time"]."','".$_POST["output"]."','".$_POST["comment"]."')";
	$query9 = mysqli_query($objCon,$sql9);


redirect_para("customer",array("success"=>"เพิ่มข้อมูลสำเร็จ"));
        }}else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>

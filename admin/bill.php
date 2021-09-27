 <?php
 session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ 
include "../server.php";


 $k = 1;
 $sql = "SELECT * FROM sale order by id_sale asc";     
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $k = $result["id_sale"];
            }
            $k = $k + 1;  

 $strSQL99 = "insert into sale(name,tel,date_sale,time_sale,date_recive,time_recive,total_price,mudjum,balance,status) VALUES ('".$_POST["name"]."','".$_POST["tel"]."','".$_POST["daytud"]."',now(),'".$_POST["dayrecive"]."','".$_POST["timerecive"]."','".$_POST["total"]."','".$_POST["mudjum"]."','".$_POST["balance"]."','กำลังดำเนินการ')";
	mysqli_query($objCon,$strSQL99);

for($i=0;$i<count($_POST["txtSiteName"]);$i++)
{
	//echo "txtSiteName $i = ".$_POST["txtSiteName"][$i]."<br>";

	 $strSQL = "insert into sale_detail(id_sale,id_pro,id_len,sum_price) VALUES ('$k','".$_POST["txtSiteName"][$i]."','".$_POST["txtSiteName2"][$i]."','".$_POST["txtSiteName3"][$i]."')";
	mysqli_query($objCon,$strSQL);
} 


?>
    <script language="javascript">
	alert("เพิ่มข้อมูลเรียบร้อย")
	</script>
	
<?php
	//if(mysqli_affected_rows($objCon)) {
	//   echo "<meta http-equiv='refresh'content='110;url=select_sale.php?'>";}
   }else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../login.php'>";
}
?>

<?php
function DateThai($strDate)
    {
        $strYear = date("Y",strtotime($strDate))+543;
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear";
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Eye Station</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>
        <style type="text/css">
		@media print{
		#no_print{display:none;}
		}
		</style>
		<style type="text/css" media="print">
		@page{
		size: auto;   
		margin: 5mm;  
		}
		body{
		margin: 0px;  
		}
		</style>
 </head>
    <body >

<br>
<div align="center"><h3><b>ใบเสร็จรับเงิน</b></h3></div>
<br>
<table border="0" cellpadding="0" cellspacing="0">
        <thead>
    <tr >
        <th width="40%" colspan="2"><div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logo.png" width="300" height="100" /></th>
        <th width="30%" colspan="2"><div align="center "><h3><p style="text-indent: 3.9em;">วันที่ &nbsp;&nbsp;<?php echo DateThai($_POST["daytud"]); ?></p></h3></div></th>
    </tr>
    </thead>
</table>
<br>
<br>
<table border="0" class="table table-bordered" >
    <tbody>
   	<tr>
        <td  bgcolor="black" width="15%"><div align="left"><font color="white"><b> ชื่อ-นามสกุลลูกค้า </b></font></div></td>
        <td  width="37%"><div align="left">&nbsp;<?php echo $_POST["name"]; ?></div></td>
        <td  bgcolor="black" width="13%"><div align="left"><font color="white"><b>เบอร์โทรศัพท์ </b></font></div></td>
        <td  width="35%"><div align="left">&nbsp;<?php echo $_POST["tel"]; ?></div></td>
    </tr>
    <tr>
        <td  bgcolor="black" width="15%"><div align="left"><font color="white"><b> วันที่รับแว่น </b></font></div></td>
        <td  width="37%"><div align="left">&nbsp;<?php echo DateThai($_POST["dayrecive"]); ?></div></td>
        <td  bgcolor="black" width="13%"><div align="left"><font color="white"><b>เวลาที่รับแว่น </b></font></div></td>
        <td  width="35%"><div align="left">&nbsp;<?php echo $_POST["timerecive"]; ?> น.</div></td>
    </tr>
    <tr>
        <td  bgcolor="black" width="15%"><div align="left"><font color="white"><b> ผู้รับงาน </b></font></div></td>
        <td  width="37%"><div align="left">&nbsp;ปิง</div></td>
    </tr>
</table>

<br>

<table class="table table-bordered" border="1">
    <tr >
        <td width="10%" align="center"><b>ลำดับ</b></td>
        <td width="30%" align="center"><b>กรอบแว่น</b></td>
        <td width="30%" align="center"><b>ชนิดเลนส์</b></td>
        <td width="30%" align="center"><b>ราคา</b></td>
    </tr>

<?php 
$abc=1;
for($z=0;$z<count($_POST["txtSiteName"]);$z++)
{
	
?>

    <tr>
        <td align="center"><?php echo $abc; ?></td>
        <td>&nbsp;&nbsp;<?php echo $_POST["txtSiteName"][$z]; ?></td>
        <td>&nbsp;&nbsp;<?php echo $_POST["txtSiteName2"][$z]; ?></td>
        <td align="center"><?php echo $_POST["txtSiteName3"][$z]; ?></td>
    </tr>
<?php 
$abc = $abc + 1;
} ?>
	<tr>
        <td colspan="3" align="right"><b>ราคารวม : </b></td>
        <td align="center"><?php echo $_POST["total"]; ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right"><b>มัดจำ : </b></td>
        <td align="center"><?php echo $_POST["mudjum"]; ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right"><b>คงเหลือ : </b></td>
        <td align="center"><b><?php echo $_POST["balance"]; ?></b></td>
    </tr>
    </tbody>
</table>

<table border="0" cellpadding="0" cellspacing="0">
        <thead>
    <tr >
        <th width="40%" colspan="2"><div align="left"><img src="img/add.png" width="320" height="120"></th>
        <th width="30%" colspan="2"><div align="center "><h2><p style="text-indent: 1.5em;"><?php if($_POST["total"] - $_POST["mudjum"] == 0){ echo "ชำระเงินครบแล้ว"; }elseif($_POST["total"] - $_POST["mudjum"] == $_POST["total"]){echo "ยังไม่ชำระเงิน";}else{ echo "ชำระเงินยังไม่ครบ";} ?></p></h2></div></th>
    </tr>
    </thead>
</table><br>
<div align="center"><img src="img/cut.png" width="15" height="15">--------------------------------------------------------------------------------------------------------------------------------------------</div><br><br>
<form action="select_sale.php">
<div align="center" id="no_print" ><input name="submit" class="btn btn-danger" type="submit" id="submit" value="กลับหน้าหลัก" style="width: 100px; height: 50px"/>&nbsp;  &nbsp;
<input type="button" class="btn btn-success" value="Print" onclick="window.print()" style="width: 100px; height: 50px"></div></form>
<br>
<br>
<br>
<br>
    </body>
    </html>

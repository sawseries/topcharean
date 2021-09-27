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

 $strSQL99 = "insert into sale(name,tel,date_sale,date_recive,time_recive,total_price,mudjum,date_mudjum,balance,status) VALUES ('".$_POST["name"]."','".$_POST["tel"]."','".$_POST["daytud"]."','".$_POST["dayrecive"]."','".$_POST["timerecive"]."','".$_POST["total"]."','".$_POST["mudjum"]."','".$_POST["daytud"]."','".$_POST["balance"]."','กำลังดำเนินการ')";
    mysqli_query($objCon,$strSQL99);

for($i=0;$i<count($_POST["txtSiteName"]);$i++)
{
    //echo "txtSiteName $i = ".$_POST["txtSiteName"][$i]."<br>";
if($_POST["txtSiteName"][$i]|=""){
    $strSQL = "insert into sale_detail(id_sale,id_pro,id_len,sum_price) VALUES ('$k','".$_POST["txtSiteName"][$i]."','".$_POST["txtSiteName2"][$i]."','".$_POST["txtSiteName3"][$i]."')";
    mysqli_query($objCon,$strSQL);
}else{
     
} }


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
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eye Station</title>
        <link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href=".css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris charts -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <!-- DATA TABLES -->
        <link href="css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

         <!-- modal -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php
function DateThai($strDate)
    {
        $strYear = date("Y",strtotime($strDate));
        $strMonth= date("n",strtotime($strDate));
        $strDay= date("j",strtotime($strDate));
        $strMonthCut = Array("","ม.ค.","ก.พ.","มี.ค.","เม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");
        $strMonthThai=$strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear";
    }

?>

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
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        
<?php include "header.php"; ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php include "menu.php"; ?>

            <aside class="right-side">
                 <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        
                      
                        
                        <div class="col-xs-12"> 
                       <div align="center"><h3><b>ใบเสร็จรับเงิน </b></h3></div>
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
                        </div>

                        </div><!-- /.col -->
                    </div>


                        <div class="box-body table-responsive">
                            <table border="1" cellpadding="20" cellspacing="20" bordercolor="black" width="100%" >
    <tbody>
    <tr>
        <td  bgcolor="black" width="20%"><div align="left"><font color="white"><b> &nbsp;&nbsp;ชื่อ-นามสกุลลูกค้า </b></font></div></td>
        <td  width="30%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $_POST["name"]; ?></div></td>
        <td  bgcolor="black" width="20%"><div align="left"><font color="white"><b>&nbsp;&nbsp;เบอร์โทรศัพท์ </b></font></div></td>
        <td  width="30%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $_POST["tel"]; ?></div></td>
    </tr>
    <tr>
        <td  bgcolor="black" width="20%"><div align="left"><font color="white"><b> &nbsp;&nbsp;วันที่รับแว่น </b></font></div></td>
        <td  width="30%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo DateThai($_POST["dayrecive"]); ?></div></td>
        <td  bgcolor="black" width="20%"><div align="left"><font color="white"><b>&nbsp;&nbsp;เวลาที่รับแว่น </b></font></div></td>
        <td  width="30%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $_POST["timerecive"]; ?> น.</div></td>
    </tr>
    <tr>
        <td  bgcolor="black" width="20%"><div align="left"><font color="white"><b>&nbsp;&nbsp;ผู้รับงาน </b></font></div></td>
        <td  width="30%"><div align="left">&nbsp;&nbsp;&nbsp;<?php echo $_SESSION["name"]; ?></div></td>
    </tr>
</table>

<br>

<table width="100%" border="1" cellpadding="200" cellspacing="200" bordercolor="black">
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
    if($_POST["txtSiteName"][$z]|=""){
?>

    <tr>
        <td align="center"><?php echo $abc; ?></td>
        <td>&nbsp;&nbsp;<?php echo $_POST["txtSiteName"][$z]; ?></td>
        <td>&nbsp;&nbsp;<?php echo $_POST["txtSiteName2"][$z]; ?></td>
        <td align="center"><?php echo number_format($_POST["txtSiteName3"][$z]); ?></td>
    </tr>
<?php 
$abc = $abc + 1;
}else{


}} ?>
    <tr>
        <td colspan="3" align="right"><b>ราคารวม : &nbsp;</b></td>
        <td align="center"><?php echo number_format($_POST["total"]); ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right"><b>มัดจำ : &nbsp;</b></td>
        <td align="center"><?php echo number_format($_POST["mudjum"]); ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right"><b>คงเหลือ : &nbsp;</b></td>
        <td align="center"><b><?php echo number_format($_POST["balance"]); ?></b></td>
    </tr>
    </tbody>
</table>
<br>
<table border="0" cellpadding="0" cellspacing="0">
        <thead>
    <tr >
        <th width="40%" colspan="2"><div align="left"><img src="img/add.png" width="320" height="120"></th>
        <th width="30%" colspan="2"><div align="center "><h2><p style="text-indent: 1.5em;"><?php if($_POST["total"] - $_POST["mudjum"] == 0){ echo "ชำระเงินครบแล้ว"; }elseif($_POST["total"] - $_POST["mudjum"] == $_POST["total"]){ ?> <font color="red"><?php echo "ยังไม่ชำระเงิน"; ?> </font> <?php }else{ ?> <font color="red"> <?php echo "ชำระเงินยังไม่ครบ"; ?> </font> <?php } ?> </p></h2></div></th>
    </tr>
    </thead>
</table><br>
<div align="center"><img src="img/cut.png" width="15" height="15">---------------------------------------------------------------------------------------------------</div><br><br>
<div align="center" id="no_print" >
    <button class="btn btn-primary" onclick="window.print();" style="width: 100px; height: 50px"><i class="fa fa-print"></i> Print</button>
</div>
<br>
<br>
<br>
<br>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
            </section><!-- /.content -->

               


          <!-- jQuery 2.0.2 -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>
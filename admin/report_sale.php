<?php
error_reporting(0);  
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eye Station</title>
        <link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
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
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                        <li class="active">สรุปรายงาน</li>
                    </ol>
                    <center><label>&nbsp;&nbsp;สรุปรายงานยอดขาย</label></center>

                        <form id="form1" name="form1" class="form-inline" method="post" >
                            <center>
                              <div class="form-group">
                                <label for="exampleInputName2">ระหว่างวันที่ :</label>
                                <input type="date" name="d_s" id="datepicker" width="270" value="<?php echo date('Y-m-d',strtotime('+543 year'))?>" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">&nbsp;ถึงวันที่ :&nbsp;</label>
                                <input type="date" name="d_e" id="datepicker2" width="270" value="<?php echo date('Y-m-d',strtotime('+543 year'))?>" />
                            </div>
                            &nbsp;&nbsp;<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-search"></span> ค้นหา</button></center>
                        </form>

                        <div class="row no-print">
                        <div class="col-xs-12">
                            <button class="btn btn-primary pull-right" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                    </div>

                        <script>
                            $('#datepicker').datepicker({
                                uiLibrary: 'bootstrap',
                                format: "yyyy-mm-dd",
                                type : "date"
                            });


                        </script>

                        <script>
                            $('#datepicker2').datepicker({
                                uiLibrary: 'bootstrap',
                                format: "yyyy-mm-dd",
                                type : "date"
                            });


                        </script>
                </section>
                
                            <!-- split buttons box -->
            <!-- general form elements -->
                 <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        
                        <?php 
                            $date_nows = date('d-m-yy');
                          ?> 
                           
                            <center><img src="img/logo.jpg" width="300" height="100" /></center>
                            <br>
                            <h4><strong> <center> รายงานยอดขาย</center></strong>
                             <br>
                             <strong> <center> ระหว่างวันที่ : <?php echo DateThai($_POST[d_s]);?> &nbsp;&nbsp; ถึงวันที่ : <?php echo DateThai($_POST[d_e]);?> </center></strong></h4>
                             <br>
                        

                        </div><!-- /.col -->
                    </div>


                        <div class="box-body table-responsive">

                            <table border="1" class="table table-striped" id="example2" align="center"   >
                                
                                <thead >
                                    <tr >

                                        <th><center>ลำดับ</center></th>
                                        <th><center>วันที่ขาย<center></th>
                                        <th><center>ชื่อลูกค้า<center></th>
                                        <th><center>มัดจำ<center></th>        
                                        <th><center>ราคา<center></th>

                                    </tr>
                                </thead>

                                <?php 
                                include "../server.php"; 
                                $num = 1;
                                    $d_s = $_POST['d_s'];//ตัวแปรวันที่เริ่มต้น
                                    $d_e = $_POST['d_e'];//ตัวแปรวันที่สิ้นสุด

$sql = "SELECT * FROM `sale` where date_sale BETWEEN '$d_s' AND '$d_e' order by date_sale  desc " or die("Error:" . mysqli_error());                                 
//ประกาศตัวแปร sql
$query = mysqli_query($objCon,$sql);//ดูชื่อ ตัวแปรในไฟล์ connect ให้ดีว่า conหรือ condb หรืออย่างอื่น
$num2 = mysqli_num_rows($query);
//สร้างตัวแปร $row มารับค่าจากการ fetch array
//วนลูป
 while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {  

if($result["mudjum"] != 0 || $result["balance"] == 0){
    ?>
 
    <tr>
        <td ><center><?php echo $num++; ?><center></td>
        <td ><center><?php echo DateThai($result["date_sale"]);?></center></td>
        <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $result["name"]; if($result["balance"]!=0){ ?> <font color="red">(ค้างชำระอีก : <?php echo number_format($result["balance"]);?> บาท)</font><?php } ?></td>
        <td style="text-align:center;"><?=$result["mudjum"];?></td>
        <td style="text-align:right" ><?php echo number_format($result["mudjum"]+$result["payrevive"]) ?></td>
    </tr>
<?php
$total += $result["mudjum"]+$result["payrevive"];
}}?>
            <tr>
                <th  colspan="4" style="text-align:right" id="footer-label">ยอดรวม :
                <td style="text-align:right" ><strong><?php echo number_format($total);?> บาท</strong></td>
                </th>
            </tr>

            
                                </table>
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
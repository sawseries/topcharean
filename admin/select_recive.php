<?php session_start(); 
error_reporting(0);
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
                        <li><a href="#"><i class="fa fa-dashboard"></i>รับสินค้า</a></li>
                    </ol>
                </section>
              <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <label>&nbsp;&nbsp;รับสินค้า</label>
                            <div class="box">
                                <br>
                                 <th width="150" colspan="3" > </th>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    
                                <th><center>เลขที่บิล</center></th>
                                <th><center>ชื่อลูกค้า</center></th>
                                <th><center>วันที่รับแว่น</center></th>
                                <th><center>เวลาที่รับแว่น</center></th>
                                <th><center>ยอดขาย</center></th>
                                <th><center>มัดจำ</center></th>
                                <th><center>ยอดค้างชำระ</center></th>
                                <th><center></center></th>
                                      <?php if ($_SESSION['level'] == '1') { ?>  
                                <th><center></center></th>
                                <?php } ?>  
     
                               
                                </tr>           
                                </thead>
            <?php
                include "../server.php";
                $sql = "SELECT * FROM sale where status='กำลังดำเนินการ' order by id_sale desc,date_recive desc,time_recive asc "; 
                $i = 1;
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                 $Seq = substr("00000".$result["id_sale"],-5,5);   //*** Replace Zero Fill ***//
                 
            ?>       
                <tr>            
                                <td><center><?php echo $Seq; ?><center></td>
                                <td><?php echo $result["name"]; ?></td>
                                <td align="center"><?php echo DateThai($result["date_recive"]); ?></td>
                                <td align="center"><?php echo date('H:i',strtotime($result["time_recive"])); ?> น.</td>
                                <td align="center"><?php echo number_format($result["total_price"]) ;?></td>
                                <td align="center"><?php echo number_format($result["mudjum"]) ;?></td>
                                <td align="center"><font color="red"><?php echo number_format($result["balance"]) ;?></font></td>

                                

                                

                                <?php if($result["balance"] == 0){ ?>
            <td align="center"><a href="select_recive2.php?idsale=<?php echo $result["id_sale"];?>"><button type="button" class="btn btn-success" onClick="return confirm('ยืนยันการรับสินค้า')">รับสินค้า(ไม่มียอดค้าง)</button></a></td>
                <?php }else{ ?>
            <td align="center" data-toggle="modal" data-target="#myModal<?php echo $result['id_sale'];?>"><button type="button" class="btn btn-warning">รับสินค้าและชำระเงิน</button></td>
             
           <?php include ("emp_recive.php"); } ?>
             <?php if ($_SESSION['level'] == '1') { ?> 
            <td align="center"><a href="del_bill.php?idsale=<?php echo $result["id_sale"];?>" onClick="return confirm('ยืนยันการลบข้อมูล')"><button type="button" class="btn btn-danger">ลบบิล</button></a></td>
             <?php } ?>   
            </tr>  
            <?php 
                $i++;
            }
            ?>                 
                        </div>
                    </div>
                </section>
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


         <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
       
         <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
         <script>    
$(document).ready(function() {
    $('#example2').DataTable( {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
  });
} );
 
  </script>

    
    </body>
</html>

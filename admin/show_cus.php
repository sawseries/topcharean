<?php session_start(); 
error_reporting(0);
 $id999 = $_GET["cus"];
if($_SESSION['level'] == '1'){ ?>
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
 $this_year=date("Y")+543;
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
                        <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                        <li class="active">ลูกค้า</li>
                    </ol>
                </section>
              <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <h3><label>&nbsp;&nbsp;ประวัติการตัดแว่นตาของคุณ : <font color="red"> <?php echo $_GET['namecus'];?></font>&nbsp;&nbsp; อายุ : <font color="red"><?php echo ($this_year-$_GET['agecus']);?> </font>ปี</label></h3>
                            <div class="box">
                                <br>
                                 <th width="150" colspan="3" ><a
                                href="insert_history_cus1.php?cus=<?php echo $id999; ?>"><button type="button" class="btn btn-primary">เพิ่มข้อมูลการตัดแว่น</button></a></th>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    
                                <th><center>ลำดับ</center></th>
                                <th><center>วันที่ตัด</center></th>
                                <th><center>ค่าสายตาขวา (R)</center></th>
                                <th><center>PD (R)</center></th>
                                <th><center>ค่าสายตาซ้าย (L)</center></th>
                                <th ><center>PD (L)</center></th>
                                <th><center>กรอบที่ตัด</center></th>
                                <th><center>เลนส์ที่ตัด</center></th>
                                <th ><center>ราคาที่ตัด</center></th>
                                <th ><center>หมายเหตุ</center></th>
                                <th ><center></center></th>
                                <th ><center></center></th>
                                </tr>           
                                </thead>
            <?php
                include "../server.php";
                $id = $_GET["cus"];
                $sql = "SELECT * FROM tudlen where id_cus='$id' order by date_tud desc"; 
                $i = 1;
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $strDate = $result["date_tud"];
            ?>       
                <tr>            
                                <td><center><?php echo $i;?><center></td>
                                <td align="center"><?php echo DateThai($strDate); ?></td>
                                <td>&nbsp;&nbsp;&nbsp;<?php echo $result["r"] ;?></td>
                                <td align="center"><?php echo $result["pdr"] ;?></td>
                                <td>&nbsp;&nbsp;&nbsp;<?php echo $result["l"] ;?></td>
                                <td align="center"><?php echo $result["pdl"] ;?></td>
                                <td align="center"><?php echo $result["id_pro"] ;?></td>
                                <td align="center"><?php echo $result["id_len"] ;?></td>
                                <td align="center"><font color="red"> <?php echo number_format($result["total_price"]) ;?></font></td>
                                <td align="center"><?php echo $result["comment_tud"] ;?></td>
            <td align="center"><a href="edit_history_cus1.php?idtud=<?php echo $result["id_tud"];?>&&idcus=<?php echo $result["id_cus"];?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
            <td align="center"><a href="del_history_cus.php?idtud1=<?php echo $result["id_tud"];?>&&idcus1=<?php echo $id;?>&&namecus1=<?php echo $_GET['namecus'];?>" onClick="return confirm('ยืนยันการลบข้อมูล')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
            
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
<?php }else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
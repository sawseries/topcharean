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
                        <li><a href="#"><i class="fa fa-dashboard"></i>ออกบิล</a></li>
                        <li><a href="#">การสั่งซื้อ</a></li>
                    </ol>
                </section>
              <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <label>&nbsp;&nbsp;ออกบิลการสั่งซื้อสินค้า</label>
                            <div class="box">
                                <br>
                                 <th width="150" colspan="3" ><a
                                href="sale_newcus.php"><button type="button" class="btn btn-danger">ออกบิลการสั่งซื้อลูกค้าใหม่</button></a></th>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    
                                <th><center>ลำดับ</center></th>
                                <th><center>ชื่อลูกค้า</center></th>
                                <th><center>อายุ</center></th>
                                <th><center>ชื่อบริษัท / ร้านค้า</center></th>
                                <th><center>เบอร์โทรศัพท์</center></th>
                                <th ><center></center></th>
                                
                               
     
                               
                                </tr>           
                                </thead>
            <?php
                include "../server.php";
                $sql = "SELECT * FROM customer order by name_cus asc"; 
                $i = 1;
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
            ?>       
                <tr>            
                                <td><center><?php echo $i;?><center></td>
                                <td>&nbsp;&nbsp;&nbsp;<?php echo $result["name_cus"]; ?></td>
                                <td align="center"><?php echo $result["age"] ;?></td>
                                <td>&nbsp;&nbsp;&nbsp;<?php echo $result["company"] ;?></td>
                                <td align="center"><?php echo str_replace(",", "<br>", $result["tel"]); ?></td>
            <td align="center"><a href="sale.php?cus=<?php echo $result["id_cus"];?>&&namecus=<?php echo $result["name_cus"];?>"><button type="button" class="btn btn-success">เลือก</button></a></td>
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

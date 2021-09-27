<?php

  error_reporting(0);  
  include "../../../server.php";
  $abc=$_GET["user11"];
	 $sql99 = "SELECT * FROM members where user_name = '$abc'";
	 $query99 = mysqli_query($objCon,$sql99);
  while($result99=mysqli_fetch_array($query99,MYSQLI_ASSOC))
  { 
	  $name = $result99["memb_name"];
	  $lname = $result99["memb_lastname"];
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Clinic</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>
         <!-- DATA TABLES -->
        <link href="../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php
include "../profile/header.php";
?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/11.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>สวัสดี&nbsp&nbspคุณ<?php echo $name123; ?><br><center><small> <?php echo $positionname123; ?> </small></center></br></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="../../index.php">
                                <i class="fa fa-dashboard"></i> <span>หน้าแรก</span>
                            </a>
                        </li>
                        <li  >
                            <a href="../profile/profile_admin.php">
                                <i class="fa fa-folder"></i> <span>ประวัติส่วนตัว</span>
                            </a>
                        </li>
                        <li>
                            <a href="../service/service.php">
                                <i class="fa fa-plus-circle"></i> <span>การรักษา</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../service/prescribing.php">
                                <i class="fa fa-inbox"></i> <span>การสั่งจ่ายยาผู้ป่วย</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../service/app.php">
                                <i class="fa fa-clock-o"></i> <span>การนัดหมายผู้ป่วย</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../check/check_member.php">
                                <i class="fa fa-th"></i> <span>ตรวจสอบข้อมูลผู้ป่วย</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>จัดการข้อมูล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/employees.php"><i class="fa fa-angle-double-right"></i>ผู้ใช้</a></li>
                                <li><a href="../charts/position.php"><i class="fa fa-angle-double-right"></i>ตำแหน่ง</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../appointment/postpone_appdentist.php"><i class="fa fa-angle-double-right"></i>เลื่อนนัดผู้ป่วย</a></li>
                                <li><a href="../appointment/checkapp_dentist.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางทันตแพทย์</a></li>
                                <li class="active"><a href="../../../admin/pages/appointment/checkapp_member.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางผู้ป่วย</a></li>
                            </ul>
                        </li>
                        <li class="treeview ">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>รายงาน</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../report/report_members.php"><i class="fa fa-angle-double-right"></i>สรุปผู้ป่วยที่เข้ามารักษา</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../../logout.php">
                                <i class="fa fa-laptop"></i> <span>ออกจากระบบ</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        
            </aside>

            </aside>

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
                        <li class="active">ผู้ป่วยตามนัด</li>
                    </ol>
                </section>
                
                            <!-- split buttons box -->
              <!-- general form elements -->
             

           <!-- <?php
                include "../../../server.php";
                $sql = "SELECT * FROM appointment order by app_id  asc";
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                { $aaa = $result["app_id"];}
                $total=$aaa+1;

            ?>     -->
             
             <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <label>&nbsp;&nbsp;ผู้ป่วยตามนัด</label>
                      <div class="box">
                        <div class="box-header">
                                
                        </div><!-- /.box-header -->

                        <form id="form1" name="form1" class="form-inline" method="post" >
                            <center>
                              <div class="form-group">
                                <label for="exampleInputName2">วันที่ :</label>
                                <input type="date" name="d_s" id="datepicker" width="270" />
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">&nbsp;ถึงวันที่ :&nbsp;</label>
                                <input type="date" name="d_e" id="datepicker2" width="270" />
                            </div>
                            &nbsp;&nbsp;<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> ค้นหา</button></center>
                        </form>

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


                        <div class="box-body table-responsive">
                            <table border="2" class="display table table-bordered" id="example2" align="center"  >
                                
                                <thead>
                                    <tr>

                                        <th><center>ลำดับ</center></th>
                                        <th><center>ชื่อผู้ป่วย<center></th>
                                        <th><center>วันที่นัดหมาย<center></th>
                                        <th><center>เวลานัดหมาย</center></th>
                                        <th><center>เวลาสิ้นสุดการรักษา</center></th>
                                        <th><center>รายละเอียด</center></th>
                                        
                                        
                                    </tr>
                                </thead>

                                <?php 
                                include "../../../server.php"; 
                                $num = 1;
                                    $d_s = $_POST['d_s'];//ตัวแปรวันที่เริ่มต้น
                                    $d_e = $_POST['d_e'];//ตัวแปรวันที่สิ้นสุด


$sql = "SELECT * FROM appointment,members where members.user_name=appointment.user_name
&& app_date BETWEEN '$d_s' AND '$d_e' group BY app_id  ASC " or die("Error:" . mysqli_error()); 
//ประกาศตัวแปร sqli
$query = mysqli_query($objCon,$sql);//ดูชื่อ ตัวแปรในไฟล์ connect ให้ดีว่า conหรือ condb หรืออย่างอื่น
$num2 = mysqli_num_rows($query);
//สร้างตัวแปร $row มารับค่าจากการ fetch array
//วนลูป
 while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)) {  ?>

    <tr>
        <td><center><?php echo $num++; ?><center></td>
        <td><center><?php echo $result["memb_name"];?>&nbsp;&nbsp;&nbsp;
        <?php echo $result["memb_lastname"];?></center></td>
        <td><center><?php echo $result["app_date"];?></center></td>
        <td><center><?php echo $result["app_time"];?></center></td>
        <td><center><?php echo $result["serv_completed"];?></center></td>
        <td><center><?php echo $result["add_detail"];?></center></td>
        

    </tr>
            <?php } mysqli_close($objCon);//ดูชื่อ ตัวแปรในไฟล์ connect ให้ดีว่า conหรือ condb หรืออย่างอื่น
                                    ?>

                                </table>
                            </div><!-- /.box-body -->
                        </div><!-- /.box -->
                    </div>
                </div>
            </section><!-- /.content -->
               


          <!-- jQuery 2.0.2 -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
       
         <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../../js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Eye Station</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris charts -->
        <link href="../../css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
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
        <link href="../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

         <!-- modal -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

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
                            <p>สวัสดีคุณ&nbsp<?php echo $name; ?></br></p>
                        </div>
                    </div>
                    
                    <ul class="sidebar-menu">
                        <li >
                            <a href="../../index.php">
                                <i class="fa fa-dashboard"></i> <span>หน้าแรก</span>
                            </a>
                        </li>
                        <li>
                            <a href="../../pages/profile/profile_admin.php">
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
                        <li class="treeview active ">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>จัดการข้อมูล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active" ><a href="#"><i class="fa fa-angle-double-right"></i>ผู้ใช้</a></li>
                                <li><a href="position.php"><i class="fa fa-angle-double-right"></i>ตำแหน่ง</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../appointment/postpone_appdentist.php"><i class="fa fa-angle-double-right"></i>เลื่อนนัดผู้ป่วย</a></li>
                                <li><a href="../appointment/checkapp_dentist.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางทันตแพทย์</a></li>
                                <li><a href="../../../admin/pages/appointment/checkapp_member.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางผู้ป่วย</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
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
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                        <li class="active">ผู้ใช้</li>
                    </ol>
                </section>
			  <section class="content">
                    <div class="row">
                        <div class="col-xs-12">
                            <label>&nbsp;&nbsp;ข้อมูลผู้ใช้</label>
                            <div class="box">
                                <br>
                                 <th width="150" colspan="3" ><a
                                href="insert_employees.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูล</button></a></th>
                                <div class="box-body table-responsive">
                                    <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                    <tr>
                                    
                                <th><center>ลำดับ<center></th>
                                <th><center>คำนำหน้า<center></th>
                                <th><center>ชื่อ<center></th>
                                <th><center>นามสกุล<center></th>
                                <th><center>เบอร์โทรศัพท์</th>
                                <th><center>ตำแหน่ง<center></th>
                                <th><center><center></th>
                                <th><center></th>
                                <th><center><center></th>    	
                               
                                </tr>           
                                </thead>
            <?php
              	include "../../../server.php";
                $sql = "SELECT * FROM personnal,title,position WHERE title.title_id=personnal.title_id && position.
                position_id=personnal.position_id order by personnal.position_id ASC "; 
                $i = 1;
   	            $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
            ?>       
                <tr>            
                                <td><center><?php echo $i;?><center></td>
                                <td><?php echo $result["title_name"];?></td>
                                <td><?php echo $result["name"];?></td>
                                <td><?php echo $result["lastname"];?></td>
                                <td><?php echo $result["tel"];?></td>
                                <td><?php echo $result["position_name"];?></td>
                                 
                                 <td align="center">
                <button type="button" class="btn btn-success" data-toggle="modal" 
    data-target="#myModal<?php echo $result['user_name'];?>"> เปิดดู</button>
            </td>
    <?php 
        include ("../modal_data/emp_modal.php");
    ?>
            
            <td align="center"><a href="edit_employees.php?user11=<?php echo $result["user_name"];?>"><button type="button" class="btn btn-warning">แก้ไข</button></a></td>
            <td align="center"><a href="delete_employees.php?user11=<?php echo $result["user_name"];?>" 
            onClick="return confirm('ยืนยันการลบข้อมูล')"><button type="button" class="btn btn-danger">ลบ</button></a></td>
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
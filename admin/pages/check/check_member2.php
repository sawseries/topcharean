<?php

    include "../../../server.php";

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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

         <!-- DATA TABLES -->
        <link href="../../css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

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
                        <li >
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
                        <li class="treeview active" >
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
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active" ><a href="../appointment/postpone_appdentist.php"><i class="fa fa-angle-double-right"></i>เลื่อนนัดผู้ป่วย</a></li>
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

            </aside>
            
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>ตรวจสอบ</a></li>
                        <li class="active">ข้อมูลผู้ป่วย</li>
                    </ol>
                </section>
                </section>
                            <!-- split buttons box -->
              <!-- general form elements -->
              <div class="col-md-12">
              <div class="modal-content" >
              <div class="box box-primary">
              <div class="box-header">
              <meta http-equiv=Content-Type content="text/html; charset=windows-874">

              <?php
	            $user999 = $_GET["user11"];
	            include "../../../server.php";
            	$sql = "SELECT * FROM members,login,title where login.user_name = members.user_name 
                && title.title_id = members.title_id && members.user_name = '$user999'";
   	            $query = mysqli_query($objCon,$sql);
	            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $user123 = $result["user_name"];
                $pass123 = $result["password"];
	            $titlename123 = $result["title_name"];
	            $name123 = $result["memb_name"];
                $lastname123 = $result["memb_lastname"];   
	            $age123 = $result["memb_age"];
	            $blood123 = $result["memb_blood"];
                $idcard123 = $result["memb_id_card"]; 
                $birth123 = $result["memb_birth"];    
                $address123 = $result["memb_address"]; 
                $tel123 = $result["memb_tel"];  
                $diseased123 = $result["memb_diseased"];
                $drugallergy123 = $result["memb_drug_allergy"];
                }
              ?>   
                                
                                <form role="form">
                                    <div class="box-body">
                                    <section class="content-header">
                                    <label>&nbsp;&nbsp;ประวัติส่วนตัว</label>
                                        </section>
                                        <br>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="user_name">Username</label>
                                            <input type="text" class="form-control" name="txtUser" 
                                            value="<?php echo $user123;  ?>" readonly="1">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="Password">Password</label>
                                            <input type="Password" class="form-control" name="txtPass" 
                                            value="<?php echo $user123;  ?>" readonly="2">
                                        </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                            <label for="title">คำนำหน้า</label>
                                            <input type="text" class="form-control" name="txtTitle" 
                                            value="<?php echo $titlename123;  ?>" readonly="2">
	                                    </td>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="memb_name">ชื่อ</label>
                                            <input type="text" class="form-control" name="txtName"
                                            value="<?php echo $name123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="memb_lastname">นามสกุล</label>
                                            <input type="text" class="form-control" name="txtLast" 
                                            value="<?php echo $lastname123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="memb_age">อายุ</label>
                                            <input type="text" class="form-control" name="txtAge"
                                            value="<?php echo $age123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="memb_blood">กรุ๊ปเลือด</label>
                                            <input type="text" class="form-control" name="txtBlood"
                                            value="<?php echo $blood123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="memb_id_card">เลขบัตรประชาชน</label>
                                            <input type="" class="form-control" name="txtIdcard"
                                            value="<?php echo $idcard123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="memb_birth">วันเดือนปีเกิด</label>
                                            <input type="text" class="form-control" name="txtBirth" 
                                            value="<?php echo $birth123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="memb_address">ที่อยู่</label>
                                            <textarea type="text" class="form-control" name="txtAdd"
                                            value="<?php echo $address123;  ?>" readonly="2" ></textarea>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="memb_tel">เบอร์โทรศัพท์</label>
                                            <input type="" class="form-control" name="txtTel" 
                                            value="<?php echo $tel123;  ?>" readonly="2">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="memb_diseased">โรคประจำตัว</label>
                                            <input type="text" class="form-control" name="txtDiseased"
                                            value="<?php echo $diseased123;  ?>" readonly="2" >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="memb_drug_allergy">แพ้ยา</label>
                                            <input type="text" class="form-control" name="txtDrugallergy"
                                            value="<?php echo $drugallergy123;  ?>" readonly="2">
                                        </div>

                     
                    </div>
                    </div>
                    </div> 
                    </form>
                    </div> 
                    </div> 

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
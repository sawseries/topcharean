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
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../../index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin Clinic
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar2.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../../img/avatar.png" class="img-circle" alt="user image"/>
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users warning"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-cart success"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-person danger"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin Clinic <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../img/11.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        My Clinic
                                    </p>
                                </li>
                                
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="../../../../logout.php" class="btn btn-default btn-flat">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
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
                            <p>Hello Admin</p>
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
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>จัดการข้อมูล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../pages/charts/employees.php"><i class="fa fa-angle-double-right"></i>ทันตแพทย์</a></li>
                                <li><a href="../../pages/charts/dentist/dentist.php"><i class="fa fa-angle-double-right"></i>พนักงาน</a></li>
                            </ul>
                        </li>
                        <li  >
                            <a href="../check/check_member.php">
                                <i class="fa fa-th"></i> <span>ตรวจสอบข้อมูลผู้ป่วย</span>
                            </a>
                        </li>
                        <li class="active" >
                            <a href="service.php">
                                <i class="fa fa-table"></i> <span>การรักษา</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../report/report_members.php"><i class="fa fa-angle-double-right"></i>สรุปผู้ป่วยที่เข้ามารักษา</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>รายงาน</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/group_drugs/drugs_type/drugs_type.php"><i class="fa fa-angle-double-right"></i>สรุปผู้ป่วยที่เข้ามารักษา</a></li>
                                <li><a href="pages/group_drugs/drugs/drugs.php"><i class="fa fa-angle-double-right"></i>การรักษาประจำวันเดือนปี</a></li>
                                <li><a href="pages/group_drugs/drugs/drugs.php"><i class="fa fa-angle-double-right"></i>สรุปยอดเงินการรักษาประจำวันเดือนปี</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../logout.php">
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
                        <li><a href="#"><i class="fa fa-dashboard"></i>การรักษา</a></li>
                        <li class="active">ตรวจสอบ</li>
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
              <form action="insert_dentist2.php" name="frmAdd" method="post"> 
                            
                                
                                <form role="form">
                                    <div class="box-body">
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="serv_id">รหัสการตรวจรักษา</label>
                                            <input type="text" class="form-control" name="txtDrugsId" placeholder=รหัสการตรวจรักษา>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="user_name">ชื่อผู้ใช้</label>
                                            <input type="text" class="form-control" name="txtDrugsNameEng" placeholder=ชื่อผู้ใช้ >
                                        </div>
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="treat_name">ประเภทการตรวจรักษา</label>
                                            <td><select type="text" class="form-control" name="txtTreatName">
												<option value="">เลือกชื่อประเภทการตรวจรักษา</option>
												<?php
												include "../../../../server.php";
												$strSQL = "SELECT * FROM treatment_type ORDER BY treat_id ASC";
												$objQuery = mysqli_query($objCon,$strSQL);
												while($objResuut = mysqli_fetch_array($objQuery))
												{
												?>
												<option value="<?php echo $objResuut["treat_id"];?>"><?php echo $objResuut["treat_name"];?></option>
												<?php
												}
												?>
		  									</select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="serv_date">วันที่ตรวจรักษา</label>
                                            <input type="date" class="form-control" name="txtServDate" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="serv_start">เวลาเริ่มการรักษา</label>
                                            <input type="time" class="form-control" name="txtsevrStart" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="serv_completed">เวลาสิ้นสุดการรักษา</label>
                                            <input type="time" class="form-control" name="txtServCompleted" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="serv_detail">รายละเอียดการตรวจรักษา</label>
                                            <textarea type="text" class="form-control" name="txtSevrDetail" placeholder=รายละเอียดการตรวจรักษา ></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="serv_weigth">น้ำหนัก</label>
                                            <input type="text" class="form-control" name="txtServWeigth" placeholder=น้ำหนัก >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="serv_ph">ความดันโลหิต</label>
                                            <input type="text" class="form-control" name="txtServPh" placeholder=ความดันโลหิต >
                                        </div>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">เสร็จสิ้น</button>
                                        </div> 
                                    </div> 
                                </form>
                                </div> 
                                    </div> 
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Clinic</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
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
            <a href="../../../index.php" class="logo">
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
                                    <img src="../../../img/11.jpg" class="img-circle" alt="User Image" />
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
                            <img src="../../../img/11.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello Admin</p>
                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li>
                            <a href="../../../index.php">
                                <i class="fa fa-dashboard"></i> <span>หน้าแรก</span>
                            </a>
                        </li>
                       <!-- <li>
                            <a href="../widgets.php">
                                <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                            </a>
                        </li>-->
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>จัดการข้อมูล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../employees.php"><i class="fa fa-angle-double-right"></i>พนักงาน</a></li>
                                <li><a href="../dentist/dentist.php"><i class="fa fa-angle-double-right"></i>ทันตแพทย์</a></li>
                                <li class="active"><a href="members.php"><i class="fa fa-angle-double-right"></i>สมาชิก</a></li> 
                            </ul>
                        </li>
                        <li>
                            <a href="../../../pages/treatment_type/treatment_type.php">
                                <i class="fa fa-th"></i> <span>ประเภทการรักษา</span> <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../../service/service.php">
                                <i class="fa fa-table"></i> <span>การรักษา</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>ยาเวชภัณฑ์</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../../pages/group_drugs/drugs_type/drugs_type.php"><i class="fa fa-angle-double-right"></i>ข้อมูลประเภทยาเวชภัณฑ์</a></li>
                                <li><a href="../../../pages/group_drugs/drugs/drugs.php"><i class="fa fa-angle-double-right"></i>ข้อมูลยาเวชภัณฑ์</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>วัสดุ</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../../pages/group_material/material_type/material_type.php"><i class="fa fa-angle-double-right"></i>ข้อมูลประเภทวัสดุ</a></li>
                                <li><a href="../../../pages/group_material/material/material.php"><i class="fa fa-angle-double-right"></i>ข้อมูลวัสดุ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../../pages/appointment/appointment.php">
                                <i class="fa fa-table"></i> <span>นัดหมาย</span> <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <!--<li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../UI/general.php"><i class="fa fa-angle-double-right"></i> General</a></li>
                                <li><a href="../../UI/icons.php"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                                <li><a href="../../UI/buttons.php"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                                <li><a href="../../UI/sliders.php"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                                <li><a href="../../UI/timeline.php"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../forms/general.php"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                                <li><a href="../../forms/advanced.php"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                                <li><a href="../../forms/editors.php"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../tables/simple.php"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                                <li><a href="../../tables/data.php"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <small class="badge pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="../../mailbox.php">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Examples</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../../examples/invoice.php"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                                <li><a href="../../examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                                <li><a href="../../examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                                <li><a href="../../examples/lockscreen.php"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                                <li><a href="../../examples/404.php"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                                <li><a href="../../examples/500.php"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                                <li><a href="../../examples/blank.php"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                        <li><a href="#">สมาชิก</a></li>
                        <li class="active">แก้ไข</li>
                    </ol>
                </section>
                </section>
               
              <!-- general form elements -->
           
              <div class="col-md-12">
              <div class="modal-content" >
              <div class="box box-primary">
              <div class="box-header">
              <meta http-equiv=Content-Type content="text/html; charset=windows-874">
              <form action="edit_members2.php" name="frmAdd" method="post"> 
              <div class="box-body"
              <?php
	            $user999 = $_GET["user11"];
	            include "../../../../server.php";
            	$sql = "SELECT * FROM members,login where login.user_name = members.user_name && members.user_name = '$user999'";
   	            $query = mysqli_query($objCon,$sql);
	            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $user123 = $result["user_name"];
                $pass123 = $result["password"];
	            $title123 = $result["title"];
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
                                    <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                            <label for="user_name">Username</label>
                                            <input type="text" class="form-control" name="txtUser"
                                            value="<?php echo $user123;  ?>" readonly="2" >
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="txtPass" 
                                            value="<?php echo $pass123;  ?>" >
                                        </div>
                                    </div>
                                        <div class="form-group col-md-2 ">
                                            <label for="title">คำนำหน้า</label>
                                            <select type="text" class="form-control" name="txtTitle" id="txtTitle">
                                            <?php
		                                    $sql9="select * from title_name";
		                                    $result9=mysqli_query($objCon,$sql9);
		                                    while($row9=mysqli_fetch_array($result9,MYSQLI_ASSOC))
			                                if($row9[name_title]==$title123){
				                            echo "<option value='$row9[name_title]' selected>$row9[name_title]</option>";
		                                    }elseif($row9[name_title]!=$title123 ){
				                            echo "<option value='$row9[name_title]' >$row9[name_title]</option>";
		                                    }
		                                    ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-5 ">
                                            <label for="memb_name">ชื่อ</label>
                                            <input type="text" class="form-control" name="txtName" 
                                            value="<?php echo $name123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-5 ">
                                            <label for="memb_lastname">นามสกุล</label>
                                            <input type="text" class="form-control" name="txtLast" 
                                            value="<?php echo $lastname123;  ?>">
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="memb_age">อายุ</label>
                                            <input type="text" class="form-control" name="txtAge" 
                                            value="<?php echo $age123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="memb_blood">กรุ๊ปเลือด</label>
                                            <input type="text" class="form-control" name="txtBlood" 
                                            value="<?php echo $blood123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="memb_id_card">เลขบัตรประชาชน</label>
                                            <input type="text" class="form-control" name="txtIdCard" 
                                            value="<?php echo $idcard123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="memb_birth">วัน/เดือน/ปีเกิด</label>
                                            <input type="date" class="form-control" name="txtBirth" 
                                            value="<?php echo $birth123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="memb_address">ที่อยู่</label>
                                            <input type="text" class="form-control" name="txtAdd" 
                                            value="<?php echo $address123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="memb_tel">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" name="txtTel" 
                                            value="<?php echo $tel123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-6 ">
                                            <label for="memb_diseased">โรคประจำตัว</label>
                                            <input type="text" class="form-control" name="txtDiseased" 
                                            value="<?php echo $diseased123;  ?>" >
                                        </div>
                                        <div class="form-group col-md-12 ">
                                            <label for="memb_drug_allergy">แพ้ยา</label>
                                            <input type="text" class="form-control" name="txtDrugAllergy" 
                                            value="<?php echo $drugallergy123;  ?>" >
                                        </div>
                                        </div>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">เสร็จสิ้น</button>
                                        </div>
                                        </div>
                                        </div>

                                </form>
                            </div><!-- /.box -->
                            

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- FLOT CHARTS -->
        <script src="../../../js/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
        <script src="../../../js/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <!-- FLOT PIE PLUGIN - also used to draw donut charts -->
        <script src="../../../js/plugins/flot/jquery.flot.pie.min.js" type="text/javascript"></script>
        <!-- FLOT CATEGORIES PLUGIN - Used to draw bar charts -->
        <script src="../../../js/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>

        <!-- Page script -->
        <script type="text/javascript">

            $(function() {

                /*
                 * Flot Interactive Chart
                 * -----------------------
                 */
                // We use an inline data source in the example, usually data would
                // be fetched from a server
                var data = [], totalPoints = 100;
                function getRandomData() {

                    if (data.length > 0)
                        data = data.slice(1);

                    // Do a random walk
                    while (data.length < totalPoints) {

                        var prev = data.length > 0 ? data[data.length - 1] : 50,
                                y = prev + Math.random() * 10 - 5;

                        if (y < 0) {
                            y = 0;
                        } else if (y > 100) {
                            y = 100;
                        }

                        data.push(y);
                    }

                    // Zip the generated y values with the x values
                    var res = [];
                    for (var i = 0; i < data.length; ++i) {
                        res.push([i, data[i]]);
                    }

                    return res;
                }

                var interactive_plot = $.plot("#interactive", [getRandomData()], {
                    grid: {
                        borderColor: "#f3f3f3",
                        borderWidth: 1,
                        tickColor: "#f3f3f3"
                    },
                    series: {
                        shadowSize: 0, // Drawing is faster without shadows
                        color: "#3c8dbc"
                    },
                    lines: {
                        fill: true, //Converts the line chart to area chart
                        color: "#3c8dbc"
                    },
                    yaxis: {
                        min: 0,
                        max: 100,
                        show: true
                    },
                    xaxis: {
                        show: true
                    }
                });

                var updateInterval = 500; //Fetch data ever x milliseconds
                var realtime = "on"; //If == to on then fetch data every x seconds. else stop fetching
                function update() {

                    interactive_plot.setData([getRandomData()]);

                    // Since the axes don't change, we don't need to call plot.setupGrid()
                    interactive_plot.draw();
                    if (realtime === "on")
                        setTimeout(update, updateInterval);
                }

                //INITIALIZE REALTIME DATA FETCHING
                if (realtime === "on") {
                    update();
                }
                //REALTIME TOGGLE
                $("#realtime .btn").click(function() {
                    if ($(this).data("toggle") === "on") {
                        realtime = "on";
                    }
                    else {
                        realtime = "off";
                    }
                    update();
                });
                /*
                 * END INTERACTIVE CHART
                 */


                /*
                 * LINE CHART
                 * ----------
                 */
                //LINE randomly generated data

                var sin = [], cos = [];
                for (var i = 0; i < 14; i += 0.5) {
                    sin.push([i, Math.sin(i)]);
                    cos.push([i, Math.cos(i)]);
                }
                var line_data1 = {
                    data: sin,
                    color: "#3c8dbc"
                };
                var line_data2 = {
                    data: cos,
                    color: "#00c0ef"
                };
                $.plot("#line-chart", [line_data1, line_data2], {
                    grid: {
                        hoverable: true,
                        borderColor: "#f3f3f3",
                        borderWidth: 1,
                        tickColor: "#f3f3f3"
                    },
                    series: {
                        shadowSize: 0,
                        lines: {
                            show: true
                        },
                        points: {
                            show: true
                        }
                    },
                    lines: {
                        fill: false,
                        color: ["#3c8dbc", "#f56954"]
                    },
                    yaxis: {
                        show: true,
                    },
                    xaxis: {
                        show: true
                    }
                });
                //Initialize tooltip on hover
                $("<div class='tooltip-inner' id='line-chart-tooltip'></div>").css({
                    position: "absolute",
                    display: "none",
                    opacity: 0.8
                }).appendTo("body");
                $("#line-chart").bind("plothover", function(event, pos, item) {

                    if (item) {
                        var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                        $("#line-chart-tooltip").html(item.series.label + " of " + x + " = " + y)
                                .css({top: item.pageY + 5, left: item.pageX + 5})
                                .fadeIn(200);
                    } else {
                        $("#line-chart-tooltip").hide();
                    }

                });
                /* END LINE CHART */

                /*
                 * FULL WIDTH STATIC AREA CHART   
                 * -----------------               
                 */
                var areaData = [[2, 88.0], [3, 93.3], [4, 102.0], [5, 108.5], [6, 115.7], [7, 115.6],
                    [8, 124.6], [9, 130.3], [10, 134.3], [11, 141.4], [12, 146.5], [13, 151.7], [14, 159.9],
                    [15, 165.4], [16, 167.8], [17, 168.7], [18, 169.5], [19, 168.0]];
                $.plot("#area-chart", [areaData], {
                    grid: {
                        borderWidth: 0
                    },
                    series: {
                        shadowSize: 0, // Drawing is faster without shadows
                        color: "#00c0ef"
                    },
                    lines: {
                        fill: true //Converts the line chart to area chart                        
                    },
                    yaxis: {
                        show: false
                    },
                    xaxis: {
                        show: false
                    }
                });

                /* END AREA CHART */

                /*
                 * BAR CHART
                 * ---------                 
                 */

                var bar_data = {
                    data: [["January", 10], ["February", 8], ["March", 4], ["April", 13], ["May", 17], ["June", 9]],
                    color: "#3c8dbc"
                };
                $.plot("#bar-chart", [bar_data], {
                    grid: {
                        borderWidth: 1,
                        borderColor: "#f3f3f3",
                        tickColor: "#f3f3f3"
                    },
                    series: {
                        bars: {
                            show: true,
                            barWidth: 0.5,
                            align: "center"
                        }
                    },
                    xaxis: {
                        mode: "categories",
                        tickLength: 0
                    }
                });
                /* END BAR CHART */

                /*
                 * DONUT CHART
                 * -----------
                 */

                var donutData = [
                    {label: "Series2", data: 30, color: "#3c8dbc"},
                    {label: "Series3", data: 20, color: "#0073b7"},
                    {label: "Series4", data: 50, color: "#00c0ef"}
                ];
                $.plot("#donut-chart", donutData, {
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            innerRadius: 0.5,
                            label: {
                                show: true,
                                radius: 2 / 3,
                                formatter: labelFormatter,
                                threshold: 0.1
                            }

                        }
                    },
                    legend: {
                        show: false
                    }
                });
                /*
                 * END DONUT CHART
                 */

            });

            /*
             * Custom Label formatter
             * ----------------------
             */
            function labelFormatter(label, series) {
                return "<div style='font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;'>"
                        + label
                        + "<br/>"
                        + Math.round(series.percent) + "%</div>";
            }
        </script>
    </body>
</html>
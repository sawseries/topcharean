
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Cilnic</title>
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
                                <li class="active" ><a href="employees.php"><i class="fa fa-angle-double-right"></i>ผู้ใช้</a></li>
                                <li ><a href="position.php"><i class="fa fa-angle-double-right"></i>ตำแหน่ง</a></li>
                                
                            </ul>
                        </li>
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
                            <a href="../logout.php">
                                <i class="fa fa-laptop"></i> <span>ออกจากระบบ</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                </aside>
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                        <li><a href="#">พนักงาน</a></li>
                        <li class="active">เพิ่มข้อมูล</li>
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
              <form action="insert_employees2.php" name="frmAdd" method="post"> 
                            
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-row">
                                        <div class="form-group col-md-6 ">
                                            <label for="user_name">Username</label>
                                            <input type="text" class="form-control" name="txtUser" placeholder=Username required>
                                        </div> 
                                        <div class="form-group col-md-6 ">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="txtPass" placeholder=Password required>
                                        </div>
                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="exampleInputId_title1">คำนำหน้า</label>
                                                <select type="text" name="txtTitleId" class="form-control" required>
                                                <option value="0">เลือกคำนำหน้า</option>
                                                    <?php
                                                    include "../../../server.php";
                                                    $strSQL = "SELECT * FROM title ";
                                                    $objQuery = mysqli_query($objCon,$strSQL);
                                                    while($objResuut = mysqli_fetch_array($objQuery))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $objResuut["title_id"];?>"><?php echo $objResuut["title_name"];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                        </div>
                                        <div class="form-group col-md-5 "> 
                                            <label for="name">ชื่อ</label>
                                            <input type="text" class="form-control" name="txtName" placeholder=ชื่อ required>
                                        </div>
                                       
                                        <div class="form-group col-md-5 ">                                
                                            <label for="lastname">นามสกุล</label>
                                            <input type="text" class="form-control" name="txtLast" placeholder=นามสกุล required>
                                        </div>
                                        <div class="form-group col-md-12"> 
                                            <label for="address">ที่อยู่</label>
                                            <textarea type="text" class="form-control" name="txtAdd" placeholder=ที่อยู่ required></textarea>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="tel">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" name="txtTel" onKeyUp="if(isNaN(this.value))
                                            { alert('กรุณากรอกเบอร์โทรศัพท์ของคุณ'); this.value='';} "placeholder=xxx-xxxx-xxx
                                            onKeyUp="if(this.value*1!=this.value) this.value='' ;" minlength="10" maxlength="10" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="id_card">เลขบัตรประชาชน</label>
                                            <input type="text" class="form-control" name="txtIdCard" onKeyUp="if(isNaN(this.value))
                                            { alert('กรุณากรอกเลขบัตรประชาชนของคุณ'); this.value='';} "placeholder=กรอกเลขบัตรประชาชน 13 หลัก
                                            onKeyUp="if(this.value*1!=this.value) this.value='' ;" minlength="13" maxlength="13" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="age">อายุ</label>
                                            <input type="text" class="form-control" name="txtAge" placeholder=อายุ required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">e-mail</label>
                                            <input type="email" class="form-control" name="txtEmail" placeholder=e-mail required>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="exampleInputId_title1">ประเภทตำแหน่ง</label>
                                                <select type="text" name="txtPositionId" class="form-control">
                                                <option value="0">เลือกประเภทตำแหน่ง</option>
                                                    <?php
                                                    include "../../../server.php";
                                                    $strSQL = "SELECT * FROM position  ";
                                                    $objQuery = mysqli_query($objCon,$strSQL);
                                                    while($objResuut = mysqli_fetch_array($objQuery))
                                                    {
                                                    ?>
                                                    <option value="<?php echo $objResuut["position_id"];?>" required><?php echo $objResuut["position_name"];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                        </div>
                                        
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">เสร็จสิ้น</button>
                                        </div> 
                                    </div> 
                                </form>
                                </div> 
                            


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../../js/plugins/morris/morris.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                "use strict";

                // AREA CHART
                var area = new Morris.Area({
                    element: 'revenue-chart',
                    resize: true,
                    data: [
                        {y: '2011 Q1', item1: 2666, item2: 2666},
                        {y: '2011 Q2', item1: 2778, item2: 2294},
                        {y: '2011 Q3', item1: 4912, item2: 1969},
                        {y: '2011 Q4', item1: 3767, item2: 3597},
                        {y: '2012 Q1', item1: 6810, item2: 1914},
                        {y: '2012 Q2', item1: 5670, item2: 4293},
                        {y: '2012 Q3', item1: 4820, item2: 3795},
                        {y: '2012 Q4', item1: 15073, item2: 5967},
                        {y: '2013 Q1', item1: 10687, item2: 4460},
                        {y: '2013 Q2', item1: 8432, item2: 5713}
                    ],
                    xkey: 'y',
                    ykeys: ['item1', 'item2'],
                    labels: ['Item 1', 'Item 2'],
                    lineColors: ['#a0d0e0', '#3c8dbc'],
                    hideHover: 'auto'
                });

                // LINE CHART
                var line = new Morris.Line({
                    element: 'line-chart',
                    resize: true,
                    data: [
                        {y: '2011 Q1', item1: 2666},
                        {y: '2011 Q2', item1: 2778},
                        {y: '2011 Q3', item1: 4912},
                        {y: '2011 Q4', item1: 3767},
                        {y: '2012 Q1', item1: 6810},
                        {y: '2012 Q2', item1: 5670},
                        {y: '2012 Q3', item1: 4820},
                        {y: '2012 Q4', item1: 15073},
                        {y: '2013 Q1', item1: 10687},
                        {y: '2013 Q2', item1: 8432}
                    ],
                    xkey: 'y',
                    ykeys: ['item1'],
                    labels: ['Item 1'],
                    lineColors: ['#3c8dbc'],
                    hideHover: 'auto'
                });

                //DONUT CHART
                var donut = new Morris.Donut({
                    element: 'sales-chart',
                    resize: true,
                    colors: ["#3c8dbc", "#f56954", "#00a65a"],
                    data: [
                        {label: "Download Sales", value: 12},
                        {label: "In-Store Sales", value: 30},
                        {label: "Mail-Order Sales", value: 20}
                    ],
                    hideHover: 'auto'
                });
                //BAR CHART
                var bar = new Morris.Bar({
                    element: 'bar-chart',
                    resize: true,
                    data: [
                        {y: '2006', a: 100, b: 90},
                        {y: '2007', a: 75, b: 65},
                        {y: '2008', a: 50, b: 40},
                        {y: '2009', a: 75, b: 65},
                        {y: '2010', a: 50, b: 40},
                        {y: '2011', a: 75, b: 65},
                        {y: '2012', a: 100, b: 90}
                    ],
                    barColors: ['#00a65a', '#f56954'],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['CPU', 'DISK'],
                    hideHover: 'auto'
                });
            });
        </script>

    </body>
</html>
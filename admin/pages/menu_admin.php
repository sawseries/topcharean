<body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        
<?php
include "../header.php";
?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/11.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>สวัสดีคุณ&nbsp<?php echo $name; ?></br></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>หน้าแรก</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/profile/profile_admin.php">
                                <i class="fa fa-folder"></i> <span>ข้อมูลส่วนตัว</span>
                            </a>
                        </li>
                        <li>
                            <a href="pages/service/service.php">
                                <i class="fa fa-plus-circle"></i> <span>การรักษา</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/check/check_member.php">
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
                                <li><a href="pages/charts/employees.php"><i class="fa fa-angle-double-right"></i>ผู้ใช้</a></li>
                                <li><a href="pages/charts/position.php"><i class="fa fa-angle-double-right"></i>ตำแหน่ง</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/appointment/postpone_appdentist.php"><i class="fa fa-angle-double-right"></i>เลื่อนนัดผู้ป่วย</a></li>
                                <li><a href="pages/appointment/checkapp_dentist.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางทันตแพทย์</a></li>
                                <li><a href="pages/appointment/checkapp_member.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางผู้ป่วย</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>รายงาน</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/group_drugs/drugs_type/drugs_type.php"><i class="fa fa-angle-double-right"></i>ผู้ป่วยที่เข้ามารักษา</a></li>
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
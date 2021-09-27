<style type="text/css">
    body { font-family: 'Athiti', sans-serif;
           font-family: 'Kanit', sans-serif; }
    </style>
    <div class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/eye.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>สวัสดีคุณ <?php echo $name; ?> </br></p>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">

            <?php if ($_SESSION['level'] == '1') { ?>

                <li class="active">
                    <a href="index.php">
                        <i class="fa fa-home"></i> <span>หน้าแรก</span>
                    </a>
                </li>
            <?php } ?>
            <?php if (($_SESSION['level'] == '1') || ($_SESSION['level'] == '2')) { ?>
                <li>
                    <a href="customer.php">
                        <i class="fa fa-user"></i> <span>ข้อมูลลูกค้า</span>
                    </a>
                </li>
            <?php } ?>
            <?php if ($_SESSION['level'] == '1') { ?>
                <li>
                    <a href="employee.php">
                        <i class="fa fa-arrow-circle-o-right"></i> <span>ข้อมูลพนักงาน</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>เงินเดือน</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="salary.php"><i class="fa fa-angle-double-right"></i>เบิกเงินล่วงหน้า</a></li>
                        <li><a href="salary_month.php"><i class="fa fa-angle-double-right"></i>สรุปยอดเงินเดือน</a></li>
                    </ul>
                </li>
                <li>
                    <a href="stock.php">
                        <i class="fa fa-envelope-o"></i> <span>คลังสินค้า</span>
                    </a>
                </li>
                <li>
                    <a href="report_sale.php">
                        <i class="fa fa-bar-chart-o"></i> <span>รายงานยอดขาย</span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i>
                        <span>จัดการข้อมูล</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="len.php"><i class="fa fa-angle-double-right"></i>เลนส์</a></li>
                        <li><a href="frame.php"><i class="fa fa-angle-double-right"></i>กรอบ</a></li>
                        <li><a href="profile.php"><i class="fa fa-angle-double-right"></i>ข้อมูลส่วนตัว</a></li>
                    </ul>
                </li>
            <?php } ?> 
            <?php if (($_SESSION['level'] == '1') || ($_SESSION['level'] == '2')) { ?>
                <li>
                    <a href="select_sale.php">
                        <i class="fa fa-shopping-cart"></i> <span>ออกบิลขายสินค้า</span>
                    </a>
                </li>

                <li>
                    <a href="select_recive.php">
                        <i class="fa fa-credit-card"></i> <span>รับสินค้า</span>
                    </a>
                </li>           
                <li>
                    <a href="https://sms2.911itwist.com/htdocs/Login.html" target="blank">
                        <i class="fa fa-envelope-o"></i> <span>ส่ง SMS</span>
                    </a>
                </li>
            <?php } ?> 

            <li>
                <a href="../logout.php">
                    <i class="fa fa-laptop"></i> <span>ออกจากระบบ</span> 
                    <small class="badge pull-right bg-green"></small>
                </a>
            </li>
            </div>
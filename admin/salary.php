<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH."/controller/salary/salary.php";

if ($_SESSION['level'] == '1') {
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>

    <style>

        .menu_bar {
            width: 100%;
            background-color: #555;
            overflow: auto;
            text-align: right;
        }

        .menu_bar a {
            float: left;
            padding: 12px;
            color: white;
            text-decoration: none;
            font-size: 17px;
        }

        .menu_bar a:hover {
            background-color: #000;
        }

        .menu_bar .active {
            background-color: #04AA6D;
        }

        @media screen and (max-width: 500px) {
            .menu_bar a {
                float: none;
                display: block;
            }
        }
    </style>
    <?php include "header.php"; ?>

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php include "menu.php"; ?>
        <aside class="right-side">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                    <li class="active">จ่ายเงินเดือน</li>
                </ol>
            </section>
            <section class="content">
                <div class="block" style="height:auto;">
                    <form method="post" action='./salary.php'>
                        <input type="hidden" name="search" value="1">
                     
                            <div style="width:50%;float: left;">
                                <b><span class="s_blue">สรุปข้อมูลเงินเดือนประจำเดือน <?= $this_month_thai; ?> <?= $this_year_thai; ?></span> </b> 
                            </div>
                            <div style="width:50%;float: left;text-align: right;">
                                <a class="btn btn-primary" href="salary.php">
                                    <li class="fa fa-star"></li> เบิกเงินล่วงหน้า
                                </a>
                                <a href="salary_month.php" class="btn btn-success">
                                    <li class="fa fa-star"></li> เงินเดือน
                                </a>    
                            </div>
                        <br>
                        <div class="row">
                            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                                <label>เดือน</label>
                                <select class="form-control" id="txtmonth" name="txtmonth">
                                    <?php
                                    for ($i = 1; $i <= 12; $i++) {
                                        if ($i == $this_month) {
                                            ?>
                                            <option value="<?= $i; ?>" selected><?= month($i); ?></option>
                                        <?php } else { ?>
                                            <option value="<?= $i; ?>"><?= month($i); ?></option>    
                                            <?php
                                        }
                                    }
                                    ?>                                                
                                </select>
                            </div>
                            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                                <label>ปี</label>
                                <input type="number" class="form-control" value="<?= $this_year; ?>" id="txtyear" name="txtyear" style="text-align:center;">
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                <br><button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="block">

                    <a class="btn btn-primary" data-toggle="modal" data-target="#money_forward">
                        <li class="fa fa-plus"></li> เบิกเงินล่วงหน้า
                    </a> 
                          
                    <?php if (isset($_GET["success"])) { ?>
                        <div class="alert alert-success">
                            <?=$_GET["success"]; ?>
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET["fail"])) { ?>
                        <div class="alert alert-danger">
                            <?=$_GET["fail"]; ?>
                        </div>
                    <?php } ?>
                    <br><br>
                    <div class="box-body table-responsive">
                        <table id="tbl_employee" style="text-align:center;" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%;">ลำดับ</th>
                                    <th style="width:10%;">วันที่</th> 
                                    <th style="width:20%;">รหัสพนักงาน</th>           
                                    <th>ชื่อ-สกุล</th>   
                                    <th style="width:15%;">จำนวนเงิน</th>
                                    <th style="width:20%;"></th>
                                </tr>
                            </thead>
                            <?php
                            if (mysqli_num_rows($salary_forward) > 0) {
                                $i = 1;
                                while ($result = mysqli_fetch_array($salary_forward, MYSQLI_ASSOC)) {
                                    ?>
                                    <tr>                                    
                                        <td><?= $i++; ?></td>
                                        <td><?= $result["dates"]; ?></td> 
                                        <td><?= $result["emp_id"]; ?></td>  
                                        <td><?= $result["emp_name"]; ?></td>
                                        <td><?= $result["money"]; ?></td>
                                        <td>
                                            <?php if ($result["finish_date"] == "") { ?>
                                                <a class="btn btn-danger" href="<?= $salary_path; ?>/delete_salary_forward.php?id=<?= $result["id"]; ?>">Delete</a>
                                            <?php
                                            } else {
                                                echo "<i>ตัดยอดแล้ว : " . $result["finish_date"] . "</i>";
                                            }
                                            ?>
                                        </td>  
                                    </tr> 
                                    <?php
                                }
                            }
                            ?>
                        </table>               
                    </div>
                </div>
            </section>
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- Modal -->

    <div class="modal fade" id="money_forward" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= $salary_path; ?>/insert_salary_forward.php" method="post">
                <div class="modal-content">
                    <div class="modal-header" style="background-color:#99ccff;height: 40px;">
                        <h5 class="modal-title" id="exampleModalLabel">เบิกเงินล่วงหน้า</h5>
                    </div>

                    <div class="modal-body">



                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ชื่อ - สกุล</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="txtemp_id" name="txtemp_id" required>
                                    <?php
                                    if (count($emp) > 0) {
                                        while ($row = mysqli_fetch_array($emp, MYSQLI_ASSOC)) {
                                            ?>
                                            <option value="<?= $row["emp_id"]; ?>"><?= $row["emp_id"]; ?> : <?= $row["firstname"]; ?> <?= $row["lastname"]; ?></option>                                        
                                        <?php
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">วันที่เบิก</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="txtdate" name="txtdate" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">จำนวนเงิน</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="txtmoney" name="txtmoney" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">หมายเหตุ</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="txtremark" name="txtremark"></textarea>
                            </div>
                        </div>



                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">บันทึก</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </form>
        </div>
    </div>


    </html>
    <?php
} else {
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
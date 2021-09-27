<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH."/controller/employee/detail.php";


if ($_SESSION['level'] == '1') {
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script type="text/javascript" src="./../admin/controller/employee/js/employee.js"></script>

    <body class="skin-black">
        <?php include "header.php"; ?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <?php include "menu.php"; ?>


            <aside class="right-side">
                <section class="content-header">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                        <li class="active">พนักงาน</li>

                    </ol>
                </section>

                <section class="content">
                    <form id="myform" method="post" action="<?= $employee_path; ?>/update.php">
                        <div class="block">
                            <?php //echo $emp_dir;?>
                            <input type="hidden" name="txtemp_id" value="<?= $row["emp_id"]; ?>">


                            <?php if (isset($_GET["success"])) { ?>
                                <div class="alert alert-success">
                                    <?= $_GET["success"]; ?>
                                </div> <br>
                            <?php } ?>

                            <?php if (isset($_GET["fail"])) { ?>
                                <div class="alert alert-danger">
                                    <?= $_GET["fail"]; ?>
                                </div> <br>
                            <?php } ?>

                            <table style="width:20%;margin-bottom:20px;">
                                <tr>
                                    <td>สถานะ : <?php
                                        if ($row["status"] == 0) {
                                            echo "<b><font style='color:red;'>expired</font></b>";
                                        } else {
                                            echo "<b><font style='color:green;'>run</font></b>";
                                        }
                                        ?>                                
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <select class="form-control" id="txtstatus" name="txtstatus">
                                            <?php if ($row["status"] == 0) { ?>
                                                <option value="0" selected>expired</option>
                                                <option value="1">run</option>
                                            <?php } else { ?>
                                                <option value="0">expired</option>
                                                <option value="1" selected>run</option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                            </table>

                            <div class="form-row">
                                <b><span class="s_blue">ข้อมูลทั่วไป</span></b>                                                                          
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>รหัสบัตรประชาชน</label>
                                    <input type="number" class="form-control" id="txtIden" name="txtIden" readonly value='<?= $row["ident"]; ?>'>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>วันที่ออกบัตร</label>
                                    <input type="date" class="form-control" id="txtDateIden" name="txtDateIden" value='<?= $row["ident_date"]; ?>' required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>สถานภาพ</label>
                                    <input type="text" class="form-control" id="married_status" name="married_status" value="<?= $row["married_status"]; ?>" required>
                                </div>  
                            </div>



                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" id="txtFname" name="txtFname" value="<?= $row["firstname"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>สกุล</label>
                                    <input type="text" class="form-control" id="txtLname" name="txtLname" value="<?= $row["lastname"]; ?>"  required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12"> 
                                    <label>เพศ</label>

                                    <?php
                                    if ($row["sex"] == "หญิง") {
                                        ?>
                                        <br><input type="radio" name="sex" value="ชาย" required> ชาย
                                        <input type="radio" name="sex" value="หญิง" required checked> หญิง
                                        <?php
                                    } else if ($row["sex"] == "ชาย") {
                                        ?>
                                        <br><input type="radio" name="sex" value="ชาย" required checked> ชาย
                                        <input type="radio" name="sex" value="หญิง" required> หญิง
                                    <?php } ?>


                                </div>
                            </div>             

                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-sm-12">
                                    <b>ที่อยู่</b>
                                    <input type="text" class="form-control" id="txtAddress" name="txtAddress"  value="<?= $row["address"]; ?>" required>
                                </div>
                            </div>
                            <div class="row" style="width:100%;">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>วันเกิด</label>
                                    <input type="date" class="form-control" id="txtBdate" name="txtBdate" value="<?= $row["birth_date"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="number" class="form-control" id="txtPhone" name="txtPhone" value="<?= $row["phone"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>สถานะทางการทหาร</label>

                                    <select class="form-control" id="sle_solder" name="sle_solder">
                                        <?php
                                        $arr = array("เกณท์ทหารแล้ว", "ยังไม่เกณท์ทหาร", "ได้รับการยกเว้น");
                                        for ($i = 0; $i <= (count($arr) - 1); $i++) {
                                            if ($row["soldier_status"] == $arr[$i]) {
                                                ?>
                                                <option value="<?= $arr[$i]; ?>" selected><?= $arr[$i]; ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $arr[$i]; ?>" selected><?= $arr[$i]; ?></option>      
                                                <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> 


                        </div>

                        <div class="block">
                            <div class="form-row">
                                <b><span class="s_blue">ข้อมูลทั่วไป</span></b>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>ตำแหน่ง</label>
                                    <input type="text" class="form-control" id="txtPosition" name="txtPosition" value="<?= $row["position"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>เงินเดือน</label>
                                    <input type="number" class="form-control" id="txtSalary" name="txtSalary" value="<?= $row["salary"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12"> 
                                    <label>วันที่เริ่มงาน</label>
                                    <input type="date" class="form-control" id="txtWorkdate" name="txtWorkdate" value="<?= $row["work_date"]; ?>" required>
                                </div>
                            </div>          
                        </div>

                        <div class="block">
                            <div class="form-row" >
                                <b><span class="s_blue">ผู้ติดต่อกรณีฉุกเฉิน</span></b>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>ชื่อสกุล</label>
                                    <input type="text" class="form-control" id="txtContNm" name="txtContNm" value="<?= $row["contnm"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="number" class="form-control" id="txtContPhone" name="txtContPhone" value="<?= $row["contphone"]; ?>" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12"> 
                                    <label>ความสัมพันธ์</label>
                                    <input type="text" class="form-control" id="txtContRelation" name="txtContRelation" value="<?= $row["contrelation"]; ?>" required>
                                </div>
                            </div>          
                        </div>


                        <div class="block">
                            <div class="form-group">
                                <center>   <button type="submit" class="btn btn-primary">แก้ไข</button>   </center> 
                            </div>                                               
                        </div>  

                    </form>



                    <div class="block" >
                        <div class="form-row">
                            <table style="width:100%;" border="0">
                                <tr>
                                    <td style="text-align:left;"> <b><span class="s_blue">ประวัติการศึกษา</span></b></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>

                        <div class="row">
                            <form method="post" action="<?= $employee_path;?>/emp_edu.php?action=add">

                                <table id="tbl_edu" class="table table-striped" style="text-align: center;">
                                    <tr>
                                        <th style="width:20%;">วุฒิ</th>
                                        <th style="width:20%;">คณะ/สาขา</th>
                                        <th style="width:20%;">สถานศึกษา</th>
                                        <th style="width:20%;">เกรดเฉลี่ย</th>
                                        <td style="width:20%;"></td>
                                    </tr>
                                    <tr>
                                       <td style="width:20%;">
                                           <input type="hidden" class="form-control" id="txt_empid" name="txt_emp_id" value="<?=$row["emp_id"];?>">
                                            <select class="form-control" id="sle_edu_type" name="sle_edu_typ">
                                                <option value="">----</option>
                                                <option value="ป.6">ป.6</option>
                                                <option value="ม.6">ม.6</option>
                                                <option value="ปวช">ปวช</option>
                                                <option value="ปวส">ปวส</option>
                                                <option value="ป.ตรี">ป.ตรี</option>
                                                <option value="ป.โท">ป.โท</option>
                                                <option value="ป.เอก">ป.เอก</option>
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" id="txtmajor" name="txtmajor"></td>
                                        <td><input type="text" class="form-control" id="txtschool" name="txtschool"></td>
                                        <td><input type="text" class="form-control" id="txtgpa"  name="txtgpa"></td>
                                        <td> <button type="submit" class="btn btn-primary"><li class="fa fa-plus"></li> เพิ่ม</button></td>
                                    </tr>
                                </table>
                            </form>
                            <table class="table table-striped" style="text-align: center;">
                                <?php
                                while ($result = mysqli_fetch_array($education, MYSQLI_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td style="width:20%;">
                                            <?= $result['edu_type']; ?>
                                        </td>
                                        <td style="width:20%;"><?= $result['major']; ?></td>
                                        <td style="width:20%;"><?= $result['school']; ?></td>
                                        <td style="width:20%;"><?= $result['gpa']; ?></td>
                                        <td style="width:20%;"><a class="btn btn-default" 
                                               href="<?= $employee_path; ?>/emp_edu.php?action=delete&id=<?= $result["id"]; ?>&emp_id=<?= $result["emp_id"]; ?>">
                                                <li class="fa fa-trash"></li>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </table>
                        </div>          
                    </div>

                    <div class="block">
                        <div class="form-row">

                            <table  style="width:100%;" border="0">
                                <tr>
                                    <td style="text-align:left;"><b><span class="s_blue">ประวัติการทำงาน</span></b></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>

                        <div class="row">
                            <form method="post" action="<?= $employee_path;?>/emp_work.php?action=add">
                                <table class="table table-striped" style="text-align: center;">
                                    <tr>
                                        <th style="width:20%;">สถานที่ทำงาน</th>
                                        <th style="width:10%;">ตำแหน่ง</th>
                                        <th style="width:20%;">เงินเดือน</th>
                                        <th style="width:20%;">ช่วงเวลา</th>
                                        <th style="width:20%;">สาเหตุที่ออก</th>
                                        <td style="width:10%;"></td>
                                    </tr>                               
                                    <tr>
                                        <td style="width:20%;">
                                            <input type="hidden" class="form-control" id="txt_empid" name="txt_emp_id" value="<?=$row["emp_id"];?>">
                                          <input type="text" class="form-control" id="txtwork_place" name="txtwork_place">
                                        </td>
                                        <td><input type="text" class="form-control" id="txt_position" name="txt_position"></td>
                                        <td><input type="text" class="form-control" id="txt_salary" name="txt_salary"></td>
                                        <td><input type="text" class="form-control" id="txt_time"  name="txt_time"></td>
                                        <td><input type="text" class="form-control" id="txt_resign"  name="txt_resign"></td>
                                        <td><button type="submit" class="btn btn-primary"><li class="fa fa-plus"></li> เพิ่ม</button></td>
                                    </tr>
                                </table>
                            </form>
                            <table class="table table-striped" style="text-align: center;">
                                <?php
                                while ($result = mysqli_fetch_array($work, MYSQLI_ASSOC)) {
                                    ?>
                                    <tr>
                                        <td style="width:20%;"><?= $result['job_place']; ?></td>
                                        <td style="width:10%;"><?= $result['position']; ?></td>
                                        <td style="width:20%;"><?= $result['salary']; ?></td>
                                        <td style="width:20%;"><?= $result['time']; ?></td>
                                        <td style="width:20%;"><?= $result['resign_condition']; ?></td>
                                        <td style="width:10%;"><a class="btn btn-default" 
                                               href="<?= $employee_path; ?>/emp_work.php?action=delete&id=<?= $result["id"]; ?>&emp_id=<?= $result["emp_id"]; ?>">
                                                <li class="fa fa-trash"></li>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>          
                    </div>

                </section>  
            </aside>
        </div><!-- ./wrapper -->

    </body>

    <?php
} else {
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
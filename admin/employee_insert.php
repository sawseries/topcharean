<?php


include "./../admin/controller/extends.php";

if ($_SESSION['level'] == '1') {
    ?>
  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="./../admin/controller/employee/js/employee.js"></script>
    
    <body class="skin-black">
        <?php include "header.php"; ?>
        <form id="frm_employee" method="post" action="<?=$employee_path;?>/insert.php">
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
                        <div class="block">
                            <div class="form-row">
                                <b><span class="s_blue">ข้อมูลทั่วไป</span></b>                                                                          
                            </div>
                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>รหัสบัตรประชาชน</label>
                                    <input type="number" class="form-control" id="txtIden" name="txtIden" required maxlength="15">
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>วันที่ออกบัตร</label>
                                    <input type="date" class="form-control" id="txtDateIden" name="txtDateIden" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>สถานภาพ</label>
                                    <input type="text" class="form-control" id="married_status" name="married_status" required>
                                </div>  
                            </div>



                            <div class="row">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>ชื่อ</label>
                                    <input type="text" class="form-control" id="txtFname" name="txtFname" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>สกุล</label>
                                    <input type="text" class="form-control" id="txtLname" name="txtLname" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-12"> 
                                    <label>เพศ</label>
                                    <br><input type="radio" name="sex" value="ชาย" required> ชาย
                                    <input type="radio" name="sex" value="หญิง" required> หญิง
                                </div>
                            </div>             

                            <div class="row">
                                <div class="form-group col-md-12 col-lg-12 col-sm-12">
                                    <b>ที่อยู่</b>
                                    <input type="text" class="form-control" id="txtAddress" name="txtAddress"  required>
                                </div>
                            </div>
                            <div class="row" style="width:100%;">
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>วันเกิด</label>
                                    <input type="date" class="form-control" id="txtBdate" name="txtBdate" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="number" class="form-control" id="txtPhone" name="txtPhone" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>สถานะทางการทหาร</label>
                                    <select class="form-control" id="sle_solder" name="sle_solder">
                                        <option value="">---</option>
                                        <option value="เกณท์ทหารแล้ว">เกณฑ์ทหารแล้ว</option>
                                        <option value="ยังไม่เกณท์ทหาร">ยังไม่เกณฑ์ทหาร</option>
                                        <option value="ได้รับการยกเว้น">ได้รับการยกเว้น</option>
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
                                    <input type="text" class="form-control" id="txtPosition" name="txtPosition" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>เงินเดือน</label>
                                    <input type="number" class="form-control" id="txtSalary" name="txtSalary" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12"> 
                                    <label>วันที่เริ่มงาน</label>
                                    <input type="date" class="form-control" id="txtWorkdate" name="txtWorkdate" required>
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
                                    <input type="text" class="form-control" id="txtContNm" name="txtContNm" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                    <label>เบอร์โทรศัพท์</label>
                                    <input type="number" class="form-control" id="txtContPhone" name="txtContPhone" required>
                                </div>
                                <div class="form-group col-md-4 col-lg-4 col-sm-12"> 
                                    <label>ความสัมพันธ์</label>
                                    <input type="text" class="form-control" id="txtContRelation" name="txtContRelation" required>
                                </div>
                            </div>          
                        </div>

                        <div class="block" >
                            <div class="form-row">
                                <table style="width:100%;" border="0">
                                    <tr>
                                        <td style="text-align:left;"> <b><span class="s_blue">ประวัติการศึกษา</span></b></td>
                                        <td style="text-align:right;"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="row">
                                <table id="tbl_edu" class="table table-striped">
                                    <tr>
                                        <th>วุฒิ</th>
                                        <th>คณะ/สาขา</th>
                                        <th>สถานศึกษา</th>
                                        <th>เกรดเฉลี่ย</th>
                                          <td style="width:5%;"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <select class="form-control" id="sle_edu_type" name="sle_edu_typ[]">
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
                                        <td><input type="text" class="form-control" id="txtmajor" name="txtmajor[]"></td>
                                        <td><input type="text" class="form-control" id="txtschool" name="txtschool[]"></td>
                                        <td><input type="text" class="form-control" id="txtgpa"  name="txtgpa[]"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">
                                            <select class="form-control" id="sle_edu_type" name="sle_edu_typ[]">
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
                                        <td><input type="text" class="form-control" id="txtmajor" name="txtmajor[]"></td>
                                        <td><input type="text" class="form-control" id="txtschool" name="txtschool[]"></td>
                                        <td><input type="text" class="form-control" id="txtgpa"  name="txtgpa[]"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td style="width:20%;">
                                            <select class="form-control" id="sle_edu_type" name="sle_edu_typ[]">
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
                                        <td><input type="text" class="form-control" id="txtmajor" name="txtmajor[]"></td>
                                        <td><input type="text" class="form-control" id="txtschool" name="txtschool[]"></td>
                                        <td><input type="text" class="form-control" id="txtgpa"  name="txtgpa[]"></td>
                                        <td></td>
                                    </tr>
                              
                               
                                </table>
                            </div>          
                        </div>

                        <div class="block">
                            <div class="form-row">

                                <table  style="width:100%;" border="0">
                                    <tr>
                                        <td style="text-align:left;">  <b><span class="s_blue">ประวัติการทำงาน</span></b></td>
                                        <td style="text-align:right;"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="row">
                                <table id="tbl_work" class="table table-striped">
                                    <tr>
                                        <th>สถานที่ทำงาน</th>
                                        <th>ตำแหน่ง</th>
                                        <th>เงินเดือน</th>
                                        <th>ช่วงเวลา</th>
                                        <th>สาเหตุที่ออก</th>
                                        <td style="width:10%;"></td>
                                    </tr>
                                      
                                    <tr>
                                        <td style="width:20%;"><input type="text" class="form-control" id="txtwork_place" name="txtwork_place[]"></td>
                                        <td><input type="text" class="form-control" id="txt_position" name="txt_position[]"></td>
                                        <td><input type="text" class="form-control" id="txt_salary" name="txt_salary[]"></td>
                                        <td><input type="text" class="form-control" id="txt_time"  name="txt_time[]"></td>
                                        <td><input type="text" class="form-control" id="txt_resign"  name="txt_resign[]"></td>
                                        <td></td>
                                    </tr>
                                      <tr>
                                        <td style="width:20%;"><input type="text" class="form-control" id="txtwork_place" name="txtwork_place[]"></td>
                                        <td><input type="text" class="form-control" id="txt_position" name="txt_position[]"></td>
                                        <td><input type="text" class="form-control" id="txt_salary" name="txt_salary[]"></td>
                                        <td><input type="text" class="form-control" id="txt_time"  name="txt_time[]"></td>
                                        <td><input type="text" class="form-control" id="txt_resign"  name="txt_resign[]"></td>
                                        <td></td>
                                    </tr>
                                      <tr>
                                        <td style="width:20%;"><input type="text" class="form-control" id="txtwork_place" name="txtwork_place[]"></td>
                                        <td><input type="text" class="form-control" id="txt_position" name="txt_position[]"></td>
                                        <td><input type="text" class="form-control" id="txt_salary" name="txt_salary[]"></td>
                                        <td><input type="text" class="form-control" id="txt_time"  name="txt_time[]"></td>
                                        <td><input type="text" class="form-control" id="txt_resign"  name="txt_resign[]"></td>
                                        <td></td>
                                    </tr>
                         
                                </table>
                            </div>          
                        </div>
                        <div class="block">
                            <div class="form-group">
                                <center>   <button type="submit" class="btn btn-primary">Sign in</button>   </center> 
                            </div>                                               
                        </div>
                    </section>  
                </aside>
            </div><!-- ./wrapper -->
        </form>
    </body>

    <?php
} else {
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
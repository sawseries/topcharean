<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH . "/controller/salary/salary_detail.php";

if ($_SESSION['level'] == '1') {
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <style>
        .block{
            width: 80%;margin: 0 auto;margin-bottom: 30px;
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

                <div class="block">

                    <input type="hidden" name="search" value="1">
                    <div class="form-row">
                        <b><span class="s_blue">สรุปข้อมูลเงินเดือน ประจำเดือน <?= month(substr($salary_d["finish_date"], 5, 2)); ?> <?= (int) (substr($salary_d["finish_date"], 0, 4)) + 543; ?></span> </b> 
                        <br>
                    </div>  
                    <br>

                    <table class="table table-borderless">
                        <tr>
                            <th>ชื่อ - สกุล : </th>
                            <td><?= $salary_d["emp_name"]; ?></td>      
                            <th>ตำแหน่ง : </th>
                            <td><?= $salary_d["position"]; ?> </td>      
                        </tr>
                        <tr>
                            <th>เงินเดือนปัจจุบัน : </th>
                            <td><?= $salary_d["salary"]; ?> </td>      
                            <th>วันที่ตัดยอด : </th>
                            <td><?= $salary_d["finish_date"]; ?></td>      
                        </tr>
                    </table>                                      

                </div>

                <div class="block">
                    <b><span class="s_blue">รายการเบิกเงินล่วงหน้า</span><br><br>

                        <table id="tbl_employee" style="text-align:center;" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:10%;">ลำดับ</th>
                                    <th style="width:15%;">รหัสพนักงาน</th>           
                                    <th style="width:20%;">ชื่อ-สกุล</th>
                                    <th style="width:15%;">วันที่เบิก</th>  
                                    <th style="width:15%;">จำนวนเงิน</th>
                                </tr>
                            </thead>
                            <?php
                            $sum_salary_fw = 0;
                            if ($checkfw > 0) {

                                while ($result = mysqli_fetch_array($salary_fw_qry, MYSQLI_ASSOC)) {
                                    ?> 
                                    <tr>
                                        <td><?= $result["id"]; ?></td>
                                        <td><?= $result["emp_id"]; ?></td>          
                                        <td><?= $result["emp_name"]; ?></td>
                                        <td><?= $result["dates"]; ?></td> 
                                        <td><?= $result["money"]; ?>
                                            <?php $sum_salary_fw += $result["money"]; ?>
                                        </td>
                                    </tr>
                                <?php }
                            } else {
                                ?> 
                                <tr>
                                    <td colspan="5" style="text-align: center;">ไม่มีข้อมูล</td>
                                </tr>
    <?php } ?> 
                        </table>


                        <table style="width:30%;">
                            <tr>
                                <th>รวม</th>
                                <td><?= $sum_salary_fw; ?></td>
                            </tr>
                        </table>


                </div>

                <div class="block">

                    <b><span class="s_blue">รวมรายได้สุทธิ</span><br><br>
                        <table style="width:30%;">
                            <tr>
                                <th>เงินเดือนปัจจุบัน</th>
                                <td><?= $salary_d["salary"]; ?></td>
                            </tr>
                            <tr>
                                <th>รายการเบิกเงินล่วงหน้า</th>
                                <td><?= $sum_salary_fw; ?></td>
                            </tr>
                            <tr>
                                <th>รวมรายได้สุทธิ</th>
                                <td><?= ($salary_d["salary"] - $sum_salary_fw); ?></td>
                            </tr>

    <?php if($salary_d["status"]=="จ่ายแล้ว"){ ?>
                                <tr>
                                    <th><br><font style="color:red;">จ่ายเงินเดือนแล้ว</font></th>
                                    <td><br><?= $salary_d["salary_date"]; ?></td>
                                </tr>
    <?php } ?>


                        </table>

    <?php if (($salary_d["status"] == "ยังไม่จ่าย")) { ?>
                            <form method="post" action='<?=$salary_path;?>/update_salary_month.php'>
                                <input type="hidden" id="hdn_m_id" name="hdn_m_id" value="<?= $salary_d["id"]; ?>">
                                <input type="hidden" id="hdn_emp_id" name="hdn_emp_id" value="<?= $salary_d["emp_id"]; ?>">
                                <center>  <button type="submit" class="btn btn-danger">จ่ายเงินเดือน</button> </center>
                            </form>
                        <?php }else{
                            ?>
                        <center> <br><a href="./salary_month.php" class="btn btn-default">จ่ายเงินเดือนแล้ว</a> </center>
                        <?php } ?>
                        <br><br>
                        </div>
                        </section>
                        </aside><!-- /.right-side -->
                        </div><!-- ./wrapper -->
                        </body>
                        </html>
                        <?php
                    } else {
                        echo "<script>";
                        echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
                        echo "</script>";
                        echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
                    }
                    ?>
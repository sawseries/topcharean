<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH . "/controller/stock/report_transection.php";

if ($_SESSION['level'] == '1') {
    ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <style>
        .block{
            width: 80%;margin: 0 auto;margin-bottom: 30px;
        }
        
        .gray{
            border:1px solid gray;background-color:#CCC;padding:1em;height:auto;
        }

    </style>
    <?php include "header.php"; ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">

        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                <li class="active">รายงานเคลื่อนไหวสินค้า</li>
            </ol>
        </section>
        <section class="content">
            <div class="block">
                <span class="s_blue">รายงานเคลื่อนไหวสินค้า </span><br><br>
                <div class="gray">
                    <table style="width:40%;">
                        <tr>
                            <td>รหัสสินค้า</td>
                            <td><?= $stock["stock_id"]; ?></td>
                        </tr>
                        <tr>
                            <td>ชื่อสินค้า</td>
                            <td><?= $stock["stock_nm"]; ?></td>
                        </tr>
                        <tr>
                            <td>ราคา</td>
                            <td><?= $stock["price"]; ?></td>
                        </tr>
                        <tr>
                            <td>จำนวนคงเหลือ</td>
                            <td><?= $stock["remain"]; ?></td>
                        </tr>

                    </table>

                </div>
                <div class="gray" style="height:60px;">
                    <form method="post" action="./stock_report_transection.php">
                        <input type="hidden" id="hdnstock_id" name="hdnstock_id" value="<?= $stock["stock_id"]; ?>">
                        <select class="form-control" name="status" style="width:90%;float: left;">
                        <option value="">ทั้งหมด</option>
                        <option value="S">ขาย</option>
                        <option value="A">เพิ่ม</option>
                        <option value="I">first</option>
                    </select>
                        <button type="submit" name="search" value="1" class="btn btn-info" style="float: left;">ค้นหา</button>
                    
                    </form>
                </div>
                <div>
                    <table id="tbl_employee" style="text-align:center;" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:10%;">ลำดับ</th>
                                <th style="width:10%;">รหัสสินค้า</th>           
                                <th style="width:20%;">ชื่อสินค้า</th>
                                <th style="width:10%;">สถานะ</th>  
                                <th style="width:10%;">จำนวน</th>
                                <th style="width:15%;">หมายเหตุ</th> 
                                <th style="width:15%;">วันที่อัพเดท</th> 
                            </tr>
                        </thead>
                        <?php
                        $i = 1;
                        //$sum_salary_fw = 0;
                        if ($chk_stock > 0) {

                            while ($result = mysqli_fetch_array($transection, MYSQLI_ASSOC)) {
                                ?> 
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $result["stock_id"]; ?></td>          
                                    <td><?= $result["stock_nm"]; ?></td>
                                    <td><?php
                                        if ($result["status"] == "I") {
                                            echo "<font style='color:orange;'>first</font>";
                                        } else if ($result["status"] == "A") {
                                            echo "<font style='color:green;'>เพิ่ม</font>";
                                        } else if ($result["status"] == "S") {
                                            echo "<font style='color:red;'>ขาย</font>";
                                        }
                                        ?></td> 
                                    <td><?= $result["quan"]; ?>
                                    </td>
                                    <td><?= $result["remark"]; ?></td>
                                    <td><?= $result["updated_at"]; ?></td>
                                </tr>
                            <?php
                            }
                        } else {
                            ?> 
                            <tr>
                                <td colspan="7" style="text-align: center;">ไม่มีข้อมูล</td>
                            </tr>
                        <?php } ?> 
                    </table>
                </div> 
            </div>
        </section>

    </div><!-- ./wrapper -->

    <?php
} else {
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
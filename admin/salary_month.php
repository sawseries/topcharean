<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH."/controller/salary/salary_month.php";

if ($_SESSION['level'] == '1') {?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
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

                <div class="block" style="height:150px;">
                    <form method="post" action='./salary_month.php'>
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
                                            <option value="<?= $i; ?>" selected><?=month($i);?></option>
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
                                <input type="number" class="form-control" value="<?=$this_year;?>" id="txtyear" name="txtyear" style="text-align:center;">
                            </div>
                            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                                <br><button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="block">
                    
                    <div class="row" style="text-align:left;">
                          <?php if ($cnt_salary_month <= 0) { ?>
                        <a href="<?=$salary_path;?>/salary_summation.php" class="btn btn-success">ตัดยอดเงินเดือน ประจำเดือน <?=$this_month_thai;?> ปี <?=$this_year_thai;?> </a>
                          <?php }else{ ?>
                        <a class="btn btn-default">ตัดยอดเงินเดือนแล้ว</a>
                          <?php } ?> 
<!--                        <a class="btn btn-primary" href="./salary.php">
                            <li class="fa fa-plus"></li> เบิกเงินล่วงหน้า
                        </a>-->
                    </div>
                    <div class="box-body table-responsive" style="width:100%;margin-top: 30px;">
            
                        <table id="tbl_salary_month" style="text-align:center;" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสพนักงาน</th>           
                                    <th>ชื่อ-สกุล</th>   
                                    <th>ตำแหน่ง</th> 
                                    <th>เงินเดือน</th> 
                                    <th>เบิกเงิน</th>
                                    <th>รายได้สุทธิ</th>
                                    <th>วันที่ตัดยอด</th>
                                    <th>วันที่จ่ายเงินเดือน</th>  
                                    <th>สถานะ</th> 
                                    <th></th> 
                                </tr>
                            </thead>
                            
                           <?php if ($cnt_salary_month > 0) {
                                    $i=1;
                              
                                    while ($result = mysqli_fetch_array($salary_month, MYSQLI_ASSOC)) {
                                        ?>
                                        <tr>                                    
                                            <td><?=$i++;?></td>
                                            <td><?=$result["emp_id"];?></td> 
                                            <td><?=$result["emp_name"];?></td>  
                                            <td><?=$result["position"];?></td>
                                            <td><?=$result["salary"];?></td>
                                            <td><?=$result["money_forward"];?></td>
                                            <td><?=$result["total"];?></td>
                                            <td><?=$result["finish_date"];?></td> 
                                            <td><?=$result["salary_date"];?></td>  
                                            <td><?=$result["status"];?></td>  
                                            <td>
                                                 <?php if (($result["status"]=="ยังไม่จ่าย")){?>
                                                <a href="./salary_detail.php?id=<?=$result["id"];?>" class="btn btn-warning">จ่ายเงินเดือน</a>
                                                 <?php }else{ ?>
                                                 <a href="./salary_detail.php?id=<?=$result["id"];?>" class="btn btn-default">จ่ายแล้ว</a>
                                                 <?php } ?>
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
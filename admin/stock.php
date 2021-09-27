<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH . "/controller/stock/stock.php";
if ($_SESSION['level'] == '1') {
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
   
    <script>
    
    
    function addstock(stockid,stocknm,remain){
        
        $("#txtastock_id").val(stockid);
        $("#txtastock_nm").val(stocknm);
        $("#txtaremain").val(remain); 
    }
    
     function sellstock(stockid,stocknm,remain){
        
        $("#txtsstock_id").val(stockid);
        $("#txtsstock_nm").val(stocknm);
        $("#txtsremain").val(remain); 
    }
    
    </script>
    
    <?php include "header.php"; ?>

    <div class="wrapper row-offcanvas row-offcanvas-left">
        <?php include "menu.php"; ?>
        <aside class="right-side">
            <section class="content-header">
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                    <li class="active">คลังสินค้า</li>
                </ol>
            </section>
            <section class="content">

                <div class="block">
                    <form method="post" action='./stock.php'>
                        <input type="hidden" name="search" value="1">
                        <div class="form-row">
                            <b><span class="s_blue">สินค้าคงคลัง</span> </b> 
                            <br>
                        </div>  
                        <br>
                        <div class="row">
                            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                                <label>รหัสสินค้า</label>
                                <input type="text"  class="form-control" placeholder="รหัสสินค้า" value="<?=$sstock_id;?>" id="txtstock_id" name="txtstock_id" style="text-align:center;">
                            </div>
                            <div class="form-group col-md-3 col-lg-3 col-sm-12">
                                <label>ชื่อสินค้า</label>
                                <input type="text" class="form-control" placeholder="ชื่อสินค้า" value="<?=$sstock_nm;?>" id="txtstock_nm" name="txtstock_nm" style="text-align:center;">
                            </div>
                            <div class="form-group col-md-4 col-lg-4 col-sm-12">
                                <br><button type="submit" class="btn btn-primary">ค้นหา</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="block">
                  
                    <a class="btn btn-primary" data-toggle="modal" data-target="#insert_new_stock">
                        <li class="fa fa-plus"></li> เพิ่มสินค้าใหม่
                    </a>
<!--                    <a href="salary_month.php" target="_blank" class="btn btn-success">
                        <li class="fa fa-star"></li> รายงาน
                    </a>-->
                    
                  
                    <br><br>
                    <div class="box-body table-responsive">
                        
                          <?php if (isset($_GET["success"])) { ?>
                        <div class="alert alert-success">
                            <?= $_GET["success"]; ?>
                        </div>
                    <?php } ?>

                    <?php if (isset($_GET["fail"])) { ?>
                        <div class="alert alert-danger">
                            <?= $_GET["fail"]; ?>
                        </div>
                    <?php } ?>
                        
                        <table id="tbl_stock" style="text-align:center;" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>           
                                    <th>รหัสสินค้า</th>   
                                    <th>ชื่อสินค้า</th> 
                                    <th>ราคา</th> 
                                    <th>คงคลัง</th>
                                    <th>วันที่อัพเดท</th>
                                    <th style="width:25%;"></th>
                                </tr>
                            </thead>

                            <?php
                            $i = 1;
                            if ($chk_stock > 0) {
                                while ($result = mysqli_fetch_array($stock, MYSQLI_ASSOC)) {
                                    ?>
                                    <tr>                                    
                                        <td><?=$i++;?></td>
                                        <td><?= $result["stock_id"]; ?></td>    
                                        <td><?= $result["stock_nm"]; ?></td>
                                        <th><?= $result["price"]; ?></th> 
                                        <td><?= $result["remain"]; ?></td>
                                        <td><?= $result["updated_at"]; ?></td>
                                        <td>
                                            <a data-toggle="modal" onclick="addstock('<?=$result["stock_id"];?>','<?=$result["stock_nm"];?>',<?=$result["remain"];?>);" data-target="#update_add_stock" class="btn btn-success">เพิ่ม</a>
                                            <a data-toggle="modal" onclick="sellstock('<?=$result["stock_id"];?>','<?=$result["stock_nm"];?>',<?=$result["remain"];?>);" data-target="#update_sell_stock" class="btn btn-warning">ขาย</a>
                                            <a href="<?=$stock_path;?>/delete.php?stock_id=<?=$result["stock_id"];?>" class="btn btn-danger">ลบ</a>
                                            <a href="./stock_report_transection.php?stock_id=<?=$result["stock_id"];?>" target="_blank" class="btn btn-info">รายงาน</a>
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
    <div class="modal fade" id="insert_new_stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#eee;">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้าใหม่</h5>
                </div>
                <form method="post" action='<?= $stock_path; ?>/insert.php'>
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col col-lg-3 col-sm-2 col-form-label">รหัสสินค้า</label>
                            <div class="col-sm-12">
                                <input type="hidden" class="form-control" id="action" name="action" value="insert">
                                <input type="text" class="form-control" id="txtstock_id" name="txtstock_id" value="<?= $stockid; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col col-lg-3 col-sm-2 col-form-label">ชื่อสินค้า</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="txtstock_nm" name="txtstock_nm" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col col-lg-3 col-sm-2 col-form-label">จำนวน</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="txtquan" name="txtquan" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col col-lg-3 col-sm-2 col-form-label">ราคา</label>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" id="txtprice" name="txtprice" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col col-lg-3 col-sm-2 col-form-label">หมายเหตุ</label>
                            <div class="col-sm-12">
                                <textarea class="form-control" id="txtremark" name="txtremark"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>     
            </div>
        </div>
    </div>


    <div class="modal fade" id="update_add_stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#006633;color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
                </div>
                <form method="post" action='<?= $stock_path; ?>/add.php'> 
                <div class="modal-body">
                    
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">รหัสสินค้า</label>
                        <div class="col-sm-12">
                            <input type="hidden" class="form-control" id="action" name="action" value="add">
                            <input type="text" class="form-control" id="txtastock_id" name="txtastock_id" required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">ชื่อสินค้าสินค้า</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtastock_nm" name="txtastock_nm" required readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">สินค้าคงคลัง</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="txtaremain" name="txtaremain" required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">จำนวนที่เพิ่ม</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="txtadd" name="txtadd" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">หมายเหตุ</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="txtaremark" name="txtaremark"></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                    </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="update_sell_stock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                  <form method="post" action='<?=$stock_path;?>/sell.php'> 
                <div class="modal-header" style="background-color:#ff9900;color:white;">
                    <h5 class="modal-title" id="exampleModalLabel">ขายสินค้า</h5>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">รหัสสินค้า</label>
                        <div class="col-sm-12">
                             <input type="hidden" class="form-control" id="action" name="action" value="sell">
                            <input type="text" class="form-control" id="txtsstock_id" name="txtsstock_id" required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">ชื่อสินค้าสินค้า</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="txtsstock_nm" name="txtsstock_nm" required readonly>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">สินค้าคงคลัง</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="txtsremain" name="txtsremain" required readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">จำนวนที่ขาย</label>
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="txtsell" name="txtsell" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col col-lg-3 col-sm-2 col-form-label">หมายเหตุ</label>
                        <div class="col-sm-12">
                            <textarea class="form-control" id="txtsremark" name="txtsremark"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                  </form>
            </div>
        </div>
    </div>

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
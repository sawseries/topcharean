<?php
include "./../admin/controller/extends.php";
include ADMIN_PATH."/controller/employee/select.php";

if ($_SESSION['level'] == '1') {
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
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
                <label>&nbsp;&nbsp;ข้อมูลพนักงาน</label>
                <div class="block">
                    <a href="employee_insert.php"><button type="button" class="btn btn-primary">เพิ่มข้อมูลพนักงานใหม่</button></a>
                    <br><br>
                    <?php if(isset($_GET["success"])){ ?>
                    <div class="alert alert-success">
                       <?=$_GET["success"];?>
                    </div>
                    <?php } ?>
                    
                    <?php if(isset($_GET["fail"])){ ?>
                    <div class="alert alert-danger">
                       <?=$_GET["fail"];?>
                    </div>
                    <?php } ?>
            
                    <div class="box-body table-responsive">
                        <table id="table_form" style="text-align:center;" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสพนักงาน</th>       
                                    <th>บัตรประชาชน</th>    
                                    <th>ชื่อ-สกุล</th>   
                                    <th>ตำแหน่ง</th>   
                                    <th>เงินเดือน</th>
                                    <th>สถานะ</th>  
                                    <th></th>
                                </tr>
                            </thead>
                            <?php
                            $i=1;
                            if($cnt_emp >0){
                            while($result=mysqli_fetch_array($employee,MYSQLI_ASSOC))
                            {
                            ?>
                            <tr>                                    
                                <td><?=$i++;?></td>
                                <td><?=$result["emp_id"];?></td>    
                                <td><?=$result["ident"];?></td>
                                <td><?=$result["firstname"]." ".$result["lastname"];?></td>
                                <td><?=$result["position"];?></td>
                                <td><?=$result["salary"];?></td>
                                <td>
                                   <?php if($result["status"]==1){ ?>
                                    <span style="color: green;">run</span>    
                                   <?php }else{ ?>
                                     <span style="color:red;">expired</span>      
                                   <?php } ?>
                                </td>
                                <td>
                                    <a class="btn btn-warning" href="employee_edit.php?id=<?=$result["emp_id"];?>">edit</a>
                                    <a class="btn btn-danger" href="<?=$employee_path;?>/delete.php?emp_id=<?=$result["emp_id"];?>">Delete</a>
                                </td>  
                            </tr>  
                            <?php }} ?>
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
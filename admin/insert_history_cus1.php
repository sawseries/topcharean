<?php session_start(); 
error_reporting(0);
if($_SESSION['level'] == '1'){ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Eye Station</title>
        <link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
        <style type="text/css">
        body { font-family: 'Athiti', sans-serif;
        font-family: 'Kanit', sans-serif; }
        </style>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
       <script type="text/javascript"> 
function putFrame(_objindex) { 
    if (_objindex != 0) {
       var _cdate = document.getElementById("hsttime").value.split(",");
       document.form1.c_date.value = _cdate[_objindex];

       document.form1.output.value = parseFloat(document.form1.c_date.value)+parseFloat(document.form1.st_time.value);
    }
    else {
    document.form1.c_date.value = "";
    }
}
</SCRIPT>

<script type="text/javascript"> 
function putLen(_objindex) { 
    if (_objindex != 0) {
       var _ctime = document.getElementById("hcdate").value.split(",");
       document.form1.st_time.value = _ctime[_objindex];

       document.form1.output.value = parseFloat(document.form1.c_date.value)+parseFloat(document.form1.st_time.value);
    }
    else {
    document.form1.st_time.value = "";  
    }
}
</SCRIPT>


    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        
<?php
include "header.php";
?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <?php
include "menu.php";
$hcdate = "";
$hsttime = "";
?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>จัดการข้อมูล</a></li>
                        <li><a href="#">ลูกค้า</a></li>
                    </ol>
                </section>
                </section>
                            <!-- split buttons box -->
              <!-- general form elements -->
              <div class="col-md-12">
                <label>&nbsp;&nbsp;เพิ่มข้อมูลการตัดแว่นลูกค้าเก่า</label>
              <div class="modal-content" >
              <div class="box box-primary">
              <div class="box-header">
              <meta http-equiv=Content-Type content="text/html; charset=windows-874">
              <form action="insert_history_cus2.php" name="form1" method="post"> 
                <?php
                $cus = $_GET["cus"];
                 $_SESSION["idcus9999"] = $_GET["cus"];
                include "../server.php";
                $sql = "SELECT * FROM customer,tudlen WHERE customer.id_cus = tudlen.id_cus && customer.id_cus='$cus'";
                $query = mysqli_query($objCon,$sql);
                while($result=mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $id_pro = $result["id_pro"];
                $name_pro = $result["name_pro"];
                $price_pro = $result["price_pro"];

                $name_cus = $result["name_cus"];
                $age = $result["age"];
                $company = $result["company"];
                $tel = $result["tel"];
                $address = $result["address"];
                $comment = $result["comment"];
                } ?>    
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                    <div class="form-row">
                                        
                                        <div class="form-group col-md-5 ">
                                            <label for="user_name">ชื่อ - สกุล</label>
                                            <input type="text" class="form-control" name="name" placeholder="ชื่อ - สกุล" value="<?php echo $name_cus; ?>" readonly="1">
                                        </div> 
                                        <div class="form-group col-md-3 ">
                                            <label for="age">อายุ</label>
                                            <input type="text" class="form-control" name="age" placeholder="อายุ" value="<?php echo $age; ?>" readonly="1">
                                        </div>
                                        <div class="form-group col-md-3 ">                                
                                            <label for="day">วันที่ตัดเลนส์</label>
                                            <input type="date" class="form-control" name="day" value="<?php echo date('Y-m-d',strtotime('+543 year'))?>">
                                        </div>
                                        <div class="form-group col-md-5 "> 
                                            <label for="company">ชื่อบริษัท / ร้านค้า</label>
                                            <input type="text" class="form-control" name="company" placeholder="ชื่อบริษัท หรือ ร้านค้า" value="<?php echo $company; ?>" readonly="1" readonly="1">
                                        </div>
                                       <div class="form-group col-md-3">
                                            <label for="tel">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" name="tel" placeholder="xxx-xxxxxxx" value="<?php echo $tel; ?>" readonly="1">
                                        </div>
                                        <div class="form-group col-md-11"> 
                                            <label for="address">ที่อยู่</label>
                                            <textarea type="text" class="form-control" name="address" rows="3" readonly="1"><?php echo $address; ?></textarea>
                                        </div>
                                        <div class="form-group col-md-5 "> 
                                            <label for="right">ค่าสายตาขวา (R)</label>
                                            <input type="text" class="form-control" name="right" placeholder="สั้น x เอียง x องศา" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 "> 
                                            <label for="pdr">PD</label>
                                            <input type="text" class="form-control" name="pdr" placeholder="xx" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-5 "> 
                                            <label for="left">ค่าสายตาซ้าย (L)</label>
                                            <input type="text" class="form-control" name="left" placeholder="สั้น x เอียง x องศา" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-3 "> 
                                            <label for="pdl">PD</label>
                                            <input type="text" class="form-control" name="pdl" placeholder="xx" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-5">
                                        <label for="exampleInputId_title1">กรอบที่ตัด</label>
                                                 <select type="text" class="form-control" name="c_id1" id="c_id1" onChange="putFrame(this.selectedIndex)" >
                                                <option value="0">เลือกประเภทกรอบแว่น</option>
                                                    <?php
                                                    include "../server.php";
                                                    $strSQL = "SELECT * FROM product  ";
                                                    $objQuery = mysqli_query($objCon,$strSQL);
                                                    while($objResuut = mysqli_fetch_array($objQuery))
                                                    {
                                                        $hsttime .= ",".$objResuut["price_pro"];
                                                    ?>
                                                    <option value="<?php echo $objResuut["name_pro"];?>" ><?php echo $objResuut["name_pro"];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                        </div>
                                         <div class="form-group col-md-3 "> 
                                            <label for="name">ราคากรอบ</label>
                                            <input type="text" class="form-control" name="c_date" id="c_date" value="0">
                                        </div>
                                         
                                        
                                         <div class="form-group col-md-5">
                                        <label for="exampleInputId_title1">เลนส์ที่ตัด</label>
                                                 <select type="text" class="form-control" name="p_len" id="p_len" onChange="putLen(this.selectedIndex)" >
                                                <option value="0">เลือกประเภทเลนส์</option>
                                                    <?php
                                                    include "../server.php";
                                                    $strSQL = "SELECT * FROM len  ";
                                                    $objQuery = mysqli_query($objCon,$strSQL);
                                                    while($objResuut = mysqli_fetch_array($objQuery))
                                                    {
                                                        $hcdate .= ",".$objResuut["price_len"];

                                                    ?>
                                                    <option value="<?php echo $objResuut["name_len"];?>" ><?php echo $objResuut["name_len"];?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                        </div>
                                         <div class="form-group col-md-3 "> 
                                            <label for="name">ราคาเลนส์</label>
                                            <input type="text" class="form-control" name="st_time" id="st_time" value="0">
                                        </div>
                                         <div class="form-group col-md-3 "> 
                                            <label for="name">ราคารวม <font color="red">(เปลี่ยนได้ตามจริง)</font></label>
                                            <input type="text" class="form-control" name="output" id="output" value="0" autocomplete="off">
                                        </div>
                                        
                                        <div class="form-group col-md-11"> 
                                            <label for="comment">หมายเหตุ</label>
                                            <textarea type="text" class="form-control" name="comment" rows="3">-</textarea>
                                        </div>
                                        
                                        
                                    </div> 
                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                                        </div> 
                                    </div>
                                </form>

                                </div> 
                            <input  type="hidden" name="hcdate" id="hcdate" value="<?php echo $hcdate; ?>">
                            <input  type="hidden" name="hsttime" id="hsttime" value="<?php echo $hsttime; ?>">
                            <input  type="hidden" name="output1" id="output1" value="<?php echo $output1; ?>">
                            <input  type="hidden" name="output2" id="output2" value="<?php echo $output2; ?>">
                            
                           
                </form>
          <!-- jQuery 2.0.2 -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>
<?php }else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
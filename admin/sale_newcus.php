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
   
<script language="javascript">
function fncchecktotal(){
    var t6;
    var t7; 
    var sum1;
        document.form1.total.value = parseFloat(document.form1.txtSiteName3.value) + parseFloat(document.form1.txtSiteName3.value);
        //t7 = parseFloat(document.form1.test2.value);
    
    //sum1 = t6+t7;
    //document.form1.total.value = sum1;



}
</script>

<script language="javascript">
function fnccheck(){
    var t1;
    var t2; 
    var sum;
/*
var passed_array = <?php echo json_encode(document.form1.txtSiteName3.value); ?>; 

for(var i = 0; i < passed_array.length; i++){
     
      document.form1.total.value = parseFloat(console.log(document.form1.arr[i].value));
   }*/
    
        t1=parseFloat(document.form1.total.value);
        t2=parseFloat(document.form1.mudjum.value);
    
    sum=t1-t2;
    document.form1.balance.value=sum;

}
</script>



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
?>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>ออกบิล</a></li>
                        <li><a href="#">การสั่งซื้อ</a></li>
                    </ol>
                </section>
                </section>
                            <!-- split buttons box -->
              <!-- general form elements -->
              <div class="col-md-12">
                <label>&nbsp;&nbsp;ออกบิลการสั่งซื้อสินค้า</label>
              <div class="modal-content" >
              <div class="box box-primary">
              <div class="box-header">
              <meta http-equiv=Content-Type content="text/html; charset=windows-874">
              <form action="report_bill.php" name="form1" method="post"> 
 
                                <form role="form">
                                    <div class="box-body">
                                    <div class="form-row">
                                        <div class="form-group col-md-3 ">
                                            <label for="user_name">ชื่อ - สกุล</label>
                                            <input type="text" class="form-control" name="name" placeholder="ชื่อ - สกุล" required="" autocomplete="off">
                                        </div> 
                                        <div class="form-group col-md-2">
                                            <label for="tel">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" name="tel" placeholder="xxx-xxxxxxx" autocomplete="off">
                                        </div>
                                        <div class="form-group col-md-1.5 ">                                
                                            <label for="day">วันที่ตัดเลนส์</label>
                                            <input type="date" class="form-control" name="daytud" value="<?php echo date('Y-m-d',strtotime('+543 year'))?>">
                                        </div>
                                        <div class="form-group col-md-1.5 ">                                
                                            <label for="day"><font color="red">วันที่รับงาน</font></label>
                                            <input type="date" class="form-control" name="dayrecive"  value="<?php echo DATE('Y-m-d',strtotime("+543 year,+1 day")) ?>">
                                        </div>
                                       <div class="form-group col-md-1.5 ">                                
                                            <label for="time"><font color="red">เวลาที่รับงาน</font></label>
                                            <input type="time" class="form-control" name="timerecive"  value="<?php echo date('12:00'); ?>">
                                        </div>

                               <div class="form-group row res_c">

                                        <div class="form-group col-md-4">
                                            <label for="email">กรอบแว่น</label>

                                                    <?php
                                                    $tun = "SELECT * FROM product ORDER BY id_pro ASC";
                                                    $quetun = mysqli_query($objCon, $tun);
                                                    ?>
                                                    <select name="txtSiteName[]" id="txtSiteName" class="form-control">
                                                        <option value="">เลือกกรอบแว่น</option>
                                                        
                                                        <?php
                                                        while ($rstun = mysqli_fetch_array($quetun)) {
                                                            //$idpro = $rstun['id_pro'];
                                                            $namepro = $rstun['name_pro'];
                                                        ?>
                                                            <option value="<?php echo $namepro; ?>"><?php echo $namepro; ?>
                                                            </option>
                                                        <?php } ?>
                                                        
                                                    </select>
                                                </div>


                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">ชนิดเลนส์</label>
                                             <?php
                                                    $tun = "SELECT * FROM len ORDER BY id_len ASC";
                                                    $quetun = mysqli_query($objCon, $tun);
                                                    ?>
                                                    <select name="txtSiteName2[]" id="txtSiteName2" class="form-control" >
                                                        <option value="">เลือกชนิดเลนส์</option>
                                                        
                                                        <?php
                                                        while ($rstun = mysqli_fetch_array($quetun)) {
                                                            //$idpro = $rstun['id_pro'];
                                                            $namelen = $rstun['name_len'];
                                                        ?>
                                                            <option value="<?php echo $namelen; ?>"><?php echo $namelen; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                        </div>

                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">ราคา</label>
                                            <input type="text" class="form-control" name="txtSiteName3[]" id="txtSiteName3" autocomplete="off" OnChange="document.getElementById('total').value=this.value;">
                                        </div>

                                        <div class="form-group col-md-1">
                                        <label class="email"> &nbsp;&nbsp;&nbsp; </label>
                                        <a href="javascript:void(0)" class="btn btn-success"><font color="white"><b>+</b></font></a>
                                                </div>
                                    </div>

                                        <div class="form-group row res_cc" style="display: none;">
                                            
                                        <div class="form-group col-md-4">
                                            <label for="email">กรอบแว่น</label>
                                                    <?php
                                                    $tun = "SELECT * FROM product ORDER BY id_pro ASC";
                                                    $quetun = mysqli_query($objCon, $tun);
                                                    ?>
                                                    <select name="txtSiteName[]" id="txtSiteName" class="form-control">
                                                        <option value="">เลือกกรอบแว่น</option>
                                                        
                                                        <?php
                                                        while ($rstun = mysqli_fetch_array($quetun)) {
                                                            //$idpro = $rstun['id_pro'];
                                                            $namepro = $rstun['name_pro'];
                                                        ?>
                                                            <option value="<?php echo $namepro; ?>"><?php echo $namepro; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>


                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">ชนิดเลนส์</label>

                                            <?php
                                                    $tun = "SELECT * FROM len ORDER BY id_len ASC";
                                                    $quetun = mysqli_query($objCon, $tun);
                                                    ?>
                                                    <select name="txtSiteName2[]" id="txtSiteName2" class="form-control" >
                                                        <option value="">เลือกชนิดเลนส์</option>
                                                        
                                                        <?php
                                                        while ($rstun = mysqli_fetch_array($quetun)) {
                                                            //$idpro = $rstun['id_pro'];
                                                            $namelen = $rstun['name_len'];
                                                        ?>
                                                            <option value="<?php echo $namelen; ?>"><?php echo $namelen; ?>
                                                            </option>
                                                        <?php } ?>
                                                    </select>
                                        </div>

                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">ราคา</label>
                                            <input type="text" class="form-control" name="txtSiteName3[]" id="txtSiteName3" autocomplete="off" OnChange="document.getElementById('total').value = parseFloat(document.getElementById('total').value) + parseFloat(this.value);" >
                                        </div>

                                        <div class="form-group col-md-1">
                                        <label class="email"> &nbsp;&nbsp;&nbsp; </label>
                                        <a href="javascript:void(0)" class="btn btn-danger"><font color="white"><b>-</b></font></a>
                                        </div>
                                    </div>

                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">ราคารวม</label>
                                            <input type="text" class="form-control" name="total" id="total" autocomplete="off" OnChange="JavaScript:fnccheck();" >
                                        </div>

                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">มัดจำ</label>
                                            <input type="text" class="form-control" name="mudjum" autocomplete="off" OnChange="JavaScript:fnccheck();" >
                                        </div>

                                        <div class="form-group col-md-3 ">                                
                                            <label for="email">คงเหลือ</label>
                                            <input type="text" class="form-control" autocomplete="off" name="balance" >
                                        </div>

                                       
                                    </div> 
                                    <div class="box-footer">
                                        
                                       
                                        <button type="submit" class="btn btn-primary">บันทึกบิลการขาย</button>
                                        </div> 
                                    </div>
                                </form>

                                </div> 
                            <input  type="hidden" name="output2" id="output2" value="<?php echo $output2; ?>">
                            
                           
                </form>
          <!-- jQuery 2.0.2 -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>



<script>
        $(document).ready(function() {
            var maxGroup = 10;

            //add more fields group

            $(".btn-success").click(function() {
                if ($('body').find('.res_c').length < maxGroup) {
                    var fieldHTML = '<div class="form-group row res_c">' + $(".res_cc")
                        .html() + '</div>';
                    $('body').find('.res_c:last').after(fieldHTML);
                } else {
                    alert('Maximum ' + maxGroup + ' groups are allowed.');
                }
            });

            $("body").on("click", ".btn-danger", function() {
                $(this).parents(".res_c").remove();
            });
        });
    </script>





    </body>
</html>
<?php }else{    
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../index.php'>";
}
?>
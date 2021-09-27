<?php

  include "../../../server.php";
  $abc=$_GET["user11"];
	 $sql99 = "SELECT * FROM members where user_name = '$abc'";
	 $query99 = mysqli_query($objCon,$sql99);
  while($result99=mysqli_fetch_array($query99,MYSQLI_ASSOC))
  { 
	  $name = $result99["memb_name"];
	  $lname = $result99["memb_lastname"];
  }


     $abc11=$_GET["app"];
     $sql11 = "SELECT * FROM appointment where app_id = '$abc11'";
     $query11 = mysqli_query($objCon,$sql11);
     while($result11=mysqli_fetch_array($query11,MYSQLI_ASSOC))
     { 
         $name11 = $result11["app_id"];
         $servstart = $result11["serv_start"];
         $servcompleted = $result11["serv_completed"];
     }

     $abc22=$_GET["m"];
     $sql22 = "SELECT * FROM medical_information where m_id  = '$abc22'";
   		$query22 = mysqli_query($objCon,$sql22);
		while($result22=mysqli_fetch_array($query22,MYSQLI_ASSOC))
        {
        $weigth123 = $result22["weigth"];
        $ph123 = $result22["ph"];
        }



?>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
       
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Clinic</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />
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
    </head>
    <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        <?php
include "../profile/header.php";
?>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../img/11.jpg" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>สวัสดี&nbsp&nbspคุณ<?php echo $name123; ?><br><center><small> <?php echo $positionname123; ?> </small></center></br></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="../../index.php">
                                <i class="fa fa-dashboard"></i> <span>หน้าแรก</span>
                            </a>
                        </li>
                        <li  >
                            <a href="../profile/profile_admin.php">
                                <i class="fa fa-folder"></i> <span>ประวัติส่วนตัว</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="../service/service.php">
                                <i class="fa fa-plus-circle"></i> <span>การรักษา</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../service/prescribing.php">
                                <i class="fa fa-inbox"></i> <span>การสั่งจ่ายยาผู้ป่วย</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../service/app.php">
                                <i class="fa fa-clock-o"></i> <span>การนัดหมายผู้ป่วย</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li>
                            <a href="../check/check_member.php">
                                <i class="fa fa-th"></i> <span>ตรวจสอบข้อมูลผู้ป่วย</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i>
                                <span>จัดการข้อมูล</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/employees.php"><i class="fa fa-angle-double-right"></i>ผู้ใช้</a></li>
                                <li><a href="../charts/position.php"><i class="fa fa-angle-double-right"></i>ตำแหน่ง</a></li>
                            </ul>
                        </li>
                        
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                            <li class="active" ><a href="../appointment/postpone_appdentist.php"><i class="fa fa-angle-double-right"></i>เลื่อนนัดผู้ป่วย</a></li>
                                <li><a href="../appointment/checkapp_dentist.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางทันตแพทย์</a></li>
                                <li><a href="../../../admin/pages/appointment/checkapp_member.php"><i class="fa fa-angle-double-right"></i>ตรวจสอบตารางผู้ป่วย</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i>
                                <span>รายงาน</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../report/report_members.php"><i class="fa fa-angle-double-right"></i>สรุปผู้ป่วยที่เข้ามารักษา</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="../../../logout.php">
                                <i class="fa fa-laptop"></i> <span>ออกจากระบบ</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        
            </aside>

            </aside>
            

            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>การรักษา</a></li>
                        <li class="active">แบบฟอร์มการรักษา</li>
                    </ol>
                    <br>
                </section>
                </section>
                
                            <!-- split buttons box -->
              <!-- general form elements -->
            <center>
			<?php
            function DateThai($strDate)
{
            $strYear = date("Y",strtotime($strDate))+543;
            $strMonth= date("n",strtotime($strDate));
            $strDay= date("j",strtotime($strDate));
            $strMonthCut = Array("","มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน","พฤษภาคม", "มิถุนายน", "กรกฏาคม", "สิงหาคม","กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
            $strMonthThai=$strMonthCut[$strMonth];
            return "$strDay $strMonthThai $strYear";
}

            $strDate =date("d-m-Y");
            echo "".DateThai($strDate);
          ?>
		  </center>
          <br>
              <div class="col-md-12">
              <div class="modal-content" >
              <div class="box box-primary">
              <div class="box-header">
              <meta http-equiv=Content-Type content="text/html; charset=windows-874">
              <form action="insertform2_service.php" name="frmAdd" method="post" OnSubmit="return onSave();">
            <?php
				include "../../../server.php";
   				$sql = "SELECT * FROM service order by serv_id  asc";
   				$query = mysqli_query($objCon,$sql);
				while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                { $aaa = $result["serv_id"];}
	            $total=$aaa+1;

			?>     
                                    <form role="form">
                                    <div class="box-body">
                                    <div class="row align-items-center">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="serv_id">รหัสการตรวจรักษา</label>
                                            <input type="text" class="form-control" name="txtServId" value = "<?php echo $total; ?>" readonly>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="user_name">ชื่อผู้ป่วย</label>
                                            <input type="text" class="form-control" name="txtUser" value="<?php echo $name.'   '.$lname;?>" readonly >
                                        </div>
                                        
                                        <div class="form-group col-md-4">
                                            <label for="app_id">รหัสการนัดหมาย</label>
                                            <input type="text" class="form-control" name="txtAppId" 
                                            value="<?php echo $name11 ;?>" readonly >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="serv_start">เวลาเริ่มการรักษา</label>
                                            <input type="time" class="form-control" name="txtServStart"
                                            value="<?php echo $servstart ;?>" readonly  >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="serv_completed">เวลาสิ้นสุดการรักษา</label>
                                            <input type="time" class="form-control" name="txtServCompleted" 
                                            value="<?php echo $servcompleted;?>" readonly >                                        </div>
                                        </div>

                                        <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="weigth">น้ำหนัก</label>
                                            <input type="text" class="form-control" name="txtWeigth" 
                                            value="<?php echo $weigth123;  ?>" readonly >
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="ph">ความดัน</label>
                                            <input type="text" class="form-control" name="txtPh" 
                                            value="<?php echo $ph123 ;  ?>" readonly >
                                        </div>
                                        <div class="form-group col-md-4">
                                             <label for="status_name" >สถานะ</label>
                                             <select name="txtStatusName" class="form-control" >
                                             <option value="">เลือกสถานะ</option>
											<?php
		                    				$sql9= "SELECT * FROM `status`  WHERE `status_id` = '3' ORDER BY status_id ASC";
											$result9=mysqli_query($objCon,$sql9);
		                    				while($row9=mysqli_fetch_array($result9,MYSQLI_ASSOC))
			                				if($row9[status_id]==$statusid123){
				            				echo "<option value='$row9[status_id]' selected>$row9[status_name]</option>";
		                    				}elseif($row9[status_name]!=$statusid123 ){
				            				echo "<option value='$row9[status_id]' >$row9[status_name]</option>"; 
											} 
		                					?> 
		  									</select>   
                                        </div> 
                                        </div>
                                        
                                        
                                        <div class="form-group col-md-12">
                                            <label for="serv_detail">รายการรักษา</label>
                                            <div class="box">
                                         <div class="box-body table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                      
                                        <th><center>ประเภทการรักษา<center></th>
                                        <th style="width: 200px" ><center>ราคา<center></th>
                                        </tr>           
                                        </thead>

                                        
                                        <?php
                                            include "../../../server.php";
                                            $stmt =$objCon->prepare("SELECT * FROM treatment_type order by treat_id  asc");
                                            $stmt ->execute();
                                            $result = $stmt ->get_result();
   				                            while($row=$result->fetch_array()){
                                        
			                            ?>   
 
                               <tr>
                               <td> <input  type="checkbox" name="check[]" value="<?php echo $row['treat_id'];?>">
                               <label> &nbsp&nbsp<?php echo $row['treat_name'];?></label></td>
                               <td> <input  type="text"  name="chec[]" value="<?php echo $row['treat_price'];?>">
                               
            <?php
            }
            ?>  
            </table>
            </div>
                                      
                                        <div class="form-group col-md-12">
                                          <br>
                                            <label for="ph">รายละเอียด</label>
                                            <textarea type="text" class="form-control" name="txtServDetail"  ></textarea>
                                        </div>

                                      
                                        </div>
                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">ถัดไป</button>
                                        <input type="hidden" name="user11" id="user11" value="<?php echo $_GET["user11"];?>" />
                                        <td align="center"><a href="service.php?user11=<?php echo $result["user_name"];?>"><button type="button" class="btn btn-Light">ย้อนกลับ</button></a></td>
                                        </div> 
                                        
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>
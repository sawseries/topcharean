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

     $abc22=$_GET["serv"];
     $sql22 = "SELECT * FROM service where serv_id  = '$abc22'";
     $query22 = mysqli_query($objCon,$sql22);
     while($result22=mysqli_fetch_array($query22,MYSQLI_ASSOC))
     {
     $servid123 = $result22["serv_id"];
     }

     $sql22 = "SELECT * FROM drugs where drugs_id  = '$abc22'";
     $query22 = mysqli_query($objCon,$sql22);
     while($result22=mysqli_fetch_array($query22,MYSQLI_ASSOC))
     {
     $drugs_id = $result22["drugs_id"];
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
                        <li  >
                            <a href="../service/service.php">
                                <i class="fa fa-plus-circle"></i> <span>การรักษา</span> 
                                <small class="badge pull-right bg-green"></small>
                            </a>
                        </li>
                        <li class="active">
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
                                <li><a href="../../pages/charts/employees.php"><i class="fa fa-angle-double-right"></i>ผู้ใช้</a></li>
                                <li><a href="../../pages/charts/position.php"><i class="fa fa-angle-double-right"></i>ตำแหน่ง</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-calendar"></i>
                                <span>นัดหมาย</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../appointment/postpone_appdentist.php"><i class="fa fa-angle-double-right"></i>เลื่อนนัดผู้ป่วย</a></li>
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
                        <li><a href="#"><i class="fa fa-dashboard"></i>การสั่งจ่ายยาผู้ป่วย</a></li>
                        <li class="active">แบบฟอร์มการสั่งจ่ายยา</li>
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
              <form action="insertform2_prescribing.php" name="frmAdd" method="post">
                                
                             
                                    <form role="form">
                                    <div class="box-body">
                                    <div class="row align-items-center">
                                    <div class="form-row">

                                    <?php
	            include "../../../server.php";
            	$sql = "SELECT * FROM prescribing order by pres_id asc ";
   	            $query = mysqli_query($objCon,$sql);
	            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
	                { $aaa = $result["pres_id"];}
	                $total=$aaa+1;

                    ?> 
                                        <div class="form-group col-md-3">
                                            <label for="pres_id">รหัสการสั่งจ่ายยา</label>
                                            <input type="text" class="form-control" name="txtPresId" value = "<?php echo $total; ?>" readonly>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="user_name">ชื่อผู้ป่วย</label>
                                            <input type="text" class="form-control" name="txtUser" value="<?php echo $name.'   '.$lname;?>" readonly >
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="serv_id">รหัสการตรวจรักษา</label>
                                            <input type="text" class="form-control" name="txtServId"
                                            value="<?php echo $servid123 ;?>" readonly >
                                        </div>
                                        <div class="form-group col-md-3">
                                             <label for="status_name" >สถานะ</label>
                                             <select name="txtStatusName" class="form-control" >
                                             <option value="">เลือกสถานะ</option>
											<?php
		                    				$sql9= "SELECT * FROM `status`  WHERE `status_id` = '4' ORDER BY status_id ASC";
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

                                        <div class="form-group col-md-12">
                                        <table class="table table-bordered">
  <thead>
    <tr>
      <th><center><scope="col">ลำดับ</th>
      <th><center><scope="col">รายการรักษา</th>
    </tr>
  </thead>
  
  <?php
	            include "../../../server.php";
            	$sql = "SELECT * FROM service_detail,treatment_type 
                where treatment_type.treat_id=service_detail.treat_id && serv_id  = '$abc22'";
                $i = 1; 
                $query = mysqli_query($objCon,$sql);
	            while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
                    { 
   ?> 
  <tbody>
    <tr>
    <td><center><?php echo $i;?><center></td>
    <td><?php echo $result["treat_name"];?></td>
    </tr>
    <?php
            $i++;
            }
    ?>  
  </tbody>
</table>
</div>
                                        
                                        <div class="form-group col-md-12">
                                            <label for="serv_detail">รายการยาเวชภัณฑ์</label>
                                            <div class="box">
                                         <div class="box-body table-responsive">
                                        <table id="example2" class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                        <th><center>ประเภทยาเวชภัณฑ์<center></th>
                                        <th><center>จำนวน<center></th>
                                        <th><center>หน่วยนับ<center></th>
                                        </tr>           
                                        </thead>

                                        
                                        <?php
                                            include "../../../server.php";
                                            $stmt =$objCon->prepare("SELECT * FROM drugs WHERE `status` = 'อนุมัติ' GROUP by drugs_name_eng asc");
                                            $stmt ->execute();
                                            $result = $stmt ->get_result();
   				                            while($row=$result->fetch_array()){
                                        
			                            ?>   
 
                               <tr>
                               <td> <input  type="checkbox" name="check[]" value="<?php echo $row['drugs_id'];?>">
                               <label> &nbsp&nbsp<?php echo $row['drugs_name_eng'];?></label></td>
                               <td> <input  type="number"  name="chec[]" > </td>
                                            <td><select type="text" class="form-control" name="txtUnitId[]">
												<option value="">เลือกหน่วยนับ</option>
												<?php
												include "../../../../server.php";
												$strSQL = "SELECT * FROM unit_count ORDER BY unit_id ASC";
												$objQuery = mysqli_query($objCon,$strSQL);
												while($objResuut = mysqli_fetch_array($objQuery))
												{
												?>
												<option value="<?php echo $objResuut["unit_id"];?>"><?php echo $objResuut["unit_name"];?></option>
												<?php
												}
												?>
		  									</select>    </td>                   

                               </tr>
                               
            <?php
            }
            ?>  
            </table>
            </div>


                                        <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">เสร็จสิ้น</button>
                                        <input type="hidden" name="user11" id="user11" value="<?php echo $_GET["user11"];?>" />
                                        <td align="center"><a href="prescribing.php?user11=<?php echo $result["user_name"];?>"><button type="button" class="btn btn-Light">ย้อนกลับ</button></a></td>
                                        </div> 
                                        
                                    </div> 
                                </form>
                                </div> 
                                    </div> 
        <!-- jQuery 2.0.2 -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../js/AdminLTE/app.js" type="text/javascript"></script>

    </body>
</html>
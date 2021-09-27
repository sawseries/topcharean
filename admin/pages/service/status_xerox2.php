<?php
 	include ('../../../server.php');
$confirm= $_GET["appid"];
     $num=  $_GET["num"];
     if( $num==1){
   $sql = "UPDATE appointment SET status_id = '3' WHERE app_id  = ' $confirm'  ";
   $query = mysqli_query($objCon,$sql);

  }else if( $num==2){
    $sql = "UPDATE appointment SET status_id = '2' WHERE app_id  = ' $confirm'  ";
    $query = mysqli_query($objCon,$sql);
 }
 
  if($query) {?>
   <?php echo "<meta http-equiv='refresh'content='0;url=service.php'>";
   }
?>
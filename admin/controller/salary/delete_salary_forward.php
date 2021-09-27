<?php



include "./../extends.php";

    if(isset($_GET["id"])){
        
        $id=$_GET["id"];
        $del_salary_fw_str="delete from salary_forward where id='$id'";        
        $del_salary_fw=mysqli_query($objCon,$del_salary_fw_str); 
        
    }
    
    
    redirect_para("salary",array("success"=>"ลบข้อมูลการเบิกเงินล่วงหน้าแล้ว"));
<?php

include "./../extends.php";



    if(isset($_POST["action"])=="insert"){
        
        $instr_stock_str="insert into stock set "
                . "stock_id='".$_POST["txtstock_id"]."',"
                . "stock_nm='".$_POST["txtstock_nm"]."',"
                . "price='".$_POST["txtprice"]."',"
                . "remain='".$_POST["txtquan"]."',"
                . "active=1,"
                . "remark='".$_POST["txtremark"]."'"; 
        
        
         $insert_stock=mysqli_query($objCon,$instr_stock_str); 
        
        
        $instr_stocktran_str="insert into stock_transection set "
                . "stock_id='".$_POST["txtstock_id"]."',"
                . "stock_nm='".$_POST["txtstock_nm"]."',"
                . "quan='".$_POST["txtquan"]."',"
                . "remark='first_insert',"
                . "status='I'"; 
                
         $insert_stock_tran=mysqli_query($objCon,$instr_stocktran_str);   
    }
    
    
    
    redirect_para("stock",array("success"=>"เพิ่มข้อมูลสำเร็จ"));
    
    
    
    
    //I=เพิ่มใหม่
    //A=เพิ่ม
    //S=ขาย
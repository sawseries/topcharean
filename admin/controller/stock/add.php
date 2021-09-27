<?php

include "./../extends.php";



    if(isset($_POST["action"])=="add"){
        $add=$_POST["txtadd"];
        $update_stock_str="update stock set "
                . "remain=remain+$add "
                . "where stock_id='".$_POST["txtastock_id"]."'"; 
        
        
        $update_stock=mysqli_query($objCon,$update_stock_str); 
        
        
        $add_stocktran_str="insert into stock_transection set "
                . "stock_id='".$_POST["txtastock_id"]."',"
                . "stock_nm='".$_POST["txtastock_nm"]."',"
                . "quan='".$_POST["txtadd"]."',"
                . "remark='".$_POST["txtaremark"]."',"
                . "status='A'"; 
                
         $add_stock_tran=mysqli_query($objCon,$add_stocktran_str);   
    }
    
    
    
    redirect_para("stock",array("success"=>"เพิ่มจำนวนสินค้าสำเร็จ"));
    
    
     //I=เพิ่มใหม่
    //A=เพิ่ม
    //S=ขาย
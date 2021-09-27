<?php

include "./../extends.php";



    if(isset($_POST["action"])=="add"){
        $sell=$_POST["txtsell"];
        
        $update_stock_str="update stock set "
                . "remain=remain-$sell "
                . "where stock_id='".$_POST["txtsstock_id"]."'"; 
        
        
        $update_stock=mysqli_query($objCon,$update_stock_str); 
        
        
        $sell_stocktran_str="insert into stock_transection set "
                . "stock_id='".$_POST["txtsstock_id"]."',"
                . "stock_nm='".$_POST["txtsstock_nm"]."',"
                . "quan='".$_POST["txtsell"]."',"
                . "remark='".$_POST["txtsremark"]."',"
                . "status='S'"; 
                
         $sell_stock_tran=mysqli_query($objCon,$sell_stocktran_str);   
    }
    
    
    
    redirect_para("stock",array("success"=>"ลบจำนวนที่ขายสินค้าสำเร็จ"));
    
    
     //I=เพิ่มใหม่
    //A=เพิ่ม
    //S=ขาย
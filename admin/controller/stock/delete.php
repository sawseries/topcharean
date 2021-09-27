<?php

include "./../extends.php";



    if(isset($_GET["stock_id"])){
        $stock_id=$_GET["stock_id"];
        
        $update_stock_str="update stock set "
                . "active=0 "
                . "where stock_id='$stock_id'"; 
        
        
        $update_stock=mysqli_query($objCon,$update_stock_str); 
    }
    
    
    redirect_para("stock",array("success"=>"ลบสินค้าแล้ว"));


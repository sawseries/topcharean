<?php

include "./../extends.php";

    $sstock_id="";
    $sstock_nm="";
    
    $stockid;
    $stock_str = "select * from stock where stock_id like '".date("Ymd")."%'";
    $stock_qty  = mysqli_query($objCon,$stock_str);      
    $chk_stockid = mysqli_num_rows($stock_qty);
  
    if($chk_stockid>0){
        
         $stock_str = "select 1000+(max(CONVERT(substr(stock_id,9,3),SIGNED INTEGER)))+1 as stockid "
                 . "from stock where stock_id like '".date("Ymd")."%'";
         $stock_qty  = mysqli_query($objCon,$stock_str);      
         $stockid = mysqli_fetch_assoc($stock_qty);
         $stockid = date("Ymd").substr($stockid["stockid"],1,3); 
         
    }else{
       $stockid=date("Ymd")."001"; 
    }
    

 
    ///////////////////////////////////////////////////////////////
  
    
    $stock_str="";
    
    if($_POST["search"]){

    $stock_str="select * from stock";
       
     if(($_POST["txtstock_id"]!="")||($_POST["txtstock_nm"]!="")){
        $stock_str.=" where ";
    }
    
    if($_POST["txtstock_id"]!=""){
        
        $stock_str.=" stock_id like '%".$_POST["txtstock_id"]."%'";    
        $sstock_id=$_POST["txtstock_id"];
    }
    
    if(($_POST["txtstock_id"]!="")&&($_POST["txtstock_nm"]!="")){
        $stock_str.=" and ";
    }
    
    if($_POST["txtstock_nm"]!=""){         
        $stock_str.=" stock_nm like '%".$_POST["txtstock_nm"]."%'";
        $sstock_nm=$_POST["txtstock_nm"];
    }
       
        $stock_str.=" order by id desc";
    
    }else{
    $stock_str="select * from stock where active = 1 order by id desc";    
    }
    
    $stock=mysqli_query($objCon,$stock_str);   
    $chk_stock = mysqli_num_rows($stock);
    
   
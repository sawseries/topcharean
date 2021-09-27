<?php

include "./../extends.php";
if ($_GET["stock_id"]) {
    

//    if($_POST["search"]){
//       $tran_str="select * from stock_transection where stock_id='".$_POST["hdnstock_id"]."' and status='".$_POST["status"]."'";  
//    }else{
//       
//    }
    $tran_str = "select * from stock_transection where stock_id='" . $_GET["stock_id"] . "'";
    $transection = mysqli_query($objCon, $tran_str);
    $chk_stock = mysqli_num_rows($transection);

    $stock_str = "select * from stock where stock_id='" . $_GET["stock_id"] . "'";
    $stock_qry = mysqli_query($objCon, $stock_str);
    $stock = mysqli_fetch_assoc($stock_qry);
}

if ($_POST["search"]) {
    $tran_str = "";
    if($_POST["status"]!=""){
    $tran_str = "select * from stock_transection where stock_id='" . $_POST["hdnstock_id"] . "' and status='" . $_POST["status"] . "'";
    }else{
     $tran_str = "select * from stock_transection where stock_id='" . $_POST["hdnstock_id"] . "'";   
    }

    $transection = mysqli_query($objCon, $tran_str);
    $chk_stock = mysqli_num_rows($transection);

    $stock_str = "select * from stock where stock_id='".$_POST["hdnstock_id"]."'";
    $stock_qry = mysqli_query($objCon, $stock_str);
    $stock = mysqli_fetch_assoc($stock_qry);
}


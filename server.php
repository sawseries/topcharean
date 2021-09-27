<?php
    $servername = "us-cdbr-east-04.cleardb.com";
    $username = "bfe00515011654";
    $password ="1f1c0818";
    $dbname = "heroku_4aaeb038dd4b04d";


    // Create Connection
    $objCon = mysqli_connect($servername, $username, $password, $dbname);
         
        mysqli_set_charset($objCon, "utf8");
?>



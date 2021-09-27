<?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "eye";


    // Create Connection
    $objCon = mysqli_connect($servername, $username, $password, $dbname);
         
        mysqli_set_charset($objCon, "utf8");
?>



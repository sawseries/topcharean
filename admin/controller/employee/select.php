<?php

include "./../extends.php";

$sql = "select * from employee order by id desc";
$employee = mysqli_query($objCon,$sql);
$cnt_emp = mysqli_num_rows($employee);


<?php
session_start();
?>
<?php
$user999 = $_SESSION["UserID"];
include "../server.php";
$sql = "SELECT * FROM login WHERE user = '$user999'";
$query = mysqli_query($objCon, $sql);
while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    $name = $result["name"];
}

$root_direct = explode("\\", (String) __DIR__);
$root_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $root_direct[3];
define("ADMIN_PATH", $root_path . "/admin");
?>  

<meta charset="UTF-8">
<title>Eye Station</title>
<link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
<!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />-->
<link href="./css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="./css/ionicons.min.css" rel="stylesheet" type="text/css" />
<link href="./css/morris/morris.css" rel="stylesheet" type="text/css" />
<link href="./css/AdminLTE.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Athiti:wght@500&family=Kanit:wght@300&display=swap" rel="stylesheet">
<link href="./css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="./js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="./js/AdminLTE/app.js" type="text/javascript"></script>




<script src="./js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="./js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="./js/AdminLTE/app.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script>
    $(document).ready(function () {
        $('#table_form').DataTable({
            "aaSorting": [[0, 'ASC']]
        });

        $('#tbl_employee').DataTable({
            "aaSorting": [[0, 'ASC']]
        });

        $('#tbl_salary_month').DataTable({
            "aaSorting": [[0, 'ASC']]
        });
        
         $('#tbl_stock').DataTable({
            "aaSorting": [[0, 'ASC']]
        });
        
    });

</script>

<style>
    body { font-family: 'Athiti', sans-serif;
           font-family: 'Kanit', sans-serif; }

    table th{ text-align: center;}


    .block{
        padding: 2em;
        background-color: white;
        border-top:2px solid #cccccc;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        margin-bottom:10px;
    }

    .s_blue{
        color:#2C73DE;
    }

    .error {
        color: red;
    }

    .alert{
        margin: 1em;

    }
</style>


<header class="header">
    <a href="index.php" class="logo">
        Admin Eye Station
    </a>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"></a>
        <div class="navbar-right">
            <ul class="nav navbar-nav"></ul>
        </div>


    </nav>
</header>

<body class="skin-black">


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Eye Station </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images_loginn/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_loginn/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_loginn/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_loginn/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_loginn/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor_loginn/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_loginn/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_loginn/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor_loginn/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_loginn/util.css">
	<link rel="stylesheet" type="text/css" href="css_loginn/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
					


						<center><img src="admin/img/eee.png" class="img-circle" alt="User Image" width="75" height="75" /></center>
						

					<span class="login100-form-title p-b-32" >
						<center>Login</center>
					</span>

					<form action="check_login.php" method="post">
					<span class="txt1 p-b-11">
						Username 
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="txtUsername" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="txtPassword" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button type="submil" name="login_user" class="login100-form-btn">
							Login
						</button>
					</div>
					</form>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor_loginn/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_loginn/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_loginn/bootstrap/js/popper.js"></script>
	<script src="vendor_loginn/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_loginn/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor_loginn/daterangepicker/moment.min.js"></script>
	<script src="vendor_loginn/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor_loginn/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js_loginn/main.js"></script>

</body>
</html>
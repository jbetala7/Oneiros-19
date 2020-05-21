<?php
    $page = 'registration';
    $title = 'Registration Page';
    include 'header.php';
    include 'dbc.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset ($_POST['email']))
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $college = $_POST['college'];
            $phone =$_POST['phone'];
            $password =md5($_POST['password']);
            $sql = "INSERT INTO user_details VALUES('$name', '$email', '$password','$college',$phone);";
            $query = mysqli_query($conn ,$sql);
            if($query)
            {
                echo "<script>console.log('Success');</script>";
            }
            else
            {
                echo mysqli_error($conn);
            }

        }
    }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('bg-9.jpg');">
			<div class="wrap-login100 p-l-60 p-r-60 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-20">
						Registration Form
					</span>

					<a href="#" class="btn-face m-b-15">
						MUJ
					</a>

					<a href="other.html" class="btn-google m-b-15">
						OTHER
					</a>
					
					
					<div class="wrap-input100 dual validate-input" data-validate = "required">
						<input class="input100" type="text" name="first" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 dual validate-input" data-validate = "required">
						<input class="input100" type="text" name="last" placeholder="Last Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Ex: xy@z.com">
						<input class="input100" type="email" name="email" placeholder="Email" >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "required">
						<input class="input100" type="password" name="password" placeholder="Password" >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 dual validate-input" data-validate = "required">
						<input class="input100" type="tel" name="tel" placeholder="Phone No." >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 dual validate-input" data-validate = "required">
						<input class="input100" type="tel" name="rno" placeholder="Registration No." >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already Registed?
						</span>

						<a href="#" class="txt2 bo1">
							Login Here!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
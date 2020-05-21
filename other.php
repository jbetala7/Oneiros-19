<?php
    $page = 'registration';
    $title = 'Registration Page';
	include 'header.php';
	include 'functions.php';
    include 'dbc.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset ($_POST['email']))
        {
			$name = $_POST['first'] ." " . $_POST['last'];
			$name = ucwords($name);
            $email = strtolower($_POST['email']);
            $college = strtoupper($_POST['college']);
			$phone =$_POST['tel'];
			$rno = 0;
			$password =md5($_POST['password']);
			$whatsapp = $_POST['whatsapp'];
			if(isset($_POST['ref']))
			{
				$ref = strtoupper($_POST['ref']);
			}
			else
			{
				$ref = 'Null';
			}
			if(isset($_POST['ambassador']))
			{
				$ambassador = $_POST['ambassador'];
			}
			else{
				$ambassador = 'No';
			}
			
            $sql = "INSERT INTO user_details VALUES('$name', '$email', '$password','$college',$phone,'$rno','$ref','$ambassador','$whatsapp');";
            $query = mysqli_query($conn ,$sql);
            if($query)
            {
				sendmail($email, $name);
				redirectlogin();
            }
            else
            {
                echo mysqli_error($conn);
            }

        }
    }
?>  

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('form/bg-9.jpg');">
			<div class="wrap-login100 p-l-60 p-r-60 p-t-32 p-b-20 m-t-100">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">
					<span class="login100-form-title p-b-20">
						Registration Form
					</span>

					<a href="registration.php" class="btn-google m-b-15">
						MUJ
					</a>

					<a href="#" class="btn-face m-b-15">
						OTHER
					</a>
					
					
					<div class="wrap-input100 dual validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="first" placeholder="First Name">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 dual validate-input" data-validate = "Username is required">
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
					<div class="wrap-input100 validate-input" data-validate = "required">
						<input class="input100" type="text" name="college" placeholder="College" >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 dual validate-input" data-validate = "required">
						<input class="input100" type="tel" name="tel" placeholder="Phone Number" minlength='10' >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 dual validate-input" data-validate = "required">
						<input class="input100" type="tel" name="whatsapp" placeholder="WhatsApp Number" minlength='10' >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="text" name="ref" placeholder="Referal Code" >
						<span class="focus-input100"></span>
					</div>
					
					<h6 class="margin-auto" >Want To Be a Campus Ambassador &nbsp <input type="checkbox" name="ambassador" value="Yes"></h6>
					

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-25">
						<span class="txt2">
							Already Registered?
						</span>

						<a href="login.php" class="txt2 bo1">
							Login Here!
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php 
include 'footer.php';
?>
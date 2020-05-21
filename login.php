<?php
    $page = 'registration';
    $title = 'Login-Page';
	include 'dbc.php';
	include 'functions.php';
    session_start();
    $valid = 1;
    if(isset($_SESSION['user']))
    {
        header("location: index.php");
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset ($_POST['email']) && isset($_POST['password']))
        {
            $email = $_POST['email'];
            $password =md5($_POST['password']);
            $sql = "SELECT *  FROM user_details WHERE Email = '$email' AND Password = '$password';";
            $query = mysqli_query($conn ,$sql);
            $num = mysqli_num_rows($query);
            if($num > 0)
            {
                $_SESSION['user'] = $email;
				header('Location: events.php');
            }
            else
            {
                $valid = 0;
            }

        }
	}
	include 'header.php';
?>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('form/bg-9.jpg');">
			<div class="wrap-login100 p-l-60 p-r-60 p-t-32 p-b-20 m-t-100">
				<form class="login100-form validate-form flex-sb flex-w" action="" method="POST">
					<span class="login100-form-title p-b-20">
						Login Form
					</span>
					<div class="wrap-input100">
						<input class="input100" type="email" name="email" placeholder="Email" required >
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>

					<div class="w-full text-center p-t-25">
						<span class="txt2">
							Not Registered?
						</span>

						<a href="registration.php" class="txt2 bo1">
							Register Here!
						</a>
						<?php if($valid == 0)
						{
							echo "<p style='color:red; font-weight:700;' class='p-t-10'>Invalid Email Address Or Password</p>";
						}?>
					</div>
				</form>
			</div>
		</div>
	</div>


<?php include 'footer.php';?>


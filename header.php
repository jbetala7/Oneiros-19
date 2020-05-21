<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang='en'>

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="theme-color" content="#000">
		<meta name="description" content="Onerios'19">
		<link rel="apple-touch-icon" href="assets/img/favicon.png">
  		<meta name="keywords" content="Oneiros, Oneiros'19, MUJ, Manipal">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php 
		if($page=='campus')
		{
			echo "<meta name='viewport' content= 'width=device-width, user-scalable=no'>";
		}
		
		?>
		<title><?php echo $title?></title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
		<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
		<!-- Popup CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
		<!-- Switcher CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/switcher-style.css">
		<!-- Animate CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
		<!-- Main style CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<!-- Responsive CSS -->
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="all" />
		
		<!--Spinning Oneiros
		<link rel="stylesheet" type="text/css" href="assets/css/text.css">-->
		<!-- Favicon Icon -->
		<link rel="icon" href="assets/img/favicon.png" type="image/icon type">

		<!-- Manifest-->
		<link rel="manifest" href="manifest.json">

		<!-- Bootstrap CSS cs acc -->
		<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO'
			crossorigin='anonymous'>
	
		<!-- Google Font ca acc -->
		<link href='https://fonts.googleapis.com/css?family=Nunito:200,300,400,700' rel='stylesheet'>
	

		
        
		 


		<!--Form Section-->
<?php
		if(isset($_SESSION))
		{

		}
		else
		{
			session_start();
		}
		if($page == 'registration')
		{
			echo "<link rel='stylesheet' type='text/css' href='form/fonts/Linearicons-Free-v1.0.0/icon-font.min.css'>
				<link rel='stylesheet' type='text/css' href='form/css/util.css'>
				<link rel='stylesheet' type='text/css' href='form/css/main.css'>";
		}
		//  Musica Major Events  //
		if($page == 'majorevents')
		{
			echo "<link rel='stylesheet' href='musica/style.css'>
			<link rel='stylesheet' href='assets/css/trans.css'>
        	<script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js'></script>
        	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>";
		}

		// Alime Event Page //
		if($page == 'events')
		{
			echo "<link rel='stylesheet' href='alime/style.css'>
			<link rel='stylesheet' href='port/event-style.css'>";
		}
		
		//Home Particle Section-->
		if($page == 'index')
		{
			echo "<link rel='stylesheet' href='particle/style.css'>
			<link rel='stylesheet' type='text/css' href='assets/css/fullpage.css' media='all' />
			";
			//New Anuuj ONO
			echo "<link rel='stylesheet' type='text/css' href='assets/css/onoTEXT2CSS.css' media='all' />";
		}
		if($page == 'team')
		{
			echo "<link rel='stylesheet' href='team/css/open-iconic-bootstrap.min.css'>
			<link rel='stylesheet' href='team/css/animate.css'>
			<link rel='stylesheet' href='team/css/owl.theme.default.min.css'>
			<link rel='stylesheet' href='team/css/aos.css'>
			<link rel='stylesheet' href='team/css/ionicons.min.css'>
			<link rel='stylesheet' href='team/css/bootstrap-datepicker.css'>
			<link rel='stylesheet' href='team/css/jquery.timepicker.css'>
			<link rel='stylesheet' href='team/css/flaticon.css'>
			<link rel='stylesheet' href='team/css/icomoon.css'>
			<link rel='stylesheet' href='team/css/style.css'>";
		}

		if($page == 'campus')
		{
			echo "<link rel='stylesheet' href='campus/css/style.css' />";
		}
		
		if($page=='accomodation')
		{
			echo "<link href='https://fonts.googleapis.com/css?family=Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap' rel='stylesheet'>
			<link rel='stylesheet' href='estate/css/style.css'/>";
		}

		if($page == "funzone")
		{
			echo "<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
			<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
			<link rel='stylesheet' href='funzone/funzone.css'>";
		}
?>
</head>
<body data-spy="scroll" data-target=".header" data-offset="50">
<!-- Page loader -->
<div id='preloader'></div>
	<main>
<?php
	
	include 'navbar.php';
?>

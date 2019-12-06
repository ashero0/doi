<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Cook Counseling Center | <?= $pageTitle ?></title>

	<!-- Set viewport manually so the content resizes for different devices. -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Import styles. -->
	<?php if(isset($stylesheet)): ?>
		<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/<?= $stylesheet ?>.css">
	<?php endif; ?>
	<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/global.css">

	<!-- Give Javascript access to some of PHP's variables. -->
	<script>
		var base_url = '<?= BASE_URL ?>';
	</script>

	<!-- <script src="<?= BASE_URL ?>/public/js/header.js"></script> -->

	<?php if(isset($script)): ?>
		<script src="<?= BASE_URL ?>/public/js/<?= $script ?>.js"></script>
	<?php endif; ?>

	<!-- Import Bootstrap stuff -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= BASE_URL ?>/public/css/custom.css">
</head>





<body>

	<div id="universal-access">
		<nav class="navbar navbar-dark bg-dark">
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li><img src="<?= BASE_URL ?>/public/assets/universalaccess.svg"></li> -->
					<!-- <li>test</li> -->
				</ul>
			</div>
		</nav>
	</div>

	<!-- Header -->
	<div id="header">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="<?=BASE_URL?>">
				Cook Counseling Center
			</a>
		</nav>
	</div>

	<div id="navigation">
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  		About
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  		  <a class="dropdown-item" href="<?=BASE_URL?>about/about-cook">About Cook Counseling Center</a>
			  		  <a class="dropdown-item" href="<?=BASE_URL?>about/hours-and-location">Hours & Location</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/staff">Staff</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/contact-us">Contact Us</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/confidentiality-policy">Confidentiality Policy</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/forms">Forms</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/outreach">Outreach</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/giving">Giving</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>about/graduate-training">Graduate Training</a>
					  <a class="dropdown-item" target="_blank" href="https://students.vt.edu/">Student Affairs</a>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  		Services
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  		<a class="dropdown-item" href="<?=BASE_URL?>services/emergency-services">Emergency Services</a>
			  		<a class="dropdown-item" href="<?=BASE_URL?>services/schedule-appointment">Schedule an Appointment</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>services/individual-counseling">Individual Counseling</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>services/group-counseling">Group Counseling</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>services/psychiatric-services">Psychiatric Services</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>services/sport-psychology">Sport Psychology</a>
				</div>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  		Self-Care
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  		<a class="dropdown-item" href="<?=BASE_URL?>self-care/alcoholism">Alcoholism</a>
			  		<a class="dropdown-item" href="<?=BASE_URL?>self-care/add">Attention Deficit Disorder (ADD)</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>self-care/eating-disorders">Eating Disorders</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>self-care/sexual-assault">Sexual Assault</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>self-care/trauma">Trauma</a>
					  <a class="dropdown-item" href="<?=BASE_URL?>self-care/well-being">Well-Being at Virginia Tech</a>
				</div>
		  	</li>
		  </ul>
		</nav>
		<!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Navbar</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Features</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="#">Pricing</a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Dropdown link
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="#">Action</a>
				  <a class="dropdown-item" href="#">Another action</a>
				  <a class="dropdown-item" href="#">Something else here</a>
				</div>
			  </li>
			</ul>
		  </div>
		</nav> -->
	</div>

	<div class="page-content">
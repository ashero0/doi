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
</head>





<body>

	<!-- Header -->
	<div id="header">
		<nav class="navbar navbar-light bg-light">
			<a class="navbar-brand" href="<?=BASE_URL?>">
				Cook Counseling Center
			</a>
		</nav>
	</div>

	<div class="page-content">
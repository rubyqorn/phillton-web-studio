<?php require_once '../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lalezar|Montserrat|Raleway&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	
	<!-- Navigation -->

	<nav>
		<div class="navbar navbar-dark bg-primary navbar-expand-lg">
			<a href="/" class="navbar-brand">Phillton</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<li class="navbar-item"><a href="/home/index" class="nav-link">Home</a></li>
					<li class="navbar-item"><a href="/works/index" class="nav-link">Works</a></li>
					<li class="navbar-item"><a href="/services/index" class="nav-link">Services</a></li>
					<li class="navbar-item"><a href="/about/index" class="nav-link">About</a></li>
				</ul>
			</div>
		</div>
	</nav>
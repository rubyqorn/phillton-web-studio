<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lalezar|Montserrat|Raleway&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/admin.css">
</head>
<body>
	
	<!-- Navigation panel -->

	<nav>
		<div class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a href="/home/admin" class="navbar-brand">Admin Panel</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="/" class="nav-link">Главная</a></li>
					<li class="nav-item"><a href="/" class="nav-link">Заказы</a></li>
					<li class="nav-item"><a href="/" class="nav-link">Пользователи</a></li>
					<li class="nav-item"><a href="/" class="nav-link">Услуги</a></li>
					<li class="nav-item"><a href="/" class="nav-link">Работы</a></li>
					<?php if (isset($_SESSION['user'])): ?>
						<li class="nav-item"><a href="#" class="nav-link"><?php echo $_SESSION['user']; ?></a></li>
						<li class="nav-item"><a href="/home/logout" class="nav-link">Logout</a></li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</nav>
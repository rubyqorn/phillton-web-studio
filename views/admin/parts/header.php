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
			<a href="/panel/index" class="navbar-brand text-white font-weight-bold">Admin Panel</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="/panel/index" class="nav-link">
							<i class="fas fa-home"></i> 
							Главная
						</a>
					</li>
					<li class="nav-item">
						<a href="/panel/orders?page=1" class="nav-link">
							<i class="fas fa-donate"></i> 
							Заказы
						</a>
					</li>
					<li class="nav-item">
						<a href="/panel/users?page=1" class="nav-link">
							<i class="fas fa-user-circle"></i> 
							Пользователи
						</a>
					</li>
					<li class="nav-item">
						<a href="/panel/services?page=1" class="nav-link">
							<i class="fas fa-layer-group"></i> 
							Услуги
						</a>
					</li>
					<li class="nav-item">
						<a href="/panel/works?page=1" class="nav-link">
							<i class="fas fa-cog"></i>
							Работы
						</a>
					</li>
					<?php if (isset($_SESSION['user'])): ?>
						<li class="nav-item">
							<a href="#" class="nav-link">
								<i class="far fa-user-circle"></i>
								<?php echo $_SESSION['user']; ?>	
							</a>
						</li>
						<li class="nav-item">
							<a href="/home/logout" class="nav-link">
								<i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</nav>
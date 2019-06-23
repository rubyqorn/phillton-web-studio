<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Phillton - прогрессивная веб-студия</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Lalezar|Montserrat|Raleway&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	
	<!-- Navigation -->

	<nav>
		<div class="navbar navbar-dark bg-primary navbar-expand-lg sticky-top">
			<a href="/" class="navbar-brand">Phillton</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<li class="navbar-item"><a href="/" class="nav-link">Home</a></li>
					<li class="navbar-item"><a href="/" class="nav-link">Works</a></li>
					<li class="navbar-item"><a href="/" class="nav-link">Services</a></li>
					<li class="navbar-item"><a href="/" class="nav-link">About</a></li>
					<li class="navbar-item"><a href="/" class="nav-link">Contacts</a></li>
				</ul>
			</div>
		</div>
	</nav>	

	<!-- Header with slider -->

	<section id="header">
		<div class="carousel slide carousel-fade" id="carousel" data-ride="carousel">
			<div class="carousel-inner overlay" role="listbox">
				<ol class="carousel-indicators">
					<li data-target="#carousel" data-slide="0" class="active"></li>
					<li data-target="#carousel" data-slide="1"></li>
					<li data-target="#carousel" data-slide="2"></li>
					<li data-target="#carousel" data-slide="3"></li>
				</ol>
				<div class="carousel-item active">
					<img src="/img/work-space-1.png" alt="" class="w-100">
					<div class="carousel-caption">
						<h3 class="display-4 text-white font-weight-bold">This is our work-space</h3>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, magnam.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/img/work-space-2.png" alt="" class="w-100">
					<div class="carousel-caption">
						<h3 class="display-4 text-white font-weight-bold">This is our work-space</h3>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, deleniti.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/img/work-space-3.png" alt="" class="w-100">
					<div class="carousel-caption">
						<h3 class="display-4 text-white font-weight-bold">This is our work-space</h3>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, doloremque.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="/img/work-space-4.png" alt="" class="w-100">
					<div class="carousel-caption">
						<h3 class="display-4 text-white font-weight-bold">This is our work-space</h3>
						<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, expedita.</p>
					</div>
				</div>
				<a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>
	</section>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="/js/app.js"></script>
</body>
</html>
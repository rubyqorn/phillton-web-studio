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
		<div class="navbar navbar-dark bg-primary navbar-expand-lg">
			<a href="/" class="navbar-brand">Phillton</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarContent">
				<ul class="navbar-nav ml-auto">
					<li class="navbar-item"><a href="/" class="nav-link">Home</a></li>
					<li class="navbar-item"><a href="/works.php" class="nav-link">Works</a></li>
					<li class="navbar-item"><a href="/services.php" class="nav-link">Services</a></li>
					<li class="navbar-item"><a href="/about.php" class="nav-link">About</a></li>
				</ul>
			</div>
		</div>
	</nav>	

	
	<!-- Service -->

	<section id="service">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12 float-left">
					<img src="/img/site-dev.png" alt="site dev" class="w-100 rounded">
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 float-right">
					<h3 class="text-center font-weight-bold text-dark">Для чего нужно создавать сайт?</h3>
					<hr class="blue-hr">
					<p class="text-dark text-left">
						Сегодня, когда абсолютное большинство людей начинает поиск нужного товара или услуги с поисковых систем, отсутствие сайта компании, в лучшем случае, вызывает удивление. В худшем это потеря огромного сегмента потенциальных клиентов и недополученная прибыль.
					</p>
					<p class="text-dark text-left">
						Даже если у вас сугубо офлайн бизнес и вы не ведете продаж в интернете, сайт обеспечивает функцию представительства, заявляет о вашем существовании и дает шанс побороться с конкурентами за клиентов, а также предоставить информацию для партнеров. Сайт должен отвечать параметрам поисковых систем, таких как «Яндекс», Google, и ряда других, менее популярных – все это учитывается при разработке продающих сайтов.
					</p>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-7 col-sm-12 contact-form">
					<h3 class="text-center">Чтобы оставить заявку, заполните форму</h3>
					<hr class="blue-hr">
					<form action="/" class="form-group" method="post">
						<div class="form-group">
							<label for="email" class="control-label col-xs-2">Ваша почта</label>
							<input type="email" name="email" class="form-control" placeholder="your@email.com">
						</div>
						<div class="form-group">
							<label for="phone" class="control-label col-xs-2">Номер телефона</label>
							<input type="tel" name="phone" class="form-control" placeholder="+7 (900) 800-70-60">
						</div>
						<div class="form-group">
							<label for="name" class="control-label col-xs-2">Ваше имя</label>
							<input type="text" name="name" class="form-control" placeholder="Иван Сидоров">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-outline-info" name="submit">Отправить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	
	<footer>
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="social-networks text-center">
					<a href="/"><i class="fab fa-vk fa-lg text-white"></i></a>
					<a href="/"><i class="fab fa-instagram fa-lg text-white"></i></a>
					<a href="/"><i class="fab fa-telegram-plane fa-lg text-white"></i></a>
				</div>
				<p class="text-white font-weight-bold text-center">&copy; Copyright Phillton 2014-2019</p>
				<p class="text-white font-weight-bold text-center">Designed by Anton Hideger</p>
			</div>
		</div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="/js/app.js"></script>
</body>
</html>
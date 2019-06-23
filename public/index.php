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

	<!-- Short about section -->

	<section id="short-about">
		<div class="container">
			<div class="row">
				
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="text-center font-weight-bold">О нас</h2>
				<hr class="blue-hr">
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<p class="text-dark">
					Агентство &laquo;Phillton&raquo; — интернет-маркетинговое агентство и веб-студия, мы находимся в Москве и работаем по всему миру. Мы начали свою деятельность в 2014 году в Москве и сразу стали специализироваться на разработке и комплексном продвижении сайтов. Поскольку мы занимаемся веб-разработкой и дизайном сайтов, нас можно также назвать дизайн-студией.
				</p>
				<p class="text-dark">
					За годы работы веб-студия &laquo;Phillton&raquo; реализовала уже более 120 проектов в Москве и по всему миру (география наших проектов от Канарских островов в Испании до Иркутска). Более сотни компаний довольны результатом сотрудничества с нами. Среди клиентов агентства есть крупные банки, транспортно-логистические и инвестиционные компании, промышленные группы и агентства по недвижимости.
				</p>
				<p class="text-dark">
					Если вы желаете стать нашим клиентом, мы готовы назначить вам встречу в любое удобное время. Офис веб-студии находится в самом центре Москвы, мы так же можем организовать встречу и обсуждение сотрудничества на вашей территории. Перейдите к разделу &laquo;Services&raquo;, чтобы узнать, что мы можем для вас сделать.
				</p>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12">
				<img src="/img/short-about.png" alt="" class="w-100 rounded">
			</div>

			</div>
		</div>
	</section>

	<!-- Contact form -->

	<section id="contacts">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="text-center font-weight-bold">Связаться с нами</h2>
					<hr class="blue-hr"></hr>
				</div>

				<div class="col-lg-8 col-md-8 col-sm-12">
					<form action="/" class="form-group" method="post">
						<div class="form-group">
							<label for="email" class="control-label col-xs-2 font-weight-bold text-dark">Ваша почта</label>
							<input type="email" class="form-control" name="email" placeholder="your@email.com">
						</div>
						<div class="form-group">
							<label for="subject" class="control-label col-xs-2 font-weight-bold text-dark">Тема сообщения</label>
							<input type="text" class="form-control" name="subject">
						</div>
						<div class="form-group">
							<label for="message" class="control-label col-xs-2 font-weight-bold text-dark">Подробное описание</label>
							<textarea name="message" name="message" cols="30" rows="10" class="form-control"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-outline-info" name="submit">Отправить</button>
						</div>
					</form>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-12">
					<div class="contact-item">
						<i class="fas fa-location-arrow fa-lg float-left"></i>
						<p class="info">333 Fawn Drive Attleboro, MA 02703</p>
					</div>
					<div class="contact-item">
						<i class="fas fa-phone fa-lg float-left"></i>
						<p class="info">(831) 233-0722</p>
					</div>
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
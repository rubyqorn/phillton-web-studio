<?php require_once '../views/parts/header.php' ?>
	
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

<?php require_once '../views/parts/footer.php' ?>

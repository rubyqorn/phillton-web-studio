<?php require_once '../views/parts/header.php' ?>
	
	<!-- Service -->

	<section id="service">
		<div class="container">
			<div class="row">
				<?php foreach($services as $service): ?>

					<div class="col-lg-6 col-md-6 col-sm-12 float-left">
						<img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="w-100 rounded">
						<p class="text-left text-muted p-2">
							<?php echo $service['preview_text']; ?>
						</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 float-right">
						<h3 class="text-center font-weight-bold text-dark">Почему вам нужна эта услуга?</h3>
						<hr class="blue-hr">
						<p class="text-dark text-left">
							<?php echo $service['description']; ?>
						</p>
					</div>

				<?php endforeach; ?>

			</div>
			<div class="row justify-content-center">
				<div class="col-lg-7 col-md-7 col-sm-12 contact-form">
					<h3 class="text-center">Чтобы оставить заявку, заполните форму</h3>
					<hr class="blue-hr">
					<form action="/services/order" class="form-group" method="post">
						<div class="form-group">
							<label for="email" class="control-label col-xs-2">Ваша почта</label>
							<input type="email" name="email" class="form-control" placeholder="your@email.com">
						</div>
						<div class="form-group">
							<label for="phone" class="control-label col-xs-2">Номер телефона</label>
							<input type="tel" name="phone" class="form-control" placeholder="+7(900)800-70-60">
						</div>
						<div class="form-group">
							<label for="name" class="control-label col-xs-2">Ваше имя</label>
							<input type="text" name="name" class="form-control" placeholder="Иван Сидоров">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-outline-info" name="send-order">Отправить</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

<?php require_once '../views/parts/footer.php' ?>

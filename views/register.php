<?php require_once '../views/parts/header.php'; ?>

	<!-- Register form -->

	<section id="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h4 class="text-center text-dark font-weight-bold">Регистрация</h4>
						</div>
						<div class="card-body">
							<form action="/home/registration" class="form-group" method="post">
								<div class="form-group">
									<label for="name" class="control-label col-xs-2 text-dark">Ваше имя</label>
									<input type="text" class="form-control" name="name" placeholder="Ivan Sidorov">
								</div>
								<div class="form-group">
									<label for="email" class="control-label col-xs-2 text-dark">Ваша почта</label>
									<input type="email" class="form-control" name="email" placeholder="your@gmail.com">
								</div>
								<div class="form-group">
									<label for="password" class="control-label col-xs-2">Ваш пароль</label>
									<input type="password" name="password" class="form-control">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-outline-info" name="registration">Зарегистрироваться</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php require_once '../views/parts/footer.php'; ?>
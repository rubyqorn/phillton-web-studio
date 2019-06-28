<?php require_once '../views/parts/header.php'; ?>

	<!-- Login form -->

	<section id="auth">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h4 class="text-dark font-weight-bold text-center">Войти</h4>
						</div>
						<div class="card-body">
							<form action="/home/auth" class="form-group" method="post">
								<div class="form-group">
									<label for="email" class="control-label col-xs-2 text-dark">Почта</label>
									<input type="email" name="email" class="form-control" placeholder="Ваша почта">
								</div>
								<div class="form-group">
									<label for="password" class="control-label col-xs-2 text-dark">Пароль</label>
									<input type="password" name="password" class="form-control" placeholder="Ваш пароль">
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-outline-info float-right" name="login">Войти</button>
									<a href="/home/register" class="nav-link">Еще не зарегистрированны?</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php require_once '../views/parts/footer.php'; ?>
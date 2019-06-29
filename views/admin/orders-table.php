<?php require_once '../views/admin/parts/header.php'; ?>

	<!-- Orders table -->

	<section id="orders">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h3 class="text-dark text-left font-weight-bold">Заказы</h3>
					<hr class="green-hr">
				</div>

				<!-- Table -->

				<div class="col-lg-12 col-md-12">
					<div class="shadow p-4">
						<table class="table-hover table-striped table table-bordered">
							
							<thead class="bg-light">
								<tr>
									<th>Статус</th>
									<th>Почта</th>
									<th>Номер телефона</th>
									<th>Имя</th>
									<th>Редактировать</th>
								</tr>
							</thead>

							<tbody class="text-muted">
								<tr>
									<td>Ready</td>
									<td>anton_1337322@mail.ru</td>
									<td>+7(900)800-71-02</td>
									<td>Anton Hideger</td>
									<td>
										<form action="/" class="form-group" method="post">
											<button type="submit" class="btn btn-outline-success">Edit</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>Ready</td>
									<td>anton_1337322@mail.ru</td>
									<td>+7(900)800-71-02</td>
									<td>Anton Hideger</td>
									<td>
										<form action="/" class="form-group" method="post">
											<button type="submit" class="btn btn-outline-success">Edit</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>Ready</td>
									<td>anton_1337322@mail.ru</td>
									<td>+7(900)800-71-02</td>
									<td>Anton Hideger</td>
									<td>
										<form action="/" class="form-group" method="post">
											<button type="submit" class="btn btn-outline-success">Edit</button>
										</form>
									</td>
								</tr>
								<tr>
									<td>Ready</td>
									<td>anton_1337322@mail.ru</td>
									<td>+7(900)800-71-02</td>
									<td>Anton Hideger</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
											<button type="submit" class="btn btn-outline-success">Edit</button>
											</div>
										</form>
									</td>
								</tr>
								<tr>
									<td>Ready</td>
									<td>anton_1337322@mail.ru</td>
									<td>+7(900)800-71-02</td>
									<td>Anton Hideger</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
											<button type="submit" class="btn btn-outline-success">Edit</button>
											</div>
										</form>
									</td>
								</tr>
							</tbody>
 
						</table>
					</div>
				</div>

				<div class="col-lg-12 col-md-12" id="pagination">
					<nav class=" float-right">
						<ul class="pagination">
							<li class="page-item active"><a href="/" class="page-link">1</a></li>
							<li class="page-item"><a href="/" class="page-link">2</a></li>
							<li class="page-item"><a href="/" class="page-link">3</a></li>
							<li class="page-item"><a href="/" class="page-link">4</a></li>
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</section>

<?php require_once '../views/admin/parts/footer.php'; ?>
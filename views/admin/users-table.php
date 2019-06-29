<?php require_once '../views/admin/parts/header.php'; ?>

	<!-- Users table -->

	<section id="users">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h3 class="text-left text-dark font-weight-bold">Пользователи</h3>
					<hr class="green-hr">
				</div>

				<!-- Table -->

				<div class="col-lg-12 col-md-12">
					<div class="shadow p-4">
						<table class="table table-hover table-striped table-bordered">
							
							<thead class="bg-light">
								<tr>
									<th>Привелегии</th>
									<th>Имя</th>
									<th>Почта</th>
									<th>Удалить</th>
									<th>Редактировать</th>
								</tr>
							</thead>

							<tbody class="text-muted">
								<tr>
									<td>User</td>
									<td>Anton Hideger</td>
									<td>anton@mail.com</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-danger">Delete</button>
											</div>
										</form>
									</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-success">Edit</button>
											</div>
										</form>
									</td>
								</tr>
								<tr>
									<td>User</td>
									<td>Anton Hideger</td>
									<td>anton@mail.com</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-danger">Delete</button>
											</div>
										</form>
									</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-success">Edit</button>
											</div>
										</form>
									</td>
								</tr>
								<tr>
									<td>User</td>
									<td>Anton Hideger</td>
									<td>anton@mail.com</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-danger">Delete</button>
											</div>
										</form>
									</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-success">Edit</button>
											</div>
										</form>
									</td>
								</tr>
								<tr>
									<td>User</td>
									<td>Anton Hideger</td>
									<td>anton@mail.com</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-danger">Delete</button>
											</div>
										</form>
									</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-success">Edit</button>
											</div>
										</form>
									</td>
								</tr>
								<tr>
									<td>User</td>
									<td>Anton Hideger</td>
									<td>anton@mail.com</td>
									<td>
										<form action="/" class="form-group" method="post">
											<div class="form-group">
												<button type="submit" class="btn btn-outline-danger">Delete</button>
											</div>
										</form>
									</td>
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
					<nav class="float-right">
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
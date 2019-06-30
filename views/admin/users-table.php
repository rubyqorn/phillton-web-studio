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
								
								<?php foreach ($users as $user): ?>

									<tr>
										<td><?php echo $user['role_id']; ?></td>
										<td><?php echo $user['name']; ?></td>
										<td><?php echo $user['email'] ?></td>
										<td>
											<form action="/" class="form-group" method="post">
												<div class="form-group">
													<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete-<?php echo $user['id']; ?>">Delete</button>
												</div>
											</form>
										</td>
										<td>
											<form action="/" class="form-group" method="post">
												<div class="form-group">
													<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#edit-<?php echo $user['id']; ?>">Edit</button>
												</div>
											</form>
										</td>
									</tr>

								<?php endforeach ?>
								
							</tbody>

							<?php foreach ($users as $user): ?>

								<div class="modal fade" tabindex="-1" id="delete-<?php echo $user['id']; ?>" role="dialog">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="text-left text-black-50">Удаление</h4>
											</div>
											<form action="/" class="form-group">
												<div class="modal-body">
													<h4 class="text-danger text-center font-weight-bold">Вы действительно хотите удалить эту работу???</h4>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-outline-info" data-dismiss="modal">Нет</button>
													<button type="submit" class="btn btn-outline-success">Да</button>
												</div>
											</form>
										</div>
									</div>
								</div>
								
								<!-- Edit -->
								<div class="modal fade" id="edit-<?php echo $user['id']; ?>" role="dialog" tabindex="-1">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="textleft text-black-50">Редактирование</h4>
											</div>
											<form action="/" class="form-group" method="post">
												<div class="modal-body">
													<div class="form-group">
														<label for="privelegies" class="control-label col-xs-2 text-left text-dark font-weight-bold">Привелегии</label>
														<input type="text" class="form-control" name="privelegies" value="<?php echo $user['role_id']; ?>" required="Это поле должно быть обязательно заполнено">
													</div>
													<div class="form-group">
														<label for="name" class="control-label col-xs-2 text-left text-dark font-weight-bold">Имя</label>
														<input type="text" class="form-control" name="name" value="<?php echo $user['name']; ?>" required="Это поле должно быть обязательно заполнено">
													</div>
													<div class="form-group">
														<label for="email" class="control-label col-xs-2 text-left text-dark font-weight-bold">Почта</label>
														<input type="text" class="form-control" name="email" value="<?php echo $user['email']; ?>" required="Это поле должно быть обязательно заполнено">
													</div>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-outline-info" data-dismiss="modal">Закрыть</button>
													<button type="submit" class="btn btn-outline-success" name="edit">Редактировать</button>
												</div>
											</form>
										</div>
									</div>
								</div>

							<?php endforeach ?>

						</table>
					</div>
				</div>

				<div class="col-lg-12 col-md-12" id="pagination">
					<nav class="float-right">
						<ul class="pagination">
							<?php for($i = 1; $i < $links; $i++): ?>
								<li class="page-item"><a href="?page=<?php echo $i ?>" class="page-link"><?php echo $i ?></a></li>
							<?php endfor; ?>
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</section>

<?php require_once '../views/admin/parts/footer.php'; ?>
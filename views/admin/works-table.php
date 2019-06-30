<?php require_once '../views/admin/parts/header.php'; ?>

	<!-- Works table -->
	
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h3 class="text-left text-dark font-weight-bold">Работы</h3>
					<hr class="green-hr">
				</div>

				<!-- Table -->

				<div class="col-lg-12 col-md-12">
					<div class="shadow p-4">

						<button type="button" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#add" id="add-button">Добавить</button>

						<table class="table table-hover table-striped table-bordered">
							
							<thead class="bg-light">
								<tr>
									<th>Название</th>
									<th>Изображение</th>
									<th>Удалить</th>
									<th>Редактировать</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($works as $work): ?>
									<tr>
										<td><?php echo $work['title']; ?></td>
										<td><?php echo $work['image']; ?></td>
										<td>
											<form action="/" class="form-group" method="post">
												<div class="form-group">
													<button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#delete-<?php echo $work['id']; ?>">Delete</button>
												</div>
											</form>
										</td>
										<td>
											<form action="/" class="form-group" method="post">
												<div class="form-group">
													<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#edit-<?php echo $work['id']; ?>">Edit</button>
												</div>
											</form>
										</td>
									</tr>
								<?php endforeach ?>

							</tbody>

						</table>

						<!-- Modal windows -->
					
						<div class="modal fade" id="add" tabindex="-1" role="dialog">
							<div class="modal-dialog" role="dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="text-left text-black-50">Добавление</h4>
									</div>
									<form action="/" class="form-group" method="post">
										<div class="modal-body">
											<div class="form-group">
												<label for="title" class="control-label col-xs-2 text-left text-dark font-weight-bold">Название работы</label>
												<input type="text" class="form-control" name="title" required="Это поле должно быть обязательно заполнено">
											</div>
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="image" id="file">
												<label for="file" class="custom-file-label">Изображение</label>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-outline-info" data-dismiss="modal">Закрыть</button>
											<button type="submit" class="btn btn-outline-success" name="edit">Добавить</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<!-- Delete -->
						<?php foreach($works as $work): ?>

						<div class="modal fade" tabindex="-1" id="delete-<?php echo $work['id']; ?>" role="dialog">
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
						<div class="modal fade" id="edit-<?php echo $work['id']; ?>" role="dialog" tabindex="-1">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="textleft text-black-50">Редактирование</h4>
									</div>
									<form action="/" class="form-group" method="post">
										<div class="modal-body">
											<div class="form-group">
												<label for="title" class="control-label col-xs-2 text-left text-dark font-weight-bold">Название работы</label>
												<input type="text" class="form-control" name="title" value="<?php echo $work['title']; ?>" required="Это поле должно быть обязательно заполнено">
											</div>
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="image" id="file" value="<?php echo $work['image']; ?>">
												<label for="file" class="custom-file-label">Изображение</label>
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

						<?php endforeach; ?>

					</div>
				</div>

				<div class="col-lg-12 col-md-12" id="pagination">
					<nav class="float-right">
						<ul class="pagination">
							<?php for($i = 1; $i < $pageLinks; $i++): ?> 
								<li class="page-item">
									<a href="?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
								</li>;
							<?php endfor; ?>
						</ul>
					</nav>
				</div>

			</div>
		</div>
	</section>

<?php require_once '../views/admin/parts/footer.php'; ?>
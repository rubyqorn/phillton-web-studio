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
								<?php foreach ($orders as $order): ?>

									<tr>
										<td><?php echo $order['status_id']; ?></td>
										<td><?php echo $order['email']; ?></td>
										<td><?php echo $order['phone_number']; ?></td>
										<td><?php echo $order['customer']; ?></td>
										<td>
											<form action="/" class="form-group" method="post">
												<button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#edit-<?php echo $order['id']; ?>">Edit</button>
											</form>
										</td>
									</tr>

								<?php endforeach ?>
							</tbody>
 
						</table>

						<!-- Modals -->
						<?php foreach ($orders as $order): ?>	
							<div class="modal fade" id="edit-<?php echo $order['id']; ?>" tabindex="-1" role="dialog">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="text-left text-black-50">Редактирование</h4>
										</div>
										<form action="/" class="form-group" method="post">
											<div class="modal-body">
												<div class="form-group">
													<label for="status" class="control-label col-xs-2 text-dark font-weight-bold">Статус</label>
													<input type="text" class="form-control" name="status" value="<?php echo $order['name']; ?>">
												</div>
												<div class="form-group">
													<label for="email" class="control-label col-xs-2 text-dark font-weight-bold">Почта</label>
													<input type="email" class="form-control" name="email" value="<?php echo $order['email']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="phone" class="control-label col-xs-2 text-dark font-weight-bold">Номер телефона</label>
													<input type="tel" class="form-control" name="phone" value="<?php echo $order['phone_number']; ?>" readonly>
												</div>
												<div class="form-group">
													<label for="name" class="control-label col-xs-2 text-dark font-weight-bold">Имя</label>
													<input type="text" class="form-control" name="name" value="<?php echo $order['customer']; ?>" readonly>
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

					</div>
				</div>

				<div class="col-lg-12 col-md-12" id="pagination">
					<nav class=" float-right">
						<ul class="pagination">
							<?php for($i = 1; $i < $links; $i++): ?> 
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
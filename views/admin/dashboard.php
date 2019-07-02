<?php require_once '../views/admin/parts/header.php'; ?>

	<!-- Dashboard -->

	<section id="dashboard">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<h3 class="text-left font-weight-bold text-dark">Панель администрирования</h3>
					<hr class="green-hr">
				</div>
				
				<!-- Counted users and orders -->

				<div class="col-lg-12 col-md-12 col-sm-12 float-right d-flex justify-content-center">
					<div class="col-lg-6 col-sm-6 col-md-6 rounded m-2 p-4 text-center" id="count-users">
						<i class="fas fa-user-circle fa-2x text-white m-1"></i>
						<?php foreach ($countedUsers as $users): ?>
		
						<h3 class="text-center text-white font-weight-bold"><?php echo $users['users']; ?></h3>
						
						<?php endforeach ?>
						<p class="text-white text-center font-weight-bold">Количество пользователей</p>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 rounded m-2 p-4 text-center" id="count-orders">
						<i class="fas fa-donate fa-2x text-white m-1"></i>
						<?php foreach ($countedOrders as $orders): ?>

						<h3 class="text-center text-white font-weight-bold"><?php echo $orders['orders'] ?></h3>

						<?php endforeach ?>
						<p class="text-center text-white font-weight-bold">Количество заказов</p>
					</div>
				</div>

				<!-- Procents of finished and not finished orders -->

				<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
					
					<div class="col-lg-6 col-md-6">
						<div class="shadow p-4 m-3">
							<h4 class="text-primary text-left font-weight-bold">Процент завершенных заказов</h4>
							<hr>

							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: <?php echo $persentOfReadyOrders ?>%"><?php echo $persentOfReadyOrders; ?>%</div>
							</div>							

						</div>
					</div>

					<div class="col-lg-6 col-md-6">
						<div class="shadow p-4 m-3">
							<h4 class="text-left text-danger font-weight-bold">Процент незавершенных заказов</h4>
							<hr>
							<div class="progress">
								<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: <?php echo $prepareOrders ?>%"><?php echo $prepareOrders; ?>%</div>
							</div>
						</div>
					</div>
					
				</div>
				
				<!-- Table with last orders -->

				<div class="col-lg-6 col-md-12 col-sm-12" id="last-orders">
					<div class="shadow p-3">
						<h4 class="text-dark text-left font-weight-bold p-2">Последние заказы</h4>
						<table class="table table-hover table-striped table-bordered">

							<thead>
								<tr>
									<th>Статус</th>
									<th>Почта</th>
									<th>Имя</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($lastOrders as $orders): ?>
									
									<tr>
										<td><?php echo $orders['status']; ?></td>
										<td><?php echo $orders['email']; ?></td>
										<td><?php echo $orders['customer']; ?></td>
									</tr>

								<?php endforeach ?>
							</tbody>

						</table>
					</div>
				</div>
				
				<!-- Table with last registered users -->

				<div class="col-lg-6 col-md-12 col-sm-12" id="last-users">
					<div class="shadow p-4">
						<h4 class="text-dark text-left font-weight-bold p-2">Последние зарегистрированные пользователи</h4>
						<table class="table table-hover table-striped table-bordered">

							<thead>
								<tr>
									<th>Имя</th>
									<th>Почта</th>
								</tr>
							</thead>

							<tbody>
								<?php foreach ($lastUsers as $user): ?>
										
									<tr>
										<td><?php echo $user['name']; ?></td>
										<td><?php echo $user['email']; ?></td>
									</tr>

								<?php endforeach ?>
							</tbody>

						</table>
					</div>
				</div>
					
			</div>
		</div>
	</section>
	
<?php require_once '../views/admin/parts/footer.php'; ?>
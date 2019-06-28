<?php require_once '../views/parts/header.php' ?>	

	<!-- Works section -->

	<section id="works">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="text-center font-weight-bold">Наши последние работы</h2>
					<hr class="blue-hr">
				</div>
				
				<?php foreach($works as $work): ?>

					<div class="col-lg-4 col-mg-4 col-sm-12">
						<div class="shadow">
							<img src="<?php echo $work['image']; ?>" alt="<?php echo $work['title']; ?>" class="w-100">
							<div class="info">
								<a href="/" class="nav-link font-weight-bold text-center" data-toggle="modal" data-target="#modal-<?php echo $work['id']; ?>"><?php echo $work['title']; ?></a>
								<p class="text-left"><i class="fas fa-clock fa-lg"></i>  <?php echo $work['created_at']; ?></p>
							</div>
						</div>
					</div>
				
				<!-- Modal windows -->

					<div class="modal fade" id="modal-<?php echo $work['id']; ?>" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title text-dark font-weight-bold"><?php echo $work['title']; ?></h4>
									<button type="button" class="close" data-dismiss="modal">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<img src="<?php echo $work['image']; ?>" alt="" class="w-100 rounded">
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-warning" data-dismiss="modal">
										Закрыть
									</button>
									<a href="/" class="btn btn-outline-info">Продолжить</a>	
								</div>
							</div>
						</div>
					</div>

				<?php endforeach; ?>

				<div class="col-lg-12 col-md-12 col-sm-12">
					<ul class="pagination">
						<li class="page-item active"><a href="/" class="page-link">1</a></li>
						<li class="page-item"><a href="/" class="page-link">2</a></li>
						<li class="page-item"><a href="/" class="page-link">3</a></li>
						<li class="page-item"><a href="/" class="page-link">4</a></li>
					</ul>
				</div>

			</div>
		</div>
	</section>

<?php require_once '../views/parts/footer.php' ?>

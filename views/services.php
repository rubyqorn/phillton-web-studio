<?php require_once '../views/parts/header.php' ?>	

	<!-- Services -->

	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12">
					<h2 class="text-center font-weight-bold">Наши услуги</h2>
					<hr class="blue-hr">
				</div>

				<?php foreach($services as $service): ?>

					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="card bg-dark">
							<img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title']; ?>" class="w-100 card-img">
							<div class="card-img-overlay">
								<h2 class=" text-center">
									<a href="/services/service?id=<?php echo $service['id']; ?>" class="nav-link text-dark font-weight-bold"><?php echo $service['title']; ?></a>
								</h2>
								<p class="card-text font-weight-bold"><?php echo $service['preview_text']; ?></p>
							</div>
						</div>
					</div>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

<?php require_once '../views/parts/footer.php' ?>

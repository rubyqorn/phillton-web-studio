<?php require_once '../views/parts/header.php' ?>	

	<!-- Header -->
	<div class="w-100" id="header">
        <div class="overlay">
            <div class="col-lg-12 col-md-12 col-12 text-center pt-4">
                <p class="display-3 pt-4 text-white montserrat-font col-12">
                    Наши услуги    
                </p>
            </div>
        </div>
    </div>

	<!-- Services -->
	<div class="container mt-4 mb-4" id="services">
        <div class="row">

            <?php foreach($services as $service): ?>
                <div class="col-lg-6 col-md-6 col-12 mt-4 d-flex">
                    <div class="col-lg-6 text-right mr-4">
                        <h4 class="text-dark raleway-font text-uppercase">
                            <small>
                                <a href="/services/service?id=<?php echo $service['id'] ?>">
                                    <?php echo $service['title']; ?>
                                </a>
                            </small>
                        </h4>
                        <hr>
                        <p class="text-black-50 montserrat-font">
                            <small>
                                <?php echo $service['preview_text']; ?>
                            </small>
                        </p>
                    </div>
                    <div class="col-lg-6 text-right">
                        <img src="<?php echo $service['image']; ?>" alt="<?php echo $service['title'] ?>" class="w-100">
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

<?php require_once '../views/parts/footer.php' ?>

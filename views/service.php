<?php require_once '../views/parts/header.php' ?>
	
	<!-- Service -->
	<div class="container" id="service">
        <div class="row justify-content-center">

			<!-- Back button -->
            <div class="col lg-12 col-12 mt-4 mb-4">
                <a href="/services/index" class="text-black-50 text-decoration-none montserrat-font text-uppercase">
                    <i class="fas fa-chevron-left"> Back</i>
                </a>
            </div>

            <?php foreach($services as $item): ?>

                <!-- Image -->
                <div class="col-lg-7 col-md-7 col-12 mt-4 mb-4">
                    <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['title']; ?>" class="w-100">
                </div>

                <!-- Service content -->
                <div class="col-lg-7 col-md-7 col-12 mt-4 mb-4">
                    <h3 class="text-center text-black-50 text-uppercase montserrat-font">
                        <small>
                            <?php echo $item['title']; ?>
                        </small>
                    </h3>
                    <hr>
                    <p class="text-dark montserrat-font font-italic">
                        <?php echo $item['description']; ?>
                    </p>
                    <p class="text-black-50 font-italic montserrat-font">
                        <?php echo $item['preview_text']; ?>
                    </p>
                    <hr>
                </div>

            <?php endforeach; ?>

			<!-- Order form -->
            <div class="col-lg-7 col-md-7 col-12 mt-4 mb-4">
                <form action="/services/order" method="post">
                    <div class="form-group">
                        <label for="name" class="control-label col-xs-2 text-black-50 montserrat-font h5">
                            Имя
                        </label>
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="Иван Иванов">
                    </div>
                    <div class="form-group">
                        <label for="phone" class="control-label col-xs-2 text-black-50 montserrat-font h5">
                            Телефон
                        </label>
                        <input type="tel" name="phone" class="form-control form-control-lg" placeholder="+7 (900)-800-70-60">
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label col-xs-2 text-black-50 montserrat-font h5">
                            Почта
                        </label>
                        <input type="email" class="form-control form-control-lg" name="email" placeholder="your@email.com">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-info text-uppercase">
                            <small>
                                Отправить
                            </small>
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>

<?php require_once '../views/parts/footer.php' ?>

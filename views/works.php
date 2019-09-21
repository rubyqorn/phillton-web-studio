<?php require_once '../views/parts/header.php' ?>	

	<!-- Header -->
	<div class="w-100" id="header">
        <div class="overlay">
            <div class="col-lg-12 col-md-12 col-12 text-center pt-4">
                <p class="display-3 pt-4 text-white montserrat-font col-12">
                    Наши работы    
                </p>
            </div>
        </div>
    </div>

	<!-- Portfolio -->
    <div class="container mt-4 mb-4" id="portfolio">
        <div class="row">

            <?php foreach($works as $work): ?>
                <div class="col-lg-4 col-md-4 col-12 p-4" id="portfolio-item">
                <div class="card">
                    <div class="card-img-top">
                        <img src="<?php echo $work['image'] ?>" class="w-100" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="text-center miriam-font font-weight-bold text-uppercase">
                            <small>
                                <?php echo $work['title']; ?>
                            </small>
                        </h4>
                        <p class="text-left text-black-50 nunito-font text-uppercase">
                            <?php echo date('d M Y', strtotime($work['created_at'])); ?>
                        </p>
                        <button class="btn btn-outline-info text-uppercase" data-toggle="modal" data-target="#show-item-<?php echo $work['id'] ?>">
                            <small>
                                Просмотр
                            </small>
                        </button>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>

            <!-- Modal window -->
            <!-- Show portfolio -->
            <?php foreach($works as $work): ?>
                <div class="modal fade" id="show-item-<?php echo $work['id'] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-left font-weight-bold text-uppercase">
                                    <small>
                                        <?php echo $work['image'];  ?>
                                    </small>
                                </h4>
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="col-lg-12 col-12">
                                    <img src="<?php echo $work['image']; ?>" alt="" class="w-100">
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <p class="text-black-50 montserrat-font">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi tenetur 
                                        dolorum molestias possimus autem facilis dignissimos esse mollitia, et 
                                        laborum illum accusamus veritatis nisi officia quis libero pariatur laboriosam
                                        magni? Natus molestias corporis eos dignissimos!
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>

<?php require_once '../views/parts/footer.php' ?>

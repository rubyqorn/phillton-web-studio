<?php require_once '../views/parts/header.php' ?>	

	<!-- Header -->
    <div class="w-100" id="previous-content">
        <div class="overlay">
            <div class="col-lg-12 col-md-12 col-12 text-center pt-4">
                <i class="fas fa-rocket fa-10x text-white"></i>
                <p class="display-3 pt-4 text-white montserrat-font col-12">
                    Каждый день мы совершенствуем мир!!!
                </p>
            </div>
        </div>
    </div>

    <!-- About section -->
    <div class="container mt-4 p-4" id="#short-about-us-section">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12">
                <h1 class="text-center miriam-font text-black-50">
                    Краткая информация о нас
                </h1>
                <hr class="light-blue-line">
            </div>

            
            <div class="col-lg-6 col-md-6 col-12 mt-4">
                <p class="text-black-50">
                    Агентство «Phillton» — интернет-маркетинговое агентство и веб-студия, мы находимся в Москве и работаем по всему миру. Мы начали свою деятельность в 2014 году
                    в Москве и сразу стали специализироваться на разработке и комплексном продвижении сайтов. Поскольку мы занимаемся веб-разработкой и дизайном сайтов, 
                    нас можно также назвать дизайн-студией. 
                </p>
                <p class="text-black-50">
                    За годы работы веб-студия «Phillton» реализовала уже более 120 проектов в Москве и по всему миру (география наших проектов от Канарских островов в Испании до Иркутска). 
                    Более сотни компаний довольны результатом сотрудничества с нами. Среди клиентов агентства есть крупные банки, транспортно-логистические и инвестиционные компании, 
                    промышленные группы и агентства по недвижимости. 
                </p>
                <p class="text-black-50">
                    Если вы желаете стать нашим клиентом, мы готовы назначить вам встречу в любое удобное время. Офис веб-студии находится в самом центре Москвы, мы так же можем организовать 
                    встречу и обсуждение сотрудничества на вашей территории. Перейдите к разделу «Services», чтобы узнать, что мы можем для вас сделать. 
                </p>
            </div>

                
            <div class="col-lg-6 col-md-6 col-12 mt-4 w-100">
                <div class="carousel slide" id="aboutUsCarousel" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/default.png" class="w-100" alt="" class="w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carousel-1.png" class="w-100" alt="" class="w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/carousel-2.png" class="w-100" alt="" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Portfolio -->
    <div class="container" id="portfolio">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-md-12 col-12 mt-4 mb-4">
                <h1 class="text-center montserrat-font text-black-50">
                    Последние работы
                </h1>
                <hr class="light-blue-line">
            </div>

            <?php foreach($works as $work): ?>
                <div class="col-lg-4 col-md-4 col-12 mt-4 mb-4">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="<?php echo $work['image'] ?>" alt="<?php echo $work['title'] ?>" class="w-100" class="w-100">
                        </div>
                        <div class="card-body">
                            <p class="text-center raleway-font">
                                <?php echo $work['title'] ?>
                            </p>
                            <p class="text-black-50 text-uppercase">
                                <?php echo date('d M Y', strtotime($work['created_at'])); ?>
                            </p>
                            <button class="btn btn-outline-info text-uppercase" data-toggle="modal" data-target="#show-item-<?php echo $work['id'] ?>">
                                <small>
                                    Смотреть
                                </small>
                            </button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            
            
            <!-- Modal windows -->
            <!-- Show portfolio -->
            <?php foreach($works as $work): ?>
                <div class="modal fade" id="show-item-<?php echo $work['id'] ?>" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="card-title text-uppercase">
                                    <small>
                                        <?php echo $work['title'] ?>
                                    </small>
                                </h4>
                                <button class="close" data-dismiss="modal">
                                    <span>&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <div class="col-lg-12">
                                    <img src="<?php echo $work['image']; ?>" alt="" class="w-100">
                                </div>

                                <div class="col-lg-12 mt-4">
                                    <p class="text-black-50 montserrat-font">
                                        Lorem ipsum dolor sit, amet consectetur 
                                        adipisicing elit. Enim possimus nemo quaerat 
                                        dolore ducimus exercitationem minus sequi, eligendi 
                                        odit, praesentium qui tempore dolor labore vitae 
                                        recusandae autem tenetur. Officia, culpa?
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
    
    <!-- Contacts -->
    <div class="container mt-4 mb-4" id="contacts">
        <div class="col-lg-12 col-md-12 col-12 mt-4 mb-4">
            <h1 class="text-center text-black-50 montserrat-font">
                Контактная форма
            </h1>
            <hr class="light-blue-line">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-8 col-md-8" id="contact-form">
                <form action="/home/contact" method="post">

                    <div class="form-group">
                        <label for="email" class="h5 control-label col-xs-2 font-weight-bold montserrat-font text-black-50">
                            Почта
                        </label>
                        <input type="email" class="form-control form-control-lg" name="email" placeholder="your@email.com">
                    </div>

                    <div class="form-group">
                        <label for="name" class="control-label col-xs-2 h5 font-weight-bold montserrat-font text-black-50">Имя</label>
                        <input type="text" class="form-control form-control-lg" name="name" placeholder="Иван Иванов">
                    </div>

                    <div class="form-group">
                        <label for="message" class="control-label col-xs-2 h5 font-weight-bold text-black-50 montserrat-font">
                            Сообщение
                        </label>
                        <textarea name="message" class="form-control form-control-lg" cols="30" rows="10" placeholder="Должно содержать не меньше 120 символов"></textarea>
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

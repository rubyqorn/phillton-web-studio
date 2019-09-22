<?php require_once '../views/parts/header.php'; ?>

    <div class="container" id="auth">
        <div class="row justify-content-center">
            
            <!-- Login form -->
            <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4" id="login">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-uppercase text-black-50 montserrate-font">
                            <small>
                                Войти
                            </small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="/home/login" method="post">
                            <div class="form-group">
                                <label for="email" class="control-label col-xs-2 text-black-50 montserrat-font">
                                    Почта
                                </label>
                                <input type="email" class="form-control" name="email">
                                <small id="email" class="text-muted form-text">Ваша почта для авторизации</small>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label col-xs-2 text-black-50 montserrat-font">
                                    Пароль
                                </label>
                                <input type="password" class="form-control" name="password">
                                <small id="password" class="form-text text-muted">Ваш пароль для авторизации</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info text-uppercase">
                                    <small>
                                        Войти
                                    </small>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Register form -->
            <div class="col-lg-6 col-md-6 col-12 mt-4 mb-4" id="register">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center text-uppercase text-black-50 montserrate-font">
                            <small>
                                Регистрация
                            </small>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="/home/registration" method="post">
                            <div class="form-group">
                                <label for="name" class="control-label col-xs-2 text-black-50 montserrat-font">
                                    Имя
                                </label>
                                <input type="text" name="name" class="form-control">
                                <small id="name" class="text-muted form-text">Имя должно содержать не меньше 2 символов</small>
                            </div>
                            <div class="form-group">
                                <label for="email" class="control-label col-xs-2 text-black-50 montserrat-font">
                                    Почта
                                </label>
                                <input type="email" class="form-control" name="email">
                                <small id="email" class="text-muted form-text">Ваша почта для регистрации</small>
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label col-xs-2 text-black-50 montserrat-font">
                                    Пароль
                                </label>
                                <input type="password" class="form-control" name="password">
                                <small id="password" class="form-text text-muted">Ваш пароль для регистрации</small>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-info text-uppercase">
                                    <small>
                                        Зарегистрироваться
                                    </small>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php require_once '../views/parts/footer.php'; ?>
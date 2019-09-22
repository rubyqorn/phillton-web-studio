<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Miriam+Libre|Montserrat|Nunito|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">   
    <link rel="stylesheet" href="/css/app.css">
    <title><?php echo $title ?></title>
</head>
<body>

    <!-- Navigation panel -->
    <nav class="navbar navbar-expand-lg navbar-light-blue sticky-top w-100" id="nav">
        <a href="/home/index" class="text-white font-weight-bold mt-1 h3">Phillton</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-4" id="collapsibleNavbar">
            <ul class="navbar-nav montserrat-font">
                <li class="navbar-item">
                    <a href="/home/index" class="nav-link text-uppercase text-white">
                        <small>
                            Главная
                        </small> 
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="/works/index" class="nav-link text-uppercase text-white">
                        <small>
                            Работы
                        </small> 
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="/services/index" class="nav-link text-uppercase text-white">
                        <small>
                            Услуги 
                        </small> 
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="/about/index" class="nav-link text-uppercase text-white">
                        <small>
                            О нас
                        </small>
                    </a>
                </li>
                <?php if(!isset($_SESSION['user'])): ?>
                    <li class="navbar-item">
                        <a href="/home/auth" class="nav-link text-uppercase text-white">
                            <small>
                                Войти | Регистрация
                            </small> 
                        </a>
                    </li>
                <?php else: ?>
                    <li class="navbar-item">
                        <a href="/home/logout" class="nav-link text-uppercase text-white">
                            <small>
                                Выйти
                            </small>
                        </a>
                    </li>
                <?php endif ?>
                
            </ul>
        </div>
    </nav>
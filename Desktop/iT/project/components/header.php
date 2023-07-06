<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title><?php echo isset($title) ? $title : 'CARS TUNING';?></title>
</head>
<body>
<section class="header">
    <div class="container">
        <div class="header_menu">
            <nav>
                <ul class="header_menu_nav">
                    <li class="header_menu_nav_item">
                        <a href="index.php">Главная</a>
                    </li>
                    <li class="header_menu_nav_item">
                        <a href="pasting.php">Оклейка автомобилей</a>
                    </li>
                    <li class="header_menu_nav_item">
                        <a href="detailing.php">Детейлинг автомобилей</a>
                    </li>
                    <li class="header_menu_nav_item">
                        <a href="news/news.php">Новости</a>
                    </li>
                </ul>
            </nav>
<!--            <img class="user_lk" src="img/icons/user1.svg" alt="user">-->
            <div class="main">
            <button onclick="window.location.href = 'cabinet.php';" class="button_lk"><img class="user_lk" src="img/icons/user1.svg" alt="user">Личный кабинет</button>
                <?php if(isset($_SESSION['valid_user']) ):?>
                    <h3>Добро пожаловать, <?=$_SESSION['valid_user']?></h3>
<!--                    <a href="cabinet.php">Личный кабинет</a>-->
<!--                    <a href="exit.php">Выход</a>-->
                <?php else:?>
                    <a href="enter.php">Вход /</a>
                    <a href="register.php">Регистрация</a>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>

<!--<section class="header_banner">-->
<!--    <div class="container">-->
<!--        <div class="header_car">-->
<!--            <div class="header_banner_name">-->
<!--                <h1 class="header_cars">--><?php //echo $headerTitle ?? 'CAR TUNING'?><!--</h1>-->
<!--            </div>-->
<!--            <div class="header_svg">-->
<!--                --><?php //require 'components/icons.php';?>
<!--            </div>-->
<!--            <p class="header_descr">-->
<!--                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae orci urna amet penatibus.-->
<!--            </p>-->
<!--            <button class="header_btn">Наши услуги</button>-->
<!--            <span class="header_btn_span"></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
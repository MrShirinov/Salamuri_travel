<?php

require 'components/header.php';

session_start();

require 'core/DBConnect.php';
$pdo =DBConnect::getConnection();
$login = $_SESSION['valid_user'];

$query = "SELECT id, login, email, password
          FROM userslk
          WHERE login = ?;";
$result = $pdo->prepare($query);
$result->execute([$login]);

$user = $result->fetch();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
<section class="header_banner">
    <div class="container">
        <div class="header_car">
            <div class="header_banner_name">
                <h1 class="header_cars"><?php echo $headerTitle ?? 'GARAGE'?></h1>
            </div>
            <div class="header_svg">
                <?php require 'components/icons.php';?>
            </div>
            <p class="header_descr">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae orci urna amet penatibus.
            </p>
            <button class="header_btn"><a href="pasting.php">Наши услуги</a></button>
            <span class="header_btn_span"></span>
        </div>
    </div>
</section>
    <div class="cabinet">
        <div class="container">
            <div class="cabinet_wrapper">
                <h1>Личный кабинет</h1>
                <h3>Добро пожаловать, <?=$user['login']?></h3>
                <div>
                    <!--    логин    -->
                    <!--    email    -->
                    <!--    пароль    -->
                </div>
<!--                <a href="index.php">Главная</a>-->
                <a href="exit.php">это не Выход</a>
                <p>На нашем сайте ты найдешь информацию по детейлингу твойего пазика<br>
                Мы работаем 24 / 7 и всегда готовы отвеить на любой твой вопрос <br>(не на вопросы земля плоская или круглая).<br>
                Переходи по ссылке: <a href="index.php">На главную</a> и смотри на что мы способны!</p>
            </div>

            <div class="map_wrapper">
                <?php
                require 'components/maps.php';
                ?>
            </div>

        </div>

    </div>







<?php
require 'components/footer.php';
?>

</body>
</html>

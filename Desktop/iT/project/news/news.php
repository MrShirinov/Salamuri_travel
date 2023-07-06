<?php
// news.php - страница просмотра списка новостей
require '../DBConnect.php';
$pdo = DBConnect::getConnection();

// запрос на выборку данных
$query = "SELECT news.id AS news_id, category, title, short_text, news_image, add_date, 
				 authors.id AS author_id, last_name
				 FROM news, authors
				 WHERE news.author_id = authors.id
				 ORDER BY add_date DESC;";
$result = $pdo->query($query);
//DBConnect::d($result->fetchAll());
?>
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
    <link rel="stylesheet" href="../CSS/slick.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <title><?php echo isset($title) ? $title : 'CARS MUSC';?></title>
</head>
<body>
<section class="header">
    <div class="container">
        <div class="header_menu">
            <nav>
                <ul class="header_menu_nav">
                    <li class="header_menu_nav_item">
                        <a href="../index.php">Главная</a>
                    </li>
                    <li class="header_menu_nav_item">
                        <a href="../pasting.php">Оклейка автомобилей</a>
                    </li>
                    <li class="header_menu_nav_item">
                        <a href="../detailing.php">Детейлинг автомобилей</a>
                    </li>
                    <li class="header_menu_nav_item">
                        <a href="../news/news.php">Новости</a>
                    </li>
                </ul>
            </nav>
            <!--            <img class="user_lk" src="img/icons/user1.svg" alt="user">-->
            <div class="main">
                <button onclick="window.location.href = 'cabinet.php';" class="button_lk"><img class="user_lk" src="../img/icons/user1.svg" alt="user">Личный кабинет</button>
                <?php if(isset($_SESSION['valid_user']) ):?>
                    <h3>Добро пожаловать, <?=$_SESSION['valid_user']?></h3>
                    <!--                    <a href="cabinet.php">Личный кабинет</a>-->
                    <!--                    <a href="exit.php">Выход</a>-->
                <?php else:?>
                    <a href="../enter.php">Вход /</a>
                    <a href="../register.php">Регистрация</a>
                <?php endif;?>
            </div>
        </div>
    </div>
</section>
<section class="header_banner">-->
        <div class="container">
            <div class="header_car">
                <div class="header_banner_name">
                    <h1 class="header_cars"><?php echo $headerTitle ?? 'NEWS'?></h1>
                </div>
                <div class="header_svg">
                    <img src="../img/icons/icon1.svg" alt="icon">
                    <img src="../img/icons/icon1.svg" alt="icon">
                    <img src="../img/icons/icon1.svg" alt="icon">
                    <img src="../img/icons/icon1.svg" alt="icon">
                </div>
                <p class="header_descr">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae orci urna amet penatibus.
                </p>
<!--                <button class="header_btn">Наши услуги</button>-->
<!--                <span class="header_btn_span"></span>-->
            </div>
        </div>
    </section>
<div class="news">
    <div class="container">
<!--        <h1>Новости</h1>-->
        <?php while( $news_item = $result->fetch() ):?>
            <div class="news_item">
                <a href="news_detail.php?id=<?=$news_item['news_id']?>"><h2><?= "$news_item[title]"?></h2></a>

                <div class="news_preview">
                    <img class="news_images" src="../<?= $news_item['news_image']?>" alt="<?= $news_item['title']?>">
                    <p><?= $news_item['short_text']?></p>
                </div>

                <span>Дата: <?= $news_item['add_date']?></span>
                <!-- создайте страницу с автором и ниже сделайте ссылку на нее-->
                <span><a href="author_detail.php?id=<?= $news_item['author_id']?>">Автор: <?= $news_item['last_name']?></a></span>
                <span>Категория: <?= $news_item['category']?></span>

                <a href="news_detail.php?id=<?=$news_item['news_id']?>">Подробнее...</a>
            </div>
        <?php endwhile;?>
    </div>
<!--   <a href="../index.php">Главная страница</a>-->
</div>

</body>
</html>


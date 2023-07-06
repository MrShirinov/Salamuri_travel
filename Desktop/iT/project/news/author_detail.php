<?php
// страница просмотра одного автора

require '../DBConnect.php';
$pdo = DBConnect::getConnection();

//DBConnect::d($_GET);
$id = (int)$_GET['id']; // забираем ID из массива $_GET

// 1. Запрос к БД на получение одного автора по ID
// 2. Подготовка запроса
// 3. Выполнение подготовленного запроса
// 4. Извлечение данных из объекта в переменную
$query= "SELECT first_name,last_name,age,country,avatar
	     FROM authors
		 WHERE id = ?;";

$result = $pdo->prepare($query);
$result->execute([$id]);
$author_detail = $result->fetch();
//DBConnect::d($author_detail);
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

<div class="container">
    <div class="author_detail">
        <h1>Имя: <?=$author_detail['first_name']?></h1>
        <h2>Фамилия: <?=$author_detail['last_name']?></h2>
        <img src="../<?=$author_detail['avatar']?>" alt="<?=$author_detail['first_name']?>
		<?=$author_detail['last_name']?>">
        <p>Возраст: <?=$author_detail['age']?></p>
        <p>Страна проживания: <?=$author_detail['country']?></p>
        <a href="../index.php">Главная страница</a>
        <a href="news.php">К списку новостей</a>
    </div>
</div>

</body>
</html>


<?php
require 'components/header.php';

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

// 2. Текст запроса к БД
$query = "SELECT *
          FROM cars, prices";


// 3. Отправляем запрос к БД и получаем результирующий объект PDOStatement
$result = $pdo->query($query); // $result - объект класса PDOStatement

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<section class="header_banner">
    <div class="container">
        <div class="header_car">
            <div class="header_banner_name">
                <h1 class="header_cars"><?php echo $headerTitle ?? 'PRICE'?></h1>
            </div>
            <div class="header_svg">
                <?php require 'components/icons.php';?>
            </div>
            <p class="header_descr">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vitae orci urna amet penatibus.
            </p>
            <button class="header_btn"><a href="detailing.php">Детейлинг</a></button>
            <span class="header_btn_span"></span>
        </div>
    </div>
</section>
    <section class="price">
        <div class="container">
            <h3>Стоимость полной оклейки автомобиля</h3>
            <div class="progress_svg">
                <?php require 'components/icons.php';?>
            </div>
            <?php while( $carPrice = $result->fetch() ): ?>
                     <div class="box">
                         <div class="price_name">
                             <p class="price_car"><?php echo $carPrice['car_class'],'<br>',$carPrice['car_name']?></p>
                         </div>
                         <div class="price1">
                            <h4><br><?php echo $carPrice['tape_name']?></h4>
                         </div>
                        <div class="price2">
                            <h4><br>Стоимость: <?php echo $carPrice['tape_price']?> руб</h4>
                        </div>
                     </div>
            <?php endwhile;?>
        </div>
    </section>

    <section class="activity">
        <div class="container">
            <div class="activity_wrapper">
                <div class="carousel_inner activity_inner">
                    <div>
                        <img class="activity_img" src="img/tape/hexis.jpg" alt="hexis">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span></span>
                    </div>
                    <div>
                        <img class="activity_img1" src="img/tape/llumar.jpg" alt="llumar">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span></span>
                    </div>
                    <div>
                        <img class="activity_img2" src="img/tape/spectroll.jpg" alt="spectroll">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span></span>
                    </div>
                    <div>
                        <img class="activity_img" src="img/tape/suntek.jpg" alt="Rectangle49">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="marks">
        <div class="container">
            <div class="mark_wrapper">
                <div class="mark_item">
                    <h4>Полиуретановая пленка единственная надежная защита автомобиля
                        от всех внешних воздействий</h4>
                    <div class="progress_svg">
                        <?php require 'components/icons.php';?>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant tincidunt aliquam
                        tincidunt pretium sodales. Tristique odio pellentesque et tincidunt posuere arcu</p>
                    <div class="mark_img">
                        <img src="img/icons/voys.png" alt="voys">
                        <img src="img/icons/star.png" alt="star">
                        <img src="img/icons/star.png" alt="star">
                        <img src="img/icons/voys.png" alt="voys">
                    </div>
                    <button class="marks_btn">Записаться</button>
                </div>
                <div class="mark_item2">
                    <img src="img/bg/bmw39.jpg" alt="bmw">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Pellentesque auctor nibh feugiat est. Consectetur lectus.</p>
                </div>
            </div>
        </div>
    </section>
</html>



<?php

require 'components/footer.php';

?>
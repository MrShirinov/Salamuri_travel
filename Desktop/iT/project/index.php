<?php session_start();?>
<?php
    require 'components/header.php';

    $title = 'Главная страница';
    $headerTitle = 'CAR TUNING';
    $mainHtwo = 'наши достижения от кубка россии до чемпионатов мира';
    $footerTitle = 'ответим на любой вопрос';
    $headerH = [
            'adress' => 'Адрес:', 'tel' => 'Телефон:', 'work' => 'Режим работы:',
            'text' => 'материалы от лучших компаний', 'text2' => 'опытные мастера', 'text3' => 'гарантия на все виды работы',
            'protection' => 'Защитные пленки ', 'color' => 'Цветные пленки', 'design' => 'Дизайн', 'salon' => 'Оклейка салона',
            'painting' => 'Покраска', 'tuning' => 'Тюнинг', 'strong' => 'Мощность', 'body' => 'Обвес', 'polish' => '100% полироль AXEM',
            'works_tz' => 'Выполняем работу четко по ТЗ', 'masters' => 'У нас лучшие мастера',
            'services' => 'Наши услуги', 'works' => 'Наши работы',
    ];



require 'DBConnect.php';
$pdo = DBConnect::getConnection();
?>
<section class="header_banner">
    <div class="container">
        <div class="header_car">
            <div class="header_banner_name">
                <h1 class="header_cars animate__animated animate__zoomInDown"><?php echo $headerTitle ?? 'CAR TUNING'?></h1>
            </div>
            <div class="header_svg">
                <?php require 'components/icons.php';?>
            </div>
            <p class="header_descr">
                Детейлинг автомобиля это не просто покрытие пленки это жизнь и защита твоего авто.
            </p>
            <button class="header_btn"><a href="pasting.php">Наши услуги</a></button>
            <span class="header_btn_span"></span>
            <div class="header_div"></div>
        </div>
    </div>
</section>
</section>
    <section class="contact">
        <div class="header_contact">
            <div class="header_adres">
                <h4><?php echo $headerH['adress']?></h4>
                <p>город: Москва<br> ул. Тверская дом.1 к1  </p>
            </div>
            <div class="header_phone">
                <h4><?php echo $headerH['tel']?></h4>
                <a href="tel:+79258384522">8(925)838-45-22</a><br>
                <a href="tel:+74997096981">8(499)709-69-81</a>
            </div>
            <div class="header_time">
                <h4><?php echo $headerH['work']?></h4>
                <p>пн-пт: 10:00 - 20:00</p>
                <p>сб-вск: 12:00 - 20:00</p>
            </div>
        </div>
    </section>
    <section class="progress">
        <div class="container">
            <div class="progress_block_info">
                <div class="progress_wrapper">
                    <h2 class="progress_info"><?php echo $mainHtwo?></h2>
                    <div class="progress_svg">
                        <?php require 'components/icons.php';?>
                    </div>
                    <p>
                        Наши ребята на протяжении несколких лет забируют призовые места на многих выстовках, мы стараемся
                        доказать, что наши проекты приведут сферу детейлинга в новый мир, так как мы используем только современные
                        технологии и пытаемся улучшить состав пленок и стойкости продукции.
                        Мы гордимся своими работами, и победы нашей команды тому доказательство.
                    </p>
                </div>
                <div class="progress_block">
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win animate__animated animate__flipInX">1</span><br>Кубок России 2016г, <br>Команда Петрова.</p>
                    </div>
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win">4</span><br>Чемпионат Европы 2018г, <br>Команда Смирнова "Германия".</p>
                    </div>
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win">6</span><br>Чемпионат Мира 2019г, <br>Команда Рудникова "Бразилия".</p>
                    </div>
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win">3</span><br>Чемпионат Мира 2019г, <br>Команда Топилина "Франция". </p>
                    </div>
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win">2</span><br>Чемпионат СНГ 2020г, <br>Команда Смирнова "Баку".</p>
                    </div>
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win">1</span><br>Чемпионат России 2021г, <br>Команда Басова "Москва".</p>
                    </div>
                    <div class="progress_block_descr">
                        <p><span>#</span><span class="win">1</span><br>Чемпионат СНГ 2021г, <br>Команда Топилина "Самарканд".</p>
                    </div>
                    <div class="progress_block_descr">
                        <p><img src="img/icons/Group.svg" alt="win"><br>Чемпионат СНГ 2022г, <br>Команда Ширинова "Баку".</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="carousel">
<!--        <div class="container">-->
            <div class="carousel_inner">
                <div>
                    <img src="img/corusel/Rectangle45.png" alt="Rectangle45">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span></span>
                </div>
                <div>
                    <img src="img/corusel/Rectangle47.png" alt="Rectangle47">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span></span>
                </div>
                <div>
                    <img src="img/corusel/Rectangle49.png" alt="Rectangle49">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span></span>
                </div>
                <div>
                    <img src="img/corusel/bmw3.png" alt="bmw3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <span></span>
                </div>
            </div>
<!--        </div>-->
    </section>
    <section class="skills">
        <div class="container">
            <div class="skills_wrapper">
                <div class="skills_info">
                    <img class="skill_img" src="img/icons/Group53.svg" alt="car">
                    <h4><?php echo $headerH['text']?></h4><br><br>
                    <p>
                        Мы используем материалы от самых известных производителей.
                        За гарантию качесвта продукта в отвте только эти компании, к нам вопросов нет=)<br>
                        Сотрудничество с нами это просто удовольствие.
                    </p>
                    <div class="progress_svg skill_svg">
                        <?php require 'components/icons.php';?>
                    </div>
                    <img class="skill_img" src="img/icons/Group52.svg" alt="oil">
                    <h4><?php echo $headerH['text2']?></h4><br>
                    <p>
                        Наши мастера самые опытные ребята, их мастерство с каждым днем просто удивляет.
                        Amet volutpat ornare pharetra amet adipiscing orci, lectus aenean ultricies.
                        Erat viverra eget blandit ornare. Molestie ipsum commodo faucibus rhoncus
                    </p>
                    <div class="progress_svg skill_svg">
                        <?php require 'components/icons.php';?>
                    </div>
                    <img class="skill_img" src="img/icons/Group54.svg" alt="poli">
                    <h4><?php echo $headerH['text3']?></h4><br><br>
                    <p>100% гаранитю дают только шарлатаны, мы же даем самые что не на есть 40%. <br>Выбирайте нас.</p>
                </div>
                <div class="carousel_skill">
                    <img src="img/corusel/Rectangle52.png" alt="bmw">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor nibh feugiat est.
                        Consectetur lectus.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="services">
        <div class="container">
            <h3 class="services_text"><?php echo $headerH['services']?></h3>
            <div class="progress_svg services_svg">
                <?php require 'components/icons.php';?>
            </div>
                <ul class="services_tabs">
                    <li class="services_tab services_tab_active"><div>Оклейка</div></li>
                    <li class="services_tab"><div>Детейлинг</div></li>
                </ul>
            <div class="services_content services_content_active">
                <div class="services_item_content services_item_content_active">
                    <div class="services_wrapper">
                        <img class="group" src="img/icons/Group55.svg" alt="group">
                        <h4><?php echo $headerH['protection']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                    <div class="services_wrapper">
                        <img src="img/icons/Group53.svg" alt="group">
                        <h4><?php echo $headerH['color']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                    <div class="services_wrapper">
                        <img class="group1" src="img/icons/Group52.svg" alt="group">
                        <h4><?php echo $headerH['design']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                    <div class="services_wrapper">
                        <img src="img/icons/Group54.svg" alt="group">
                        <h4><?php echo $headerH['salon']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="services_content">
                <div class="services_item_content services_item_content_active">
                    <div class="services_wrapper">
                        <img class="group" src="img/icons/Group55.svg" alt="group">
                        <h4><?php echo $headerH['painting']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                    <div class="services_wrapper">
                        <img src="img/icons/Group53.svg" alt="group">
                        <h4><?php echo $headerH['tuning']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                    <div class="services_wrapper">
                        <img class="group1" src="img/icons/Group52.svg" alt="group">
                        <h4><?php echo $headerH['strong']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                    <div class="services_wrapper">
                        <img src="img/icons/Group54.svg" alt="group">
                        <h4><?php echo $headerH['body']?></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nascetur ultrices pellentesque vulputate sit. Ut feugiat.</p>
                        <button class="services_btn">Подробнее</button>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="skills">
    <div class="container">
        <div class="skills_wrapper">
            <div class="carousel_skill">
                <img src="img/bg/Rectangle53.png" alt="bmw">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor nibh feugiat est.
                    Consectetur lectus.</p>
            </div>
            <div class="skills_info">
                <img class="skill_img" src="img/icons/Group55.svg" alt="car">
                <h4><?php echo $headerH['polish']?></h4><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium, rutrum est,
                    molestie proin tristique duis sed. Morbi suspendisse amet nisl vestibulum risus.
                    Quis pretium</p>
                <div class="progress_svg skill_svg">
                    <?php require 'components/icons.php';?>
                </div>
                <img class="skill_img" src="img/icons/Group53.svg" alt="oil">
                <h4><?php echo $headerH['works_tz']?></h4><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et donec elementum egestas vitae
                    ullamcorper. Amet volutpat ornare pharetra amet adipiscing orci, lectus aenean ultricies.
                    Erat viverra eget blandit ornare. Molestie ipsum commodo faucibus rhoncus</p>
                <div class="progress_svg skill_svg">
                    <?php require 'components/icons.php';?>
                </div>
                <img class="skill_img" src="img/icons/Group52.svg" alt="poli">
                <h4><?php echo $headerH['masters']?></h4><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat.</p>
            </div>
        </div>
    </div>
</section>
<section class="works">
    <div class="container">
        <div class="works_wrapper">
            <h3 class="works_text"><?php echo $headerH['works']?></h3>
            <div class="progress_svg services_svg">
                <?php require 'components/icons.php';?>
            </div>
            <div class="works_img">
                <img src="img/footerimg/Rectangle56.png" alt="56">
                <img src="img/footerimg/Rectangle57.png" alt="57">
                <img src="img/footerimg/Rectangle58.png" alt="58">
                <img src="img/footerimg/Rectangle59.png" alt="59">
                <img src="img/footerimg/Rectangle60.png" alt="60">
                <img src="img/footerimg/Rectangle61.png" alt="61">
                <img src="img/footerimg/Rectangle56.png" alt="56">
                <img src="img/footerimg/Rectangle57.png" alt="57">
                <img src="img/footerimg/Rectangle59.png" alt="59">
                <img src="img/footerimg/Rectangle60.png" alt="60">
                <img src="img/footerimg/Rectangle61.png" alt="61">
                <img src="img/footerimg/Rectangle56.png" alt="56">
            </div>
        </div>
    </div>
</section>
<?php

require 'components/footer.php';

?>

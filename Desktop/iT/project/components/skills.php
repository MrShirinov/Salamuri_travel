<?php
$headerH = [
    'adress' => 'Адрес:', 'tel' => 'Телефон:', 'work' => 'Режим работы:',
    'text' => 'материалы от лучших компаний', 'text2' => 'опытные мастера', 'text3' => 'гарантия на все виды работы',
    'protection' => 'Защитные пленки ', 'color' => 'Цветные пленки', 'design' => 'Дизайн', 'salon' => 'Оклейка салона',
    'painting' => 'Покраска', 'tuning' => 'Тюнинг', 'strong' => 'Мощность', 'body' => 'Обвес', 'polish' => '100% полироль AXEM',
    'works_tz' => 'Выполняем работу четко по ТЗ', 'masters' => 'У нас лучшие мастера',
    'services' => 'Наши услуги', 'works' => 'Наши работы',
];

?>

<section class="skills">
    <div class="container">
        <div class="skills_wrapper">
            <div class="skills_info">
                <img class="skill_img" src="img/icons/Group53.svg" alt="car">
                <h4><?php echo $headerH['text']?></h4><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pretium, rutrum est,
                    molestie proin tristique duis sed. Morbi suspendisse amet nisl vestibulum risus.
                    Quis pretium</p>
                <div class="progress_svg skill_svg">
                    <?php require 'components/icons.php';?>
                </div>
                <img class="skill_img" src="img/icons/Group52.svg" alt="oil">
                <h4><?php echo $headerH['text2']?></h4><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et donec elementum egestas vitae
                    ullamcorper. Amet volutpat ornare pharetra amet adipiscing orci, lectus aenean ultricies.
                    Erat viverra eget blandit ornare. Molestie ipsum commodo faucibus rhoncus</p>
                <div class="progress_svg skill_svg">
                    <?php require 'components/icons.php';?>
                </div>
                <img class="skill_img" src="img/icons/Group54.svg" alt="poli">
                <h4><?php echo $headerH['text3']?></h4><br><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum volutpat.</p>
            </div>
            <div class="carousel_skill">
                <img src="img/corusel/Rectangle52.png" alt="bmw">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque auctor nibh feugiat est.
                    Consectetur lectus.</p>
            </div>
        </div>
    </div>
</section>

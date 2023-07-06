<?php
/**
 * 1. CREATE - создание БД, табл
 * 2. READ - выборка данных из бд
 * 3. UPDATE - обновление данных в бд
 * 4. DELETE - удаление данных из бд
 * CRUD
 */

//use controlers\components\DBConnect;

require 'components/header.php';


require 'DBConnect.php';
$pdo = DBConnect::getConnection();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Работа с пользователями</title>
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
            <button class="header_btn">Наши услуги</button>
            <span class="header_btn_span"></span>
        </div>
    </div>
</section>
<section class="user">


<h1>Личный кабинет</h1>

<?php
/**
 * создаем таблицу для хранения данных
 * id, first_name, last_name, login, email, password
 */
$query = "
		    CREATE TABLE IF NOT EXISTS users(
		        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
		        first_name VARCHAR(255) NOT NULL,
		        last_name VARCHAR(255) NOT NULL,
		        login VARCHAR(255) NOT NULL,
		        email VARCHAR(255) NOT NULL,
		        password VARCHAR(255) NOT NULL
		    );
		";
$pdo->exec($query); // выполняем запрос на создание таблицы


/**
 * 2. Если нажата ссылка на добавление нового пользователя
 * показываем форму для заполнения
 */




require 'components/userreg.php';






/**
 * 3. Если нажата кнопка name="action" value="Создать"
 * обрабатываем введенные данные
 */
if( isset($_POST['action']) && $_POST['action'] === 'Создать' ){

        $avatar = $_FILES['avatar'];

    // проверка на пустые поля
    if( !empty($_POST['first_name']) &&
        !empty($_POST['last_name']) &&
        !empty($_POST['login']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password']) &&
        $avatar['error'] !== 4)
    { // если поля не пустые, работаем с данными

        // 1. Экранируем данные
        $first_name = htmlspecialchars( trim($_POST['first_name']) );
        $last_name = htmlspecialchars( trim($_POST['last_name']) );
        $login = htmlspecialchars( trim($_POST['login']) );
        $email = htmlspecialchars( trim($_POST['email']) );
        $password = htmlspecialchars( trim($_POST['password']) );

        // 2. Формирование пути к картинке
        $avatar_path = 'img/'.$login.'_'.time().'_'.$avatar['name']; // images/image-2.jpg

        // 3. перемещаем картинку из временной папки в папку images
        move_uploaded_file($avatar['tmp_name'], $avatar_path);

        // 4. Записываем в БД
        $query = "INSERT INTO users VALUES(?, ?, ?, ?, ?, ?, ?)";
        $result = $pdo->prepare($query);
        $result->execute([null, $first_name, $last_name, $login, $email, $password, $avatar_path]);
//        header('Location: /');

    }else{ // если не все поля заполнены, выводим ошибку
        echo "<h3>Вы не заполнили все поля</h3>";
    }
}


/**
 * если нажата кнопка name="action" value="Удалить"
 */
if( isset($_POST['action']) && $_POST['action'] === 'Удалить' ){
    // забираем id и приводим к числу
    $id = (int)$_POST['id'];

    // получаем ссылку на аватар
    $query = "SELECT avatar FROM users WHERE id = ?";
    $result = $pdo->prepare($query);
    $result->execute([$id]);
    $avatar_path = $result->fetch()['avatar'];


    // проверяем, есть ли картинка и путь к картинке НЕ images/default.png
    if( file_exists($avatar_path) && $avatar_path !== 'img/icons/user.svg' ){
        // если картинка есть, удаляем
        unlink($avatar_path);
    }

    // удаляем пользователя с указанным id
    $query = "DELETE FROM users WHERE id = ?";
    $result = $pdo->prepare($query);
    $result->execute([$id]);
//    header('Location: /');
}

/**
 * если нажата кнопка name="action" value="Изменить"
 */





 require 'components/usersedit.php';




/**
 * при нажатии кнопки name="action" value="Обновить"
 */
if( isset($_POST['action']) && $_POST['action'] === 'Обновить' ){
    // проверка на пустые поля
    if(
        !empty($_POST['first_name']) &&
        !empty($_POST['last_name']) &&
        !empty($_POST['login']) &&
        !empty($_POST['email']) &&
        !empty($_POST['password'])
    ){ // если все данные заполнены
        // экранирование данных
        $first_name = htmlspecialchars(trim( $_POST['first_name'] ));
        $last_name = htmlspecialchars(trim( $_POST['last_name'] ));
        $login = htmlspecialchars(trim( $_POST['login'] ));
        $email = htmlspecialchars(trim( $_POST['email'] ));
        $password = htmlspecialchars(trim( $_POST['password'] ));

        $id = (int)$_POST['id'];

        /**
         * работа с картинкой
         */
        $avatar = $_FILES['avatar'];

        if($avatar['error'] === 4){ // если новая картинка передана
            $query = "UPDATE users
                      SET first_name = ?, last_name = ?, login = ?, email = ?, password = ?
                      WHERE id = ?";
            $result = $pdo->prepare($query);
            $result->execute([$first_name, $last_name, $login, $email, $password, $id]);
        }else{ // если новая картинка не передана
            // загружаем новую картинку в папку images
            $avatar_path = 'img/'. $login.'_'.time().'_'.$avatar['name'];
            move_uploaded_file($avatar['tmp_name'], $avatar_path);

            // удаляем старую картинку, только если это не дефолтная картинка
            // 1. получаем ссылку на старую картинку
            $query = "SELECT avatar FROM users WHERE id = ?";
            $result = $pdo->prepare($query);
            $result->execute([$id]);
            $del_avatar_path = $result->fetch()['avatar'];
            // 2. удаляем старую картинку
            // проверяем, есть ли картинка и путь к картинке НЕ images/default.png
            if( file_exists($del_avatar_path) && $avatar_path !== 'img/icons/user.svg' ){
                // если картинка есть, удаляем
                unlink($del_avatar_path);
            }

            // записываем в бд все, включая новый путь к картинке
            $query = "UPDATE users
                      SET first_name = ?, last_name = ?, login = ?, email = ?, password = ?, avatar = ?
                      WHERE id = ?";
            $result = $pdo->prepare($query);
            $result->execute([$first_name, $last_name, $login, $email, $password, $avatar_path, $id]);


        }
//        header('Location: user.php');

    }else{
        echo "<h3>Вы не заполнили все поля</h3>";
    }

}

/**
 * выводим список пользователей в документ
 */
$query = "SELECT id, first_name, last_name, login, email, password, avatar
          FROM users
          ORDER BY first_name";
$result = $pdo->query($query); // выбираем данные из бд

echo "<h2>Список всех пользователей</h2>";

// 1. Нажатие ссылки для добавления
echo "<a class='box_link' href='?add'>Добавить нового пользователя</a>";


// вывод всех пользователей в документ
echo "<div class='box_item'>";
echo "<div class='container'>";
while( $user = $result->fetch() ){
    echo <<<_HTML_
                <div class="box_wrapper">
                    <div class="box">
                        <img src="$user[avatar]" alt="$user[first_name] $user[last_name]">
                        <p>ID: <span>$user[id]</span></p>
                        <p>Имя: <span>$user[first_name]</span></p>
                        <p>Фамилия: <span>$user[last_name]</span></p>
                        <p>Логин: <span>$user[login]</span></p>
                        <p>Электронная почта: <span>$user[email]</span></p>
                        <form action="" method="POST">
    <!--                        <input type="hidden" name="avatar" value="$user[avatar]">-->
                            <input type="hidden" name="id" value="$user[id]">
                            <input class="input_btn" type="submit" name="action" value="Изменить">
                            <input class="input_btn" type="submit" name="action" value="Удалить">
                        </form>
                    </div>
                </div>
_HTML_;

}
echo "</div>";


?>
</section>

<?php

require 'components/footer.php';
?>

</body>
</html>

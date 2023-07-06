<?php
if( isset($_POST['action']) && $_POST['action'] === 'Изменить' ){
    // забираем id и приводим к числу
    $id = (int)$_POST['id'];

    // получаем данные о пользователе из бд по id
    $query = "SELECT id, first_name, last_name, login, email, password
                FROM users
                WHERE id = ?";
    $result = $pdo->prepare($query);
    $result->execute([$id]);
    $user = $result->fetch();

    // отображаем форму для редактирования и подставляем в value данные из бд
    echo <<<_HTML_
                <h2>Изменение пользователя $user[first_name] $user[last_name]</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                   
                    <label>Имя:</label>
                    <input type="text" name="first_name" value="$user[first_name]"><br>
                    
                    <label>Фамилия:</label>
                    <input type="text" name="last_name" value="$user[last_name]"><br>
                    
                    <label>Имя пользователя:</label>
                    <input type="text" name="login" value="$user[login]"><br>
                    
                    <label>Адрес электронной почты:</label>
                    <input type="email" name="email" value="$user[email]"><br>
                    
                    <label>Пароль:</label>
                    <input type="text" name="password" value="$user[password]"><br>    
                    
                    <label>Аватар:</label>
		            <input type="file" name="avatar"><br>                                  
                                        
                    <input type="hidden" name="id" value="$user[id]">
                    <input class="input_btn" type="submit" name="action" value="Обновить">
                    <button class="resset_btn"><a href="user.php">СКРЫТЬ</a></button>
                </form>
                
_HTML_;

}
?>
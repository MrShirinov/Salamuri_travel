<?php
if( isset($_GET['add']) ){
    echo <<<_HTML_
                <h2>Добавить нового пользователя</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    
                    <label>Имя:</label>
                    <input type="text" name="first_name"><br>
                    
                    <label>Фамилия:</label>
                    <input type="text" name="last_name"><br>
                    
                    <label>Имя пользователя:</label>
                    <input type="text" name="login"><br>
                    
                    <label>Адрес электронной почты:</label>
                    <input type="email" name="email"><br>
                    
                    <label>Пароль:</label>
                    <input type="password" name="password"><br> 
                    
                    <label>Аватар:</label>
		            <input type="file" name="avatar"><br>                                                           
                    
                    <input class="input_btn" type="submit" name="action" value="Создать">
                    <button class="resset_btn"><a href="user.php">СКРЫТЬ</a></button>
                </form>
_HTML_;
}
?>
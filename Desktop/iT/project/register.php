<?php

require 'core/DBConnect.php';// подключение к бд
require 'core/SignUp.php';// подключение классов

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    list($errors, $input) = SignUp::validate_form();

    if ($errors){
        SignUp::show_form($errors, $input);
    }else{
        SignUp::process_form($input);
    }
}else{
    SignUp::show_form();
}
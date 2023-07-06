<?php

// статические свойства и методы - обращение к свойствам и методам без создания объекта класса
class DBConnect
{
    // свойства для подключения к бд
    private static $dbName = 'car_tuning';
    private static $dbHost = 'localhost';
    private static $dbLogin = 'root';
    private static $dbPassword = '';


    // приватный метод для формирования DSN
    private static function getDSN(){ // формирует строку для подключения
        return "mysql:host=".self::$dbHost.";dbname=".self::$dbName;
    }

    // метод для получения доступа к БД
    public static function getConnection(){
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword,
            [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public static function d($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

}
<?php

namespace App\model;

class Conexão{

    private static $instance;

    public static function getCon() {

        if(!isset(self::$instance)){
            self::$instance = new \PDO('mysql: host=localhost;dbname=pdo;charset=utf8', 'root', '');
        }
            return self::$instance;
    }
}
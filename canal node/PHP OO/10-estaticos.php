<?php

class Login {
    public static $user;

    public static function verificaLogin(){
        echo 'O usario '.self::$user.' esta logado!';
    }

    public function sairSistema(){
        echo "O usuario deslogou";
    }
}

$login = new Login();
$login->sairSistema();

Login::$user = "admin";
Login::verificaLogin();
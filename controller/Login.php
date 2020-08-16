<?php

class Login {
    static function showLoginForm() {
        realpath(require_once(__DIR__).'/../view/login.php');
    }

    static function loginAction() {
        echo "Os dados de login foram <br>";
        echo "Usuário: {$_POST['username']} <br>";
        echo "Senha: {$_POST['password']}";
    }
}
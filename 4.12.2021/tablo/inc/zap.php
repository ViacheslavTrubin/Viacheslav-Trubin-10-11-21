<?php


class zap
{

    public  $login;
    public $password;
    public function __construct($login, $password){
        $this->login = $login;
        $this->password = $password;
    }
    public function proverka(){

        if(isset($_POST['submit'])):
            $name2 = sha1($_POST['login']);
            $passwd2 = sha1($_POST['password']);
            echo ($_POST['login'] == $name2 && $_POST['password'] == $passwd2) ?
                '<p>Доступ открыт Добро пожаловать АДМИН</p>' .
                '<p>Последний посещенный сайт</p>'. $_COOKIE['site']
        : '<p>Неверный логин пароль</p>';

        endif;
    }

}
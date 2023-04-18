<?php

$login = $_POST["reg_login"];
$password = $_POST["reg_pass"];
$password_check = $_POST["reg_pass_check"];

include "operations.php";


registration($login,$password,$password_check);






?>



<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>

        <div>
            <div>
                <p>Авторизация</p>
                <form method="post">
                    <label>Введите Ваш логин</label>
                    <input type="login" name="reg_login" placeholder="Введите Ваш логин" required>
                    <label>Введите Ваш пароль</label>
                    <input type="password" name="reg_pass" placeholder="Введите пароль" required>

                    <input type="password" name="reg_pass_check" placeholder="Подтвердите пароль" required>

                    <button type="submit">Регистрация</button>
                </form>
            </div>
        </div>

    </body>
</html>


<?php

$login = $_POST["auth_login"];
$password = $_POST["auth_pass"];

include "operations.php";

if (!empty($password) and !empty($login)) {
    auth($login, $password);
}


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
                    <input type="login" name="auth_login" placeholder="Введите Ваш логин" required>
                    <label>Введите Ваш пароль</label>
                    <input type="password" name="auth_pass" placeholder="Введите пароль" required>
                    <button type="submit">Войти</button>
                </form>
            </div>
        </div>

    </body>
</html>

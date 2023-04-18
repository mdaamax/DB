<?php

require = "database.php";

function auth($login, $password)
{
    if (empty($login)) {
        echo "Введите логин";
    }

    $file = file_get_contents("user_data.json");
    $data = json_decode($file);
    var_dump($data);
    if (!empty($data)) {
        foreach ($data as $user) {
            if ($user->login == $login) {
                if (password_verify($password, $user->password)) {
                    session_start();
                    $_SESSION["user"]["login"] = $user->login;
                    var_dump($_SESSION);
                    $path = "for_auth_user.php";
                    header('Location: ' . $path);
                    return true;
                }
            }

        }
    }
    echo "Авторизация провалилась!";
    return false;

}

function registration($login, $password, $password_check)
{
    if (empty($login)) {
        echo "Введите логин";

    }
    if ($password != $password_check) {
        echo "Пароли не совпадают";
        return false;
    }
    $users = select("SELECT * FROM users WHERE login = :login", ['login' => $login]);
    if (!empty($users)){
        return false;
    }
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $user_id =insert('INSERT INTO users (login,password) VALUES (:login, :password)',[
        "login" =>$login,
        'password' => $hash,
    ]);
    return !empty($user_id);


    $dataFromFile = file_get_contents("user_data.json");
    $allData = json_decode($dataFromFile);
    var_dump($allData);
    foreach ($allData as $user) {
        if ($user->login == $login) {
            echo "Логин занят";
            return false;
        }
    }
    $allData[] = [
        "login" => $login,
        "password" => $hash
    ];
    $jsonData = json_encode($allData);

    file_put_contents("user_data.json", $jsonData);


}


?>
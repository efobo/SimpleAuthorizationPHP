<?php
    $login = filter_var(trim($_POST['login']), 
    FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), 
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['password']), 
    FILTER_SANITIZE_STRING);

    $is_error = false;
    if (mb_strlen($login) < 4 || mb_strlen($login) > 90)
    {
        echo "Invalid login length<br>";
        $is_error = true;
    }
    if (mb_strlen($name) < 4 || mb_strlen($name) > 50)
    {
        echo "Invalid name length<br>";
        $is_error = true;
    }
    if (mb_strlen($pass) < 6 || mb_strlen($pass) > 50)
    {
        echo "Invalid password length (from 6 to 50)<br>";
        $is_error = true;
    }

    if ($is_error) exit();

    
    $pass = md5($pass."mysalt");

    $mysql = new mysqli("localhost", "root", "root", "register-db");

    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /');
?>
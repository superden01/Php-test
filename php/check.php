<?php
    $login=filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $name=filter_var(trim($_POST['name']),
    FILTER_SANITIZE_STRING);
    $pass=filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    if(mb_strlen($login)< 5 || mb_strlen($login)>90){
        echo "Неможлива довжина логіну";
        exit();
    } else if (mb_strlen($name)< 3 || mb_strlen($name)>50){
        echo "Неможлива довжина імені";
        exit();
    }else if (mb_strlen($pass)< 2 || mb_strlen($pass)>6){
        echo "Неможлива довжина паролю (від 2-х до 6-ти символів)";
        exit();
    }

    $pass=md5($pass."suckdick");

    $mysql=new mysqli('localhost','root','123456789','register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) VALUES('$login','$pass','$name')");


    $mysql->close();

    header('Location:/second.php');

?>
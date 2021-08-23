
<?php

if($_COOKIE["status"] === 'admin'):

    session_start();
    $addimage = filter_var(trim($_POST['addimage']),FILTER_SANITIZE_STRING);


    if($addimage==''):
        $_SESSION["warning"] = "warning";
        $_SESSION["dialog"] = "Nav linka!";

        header('Location: /');
        exit();
    else:
        $_SESSION["warning"] = "success";
        $_SESSION["dialog"] = "Bilde ir pievienota!";
        $mysql = new mysqli('localhost','root','root','forphpproject');

        $mysql->query("INSERT INTO `pictures for index` (`link`) VALUES ('$addimage')");
        $mysql->close();
        header('Location: /');
        exit();
    endif;
    endif;?>






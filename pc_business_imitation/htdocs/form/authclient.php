<?php
session_start();
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);


if(trim($email) == ''){

    $_SESSION["dialog"] = "Email nav ievadits";
    $_SESSION["warning"] = "warning";
    print_r($email);

    header('Location: /client/register_client.php');
    exit();
}



$mysql = new mysqli('localhost', 'root', 'root', 'adas');


$userexists = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();


if (count($fetchuserexists) == 0){
    $_SESSION["dialog"] = "Email nav pareizs";
    $_SESSION["warning"] = "warning";
    header('Location: /client/register_client.php');
    exit();
}


$_SESSION["warning"] = "success";
$_SESSION["dialog"] = "Labdien " . $fetchuserexists['name'] . " " . $fetchuserexists['surname'] . " !";
setcookie("user", $fetchuserexists['email'], time() + 3600, "/client/");
setcookie("status", $fetchuserexists['status'], time() + 3600, "/client/");

$mysql->close();
header('Location: /client/register_client.php');
exit();
?>
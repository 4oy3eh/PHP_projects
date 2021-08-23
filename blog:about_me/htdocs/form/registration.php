<?php
$email = ($_POST['email']);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost','root','root','forphpproject');

$userexists = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();

if (count($fetchuserexists) == 0){
    $mysql->query("INSERT INTO `client` (`name`, `surname`, `email`, `phone`, `status`) VALUES ('$name', '$surname', '$email', '$phone', 'client')");
    $mysql->close();
    header('Location: /');
    exit();
}
session_start();
$_SESSION["dialog"] = "Email jau ir izmantots";
$_SESSION["warning"] = "warning";
header('Location: ../register.php');
exit();


?>
<?php
$email = $_COOKIE['user'];
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
$team = filter_var(trim($_POST['team']),FILTER_SANITIZE_STRING);






$mysql = new mysqli('localhost','root','root','adas');

$userexists = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();


$id = $fetchuserexists['id'];

$mysql->query("UPDATE `client` SET `name` = '$name', `surname` = '$surname', `team` = '$team', `phone` = '$phone' WHERE `client`.`id` = '$id'");
$mysql->close();
header('Location: /client/profile.php');
exit();
?>
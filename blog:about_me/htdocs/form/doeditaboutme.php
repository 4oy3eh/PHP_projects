<?php
$email = $_COOKIE['user'];
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
$skype = filter_var(trim($_POST['skype']),FILTER_SANITIZE_STRING);
$uni = filter_var(trim($_POST['uni']),FILTER_SANITIZE_STRING);
$status = filter_var(trim($_POST['status']),FILTER_SANITIZE_STRING);
$school = filter_var(trim($_POST['school']),FILTER_SANITIZE_STRING);
$interest = filter_var(trim($_POST['interest']),FILTER_SANITIZE_STRING);
$favmusic = filter_var(trim($_POST['favmusic']),FILTER_SANITIZE_STRING);
$favmovies = filter_var(trim($_POST['favmovies']),FILTER_SANITIZE_STRING);
$favbooks = filter_var(trim($_POST['favbooks']),FILTER_SANITIZE_STRING);
$favgames = filter_var(trim($_POST['favgames']),FILTER_SANITIZE_STRING);
$favphrases = filter_var(trim($_POST['favphrases']),FILTER_SANITIZE_STRING);
$aboutme = filter_var(trim($_POST['aboutme']),FILTER_SANITIZE_STRING);







$mysql = new mysqli('localhost','root','root','forphpproject');



$mysql->query("UPDATE `aboutme` SET `phone` = '$phone', `skype` = '$skype', `uni` = '$uni', `status` = '$status', `school` = '$school', `interest` = '$interest', `favmusic` = '$favmusic', `favmovies` = '$favmovies', `favbooks` = '$favbooks', `favgames` = '$favgames', `favphrases` = '$favphrases', `aboutme` = '$aboutme' WHERE `aboutme`.`id` = 1");
$mysql->close();
header('Location: ../about.php');
exit();
?>
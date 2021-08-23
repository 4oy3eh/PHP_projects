<?php
$text = ($_POST['text']);
$email = $_COOKIE["user"] ;
session_start();
$mysql = new mysqli('localhost','root','root','forphpproject');
$date = date("Y-m-d");



    $mysql->query("INSERT INTO `comments` (`comment`, `email`, `date`) VALUES ('$text', '$email', '$date')");
    $mysql->close();
    $_SESSION["dialog"] = "Comments ir izveidots";
    $_SESSION["warning"] = "success";
    header('Location: ../profession.php');
    exit();
?>
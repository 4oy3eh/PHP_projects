<?php
$name = $_POST['name'];

$description = $_POST['description'];
$date = $_POST['date'];
$location = $_POST['location'];
$price = $_POST['price'];
$count = $_POST['count'];
$link = $_POST['link'];
//
//print_r($_POST['name']);
//print_r($_POST['description']);
//print_r($_POST['location']);
//print_r($_POST['price']);
//print_r($_POST['count']);
//print_r($_POST['link']);
//




$mysql = new mysqli('localhost','root','root','register-bg');
$mysql->query("INSERT INTO `items` (`name`,`description`,`date`,`location`,`price`,`count`,`link`) VALUES('$name', '$description', '$date', '$location', '$price', '$count', '$link')");
$mysql->close();
header('Location: /');
?>
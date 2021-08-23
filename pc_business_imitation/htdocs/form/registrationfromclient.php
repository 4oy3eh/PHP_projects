<?php
$email = ($_POST['email']);
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$surname = filter_var(trim($_POST['surname']),FILTER_SANITIZE_STRING);
$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);






$mysql = new mysqli('localhost','root','root','adas');
$mysql->query("INSERT INTO `client` (`name`, `surname`, `team`, `email`, `phone`, `rank`, `worker_id`, `pc_id`) VALUES ('$name', '$surname', NULL, '$email', '$phone', NULL, NULL, NULL)");
$mysql->close();
header('Location: /');
?>
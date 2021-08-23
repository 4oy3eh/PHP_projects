<?php
session_start();
$id = $_POST['id'];

$mysql = new mysqli('localhost', 'root', 'root', 'adas');


if($_COOKIE["status"] === 'boss'):
    $status = "secretary";
elseif($_COOKIE["status"] === 'secretary'):
    $status = "worker";
elseif($_COOKIE["status"] === 'super_admin'):
    $status = "admin";
else:
    $status = "0";
endif;



$mysql->query("DELETE FROM `$status` WHERE `id` = '$id'");

$mysql->close();
header('Location: /staff/profile.php');
exit();
?>
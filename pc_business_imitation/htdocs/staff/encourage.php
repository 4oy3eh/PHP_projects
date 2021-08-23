<?php
session_start();
$id = $_POST['encourage'];



if($_COOKIE["status"] === 'boss'):
    $status = "secretary";
elseif($_COOKIE["status"] === 'secretary'):
    $status = "worker";
elseif($_COOKIE["status"] === 'super_admin'):
    $status = "admin";
else:
    $status = "0";
endif;

print_r($status);


$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$salary = $mysql->query("SELECT * FROM `$status` WHERE `id` = '$id'");
$fetchsalary = $salary->fetch_assoc();

$newsalary = $fetchsalary[salary]+100;

$mysql->query("UPDATE `$status` SET `salary` = '$newsalary' WHERE `id` = '$id'");

$mysql->close();

header('Location: /staff/profile.php');
exit();
?>
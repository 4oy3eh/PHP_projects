<?php
session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$email = $_COOKIE['user'];

$countclient = $mysql->query("SELECT count(*) as qwe FROM `client` WHERE `pc_id` NOT IN ('0') and `worker_id` = 0");
$fetchcount = $countclient->fetch_assoc();




$result = $mysql->query("SELECT * FROM `worker` where `email` = '$email'");
$table = $result->fetch_assoc();






if($fetchcount[qwe]==0):
    $_SESSION["dialog"] = "Nav klientu!";
    $_SESSION["warning"] = "warning";
    header('Location: /staff/profile.php');
    exit();

else:

$findclient = $mysql->query("SELECT * FROM `client` WHERE `pc_id` NOT IN ('0') and `worker_id` = 0");
$fetchfindclient = $findclient->fetch_assoc();



    $findworkerid = $mysql->query("SELECT * FROM `worker` WHERE `email` = '$email'");

    $fetchfindworkerid = $findworkerid->fetch_assoc();



$mysql->query("UPDATE `client` SET `worker_id` = '$fetchfindworkerid[id]' WHERE `id` = '$fetchfindclient[id]'");





endif;
$mysql->close();
header('Location: /staff/profile.php');
exit();
?>





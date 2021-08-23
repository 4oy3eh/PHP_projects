<?php

$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$email = $_COOKIE['user'];
$getid = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchgetid = $getid->fetch_assoc();
$clientid = $fetchgetid['id'];
$pctable = $mysql->query("SELECT * FROM `pc` WHERE `client_id` = '$clientid'");
$fetchpctable  = $pctable ->fetch_assoc();


if($fetchpctable[status] == 0):


$mysql->query("UPDATE `pc` SET `status` = '1' WHERE `client_id` = '$clientid'");
else:

$mysql->query("UPDATE `pc` SET `status` = '0' WHERE  `client_id` = '$clientid'");
endif;
$mysql->close();



header('Location: /client/profile.php');
exit();














    ?>
<?php
session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$pcid = $_SESSION["pdid_forio"];

$pctable = $mysql->query("SELECT * FROM `pc` WHERE `id` = '$pcid'");
$fetchpctable  = $pctable ->fetch_assoc();


if($fetchpctable[status] == 0):


$mysql->query("UPDATE `pc` SET `status` = '1' WHERE `id` = '$pcid'");
else:

$mysql->query("UPDATE `pc` SET `status` = '0' WHERE  `id` = '$pcid'");
endif;
$mysql->close();



header('Location: /staff/profile.php');
exit();














    ?>
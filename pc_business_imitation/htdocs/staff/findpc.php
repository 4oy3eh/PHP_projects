<?php
session_start();
$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$email = $_COOKIE['user'];

$countpc = $mysql->query("SELECT count(*) as qwe FROM `pc` WHERE `status` NOT IN ('0') and `client_id` = 0");
$fetchcountpc = $countpc->fetch_assoc();










if($fetchcountpc[qwe]==0):
    $_SESSION["pcidforadmin"]="";
    $_SESSION["dialog"] = "Nav ko darit!";
    $_SESSION["warning"] = "warning";
    header('Location: /staff/profile.php');
    exit();

else:



    $findpc = $mysql->query("SELECT * FROM `pc` WHERE `status` NOT IN ('0') and `client_id` = 0");
    $fetchfindpc = $findpc->fetch_assoc();

    print_r($fetchfindpc);




    $_SESSION["pcidforadmin"]="$fetchfindpc[id]";


endif;
$mysql->close();
header('Location: /staff/profile.php');
exit();
?>





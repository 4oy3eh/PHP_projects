<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email = $_COOKIE['user'];





$mysql = new mysqli('localhost','root','root','adas');


$getid = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchgetid = $getid->fetch_assoc();
$id = $fetchgetid['id'];



$_SESSION["dialog"] = "PC ir atdods!";
$_SESSION["warning"] = "success";



//        print_r($id);
//        exit();


    $pc = $mysql->query("SELECT * FROM `pc` WHERE `client_id` = '$id' ");
    $fetchpc = $pc->fetch_assoc();

    $mysql->query("UPDATE `pc` SET `client_id` = '0' WHERE `id` = '$fetchpc[id]'");
    $mysql->query("UPDATE `client` SET `pc_id` = '0' WHERE `id` = '$id'");
    $mysql->query("UPDATE `client` SET `worker_id` = '0' WHERE `id` = '$id'");
    header('Location: /client/profile.php');


$mysql->close();
exit();

?>
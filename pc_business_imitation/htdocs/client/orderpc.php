<?php
$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
$email = $_COOKIE['user'];





$mysql = new mysqli('localhost','root','root','adas');

$pcavailable = $mysql->query("SELECT COUNT(*) as qwe FROM `pc` WHERE `type` = '$name' && `client_id` = '0'  && `admin_id` = '0' ");
$fetchpcavailable  = $pcavailable ->fetch_assoc();

//print_r($fetchpcavailable[qwe]);
//GET id
$getid = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchgetid = $getid->fetch_assoc();
$id = $fetchgetid['id'];





if($fetchpcavailable[qwe] == 0):
    session_start();
    $_SESSION["dialog"] = "Nav brivu " . $name . " PC";
    $_SESSION["warning"] = "warning";

    header('Location: /client/profile.php');

    else:
        session_start();
        $_SESSION["dialog"] = "PC ir iedots!";
        $_SESSION["warning"] = "success";



//        print_r($id);
//        exit();
        $pc = $mysql->query("SELECT * FROM `pc` WHERE `type` = '$name' && `client_id` = '0'  && `admin_id` = '0' ");
        $fetchpc = $pc->fetch_assoc();
        $mysql->query("UPDATE `pc` SET `client_id` = '$id' WHERE `id` = '$fetchpc[id]'");
        $mysql->query("UPDATE `client` SET `pc_id` = '$fetchpc[id]' WHERE `id` = '$id'");
        header('Location: /client/profile.php');
        endif;

$mysql->close();
exit();

?>
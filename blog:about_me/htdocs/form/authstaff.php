<?php
session_start();
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);


if(trim($email) == ''){

    $_SESSION["dialog"] = "Email nav ievadits";
    $_SESSION["warning"] = "warning";
    print_r($email);

    header('Location: /staff/register_staff.php');
    exit();
}



$mysql = new mysqli('localhost', 'root', 'root', 'adas');



$userexists = $mysql->query("SELECT count(*) as qwe FROM `boss` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();







if($fetchuserexists[qwe]==1):
    $userexists = $mysql->query("SELECT * FROM `boss` WHERE `email` = '$email'");
    $fetchuserexists = $userexists->fetch_assoc();

    $_SESSION["warning"] = "success";
    $_SESSION["dialog"] = "Labdien " . $fetchuserexists['name'] . " " . $fetchuserexists['surname'] . " !";
    setcookie("user", $fetchuserexists['email'], time() + 3600, "/staff/");
    setcookie("status", "boss", time() + 3600, "/staff/");
    $mysql->close();
    header('Location: /staff/register_staff.php');
    exit();

endif;


$userexists = $mysql->query("SELECT count(*) as qwe FROM `secretary` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();




if($fetchuserexists[qwe]==1):
    $userexists = $mysql->query("SELECT * FROM `secretary` WHERE `email` = '$email'");
    $fetchuserexists = $userexists->fetch_assoc();
    $_SESSION["warning"] = "success";
    $_SESSION["dialog"] = "Labdien " . $fetchuserexists['name'] . " " . $fetchuserexists['surname'] . " !";
    setcookie("user", $fetchuserexists['email'], time() + 3600, "/staff/");
    setcookie("status", "secretary", time() + 3600, "/staff/");
    $mysql->close();
    header('Location: /staff/register_staff.php');

    exit();

endif;


$userexists = $mysql->query("SELECT count(*) as qwe FROM `super_admin` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();

if($fetchuserexists[qwe]==1):
    $userexists = $mysql->query("SELECT * FROM `super_admin` WHERE `email` = '$email'");
    $fetchuserexists = $userexists->fetch_assoc();


    $_SESSION["warning"] = "success";
    $_SESSION["dialog"] = "Labdien " . $fetchuserexists['name'] . " " . $fetchuserexists['surname'] . " !";
    setcookie("user", $fetchuserexists['email'], time() + 3600, "/staff/");
    setcookie("status", "super_admin", time() + 3600, "/staff/");
    $mysql->close();
    header('Location: /staff/register_staff.php');
    exit();

endif;


$userexists = $mysql->query("SELECT count(*) as qwe FROM `admin` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();


if($fetchuserexists[qwe]==1):
    $userexists = $mysql->query("SELECT * FROM `admin` WHERE `email` = '$email'");
    $fetchuserexists = $userexists->fetch_assoc();
    $_SESSION["warning"] = "success";
    $_SESSION["dialog"] = "Labdien " . $fetchuserexists['name'] . " " . $fetchuserexists['surname'] . " !";
    setcookie("user", $fetchuserexists['email'], time() + 3600, "/staff/");
    setcookie("status", "admin", time() + 3600, "/staff/");
    $mysql->close();
    header('Location: /staff/register_staff.php');
    exit();

endif;




$userexists = $mysql->query("SELECT count(*) as qwe FROM `worker` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();


if($fetchuserexists[qwe]==1):
    $userexists = $mysql->query("SELECT * FROM `worker` WHERE `email` = '$email'");
    $fetchuserexists = $userexists->fetch_assoc();
    $_SESSION["warning"] = "success";
    $_SESSION["dialog"] = "Labdien " . $fetchuserexists['name'] . " " . $fetchuserexists['surname'] . " !";
    setcookie("user", $fetchuserexists['email'], time() + 3600, "/staff/");
    setcookie("status", "worker", time() + 3600, "/staff/");
    $mysql->close();
    header('Location: /staff/register_staff.php');
    exit();


else :
    $mysql->close();
    $_SESSION["dialog"] = "Email nav pareizs";
    $_SESSION["warning"] = "warning";
    header('Location: /staff/register_staff.php');
    exit();

endif;


$mysql->close();
header('Location: /staff/register_staff.php');
exit();
?>
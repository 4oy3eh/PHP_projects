<?php


if($_COOKIE["status"] === 'admin'):

session_start();
$email = $_COOKIE['user'];
$imagesperrow = filter_var(trim($_POST['imagesperrow']),FILTER_SANITIZE_STRING);

if($imagesperrow==''):

    $mysql = new mysqli('localhost','root','root','forphpproject');
    $setprofile = filter_var(trim($_POST['setprofile']),FILTER_SANITIZE_STRING);


    $mysql->query("UPDATE `pictures for index` SET `MAIN?` = 0 WHERE `pictures for index`.`MAIN?` = 1");

    $getimage = $mysql->query("SELECT * FROM `pictures for index`");
    for($i = 0;$i < $setprofile;$i++):
        $fetchgetimage = $getimage->fetch_assoc();
        endfor;

    $getid = $mysql->query("SELECT * FROM `pictures for index` WHERE `link` = '$fetchgetimage[link]'");
    $fetchgetid = $getid->fetch_assoc();
    print_r($fetchgetid);

    $mysql->query("UPDATE `pictures for index` SET `MAIN?` = 1 WHERE `pictures for index`.`id` = '$fetchgetid[id]'");








    $mysql->close();
    header('Location: /');
    exit();
else:
    $_SESSION["warning"] = "success";
    $_SESSION["dialog"] = "Tagat bildes skaits vienā rindā ir  " . $imagesperrow . " !";
    $mysql = new mysqli('localhost','root','root','forphpproject');

$mysql->query("UPDATE `index_picture_counter` SET `counter` = '$imagesperrow' WHERE `index_picture_counter`.`id` = '1'");
$mysql->close();
endif;
header('Location: /');
exit();


else:
    header('Location: /');
    exit();
    endif;

?>
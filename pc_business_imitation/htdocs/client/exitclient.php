<?php
setcookie("user", $_COOKIE['user'], time() - 3600, "/client/");
setcookie("status", $_COOKIE['status'], time() - 3600, "/client/");

header('Location: /');
exit();
?>
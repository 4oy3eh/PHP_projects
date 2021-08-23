<?php
setcookie("user", $_COOKIE['user'], time() - 3600, "/staff/");
setcookie("status", $_COOKIE['status'], time() - 3600, "/staff/");

header('Location: /');
exit();
?>
<?php
setcookie("user", $_COOKIE['user'], time() - 3600, "/");
setcookie("status", $_COOKIE['status'], time() - 3600, "/");

header('Location: /');
exit();
?>
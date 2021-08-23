<?php
setcookie("user", "admin@gmail.com", time() + 3600, "/");
setcookie("status", "admin", time() + 3600, "/");
header('Location: ../');
exit();
?>
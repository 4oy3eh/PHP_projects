<?php
setcookie("user", "client@gmail.com", time() + 3600, "/");
setcookie("status", "client", time() + 3600, "/");
header('Location: ../');
exit();
?>
<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">




    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/myModal.css">
    <link rel="stylesheet" href="css/style.css">

<style>

    .btn{

        width: 45%;
        height: 100px;
        margin-left: 10%;
        margin-top: 8px;
        font-size: 35px;
    }

</style>




    <title>181rdb224</title>
</head>
<body>
<?php require "blocks/header.php" ?>
<?php require "blocks/warnings.php" ?>

<div class="d-flex flex-wrap center">

    <a href="/staff/register_staff.php" class="btn btn-primary btn-lg active " role="button" aria-pressed="true" >Staff</a>

    <a href="/client/register_client.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Client</a>


</div>>




<?php require "blocks/footer.php" ?>
</body>
</html>
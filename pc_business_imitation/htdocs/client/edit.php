<!doctype html>
<html lang="en">



<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/bootstrap.css">


    <title>Client Log-in</title>
</head>
<body>


<?php

$email = $_COOKIE['user'];

$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$userexists = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();


?>



<?php require "../blocks/header.php" ?>
<?php require "../blocks/warnings.php" ?>

<div class="container mt-4">
    <div class="col">




            <h1>Rediget datus</h1>
            <form action="editfromclient.php" method="post">
                <fieldset>
                    <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"
                       value="<?php echo $fetchuserexists['name'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="surname">Uzvards</label>
                    <input type="text" class="form-control" name="surname" id="surname"
                           value="<?php echo $fetchuserexists['surname'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="phone">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone"
                       value="<?php echo $fetchuserexists['phone'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="team">Team</label>
                <input type="text" class="form-control" name="team" id="team"
                       value="<?php echo $fetchuserexists['team'] ?>"><br>
                </fieldset>

                <button class="btn btn-success" type="submit">Mainit</button>
            </form>


    </div>
</div>

<?php require "../blocks/footer.php" ?>





</body>
</html>
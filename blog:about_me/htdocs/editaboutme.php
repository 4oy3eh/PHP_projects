
<?php
if($_COOKIE["status"] === 'admin'):
?>

<!doctype html>
<html lang="en">



<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/bootstrap.css">


    <title>Client Log-in</title>
</head>
<body>


<?php

$email = $_COOKIE['user'];

$mysql = new mysqli('localhost', 'root', 'root', 'forphpproject');
$data = $mysql->query("SELECT * FROM `aboutme` WHERE `id` = 1");
$fetchdata = $data->fetch_assoc();


?>



<?php require "blocks/header.php" ?>
<?php require "blocks/warnings.php" ?>

<div class="container mt-4">
    <h1>Rediget datus</h1>
    <div class="row">
    <div class="col">





        <form action="form/doeditaboutme.php" method="post">
            <fieldset>
                <label for="name">Phone</label>
                <input type="text" class="form-control" name="phone" id="phone"
                       value="<?php echo($fetchdata[phone]) ?>"><br>
            </fieldset>
            <fieldset>
                <label for="surname">Skype</label>
                <input type="text" class="form-control" name="skype" id="skype"
                       value="<?php echo($fetchdata[skype])  ?>"><br>
            </fieldset>
            <fieldset>
                <label for="phone">University</label>
                <input type="text" class="form-control" name="uni" id="uni"
                       value="<?php echo($fetchdata[uni]) ?>"><br>
            </fieldset>
            <fieldset>
                <label for="team">Status</label>
                <input type="text" class="form-control" name="status" id="status"
                       value="<?php echo($fetchdata[status]) ?>"><br>
            </fieldset>
            <fieldset>
                <label for="name">School</label>
                <input type="text" class="form-control" name="school" id="school"
                       value="<?php echo($fetchdata[school])  ?>"><br>
            </fieldset>

            <fieldset>
                <label for="surname">Interest</label>
                <input type="text" class="form-control" name="interest" id="interest"
                       value="<?php echo($fetchdata[interest])  ?>"><br>
            </fieldset></div>
            <div class="col">
            <fieldset>
                <label for="phone">Favorite Music</label>
                <input type="text" class="form-control" name="favmusic" id="favmusic"
                       value="<?php echo($fetchdata[favmusic])  ?>"><br>
            </fieldset>
            <fieldset>
                <label for="team">Favorite Films</label>
                <input type="text" class="form-control" name="favmovies" id="favmovies"
                       value="<?php echo($fetchdata[favmovies]) ?>"><br>
            </fieldset>
            <fieldset>
                <label for="name">Favorite Books</label>
                <input type="text" class="form-control" name="favbooks" id="namfavbookse"
                       value="<?php echo($fetchdata[favbooks])  ?>"><br>
            </fieldset>
            <fieldset>
                <label for="surname">Favorite Games</label>
                <input type="text" class="form-control" name="favgames" id="favgames"
                       value="<?php echo($fetchdata[favgames]) ?>"><br>
            </fieldset>
            <fieldset>
                <label for="phone">Favorite Phrases</label>
                <input type="text" class="form-control" name="favphrases" id="favphrases"
                       value="<?php echo($fetchdata[favphrases]); ?>"><br>

            </fieldset>
            <fieldset>
                <label for="team">About me</label>
                <input type="text" class="form-control" name="aboutme" id="aboutme"
                       value="<?php echo($fetchdata[aboutme])  ?>"><br>
            </fieldset>




            </div>

    </div>
    <center><button class="btn btn-primary" type="submit">Mainit</button></center>
    </form>
</div>

<?php require "blocks/footer.php" ?>





</body>
</html>
<?php
else:
header('Location: /');
exit();
endif;
    ?>


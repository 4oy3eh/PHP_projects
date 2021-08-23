

<!doctype html>
<html lang="en">





<?php
if(isset($_COOKIE["user"]) ==! ''): header('Location: /client/profile.php');
?>



<?php else: session_start();?>







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

<?php require "../blocks/header.php" ?>
<?php require "../blocks/warnings.php" ?>

<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Registreties</h1>
            <form action="../form/registrationfromclient.php" method="post">
                <input type="text" class="form-control" name="name" id="name" placeholder ="Ievadiet Vardu"><br>
                <input type="text" class="form-control" name="surname" id="pass" placeholder ="Ievadiet Uzvardu"><br>
                <input type="email" class="form-control" name="email" id="email" placeholder ="Ievadiet Email"><br>
                <input type="text" class="form-control" name="phone" id="phone" placeholder ="Ievadiet Telefonu"><br>



                <button class="btn btn-success" type="submit">Registreties</button>
            </form>
        </div>
        <div class="col">
            <h1>Ieiet</h1>
            <form action="../form/authclient.php" method="post">
                <input type="text" class="form-control" name="email" id="email" placeholder ="Ievadiet Loginu"><br>
                <button class="btn btn-success" type="submit">Ieiet</button>
            </form>
        </div>
    </div>
</div>

<?php require "../blocks/footer.php" ?>




<?php endif;?>



</body>
</html>
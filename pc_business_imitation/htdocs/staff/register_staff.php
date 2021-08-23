<?php
session_start();
?>
<!doctype html>
<html lang="en">



<!doctype html>
<html lang="en">


<?php
print_r($_COOKIE["user"]);
if(isset($_COOKIE["user"]) ==! ''): header('Location: /staff/profile.php');
?>



<?php else: ?>



</body>
</html>





<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/register.css">
    <link rel="stylesheet" href="../css/bootstrap.css">


    <title>Staff Log-in</title>
</head>
<body>

<?php require "../blocks/header.php" ?>
<?php require "../blocks/warnings.php" ?>

<div class="container mt-4">

        <div class="col">
            <h1>Ieiet</h1>
            <form action="../form/authstaff.php" method="post">
                <input type="text" class="form-control" name="email" id="email" placeholder ="Ievadiet Loginu"><br>
                <button class="btn btn-success" type="submit">Ieiet</button>
            </form>
        </div>
</div>

<?php require "../blocks/footer.php" ?>




<?php endif;?>



</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.css">


    <title>Bilesu veikals</title>
</head>
<body>

<?php require "../blocks/header.php" ?>

<h2>Labdien, <?=$_COOKIE['user']?>!</h2>

    <div class="container mt-5">
    <h3>Palidziba</h3>
        <form action="../check.php" method="post">
            <input type="email" name="email" placeholder="Enter Email"
                   class="form-control"><br>
            <textarea name="message" class="form-control"
                      placeholder="Enter message"></textarea><br>

            <button type="submit" name="send" class="btn btn-success">Sutit</button>
        </form>
    </div>
<?php require "../blocks/footer.php" ?>
</body>
</html>
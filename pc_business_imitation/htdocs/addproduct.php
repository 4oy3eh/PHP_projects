<!doctype html>
<html lang="en">





<?php require "blocks/header.php" ?>








<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/bootstrap.css">


    <title>Bilesu veikals</title>
</head>
<body>



<div class="container mt-4">

            <h1>Registreties</h1>
            <form action="addproductindatabase.php" method="post">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ievadiet nosaukumu"><br>
                <input type="text" class="form-control" name="description" id="description" placeholder="Ievadiet aprakstu"><br>
                <input type="date" class="form-control" name="date" id="date" placeholder="Ievadiet datumu" min="2021-01-01" max="2022-12-31"><br>
                <input type="text" class="form-control" name="location" id="location" placeholder="Ievadiet atrašanās vietu"><br>
                <input type="number" class="form-control" name="price" id="price" placeholder="Ievadiet cenu"><br>
                <input type="number" class="form-control" name="count" id="count" placeholder="Ievadiet skaitī"><br>
                <input type="url" class="form-control" name="link" id="link" placeholder="Ievadiet attelas linku"><br>


                <button class="btn btn-success" type="submit">Pievienot</button>
            </form>
        </div>


</div>


<?php require "blocks/footer.php" ?>


</body>
</html>
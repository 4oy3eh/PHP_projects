<!doctype html>
<html lang="en">


<?php
//print_r(xd);

if (isset($_COOKIE["user"]) == !''): header('Location: /');
    ?>


<?php else:
session_start(); ?>


<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>

        .form-control {
            display: block;
            width: 100%;
            max-width: 300px;
        }

        .btn {
            border: 1px solid black;
            width: 100%;
            max-width: 150px;
            font-size: 1.5rem;
            font-size: inherit;
        }

        body {
            margin: 0;
            font-family: var(--bs-font-sans-serif);
            font-size: 1rem;
            font-weight: 800;
            line-height: 1.5;
            color: #212529;
            background-color: #fff;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
        }

        #react-root, article, div, footer, header, main, nav, section {
            position: inherit;
        }

    </style>

    <title>Log-in</title>
</head>
<body>

<?php require "blocks/header.php" ?>
<?php require "blocks/warnings.php" ?>
<link rel="stylesheet" href="/css/register.css">
<link rel="stylesheet" href="/css/bootstrap.css">
<div class="container mt-4">
    <div class="row">
        <div class="col">
            <h1>Registreties</h1>
            <form action="/form/registration.php" method="post">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ievadiet Vardu"><br>
                <input type="text" class="form-control" name="surname" id="pass" placeholder="Ievadiet Uzvardu"><br>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ievadiet Email"><br>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Ievadiet Telefonu"><br>


                <button class="btn btn-success" type="submit">Registreties</button>
            </form>
        </div>
        <div class="col">
            <h1>Ieiet</h1>
            <form action="/form/auth.php" method="post">
                <input type="text" class="form-control" name="email" id="email" placeholder="Ievadiet Loginu"><br>
                <button class="btn btn-success" type="submit">Ieiet</button>
            </form>
            <form action="/form/authclient.php" method="post">
                <br>
                <button class="btn btn-secondary" type="submit">Ieiet ka lietotajs</button>
            </form>
            <form action="/form/authadmin.php" method="post">
                <br>
                <button class="btn btn-info" type="submit">Ieiet ka admins</button>
            </form>

        </div>
    </div>
</div>

<?php require "blocks/footer.php" ?>




<?php endif; ?>


</body>
</html>
<!doctype html>
<html lang="en">


<?php
if(isset($_COOKIE["user"]) ==! ''):
session_start();
$email = $_COOKIE['user'];

$mysql = new mysqli('localhost', 'root', 'root', 'adas');
$userexists = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
$fetchuserexists = $userexists->fetch_assoc();


?>



<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Bilesu veikals</title>
</head>
<body>

<?php require "../blocks/header.php" ?>
<?php require "../blocks/warnings.php" ?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<style>

    .form-control {
        display: block;
        width: 100%;
        max-width: 300px;
    }

    .btn {
        border: 1px solid black;
        width: 100%;
        max-width: 280px;
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



</style>


<div class="d-flex flex-wrap">
    <div class="container mt-4">
        <div class="row">
            <div class="col">

<!--DATI-->
            <h1>Dati</h1>
            <form action="editfromclient.php" method="post">
                <fieldset>
                    <label for="name">Name</label>
                    <input type="text" class="form-control" readonly
                           value="<?php echo $fetchuserexists['name'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="name">Surname</label>
                    <input type="text" class="form-control" readonly
                           value="<?php echo $fetchuserexists['surname'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="name">Email</label>
                    <input type="text" class="form-control" readonly
                           value="<?php echo $fetchuserexists['email'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="name">Phone</label>
                    <input type="text" class="form-control" readonly
                           value="<?php echo $fetchuserexists['phone'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="name">Team</label>
                    <input type="text" class="form-control" readonly
                           value="<?php echo $fetchuserexists['team'] ?>"><br>
                </fieldset>
                <fieldset>
                    <label for="name">Rank</label>
                    <input type="text" class="form-control" readonly
                           value="<?php echo $fetchuserexists['rank'] ?>"><br>
                </fieldset>
                <a id="profile_edit_act" href="/client/edit.php" class="btn btn-primary btn-lg btn-block">Rediget datus</a>

            </form>

            </div>


            <?php
            $email = $_COOKIE['user'];

            $getid = $mysql->query("SELECT * FROM `client` WHERE `email` = '$email'");
            $fetchgetid = $getid->fetch_assoc();
            $id = $fetchgetid['id'];
            $pcavailable = $mysql->query("SELECT COUNT(*) as qwe FROM `pc` WHERE `client_id` = '$id'");
            $fetchpcavailable  = $pcavailable ->fetch_assoc();

            $pctable = $mysql->query("SELECT * FROM `pc` WHERE `client_id` = '$id'");
            $fetchpctable  = $pctable ->fetch_assoc();


            if($fetchpcavailable[qwe]==0):
                ?>
            <div class="col">






<!--order pc-->

                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Order PC</button>

                <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content center">
                            <div style="width=300px" class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Choose PC type.</h4>
                            </div>
                            <div class="modal-body">
                                <form action="orderpc.php" method="post">
                                    <button class="btn btn-success" type="submit" name="name" id="name"
                                            value="gaming">Gaming PC</button><br><br>
                                    <button class="btn btn-success" type="submit" name="name" id="name"
                                            value="office">Office PC</button><br><br>
                                    <button class="btn btn-success" type="submit" name="name" id="name"
                                            value="rendering">Rendering PC</button><br><br>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>

        </div>


<?php else:?>

<!--            show pc card-->
            <div class="col">

                <div class="d-flex flex-wrap">
                    <div class="d-flex align-content-around flex-wrap">
                        <div class="card" style="width: 250px;">
                            <div class="card-body">

                                    <div class="shadow-lg p-3 mb-5 bg-white rounded">
                                        <img class="card-img-top" src="<?


                                        if($fetchpctable[type] == "gaming"):
                                        $kek = 1;
                                        elseif($fetchpctable[type] == "office"):
                                        $kek = 3;
                                        elseif($fetchpctable[type] == "rendering"):
                                        $kek = 2;
                                        endif;
                                        $getpicture = $mysql->query("SELECT * FROM `dators_image` WHERE `id` = '$kek'");
                                        $fetchgetpicture = $getpicture->fetch_assoc();


                                        echo $fetchgetpicture[link];?>" alt="Card image cap">
                                        <div class="card-body">
                                            <p class="card-text"><?echo $fetchpctable[type];?></p>
                                            <p class="card-text"><?echo $fetchpctable[builddate];?></p>
                                            <p class="card-text">Status <?echo $fetchpctable[status];?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <a type="button" href="/client/profile.php" class="btn btn-sm btn-info">Izmantot</a>
                                                    <?php if($fetchpctable[status]==0):?>

                                                        <a type="button" href="/client/pcio.php" class="btn btn-sm btn-primary">Ieslegt</a>

                                                    <?php elseif($fetchpctable[status]==1): ?>
                                                        <a type="button" href="/client/pcio.php" class="btn btn-sm btn-secondary">Izslegt</a>
                                                    <?php endif; ?>

                                                    <a type="button" href="/client/pcgiveback.php" class="btn btn-sm btn-danger">Nodod atpakal</a>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            <?php



        endif;
        ?>



                <div class="col">





<!--3 fignja-->
<h2>Labdien, <?=$_COOKIE['user']?>!</h2>
                    <a id="profile_edit_act" href="/client/exitclient.php" class="btn btn-primary btn-lg btn-block">Delete cookie</a>

                </div>
        </div>
    </div>
</div>






<?php require "../blocks/footer.php" ;
$mysql->close();
?>

<?php else: header('Location: /client/register_client.php');?>

<?php endif;?>




</body>
</html>
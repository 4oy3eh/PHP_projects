<?php
session_start();
?>
<!doctype html>
<html lang="en">


<?php
//print_r($_COOKIE["status"]);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap2.css">
    <link rel="stylesheet" href="../css/style.css">

    <title>Bilesu veikals</title>
</head>
<body>

<?php require "../blocks/header.php" ?>
<?php require "../blocks/warnings.php" ?>





<style>

    .form-control {
        display: block;
        width: 100%;
        max-width: 300px;
    }

    .btn {
        border: 1px solid black;
        width: 100%;
        max-width: 300px;
        font-size: 1.5rem;
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

            <div class="col">

                <!--3 fignja-->
                <h2>Labdien, <?=$_COOKIE['user']?>!</h2>
                <a id="profile_edit_act" href="/staff/exitstaff.php" class="btn btn-primary btn-lg btn-block">Delete cookie</a>


        </div>
    </div>
</div>


</body>


<body>


<div class="d-flex flex-wrap">
    <div class="container mt-4">
        <div class="row">
        <div class="col">
<?php
if($_COOKIE["status"] === 'boss'):

?>
    <h1>Secretary list</h1>



                <!--<div class="d-flex align-content-around flex-wrap">-->
    <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php

                $mysql = new mysqli('localhost', 'root', 'root', 'adas');
                $count = $mysql->query("SELECT COUNT(*) as qwe FROM `secretary`");
                $counter = $count->fetch_assoc();


                for($i = 1; $i <=$counter[qwe]; $i++):
                $result = $mysql->query("SELECT * FROM `secretary` where id = $i");
                $table = $result->fetch_assoc();


                ?>


                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <p class="card-text"><? echo $table[name]; ?></p>
                                <p class="card-text"><? echo $table[surname]; ?></p>
                                <p class="card-text"><? echo $table[email]; ?></p>
                                <p class="card-text"><? echo $table[phone]; ?></p>
                                <p class="card-text"><? echo $table[salary]; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form action="/staff/fire.php" method="post">
                                            <label for="fname">Fire:</label><br>
                                            <input type="submit" name="id" value="<?php echo $i?>"/>

                                        </form>
                                        <form action="/staff/encourage.php" method="post">
                                            <label for="fname">Motivate with more salary:</label><br>
                                            <input type="submit" name="encourage" value="<?php echo $i?>"/>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php endfor; ?>
                    </div>
                </div>
</div>




            <?php
elseif($_COOKIE["status"] === 'secretary'):
?>
<h1>Worker list</h1>



    <!--<div class="d-flex align-content-around flex-wrap">-->
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php

                $mysql = new mysqli('localhost', 'root', 'root', 'adas');
                $count = $mysql->query("SELECT COUNT(*) as qwe FROM `worker`");
                $counter = $count->fetch_assoc();


                for($i = 1; $i <=$counter[qwe]; $i++):
                    $result = $mysql->query("SELECT * FROM `worker` where id = $i");
                    $table = $result->fetch_assoc();


                    ?>


                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <p class="card-text"><? echo $table[name]; ?></p>
                                <p class="card-text"><? echo $table[surname]; ?></p>
                                <p class="card-text"><? echo $table[email]; ?></p>
                                <p class="card-text"><? echo $table[phone]; ?></p>
                                <p class="card-text"><? echo $table[salary]; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form action="/staff/fire.php" method="post">
                                            <label for="fname">Fire:</label><br>
                                            <input type="submit" name="id" value="<?php echo $i?>"/>

                                        </form>
                                        <form action="/staff/encourage.php" method="post">
                                            <label for="fname">Motivate with more salary:</label><br>
                                            <input type="submit" name="encourage" value="<?php echo $i?>"/>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php endfor; ?>
            </div>
        </div>
    </div>







<?php

    elseif($_COOKIE["status"] === 'worker'):


    ?>


    <h1>Worker</h1>



    <!--<div class="d-flex align-content-around flex-wrap">-->
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php

             $status =   $_COOKIE["user"];


                    $result = $mysql->query("SELECT * FROM `worker` where `email` = '$status'");
                    $table = $result->fetch_assoc();


                $countstatus = $mysql->query("SELECT count(*) as qwe FROM `client` where `worker_id` = '$table[id]'");
                $fetchcountstatus = $countstatus->fetch_assoc();

                $countingstars = $fetchcountstatus[qwe];



                $mysql->query("UPDATE `worker` SET `status` = '$countingstars' WHERE `email` = '$email'");
                $result = $mysql->query("SELECT * FROM `worker` where `email` = '$status'");
                $table = $result->fetch_assoc();



                    ?>


            <div class="col">
                <div class="card shadow-sm">

                    <div class="card-body">
                        <p class="card-text">Name: <? echo $table[name]; ?></p>
                        <p class="card-text">Surname"<? echo $table[surname]; ?></p>
                        <p class="card-text">Email: <? echo $table[email]; ?></p>
                        <p class="card-text">Phone: <? echo $table[phone]; ?></p>
                        <p class="card-text">Salary: $<? echo $table[salary]; ?></p>
                        <p class="card-text">Apkopes skaits: <? echo $table[status]; ?></p>

                        <div class="d-flex justify-content-between align-items-center">


                        </div>
                    </div>
                </div>
            </div>
                <div class="col">

                    <?php
                    if($table[status]==0):

                    ?>
                    <div class="btn-group">

                        <form action="/staff/profile.php" method="post">
                            <button class="btn btn-success" type="submit" style="width: 500px" >Izlikties, ka strādā</button>
                        </form>
                        <form action="/staff/findclient.php" method="post">

                            <button type="submit" class="btn btn-info" style="width: 500px" data-toggle="modal"
                                    data-target="#myModal">Atrast klientu
                            </button>

                        </form>

                        <?php elseif($table[status]<2):?>
                        <form action="/staff/findclient.php" method="post">

                            <button  type="submit" class="btn btn-info" style="width: 500px" data-toggle="modal" data-target="#myModal">Atrast klientu</button>

                    </form>


                </div>
            <?php else:?>
                Working...
            <?php endif;?>







                </div>



        </div>
        </div>
    </div>



<?php
elseif($_COOKIE["status"] === 'super_admin'):

    ?>


    <h1>Admin list</h1>



    <!--<div class="d-flex align-content-around flex-wrap">-->
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php

                $mysql = new mysqli('localhost', 'root', 'root', 'adas');
                $count = $mysql->query("SELECT COUNT(*) as qwe FROM `admin`");
                $counter = $count->fetch_assoc();


                for($i = 1; $i <=$counter[qwe]; $i++):
                    $result = $mysql->query("SELECT * FROM `admin` where id = $i");
                    $table = $result->fetch_assoc();


                    ?>


                    <div class="col">
                        <div class="card shadow-sm">

                            <div class="card-body">
                                <p class="card-text"><? echo $table[name]; ?></p>
                                <p class="card-text"><? echo $table[surname]; ?></p>
                                <p class="card-text"><? echo $table[email]; ?></p>
                                <p class="card-text"><? echo $table[phone]; ?></p>
                                <p class="card-text"><? echo $table[salary]; ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form action="/staff/fire.php" method="post">
                                            <label for="fname">Fire:</label><br>
                                            <input type="submit" name="id" value="<?php echo $i?>"/>

                                        </form>
                                        <form action="/staff/encourage.php" method="post">
                                            <label for="fname">Motivate with more salary:</label><br>
                                            <input type="submit" name="encourage" value="<?php echo $i?>"/>

                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                <?php endfor; ?>
            </div>
        </div>
    </div>



<?php
elseif($_COOKIE["status"] === 'admin'):
    ?>



    <h1>Admin</h1>



    <!--<div class="d-flex align-content-around flex-wrap">-->
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php

                $status =   $_COOKIE["user"];


                $result = $mysql->query("SELECT * FROM `admin` where `email` = '$status'");
                $table = $result->fetch_assoc();



                ?>


                <div class="col">
                    <div class="card shadow-sm">

                        <div class="card-body">
                            <p class="card-text">Name: <? echo $table[name]; ?></p>
                            <p class="card-text">Surname"<? echo $table[surname]; ?></p>
                            <p class="card-text">Email: <? echo $table[email]; ?></p>
                            <p class="card-text">Phone: <? echo $table[phone]; ?></p>
                            <p class="card-text">Salary: $<? echo $table[salary]; ?></p>
                            <p class="card-text">Apkopes skaits: <? echo $table[status]; ?></p>

                            <div class="d-flex justify-content-between align-items-center">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                        <div class="btn-group">

                        <form action="/staff/profile.php" method="post">
                            <button class="btn btn-success" type="submit" style="width: 500px" >Izlikties, ka strādā</button>
                        </form>
                        <form action="/staff/findpc.php" method="post">

                            <button type="submit" class="btn btn-info" style="width: 500px" data-toggle="modal"
                                    data-target="#myModal">Apiet datorus
                            </button>

                        </form>


                        </div>

                </div>

            </div>
            <?php if($_SESSION["pcidforadmin"]==!""):


                $pcid = $_SESSION["pcidforadmin"];
                $pctable = $mysql->query("SELECT * FROM `pc` WHERE `id` = '$pcid'");
                $fetchpctable  = $pctable ->fetch_assoc();




                ?>
                <div class="col">

                    <div class="d-flex flex-wrap">
                        <div class="d-flex align-content-around flex-wrap">
                            <div class="card" >

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
                                            <p class="card-text"><?echo $fetchpctable[wrntydate];?></p>

                                            <p class="card-text">Status <?echo $fetchpctable[status];?></p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="btn-group">
                                                    <?php
                                                    $_SESSION["pdid_forio"] =  $fetchpctable[id];

                                                    if($fetchpctable[status]==0):


                                                        ?>

                                                        <a type="button" href="/staff/pcio.php" class="btn btn-sm btn-success" >Ieslegt</a>

                                                    <?php elseif($fetchpctable[status]==1): ?>
                                                        <a type="button" href="/staff/pcio.php" class="btn btn-sm btn-danger" >Izslegt</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                    </div>
            </div>

            <?php endif;?>


        </div>
    </div>








<?php
      endif;
            ?>

        </div>


        </div>
    </div>
</div>





<?php require "../blocks/footer.php" ;
$mysql->close();
?>

<?php else: header('Location: /staff/register_staff.php');?>

<?php endif;?>




</body>
</html>
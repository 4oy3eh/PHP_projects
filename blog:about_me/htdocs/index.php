<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="css/instagramHorror.css">






    <title>Galvenā</title>
</head>
<body>

<?php require "blocks/header.php" ?>
<?php require "blocks/warnings.php" ?>

<body class="" style="">

<div id="react-root">

    <form enctype="multipart/form-data" method="POST" role="presentation"><input accept="image/jpeg" class="tb_sK"
                                                                                 type="file"></form>
    <section class="_9eogI E3X2T">
        <div>

            <?php
            $mysql = new mysqli('localhost','root','root','forphpproject');
            $getmainpicture = $mysql->query("SELECT * FROM `pictures for index` WHERE `MAIN?` = 1");
            $fetchmain = $getmainpicture->fetch_assoc();

            ?>
        </div>

        <main class="SCxLW  o64aR " role="main">
            <div class="v9tJq AAaSh VfzDr">
                <header class=" HVbuG">
                    <div class="XjzKX">
                        <div class="_4dMfM">
                            <div class="M-jxE">

                                <img class="FFVAD" decoding="auto" style="object-fit: cover;"
                                     src="<?php echo($fetchmain[link]);?>">



                            </div>

                        </div>

                        <?php

                        //                        if(1==1): //fortest
                        if($_COOKIE["status"] === 'admin'): //check if admin
                            ?>
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

                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Settings</button>

                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content center">
                                        <div style="width=300px" class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Settings.</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="/form/adminsettings.php" method="post">
                                                <?php
                                                $picturerownumber = $mysql->query("SELECT `counter` FROM `index_picture_counter` WHERE `id` = 1");
                                                $fetchpicturerownumber = $picturerownumber->fetch_assoc();


                                                ?>

                                                <input type="number" min="1" max="4" class="form-control" name="imagesperrow" id="imagesperrow" value = "<?php echo($fetchpicturerownumber[counter]);?>"><br>
                                                <button class="btn btn-success" type="submit">Change images per row</button><br><br>
                                            </form>
                                            <form action="/form/addimage.php" method="post">
                                                <input type="text" class="form-control" name="addimage" id="addimage" placeholder = "Link"><br>
                                                <button class="btn btn-success" type="submit">Add image</button><br>


                                                <br>
                                                <br>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>



                        <?php
                        else:
                        endif;
                        ?>


                    </div>
                    <section class="zwlfE">
                        <div class="nZSzR"><h2 class="_7UhW9       fKFbl yUEEX   KV-D4              fDxYl     ">
                                Nikita Kozlovskis</h2>

                        </div>

                    </section>
                </header>

                <div class=" _2z6nI">
                    <article class="ySN3v">
                        <div>
                            <div style="flex-direction: column; padding-bottom: 0px; padding-top: 0px;">
                                <!--                                start for-->
                                <?php

                                $getnumber = $mysql->query("SELECT `counter` FROM `index_picture_counter` WHERE `id` = 1");
                                $fetchnumber = $getnumber->fetch_assoc();

                                $getimage = $mysql->query("SELECT * FROM `pictures for index`");

                                //print_r($fetchimage[link]);

                                $countimages = $mysql->query("SELECT count(*) as qwe FROM `pictures for index`");
                                $fetchimages = $countimages->fetch_assoc();

                                for($k = 1; $k <=$fetchimages[qwe]/$fetchnumber[counter]+1; $k++):
                                    ?>
                                    <div class="Nnq7C weEfm">
                                        <?php

                                        for($i = 1; $i <=$fetchnumber[counter]; $i++):
                                            $fetchimage = $getimage->fetch_assoc();
                                            if($fetchimage[link]==NULL): ?>
                                                <div class="_bz0w"></div>
                                            <?php else:
                                                ?>

                                                <div class="v1Nh3 kIKUG  _bz0w">
                                                    <div class="eLAPa">
                                                        <div class="KL4Bh">
                                                            <img class="FFVAD" decoding="auto" style="object-fit: cover;"
                                                                 src="<?php echo($fetchimage[link]);?>">
                                                        </div>
                                                        <div class="_9AhH0"></div>
                                                    </div>
                                                    <?php if($_COOKIE["status"] === 'admin'): //check if admin ?>

                                                        <form action="/form/adminsettings.php" method="post">
                                                            <label for="fname">Setprofile:</label><br>
                                                            <input type="submit" name="setprofile" value="<?php echo ($k-1)*$fetchnumber[counter]+$i?>"/>
                                                        </form>
                                                    <?php endif;

                                                    ?>

                                                </div>
                                            <?php
                                            endif;
                                        endfor;
                                        ?>


                                    </div>
                                <?php endfor;
                                ?>

                            </div>
                        </div>
                    </article>
                </div>


            </div>
        </main>



    </section>
</div>


<?php //require "blocks/footer.php" ?>

</body>
</html>
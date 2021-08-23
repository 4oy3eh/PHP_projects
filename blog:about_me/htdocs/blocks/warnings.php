<?php
//print_r($_SESSION);




if($_SESSION["warning"] ==! "success"):
//print_r(warming off);
else:
   // print_r(warning on);
?>



<footer class="container pt-4 my-md-5 pt-md-5 border-top">




<!--    <h2>Labdien, --><?//=$_COOKIE['user']?><!--!</h2>-->


    <?php

    if($_SESSION["warning"] === "success"):
        ?>
    <div class="alert alert-success">
        <strong>Success!</strong><?php
        echo " ". $_SESSION["dialog"] . " ";
        ?>
    </div>
    </div>

    <?php

    elseif($_SESSION["warning"] === "warning"): ?>

        <div class="alert alert-warning">
            <strong>Warning!</strong> <?php
            echo " ". $_SESSION["dialog"] . " ";
    ?>
        </div>

    <?php $_SESSION["warning"] = "";

    endif;

    $_SESSION["dialog"] = "";
    $_SESSION["warning"] = "";




    ?>

</footer>
<?php endif;?>
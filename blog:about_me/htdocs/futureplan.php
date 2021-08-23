<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Futureplan</title>
</head>
<body>

<link rel="stylesheet" href="/css/bootstrap.css">


<?php if($_COOKIE["status"] ==! ''):
?>




<?php require "blocks/header.php" ?>
<?php require "blocks/warnings.php" ?>


    <img  style="height:800px" src="https://sun9-10.userapi.com/impf/ydNSNp3PAga5IoSoC7GALTfWMMdfdQQYzbrWww/UOHOGQb5Eyw.jpg?size=1694x2094&quality=96&proxy=1&sign=2353b05027b27369958199e76afa62d4&type=album" >


<script>
    function myFunction() {
        var x = document.getElementById("image");
        if (x.style.height === "-webkit-fill-available") {
            x.style.height = "auto";
        } else {
            x.style.height = "-webkit-fill-available";
        }
    }
</script>

<?php //require "blocks/footer.php"
    else:
        header('Location: register.php');
        exit();
endif;?>

</body>
</html>
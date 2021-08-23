<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Free time</title>
    <!-- Bootstrap CSS -->

</head>
<body>


<link rel="stylesheet" href="/css/bootstrap.css">

<?php require "blocks/header.php" ?>
<?php require "blocks/warnings.php" ?>
<button class="btn btn-success" style="width: 300px" onclick="myFunction()">Diving</button>
<button class="btn btn-success" style="width: 300px" onclick="myFunction2()">CSGO</button>

<br><br>
<center>

    <div style="display: none" id="csgo">

        <iframe src="https://vk.com/video_ext.php?oid=137655984&id=456239154&hash=ce1f0ff2dc28615e&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://vk.com/video_ext.php?oid=137655984&id=456239156&hash=a4ad9e4e0a5b354e&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
    </div>



    <div style="display: none" id="Diving">
        <iframe src="https://vk.com/video_ext.php?oid=137655984&id=171151246&hash=190943b8b173f570&hd=2" width="853" height="480" frameborder="0" allowfullscreen></iframe>
        <iframe src="https://vk.com/video_ext.php?oid=137655984&id=456239049&hash=f3369b8d3d8ff70d&hd=2" width="480" height="800" frameborder="0" allowfullscreen></iframe>
    </div>
</center>






<script>
    function myFunction() {
        var x = document.getElementById("Diving");
        var y = document.getElementById("csgo");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }

    function myFunction2() {
        var y = document.getElementById("Diving");
        var x = document.getElementById("csgo");
        if (x.style.display === "none") {
            x.style.display = "block";
            y.style.display = "none";
        } else {
            x.style.display = "none";
        }
    }

</script>





<?php //require "blocks/footer.php" ?>
</body>
</html>
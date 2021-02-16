<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/header.css" rel="stylesheet">
    <link href="../css/nav.css" rel="stylesheet">
    <link href="../css/enclos.css" rel="stylesheet">

    <title>Autruche</title>
</head>
<body>

<?php include("../components/header.php") ?>
    <?php include("../components/nav.php") ?>


    <section id="autruche" class="wrapper">
        <h1>Enclos</h1>
        
        <canvas id="myCanvas" width="500" height="500"></canvas>

        <script>
            function getRandomInt(max) {
            return Math.floor(Math.random() * Math.floor(max));
            }
            var canvas = document.getElementById("myCanvas");
            var ctx = canvas.getContext("2d");
            
            for (let index = 0; index < 20; index++) {
                ctx.beginPath();
                ctx.arc(getRandomInt(500), getRandomInt(500), 10, 0, Math.PI*2, false);
                ctx.fillStyle = "green";
                ctx.fill();
                ctx.closePath();
            }
        </script>
        
    </section>
</body>
</html>
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
    <link href="../css/autruche.css" rel="stylesheet">
    <link href="../css/silo.css" rel="stylesheet">

    <title>Autruche</title>
</head>
<body>

<?php include("../components/header.php") ?>
    <?php include("../components/nav.php") ?>


    <section id="pSilo" class="wrapper">
        <h1 style="padding: 20px 0;">Silo à grain</h1>

        <div id="silo" class="flex-l">
            <div id="niveau" class="flex-c-c">
                <div id="nivSil" class="flex-c-b">
                    <div id="niv" class="flex-c-c">
                        <h4>70%</h4>
                    </div>
                </div>
            </div>

            <div class="flex-c-sa" style="padding-left: 40px;">
                <h4>Humidité : 10%</h4>
                <h4>Type de grain : blé</h4>
                <h4>Dernière commande : 24/03/2021</h4>
                <h4>Prochaine commande (estimation): 20/04/2021</h4>

                <div id="commande">
                    <h3>Commande de grain</h3>
                    <div class="flex-l-sa-c">
                        <button>Commander</button>
                        <h4>34% de grain.</h4>
                    </div>
                    
                    <p>Étant donné que les commandes mettent 3 jours a arriver la quantité et calculé automatique à partir de la consommation des autruches.</p>
                </div>
            </div>

            
        </div>
    </section>
</body>
</html>
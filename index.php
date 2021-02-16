<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- JQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/nav.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/silo.css" rel="stylesheet">
    <link href="css/autruche.css" rel="stylesheet">
    <link href="css/weather.css" rel="stylesheet">
    <link href="css/notif.css" rel="stylesheet">
    <link href="css/enclos.css" rel="stylesheet">

    <title>OstrichFarm 2.0</title>
</head>
<body>
    
    <?php include("components/header.php") ?>
    <?php include("components/nav.php") ?>
    

    <section id="dashboard" class="flex-l wrapper">

        <div>
            <div class="bloc flex-l-sb" id="weather">
            <!-- f53d2da41eb7d82c1f9e62df2f11d210 -->
                
                <div>
                    <h2>Météo</h2>
                    <h4 id="weathCiel"></h4>
                    <h4>Temp : <span id="weathTemp"></span>°C</h4>
                    <h4>Vent : <span id="weathVent"></span> km/h</h4>
                </div>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT17yBmJ25sGYXA1-_UfvFigl4eMJFvWpjRBw&usqp=CAU">

                
            </div>

            <div class="bloc" id="cptAnnuel">
                <h2>Compteur Annuel</h2>
                <h4>Oeufs : 36</h4>
                <h4>Nouvelles Autruches : 4</h4>
                <h4>Mort Autruches : 4</h4>
            </div>

            <div class="bloc" id="notif">
                <h1>Notifications</h1>
                <div class="newNotif">
                    <h3>10h22 - Évasion</h3>
                    <p>L'autruche n°8 se fait la malle.</p>
                </div>
                <div class="newNotif">
                    <h3>15h32 - Ponte</h3>
                    <p>L'autruche n°12 devient maman.</p>
                </div>
                <div class="newNotif">
                    <h3>17h43 - Malade</h3>
                    <p>L'autruche n°15 à un problème.</p>
                </div>
                <div class="newNotif">
                    <h3>18h30 - Ponte</h3>
                    <p>L'autruche n°2 à pondue.</p>
                </div>
                <div class="newNotif">
                    <h3>20h27 - Décés</h3>
                    <p>RIP autruche n°6.</p>
                </div>
            </div>
        </div>

        

        <div class="bloc" id="autruche">
            <h2>Autruches</h2>

            <h3>Santé globale des autruches</h3>
            <div class="jauge">
                <h5 class="nvx flex-c-c" style="width: 90%;">90%</h5>
            </div>

            <h3>Nombre d'autruches : 20</h3>

            <h3>Oeufs ponduent aujourd'hui : 5</h3>

            <h3>Localisation Autruches :</h3>
            


            <div class="flex-c-b" id="carte">
                <table>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>🔺</td>
                        <td>🔺🔺🔺</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>🔺</td>
                        <td>🔺🔺</td>
                        <td>🔺</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>🔺🔺</td>
                        <td></td>
                        <td>🔺</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>🔺</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
                
            </div>
            <h4>Lieu : Enclos</h4>
        </div>

        
        <div>
            <div class="bloc" id="enclos">
                <h2>Enclôs</h2>

                <div class="flex-l" id="ouvFer">
                    <div style="width: 50%; background-color: green; padding: 2px 0;">OUVERT</div>
                    <div style="width: 50%; background-color: rgba(255, 0, 0, 0.521); padding: 2px 0;">FERMÉ</div>
                </div>
                <h3>Niveau Eau</h3>
                <div class="jauge">
                    <h5 class="nvx flex-c-c" style="width: 25%;">25%</h5>
                </div>

                <h3>Nourriture</h3>
                <div class="jauge">
                    <h5 class="nvx flex-c-c" style="width: 30%;">30%</h5>
                </div>

                <h3>Saleté</h3>
                <div class="jauge">
                    <h5 class="nvx flex-c-c" style="width: 60%;">70%</h5>
                </div>

                <h3>Quota </h3>
                <div class="jauge">
                    <h5 class="nvx flex-c-c" style="width: 90%;">90%</h5>
                </div>

            </div>

            <div class="bloc" id="silo">
                <h2>Silo à grain</h2>

                <div id="niveau" class="flex-c-c">
                    <div id="nivSil" class="flex-c-b">
                        <div id="niv" class="flex-c-c">
                            <h4>70%</h4>
                        </div>
                    </div>
                </div>

                <h4>Humidité : 10%</h4>
            </div>
        </div>
    </section>

    <script>
        $.get('https://api.openweathermap.org/data/2.5/weather?q=paris&appid=f53d2da41eb7d82c1f9e62df2f11d210',(result) => {
            console.log(result.weather[0].main)
            $('#weathCiel').append(result.weather[0].main)
            $('#weathTemp').append((result.main.temp-273).toFixed(1))
            $('#weathVent').append(result.wind.speed)
        });
    </script>

</body>
</html>
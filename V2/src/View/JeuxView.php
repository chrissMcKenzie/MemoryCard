<?php session_start();
include_once './../Model/DatabaseModel.php';
//include_once './../Model/PatientModel.php';
//require_once './template/TemplateView.php';

if(!empty($_GET)){
    $Temps = isset($_GET["Temps"]); var_dump($Temps);
    $Niveau = isset($_GET["Niveau"]); var_dump($Niveau);
    $Coups = isset($_GET["Score"]); var_dump($Coups);

    $PDO = DatabaseModel::connect();
    $SQL = "INSERT INTO Score(temps, niveau, nb_coup, id_patient) VALUES(?,?,?,?)";
    $REQUÊTE = $PDO->prepare($SQL);
    $REQUÊTE->execute($Temps, $Niveau, $Coups, 1);
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemoryCard</title>
    <!-- <link rel="stylesheet" href="./src/View/pages/css/JeuxView.css"> -->
    <!-- php local server -->
    <link rel="stylesheet" href="./pages/css/JeuxView.css">
    <script src="./pages/js/JeuView.js" defer></script>
</head>



<body>
    <main id="main" class="Main">
        <section>
            <h1>MemoryCard</h1>
            <div>
                <button type="reset" onclick="ReStart()">ReStart</button>
                <button id="Crono" style="font-size: 18px;">0:00</button>
                <button class="Coups" style="font-size: 18px;"><span id="Coups">0</span> Coups</button>
                <ul>
                    <button id="Button4x3" style="color: white;">4x3</button>
                    <button id="Button4x4" style="color: white;">4x4</button>
                    <button id="Button5x4" style="color: white;">5x4</button>
                </ul>
            </div>
        </section>
        <section id="Jeux">
            <div class="Player">
                <button id="WinGame" onclick="Play()" style="color: white;">PLAY</button>
            </div>
            <div id="Filed4x3">
                <ul>
                    <a id="0" onclick="FlipCard4x3(0)">4x3</a>
                    <a id="1" onclick="FlipCard4x3(1)"></a>
                    <a id="2" onclick="FlipCard4x3(2)"></a>
                    <a id="3" onclick="FlipCard4x3(3)"></a>
                </ul>
                <ul>
                    <a id="4" onclick="FlipCard4x3(4)"></a>
                    <a id="5" onclick="FlipCard4x3(5)"></a>
                    <a id="6" onclick="FlipCard4x3(6)"></a>
                    <a id="7" onclick="FlipCard4x3(7)"></a>
                </ul>
                <ul>
                    <a id="8" onclick="FlipCard4x3(8)"></a>
                    <a id="9" onclick="FlipCard4x3(9)"></a>
                    <a id="10" onclick="FlipCard4x3(10)"></a>
                    <a id="11" onclick="FlipCard4x3(11)"></a>
                </ul>
            </div>

            <div id="Filed4x4">
                <div>
                    <a id="12" onclick="FlipCard4x4(12)">4x4</a>
                    <a id="13" onclick="FlipCard4x4(13)"></a>
                    <a id="14" onclick="FlipCard4x4(14)"></a>
                    <a id="15" onclick="FlipCard4x4(15)"></a>
                </div>

                <div>
                    <a id="16" onclick="FlipCard4x4(16)"></a>
                    <a id="17" onclick="FlipCard4x4(17)"></a>
                    <a id="18" onclick="FlipCard4x4(18)"></a>
                    <a id="19" onclick="FlipCard4x4(19)"></a>
                </div>

                <div>
                    <a id="20" onclick="FlipCard4x4(20)"></a>
                    <a id="21" onclick="FlipCard4x4(21)"></a>
                    <a id="22" onclick="FlipCard4x4(22)"></a>
                    <a id="23" onclick="FlipCard4x4(23)"></a>
                </div>

                <div>
                    <a id="24" onclick="FlipCard4x4(24)"></a>
                    <a id="25" onclick="FlipCard4x4(25)"></a>
                    <a id="26" onclick="FlipCard4x4(26)"></a>
                    <a id="27" onclick="FlipCard4x4(27)"></a>
                </div>
            </div>

            <div id="Filed5x4">
                <div>
                    <a id="28" onclick="FlipCard5x4(28)">5x4</a>
                    <a id="29" onclick="FlipCard5x4(29)"></a>
                    <a id="30" onclick="FlipCard5x4(30)"></a>
                    <a id="31" onclick="FlipCard5x4(31)"></a>
                    <a id="32" onclick="FlipCard5x4(32)"></a>
                </div>

                <div>
                    <a id="33" onclick="FlipCard5x4(33)"></a>
                    <a id="34" onclick="FlipCard5x4(34)"></a>
                    <a id="35" onclick="FlipCard5x4(35)"></a>
                    <a id="36" onclick="FlipCard5x4(36)"></a>
                    <a id="37" onclick="FlipCard5x4(37)"></a>
                </div>

                <div>
                    <a id="38" onclick="FlipCard5x4(38)"></a>
                    <a id="39" onclick="FlipCard5x4(39)"></a>
                    <a id="40" onclick="FlipCard5x4(40)"></a>
                    <a id="41" onclick="FlipCard5x4(41)"></a>
                    <a id="42" onclick="FlipCard5x4(42)"></a>
                </div>

                <div>
                    <a id="43" onclick="FlipCard5x4(43)"></a>
                    <a id="44" onclick="FlipCard5x4(44)"></a>
                    <a id="45" onclick="FlipCard5x4(45)"></a>
                    <a id="46" onclick="FlipCard5x4(46)"></a>
                    <a id="47" onclick="FlipCard5x4(47)"></a>
                </div>
            </div>
        </section>

    </main>

    
</body>

</html>
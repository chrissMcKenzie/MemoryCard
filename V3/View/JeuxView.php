<?php session_start();
include_once './../Model/DatabaseModel.php';
include_once './../Model/PatientClass.php';
//require_once './template/TemplateView.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MemoryCard</title>
    <!-- <link rel="stylesheet" href="./MemoryCard.css"> -->
    <style>
        body {
            z-index: 250;
            background-color: #9fa0a4;
            font-family: Arial, Helvetica, sans-serif;
            padding: 0%;
            width: 100%;
            height: 100%;
        }

        header {}

        main {
            z-index: 300;
            margin-top: -2%;
            padding-top: 0%;
        }

        footer {}

        section {
            margin: 10%;
            margin-top: 4%;
            margin-bottom: 0%;
            /* margin-left: 15%; */
            /* width: 50em; */
            width: 80%;
            text-align: center;
        }

        #Jeux {
            margin-top: 1%;
            /* background-color: #150a2783; */
            width: 80%;
        }

        .Player {
            z-index: 100;
            position: absolute;
            margin-top: -1%;
            margin-bottom: 1%;
            margin-left: 180px;
            padding: 280px 260px;
            background-color: #150a2783;
            /* width: 76%; */
            width: 350px;
            height: 135px;
        }

        .Player button {
            background-color: green;
            width: 125px;
            height: 75px;
        }

        @media only screen and (max-width: 600px) {
            #Jeux {
                margin-top: 1%;
                background-color: #150a2783;
                width: 100%;
            }

            .Player {
                z-index: 100;
                position: absolute;
                margin-top: 0%;
                background-color: #150a2783;
                width: 90%;
            }
        }

        /* #Field4x3 {
            display: none;
        } */

        #Field4x3 div {
            margin-top: 1%;
        }

        #Field4x4 {
            display: none;
        }

        #Field5x4 {
            display: none;
        }

        #Crono {
            background-color: #150a27;
            color: white;
        }

        ul {
            width: 100%;
            margin-bottom: 0%;
        }

        img {
            margin: -15% 0% 0% -24%;
            border-radius: 2%;
            width: 159px;
            height: 159px;
        }

        h1 {
            margin-top: -4px;
        }

        /* METHODE 2 */
        a {
            display: inline-block;
            position: relative;

            margin-right: 1px;
            margin-left: 1px;
            margin-top: 1px;
            margin-bottom: 8px;
            padding: 0.75em 1.25em;

            background-repeat: repeat-x;
            background-position: -1px -1px;
            background-size: 110% 110%;
            border: 1px solid rgba(27, 31, 35, 0.2);
            background-color: #eff3f6;
            background-image: linear-gradient(to bottom, #8241f9, #4e277b);

            width: 160px;
            height: 160px;

            font-size: 20px !important;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial,
                sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-weight: 600;
            line-height: 20px;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            user-select: none;
            appearance: none;

            border-radius: 6px;

            text-align: center !important;
            -webkit-text-size-adjust: 100%;
            box-sizing: border-box;
            text-decoration: none;
            border-color: #150a27;
            color: #fff;
        }

        #Button4x3,
        #Button4x4,
        #Button5x4 {
            position: relative;
            z-index: 1;
            display: inline-block;

            width: 25% !important;

            padding: 0.9rem 1.5rem 1.1rem;
            -webkit-text-size-adjust: 100%;

            --color-calendar-graph-day-L1-border: rgba(27, 31, 35, 0.06);
            --color-calendar-graph-day-L2-border: rgba(27, 31, 35, 0.06);
            --color-calendar-graph-day-L3-border: rgba(27, 31, 35, 0.06);
            --color-calendar-graph-day-L4-border: rgba(27, 31, 35, 0.06);
            --color-fg-button-default: #1b1f23;
            --shadow-button-border-mktg: rgb(0 0 0 / 15%) 0 0 0 1px inset;
            --shadow-button-focus-mktg: rgb(0 0 0 / 15%) 0 0 0 4px;
            --shadow-button-hover-mktg: 0 3px 2px rgba(0, 0, 0, 0.07),
                0 7px 5px rgba(0, 0, 0, 0.04), 0 12px 10px rgba(0, 0, 0, 0.03),
                0 22px 18px rgba(0, 0, 0, 0.03), 0 42px 33px rgba(0, 0, 0, 0.02),
                0 100px 80px rgba(0, 0, 0, 0.02);
            --shadow-button-hover-muted-mktg: rgb(0 0 0 / 70%) 0 0 0 2px inset;
            --border-width: 1px;
            --border-style: solid;
            --font-size-small: 12px;
            --font-weight-semibold: 500;
            --size-2: 20px;
            word-wrap: break-word;
            box-sizing: border-box;
            font: inherit;
            margin: 0;
            overflow: visible;
            text-transform: none;
            font-family: inherit;
            cursor: pointer;

            appearance: none !important;

            font-size: 1rem;
            font-weight: 600;
            line-height: 1;
            white-space: nowrap;
            vertical-align: middle;
            user-select: none;
            border: 0;
            border-radius: 0.375rem;
            color: var(--color-canvas-default);
            text-align: center;
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.15) 0%,
                    rgba(255, 255, 255, 0) 100%),
                var(--color-fg-button-default) !important;
            transition: box-shadow 0.2s;
        }

        button {
            background-color: red;
            width: 100px;
            height: 50px;
        }
    </style>
</head>

<body>
    <main id="main" class="Main">
        <section>
            <h1>MemoryCard</h1>
            <div>
                <button type="reset" onclick="ReStart()">ReStart</button>
                <button id="Crono" style="font-size: 18px;">0:00</button>
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

    <!-- <script src="./MemoryCard.jsx"></script> -->

    <script type="text/javascript">
        const imgStock = [
            "Chat0.jpeg", "Chat1.jpeg", "Cheval0.jpeg", "Cheval1.jpeg",
            "Chien0.jpeg", "Chien1.jpeg", "Elephant0.jpeg", "Elephant1.jpeg",
            "Panda0.jpeg", "Panda1.jpeg", "Zebre0.jpeg", "Zebre1.jpeg",
            "Kangourou0.jpeg", "Kangourou1.jpeg", "Loup0.jpeg", "Loup1.jpeg",
            "Renard0.jpeg", "Renard1.jpeg"
        ];

        var Filed4x3 = document.getElementById("Filed4x3")
        var Filed4x4 = document.getElementById("Filed4x4")
        var Filed5x4 = document.getElementById("Filed5x4")

        function ReStart() {
            document.location.reload()
        }

        (function Toggled_Filed() {
            var Button4x3 = document.getElementById("Button4x3")
            var Button4x4 = document.getElementById("Button4x4")
            var Button5x4 = document.getElementById("Button5x4")
            Button4x3.onclick = () => {
                if (Filed4x3.style.display == "none") {
                    Filed4x3.style.display = "block"
                    Filed4x4.style.display = "none"
                    Filed5x4.style.display = "none"
                } else {
                    Filed4x3.style.display = "none"
                }
            }
            Filed4x4.style.display = "none"
            Button4x4.onclick = () => {
                if (Filed4x4.style.display == "none") {
                    Filed4x4.style.display = "block"
                    Filed4x4.style.marginLeft = "80px"
                    Filed4x3.style.display = "none"
                    Filed5x4.style.display = "none"
                } else {
                    Filed4x4.style.display = "none"
                }
            }
            Filed5x4.style.display = "none"
            Button5x4.onclick = () => {
                if (Filed5x4.style.display == "none") {
                    Filed5x4.style.display = "block"
                    Filed5x4.style.marginLeft = "80px"
                    Filed4x3.style.display = "none"
                    Filed4x4.style.display = "none"
                } else {
                    Filed5x4.style.display = "none"
                }
            }
        })()

        var buttonPlayer = document.querySelector('.Player')
        var Temps = document.querySelector('#Crono')
        var MyInterval

        function Play() {

            buttonPlayer.onclick = () => {
                buttonPlayer.style.display = "none";
                var minutes = 0
                var secondes = 0;
                var Chrono = () => {
                    // minutes = minutes < 10 ? "0" + minutes : minutes
                    // secondes = secondes < 10 ? "0" + secondes : secondes

                    Temps.innerHTML = `${minutes}:${secondes}`;
                    secondes++
                    if (secondes > 59) {
                        secondes = 0
                        minutes += 1
                    }
                    Temps.innerHTML = `${minutes}:${secondes}`;

                }
                MyInterval = setInterval(Chrono, 1000);
            }
        }

        function ConsoleLog(nomFonction = null) {
            console.log("#=> original", imgStock);
            console.log("#=> new", imgStock);
            if (nomFonction === "FlipCard4x3") {
                console.log("#=> select 6 images for GrilleCard4x3", imgStock.slice(0, GrilleCard4x3))
                console.log("#=> check doublons images", imgGrille4x3)
            }

            if (nomFonction === "FlipCard4x4") {
                console.log("#=> select 8 images for GrilleCard4x4", imgStock.slice(0, GrilleCard4x4))
                console.log("#=> check doublons images", imgGrille4x4)
            }

            if (nomFonction === "FlipCard5x4") {
                console.log("#=> select 10 images for GrilleCard5x4", imgStock.slice(0, GrilleCard5x4))
                console.log("#=> check doublons images", imgGrille5x4)
            }

        }

        imgStock.sort(() => Math.random() - 0.5);

        const GrilleCard4x3 = 6
        var images4x3 = imgStock.slice(0, GrilleCard4x3)
        var imgGrille4x3 = images4x3.concat(images4x3)
        imgGrille4x3.sort(() => Math.random() - 0.5);

        const GrilleCard4x4 = 8
        var images4x4 = imgStock.slice(0, GrilleCard4x4)
        var imgGrille4x4 = images4x4.concat(images4x4)
        imgGrille4x4.sort(() => Math.random() - 0.5);

        const GrilleCard5x4 = 10
        var images5x4 = imgStock.slice(0, GrilleCard5x4)
        var imgGrille5x4 = images5x4.concat(images5x4)
        imgGrille5x4.sort(() => Math.random() - 0.5);


        function FlipCard4x3(id) { //6
            var a = document.getElementById(id)
            var imgPath = "./media/images/Animaux/"
            // for (var i = 0; i < 1; i++) {
            var image = imgGrille4x3[id]
            var img = `<img class="FlipedCard" src="${imgPath}${image}">`;
            // var FlipedCard = []
            a.innerHTML = img
            var FlipedCard = document.querySelectorAll('.FlipedCard')
            console.log(FlipedCard)
            if (FlipedCard.length == 2) {
                if (FlipedCard[0].src != FlipedCard[1].src) {
                    setTimeout(() => {
                        a.innerHTML = ""
                        FlipedCard.removeChild()
                    }, 3000);
                } else {
                    a.innerHTML = img
                    FlipedCard[0].className.replace('FlipedCard', 'MatchedCard')
                    FlipedCard[1].className.replace('FlipedCard', 'MatchedCard')
                    console.log(FlipedCard)
                }
            }

            WinGame(FlipedCard)

            // setTimeout(() => {
            //     a.innerHTML = ""
            //     // FlipedCard.shift()
            // }, 3000);

            // }
            // console.log(FlipedCard)





            // if (FlipedCard.length <= 1) {
            //     a.innerHTML = img
            // } else if (FlipedCard.length > 1 && FlipedCard.length == 2) {
            //     if (FlipedCard[0].src != FlipedCard[1].src) {
            //         setTimeout(() => {
            //             a.innerHTML = ""
            //             FlipedCard.shift()
            //             FlipedCard.shift()
            //         }, 3000);
            //     }

            //     if (FlipedCard[0].src == FlipedCard[1].src) {
            //         FlipedCard[0].className.replace('FlipedCard', 'MatchedCard')
            //         FlipedCard[1].className.replace('FlipedCard', 'MatchedCard')
            //         a.innerHTML = img
            //         FlipedCard = ""
            //     }
            // } else {
            //     // a.innerHTML = img
            //     FlipedCard = ""
            // }

            // }
            // ConsoleLog()
        }


        // function FlipCard4x3(id) { //6
        //     var a = document.getElementById(id)
        //     var imgPath = "./media/images/Animaux/"
        //     // for (var i = 0; i < 1; i++) {
        //     var image = imgGrille4x3[id]
        //     var img = `<img class="FlipedCard" src="${imgPath}${image}">`
        //     var FlipedCard = document.querySelectorAll('.FlipedCard')
        //     console.log(FlipedCard)

        //     if (FlipedCard.length <= 1) {
        //         a.innerHTML = img
        //     } else if (FlipedCard.length > 1 && FlipedCard.length == 2) {
        //         if (FlipedCard[0].src != FlipedCard[1].src) {
        //             setTimeout(() => {
        //                 a.innerHTML = ""
        //                 FlipedCard.shift()
        //                 FlipedCard.shift()
        //             }, 3000);
        //         }

        //         if (FlipedCard[0].src == FlipedCard[1].src) {
        //             FlipedCard[0].className.replace('FlipedCard', 'MatchedCard')
        //             FlipedCard[1].className.replace('FlipedCard', 'MatchedCard')
        //             a.innerHTML = img
        //             FlipedCard = ""
        //         }
        //     } else {
        //         // a.innerHTML = img
        //         FlipedCard = ""
        //     }

        //     // }
        //     // ConsoleLog()
        // }

        function FlipCard4x4(id) { //8
            var a = document.getElementById(id)
            var index4x4 = {
                12: imgGrille4x4[0],
                13: imgGrille4x4[1],
                14: imgGrille4x4[2],
                15: imgGrille4x4[3],
                16: imgGrille4x4[4],
                17: imgGrille4x4[5],
                18: imgGrille4x4[6],
                19: imgGrille4x4[7],
                20: imgGrille4x4[8],
                21: imgGrille4x4[9],
                22: imgGrille4x4[10],
                23: imgGrille4x4[11],
                24: imgGrille4x4[12],
                25: imgGrille4x4[13],
                26: imgGrille4x4[14],
                27: imgGrille4x4[15],
            }
            var imgPath = "./media/images/Animaux/"
            for (var j = 0; j < 2; j++) {
                var image = index4x4[id]
                var img = `<img class="activeCard" src="${imgPath}${image}">`
                setTimeout(() => {
                    a.innerHTML = ""
                }, 3000);
                a.innerHTML = img
            }
        }

        function FlipCard5x4(id) { //10
            var a = document.getElementById(id)
            var index5x4 = {
                28: imgGrille5x4[0],
                29: imgGrille5x4[1],
                30: imgGrille5x4[2],
                31: imgGrille5x4[3],
                32: imgGrille5x4[4],
                33: imgGrille5x4[5],
                34: imgGrille5x4[6],
                35: imgGrille5x4[7],
                36: imgGrille5x4[8],
                37: imgGrille5x4[9],

                38: imgGrille5x4[10],
                39: imgGrille5x4[11],
                40: imgGrille5x4[12],
                41: imgGrille5x4[13],
                42: imgGrille5x4[14],
                43: imgGrille5x4[15],
                44: imgGrille5x4[16],
                45: imgGrille5x4[17],
                46: imgGrille5x4[18],
                47: imgGrille5x4[19],
            }
            var imgPath = "./media/images/Animaux/"
            for (var k = 0; k < 2; k++) {
                // if (id >= 28 && id <= 47) {
                var image = index5x4[id]
                var img = ` < img class = "activeCard"
                src = "${imgPath}${image}" > `;
                setTimeout(() => {
                    a.innerHTML = ""
                }, 3000);
                a.innerHTML = img
                // }
            }
        }

        function WinGame(FieldCompleted) {
            if (FieldCompleted.length == 12) {
                var ScorePatient = Temps.innerText
                Temps.innerHTML = ScorePatient
                clearInterval(MyInterval)
                buttonPlayer.style.display = "block";
                Wingame = document.querySelector('#WinGame');
                Wingame.innerText = "!! WinGame !!";
                Wingame.disabled = true;

                // WinGame.remove()
                console.log(Temps.innerText) //Temps, Coups, difficulte/niveau
                console.log(buttonPlayer)
            }
        }
    </script>
</body>

</html>
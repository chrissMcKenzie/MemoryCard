<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <style>
        * {
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
        }

        body {
            display: block;
            background: grey;
            height: 100vh;
        }

        header {
            text-align: center;
        }

        h1 {
            margin: 0%;
            padding: 0%;
            font-size: 31px;
            color: gold;
            text-shadow: 1px 1px 2px blue, 0 0 1em white, 0 0 0.2em red;
        }

        header .Contrôle button {
            display: inline;
            margin: 1%;
            width: 100px;
            height: 60px;
            font-size: 18px;
            /* color: black; */
            border-style: outset;
            border-width: 3%;
        }

        header .Fields button {
            display: inline;
            /* background-color: black; */
            background: linear-gradient(180deg,
                    rgba(255, 255, 255, 0.15) 0%,
                    rgba(255, 255, 255, 0) 100%), black;
            margin: 0.5%;
            width: 175px;
            height: 40px;
            font-size: 18px;
            /* border: 0; */
            border-radius: 0.375rem;
            color: white;
        }

        .INIT {
            background-color: red;
        }

        .TEMPS {
            background-color: black;
            color: white;
        }

        .COUPS {
            background-color: grey;
        }

        main {
            display: flex;
        }

        .Player {
            z-index: 100;
            position: absolute;
            margin-top: 0.2%;
            margin-left: 425px;
            padding: 270px 235px;
            background-color: #150a2783;
            width: 590px;
            height: 721px;
        }

        .Player button {
            background-color: green;
            width: 125px;
            height: 75px;
        }

        @media only screen and (max-width: 800px) {

            .Player {
                z-index: 100;
                position: absolute;
                /* display: flex; */
                margin-top: 0.2%;
                margin-left: -50%;
                margin-right: 50%;
                /* top: -50%;
                left: -50%; */
                padding: 270px 235px;
                background-color: #150a2783;
                width: 580px;
                height: 721px;
                /* justify-content: center;
                align-items: center; */
            }

            .Player button {
                background-color: green;
                width: 125px;
                height: 75px;
            }
        }



        #Field5x4 .memory-card {
            width: calc(20% - 10px);
            height: calc(30.33% - 10px);
        }

        .memory-game {
            width: 600px;
            height: 600px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            perspective: 1000px;
        }

        .memory-card {
            width: calc(25% - 10px);
            height: calc(30.33% - 10px);
            margin: 5px;
            position: relative;
            transform: scale(1);
            transform-style: preserve-3d;
            transition: transform .5s;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, .3);
        }

        .memory-card:active {
            transform: scale(0.97);
            transition: transform .2s;
        }

        .memory-card.flip {
            transform: rotateY(180deg);
        }

        .front-face,
        .back-face {
            width: 100%;
            height: 100%;
            /* padding: 20px; */
            position: absolute;
            border-radius: 5px;
            background: #1C7CCC;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            /* Safari */
        }

        .front-face {
            transform: rotateY(180deg);
        }
    </style>
</head>

<body>
    <header>
        <h1>Memory Game</h1>
        <div class="Contrôle">
            <button class="INIT">INIT</button>
            <button class="TEMPS">0:00</button>
            <button class="COUPS"><span>0</span> Coups</button>
        </div>
        <div class="Fields">
            <button class="b4x3">4x3</button>
            <button class="b4x4">4x4</button>
            <button class="b5x4">5x4</button>
        </div>
    </header>
    <main>
        <div class="Player">
            <button id="WinGame" onclick="Play()" style="color: white;">PLAY</button>
        </div>
        <section id="Field4x3" class="memory-game">
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
        </section>

        <section id="Field4x4" class="memory-game">
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani6">
                <img src="./media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani7">
                <img src="./media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani7">
                <img src="./media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani6">
                <img src="./media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
        </section>

        <section id="Field5x4" class="memory-game">
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani6">
                <img src="./media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani7">
                <img src="./media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani8">
                <img src="./media/images/Animaux/Kangourou0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani9">
                <img src="./media/images/Animaux/Kangourou1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani9">
                <img src="./media/images/Animaux/Kangourou1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani8">
                <img src="./media/images/Animaux/Kangourou0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani7">
                <img src="./media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani6">
                <img src="./media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
        </section>
    </main>

    <script type="text/javascript">
        const bINIT = document.querySelector('.INIT')
        const bTemps = document.querySelector('.TEMPS')
        // const bCoups = document.querySelector('.COUPS')

        //const header = document.querySelector('header')
        const b4x3 = document.querySelector('.b4x3')
        const b4x4 = document.querySelector('.b4x4')
        const b5x4 = document.querySelector('.b5x4')

        const Field4x3 = document.querySelector('#Field4x3')
        const Field4x4 = document.querySelector('#Field4x4')
        const Field5x4 = document.querySelector('#Field5x4')
        const cards = document.querySelectorAll('.memory-card');

        bINIT.onclick = () => document.location.reload()

        function HiddenFields(fieldActived) {
            if (fieldActived === "b4x3") {
                Field4x4.style.visibility = "hidden"
                Field4x4.style.display = "none"
                Field5x4.style.visibility = "hidden"
                Field5x4.style.display = "none"

            } else if (fieldActived === "b4x4") {
                Field4x3.style.visibility = "hidden"
                Field4x3.style.display = "none"
                Field5x4.style.visibility = "hidden"
                Field5x4.style.display = "none"

            } else if (fieldActived === "b5x4") {
                Field4x3.style.visibility = "hidden"
                Field4x3.style.display = "none"
                Field4x4.style.visibility = "hidden"
                Field4x4.style.display = "none"

            } else {
                console.log("ECHEC CONDITION")
            }
        }

        Field4x3.style.visibility = "visible"
        HiddenFields("b4x3")
        b4x3.onclick = () => {
            Field4x3.style.visibility = "visible"
            Field4x3.style.display = "flex"
            HiddenFields("b4x3")
        }

        b4x4.onclick = () => {
            Field4x4.style.visibility = "visible"
            Field4x4.style.display = "inherit"
            HiddenFields("b4x4")
        }

        b5x4.onclick = () => {
            Field5x4.style.visibility = "visible"
            Field5x4.style.display = "inherit"
            HiddenFields("b5x4")
        }

        var activedField = false
        activedField = (Field4x3.style.visibility == "visible") ? "Field4x3" : (Field4x4.style.visibility = "visible") ? "Field4x4" : (Field5x4.style.visibility = "visible") ? "Field5x4" : console.log("ERREUR NO FIELD ACTIVED")

        var buttonPlayer = document.querySelector('.Player')
        //var Temps = document.querySelector('.TEMPS')
        var MyInterval

        function Play() {
            buttonPlayer.onclick = () => {
                buttonPlayer.style.display = "none";
                var minutes = 0
                var secondes = 0;
                var Chrono = () => {
                    // minutes = minutes < 10 ? "0" + minutes : minutes
                    // secondes = secondes < 10 ? "0" + secondes : secondes

                    bTemps.innerHTML = `${minutes}:${secondes}`;
                    secondes++
                    if (secondes > 59) {
                        secondes = 0
                        minutes += 1
                    }
                    bTemps.innerHTML = `${minutes}:${secondes}`;

                }
                MyInterval = setInterval(Chrono, 1000);
            }
        }

        let hasFlippedCard = false;
        let lockBoard = false;
        let firstCard, secondCard;
        let Coups = 0
        var AfficheCoups = document.querySelector("span")
        var FlippedCards = document.querySelectorAll('div.memory-card.flip')
        // var FlippedCards = document.querySelectorAll('.font-face')

        var Tableau = []
        console.log(FlippedCards)
        Tableau.push(FlippedCards)
        console.log(firstCard)
        console.log(Tableau)
        // setInterval(() => {
        //     console.log(FlippedCards)
        // }, 1500);

        // Field4x3.onclick = () => {
        //     var Tableau = []
        //     // console.log(FlippedCards)
        //     Tableau.push(firstCard)
        //     console.log(firstCard)
        //     console.log(Tableau)
        // }

        function flipCard() {
            if (lockBoard) return;
            if (this === firstCard) return;

            this.classList.add('flip')

            if (!hasFlippedCard) {
                // first click
                hasFlippedCard = true
                firstCard = this
                return;
            }

            // second click
            secondCard = this
            checkForMatch()
            Coups += 1
            AfficheCoups.innerText = Coups;
        }

        function checkForMatch() {
            let isMatch = firstCard.dataset.framework === secondCard.dataset.framework
            isMatch ? disableCards() : unflipCards()
            // console.log("firstCard =>", firstCard)
            // console.log("secondCard =>", secondCard)
        }

        function disableCards() {
            firstCard.removeEventListener('click', flipCard);
            secondCard.removeEventListener('click', flipCard);
            resetBoard();
        }

        function unflipCards() {
            lockBoard = true;

            setTimeout(() => {
                firstCard.classList.remove('flip');
                secondCard.classList.remove('flip');
                resetBoard();
            }, 1500);
        }

        function resetBoard() {
            [hasFlippedCard, lockBoard] = [false, false];
            [firstCard, secondCard] = [null, null];
        }

        (function shuffle() {
            cards.forEach(card => {
                let randomPos = Math.floor(Math.random() * 12);
                card.style.order = randomPos;
            });
        })();

        cards.forEach(card => card.addEventListener('click', flipCard));

        function Win() {
            Field4x3.onclick = () => {
                if (FlippedCards.length == 12) {
                    clearInterval(MyInterval);
                }
            }
            console.log(FlippedCards)
            // document.location.pathname = `/src/View/JeuxView.php?Temps=00:0${Temps.innerText}&Niveau=${Niveaux4x3}&Score=${Coups}`
        }
    </script>
</body>

</html>
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
                    <img src="./src/View/media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani1">
                    <img src="./src/View/media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani2">
                    <img src="./src/View/media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani3">
                    <img src="./src/View/media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani4">
                    <img src="./src/View/media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani5">
                    <img src="./src/View/media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani5">
                    <img src="./src/View/media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani4">
                    <img src="./src/View/media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani3">
                    <img src="./src/View/media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani2">
                    <img src="./src/View/media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani1">
                    <img src="./src/View/media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani0">
                    <img src="./src/View/media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
            </section>

            <section id="Field4x4" class="memory-game">
                <div class="memory-card" data-framework="Ani0">
                    <img src="./src/View/media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani1">
                    <img src="./src/View/media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani2">
                    <img src="./src/View/media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani3">
                    <img src="./src/View/media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani4">
                    <img src="./src/View/media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani5">
                    <img src="./src/View/media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani6">
                    <img src="./src/View/media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani7">
                    <img src="./src/View/media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani7">
                    <img src="./src/View/media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani6">
                    <img src="./src/View/media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani5">
                    <img src="./src/View/media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani4">
                    <img src="./src/View/media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani3">
                    <img src="./src/View/media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani2">
                    <img src="./src/View/media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani1">
                    <img src="./src/View/media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani0">
                    <img src="./src/View/media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
            </section>

            <section id="Field5x4" class="memory-game">
                <div class="memory-card" data-framework="Ani0">
                    <img src="./src/View/media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani1">
                    <img src="./src/View/media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani2">
                    <img src="./src/View/media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani3">
                    <img src="./src/View/media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani4">
                    <img src="./src/View/media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani5">
                    <img src="./src/View/media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani6">
                    <img src="./src/View/media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani7">
                    <img src="./src/View/media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani8">
                    <img src="./src/View/media/images/Animaux/Kangourou0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani9">
                    <img src="./src/View/media/images/Animaux/Kangourou1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani9">
                    <img src="./src/View/media/images/Animaux/Kangourou1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani8">
                    <img src="./src/View/media/images/Animaux/Kangourou0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani7">
                    <img src="./src/View/media/images/Animaux/Elephant1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani6">
                    <img src="./src/View/media/images/Animaux/Elephant0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani5">
                    <img src="./src/View/media/images/Animaux/Chien1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani4">
                    <img src="./src/View/media/images/Animaux/Chien0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani3">
                    <img src="./src/View/media/images/Animaux/Cheval1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani2">
                    <img src="./src/View/media/images/Animaux/Cheval0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani1">
                    <img src="./src/View/media/images/Animaux/Chat1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
                <div class="memory-card" data-framework="Ani0">
                    <img src="./src/View/media/images/Animaux/Chat0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face">
                </div>
            </section>
    </main>


</body>

</html>
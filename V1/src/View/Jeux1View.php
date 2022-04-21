<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            background: grey;
        }

        .memory-game {
            width: 640px;
            height: 640px;
            margin: auto;
            display: flex;
            flex-wrap: wrap;
            perspective: 1000px;
        }

        #Filed4x3 {
            display: block;
        }

        #Filed4x4 {
            display: none;
        }

        #Filed5x4 {
            display: none;
        }

        .memory-card {
            width: calc(25% - 10px);
            height: calc(33.333% - 10px);
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
    <!-- <h1>Memory Game</h1>
    <p>Score: <span id="score">0</span></p> -->
    <section class="memory-game">
        <!-- <div class="memory-card" data-framework="Ani0"><img src="./src/View/media/images/Animaux2/Ani0.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani1"><img src="./src/View/media/images/Animaux2/Ani1.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani2"><img src="./src/View/media/images/Animaux2/Ani2.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani3"><img src="./src/View/media/images/Animaux2/Ani3.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani4"><img src="./src/View/media/images/Animaux2/Ani4.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani5"><img src="./src/View/media/images/Animaux2/Ani5.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani6"><img src="./src/View/media/images/Animaux2/Ani6.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani7"><img src="./src/View/media/images/Animaux2/Ani7.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani8"><img src="./src/View/media/images/Animaux2/Ani8.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani9"><img src="./src/View/media/images/Animaux2/Ani9.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani10"><img src="./src/View/media/images/Animaux2/Ani10.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div>
        <div class="memory-card" data-framework="Ani11"><img src="./src/View/media/images/Animaux2/Ani11.jpeg" class="front-face"><img src="./src/View/media/images/Logo_Stéthoscope.jpg" class="back-face"></div> -->
        <div id="Filed4x3">
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux2/Ani0.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux2/Ani1.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux2/Ani2.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux2/Ani3.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux2/Ani4.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux2/Ani5.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani5">
                <img src="./media/images/Animaux2/Ani5.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani4">
                <img src="./media/images/Animaux2/Ani4.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani3">
                <img src="./media/images/Animaux2/Ani3.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani2">
                <img src="./media/images/Animaux2/Ani2.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani1">
                <img src="./media/images/Animaux2/Ani1.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
            <div class="memory-card" data-framework="Ani0">
                <img src="./media/images/Animaux2/Ani0.jpeg" class="front-face">
                <img src="./media/images/Logo_Stéthoscope.jpg" class="back-face">
            </div>
        </div>

        <div id="Filed4x4">

        </div>

        <div id="Filed5x4">

        </div>
    </section>

    <script type="text/javascript">
        // const cards = document.querySelectorAll('.memory-card');

        // let hasFlippedCard = false;
        // let lockBoard = false;
        // let firstCard, secondCard;

        // function flipCard() {
        //     if (lockBoard) return;
        //     if (this === firstCard) return;

        //     this.classList.add('flip');

        //     if (!hasFlippedCard) {
        //         // first click
        //         hasFlippedCard = true;
        //         firstCard = this;

        //         return;
        //     }

        //     // second click
        //     secondCard = this;

        //     checkForMatch();
        // }

        // function checkForMatch() {
        //     let isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
        //     isMatch ? disableCards() : unflipCards();
        // }

        // function disableCards() {
        //     firstCard.removeEventListener('click', flipCard);
        //     secondCard.removeEventListener('click', flipCard);

        //     resetBoard();
        // }

        // function unflipCards() {
        //     lockBoard = true;

        //     setTimeout(() => {
        //         firstCard.classList.remove('flip');
        //         secondCard.classList.remove('flip');

        //         resetBoard();
        //     }, 1500);
        // }

        // function resetBoard() {
        //     [hasFlippedCard, lockBoard] = [false, false];
        //     [firstCard, secondCard] = [null, null];
        // }

        // (function shuffle() {
        //     cards.forEach(card => {
        //         let randomPos = Math.floor(Math.random() * 12);
        //         card.style.order = randomPos;
        //     });
        // })();

        // cards.forEach(card => card.addEventListener('click', flipCard));
    </script>
</body>

</html>
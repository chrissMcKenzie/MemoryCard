<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1,
        h2 {
            text-align: center;
        }

        #memory {
            background-color: black;
            width: 700px;
            height: 610px;
            margin: auto;
            padding: 20px;
            display: grid;
            grid-template-columns: repeat(4, 160px);
            grid-gap: 20px;
        }

        img,
        span {
            width: 100%;
        }

        span {
            /* display: inline-block;
            background-color: blue;
            width: 100%; */
            height: 100%;
        }
    </style>
</head>

<body>
    <h1>Memory Game</h1>
    <p>Score: <span id="score">0</span></p>
    <div id='memory'>
        <!-- <img src="./src/View/media/images/Animaux2/Ani0.jpeg" id="test">
        <img src="./src/View/media/images/Animaux2/Ani1.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani2.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani3.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani4.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani5.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani6.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani7.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani8.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani9.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani10.jpeg">
        <img src="./src/View/media/images/Animaux2/Ani11.jpeg"> -->
        <img src="./media/images/Animaux2/Ani0.jpeg" id="test">
        <img src="./media/images/Animaux2/Ani1.jpeg">
        <img src="./media/images/Animaux2/Ani2.jpeg">
        <img src="./media/images/Animaux2/Ani3.jpeg">
        <img src="./media/images/Animaux2/Ani4.jpeg">
        <img src="./media/images/Animaux2/Ani5.jpeg">
        <img src="./media/images/Animaux2/Ani6.jpeg">
        <img src="./media/images/Animaux2/Ani7.jpeg">
        <img src="./media/images/Animaux2/Ani8.jpeg">
        <img src="./media/images/Animaux2/Ani9.jpeg">
        <img src="./media/images/Animaux2/Ani10.jpeg">
        <img src="./media/images/Animaux2/Ani11.jpeg">
    </div>

    <script type="text/javascript">
        /** Algo Jeu
         * - premier click : retourne l'image => mémoriser l'image retournée
         * - deuxième click : retourne l'image, => mémoriser l'image retourné
         * - comparer les deux images
         *  - si identiques => les supprimer
         *  - sinon => les retourner
         * un timer en plus ?
         * un message de victoire
         * système de score
         */
        var a = [1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6]
            .map(p => [p, Math.random()])
            .sort((a, b) => a[1] - b[1])
            .map(p => p[0])
        console.log(a)

        var pics = document.getElementsByTagName('img')
        var eltScore = document.getElementById('score')
        var score = 0

        var step = 1;
        var p1, p2;
        var timer = null

        for (let i = 0; i < pics.length; i++) {
            pics[i].src2 = 'Animaux2/Ani' + a[i] + '.jpeg'
            // pics[i].addEventListener('click', function(e){
            //     e.target.src = e.target.src2;
            // Cliquer partout & éviter d'avoir 12 fonction identique
            // })
        }

        document.addEventListener('click', function(e) {
            switch (step) {
                case 1: // premier click
                    if (e.target.tagName == 'IMG') {
                        e.target.src = e.target.src2
                        p1 = e.target
                        step = 2;
                    }
                    break

                case 2: // premier click
                    if (e.target.tagName == 'IMG') {
                        e.target.src = e.target.src2
                        p2 = e.target
                        step = 3;
                    }
                    timer = setTimeout(check(), 1700)
                    break

                case 3: // premier click
                    clearTimeout(timer)
                    check()
                    break
            }

        })

        function check() {
            if (p1.src2 == p2.src2) {
                // alert("same")
                p1.replaceWith(document.createElement('span'))
                p2.replaceWith(document.createElement('span'))
                score += 1;
            } else {
                // console.log("hop")
                // console.log(p1)
                p2.src = p1.src = "./media/images/Animaux2/Ani0.jpeg"
                score = Math.max(0, score - 30)
            }
            step = 1
            eltScore.textContent = score
            // fin du jeu ?
            if (document.getElementsByTagName('img').length == 0) {
                eltScore.textContent += " Gagné !"
            }
        }
    </script>
</body>

</html>
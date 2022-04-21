
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
var Niveaux4x3 = "1"
var Niveaux4x4 = "2"
var Niveaux5x4 = "3"

function ReStart() {
    document.location.reload()
    document.location.pathname = `/src/View/JeuxView.php?Temps=00:0${Temps.innerText}&Niveau=${Niveaux4x3}&Score=${Coups}`
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

var Coups = 0

function FlipCard4x3(id) { //6
    var a = document.getElementById(id)
    var imgPath = "./media/images/Animaux/"
    var image = imgGrille4x3[id]
    var img = `<img class="FlipedCard" src="${imgPath}${image}">`;
    a.innerHTML = img
    var FlipedCardCollection = document.querySelectorAll('.FlipedCard')
    var FlipedCard = Array.from(FlipedCardCollection)

    var AfficheCoups = document.querySelector("#Coups")
    console.log("FlipedCard #=>", FlipedCard)

    if (FlipedCard.length <= 2) {
        a.innerHTML = img
        if (FlipedCard[0].src != FlipedCard[1].src) {
            setTimeout(() => {
                a.innerHTML = ""
                FlipedCard[0].remove()
                FlipedCard[1].remove()
                // FlipedCard.pop(FlipedCard[0])
                // FlipedCard.pop(FlipedCard[1])
            }, 2000);
            Coups += 1
            AfficheCoups.innerText = Coups;

        } else {
            var MatchedCardCollection = document.querySelectorAll('.MatchedCard')
            var MatchedCard = Array.from(MatchedCardCollection)
            FlipedCard[0].className = 'MatchedCard'
            FlipedCard[1].className = 'MatchedCard'
            MatchedCard.push(FlipedCard[0])
            MatchedCard.push(FlipedCard[1])
            //document.getElementById("FlipedCard").replace(/img/g, "button")
            MatchedCard[0].disabled = true
            MatchedCard[1].disabled = true
            // FlipedCard[0].disabled = true
            // FlipedCard[1].disabled = true
            // FlipedCard.pop(FlipedCard[0])
            // FlipedCard.pop(FlipedCard[1])
            console.log("MatchedCard #=>", MatchedCard)
            console.log("FlipedCard 2#=>", FlipedCard)
            Coups += 1
            AfficheCoups.innerText = Coups;
        }
    } else {
        a.innerHTML = ""
    }

    WinGame(FlipedCard)

}

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
        var image = index5x4[id]
        var img = ` < img class = "activeCard"
        src = "${imgPath}${image}" > `;
        setTimeout(() => {
            a.innerHTML = ""
        }, 3000);
        a.innerHTML = img
    }
}

function WinGame(FieldCompleted) {
    if (FieldCompleted.length == 12) {
        var ScorePatient = Temps.innerText
        Temps.innerHTML = ScorePatient
        clearInterval(MyInterval)
        buttonPlayer.style.display = "block";
        Wingame = document.querySelector('#WinGame');
        Wingame.innerText = "!! Gagné !!";
        Wingame.disabled = true;
        console.log(Temps.innerText) //Coups, difficulte/niveau
        console.log(buttonPlayer)

        // document.location.pathname = `/src/View/JeuxView.php?Score=${Coups}&Temps=${Temps}`
    }
}
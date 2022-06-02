
<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">  
    <title>Memory Card Game | CodingNepal</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>  
    <div class="header"> 
        <?php 
            $managerPatient = new ManagePatient();
            $patientList = $managerPatient->getPatientFromDB();
            $patient = $managerPatient->getPatientFromId($index);

            $id = $patient->getIdPatient();
            $name = $patient->getNomPatient();
            $prenom = $patient->getPrenomPatient();

            echo"<div class= 'flextop'><div class='deco'><a href='index.php?page=9' >Mon espace</a></div><div class='co'> Vous etes connecté en tant que patient numero " .$prenom."&nbsp;<span>".$name."</span></div> <div class='deco'><a href='Controller/Logout.php' >Déconnexion</a></div> </div>";
            $date = date("Ymd");

          ?> 
      </div>
  
  <body>
    <div class="titre">
        MEMORY CARD : Niveau 3
    </div>
    <div class="flexbox">
      <div class="conttable">
                <table id="table">
                <tr class="headertab">
                    <th class="table-head">
                        <span>Scores</span>
                    </th >
                </tr>
                <td>
                <?php   
                    $managerScore = new manageScore();
                    $scoreList = $managerScore->getScoreFromBD();
                    $score = $managerScore->getScoreFromId($id);
                    foreach ($score as $sco) {
                        $ids = $sco->getScore();
                        echo "
                            <tbody>
                            <tr>
                            <td>$ids</td>
                            </tr>
                            </tbody>";
                    }
                ?>
                </td>
                </table>
        </div>
        <div class="wrapper">
      <ul class="cards">
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-1.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-2.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-3.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-4.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-5.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-6.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-5.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-6.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-1.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-2.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-3.png" alt="card-img">
          </div>
        </li>
        <li class="card">
          <div class="view front-view">
            <img src="View/images/que_icon.svg" alt="icon">
          </div>
          <div class="view back-view">
            <img src="View/images/img-4.png" alt="card-img">
          </div>
        </li>
        <div class="details">
          <p class="time">Temps: <span><b>20</b>s</span></p>
          <p class="flips">Coups: <span><b>0</b></span></p>
          <button>Rejouer</button>
        </div>
      </ul>
    </div>
</div>
</div>
  

    <script>
    const cards = document.querySelectorAll(".card"),
    timeTag = document.querySelector(".time b"),
    flipsTag = document.querySelector(".flips b"),
    refreshBtn = document.querySelector(".details button");

    let maxTime = 45;
    let timeLeft = maxTime;
    let flips = 0;
    let matchedCard = 0;
    let disableDeck = false;
    let isPlaying = false;
    let cardOne, cardTwo, timer;

    function initTimer() {
        if(timeLeft <= 0) {
            window.alert("Le temp est ecoulé !"+flips);
            window.location.href="index.php?page=14&var1="+flips+"&var3="+timeLeft +'&var4=<?= $date?>'+'&var2=<?= $id?>';
            return clearInterval(timer);
        }
        timeLeft--;
        timeTag.innerText = timeLeft;
        
    }

    function flipCard({target: clickedCard}) {
        if(!isPlaying) {
            isPlaying = true;
            timer = setInterval(initTimer, 1000);
        }
        
        if(clickedCard !== cardOne && !disableDeck && timeLeft > 0) {
            flips++;
            flipsTag.innerText = flips;
            clickedCard.classList.add("flip");
            if(!cardOne) {
                return cardOne = clickedCard;
            }
            cardTwo = clickedCard;
            disableDeck = true;
            let cardOneImg = cardOne.querySelector(".back-view img").src,
            cardTwoImg = cardTwo.querySelector(".back-view img").src;
            matchCards(cardOneImg, cardTwoImg);
        }
        
    }

    function matchCards(img1, img2) {
        if(img1 === img2) {
            matchedCard++;
            if(matchedCard == 6 && timeLeft > 0) {
                window.alert("Bravo vous avez gagnez !");
                window.location.href="index.php?page=14&var1="+flips+"&var3="+timeLeft +'&var4=<?= $date?>'+'&var2=<?= $id?>';
                return clearInterval(timer);
            }
            cardOne.removeEventListener("click", flipCard);
            cardTwo.removeEventListener("click", flipCard);
            cardOne = cardTwo = "";
            return disableDeck = false;
        }

        setTimeout(() => {
        cardOne.classList.add("shake");
        cardTwo.classList.add("shake");
    }, 400);

    setTimeout(() => {
        cardOne.classList.remove("shake", "flip");
        cardTwo.classList.remove("shake", "flip");
        cardOne = cardTwo = "";
        disableDeck = false;
    }, 1200);

    }

    function shuffleCard() {
        timeLeft = maxTime;
        flips = matchedCard = 0;
        cardOne = cardTwo = "";
        clearInterval(timer);
        timeTag.innerText = timeLeft;
        flipsTag.innerText = flips;
        disableDeck = isPlaying = false;

        let arr = [1, 2, 3, 4, 5, 6, 1, 2, 3, 4, 5, 6];
        arr.sort(() => Math.random() > 0.5 ? 1 : -1);

        cards.forEach((card, index) => {
            card.classList.remove("flip");
            let imgTag = card.querySelector(".back-view img");
            setTimeout(() => {
                imgTag.src = `View/images/img-${arr[index]}.png`;
            }, 500);
            card.addEventListener("click", flipCard);
        });
    }

    shuffleCard();

    refreshBtn.addEventListener("click", shuffleCard);

    
</script>
    
  </body>
  <footer id="Footer">
    <section class="container">
      <div>Copyright © 2021-2022 JMS Corporation Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 OMRANI Sofiane</div>
    </section>
  </footer>
</html>

<style>
/* Import Google Font - Poppins */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.titre{
  font-family: 'impact';
  color:black;
  font-size:30px;
  margin-left:38%;
  margin-right:30%;
  margin-top:5%;
}
footer {
    /* width:500px; */
    margin: 0 auto;
    margin-top: 5%;
    padding: 3%;
    width: 50%;
    height: 12%;
    text-align: center;
    font-size: 15px;

  }
.flexbox{
  display:flex;  
  margin-top:5%;
  margin-left:28%;
  margin-right:30%;
}
.flextop{
  justify-content: space-between;
  display:flex;
  padding-top:10px
}
.deco{
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 150px;
  text-align: center;
  background-color: #f1f1f1;
  font-weight: bold;
  font-family: 'Poppins', sans-serif;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
  border-radius: 10px;
}

.deco:hover{
  background-color: #555;
  color: white;
}
a:link 
{ 
 text-decoration:none; 
} 

.conttable{
  height: 400px;
  overflow-x:hidden;
  overflow-y:hidden;
  overflow-y:scroll;
  padding:auto;
  margin-right:10px;    

}
table{   
  height: 50px;
  background-color: white;
  border-radius: 10px;
  border: 1px solid #ddd;
  text-align: left;  
  border-radius: 10px;
  width: 50px;  
  margin-right:10px;  
  background: #f8f8f8;

}
.table-head{
  color:black;
  padding:auto;
  font-family: 'Poppins', sans-serif; 
  background: #f8f8f8;
  
}
td{
  padding-left:20px;
}
p{
  font-size: 20px;
}
body{
  margin-left:10%;
  margin-right:10%;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #6563ff;
}
::selection{
  color: #fff;
  background: #6563ff;
}
.wrapper{  
  padding: 25px;
  background: #f8f8f8;
  border-radius: 10px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  
}
.cards, .card, .view, .details, p{
  display: flex;
  align-items: center;
  justify-content: center;
}
.cards{
  height: 350px;
  width: 350px;
  flex-wrap: wrap;
  justify-content: space-between;
}
.cards .card{
  cursor: pointer;
  position: relative;
  perspective: 1000px;
  transform-style: preserve-3d;
  height: calc(100% / 4 - 10px);
  width: calc(100% / 4 - 10px);
}
.card.shake{
  animation: shake 0.35s ease-in-out;
}
@keyframes shake {
  0%, 100%{
    transform: translateX(0);
  }
  20%{
    transform: translateX(-13px);
  }
  40%{
    transform: translateX(13px);
  }
  60%{
    transform: translateX(-8px);
  }
  80%{
    transform: translateX(8px);
  }
}
.cards .card .view{
  width: 100%;
  height: 100%;
  user-select: none;
  pointer-events: none;
  position: absolute;
  background: #fff;
  border-radius: 7px;
  backface-visibility: hidden;
  transition: transform 0.25s linear;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}
.card .front-view img{
  max-width: 17px;
}
.card .back-view{
  transform: rotateY(-180deg);
}
.card .back-view img{
  max-width: 40px;
}
.card.flip .front-view{
  transform: rotateY(180deg);
}
.card.flip .back-view{
  transform: rotateY(0);
}

.details{
  width: 100%;
  margin-top: 15px;
  padding: 0 20px;
  border-radius: 7px;
  background: #fff;
  height: calc(100% / 4 - 30px);
  justify-content: space-between;
  box-shadow: 0 3px 10px rgba(0,0,0,0.1);
}
.details p{
  font-size: 18px;
  height: 17px;
  padding-right: 18px;
  border-right: 1px solid #ccc;
}
.details p span{
  margin-left: 8px;
}
.details p b{
  font-weight: 500;
}
.details button{
  cursor: pointer;
  font-size: 14px;
  color: #6563ff;
  border-radius: 4px;
  padding: 4px 11px;
  background: #fff;
  border: 2px solid #6563ff;
  transition: 0.3s ease;
}
.details button:hover{
  color: #fff;
  background: #6563ff;
}

@media screen and (max-width: 700px) {
  .cards{
    height: 350px;
    width: 350px;
  }
  .card .front-view img{
    max-width: 16px;
  }
  .card .back-view img{
    max-width: 40px;
  }
}

@media screen and (max-width: 530px) {
  .cards{
    height: 300px;
    width: 300px;
  }
  .card .back-view img{
    max-width: 35px;
  }
  .details{
    margin-top: 10px;
    padding: 0 15px;
    height: calc(100% / 4 - 20px);
  }
  .details p{
    height: 15px;
    font-size: 17px;
    padding-right: 13px;
  }
  .details button{
    font-size: 13px;
    padding: 5px 10px;
    border: none;
    color: #fff;
    background: #6563ff;
  }
}

</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Game Card</title>
	<link rel="stylesheet" href="main.css" />
</head>
<body>
	<div class="card">
		<div class="card__inner">
			<div class="card__face card__face--front">
				<span>Bienvenue sur MEMORY CARD !</span>
        <img src="View/assets/LogoGif.gif" id='gif'>
            
			</div>
			<div class="card__face card__face--back">
					<div class="logotitle">                         
              <div class="buts">
                <div class="but1">                  
                  <img src="View/assets/patient.png" id="img2">
                  <button class=patient onclick= "window.location.href = 'index.php?page=9';"> Patient </button>
                </div>
                <div class="but2">                
                  <img src="View/assets/soignant.png" id="img1">
                  <button class=soignant onclick= "window.location.href = 'index.php?page=1';"> Soignant </button>
                </div>
              </div>                
              <span class="spacetitle">Veuillez choisir votre espace</span>
          </div>
			</div>
		</div>
	</div>
	<script type="text/javascript" >
        const card = document.querySelector(".card__inner");
        card.addEventListener("click", function (e) {
        card.classList.toggle('is-flipped');
        });

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


body{
  background-color:#142b4e;
}
footer {
    /* width:500px; */
    margin: 0 auto;
    margin-top: 20%;
    padding: 3%;
    width: 50%;
    height: 12%;
    text-align: center;
    font-size: 32px;

  }
.spacetitle{
  display: block;
  margin: 20px;
  text-align:center;
}

#gif{
  width: 350px;
  display: block;
  margin-left: auto;
  margin-right: auto;
}


.buts{
  display: flex;
  text-align:center;
}
#img1{
    height: 50px;
    width: 50px;
}
#img2{
    height: 50px;
    width: 50px;
}

.imgbut{
  display: block;
}

.logotitle{
  font-size: 32px;
  font-weight:bold;
  color:black;
  font-family:arial;
  margin:150px;
  width: 500px; 
}

.buttons{
    display: flex;
    padding:70px;
}

.logo{
    margin:80px;
}

:root {
  --primary: #142b4e;
  --secondary: #142b4e;
  --dark: #142b4e;
  --light: #F3F3F3;
}

body {
  font-family: montserrat, sans-serif;
  width: 100%;
  min-height: 100vh;
}

.card {
  margin: 100px auto 0;
  width: 800px;
  height: 600px;
  perspective: 1000px;
}

.card__inner {
  width: 100%;
  height: 100%;
  transition: transform 1s;
  transform-style: preserve-3d;
  cursor: pointer;
  position: relative;
}

.card__inner.is-flipped {
  transform: rotateY(180deg);
}


.card__face {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  overflow: hidden;
  border-radius: 16px;
  box-shadow: 0px 3px 18px 3px rgba(0, 0, 0, 0.2);
  
}

.card__face--front {
  background-image: linear-gradient(to bottom right, var(--primary), var(--secondary));
  align-items: center;
  justify-content: center;

}

.card__face--front span {
  font-size: 32px;
  font-weight:bold;
  color:#0bf6c5;
  font-family:arial;
  display: block;
  margin: 50px;
  text-align:center;
}

.card__face--back {
  background-color: var(--light);
  transform: rotateY(180deg);
}


.pp {
  display: block;
  width: 128px;
  height: 128px;
  margin: 0 auto 30px;
  border-radius: 50%;
  background-color: #FFF;
  border: 5px solid #FFF;
  object-fit: cover;
}


.soignant{
    display: inline-block;
    background-color: #142b4e;
    border-radius: 10px;
    border: 4px double #cccccc;
    color: #eeeeee;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}

.patient{
    display: inline-block;
    background-color: #142b4e;
    border-radius: 10px;
    border: 4px double #cccccc;
    color: #eeeeee;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}


</style>

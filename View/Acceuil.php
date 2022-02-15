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
				<h2 class="title">Bienvenue sur MEMORY CARD !</h2>
                <div class='logo'>
                <img src="view/LogoGif.gif" id='gif'>
            </div>  
			</div>
			<div class="card__face card__face--back">
				<div class="card__content"> 
					<div class="logotitle"> 
                        
                        <div class="block">
                            <div class="imgbut">                            
                            <img src="view/patient.png" id="img2">
                            <img src="view/soignant.png" id="img1">
                            </div>
                            <div class="buts">
                            <button class=patient onclick= "window.location.href = 'index.php?page=7';"> Patient </button>
                            <button class=soignant onclick= "window.location.href = 'index.php?page=1';"> Soignant </button>
                            </div>
                        </div>
                        <h1 class="espace" >Veuillez choisir votre espace</h1>
                    </div>
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
</html>

<style>

.title{
    color:#0bf6c5;
    font-family:arial;
    font-weight:bold;
}
#gif{
    height: 300px;
    width: 300px;
}
.block{
    padding:50px;
}
.buts{
    display: flex;
}
#img1{
    height: 50px;
    width: 50px;
   margin-left:110px;
}
#img2{
    height: 50px;
    width: 50px;
    margin-left:70px;
}

.imgbut{
    display:flex;
}

.logotitle{
    margin:80px;
    height: 500px;
}

.buttons{
    display: flex;
    padding:70px;
}

.logo{
    padding-left:150px;
    padding-right:200px
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
  width: 600px;
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

.card__face--front h2 {
  color: #black;
  font-size: 32px;
  font-weight:bold;
  padding: 50px;
}

.card__face--back {
  background-color: var(--light);
  transform: rotateY(180deg);
}

.card__content {
  width: 100%;
  height: 100%;
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

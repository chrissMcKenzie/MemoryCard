
<body>
        
    <main id="Main">
        <h2><center> Espace de jeux </center></h2>
    </main>
    
    <div class="flexlevel">
        <?php    
            echo"<div class='leveljeu' ><ul><li><a href=\"index.php?page=12&index=$idpat\"> Niveau 1 - Jouer</a></li></ul></div>"
        ?>
         <?php          
            echo"<div class='leveljeu'><ul><li><a href=\"index.php?page=13&index=$idpat\"> Niveau 2 - Jouer</a></li></ul></div>"
        ?>
         <?php          
            echo"<div class='leveljeu'><ul><li><a href=\"index.php?page=14&index=$idpat\"> Niveau 3 - Jouer</a></li></ul></div>"
        ?>
        </div>
        <div class="info">
        <div class="infos-container">
            <span class="title-fiche">Votre Profil</span>
            <div class="fiche-info">        
                    <div class="cont-title"><img src="View/assets/pp.jpg" id="ppimg"></div>
                    <div class="input-detail">Nom:</div> 
                    <div class="input-title"><?php echo($nom)?></div> 
                    <div class="input-detail">Prenom:</div> 
                    <div class="input-title"><?php echo($prenom) ?></div>  
                    <div class="input-detail">Date de naissance:</div>
                    <div class="input-title"><?php echo($date)?> </div>  
                    <div class="input-detail">Numero de telephone:</div>  
                    <div class="input-title"><?php echo($telephone)?></div>   
            </div>
        </div>
        </div>
</body>
<footer id="Footer">
    <section class="container">
      <div>Copyright © 2021-2022 JMS Corporation Tous Droits Réservés</div>
      <div>Codeur, Développeur (c) 2021 OMRANI Sofiane</div>
    </section>
  </footer>

<style>
.co{
    margin-left:35%;
    margin-top:6px;
    color:black;
    font-family: 'Poppins', sans-serif;

}
footer{
 /* width:500px; */
 margin: 0 auto;
    margin-top: 5%;
    padding: 3%;
    width: 50%;
    height: 12%;
    text-align: center;
    font-size: 15px;
}

.deco{
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 100px;
  text-align: center;
  background-color: #f1f1f1;
  font-weight: bold;
  font-family: 'Poppins', sans-serif;
  color: black;
  padding: 8px 16px;
  text-decoration: none;
  border-radius: 10px;
  margin-right:20px;
}
.flextop{
  justify-content: space-between;
  display:flex;
  padding-top:10px
}
.deco:hover{
  background-color: #555;
  color: white;
}
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    .flexlevel{
        display:flex;
    }
    .contflexx{
        display:flex;
        margin-top:50px;
    }

    html {
        width: 100%;
        height: 100%;
    }

    body {
        /* width: 100%; height: 100%; */
        /* background: url('../../media/images/Background_Login0.jpeg') repeat space; */
        background-position: left;
        /* background-size: cover; */
        background: #6563ff;
        color: white;
        height: 100%;
    }

    header {
        /* width:500px; */
        margin: 0 auto;
        width: 80%;
        text-align: center;
        font-size: 32px;display: flex;
        margin: 1%;
    }

    #Main {
        display: block;
        font-weight: bold;
        font-family: Arial; 
    }

    .leveljeu{
        margin-left:auto;
        margin-right:auto;
        margin-top:20px;
    }

    .deco{
        float:right;
    }

    h1 {        
        text-align: center;
        font-style: italic;
    }

    h2 {
        color: #66FF00;
        margin-top: 3%;
        font-size: 32px;
    }

    ul {
             list-style-type: none;
                margin: 0;
                padding: 0;
                width: 165px;
                background-color: #f1f1f1;
                font-weight: bold;
                font-family: Arial; 
                border-radius: 10px;
                border: 1px solid #ddd;
                text-align:center;
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
                border-radius: 10px;
                border: 1px solid #ddd
            }

            ul:hover {
                background-color: #555;
                color: white;
            }


    .Menu{        
        display:flex;
        float:right;
        margin-right:10px;
        
    }

.jeu{
    text-align: center;
}

.title-fiche{
margin-top:50px;
  margin:20px;
  font-size:40px;
  display:block;
  margin-left: 200px;
  margin-right: 200px;
  font-family:impact;
}

  .info {
    color:white;
    margin: auto;
    width: 500px;
    display:block;    
  }

  body{
    height: 1000px;
  }

  .input-title{
    margin-top:3px;
    font-weight:bold;
    font-size:20px;
  }

  .infos-container {
    margin-top:50px;

    width: 600px;
    height:500px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.05);
    box-sizing: border-box;
    border-radius: 5px;   
     margin-bottom:50px;
  }

#ppimg{
  width: 150px;
  height: 160px;
  display:block;
  margin:auto;
}

.fiche-info{
  text-align:center;
margin-top:20px;
height:200px;
}
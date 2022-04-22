<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Admin</title>
    <!-- CSS LINKPACK -->
    <!-- <link rel="stylesheet" href="./Admin.css"> -->
    <!-- <script src="./Admin.js" defer></script> -->
    <!-- <script src="./Login.js"></script> -->
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        text-decoration: none;
    }

    html {
        width: 100%;
        height: 100%;
    }

    body {
        /* width: 100%; height: 100%; */
        /* background: url('../../media/images/Background_Login0.jpeg') repeat space; */
        background: url("../../media/images/Background_Login1.jpeg") repeat-y;
        background-position: left;
        background-color:black;
        /* background-size: cover; */
        color: white;
    }

    header,
    main,
    footer {
        /* width:500px; */
        margin: 0 auto;
        margin-bottom: 0%;
        padding: 3%;
        width: 50%;
        height: 12%;
        text-align: center;
        font-size: 32px;
    }


    .Menu {
        display: block;
        position: absolute;
        top: 1%;
        left: 3%;
    }

    .Sous_Menu {
        text-shadow: 3px 2px 2px blue;
        color: white;
    }

    .Sous_Menu a {
        color: white;
    }

    .profile {
        display: block;
        position: absolute;
        top: 1%;
        right: 1%;
    }

    #H1{
        text-align: center;
        font-size: 50px;
        font-family:impact;
    }

    main {
        display: block;
        margin-top: -6%;
        width: 1500px;
    }

    footer {
        display: block;
        position: absolute;
        left: 25%;
        bottom: 0%;
        padding-top: 15%;
        width: 600px;
        font-size: 21px;
    }

    /* Full-width inputs */
  
    #img1{
    height: 50px;
    width: 50px;
    margin-right:20px;
    margin-left:20px;
    }

nav li{
    display: inline-block;
    margin-top:100px;
    margin-left:40px;
    font-weight:bold;
    font-family:arial;

}


#include{
    display:none;
    margin-left:auto;
    margin-right:auto;
}

#centerbar {
  font-style: normal;
  font-size: 18px;
  margin-top:50px;
  text-align:left;
}
.active, .btn:hover {
  background-color: #666;
  color: white;
}

#centerbar-elem {
  border-radius: 5px 5px 0px 0px;
  text-align: center;
  font-family:impact;
  font-size: 30px;

  padding: 8px 8px 11px 8px;
  margin-left: 1px;
  margin-right: 1px;
  color: white;
border-bottom:1px solid purple;
  border-width:3px;
  border-radius:1px;

}

.container{
    display:flex;
    justify-content:center;
    margin-top:20px

}
</style>
    <head>
        <section class="container">
            <img src="View/assets/soignant.png" id="img1">
            <span id="H1"> Bienvenue dans votre espace</span>
        </section>
</head>
<body>

    <div id="centerbar">     
    <a class="btn " id="centerbar-elem" href ='index.php?page=5&index=$id'>Mon compte</a>       
    <a class="btn" id="centerbar-elem" href = 'index.php?page=7'>Consultation Patient</a> 
    <a  class="btn" id="centerbar-elem" href="Controller/Logout.php" >Déconnexion</a>
    </div>
    </body>
    
</main>

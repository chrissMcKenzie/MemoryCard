<div class="logotitle">
    <span class ="titre">Bienvenue sur MemoryCard </span>
    <img class="logo" src="view/téléchargement.png">

    <div class="buttons">
    <button class=patient onclick= "window.location.href = 'index.php?page=7';"> Patient </button>
    <button class=soignant onclick= "window.location.href = 'index.php?page=1';"> Soignant </button>
    <h1>Veuillez choisir votre espace</h1>
    </div>
</div>

<footer>
    <h2>2022 CopyRight</h2>
</footer>


<style>

    .logotitle{
        display:flex;
        margin:50px 500px 0px 500px;
    }
    
    h1{
        font-family:impact;
        font-size:40px;
        margin-left:-30px;

    }
    .titre{       
        position:absolute;
        font-size:50px;
        font-family:impact;
        margin-left:80px; 
    }

    *{
        /* position: static; */
        margin: 0;
        padding: 0;
        text-decoration: none;
        list-style-type: none;
    }

    html {
        width: 100%;
        height: 100%;
        display: block;
    }

    header {
        z-index: 500;
        margin-top: 0%;
        padding: 1%;
        background-color: white;
        width: 100%;
        height: 7%;
        color: black;
        text-align: center;
    }

    footer {
        z-index: 500;
        position: fixed;
        bottom: 0%;
        margin-bottom: 0px;
        padding: 1%;
        background-color: white;
        width: 100%;
        height: 12px;
        color: black;
        text-align: center;
    }

    .soignant{
        display: inline-block;
        background-color: #7b38d8;
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
        background-color: #7b38d8;
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

    button{
        width: 500px;
        height: 80px;
        font-style:arial;
    }

    .buttons{
        position:absolute;
        margin: 220px 100px 100px 150px;
    }

    h2{
    font-size:50px;
    margin-left: -80px;
    }

</style>

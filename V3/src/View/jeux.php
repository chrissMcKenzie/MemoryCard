<?php 
session_start();

echo"<div class= 'flextop'><div class='co'> Vous etes connecté en tant que patient numero " . $_SESSION['nom_patient']. "</div> <div class='deco'><ul><li><a href='Controller/Logout.php' >Déconnexion</a></li></ul></div> </div>";
$date = date('d-m-y');

$sess = $_SESSION['nom_patient'];
?>
<head>
    <meta charset="UTF-8">
    <title>Memory Card</title>
    <style>
 
        .imgtop{
            width:50px;
        }
        
        .flextop{
            display: flex;
            justify-content: space-between
        }

        h1 , p{
            text-align:center;
            font-family:impact;
        }

        #memory{
            position: relative;
        }

        img{
            width:100%
        }

        span{
            height:150px;
        }
        
        #Player {
            width:730px;
            height:610px;
            position: absolute;
            opacity: 0.7;
            background: red;
            margin:auto;
            left:24%;
            z-index: 100;
            border-radius: 10px;
        }

            .jeu{
            display:grid;
            width:550px;
            height:610px;
            margin-left:250px;
            padding:20px;
            display:grid;
            grid-template-columns: repeat(4, 160px);
            grid-gap:20px;
            z-index: 1;
            border-radius: 10px;
            }

            #start{
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #4CAF50;
                border: none;
                font-size: 28px;
                color: #000000;
                padding: 20px;
                width: 200px;
                text-align: center;
                transition-duration: 0.4s;
                text-decoration: none;
                overflow: hidden;
                cursor: pointer;
                border:2px ;
                border-radius: 10px;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                width: 130px;
                background-color: #f1f1f1;
                font-weight: bold;
                font-family: Arial
            }

            li a {
                display: block;
                color: #000;
                padding: 8px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #555;
                color: white;
            }

            .flex{
                display:flex; 
            }

            table, td, th {   
                background-color: white;
                border-radius: 10px;
                border: 1px solid #ddd;
                text-align: left;
            }

        table {
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
        }
body{
    background-color: #87CEFA;
}
.conttable{
  height: 500px;
  overflow-x:hidden;
overflow-y:scroll;
}

</style>
</head>

<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>

    <h1>Memory Card</h1>
    
<p>Temps : &nbsp;<span >0 </span> :
  	<span >0 </span> :
  	<span >0 </span>&nbsp; &nbsp;&nbsp; 
    Score :  <span id='score'>0</span> 

<div id='memory'>    
    <div class="flex">
        <div class="conttable">
            <table id="table">
            <tr class="headertab">
                <th class="table-head">
                    <span>Vos scores</span>
                </th >
            </tr>
            <?php   
                $bdd = DatabaseModel::connect(); //on se connecte à la base 
                $sql = "SELECT score FROM score where id_patient='$sess'" ;
                foreach ($bdd->query($sql) as $pat){
                echo '<tr>';
                echo '<td class=\"table-data\">'.htmlspecialchars($pat['score']).'</td>';
                echo '</tr>';
                }
            ?>
            </table>
        </div>
       
        <div id="Player">  
            <button id="start" onclick="start()">Start</button>
        </div>

        <div class="jeu">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
            <img src="View/imageJeu/img0.jpg">
        </div> 

        </div>
    </div>
    
<script>
 //liste d'images 2x6
 var a =[1,2,3,4,5,6,1,2,3,4,5,6]
    .map( p => [p,Math.random()])
    .sort( (a,b) => a[1]-b[1] )
    .map( p => p[0])

console.log(a);

var pics = document.getElementsByTagName('img');
var eltscore = document.getElementById('score');
var score = 0;
var step = 1;
var p1, p2;
var time =null;

for(let i=0; i<pics.length; i++){
    pics[i].src2 = 'View/imageJeu/img' + a[i] + '.jpeg';
}

document.addEventListener('click', function(e){
    switch(step){
        case 1://1er click
            if(e.target.tagName=='IMG'){
                e.target.src = e.target.src2;
                p1 = e.target;
                step = 2;
            }
            break;
        case 2:
            if(e.target.tagName=='IMG'){
                e.target.src = e.target.src2;
                p2 = e.target;
                step = 3;
            }
            timer = setTimeout(check, 1200);
            break;
        case 3:
            clearTimeout(timer);
            check();
        break;
    }
});

function check(){
            if(p1.src2==p2.src2){
                p1.replaceWith(document.createElement('span'))
                p2.replaceWith(document.createElement('span'))
                score += 1;
            }else{
                p2.src = p1.src = 'View/imageJeu/img0.jpg';
                score = Math.max(0, score-1);
            }
            step = 1;
            eltscore.textContent = score;

            if (document.getElementsByTagName('img').length==0){
                Swal.fire({
                    title: 'Votre score :',
                    text: score,
                    imageUrl: 'View/assets/bravo.jpg',
                    confirmButtonText:'<a href="index.php?page=12&var1='+score+'&var3='+time +'&var4=<?= $date?>'+'&var2=<?= $sess?>">Rejouer</a>',
                    cancelButtonText: 'Quitter le jeu',
                    showCancelButton: true,
                    showCloseButton: true
            });
        }
}

var sp = document.getElementsByTagName("span");
  var btn_start=document.getElementById("start");
  var t;
  var ms=0,s=0,mn=0,h=0;
   
function start(){
   t =setInterval(update_chrono,100);
   btn_start.disabled=true;
   document.getElementById("Player").style="display:none;"
}
  /*La fonction update_chrono incrémente le nombre de millisecondes par 1 <==> 1*cadence = 100 */
  function update_chrono(){
    ms+=1;
    /*si ms=10 <==> ms*cadence = 1000ms <==> 1s alors on incrémente le nombre de secondes*/
       if(ms==10){
        ms=1;
        s+=1;
       }
       /*on teste si s=60 pour incrémenter le nombre de minute*/
       if(s==60){
        s=0;
        mn+=1;
       }
       if(mn==60){
        mn=0;
        h+=1;
       }
       /*afficher les nouvelle valeurs*/
       sp[0].innerHTML=h;
       sp[1].innerHTML=mn;
       sp[2].innerHTML=s;
       time = sp[0].innerHTML + sp[1].innerHTML + sp[2].innerHTML;
  }
  
</script>
</body>
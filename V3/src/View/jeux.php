<head>
    <meta charset="UTF-8">
    <title>Memory Card</title>
    <style>
        h1 , p{
            text-align:center;
            font-family:impact;
        }
        #memory{
            display:grid;
            width:700px;
            height:610px;
            margin:auto;
            padding:20px;
            display:grid;
            grid-template-columns: repeat(4, 160px);
            grid-gap:20px;
        }

        img{
            width:100%
        }

        span{
            height:150px;
        }
    </style>
</head>
<body>
    <h1>Memory Card</h1>
    <p> Score :  <span id='score'>0</span>
    <div id='memory'>
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
                eltscore.textContent += 'Gagné !';
            }
} 
  
</script>
</body>
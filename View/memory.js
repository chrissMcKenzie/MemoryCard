//liste d'images 2x6
var pics =[1,2,3,4,5,6,1,2,3,4,5,6]
    .map( p => [p,Math.random()])
    .sort( (a,b) => a[1]-b[1] )
    .map( p => p[0])

console.log(a);

var pics = document.getElementsByTagName('img');

for(let i=0; i<pics.length; i++){
    pics[i].src2 = 'View/imageJeu/img0' + a[i] + '.jpg';
}

var step = 1;
var p1, p2;

document.addEventListener('click', function(e){
    switch(step){
        case 1://1er click
            if(e.target.tagName=='IMG'){
                e.target.src = e.target.src2;
                p1 = e.target.src2;
                step = 2;
            }
            break;
        case 2:
            if(e.target.tagName=='IMG'){
                e.target.src = e.target.src2;
                p1 = e.target.src2;
                step = 3;
            }
        case 3:
            if(p1==p2){
                alert("same");
            }else{
                console.log("hop")
                p1.src = 'View/imageJeu/img0.jpg';
            }
            break;
    }

});
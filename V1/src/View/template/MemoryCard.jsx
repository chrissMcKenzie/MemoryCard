class JSX {

}

function JSX() {


}

const imgStock = [
    "../../media/images/Chat0.jpeg", "../../media/images/Chat1.jpeg", "../../media/images/Cheval0.jpeg",
    "../../media/images/Cheval1.jpeg", "../../media/images/Chien0.jpeg",

    "../../media/images/Chien1.jpeg", "../../media/images/Elephant0.jpeg", "../../media/images/Elephant1.jpeg",
    "../../media/images/Panda0.jpeg", "../../media/images/Panda1.jpeg",

    "../../media/images/Zebre0.jpeg", "../../media/images/Zebre1.jpeg", "../../media/images/Kangourou0.jpeg",
    "../../media/images/Kangourou1.jpeg", "../../media/images/Loup0.jpeg",

    "../../media/images/Loup1.jpeg", "../../media/images/Renard0.jpeg", "../../media/images/Renard1.jpeg"
]

const imgStock1 = {
    img1: "../../media/images/Chat0.jpeg", img2: "../../media/images/Chat1.jpeg", img3: "../../media/images/Cheval0.jpeg",
    img4: "../../media/images/Cheval1.jpeg", img5: "../../media/images/Chien0.jpeg",

    img6: "../../media/images/Chien1.jpeg", img7: "../../media/images/Elephant0.jpeg", img8: "../../media/images/Elephant1.jpeg",
    img9: "../../media/images/Panda0.jpeg", img10: "../../media/images/Panda1.jpeg",

    img11: "../../media/images/Zebre0.jpeg", img12: "../../media/images/Zebre1.jpeg", img13: "../../media/images/Kangourou0.jpeg",
    img14: "../../media/images/Kangourou1.jpeg", img15: "../../media/images/Loup0.jpeg",

    img16: "../../media/images/Loup1.jpeg", img17: "../../media/images/Renard0.jpeg", img18: "../../media/images/Renard1.jpeg"
}

// let Corps_Index = document.getElementById('Corps_Index'); //DOM
// let Tête_Index = document.getElementById('Tête_Index');
// let Torse_Index = document.getElementById('Torse_Index');
// let Ventre_Index = document.getElementById('Ventre_Index');
// let Pieds_Index = document.getElementById('Pieds_Index');
//console.log(Corps_Index, Tête_Index, Torse_Index, Ventre_Index, Pieds_Index);

function Grille4x4() {
    var MAIN = document.querySelector('.Main')
    var section = "section align='center'"
    var div = "div"
    var images = document.querySelectorAll('.img')
    var img = "img width='200px' height='190px' style='background-color:black;'"
    // images.style.visibility = ""

    // var Alea = Math.floor(Math.random() * (imgStock.length))
    // var image = imgStock[Alea]
    for (var i = 0; i < 18; i++) {
        // var Alea = Math.floor(Math.random() * imgStock.length)
        var image = imgStock[i]
    }
    //     // for(var j=0; j<i; j++) {
    //     //     // var image = imgStock[i]
    //     //     // i += Alea
    //     // }

    // // }

    // imgStock.forEach( j, i =>{
    //     var image = j[i]
    //     return i
    // });

    const MemoryCards = imgStock.map((i) => {
        return i
    });

    MAIN.innerHTML += `<${section}>
            <${div}>
                <${img} id="1" class="img" src="${image}" onclick="" />
                <${img} id="2" class="img" src="${image}" onclick="showImage" />
                <${img} id="3" class="img" src="${image}" onclick="showImage" />
                <${img} id="4" class="img" src="${image}" onclick="showImage" />
            </${div}>
            <${div}>
                <${img} id="5" class="img" src="${image}" onclick="showImage" />
                <${img} id="6" class="img" src="${image}" onclick="showImage" />
                <${img} id="7" class="img" src="${image}" onclick="showImage" />
                <${img} id="8" class="img" src="${image}" onclick="showImage" />
            </${div}>
            <${div}>
                <${img} id="9" class="img" src="${image}" onclick="showImage" />
                <${img} id="10" class="img" src="${image}" onclick="showImage" />
                <${img} id="11" class="img" src="${image}" onclick="showImage" />
                <${img} id="12" class="img" src="${image}" onclick="showImage" />
            </${div}>
            <${div}>
                <${img} id="13" class=".img" src="${image}" onclick="showImage" />
                <${img} id="14" class=".img" src="${image}" onclick="showImage" />
                <${img} id="15" class=".img" src="${image}" onclick="showImage" />
                <${img} id="16" class=".img" src="${image}" onclick="showImage" />
            </${div}>

        </${section}>`;
} Grille4x4()


// function createMenuItem(name) {
//     let li = document.createElement('li');
//     li.textContent = name;
//     return li;
// }


// document.querySelector('.btn').addEventListener('click', function() {
//     document.querySelector(".submenu").style.display = "block" ;
//     if(document.querySelector(".submenu").style.display == "block"){
//         document.querySelector(".submenu").style.display = "none";
//     }
// })
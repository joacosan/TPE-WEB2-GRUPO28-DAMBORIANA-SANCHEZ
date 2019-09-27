let puntos = document.querySelectorAll("#puntos");
let btnsText = document.querySelectorAll("#btnmore");
let moreText = document.querySelectorAll("#more");

for (let i = 0; i < btnsText.length; i++) {
    btnsText[i].addEventListener('click', function () {
        moreText[i].classList.toggle('more');
        puntos[i].classList.toggle('more');
    })
}









// document.addEventListener("DOMContentLoaded", desplegar);


// function desplegar(event) {
//     "use strict";


//     btnsText.addEventListener("click", readmore);

//     function readmore() {
//         moreText.classList.toggle("more");

//     } 
// }
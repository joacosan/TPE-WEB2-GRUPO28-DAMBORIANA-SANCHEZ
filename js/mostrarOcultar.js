document.addEventListener("DOMContentLoaded", mostrar);

function mostrar(event) {
    "use strict";
    let btn = document.getElementById("btn-mostrarOcultar");
    btn.addEventListener("click", clickear);

    function clickear() {
        let container = document.getElementById("contenedor");
        container.classList.toggle("mapDnone");
    }
}
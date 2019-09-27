/*Variables*/
//Variables, para mostrar en la tabla, las primeras columnas
let carnes = document.getElementById('cantidadCarnes');
let cheese = document.getElementById('quesos');
let verduras = document.getElementById('verduras');
let aderezos = document.getElementById('aderezo');
let mail = document.getElementById('mail');

//Veriables botones
let btnBorrar = document.getElementById('btnBorrar');
let btnCrear = document.getElementById('btnCrear');
let btnAgregarItems = document.getElementById("btnAgregarItems");

//Variables, para mostrar en la tabla, los ingresos del usuario
let mostrarCarnes = document.querySelector("#mostrarcarnes");
let mostrarQuesos = document.getElementById('mostrarquesos');
let mostrarVerduras = document.getElementById('mostrarverduras');
let mostrarAderezo = document.querySelector('#mostraraderezo');
let mostrarMail = document.querySelector('#mostrarmail');

//JSON
let hamburguesasCreadas = [];


window.onload = mostrarTabla()

function mostrarTabla() {
    mostrarCarnes.innerHTML = "";
    mostrarQuesos.innerHTML = "";
    mostrarVerduras.innerHTML = "";
    mostrarAderezo.innerHTML = "";
    mostrarMail.innerHTML = "";
}


document.addEventListener("DOMContentLoaded", function (event) {

    let hamburguesaIdeal = {
        "cantidadCarnes": "",
        "quesoElegido": "",
        "verduraElegida": "",
        "aderezoElegido": "",
        "mailCreador": ""
    }

    carnes.innerHTML = "Cantidad de carnes: ";
    cheese.innerHTML = "Quesos elegidos: ";
    verduras.innerHTML = "Verduras elegidas: ";
    aderezos.innerHTML = "Aderezos elegidos: ";
    mail.innerHTML = "Mail del Creador: ";

    const selectCarnes = document.getElementById("carnesselect");

    selectCarnes.addEventListener('change', function (event) {
        hamburguesaIdeal.cantidadCarnes = event.target.value;
        mostrarCarnes.innerHTML = hamburguesaIdeal.cantidadCarnes;
    });

    const selectQuesos = document.getElementById('quesosselect');

    selectQuesos.addEventListener('change', function (event) {
        hamburguesaIdeal.quesoElegido = event.target.value;
        mostrarQuesos.innerHTML = hamburguesaIdeal.quesoElegido;
    });


    const selectVerduras = document.getElementById('verdurasselect');

    selectVerduras.addEventListener('change', function (event) {
        hamburguesaIdeal.verduraElegida = event.target.value;
        mostrarVerduras.innerHTML = hamburguesaIdeal.verduraElegida;
    });


    const inputAderezo = document.querySelector('#ingresoaderezos');

    inputAderezo.addEventListener('keypress', function (event) {
        hamburguesaIdeal.aderezoElegido = event.target.value;
        mostrarAderezo.innerHTML = hamburguesaIdeal.aderezoElegido;
    });

    const inputMail = document.querySelector('#ingresomail');

    inputMail.addEventListener('keypress', function (event) {
        hamburguesaIdeal.mailCreador = event.target.value;
        mostrarMail.innerHTML = hamburguesaIdeal.mailCreador;
    });




    //BOTON ENVIAR
    btnCrear.addEventListener('click', crearFila);

    function crearFila(e) {
        e.preventDefault();
        //Preguntamos primero si estan listos todos los valores para ser enviados.
        if ((hamburguesaIdeal.cantidadCarnes == "") || (hamburguesaIdeal.quesoElegido == "") || (hamburguesaIdeal.verduraElegida == "") || (hamburguesaIdeal.aderezoElegido == "") || (hamburguesaIdeal.mailCreador == "")) {
            alert("Completa todos los campos");
        } else {
            //Agrego el json, con los valores de los input, a el arreglo, que va a tener cada json que representa cada fila
            hamburguesasCreadas.push(hamburguesaIdeal);
            insertarFila();
        }
    }

    function insertarFila() {
        //Me paro en el cuerpo de la tabla, donde se va a ingresar la fila con los datos
        let tBody = document.getElementById("table-body");
        //Creo una fila en la cual voy a ingresarle los datos
        let tRow = tBody.insertRow(0);
        //Creo las celdas, que equivale a la cantidad de inputs en el formulario 
        let tCell1 = tRow.insertCell(0),
            tCell2 = tRow.insertCell(1),
            tCell3 = tRow.insertCell(2),
            tCell4 = tRow.insertCell(3),
            tCell5 = tRow.insertCell(4);

        //Relleno las celdas con los valores de los inputs.
        tCell1.innerHTML = hamburguesaIdeal.cantidadCarnes;
        tCell2.innerHTML = hamburguesaIdeal.quesoElegido;
        tCell3.innerHTML = hamburguesaIdeal.verduraElegida;
        tCell4.innerHTML = hamburguesaIdeal.aderezoElegido;
        tCell5.innerHTML = hamburguesaIdeal.mailCreador;


    }



    //BOTON BORRAR
    btnBorrar.addEventListener('click', borrar);

    function borrar() {
        //Limpio el arreglo de JSON
        hamburguesasCreadas = [];
        //Me paro en el cuerpo de la tabla, para eliminarla
        let tBody = document.getElementById("table-body");
        tBody.innerHTML = ""; //Le asigno vacio al cuerpo de la tabla y de esa manera se borra

        //Vacio el json, para que los valores del input no queden cargados
        hamburguesaIdeal = {
            "cantidadCarnes": "",
            "quesoElegido": "",
            "verduraElegida": "",
            "aderezoElegido": "",
            "mailCreador": ""
        }

        limpiarCampos();
    };

    function limpiarCampos() {
        //Vacio, todos los campos (inputs, y la tabla que viene por default)
        let formulario = document.getElementById("formulario-hamburguesas");
        mostrarCarnes.innerHTML = "";
        mostrarQuesos.innerHTML = "";
        mostrarAderezo.innerHTML = "";
        mostrarVerduras.innerHTML = "";
        mostrarMail.innerHTML = "";
        formulario.reset();
    };

    //BOTON AGREGAR 3 ITEMS
    btnAgregarItems.addEventListener("click", agregaItems);

    function agregaItems() {
        let max = 3;
        for (let i = 0; i < max; i++) {
            //Me paro en el cuerpo de la tabla, donde se va a ingresar la fila con los datos
            let tBody = document.getElementById("table-body");
            //Creo una fila en la cual voy a ingresarle los datos
            let tRow = tBody.insertRow(0);
            //Creo las celdas, que equivale a la cantidad de inputs en el formulario 
            let tCell1 = tRow.insertCell(0),
                tCell2 = tRow.insertCell(1),
                tCell3 = tRow.insertCell(2),
                tCell4 = tRow.insertCell(3),
                tCell5 = tRow.insertCell(4);

            //Relleno las celdas con los valores de los inputs.
            tCell1.innerHTML = "x3";
            tCell2.innerHTML = "Cheddar";
            tCell3.innerHTML = "Cebolla";
            tCell4.innerHTML = "Mayonesa";
            tCell5.innerHTML = "pepito@hotmail.com";
        }
    };



});
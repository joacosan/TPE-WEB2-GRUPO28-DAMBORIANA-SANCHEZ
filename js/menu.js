/*Variables*/
//Variables, para mostrar en la tabla, las primeras columnas
let carnes = document.getElementById('cantidadCarnes');
let cheese = document.getElementById('quesos');
let verduras = document.getElementById('verduras');
let aderezos = document.getElementById('aderezo');
let mail = document.getElementById('mail');

//Veriables botones
let btnAgregar = document.querySelector("#btnAgregar");
let btnAgrega3 = document.getElementById("btnAgregarItems");

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


document.addEventListener("DOMContentLoaded", function () {

    let hamburguesaIdeal = {
        "thing": {
            "cantidadCarnes": "",
            "quesoElegido": "",
            "verduraElegida": "",
            "aderezoElegido": "",
            "mailCreador": ""
        }
    }

    carnes.innerHTML = "Cantidad de carnes: ";
    cheese.innerHTML = "Quesos elegidos: ";
    verduras.innerHTML = "Verduras elegidas: ";
    aderezos.innerHTML = "Aderezos elegidos: ";
    mail.innerHTML = "Mail del Creador: ";

    const selectCarnes = document.getElementById("carnesselect");

    selectCarnes.addEventListener('change', function (event) {
        hamburguesaIdeal.thing.cantidadCarnes = event.target.value;
        mostrarCarnes.innerHTML = hamburguesaIdeal.thing.cantidadCarnes;
    });

    const selectQuesos = document.getElementById('quesosselect');

    selectQuesos.addEventListener('change', function (event) {
        hamburguesaIdeal.thing.quesoElegido = event.target.value;
        mostrarQuesos.innerHTML = hamburguesaIdeal.thing.quesoElegido;
    });


    const selectVerduras = document.getElementById('verdurasselect');

    selectVerduras.addEventListener('change', function (event) {
        hamburguesaIdeal.thing.verduraElegida = event.target.value;
        mostrarVerduras.innerHTML = hamburguesaIdeal.thing.verduraElegida;
    });


    const inputAderezo = document.querySelector('#ingresoaderezos');

    inputAderezo.addEventListener('keypress', function (event) {
        hamburguesaIdeal.thing.aderezoElegido = event.target.value;
        mostrarAderezo.innerHTML = hamburguesaIdeal.thing.aderezoElegido;
    });

    const inputMail = document.querySelector('#ingresomail');

    inputMail.addEventListener('keypress', function (event) {
        hamburguesaIdeal.thing.mailCreador = event.target.value;
        mostrarMail.innerHTML = hamburguesaIdeal.thing.mailCreador;
    });


    let aviso = document.querySelector(".aviso");
    let url = "http://web-unicen.herokuapp.com/api/groups/grupo33/Menu/";

    // CARGA AUTOMATICA
    cargaTabla();
    async function cargaTabla() {
        try {
            aviso.innerHTML = "Cargando tabla..";
            let r = await fetch(url);
            let json = await r.json();

            if (json.Menu.length > 0) {

                let tBody = document.getElementById("table-body");
                tBody.innerHTML = "";
                console.log("skere");
                for (let i = 0; i < json.Menu.length; i++) {
                    insertarTablaJson(json.Menu[i]);

                }
                aviso.innerHTML = "Se cargo con exito!";
            } else {
                aviso.innerHTML = "La Tabla esta vacia";
            }

        } catch (e) {
            aviso.innerHTML = "Fallo el cargado de la tabla";
        }
    };



    //AGREGAR
    btnAgregar.addEventListener("click", agregar);
    async function agregar() {
        try {
            aviso.innerHTML = "Guardando...";
            let r = await fetch(url, {
                "method": "POST",
                'headers': {
                    'Content-Type': 'application/json'
                },
                "body": JSON.stringify(hamburguesaIdeal)
            });

            let json = await r.json();
            aviso.innerHTML = "Se guardo todo con exito";
        } catch (e) {
            aviso.innerHTML = "Fallo el guardado";
        };

        try {
            cargaTabla();
        } catch (e) {

        }
    };

    function insertarTablaJson(menu) {
        //Me paro en el cuerpo de la tabla, donde se va a ingresar la fila con los datos
        let tBody = document.getElementById("table-body");

        //Creo una fila en la cual voy a ingresarle los datos
        let tRow = tBody.insertRow(0);
        tRow.id = menu._id;
        //Creo las celdas, que equivale a la cantidad de inputs en el formulario 
        let tCell1 = tRow.insertCell(0),
            tCell2 = tRow.insertCell(1),
            tCell3 = tRow.insertCell(2),
            tCell4 = tRow.insertCell(3),
            tCell5 = tRow.insertCell(4),
            tCell6 = tRow.insertCell(5),
            tCell7 = tRow.insertCell(6);

        tCell1.id = "celdaEvent";
        tCell2.id = "celdaEvent";
        tCell3.id = "celdaEvent";
        tCell4.id = "celdaEvent";
        tCell5.id = "celdaEvent";



        //Relleno las 5 primeras celdas con los valores de los inputs.
        tCell1.innerHTML = menu.thing.cantidadCarnes;
        tCell2.innerHTML = menu.thing.quesoElegido;
        tCell3.innerHTML = menu.thing.verduraElegida;
        tCell4.innerHTML = menu.thing.aderezoElegido;
        tCell5.innerHTML = menu.thing.mailCreador;


        //Relleno las ultimas 2 celdas con los botones de Editar y Borrar
        //Boton borrar


        let botonBorrar = document.createElement('button');
        botonBorrar.innerText = 'Borrar';
        botonBorrar.dataset.id = menu._id;
        botonBorrar.id = "btnBorrar";
        botonBorrar.addEventListener("click", async function () {
            try {
                aviso.innerHTML = "Borrando...";
                let idinicial = botonBorrar.dataset.id;
                let urlDelete = url + idinicial;
                r = await fetch(urlDelete, {
                    "method": "DELETE"

                });
                json = await r.json();
                aviso.innerHTML = "Se borro con exito";
                let filaBorrar = document.getElementById(idinicial);
                filaBorrar.parentElement.removeChild(filaBorrar);
            } catch (e) {
                aviso.innerHTML = "Fallo el borrado";
            };

        });
        tCell7.appendChild(botonBorrar);
        //Boton Editar
        let botonEditar = document.createElement('button');
        botonEditar.innerText = 'Editar';
        botonEditar.dataset.id = menu._id;
        botonEditar.id = "btnEditar";
        botonEditar.addEventListener("click",function () {
            try {
                aviso.innerHTML = "Editando...";


                let celdas = document.querySelectorAll("#celdaEvent");
                for (let i = 0; i < celdas.length; i++) {
                    celdas[i].addEventListener('click', async () => {
                        $(celdas[i]).replaceWith('<td id="celdaEvent"><input type="text" id="ingresoaderezos" class="input-group-text"></td>');
                        let inputEdit = document.querySelector('#ingresoaderezos');
                        celdas[i].innerHTML = inputEdit.value;
                        console.log(inputEdit.value)
                        let idinicial = botonEditar.dataset.id;
                        let urlEditar = url + idinicial;
                        console.log(idinicial);
                        r = await fetch(urlEditar, {
                            "method": "PUT",
                            'headers': {
                                'Content-Type': 'application/json'
                            },
                            "body": JSON.stringify(hamburguesaIdeal)
                        });
                        json = await r.json();
                        aviso.innerHTML = "Se edito con exito";
                    })
                }
            } catch (e) {
                aviso.innerHTML = "Fallo el editado";
            };

        });
        tCell6.appendChild(botonEditar);
    }
    // Agregar 3
    btnAgrega3.addEventListener('click', () => {
        let max = 3;
        for (let i = 0; i < max; i++) {
            agregar();
        }
    })
})
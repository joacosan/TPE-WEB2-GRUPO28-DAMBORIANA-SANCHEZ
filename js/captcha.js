"use strict";
let parrafopregunta = document.getElementById("parrafopregunta"),
    n1,
    n2,
    btnRefresh = document.getElementById("btnRefresh"),
    btnEnviar = document.querySelector("#btn-enviar");

document.addEventListener("DOMContentLoaded", function (event) {
    btnRefresh.addEventListener("click", refrescar);
    btnEnviar.addEventListener("click", validarFormulario);
    window.onload = refrescar;

    function refrescar() {
        n1 = Math.ceil(Math.random() * 10);
        n2 = Math.ceil(Math.random() * 10);
        parrafopregunta.innerHTML = "¿Cuanto es " + n1 + "+" + n2 + "?";
    };

    function validarFormulario(event) {
        let formulario = document.getElementById("formContact");
        valideCampos(event);
        if (event) {
            valideCaptcha(event);
        }
    }

    function valideCaptcha(event) {
        event.preventDefault();
        let ingreso = document.getElementById("captcha").value,
            resultado = n1 + n2;
        if (ingreso == resultado) {
            alert("Perfecto no eres un robot!");
            formulario.submit();
        } else {
            alert("Uh! algo anda mal, intentalo de nuevo con otro captcha!");
            refrescar();
        }
    };
    //VALIDAR CAMPOS
    function valideCampos(event) {
        event.preventDefault();
        let nombre = document.querySelectorAll(".form-input-nombre")[0].value,
            asunto = document.querySelectorAll(".form-input-asunto")[0].value,
            correo = document.querySelectorAll(".form-input-correo")[0].value,
            mensaje = document.querySelectorAll(".form-input-mensaje")[0].value;
        if (nombre === "") {
            alert("El campo nombre esta vacio.");
        }
        if (asunto === "") {
            alert("El campo asunto esta vacio.");
        }
        if (correo === "") {
            alert("El campo correo esta vacio.");
        }
        if (mensaje === "") {
            alert("El campo mensaje esta vacio.");
            return false;
        }
    }
});
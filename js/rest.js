
let hamburguesa = {
    "thing": {
        "cantidadCarnes": "4",
        "quesoElegido": "Dambo",
        "verduraElegida": "Cebolla",
        "aderezoElegido": "Mayonesa",
        "mailCreador": "Esteban@hotmail.com"
    }
}

let aviso = document.querySelector(".aviso");
let url = "http://web-unicen.herokuapp.com/api/groups/grupo33/:SanchezDamboriana";
let btnGuardar = document.querySelector("#btnCrear");
let btnAgregar = document.querySelector("#btnAgregarItems");
document.addEventListener("DOMContentLoaded", function(){

    btnGuardar.addEventListener("click", async function() {
        try {
            aviso.innerHTML = "Guardando..."
            let r = await fetch(url,{
                "method": "POST",
                'headers': {
                    'Content-Type': 'application/json'
                },
                "body":JSON.stringify(hamburguesa)
            });
            let json = await r.json();
            console.log(json);
            aviso.innerHTML = "Se guardo todo con exito";
        } catch(e){
            aviso.innerHTML = "Fallo el guardado";
        };
});
btnAgregar.addEventListener("click",function(){
    let CCarnes = document.querySelector("#carne");
    let url = "http://web-unicen.herokuapp.com/api/groups/grupo33/:SanchezDamboriana";

    try {
        let r = await fetch(url);
        let json = await r.json();
        let mostrarcarne = "x3";
        for(i=0; i < SanchezDamboriana.lenght; i++){
           CCarnes.innerHTML = SanchezDamboriana[i].thing.cantidadCarnes;
        }
    }catch(e){
        
    }
    });
});


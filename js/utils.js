
document.getElementById("fecha_nacimiento").addEventListener("change",
    () => {
        let hoy = new Date();
        let nacimiento = new Date(document.getElementById("fecha_nacimiento").value);
        let edad = hoy.getFullYear() - nacimiento.getFullYear()
        document.getElementById("edad").value = edad;
    });

document.getElementById("cedula").addEventListener("keypress",
    (event) => {
        console.log(event);
        if (event.keyCode < 48 || event.keyCode > 57) {
            event.preventDefault();
        }
    });

document.getElementById("apellidos").addEventListener("keyup",
    (event) => {
        event.target.value = event.target.value.toUpperCase();
    });

document.getElementById("nombres").addEventListener("keyup",
    (event) => {
        event.target.value = event.target.value.toUpperCase();
    });

document.getElementById("edad").addEventListener("keypress",
    (event) => {
        event.preventDefault();
    });

document.getElementById("temperatura").addEventListener("keypress",
    (event) => {
        if ((event.keyCode != 46) && (event.keyCode < 48 || event.keyCode > 57)) {
            event.preventDefault();
        }
    });

$("#presion_arterial").mask("999/99", { autoclear: false });

document.getElementById("pulso").addEventListener("keypress",
    (event) => {
        if (event.keyCode < 48 || event.keyCode > 57) {
            event.preventDefault();
        }
    });

document.getElementById("frecuencia_respiratoria").addEventListener("keypress",
    (event) => {
        if (event.keyCode < 48 || event.keyCode > 57) {
            event.preventDefault();
        }
    });

document.getElementById("saturacion").addEventListener("keypress",
    (event) => {
        if (event.keyCode < 48 || event.keyCode > 57) {
            event.preventDefault();
        }
    });

document.getElementById("peso").addEventListener("keypress",
    (event) => {

        if (document.getElementById("peso").value.length + 1 > 5) {
            event.preventDefault();
        }

        if ((event.keyCode != 46) && (event.keyCode < 48 || event.keyCode > 57)) {
            event.preventDefault();
        }

    });

document.getElementById("talla").addEventListener("keypress",
    (event) => {

        if (document.getElementById("talla").value.length + 1 > 6) {
            event.preventDefault();
        }

        if ((event.keyCode != 46) && (event.keyCode < 48 || event.keyCode > 57)) {
            event.preventDefault();
        }

    });


document.getElementById("edad").addEventListener("keypress",
    (event) => {
        event.preventDefault();
    });

document.getElementById("peso").addEventListener("keyup",(event)=> {imc()});

document.getElementById("talla").addEventListener("keyup",(event)=> {imc()});

document.getElementById("imc").addEventListener("keypress",
    (event) => {
        event.preventDefault();
    });


function imc() {
    console.log("se ejecuto");
    let peso = document.getElementById("peso").value;
    let talla = document.getElementById("talla").value;

    if(peso && talla){
        const m=peso/(talla*talla);
        document.getElementById("imc").value=m.toFixed(3);
    }
    else{
        document.getElementById("imc").value="";
    }
}

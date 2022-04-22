
//Validacion de los campos
function validar(){

    const cedula = document.getElementById('cedula').value;
    const apellidos = document.getElementById('apellidos').value;
    const nombres = document.getElementById('nombres').value;
    const fecha_nacimiento = document.getElementById('fecha_nacimiento').value;
    const edad = document.getElementById('edad').value;
    const temperatura = document.getElementById('temperatura').value;
    const presion_arterial = document.getElementById('presion_arterial').value;
    const pulso = document.getElementById('pulso').value;
    const frecuencia_respiratoria = document.getElementById('frecuencia_respiratoria').value;
    const saturacion = document.getElementById('saturacion').value;
    const peso = document.getElementById('peso').value;
    const talla = document.getElementById('talla').value;
    const imc = document.getElementById('imc').value;

    //Campo cedula
    if(!cedula){
        alerta("Cedula","Ingrese cedula del paciente");
        return false;
    }

    //Campo apellidos
    if(!apellidos){
        alerta("Apellidos","Ingrese apellidos del paciente");
        return false;
    }

    //Campo nombres
    if(!nombres){
        alerta("Nombres","Ingrese nombres del paciente");
        return false;
    }

    //Campo edad
    if(!edad){
        alerta("Edad","Ingrese edad del paciente");
        return false;
    }

    //Campo temperatura
    if(!temperatura){
        alerta("Nombres","Ingrese temperatura del paciente");
        return false;
    }

    //Campo presion arterial
    if(!presion_arterial){
        alerta("Presion arterial","Ingrese presion arterial del paciente");
        return false;
    }

    //Campo pulso
    if(!pulso){
        alerta("Pulso","Ingrese pulso del paciente");
        return false;
    }

    //Campo frecuencia respitoria
    if(!frecuencia_respiratoria){
        alerta("Frecuencia respiratoria","Ingrese frecuencia respiratoria del paciente");
        return false;
    }

    //Campo saturacion
    if(!saturacion){
        alerta("Saturacion","Ingrese saturacion del paciente");
        return false;
    }

    //Campo peso
    if(!peso){
        alerta("Peso","Ingrese peso del paciente");
        return false;
    }

    //Campo talla
    if(!talla){
        alerta("Talla","Ingrese talla del paciente");
        return false;
    }

    //Campo imc
    if(!imc){
        alerta("IMC","Ingrese IMC del paciente");
        return false;
    }

    return true;
    
}

function alerta(title,text){
    Swal.fire({
        icon: 'error',
        title,
        text,
    });
}
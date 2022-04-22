
//Carga por AJAX de los registros

$(document).ready(function () {
  loadPacientes();
});

function loadPacientes() {
  console.log("Cargando pacientes");
  $.ajax({
    // la URL para la petición
    url: 'controllers/PacienteController.php',

    // la información a enviar
    // (también es posible utilizar una cadena de datos)
    data: { operacion: "mostrar_pacientes" },

    // especifica si será una petición POST o GET
    type: 'post',

    // el tipo de información que se espera de respuesta
    dataType: 'json',

    // código a ejecutar si la petición es satisfactoria;
    // la respuesta es pasada como argumento a la función
    success: function (json) {
      const data = json.data;
      console.log(data);
      data.map((el) => ($("#example>tbody").append(`<tr><td>${el.historia}</td>
                                                        <td>${el.nombres}</td>
                                                        <td>${el.cedula}</td>
                                                        <td>${el.edad}</td>
                                                        <td>${el.temperatura}</td>
                                                        <td>${el.presion_arterial}</td>
                                                        <td>${el.pulso}</td>
                                                        <td>${el.peso_kg}</td>
                                                        <td>${el.talla_cm}</td>
                                                        <td>${el.imc}</td></tr>`)))
    },

    // código a ejecutar si la petición falla;
    // son pasados como argumentos a la función
    // el objeto de la petición en crudo y código de estatus de la petición
    error: function (xhr, status) {
      errorCargarDatos();
      console.log(xhr.responseText);
    },
  });
}


//Mensaje si la carga falla
function errorCargarDatos() {
  Swal.fire(
    'Ocurio un problema',
    '',
    'error'
  )
}
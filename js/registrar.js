formulario.onsubmit = async (e) => {
  e.preventDefault();

  if (validar()) {

    //Serializamos los campos del formulario
    const datos = $("#formulario").serialize() + "&operacion=insertar_paciente";

    $.ajax({
      // la URL para la petición
      url: 'controllers/PacienteController.php',

      // la información a enviar
      // (también es posible utilizar una cadena de datos)
      data: datos,

      // especifica si será una petición POST o GET
      type: 'post',

      // el tipo de información que se espera de respuesta
      dataType: 'json',

      // código a ejecutar si la petición es satisfactoria;
      // la respuesta es pasada como argumento a la función
      success: function (json) {
        console.log("Todo bien");
        console.log(json);
        if (json.status == "success") {
          cargarPacientes();
          limpiar();
          alertaRegistrar();

        }
        else {
          console.log(json.message);
          alertValidation(json.campo, json.message);
        }


      },

      // código a ejecutar si la petición falla;
      // son pasados como argumentos a la función
      // el objeto de la petición en crudo y código de estatus de la petición
      error: function (xhr, status) {
        errorRegistrar();
      },
    });
  }
  else {
    console.log('Error de validacion')
  }

}

//Recargamos Los campos al registrar
function cargarPacientes() {
  $('#example tbody tr').remove();
  loadPacientes();
}

//Mensaje si el registro fue exitoso
function alertaRegistrar() {
  Swal.fire(
    'Se registro el paciente',
    '',
    'success'
  )
}

//Mensaje si el registro fallo
function errorRegistrar() {
  Swal.fire(
    'Ocurio un problema',
    '',
    'error'
  )
}

//Mensaje si algun campo fallo
function alertValidation(title, text) {
  Swal.fire({
    icon: 'error',
    title,
    text,
  });
}
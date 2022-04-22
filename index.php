<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Registro de pacientes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <!-- Modal content -->
          <form id="formulario" method="post">
            <h3>Datos personales</h3>
            <div class="row">
              <div class="col-4">
                <label class="mt-3">Cedula</label>
                <input type="text" class="form-control" placeholder="" aria-label="First name" name="cedula" id="cedula">
              </div>
              <div class="col-4">
                <label class="mt-3">Apellidos</label>
                <input type="text" class="form-control" placeholder="" aria-label="First name" name="apellidos" id="apellidos">
              </div>
              <div class="col-4">
                <label class="mt-3">Nombres</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="nombres" id="nombres">
              </div>
              <div class="col-4">
                <label class="mt-3">Fecha nacimiento</label>
                <input type="date" class="form-control" step="1" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>" name="fecha_nacimiento" id="fecha_nacimiento">
              </div>
              <div class="col-4">
                <label class="mt-3">Edad</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="edad" id="edad">
              </div>
            </div>

            <h3 class="mt-4">Informacion Clinica</h3>
            <div class="row">
              <div class="col-4">
                <label class="mt-3">Temperatura</label>
                <input type="text" class="form-control" placeholder="" aria-label="First name" name="temperatura" id="temperatura">
              </div>
              <div class="col-4">
                <label class="mt-3">Presion arterial</label>
                <input type="text" class="form-control" placeholder="" aria-label="First name" name="presion_arterial" id="presion_arterial">
              </div>
              <div class="col-4">
                <label class="mt-3">Pulsaciones</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="pulso" id="pulso">
              </div>
              <div class="col-4">
                <label class="mt-3">Frecuencia respiratoria</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="frecuencia_respiratoria" id="frecuencia_respiratoria">
              </div>
              <div class="col-4">
                <label class="mt-3">Saturacion</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="saturacion" id="saturacion">
              </div>
              <div class="col-4">
                <label class="mt-3">Peso KG</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="peso" id="peso">
              </div>
              <div class="col-4">
                <label class="mt-3">Talla CM</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="talla" id="talla">
              </div>
              <div class="col-4">
                <label class="mt-3">IMC</label>
                <input type="text" class="form-control" placeholder="" aria-label="Last name" name="imc" id="imc">
              </div>
            </div>
            <div class="modal-footer mt-3">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="data:image/png;base64,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" alt="" width="30" height="24" class="d-inline-block align-text-top">
          Listado de Pacientes
        </a>
      </div>
    </nav>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success my-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Agregar
    </button>
    <div class="card p-3 mt-2">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Edad</th>
                  <th>Temperatura</th>
                  <th>Presion Arterial</th>
                  <th>Pulso</th>
                  <th>Peso</th>
                  <th>Talla</th>
                  <th>IMC</th>
              </tr>
          </thead>
          <tbody>
             <!-- Carga dinamica -->
          </tbody>
      </table>
    </div>
  <div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.js" 
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/jquery.maskedinput.js"></script>
  <script src="js/loadTable.js"></script>
  <script src="js/utils.js"></script>
  <script src="js/validation.js"></script>
  <script src="js/limpiar.js"></script>
  <script src="js/registrar.js"></script>

</body>
</html>
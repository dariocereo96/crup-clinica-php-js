<?php

// Imitando un controlador 
include_once dirname(__DIR__)."/models/Paciente.php";
include_once dirname(__DIR__)."/models/PacienteDAO.php";

$paciente = new Paciente();
$pacienteDAO = new PacienteDAO();


//Tipo de accion a realizar
if (isset($_POST['operacion'])){
    
    switch($_POST["operacion"]){

        case "insertar_paciente":
            try{

                $paciente->cedula=$_POST['cedula'];
                $paciente->nombres=$_POST['apellidos'] ." ".$_POST['nombres'];
                $paciente->fecha_nacimiento=$_POST['fecha_nacimiento'];
                $paciente->edad=$_POST['edad'];
                $paciente->temperatura=$_POST['temperatura'];
                $paciente->presion_arterial=$_POST['presion_arterial'];
                $paciente->pulso=$_POST['pulso'];
                $paciente->frecuencia_respiratoria=$_POST['frecuencia_respiratoria'];
                $paciente->saturacion=$_POST['saturacion'];
                $paciente->peso_kg=$_POST['peso'];
                $paciente->talla_cm=$_POST['talla'];
                $paciente->imc=$_POST['imc'];


                if(!$pacienteDAO->existeCedula($paciente->cedula)){
                    $pacienteDAO->guardarPaciente($paciente);
                    echo json_encode([
                        'status'=>'success',
                        'message'=>"Se registro el paciente",
                    ]);
                }
                else{
                    echo json_encode([
                        'status'=>'error',
                        'campo'=>'cedula',
                        'message'=>"Ya existe la cedula",
                    ]);
                }

                
            }
            catch(Exception $e){
                echo json_encode([
                    'status'=>'error',
                    'message'=>$e->getMessage(),
                ]);
            }
        break;

        case 'mostrar_pacientes':
            echo json_encode([
                'status'=>'success',
                'data'=> $pacienteDAO->getPacientes(),
            ]);
            
        break;

        default:
            echo json_encode([
                'status'=>'warn',
                'message'=>"No hay datos"
            ]);
        
    }
}
else{
    echo json_encode([
        'status'=>'error',
        'message'=>"Ingrese tipo de operacion"
    ]);
}
        
        
    

    

    



  
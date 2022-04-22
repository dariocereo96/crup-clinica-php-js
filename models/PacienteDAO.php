<?php

require dirname(__DIR__)."/config/Conexion.php";

class PacienteDAO{

    private $pacientes;
    private $db;
    
    function __construct() {
        $this->db=new Conexion();
    }

    public function getPacientes(){

        $db_connection =  $this->db->getConnection();

        $consulta = $db_connection->prepare("select * from pacientes");
        
        $consulta->setFetchMode(PDO::FETCH_ASSOC);

        $consulta->execute();

        while ($row = $consulta->fetch()){
           $this->pacientes[] = $row;
        }

        return $this->pacientes;

    }

    public function guardarPaciente($paciente){

        $db_connection =  $this->db->getConnection();

        $consulta = $db_connection->prepare("insert into pacientes(cedula,
                                                                    nombres,
                                                                    fecha_nacimiento,
                                                                    edad,
                                                                    temperatura,
                                                                    presion_arterial,
                                                                    pulso,
                                                                    frecuencia_respiratoria,
                                                                    saturacion,
                                                                    peso_kg,
                                                                    talla_cm,
                                                                    imc) 
                                            values(?,?,?,?,?,?,?,?,?,?,?,?)");

        $consulta->bindParam(1, $paciente->cedula);
        $consulta->bindParam(2, $paciente->nombres);
        $consulta->bindParam(3, $paciente->fecha_nacimiento);
        $consulta->bindParam(4, $paciente->edad);
        $consulta->bindParam(5, $paciente->temperatura);
        $consulta->bindParam(6, $paciente->presion_arterial);
        $consulta->bindParam(7, $paciente->pulso);
        $consulta->bindParam(8, $paciente->frecuencia_respiratoria);
        $consulta->bindParam(9, $paciente->saturacion);
        $consulta->bindParam(10, $paciente->peso_kg);
        $consulta->bindParam(11, $paciente->talla_cm);
        $consulta->bindParam(12, $paciente->imc);

        $consulta->execute();
    }

    public function existeCedula($cedula){

        $db_connection =  $this->db->getConnection();

        $consulta = $db_connection->prepare("select cedula from pacientes where cedula=?");

        $consulta->bindParam(1, $cedula);

        $consulta->execute();

        if($consulta->rowCount() > 0){
            return true;
        }
        
        return false;
    }

}
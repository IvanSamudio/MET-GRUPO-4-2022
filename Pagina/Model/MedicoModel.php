<?php

class MedicoModel{

    private $db;
    
    function __construct()
    {
      $this->db = new PDO('mysql:host=localhost;' . 'dbname=turnofacil;charset=utf8', 'root', '');
    }

    function GetMedicos(){
        $sentencia = $this->db->prepare("SELECT * FROM medico M JOIN obrasocial O on O.id_obra_social = M.obra_social");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
      }

    function getMedicoPorMatricula($nro_matricula){
        $sentencia = $this->db->prepare("SELECT * FROM medico WHERE nro_matricula = ?");
        $sentencia->execute($nro_matricula);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetMedicosPorEspecialidad($especialidad){
        $sentencia = $this->db->prepare("SELECT * FROM medico M JOIN obrasocial O on O.id_obra_social = M.obra_social WHERE M.especialidad = ?");
        $sentencia->execute([$especialidad]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function GetMedicosPorObraSocial($obraSocial){
        $sentencia = $this->db->prepare("SELECT * FROM medico M JOIN obrasocial O on O.id_obra_social = M.obra_social WHERE O.nombre_obra_social = ?");
        $sentencia->execute([$obraSocial]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function getAllObraSociales(){
        //SELECT * FROM medico GROUP BY obra_social
        $sentencia = $this->db->prepare("SELECT * FROM medico M JOIN obrasocial O on O.id_obra_social = M.obra_social GROUP BY M.obra_social");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAllEspecialidades(){
        $sentencia = $this->db->prepare("SELECT * FROM medico GROUP BY especialidad");
        $sentencia->execute();
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function GetMedicosPorEspecialidadYObra($especialidad, $obraSocial){
        $sentencia = $this->db->prepare("SELECT * FROM medico M JOIN obrasocial O on O.id_obra_social = M.obra_social WHERE M.especialidad = ? AND O.nombre_obra_social = ? ");
        $sentencia->execute([$especialidad, $obraSocial]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }

    function UpdateMedico($especialidad, $horario, $contrasenia, $secretaria, $obraSocial, $nroMatricula){
        $sentencia = $this->db->prepare("UPDATE medico SET especialidad = ?, horario = ?, contrasenia = ?, secretaria = ?, obraSocial=? WHERE nro_matricula = ?");
        $sentencia->execute($especialidad, $horario, $contrasenia,$secretaria,$obraSocial,$nroMatricula);
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    function DeleteMedico($nroMatricula){
        $sentencia = $this->db->prepare("DELETE FROM medico WHERE nro_matricula = ?");
        $sentencia->execute($nroMatricula);
    }

    function InsertMedico($nroMatricula, $especialidad, $horario,$contrasenia,$obraSocial)   {
        $sentencia = $this->db->prepare("INSERT INTO medico VALUES(?,?,?,?,NULL,?)");
        $sentencia->execute([$nroMatricula,$especialidad,$horario,$contrasenia,$obraSocial]);
    }
}
<?php
class AdminModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=turnofacil;charset=utf8'
    , 'root', '');
  }

  function GetMedicos(){
    $sentencia = $this->db->prepare("SELECT * FROM medico M JOIN obrasocial O on O.id_obra_social = M.obra_social");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }
  
  
  function GetSecretarias(){
    $sentencia = $this->db->prepare("SELECT * FROM secretaria");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  function GetSecretaria($id_secretaria){
    $sentencia = $this->db->prepare("SELECT * FROM secretaria WHERE id_secretaria=?");
    $sentencia->execute([$id_secretaria]);
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

  function AsignarSecretaria($id_secretaria,$nro_matricula){
    $sentencia = $this->db->prepare("UPDATE medico SET id_secretaria=? WHERE nro_matricula=?");
    $sentencia->execute(array($id_secretaria,$nro_matricula));
  }

  function InsertSecretaria($nombreUsuario,$contrasenia,$nombre,$apellido,$dni){
    $sentencia = $this->db->prepare("INSERT INTO secretaria(nombreUsuario, secretaria_nombre,secretaria_apellido,secretaria_dni,secretaria_contrasenia) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombreUsuario,$nombre,$apellido,$dni,$contrasenia));
  }

  function GetObrasSociales(){
    $sentencia = $this->db->prepare("SELECT * FROM obrasocial");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_OBJ);
  }

  function InsertMedico($contrasenia,$nroMatricula,$nombre,$apellido,$obraSocial,$dni,$especialidad,$telefono,$nombreUsuario){
    $sentencia = $this->db->prepare("INSERT INTO medico(nro_matricula,medico_nombre,medico_apellido,obra_social,medico_dni,especialidad,id_secretaria,inicio_horario_atencion,fin_horario_atencion,contrasenia,medico_telefono,nombreUsuario) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
    $sentencia->execute(array($nroMatricula,$nombre,$apellido,$obraSocial,$dni,$especialidad,NULL,NULL,NULL,$contrasenia,$telefono,$nombreUsuario));
  }

  function getUser($nombreUsuario) {
    $sentencia = $this->db->prepare("SELECT s.id_secretaria as id,s.secretaria_contrasenia as contrasenia, S.nombreUsuario FROM secretaria S WHERE S.nombreUsuario = ?");
    $sentencia->execute([$nombreUsuario]);
    $objeto = $sentencia->fetch(PDO::FETCH_OBJ);
    if ($objeto == false){
      $sentencia = $this->db->prepare("SELECT M.nro_matricula as id,M.contrasenia as contrasenia, M.nombreUsuario FROM medico M WHERE M.nombreUsuario = ?");
      $sentencia->execute([$nombreUsuario]);
      $objeto = $sentencia->fetch(PDO::FETCH_OBJ);
      if($objeto != false){
        $objeto->tipoUser = "medico";
      }         
    }else{
      $objeto->tipoUser = "secretaria";
    }
    return $objeto;
}

function getMedico($nro_matricula) {
    //Traigo los turnos de los medicos a partir de la fecha
    $sentencia = $this->db->prepare("SELECT * FROM medico WHERE nro_matricula = ?");
    $sentencia->execute([$nro_matricula]);
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }

}
<?php
class LoginModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=turnofacil;charset=utf8'
    , 'root', '');
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

}
<?php
class TurnoFacilModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=;charset=utf8'
    , 'root', '');
  }

  function getTurnosMedico($nro_matricula) {
    $sentencia = $this->db->prepare("SELECT * FROM turno WHERE nro_matricula = ?");
    //$sentencia = $this->db->prepare("SELECT * FROM turno WHERE nro_matricula = ? 
    //  GROUP BY extract(year FROM horario) ORDER BY extract(year FROM horario));
    $sentencia->execute($nro_matricula);
    return $sentencia->fetchAll(PDO::FETCH_OBJ);    
  }

  /* EJEMPLOS DE GET,UPDATE,DELETE,INSERT
  
  function GetTurnos(){
    $sentencia = $this->db->prepare( "select * from materiales");
    $sentencia->execute();
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function BorrarPostulacion($param){
    $sentencia = $this->db->prepare("DELETE from postulantes where idOferta=?");
    $sentencia->execute(array($param));
  }

  function postularse($id, $idOferta){
    $sentencia = $this->db->prepare("INSERT INTO `postulantes`( `idOferta`, `idUsuario`, `activo`) VALUES (?,?,?)");
    $sentencia->execute(array($idOferta,$id, false));
  }

  function aceptarUsuario($id){
    $sentencia = $this->db->prepare( "UPDATE usuario set activo = ? where id_usuario =?");
    $sentencia->execute(array(1,$id));
  */


}


 ?>

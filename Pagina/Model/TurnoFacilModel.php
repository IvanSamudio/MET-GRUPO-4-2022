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
    //Traigo los turnos de loss medicos, e incluyo algunos datos extras como el inicio y fin
    //de atencion del medico de los medicos para poder armar el calendario con esos datos
    $sentencia = 
      $this->db->prepare(
        "SELECT id_paciente, horario_turno, duracion_turno, 
          m.inicio_horario_atencion, m.fin_horario_atencion
         FROM turno t
         INNER JOIN medico m ON t.nro_matricula = m.nro_matricula
         WHERE (nro_matricula = ? 
         AND horario_turno >= CURRENT_TIMESTAMP)");
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

<?php
class TurnoFacilModel
{

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;'
    .'dbname=turnofacil;charset=utf8'
    , 'root', '');
  }

  function getTurnosMedico($nro_matricula, $fecha, $fechaFinMes) {
    //Traigo los turnos de los medicos a partir de la fecha
    $sentencia = 
      $this->db->prepare(
        "SELECT id_paciente, horario_turno
         FROM turno
         WHERE (nro_matricula = ? 
         AND id_paciente IS NULL
         AND horario_turno BETWEEN ? AND ?)");
    $sentencia->execute([$nro_matricula, $fecha, $fechaFinMes]);
    $turnos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
    return $turnos;
  }

  function getMedico($nro_matricula) {
    //Traigo los turnos de los medicos a partir de la fecha
    $sentencia = $this->db->prepare("SELECT * FROM medico WHERE nro_matricula = ?");
    $sentencia->execute([$nro_matricula]);
    return $sentencia->fetch(PDO::FETCH_OBJ);
  }



  function getTurnosMedicoDia($nro_matricula, $dia, $mes) {
    //Traigo los turnos de loss medicos, e incluyo algunos datos extras como el inicio y fin
    //de atencion del medico de los medicos para poder armar el calendario con esos datos
    $sentencia = 
      $this->db->prepare(
        "SELECT id_paciente, horario_turno, duracion_turno 
         FROM turno 
         WHERE (nro_matricula = ? 
         AND horario_turno >= CURRENT_TIMESTAMP
         AND (EXTRACT(DAY FROM horario_turno) = ?)
         AND (EXTRACT(MONTH FROM horario_turno) = ?))");
    $sentencia->execute(array($nro_matricula, $dia, $mes));
    $turnos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
    return $turnos;

  }

  function getTurnosMedicoDiaFiltrado($nro_matricula, $dia, $mes, $horaFiltrar, $minutosFiltrar){
    $sentencia = 
      $this->db->prepare(
        "SELECT id_paciente, horario_turno, duracion_turno 
         FROM turno 
         WHERE (nro_matricula = ? 
         AND horario_turno >= CURRENT_TIMESTAMP
         AND (EXTRACT(DAY FROM horario_turno) = ?)
         AND (EXTRACT(MONTH FROM horario_turno) = ?)
         AND (EXTRACT(HOUR FROM horario_turno) >= ?)
         AND (EXTRACT(MINUTE FROM horario_turno) >= ?))");
    $sentencia->execute(array($nro_matricula, $dia, $mes, $horaFiltrar, $minutosFiltrar));
    $turnos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
    return $turnos;
  }

  function getTurnosMedicoDiaFiltradoHoraDia($nro_matricula, $dia, $mes, $horaDia, $max){
    $sentencia = 
      $this->db->prepare(
        "SELECT id_paciente, horario_turno, duracion_turno 
         FROM turno 
         WHERE (nro_matricula = ? 
         AND horario_turno >= CURRENT_TIMESTAMP
         AND (EXTRACT(DAY FROM horario_turno) = ?)
         AND (EXTRACT(MONTH FROM horario_turno) = ?)
         AND (EXTRACT(HOUR FROM horario_turno) BETWEEN ? AND ?))");
    $sentencia->execute(array($nro_matricula, $dia, $mes, $horaDia, $max));
    $turnos = $sentencia->fetchAll(PDO::FETCH_OBJ); 
    return $turnos;
  }

  function getHorariosMedico($nro_matricula){
    //SELECT inicio_horario_atencion, fin_horario_atencion FROM medico WHERE nro_matricula = 185337;
    $sentencia = 
      $this->db->prepare(
        "SELECT inicio_horario_atencion, fin_horario_atencion 
         FROM medico 
         WHERE nro_matricula = ?");
    $sentencia->execute([$nro_matricula]);
    $horarios = $sentencia->fetch(PDO::FETCH_OBJ); 
    return $horarios;
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

  function AsignarSecretaria($id_secretaria,$nro_matricula){
    $sentencia = $this->db->prepare("UPDATE medico SET id_secretaria=? WHERE nro_matricula=?");
    $sentencia->execute(array($id_secretaria,$nro_matricula));
  }

  function InsertSecretaria($nombreUsuario,$contrasenia,$nombre,$apellido,$dni){
    $sentencia = $this->db->prepare("INSERT INTO secretaria(nombreUsuario, secretaria_nombre,secretaria_apellido,secretaria_dni,secretaria_contrasenia) VALUES(?,?,?,?,?)");
    $sentencia->execute(array($nombreUsuario,$nombre,$apellido,$dni,$contrasenia));
  }

}


 ?>

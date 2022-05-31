<?php
require_once "../View/TurnoFacilView.php";
require_once "../Model/TurnoFacilModel.php";



class TurnoFacilController{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
    $this->view = new TurnoFacilView();
    $this->Titulo = "Turno Facil";
    $this->model = new TurnoFacilModel();
  }

  function Home(){
    //$Turnos = $this->model->GetTurnos();
    $this->view->Mostrar($this->Titulo);
  }

  function getTurnosMedico($params) {
    $nro_matricula = $params[0];
    var_dump($params);

    //Intente pasar por params (/185337/5) el mes, pero me rompe el css del calendario
    /* Por ahora lo tacho pero es un buen inicio para mejorar el calendario
    $dateYear = date('Y'); $dateMonth = date('m'); $dateDay = date('d');
    echo $dateYear; echo "  "; echo $dateMonth; echo "  "; echo $dateDay; echo "  ";
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $dateMonth, $dateDay);
    echo $daysInMonth; */
    /* V2 */    
    $turnosMedico = $this->model->getTurnosMedico($nro_matricula);
    $diasDisponibles = array();
    foreach ($turnosMedico as $turno) {
      if (is_null($turno->id_paciente)) {
        $day = date('j', strtotime($turno->horario_turno)); 
        array_push($diasDisponibles, $day);
      }
    }
    var_dump($diasDisponibles);
    $this->view->mostrarCalendarioTurnosDisponibles($diasDisponibles);
  }

  function getHorariosTurnoMedico($params){
    //deberia ser llamado con los datos despues de elegir la fecha del turno, pero mientras para probar repito code
    $fecha_turno = $params[0];
    var_dump($fecha_turno);

    echo "<br>";

    echo "Mostrando horarios de turnos disponibles para el dia: {$fecha_turno}";

    $turnosMedico = $this->model->getTurnosMedico(185337);
    $horasDisponibles = array();
    echo "<br>";
    foreach ($turnosMedico as $turno) {
      if (is_null($turno->id_paciente)) {
        $horario = array();
        $hora_inicio = strtotime($turno->horario_turno); //hora inicio
        $duracion_turno = strtotime($turno->duracion_turno); //hora inicio
        $horario[0] = date('H:i', $hora_inicio);
        $horario[1] = date('H:i', $duracion_turno); //duracion del turno
        $horario[2] = date('H:i', ($hora_inicio - $duracion_turno));
        echo $horario[2];
  
        array_push($horasDisponibles, $horario);
      }
    }
    echo "<br>";

    var_dump($horasDisponibles);
    $this->view->mostrarHorariosTurnosDisponibles($horasDisponibles);



  }

  
}

?>

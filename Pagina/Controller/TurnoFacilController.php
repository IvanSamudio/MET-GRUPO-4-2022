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

  
}

?>

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

  function getTurnosMedico($nro_matricula) {
    $turnosMedico = $this->model->getTurnosMedico($nro_matricula);
    $this->view->mostrarCalendarioTurnosDisponibles($turnosMedico);
  }

  
}

?>

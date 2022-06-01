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

  function getHorariosTurnoMedico($nro_matricula, $diaElegido, $mesElegido){
    /* $nro_matricula = 185337;
    $diaElegido = 31;
    $mesElegido = 05; */  //es para que ande a mano, tambien activar la url en ConfigApp, Lauta me llama pasando los datos desde su func

    $fechaTurno = "$diaElegido/$mesElegido";

    if (isset($_POST["hora-Filtro"]) && isset($_POST["minutos-Filtro"]))
    {
      $horaFiltrar = $_POST["hora-Filtro"];
      $minutosFiltrar = $_POST["minutos-Filtro"];
      $turnosMedico = $this->model->getTurnosMedicoDiaFiltrado($nro_matricula, $diaElegido, $mesElegido, $horaFiltrar, $minutosFiltrar);
    }
    else if (isset($_POST["maniana-tarde"]))
    {
      $horaDia = $_POST["maniana-tarde"];
      $maxHora = $horaDia + 6;
      $turnosMedico = $this->model->getTurnosMedicoDiaFiltradoHoraDia($nro_matricula, $diaElegido, $mesElegido, $horaDia, $maxHora);
    }
    else
      $turnosMedico = $this->model->getTurnosMedicoDia($nro_matricula, $diaElegido, $mesElegido);

    $horariosTurnos = $this->model->getHorariosMedico($nro_matricula);
    $horasDisponibles = array();
    
    foreach ($turnosMedico as $turno) {
      if (is_null($turno->id_paciente)) {
        $horario = array();
        $hora_inicio = strtotime($turno->horario_turno); //hora inicio
        $duracion_turno = strtotime($turno->duracion_turno); //hora inicio
        $horario[0] = date('H:i', $hora_inicio); //16:30
        $horario[1] = date('H:i', $duracion_turno); //duracion del turno 00:30
        $horario[2] = date('H:i', ($hora_inicio - $duracion_turno));
  
        array_push($horasDisponibles, $horario);
      }
    }
    echo "<br>";
    
      $horariosTurnos->inicio_horario_atencion = date('H:i', strtotime($horariosTurnos->inicio_horario_atencion));
      $horariosTurnos->fin_horario_atencion = date('H:i', strtotime($horariosTurnos->fin_horario_atencion));

      $hora_inicioTurno = date('G', strtotime($horariosTurnos->inicio_horario_atencion));
      $hora_finTurno = date('G', strtotime($horariosTurnos->fin_horario_atencion));
      $this->view->mostrarHorariosTurnosDisponibles($horasDisponibles, $horariosTurnos, $hora_inicioTurno, $hora_finTurno, $nro_matricula, $fechaTurno);



  }

  
}

?>

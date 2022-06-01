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
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    //Obtengo el numero de matricula del doctor, obligatorio
    $nro_matricula = $params[0];

    //Si mandan una fecha con el siguiente formado URL/Nro_Matricula/Mes/Anio
    //La convierto para utilizarla en la query, de lo contrario se asigna la fecha de hoy
    //Como fecha para busqueda de turnos
    if (isset($params[1]) && isset($params[2])) {
      $mes = $params[1];     
      $anio = $params[2];
      $fechaArmada = $anio."-".$mes;
      $fechaArmada = date('Y-m-01', strtoTime($fechaArmada));
    } else {
      $fechaArmada = date('Y-m-d');;
    }
    
    //Obtengo la fecha de hoy para realizar la comparacion
    $fechaHoy = date('Y-m-d');
    
    //Si la fecha que mandan url es anterior a la fecha actual, la reemplazo con la actual
    if ($fechaArmada < $fechaHoy) {
      $fechaArmada = $fechaHoy;
    }

    //Fecha limite = fin de mes de la fecha inicial
    $fechaArmadaFinMes = date('Y-m-t', strtotime($fechaArmada));

    $mesFecha = date('n', strtotime($fechaArmada));
    
    //Query y push a un array de los dias en los que hay al menos 1 turno disponible
    $turnosMedico = $this->model->getTurnosMedico($nro_matricula, $fechaArmada, $fechaArmadaFinMes);
    $diasDisponibles = array();
    foreach ($turnosMedico as $turno) {
      if (is_null($turno->id_paciente)) {
        $day = date('j', strtotime($turno->horario_turno));
        if (!in_array($day, $diasDisponibles))
          array_push($diasDisponibles, $day);
      }
    }
    
    $mesesDelAnio = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo',
                          6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre',
                          11 => 'Noviembre', 12 => 'Diciembre');

    //Datos mes: Que dia cae el 1 (valor del 1 al 7) y cuantos dias tiene el mes
    $datosMes = array();
    $diaInicioMes = date('N', strtotime(date('Y-m', strtotime($fechaArmada))));
    $cantDiasMes = date('t', strtotime($fechaArmada));
    array_push($datosMes, $diaInicioMes, $cantDiasMes);
    
    $this->view->mostrarCalendarioTurnosDisponibles($nro_matricula, $diasDisponibles, $mesesDelAnio, 
      $mesFecha, $datosMes);
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

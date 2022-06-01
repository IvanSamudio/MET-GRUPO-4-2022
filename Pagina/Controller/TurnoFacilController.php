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

  
}

?>

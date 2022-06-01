<?php

require_once('libs/Smarty.class.php');

class TurnoFacilView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->assign('basehref', BASE_URL);
  }

  function Mostrar($Titulo){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->display('templates/Home.tpl');
  }

  function mostrarCalendarioTurnosDisponibles($diasDisponibles) {
    $this->Smarty->assign('turnos', $diasDisponibles);
    $this->Smarty->display('templates/CalendarioTurnos.tpl');
  }

  function mostrarHorariosTurnosDisponibles($horasDisponibles, $horariosTurnos, $hora_inicioTurno, $fin_HTurno, $matricula_med, $fechaTurno) {
    $this->Smarty->assign('horas', $horasDisponibles);
    $this->Smarty->assign('horarioAtencion', $horariosTurnos);
    $this->Smarty->assign('inicio_horarioAtencion', $hora_inicioTurno);
    $this->Smarty->assign('fin_horarioAtencion', $fin_HTurno);
    $this->Smarty->assign('matricula_med', $matricula_med);
    $this->Smarty->assign('fecha', $fechaTurno);
    $this->Smarty->display('templates/HorariosTurnos.tpl'); 
  }
  
}
  ?>
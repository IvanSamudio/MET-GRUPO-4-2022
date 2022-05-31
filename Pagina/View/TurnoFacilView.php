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
  
}
  ?>
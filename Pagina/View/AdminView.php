<?php

require_once('libs/Smarty.class.php');

class AdminView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->assign('basehref', BASE_URL);
  }

  function mostrarFormMedico($obrasSociales){ 
    $this->Smarty->assign('tittle','Cargar medico');
    $this->Smarty->assign('obrasSociales',$obrasSociales);
    $this->Smarty->display('templates/agregarMedico.tpl');
  }

  function mostrarFormSecretaria($Titulo) {
    $this->Smarty->assign('Titulo', $Titulo);
    $this->Smarty->display('templates/agregarSecretaria.tpl');
  }

  function mostrarPersonal($Titulo,$secretarias,$medicos){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('secretarias',$secretarias);
    $this->Smarty->assign('medicos',$medicos);
    $this->Smarty->display('templates/personal.tpl');
  }

  function mostrarAsiganadorMedicos($Titulo,$secretarias,$medicos){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('secretarias',$secretarias);
    $this->Smarty->assign('medicos',$medicos);
    $this->Smarty->display('templates/asignarMedicos.tpl');
  }

  function mostrarSecretaria($Titulo,$secretaria){ 
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('secretaria',$secretaria);
    $this->Smarty->display('templates/secretariaHome.tpl');
  }

  function mostrarMedico($Titulo,$medico){ 
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('medico',$medico);
    $this->Smarty->display('templates/medicoHome.tpl');
  }
  
  
}
  ?>
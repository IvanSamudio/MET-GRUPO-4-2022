<?php

require_once('libs/Smarty.class.php');

class LoginView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->assign('basehref', BASE_URL);
  }

  function mostrarLogin($Titulo,$Mensaje){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('mensaje',$Mensaje);
    $this->Smarty->display('templates/login.tpl');
  }

  

}


<?php
require_once('libs/Smarty.class.php');
class MedicoView{

    private $Smarty;

    function __construct(){
      $this->Smarty = new Smarty();
      $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
      $this->Smarty->assign('basehref', BASE_URL);
    }
  
    function mostrar($medicos){ 
      $this->Smarty->assign('title', 'Medicos');
      $this->Smarty->assign('medicos', $medicos);
      $this->Smarty->display('templates/personal.tpl');
    }

    function editMedicos(){

    }


    
}
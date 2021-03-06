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

  public function showFiltrado($obrasSociales, $especialidades)
    {
        $this->Smarty->assign('obraSociales', $obrasSociales);
        $this->Smarty->assign('especialidades', $especialidades);
        $this->Smarty->assign('title', 'ELIGE CON LIBERTAD LO MEJOR PARA TU SALUD');
        $this->Smarty->assign('Titulo', 'Turno facil');
        $this->Smarty->display('Templates/FiltradoPrincipal.tpl');
    }

    public function medicosFiltrados($tabla){
        $this->Smarty->assign('Titulo', 'Medicos Turnofacil');
        $this->Smarty->assign('medicos', $tabla);
        $this->Smarty->assign('titulo', 'Turno Facil');
        $this->Smarty->display('Templates/listadoDeMedicosFiltrado.tpl');
    }

}
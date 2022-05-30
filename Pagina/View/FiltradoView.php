<?php

require_once('libs/Smarty.class.php');

class FiltradoView
{

    private $Smarty;

    public function __construct()
    {
        $this->Smarty = new Smarty();
        $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    }

    public function showFiltrado($obrasSociales, $especialidades)
    {
        $this->Smarty->assign('obraSociales', $obrasSociales);
        $this->Smarty->assign('especialidades', $especialidades);
        $this->Smarty->assign('title', 'Elegi tu con libertad lo mejor para tu salud');
        $this->Smarty->assign('Titulo', 'Turno facil');
        $this->Smarty->display('Templates/FiltradoPrincipal.tpl');
    }

    

}

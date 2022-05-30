<?php

require_once "libs/smarty-3.1.39/libs/Smarty.class.php";

class writerView
{

    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        $this->smarty->assign('BASE_URL', BASE_URL);

    }

    public function showFiltrado($obrasSociales, $especialidades)
    {
        $this->smarty->assign('obraSociales', $obrasSociales);
        $this->smarty->assign('especialidades', $especialidades);
        $this->smarty->assign('title', 'Elegi tu con libertad lo mejor para tu salud');
        $this->smarty->display('templates/FiltradoPrincipal.tpl');
    }

    

}

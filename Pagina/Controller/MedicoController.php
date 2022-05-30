<?php

require_once("../Model/MedicoModel.php");
require_once("../View/MedicoView.php");
require_once("../View/FiltradoView.php");

class MedicoController{

    private $model;
    private $view;
    private $FiltradoView;

    function __construct(){
        $this->view = new MedicoView;
        $this->model = new MedicoModel;
        $this->FiltradoView = new FiltradoView;

    }

    function showHomeLocation(){
        //$this->view->showHomeLocation();
    }

    function mostrarMedicos(){
        $medicos = $this->model->GetMedicos();
        var_dump($medicos);
        
    }

    function mostrarMedicosPorEspecialidad($especialidad){
        $this->model->GetMedicosPorEspecialidad($especialidad);
    }

    function mostrarMedicosPorObraSocial($obraSocial){
        $this->model->GetMedicosPorEspecialidad($obraSocial);
    }

    function mostrarMedicosPorEspecialidadYObra($especialidad, $obraSocial){
        $this->model->GetMedicosPorEspecialidadYObra($especialidad, $obraSocial);
    }

    function mostrarTodasEspecialidadesyObra()
    {
        $obraSociales = $this->model-> getAllObraSociales();
        $especialidades = $this->model->getAllEspecialidades();
        
        var_dump($especialidades);
        if (isset($obraSociales) && isset($especialidades)){
            $this->FiltradoView->showFiltrado($obraSociales,$especialidades);
        }
            
    }

  
    

}
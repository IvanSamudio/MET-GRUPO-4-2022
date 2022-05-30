<?php

require_once("../Model/MedicoModel.php");
require_once("../View/MedicoView.php");

class MedicoController{

    private $model;
    private $view;

    function __construct(){
        $this->view = new MedicoView;
        $this->model = new MedicoModel;
    }

    function showHomeLocation(){
        //$this->view->showHomeLocation();
    }

    function mostrarMedicos(){
        $this->model->GetMedicos();
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

    

}
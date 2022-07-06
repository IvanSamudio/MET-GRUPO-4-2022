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
        
        if (isset($obraSociales) && isset($especialidades)){
            $this->view->showFiltrado($obraSociales,$especialidades);
        }
            
    }

    function filtroMedico(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $especialidad = $_POST['especialidad'];
            $obraSocial = $_POST['obra_social'];
            if(isset($especialidad) && ($especialidad != "all") && ($obraSocial != "all") && isset($obraSocial)){
                $tabla = $this->model->GetMedicosPorEspecialidadYObra($especialidad, $obraSocial);
                $this->view->medicosFiltrados($tabla);
            }
            elseif(isset($especialidad) && ($especialidad != "all")){
                $tabla = $this->model->GetMedicosPorEspecialidad($especialidad);
                $this->view->medicosFiltrados($tabla);
            }
            elseif(isset($obraSocial) && ($obraSocial != "all")){
                $tabla = $this->model->GetMedicosPorObraSocial($obraSocial);
                $this->view->medicosFiltrados($tabla);
            }
            else{
                $tabla = $this->model->GetMedicos();
                $this->view->medicosFiltrados($tabla);
            }
        }
    }
    

}
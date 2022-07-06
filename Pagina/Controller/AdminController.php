<?php
require_once "../View/AdminView.php";
require_once "../Model/AdminModel.php";



class AdminController{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
    $this->view = new AdminView();
    $this->Titulo = "Turno Facil";
    $this->model = new AdminModel();
  }

  function mostrarAsignadorMedicos(){
    $medicos = $this->model->GetMedicos();
    $secretarias = $this->model->GetSecretarias();
    $this->view->mostrarAsiganadorMedicos($this->Titulo,$secretarias,$medicos);
  }

  function AsignarMedico(){
    $datos = explode(",", $_POST["medicoSeleccionado"]);
    $id_secretaria=$datos[1];
    $nro_matricula=$datos[0];
    $this->model->AsignarSecretaria($id_secretaria,$nro_matricula);
    $this->mostrarAsignadorMedicos();
  }

  function mostrarPersonal(){
    $secretarias = $this->model->GetSecretarias();
    $medicos = $this->model->GetMedicos();
    $this->view->mostrarPersonal($this->Titulo,$secretarias,$medicos);
  }

  function mostrarFormSecretaria(){
    $this->view->mostrarFormSecretaria($this->Titulo);
  }

  function cargarSecretaria(){
    $nombreUsuario = $_POST["nombreUsuario"];
    $contrasenia = password_hash($_POST["contrasenia"],PASSWORD_DEFAULT);
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $dni = $_POST["dni"];
    $this->model->InsertSecretaria($nombreUsuario,$contrasenia,$nombre,$apellido,$dni);
    $this->mostrarFormSecretaria();
  }

  function mostrarFormMedico(){
    $obrasSociales = $this->model->GetObrasSociales();
    $this->view->mostrarFormMedico($obrasSociales);
  }

  function cargarMedico(){
    $contrasenia = password_hash($_POST["contrasenia"],PASSWORD_DEFAULT);
    $nroMatricula = $_POST["nroMatricula"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $obraSocial = $_POST["obraSocial"];
    $dni = $_POST["dni"];
    $especialidad = $_POST["especialidad"];
    $telefono = $_POST["telefono"];
    $nombreUsuario = $_POST["nombreUsuario"];
    $this->model->InsertMedico($contrasenia,$nroMatricula,$nombre,$apellido,$obraSocial,$dni,$especialidad,$telefono,$nombreUsuario);
    $this->mostrarFormMedico();
  }

  function mostrarSecretaria(){
    session_start();
    $id_secretaria = $_SESSION["id"];
    $secretaria = $this->model->GetSecretaria($id_secretaria);
    $this->view->mostrarSecretaria($this->Titulo,$secretaria);
  }

  function mostrarMedico(){
    session_start();
    $nro_matricula = $_SESSION["id"];
    $medico = $this->model->getMedico($nro_matricula);
    $this->view->mostrarMedico($this->Titulo,$medico);
  }

  function mostrarMedicos(){
        $medicos = $this->model->getAllObraSociales();
        $this->MedicoView->mostrar($medicos);
        // var_dump($medicos);
    }

}

?>



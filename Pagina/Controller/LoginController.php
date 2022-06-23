<?php

require_once  "../View/TurnoFacilView.php";
require_once  "../Model/TurnoFacilModel.php";


class LoginController
{
  private $view;
  private $model;
  private $Titulo;

  function __construct()
  {
    $this->view = new TurnoFacilView();
    $this->model = new TurnoFacilModel();
    $this->Titulo = "Turno Facil";
  }

  function mostrarLogin(){
    $this->view->mostrarLogin($this->Titulo,"");
  }

  function logOut(){
    session_start();
    session_destroy();
    $this->mostrarLogin();
  }

  function verificarLogin(){
      $nombreUsuario = $_POST["nombreUsuario"];
      $contrasenia = $_POST["contrasenia"];
      $dbUser = $this->model->getUser($nombreUsuario);
      if($dbUser!= false){
        if (password_verify($contrasenia, $dbUser->contrasenia)){
            session_start();
            $_SESSION["nombreUsuario"] = $dbUser->nombreUsuario;
            $_SESSION["id"]= $dbUser->id;
            if($dbUser->tipoUser == "secretaria"){
              header(SECRETARIA);
            }else if($dbUser->tipoUser == "medico"){
              header(MEDICO);
            }
            
        }else{
          $this->view->mostrarLogin($this->Titulo,"Contraseña incorrecta");

        }
    }else if($nombreUsuario == "ADMIN" && $contrasenia=="ADMIN"){
      header(ADMIN);
    }else if($nombreUsuario == "PACIENTE" && $contrasenia=="PACIENTE"){
      header(PACIENTE);
    }else{
      $this->view->mostrarLogin($this->Titulo,"El usuario no existe");
    }
  }

}

 ?>
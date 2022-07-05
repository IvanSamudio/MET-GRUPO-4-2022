<?php
require_once "../View/TurnoFacilView.php";
require_once "../Model/TurnoFacilModel.php";



class TurnoFacilController{
  private $view;
  private $model;
  private $Titulo;

  function __construct(){
    $this->view = new TurnoFacilView();
    $this->Titulo = "Turno Facil";
    $this->model = new TurnoFacilModel();
  }

  function home(){
    //$Turnos = $this->model->GetTurnos();
    $this->view->mostrar($this->Titulo);
  }

  function getTurnosMedico($params) {
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    //Obtengo el numero de matricula del doctor, obligatorio
    $nro_matricula = $params[0];

    //Si mandan una fecha con el siguiente formado URL/Nro_Matricula/Mes/Anio
    //La convierto para utilizarla en la query, de lo contrario se asigna la fecha de hoy
    //Como fecha para busqueda de turnos
    if (isset($params[1]) && isset($params[2])) {
      $mes = $params[1];     
      $anio = $params[2];
      $fechaArmada = $anio."-".$mes;
      $fechaArmada = date('Y-m-01', strtoTime($fechaArmada));
    } else {
      $fechaArmada = date('Y-m-d');;
    }
    
    //Obtengo la fecha de hoy para realizar la comparacion
    $fechaHoy = date('Y-m-d');
    
    //Si la fecha que mandan url es anterior a la fecha actual, la reemplazo con la actual
    if ($fechaArmada < $fechaHoy) {
      $fechaArmada = $fechaHoy;
    }

    //Fecha limite = fin de mes de la fecha inicial
    $fechaArmadaFinMes = date('Y-m-t', strtotime($fechaArmada));

    $mesFecha = date('n', strtotime($fechaArmada));
    
    //Query y push a un array de los dias en los que hay al menos 1 turno disponible
    $turnosMedico = $this->model->getTurnosMedico($nro_matricula, $fechaArmada, $fechaArmadaFinMes);
    $diasDisponibles = array();
    foreach ($turnosMedico as $turno) {
      if (is_null($turno->id_paciente)) {
        $day = date('j', strtotime($turno->horario_turno));
        if (!in_array($day, $diasDisponibles))
          array_push($diasDisponibles, $day);
      }
    }
    
    $mesesDelAnio = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo',
                          6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre',
                          11 => 'Noviembre', 12 => 'Diciembre');

    //Datos mes: Que dia cae el 1 (valor del 1 al 7), cuantos dias tiene el mes, anio
    $datosMes = array();
    $diaInicioMes = date('N', strtotime(date('Y-m', strtotime($fechaArmada))));
    $cantDiasMes = date('t', strtotime($fechaArmada));
    $anio = date('Y', strtotime($fechaArmada));
    array_push($datosMes, $diaInicioMes, $cantDiasMes, $anio);
    $medico = $this->model->getMedico($nro_matricula);
    $this->view->mostrarCalendarioTurnosDisponibles($nro_matricula, $diasDisponibles, $mesesDelAnio, 
    $mesFecha, $datosMes, $medico);
  }

  function getHorariosTurnoMedico($params){
    $nro_matricula = $params[0];
    $diaElegido = $params[1];
    $mesElegido = $params[2];
    /* $nro_matricula = 185337;
    $diaElegido = 31;
    $mesElegido = 05; */  //es para que ande a mano, tambien activar la url en ConfigApp, Lauta me llama pasando los datos desde su func

    $fechaTurno = "$diaElegido/$mesElegido";

    if (isset($_POST["hora-Filtro"]) && isset($_POST["minutos-Filtro"]))
    {
      $horaFiltrar = $_POST["hora-Filtro"];
      $minutosFiltrar = $_POST["minutos-Filtro"];
      $turnosMedico = $this->model->getTurnosMedicoDiaFiltrado($nro_matricula, $diaElegido, $mesElegido, $horaFiltrar, $minutosFiltrar);
    }
    else if (isset($_POST["maniana-tarde"]))
    {
      $horaDia = $_POST["maniana-tarde"];
      $maxHora = $horaDia + 6;
      $turnosMedico = $this->model->getTurnosMedicoDiaFiltradoHoraDia($nro_matricula, $diaElegido, $mesElegido, $horaDia, $maxHora);
    }
    else
      $turnosMedico = $this->model->getTurnosMedicoDia($nro_matricula, $diaElegido, $mesElegido);

    $horariosTurnos = $this->model->getHorariosMedico($nro_matricula);
    $horasDisponibles = array();
    
    foreach ($turnosMedico as $turno) {
      if (is_null($turno->id_paciente)) {
        $horario = array();
        $hora_inicio = strtotime($turno->horario_turno); //hora inicio
        $duracion_turno = strtotime($turno->duracion_turno); //hora inicio
        $horario[0] = date('H:i', $hora_inicio); //16:30
        $horario[1] = date('H:i', $duracion_turno); //duracion del turno 00:30
        $horario[2] = date('H:i', ($hora_inicio - $duracion_turno));
  
        array_push($horasDisponibles, $horario);
      }
    }
    
      $horariosTurnos->inicio_horario_atencion = date('H:i', strtotime($horariosTurnos->inicio_horario_atencion));
      $horariosTurnos->fin_horario_atencion = date('H:i', strtotime($horariosTurnos->fin_horario_atencion));

      $hora_inicioTurno = date('G', strtotime($horariosTurnos->inicio_horario_atencion));
      $hora_finTurno = date('G', strtotime($horariosTurnos->fin_horario_atencion));
      $medico = $this->model->getMedico($nro_matricula);
      $this->view->mostrarHorariosTurnosDisponibles($horasDisponibles, $horariosTurnos, $hora_inicioTurno, $hora_finTurno, $nro_matricula, $fechaTurno,$medico);



  }

  private function enviarEmail($nombre, $mail, $asunto, $mensaje){

    setlocale(LC_TIME, "spanish");
    $from = "turnoFacilOk@gmail.com";
    $to = $mail;
    $title = $asunto;
    
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: Turno Facil '.$from.''. "\r\n";

    // $this->load->library('email');
    $config = array(
          'mailtype'  => 'html',
          'charset' => 'utf-8',
          'protocol' => 'smtp',
          'smtp_host' => 'ssl://@gmail.com',
          'smtp_user' => 'turnoFacilOk@gmail.com',
          'smtp_pass' => 'turno123facil',
          'smtp_port' => '465',
          'newline' => "\r\n",

    );
    // $this->email->initialize($config);

    $result = mail($to,$title,$mensaje,$header);
    // $this->email->to($to);

    // $this->email->from($from, 'Turno Facil');

    // $this->email->subject($title);
    // $this->email->message($mensaje);
    // $result = $this->email->send();
    //var_dump($this->email->print_debugger());

    if($result)
        return true;
    else
        return false;
}

private function getBodyContent($title, $body,$header=NULL, $footer=NULL){

    $message =  '<html>
    <head>
      <title>' . $title . '</title>
    </head>
    <body style="background-color:#010440">
      <table width="100%" cellspacing="0" cellpadding="0" align="center">
      <tbody><tr >
      <td align="center" valign="top" >
        <table cellpadding="0" cellspacing="0" style="width:690; border:0 ; background-color:#FFFFFF; margin:auto" width="690">
          <tr><td>
          <img style="margin: auto; width: 90px;" src="'. $header .'">
          </td></tr>
          <tr><td><div style="text-align: right; margin: 10px; font-size:14px; font-family:arial">
              <p style="font-size: 12px">' . strftime("%d")  . ' de ' . strftime("%B") . ' de ' . strftime("%Y") . '</p>
          </div></td></tr>
          <tr><td style="font-size: 18px;padding:20px; font-family:arial">
            ' . $body. '
          </td></tr>
          <tr><td>
          //  <img style="margin: auto; width: 90px;" src="'. $footer .'">

          </td></tr>
          </table></td></tr>
        </table>
    </body>
    </html>';
  
    return  $message;

}

  function notificar_turno(){
    $title= 'Confirmacion de turno';
    $message = 'Tiene un nuevo turno';
    $mail = 'lblanco@alumnos.exa.unicen.edu.ar'; 
    
    '<h3>'.$title.'</h3>;
    <p>'.$texto.'</p>';

    
    $header = base_url().'TurnoFacil/images/logo-transparente.png'; 
    $message = getBodyContent($title, $message, $header);
    return enviarEmail($mail,$mail,$title,$message); 
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
    $this->model->InsertMedico($contrasenia,$nroMatricula,$nombre,$apellido,$obraSocial,$dni,$especialidad,$telefono);
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

  



}

?>

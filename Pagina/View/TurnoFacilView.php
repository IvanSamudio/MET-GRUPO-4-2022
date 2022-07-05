<?php

require_once('libs/Smarty.class.php');

class TurnoFacilView
{
  private $Smarty;

  function __construct(){
    $this->Smarty = new Smarty();
    $r = $this->Smarty->assign('root', "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]));
    $this->Smarty->assign('basehref', BASE_URL);
  }

  function mostrar($Titulo){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->display('templates/Home.tpl');
  }

  function mostrarCalendarioTurnosDisponibles($nro_matricula, $diasDisponibles, $mesesDelAnio, 
    $mesFecha, $datosMes,$medico) 
  {
    $this->Smarty->assign('Titulo', "Calendario Turnos");
    $this->Smarty->assign('nro_matricula', $nro_matricula);
    $this->Smarty->assign('dia_inicio_mes', $datosMes[0]);
    $this->Smarty->assign('cant_dias_mes', $datosMes[1]);
    $this->Smarty->assign('anio', $datosMes[2]);
    $this->Smarty->assign('mes', $mesFecha);
    $this->Smarty->assign('meses', $mesesDelAnio);
    $this->Smarty->assign('turnos', $diasDisponibles);
    $this->Smarty->assign('medico', $medico);
    $this->Smarty->display('templates/CalendarioTurnos.tpl');
  }

  function mostrarHorariosTurnosDisponibles($horasDisponibles, $horariosTurnos, $hora_inicioTurno, $fin_HTurno, $matricula_med, $fechaTurno, $medico) {
    $this->Smarty->assign('Titulo', "Turnos del Día");
    $this->Smarty->assign('horas', $horasDisponibles);
    $this->Smarty->assign('horarioAtencion', $horariosTurnos);
    $this->Smarty->assign('inicio_horarioAtencion', $hora_inicioTurno);
    $this->Smarty->assign('fin_horarioAtencion', $fin_HTurno);
    $this->Smarty->assign('matricula_med', $matricula_med);
    $this->Smarty->assign('fecha', $fechaTurno);
    $this->Smarty->assign('medico', $medico);
    $this->Smarty->display('templates/HorariosTurnos.tpl'); 
  }

  function mostrarAsiganadorMedicos($Titulo,$secretarias,$medicos){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('secretarias',$secretarias);
    $this->Smarty->assign('medicos',$medicos);
    $this->Smarty->display('templates/asignarMedicos.tpl');
  }

  function mostrarPersonal($Titulo,$secretarias,$medicos){ //  DEJE ESTE COMO EJEMPLO POR SI NO RECUERDAN COMO ES
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('secretarias',$secretarias);
    $this->Smarty->assign('medicos',$medicos);
    $this->Smarty->display('templates/personal.tpl');
  }

  function mostrarFormMedico($obrasSociales){ 
    $this->Smarty->assign('tittle','Cargar medico');
    $this->Smarty->assign('obrasSociales',$obrasSociales);
    $this->Smarty->display('templates/agregarMedico.tpl');
  }

  function mostrarLogin($Titulo,$Mensaje){
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('mensaje',$Mensaje);
    $this->Smarty->display('templates/login.tpl');
  }

  function mostrarSecretaria($Titulo,$secretaria){ 
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('secretaria',$secretaria);
    $this->Smarty->display('templates/secretariaHome.tpl');
  }

  function mostrarMedico($Titulo,$medico){ 
    $this->Smarty->assign('Titulo',$Titulo);
    $this->Smarty->assign('medico',$medico);
    $this->Smarty->display('templates/medicoHome.tpl');
  }

  
  
}
  ?>
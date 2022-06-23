<?php

define('ADMIN', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/mostrarPersonal');
define('SECRETARIA', 'Location: http://'.$_SERVER["SERVER_NAME"] . ':'.$_SERVER['SERVER_PORT'] . dirname($_SERVER["PHP_SELF"]). '/mostrarSecretaria');

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        '' => 'LoginController#mostrarLogin',
        'home'=> 'TurnoFacilController#Home',
        'MostrarTurnos' => 'TurnoFacilController#getTurnosMedico',
        'filtrar_medicos'=> 'MedicoController#mostrarTodasEspecialidadesyObra',
        'medicosConObra' => 'MedicoController#filtroMedico',
        'filtroTurnos'=> 'TurnoFacilController#getHorariosTurnoMedico',
        'notificar'=> 'TurnoFacilController#notificar_turno',
        'asignadorMedicos'=> 'TurnoFacilController#mostrarAsignadorMedicos',
        'asignarMedico'=> 'TurnoFacilController#AsignarMedico',
        'mostrarPersonal'=> 'TurnoFacilController#mostrarPersonal',
        'agregarSecretaria'=> 'TurnoFacilController#mostrarFormSecretaria',
        'cargarSecretaria'=> 'TurnoFacilController#cargarSecretaria',
        'agregarMedico'=> 'TurnoFacilController#mostrarFormMedico',
        'cargarMedico'=> 'TurnoFacilController#cargarMedico',
        'verificarLogin' => 'LoginController#verificarLogin',
        'logOut' => 'LoginController#logOut',
        'mostrarSecretaria'=> 'TurnoFacilController#mostrarSecretaria',

    ];

}
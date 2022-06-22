<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=> 'TurnoFacilController#Home',
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

    ];

}
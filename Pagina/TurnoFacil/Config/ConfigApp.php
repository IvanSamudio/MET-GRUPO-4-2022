<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=> 'TurnoFacilController#Home',
        'MostrarTurnos' => 'TurnoFacilController#getTurnosMedico',
        'filtrar_medicos'=> 'MedicoController#mostrarTodasEspecialidadesyObra',
        'HorariosTurnos'=> 'TurnoFacilController#getHorariosTurnoMedico',
        'filtroTurnos'=> 'TurnoFacilController#getHorariosTurnoMedico',
    ];

}
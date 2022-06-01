<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=> 'TurnoFacilController#Home',
        'MostrarTurnos' => 'TurnoFacilController#getTurnosMedico',
        'filtrar_medicos'=> 'MedicoController#mostrarTodasEspecialidadesyObra',
        //'HorariosTurnos'=> 'TurnoFacilController#getHorariosTurnoMedico', se usaba en las pruebas, ahora me llama la func de lauta
        'filtroTurnos'=> 'TurnoFacilController#getHorariosTurnoMedico',
    ];

}
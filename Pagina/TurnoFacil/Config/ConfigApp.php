<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=> 'TurnoFacilController#Home',
        'sacar_turno'=> 'MedicoController#mostrarTodasEspecialidadesyObra',
    ];

}
<?php

class ConfigApp
{
    public static $ACTION = 'action';
    public static $PARAMS = 'params';
    public static $ACTIONS = [
        ''=> 'TurnoFacilController#Home',
        'filtrar_medicos'=> 'MedicoController#mostrarTodasEspecialidadesyObra',
        'filtro_medicos' => 'MedicoController#filtroMedico',
    ];

}
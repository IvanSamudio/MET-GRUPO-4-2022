{include file="Header.tpl"}
{include file="navBar.tpl"}
<div class="container-calendario">
<h1>{$medico->medico_nombre} {$medico->medico_apellido}</h1>
    {foreach from=$meses item=nombreMes key=nroMes}
        {if $mes eq $nroMes}
        <div class="nombre-mes-navegacion">
            <p>{$nombreMes}</p>
            {if $mes == 12}
                <a href="{$basehref}MostrarTurnos/{$nro_matricula}/{$mes-11}/{$anio+1}"> -> </a>
            {else}
                <a href="{$basehref}MostrarTurnos/{$nro_matricula}/{$mes+1}/{$anio}"> -> </a>
            {/if}
        </div>
        {/if}
    {/foreach}
    <ul class="calendario">
        <li class="dia-semana">Lun</li>
        <li class="dia-semana">Mar</li>
        <li class="dia-semana">Mie</li>
        <li class="dia-semana">Jue</li>
        <li class="dia-semana">Vie</li>
        <li class="dia-semana">Sab</li>
        <li class="dia-semana">Dom</li>
        {for $offsetDia=1 to $dia_inicio_mes-1}
            <li class="dia-vacio"> </li>
        {/for}
        {for $dia=1 to $cant_dias_mes}
            {if $dia|in_array:$turnos}
                <li class="hay-turno"><a href="{$basehref}filtroTurnos/{$nro_matricula}/{$dia}/{$mes}">
                {$dia}</a></li>
            {else}
                <li class="no-hay-turno">{$dia}</li>
            {/if}
        {/for}
    </ul>
</div>
{include file="Footer.tpl"}

    
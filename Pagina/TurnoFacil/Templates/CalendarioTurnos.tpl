{include file="Header.tpl"}
<div class="containerCalendario">
    {foreach from=$meses item=nombreMes key=nroMes}
        {if $mes eq $nroMes}
        <div class="nombreMesCalendario">
            <p>{$nombreMes}</p>
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
            <li class="diaVacio"> </li>
        {/for}
        {for $dia=1 to $cant_dias_mes}
            {if $dia|in_array:$turnos}
                <li class="hayTurno"><a href="{$basehref}HorariosTurno/{$nro_matricula}/{$dia}/{$mes}">
                {$dia}</a></li>
            {else}
                <li class="noHayTurno">{$dia}</li>
            {/if}
        {/for}
    </ul>
</div>
{include file="Footer.tpl"}

    
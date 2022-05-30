{include file="Header.tpl"}
<ul>
    {foreach from=$turnos item=$turno}
        {if $turno->id_paciente eq ""}
            <li style="color:green">{$turno->horario_turno},{$turno->duracion_turno}</li>
            {$turno->horario_turno->}
        {else}            
            <li style="color:red">{$turno->horario_turno},{$turno->duracion_turno}</li>                   
        {/if}
    {/foreach}
</ul>

<div class="containerCalendario">
    <ul class="calendario">
        <li>Lun</li>
        <li>Mar</li>
        <li>Mier</li>
        <li>Jue</li>
        <li>Vie</li>
        <li>Sab</li>
        <li>Dom</li>
        {for $day=1 to 31}
            <li>{$day}</li>
        {/for}
    </ul>
</div>
{include file="Footer.tpl"}

    
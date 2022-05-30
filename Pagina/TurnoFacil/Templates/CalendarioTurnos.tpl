{include file="Header.tpl"}
<ul>
    {foreach from=$turnos item=$turno}
        {if $turno->id_paciente eq ""}
            <li style="color:green">{$turno->horario_turno},{$turno->duracion_turno}</li>
        {else}            
            <li style="color:red">{$turno->horario_turno},{$turno->duracion_turno}</li>                   
        {/if}

    {/foreach}
</ul>

<ul class="calendar">
    {for $day=1 to 31}
        <li>{$day}</li>
    {/for}
</ul>
{include file="Footer.tpl"}

    
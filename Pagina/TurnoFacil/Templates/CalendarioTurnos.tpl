{include file="Header.tpl"}
<div class="containerCalendario">
    <ul class="calendario">
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        {for $day=1 to 31}
            {foreach from=$turnos item=$turno}
                {if $turno eq $day}
                    <li class="hayTurno">{$day}</li>
                {else}
                    <li class="noHayTurno">{$day}</li>                
                {/if}            
            {/foreach}
        {/for}
    </ul>
</div>
{include file="Footer.tpl"}

    
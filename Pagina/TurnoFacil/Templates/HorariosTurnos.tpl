{include file="Header.tpl"}
<div class="containerHorarios">
    <ul class="horarios">
        <h1>Horarios disponibles del dia : </h1>
        {foreach from=$horas item=$hora_arreglo}
            <h4> Turno Nº{$hora_arreglo@iteration}: </h4>
            <p>Hora inicio: {$hora_arreglo[0]} Hora fin: {$hora_arreglo[2]} | Duracion Turno: {$hora_arreglo[1]}</p>
        {/foreach}
    </ul>
</div>
{include file="Footer.tpl"}
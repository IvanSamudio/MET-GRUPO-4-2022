{include file="Header.tpl"}
<div class="containerHorarios">
    <ul class="horarios">
        <h1>Horarios disponibles del dia {$fecha}: </h1>
        <h3>Hora inicio ATENCION: {$horarioAtencion->inicio_horario_atencion}HS - Hora fin ATENCION: {$horarioAtencion->fin_horario_atencion}HS</h3>
        {foreach from=$horas item=$hora_arreglo}
            <h5> Turno Nº{$hora_arreglo@iteration}: </h5>
            <p>Hora inicio: {$hora_arreglo[0]} Hora fin: {$hora_arreglo[2]} | Duracion Turno: {$hora_arreglo[1]}</p>
        {/foreach}
    </ul>

    <div class="contenedor-filtro">
        <form class="filtro" action="filtroTurnos" method="POST">
        <label for="1">Selecione a partir de que horario desea encontrar turnos</label>
        <select name="hora-Filtro" id="1">
            {for $hora=$inicio_horarioAtencion to $fin_horarioAtencion}
                <option value={$hora}>{$hora}</option>
            {/for}
        </select>
        <p id="separador">:</p>
        <select name="minutos-Filtro">
            <option name="minutosFiltro" value="00">00</option>
            <option name="minutosFiltro" value="30">30</option>
        </select>
        
        <button id="btn-filtro">Filtrar Turnos</button>
        </form>
    </div>

    <div class="contenedor-filtro">
        <form class="filtro" action="filtroTurnos" method="POST">
        <label for="1">Selecione si desea buscar turnos de mañana (6AM-12AM) o tarde (12AM-6PM)</label>

        <select name="maniana-tarde">
            <option name="minutosFiltro" value="06">Mañana</option>
            <option name="minutosFiltro" value="12">Tarde</option>
        </select>
        
        <button id="btn-filtro">Filtrar Turnos</button>
        </form>
    </div>
</div>
{include file="Footer.tpl"}
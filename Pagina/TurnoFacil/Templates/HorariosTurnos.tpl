{include file="Header.tpl"}

<div class="container">
    <ul class="horarios">
        <h1>Horarios disponibles del dia {$fecha}: </h1>
        <h3>Hora inicio ATENCION: {$horarioAtencion->inicio_horario_atencion}HS - Hora fin ATENCION: {$horarioAtencion->fin_horario_atencion}HS</h3>
        {foreach from=$horas item=$hora_arreglo}
            
            <h5> Turno Nº{$hora_arreglo@iteration}: </h5>
            <div class="flex-turno"> 
                <div>
                    <p>Hora inicio: {$hora_arreglo[0]} Hora fin: {$hora_arreglo[2]} | Duracion Turno: {$hora_arreglo[1]}</p>
                </div>
                <div class="ms-3"><button data-toggle="modal" data-target="#modalMail" href= "">Sacar turno</button></div>
            </div>

            <div class="modal fade" id="modalMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">CONFIRMACION DEL TURNO</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form accept-charset="utf-8" id="modal-turno" action="notificar" method="post" >
                            <div class="modal-body">
                                
                                <div class="form-group">
                                    <p class="col-form-label">El día {$fecha} a las {$hora_arreglo[0]} ha sacado turno con el/la Dr. {$medico->medico_nombre} {$medico->medico_apellido}  </p>
                                </div>
                                <div class="form-group">
                                    <a class="col-form-label" href=" ">Editar datos personales</a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button  type="submit" class="btn btn-primary" data-dismiss="modal" >Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        {/foreach}
    </ul>

    

    <div class="contenedor-filtro">
        <form class="filtro" action="filtroTurnos/{$matricula_med}/{$fecha}" method="POST">
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
        <form class="filtro" action="filtroTurnos/{$matricula_med}/{$fecha}" method="POST">
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
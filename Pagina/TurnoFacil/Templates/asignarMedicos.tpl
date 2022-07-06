{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container-asignarMedico">
    {include file="subNavAdmin.tpl"}
    
     {foreach from=$secretarias item=secretaria}
        <div>
            <p class="p-3 mb-2 bg-secondary text-white" style="--bs-bg-opacity: .7;">Medicos asignados de <span style="font-weight: 1000;">{$secretaria->secretaria_nombre}</span>:</p>
            <ul class="list-group">
                {foreach from=$medicos item=medico}
                {if $medico->id_secretaria eq $secretaria->id_secretaria}
                    <li class="list-group-item">{$medico->medico_nombre}</li>
                {/if}
                {/foreach}
            </ul>
            <p class="p-3 mb-2 bg-secondary text-white" style="--bs-bg-opacity: .5;">Medicos disponibles para asignar: </p>
            <form class="row g-3" method="post" action="asignarMedico">
            <div class="col-auto">
            <select class="opciones" name="medicoSeleccionado">
            {foreach from=$medicos item=medico}
                        {if $medico->id_secretaria eq null}
                            <option value="{$medico->nro_matricula},{$secretaria->id_secretaria}">{$medico->medico_nombre} {$medico->medico_apellido}</option>
                        {/if}
            {/foreach}          
            </select>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Asignar Profesional</button>
            </div>
            </form>
        </div>
    {/foreach} 
</main>
{include file="Footer.tpl"}
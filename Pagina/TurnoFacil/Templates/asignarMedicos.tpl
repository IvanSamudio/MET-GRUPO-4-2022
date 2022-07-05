{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container">
    {include file="subNavAdmin.tpl"}
    {foreach from=$secretarias item=secretaria}

        <p>Medicos asignados de: {$secretaria->secretaria_nombre}</p>
        <ul>
            {foreach from=$medicos item=medico}
            {if $medico->id_secretaria eq $secretaria->id_secretaria}
                <li>{$medico->medico_nombre}</li>
            {/if}
            {/foreach}
        </ul>
        <h1> Medicos disponibles para asignar</h1>
        <select name="medicoSeleccionado">
        {foreach from=$medicos item=medico}
            {if $medico->id_secretaria eq null}
                <option value="{$medico->nro_matricula},{$secretaria->id_secretaria}">{$medico->medico_nombre}</option>
            {/if}
        {/foreach}
        </select> 
    {/foreach}
</main>
{include file="Footer.tpl"}
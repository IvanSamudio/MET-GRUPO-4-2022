{include file="Header.tpl"}

<div class="tabla">
<table class="table table-striped table-hover">
    <thead>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Especialidad</th>
        <th scope="col">Obra Social</th>
        <th scope="col"></th>
    </thead>
    <tbody>
        {foreach from=$medicos item=$medico}
            <tr>
                <td>{$medico->medico_nombre}</td>
                <td>{$medico->medico_apellido}</td>
                <td>{$medico->especialidad}</td>
                <td>{$medico->nombre_obra_social}</td>
                <td><button><a href="{$basehref}/MostrarTurnos/{$medico->nro_matricula}">Sacar Turno</a></button></td>
            </tr>
        {/foreach}
    </tbody>
</table>

<input class="btn btn-warning m-2" type="submit" value="Buscar Medicos">
</div>
{include file="Footer.tpl"}
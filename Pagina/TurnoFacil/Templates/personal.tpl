{include file="Header.tpl"}
{include file="navBar.tpl"}


<main class="container">
    <h1>{$Titulo}</h1>
    {include file="subNavAdmin.tpl"}
    <table id="tabla-secretaria">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Telefono</th>
                <th>Medicos Asignados</th>
            </tr>            
        </thead>
        <tbody>
            {foreach from=$secretarias item=$secretaria}
                <tr>
                    <td>{$secretaria->secretaria_nombre}</td>
                    <td>{$secretaria->secretaria_apellido}</td>
                    <td>{$secretaria->secretaria_dni}</td>
                    <td>{$secretaria->secretaria_dni}</td>
                    <td>{$secretaria->secretaria_dni}</td>
                    <td><a href="editarSecretaria/{$id_secretaria}">Editar</a></td>
                    <td><a href="borrarSecretaria/{$id_secretaria}">Borrar</a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
    <button id="btn-agregar-secretaria" href="agregarSecretaria">Agregar</button>
</main>
{include file="Footer.tpl"}
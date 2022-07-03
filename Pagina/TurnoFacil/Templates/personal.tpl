{include file="Header.tpl"}
{include file="navBar.tpl"}


<main class="container">
    <h1>{$Titulo}</h1>
    {include file="subNavAdmin.tpl"}
    <table class="tabla-secretaria">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Telefono</th>
                <th>Medicos Asignados</th>
                <th>Editar</th>
                <th>Borrar</th>
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
                    <td><a><img class="boton-tabla-secretaria" src="../TurnoFacil/images/boton-editar.png"></a></td>
                    <td><a><img class="boton-tabla-secretaria" src="../TurnoFacil/images/boton-borrar.png"></a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
    <a class="btn-agregar-secretaria" href="agregarSecretaria">Agregar</a>
</main>
{include file="Footer.tpl"}
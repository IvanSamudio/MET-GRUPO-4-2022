{include file="Header.tpl"}
{include file="navBar.tpl"}


<main class="container">
    <div class="container-tabla-secretaria">
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
        <div class="container-boton-agregar">
            <a class="btn btn-primary boton-cargar-secretaria" href="agregarSecretaria">AGREGAR</a>
        </div>
    </div>
</main>
{include file="Footer.tpl"}
{include file="Header.tpl"}
{include file="navBar.tpl"}


<main class="container">
    <div class="row">
    {include file="subNavAdmin.tpl"}

    <div id="doctores" class=" row" >
        <h1 class=" my-4" >Doctores</h1>
        <table id="tabla-medicos" class="table table-striped ">
        <thead >
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>DNI</th>
                <th>Matricula</th>
                <th>Especialidad</th>
                <th>Obras Sociales</th>
                <th>Editar / Eliminar</th>
            </tr>            
        </thead>
        <tbody>
            {foreach from=$medicos item=$medico}
                <tr>
                    <td>{$medico->medico_nombre}</td>
                    <td>{$medico->medico_apellido}</td>
                    <td>{$medico->medico_telefono}</td>
                    <td>{$medico->medico_dni}</td>
                    <td>{$medico->nro_matricula}</td>
                    <td>{$medico->especialidad}</td>
                    <td>{$medico->nombre_obra_social}</td>
                    <td>
                        <a ><img style="width: 35px; height: 35px;" class="boton-tabla-secretaria mx-2" src="../TurnoFacil/images/boton-editar.png"></a>
                        <a><img style="width: 35px; height: 35px;" class="boton-tabla-secretaria" src="../TurnoFacil/images/boton-borrar.png"></a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
        </table>
        <div class="container-boton-agregar">
            <a href="agregarMedico" class="btn btn-primary boton-cargar-secretaria">Agregar</a>
        </div>
       
    
            <h1 id="secretarias" class=" my-4">Secretarias</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>DNI</th>
                        <th>Medicos Asignados</th>
                        <th>Editar / Eliminar</th>
                    </tr>            
                </thead>
                <tbody>
                    {foreach from=$secretarias item=$secretaria}
                        <tr>
                            <td>{$secretaria->secretaria_nombre}</td>
                            <td>{$secretaria->secretaria_apellido}</td>
                            <td>{$secretaria->secretaria_dni}</td>
                            <td>Ver Lista</td>
                            <td>
                            <a ><img style="width: 35px; height: 35px;" class="boton-tabla-secretaria mx-2" src="../TurnoFacil/images/boton-editar.png"></a>
                            <a><img style="width: 35px; height: 35px;" class="boton-tabla-secretaria" src="../TurnoFacil/images/boton-borrar.png"></a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
            <div class="container-boton-agregar">
                <a class="btn btn-primary boton-cargar-secretaria" href="agregarSecretaria">Agregar</a>
            </div>
        
    </div>
    </div>
</main>
{include file="Footer.tpl"}

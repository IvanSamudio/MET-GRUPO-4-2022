{include file="Header.tpl"}
{include file="navBar.tpl"}


<main class="container">
    <div class="row">
    {include file="subNavAdmin.tpl"}

    <div class=" row" >
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
                        <a href="editarMedico/{$medico->nro_matricula}" class="btn btn-primary shadow rounded ml-2" type="button"  title="Editar"><i class="bi bi-pencil-fill"></i></button></a>
                        <a href="borrarMedico/{$medico->nro_matricula}"><button class="btn btn-danger shadow rounded ml-2" type="button" title="Eliminar"><i class="bi bi-trash3-fill"></i></button></a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
        </table>
        <div class="container-boton-agregar">
            <a href="agregarMedico"><button id="btn-agregar-medico" class="btn btn-primary boton-cargar-secretaria">Agregar</button></a>
        </div>
       

 {* <a class="btn btn-primary boton-cargar-secretaria" href="agregarSecretaria">AGREGAR</a> *}
    
            <h1>Secretarias</h1>
            <table class="table table-striped">
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
                            <td>{$secretaria->secretaria_telefono}</td>
                            <td>Ver Lista</td>
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
    </div>
</main>
{* {include file="Footer.tpl"} *}
{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container">
    {include file="subNavAdmin.tpl"}

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
    <button id="btn-agregar-medico" href="agregarMedico" class="btn-agregar rounded">Agregar</button>
</main>
{include file="Footer.tpl"}
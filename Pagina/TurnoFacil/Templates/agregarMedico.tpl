{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container">
{include file="subNavAdmin.tpl"}

    <div class="row">
        

        <h1 class=" my-4" >Agregar un Doctor</h1>
        <form method="POST" action="cargarMedico" style="width: 90vh">


            <div class="input-group mb-3">
            <span class="input-group-text">Nombre</span>
            <input  name="nombre" type="text" class="form-control" placeholder="Ingrese un nombre">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text">Apellido</span>
            <input name="apellido" type="text" class="form-control" placeholder="Ingrese un apellido">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text">Telefono</span>
            <input name="telefono" type="text" class="form-control" placeholder="Ingrese un telefono">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text">Nro de Documento</span>
            <input name="dni" type="text" class="form-control" placeholder="Ingrese el documento de identidad">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Especialidad</span>
            <input name="especialidad" type="text" class="form-control" placeholder="Ingrese la especialidad">
            </div>

            <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nro de Matricula</span>
            <input  name="nroMatricula" type="text" class="form-control" placeholder="Ingrese la matricula">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text">Obra Social</label>
                <select name="obraSocial" class="form-select" >
                    <option value="all" selected>Seleccionar obra social</option>
                        {foreach from=$obrasSociales item=$obraSocial}
                        <option value="{$obraSocial->id_obra_social}">{$obraSocial->nombre_obra_social}</option>
                        {/foreach}
                </select>
            </div>
                        <div class="row my-4 border-top">
            <div>
                <div class="input-group mb-3 mt-4">
                <span class="input-group-text" >Contraseña</span>
                <input name="contrasenia" type="password" class="form-control" placeholder="Ingrese la contraseña a asignar">
                </div>
            </div>


            <div class="botones-form-secretaria">
                <input type="submit" class="btn btn-primary boton-cargar-secretaria" value="Guardar">
                <a href="mostrarPersonal">Volver</a> 
            </div>





        </form>

    </div>
    
</main>
{include file="Footer.tpl"}
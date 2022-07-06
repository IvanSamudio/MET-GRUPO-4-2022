{include file="Header.tpl"}
{include file="navBar.tpl"}

<div class="container-lista-secretaria "  style="width: 200vh">

    <h1 class=" my-4" >Agregar secretaria</h1>
    <form class="form-secretaria" action="cargarSecretaria" method="POST">
        <div class="input-group">
            <label class="input-group-text">Nombre de Usuario</label>
            <input type="text" class="form-control" name="nombreUsuario" required>
        </div>
        <div class="input-group">
            <label class="input-group-text">Contraseña</label>
            <input type="text" class="form-control" name="contrasenia" required>
        </div>
        <div class="input-group">
            <label class="input-group-text">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="input-group">
            <label class="input-group-text">Apellido</label>
            <input type="text" class="form-control" name="apellido" required>
        </div>
        <div class="input-group">
            <label class="input-group-text">DNI</label>
            <input type="number" class="form-control" name="dni" required>
        </div>
        <div class="botones-form-secretaria">
            <input type="submit" class="btn btn-primary boton-cargar-secretaria" value="Guardar">
            <a href="mostrarPersonal">Volver</a> 
        </div>
    </form> 
</div>
{include file="Footer.tpl"}
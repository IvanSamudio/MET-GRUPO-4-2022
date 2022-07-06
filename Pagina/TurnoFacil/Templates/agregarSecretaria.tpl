{include file="Header.tpl"}
{include file="navBar.tpl"}

<div class="container-lista-secretaria">
    {include file="subNavAdmin.tpl"}
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
            <a href="mostrarPersonal">VOLVER</a> 
            <input type="submit" class="btn btn-primary boton-cargar-secretaria" value="CARGAR">
        </div>
    </form> 
</div>
{include file="Footer.tpl"}
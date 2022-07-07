{include file="Header.tpl"}
{include file="navBar.tpl"}
<main class="container">
{include file="subNavAdmin.tpl"}  
    <div class="container-lista-secretaria">

        <h1 class="my-4" >Agregar secretaria</h1>
        <form class="form-secretaria" action="cargarSecretaria" method="POST" style="width: 90vh">
        <div class="input-group">
            <label class="input-group-text">Nombre de Usuario</label>
            <input type="text" class="form-control" name="nombreUsuario" required>
        </div>
        <div class="input-group">
            <label class="input-group-text">Contraseña</label>
            <input type="password" class="form-control" name="contrasenia" required>
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
</main>
{include file="Footer.tpl"}
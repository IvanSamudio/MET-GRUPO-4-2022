{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container">
    {include file="subNavAdmin.tpl"}
    <form class="form-secretaria" action="cargarSecretaria" method="POST">
        <label>Nombre de Usuario:</label>
        <input type="text" name="nombreUsuario">
        <label>Contraseña:</label>
        <input type="text" name="contrasenia">
        <label>Nombre:</label>
        <input type="text" name="nombre">
        <label>Apellido:</label>
        <input type="text" name="apellido">
        <label>DNI:</label>
        <input type="number" name="dni">
        <input type="submit" value="Cargar Secretaria">
    </form> 
</main>
{include file="Footer.tpl"}
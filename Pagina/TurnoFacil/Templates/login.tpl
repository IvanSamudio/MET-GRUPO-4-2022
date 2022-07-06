{include file="Header.tpl"}
<main>
    <figure>
    <img src="../TurnoFacil/Images/Untitled.png" alt="login">
    </figure>

    <div class="estructuraLogin">
        <img class="logoLogin" src="../TurnoFacil/Images/logo.png" alt="logo">
        <h4>INICIO DE SESION</h4>
        <form action="verificarLogin" method="POST">
        <div class="inputLogin">
            <p>Usuario</p>
            <input type="text" name="nombreUsuario" placeholder="NOMBRE USUARIO">
        </div>

        <div class="inputLogin">
            <p>Password</p>
            <input type="password" name="contrasenia"  placeholder="CONTRASEÑA">
        </div>
        
        <p>{$mensaje}</p>
        <input id="btnSubmit" type="submit" value="INGRESAR">
        </form>      
    </div>    
</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container">
    <div class="cartaPresentacion">
      <h1>Bienvenida : {$secretaria->secretaria_nombre} {$secretaria->secretaria_apellido}</h1>
      <h4>Dni: {$secretaria->secretaria_dni}<h4>
      <a class="btn btn-primary" href="{$basehref}logOut" role="button">Cerrar Sesion</a>
    </div>
    
</main>
{include file="Footer.tpl"}
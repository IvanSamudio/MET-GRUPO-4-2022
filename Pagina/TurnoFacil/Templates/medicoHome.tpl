{include file="Header.tpl"}
{include file="navBar.tpl"}

<main class="container">
    <div class="cartaPresentacion">
      <h1>Bienvenido : {$medico->medico_nombre} {$medico->medico_apellido}</h1>
      <h4>Dni: {$medico->medico_dni}<h4>
      <h4>Numero de matricula: {$medico->nro_matricula}<h4>
      <h4>Especialidad: {$medico->especialidad}<h4>
      <a class="btn btn-primary" href="{$basehref}logOut" role="button">Cerrar Sesion</a>
    </div>
    
</main>
{include file="Footer.tpl"}
<?php
/* Smarty version 4.1.0, created on 2022-05-31 06:37:26
  from 'C:\xampp\htdocs\FACULTAD\TPE-MET_FUNCANDO\Pagina\TurnoFacil\templates\Home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62959b86c06196_83538827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fb9233afd3df9fbb0512536ed1225153681a371' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FACULTAD\\TPE-MET_FUNCANDO\\Pagina\\TurnoFacil\\templates\\Home.tpl',
      1 => 1653971187,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_62959b86c06196_83538827 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<main class="container">
<div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/1-paciente-home.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/2-paciente-home.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/3-paciente-home.jpg" alt="Third slide">
    </div>
  </div>
</div>

<div class="contBotones">
  <a href="filtrar_medicos" class="btn btn-primary btn-lg botonesHome btn-izq">SACAR TURNOS</a>
  <a href="ver_Turnos" class="btn btn-primary btn-lg botonesHome btn-der">VER TURNOS</a>
</div>
</div>
</main>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

<?php
/* Smarty version 4.1.0, created on 2022-05-31 20:40:51
  from 'C:\xampp\htdocs\Meto\MET-GRUPO-4-2022\Pagina\TurnoFacil\Templates\FiltradoPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629661334fb271_45119461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3922eb7eccd10e60dfb4eceaea9db6da1fbfe9d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Meto\\MET-GRUPO-4-2022\\Pagina\\TurnoFacil\\Templates\\FiltradoPrincipal.tpl',
      1 => 1654022426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_629661334fb271_45119461 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="container">
<h2 class="tittle"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

<form class="container mb-3" style="width: 60rem" action="" method="POST">

    <label class="form-label">Filtrar por Especialidad</label>
    <select class="form-select" aria-label="Default select example">
    <option selected>Selecccionar Especialidad</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
$_smarty_tpl->tpl_vars['especialidad']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
$_smarty_tpl->tpl_vars['especialidad']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value["especialidad"];?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value["especialidad"];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label class="form-label">Filtrar por Obra Social</label>
    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccionar obra social</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['obraSociales']->value, 'obraSocial');
$_smarty_tpl->tpl_vars['obraSocial']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['obraSocial']->value) {
$_smarty_tpl->tpl_vars['obraSocial']->do_else = false;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['obraSocial']->value["nombre_obra_social"];?>
"><?php echo $_smarty_tpl->tpl_vars['obraSocial']->value["nombre_obra_social"];?>
</option>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    
    <button class="btn btn-warning m-2" type="submit">Ver Medicos</button> //muestra otro tpl con los medicos yla especialidad y obra social elegida 
</form>
</main>


<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

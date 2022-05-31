<?php
/* Smarty version 4.1.0, created on 2022-05-31 00:40:41
  from 'C:\xampp\htdocs\MET-GRUPO-4-2022\Pagina\TurnoFacil\Templates\FiltradoPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629547e98744b3_14203223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489c5d915fa7f625affeea0d83bf01e29ef14070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MET-GRUPO-4-2022\\Pagina\\TurnoFacil\\Templates\\FiltradoPrincipal.tpl',
      1 => 1653950401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_629547e98744b3_14203223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="container">
<h1 class="text-uppercase fw-light container" style="width: 60rem"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>

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
    <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->especialidad;?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->especialidad;?>
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
    <option value="<?php echo $_smarty_tpl->tpl_vars['obraSocial']->value->obraSocial;?>
"><?php echo $_smarty_tpl->tpl_vars['obraSocial']->value->obraSocial;?>
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

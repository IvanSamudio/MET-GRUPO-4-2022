<?php
/* Smarty version 4.1.0, created on 2022-07-04 01:30:35
  from 'C:\xampp\htdocs\MET-GRUPO-4-2022\Pagina\TurnoFacil\Templates\FiltradoPrincipal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62c2269b6fb5b9_20635055',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '489c5d915fa7f625affeea0d83bf01e29ef14070' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MET-GRUPO-4-2022\\Pagina\\TurnoFacil\\Templates\\FiltradoPrincipal.tpl',
      1 => 1656865039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:navBar.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_62c2269b6fb5b9_20635055 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:navBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main class="containerFil">

<h3 class="tittle"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>

<form class="container mb-3" style="width: 60vh" action="medicosConObra" method="POST">
    <label class="form-label">Filtrar por Especialidad</label>
    <select name="especialidad" class="form-select" aria-label="Default select example">
    <option value="all" selected>Seleccionar Especialidad</option>
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
    <select name="obra_social" class="form-select" aria-label="Default select example">
    <option value="all" selected>Seleccionar obra social</option>
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
    
    <input class="btn btn-warning m-2" type="submit" value="Ver Medicos">
</form>

</main>


<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

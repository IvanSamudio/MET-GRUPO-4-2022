<?php
/* Smarty version 4.1.0, created on 2022-05-31 08:40:26
  from 'C:\xampp\htdocs\FACULTAD\TPE-MET_FUNCANDO\Pagina\TurnoFacil\templates\HorariosTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295b85a3e7c33_89361630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '195d1f64856501355baa3eabcd47c83bcfbaec67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FACULTAD\\TPE-MET_FUNCANDO\\Pagina\\TurnoFacil\\templates\\HorariosTurnos.tpl',
      1 => 1653979224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6295b85a3e7c33_89361630 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="containerHorarios">
    <ul class="horarios">
        <h1>Horarios disponibles del dia : </h1>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas']->value, 'hora_arreglo');
$_smarty_tpl->tpl_vars['hora_arreglo']->iteration = 0;
$_smarty_tpl->tpl_vars['hora_arreglo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hora_arreglo']->value) {
$_smarty_tpl->tpl_vars['hora_arreglo']->do_else = false;
$_smarty_tpl->tpl_vars['hora_arreglo']->iteration++;
$__foreach_hora_arreglo_0_saved = $_smarty_tpl->tpl_vars['hora_arreglo'];
?>
            <h4> Turno Nº<?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->iteration;?>
: </h4>
            <p>Hora inicio: <?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->value[0];?>
 Hora fin: <?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->value[2];?>
 | Duracion Turno: <?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->value[1];?>
</p>
        <?php
$_smarty_tpl->tpl_vars['hora_arreglo'] = $__foreach_hora_arreglo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

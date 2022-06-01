<?php
/* Smarty version 4.1.0, created on 2022-05-31 23:38:47
  from 'F:\xampp\htdocs\testFolder\Pagina\TurnoFacil\templates\CalendarioTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6296d1375519e2_27071253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7261c394ce008ee8c8bb50d6b77a7406a4982a21' => 
    array (
      0 => 'F:\\xampp\\htdocs\\testFolder\\Pagina\\TurnoFacil\\templates\\CalendarioTurnos.tpl',
      1 => 1654051126,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6296d1375519e2_27071253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container-calendario">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['meses']->value, 'nombreMes', false, 'nroMes');
$_smarty_tpl->tpl_vars['nombreMes']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nroMes']->value => $_smarty_tpl->tpl_vars['nombreMes']->value) {
$_smarty_tpl->tpl_vars['nombreMes']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['mes']->value == $_smarty_tpl->tpl_vars['nroMes']->value) {?>
        <div class="nombre-mes-navegacion">
            <p><?php echo $_smarty_tpl->tpl_vars['nombreMes']->value;?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['mes']->value == 12) {?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
MostrarTurnos/<?php echo $_smarty_tpl->tpl_vars['nro_matricula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value-11;?>
/<?php echo $_smarty_tpl->tpl_vars['anio']->value+1;?>
"> -> </a>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
MostrarTurnos/<?php echo $_smarty_tpl->tpl_vars['nro_matricula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value+1;?>
/<?php echo $_smarty_tpl->tpl_vars['anio']->value;?>
"> -> </a>
            <?php }?>
        </div>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <ul class="calendario">
        <li class="dia-semana">Lun</li>
        <li class="dia-semana">Mar</li>
        <li class="dia-semana">Mie</li>
        <li class="dia-semana">Jue</li>
        <li class="dia-semana">Vie</li>
        <li class="dia-semana">Sab</li>
        <li class="dia-semana">Dom</li>
        <?php
$_smarty_tpl->tpl_vars['offsetDia'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['offsetDia']->step = 1;$_smarty_tpl->tpl_vars['offsetDia']->total = (int) ceil(($_smarty_tpl->tpl_vars['offsetDia']->step > 0 ? $_smarty_tpl->tpl_vars['dia_inicio_mes']->value-1+1 - (1) : 1-($_smarty_tpl->tpl_vars['dia_inicio_mes']->value-1)+1)/abs($_smarty_tpl->tpl_vars['offsetDia']->step));
if ($_smarty_tpl->tpl_vars['offsetDia']->total > 0) {
for ($_smarty_tpl->tpl_vars['offsetDia']->value = 1, $_smarty_tpl->tpl_vars['offsetDia']->iteration = 1;$_smarty_tpl->tpl_vars['offsetDia']->iteration <= $_smarty_tpl->tpl_vars['offsetDia']->total;$_smarty_tpl->tpl_vars['offsetDia']->value += $_smarty_tpl->tpl_vars['offsetDia']->step, $_smarty_tpl->tpl_vars['offsetDia']->iteration++) {
$_smarty_tpl->tpl_vars['offsetDia']->first = $_smarty_tpl->tpl_vars['offsetDia']->iteration === 1;$_smarty_tpl->tpl_vars['offsetDia']->last = $_smarty_tpl->tpl_vars['offsetDia']->iteration === $_smarty_tpl->tpl_vars['offsetDia']->total;?>
            <li class="dia-vacio"> </li>
        <?php }
}
?>
        <?php
$_smarty_tpl->tpl_vars['dia'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['dia']->step = 1;$_smarty_tpl->tpl_vars['dia']->total = (int) ceil(($_smarty_tpl->tpl_vars['dia']->step > 0 ? $_smarty_tpl->tpl_vars['cant_dias_mes']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['cant_dias_mes']->value)+1)/abs($_smarty_tpl->tpl_vars['dia']->step));
if ($_smarty_tpl->tpl_vars['dia']->total > 0) {
for ($_smarty_tpl->tpl_vars['dia']->value = 1, $_smarty_tpl->tpl_vars['dia']->iteration = 1;$_smarty_tpl->tpl_vars['dia']->iteration <= $_smarty_tpl->tpl_vars['dia']->total;$_smarty_tpl->tpl_vars['dia']->value += $_smarty_tpl->tpl_vars['dia']->step, $_smarty_tpl->tpl_vars['dia']->iteration++) {
$_smarty_tpl->tpl_vars['dia']->first = $_smarty_tpl->tpl_vars['dia']->iteration === 1;$_smarty_tpl->tpl_vars['dia']->last = $_smarty_tpl->tpl_vars['dia']->iteration === $_smarty_tpl->tpl_vars['dia']->total;?>
            <?php if (in_array($_smarty_tpl->tpl_vars['dia']->value,$_smarty_tpl->tpl_vars['turnos']->value)) {?>
                <li class="hay-turno"><a href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
filtroTurnos/<?php echo $_smarty_tpl->tpl_vars['nro_matricula']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['mes']->value;?>
">
                <?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
</a></li>
            <?php } else { ?>
                <li class="no-hay-turno"><?php echo $_smarty_tpl->tpl_vars['dia']->value;?>
</li>
            <?php }?>
        <?php }
}
?>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}

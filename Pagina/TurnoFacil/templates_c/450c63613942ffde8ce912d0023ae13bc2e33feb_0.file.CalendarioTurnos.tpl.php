<?php
/* Smarty version 4.1.0, created on 2022-05-31 00:29:28
  from 'F:\xampp\htdocs\tpe-metodologias\Pagina\TurnoFacil\templates\CalendarioTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629545489693d5_89110040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '450c63613942ffde8ce912d0023ae13bc2e33feb' => 
    array (
      0 => 'F:\\xampp\\htdocs\\tpe-metodologias\\Pagina\\TurnoFacil\\templates\\CalendarioTurnos.tpl',
      1 => 1653949711,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_629545489693d5_89110040 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['turnos']->value, 'turno');
$_smarty_tpl->tpl_vars['turno']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['turno']->value) {
$_smarty_tpl->tpl_vars['turno']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['turno']->value->id_paciente == '') {?>
            <li style="color:green"><?php echo $_smarty_tpl->tpl_vars['turno']->value->horario_turno;?>
,<?php echo $_smarty_tpl->tpl_vars['turno']->value->duracion_turno;?>
</li>
        <?php } else { ?>            
            <li style="color:red"><?php echo $_smarty_tpl->tpl_vars['turno']->value->horario_turno;?>
,<?php echo $_smarty_tpl->tpl_vars['turno']->value->duracion_turno;?>
</li>                   
        <?php }?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>

<ul class="calendar">
    <?php
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['day']->step = 1;$_smarty_tpl->tpl_vars['day']->total = (int) ceil(($_smarty_tpl->tpl_vars['day']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['day']->step));
if ($_smarty_tpl->tpl_vars['day']->total > 0) {
for ($_smarty_tpl->tpl_vars['day']->value = 1, $_smarty_tpl->tpl_vars['day']->iteration = 1;$_smarty_tpl->tpl_vars['day']->iteration <= $_smarty_tpl->tpl_vars['day']->total;$_smarty_tpl->tpl_vars['day']->value += $_smarty_tpl->tpl_vars['day']->step, $_smarty_tpl->tpl_vars['day']->iteration++) {
$_smarty_tpl->tpl_vars['day']->first = $_smarty_tpl->tpl_vars['day']->iteration === 1;$_smarty_tpl->tpl_vars['day']->last = $_smarty_tpl->tpl_vars['day']->iteration === $_smarty_tpl->tpl_vars['day']->total;?>
        <li><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</li>
    <?php }
}
?>
</ul>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}

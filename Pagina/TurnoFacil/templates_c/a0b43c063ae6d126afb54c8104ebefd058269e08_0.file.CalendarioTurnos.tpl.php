<?php
/* Smarty version 4.1.0, created on 2022-05-31 19:22:17
  from 'C:\xampp\htdocs\FACULTAD\TPE-MET_FUNCANDO\Pagina\TurnoFacil\templates\CalendarioTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62964ec98f1c68_62405937',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0b43c063ae6d126afb54c8104ebefd058269e08' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FACULTAD\\TPE-MET_FUNCANDO\\Pagina\\TurnoFacil\\templates\\CalendarioTurnos.tpl',
      1 => 1654017728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_62964ec98f1c68_62405937 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="containerCalendario">
    <ul class="calendario">
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <li class="dia-semana"></li>
        <?php
$_smarty_tpl->tpl_vars['day'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['day']->step = 1;$_smarty_tpl->tpl_vars['day']->total = (int) ceil(($_smarty_tpl->tpl_vars['day']->step > 0 ? 31+1 - (1) : 1-(31)+1)/abs($_smarty_tpl->tpl_vars['day']->step));
if ($_smarty_tpl->tpl_vars['day']->total > 0) {
for ($_smarty_tpl->tpl_vars['day']->value = 1, $_smarty_tpl->tpl_vars['day']->iteration = 1;$_smarty_tpl->tpl_vars['day']->iteration <= $_smarty_tpl->tpl_vars['day']->total;$_smarty_tpl->tpl_vars['day']->value += $_smarty_tpl->tpl_vars['day']->step, $_smarty_tpl->tpl_vars['day']->iteration++) {
$_smarty_tpl->tpl_vars['day']->first = $_smarty_tpl->tpl_vars['day']->iteration === 1;$_smarty_tpl->tpl_vars['day']->last = $_smarty_tpl->tpl_vars['day']->iteration === $_smarty_tpl->tpl_vars['day']->total;?>
        <?php if (in_array($_smarty_tpl->tpl_vars['day']->value,$_smarty_tpl->tpl_vars['turnos']->value)) {?>
                <li class="hayTurno"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
</li>
            <?php } else { ?>
                <li class="noHayTurno"><?php echo $_smarty_tpl->tpl_vars['day']->value;?>
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

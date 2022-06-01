<?php
/* Smarty version 4.1.0, created on 2022-06-01 21:38:11
  from 'C:\xampp\htdocs\MET-GRUPO-4-2022\Pagina\TurnoFacil\Templates\listadoDeMedicosFiltrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6297c023c26f96_09942107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '126c09330e30ba5bd783ed4da24c23131af175aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MET-GRUPO-4-2022\\Pagina\\TurnoFacil\\Templates\\listadoDeMedicosFiltrado.tpl',
      1 => 1654111246,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6297c023c26f96_09942107 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="tabla">
<table class="table table-striped table-hover">
    <thead>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Especialidad</th>
        <th scope="col">Obra Social</th>
        <th scope="col"></th>
    </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['medicos']->value, 'medico');
$_smarty_tpl->tpl_vars['medico']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['medico']->value) {
$_smarty_tpl->tpl_vars['medico']->do_else = false;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['medico']->value->medico_nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['medico']->value->medico_apellido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['medico']->value->especialidad;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['medico']->value->nombre_obra_social;?>
</td>
                <td><button><a href="<?php echo $_smarty_tpl->tpl_vars['basehref']->value;?>
/MostrarTurnos/<?php echo $_smarty_tpl->tpl_vars['medico']->value->nro_matricula;?>
">Sacar Turno</a></button></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>

<input class="btn btn-warning m-2" type="submit" value="Buscar Medicos">
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

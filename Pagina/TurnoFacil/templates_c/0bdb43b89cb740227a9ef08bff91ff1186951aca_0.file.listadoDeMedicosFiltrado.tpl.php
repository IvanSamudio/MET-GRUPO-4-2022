<?php
/* Smarty version 4.1.0, created on 2022-06-01 00:18:37
  from 'C:\xampp\htdocs\Meto\MET-GRUPO-4-2022\Pagina\TurnoFacil\Templates\listadoDeMedicosFiltrado.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6296943dbeb607_54583895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bdb43b89cb740227a9ef08bff91ff1186951aca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Meto\\MET-GRUPO-4-2022\\Pagina\\TurnoFacil\\Templates\\listadoDeMedicosFiltrado.tpl',
      1 => 1654035505,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6296943dbeb607_54583895 (Smarty_Internal_Template $_smarty_tpl) {
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
                <td><button>sacar turno</button></td>
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

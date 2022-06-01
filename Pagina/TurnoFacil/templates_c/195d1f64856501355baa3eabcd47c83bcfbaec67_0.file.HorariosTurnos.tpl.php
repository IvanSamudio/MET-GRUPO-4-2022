<?php
/* Smarty version 4.1.0, created on 2022-06-01 01:51:16
  from 'C:\xampp\htdocs\FACULTAD\TPE-MET_FUNCANDO\Pagina\TurnoFacil\templates\HorariosTurnos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6296a9f4e2cde7_62460381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '195d1f64856501355baa3eabcd47c83bcfbaec67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\FACULTAD\\TPE-MET_FUNCANDO\\Pagina\\TurnoFacil\\templates\\HorariosTurnos.tpl',
      1 => 1654041032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
    'file:Footer.tpl' => 1,
  ),
),false)) {
function content_6296a9f4e2cde7_62460381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="containerHorarios">
    <ul class="horarios">
        <h1>Horarios disponibles del dia <?php echo $_smarty_tpl->tpl_vars['fecha']->value;?>
: </h1>
        <h3>Hora inicio ATENCION: <?php echo $_smarty_tpl->tpl_vars['horarioAtencion']->value->inicio_horario_atencion;?>
HS - Hora fin ATENCION: <?php echo $_smarty_tpl->tpl_vars['horarioAtencion']->value->fin_horario_atencion;?>
HS</h3>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['horas']->value, 'hora_arreglo');
$_smarty_tpl->tpl_vars['hora_arreglo']->iteration = 0;
$_smarty_tpl->tpl_vars['hora_arreglo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hora_arreglo']->value) {
$_smarty_tpl->tpl_vars['hora_arreglo']->do_else = false;
$_smarty_tpl->tpl_vars['hora_arreglo']->iteration++;
$__foreach_hora_arreglo_0_saved = $_smarty_tpl->tpl_vars['hora_arreglo'];
?>
            <h5> Turno Nº<?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->iteration;?>
: </h5>
            <p>Hora inicio: <?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->value[0];?>
 Hora fin: <?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->value[2];?>
 | Duracion Turno: <?php echo $_smarty_tpl->tpl_vars['hora_arreglo']->value[1];?>
</p>
        <?php
$_smarty_tpl->tpl_vars['hora_arreglo'] = $__foreach_hora_arreglo_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

    <div class="contenedor-filtro">
        <form class="filtro" action="filtroTurnos" method="POST">
        <label for="1">Selecione a partir de que horario desea encontrar turnos</label>
        <select name="hora-Filtro" id="1">
            <?php
$_smarty_tpl->tpl_vars['hora'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['hora']->step = 1;$_smarty_tpl->tpl_vars['hora']->total = (int) ceil(($_smarty_tpl->tpl_vars['hora']->step > 0 ? $_smarty_tpl->tpl_vars['fin_horarioAtencion']->value+1 - ($_smarty_tpl->tpl_vars['inicio_horarioAtencion']->value) : $_smarty_tpl->tpl_vars['inicio_horarioAtencion']->value-($_smarty_tpl->tpl_vars['fin_horarioAtencion']->value)+1)/abs($_smarty_tpl->tpl_vars['hora']->step));
if ($_smarty_tpl->tpl_vars['hora']->total > 0) {
for ($_smarty_tpl->tpl_vars['hora']->value = $_smarty_tpl->tpl_vars['inicio_horarioAtencion']->value, $_smarty_tpl->tpl_vars['hora']->iteration = 1;$_smarty_tpl->tpl_vars['hora']->iteration <= $_smarty_tpl->tpl_vars['hora']->total;$_smarty_tpl->tpl_vars['hora']->value += $_smarty_tpl->tpl_vars['hora']->step, $_smarty_tpl->tpl_vars['hora']->iteration++) {
$_smarty_tpl->tpl_vars['hora']->first = $_smarty_tpl->tpl_vars['hora']->iteration === 1;$_smarty_tpl->tpl_vars['hora']->last = $_smarty_tpl->tpl_vars['hora']->iteration === $_smarty_tpl->tpl_vars['hora']->total;?>
                <option value=<?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
><?php echo $_smarty_tpl->tpl_vars['hora']->value;?>
</option>
            <?php }
}
?>
        </select>
        <p id="separador">:</p>
        <select name="minutos-Filtro">
            <option name="minutosFiltro" value="00">00</option>
            <option name="minutosFiltro" value="30">30</option>
        </select>
        
        <button id="btn-filtro">Filtrar Turnos</button>
        </form>
    </div>

    <div class="contenedor-filtro">
        <form class="filtro" action="filtroTurnos" method="POST">
        <label for="1">Selecione si desea buscar turnos de mañana (6AM-12AM) o tarde (12AM-6PM)</label>

        <select name="maniana-tarde">
            <option name="minutosFiltro" value="06">Mañana</option>
            <option name="minutosFiltro" value="12">Tarde</option>
        </select>
        
        <button id="btn-filtro">Filtrar Turnos</button>
        </form>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:Footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

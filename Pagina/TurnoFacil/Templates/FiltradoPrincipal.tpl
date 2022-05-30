{include file="Header.tpl"}

<h1 class="text-uppercase fw-light container" style="width: 60rem">{$title}</h1>

<form class="container" style="width: 60rem" action="" method="POST">

    <label class="form-label">Filtrar por Especialidad</label>
    <select class="form-select" aria-label="Default select example">
    <option selected>Selecccionar Especialidad</option>
    {foreach from=$especialidades item=$especialidad}
    <option value="{$especialidad->nro_matricula}">{$especialidad->especialidad}</option>
    {/foreach}
    </select>

    <label class="form-label mt-3">Filtrar por Obra Social</label>
    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccionar obra social</option>
    {foreach from=$obraSociales item=$obraSocial}
    <option value="{$obraSocial->obraSocial}">{$obraSocial->obraSocial}</option>
    {/foreach}
    </select>
    
    <button class="btn btn-warning mt-4" type="submit">Ver Medicos</button> //muestra otro tpl con los medicos yla especialidad y obra social elegida 
</form>



{include file="Footer.tpl"}
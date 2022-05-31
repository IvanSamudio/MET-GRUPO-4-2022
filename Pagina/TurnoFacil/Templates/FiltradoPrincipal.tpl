{include file="Header.tpl"}

<main class="container">
<h1 class="text-uppercase fw-light container" style="width: 60rem">{$title}</h1>

<form class="container mb-3" style="width: 60rem" action="filtro_medico" method="POST">
    <label class="form-label">Filtrar por Especialidad</label>
    <select id="especialidad" class="form-select" aria-label="Default select example">
    <option  disabled selected>Seleccionar Especialidad</option>
    {foreach from=$especialidades item=$especialidad}
    <option value="{$especialidad["especialidad"]}">{$especialidad["especialidad"]}</option>
    {/foreach}
    </select>

    <label class="form-label">Filtrar por Obra Social</label>
    <select id="obra_social" class="form-select" aria-label="Default select example">
    <option disabled selected>Seleccionar obra social</option>
    {foreach from=$obraSociales item=$obraSocial}
    <option value="{$obraSocial["nombre_obra_social"]}">{$obraSocial["nombre_obra_social"]}</option>
    {/foreach}
    </select>
    
    <button class="btn btn-warning m-2" type="submit">Ver Medicos</button> //muestra otro tpl con los medicos yla especialidad y obra social elegida 
</form>
</main>


{include file="Footer.tpl"}
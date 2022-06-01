{include file="Header.tpl"}

<main class="containerFil">

<h3 class="tittle">{$title}</h3>

<form class="container mb-3" style="width: 60vh" action="medicosConObra" method="POST">
    <label class="form-label">Filtrar por Especialidad</label>
    <select name="especialidad" class="form-select" aria-label="Default select example">
    <option value="all" selected>Seleccionar Especialidad</option>
    {foreach from=$especialidades item=$especialidad}
    <option value="{$especialidad["especialidad"]}">{$especialidad["especialidad"]}</option>
    {/foreach}
    </select>

    <label class="form-label">Filtrar por Obra Social</label>
    <select name="obra_social" class="form-select" aria-label="Default select example">
    <option value="all" selected>Seleccionar obra social</option>
    {foreach from=$obraSociales item=$obraSocial}
    <option value="{$obraSocial["nombre_obra_social"]}">{$obraSocial["nombre_obra_social"]}</option>
    {/foreach}
    </select>
    
    <input class="btn btn-warning m-2" type="submit" value="Ver Medicos">
</form>

</main>


{include file="Footer.tpl"}
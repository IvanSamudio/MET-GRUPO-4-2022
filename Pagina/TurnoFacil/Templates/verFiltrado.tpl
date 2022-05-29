{include file="Header.tpl"}

<h1 class="text-uppercase fw-light container" style="width: 60rem">Buscar por Especialidad</h1>

<form class="container mb-3" style="width: 60rem" action="escritores/edit/{$id}" method="POST">

    <label class="form-label">Filtrar por Especialidad</label>
    <select class="form-select" aria-label="Default select example">
    <option selected>Selecccionar Especialidad</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    </select>

    <label class="form-label">Filtrar por Obra Social</label>
    <select class="form-select" aria-label="Default select example">
    <option selected>Seleccionar obra social</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
    </select>
    
    <button class="btn btn-warning m-2" type="submit">Ver Medicos</button>
</form>


{include file="Footer.tpl"}
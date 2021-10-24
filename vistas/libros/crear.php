<div class="card">
    <div class="card-header">
        Agregar libro
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="titulo" class="form-label">Titulo:</label>
              <input required type="text"
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo del libro">
            </div>

            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de Generos  -->
                <label for="genero" class="form-label"></label>
                <select required class="form-select" name="genero" id="genero">
                    <option selected disabled="disabled">Genero del libro</option>
                    <option value="Novela">Novela</option>
                    <option value="Suspenso">Suspenso</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Historia">Historia</option>
                    <option value="Artes">Artes</option>
                    <option value="Pedagogía">Pedagogía</option>
                </select>
            </div>

            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de editorial  -->
                <label for="editorial" class="form-label"></label>
                <select required class="form-select" name="editorial" id="editorial">
                    <option selected disabled="disabled">Editorial</option>
                    <option value="Editorial 1">Editorial 1</option>
                    <option value="Editorial 2">Editorial 2</option>
                    <option value="Editorial 3">Editorial 3</option>
                    <option value="Editorial 4">Editorial 4</option>
                </select>
            </div>

            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de autor  -->
                <label for="autor" class="form-label"></label>
                <select required class="form-select" name="autor" id="autor">
                    <option selected>Autor del libro</option>
                    <option value="1">Gabriel Garcia Marquez</option>
                    <option value="2">José Saramago</option>
                    <option value="3">Dan Brown</option>
                    <option value="4">John Ronald Reuel Tokien</option>
                </select>
            </div>
                
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar libro">
        </form>
    </div>
</div>
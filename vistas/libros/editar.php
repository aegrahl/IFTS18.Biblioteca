<div class="card">
    <div class="card-header">
        Editar Libro
    </div>
    <div class="card-body">

        <form action="" method="post">
            <div class="mb-3">
                <label for=titulo"" class="form-label">Titulo: </label>
                <input required type="text" class="form-control" value="<?php echo $libro[0]->titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Genero: </label>
                <select required class="form-select" name="genero" id="genero">
                    <option selected><?php echo $libro[0]->genero; ?></option>
                    <option value="Novela">Novela</option>
                    <option value="Suspenso">Suspenso</option>
                    <option value="Ciencia Ficción">Ciencia Ficción</option>
                    <option value="Historia">Historia</option>
                    <option value="Artes">Artes</option>
                    <option value="Pedagogí­a">Pedagogía</option>
                </select>
            </div>

            <!--TODO:
                - Crear tablas editorial, autores, modificar consultas haciendo join para recuperar los valores y meterlos en un for.
            -->

            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de editorial  -->
                <label for="editorial" class="form-label">Editorial:</label>
                <select required class="form-select" name="editorial" id="editorial">
                    <option selected ><?php echo $libro[0]->editorial; ?></option>
                    <option value="Editorial 1">Editorial 1</option>
                    <option value="Editorial 2">Editorial 2</option>
                    <option value="Editorial 3">Editorial 3</option>
                    <option value="Editorial 4">Editorial 4</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <select required class="form-select" name="autor" id="autor">
                    <option selected><?php echo $libro[0]->id_autor; ?></option>
                    <option value="1">Gabriel Garcia Marquez</option>
                    <option value="2">José Saramago</option>
                    <option value="3">Dan Brown</option>
                    <option value="4">John Ronald Reuel Tolkien</option>
                </select>
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar Libro">
            <a href="?controlador=libros&accion=inicio" class="btn btn-danger ">Cancelar</a>

        </form>

    </div>

</div>
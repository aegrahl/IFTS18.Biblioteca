<!-- <div class="card">
    <div class="card-header">
        Editar Libro
    </div>
    <div class="card-body">
<!--  -->
        <form action="" method="post">
            <div class="mb-3">
                <label for=titulo"" class="form-label">Titulo: </label>
                <input required type="text" class="form-control" value="<?php echo $libro[0]->titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="">
            </div>

            <div class="mb-3">
                <label for="genero" class="form-label">Genero: </label>
                <select required class="form-select" name="genero" id="genero">
                    <option selected><?php echo $libro[0]->gen_nombre; ?></option>
                    
                    <?php
                    foreach (Generos::getgeneros() as $genero) {
                        Print_r($genero->nombre);
                        if ($genero->nombre == $libro[0]->gen_nombre) {
                            continue;
                        }
                    ?>
                        <option value=<?php echo $genero->id_genero; ?>><?php echo $genero->nombre; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="editorial" class="form-label">Editorial:</label>
                <select required class="form-select" name="editorial" id="editorial">
                    <option selected ><?php echo $libro[0]->ed_nombre; ?></option>
                    
                    <?php
                    foreach (Editorial::getEditoriales() as $editorial) {
                        Print_r($editorial->nombre);
                        if ($editorial->nombre == $libro[0]->ed_nombre) {
                            continue;
                        }
                    ?>
                        <option value=<?php echo $editorial->id_editorial; ?>><?php echo $editorial->nombre; ?></option>

                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="autor" class="form-label">Autor:</label>
                <select required class="form-select" name="autor" id="autor">
                    <option selected><?php echo $libro[0]->autor; ?></option>

                    <?php
                    
                    foreach (Autor::getAutores() as $autor) {
                        $autorStr = $autor->nombre.' '.$autor->apellido;
                        if ( $autorStr == $libro[0]->autor) {
                            continue;
                        }
                    ?>
                        <option value=<?php echo $autor->id_autor; ?>><?php echo $autorStr; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar Libro">
            <a href="?controlador=libros&accion=inicio" class="btn btn-danger ">Cancelar</a>

        </form>

    </div>

</div>
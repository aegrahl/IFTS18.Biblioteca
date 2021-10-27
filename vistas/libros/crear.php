<div class="card">
    <div class="card-header">
        Agregar libro
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo:</label>
                <input required type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo del libro">
            </div>

            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de Generos  -->
                <label for="id_genero" class="form-label">Genero: </label>
                <select required class="form-select" name="id_genero" id="id_genero">
                <?php
                foreach ($generos as $genero){
                    echo "<option value='$genero->id_genero'>$genero->nombre</option>"; 
                }
                ?>
                </select>
            </div>

            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de editorial  -->
                <label for="id_editorial" class="form-label">Editorial: </label>
                <select required class="form-select" name="id_editorial" id="id_editorial">
                <?php
                foreach ($editoriales as $editorial){
                    echo "<option value='$editorial->id_editorial'>$editorial->nombre $autor->apellido</option>"; 
                }
                ?>
                </select>
            </div>


            <div class="mb-3">
                <!-- Aca tiene que ir un select list, falta crear el mvc de autor  -->
                <label for="id_autor" class="form-label">Autor: </label>
                <select required class="form-select" name="id_autor" id="id_autor">
                <?php
                foreach ($autores as $autor){
                    echo "<option value='$autor->id_autor'>$autor->nombre $autor->apellido</option>"; 
                }
                ?>
                </select>
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar libro">
        </form>
    </div>
</div>
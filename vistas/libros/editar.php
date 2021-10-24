<div class="card">
    <div class="card-header">
        Editar Libro
    </div>
    <div class="card-body">

        <form action="" method="post">
            <div class="mb-3">
              <label for=titulo"" class="form-label">Titulo: </label>
              <input required type="text"
                class="form-control" value="<?php echo $libro[0]->titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder= "">
            </div>

            <div class="mb-3">
              <label for="genero" class="form-label">Genero: </label>
              <input required type="text" class="form-control" value="<?php echo $libro[0]->genero; ?>" name="genero" id="genero" aria-describedby="" placeholder="">
            </div>

            <div class="mb-3">
              <label for="editorial" class="form-label">Editorial: </label>
              <input required type="text" class="form-control" value="<?php echo $libro[0]->editorial; ?>" name="editorial" id="editorial" aria-describedby="" placeholder="">
            </div>

            <div class="mb-3">
              <label for="autor" class="form-label">Autor: </label>
              <input required type="text" class="form-control" value="<?php echo $libro[0]->id_autor; ?>" name="autor" id="autor" aria-describedby="" placeholder="">
            </div>

        <input name="" id="" class="btn btn-success" type="submit" value="Editar Libro">
        <a href="?controlador=libros&accion=inicio" class="btn btn-danger ">Cancelar</a>

        </form>

    </div>

</div>
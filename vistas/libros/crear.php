<div class="card">
    <div class="card-header">
        Agregar libro
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
                <!-- Acá tiene que ir un select list, falta crear el mvc de autor  -->
                <label for="" class="form-label"></label>
                <select class="form-select" name="" id="">
                    <option selected>Autor del libro</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <div class="mb-3">
              <label for="titulo" class="form-label">Titulo:</label>
              <input type="text"
                class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Titulo del libro">
            </div>

            <div class="mb-3">
                <!-- Acá tiene que ir un select list, falta crear el mvc de Generos  -->
                <label for="" class="form-label"></label>
                <select class="form-select" name="" id="">
                    <option selected>Genero del libro</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
                
            <input name="" id="" class="btn btn-success" type="submit" value="Agregar libro">
        </form>
    </div>
</div>
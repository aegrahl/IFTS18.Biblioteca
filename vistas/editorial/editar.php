<div class="card">
    <div class="card-header">
        Editar Editorial
    </div>
    <div class="card-body">

        <form action="" method="post">

        <div class="mb-3">
                <label for="id_editorial"" class="form-label">ID: </label>
                <input  readonly type="text" class="form-control" value="<?php echo $editorial->id_editorial?>" name="id_editorial" id="id_editorial" aria-describedby="helpId" placeholder="">
        </div>

        <div class="mb-3">
                <label for=nombre"" class="form-label">Nombre: </label>
                <input required type="text" class="form-control" value="<?php echo $editorial->nombre?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
        </div>


        <input name="" id="" class="btn btn-warning" type="submit" value="Guardar Cambio">
        </form>

    </div>

</div>
<div class="card">
    <div class="card-header">
        Editar Autor
    </div>
    <div class="card-body">

        <form action="" method="post">
            <div class="mb-3">
                <label for=nombre"" class="form-label">Nombre: </label>
                <input required type="text" class="form-control" value="<?php echo $autor[0]->nombre;?>" name="nombre" id="nombre" aria-describedby="helpId" placeholder="">
            </div>

        <form action="" method="post">
            <div class="mb-3">
                <label for=apellido"" class="form-label">Apellido: </label>
                <input required type="text" class="form-control" value="<?php echo $autor[0]->apellido;?>" name="apellido" id="apellido" aria-describedby="helpId" placeholder="">
            </div>


            <input name="" id="" class="btn btn-success" type="submit" value="Editar Autor">
            <a href="?controlador=autor&accion=inicio" class="btn btn-danger ">Cancelar</a>

        </form>

    </div>

</div>
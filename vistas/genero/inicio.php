<a name="" id="" class="btn btn-success mb-3 mt-3" href="?controlador=generos&accion=crear" role="button">Agregar genero</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>

        <?php
            $cantidad = count($generos);
            print_r($cantidad);
                foreach ($generos as $genero) {
        ?>
            <tr>
                <td><?php echo $genero->id_genero; ?></td>
                <td><?php echo $genero->nombre; ?></td>
                <td>
                    <div class="btn-group" role="group" aria-label="">
                    <a  href="?controlador=generos&accion=editar&id_genero=<?php echo $genero->id_genero; ?>" class="btn btn-warning ">Editar</a>
                    <a  href="?controlador=generos&accion=eliminar&id_genero=<?php echo $genero->id_genero;  ?>" class="btn btn-danger ">Borrar</a>
                    </div>
                </td>
            </tr>
        <?php
                }
        ?>
        
    </tbody>
</table>
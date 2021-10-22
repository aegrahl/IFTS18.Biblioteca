<a name="" id="" class="btn btn-success mb-3 mt-3" href="?controller=employees&action=create" role="button">Agregar empleado</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Genero</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>

        <?php
            foreach ($libros as $dato) {
        ?>

        <tr>
            <td><?php echo $dato->id; ?></td>
            <td><?php echo $dato->nombre; ?></td>
            <td><?php echo $dato->autor; ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=libros&accion=editar&id=<?php echo $dato->id; ?>" class="btn btn-warning ">Editar</a>
                <a href="?controlador=libros&accion=eliminar&id=<?php echo $dato->id; ?>" class="btn btn-danger ">Borrar</a>
                </div>
            </td>
        </tr>

        <?php
        }
        ?>
        
    </tbody>
</table>

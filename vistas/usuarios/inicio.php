<a name="" id="" class="btn btn-success mb-3 mt-3" href="?controlador=usuarios&accion=crear" role="button">Crear Usuario</a>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Rol</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
      <tr>
        <th scope="row"><?php echo $usuario->id_usuario; ?></th>
        <td><?php echo $usuario->nombre; ?></td>
        <td><?php echo $usuario->apellido; ?></td>
        <td><?php echo $usuario->email; ?></td>
        <td><?php echo $usuario->telefono; ?></td>
        <td><?php echo $usuario->rol; ?></td>
        <td>
          <a class="btn btn-warning" href="?controlador=usuarios&accion=editar&id=<?php echo $usuario->id; ?>" role="button">Editar</a>
          <a class="btn btn-danger" href="?controlador=usuarios&accion=eliminar&id=<?php echo $usuario->id; ?>" role="button">Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
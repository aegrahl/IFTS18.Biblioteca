<?php include_once('modelos/stockLibros.php'); ?>
<h2 class="p-3 mt-0 md-0 text-black justify-content-center text-center" id="titulo-libros">Libros</h2>

<div class="card-deck container-fluid text-center justify-content-center pt-3 " id="libros-cont">
    <div class="row g-3">

    <?php
  foreach ($libros as $libro) {
    ?>
       <div class="pb-5 mb-0 col-12  col-md-6 col-lg-3">
       <?php  $libro->id_libro  ?>
<img src="/statics/img/libro1.jpeg" id="<?php $libro->id_libro ?>">
<p class="p-5 mt-2 text-center fs-2"><?php $libro->titulo  ?></p>
<?php if($_SESSION){?>

    <!-- Button to Open the Modal -->
    <a class="btn p-3 fs-5" type="button"  data-bs-toggle="modal" data-bs-target="#<?php $libro->id_libro  ?>" href="">Consultar</a>
    

    <?php } else {?>
<a class="btn p-3 fs-5"  href="?controlador=login&accion=inicio">Consultar</a>
<?php } ?>
</div>


<!-- The Modal -->
<!-- The Modal -->
<div class="modal" id="<?php $libro->id_libro  ?>">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><?php $libro->titulo ?></h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p style="font-size=2em;"></p>
          <?php $vendedor = stockLibros::getVendedor($libro->id_libro )?>
        Libro en venta por  <?php $vendedor['nombre'] .$vendedor->apellido ?> </br>
        podes contactarlo con el email: <?php $vendedor->email ?></br>
        o al celular: <?php $vendedor['telefono'] ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<?php } ?>



    </div>
</div>


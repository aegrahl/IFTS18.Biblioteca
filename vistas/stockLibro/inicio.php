<h2 class="p-3 mt-0 md-0 text-black justify-content-center text-center" id="titulo-libros">Libros</h2>

<div class="card-deck container-fluid text-center justify-content-center pt-3 " id="libros-cont">
    <div class="row g-3">

        <div class="pb-5 mb-0 col-12  col-md-6 col-lg-3">

            <img src="/statics/img/libro1.jpeg" id="book">
            <p class="p-5 mt-2 text-center fs-2">The Andromeda Boy</p>
            <?php if($_SESSION){?>

                <!-- Button to Open the Modal -->
                <a class="btn p-3 fs-5" type="button"  data-bs-toggle="modal" data-bs-target="#myModal" href="">Consultar</a>


                <?php } else {?>
            <a class="btn p-3 fs-5"  href="?controlador=login&accion=inicio">Consultar</a>
            <?php } ?>
        </div>
        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro2.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">Los que se aman</p>
            <a class="btn p-3 fs-5" href="">Comprar</a>
        </div>


        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro3.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">Rosa Pelayo</p>
            <a class="btn p-3 fs-5" href="">Comprar</a>
        </div>

        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro4.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">About Last Night</p>
            <a class="btn p-3 fs-5" href="">Comprar</a>
        </div>


        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro5.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">Journey to the Stars</p>
            <a class="btn p-3 fs-5" href="">Comprar</a>
        </div>


        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro6.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">The Dark Side of Winter</p>
            <a class="btn p-3 fs-5" href="">Comprar</a>
        </div>


        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro7.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">Tardes con Luisa</p>
            <a class="btn p-3 fs-5" href="">Comprar</a>
        </div>


        <div class="pb-5 mb-0 col-12 col-md-6 col-lg-3">

            <img src="/statics/img/libro8.jpeg" alt="" id="book">
            <p class="p-5 mt-2 text-center fs-2">Bullet Journaling</p>
            <a class="btn btn-lg p-3 fs-5" href="" id="boton-b">Comprar</a>
        </div>




    </div>
</div>

<!-- The Modal -->
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Titulo del libro</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p style="font-size=2em;"></p>
        Este libro lo vende Jorgito </br>
        podes contactar con el al email: aaa@aaa.com</br>
        o al celular: 111111111
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

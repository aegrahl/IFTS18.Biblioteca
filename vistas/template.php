  <?php
  // Start the session
  session_start();
  ?>
<!doctype html>
<html lang="es">
  <head>
    <title>Libreria</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Popper Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- https://github.com/jarstone/dselect -->
    <link rel="stylesheet" href="https://unpkg.com/@jarstone/dselect/dist/css/dselect.css">
    <!-- <script src="https://unpkg.com/@jarstone/dselect/dist/js/dselect.js"></script> -->
    <script src="/statics/scripts/dselect.js"></script> 
    
  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/index.php">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
        <a class="nav-item nav-link" href="?controlador=libros&accion=inicio">Libros</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="?controlador=autor&accion=inicio">Autores</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="?controlador=editorial&accion=inicio">Editoriales</a>
      </li>
      <li>
        <a class="nav-item nav-link" href="?controlador=generos&accion=inicio">Generos</a>
      </li>
      <li>
        <a class="nav-item nav-link" href="?controlador=usuarios&accion=inicio">Usuarios</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="text" placeholder="Search">
      <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
  <?php if($_SESSION){?>
  <div class="">
    <span class="text-white">Bienvenido!!!  <?php echo ucfirst($_SESSION['nombre']) ?><br/></span>
    <a class="navbar-brand" href="#">
      <img src="/statics/img/generic_avatar.png" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
  </div>
  <?php }?>
</nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
              <?php include_once("ruteador.php")?>
            </div>
            
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>

<script>
$(function(){

    const config = {
    search: true, // Toggle search feature. Default: false
    creatable: false, // Creatable selection. Default: false
    clearable: false, // Clearable selection. Default: false
    maxHeight: '360px', // Max height for showing scrollbar. Default: 360px
    size: '', // Can be "sm" or "lg". Default ''
}


let idselect=['#id_autor','#id_editorial','#id_genero'];
idselect.forEach(addSearch);

function addSearch(foobar){
    dselect(document.querySelector(foobar), config)
}

});



</script>



<div class="d-flex justify-content-center align-items-center vh-100" >

<?php if(!$_SESSION){?>
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="" method="post" class="row g-3">
                        <h4>Bienvenido a biblio</h4>
                        <div class="col-12">
                            <label>Usuario</label>
                            <input type="email" name="user" class="form-control" placeholder="Usuario">
                        </div>
                        <div class="col-12">
                            <label>Contraseña</label>
                            <input type="password" name="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Recordar</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark float-end">Aceptar</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Todavía no tenes una cuenta? <a href="#">Resgistrate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php }else{
    header("Location: index.php");
}?>
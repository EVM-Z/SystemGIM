<?php 
include 'inc/templates/header.php';
?>

<div class="site-section bg-light contact-wrap" id="contact-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <h2 class="heading mb-3">Iniciar Sesion</h2>
                <p>Ingresa para usar ALFA.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="post" data-aos="fade">

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="email">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="contraseña">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Entrar">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-3">
                            <a href="registro.php" class="">Registrate</a>
                        </div>
                        
                        <div class="">
                            <p class="#">Olvidé mi contraseña</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<?php
include 'inc/templates/footer.php';
?>
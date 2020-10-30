<?php

error_reporting(E_ALL ^ E_NOTICE);

session_start();
$cerrar_sesion = $_GET['cerrar_sesion'];
if ($cerrar_sesion) {
    // Cerramos sesion
    session_destroy();
}

include 'admin/pages/funciones/sesiones.php';
include 'includes/templates/header.php';
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
                <form name="login" id="login" method="POST" action="admin/pages/modelo-login.php" data-aos="fade">

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Entrar">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-3">
                        <input type="hidden" name="registro" value="nuevo">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" id="crear_registro" value="Crear cuenta">
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
include 'includes/templates/footer.php';
?>
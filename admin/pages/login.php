<?php

error_reporting(E_ALL ^ E_NOTICE);
// Toma la sesion actual
session_start();
// El valor $_GET['cerrar_sesion']; lo toma de barra-lateral.php del boton Salir
$cerrar_sesion = $_GET['cerrar_sesion'];
if ($cerrar_sesion) {
    // Cerramos sesion
    session_destroy();
}

include 'funciones/funciones.php';
include 'templates/header-workout.php';
?>

<div class="site-section bg-light contact-wrap" id="contact-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <h2 class="heading mb-3">Iniciar Sesión</h2>
                <p>Ingresa para usar Workout.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">

                <!-- Información que se manda al admin-ajax.php -->
                <form name="login" id="login" method="POST" action="modelo-login.php" data-aos="fade">

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <!-- Parametros que se mandan al if del modelo-login.php -->
                            <input type="hidden" name="login" value="1">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Entrar">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row justify-content-center">
                            <a href="registro.php">Crea una cuenta</a>
                        </div>
                        <div class="row justify-content-center">
                            <a href="recuperar-password.php">Recuperar Contraseña</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<?php
include 'templates/footer-workout.php';
?>
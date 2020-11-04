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
                <span class="subheading">Ya casi</span>
                <h2 class="heading mb-3">Registrate</h2>
                <p>Llena el formulario para usar Workout y empezar.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">

                <!-- Información que se manda al admin-ajax.php -->
                <form name="guardar-registro" id="guardar-registro" method="POST" action="modelo-registro.php" data-aos="fade">

                <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="text" name="gimnasio_registro" id="gimnasio_registro" class="form-control" placeholder="Nombre del Gimnasio" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="email" name="email_registro" id="email_registro" class="form-control" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="password" name="password_registro" id="password_registro" class="form-control" placeholder="Contraseña" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <!-- Parametros que se mandan al if del modelo-registro.php -->
                            <input type="hidden" name="guardar" value="nuevo">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" id="" value="Crear cuenta">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="row">
                            <p class="#">¿Ya tienes cuenta?</p>
                            <a href="login.php">Inicia Sesión</a>
                            
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
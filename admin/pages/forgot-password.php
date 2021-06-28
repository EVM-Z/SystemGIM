<?php
include 'funciones/funciones.php';
include 'templates/header-workout.php';
?>


<div class="site-section bg-light contact-wrap" id="contact-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <h2 class="heading mb-3">Recuperar Contraseña</h2>
                <p>Ingresa tu correo para recuperar tu contraseña.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">

                <!-- Información que se manda al admin-ajax.php -->
                <!-- enctype="multipart/form-data" es para cuando se manejan archivos -->
                <form name="" id="" method="" action="" data-aos="fade">

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="email" name="" id="" class="form-control" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <!-- Parametros que se mandan al if del modelo-registro.php -->
                            <input type="hidden" name="" value="">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" id="" value="Recuperar">
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
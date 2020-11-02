<?php
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
                <form name="login" id="login" method="POST" action="modelo-login.php" data-aos="fade">

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email_registro" id="email_registro" placeholder="Email">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="password" class="form-control" name="password_registro" id="password_registro" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="col-md-6">
                            <input type="hidden" name="login" value="">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Entrar">
                        </div>
                    </div>

                    <div class="form-group row justify-content-center">
                        <div class="row">
                            <p class="#">¿No tienes usuario?</p>
                            <a href="registro.php">Crea una cuenta</a>
                            
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
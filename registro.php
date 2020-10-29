<?php 
include 'includes/templates/header.php';
?>


<div class="site-section bg-light contact-wrap" id="contact-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <span class="subheading">Ya casi</span>
                <h2 class="heading mb-3">Registrate</h2>
                <p>Llena el formulario para usar ALFA y empezar.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <form name="guardar-registro" id="guardar-registro" method="POST" action="admin/pages/modelo-registro.php" data-aos="fade">

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
                            <input type="hidden" name="registro" value="nuevo">
                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" id="crear_registro" value="Crear cuenta">
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
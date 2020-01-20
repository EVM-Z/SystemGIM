<?php 

include 'inc/templates/header.php';
include 'inc/templates/barra-navegacion.php';

?>



<div class="site-section bg-light contact-wrap" id="contact-section">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8  section-heading">
                <span class="subheading">Ya casi</span>
                <h2 class="heading mb-3">Contactanos</h2>
                <p>Llena el formulario para poderte registrar en ALFA y empezar.
                </p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-7">
                <form method="post" data-aos="fade">
                    <div class="form-group row">
                        <div class="col-md-6 mb-3 mb-lg-0">
                            <input type="text" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Apellido">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="text" class="form-control" placeholder="Gimnasio">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-12">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <textarea class="form-control" id="" cols="30" rows="10" placeholder="Escribe un mensaje aqui."></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6">

                            <input type="submit" class="btn btn-primary py-3 px-5 btn-block" value="Enviar">
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
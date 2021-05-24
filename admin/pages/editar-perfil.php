<?php

// Antes que nada, verificamos la sesion
include 'funciones/sesiones.php';
include 'funciones/funciones.php';
include 'templates/header.php';
include 'templates/barra-superior.php';
include 'templates/barra-lateral.php';

// Obtenemos el id de la sesion
$id = $_SESSION['id'];

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Perfil</h1>

                    <?php
                      $sql = "SELECT * FROM registro WHERE id_registro = $id ";
                      $resultado = $conn->query($sql);
                      $registro = $resultado->fetch_assoc();
                      // Imprimimos el array de la tabla registro
                      // echo "<pre>";
                      // var_dump($registro);
                      // echo "</pre>";
                      ?>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title"></h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <!-- Información que se manda al admin-ajax.php -->
                      <!-- enctype="multipart/form-data" es para cuando se manejan archivos -->
                      <form name="guardar-registro-perfil" id="guardar-registro-perfil" method="POST" action="modelo-perfil.php" enctype="multipart/form-data" data-aos="fade">
                        <div class="card-body">

                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $registro['email_registro']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" value="" placeholder="Nueva Contraseña">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="gimnasio" class="col-sm-2 col-form-label">Gimnasio</label>
                            <div class="col-sm-10 input-group date" id="">
                            <input type="text" name="gimnasio" id="gimnasio" class="form-control" value="<?php echo $registro['gimnasio_registro']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $registro['nombre_registro']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="apellido" class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $registro['apellido_registro']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="nombre" class="col-sm-2 col-form-label">Categoría</label>
                            <div class="col-sm-10">
                            <select name="sexo" id="sexo" class="form-control seleccionar">
                              <option value="">- Selecione -</option>
                              <?php
                                try {
                                  $sexo_actual = $registro['sexo_registro'];
                                    if ('hombre' == $sexo_actual) { ?>
                                      <option value="hombre" selected>Hombre</option>
                                      <option value="mujer">Mujer</option>
                                      <option value="otro">Otro</option>

                                    <?php } else if ('mujer' == $sexo_actual) { ?>
                                      <option value="mujer" selected>Mujer</option>
                                      <option value="hombre">Hombre</option>
                                      <option value="otro">Otro</option>

                                    <?php } else if ('otro' == $sexo_actual) { ?>
                                      <option value="otro" selected>Otro</option>
                                      <option value="hombre">Hombre</option>
                                      <option value="mujer">Mujer</option>
                                    <?php
                                    }  
                                } catch (Exception $e) {
                                  echo "Error: " . $e->getMessage();
                                }
                              ?>
                                
                            </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="imagen" class="col-sm-2 col-form-label">Imagen</label>
                            <img src="../dist/img/registros/<?php echo $registro['url_imagen_registro']; ?>" width="200">
                          </div>

                          <div class="form-group row">
                            <label for="archivo_imagen" class="col-sm-2 col-form-label">Imagen</label>
                            <div class="col-sm-10 input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagen_registro" name="archivo_imagen">
                                <label class="custom-file-label" for="imagen_registro">Elije una imagen</label>
                              </div>
                            </div>
                          </div>


                        </div>
                        <!-- /.card-body -->
                    
                        <div class="card-footer">
                          <div class="row justify-content-end">
                            <!-- Parametros que se mandan al if del modelo-perfil.php -->
                            <input type="hidden" name="registro" value="editar">
                            <input type="hidden" name="id_registro" value="<?php echo $registro['id_registro']; ?>">
                            <input type="submit" class="btn btn-primary" id="" value="Guardar">
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

  </div>



<?php
include 'templates/footer.php';
?>
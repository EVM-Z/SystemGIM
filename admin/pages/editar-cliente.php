<?php
// Obtiene el id del invitado desde la URL
$id = $_GET['id'];
if (!filter_var($id, FILTER_VALIDATE_INT)) {
    die("Error");
}

// Antes que nada, verificamos la sesion
include 'funciones/sesiones.php';
include 'funciones/funciones.php';
include 'templates/header.php';
include 'templates/barra-superior.php';
include 'templates/barra-lateral.php';

// Obtenemos el id de la sesión
$id_sesion = $_SESSION['id'];

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Cliente</h1>

                      <?php
                      $sql = "SELECT * FROM cliente WHERE id_cliente = $id ";
                      $resultado = $conn->query($sql);
                      $cliente = $resultado->fetch_assoc();
                      // Imprimimos el array de la tabla cliente
                      // echo "<pre>";
                      // var_dump($cliente);
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
                        <h3 class="card-title"><?php echo $cliente['nombre_cliente'] . " " . $cliente['apellido_cliente']; ?></h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <!-- Información que se manda al admin-ajax.php -->
                      <!-- enctype="multipart/form-data" es para cuando se manejan archivos -->
                      <form name="guardar-registro-archivo" id="guardar-registro-archivo" method="POST" action="modelo-cliente.php" enctype="multipart/form-data" data-aos="fade">
                        <div class="card-body">

                          <div class="form-group row">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente['nombre_cliente']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="apellido" class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $cliente['apellido_cliente']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="nombre" class="col-sm-2 col-form-label">Sexo</label>
                            <div class="col-sm-10">
                            <select name="sexo" id="sexo" class="form-control seleccionar">
                              <option value="">- Selecione -</option>
                              <?php
                                try {
                                  $sexo_actual = $cliente['sexo_cliente'];
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

                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Correo Electronico</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $cliente['email_cliente']; ?>">
                            </div>
                          </div>


                          <div class="form-group row">
                            <label for="fecha" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>

                            <?php
                            // Accedemos al valor de la tabla
                            $fecha = $cliente['fecha_nacimiento_cliente'];
                            // Reemplaza los caracteres
                            $fecha = str_replace('-', '/', $fecha);
                            // Cambiamos la fecha de la BD a formato local
                            $fecha_formateada = date('d-m-Y', strtotime($fecha));
                            ?>

                            <div class="col-sm-10 input-group date" id="fecha" data-target-input="nearest">
                            <input type="text" name="fecha" id="fecha" class="form-control datetimepicker-input" data-toggle="datetimepicker" placeholder="dd/mm/aa" data-target="#fecha" data-toggle="datetimepicker" value="<?php echo $fecha_formateada; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente['telefono_cliente']; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="gimnasio" class="col-sm-2 col-form-label">Gimnasio</label>
                            <div class="col-sm-10">
                            <select name="gimnasio" id="gimnasio" class="form-control seleccionar">
                            <option value="0">- Seleccione -</option>
                            <?php
                              try {
                                
                                $gimnasio_actual = $cliente['gimnasio_cliente'];
                                $sql = "SELECT * FROM registro WHERE id_registro = $id_sesion ";
                                $resultado = $conn->query($sql);
                                while($tabla_registro = $resultado->fetch_assoc()){

                                  if ($tabla_registro['id_registro'] == $gimnasio_actual) { ?>
                                    <option value="<?php echo $tabla_registro['id_registro']; ?>" selected>
                                      <?php echo $tabla_registro['gimnasio_registro']; ?>
                                    </option>

                                  <?php } else { ?>
                                    <option value="<?php echo $tabla_registro['id_registro']; ?>">
                                      <?php echo $tabla_registro['gimnasio_registro']; ?>
                                    </option>
                                  <?php }
                                  
                                }
                              } catch (Exception $e) {
                                echo "Error: " . $e->getMessage();
                              }
                            ?>
                            </select>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="apellido_invitado" class="col-sm-2 col-form-label">Imagen</label>
                            <img src="../dist/img/clientes/<?php echo $cliente['url_imagen_cliente']; ?>" width="200">
                          </div>

                          


                          <div class="form-group row">
                            <label for="archivo_imagen" class="col-sm-2 col-form-label">Imagen</label>
                            <div class="col-sm-10 input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="imagen_cliente" name="archivo_imagen">
                                <label class="custom-file-label" for="imagen_cliente">Elije una imagen</label>
                              </div>
                            </div>
                          </div>


                        </div>
                        <!-- /.card-body -->
                    
                        <div class="card-footer">
                          <div class="row justify-content-end">
                            <!-- Parametros que se mandan al if del modelo-cliente.php -->
                            <input type="hidden" name="registro" value="editar">
                            <input type="hidden" name="id_cliente" value="<?php echo $cliente['id_cliente']; ?>">
                            <input type="submit" class="btn btn-primary" id="" value="Editar Cliente">
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
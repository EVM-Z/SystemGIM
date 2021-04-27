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
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Editar Pago</h1>

                      <?php
                      $sql = "SELECT * FROM pago WHERE id_pago = $id ";
                      $resultado = $conn->query($sql);
                      $pago = $resultado->fetch_assoc();
                      // Imprimimos el array de la tabla cliente
                      // echo "<pre>";
                      // var_dump($pago);
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
                      <form name="guardar-registro-pago" id="guardar-registro-pago" method="POST" action="modelo-pago.php" data-aos="fade">
                        <div class="card-body">

                          <div class="form-group row">
                            <label for="nombre" class="col-sm-2 col-form-label">Nombre Completo</label>
                            <div class="col-sm-10">
                            <select name="nombre_cliente_pago" id="nombre_cliente_pago" class="form-control seleccionar">
                            <option value="0">- Seleccione -</option>
                            <?php
                              try {
                                
                                $cliente_actual = $pago['nombre_cliente_pago'];
                                $sql = "SELECT * FROM cliente ";
                                $resultado = $conn->query($sql);
                                while($tabla_cliente = $resultado->fetch_assoc()){

                                  if ($tabla_cliente['id_cliente'] == $cliente_actual) { ?>
                                    <option value="<?php echo $tabla_cliente['id_cliente']; ?>" selected>
                                      <?php echo $tabla_cliente['nombre_cliente'] . " " . $tabla_cliente['apellido_cliente']; ?>
                                    </option>

                                  <?php } else { ?>
                                    <option value="<?php echo $tabla_cliente['id_cliente']; ?>">
                                      <?php echo $tabla_cliente['nombre_cliente'] . " " . $tabla_cliente['apellido_cliente']; ?>
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

                          <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Cobertura del Pago</label>

                            <?php
                            // Accedemos al valor de la tabla
                            $fecha = $pago['cobertura_pago'];
                            // Reemplaza los caracteres
                            $fecha = str_replace('-', '/', $fecha);
                            // Cambiamos la fecha de la BD a formato local
                            $fecha_formateada = date('d-m-Y', strtotime($fecha));
                            ?>

                            <div class="col-sm-10 input-group date" id="cobertura_pago" data-target-input="nearest">
                            <input type="text" name="cobertura_pago" id="cobertura_pago" class="form-control datetimepicker-input" data-toggle="datetimepicker" placeholder="dd/mm/aa" data-target="#cobertura_pago" data-toggle="datetimepicker" value="<?php echo $fecha_formateada; ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label for="telefono" class="col-sm-2 col-form-label">Pago</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="pago" name="pago" value="<?php echo $pago['pago']; ?>">
                            </div>
                          </div>

                        </div>
                        <!-- /.card-body -->
                    
                        <div class="card-footer">
                          <div class="row justify-content-end">
                            <!-- Parametros que se mandan al if del modelo-cliente.php -->
                            <input type="hidden" name="registro" value="editar">
                            <input type="hidden" name="id_pago" value="<?php echo $pago['id_pago']; ?>">
                            <input type="submit" class="btn btn-primary" id="" value="Editar Pago">
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
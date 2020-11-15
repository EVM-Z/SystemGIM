<?php
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <div class="row">
              <h1 class="m-0 text-dark">Clientes</h1>
              <div class="col-md-auto">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#registroCliente"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Clientes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <div class="modal fade" id="registroCliente" tabindex="-1" role="dialog" aria-labelledby="registroClienteLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registroClienteLabel">Nuevo Cliente</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Información que se manda al admin-ajax.php -->
            <!-- enctype="multipart/form-data" es para cuando se manejan archivos -->
            <form name="guardar-registro-archivo" id="guardar-registro-archivo" method="POST" action="modelo-cliente.php" enctype="multipart/form-data" data-aos="fade">
              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Nombre*</h6>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Neil" required>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Apellido*</h6>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Armstrong" required>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Correo Electronico*</h6>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@ejemplo.com" required>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Fecha de Nacimiento*</h6>
                </div>
                <div class="col-md-9 input-group date" id="fecha" data-target-input="nearest">
                  <input type="text" name="fecha" id="fecha" class="form-control datetimepicker-input" data-toggle="datetimepicker" placeholder="dd/mm/aa" data-target="#fecha" data-toggle="datetimepicker">
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Telefono</h6>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="telefono" id="telefono" placeholder="">
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Gimnasio*</h6>
                </div>
                <div class="col-md-9">
                <!-- class="seleccionar" es llamadao de app.js -->
                <select id="" name="gimnasio" class="form-control seleccionar">
                <option value="0">- Seleccione -</option>
                  <?php
                    try {
                      $sql = "SELECT * FROM registro ";
                      $resultado = $conn->query($sql);
                      while ($gimnasio_registro = $resultado->fetch_assoc()) { ?>
                        <option value="<?php echo $gimnasio_registro['id_registro']; ?>">
                        <?php echo $gimnasio_registro['gimnasio_registro']; ?>
                        </option>
                      <?php }
                    } catch (Exception $e) {
                        echo "Error: " . $e->getMessage();
                    }
                  ?>
                </select>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6>Imagen</h6>
                </div>
                <div class="col-md-9 input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="imagen_cliente" name="archivo_imagen">
                      <label class="custom-file-label" for="imagen_cliente">Elije una imagen</label>
                  </div>
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <!-- Parametros que se mandan al if del modelo-cliente.php -->
                <input type="hidden" name="registro" value="nuevo">
                <input type="submit" class="btn btn-primary" id="" value="Crear Cliente">
              </div>

              

              

              

              
              
            </form>
          </div>
          
        </div>
      </div>
    </div>



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Clientes</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="registros" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
              </tr>
              </tbody>
              <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->




  </div>
  <!-- /.content-wrapper -->

<?php
include 'templates/footer.php';
?>
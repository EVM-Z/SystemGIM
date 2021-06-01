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
            <form name="guardar-registro-cliente" id="guardar-registro-cliente" method="POST" action="modelo-cliente.php" enctype="multipart/form-data" data-aos="fade">
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
                  <h6 class="">Apellidos*</h6>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Armstrong" required>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Sexo*</h6>
                </div>
                <div class="col-md-9">
                  <select name="sexo" id="sexo" class="form-control seleccionar">Sexo
                    <option value="">- Seleccione -</option>
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                    <option value="otro">Otro</option>
                  </select>
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Correo Electronico</h6>
                </div>
                <div class="col-md-9">
                  <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@ejemplo.com">
                </div>
              </div>

              <div class="form-group row justify-content-center">
                <div class="col-md-3">
                  <h6 class="">Fecha de Nacimiento*</h6>
                </div>
                <div class="col-md-9 input-group date" id="fecha" data-target-input="nearest">
                  <!-- data-target es informacion que se manda a app.js -->
                  <input type="text" name="fecha" id="fecha" class="form-control datetimepicker-input" data-toggle="datetimepicker" placeholder="dd/mm/aa" data-target="#fecha" data-toggle="datetimepicker" required>
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
                <select id="gimnasio" name="gimnasio" class="form-control seleccionar">
                <option value="0">- Seleccione -</option>
                  <?php
                    try {
                      $sql = "SELECT * FROM registro WHERE id_registro = $id ";
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
                  <h6>Imagen*</h6>
                </div>
                <div class="col-md-9 input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="imagen_cliente" name="archivo_imagen">
                      <label class="custom-file-label" for="imagen_cliente">Elije una imagen</label>
                  </div>
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6 text-secondary">
                  <p>* Campos Obligatorios</p>
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
          <!-- /.card-header -->
          <div class="card-body">
            <table id="registros-cliente" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  try {
                    /* Para visualizar mejor el codigo, usar Workbench */
                    $sql = "SELECT * ";
                    $sql .= " FROM cliente ";
                    $sql .= " INNER JOIN registro ";
                    $sql .= " ON cliente.gimnasio_cliente=registro.id_registro ";
                    $sql .= " WHERE gimnasio_cliente = $id ";
                    $sql .= " ORDER BY id_cliente DESC ";
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                  }
                  while($cliente = $resultado->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $cliente['id_cliente']; ?></td>
                      <td><img src="../dist/img/clientes/<?php echo $cliente['url_imagen_cliente']; ?>" width="50" alt=""></td>
                      <td><?php echo $cliente['nombre_cliente'] . " " . $cliente['apellido_cliente']; ?></td>
                      <td><?php echo $cliente['email_cliente']; ?></td>
                      <td><?php echo $cliente['telefono_cliente']; ?></td>
                      
                      <td>
                        <div class="onoffswitch">
                          <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" tabindex="0">
                          <label class="onoffswitch-label" for="myonoffswitch"></label>
                        </div>
                      </td>

                      <td>
                        <!-- <a title="Ver Todo" href="editar-cliente.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn bg-gradient-primary btn-sm margin">
                        <i class="fas fa-list-alt"></i>
                        </a> -->
                        <a title="Editar" href="editar-cliente.php?id=<?php echo $cliente['id_cliente']; ?>" class="btn bg-gradient-warning btn-sm margin">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                        <!-- Se manda al admin-ajax.js -->
                        <a title="Eliminar" href="#" data-id="<?php echo $cliente['id_cliente']; ?>" data-tipo="cliente" class="btn bg-gradient-danger btn-sm borrar_registro">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Estado</th>
                <th>Acciones</th>
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
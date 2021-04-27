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
              <h1 class="m-0 text-dark">Pagos</h1>
              <div class="col-md-auto">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#registroPago"><i class="fas fa-plus"></i></button>
              </div>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="modal fade" id="registroPago" tabindex="-1" role="dialog" aria-labelledby="registroPagoLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="registroPagoLabel">Nuevo Pago</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Información que se manda al admin-ajax.php -->
            <!-- enctype="multipart/form-data" es para cuando se manejan archivos -->
            <form name="guardar-registro-pago" id="guardar-registro-pago" method="POST" action="modelo-pago.php" data-aos="fade">

            <div class="form-group row justify-content-center">
              <div class="col-md-3">
                <h6 class="">Nombre Completo</h6>
              </div>
              <div class="col-md-9">
              <!-- class="seleccionar" es llamado de app.js -->
              
              
              <select id="nombre_cliente_pago" name="nombre_cliente_pago" class="form-control seleccionar">
              <option value="0">- Nombre y Apellido -</option>
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

                    while ($pago = $resultado->fetch_assoc()) { ?>
                      <option value="<?php echo $pago['id_cliente']; ?>">
                      <?php echo $pago['nombre_cliente'] . " " . $pago['apellido_cliente']; ?>
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
                <h6 class="">Cobertura del Pago*</h6>
              </div>
              <div class="col-md-9 input-group date" id="cobertura_pago" data-target-input="nearest">
                <!-- data-target es informacion que se manda a app.js -->
                <input type="text" name="cobertura_pago" id="cobertura_pago" class="form-control datetimepicker-input" data-toggle="datetimepicker" placeholder="dd/mm/aa" data-target="#cobertura_pago" data-toggle="datetimepicker" required>
              </div>
            </div>

            <div class="form-group row justify-content-center">
              <div class="col-md-3">
                <h6 class="">Pago*</h6>
              </div>
              <div class="col-md-9">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                  </div>
                  <input type="text" id="pago" name="pago" class="form-control" placeholder="100.00">
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
              <!-- Parametros que se mandan al if del modelo-pago.php -->
              <input type="hidden" name="registro" value="nuevo">
              <input type="submit" class="btn btn-primary" id="" value="Crear Pago">
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <!-- id se manda a app.js -->
            <table id="registros-pago" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Gimnasio</th>
                <th>Cobertura de Pago</th>
                <th>Pago</th>
                <th>Fecha del Pago</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  try {
                    /* Para visualizar mejor el codigo, usar Workbench */
                    $sql = "SELECT";
                    $sql .= " p.id_pago AS 'id_pago', ";
                    $sql .= " p.nombre_cliente_pago AS 'nombre_cliente', ";
                    
                    $sql .= " IFNULL(p.cobertura_pago, 'Sin datos') AS 'cobertura_pago', ";
                    $sql .= " IFNULL(p.pago, 'Sin datos') AS 'pago', ";
                    $sql .= " IFNULL(p.fecha_creacion_pago, 'Sin datos') AS 'fecha_pago', ";

                    $sql .= " c.id_cliente, ";
                    $sql .= " c.nombre_cliente, ";
                    $sql .= " c.apellido_cliente, ";
                    $sql .= " c.email_cliente, ";
                    $sql .= " c.fecha_nacimiento_cliente, ";
                    $sql .= " c.telefono_cliente, ";
                    $sql .= " c.gimnasio_cliente, ";
                    $sql .= " c.url_imagen_cliente ";

                    $sql .= " FROM pago p ";
                    $sql .= " LEFT JOIN cliente c ";
                    $sql .= " ON p.nombre_cliente_pago=c.id_cliente ";
                    $sql .= " WHERE c.gimnasio_cliente = $id ";
                    $sql .= " ORDER BY id_pago DESC; ";
                    
                    $resultado = $conn->query($sql);
                  } catch (Exception $e) {
                    $error = $e->getMessage();
                    echo $error;
                  }
                  while($pago = $resultado->fetch_assoc()) { ?>
                    <tr>
                      
                      <td><?php echo $pago['id_pago']; ?></td>
                      <td><?php echo $pago['nombre_cliente'] . " " . $pago['apellido_cliente']; ?></td>
                      <td><?php echo $pago['gimnasio_cliente']; ?></td>
                      <td><?php echo $pago['cobertura_pago']; ?></td>
                      <td><?php echo $pago['pago']; ?></td>
                      <td><?php echo $pago['fecha_pago']; ?></td>

                      <td>
                        <!-- <a title="Ver Todo" href="editar-cliente.php?id=<?php echo $pago['id_pago']; ?>" class="btn bg-gradient-primary btn-sm margin">
                        <i class="fas fa-list-alt"></i>
                        </a> -->
                        <a title="Editar" href="editar-pago.php?id=<?php echo $pago['id_pago']; ?>" class="btn bg-gradient-warning btn-sm margin">
                        <i class="fas fa-pencil-alt"></i>
                        </a>
                        <!-- Se manda al admin-ajax.js -->
                        <a title="Eliminar" href="#" data-id="<?php echo $pago['id_pago']; ?>" data-tipo="cliente" class="btn bg-gradient-danger btn-sm borrar_registro">
                        <i class="fas fa-trash-alt"></i>
                        </a>
                      </td>
                    </tr>
                  <?php } ?>

              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Gimnasio</th>
                <th>Cobertura de Pago</th>
                <th>Pago</th>
                <th>Fecha del Pago</th>
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
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
          <div class="col-sm-12">

            <!-- Información que se manda al admin-ajax.php -->
            <form name="guardar-registro-entrada-salida" id="guardar-registro-entrada-salida" method="POST" action="modelo-entrada-salida.php" data-aos="fade">
              <div class="row">
                <div class="col-3">
                  <div class="row">
                    <div class="col-md-auto">
                      <h1 class="m-0 text-dark">E/S</h1>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="id_entrada_salida" id="id_entrada_salida" placeholder="Ingresar ID">
                    </div>
                  </div>
                </div>
                <div class="col-3">
                  <!-- Parametros que se mandan al if del modelo-entrada-salida.php -->
                  <input type="hidden" name="registro" value="entrada">
                  <input type="submit" class="btn btn-block btn-primary" id="" value="Check">
                </div>
                </div>
              </form>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Historial de Entradas/Salidas</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="registros-entrada-salida" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Nombre Completo</th>
                <th>Cobertura de Pago</th>
              </tr>
              </thead>
              <tbody>
                <?php
                try {
                  /* Para visualizar mejor el codigo, usar Workbench */
                  $sql = "SELECT ";
                  $sql .= " es.id_entrada_salida AS 'id_entrada_salida', ";
                  $sql .= " es.fecha_entrada_salida AS 'f_entrada_salida', ";
                  $sql .= " es.hora_entrada_salida AS 'h_entrada_salida', ";

                  $sql .= " c.id_cliente AS 'id_cliente', ";
                  $sql .= " c.nombre_cliente AS 'nombre_cliente', ";
                  $sql .= " c.apellido_cliente AS 'apellido_cliente', ";
                  $sql .= " c.gimnasio_cliente AS 'gimnasio_cliente', ";

                  $sql .= " IFNULL(p.id_pago, 'Sin datos') AS 'id_pago', ";
                  $sql .= " IFNULL(p.nombre_cliente_pago, 'Sin datos') AS 'id_cliente_en_el_pago', ";
                  $sql .= " IFNULL(p.cobertura_pago, 'Sin datos') AS 'cobertura_pago', ";
                  $sql .= " IFNULL(p.pago, 'Sin datos') AS 'pago', ";
                  $sql .= " IFNULL(p.fecha_creacion_pago, 'Sin datos') AS 'fecha_pago' ";
                  
                  $sql .= " FROM entrada_salida es ";
                  $sql .= " LEFT JOIN cliente c ";
                  $sql .= " ON es.cliente_entrada_salida = c.id_cliente ";
                  $sql .= " LEFT JOIN pago p ";
                  $sql .= " ON c.id_cliente = p.nombre_cliente_pago ";

                  $sql .= " WHERE c.gimnasio_cliente = $id ";
                  $sql .= " ORDER BY es.id_entrada_salida DESC ";

                  $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                  echo $error;
                }
                
                while($entrada_salida = $resultado->fetch_assoc()) { ?>

                  <tr>
                    <th><?php echo $entrada_salida['id_entrada_salida']; ?></th>
                    <td><?php echo $entrada_salida['f_entrada_salida'] . ' / ' . $entrada_salida['h_entrada_salida']; ?></td>
                    <td><?php echo $entrada_salida['nombre_cliente'] . ' ' . $entrada_salida['apellido_cliente']; ?></td>
                    <td><?php echo $entrada_salida['cobertura_pago']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Nombre Completo</th>
                <th>Cobertura de Pago</th>
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
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



    <?php
      $sql = "SELECT * FROM cliente WHERE id_cliente = 21 ";
      $resultado = $conn->query($sql);
      $cliente = $resultado->fetch_assoc();
      /*
      echo "<pre>";
      var_dump($cliente);
      echo "</pre>";
      */
    ?>



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
                <th>ID Cliente</th>
                <th>Nombre</th>
                <th>Gimnasio</th>
              </tr>
              </thead>
              <tbody>
                <?php
                try {
                  $sql = "SELECT * ";
                  $sql .= " FROM entrada_salida ";
                  $sql .= " INNER JOIN cliente ";
                  $sql .= " ON entrada_salida.cliente_entrada_salida=cliente.id_cliente ";
                  $sql .= " WHERE gimnasio_cliente = $id ";
                  $sql .= " ORDER BY id_entrada_salida ";
                  $resultado = $conn->query($sql);
                } catch (Exception $e) {
                  $error = $e->getMessage();
                  echo $error;
                }
                
                while($entrada_salida = $resultado->fetch_assoc()) { ?>

                  <?php
                  // Accedemos al valor de la tabla
                  $fecha = $entrada_salida['fecha_entrada_salida'];
                  // Reemplaza los caracteres
                  $fecha = str_replace('-', '/', $fecha);
                  // Cambiamos la fecha de la BD a formato local
                  $fecha_formateada = date('d-m-Y', strtotime($fecha));
                  ?>

                  <tr>
                    <td><?php echo $entrada_salida['id_entrada_salida']; ?></td>
                    <td><?php echo $fecha_formateada . " / " . $entrada_salida['e_s']; ?></td>
                    <td><?php echo $entrada_salida['id_cliente']; ?></td>
                    <td><?php echo $entrada_salida['nombre_cliente'] . " " . $entrada_salida['apellido_cliente']; ?></td>
                    <td><?php echo $entrada_salida['gimnasio_cliente']; ?></td>
                  </tr>
                <?php } ?>
              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>ID Cliente</th>
                <th>Nombre</th>
                <th>Gimnasio</th>
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
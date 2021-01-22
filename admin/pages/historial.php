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
              <h1 class="m-0 text-dark">Historial</h1>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="registros" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Imagen</th>
                <th>ID Cliente</th>
                <th>Nombre</th>
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
                    $sql .= " ORDER BY id_entrada_salida DESC ";
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
                      <td><img src="../dist/img/clientes/<?php echo $entrada_salida['url_imagen_cliente']; ?>" width="100" alt=""></td>
                      <td><?php echo $entrada_salida['id_cliente']; ?></td>
                      <td><?php echo $entrada_salida['nombre_cliente'] . " " . $entrada_salida['apellido_cliente']; ?></td>
                    </tr>
                  <?php } ?>
              </tbody>
              <tfoot>
              <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Imagen</th>
                <th>ID Cliente</th>
                <th>Nombre</th>
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
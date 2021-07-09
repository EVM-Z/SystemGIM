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
            <h1 class="m-0 text-dark">Inicio</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">

                <?php
                $sql = "SELECT COUNT(*) total_cliente ";
                $sql .= " FROM cliente ";
                $sql .= " WHERE gimnasio_cliente = $id ";
                $sql .= " AND estado_cliente = 1 ";
                $resultado = $conn->query($sql);
                $cliente = $resultado->fetch_assoc();
                // Imprimimos el array de la tabla cliente
                // echo "<pre>";
                // var_dump($cliente);
                // echo "<pre>";
                ?>

                <h3><?php echo $cliente['total_cliente']; ?></h3>
                <p>Clientes</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">

                <?php
                $sql = "SELECT COUNT(*) total_pagos ";
                $sql .= " FROM pago ";
                $sql .= " INNER JOIN cliente ";
                $sql .= " ON pago.nombre_cliente_pago = cliente.id_cliente ";
                $sql .= " WHERE gimnasio_cliente = $id ";
                $sql .= " AND estado_cliente = 1 ";
                $resultado = $conn->query($sql);
                $pago = $resultado->fetch_assoc();
                ?>

                <h3><?php echo $pago['total_pagos']; ?></h3>
                <p>Pagos</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>#</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="fas fa-moon"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>#</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="fas fa-fighter-jet"></i>
              </div>
              <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->


        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h3 class="card-title">Nuevos Clientes</h3>
                </div>
              </div>
              <div class="card-body">
                <div class="d-flex">
                  <p class="d-flex flex-column">
                    <span class="text-bold text-lg">#</span>
                  </p>
                </div>
                <!-- /.d-flex -->
                <div class="position-relative mb-4">
                  <canvas id="sales-chart" height="200"></canvas>
                </div>

                <div class="d-flex flex-row justify-content-end">
                  <span class="mr-2">
                    <i class="fas fa-square text-primary"></i> This year
                  </span>

                  <span>
                    <i class="fas fa-square text-gray"></i> Last year
                  </span>
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>


            
      </div>
    </section>
    <!-- /.content -->




  </div>
  <!-- /.content-wrapper -->

<?php
include 'templates/footer.php';
?>
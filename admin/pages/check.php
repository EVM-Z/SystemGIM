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
          <div class="col-sm-12">

            <!-- Información que se manda al admin-ajax.php -->
            <form name="guardar-registro-check" id="guardar-registro-check" method="POST" action="modelo-check.php" data-aos="fade">
              <div class="row">
                <div class="col-3">
                  <div class="row">
                    <div class="col-md-auto">
                      <h1 class="m-0 text-dark">Check</h1>
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="id_check" id="id_check" placeholder="Ingresar ID">
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="row">
                    <div class="col-6">
                      <!-- Parametros que se mandan al if del modelo-check.php -->
                      <input type="hidden" name="registro" value="entrada">
                      <input type="submit" class="btn btn-block btn-primary" id="" value="Check">
                      
                    </div>
                  </div>
                </div>

              </form>

              
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

            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
              <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img class="profile-user-img img-fluid img-circle"
                          src="../dist/img/clientes/<?php echo $cliente['url_imagen_cliente']; ?>"
                          alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center"><?php echo $cliente['nombre_cliente'] . " " . $cliente['apellido_cliente']; ?></h3>
                    
                    <strong><i class="fas fa-envelope mr-1"></i> Email</strong>
                    <p class="text-muted">
                      <?php echo $cliente['email_cliente']; ?>
                    </p>
                    <hr>
                    
                    <strong><i class="fas fa-calendar-day mr-1"></i> Fecha de Nacimiento</strong>

                    <?php
                    // Accedemos al valor de la tabla
                    $fecha = $cliente['fecha_nacimiento_cliente'];
                    // Reemplaza los caracteres
                    $fecha = str_replace('-', '/', $fecha);
                    // Cambiamos la fecha de la BD a formato local
                    $fecha_formateada = date('d-m-Y', strtotime($fecha));
                    ?>

                    <p class="text-muted"><?php echo $fecha_formateada; ?></p>
                    <hr>
                    
                    <strong><i class="fas fa-mobile-alt mr-1"></i> Telefono</strong>
                    <p class="text-muted">
                      <?php echo $cliente['telefono_cliente']; ?>
                    </p>
                    <hr>
                    <strong><i class="fas fa-money-bill-wave"></i> Próximo Pago</strong>
                    <div class="col-md-12">
                      <p class="badge badge-success text">
                        12/12/2020
                      </p>
                    </div>
                    
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
                
              </div>
              <!-- /.col-md-3 -->

              

              <!-- Seccion de Graficos de Barras -->
              <!-- Se comunica con el archivo dashboard3.js -->
              <div class="col-lg-9">
                <div class="card">
                  <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                      <h3 class="card-title">Horas Semanales</h3>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex">
                      <p class="d-flex flex-column">
                      </p>
                      <p class="ml-auto d-flex flex-column text-right">
                        <span class="text-muted"></span>
                      </p>
                    </div>
                    <!-- /.d-flex -->

                    <div class="position-relative mb-4">
                      <canvas id="sales-chart" height="200"></canvas>
                    </div>

                    <div class="d-flex flex-row justify-content-end">
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col-lg-9 -->
          </div>
      </div>
    </section>
    <!-- /.content -->




  </div>
  <!-- /.content-wrapper -->

<?php
include 'templates/footer.php';
?>
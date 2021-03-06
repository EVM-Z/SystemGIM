<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['email']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link">
              <i class="fas fa-home nav-icon"></i>
              <p>Inicio</p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="entrada-salida.php" class="nav-link">
              <i class="far fa-calendar-check nav-icon"></i>
              <p>Entrada/Salida</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="cliente.php" class="nav-link">
              <i class="fas fa-list nav-icon"></i>
              <p>Clientes</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="pago.php" class="nav-link">
              <i class="fas fa-money-bill-wave"></i>
              <p>Pagos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="editar-perfil.php" class="nav-link">
              <i class="fas fa-user"></i>
              <p>Mi perfil</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="login.php?cerrar_sesion=true" class="nav-link">
              <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Salir</p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
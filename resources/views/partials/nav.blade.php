  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Transportes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/img/no-img.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('datos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('datos.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Usuario</p>
                </a>
              </li>
            </ul>
          </li>

          {{-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Licencia
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('licencias.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Licencias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('licencias.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Licencia</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Vehículos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('vehiculos.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Vehículos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('vehiculos.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Vehículos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Certificados
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('certificados.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Certificados</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('certificados.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Certificados</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Soats
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('soats.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Soats</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('soats.create') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Soats</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
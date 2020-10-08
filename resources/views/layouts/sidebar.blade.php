<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">Administration</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/moi.jpeg') }}" class="img-circle elevation-3" alt="Admin Image">
        </div>
        <div class="info">
          <a href="{{ route('admin.profil') }}" class="d-block">TIONANG VANELLE</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ route('admin.home') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Carte</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Statistique</p>
                </a>
              </li>


            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Formulaires
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.form') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Zone</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter Aeronef</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supprimer</p>
                </a>
              </li>

            </ul>
          </li>

            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-mountain"></i>
                    <p>
                        Zones
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">

                    <li class="nav-item">
                        <a href="{{ route('admin.form') }}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter une Zone</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.zone.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Liste des Zones</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.typezone.create')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Ajouter un type de Zone</p>
                        </a>

                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.typezone.list')}}" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Tous les types de Zones</p>
                        </a>
                    </li>

                </ul>
            </li>


          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>







        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

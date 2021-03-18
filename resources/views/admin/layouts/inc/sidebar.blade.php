  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home')}}" class="brand-link">
      
      <span class="brand-text font-weight-light">Courrier-estsb</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{Request::is('admin/dashboard')}} ? active : '' ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-hat-cowboy"></i>
              <p>
                gestion des services
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('service.view')}}" class="nav-link {{Request::is('admin/service') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voir tous les services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.service.add')}}" class="nav-link {{Request::is('admin/service') ? 'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Ajouter un service </p>
                </a>
              </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-users-cog"></i>
              <p>
                gestion des utilisateurs
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voir tous les utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.users.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Ajouter un utilisateur </p>
                </a>
              </li>
        </ul>

        <ul class="nav nav-treeview">
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fas fa-envelope"></i>
              <p>
                gestion des courriers
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('courrier.view')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Voir tous les courriers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.courrier.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Ajouter un courriers </p>
                </a>
              </li>
        </ul>

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

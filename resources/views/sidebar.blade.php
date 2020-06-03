<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link @yield('dashboard')" href="{{ url('/dashboard') }}">
                <span data-feather="home"></span>
                Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('clientes')" href="{{ url('/clientes') }}">
                <span data-feather="users"></span>
                Clientes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/productos') ? 'active' : '' }}" href="{{ url('/productos') }}">
                <span data-feather="products"></span>
                Productos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/pedidos') ? 'active' : '' }}" href="{{ url('/pedidos') }}">
                <span data-feather="orders"></span>
                Pedidos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('/reportes') ? 'active' : '' }}" href="{{ url('/reportes') }}">
                <span data-feather="report"></span>
                Reportes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                <span data-feather="employed"></span>
                Empleados
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
        </a>
        </h6>
        <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Mes actual
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Último quincena
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Última semana
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Venta de fin de año
            </a>
        </li>
        </ul>
    </div>
</nav>
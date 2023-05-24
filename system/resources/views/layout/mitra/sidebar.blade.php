<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('mitra-page') }}" class="brand-link">

        @yield('logo')
        <span class="brand-text font-weight-light">Mitra DUDIKA</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            @yield('name')
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('mitra-page') }}" class="nav-link {{ checkRouteActive('mitra-page') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('project-baru') }}" class="nav-link {{ checkRouteActive('project-baru') }}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Project Baru</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('project-berjalan') }}"
                        class="nav-link {{ checkRouteActive('project-berjalan') }}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Project Berjalan</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('project-selesai') }}"
                        class="nav-link {{ checkRouteActive('project-selesai') }}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Project Selesai</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('master') }}" class="nav-link {{ checkRouteActive('master') }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Master</p>
                    </a>
                </li>

                </li>
                <li class="nav-item has-treeview">
                    <a onclick="return confirm('Keluar Sistem ?');" href="{{ url('logout') }}"
                        class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>

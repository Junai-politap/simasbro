<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ url('page404') }}" class="brand-link">
        <img src="{{ url('public/admin') }}/dist/img/ti.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Informatics</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle"
                    width="150">

            </div>
            <div class="info">
                <a href="{{ url('page404') }}" class="d-block">
                    @yield('name')
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('page404') }}" class="nav-link {{ checkRouteActive('page404') }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ url('page-mahasiswa') }}" class="nav-link {{ checkRouteActive('page-mahasiswa') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Mahasiswa</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ url('page-member') }}" class="nav-link {{ checkRouteActive('page-member') }}">
                        <i class="nav-icon fas fa-address-book"></i>
                        <p>Mitra DUDIKA</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Master
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('page-proyek') }}"
                                class="nav-link {{ checkRouteActive('page-proyek') }}">
                                <i class="nav-icon fas fa-check "></i>
                                <p>Proyek Baru </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('berjalan') }}" class="nav-link {{ checkRouteActive('berjalan') }}">
                                <i class="nav-icon fas fa-check "></i>
                                <p>Proyek Saat Ini</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('selesai') }}" class="nav-link {{ checkRouteActive('selesai') }}">
                                <i class="nav-icon fas fa-check "></i>
                                <p>Proyek Selesai</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('project-ditolak') }}"
                                class="nav-link {{ checkRouteActive('projects-ditolak') }}">
                                <i class="nav-icon fas fa-check "></i>
                                <p>Proyek Ditolak</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item has-treeview">
                    <a href="{{ url('page-tim') }}" class="nav-link {{ checkRouteActive('page-tim') }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Tim PBL</p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('page-berita') }}" class="nav-link {{ checkRouteActive('page-berita') }}">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ url('page-event') }}" class="nav-link {{ checkRouteActive('page-event') }}">
                        <i class="nav-icon fas fa-calendar"></i>
                        <p>Event</p>
                    </a>
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

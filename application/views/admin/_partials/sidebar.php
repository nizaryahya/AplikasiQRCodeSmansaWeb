<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('welcome') ?>" class="brand-link">
        <img src="<?= base_url('dist/img/logosmansa.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SMA N 1 MUNTOK</span>
    </a>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= site_url('welcome') ?>" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <!-- <i class="right fas fa-angle-left"></i> -->
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('kehadiran/session') ?>" class="nav-link">
                        <i class="fas fa-list-alt nav-icon"></i>
                        <p>Session</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('kehadiran') ?>" class="nav-link">
                        <i class="far fa-list-alt nav-icon"></i>
                        <p>Daftar Kehadiran</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('siswa') ?>" class="nav-link">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>Data Siswa</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('guru') ?>" class="nav-link">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>Data Petugas Sekolah</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('kegiatan') ?>" class="nav-link">
                        <i class="fas fa-layer-group nav-icon"></i>
                        <p>Data Kegiatan</p>
                    </a>
                </li>
                    
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Daftar Kelas
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> -->

                <li class="nav-item">
                    <a href="<?= site_url('admin') ?>" class="nav-link">
                        <i class="fas fa-user-shield nav-icon"></i>
                        <p>Data Admin</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('login/logout') ?>" class="nav-link">
                        <i class="fas fa-sign-out-alt nav-icon"></i>
                        <p>LogOut</p>
                    </a>
                </li>
            
            </ul>
            
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
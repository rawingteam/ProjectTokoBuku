<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $nama; ?> <sup><?= $role ?></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $halaman == 'home' ? 'active' : ''; ?>">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Home</span></a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">
            

            <?php if($role == "user") : ?>
            <!-- Nav Item - Tables -->
            <li class="nav-item <?= $halaman == 'tabel' ? 'active' : ''; ?>">
                <a class="nav-link" href="tabel.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'data buku' ? 'active' : ''; ?>">
                <a class="nav-link" href="barang.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Buku</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if($role == "admin") : ?>
            <li class="nav-item <?= $halaman == 'transaksi' ? 'active' : ''; ?>">
                <a class="nav-link" href="transaksi.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            <?php endif; ?>
            
            <?php if($role == "kasir") : ?>
            <li class="nav-item <?= $halaman == 'transaksi' ? 'active' : ''; ?>">
                <a class="nav-link" href="transaksi.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Transaksi</span>
                </a>
            </li>
            <?php endif; ?>
            
            
            <?php if($role == "owner") : ?>
            <li class="nav-item <?= $halaman == 'laporan' ? 'active' : ''; ?>">
                <a class="nav-link" href="v_barang.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Laporan</span>
                </a>
            </li>
            <?php endif; ?>
            

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

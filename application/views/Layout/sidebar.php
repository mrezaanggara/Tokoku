<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo site_url('dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-store"></i>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('dashboard') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master
    </div>

    <!-- Nav Item - Produk Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduk" aria-expanded="true" aria-controls="collapseProduk">
            <i class="fas fa-fw fa-box"></i>
            <span>Barang</span>
        </a>
        <div id="collapseProduk" class="collapse" aria-labelledby="headingProduk" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Barang:</h6>
                <a class="collapse-item" href="<?php echo site_url('barang') ?>">Semua Barang</a>
                <a class="collapse-item" href="<?php echo site_url('barang/addbarang') ?>">Tambah Barang</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Perusahaan Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePerusahaan" aria-expanded="true" aria-controls="collapsePerusahaan">
            <i class="fas fa-fw fa-building"></i>
            <span>Perusahaan</span>
        </a>
        <div id="collapsePerusahaan" class="collapse" aria-labelledby="headingPerusahaan" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Perusahaan:</h6>
                <a class="collapse-item" href="<?php echo site_url('perusahaan') ?>">Semua Perusahaan</a>
                <a class="collapse-item" href="utilities-border.html">Tambah Perusahaan</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Surat Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSurat" aria-expanded="true" aria-controls="collapseSurat">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Surat</span>
        </a>
        <div id="collapseSurat" class="collapse" aria-labelledby="headingSurat" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Surat Keluar:</h6>
                <a class="collapse-item" href="<?php echo site_url('surat/fakturpenjualan') ?>">Faktur Pembayaran</a>
                <a class="collapse-item" href="<?php echo site_url('surat/fakturpajak') ?>">Faktur Pajak</a>
                <a class="collapse-item" href="login.html">Surat Jalan</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Surat Masuk:</h6>
                <a class="collapse-item" href="404.html">Faktur Pembelian</a>
                <a class="collapse-item" href="blank.html">Others</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
        <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Data Users:</h6>
                <a class="collapse-item" href="users">Semua Users</a>
                <a class="collapse-item" href="utilities-border.html">Tambah Users</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

</ul>
<!-- End of Sidebar -->
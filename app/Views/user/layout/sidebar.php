<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">


    <?php if (in_groups('admin')) : ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Data
        </div>

        <!-- Nav Item - Pages Collapse Menu -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-cog"></i>
                <span>Data User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="buttons.html">Data Pegawai</a>
                    <a class="collapse-item" href="cards.html">Data Masyarakat</a>
                </div>
            </div>
        </li>
    <?php endif ?>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-cog"></i>
            <span>Laporan</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <?php if (in_groups('admin')) : ?>
                    <a class="collapse-item" href="buttons.html">Laporan Masuk</a>
                    <a class="collapse-item" href="cards.html">Laporan Ditanggapi</a>
                <?php else : ?>
                    <a class="collapse-item" href="c ards.html">Buat Laporan</a>
                    <a class="collapse-item" href="buttons.html">Laporan Saya</a>
                    <a class="collapse-item" href="cards.html">Laporan Terkirim</a>
                    <a class="collapse-item" href="c ards.html">Laporan Direspons</a>
                <?php endif ?>
                <a class="collapse-item" href="cards.html">Laporan Dibatalkan</a>

            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
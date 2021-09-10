    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-pink sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">JJLC Panel <sup>Tm</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url();?>Admin">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <?php if($user['role'] != 'admin'){ ?>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Admin/listanggota">
          <i class="fas fa-tools"></i>
          <span>Manage Anggota</span></a>
      </li>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Vote/buatvote">
          <i class="far fa-plus-square"></i>
          <span>Buat Vote</span></a>
      </li>
      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Anggota
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="<?=base_url();?>Admin/listanggota">
          <i class="fas fa-users"></i>
          <span>List Anggota</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url();?>Admin/profile/<?=$user['id'];?>">
          <i class="fas fa-user"></i>
          <span>Profil</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-clipboard-list"></i>
          <span>Kegiatan</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kegiatan JJLC</h6>
            <a class="collapse-item" href="<?=base_url();?>Vote">Vote and Polling</a>
            <a class="collapse-item" href="#">Kegiatan Harian</a>
            <a class="collapse-item" href="#">Kazoku</a>
            <a class="collapse-item" href="#">Makrab</a>         
            <a class="collapse-item" href="#">Events</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Tentang JJLC
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>JJLC</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Profil JJLC</h6>
            <a class="collapse-item" href="#">Apa itu JJLC</a>
            <a class="collapse-item" href="#">Sejarah JJLC</a>
            <a class="collapse-item" href="#">Undang - Undang</a>
            <a class="collapse-item" href="#">Kabinet</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Halaman Lain</h6>
            <a class="collapse-item" href="#">Galeri</a>
            <a class="collapse-item" href="#">Tentang Pembuat</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Owh No</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Saya lupa</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Ngangkat jemuran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
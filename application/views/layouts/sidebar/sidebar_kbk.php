<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo site_url('.');?>" class="brand-link">
      <img src="<?php echo base_url();?>assets/dist/img/logo_pnj1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">  Sistem Pengajuan Soal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url();?>assets/dist/img/user4-128x128.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?php echo site_url('.')?>" class="d-block">Isyana Sarasvati</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?php echo site_url('kbk/home'); ?>" class="nav-link <?php if ($this->uri->uri_string() == 'kbk' ) {echo "active" ;} ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo site_url('kbk/dashboard'); ?>" class="nav-link <?php if ($this->uri->uri_string() == 'kbk/dashboard') {echo "active" ;} ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('kbk/sevent'); ?>" class="nav-link <?php if ($this->uri->uri_string() == 'kbk/status_soal') {echo "active" ;} ?>">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Events
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

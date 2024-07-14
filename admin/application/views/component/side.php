  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <!-- Open Website Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('/..'); ?>" target="_blank">
          <i class="bi bi-globe2"></i>
          <span>Open Website</span>
        </a>
      </li>

      <!-- Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('dashboard'); ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-heading">Settings</li>

      <!-- Profile Page -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('settings/profile'); ?>">
          <i class="bi bi-gear"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <!-- CV Page -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('settings/about'); ?>">
          <i class="bi bi-person-badge"></i>
          <span>About</span>
        </a>
      </li><!-- End CV Page Nav -->

      <!-- PhpMyAdmin -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/phpmyadmin" target="_blank">
          <i class="bi bi-database"></i>
          <span>Buka Phpmyadmin</span>
        </a>
      </li><!-- End Buka Phpmyadmin Nav -->

    </ul>

  </aside><!-- End Sidebar-->
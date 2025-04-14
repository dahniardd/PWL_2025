<div class="sidebar">
  <!-- SidebarSearch Form -->
  <div class="form-inline mt-2">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search"
placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
role="menu" data-accordion="false">
      <li class="nav-item">
        <a href="<?php echo e(url('/')); ?>" class="nav-link  <?php echo e(($activeMenu == 'dashboard')?
'active' : ''); ?> ">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </a>
      </li> 
      <li class="nav-header">Data Pengguna</li>
      <li class="nav-item">
        <a href="<?php echo e(url('/level')); ?>" class="nav-link <?php echo e(($activeMenu == 'level')?
'active' : ''); ?> ">
          <i class="nav-icon fas fa-layer-group"></i>
          <p>Level User</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(url('/user')); ?>" class="nav-link <?php echo e(($activeMenu == 'user')?
'active' : ''); ?>">
          <i class="nav-icon far fa-user"></i>
          <p>Data User</p>
        </a>
      </li>
      <li class="nav-header">Data Barang</li>
      <li class="nav-item">
        <a href="<?php echo e(url('/kategori')); ?>" class="nav-link <?php echo e(($activeMenu ==
'kategori')? 'active' : ''); ?> ">
          <i class="nav-icon far fa-bookmark"></i>
          <p>Kategori Barang</p>
        </a>
      </li>
      <li class="nav-header">Data Supplier</li> 
             <li class="nav-item">
                 <a href="<?php echo e(url('/supplier')); ?>" class="nav-link <?php echo e(($activeMenu == 'supplier') ? 'active' : ''); ?>"> 
                     <i class="nav-icon fas fa-truck"></i>
                     <p>Supplier Barang</p> 
                 </a>
             </li>
      <li class="nav-header">Data Transaksi</li>
      <li class="nav-item">
        <a href="<?php echo e(url('/stok')); ?>" class="nav-link <?php echo e(($activeMenu == 'stok')?
'active' : ''); ?> ">
          <i class="nav-icon fas fa-cubes"></i>
          <p>Stok Barang</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo e(url('/barang')); ?>" class="nav-link <?php echo e(($activeMenu ==
'penjualan')? 'active' : ''); ?> ">
          <i class="nav-icon fas fa-cash-register"></i> 
          <p>Transaksi Penjualan</p> 
        </a>
      </li>
    </ul>
  </nav>
</div>  <?php /**PATH C:\laragon\www\PWL_2025\Minggu5.2\Jobsheet5.2\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>
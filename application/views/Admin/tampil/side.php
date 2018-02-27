<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/adminlte/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata("fullname"); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Manage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_transport') ?>"><i class="fa fa-circle-o"></i> Transportasi</a></li>
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_tipe_transport') ?>"><i class="fa fa-circle-o"></i> Tipe Transportasi</a></li>
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_rute') ?>"><i class="fa fa-circle-o"></i> Rute</a></li>
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_reservasi') ?>"><i class="fa fa-circle-o"></i> Reservasi</a></li>
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_customer') ?>"><i class="fa fa-circle-o"></i> Customer</a></li>
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_reqKonfirm') ?>"><i class="fa fa-circle-o"></i> Request Konfirmasi Pembayaran</a></li>
            <li><a href="<?php echo base_url('Admin/admin/ndeleng_user') ?>"><i class="fa fa-circle-o"></i> User</a></li>
          </ul>
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
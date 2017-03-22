<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url() ?>resources/images/avatar/<?php echo $this->session->userdata('apps_foto') ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('apps_nama') ?></p>
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
            <li <?php if(isset($dashboard)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/dashboard/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li <?php if(isset($users)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/users/"><i class="fa fa-user-circle-o"></i> <span>Users</span></a></li>
            <li <?php if(isset($pages)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/pages/"><i class="fa fa-television"></i> <span>Pages</span></a></li>
            <li <?php if(isset($cetak)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/cetak/"><i class="fa fa-print"></i> <span>Cetak</span></a></li>
            <li <?php if(isset($export)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/export/"><i class="fa fa-file-excel-o"></i> <span>Export</span></a></li>
            <li <?php if(isset($ppdb)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/ppdb/"><i class="fa fa-users"></i> <span>Data Pendaftar</span></a></li>
            <li class="header">MAIN SYSTEM</li>
            <li <?php if(isset($systems)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/systems/"><i class="fa fa-cogs"></i> <span>Setting System</span></a></li>
            <li <?php if(isset($mails)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>apps/mails/"><i class="fa fa-envelope"></i> <span>Setting Mail Server</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

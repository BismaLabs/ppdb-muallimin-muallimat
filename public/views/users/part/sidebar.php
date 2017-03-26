<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <?php
                if($this->session->userdata("jenis_kelamin") == "Laki-laki")
                {
                    $image = 'img_avatar.png';

                }elseif($this->session->userdata("jenis_kelamin") == "Perempuan")
                {
                    $image = 'img_avatar2.png';
                }
                ?>
                <img src="<?php echo base_url() ?>resources/images/avatar/<?php echo $image ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $this->session->userdata('nama_lengkap') ?></p>
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
            <li <?php if(isset($dashboard)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>users/dashboard/"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
            <li <?php if(isset($ppdb)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>users/ppdb/"><i class="fa fa-user-circle-o"></i> <span>Data Pendaftaran</span></a></li>
            <li <?php if(isset($cetak)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>users/cetak/"><i class="fa fa-print"></i> <span>Cetak Formulir</span></a></li>
            <li class="header">MAIN SYSTEM</li>
            <li <?php if(isset($logout)) { echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>users/dashboard/logout/"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

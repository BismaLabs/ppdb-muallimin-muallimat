
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title ?>
            <small>PPDB Applications</small>
        </h1>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-home"></i> Dashborad</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="card-content">
                            <div class="main-menu-panduan" style="font-family: Roboto;font-weight: 300;font-size: 18px;text-decoration: none">

                                <div class="nav-tabs-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#pengumuman" data-toggle="tab"><i class="fa fa-bell"></i> Pengumuman</a></li>
                                        <li><a href="#syarat_pendaftaran" data-toggle="tab"><i class="fa fa-bullhorn"></i> Syarat Pendaftaran</a></li>
                                        <li><a href="#alur_pendaftaran" data-toggle="tab"><i class="fa fa-list-ul"></i> Alur Pendaftaran</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="pengumuman">
                                            <?php foreach ($pengumuman->result() as $hasil) { ?>
                                            <hr>
                                            <?php echo $hasil->isi_page; ?>
                                            <hr>
                                            <span style="font-size: 13px;color: #9d9d9d;">Last Update : <?php echo $this->apps->time_elapsed_string($hasil->updated_at) ?> </span>
                                            <?php } ?>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="syarat_pendaftaran">
                                            <?php foreach ($syarat_pendaftaran->result() as $hasil) { ?>
                                                <hr>
                                                <?php echo $hasil->isi_page; ?>
                                                <hr>
                                                <span style="font-size: 13px;color: #9d9d9d;">Last Update : <?php echo $this->apps->time_elapsed_string($hasil->updated_at) ?> </span>
                                            <?php } ?>
                                        </div>
                                        <!-- /.tab-pane -->
                                        <div class="tab-pane" id="alur_pendaftaran">
                                            <?php foreach ($alur_pendaftaran->result() as $hasil) { ?>
                                                <hr>
                                                <?php echo $hasil->isi_page; ?>
                                                <hr>
                                                <span style="font-size: 13px;color: #9d9d9d;">Last Update : <?php echo $this->apps->time_elapsed_string($hasil->updated_at) ?> </span>
                                            <?php } ?>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

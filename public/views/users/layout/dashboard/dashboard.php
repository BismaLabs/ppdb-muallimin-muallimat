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
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-home"></i> Dashborad</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="card-content">
                            <div class="main-menu-panduan"
                                 style="font-size: 18px;text-decoration: none">

                                <ul class="timeline">
                                    <?php foreach ($pengumuman->result() as $hasil) { ?>
                                    <!-- timeline time label -->
                                    <li class="time-label">
                                        <span class="bg-red">
                                            <?php echo $this->apps->tgl_indo_no_hari($hasil->updated_at) ?>
                                        </span>
                                    </li>
                                    <!-- /.timeline-label -->

                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-bell bg-blue"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> <?php echo $this->apps->jam_format($hasil->updated_at) ?></span>

                                            <h3 class="timeline-header"><a href="#">PENGUMUMAN</a></h3>

                                            <div class="timeline-body" style="font-size: 15px">
                                                <?php echo $hasil->isi_page; ?>
                                            </div>

                                            <div class="timeline-footer">

                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>

                                    <?php foreach ($alur_pendaftaran->result() as $hasil) { ?>
                                    <!-- END timeline item -->
                                    <li class="time-label">
                                        <span class="bg-green">
                                            <?php echo $this->apps->tgl_indo_no_hari($hasil->updated_at) ?>
                                        </span>
                                    </li>
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-list-ul bg-blue"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> <?php echo $this->apps->jam_format($hasil->updated_at) ?></span>

                                            <h3 class="timeline-header"><a href="#">ALUR PENDAFTARAN</a></h3>

                                            <div class="timeline-body" style="font-size: 15px">
                                                <?php echo $hasil->isi_page; ?>
                                            </div>

                                            <div class="timeline-footer">

                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>

                                    <?php foreach ($syarat_pendaftaran->result() as $hasil) { ?>
                                    <li class="time-label">
                                        <span class="bg-blue">
                                            <?php echo $this->apps->tgl_indo_no_hari($hasil->updated_at) ?>
                                        </span>
                                    </li>
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-bullhorn bg-blue"></i>
                                        <div class="timeline-item">
                                            <span class="time"><i class="fa fa-clock-o"></i> <?php echo $this->apps->jam_format($hasil->updated_at) ?></span>

                                            <h3 class="timeline-header"><a href="#">PERSYARATAN PENDAFTARAN</a></h3>

                                            <div class="timeline-body" style="font-size: 15px">
                                                <?php echo $hasil->isi_page; ?>
                                            </div>

                                            <div class="timeline-footer">

                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>

                                </ul>


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

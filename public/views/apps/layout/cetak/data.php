
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
                      <h3 class="box-title"><i class="fa fa-print"></i> Cetak Data Pendaftar</h3>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="card-content">
                        <div class="main-menu-panduan" style="font-family: Roboto;font-weight: 300;font-size: 18px;text-decoration: none">
                            <a href="<?php echo base_url() ?>apps/cetak/data_valid" style="text-decoration: none" class="btn btn-success btn-save btn-fill">
                                <i class="fa fa-print"></i>  Cetak Semua Data Pendaftar
                            </a>
                          <hr>
                            <a href="<?php echo base_url() ?>apps/cetak/data_invalid" style="text-decoration: none" class="btn btn-success btn-save btn-fill">
                                <i class="fa fa-print"></i>  Cetak Data Pendaftar Yang Valid
                            </a>
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

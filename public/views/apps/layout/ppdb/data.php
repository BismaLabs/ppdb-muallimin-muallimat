
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title ?>
            <small>Web Applications</small>
        </h1>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->session->flashdata('notif') ?>
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-users"></i> Data PPDB</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="GET" action="<?php echo base_url('apps/users/search');?>" style="margin-top: 10px">
                            <div class = "input-group">
                                <input type = "text" name = "q" class = "form-control input-md" placeholder="Masukkan No NISN dan enter" autocomplete="off" id="articles">
                                <input type="hidden" name="<?php //echo $this->security->get_csrf_token_name(); ?>" value="<?php //echo $this->security->get_csrf_hash(); ?>">
                                <span class = "input-group-btn">
                              <button class = "btn btn-default btn-md" type = "submit">
                                 <i class="fa fa-search"></i> Search
                              </button>
                           </span>
                            </div>
                        </form>
                        <!-- Table Data -->
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>No. Pendaftaran</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Asal Sekolah</th>
                                <th>Kelas</th>
                                <th>Jenis Kelamin</th>
                                <th>Keterangan</th>
                                <th></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Ishak</td>
                                <td>Jombang</td>
                                <td>MI-BU</td>
                                <td>1A</td>
                                <td>Laki-Laki</td>
                                <td>Lulus</td>
                                <td>
                                  <div class="btn-group pull-right" role="group" >
                                    <button type="button" class="btn btn-success">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                        <p class="pull-left">Jombang: Tangal-Bulan-Tahun</p>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

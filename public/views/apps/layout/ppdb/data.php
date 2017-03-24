
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
                <?php echo $this->session->flashdata('notif') ?>
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-users"></i> Data Pendaftar</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="GET" action="<?php echo base_url('apps/ppdb/search');?>" style="margin-top: 10px">
                            <div class = "input-group">
                                <input type = "text" name = "q" class = "form-control input-md" placeholder="Masukkan Kode Pendaftaran atau Nama  dan Enter" autocomplete="off" id="articles">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <span class = "input-group-btn">
                              <button class = "btn btn-default btn-md" type = "submit">
                                 <i class="fa fa-search"></i> Search
                              </button>
                           </span>
                            </div>
                        </form>
                        <!-- Table Data -->
                        <div class="table-responsive">
                          <table class="table table-bordered table-striped table-hover" style="margin-top:20px;font-family: Roboto;font-weight: 300;">
                            <thead>
                              <tr>
                                <th class="text-center" style="color: #000;"><i class="fa fa-list-ul"></i> NO. PENDAFTARAN</th>
                                <th class="text-center" style="color: #000;"><i class="fa fa-user-circle"></i> NAMA LENGKAP</th>
                                <th class="text-center" style="color: #000;"><i class="fa fa-building-o"></i> KELAS</th>
                                <th class="text-center" style="color: #000;"><i class="fa fa-mars"></i> JENIS KELAMIN</th>
                                <th class="text-center" style="color: #000;"><i class="fa fa-info-circle"></i> STATUS</th>
                                  <th class="text-center" style="color: #000;"><i class="fa fa-print"></i> CETAK</th>
                                <th class="text-center" style="color: #000;"><i class="fa fa-cogs"></i> OPTIONS</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Ishak</td>
                                <td>1A</td>
                                <td>Laki-Laki</td>
                                <td style="text-align: center">
                                    <span class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #842020;" data-toggle="tooltip" data-placement="top" title="Invalid"><i class="fa fa-ban"></i> Invalid</span>
                                </td>
                                  <td style="text-align: center">
                                      <a class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #358420;" data-toggle="tooltip" data-placement="top" title="Cetak Formulir" href="#"><i class="fa fa-print"></i> Formulir</a>
                                      <a class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #358420;" data-toggle="tooltip" data-placement="top" title="Cetak Kartu Ujian" href="#"><i class="fa fa-print"></i> Kartu Ujian</a>
                                  </td>
                                  <td>
                                  <div class="btn-group pull-right" role="group" >
                                      <a class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #003684;" data-toggle="tooltip" data-placement="top" title="Update" href="#"><i class="fa fa-check-circle-o"></i> Update</a>
                                  </div>
                                 </td>
                              </tr>
                            </tbody>
                        </table>
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

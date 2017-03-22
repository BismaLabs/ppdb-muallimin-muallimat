
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
                        <h3 class="box-title"><i class="fa fa-users"></i> Data PPDB</h3>
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
                                <td>
                                    <span class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #358420;cursor: not-allowed;filter: alpha(opacity=65);-webkit-box-shadow: none;box-shadow: none;opacity: .65;" data-toggle="tooltip" data-placement="top" title="Valid"> Valid</span>
                                    <span class="badge badge-danger" style="font-family: Roboto;font-weight: 400;background-color: #842020;cursor: not-allowed;filter: alpha(opacity=65);-webkit-box-shadow: none;box-shadow: none;opacity: .65;" data-toggle="tooltip" data-placement="top" title="Invalid"> Invalid</span></td>
                                <td>
                                  <div class="btn-group pull-right" role="group" >
                                    <a class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #358420;" data-toggle="tooltip" data-placement="top" title="Edit" href="#"><i class="fa fa-print"></i> Cetak</a>
                                    <a class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #358420;" data-toggle="tooltip" data-placement="top" title="Edit" href="#"><i class="fa fa-pencil"></i> Update</a>
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

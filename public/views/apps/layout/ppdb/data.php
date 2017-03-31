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
                        <form method="GET" action="<?php echo base_url('apps/ppdb/search'); ?>"
                              style="margin-top: 10px">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control input-md"
                                       placeholder="Masukkan Kode Pendaftaran atau Nama  dan Enter" autocomplete="off"
                                       id="articles">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                       value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <span class="input-group-btn">
                              <button class="btn btn-default btn-md" type="submit">
                                 <i class="fa fa-search"></i> Search
                              </button>
                           </span>
                            </div>
                        </form>
                        <!-- Table Data -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover"
                                   style="margin-top:20px;font-family: Roboto;font-weight: 300;">
                                <thead>
                                <tr>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-list-ul"></i> NO.
                                        PENDAFTARAN
                                    </th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-user-circle"></i> NAMA
                                        LENGKAP
                                    </th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-graduation-cap"></i> PENDAFTARAN KELAS
                                    </th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-mars"></i> JENIS
                                        KELAMIN
                                    </th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-info-circle"></i>
                                        STATUS
                                    </th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-print"></i> CETAK</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-cogs"></i> OPTIONS</th>
                                </tr>
                                </thead>
                                <?php
                                if ($ppdb != NULL):
                                foreach ($ppdb->result() as $hasil):

                                    if ($hasil->status == "0") {

                                        $status = '<span class="badge badge-danger" style="font-family: Roboto;font-weight: 400;background-color: #ff8412;"><i class="fa fa-circle-o-notch fa-spin"></i> Pending</span>';

                                        $update_status = '<a class="badge badge-primary" style="font-family: Roboto;font-weight: 400;background-color: #1969bc;" data-toggle="tooltip" data-placement="top"  href="' . base_url() . 'apps/ppdb/confirm/' . $this->encryption->encode($hasil->kode_pendaftaran) . '/' . $this->encryption->encode('1') . '"><i class="fa fa-check-circle"></i> Update</a>';

                                    } elseif ($hasil->status == "1") {

                                        $status = '<span class="badge badge-success" style="font-family: Roboto;font-weight: 400;background-color: #358420;"><i class="fa fa-check-circle"></i> Validated</span>';

                                        $update_status = '<a class="badge badge-primary" style="font-family: Roboto;font-weight: 400;background-color: #1969bc;" data-toggle="tooltip" data-placement="top"  href="' . base_url() . 'apps/ppdb/confirm/' . $this->encryption->encode($hasil->kode_pendaftaran) . '/' . $this->encryption->encode('0') . '"><i class="fa fa-ban"></i> Update</a>';
                                    }

                                    ?>

                                    <tr>
                                        <td><?php echo $hasil->kode_pendaftaran ?></td>
                                        <td><?php echo $hasil->nama_lengkap ?></td>
                                        <td><?php echo $hasil->pendaftaran_kelas ?></td>
                                        <td><?php echo $hasil->jenis_kelamin ?></td>
                                        <td style="text-align: center">
                                            <?php echo $status ?>
                                        </td>
                                        <td style="text-align: center">
                                            <a class="badge badge-success" target="_blank"
                                               style="font-family: Roboto;font-weight: 400;background-color: #841d05;"
                                               data-toggle="tooltip" data-placement="top" title="Cetak Formulir"
                                               href="<?php echo base_url() ?>apps/ppdb/cetak_formulir/<?php echo $this->encryption->encode($hasil->kode_pendaftaran) ?>/"><i
                                                        class="fa fa-file-text"></i> Formulir</a>

                                            <a class="badge badge-success" target="_blank"
                                               style="font-family: Roboto;font-weight: 400;background-color: #841d05;"
                                               data-toggle="tooltip" data-placement="top" title="Cetak Kartu Ujian"
                                               href="<?php echo base_url() ?>apps/ppdb/cetak_kartu_ujian/<?php echo $this->encryption->encode($hasil->kode_pendaftaran) ?>/"><i
                                                        class="fa fa-address-card"></i> Kartu Ujian</a>
                                        </td>
                                        <td>
                                            <div class="btn-group pull-right" role="group">
                                                <?php echo $update_status ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>
                                </tbody>
                            </table>
                            <?php echo $paging ?>
                            <?php else : ?>
                                </tbody>
                                </table>
                                <div class="alert alert-danger">
                                    <span><b> Warning! </b> Data tidak ada didatabase </span>
                                </div>
                                <div class="reload" style="text-align: center;margin-bottom: 7px">
                                    <a href="<?php echo base_url('apps/ppdb?source=reload&utf8=✓') ?>"
                                       class="btn btn-danger btn-reset btn-fill" id="load"
                                       data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Reloading..."><i
                                                class="fa fa-repeat"></i> Reload Page</a>
                                </div>
                            <?php endif; ?>
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

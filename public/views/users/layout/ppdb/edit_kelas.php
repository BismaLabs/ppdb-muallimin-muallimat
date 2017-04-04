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
             <?php
                        $attributes = array('id' => 'frm_login');
                        echo form_open_multipart('users/ppdb/save?source=header&utf8=✓', $attributes)
                        ?>

                 <input type="hidden" name="type" value="<?php echo $type ?>">
                                                      <input type="hidden" name="kode_pendaftaran" value="<?php echo $edit_user['kode_pendaftaran']?>">
                    <div class="box box-success">
                        <div class="box-body">
                            <div class="card">
                                <div class="card-content">
                                 <div class="form-group">
                                       <div class="row">
                                <!-- Pilih kelas sd -->
                                <div class="col-md-2">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>
                                    SD/MI <input type="radio" onclick="pilih_sd();" name="asal_sekolah" value="SD/MI" id="yes_sd">
                                    <?php echo form_error('asal_sekolah'); ?>
                                </div>
                                <div class="col-md-3">

                                    <label> PENDAFTARAN KELAS
                                        <span class="required" style="color: red">*</span></label>
                                    <div id="form_sd" style="display: none">
                                        <select class="form-control" id="select_sd">
                                            <?php
                                            foreach($kelas_sd->result_array() as $row)
                                            {
                                                if($row['id_kelas']== $id_kelas)
                                                {
                                                    ?>
                                                    <option value="<?php echo $row['nama_kelas']; ?>" selected="selected"><?php echo $row['nama_kelas']; ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option value="<?php echo $row['nama_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php echo form_error('pendaftaran_kelas'); ?>
                                </div>

                                <!-- Pilih Kelas smp -->
                                <div class="col-md-2">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>
                                    SMP/MTsN <input type="radio" value="SMP/MTsN" onclick="pilih_smp();" name="asal_sekolah" id="yes_smp">
                                    <?php echo form_error('asal_sekolah'); ?>
                                </div>
                                <div class="col-md-3">
                                    <label> PENDAFTARAN KELAS
                                        <span class="required" style="color: red">*</span></label>
                                    <div id="form_smp" style="display: none">
                                        <select class="form-control" id="select_smp">
                                            <?php
                                            foreach($kelas_smp->result_array() as $row)
                                            {
                                                if($row['nama_kelas']== $nama_kelas)
                                                {
                                                    ?>
                                                    <option value="<?php echo $row['nama_kelas']; ?>" selected="selected"><?php echo $row['nama_kelas']; ?></option>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <option value="<?php echo $row['nama_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <?php echo form_error('pendaftaran_kelas'); ?>
                                </div>
                                <div class="col-md-2">
                                     <button type="submit" class="btn bg-orange btn-flat"><i
                                     class="fa fa-save"></i> Simpan</button>
                                 </div>

                                </div>    
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>

                   <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>
<!-- /.content-wrapper -->

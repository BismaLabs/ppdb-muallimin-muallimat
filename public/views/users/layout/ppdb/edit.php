
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
                        echo form_open_multipart('/users/ppdb/edit?source=header&utf8=✓', $attributes)?>
                    <!-- Poin A -->
                    <div class="box box-solid">
                         <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-list-ul"></i>  A. KETERANGAN CALON PESERTA DIDIK</h3>
                          </div>

                          <?php echo $edit_siswa->kode_pendaftaran ?>

                         <div class="box-body">
                           <div class="card">
                              <div class="card-content">
                                    <div class="box-body">
                                <div class="card">
                                <div class="card-content">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>
                                    SD/MI <input type="radio" onclick="pilih_kelas();" name="asal_sekolah" value="SD/MI" id="yes_sd">
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
                                            <option value="<?php echo $row['id_kelas']; ?>" selected="selected"><?php echo $row['nama_kelas']; ?></option>
                                            <?php
                                        } else {
                                            ?>
                                            <option value="<?php echo $row['id_kelas']; ?>"><?php echo $row['nama_kelas']; ?></option>
                                            <?php
                                        }
                                    }
                                    ?>
                                </select>
                                    </div>
                                     <?php echo form_error('pendaftaran_kelas'); ?>
                                </div>

                                <!-- Pilih Kelas smp -->
                                <div class="col-md-3">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>
                                    SMP/MTsN <input type="radio" value="SMP/MTsN" onclick="pilih_kelas();" name="asal_sekolah" id="yes_smp">
                                    <?php echo form_error('asal_sekolah'); ?>
                                </div>
                                <div class="col-md-3">
                                    <label> PENDAFTARAN KELAS
                                     <span class="required" style="color: red">*</span></label>
                                    <div id="form_smp" style="display: none">
                                      <select class="form-control" name="pendaftaran_kelas" id="select_smp">
                                    <?php
                                    foreach($kelas_smp->result_array() as $row)
                                    {
                                        if($row['nama_kelas']== $status)
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
                            </div>  
                           <div class="form-group">
                                <label for="nama_lengkap"> NAMA LENGKAP <i>(Sesuai Ijazah) <span class="required"</span></i></label>
                                <input type="text"  class="form-control" id="nama_lengkap"
                                       value="<?php echo $edit_user->nama_lengkap ?>" name="nama"
                                       placeholder="Masukkan Nama Lengkap" style="border-radius: 0px">
                                <?php echo form_error('nama'); ?>
                          </div>
                           <div class="form-group">
                                <label for="jenis_kelamin"> JENIS KELAMIN <span class="required" style="color: red">*</span></label>
                                <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                    <option><?php echo $edit_user->jenis_kelamin ?></option>
                                </select>
                                <?php echo form_error('jenis_kelamin'); ?>
                            </div>
                           <div class="form-group">
                                <label for="NISN"> NISN <i>(Nomor Induk Siswa Nasional) <span class="required"style="color: red">*</span></i></label>
                                <input type="text"  class="form-control" id="nisn" name="nisn"
                                       value="<?php echo $hasil->nisn ?>"
                                       placeholder="Masukkan NISN" style="border-radius: 0px">
                                <?php echo form_error('nisn'); ?>
                            </div>
                          <div class="form-group">
                                <label for="NIK"> NIK <i>(Nomor Induk Kependudukan) <span class="required"style="color: red">*</span></i></label>
                                <input type="text"  class="form-control" id="NIK" name="nik"
                                       value="<?php echo $hasil->nik ?>" placeholder="Masukkan NIK"
                                       style="border-radius: 0px">
                                <?php echo form_error('nik'); ?>
                        </div>
                          <div class="form-group">
                                <label for="tempat"> Tempat Lahir <span class="required" style="color: red">*</span></label>
                                <input type="text" class="form-control" id="tempat" name="tempat_lahir"
                                       value="<?php echo $hasil->tempat_lahir ?>"
                                       placeholder="Masukkan Tempat Lahir" style="border-radius: 0px">
                                <?php echo form_error('tempat_lahir'); ?>
                         </div>
                         <div class="form-group">
                                    <div class="row">
                                     <div class="col-md-3">
                                    
                                        <label for="tanggal">Tanggal <span class="required"style="color: red">*</span></label>
                                        <select class="form-control"  name="tanggal_lahir" id="tanggal">
                                            <option><?php echo $hasil->tanggal_lahir ?></option>
                                        </select>
                                        <?php echo form_error('tanggal_lahir'); ?>
                                     </div>
                                     <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="bulan">Bulan <span class="required"
                                                                       style="color: red">*</span></label>
                                        <select style="" class="form-control" name="bulan_lahir">
                                            <option value=""><?php echo $hasil->bulan_lahir ?></option>
                                        </select>
                                        <?php echo form_error('bulan_lahir'); ?>
                                    </div>
                                     </div>
                                     <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tahun">Tahun <span class="required"
                                                                       style="color: red">*</span></label>
                                        <select class="form-control" name="tahun_lahir" id="tahun">
                                            <option value=""><?php echo $hasil->tahun_lahir ?></option>
                                        </select>
                                        <?php echo form_error('tahun_lahir'); ?>
                                    </div>
                                     </div>
                                    </div>
                          </div>
                          <div class="form-group">
                                <label for="anak_ke"> Anak Ke <span class="required" style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text"  class="form-control" id="anak_ke" placeholder="Jumlah"
                                                   name="anak_ke" value="<?php echo $hasil->anak_ke ?>"
                                                   style="border-radius: 0px" >
                                            <?php echo form_error('anak_ke'); ?>
                                        </div>
                                    </div>
                                <div class="col-md-3">
                                  <label style="margin-top: 7px;"> Dari</label>
                                </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="anak_ke" placeholder="Jumlah"
                                                   name="jumlah_anak_ke" value="<?php echo $hasil->jumlah_anak_ke ?>"
                                                   style="border-radius: 0px" >
                                            <?php echo form_error('jumlah_anak_ke'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label style="margin-top: 7px;"> Bersaudara</label>
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                <label for="saudara_kandung"> Jumlah Saudara Kandung <span class="required"                                                                                       style="color: red">*</span></label>
                                <input type="text" class="form-control" id="saudara_kandung" name="jumlah_saudara_kandung"
                                       value="<?php echo $hasil->jumlah_saudara_kandung ?>"
                                       placeholder="Saudara Kandung" style="border-radius: 0px" >
                                <?php echo form_error('jumlah_saudara_kandung'); ?>
                                    </div>
                                    <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jumlah Adik <span class="required"                                                                 style="color: red">*</span></label>
                                            <input type="text" name="jumlah_adik"
                                                   value="<?php echo $hasil->jumlah_adik ?>" placeholder="Jumlah"
                                                   class="form-control"
                                                   style="border-radius: 0px" >
                                            <?php echo form_error('jumlah_adik'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jumlah Kakak <span class="required" style="color: red">*</span></label>
                                        <input type="text" name="jumlah_kakak"
                                               value="<?php echo $hasil->jumlah_kakak ?>" placeholder="Jumlah"
                                               class="form-control"
                                               style="border-radius: 0px" >
                                        <?php echo form_error('jumlah_kakak'); ?>
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                <label>Asrama <i>(Bagi yang Tinggal Dipondok)</i></label>
                                <input type="text" placeholder="Asrama" class="form-control" name="asrama"
                                       value="<?php echo $hasil->asrama ?>"
                                       style="border-radius: 0px" >
                                    </div>
                                    <div class="form-group">
                                <label>Nomor Kartu Keluarga <i>(KK) <span class="required"                                                                      style="color: red">*</span></i></label>
                                <input type="text" placeholder="Nomor Kartu Keluarga" class="form-control" name="kk"
                                       value="<?php echo $hasil->kk ?>"
                                       style="border-radius: 0px" >
                                <?php echo form_error('kk'); ?>
                                    </div>
                                    <div class="form-group">
                                <label>Nomor KIP/KPH <i>(*Jika Ada)</i></label>
                                <input type="text" placeholder="Nomor KIP/KPH" class="form-control" name="kip_pkh" value="<?php echo $hasil->kip_pkh ?>" 
                                       style="border-radius: 0px" >
                                    </div>
                                    <div class="form-group">
                                <label>No. Telp./HP yang bisa dihubungi</label>
                                <input type="text" placeholder="No Hp/Telp" class="form-control" name="no_hp" value="<?php echo $hasil->no_telp ?>" style="border-radius: 0px" >
                                    </div>
                                    <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Nama Madrasah Asal <i>(*Disertai Kota Madrasah) <span
                                                            class="required" style="color: red">*</span></i></label>
                                            <input type="text" placeholder="Nama Madrasah" name="madrasah_asal"
                                                   value="<?php echo $hasil->nama_madrasah ?>"
                                                   class="form-control" style="border-radius: 0px" >
                                            <?php echo form_error('madrasah_asal'); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kota <span class="required" style="color: red">*</span></label>
                                        <input type="text" placeholder="Kota/Kabupaten" name="kota_madrasah"
                                               value="<?php echo $hasil->kota_madrasah ?>" class="form-control"
                                               style="border-radius: 0px" >
                                        <?php echo form_error('kota_madrasah'); ?>
                                    </div>
                                    </div>
                                </div>
                                    </div>
                                    <div class="form-group">
                                <label>Nomor NPSN <span class="required" style="color: red">*</span></label>
                                <input type="text" placeholder="No NPSN" class="form-control" name="npsn"
                                       value="<?php echo $hasil->npsn ?>"
                                       style="border-radius: 0px" >
                                <?php echo form_error('npsn'); ?>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor Seri Ijazah</label>
                                            <input type="text" placeholder="No Seri Ijazah" name="no_ijazah"
                                                   class="form-control" style="border-radius: 0px" value="
                                                   <?php echo $hasil->no_seri_ijazah ?>" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nomor Seri SKHUN atau SHUN</label>
                                        <input type="text" placeholder="No Seri SKHUN/SHUN" name="no_skhun"
                                               class="form-control" style="border-radius: 0px" value="
                                               <?php echo $hasil->no_seri_skhun ?>" >
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label>Nomor Peserta Ujian Nasional <span class="required"                                                                          style="color: red">*</span></label>
                                    <input type="text" placeholder="No UN" name="no_un"
                                           value="<?php echo $hasil->no_un ?>" class="form-control"
                                           style="border-radius: 0px" >
                                    <?php echo form_error('no_un'); ?>
                                    </div>
                                    </div>  
                                </div>
                                </div>
                             </div>
                               </div>
                           </div>
                        </div>   
                               
                    </div>

                     <!-- Poin B -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-list-ul"></i>  B. BAKAT DAN MINAT CALON PESERTA DIDIK</h3>
                        </div>

                        
                        <div class="box-body">
                           <div class="card">
                              <div class="card-content">
                                     <div class="form-group">
                            <label> Bidang Studi yang Paling Digemari</label>
                            <input type="text" value="<?php echo $hasil->bidang_studi ?>" class="form-control" name="bidang_studi_digemari"
                                   placeholder="Masukkan Bidang Studi Anda" style="border-radius: 0px" >
                        </div>
                        <div class="form-group">
                            <label> Bakat yang Dimiliki</label>
                            <input type="text" class="form-control" value="<?php echo $hasil->bakat_dimiliki ?>" name="bakat_dimiliki"
                                   placeholder="Masukkan Bakat Anda"
                                   style="border-radius: 0px" >
                        </div>
                        <div class="form-group">
                            <label> Olahraga yang Paling Digemari</label>
                            <input type="text" class="form-control" name="olahraga_digemari"
                                   placeholder="Masukkan Olahraga yang Digemari" value="<?php echo $hasil->olahraga_digemari ?>" style="border-radius: 0px" >
                        </div>
                        <div class="form-group">
                            <label> Cita-cita</label>
                            <input type="text" class="form-control" name="cita_cita"
                                   placeholder="Masukkan Cita-cita Anda" value="<?php echo $hasil->cita_cita ?>" style="border-radius: 0px" >
                        </div>
                        
                               </div>
                           </div>
                        </div>

                     </div>



                     <!-- Poin C -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-list-ul"></i>  C. KETERANGAN ORANG TUA KANDUNG</h3>
                         </div>
                        <div class="box-body">
                           <div class="card">
                              <div class="card-content">

                                     <div class="form-group">
                                    <label> Nama Lengkap <span class="required" style="color: red">*</span></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>a. Ayah <i>(Sesuai Dengan Ijazah SIswa) </i></label>
                                            <br/>
                                            <label style="padding-top:30px">b. Ibu </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="nama_ayah" value="<?php echo $hasil->nama_ayah ?>"
                                                   placeholder="Masukkan Nama Lengkap Ayah" style="border-radius: 0px" >
                                            <?php echo form_error('nama_ayah'); ?>
                                            <br/>
                                            <input type="text" class="form-control" name="nama_ibu" value="<?php echo $hasil->nama_ibu ?>"
                                                   placeholder="Masukkan Nama Ibu" style="border-radius: 0px" >
                                            <?php echo form_error('nama_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Nomor KTP/NIK <span class="required" style="color: red">*</span></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>a. Ayah </label>
                                            <br/>
                                            <label style="padding-top:30px">b. Ibu </label>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="no_ktp_ayah" value="<?php echo $hasil->no_ktp_ayah ?>"
                                                   placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px" >
                                            <?php echo form_error('no_ktp_ayah'); ?>
                                            <br/>
                                            <input type="text" class="form-control" name="no_ktp_ibu" value="<?php echo $hasil->no_ktp_ibu ?>"
                                                   placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px" >
                                            <?php echo form_error('no_ktp_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <ins>Pekerjaan</ins>
                                        &
                                        <ins>Pendidikan</ins>
                                        <span class="required" style="color: red">*</span>
                                    </label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>a. Ayah </label>
                                            <br/>
                                            <label style="padding-top:30px">b. Ibu </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="pekerjaan_ayah" value="<?php echo $hasil->pekerjaan_ayah ?>"
                                                   placeholder="Masukkan Pekerjaan Ayah" style="border-radius: 0px" >
                                            <?php echo form_error('pekerjaan_ayah'); ?>
                                            <br>
                                            <input type="text" class="form-control" name="pekerjaan_ibu" value="<?php echo $hasil->pekerjaan_ibu ?>"
                                                   placeholder="Masukkan Pekerjaan Ibu" style="border-radius: 0px" >
                                            <?php echo form_error('pekerjaan_ibu'); ?>
                                        </div>

                                        <div class="col-md-3">
                                            <input type="text" class="form-control" name="pendidikan_ayah" value="<?php echo $hasil->pendidikan_ayah ?>"
                                                   placeholder="Masukkan Pendidikan Ayah" style="border-radius: 0px" >
                                            <?php echo form_error('pendidikan_ayah'); ?>
                                            <br>
                                            <input type="text" class="form-control" name="pendidikan_ibu" value="<?php echo $hasil->pendidikan_ibu ?>"
                                                   placeholder="Masukkan Pendidikan Ibu" style="border-radius: 0px" >
                                            <?php echo form_error('pendidikan_ibu'); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Alamat Tempat Tinggal <i>(Sesuai KK) <span class="required"                                                                               style="color: red">*</span></i></label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Jln Dsn.</label>
                                                <input type="text" class="form-control" name="jln_dsn" value="<?php echo $hasil->jln_desa ?>"
                                                       placeholder="Masukkan Jalan Dusun " style="border-radius: 0px" >
                                                <?php echo form_error('jln_dsn'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RT</label>
                                                <input type="text" class="form-control" name="rt" style="border-radius: 0px" value="<?php echo $hasil->rt ?>"
                                                       placeholder="RT" >
                                                <?php echo form_error('rt'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>RW</label>
                                                <input type="text" class="form-control" name="rw" style="border-radius: 0px" value="<?php echo $hasil->rw ?>"
                                                       placeholder="RW" >
                                                <?php echo form_error('rw'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Desa.</label>
                                                <input type="text" class="form-control" name="desa" placeholder="Desa" value="<?php echo $hasil->desa ?>"
                                                       style="border-radius: 0px" >
                                                <?php echo form_error('desa'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kec.</label>
                                                <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan" value="<?php echo $hasil->kecamatan ?>"
                                                       style="border-radius: 0px" >
                                                <?php echo form_error('kecamatan'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kab.</label>
                                                <input type="text" class="form-control" name="kabupaten" value="<?php echo $hasil->kabupaten ?>"
                                                       placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px" >
                                                <?php echo form_error('kabupaten'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kode POS</label>
                                                <input type="text" class="form-control" name="kode_pos" value="<?php echo $hasil->kode_pos ?>"
                                                       placeholder="Masukkan Kode POS " style="border-radius: 0px" >
                                                <?php echo form_error('kode_pos'); ?>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Provinsi</label>
                                                <select class="form-control" name="provinsi">
                                                    <option value=""><?php echo $hasil->provinsi ?> </option>
                                                </select>
                                                <?php echo form_error('alamat_provinsi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Penghasilan Rata-rata Perbulan</label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>a. Ayah </label>
                                            <br/>
                                            <label style="padding-top:30px">b. Ibu </label>
                                        </div>
                                        <div class="col-md-6">
                                            <select class="form-control" name="penghasilan_ayah">
                                                <option><?php echo $hasil->penghasilan_rata_ayah ?></option>
                                            </select>
                                            <br>
                                            <select class="form-control"  name="penghasilan_ibu">
                                                <option value=""><?php echo $hasil->penghasilan_rata_ibu?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Keterangan Dan Nomor HP <span class="required" style="color: red">*</span></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>a. Ayah </label>
                                            <br/>
                                            <label style="padding-top:50px">b. Ibu </label>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label>Keterangan</label>
                                                <select class="form-control"  name="keterangan_ayah">
                                                    <option><?php echo $hasil->keterangan_ayah?></option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-3">
                                                    <label>Nomor HP Orang Tua</label>
                                                    <input type="text"  class="form-control" name="no_hp_ayah" value="<?php echo $hasil->no_tlp_ayah ?>"
                                                           placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label>Keterangan</label>
                                                <select class="form-control" name="keterangan_ibu">
                                                    <option value=""><?php echo $hasil->keterangan_ibu ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-3">
                                                <label>Nomor HP Orang Tua</label>
                                                <input type="text" class="form-control" name="no_hp_ibu" value="<?php echo $hasil->no_tlp_ibu ?>"
                                                       placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               </div>
                           </div>
                        </div>

                     </div>
                    <!-- Poin D -->
                    <div class="box box-solid">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-list-ul"></i>  D. KETERANGAN WALI</h3>
                         </div>
                            
                         <div class="box-body">
                           <div class="card">
                              <div class="card-content">

                               <div class="form-group">
                                <label> Nama Lengkap</label>
                                <input type="text" class="form-control"  value="<?php echo $hasil->nama_wali ?>" name="nama_wali">
                                </div>
                            <div class="form-group">
                                <label for="jenis_kelamin_wali"> JENIS KELAMIN</label>
                                <select id="jenis_kelamin_wali" class="form-control" name="jenis_kelamin_wali">
                                    <option><?php echo $hasil->jenis_kelamin_wali?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor KK Wali</label>
                                            <input type="text" placeholder="Nomor KK Wali" value="<?php echo $hasil->no_kk_wali ?>" name="no_kk_wali"
                                                   class="form-control" style="border-radius: 0px"><?php echo $this->session->userdata('no_kk_wali') ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nomor KTP Wali</label>
                                        <input type="text" placeholder="Nomor KTP Wali" value="<?php echo $hasil->no_ktp_wali ?>" name="no_ktp_wali"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Pekerjaan</label>
                                            <input type="text" placeholder="Pekerjaan" name="<?php echo $hasil->pekerjaan_wali ?>" class="form-control" style="border-radius: 0px">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Pendidikan</label>
                                        <input type="text" placeholder="Pendidikan" name="pendidikan_wali"
                                               class="form-control" value="<?php echo $hasil->pendidikan_wali ?>" style="border-radius: 0px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Alamat Tempat Tinggal <i>(Sesuai KK)</i></label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jln Dsn.</label>
                                            <input type="text" class="form-control" name="jl_dsn_wali"
                                                  value="<?php echo $hasil->jln_desa_wali ?>" placeholder="Masukkan Jalan Dusun " style="border-radius: 0px">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>RT</label>
                                            <input type="text" class="form-control" value="<?php echo $hasil->rt_wali ?>" name="rt_wali"
                                                   style="border-radius: 0px" placeholder="RT">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label>RW</label>
                                            <input type="text" value="<?php echo $hasil->rw_wali ?>" class="form-control" name="rw_wali"
                                                   style="border-radius: 0px" placeholder="RW">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Desa.</label>
                                            <input type="text" class="form-control" value="<?php echo $hasil->desa_wali ?>" name="desa_wali" placeholder="Desa"
                                                   style="border-radius: 0px">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kec.</label>
                                            <input type="text" value="<?php echo $hasil->kecamatan_wali ?>" class="form-control" name="kecamatan_wali"
                                                   placeholder="Kecamatan"
                                                   style="border-radius: 0px" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kab.</label>
                                            <input type="text" value="<?php echo $hasil->kabupaten_wali ?>" class="form-control" name="kabupaten_wali"
                                                   placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kode POS</label>
                                            <input type="text" class="form-control" value="<?php echo $hasil->kode_pos_wali ?>" name="kode_pos_wali"
                                                   placeholder="Masukkan Kode POS " style="border-radius: 0px" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                            <select class="form-control" name="provinsi_wali">
                                                <option><?php echo $hasil->provinsi_wali ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label> Penghasilan Rata-rata Perbulan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control" name="penghasilan_wali">
                                            <option><?php echo $hasil->penghasilan_rata_wali?></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Sending..." class="btn btn-sending btn-success btn-md" style="border-radius: 0px;-webkit-box-shadow: 0 2px 2px rgba(0,0,0,0.2);-moz-box-shadow: 0 2px 2px rgba(0,0,0,0.2);box-shadow: 0 2px 2px rgba(0,0,0,0.2);transition-duration: .2s;transition-timing-function: cubic-bezier(.4,0,.2,1);transition-property: max-height,box-shadow;">Simpan <i class="fa fa-pencil-square-o"></i> </button>
                            <button type="reset" class="btn btn-warning btn-md" style="border-radius: 0px;-webkit-box-shadow: 0 2px 2px rgba(0,0,0,0.2);-moz-box-shadow: 0 2px 2px rgba(0,0,0,0.2);box-shadow: 0 2px 2px rgba(0,0,0,0.2);transition-duration: .2s;transition-timing-function: cubic-bezier(.4,0,.2,1);transition-property: max-height,box-shadow;">Reset <i class="fa fa-repeat"></i></button>
                            
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
</NAME>
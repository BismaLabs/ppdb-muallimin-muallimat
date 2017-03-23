<div class="container" style="margin-top: 10px">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-8">
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-bell fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            PENGUMUMAN
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>panduan/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-book-open fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            PANDUAN
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>daftar/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-user-follow fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            DAFTAR ONLINE
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="<?php echo base_url() ?>kontak/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-question fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            KONTAK
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-12">
                <?php echo $this->session->flashdata('notif') ?>
                <div class="card">
                    <div class="card-content">
                        <?php
                        $attributes = array('id' => 'frm_login');
                        echo form_open('daftar?source=send&utf8=✓', $attributes)
                        ?>
                        <h4>A. KETERANGAN CALON PESERTA DIDIK</h4>
                        <hr>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="asal_sekolah"> Asal Sekolah
                                        <span class="required" style="color: red">*</span></label>
                                    <br/>

                                    <input type="radio" name="asal_sekolah" id="rad1" value="SD/MI" class="rad"/> SD/MI
                                    <input type="radio" name="asal_sekolah" id="rad2" value="SMP/MTs" class="rad"/>
                                    SMP/MTs
                                    <?php echo form_error('asal_sekolah'); ?>
                                </div>
                                <div class="col-md-9">
                                    <label for="user_id"> PENDAFTARAN KELAS
                                        <span class="required" style="color: red">*</span></label>
                                    <div id="form">
                                        <select class="form-control" name="">

                                        </select>
                                    </div>
                                    <div id="form1" style="display:none">
                                        <select class="form-control" name="pendaftaran_kelas">
                                            <option value="1A">Kelas 1A</option>
                                            <option value="1B">Kelas 1B</option>
                                            <option value="2A">Kelas 2A</option>
                                            <option value="2B">Kelas 2B</option>
                                        </select>
                                    </div>
                                    <div id="form2" style="display:none">
                                        <select class="form-control" name="pendaftaran_kelas">
                                            <option value="2">Kelas 2</option>
                                            <option value="3">Kelas 3</option>
                                            <option value="4">Kelas 4</option>
                                        </select>
                                    </div>
                                    <?php echo form_error('pendaftaran_kelas'); ?>
                                </div>
                            </div>
                        </div>
                        <!-- tambahkan jquery-->
                        <script type="text/javascript">
                            $(function () {
                                $(":radio.rad").click(function () {
                                    $("#form1, #form2").hide()
                                    if ($(this).val() == "SD/MI") {
                                        $("#form1").show();
                                        $("#form").hide();
                                    } else {
                                        $("#form2").show();
                                        $("#form").hide();
                                    }
                                });
                            });
                        </script>
                        <div class="form-group">
                            <label for="nama_lengkap"> NAMA LENGKAP <i>(Sesuai Ijazah) <span class="required"
                                                                                             style="color: red">*</span></i></label>
                            <input type="text" class="form-control" id="nama_lengkap"
                                   value="<?php echo set_value('nama') ?>" name="nama"
                                   placeholder="Masukkan Nama Lengkap" style="border-radius: 0px">
                            <?php echo form_error('nama'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin"> JENIS KELAMIN <span class="required"
                                                                            style="color: red">*</span></label>
                            <select id="jenis_kelamin" class="form-control" name="jenis_kelamin">
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?php echo form_error('jenis_kelamin'); ?>
                        </div>
                        <div class="form-group">
                            <label for="NISN"> NISN <i>(Nomor Induk Siswa Nasional) <span class="required"
                                                                                          style="color: red">*</span></i></label>
                            <input type="text" class="form-control" id="nisn" name="nisn"
                                   value="<?php echo set_value('NISN') ?>"
                                   placeholder="Masukkan NISN" style="border-radius: 0px">
                            <?php echo form_error('nisn'); ?>
                        </div>
                        <div class="form-group">
                            <label for="NIK"> NIK <i>(Nomor Induk Kependudukan) <span class="required"
                                                                                      style="color: red">*</span></i></label>
                            <input type="text" class="form-control" id="NIK" name="nik"
                                   value="<?php echo set_value('nik') ?>" placeholder="Masukkan NIK"
                                   style="border-radius: 0px">
                            <?php echo form_error('nik'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tempat"> Tempat Lahir <span class="required"
                                                                    style="color: red">*</span></label>
                            <input type="text" class="form-control" id="tempat" name="tempat_lahir"
                                   value="<?php echo set_value('tempat_lahir') ?>"
                                   placeholder="Masukkan Tempat Lahir" style="border-radius: 0px">
                            <?php echo form_error('tempat_lahir'); ?>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal <span class="required"
                                                                       style="color: red">*</span></label>
                                    <select class="form-control" name="tanggal_lahir" id="tanggal">
                                        <option value="">-- Pilih --</option>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                        <option value='9'>9</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                        <option value='13'>13</option>
                                        <option value='14'>14</option>
                                        <option value='15'>15</option>
                                        <option value='16'>16</option>
                                        <option value='17'>17</option>
                                        <option value='18'>18</option>
                                        <option value='19'>19</option>
                                        <option value='20'>20</option>
                                        <option value='21'>21</option>
                                        <option value='22'>22</option>
                                        <option value='23'>23</option>
                                        <option value='24'>24</option>
                                        <option value='25'>25</option>
                                        <option value='26'>26</option>
                                        <option value='27'>27</option>
                                        <option value='28'>28</option>
                                        <option value='29'>29</option>
                                        <option value='30'>30</option>
                                        <option value='31'>31</option>
                                    </select>
                                    <?php echo form_error('tanggal_lahir'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bulan">Bulan <span class="required"
                                                                   style="color: red">*</span></label>
                                    <select style="" class="form-control" name="bulan_lahir">
                                        <option value="">-- Pilih --</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </select>
                                    <?php echo form_error('bulan_lahir'); ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tahun">Tahun <span class="required"
                                                                   style="color: red">*</span></label>
                                    <select class="form-control" name="tahun_lahir" id="tahun">
                                        <option value="">-- Pilih --</option>
                                        <option value='1990'>1990</option>
                                        <option value='1991'>1991</option>
                                        <option value='1992'>1992</option>
                                        <option value='1993'>1993</option>
                                        <option value='1994'>1994</option>
                                        <option value='1995'>1995</option>
                                        <option value='1996'>1996</option>
                                        <option value='1997'>1997</option>
                                        <option value='1998'>1998</option>
                                        <option value='1999'>1999</option>
                                        <option value='2000'>2000</option>
                                        <option value='2001'>2001</option>
                                        <option value='2002'>2002</option>
                                        <option value='2003'>2003</option>
                                        <option value='2004'>2004</option>
                                        <option value='2005'>2005</option>
                                        <option value='2006'>2006</option>
                                        <option value='2007'>2007</option>
                                        <option value='2008'>2008</option>
                                        <option value='2009'>2009</option>
                                        <option value='2010'>2010</option>
                                        <option value='2011'>2011</option>
                                        <option value='2012'>2012</option>
                                        <option value='2013'>2013</option>
                                        <option value='2014'>2014</option>
                                        <option value='2015'>2015</option>
                                        <option value='2016'>2016</option>
                                        <option value='2017'>2017</option>
                                    </select>
                                    <?php echo form_error('tahun_lahir'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="anak_ke"> Anak Ke <span class="required" style="color: red">*</span></label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="anak_ke" placeholder="Jumlah"
                                               name="anak_ke" value="<?php echo set_value('anak_ke') ?>"
                                               style="border-radius: 0px">
                                        <?php echo form_error('anak_ke'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label style="margin-top: 7px;"> Dari</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="anak_ke" placeholder="Jumlah"
                                               name="jumlah_anak_ke" value="<?php echo set_value('jumlah_anak_ke') ?>"
                                               style="border-radius: 0px">
                                        <?php echo form_error('jumlah_anak_ke'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label style="margin-top: 7px;"> Bersaudara</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="saudara_kandung"> Jumlah Saudara Kandung <span class="required"
                                                                                       style="color: red">*</span></label>
                            <input type="text" class="form-control" id="saudara_kandung" name="jumlah_saudara_kandung"
                                   value="<?php echo set_value('jumlah_saudara_kandung') ?>"
                                   placeholder="Saudara Kandung" style="border-radius: 0px">
                            <?php echo form_error('jumlah_saudara_kandung'); ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Jumlah Adik <span class="required"
                                                                 style="color: red">*</span></label>
                                        <input type="text" name="jumlah_adik"
                                               value="<?php echo set_value('jumlah_adik') ?>" placeholder="Jumlah"
                                               class="form-control"
                                               style="border-radius: 0px">
                                        <?php echo form_error('jumlah_adik'); ?>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label>Jumlah Kakak <span class="required" style="color: red">*</span></label>
                                    <input type="text" name="jumlah_kakak"
                                           value="<?php echo set_value('jumlah_kakak') ?>" placeholder="Jumlah"
                                           class="form-control"
                                           style="border-radius: 0px">
                                    <?php echo form_error('jumlah_kakak'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Asrama <i>(Bagi yang Tinggal Dipondok)</i></label>
                            <input type="text" placeholder="Asrama" class="form-control" name="asrama"
                                   value="<?php echo set_value('asrama') ?>"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label>Nomor Kartu Keluarga <i>(KK) <span class="required"
                                                                      style="color: red">*</span></i></label>
                            <input type="text" placeholder="Nomor Kartu Keluarga" class="form-control" name="kk"
                                   value="<?php echo set_value('kk') ?>"
                                   style="border-radius: 0px">
                            <?php echo form_error('kk'); ?>
                        </div>
                        <div class="form-group">
                            <label>Nomor KIP/KPH <i>(*Jika Ada)</i></label>
                            <input type="text" placeholder="Nomor KIP/KPH" class="form-control" name="kip_kph"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label>No. Telp./HP yang bisa dihubungi</label>
                            <input type="text" placeholder="No Hp/Telp" class="form-control" name="no_hp"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Nama Madrasah Asal <i>(*Disertai Kota Madrasah) <span
                                                        class="required" style="color: red">*</span></i></label>
                                        <input type="text" placeholder="Nama Madrasah" name="madrasah_asal"
                                               value="<?php echo set_value('madrasah_asal') ?>"
                                               class="form-control" style="border-radius: 0px">
                                        <?php echo form_error('madrasah_asal'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label>Kota <span class="required" style="color: red">*</span></label>
                                    <input type="text" placeholder="Kota/Kabupaten" name="kota_madrasah"
                                           value="<?php echo set_value('kota_madrasah') ?>" class="form-control"
                                           style="border-radius: 0px">
                                    <?php echo form_error('kota_madrasah'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor NPSN <span class="required" style="color: red">*</span></label>
                            <input type="text" placeholder="No NPSN" class="form-control" name="npsn"
                                   value="<?php echo set_value('npsn') ?>"
                                   style="border-radius: 0px">
                            <?php echo form_error('npsn'); ?>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor Seri Ijazah</label>
                                        <input type="text" placeholder="No Seri Ijazah" name="no_ijazah"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nomor Seri SKHUN atau SHUN</label>
                                    <input type="text" placeholder="No Seri SKHUN/SHUN" name="no_skhun"
                                           class="form-control" style="border-radius: 0px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor Peserta Ujian Nasional <span class="required"
                                                                          style="color: red">*</span></label>
                                <input type="text" placeholder="No UN" name="no_un"
                                       value="<?php echo set_value('no_un') ?>" class="form-control"
                                       style="border-radius: 0px">
                                <?php echo form_error('no_un'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h4 style="margin-top: 30px">B. KETERANGAN BAKAT DAN MINAT CALON PESERTA DIDIK</h4>
                        <hr>
                        <div class="form-group">
                            <label> Hobi</label>
                            <input type="text" class="form-control" name="hobi" placeholder="Masukkan Hobi Anda"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Bidang Studi yang Paling Digemari</label>
                            <input type="text" class="form-control" name="bidang_studi_digemari"
                                   placeholder="Masukkan Bidang Studi Anda" style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Bakat yang Dimiliki</label>
                            <input type="text" class="form-control" name="bakat_dimiliki"
                                   placeholder="Masukkan Bakat Anda"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Olahraga yang Paling Digemari</label>
                            <input type="text" class="form-control" name="olahraga_digemari"
                                   placeholder="Masukkan Olahraga yang Digemari" style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Cita-cita</label>
                            <input type="text" class="form-control" name="cita_cita"
                                   placeholder="Masukkan Cita-cita Anda" style="border-radius: 0px">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <h4 style="margin-top: 30px">C. KETERANGAN ORANG TUA KANDUNG</h4>
                        <hr>
                        <div class="form-group">
                            <label> Nama Lengkap <span class="required" style="color: red">*</span></label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>a. Ayah <i>(Sesuai Dengan Ijazah SIswa) </i></label>
                                    <br/>
                                    <label style="padding-top:30px">b. Ibu </label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="nama_ayah"
                                           placeholder="Masukkan Nama Lengkap Ayah" style="border-radius: 0px">
                                    <?php echo form_error('nama_ayah'); ?>
                                    <br/>
                                    <input type="text" class="form-control" name="nama_ibu"
                                           placeholder="Masukkan Nama Ibu" style="border-radius: 0px">
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
                                    <input type="text" class="form-control" name="no_ktp_ayah"
                                           placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px">
                                    <?php echo form_error('no_ktp_ayah'); ?>
                                    <br/>
                                    <input type="text" class="form-control" name="no_ktp_ibu"
                                           placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px">
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
                                    <input type="text" class="form-control" name="pekerjaan_ayah"
                                           placeholder="Masukkan Pekerjaan Ayah" style="border-radius: 0px">
                                    <?php echo form_error('pekerjaan_ayah'); ?>
                                    <br>
                                    <input type="text" class="form-control" name="pekerjaan_ibu"
                                           placeholder="Masukkan Pekerjaan Ibu" style="border-radius: 0px">
                                    <?php echo form_error('pekerjaan_ibu'); ?>
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="pendidikan_ayah"
                                           placeholder="Masukkan Pendidikan Ayah" style="border-radius: 0px">
                                    <?php echo form_error('pendidikan_ayah'); ?>
                                    <br>
                                    <input type="text" class="form-control" name="pendidikan_ibu"
                                           placeholder="Masukkan Pendidikan Ibu" style="border-radius: 0px">
                                    <?php echo form_error('pendidikan_ibu'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Alamat Tempat Tinggal <i>(Sesuai KK) <span class="required"
                                                                               style="color: red">*</span></i></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jln Dsn.</label>
                                        <input type="text" class="form-control" name="jln_dsn"
                                               placeholder="Masukkan Jalan Dusun " style="border-radius: 0px">
                                        <?php echo form_error('jln_dsn'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control" name="rt" style="border-radius: 0px"
                                               placeholder="RT">
                                        <?php echo form_error('rt'); ?>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control" name="rw" style="border-radius: 0px"
                                               placeholder="RW">
                                        <?php echo form_error('rw'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Desa.</label>
                                        <input type="text" class="form-control" name="desa" placeholder="Desa"
                                               style="border-radius: 0px">
                                        <?php echo form_error('desa'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kec.</label>
                                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan"
                                               style="border-radius: 0px">
                                        <?php echo form_error('kecamatan'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kab.</label>
                                        <input type="text" class="form-control" name="kabupaten"
                                               placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px">
                                        <?php echo form_error('kabupaten'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode POS</label>
                                        <input type="text" class="form-control" name="kode_pos"
                                               placeholder="Masukkan Kode POS " style="border-radius: 0px">
                                        <?php echo form_error('kode_pos'); ?>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi">
                                            <option value="">-- Pilih --</option>
                                            <option value="Aceh"> Aceh</option>
                                            <option value="Bali"> Bali</option>
                                            <option value="Banten"> Banten</option>
                                            <option value="Bengkulu"> Bengkulu</option>
                                            <option value="Gorontalo"> Gorontalo</option>
                                            <option value="Jakarta"> Jakarta</option>
                                            <option value="Jambi"> Jambi</option>
                                            <option value="Jawa Barat"> Jawa Barat</option>
                                            <option value="Jawa Tengah"> Jawa Tengah</option>
                                            <option value="Jawa Timur"> Jawa Timur</option>
                                            <option value="Kalimantan Barat"> Kalimantan Barat</option>
                                            <option value="Kalimat Selatan"> Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah"> Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur"> Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulaesi Utara">Sulawesi Utara</option>
                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
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
                                        <option value="">-- Pilih --</option>
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                    </select>
                                    <br>
                                    <select class="form-control" name="penghasilan_ibu">
                                        <option value="">-- Pilih --</option>
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
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
                                        <select class="form-control" name="keterangan_ayah">
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal Dunia">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label>Nomor HP Orang Tua</label>
                                            <input type="text" class="form-control" name="no_hp_ayah"
                                                   placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Keterangan</label>
                                        <select class="form-control" name="keterangan_ibu">
                                            <option value="Masih Hidup">Masih Hidup</option>
                                            <option value="Meninggal Dunia">Meninggal Dunia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3">
                                        <label>Nomor HP Orang Tua</label>
                                        <input type="text" class="form-control" name="no_hp_ibu"
                                               placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-content">
                        <h4 style="margin-top: 30px">D. KETERANGAN WALI ( <i>diisi jika point <strong>C</strong> tidak
                                diisi</i> )</h4>
                        <hr>
                        <div class="form-group">
                            <label> Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_wali">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin_wali"> JENIS KELAMIN</label>
                            <select id="jenis_kelamin_wali" class="form-control" name="jenis_kelamin_wali">
                                <option value="">-- Pilih --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor KK Wali</label>
                                        <input type="text" placeholder="Nomor KK Wali" name="no_kk_wali"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nomor KTP Wali</label>
                                    <input type="text" placeholder="Nomor KTP Wali" name="no_ktp_wali"
                                           class="form-control" style="border-radius: 0px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" placeholder="Pekerjaan" name="pekerjaan_wali"
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Pendidikan</label>
                                    <input type="text" placeholder="Pendidikan" name="pendidikan_wali"
                                           class="form-control" style="border-radius: 0px">
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
                                               placeholder="Masukkan Jalan Dusun " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control" name="rt_wali"
                                               style="border-radius: 0px" placeholder="RT">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control" name="rw_wali"
                                               style="border-radius: 0px" placeholder="RW">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Desa.</label>
                                        <input type="text" class="form-control" name="desa_wali" placeholder="Desa"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kec.</label>
                                        <input type="text" class="form-control" name="kecamatan_wali"
                                               placeholder="Kecamatan"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kab.</label>
                                        <input type="text" class="form-control" name="kabupaten_wali"
                                               placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kode POS</label>
                                        <input type="text" class="form-control" name="kode_pos_wali"
                                               placeholder="Masukkan Kode POS " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="provinsi_wali">
                                            <option value="">-- Pilih --</option>
                                            <option value="Aceh"> Aceh</option>
                                            <option value="Bali"> Bali</option>
                                            <option value="Banten"> Banten</option>
                                            <option value="Bengkulu"> Bengkulu</option>
                                            <option value="Gorontalo"> Gorontalo</option>
                                            <option value="Jakarta"> Jakarta</option>
                                            <option value="Jambi"> Jambi</option>
                                            <option value="Jawa Barat"> Jawa Barat</option>
                                            <option value="Jawa Tengah"> Jawa Tengah</option>
                                            <option value="Jawa Timur"> Jawa Timur</option>
                                            <option value="Kalimantan Barat"> Kalimantan Barat</option>
                                            <option value="Kalimat Selatan"> Kalimantan Selatan</option>
                                            <option value="Kalimantan Tengah"> Kalimantan Tengah</option>
                                            <option value="Kalimantan Timur"> Kalimantan Timur</option>
                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                            <option value="Lampung">Lampung</option>
                                            <option value="Maluku">Maluku</option>
                                            <option value="Maluku Utara">Maluku Utara</option>
                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                            <option value="Papua">Papua</option>
                                            <option value="Papua Barat">Papua Barat</option>
                                            <option value="Riau">Riau</option>
                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                            <option value="Sulaesi Utara">Sulawesi Utara</option>
                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                            <option value="Yogyakarta">Yogyakarta</option>
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
                                        <option value="">-- Pilih --</option>
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Recaptcha <span class="required" style="color: red">*</span></label>
                            <?php echo $recaptcha_html;?>
                            <?php echo form_error('g-recaptcha-response'); ?>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-success"
                                style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">
                            Daftar Sekarang <i class="fa fa-send"></i></button>

                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <form>
                        <div class="form-group">
                            <label for="user_id"><i class="icon-user"></i> User ID</label>
                            <input type="text" class="form-control" id="user_id" name="user_id"
                                   placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                        </div>
                        <button type="submit" class="btn btn-success"
                                style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">
                            Masuk <i class="icon-login"></i></button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <i class="fa fa-building"></i> Alamat Kantor : <br/>
                    Jl. KH. Wahab Hasbullah, Gg. PPBU No. 28, RT02/RW03, Bahrul Ulum, Tambakberas, Jombang, Jawa Timur,
                    Indonesia
                    <br>
                    <br>
                    <i class="fa fa-phone"></i> Telephone : <br/>
                    +62 321 865280
                    <br>
                    <br>
                    <i class="fa fa-envelope"></i> Alamat Email:<br/>
                    madrasatuna_1953@yahoo.com
                </div>
            </div>
        </div>
    </div>
</div>

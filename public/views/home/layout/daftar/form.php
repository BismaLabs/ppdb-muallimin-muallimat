<div class="container" style="margin-top: 10px">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-8">
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
                <a href="<?php echo base_url() ?>hasil-seleksi/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-user-following fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            HASIL SELEKSI
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
                <div class="card">
                    <div class="card-content">
                        <form>
                            <h4>A. KETERANGAN CALON PESERTA DIDIK</h4>
                            <hr>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="asal_sekolah"> Asal Sekolah
                                          <span class="required"    style="color: red">*</span></label>
                                        <br/>

                                        <input type="radio" name="asal_sekolah" id="rad1" value="SD/MI" class="rad"/> SD/MI
                                        <input type="radio" name="asal_sekolah" id="rad2" value="SMP/MTs" class="rad"/> SMP/MTs

                                    </div>
                                    <div class="col-md-9">
                                        <label for="user_id"> PENDAFTARAN KELAS
                                          <span class="required" style="color: red">*</span></label>
                                          <div id="form">
                                              <select class="form-control" name="">
                                                  <option value=""></option>
                                              </select>
                                          </div>
                                        <div id="form1" style="display:none">
                                            <select class="form-control" name="pendaftaran_kelas">
                                                <option value="">-- Pilih --</option>
                                                <option value="Kelas 1A">Kelas 1A</option>
                                                <option value="Kelas 2B">Kelas 2B</option>
                                            </select>
                                        </div>
                                        <div id="form2" style="display:none">
                                            <select class="form-control" name="pendaftaran_kelas">
                                                <option value="">-- Pilih --</option>
                                                <option value="Kelas 2">Kelas 2</option>
                                                <option value="Kelas 3">Kelas 3</option>
                                                <option value="Kelas 4">Kelas 4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tambahkan jquery-->
                            <script type="text/javascript"
                                    src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
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
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                       placeholder="Masukkan Nama Lengkap" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin"> JENIS KELAMIN <span class="required"
                                                                                style="color: red">*</span></label>
                                <select id="jenis_kelamin" class="form-control" name="">
                                    <option value="">-- Pilih --</option>
                                    <option value="">Laki-laki</option>
                                    <option value="">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nisn"> NISN <i>(Nomor Induk Siswa Nasional) <span class="required"
                                                                                              style="color: red">*</span></i></label>
                                <input type="text" class="form-control" id="nisn" name="nisn"
                                       placeholder="Masukkan NISN" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="nik"> NIK <i>(Nomor Induk Kependudukan) <span class="required"
                                                                                          style="color: red">*</span></i></label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK"
                                       style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="tempat"> Tempat Lahir <span class="required"
                                                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" id="tempat" name="tempat"
                                       placeholder="Masukkan Tempat Lahir" style="border-radius: 0px">
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tanggal">Tanggal <span class="required" style="color: red">*</span></label>
                                        <select class="form-control" name="tanggal" id="tanggal">
                                            <?php
                                            $i = 1;
                                            while ($i <= 31) {
                                                echo "<option value='$i'>$i</option>";
                                                $i = $i + 1;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="bulan">Bulan <span class="required"
                                                                       style="color: red">*</span></label>
                                        <select style="" class="form-control" name="bulan">
                                            <option value="">Januari</option>
                                            <option value="">Februari</option>
                                            <option value="">Maret</option>
                                            <option value="">April</option>
                                            <option value="">Mei</option>
                                            <option value="">Juni</option>
                                            <option value="">Juli</option>
                                            <option value="">Agustus</option>
                                            <option value="">September</option>
                                            <option value="">Oktober</option>
                                            <option value="">November</option>
                                            <option value="">Desember</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="tahun">Tahun <span class="required"
                                                                       style="color: red">*</span></label>
                                        <select class="form-control" name="tahun" id="tahun">
                                            <?php
                                            $i = 1990;
                                            while ($i <= 2017) {
                                                echo "<option value='$i'>$i</option>";
                                                $i = $i + 1;
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="anak_ke"> Anak Ke <span class="required" style="color: red">*</span></label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="anak_ke" placeholder="Jumlah"
                                                   name="anak_ke" style="border-radius: 0px">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label style="margin-top: 7px;"> Dari</label>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="Jumlah" class="pull-left form-control"
                                                   style="border-radius: 0px">
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
                                <input type="text" class="form-control" id="saudara_kandung" name="saudara_kandung"
                                       placeholder="Saudara Kandung" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Jumlah Adik <span class="required"
                                                                     style="color: red">*</span></label>
                                            <input type="text" name="adik" placeholder="Jumlah" class="form-control"
                                                   style="border-radius: 0px">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Jumlah Kakak <span class="required" style="color: red">*</span></label>
                                        <input type="text" name="kakak" placeholder="Jumlah" class="form-control"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Asrama <i>(Bagi yang Tinggal Dipondok)</i></label>
                                <input type="text" placeholder="Asrama" class="form-control" name="asrama"
                                       style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label>Nomor Kartu Keluarga <i>(KK) <span class="required"
                                                                          style="color: red">*</span></i></label>
                                <input type="text" placeholder="Nomor Kartu Keluarga" class="form-control" name="kk"
                                       style="border-radius: 0px">
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
                                                   class="form-control" style="border-radius: 0px">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Kota <span class="required" style="color: red">*</span></label>
                                        <input type="text" placeholder="Kota/Kabupaten" name="kota" class="form-control"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nomor NPSN <span class="required" style="color: red">*</span></label>
                                <input type="text" placeholder="No NPSN" class="form-control" name="no_npsn"
                                       style="border-radius: 0px">
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
                                    <input type="text" placeholder="No UN" name="no_un" class="form-control"
                                           style="border-radius: 0px">
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
                            <input type="text" class="form-control" name="bidang_studi"
                                   placeholder="Masukkan Bidang Studi Anda" style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Bakat yang Dimiliki</label>
                            <input type="text" class="form-control" name="bakat" placeholder="Masukkan Bakat Anda"
                                   style="border-radius: 0px">
                        </div>
                        <div class="form-group">
                            <label> Olahraga yang Paling Digemari</label>
                            <input type="text" class="form-control" name="olahraga"
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
                                    <input type="text" class="form-control" name="cita_cita"
                                           placeholder="Masukkan Nama Lengkap Ayah" style="border-radius: 0px">
                                    <br/>
                                    <input type="text" class="form-control" name="cita_cita"
                                           placeholder="Masukkan Nama Ibu" style="border-radius: 0px">
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
                                    <input type="text" class="form-control" name="cita_cita"
                                           placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px">
                                    <br/>
                                    <input type="text" class="form-control" name="cita_cita"
                                           placeholder="Masukkan Nomor KTP/NIK" style="border-radius: 0px">
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
                                    <br>
                                    <input type="text" class="form-control" name="pekerjan_ibu"
                                           placeholder="Masukkan Pekerjaan Ibu" style="border-radius: 0px">
                                </div>

                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="pendidikan_ayah"
                                           placeholder="Masukkan Pendidikan Ayah" style="border-radius: 0px">
                                    <br>
                                    <input type="text" class="form-control" name="penddikan_ibu"
                                           placeholder="Masukkan Pendidikan Ibu" style="border-radius: 0px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label> Alamat Tempat Tinggal <i>(Sesuai KK) <span class="required" style="color: red">*</span></i></label>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jln Dsn.</label>
                                        <input type="text" class="form-control" name="jln_dsn"
                                               placeholder="Masukkan Jalan Dusun " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control" name="rt" style="border-radius: 0px" placeholder="RT">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control" name="rw" style="border-radius: 0px" placeholder="RW">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Desa.</label>
                                        <input type="text" class="form-control" name="desa" placeholder="Desa"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kec.</label>
                                        <input type="text" class="form-control" name="kecamatan" placeholder="Kecamatan"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kab.</label>
                                        <input type="text" class="form-control" name="kabupaten"
                                               placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control">
                                        <option value="Aceh">  Aceh </option>
                                        <option value="Bali"> Bali </option>
                                        <option value="Banten"> Banten </option>
                                        <option value="Bengkulu"> Bengkulu </option>
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
                                <label> Penghasilan Rata-rata Perbulan</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>a. Ayah </label>
                                        <br/>
                                        <label style="padding-top:30px">b. Ibu </label>
                                    </div>
                                    <div class="col-md-6">
                                      <select class="form-control" name="">
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                      </select>
                                      <br>
                                      <select class="form-control" name="">
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
                                        <select class="form-control" name="">
                                          <option value="Masih Hidup">Masih Hidup</option>
                                          <option value="Meninggal Dunia">Meninggal Dunia</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-md-3">
                                          <label>Nomor HP Orang Tua</label>
                                          <input type="text" class="form-control" name=""
                                                 placeholder="Nomor Telp/HP Orang Tua" style="border-radius: 0px">
                                      </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-md-3">
                                        <label>Keterangan</label>
                                        <select class="form-control" name="">
                                          <option value="Masih Hidup">Masih Hidup</option>
                                          <option value="Meninggal Dunia">Meninggal Dunia</option>
                                        </select>
                                      </div>
                                    </div>
                                      <div class="form-group">
                                        <div class="col-md-3">
                                          <label>Nomor HP Orang Tua</label>
                                          <input type="text" class="form-control" name=""
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
                              <input type="text" class="form-control" name="" value="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin_wali"> JENIS KELAMIN <span class="required"
                                                                            style="color: red">*</span></label>
                            <select id="jenis_kelamin_wali" class="form-control" name="">
                                <option value="">-- Pilih --</option>
                                <option value="">Laki-laki</option>
                                <option value="">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nomor KK Wali</label>
                                        <input type="text" placeholder="Nomor KK Wali" name=""
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Nomor KTP Wali</label>
                                    <input type="text" placeholder="Nomor KTP Wali" name=""
                                           class="form-control" style="border-radius: 0px">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <input type="text" placeholder="Pekerjaan" name=""
                                               class="form-control" style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Pendidikan</label>
                                    <input type="text" placeholder="Pendidikan" name=""
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
                                        <input type="text" class="form-control" name=""
                                               placeholder="Masukkan Jalan Dusun " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RT</label>
                                        <input type="text" class="form-control" name="" style="border-radius: 0px" placeholder="RT">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>RW</label>
                                        <input type="text" class="form-control" name="" style="border-radius: 0px" placeholder="RW">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Desa.</label>
                                        <input type="text" class="form-control" name="" placeholder="Desa"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kec.</label>
                                        <input type="text" class="form-control" name="" placeholder="Kecamatan"
                                               style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kab.</label>
                                        <input type="text" class="form-control" name=""
                                               placeholder="Masukkan Kabupaten/Kota " style="border-radius: 0px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <select class="form-control" name="">
                                        <option value="Aceh">  Aceh </option>
                                        <option value="Bali"> Bali </option>
                                        <option value="Banten"> Banten </option>
                                        <option value="Bengkulu"> Bengkulu </option>
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
                                      <select class="form-control" name="">
                                        <option value="Kurang Dari Rp.1 Juta">Kurang Dari Rp.1 Juta</option>
                                        <option value="Antara Rp.1-2 Juta">Antara Rp.1-2 Juta</option>
                                        <option value="Lebih Dari Rp.2 Juta">Lebih Dari Rp.2 Juta</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        <button type="submit" class="btn btn-success"
                                style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">
                            Daftar Sekarang <i class="fa fa-send"></i></button>

                    </div>
                </div>
                </form>
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
                    <i class="fa fa-building"></i> Alamat Kantor : <br />
                    Jl. KH. Wahab Hasbullah, Gg. PPBU No. 28, RT02/RW03, Bahrul Ulum, Tambakberas, Tambakrejo, Tambak Rejo, Kec. Jombang, Kabupaten Jombang, Jawa Timur 61451, Indonesia
                    <br>
                    <br>
                    <i class="fa fa-phone"></i> Telephone : <br />
                    +62 321 865280
                    <br>
                    <br>
                    <i class="fa fa-envelope"></i> Alamat Email:<br />
                    madrasatuna_1953@yahoo.com
                </div>
            </div>
        </div>
    </div>
</div>

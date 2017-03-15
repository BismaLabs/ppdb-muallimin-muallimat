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
                <a href="<?php echo base_url() ?>statistik/" style="text-decoration: none;color:#23527c;">
                    <div class="card card-menu" style="background-color: #fff;text-align: center;padding-top: 6px">
                        <i class="icon-graph fa-3x"></i>
                        <div class="card-content" style="text-align: center;padding: 5px">
                            STATISTIK
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
                                <label for="asal_sekolah"> ASAL SEKOLAH</label>
                                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Masukkan Nama Lengkap Asal Sekolah" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> PENDAFTARAN KELAS</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="nama_lengkap"> NAMA LENGKAP <i>(SESUAI IJAZAH)</i></label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin"> JENIS KELAMIN</label>
                                <select id="jenis_kelamin" class="form-control" name="">
                                  <option value="">--Pilih--</option>
                                  <option value="">Laki-laki</option>
                                  <option value="">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nisn"> NIS <i>(Nomor Induk Siswa Nasional)</i></label>
                                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Masukkan NISN" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="nik"> NIK <i>(Nomor Induk Kependudukan)</i></label>
                                <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="tempat"> Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan Tempat Lahir" style="border-radius: 0px">
                            </div>
                            <div class="row">
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                <select class="form-control" name="tanggal" id="tanggal">
                                <?php
                                              $i=1;
                                              while ($i <= 31)
                                              {
                                                  echo "<option value='$i'>$i</option>";
                                                $i=$i+1;
                                              }
                                              ?>
                                </select>
                              </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
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
                                  <label for="tahun">Tahun</label>
                                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" style="border-radius: 0px">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="anak_ke"> Anak Ke</label>
                                <div class="row">
                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="anak_ke" name="anak_ke" style="border-radius: 0px">
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                     <label> Dari</label>
                                  </div>
                                  <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" style="border-radius: 0px">
                                    </div>
                                  </div>
                                  <div class="col-md-3">
                                     <label> Bersaudara</label>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="saudara_kandung"> Jumlah Saudara Kandung</label>
                                <input type="text" class="form-control" id="saudara_kandung" name="saudara_kandung" placeholder="Saudara Kandung" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <div class="row">
                                  <div class="col-md-3">
                                      <div class="form-group">
                                        <label >Jumlah Adik</label>
                                            <input type="text" name="adik" class="form-control" style="border-radius: 0px">
                                      </div>
                                    </div>
                                  <div class="col-md-3">
                                    <label >Jumlah Kakak</label>
                                      <input type="text" name="kakak" class="form-control" style="border-radius: 0px">
                                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Asrama <i>(Bagi yang Tinggal Dipondok)</i></label>
                                <input type="text" class="form-control" name="asrama" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <label>Nomor Kartu Keluarga <i>(KK)</i></label>
                                <input type="text" class="form-control" name="kk" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <label>Nomor KIP/KPH <i>(*Jika Ada)</i></label>
                                <input type="text" class="form-control" name="kip_kph" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <label>No. Telp./HP yang bisa dihubungi</label>
                                <input type="text" class="form-control" name="no_hp" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                      <label >Madrasah Asal  <i>*Disertai Kota</i></label>
                                          <input type="text" name="madrasah_asal" class="form-control" style="border-radius: 0px">
                                    </div>
                                  </div>
                                <div class="col-md-4">
                                  <label >Kota</label>
                                    <input type="text" name="kota" class="form-control" style="border-radius: 0px">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Nomor NPSN</label>
                                <input type="text" class="form-control" name="no_npsn" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label >Nomor Seri Ijazah</label>
                                          <input type="text" name="no_ijazah" class="form-control" style="border-radius: 0px">
                                    </div>
                                  </div>
                                <div class="col-md-6">
                                  <label >Nomor Seri SKHUN atau SHUN</label>
                                    <input type="text" name="no_skhun" class="form-control" style="border-radius: 0px">
                                </div>
                              </div>
                              <div class="form-group">
                                <label >Nomor Peserta Ujian Nasional</label>
                                    <input type="text" name="no_un" class="form-control" style="border-radius: 0px">
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
                                <input type="text" class="form-control" name="hobi" placeholder="Masukkan Hobi Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <label> Bidang Studi yang Paling Digemari</label>
                              <input type="text" class="form-control" name="bidang_studi" placeholder="Masukkan Bidang Studi Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <label> Bakat yang Dimiliki</label>
                              <input type="text" class="form-control" name="bakat" placeholder="Masukkan Bakat Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                              <label> Olahraga yang Paling Digemari</label>
                              <input type="text" class="form-control" name="olahraga" placeholder="Masukkan Olahraga yang Digemari" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label> Cita-cita</label>
                                <input type="text" class="form-control" name="cita_cita" placeholder="Masukkan Cita-cita Anda" style="border-radius: 0px">
                            </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-content">
                            <h4 style="margin-top: 30px">C. KETERANGAN ORANG TUA KANDUNG</h4>
                            <hr>
                            <div class="form-group">
                                <label for="user_id"> ASAL SEKOLAH</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> PENDAFTARAN KELAS</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> NAMA LENGKAP (SESUAI IJAZAH)</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> JENIS KELAMIN</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-content">
                            <h4 style="margin-top: 30px">D. KETERANGAN WALI ( <i>diisi jika point <strong>C</strong> tidak diisi</i> )</h4>
                            <hr>
                            <div class="form-group">
                                <label for="user_id"> ASAL SEKOLAH</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> PENDAFTARAN KELAS</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> NAMA LENGKAP (SESUAI IJAZAH)</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <div class="form-group">
                                <label for="user_id"> JENIS KELAMIN</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                            </div>
                            <button type="submit" class="btn btn-success" style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">Daftar Sekarang <i class="fa fa-send"></i> </button>
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
                            <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Masukkan User ID Anda" style="border-radius: 0px">
                        </div>
                        <button type="submit" class="btn btn-success" style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">Masuk <i class="icon-login"></i> </button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <i class="fa fa-building"></i> Alamat Kantor : <br />
                    Jl. Garuda No.09 Tambakberas Jombang, Jawa Timur, Indonesia
                    <br>
                    <br>
                    <i class="fa fa-phone"></i> Telephone : <br />
                    0321 - 853 - 533
                    <br>
                    <br>
                    <i class="fa fa-envelope"></i> Alamat Email:<br />
                    puskom@unwaha.ac.id
                </div>
            </div>
        </div>
    </div>
</div>

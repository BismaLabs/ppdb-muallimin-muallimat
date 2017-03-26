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
                <div class="card">
                    <div class="card-content">
                        <div class="main-menu-panduan" style="font-family: Roboto;font-weight: 300;font-size: 18px;text-decoration: none">
                            <?php foreach ($pengumuman->result() as $hasil) { ?>
                            <i class="icon-bell"></i> <?php echo $hasil->judul_page; ?>
                            <hr>
                                <?php echo $hasil->isi_page; ?>
                            <hr>
                                <span style="font-size: 13px;color: #9d9d9d;">Last Update : <?php echo $this->apps->time_elapsed_string($hasil->updated_at) ?> </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <?php
                    $attributes = array('id' => 'frm_login');
                    echo form_open_multipart('users/login?source=sending&utf8=✓', $attributes)
                    ?>
                    <div class="form-group">
                        <label for="user_id"><i class="icon-user"></i> Kode Pendaftaran</label>
                        <input type="text" class="form-control" id="user_id" name="kode_pendaftaran" placeholder="Masukkan Kode Pendaftaran Anda" style="border-radius: 0px">
                    </div>
                    <button type="submit" class="btn btn-success" style="border-radius: 0px;padding: 5px 15px;font-family: Roboto;font-weight: normal;text-shadow: 0 -1px 0 rgba(0,0,0,0.15);background-color: #6cc644;background-image: -webkit-linear-gradient(#7bcc58, #60b838);background-image: linear-gradient(#7bcc58, #60b838);border-color: #55a532;">Masuk <i class="icon-login"></i> </button>
                    <?php echo form_close() ?>
                </div>
            </div>
            <div class="card">
                <div class="card-content" style="min-height: 60px">
                    <i class="fa fa-building"></i> Alamat Kantor : <br />
                    Jl. KH. Wahab Hasbullah, Gg. PPBU No. 28, RT02/RW03, Bahrul Ulum, Tambakberas, Jombang, Jawa Timur, Indonesia
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

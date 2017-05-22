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
        madrasatuna_1953@gmail.com
    </div>
</div>
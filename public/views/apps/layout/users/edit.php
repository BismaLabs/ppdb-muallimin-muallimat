
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
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user-circle-o"></i> Add Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="edit-user">
                        <?php
                        $attributes = array('id' => 'frm_login');
                        echo form_open_multipart('apps/users/save?source=header&utf8=✓', $attributes)
                        ?>
                        <div class="form-group">
                            <label>Foto User</label>
                            <input type="file" class="form-control" name="userfile" style="margin-bottom: 10px">
                            <input type="hidden" name="type" value="<?php echo $type ?>">
                            <input type="hidden" name="id_user" value="<?php echo $this->encryption->encode($data_users['id_user']) ?>">
                            <span class="label label-danger">
                                   NOTE!
                                </span>
                            <span>
                                    Gambar thumbnail disarankan ukuran 600X300 PX
                                 </span>
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?php echo $data_users['nama_user'] ?>" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $data_users['username'] ?>" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $data_users['email_user'] ?>" placeholder="Alamat Email">
                        </div>
                        <div class="submit" style="margin-bottom: 7px">
                            <button type="submit" class="btn btn-success btn-save btn-fill" ><i class="fa fa-save"></i> Update</button>
                            <button type="reset" class="btn btn-warning btn-reset btn-fill" ><i class="fa fa-repeat"></i> Reset</button>
                        </div>
                        <?php echo form_close(); ?>
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
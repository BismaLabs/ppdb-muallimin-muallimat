
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title ?>
            <small>Web Applications</small>
        </h1>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <?php echo $this->session->flashdata('notif') ?>
                <div class="box box-solid">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-envelope"></i> Setting Mail Server</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="col-md-7">
                            <div class="update-mail">
                            <?php
                            $attributes = array('id' => 'frm_login');
                            echo form_open_multipart('apps/mails/save?source=update&utf8=✓', $attributes)
                            ?>
                            <div class="form-group">
                                <label for="artilces">Protocol</label>
                                <input type="text" class="form-control" name="protocol" value="<?php echo mails('protocol') ?>" id="articles" placeholder="Enter Protocol Email Server">
                                <input type="hidden" name="id" value="<?php echo $this->encryption->encode(mails('id')) ?>">
                            </div>
                            <div class="form-group">
                                <label for="artilces">SMTP Host</label>
                                <input type="text" class="form-control" name="smtp_host" value="<?php echo mails('smtp_host') ?>" id="articles" placeholder="Enter SMTP Host Email Server">
                            </div>
                            <div class="form-group">
                                <label for="artilces">SMTP User</label>
                                <input type="text" class="form-control" name="smtp_user" value="<?php echo mails('smtp_user') ?>" id="articles" placeholder="Enter SMTP User Email Server">
                            </div>
                            <div class="form-group">
                                <label for="artilces">SMTP Password</label>
                                <input type="password" class="form-control" name="smtp_password" value="<?php echo mails('smtp_password') ?>" id="articles" placeholder="Enter SMTP Password Email Server">
                            </div>
                            <div class="form-group">
                                <label for="artilces">SMTP Port</label>
                                <input type="text" class="form-control" name="smtp_port" value="<?php echo mails('smtp_port') ?>" id="articles" placeholder="Enter SMTP Port Email Server">
                            </div>
                            <div class="submit">
                                <button type="submit" class="btn btn-success btn-save btn-fill"><i class="fa fa-save"></i> Update</button>
                                <button type="reset" class="btn btn-warning btn-reset btn-fill"><i class="fa fa-repeat"></i> Reset</button>
                            </div>
                            <?php echo form_close(); ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="panel-group accordion" id="accordion1">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_1">
                                                Konfigurasi Email Yahoo </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_1" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <p>
                                            <div class="note note-danger">
                                                <h4 class="block">Yahoo! Mail</h4>
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            Parameter
                                                        </th>
                                                        <th>
                                                            Nilai Parameter
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            Protocol
                                                        </td>
                                                        <td>
                                                            <i>smtp</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP Host
                                                        </td>
                                                        <td>
                                                            <i>ssl://smtp.mail.yahoo.com</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP User
                                                        </td>
                                                        <td>
                                                            <i>Email Anda</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP Password
                                                        </td>
                                                        <td>
                                                            <i>Password Email Anda</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP Port
                                                        </td>
                                                        <td>
                                                            <i>465</i>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapse_2">
                                                Konfigurasi Email Google </a>
                                        </h4>
                                    </div>
                                    <div id="collapse_2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>
                                            <div class="note note-success">
                                                <h4 class="block">Google Mail</h4>
                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th>
                                                            Parameter
                                                        </th>
                                                        <th>
                                                            Nilai Parameter
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>
                                                            Protocol
                                                        </td>
                                                        <td>
                                                            <i>smtp</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP Host
                                                        </td>
                                                        <td>
                                                            <i>ssl://smtp.googlemail.com</i> or <i>ssl://smtp.gmail.com</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP User
                                                        </td>
                                                        <td>
                                                            <i>Email Anda</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP Password
                                                        </td>
                                                        <td>
                                                            <i>Password Email Anda</i>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            SMTP Port
                                                        </td>
                                                        <td>
                                                            <i>465</i>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
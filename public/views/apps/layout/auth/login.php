<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login - <?php echo systems('admin_title') ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/plugins/iCheck/square/blue.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo" style="font-size: 25px">
        <a href="<?php echo base_url() ?>"><b>PPDB</b> Application</a>
    </div>
    <div class="login-box-body" style="-moz-box-shadow: 1px 1px 2px 0 rgba(0,0,0,.12);webkit-box-shadow: 1px 1px 2px 0 rgba(0,0,0,.12);box-shadow: 1px 1px 2px 0 rgba(0,0,0,.12);">
        <p class="login-box-msg">Administrator system</p>
        <?php
            $attributes = array('id' => 'frm_login');
            echo form_open('apps/login?source=login&utf8=✓', $attributes)
        ?>
        <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
            <?php echo form_error('username'); ?>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <?php echo form_error('password'); ?>
        </div>
        <?php if(isset($error)) { echo $error; }; ?>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> Remember Me
                    </label>
                </div>
            </div>
            <div class="col-xs-4">
                <button type="submit" class="btn bg-olive btn-block btn-flat">Login <i class="fa fa-unlock"></i> </button>
            </div>

        </div>
        <?php echo form_close(); ?>
        <hr>
        <div class="social-auth-links text-center">
            <p> Forgot Password ? </p>
            <a href="<?php echo base_url() ?>apps/login/forgot?source=login&utf8=✓" class="btn bg-orange btn-flat" style="text-align: center;width: 100%"><i class="fa fa-envelope"></i> Get new password</a>
        </div>
    </div>
    <div class="text-center" style="margin-top: 10px;font-size: 15px;padding: 6px 6px">
        <?php echo systems('admin_footer') ?>
    </div>
</div>
<script src="<?php echo base_url() ?>resources/backend/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url() ?>resources/backend/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>resources/backend/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
    });
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title ?> - <?php echo systems('admin_title') ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/dist/css/toastr.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>resources/backend/dist/css/skins/_all-skins.min.css">

<script type="text/javascript">
    function pilih_sd() {
 
    if (document.getElementById('yes_sd').checked) {
    document.getElementById('form_sd').style.display='block';
    document.getElementById('form_smp').style.display='none';
    document.getElementById('yes_smp').checked = false;

    var att_sd = document.createAttribute("name");
    att_sd.value = "pendaftaran_kelas";
    var set_sd = document.getElementById('select_sd');
    set_sd.setAttributeNode(att_sd);
 }
}


function pilih_smp(){
 if (document.getElementById('yes_smp').checked) {
    document.getElementById('form_smp').style.display='block';
    document.getElementById('form_sd').style.display='none';
    document.getElementById('yes_sd').checked = false;
    var attr = document.createAttribute("name");
    attr.value = "pendaftaran_kelas";
    var pilih = document.getElementById('select_smp');
    pilih.setAttributeNode(attr);
 }
}
 </script>

</head>
<body class="hold-transition skin-green fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url() ?>apps/dashboard/" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini" style="font-size: 15px"><b>Apps</b> PPDB</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg" style="font-size: 15px"><b>PPDB</b> Applications</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
            </div>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <?php
                        if($this->session->userdata("jenis_kelamin") == "Laki-laki")
                        {
                            $image = 'img_avatar.png';

                        }elseif($this->session->userdata("jenis_kelamin") == "Perempuan")
                        {
                            $image = 'img_avatar2.png';
                        }
                        ?>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url() ?>resources/images/avatar/<?php echo $image ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $this->session->userdata('nama_lengkap') ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo base_url() ?>resources/images/avatar/<?php echo $image ?>" class="img-circle" alt="User Image">

                                <p>
                                    <?php echo $this->session->userdata('nama_lengkap') ?>
                                    <small>@<?php echo $this->session->userdata('users_id') ?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">

                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo base_url() ?>users/ppdb/edit/<?php echo $this->encryption->encode($this->session->userdata('users_id')) ?>/" class="btn btn-default btn-flat"><i class="fa fa-user-circle-o"></i> Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo base_url() ?>users/dashboard/logout/" class="btn btn-default btn-flat"> Logout <i class="fa fa-ban"></i></a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
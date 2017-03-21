
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PPDB - Madrasah Mu'allimin Mu'allimat Bahrul Ulum, Tambak Beras, Jombang</title>
    <link href="<?php echo base_url() ?>resources/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>resources/public/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>resources/public/css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>resources/public/css/line-icons/line-icons.css" rel="stylesheet">
</head>

<body style="background-color: #f1f1f1">

<nav class="navbar navbar-inverse navbar-fixed-top" style="-moz-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,.14),0 3px 1px -2px rgba(0,0,0,.2),0 1px 5px 0 rgba(0,0,0,.12);box-shadow: 0 2px 2px 0 rgba(0,0,0,.14), 0 3px 1px -2px rgba(0,0,0,.2), 0 1px 5px 0 rgba(0,0,0,.12);border-top: 3px solid #55a532;color: #fff">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>" style="color: #fff">PPDB Madrasah Mu'allimin Mu'allimat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="<?php if(isset($home)) { echo 'active-menu-navbar'; } ?>"><a href="<?php echo base_url() ?>" style="color: #fff"><i class="icon-home"></i> Beranda</a></li>
                <li class="dropdown">
                    <a href="#" style="color: #fff" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="icon-book-open"></i> Panduan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url() ?>panduan/alur-pendaftaran/"><i class="icon-arrow-right"></i> Alur Pendaftaran</a></li>
                        <li><a href="<?php echo base_url() ?>panduan/syarat-pendaftaran/"><i class="icon-arrow-right"></i> Syarat Pendaftaran </a></li>
                    </ul>
                </li>
                <li class="<?php if(isset($daftar)) { echo 'active-menu-navbar'; } ?>"><a href="<?php echo base_url() ?>daftar/" style="color: #fff"><i class="icon-user-follow"></i> Daftar Online</a></li>
                <!-- <li class="<?php //if(isset($hasil)) { echo 'active-menu-navbar'; } ?>"><a href="<?php //echo base_url() ?>hasil-seleksi/" style="color: #fff"><i class="icon-user-following"></i> Hasil Seleksi</a></li> -->
                <li class="<?php if(isset($kontak)) { echo 'active-menu-navbar'; } ?>"><a href="<?php echo base_url() ?>kontak/" style="color: #fff"><i class="icon-question"></i> Kontak</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>
<header class="sb-page-header" style="padding-top: 60px;padding-bottom: 30px;text-align: left;font-size: 24px;padding: 30px 15px;color: rgba(255,255,255,.8);background-color: #26A65B;margin-bottom: 10px;font-size: 20px;background-image: url(<?php echo base_url() ?>resources/public/images/bg.png);position: relative;">
    <div class="container">
        <div class="col-md-10">
            <p style="padding-top:70px;font-size:30px;color:#fff;font-family: Roboto;font-weight: 300"><i class="icon-graduation"></i> Selamat Datang di PPDB Madrasah Mu'allimin Mu'allimat </p>
            <p style="margin-left:35px;color:#fff;font-family: Roboto;font-weight: 300"><i class="icon-pointer"></i> Tambak Beras, Jombang, Jawa Timur</p>
        </div>
        <div class="col-md-2">
            <img src="<?php echo base_url() ?>resources/public/images/logo.png" style="width: 130px;margin-top: 50px">
        </div>
    </div>
</header>

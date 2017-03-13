
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
</head>

<body style="background-color: #f1f1f1">

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url() ?>">PPDB Madrasah Mu'allimin Mu'allimat</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url() ?>"><i class="fa fa-home"></i> Beranda</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book"></i> Panduan <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url() ?>panduan/ketentuan/">Ketentuan</a></li>
                        <li><a href="<?php echo base_url() ?>panduan/alur-pendaftaran/">Alur Pendaftaran</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url() ?>daftar/"><i class="fa fa-male"></i> Daftar Online</a></li>
                <li><a href="<?php echo base_url() ?>statistik/"><i class="fa fa-bar-chart-o"></i> Statistik</a></li>
                <li><a href="<?php echo base_url() ?>kontak/"><i class="fa fa-comments-o"></i> Kontak</a></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

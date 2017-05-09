<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cetak Kartu Peserta PPDB</title>
  <link href="<?php echo base_url() ?>resources/public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<br>
<table class="table table-bordered">
<thead>
<tr>
    <td  style="width:60%;table-layout: fixed;text-align:left;padding-left:15px;padding-top:10px; border: 1px solid black;
    box-sizing: border-box;">
    <p style="font-weight: bold; font-size: 14px">
    PERHATIAN
    </p>
    <br>
    <div>
    1. Peserta Ujian harus sudah ada di lokasi 07.30 dengan seragam Hitam - Putih;
    <br>
    <br>
    2. Kartu Peserta ini jangan sampai hilang atau rusak sampai Peserta Daftar Ulang;
    <br>
    <br>
    3. Dilarang membawa buku-buku atau catatan apapun selama Ujian, kecuali alat tulis menulis;
    <br>
    <br>
    Hari Pertama: Ujian Tulis
    <br>
    Hari Kedua: Ujian Lisan
    <br>
    <br>
    </td>
    <td style="width:40%;table-layout: fixed;text-align:center;padding-top:10px; border: 1px solid black;
    box-sizing: border-box;">
    <p style="font-weight: bold; font-size: 14px">
    KARTU PESERTA UJIAN MASUK
    </p>
    <strong style="font-weight: bold; font-size: 20px">
    MMA BAHRUL ULUM
    </strong>
    <br>
    <small>TAMBAKBERAS JOMBANG</small>
    <br>
    <br>
    <img src="<?php echo base_url() ?>resources/public/images/logo.png"
                                                       style="width:100px">
    <br>
    <br>
    Tahun Pelajaran
    <br>
    <strong style="font-weight: bold; font-size: 14px">
    2017/2018
    </strong>
    </td>
    <br>
    <br>
</tr>
</thead>
</table>
<table class="table table-bordered" style="width:100%; height: 200px;">
<thead>
<tr>
    <td  style="width:60%;table-layout: fixed;text-align:left;padding-left:15px;padding-top:10px; border: 1px solid black;
    box-sizing: border-box;">
    Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $detail_pendaftaran['nama_lengkap'] ?>
    <br>
    Calon Kelas&nbsp;&nbsp;: <?php echo $detail_pendaftaran['pendaftaran_kelas'] ?>
    <br>
    Tgl. Tes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 4-5 Juli 2017
    <br>
    <br>
    Jombang, 2 Juli 2017
    <br>
    Panitia
    <br>

   <br>
        <img src="<?php echo base_url() ?>resources/images/gus-rifan.png"
             style="width:80px;padding-left: 60px">
        <br>
     H. Moch. Abdulloh Rif'an, Lc.
    <br>

    </td>
    <td style="width:40%;table-layout: fixed;text-align:center; border: 1px solid black;
    box-sizing: border-box;">
     <strong style="font-weight: bold; font-size: 20px">
    NO PESERTA
    </strong>
    <br>
    <br>
    <div style="font-size: 20px;text-align: center; padding:50px; border: 1px solid black">
    <?php 
    if ($detail_pendaftaran['status'] != "0") {
    echo $detail_pendaftaran['no_test'];
    }elseif($detail_pendaftaran['status'] == "0"){
    echo "";
    } ?>
    </div>
    <br>
    <img src="<?php echo base_url() ?>resources/images/avatar/img_avatar.png"
                                                       style="width:100px">
    <br>
    <br>
    Tahun Pelajaran
    <br>
    <strong style="font-weight: bold; font-size: 14px">
    2017/2018
    </strong>
    </td>
</tr>
</thead>
</table>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cetak Kartu Peserta PPDB</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>resources/public/css/bootstrap.min.css" rel="stylesheet">
 </head>
<body>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th  rowspan="4" style=" width:150px; padding-left: 15px; border: 1px solid black;">
                             <br>
                            PERHATIAN
                            <br>
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
                             <br>
                            <br>
                            </div>
                        </th>
                        <th style="width:200px; padding-right: 5px; padding-left: 5px; text-align:center;  border: 1px solid black;">
                         <div style="font-size: 14px">
                             KARTU PESERTA UJIAN MASUK
                         </div>
                         <div style="font-size: 20px">MMA BAHRUL ULUM</div>
                         <div style="font-weight: 11px">
                             TAMBAKBERAS JOMBANG
                         </div>
                         <br>
                         <img src="<?php echo base_url() ?>resources/public/images/logo.png"
                                                       style="width:100px">
                            <br>
                         <br>
                        TAHUN PELAJARAN
                        <br>
                        2017/2018
                        </th>
                    </tr>
                </thead>
                 </table>
                <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width:320px; height: 270px; padding-left: 15px; border: 1px solid black;">
                            Nama         <?php echo ':' .$detail_pendaftaran['nama_lengkap'] ?>
                            <br>
                            Calon Kelas  <?php echo ':' .$detail_pendaftaran['pendaftaran_kelas'] ?>
                            <br>
                            Tgl. Tes                 : 4-5 Juli 2017
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            Jombang, 2 Juli 2017
                            PANITIA
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            AHSANUN NAIM, S.Pd.I
                             <br>
                            </th>
                        <th style="width:200px; padding-right: 5px; padding-left: 5px; text-align:center;  border: 1px solid black;">
                         <div style="font-size: 14px">
                             NOMOR PESERTA
                         </div>
                         <div style="font-size: 20px"><?php echo $detail_pendaftaran['no_peserta'] ?></div>
                         <!-- <div style="font-weight: 11px">
                            FOTO 3X4
                         </div> -->
                         <br>
                         <img src="<?php echo base_url() ?>resources/images/avatar/img_avatar.png"
                                                       style="width:100px">
                         <br>
                         <br>
                        TAHUN PELAJARAN
                        <br>
                        2017/2018
                        </th>
                    </tr>
                </thead>
                </table>
                 
</body>
</html>
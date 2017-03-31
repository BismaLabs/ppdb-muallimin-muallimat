<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cetak Formulir Peserta PPDB</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>resources/public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table style="width: 100%">
    <tr>
        <td style="width: 15%;text-align: center"><img src="<?php echo base_url() ?>resources/public/images/logo.png"
                                                       style="width:80px"></td>
        <td style="width: 70%;font-size: 15px;text-align: center">PANITIA PENERIMAAN PESERTA DIDIK BARU (PPDB)<BR>
            <div style="font-size: 27px">MADRASAH MU'ALLIMIN MU'ALLIMAT</div>
            <span class="" style="font-size: 10px">Website : mualliminenamtahun.net ── email : madrasatuna.1953@gmail.com<span><br>
                    <span class="" style="font-size: 10px">Tambakberas Tengah Gang PPBU No. 28 Tambakrejo Jombang Jawa Timur<span><br>
                     <span class="" style="font-size: 10px">Telp. (0321) 865280 ── (0856 3369 444<span>
        </td>
        <td style="25%;text-align: center"> </td>
    </tr>
</table>

<table style="width: 100%">
    <tr>
        <td style="border: 1px solid black;padding-bottom: 2px"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"></td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 70%;font-size: 18px;text-align: center">FORMULIR PENERIMAAN PESERTA DIDIK BARU<BR>
            <div style="font-size: 18px">TAHUN PELAJARAN 2017/2018</div>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td><b>A. KETERANGAN CALON PESERTA DIDIK<b> </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 4%">1.</td>
        <td style="width: 37%">
            Asal Sekolah
        </td>
        <td>
            : <?php echo $detail_pendaftaran['asal_sekolah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">2.</td>
        <td>
            Pendaftaran Kelas
        </td>
        <td>
            : <?php echo $detail_pendaftaran['pendaftaran_kelas'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">3.</td>
        <td>
            Nama Lengkap <i>(sesuai ijazah)</i>
        </td>
        <td>
           : <?php echo $detail_pendaftaran['nama_lengkap'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">4.</td>
        <td>
            Jenis Kelamin
        </td>
        <td>
           : <?php echo $detail_pendaftaran['jenis_kelamin'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">5.</td>
        <td>
            NISN (Nomor Induk Siswa Nasional)
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nisn'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">6.</td>
        <td>
            NIK (Nomor Induk Kependudukan)
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nik'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">7.</td>
        <td>
            Tempat, Tanggal, Bulan, Tahun Lahir
        </td>
        <td>
            : <?php echo $detail_pendaftaran['tempat_lahir'] ?>, <?php echo $detail_pendaftaran['tanggal_lahir'] ?>, <?php echo $detail_pendaftaran['bulan_lahir'] ?>, <?php echo $detail_pendaftaran['tahun_lahir'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">8.</td>
        <td>
            Anak Ke
        </td>
        <td>
            : <?php echo $detail_pendaftaran['anak_ke'] ?> dari ( <?php echo $detail_pendaftaran['jumlah_anak_ke'] ?> ) saudara
        </td>
    </tr>
    <tr>
        <td style="width: 4%">9.</td>
        <td>
            Jumlah Saudara kandung
        </td>
        <td>
            : <?php echo $detail_pendaftaran['jumlah_saudara_kandung'] ?> Orang. Jumlah Adik = <?php echo $detail_pendaftaran['jumlah_adik'] ?> Orang, Jumlah kakak = <?php echo $detail_pendaftaran['jumlah_kakak'] ?> Orang
        </td>
    </tr>
    <tr>
        <td style="width: 4%">10.</td>
        <td>
            Asrama <i>(bagi yang tinggal dipondok)</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['asrama'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">11.</td>
        <td>
            Nomor Kartu Keluarga <i>(KK)</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['kk'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">12.</td>
        <td>
            Nomor KIP/PKH * <i>(jika ada)</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['kip_pkh'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">13.</td>
        <td>
            Nomor Telp. / Hp. yang bisa dihubungi
        </td>
        <td>
            : <?php echo $detail_pendaftaran['no_telp'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">14.</td>
        <td>
            Madrasah Asal <i>(disertai kota asal)</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nama_madrasah'] ?> - <?php echo $detail_pendaftaran['kota_madrasah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">15.</td>
        <td>
            NPSN <i>(nomor pokok statistik nasional)</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['npsn'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">16.</td>
        <td>
            Nomor <u>Seri IJAZAH</u> & <u>SKHUN/SHUN</u>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['no_seri_ijazah'] ?> & <?php echo $detail_pendaftaran['no_seri_skhun'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">17.</td>
        <td>
            Nomor Peserta Ujian Nasional</u>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['no_un'] ?>
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td><b>B. KETERANGAN BAKAT DAN MINAT CALON PESERTA DIDIK<b> </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 4%">1.</td>
        <td style="width: 37%">
            Hobi
        </td>
        <td>
            : <?php echo $detail_pendaftaran['hobi'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">2.</td>
        <td style="width: 37%">
            Bidang Studi yang Paling digemari
        </td>
        <td>
            : <?php echo $detail_pendaftaran['bidang_studi'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">3.</td>
        <td style="width: 37%">
            Bakat yang dimiliki
        </td>
        <td>
            : <?php echo $detail_pendaftaran['bakat_dimiliki'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">4.</td>
        <td style="width: 37%">
            Olah raga yang Paling digemari
        </td>
        <td>
            : <?php echo $detail_pendaftaran['olahraga_digemari'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">5.</td>
        <td style="width: 37%">
            Cita - cita
        </td>
        <td>
            : <?php echo $detail_pendaftaran['cita_cita'] ?>
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td><b>C. KETERANGAN ORANG TUA KANDUNG<b> </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 4%">1.</td>
        <td style="width: 10%">Nama lengkap</td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            a. Ayah <i>(sesuai ijazah siswa)</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nama_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            b. Ibu</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nama_ibu'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">2.</td>
        <td style="width: 10%">Nomor KTP / NIK</td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            a. Ayah
        </td>
        <td>
            : <?php echo $detail_pendaftaran['no_ktp_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            b. Ibu</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['no_ktp_ibu'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">3.</td>
        <td style="width: 10%"><u>Pekerjaan</u> & <u>Pendidikan</u></td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            a. Ayah
        </td>
        <td>
            : <?php echo $detail_pendaftaran['pekerjaan_ayah'] ?> & <?php echo $detail_pendaftaran['pendidikan_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            b. Ibu</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['pekerjaan_ibu'] ?> & <?php echo $detail_pendaftaran['pendidikan_ibu'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">4.</td>
        <td style="width: 37%">Alamat Tempat Tinggal <i>(sesuai KK)</i> </td>
        <td>: Jln./Dsn - <?php echo $detail_pendaftaran['jln_desa'] ?>, RT. - <?php echo $detail_pendaftaran['rt'] ?>, RW. -<?php echo $detail_pendaftaran['rw'] ?>, Ds. - <?php echo $detail_pendaftaran['desa'] ?>, Kec. - <?php echo $detail_pendaftaran['kecamatan'] ?>, kab. - <?php echo $detail_pendaftaran['kabupaten'] ?>, K.POS - <?php echo $detail_pendaftaran['kode_pos'] ?>, Provinsi - <?php echo $detail_pendaftaran['provinsi'] ?> </td>
    </tr>
    <tr>
        <td style="width: 4%">5.</td>
        <td style="width: 10%">Penghasilan rata-rata Perbulan</td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            a. Ayah
        </td>
        <td>
            : <?php echo $detail_pendaftaran['penghasilan_rata_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            b. Ibu</i>
        </td>
        <td>
            : <?php echo $detail_pendaftaran['penghasilan_rata_ibu'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">6.</td>
        <td style="width: 10%">Keterangan dan <u>No. HP</u></td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            a. Ayah
        </td>
        <td>
            : (<?php echo $detail_pendaftaran['keterangan_ayah'] ?>)*. HP: <?php echo $detail_pendaftaran['no_tlp_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%;padding-left: 3%"></td>
        <td style="width: 37%;padding-left: 0%">
            b. Ibu</i>
        </td>
        <td>
            : (<?php echo $detail_pendaftaran['keterangan_ibu'] ?>)*. HP: <?php echo $detail_pendaftaran['no_tlp_ibu'] ?>
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td><b>D. KETERANGAN WALI <i>(diisi jika point C tidak diisi)</i><b> </td>
    </tr>
</table>
<br>
<table style="width: 100%">
<tr>
    <td style="width: 4%">1.</td>
    <td style="width: 37%">
        Nama Lengkap
    </td>
    <td>
        : <?php echo $detail_pendaftaran['nama_wali'] ?>
    </td>
</tr>
<tr>
    <td style="width: 4%">2.</td>
    <td style="width: 37%">
        Jenis Kelamin
    </td>
    <td>
        : <?php echo $detail_pendaftaran['jenis_kelamin_wali'] ?>
    </td>
</tr>
<tr>
    <td style="width: 4%">3.</td>
    <td style="width: 37%">
        Nomor KK dan KTP
    </td>
    <td>
        : <?php echo $detail_pendaftaran['no_kk_wali'] ?> & <?php echo $detail_pendaftaran['no_ktp_wali'] ?>
    </td>
</tr>
<tr>
    <td style="width: 4%">4.</td>
    <td style="width: 37%">
        Pekerjaan & Pendidikan
    </td>
    <td>
        : <?php echo $detail_pendaftaran['pekerjaan_wali'] ?> & <?php echo $detail_pendaftaran['pendidikan_wali'] ?>
    </td>
</tr>
<tr>
    <td style="width: 4%">5.</td>
    <td style="width: 37%">Alamat Tempat Tinggal <i>(sesuai KK)</i> </td>
    <td>: Jln./Dsn - <?php echo $detail_pendaftaran['jln_desa_wali'] ?>, RT. - <?php echo $detail_pendaftaran['rt_wali'] ?>, RW. -<?php echo $detail_pendaftaran['rw_wali'] ?>, Ds. - <?php echo $detail_pendaftaran['desa_wali'] ?>, Kec. - <?php echo $detail_pendaftaran['kecamatan_wali'] ?>, kab. - <?php echo $detail_pendaftaran['kabupaten_wali'] ?>, K.POS - <?php echo $detail_pendaftaran['kode_pos_wali'] ?>, Provinsi - <?php echo $detail_pendaftaran['provinsi_wali'] ?> </td>
</tr>
<tr>
    <td style="width: 4%">6.</td>
    <td style="width: 37%">
        Penghasilan rata-rata perbulan
    </td>
    <td>
        : <?php echo $detail_pendaftaran['penghasilan_rata_wali'] ?>
    </td>
</tr>
</table>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td style="padding-left: 65%">
            Jombang, .................2017
        </td>
    </tr>
</table>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td style="padding-left: 4%">
            Diketahui oleh
        </td>
    </tr>
    <tr>
        <td>
            Orang Tua / Wali Murid,
        </td>
        <td style="padding-left: 37%">
            Calon Peserta Didik,
        </td>
    </tr>
</table>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td style="padding-left: 1%">
            ..................................
        </td>
        <td style="padding-left: 42%">
            ..................................
        </td>
    </tr>
    <tr>
        <td style="padding-left: 3%;font-size: 80%">
            Nama & Tandatangan
        </td>
        <td style="padding-left: 46%;font-size: 80%">
            Tandatangan
        </td>
    </tr>
    <tr>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>

        <td style="width: 100%;font-size: 15px;text-align: center">SURAT PERNYATAAN ORANG TUA / WALI<BR>
            <div style="font-size: 15px">MADRASAH MU'ALLIMIN MU'ALLIMAT 6 TAHUN TAMBAKBERAS JOMBANG</div>
            <span class="" style="font-size: 15px">TAHUN PELAJARAN 2017 - 2018<span>
        </td>
    </tr>
</table>
<table style="width: 100%">
    <tr>
        <td style="border: 1px solid black;padding-bottom: 2px"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"></td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td>
            Yang bertanda tangan dibawah ini:
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 4%">1.</td>
        <td style="width: 37%">
            Nama ORang Tua / Wali
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nama_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">2.</td>
        <td>
            Pekerjaan Orang Tua / Wali
        </td>
        <td>
            : <?php echo $detail_pendaftaran['pekerjaan_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">3.</td>
        <td>
            Alamat Orang Tua / Wali
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">4.</td>
        <td>
            Telepon / HP Orang Tua / Wali
        </td>
        <td>
            : <?php echo $detail_pendaftaran['no_tlp_ayah'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">5.</td>
        <td>
            Agama
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">6.</td>
        <td>
            Nama Peserta Didik
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nama_lengkap'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">7.</td>
        <td>
            Jenis Kelamin Peserta Didik
        </td>
        <td>
            : <?php echo $detail_pendaftaran['jenis_kelamin'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">8.</td>
        <td>
            Diterima di Kelas
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">9.</td>
        <td>
            HUbungan Keluarga Dengan Wali
        </td>
        <td>
            :
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="text-align: center"> MENYATAKAN</td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 100%">
            Bahwa saya selaku orang tua / wali dari peserta didik yang bernama .............................. Sekolah di Madrasah Mu'allimin Mu'allimat 6 Tahun Tambakberas Jombang Menyatakan dengan sesungguhnya :
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 100%">
           1. Bersedia membimbing dan mengawasi peserta didik tersebut diatas untuk mentaati tata tertib madrasah;
        </td>
    </tr>
    <tr>
        <td style="width: 100%">
            2. Tidak Keberatan peserat didik di atas menerima sanksi sesuai dengan ketentuan madrasah apabila terbukti melanggar tata tertib yang diberlakukan oleh madrasah;
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 100%">
            Demikian surat pernyataan ini kami buat dengan sebenarnya dan penuh rasa tanggung jawab.
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td style="padding-left: 57%">
            .................., .................2017
        </td>
    </tr>
</table>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td>
            Mengetahui
        </td>
        <td style="padding-left: 37%">
            Yang Membuat Pernyataan
        </td>
    </tr>
    <tr>
        <td>
            Kepala Madrasah
        </td>
        <td style="padding-left: 37%">
            Orang Tua / Wali
        </td>
    </tr>
</table>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td>
            (H. Abdul Nashor Fattah)
        </td>
        <td style="padding-left: 22%">
            (.................................)
        </td>
    </tr>
    <tr>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>

        <td style="width: 100%;font-size: 15px;text-align: center">SURAT PERNYATAAN PESERTA DIDIK BARU<BR>
            <div style="font-size: 15px">MADRASAH MU'ALLIMIN MU'ALLIMAT 6 TAHUN TAMBAKBERAS JOMBANG</div>
            <span class="" style="font-size: 15px">TAHUN PELAJARAN 2017 - 2018<span>
        </td>
    </tr>
</table>
<table style="width: 100%">
    <tr>
        <td style="border: 1px solid black;padding-bottom: 2px"></td>
    </tr>
    <tr>
        <td style="border: 1px solid black"></td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td>
            Yang bertanda tangan dibawah ini:
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 4%">1.</td>
        <td style="width: 37%">
            Nama
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nama_lengkap'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">2.</td>
        <td style="width: 37%">
            NISN
        </td>
        <td>
            : <?php echo $detail_pendaftaran['nisn'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">3.</td>
        <td style="width: 37%">
            Tempat, Tanggal Lahir
        </td>
        <td>
            : <?php echo $detail_pendaftaran['tempat_lahir'] ?>, <?php echo $detail_pendaftaran['tanggal_lahir'] ?>, <?php echo $detail_pendaftaran['bulan_lahir'] ?>, <?php echo $detail_pendaftaran['tahun_lahir'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">4.</td>
        <td>
            Jenis Kelamin
        </td>
        <td>
            : <?php echo $detail_pendaftaran['jenis_kelamin'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">5.</td>
        <td>
            Agama
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">6.</td>
        <td>
            Nomor Pendaftaran
        </td>
        <td>
            : <?php echo $detail_pendaftaran['kode_pendaftaran'] ?>
        </td>
    </tr>
    <tr>
        <td style="width: 4%">7.</td>
        <td>
            Diterima di Kelas
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">8.</td>
        <td>
            Nama Orang Tua / Wali
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">9.</td>
        <td>
            Pekerjaan Orang Tua
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">10.</td>
        <td>
            Agama Orang Tua
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">11.</td>
        <td>
            Nama Wali
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">12.</td>
        <td>
            Pekerjaan Wali
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">13.</td>
        <td>
            Hubungan Keluarga Dengan Wali
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">14.</td>
        <td>
            Alamat Orang Tua / Wali
        </td>
        <td>
            :
        </td>
    </tr>
    <tr>
        <td style="width: 4%">15.</td>
        <td>
            Telp / HP
        </td>
        <td>
            :
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 100%">
            Dengan ini kami menyatakan dengan sesungguhnya, bahwa selama di madrasah ini :
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 100%">
            1. Akan belajar dengan tekun, sungguh-sungguh dan penuh semangat;
        </td>
    </tr>
    <tr>
        <td style="width: 100%">
            2. Akan menjaga nama baik sendiri, keluarga, masyarakat dan madrasah;
        </td>
    </tr>
    <tr>
        <td style="width: 100%">
            3. Sanggup mentaati seluruh tata tertib dan peratuan yang berlaku, mematuhi pelaksanaan kegiatan beajar termasuk berpakaian seragam madrasah, OSIS dan lain-lain.
        </td>
    </tr>
    <tr>
        <td style="width: 100%">
            4. Jika terbukti melanggar tata tertib, maka siap menerima sanksi sesuai dengan ketentuan madrasah.
        </td>
    </tr>
</table>
<br>
<table style="width: 100%">
    <tr>
        <td style="width: 100%">
            Demikian surat pernyataan ini kami buat dengan sebenarnya dan penuh rasa tanggung jawab.
        </td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td style="padding-left: 57%">
            .................., .................2017
        </td>
    </tr>
</table>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td>
            Mengetahui
        </td>
    </tr>
    <tr>
        <td>
            Orang Tua / Wali
        </td>
        <td style="padding-left: 34%">
            Yang Membuat Pernyataan
        </td>
    </tr>
</table>
<br>
<br>
<br>
<table style="width: 100%">
    <tr>
        <td>
            (.................................)
        </td>
        <td style="padding-left: 28%">
            (.................................)
        </td>
    </tr>
    <tr>
    </tr>
</table>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url() ?>resources/public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>resources/public/js/bootstrap.min.js"></script>
</body>
</html>
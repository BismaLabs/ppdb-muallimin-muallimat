<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PENDAFTARAN BERHASIL</title>
    <link href="<?php echo base_url() ?>resources/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>resources/public/css/custom.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>resources/public/css/line-icons/line-icons.css" rel="stylesheet">
    <script src="<?php echo base_url() ?>resources/public/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>resources/public/js/bootstrap.min.js"></script>
    <script>
        function Print() {
            window.print();
        }
    </script>
</head>
<body background="#F1F1F1">
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-success" style="border-color: #2E7D32">
                <div class="panel-heading" style="background-color: #2E7D32;color: #fff"><i class="icon-info"></i> PENDAFTARAN BERHASIL</div>
                <div class="panel-body" style="text-align: center">
                    SELAMAT ANDA TELAH BERHASIL MENDAFTAR ONLINE
                    <br>
                    <br>
                    KODE PENDAFTARAN ANDA :
                    <br>
                    <br>
                    <b style="font-size: 50px"><?php echo $kode_pendaftaran ?></b>
                    <br>
                    <br>
                    SIMPAN KODE INI UNTUK MELAKUKAN LOGIN DAN MENCETAK FORMULIR
                </div>
            </div>
            <div class="action" style="text-align: center">
                <button onclick="Print()" type="button" class="btn btn-success" style="border-radius: 0px;background-color: #2E7D32;border-color: #2E7D32"><i class="icon-printer"></i> Cetak</button>
                <a href="<?php echo base_url() ?>" type="button" class="btn btn-primary" style="border-radius: 0px;background-color: #00695C;border-color: #00695C"><i class="icon-home"></i> Home</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>
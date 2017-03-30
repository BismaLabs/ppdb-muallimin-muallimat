<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Cetak Semua Pendaftar</title>
    <link href="<?php echo base_url() ?>resources/public/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table class="table table-bordered table-striped table-hover"
       style="margin-top:20px;font-family: Roboto;font-weight: 300;">
    <thead>
    <tr>
        <th class="text-center" style="color: #000;width: 25%"><i class="fa fa-list-ul"></i> NO.
            PENDAFTARAN
        </th>
        <th class="text-center" style="color: #000;width: 25%"><i class="fa fa-user-circle"></i> NAMA
            LENGKAP
        </th>
        <th class="text-center" style="color: #000;width: 25%"><i class="fa fa-building-o"></i> PENDAFTARAN KELAS
        </th>
        <th class="text-center" style="color: #000;width: 25%"><i class="fa fa-mars"></i> JENIS
            KELAMIN
        </th>
    </tr>
    </thead>
    <?php
    if ($semua_data != NULL):
        foreach ($semua_data->result() as $hasil):
            ?>
            <tr>
                <td><?php echo $hasil->kode_pendaftaran ?></td>
                <td><?php echo $hasil->nama_lengkap ?></td>
                <td><?php echo $hasil->pendaftaran_kelas ?></td>
                <td><?php echo $hasil->jenis_kelamin ?></td>
            </tr>
            <?php
        endforeach;
        ?>
    <?php else : ?>
    <?php endif; ?>
    </tbody>
</table>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url() ?>resources/public/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>resources/public/js/bootstrap.min.js"></script>
</body>
</html>
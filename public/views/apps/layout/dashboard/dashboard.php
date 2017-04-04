
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $title ?>
            <small>PPDB Applications</small>
        </h1>
    </section>

    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                        <h3><?php //print $this->db->count_all('tbl_users') ?></h3>

                        <p style="text-align: center;font-size: 20px"><i class="fa fa-user-circle-o"></i> USERS</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="<?php echo base_url() ?>apps/users/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-green">
                    <div class="inner">
                        <h3><?php //print $week_visit ?></h3>

                        <p style="text-align: center;font-size: 20px"><i class="fa fa-users"></i> DATA PENDAFTAR</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="<?php echo base_url() ?>apps/ppdb/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow">
                    <div class="inner">
                        <h3><?php //print $month_visit ?></h3>

                        <p style="text-align: center;font-size: 20px"><i class="fa fa-file-excel-o"></i> EXPORT</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="<?php echo base_url() ?>apps/export/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red">
                    <div class="inner">
                        <h3><?php //print $year_visit ?></h3>

                        <p style="text-align: center;font-size: 20px"><i class="fa fa-cogs"></i> SYSTEMS</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-pie-graph"></i>
                    </div>
                    <a href="<?php echo base_url() ?>apps/systems/" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bar-chart-o"></i> Rekap Semua Data Pendaftar</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="font-family: Roboto;font-weight: 300;">
                                <tbody>
                                <thead>
                                <tr>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-mortar-board"></i> KELAS</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-male"></i> LAKI - LAKI</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-female"></i> PEREMPUAN</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-list-ul"></i> JUMLAH</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td class="text-center">1A</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                        <?php
                                        $angka1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                        $angka2 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                        echo $angka1 + $angka2;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1B</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                        <?php
                                        $angka1 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                        $angka2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                        echo $angka1 + $angka2;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2A</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                        <?php
                                        $angka1 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                        $angka2 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                        echo $angka1 + $angka2;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2B</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                        <?php
                                        $angka1 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                        $angka2 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                        echo $angka1 + $angka2;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                        <?php
                                        $angka1 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                        $angka2 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                        echo $angka1 + $angka2;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                        <?php
                                        $angka1 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                        $angka2 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                        echo $angka1 + $angka2;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>JUMLAH</b></td>
                                    <td>
                                        <b>
                                        <?php
                                                $angka1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                                $angka2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                                $angka3 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                                $angka4 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                                $angka5 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");
                                                $angka6 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa");

                                                echo $angka1 + $angka2 + $angka3 + $angka4 + $angka5 + $angka6;
                                        ?>
                                        </b>
                                    </td>
                                    <td>
                                        <b>
                                        <?php
                                                $angka1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $angka2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $angka3 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $angka4 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $angka5 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $angka6 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");

                                                echo $angka1 + $angka2 + $angka3 + $angka4 + $angka5 + $angka6;
                                        ?>
                                        </b>
                                    </td>
                                    <td>
                                        <b>
                                        <?php
                                                $jumlah1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa") + $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $jumlah2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $jumlah3 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $jumlah4 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $jumlah5 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                                $jumlah6 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");

                                                echo $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6;
                                        ?>
                                        </b>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

<!-- data sudah divalidasi -->

        <div class="row">
            <div class="col-md-12">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-bar-chart-o"></i> Rekap Data Pendaftar Tervalidasi</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="font-family: Roboto;font-weight: 300;">
                                <tbody>
                                <thead>
                                <tr>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-mortar-board"></i> KELAS</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-male"></i> LAKI - LAKI</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-female"></i> PEREMPUAN</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-list-ul"></i> JUMLAH</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td class="text-center">1A</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            echo $angka1 + $angka2;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">1B</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            echo $angka1 + $angka2;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2A</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            echo $angka1 + $angka2;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2B</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            echo $angka1 + $angka2;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            echo $angka1 + $angka2;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td><?php echo $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa") ?></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            echo $angka1 + $angka2;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center"><b>JUMLAH</b></td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka3 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka4 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka5 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka6 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa");

                                            echo $angka1 + $angka2 + $angka3 + $angka4 + $angka5 + $angka6;
                                            ?>
                                        </b>
                                    </td>
                                    <td>
                                        <b>
                                            <?php
                                            $angka1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka3 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka4 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka5 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");
                                            $angka6 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->where("status", "1")->count_all_results("tbl_siswa");

                                            echo $angka1 + $angka2 + $angka3 + $angka4 + $angka5 + $angka6;
                                            ?>
                                        </b>
                                    </td>
                                    <td>
                                        <b>
                                            <?php
                                            $jumlah1 = $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa") + $this->db->where("pendaftaran_kelas", '1A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                            $jumlah2 = $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '1B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                            $jumlah3 = $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '2A')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                            $jumlah4 = $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '2B')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                            $jumlah5 = $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '3')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");
                                            $jumlah6 = $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Laki-laki')->where("status", "1")->count_all_results("tbl_siswa")+ $this->db->where("pendaftaran_kelas", '4')->where("jenis_kelamin", 'Perempuan')->count_all_results("tbl_siswa");

                                            echo $jumlah1 + $jumlah2 + $jumlah3 + $jumlah4 + $jumlah5 + $jumlah6;
                                            ?>
                                        </b>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
<div class="container" style="margin-top: 10px">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-8">
            <?php $this->load->view('home/part/menu') ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="main-menu-panduan" style="font-family: Roboto;font-weight: 300;font-size: 18px;text-decoration: none">
                            <?php foreach ($pages->result() as $hasil) { ?>
                                <i class="icon-book-open"></i> <?php echo $hasil->judul_page; ?>
                                <hr>
                                <?php echo $hasil->isi_page; ?>
                                <hr>
                                <span style="font-size: 13px;color: #9d9d9d;">Last Update : <?php echo $this->apps->time_elapsed_string($hasil->updated_at) ?> </span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <?php $this->load->view('home/part/sidebar') ?>
        </div>
    </div>
</div>

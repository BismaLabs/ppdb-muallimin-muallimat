<div class="container" style="margin-top: 10px">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-8">
            <?php $this->load->view('home/part/menu') ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-content">
                        <div class="main-menu-panduan" style="font-family: Roboto;font-weight: 300;font-size: 18px;text-decoration: none">
                          <a href="<?php echo base_url() ?>panduan/alur-pendaftaran/" style="text-decoration: none">
                              <i class="icon-book-open"></i> Alur Pendaftaran
                          </a>
                          <hr>
                            <a href="<?php echo base_url() ?>panduan/syarat-pendaftaran/" style="text-decoration: none">
                                <i class="icon-book-open"></i>  Persyaratan Pendaftaran
                            </a>
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

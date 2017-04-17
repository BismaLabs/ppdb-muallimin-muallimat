
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
            <div class="col-md-12">
                <?php echo $this->session->flashdata('notif') ?>
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-user-circle-o"></i> Data Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="GET" action="<?php echo base_url('apps/users/search');?>" style="margin-top: 10px">
                            <div class = "input-group">
                           <span class = "input-group-btn">
                              <a href="<?php echo base_url('apps/users/add?source=add&utf8=✓') ?>" class = "btn btn-default btn-md" type = "button">
                                <i class="fa fa-plus-circle"></i> Tambah
                              </a>
                           </span>
                                <input type = "text" name = "q" class = "form-control input-md" placeholder="Masukkan Nama atau Username dan Enter" autocomplete="off" id="articles">
                                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                <span class = "input-group-btn">
                              <button class = "btn btn-default btn-md" type = "submit">
                                 <i class="fa fa-search"></i> Search
                              </button>
                           </span>
                            </div>
                        </form>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" style="margin-top:20px;">
                                <tbody>
                                <thead>
                                <tr>
                                    <th class="text-center" style="color: #000;">No.</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-user-circle-o"></i> NAMA LENGKAP</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-lock"></i> USERNAME</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-calendar-o"></i> UPDATED AT</th>
                                    <th class="text-center" style="color: #000;"><i class="fa fa-cogs"></i> OPTIONS</th>
                                </tr>
                                </thead>
                                <?php
                                if($users != NULL):
                                $no = $this->uri->segment(4) + 1;
                                foreach($users->result() as $hasil):

                                    if($hasil->id_user == $this->session->userdata("apps_id"))
                                    {
                                        $restrict = '<a class="badge badge-success" style="background-color: #358420;" data-toggle="tooltip" data-placement="top" title="Edit" href="'.base_url().'apps/users/edit/'.$this->encryption->encode($hasil->id_user).'"><i class="fa fa-pencil"></i> Edit</a>
                                                     <a class="badge badge-danger" style="background-color: #842020;" data-toggle="tooltip" data-placement="top" title="Delete ?" href="'.base_url().'apps/users/delete/'.$this->encryption->encode($hasil->id_user).'"><i class="fa fa-trash"></i> Delete</a>';
                                    }else{
                                        $restrict = '<span class="badge badge-success" style="background-color: #358420;cursor: not-allowed;filter: alpha(opacity=65);-webkit-box-shadow: none;box-shadow: none;opacity: .65;" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil"></i> Edit</span>
                                                     <span class="badge badge-danger" style="background-color: #842020;cursor: not-allowed;filter: alpha(opacity=65);-webkit-box-shadow: none;box-shadow: none;opacity: .65;" data-toggle="tooltip" data-placement="top" title="Delete ?"><i class="fa fa-trash"></i> Delete</span>';
                                    }

                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $hasil->nama_user ?></td>
                                        <td> <?php echo $hasil->username ?></td>
                                        <td> <?php echo $this->apps->time_elapsed_string($hasil->updated_at) ?></td>
                                        <td class="text-center">
                                            <?php echo $restrict ?>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>
                                </tbody>
                            </table>
                            <?php echo $paging ?>
                            <?php else : ?>
                                </tbody>
                                </table>
                                <div class="alert alert-danger">
                                    <h4><i class="fa fa-info-circle"></i> Warning!</h4>
                                    Maaf!....data tidak ada didatabase sistem
                                </div>
                                <div class="reload" style="text-align: center;margin-bottom: 7px">
                                    <a  href="<?php echo base_url('apps/users?source=reload&utf8=✓') ?>" class="btn btn-danger btn-reset btn-fill" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Reloading..."><i class="fa fa-repeat"></i> Reload Page</a>
                                </div>
                            <?php endif; ?>
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
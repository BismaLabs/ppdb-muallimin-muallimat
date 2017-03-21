<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load library
        $this->load->library('form_validation');
        //load model
        $this->load->model('apps');
    }

    public function index()
    {
        if ($this->apps->apps_id()) {
            //config pagination
            $config['base_url'] = base_url() . 'apps/users/index/';
            $config['total_rows'] = $this->apps->count_users()->num_rows();
            $config['per_page'] = 10;
            //instalasi paging
            $this->pagination->initialize($config);
            //deklare halaman
            $halaman = $this->uri->segment(4);
            $halaman = $halaman == '' ? 0 : $halaman;
            //create data array
            $data = array(
                'title' => 'Users',
                'users' => TRUE,
                'data_users' => $this->apps->index_users($halaman, $config['per_page']),
                'paging' => $this->pagination->create_links()
            );
            if ($data['data_users'] != NULL) {

                $data['users'] = $data['data_users'];

            } else {

                $data['users'] = NULL;

            }
            //load view with data
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/users/data');
            $this->load->view('apps/part/footer');
        } else {
            show_404();
            return FALSE;
        }
    }

    public function search()
    {
        if ($this->apps->apps_id()) {
            $limit = 10;
            $this->load->helper('security');
            $keyword = $this->security->xss_clean($_GET['q']);
            $data['keyword'] = strip_tags($keyword);
            $check = strlen(preg_replace('/[^a-zA-Z]/', '', $keyword));
            if (!empty($keyword) && $check > 2) {
                $offset = (isset($_GET['page'])) ? $this->security->xss_clean($_GET['page']) : 0;
                $total = $this->apps->total_search_users($keyword);
                //config pagination
                $config['base_url'] = base_url() . 'apps/users/search?q=' . $keyword;
                $config['total_rows'] = $total;
                $config['per_page'] = $limit;
                $config['page_query_string'] = TRUE;
                $config['use_page_numbers'] = TRUE;
                $config['display_pages'] = TRUE;
                $config['query_string_segment'] = 'page';
                $config['uri_segment'] = 4;
                //instalasi paging
                $this->pagination->initialize($config);

                $data = array(
                    'title' => 'Users',
                    'users' => TRUE,
                    'data_users' => $this->apps->search_index_users(strip_tags($keyword), $limit, $offset),
                    'paging' => $this->pagination->create_links()
                );
                if ($data['data_users'] != NULL) {
                    $data['users'] = $data['data_users'];
                } else {
                    $data['users'] = '';
                }
                //load view with data
                $this->load->view('apps/part/header', $data);
                $this->load->view('apps/part/sidebar');
                $this->load->view('apps/layout/users/data');
                $this->load->view('apps/part/footer');
            } else {
                redirect('apps/users');
            }
        } else {
            show_404();
            return FALSE;
        }
    }

    public function add()
    {
        if ($this->apps->apps_id()) {
            //create data array
            $data = array(
                'title' => 'Add Users',
                'users' => TRUE,
                'type' => 'add',
                'thumbnail' => 'userfile'
            );
            //load view with data
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/users/add');
            $this->load->view('apps/part/footer');
        } else {
            show_404();
            return FALSE;
        }

    }

    public function edit($id_user)
    {
        if($this->apps->apps_id())
        {
            //get id
            $id_user = $this->encryption->decode($this->uri->segment(4));
            //create data array
            $data = array(
                'title'          => 'Edit Users',
                'users'          => TRUE,
                'type'           => 'edit',
                'thumbnail'      => 'userfile',
                'data_users'     => $this->apps->edit_users($id_user)->row_array()
            );
            //load view with data
            $this->load->view('apps/part/header', $data);
            $this->load->view('apps/part/sidebar');
            $this->load->view('apps/layout/users/edit');
            $this->load->view('apps/part/footer');
        }else{
            show_404();
            return FALSE;
        }
    }

    public function save()
    {
        if($this->apps->apps_id())
        {
            $type              = $this->input->post("type");
            $id['id_user']  = $this->encryption->decode($this->input->post("id_user"));
            $password       = $this->input->post("password");
            $check_username = $this->apps->check_one('tbl_users', array('username' => $this->input->post("username")));
            //check var type
            if($type == "add")
            {
                if($check_username != FALSE)
                {
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Error! Username sudah terdaftar.
			                                                </div>');
                    //redirect halaman
                    redirect('apps/users?source=add&utf8=✓');
                }else {
                    //insert all data
                    //config upload
                    $config = array(
                        'upload_path' => realpath('resources/images/avatar/'),
                        'allowed_types' => 'jpg|png|jpeg',
                        'encrypt_name' => TRUE,
                        'remove_spaces' => TRUE,
                        'overwrite' => TRUE,
                        'max_size' => '5000',
                        'max_width' => '5000',
                        'max_height' => '5000'
                    );
                    //load library upload
                    $this->load->library("upload", $config);
                    //load library lib image
                    $this->load->library("image_lib");

                    $this->upload->initialize($config);
                    if ($this->upload->do_upload("userfile")) {
                        $data_upload = $this->upload->data();

                        /* PATH */
                        $source = realpath('resources/images/avatar/' . $data_upload['file_name']);
                        $destination_thumb = realpath('resources/images/avatar/thumb/');

                        // Permission Configuration
                        chmod($source, 0777);

                        /* Resizing Processing */
                        // Configuration Of Image Manipulation :: Static
                        $img['image_library'] = 'GD2';
                        $img['create_thumb'] = TRUE;
                        $img['maintain_ratio'] = TRUE;

                        /// Limit Width Resize
                        $limit_thumb = 600;

                        // Size Image Limit was using (LIMIT TOP)
                        $limit_use = $data_upload['image_width'] > $data_upload['image_height'] ? $data_upload['image_width'] : $data_upload['image_height'];

                        // Percentase Resize
                        if ($limit_use > $limit_thumb) {
                            $percent_thumb = $limit_thumb / $limit_use;
                        }

                        //// Making THUMBNAIL ///////
                        $img['width'] = $limit_use > $limit_thumb ? $data_upload['image_width'] * $percent_thumb : $data_upload['image_width'];
                        $img['height'] = $limit_use > $limit_thumb ? $data_upload['image_height'] * $percent_thumb : $data_upload['image_height'];

                        // Configuration Of Image Manipulation :: Dynamic
                        $img['thumb_marker'] = '';
                        $img['quality'] = '100%';
                        $img['source_image'] = $source;
                        $img['new_image'] = $destination_thumb;

                        // Do Resizing
                        $this->image_lib->initialize($img);
                        $this->image_lib->resize();
                        $this->image_lib->clear();

                        $insert = array(
                            'nama_user' => $this->input->post("nama"),
                            'username' => $this->input->post("username"),
                            'password' => SHA1(MD5(MD5(SHA1($this->input->post("password"))))),
                            'email_user' => $this->input->post("email"),
                            'foto_user' => $data_upload['file_name'],
                            'created_at' => date("Y-m-d H:i:s")
                        );
                        $this->db->insert("tbl_users", $insert);
                        //deklarasi session flashdata
                        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Disimpan.
			                                                </div>');
                        //redirect halaman
                        redirect('apps/users?source=add&utf8=✓');
                    } else {
                        $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Data Gagal Disimpan ' . $this->upload->display_errors('') . '
			                                                </div>');
                        redirect('apps/users?source=add&utf8=✓');
                    }
                }

            }elseif($type == "edit"){

                if($password == "")
                {

                    if(empty($_FILES['userfile']['name']))
                    {
                        //password kosong dan foto kosong
                        $update = array(
                            'nama_user' => $this->input->post("nama"),
                            'username' => $this->input->post("username"),
                            'email_user' => $this->input->post("email"),
                            'updated_at' => date("Y-m-d H:i:s")
                        );
                        $this->db->update("tbl_users", $update, $id);
                        //deklarasi session flashdata
                        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Diupdate.
			                                                </div>');
                        //redirect halaman
                        redirect('apps/users?source=add&utf8=✓');
                    }else{
                        //hanya password yang kosong
                        //config upload
                        $config = array(
                            'upload_path' => realpath('resources/images/avatar/'),
                            'allowed_types' => 'jpg|png|jpeg',
                            'encrypt_name' => TRUE,
                            'remove_spaces' => TRUE,
                            'overwrite' => TRUE,
                            'max_size' => '5000',
                            'max_width' => '5000',
                            'max_height' => '5000'
                        );
                        //load library upload
                        $this->load->library("upload", $config);
                        //load library lib image
                        $this->load->library("image_lib");

                        $this->upload->initialize($config);
                        if ($this->upload->do_upload("userfile")) {
                            $data_upload = $this->upload->data();

                            /* PATH */
                            $source = realpath('resources/images/avatar/' . $data_upload['file_name']);
                            $destination_thumb = realpath('resources/images/avatar/thumb/');

                            // Permission Configuration
                            chmod($source, 0777);

                            /* Resizing Processing */
                            // Configuration Of Image Manipulation :: Static
                            $img['image_library'] = 'GD2';
                            $img['create_thumb'] = TRUE;
                            $img['maintain_ratio'] = TRUE;

                            /// Limit Width Resize
                            $limit_thumb = 600;

                            // Size Image Limit was using (LIMIT TOP)
                            $limit_use = $data_upload['image_width'] > $data_upload['image_height'] ? $data_upload['image_width'] : $data_upload['image_height'];

                            // Percentase Resize
                            if ($limit_use > $limit_thumb) {
                                $percent_thumb = $limit_thumb / $limit_use;
                            }

                            //// Making THUMBNAIL ///////
                            $img['width'] = $limit_use > $limit_thumb ? $data_upload['image_width'] * $percent_thumb : $data_upload['image_width'];
                            $img['height'] = $limit_use > $limit_thumb ? $data_upload['image_height'] * $percent_thumb : $data_upload['image_height'];

                            // Configuration Of Image Manipulation :: Dynamic
                            $img['thumb_marker'] = '';
                            $img['quality'] = '100%';
                            $img['source_image'] = $source;
                            $img['new_image'] = $destination_thumb;

                            // Do Resizing
                            $this->image_lib->initialize($img);
                            $this->image_lib->resize();
                            $this->image_lib->clear();

                            $update = array(
                                'nama_user' => $this->input->post("nama"),
                                'username' => $this->input->post("username"),
                                'email_user' => $this->input->post("email"),
                                'foto_user' => $data_upload['file_name'],
                                'updated_at' => date("Y-m-d H:i:s")
                            );
                            $this->db->update("tbl_users", $update, $id);
                            //deklarasi session flashdata
                            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Diupdate.
			                                                </div>');
                            //redirect halaman
                            redirect('apps/users?source=add&utf8=✓');
                        } else {
                            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Data Gagal Diupdate ' . $this->upload->display_errors('') . '
			                                                </div>');
                            redirect('apps/users?source=add&utf8=✓');
                        }
                    }

                }else{

                    if(empty($_FILES['userfile']['name']))
                    {
                        //password tidak kosong tapi foto kosong
                        $update = array(
                            'nama_user'  => $this->input->post("nama"),
                            'username'   => $this->input->post("username"),
                            'password'   => SHA1(MD5(MD5(SHA1($this->input->post("password"))))),
                            'email_user' => $this->input->post("email"),
                            'updated_at' => date("Y-m-d H:i:s")
                        );
                        $this->db->update("tbl_users", $update, $id);
                        //deklarasi session flashdata
                        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Diupdate.
			                                                </div>');
                        //redirect halaman
                        redirect('apps/users?source=add&utf8=✓');
                    }else{
                        //password tidak kosong dan foto tidak kosong
                        //config upload
                        $config = array(
                            'upload_path' => realpath('resources/images/avatar/'),
                            'allowed_types' => 'jpg|png|jpeg',
                            'encrypt_name' => TRUE,
                            'remove_spaces' => TRUE,
                            'overwrite' => TRUE,
                            'max_size' => '5000',
                            'max_width' => '5000',
                            'max_height' => '5000'
                        );
                        //load library upload
                        $this->load->library("upload", $config);
                        //load library lib image
                        $this->load->library("image_lib");

                        $this->upload->initialize($config);
                        if ($this->upload->do_upload("userfile")) {
                            $data_upload = $this->upload->data();

                            /* PATH */
                            $source = realpath('resources/images/avatar/' . $data_upload['file_name']);
                            $destination_thumb = realpath('resources/images/avatar/thumb/');

                            // Permission Configuration
                            chmod($source, 0777);

                            /* Resizing Processing */
                            // Configuration Of Image Manipulation :: Static
                            $img['image_library'] = 'GD2';
                            $img['create_thumb'] = TRUE;
                            $img['maintain_ratio'] = TRUE;

                            /// Limit Width Resize
                            $limit_thumb = 600;

                            // Size Image Limit was using (LIMIT TOP)
                            $limit_use = $data_upload['image_width'] > $data_upload['image_height'] ? $data_upload['image_width'] : $data_upload['image_height'];

                            // Percentase Resize
                            if ($limit_use > $limit_thumb) {
                                $percent_thumb = $limit_thumb / $limit_use;
                            }

                            //// Making THUMBNAIL ///////
                            $img['width'] = $limit_use > $limit_thumb ? $data_upload['image_width'] * $percent_thumb : $data_upload['image_width'];
                            $img['height'] = $limit_use > $limit_thumb ? $data_upload['image_height'] * $percent_thumb : $data_upload['image_height'];

                            // Configuration Of Image Manipulation :: Dynamic
                            $img['thumb_marker'] = '';
                            $img['quality'] = '100%';
                            $img['source_image'] = $source;
                            $img['new_image'] = $destination_thumb;

                            // Do Resizing
                            $this->image_lib->initialize($img);
                            $this->image_lib->resize();
                            $this->image_lib->clear();

                            $update = array(
                                'nama_user' => $this->input->post("nama"),
                                'username' => $this->input->post("username"),
                                'password'   => SHA1(MD5(MD5(SHA1($this->input->post("password"))))),
                                'email_user' => $this->input->post("email"),
                                'foto_user' => $data_upload['file_name'],
                                'updated_at' => date("Y-m-d H:i:s")
                            );
                            $this->db->update("tbl_users", $update, $id);
                            //deklarasi session flashdata
                            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Diupdate.
			                                                </div>');
                            //redirect halaman
                            redirect('apps/users?source=add&utf8=✓');
                        } else {
                            $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Data Gagal Diupdate ' . $this->upload->display_errors('') . '
			                                                </div>');
                            redirect('apps/users?source=add&utf8=✓');
                        }
                    }
                }

            }else{
                $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Variable Type not value
			                                                </div>');
                redirect('apps/users?source=edit&utf8=✓');
            }
        }else{
            show_404();
            return FALSE;
        }
    }

    public function delete()
    {
        if($this->apps->apps_id())
        {
            $id     = $this->encryption->decode($this->uri->segment(4));
            $query  = $this->db->query("SELECT id_user, foto_user FROM tbl_users WHERE id_user ='$id'")->row();
            unlink(realpath('resources/images/avatar/'.$query->thumbnail));
            unlink(realpath('resources/images/avatar/thumb/'.$query->thumbnail));
            $key['id_user'] = $id;
            $this->db->delete("tbl_users", $key);
            $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check"></i> Data Berhasil Dihapus.
			                                                </div>');
            //redirect halaman
            redirect('apps/users?source=delete&utf8=✓');
        }else{
            show_404();
            return FALSE;
        }
    }


}
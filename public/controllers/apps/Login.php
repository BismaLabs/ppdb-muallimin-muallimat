<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : PPDB Web Application.
 * @author   : Fika Ridaul Maulayya <ridaulmaulayya@gmail.com>
 * @since    : 2017
 * @license  : https://maulayya.com/portofolio/ppdb-muallimin-muallimat/
 */
class Login extends CI_Controller {

    var $CI = NULL;

    public function __construct()
    {
        parent::__construct();
        // get CI's object
        $this->CI =& get_instance();
        //load library
        $this->load->library('form_validation');
        //load model
        $this->load->model('apps');
    }

    public function index()
    {
        if($this->apps->apps_id())
        {
            //redirect dahsboard
            redirect('apps/dashboard/');

        }else {

            //check dengan form validation
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible">
                                                               <i class="fa fa-exclamation-circle"></i> {field} is required.
                                                              </div>');
            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post("username", TRUE);
                $password = SHA1(MD5(MD5(SHA1($this->input->post('password', TRUE)))));
                //checking data via model
                $checking = $this->apps->check_all('tbl_users', array('username' => $username), array('password' => $password));
                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'apps_id' => $apps->id_user,
                            'apps_username' => $apps->username,
                            'apps_nama' => $apps->nama_user,
                            'apps_email' => $apps->email_user,
                            'apps_foto' => $apps->foto_user
                        );
                        //create session kcfinder
                        session_start();
                        $_SESSION['ses_kcfinder']=array();
                        $_SESSION['ses_kcfinder']['disabled'] = false;
                        $_SESSION['ses_kcfinder']['uploadURL'] = "../../content_upload";
                        //set session userdata
                        $this->CI->session->set_userdata($session_data);

                        //calback sesion
                        //return TRUE;

                        redirect('apps/dashboard/');
                    }
                } else {
                    //create data array
                    $data = array(
                        'error' => '<div class="alert alert-danger alert-dismissible">
                                      <i class="fa fa-exclamation-circle"></i> Username or Password is wrong
                                    </div>',
                        'title' => 'Login &rsaquo; Machine Development.'
                    );
                    $this->load->view('apps/layout/auth/login', $data);
                }
            } else {
                //create data array
                $data = array(
                    'title' => 'Login &rsaquo; Machine Development.'
                );
                $this->load->view('apps/layout/auth/login', $data);
            }

        }
    }

    public function forgot()
    {
        if($this->apps->apps_id())
        {
            redirect('apps/dashboard/');
        }else{
            //get form input
            $email_address = $check_video  = $this->apps->check_one('tbl_users', array('email_user' => $this->input->post("email")));
            //set form validation
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
            $this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible">
                                                                <i class="fa fa-exclamation-circle"></i> {field} is required.
                                                              </div>');
            if($this->form_validation->run() == TRUE)
            {
                if($email_address != FALSE)
                {
                    $email_me  = mails('smtp_user');
                    $nama_me   = systems('admin_title');
                    $email_to  = $this->input->post("email");
                    $query     = $this->db->query("SELECT id_user FROM tbl_users WHERE email_user='$email_to'")->row();
                    $this->load->helper('string');
                    $password= random_string('alnum', 6);
                    $this->db->where('id_user', $query->id_user);
                    $this->db->update('tbl_users',array('password'=>SHA1(MD5(MD5(SHA1($password))))));
                    $config = array(
                        'protocol'  => mails('protocol'),
                        'smtp_host' => mails('smtp_host'),
                        'smtp_user' => mails('smtp_user'),
                        'smtp_pass' => mails('smtp_password'),
                        'smtp_port' => mails('smtp_port'),
                        'mailtype'  => 'html',
                        'starttls'  => true,
                        'newline'   => "\r\n"
                    );

                    $this->load->library('email', $config);
                    $this->email->from($email_me, $nama_me);
                    $this->email->to($email_to); // ganti dengan email tujuan
                    $this->email->subject('Reset Password');
                    $data = array( 'message' => "Permintaan password baru Anda adalah : <b>".$password."</b>");
                    $email = $this->load->view('apps/layout/auth/template_reset_password', $data, TRUE);

                    $this->email->message( $email );

                    if ($this->email->send()) {
                        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check-circle"></i> Success! silahkan check email anda.
			                                                </div>');
                        //redirect halaman
                        redirect('apps/login/forgot?source=send&utf8=✓');
                    }
                    else {
                        show_error($this->email->print_debugger(), true);
                    }
                }else{
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Error! email tidak terdaftar.
			                                                </div>');
                    //redirect halaman
                    redirect('apps/login/forgot?source=send&utf8=✓');
                }
            }else{
                $this->load->view('apps/layout/auth/forgot');
            }
        }

    }

}

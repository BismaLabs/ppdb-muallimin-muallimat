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
        $this->load->model('users');
    }

    public function index()
    {
        if($this->users->users_id())
        {
            //redirect dahsboard
            redirect('users/dashboard/');

        }else {

            //check dengan form validation
            $this->form_validation->set_rules('kode_pendaftaran', 'Kode Pendaftaran', 'trim|required');
            $this->form_validation->set_message('required', '<div class="alert alert-danger alert-dismissible">
                                                               <i class="fa fa-exclamation-circle"></i> {field} wajib diisi.
                                                              </div>');
            if ($this->form_validation->run() == TRUE) {
                $kode_pendaftaran = $this->input->post("kode_pendaftaran", TRUE);
                //checking data via model
                $checking = $this->users->check_one('tbl_siswa', array('kode_pendaftaran' => $kode_pendaftaran));
                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $users) {

                        $session_data = array(
                            'users_id'         => $users->kode_pendaftaran,
                            'nama_lengkap'     => $users->nama_lengkap,
                            'kode_pendaftaran'     => $users->kode_pendaftaran,
                            'jenis_kelamin'    => $users->jenis_kelamin
                        );
                        //set session userdata
                        $this->CI->session->set_userdata($session_data);

                        //calback sesion
                        //return TRUE;

                        redirect('users/dashboard/');
                    }
                } else {
                    //create data array
                    $data = array(
                        'error' => '<div class="alert alert-danger alert-dismissible">
                                      <i class="fa fa-exclamation-circle"></i> Kode Pendaftaran Salah!
                                    </div>'
                    );
                    $this->load->view('users/layout/auth/login', $data);
                }
            } else {
                //create data array
                $data = array(
                    'title' => 'Login Siswa.'
                );
                $this->load->view('users/layout/auth/login', $data);
            }

        }
    }

    public function forgot()
    {
        if($this->users->users_id())
        {
            redirect('users/dashboard/');
        }else{
            //get form input
            $email_address  = $this->users->check_one('tbl_siswa', array('email' => $this->input->post("email")));
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
                    $query     = $this->db->query("SELECT kode_pendaftaran,email FROM tbl_siswa WHERE email='$email_to'")->row();
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
                    $data = array( 'message' => "Permintaan kode pendaftaran Anda adalah : <b>".$query->kode_pendaftaran."</b>");
                    $email = $this->load->view('apps/layout/auth/template_reset_password', $data, TRUE);

                    $this->email->message( $email );

                    if ($this->email->send()) {
                        $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-check-circle"></i> Success! silahkan check email anda.
			                                                </div>');
                        //redirect halaman
                        redirect('users/login/forgot?source=send&utf8=✓');
                    }
                    else {
                        show_error($this->email->print_debugger(), true);
                    }
                }else{
                    $this->session->set_flashdata('notif', '<div class="alert alert-danger alert-dismissible" style="font-family:Roboto">
			                                                    <i class="fa fa-exclamation-circle"></i> Error! email tidak terdaftar.
			                                                </div>');
                    //redirect halaman
                    redirect('users/login/forgot?source=send&utf8=✓');
                }
            }else{
                $this->load->view('users/layout/auth/forgot');
            }
        }

    }

}

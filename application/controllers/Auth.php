<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('security');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['judul'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {

            if (password_verify($password, $user['password'])) {
            } else {

                $this->session->set_flashdata('message', 'Passowrd tidak Valid');
                redirect('data_penitipan/index');
            }
        } else {
            $this->session->set_flashdata('message', 'Username atau Passowrd tidak Valid');
            redirect('auth');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('password');

        $this->session->set_flashdata('messageout', 'Anda telah berhasil logout.');
        redirect('auth/index');
    }
}

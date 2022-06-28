<?php

class Home extends CI_Controller{
    public function index()
    {
        $data['judul'] = 'Home Page';
        $this->load->view('home/index');
        $this->load->view('templates/footer');
        $this->load->view('templates/header', $data);


    }
}

?>
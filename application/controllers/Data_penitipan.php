<?php

    class Data_penitipan extends CI_Controller {
        
        public function __construct()
        {
         parent::__construct();
         $this->load->model('Data_penitipan_model');
         $this->load->library('form_validation');

        }

        public function index()
        {
         $data['judul'] = 'Data Penitipan';
         $data['data_penitipan'] = $this->Data_penitipan_model->getAllData_penitipan();   
        $this->load->view('templates/header',$data);
        $this->load->view('data_penitipan/index',$data);
        $this->load->view('templates/footer');
        

        }

        public function tambah()
        {

         $data['judul'] = 'Form tambah Data Panti';
         $this->form_validation->set_rules('nama','Nama','required');
         $this->form_validation->set_rules('notlp','Notlp','required|numeric');
         $this->form_validation->set_rules('email','Email','required|valid_email');

         
         if ($this->form_validation->run() == FALSE)
         {
             $this->load->view('templates/header',$data);
             $this->load->view('data_penitipan/tambah',$data);
             $this->load->view('templates/footer');
                 
         } else{

            $this->Data_penitipan_model->tambahDataPenitipan();
            $this->session->set_flashdata('flash', 'Ditambahkan');

            redirect('Data_penitipan');
         }



        }
        
        public function hapus($id)
        {

            $this->Data_penitipan_model->hapusDataPenitipan($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('data_penitipan');


        }

    }
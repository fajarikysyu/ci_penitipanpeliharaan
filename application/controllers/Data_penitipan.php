<?php

class Data_penitipan extends CI_Controller
{

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
        if ($this->input->post('keyword')) {
            $data['data_penitipan'] = $this->Data_penitipan_model->cariDataPenitipan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('data_penitipan/index', $data);
        $this->load->view('templates/footer');
    }



    public function tambah()
    {

        $data['judul'] = 'Form tambah Data Penitipan';
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('NM_owner', 'NM_owner', 'required');
        $this->form_validation->set_rules('notlp', 'Notlp', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('pengawas', 'Pengawas', 'required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_penitipan/tambah', $data);
            $this->load->view('templates/footer');
        } else {

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

    public function hapus2()
    {

        $this->db->empty_table('riwayat_penitipan');
        redirect('data_penitipan/riwayat');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Penitipan';
        $data['data_penitipan'] = $this->Data_penitipan_model->getDataPenitipanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('data_penitipan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function riwayat_detail($id)
    {
        $data['judul'] = 'Riwayat Data Penitipan';
        $data['riwayat_penitipan'] = $this->Data_penitipan_model->getRiwayatPenitipanByNama($id);
        $this->load->view('templates/header', $data);
        $this->load->view('data_penitipan/riwayat_detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {

        $data['judul'] = 'Form Ubah Data Panti';
        $data['data_penitipan'] = $this->Data_penitipan_model->getDataPenitipanById($id);
        $data['pengawas'] = ['Asep Deep', 'Septi Amber'];
        $data['jenis'] = ['Burung', 'Anjing', 'Kucing'];


        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('NM_owner', 'NM_owner', 'required');
        $this->form_validation->set_rules('notlp', 'Notlp', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('pengawas', 'Pengawas', 'required');



        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('data_penitipan/ubah', $data);
            $this->load->view('templates/footer');
        } else {

            $this->Data_penitipan_model->ubahDataPenitipan();
            $this->session->set_flashdata('flash', 'Diubah');

            redirect('Data_penitipan');
        }
    }

    public function riwayat()
    {
        $data['judul'] = 'Riwayat Penitipan';
        $data['riwayat_penitipan'] = $this->Data_penitipan_model->getAllRiwayat_penitipan();
        if ($this->input->post('keyword')) {
            $data['riwayat_penitipan'] = $this->Data_penitipan_model->cariRiwayatPenitipan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('data_penitipan/riwayat', $data);
        $this->load->view('templates/footer');
    }

    public function dashboard()
    {
        $data['judul'] = 'Penitipan Peliharaan';
        $this->load->view('templates/header', $data);
        $this->load->view('data_penitipan/dashboard');
        $this->load->view('templates/footer');
    }
}

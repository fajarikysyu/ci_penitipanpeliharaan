<?php

class Data_penitipan_model extends CI_model {
    public function getAllData_penitipan()
    {
        return $this->db->get('data_penitipan')->result_array();

    }
    public function getAllRiwayat_penitipan()
    {
        return $this->db->get('riwayat_penitipan')->result_array();

    }

    public function tambahDataPenitipan()
    {

        $data = array(
            "nama" => $this->input->post('nama', true),
            "notlp" => $this->input->post('notlp', true),
            "email" => $this->input->post('email', true),
            "jenis" => $this->input->post('jenis', true),
            "pengawas" => $this->input->post('pengawas', true),

            
            
    );

        $this->db->insert('data_penitipan',$data);
        $this->db->insert('riwayat_penitipan',$data);

    }

    public function hapusDataPenitipan($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('data_penitipan');

    }

    public function hapusRiwayatPenitipan($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('riwayat_penitipan');

    }
    public function getDataPenitipanById($id)
    {

        return $this->db->get_where('data_penitipan',['id' => $id])->row_array();

        
        

    }
    public function getRiwayatPenitipanByNama($id)
    {

        return $this->db->get_where('riwayat_penitipan',['id' => $id])->row_array();

        
        

    }

    public function ubahDataPenitipan()
    {

        $data = array(
            "nama" => $this->input->post('nama', true),
            "notlp" => $this->input->post('notlp', true),
            "email" => $this->input->post('email', true),
            "jenis" => $this->input->post('jenis', true),
            "pengawas" => $this->input->post('pengawas', true),

            
            
    );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('data_penitipan',$data);

    }

    public function cariDataPenitipan()
    {

        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jenis', $keyword);
        $this->db->or_like('pengawas', $keyword);


        return $this->db->get('data_penitipan')->result_array();

    }
    public function cariRiwayatPenitipan()
    {

        $keyword = $this->input->post('keyword',true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('jenis', $keyword);
        $this->db->or_like('pengawas', $keyword);

        return $this->db->get('riwayat_penitipan')->result_array();


    }
    

}
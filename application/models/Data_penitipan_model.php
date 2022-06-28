<?php

class Data_penitipan_model extends CI_model {
    public function getAllData_penitipan()
    {
        return $this->db->get('data_penitipan')->result_array();
    }

    public function tambahDataPenitipan()
    {

        $data = array(
            "nama" => $this->input->post('nama', true),
            "notlp" => $this->input->post('notlp', true),
            "email" => $this->input->post('email', true),
            "jenis" => $this->input->post('jenis', true),
            
    );

        $this->db->insert('data_penitipan',$data);

    }

    public function hapusDataPenitipan($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('data_penitipan');

    }

}
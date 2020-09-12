<?php

class Lapor_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        return $this->db->get('tbl_lapor_sigap')->result();
    }

    public function getById($id)
    {
        return $this->db->get_where('tbl_lapor_sigap', ['id' => $id])->row();
    }

    public function proses($nama, $telephon, $gejala, $alamat, $penanganan)
    {
        $data = array(
            'nama' => $nama,
            'telephon' => $telephon,
            'alamat' => $alamat,
            'gejala' => $gejala,
            'penanganan' => $penanganan
        );
        $this->db->insert('tbl_lapor_sigap', $data);
    }

    public function update($data, $id)
    {
        return $this->db->update('tbl_lapor_sigap', $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete('tbl_lapor_sigap', array('id'  => $id));
    }
}

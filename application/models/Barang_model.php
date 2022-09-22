<?php

class Barang_model extends CI_Model
{
    public function getBarang($id = null)
    {
        if ($id == null) {
            $this->db->select('*');
            $this->db->from('barang');
            return $this->db->get()->result_array();
        } else {
            $this->db->select('*');
            $this->db->from('barang');
            $this->db->where("kode_barang = '" . $id . "'");
            return $this->db->get()->result_array();
        }
    }

    public function deleteBarang($id)
    {
        $this->db->delete('barang', ['kode_barang' => $id]);
        return $this->db->affected_rows();
    }

    public function createBarang($data)
    {
        $this->db->insert('barang', $data);
        return $this->db->affected_rows();
    }

    public function updateBarang($data, $id)
    {
        $this->db->update('barang', $data, ['kode_barang' => $id]);
        return $this->db->affected_rows();
    }
}

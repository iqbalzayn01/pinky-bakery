<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
    // Delete Member: Start
    public function deleteMember($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('user', ['id' => $id]);
    }
    // Delete Member: End


    // Delete Member: Start
    public function deleteOrder($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete('transaksi', ['id' => $id]);
    }
    // Delete Member: End


    public function getAllAdmin()
    {
        $this->db->get_where('user', ['role_id' => 1]);
        $this->db->where('role_id =', 1);
        return $this->db->get('user')->result_array();
    }


    // Add Product: Start
    public function addProduct()
    {
        $data = [
            'nama_produk' => $this->input->post('nama_produk'),
            'harga' => $this->input->post('harga')
        ];

        $this->db->insert('produk', $data);
    }
    // Add Product: End
}
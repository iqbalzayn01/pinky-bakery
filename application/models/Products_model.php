<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Products_model extends CI_Model {
    public function addProduct()
    {
        $data = [
            'nama_produk' => $this->input->post('nama_produk'),
            'keterangan' => $this->input->post('keterangan'),
            'harga' => $this->input->post('harga'),
            'stok' => $this->input->post('stok'),
            'gambar' => 'default-cake.jpg'
        ];

        return $this->db->insert('produk', $data);
    }

    public function deleteProduct($id) 
    {
        return $this->db->delete('produk', ['id' => $id]);
    }

    public function getProducts()
    {
        return $this->db->get('produk')->result_array();
    }

    public function tampil_data(){
        return $this->db->get('produk');
    }

}
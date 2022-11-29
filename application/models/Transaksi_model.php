<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

    // Add Transaksi: Start
    public function addtransaksi()
    {
        $data = [
            'kuantitas' => $this->input->post('kuantitas', true),
            'tgl_transaksi' => time(),
            'keterangan' => $this->input->post('keterangan', true),
            'email' => $this->session->userdata('email'),
            'produk_id' => $this->input->post('produk_id', true),
        ];

        return $this->db->insert('transaksi', $data);
    }
    // Add Transaksi: End


    public function getTransaksiUser()
    {
        $query = "SELECT `transaksi`.`id`, `user`.`name`, `transaksi`.`email`, `produk`.`nama_produk`, `transaksi`.`kuantitas`, `produk`.`harga`, (`transaksi`.`kuantitas` * `produk`.`harga`) as total_harga, `transaksi`.`tgl_transaksi`, `transaksi`.`keterangan` FROM `transaksi` 
                INNER JOIN `user` ON `transaksi`.`email` = `user`.`email`
                INNER JOIN `produk` ON `transaksi`.`produk_id` = `produk`.`id`";
        return $this->db->query($query)->result_array();
    }


    public function deleteOrder($id)
    {
        return $this->db->delete('transaksi', ['id' => $id]);
    }


    public function deleteTransaksi($id)
    {
        return $this->db->delete('transaksi', ['id' => $id]);
    }

}
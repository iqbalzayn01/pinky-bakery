<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function getAllUserName()
    {
        $this->db->get_where('user', ['role_id' => 1]);
        $this->db->where('role_id !=', 1);
        return $this->db->get('user')->result_array();
    }


    // Add Transaksi: Start
    public function addtransaksi()
    {
        $id = $this->session->userdata['user_id'];
        $data = [
            'kuantitas' => $this->input->post('kuantitas', true),
            'tgl_transaksi' => time(),
            'keterangan' => $this->input->post('keterangan', true),
            'user_id' => $id,
            'produk_id' => $this->input->post('produk_id', true),
        ];

        return $this->db->insert('transaksi', $data);
    }
    // Add Transaksi: End


    public function getTransaksi()
    {
        return $this->db->get('transaksi')->result_array();
    }


    public function getProduk()
    {
        return $this->db->get('produk')->result_array();
    }

}
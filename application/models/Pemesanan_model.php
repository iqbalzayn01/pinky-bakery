<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
    public function getPemesanan()
    {
        return $this->db->get('pemesanan')->result_array();
    }

    public function getDataWhere($table, $where)
    {
        $this->db->where($where);
        return $this->db->get($table);
    }

     public function insertData($table, $data)
    {
        $this->db->insert($table, $data);
    }

    public function showtemp($where)
    {
        return $this->db->get('temp', $where);
    }

    public function deleteData($table)
    {
        return $this->db->truncate($table);
    }

    // public function getJoinedData($id_user, $id_produk) 
    // {
    //     $this->db->select('user.*, pemesanan.*, produk.*, temp.*');
    //     $this->db->from('user');
    //     $this->db->join('pemesanan', 'user.id = pemesanan.id_user', 'left');
    //     $this->db->join('temp', 'temp.id_user = user.id', 'left');
    //     $this->db->join('produk', 'temp.id_produk = produk.id', 'left');
    //     $this->db->where('user.id', $id_user);
    //     $this->db->where('produk.id', $id_produk);
    //     $query = $this->db->get();
    //     return $query->result_array();
    // }

    public function getJoinedData($id_user)
    {
        $this->db->select('user.*, produk.*, temp.*, pemesanan.*');
        $this->db->from('user');
        $this->db->join('temp', 'user.id = temp.id_user', 'left');
        $this->db->join('produk', 'temp.id_produk = produk.id', 'left');
        $this->db->join('pemesanan', 'user.id = pemesanan.id_user', 'left');
        $this->db->where('user.id', $id_user);
        $query = $this->db->get();
        return $query->result_array();
    }


    public function getJoined2Data($id_user, $id_produk) 
    {
        $this->db->select('user.*, pemesanan.*, produk.*, temp.*');
        $this->db->from('user');
        $this->db->join('pemesanan', 'user.id = pemesanan.id_user', 'left');
        $this->db->join('temp', 'temp.id_user = user.id', 'left');
        $this->db->join('produk', 'temp.id_produk = produk.id', 'left');
        $this->db->where('user.id', $id_user);
        $this->db->where('produk.id', $id_produk);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row_array(); // Menggunakan row_array() untuk mengembalikan satu baris hasil query dalam bentuk array
        } else {
            return null;
        }
    }



    public function getAllTempData($id_user) {
        $this->db->where('id_user', $id_user);
        $query = $this->db->get('temp');
        return $query->result_array();
    }




    public function generateNoPemesanan() {
        $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $length = 10;
        $no_pemesanan = '';
        
        for ($i = 0; $i < $length; $i++) {
            $no_pemesanan .= $chars[rand(0, strlen($chars) - 1)];
        }
        
        return $no_pemesanan;
    }
}
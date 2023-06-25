<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Pemesanan_model extends CI_Model
{
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
}
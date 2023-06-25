<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    // Add product
    public function addProduct()
    {
        $id_produk = $this->uri->segment(3);
        $data['user'] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $id_user = $data['user']['id'];
        //memilih data buku yang untuk dimasukkan ke tabel temp/keranjang melalui variabel $isi
        $d = $this->db->query("Select * from produk where id='$id_produk'")->row();

        //berupa data2 yang akan disimpan ke dalam tabel temp/keranjang
        $isi = [
            'id_user' => $id_user,
            'email' => $this->session->userdata('email'),
            'id_produk' => $id_produk,
            'nama_produk' => $d->nama_produk,
            'harga' => $d->harga,
            'gambar' => $d->gambar,
            'tgl_pemesanan' => date('Y-m-d H:i:s'),
        ];

        //cek apakah produk yang di klik pesan sudah ada di keranjang
        $temp = $this->Pemesanan_model->getDataWhere('temp', ['id_produk' => $id_produk])->num_rows();
        $userid = $this->session->userdata('id_user');

        //insert data to table temp
        $this->Pemesanan_model->insertData('temp', $isi);

        //pesan ketika berhasil memasukkan produk ke keranjang
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-message" role="alert">Product successfully added to the cart. </div>');
        redirect(base_url() . 'user');
    }

    // Cart
    public function cart()
    {
        $data["title"] = "Cart";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $id_user = $data['user']['id'];

        $dtb = $this->Pemesanan_model->showtemp(['id_user' => $id_user])->num_rows();

        if ($dtb < 1) {
            $this->session->set_flashdata('message', '<div class="alert alert-massege alert-danger" role="alert">Tidak ada product dikeranjang</div>');
            redirect(base_url());
        } else {
            $data['temp'] = $this->db->query("select id_produk, nama_produk, harga, gambar, tgl_pemesanan, from temp where id_user='$id_user'")->result_array();
        }
        
        $this->load->view("templates/user/user-header", $data);
        $this->load->view("templates/user/user-sidebar", $data);
        $this->load->view("templates/user/user-topbar", $data);
        $this->load->view("pemesanan/cart", $data);
        $this->load->view("templates/user/user-footer");
        
    }
}
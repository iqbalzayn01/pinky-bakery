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
            $this->session->set_flashdata('message', '<div class="alert alert-massege alert-danger" role="alert">There are no products in the shopping cart.</div>');
            redirect(base_url() . 'user');
        } else {
            $this->db->where('id_user', $id_user);
            $query = $this->db->get('temp');
            $data['temp'] = $query->result_array();
        }
        
        $this->load->view("templates/user/user-header", $data);
        $this->load->view("templates/user/user-sidebar", $data);
        $this->load->view("templates/user/user-topbar", $data);
        $this->load->view("pemesanan/cart", $data);
        $this->load->view("templates/user/user-footer");
        
    }

    // Checkout
    public function checkout()
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $id_user = $data['user']['id'];
        $data["temp"] = $this->db->get_where('temp', ['id_user' => $id_user])->result_array();

        $data_produk = array();
        $total = 0;
        foreach ($data["temp"] as $row) {
            // Mengecek apakah nama_produk sudah ada di array $data_produk
            $index = array_search($row['nama_produk'], array_column($data_produk, 'nama_produk'));
            if ($index !== false) {
                // Jika nama_produk sudah ada, tambahkan jumlah dan update subtotal
                $data_produk[$index]['jumlah'] += 1;
                $data_produk[$index]['subtotal'] += $row['harga'];
            } else {
                // Jika nama_produk belum ada, tambahkan ke array $data_produk
                $data_produk[] = [
                    'nama_produk' => $row['nama_produk'],
                    'harga' => $row['harga'],
                    'jumlah' => 1,
                    'subtotal' => $row['harga'],
                    'tgl_pemesanan' => $row['tgl_pemesanan']
                ];
            }
            $total += $row['harga'];
        }

        // Ambil data dari formulir checkout
        $nama = $this->input->post('nama');
        $no_telp = $this->input->post('no_telp');
        $alamat_kirim = $this->input->post('alamat_kirim');

        // Simpan data ke dalam tabel pemesanan
        $data_pemesanan = [
            'no_pemesanan' => $this->Pemesanan_model->generateNoPemesanan(),
            'id_user' => $id_user,
            'total' => $total,
            'tgl_pemesanan' => date('Y-m-d H:i:s'),
            'alamat_kirim' => $alamat_kirim,
            'no_telp' => $no_telp,
            // tambahkan kolom-kolom lain yang perlu disimpan
        ];

        $this->db->insert('pemesanan', $data_pemesanan);
        redirect(base_url() . 'pemesanan/pembayaran');
    }

    // Pembayaran
    public function pembayaran() 
    {
        // $data["title"] = "Pembayaran";
        // $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        // $id_user = $data['user']['id'];
        // $data["pemesanan"] = $this->Pemesanan_model->getPemesanan();
        // $data["produk"] = $this->db->get('produk')->result_array();
        // $data["pembayaran"] = array();

        // foreach ($data["produk"] as $produk) {
        //     $id_produk = $produk["id"];
        //     $pembayaran = $this->Pemesanan_model->getJoinedData($id_user, $id_produk);
        //     $data["pembayaran"] = array_merge($data["pembayaran"], $pembayaran);
        // }

        $data["title"] = "Pembayaran";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data["pemesanan"] = $this->db->get('pemesanan')->row_array();
        $id_user = $data['user']['id'];
        $data["pembayaran"] = $this->Pemesanan_model->getJoinedData($id_user);

        $this->load->view("templates/user/user-header", $data);
        $this->load->view("templates/user/user-sidebar", $data);
        $this->load->view("templates/user/user-topbar", $data);
        $this->load->view("pemesanan/pembayaran", $data);
        $this->load->view("templates/user/user-footer");
    }

    // Export To PDF Pembayaran
    public function exportToPdf()
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $id_user = $data['user']['id'];
        $data['title'] = "Cetak Bukti Pembayaran";
        $data["pemesanan"] = $this->db->get('pemesanan')->row_array();
        $data["pembayaran"] = $this->Pemesanan_model->getJoinedData($id_user);
        $data_produk = array();
        $total = 0;

        foreach ($data["pembayaran"] as $row) {
            $index = array_search($row['nama_produk'], array_column($data_produk, 'nama_produk'));
            if ($index !== false) {
                $data_produk[$index]['jumlah'] += 1;
                $data_produk[$index]['subtotal'] += $row['harga'];
            } else {
                $data_produk[] = [
                    'no_pemesanan' => $row['no_pemesanan'],
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'nama_produk' => $row['nama_produk'],
                    'harga' => $row['harga'],
                    'jumlah' => 1,
                    'subtotal' => $row['harga'],
                    'tgl_pemesanan' => $row['tgl_pemesanan']
                ];
            }
            $total += $row['harga'];
        }

        $data['data_produk'] = $data_produk;
        $data['total'] = $total;

        // Load library PDF
        $this->load->library('pdf');

        // Load view buktibayar-pdf
        $html = $this->load->view('pemesanan/buktibayar-pdf', $data, true);

        // Convert to PDF
        $this->pdf->load_html($html);
        $this->pdf->render();
        $output = $this->pdf->output();

        // Set nama file dan tampilkan PDF
        $filename = "bukti-bayar-$id_user.pdf";
        file_put_contents($filename, $output);
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . filesize($filename));
        readfile($filename);
        unlink($filename);
    }



    // public function bayar() 
    // {
    //     $this->Pemesanan_model->deleteData('temp');
        
    //     redirect(base_url() . 'user');
    // }

    public function bayar()
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $id_user = $data['user']['id'];
        $data["pembayaran"] = $this->Pemesanan_model->getJoinedData($id_user);

        // Save data to the 'laporan' table
        foreach ($data["pembayaran"] as $row) {
            $harga = isset($row['harga']) ? $row['harga'] : 0; // Set default value of 0 if 'harga' is undefined
            $jumlah = isset($row['jumlah']) ? $row['jumlah'] : 1; // Set default value of 1 if 'jumlah' is undefined
            $subtotal = $harga * $jumlah;

            $data = array(
                'no_pemesanan' => $row['no_pemesanan'],
                'name' => $row['name'],
                'email' => $row['email'],
                'nama_produk' => $row['nama_produk'],
                'harga' => $harga,
                'jumlah' => $jumlah,
                'subtotal' => $subtotal,
                'tgl_pemesanan' => $row['tgl_pemesanan']
            );

            $this->db->insert('detail_pemesanan', $data);
        }

        $this->Pemesanan_model->deleteData('pemesanan');
        $this->Pemesanan_model->deleteData('temp');

        redirect(base_url() . 'user');
    }


    public function deleteCartItem($id_temp)
    {
        $this->Pemesanan_model->deleteTempItem($id_temp);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('pemesanan/cart');
    }


}
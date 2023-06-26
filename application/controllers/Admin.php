<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }


    public function index()
    {
        $data["title"] = "Dashboard";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data['nama_produk'] = $this->Products_model->getProducts();
        $data['produk'] = $this->Products_model->tampil_data()->result();
        
        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view("admin/index", $data);
        $this->load->view("templates/admin/menu-footer");
    }


    // Detail Members: Start
    public function detailMembers()
    {
        $data["title"] = "Detail Members";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

        $data['name'] = $this->User_model->getAllUserName();
        
        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view("admin/df-member", $data);
        $this->load->view("templates/admin/menu-footer");
    }
    // Detail Members: End
    

    // Daftar Admin: Start
    public function daftarAdmin()
    {
        $data['title'] = 'Daftar Admin';
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        
        $data['name'] = $this->Admin_model->getAllAdmin();

        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view('admin/df-admin', $data);
        $this->load->view("templates/admin/menu-footer");
    }
    // Daftar Admin: End


    // Profile Admin: Start
    public function profileAdmin()
    {
        $data["title"] = "Profile Admin";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();

        $data['name'] = $this->User_model->getAllUserName();
        
        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view("admin/profile-admin", $data);
        $this->load->view("templates/admin/menu-footer");
    }
    // Profile Admin: End


    // Orders: Start
    public function orders()
    {
        $data["title"] = "Orders";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data['transaksi'] = $this->Transaksi_model->getTransaksiUser();
        
        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view("admin/orders", $data);
        $this->load->view("templates/admin/menu-footer");
    }

    public function deleteOrder($id)
    {
        $this->Transaksi_model->deleteOrder($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('admin/orders');
    }
    // Orders: End
    
    
    // Products: Start
    public function products()
    {
        $data["title"] = "Products";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data['nama_produk'] = $this->Products_model->getProducts();
        
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required|trim');
        $this->form_validation->set_rules('harga', 'Harga', 'required|trim');

        if($this->form_validation->run() == false) {
            $this->load->view("templates/admin/menu-header", $data);
            $this->load->view("templates/admin/sidebar", $data);
            $this->load->view("templates/admin/topbar", $data);
            $this->load->view("admin/products", $data);
            $this->load->view("templates/admin/menu-footer");
        } else {
            $this->Products_model->addProduct();
            $this->session->set_flashdata('nama_produk', '<div class="alert alert-success" role="alert">Congratulation! your order has been created.</div>');
            redirect('admin/products');
        }

    }

    public function deleteProduct($id)
    {
        $this->Products_model->deleteProduct($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('admin');
    }
    // Products: End


    // Method Role: Start
    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view('admin/role', $data);
        $this->load->view("templates/admin/menu-footer");
    }
    // Method Role: End


    // Method Role Access: Start
    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view("templates/admin/menu-footer");
    }
    // Method Role Access: End


    // Method Change Access: Start
    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }
    // Method Change Access: End


    // Method Delete Member: Start
    public function delMember($id)
    {
        $this->Admin_model->deleteMember($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Successfully deleted!</div>');
        redirect('admin/detailMembers');
    }
    // Method Delete Member: End


    public function laporanPenjualan()
    {
        $data["title"] = "Laporan Penjualan";
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $data['detail_pemesanan'] = $this->Pemesanan_model->getLaporan();
        
        $this->load->view("templates/admin/menu-header", $data);
        $this->load->view("templates/admin/sidebar", $data);
        $this->load->view("templates/admin/topbar", $data);
        $this->load->view("admin/laporan-penjualan", $data);
        $this->load->view("templates/admin/menu-footer");
    }

    // Export To PDF Pembayaran
    public function exportLaporanToPdf()
    {
        $data["user"] = $this->db->get_where("user", ["email" => $this->session->userdata("email")])->row_array();
        $id_user = $data['user']['id'];
        $data['title'] = "Laporan Penjualan";
        $data["detail_pemesanan"] = $this->Pemesanan_model->getLaporan();

        // Load library PDF
        $this->load->library('pdf');

        // Load view buktibayar-pdf
        $html = $this->load->view('admin/laporan-penjualan-pdf', $data, true);

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

}
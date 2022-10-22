<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library("form_validation");
    }


    public function login()
    {
        $data["title"] = "Account - Login";
        $this->load->view('templates/auth-header', $data);
        $this->load->view("auth/login");
        $this->load->view('templates/auth-footer');
    }

    
    public function registration()
    {   
        $this->form_validation->set_rules("name", "Name", "required|trim");

        $this->form_validation->set_rules("email", "Email", "required|trim|valid_email|is_unique[user.email]", [
            'is_unique' => 'This email has already registered'
        ]); // |is_unique[user.email]

        $this->form_validation->set_rules("password1", "Password", "required|trim|min_length[3]|matches[password2]", [
            'matches' => 'Password dont match',
            'min_length' => 'Password too short!'
        ]);

        $this->form_validation->set_rules("password2", "Password", "required|trim|matches[password1]");

        if($this->form_validation->run() == false){
            $data["title"] = "Account - Registration";
            $this->load->view('templates/auth-header', $data);
            $this->load->view("auth/registration");
            $this->load->view('templates/auth-footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1, // 0 user activation
                'date_created' => time()
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. Please Login</div>');
            redirect('auth/login');
        }
    }

}
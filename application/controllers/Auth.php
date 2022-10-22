<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function login()
    {
        $this->load->view('templates/auth-header');
        $this->load->view("auth/login");
        $this->load->view('templates/auth-footer');
    }
    
    public function registration()
    {
        $this->load->view('templates/auth-header');
        $this->load->view("auth/registration");
        $this->load->view('templates/auth-footer');
    }

}
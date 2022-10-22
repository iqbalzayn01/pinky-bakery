<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function signup()
    {
        $data["title"] = "Sign Up";
        $this->load->view("templates/header", $data);
        $this->load->view("signup/signup", $data);
        $this->load->view("templates/footer");
    }

}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_controller{

    public function index()
    {
        $this->load->model('model_login');
        $this->model_login->keamanan();
        $this->load->view('admin/welcome_message');
    }
}
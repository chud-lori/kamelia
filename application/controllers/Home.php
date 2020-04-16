<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("user_model");
        if ($this->user_model->isNotLogin()) redirect(site_url('auth/login'));
        if ($this->session->userdata('role') != '2') redirect(site_url('auth/login'));
    }

    public function index(){
        echo "Welcome, Kom";
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_user");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["user"] = $this->M_user->getAll();
        $this->load->view("admin/user/data_user",$data);
    }

    public function detail_user()
    {
        $this->load->view("admin/user/detail_user");
    }

}

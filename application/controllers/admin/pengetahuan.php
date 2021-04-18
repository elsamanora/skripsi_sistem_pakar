<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_pengetahuan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["pengetahuan"] = $this->M_pengetahuan->getAll();
        $this->load->view("admin/pengetahuan/data_pengetahuan",$data);
    }
    // public function tambah() //tambah
    // {
    //     $this->load->view("admin/pengetahuan/tambah_pengetahuan");
    // }
    // public function edit()
    // {
    //     $this->load->view("admin/pengetahuan/edit_pengetahuan");
    // }
}

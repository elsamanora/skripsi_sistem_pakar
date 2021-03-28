<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturan extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_aturan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["aturan"] = $this->M_aturan->getAll();
        $this->load->view("admin/aturan/data_aturan",$data);
    }
    public function tambah()
    {
        $this->load->view("admin/aturan/tambah_aturan");
    }
    public function edit()
    {
        $this->load->view("admin/aturan/edit_aturan");
    }
}

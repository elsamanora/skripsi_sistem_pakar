<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_penyakit");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["penyakit"] = $this->M_penyakit->getAll();
        $this->load->view("admin/penyakit/data_penyakit",$data);
    }

    public function add()
    {
        $this->load->view("admin/Penyakit/tambah_penyakit");
    }
    public function edit()
    {
        $this->load->view("admin/penyakit/edit_penyakit");
    }
    public function delete()
    {

    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aturan extends CI_Controller
{

    public function index()
    {
        $this->load->view("admin/aturan/data_aturan");
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

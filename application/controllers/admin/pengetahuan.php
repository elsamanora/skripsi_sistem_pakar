<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{

    public function index()//komen
    {
        $this->load->view("admin/pengetahuan/data_pengetahuan");
    }
    public function tambah()
    {
        $this->load->view("admin/pengetahuan/tambah_pengetahuan");
    }
    public function edit()
    {
        $this->load->view("admin/pengetahuan/edit_pengetahuan");
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_admin");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["admin"] = $this->M_admin->getAll();
        $this->load->view("admin/admin/data_admin",$data);
    }

    public function tambah()
    {
        $admin = $this->M_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) {
            $admin->save(); 
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            
        }
        $this->load->view("admin/admin/tambah_admin");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin');
       
        $admin = $this->M_admin;
        $validation = $this->form_validation;
        $validation->set_rules($admin->rules());

        if ($validation->run()) { //melakukan validasi
            $admin->update(); //proses menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); //alert success
        }

        $data["admin"] = $admin->getById($id);
        if (!$data["admin"]) show_404();

        $this->load->view("admin/admin/edit_admin",$data);
    }

}

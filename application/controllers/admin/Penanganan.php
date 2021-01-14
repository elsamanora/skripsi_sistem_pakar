<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penanganan extends CI_Controller
{

    public function __construct() // untuk load model dan library form validation
    {
        parent::__construct();
        $this->load->model("admin/M_penanganan");
        $this->load->library('form_validation'); //memvalidasi input pada method tambah dan edit
    }

    public function index()
    {
        $data["penanganan"] = $this->M_penanganan->getAll();
        $this->load->view("admin/penanganan/data_penanganan",$data);
    }

    public function tambah()
    {
        $penanganan = $this->M_penanganan;
        $validation = $this->form_validation;
        $validation->set_rules($penanganan->rules());

        if ($validation->run()) {
            $penanganan->save(); 
            $this->session->set_flashdata('success', 'Berhasil disimpan');   
        }
        $this->load->view("admin/penanganan/tambah_penanganan");  
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/penanganan');
       
        $penanganan = $this->M_penanganan;
        $validation = $this->form_validation;
        $validation->set_rules($penanganan->rules());

        if ($validation->run()) { //melakukan validasi
            $penanganan->update(); //proses menyimpan data
            $this->session->set_flashdata('success', 'Berhasil disimpan'); //alert success
        }

        $data["penanganan"] = $penanganan->getById($id);
        if (!$data["penanganan"]) show_404();

        $this->load->view("admin/penanganan/edit_penanganan",$data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_penanganan->delete($id)) {
            redirect(site_url('admin/penanganan'));
        }
    }
}
